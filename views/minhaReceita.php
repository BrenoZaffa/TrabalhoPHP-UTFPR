<?php require('./views/headerLogado.php') ?>
    <section style="margin-left: 80px; margin-right:80px;">
        <div>
            <a href="/myReceitas/adicionar" class="btn-floating btn-large waves-effect waves-light red right"><i class="material-icons">add</i></a>
        </div>
        <?php foreach ($boletim as $aluno => $notas) : ?>
            <tr>
                <td><?= $nome ?></td>
                <td><?= $ingredientes ?></td>
                <td><?= $preparo ?></td>
            </tr>
        <?php endforeach; ?>
    </section>
<?php require('./views/footer.php') ?>