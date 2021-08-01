<?php 
    class user{

        public function logar($email, $senha){
            global $pdo;
            $sql = "SELECT * FROM cliente WHERE email = :email AND senha= :senha";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("email",$email);
            $sql->bindValue("senha",$senha);
            $sql->execute();

            if($sql->rowCount() > 0){
                $dado = $sql->fetch();
                $_SESSION['email']= $dado['email'];
                return true;
            }else{
                return false;
            }
        }

        public function cadastrar($email,$senha,$nome){
            global $pdo;
            $sql = "INSERT INTO cliente(email, nome, senha) VALUES(:email, :nome, :senha)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("email",$email);
            $sql->bindValue("senha",$senha);
            $sql->bindValue("nome",$nome);
            $sql->execute();
        }
    }
