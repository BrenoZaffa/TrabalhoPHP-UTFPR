<!DOCTYPE html>
<html lang="en">
    <?php 
        require('models/home.model.php');
        /*$sql1 = "SELECT nome, ingredientes, preparo FROM receita WHERE receita.fk_email = cliente.'{$emailGravado}'";
        $result1 = mysqli_query($connect,$sql1);
        $receitas = mysqli_fetch_all($result1, MYSQLI_ASSOC);*/
        if(isset($_GET['logout'])){
            unset($_SESSION['login']);
            session_destroy();
            header('Location: index.php');
        }
        require('controllers/minhaReceita.controller.php'); 
    ?>
</html>
