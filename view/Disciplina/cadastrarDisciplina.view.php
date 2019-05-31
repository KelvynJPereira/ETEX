<?php
include_once '../../controller/FuncionarioController.class.php';
$controllerFuncionarios = new FuncionarioController();
$professores = $controllerFuncionarios->listarProfessores($id_escola);

?>
<div class="row">
    <div class="col l12 center">
        <h4>CADASTRAR CURSO</h4></br>
    </div>

    <div class="input-field col l3 offset-l3">
        <input placeholder="Nome da disciplina" id="disciplina" name="disciplina" type="text">
        <label for="disciplina"></label>
    </div>
    <div class="input-field col l3 offset-l1">
        <select name="professor">
            <option value="" disabled selected>Selecione um professor</option>
            <?php
            // Lista de todos os professores cadastrados na escola
            foreach ($professores as $dado):
                ?>
                <option value="<?php echo $dado['id_funcionario']; ?>"><?php echo $dado['nome_funcionario']; ?></option>
                <?php
            endforeach;
            ?>
        </select>
    </div>
</div>


