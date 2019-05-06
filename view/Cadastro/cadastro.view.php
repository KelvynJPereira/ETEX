<div id="model-cadastro" class="modal">
    <div class="modal-content">
        <div id="login-page" class="row">
            <div>
                <h4 class="center">Cadastre sua Instituição</h4></br>
            </div>
            <div class="row">
                <div class="input-field col l5 offset-l1">
                    <i class="material-icons prefix">person</i>
                    <input class="validate" id="nome" name="nome" type="text">
                    <label for="nome" data-error="wrong" data-success="right">Nome Completo</label>
                </div>
                <div class="input-field col l5">
                    <i class="material-icons prefix">featured_play_list</i>
                    <input class="validate" id="cpf" name="cpf" type="number">
                    <label for="cpf" data-error="wrong" data-success="right">CPF</label>
                </div>

                <div class="input-field col l5 offset-l1">
                    <i class="material-icons prefix">mail_outline</i>
                    <input class="validate" id="email" name="email" type="email">
                    <label for="email" data-error="wrong" data-success="right">E-mail</label>
                </div>

                <div class="input-field col l5">
                    <i class="material-icons prefix">lock_outline</i>
                    <input id="password" type="password" name="senha">
                    <label for="senha">Senha</label>
                </div>

                <div class="input-field col l5 offset-l1">
                    <i class="material-icons prefix">account_balance</i>
                    <input class="validate" id="nome-escola" name="nome-escola" type="text">
                    <label for="nome-escola" data-error="wrong" data-success="right">Nome da Instituição</label>
                </div>

                <div class="input-field col l5">
                    <i class="material-icons prefix">phone</i>
                    <input class="validate" id="telefone" name="telefone" type="number">
                    <label for="telefone" data-error="wrong" data-success="right">Telefone</label>
                </div>
            </div>
            <div class="col l5 offset-l5">
                <button class="btn waves-effect waves-light green btn-medium" type="submit" name="btn-cadastrar">Cadastrar
                </button>
            </div>  
        </div>
    </div>
</div>
