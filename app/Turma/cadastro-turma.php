<?php
include_once __DIR__ . '/../../assets/header.php';
include_once __DIR__ . '/../../controller/EscolaController.class.php';

$escolasAdmin = new EscolaController();
$lista = $escolasAdmin->listarEscolasAdmin(1);
?>


    

<?php
include_once __DIR__ . '/../../view/Turma/cadastroTuma.view.php';
?>  
<div class="row"
     <div id="buttons" class=""></br>
        </br><div class="col l2 offset-l3">
            <a class="waves-effect waves-light btn blue" href="listar-escolas.php"><i class="material-icons left">arrow_back</i>Voltar</a>
        </div>
        <div class="col l3 offset-l3">
                <button class="btn waves-effect waves-light green" type="submit" name="btn-cadastrar">Cadastrar
                    <i class="material-icons right">add_circle</i>
                </button>
            </div>
    </div>
</div>





<?php
include_once __DIR__ . '/../../assets/footer.php';
?>

