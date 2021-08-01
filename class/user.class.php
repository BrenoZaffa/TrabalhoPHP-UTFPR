<?php 
    class user{

        public function logar($email, $senha){
            global $pdo;
            $sql = "SELECT * FROM cliente WHERE email = '{$email}' AND senha='{$senha}'";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("email",$email);
            $sql->bindValue("senha",$senha);
            $sql->execute();

            if($sql->rowCount() > 0){
                $dado = $sql->fetch();

                $dado['email'];
            }
        }
    }
?>