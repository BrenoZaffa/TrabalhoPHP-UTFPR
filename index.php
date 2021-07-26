<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
    <?php 
        $connect = mysqli_connect('localhost','root','','trabalho');

        if(!$connect){
            echo 'Erro de conexão :' . mysqli_connect_error();
        }
    
        $correto=0;
        $email = $nome = $senha = $senhaLogin = $emailLogin = '';
        $errorLogin = array('email'=>'', 'senha'=>'', 'login'=>'');
        $errorCadastro = array('email'=>'', 'senha'=>'', 'nome'=>'');
        if(isset($_SESSION['Login'])){
            require('minhasreceitas.php');
        }
        else{
            if(isset($_POST['cadastro'])){
                if(empty($_POST['emailCadastro'])){
                    $errorCadastro['email'] = 'insira um email!';
                    $correto=1;
                } else {
                    $email = $_POST['emailCadastro'];
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $errorCadastro['email']= 'Informe um email válido';
                        $correto=1;
                    }
                }
                if(empty($_POST['nomeCadastro'])){
                    $errorCadastro['nome'] ='insira um nome!';
                    $correto=1;
                } else {
                    $nome = $_POST['nomeCadastro'];
                }
                if(empty($_POST['senhaCadastro'])){
                    $errorCadastro['senha'] = 'insira uma senha!';
                    $correto=1;
                } else {
                    $senha = $_POST['senhaCadastro'];
                }
                if($correto==0){
                    
                    $sql = "INSERT INTO cliente(nome,email,senha) VALUES('$nome','$email','$senha')";
                    if(mysqli_query($connect,$sql)){
                        echo '<div class="green-text">Conta criada com sucesso</div>';
                    }else{
                        echo '<div class="red-text">Erro ao criar a conta</div>';
                        header('Location: index.php');
                    }
                    $correto=0;
                }
            }
            if(isset($_POST['entrar'])){
                if(empty($_POST['emailLogin'])){
                    $errorLogin['email'] = 'insira um email!';
                    $correto=1;
                } else{
                    $emailLogin= mysqli_real_escape_string($connect, $_POST['emailLogin']);
                }
                if(empty($_POST['passwordLogin'])){
                    $errorLogin['senha'] = 'insira uma senha!';
                    $correto=1;
                } else {
                    $senhaLogin = mysqli_real_escape_string($connect,$_POST['passwordLogin']);
                }
                if($correto==0){
                    $sql = "SELECT email,senha FROM cliente WHERE email = '{$emailLogin}' AND senha='{$senhaLogin}'";
                    $result = mysqli_query($connect,$sql);
                    if(mysqli_num_rows($result)==0) {
                        $errorLogin['login'] = 'Email ou senha incorreto!';
                    }
                    else{
                        $_SESSION['login']=true;
                        header('Location: minhasreceitas.php');
                    }
                    $correto=0;
                }
                
            }
            require('controllers/home.controller.php');
        }
        
    ?>
</html>