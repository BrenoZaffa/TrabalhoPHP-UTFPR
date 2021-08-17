
    <?php require('./views/headerLogado.php') ?>
    <section style="margin-left: 80px; margin-right:80px; margin-bottom:80px;">
        <h1>Insira os dados da receita:</h1>
        <form method="post" action="/myReceitas/enviar">
            <div>
                <div class="input-field">
                    <input id="Nome" type="text" class="validate">
                    <label for="Nome_da_Receita">Nome da Receita</label>
                </div>
                <div class="input-field">
                    <input id="Ingredientes" type="text" class="validate">
                    <label for="Ingredientes">Ingredientes</label>
                </div>
                <div class="input-field">
                    <input id="Preparo" type="text" class="validate">
                    <label for="Preparo">Preparo</label>
                </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="enviarReceita">Adicionar Receita
                <i class="material-icons right">send</i>
            </button>
        </form>
    </section>
    <?php require('./views/footer.php') ?>
</html>