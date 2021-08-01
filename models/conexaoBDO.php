<?php

    session_start();
    $localHost = "localhost";
    $user = "root";
    $pass = "";
    $banco = "trabalho";

    global $pdo;

    try {
        $pdo = new PDO("mysql:dbname=".$banco."; host=".$localHost, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "ERRO: ".$e->getMessage();
        exit;
    }

    

