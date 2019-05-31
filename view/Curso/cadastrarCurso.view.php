<?php
// Recuperacao do id da escola

$escola = $_SESSION['id_escola_grafico'];

foreach ($escola as $dado):
    $id_escola = $dado['id_escola'];
endforeach;

$_SESSION['id_escola'] = $id_escola;

// Listagem de coordenadores
include_once __DIR__ . '/../../controller/FuncionarioController.class.php';
$controllerFuncionarios = new FuncionarioController();
$coordenadores = $controllerFuncionarios->listarCoordenadores($id_escola);

// Listagem de Professores e Disciplinas cadastrados na escola
include_once __DIR__.'/../../controller/DisciplinaController.class.php';
$controllerDisciplina = new DisciplinaController();
$disciplinas =  $controllerDisciplina->listarDisciplina($id_escola);

?>

</br>    
<div class="row">

    <div class="col l12 center">
        <h4>CADASTRAR CURSO</h4></br>
    </div>

    <div class="col l12 offset-l1">
        <h5>Dados</h5></br>
    </div>

    <div class="col l12 offset-l1">
        <label>
            <input type="checkbox" class="filled-in" name="status" value="Ativo">
            <span>Curso ativo?</span>
        </label>
    </div>

    <div class="input-field col l2 m2 offset-l1">
        </br><select name="coordenador">
            <option value="" disabled selected>Coordenador</option>
            <?php
            // Lista todos os coordenadores cadastrados na escola
            foreach ($coordenadores as $dado):
                ?>
                <option value = "<?php echo $dado['id_funcionario']; ?>"><?php echo $dado['nome_funcionario']; ?></option>
                <?php
            endforeach;
            ?>
        </select>
        </br> <label>Escolha um coordenador</label>
    </div>

    <div class = "input-field col l3 m2">
        </br><input type = "text" name = "nome" id = "name">
        <label for = "name">Nome do curso</label>
    </div>

    <div class = "input-field col l2">
        </br><textarea id = "textarea1" name = "objetivo" class = "materialize-textarea"></textarea>
        <label for = "textarea1">Objetivo:</label>
    </div>


    <div class="input-field col l3 m2">
        </br><select name="professorDisciplina">
            <option value="0" disabled selected>Disciplina - Professor</option>
            <?php
            // Lista todas os professores e disciplinas cadastrados na escola
            foreach ($disciplinas as $dado):
                ?>
                <option value = "<?php echo $dado['id_funcionario'] . $dado['id_disciplina']; ?>"><?php echo $dado['nome_funcionario'] . ' - ' . $dado['nome_disciplina']; ?></option>
                <?php
            endforeach;
            ?>
        </select>
        </br> <label>Selecionar Professor e disciplina</label>
    </div>

    <div class = "col l12 offset-l1">
        <label><span>Nível</span></label>
        <p>
            <label>
                <input name = "nivel" type = "radio" value = "Infantil"/>
                <span>Infantil</span>
            </label>
        </p>
        <p>
            <label>
                <input name = "nivel" type = "radio" value = "Fundamental"/>
                <span>Fundamental</span>
            </label>
        </p>
        <p>
            <label>
                <input name = "nivel" type = "radio" value = "Médio"/>
                <span>Médio</span>
            </label>
        </p>

        <p>
            <label>
                <input name = "nivel" type = "radio" value = "Técnico"/>
                <span>Técnico</span>
            </label>
        </p>
    </div>

</div>


