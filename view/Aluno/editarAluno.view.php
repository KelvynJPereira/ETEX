<div class="row">
        <div class="input-field col l2 m2 offset-l5">
            <img class="materialboxed" width="124" src="../../assets/img/alunos/<?php echo $dado['foto_aluno'];?>">
            <input type="file" name="foto" id="image"></input>
        </div> 
    </div>
        <div class="col l12 m12 offset-l1">
            </br><h5>Dados</h5></br>
        </div>

        <div class="input-field col l3 m2 offset-l1">
            <input type="text" name="nome" value="<?php echo $dado['nome_aluno'];?>" id="name" >
            <label for="name">Nome</label>
        </div>

        <div class="input-field col l3 m2">
            <input type="text" name="sobrenome" value="<?php echo $dado['sobrenome_aluno'];?>" id="lastName">
            <label for="lastName">Sobrenome</label>
        </div>

        <div class="input-field col l2 m2">
            <select name="sexo" value="<?php echo $dado['sexo_aluno'];?>">
                <option value="" disabled selected>Sexo</option>
                <option value="Homem">Masculino</option>
                <option value="Mulher">Feminino</option>
            </select>
            <label>Escolha um sexo</label>
        </div>

        <div class="input-field col l2 m2">
            <input type="date" name="nascimento" value="<?php echo $dado['nascimento_aluno'];?>" id="birthday">
            <label for="birthday">Nascimento</label>
        </div> 

        <div class="input-field col l2 m2 offset-l1">
            <input type="number" name="cpf" value="<?php echo $dado['cpf_aluno'];?>" id="cpf">
            <label for="cpf">CPF</label>
        </div>

        <div class="input-field col l2 m2">
            <select name="cor" value="<?php echo $dado['cor_aluno'];?>">
                <option value="" disabled selected>Cor</option>
                <option value="Branco">Branco</option>
                <option value="Negro">Negro</option>
                <option value="Pardo">Pardo</option>
                <option value="Indio">Índio</option>
            </select>
            <label>Escolha uma raça</label>
        </div>

        <div class="input-field col l3 m2">
            <i class="material-icons prefix">phone</i>
            <input type="number" name="foneF" value="<?php echo $dado['fone_fixo_aluno'];?>" id="foneF">
            <label for="foneF">Telefone fixo</label>
        </div>

        <div class="input-field col l3 m2">
            <input type="number" name="foneP" value="<?php echo $dado['fone_pessoal_aluno'];?>" id="foneP">
            <label for="foneP">Telefone pessoal</label>
        </div>

        <div class="input-field col l4 m2 offset-l1">
            <i class="material-icons prefix">email</i>
            <input type="email" name="email" value="<?php echo $dado['email_aluno'];?>" id="email">
            <label for="email">E-mail</label>
        </div>
    </div>











