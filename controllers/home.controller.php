<?php
if(isset($_SESSION['email']))
    header('Location: /myReceitas');

class HomeController{
    

    public function cadastrar(){
        require './models/conexaoBDO.php';
        
        $usuario = new user();
        $correto=0;
        $email = $nome = $senha = $senhaLogin = $emailLogin ='';
        $errorCadastro = array('email'=>'', 'senha'=>'', 'nome'=>'');
        $errorLogin = array('email'=>'', 'senha'=>'', 'login'=>'');
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
            $usuario->cadastrar($email,$senha,$nome);
            $email = $senha = $nome = $senhaLogin = $emailLogin = '';
            $errorCadastro = array('email'=>'', 'senha'=>'', 'nome'=>'');
            $correto=0;
        }
        
        require './views/home.php';
    }

    public function logar(){
        require './models/conexaoBDO.php';
        $usuario = new user();
        $correto=0;
        $email = $nome = $senha = $senhaLogin = $emailLogin = '';
        $errorLogin = array('email'=>'', 'senha'=>'', 'login'=>'');
        $errorCadastro = array('email'=>'', 'senha'=>'', 'nome'=>'');
        if(isset($_POST['entrar'])){
            if(empty($_POST['emailLogin'])){
                $errorLogin['email'] = 'insira um email!';
                $correto=1;
            } else{
                $emailLogin= $_POST['emailLogin'];
            }
            if(empty($_POST['passwordLogin'])){
                $errorLogin['senha'] = 'insira uma senha!';
                $correto=1;
            } else {
                $senhaLogin = $_POST['passwordLogin'];
            }
            if($correto==0){
                if($usuario->logar($emailLogin,$senhaLogin) == true){
                    if(isset($_SESSION['email'])){
                        $email = $senha = $nome = $senhaLogin = $emailLogin = '';
                        $errorCadastro = array('email'=>'', 'senha'=>'', 'nome'=>'');
                        header('Location: /myReceitas');
                    } 
                    else
                        require './views/home.php';
                }else{
                    require './views/home.php';
                }
                $correto=0;
            }
            
        }
    }
    
    public function index(){
        require './models/conexaoBDO.php';
        $email = $nome = $senha = $senhaLogin = $emailLogin = '';
        $errorLogin = array('email'=>'', 'senha'=>'', 'login'=>'');
        $errorCadastro = array('email'=>'', 'senha'=>'', 'nome'=>'');
        if(isset($_SESSION['email']))
            header('Location: /myReceitas');
        else
            require './views/home.php';
        
    }
}
    
