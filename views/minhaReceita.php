<?php require('./views/headerLogado.php');?>
    <section style="margin-left: 80px; margin-right:80px;">
        <div>
            <a href="/myReceitas/adicionar" class="btn-floating btn-large waves-effect waves-light red right"><i class="material-icons">add</i></a>
        </div>
        <ul>
            <?php 
            for($i=0; $i < (count($receitas)/2) ; $i++){
                echo '<li>'.$receitas[$i];
                echo '</li>';
                
            }
        ?>
        </ul>
    </section>
<?php require('./views/footer.php') ?>