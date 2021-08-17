<?php require 'header.php' ?>
<section style="margin-left: 80px; margin-right:80px;">
        <h1><strong>MyRecipe</strong></h1>
        <p class="center">Esqueça os papéis, isso é coisa do passado</p>
        <p class="center">Aqui você poderá digitalizar todas suas receitas.</p>
        <p class="center">Obtendo fácil acesso a elas, totalmente online e de forma <strong>TOTALMENTE GRATUITA</strong>.</p>
        <div class="center">
            <h2><strong>Para começar faça seu login:</strong></h2>
            <a class="center">Caso não tenha uma conta, basta fazer seu Cadastro</a>
            <div class="row">
                <div class="col s6">
                    <h4><strong>Login:</strong></h4>
                    <div>
                        <form method="POST" action="/home/logar">
                            <div class="input-field col s12">
                                <input id="emailLogin" type="email" class="validate" name="emailLogin" value="<?php echo htmlspecialchars($emailLogin) ; ?>">
                                <label for="email">Email</label>
                            </div>
                            <div class="red-text"><?php echo $errorLogin['email']; ?></div>
                            <div class="input-field col s12">
                                <input id="passwordLogin" type="password" class="validate" name="passwordLogin" value="<?php echo htmlspecialchars($senhaLogin); ?>">
                                <label for="password">Senha</label>
                            </div>
                            <div class="red-text"><?php echo $errorLogin['senha']; ?></div>
                            <button class="btn waves-effect waves-light" type="submit" name="entrar">Entrar</button>
                            <div class="red-text"><?php echo $errorLogin['login']; ?></div>
                        </form>
                    </div>
                </div>
                <div class="col s6">
                    <h4><strong>Cadastro:</strong></h4>
                    <div>
                        <form method="POST" action="/home/cadastrar">
                            <div class="input-field col s12">
                                <input id="nomeCadastro" type="text" class="validate" name="nomeCadastro" value="<?php echo htmlspecialchars($nome) ; ?>">
                                <label for="last_name">Nome Completo</label>
                            </div>
                            <div class="red-text"><?php echo $errorCadastro['nome']; ?></div>
                            <div class="input-field col s12">
                                <input id="emailCadastro" type="email" class="validate" name="emailCadastro" value="<?php echo htmlspecialchars($email); ?>">
                                <label for="email">Email</label>
                            </div>
                            <div class="red-text"><?php echo $errorCadastro['email']; ?></div>
                            <div class="input-field col s12">
                                <input id="passwordCadastro" type="password" class="validate" name="senhaCadastro" value="<?php echo htmlspecialchars($senha); ?>">
                                <label for="password">Senha</label>
                            </div>
                            <div class="red-text"><?php echo $errorCadastro['senha']; ?></div>
                            <button class="btn waves-effect waves-light" type="submit" name="cadastro">Concluir Cadastro</button>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-left: 80px; margin-right:80px;">
        <h1 class="center"><strong>Como usar?</strong></h1>
        <h3><strong>1º Passo:</strong> Concluir seu cadastro.</h3>
        <h3><strong>2º Passo:</strong> Fazer seu login.</h3>
        <h3><strong>3º Passo:</strong> Pressionar o botão '+' no topo da página para adicionar uma nova receita.</h3>
    </section>
    
<?php require 'footer.php' ?>