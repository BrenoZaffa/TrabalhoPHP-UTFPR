    <section style="margin-left: 80px; margin-right:80px;">
        <div>
            <a href="cadastroReceitas.php" class="btn-floating btn-large waves-effect waves-light red right"><i class="material-icons">add</i></a>
        </div>
        <?php foreach ($receitas as $receita) : ?>
            <hr>
            <ul>
                <h3><strong>Receita: </strong></h3><?= $receita['nome'] ?>
                <h5><strong>Ingredientes: </strong></h5>
                <li><?= $receita['ingredientes'] ?></li>
                <h5><strong>Modo de Preparo: </strong></h5>
                <li><?= $receita['preparo'] ?></li>
            </ul>
        <?php endforeach; ?>
    </section>