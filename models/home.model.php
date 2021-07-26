<?php 
    $connect = mysqli_connect('localhost','root','','trabalho');

    if(!$connect){
        echo 'Erro de conexão :' . mysqli_connect_error();
    }
    
?>
    