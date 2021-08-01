<?php 
    include "./models/conexaoBDO.php";
    if($_SESSION['email']){
        echo 'testes';
    }else{
        header('Location: controllers/home.controller.php');
    }
?>