<?php
    require 'models/conexaoBDO.php';
    require 'class/user.class.php';

    $usuario = new user();
    $correto=0;
    $email = $nome = $senha = $senhaLogin = $emailLogin = '';
    $errorLogin = array('email'=>'', 'senha'=>'', 'login'=>'');
    $errorCadastro = array('email'=>'', 'senha'=>'', 'nome'=>'');

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
            
            $correto=0;
        }
    }
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
            $usuario->logar($emailLogin,$senhaLogin);
            $correto=0;
        }
        
    }

    require 'views/header.php';
    require 'views/home.php';
    require 'views/footer.php';