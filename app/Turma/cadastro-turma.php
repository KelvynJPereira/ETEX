<?php
include_once __DIR__ . '/../../assets/header.php';
include_once __DIR__ . '/../../controller/EscolaController.class.php';

$escolasAdmin = new EscolaController();
$lista = $escolasAdmin->listarEscolasAdmin(1);


?>

<div class="row">
    <div class="input-field col l2 m2">
        <select name="escola">
        <?php
        foreach ($lista as $dado):
            echo "<option value=''>".$dado['nome_escola']."</option>";
        endforeach;
        ?>
        </select>  
        <label>Selecione uma escola</label>
    </div>

<?php

include_once __DIR__ . '/../../view/Turma/cadastroTuma.view.php';
?>  
</div>




<?php
include_once __DIR__ . '/../../assets/footer.php';
?>

