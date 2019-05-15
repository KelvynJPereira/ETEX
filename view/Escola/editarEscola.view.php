<?php
foreach ($dadosEscola as $dado):
    ?>
    </br>    
    <div class="col l12 m12">
        <h5>Dados</h5>
    </div>

    <div class="input-field col l2 m2">
        <input type="text" name="nome" id="name" value="<?php echo $dado['nome_escola']; ?>">
        <label for="name">Nome Fantasia</label>
    </div>

    <div class="input-field col l2 m2">
        <input type="text" name="sobrenome" id="lastName" value="<?php echo $dado['cnpj_escola']; ?>">
        <label for="lastName">CNPJ</label>
    </div>

    <div class="input-field col l2 m2">
        <select name="sexo">
            <option value="" disabled selected>Sexo</option>
            <option value="Homem">Masculino</option>
            <option value="Mulher">Feminino</option>
        </select>
        <label>Escolha um sexo</label>
    </div>

    <div class="input-field col l2 m2">
        <input type="date" name="nascimento" id="birthday" value="<?php echo $dado['nascimento_aluno']; ?>">
        <label for="birthday">Nascimento</label>
    </div> 

    <div class="input-field col l2 m2">
        <input type="number" name="cpf" id="cpf" value="<?php echo $dado['cpf_aluno']; ?>">
        <label for="cpf">CPF</label>
    </div>

    <div class="input-field col l2 m2">
        <select name="cor">
            <option value="" disabled selected>Cor</option>
            <option value="BRANCO">Branco</option>
            <option value="NEGRO">Negro</option>
            <option value="PARDO">Pardo</option>
            <option value="INDIO">Índio</option>
        </select>
        <label>Escolha uma raça</label>
    </div>

    <div class="input-field col l2 m2">
        <input type="number" name="foneF" id="foneF" value="<?php echo $dado['fone_fixo_aluno']; ?>">
        <label for="foneF">Telefone fixo</label>
    </div>

    <div class="input-field col l2 m2">
        <input type="number" name="foneP" id="foneP" value="<?php echo $dado['fone_pessoal_aluno']; ?>">
        <label for="foneP">Telefone pessoal</label>
    </div>

    <div class="input-field col l3 m2">
        <input type="email" name="email" id="email" value="<?php echo $dado['email_aluno']; ?>">
        <label for="email">E-mail</label>
    </div>
    <?php
endforeach;
?>










