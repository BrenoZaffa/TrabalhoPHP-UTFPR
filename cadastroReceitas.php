<!DOCTYPE html>
<html lang="en">
    <?php 
        require('views/headerLogado.php');
        require('models/cadastroReceitas.models.php');
        $correto=0;
        $nomeReceita = $ingredientes = $preparo = '';
        $error = array('nomeReceita'=>'','ingredientes'=>'','preparo'=>'');
        if(isset($_POST['enviarReceita'])){
            if(empty($_POST['nomeReceita'])){
                $error['nomeReceita'] = 'insira um nome para a receita!';
                $correto=1;
            } else {
                $nomeReceita = $_POST['nomeReceita'];
            }
            if(empty($_POST['ingredientes'])){
                $error['ingredientes'] = 'insira os ingredientes da receita!';
                $correto=1;
            } else {
                $ingredientes = $_POST['ingredientes'];
            }
            if(empty($_POST['preparo'])){
                $error['preparo'] = 'insira o modo de preparo!';
                $correto=1;
            } else {
                $preparo = $_POST['preparo'];
            }
            if($correto==0){
                //insere banco
                $correto=0;
                header('Location: minhasreceitas.php');
            }
            if(isset($_GET['logout'])){
                unset($_SESSION['login']);
                session_destroy();
                header('Location: index.php');
            }
        }
    ?>
    
    <section style="margin-left: 80px; margin-right:80px; margin-bottom:80px;">
        <h1>Insira os dados da receita:</h1>
        <form action="post">
            <div>
                <div class="input-field">
                    <input id="Nome" type="text" class="validate" value="<?php echo htmlspecialchars($nomeReceita) ; ?>" name="nomeReceita">
                    <label for="Nome_da_Receita">Nome da Receita</label>
                </div>
                <div class="red-text"><?php echo $error['nomeReceita']; ?></div>
                <div class="input-field">
                    <input id="Ingredientes" type="text" class="validate" value="<?php echo htmlspecialchars($ingredientes) ; ?>" name="ingredientes">
                    <label for="Ingredientes">Ingredientes</label>
                </div>
                <div class="red-text"><?php echo $error['ingredientes']; ?></div>
                <div class="input-field">
                    <input id="Preparo" type="text" class="validate" value="<?php echo htmlspecialchars($preparo) ; ?>" name="preparo">
                    <label for="Preparo">Preparo</label>
                </div>
                <div class="red-text"><?php echo $error['preparo']; ?></div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="enviarReceita">Adicionar Receita
                <i class="material-icons right">send</i>
            </button>
        </form>
    </section>
    <?php require('views/footer.php'); ?>
</html>