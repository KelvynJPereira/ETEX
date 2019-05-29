<?php

$msgs = [];

session_start();
$id_escola = $_SESSION['id_escola'];


// Exclusao de escola selecionada
if (isset($_POST['excluir-curso'])):

    // Recupera id da escola selecionada
    $id_curso = filter_input(INPUT_POST, 'excluir-curso');

    // Instancia objeto controller
    include_once __DIR__ . '/../../controller/CursoController.class.php';
    $controllerCurso = new CursoController();

    // Execulta exclusao da escola no banco
    $result = $controllerCurso->excluirCurso($id_curso);

    // Valida resposta da exclusao
    if ($result = true):
        array_push($msgs, 'Curso excluído com sucesso!');
    else:
        array_push($msgs, 'Curso NÃO excluído!');
    endif;
endif;

if (!empty($msgs)):
    foreach ($msgs as $msg):
        ?>
        <script>
            window.onload = function () {
                M.toast({html: '<?php echo '<b>' . $msg . '</br>'; ?>', classes: 'orange rounded'});
            };
        </script>
        <?php
    endforeach;
endif;


// Includes
include_once __DIR__ . '/../../assets/header.php';
?>
</br>
<div class="row">
    </br><div id="listar-escola" class="col l12 m12">
        <table>
            <tbody>
            <thead>
                <tr>
                    <th class="center-align">Status</th>
                    <th class="center-align">Código</th>
                    <th class="center-align">Nome</th>
                    <th class="center-align">Nível</th>
                    <th class="center-align">Objetivo</th>
                    <th class="center-align">Excluir</th>
                </tr>
            </thead>
            <?php
            include_once __DIR__ . '/../../controller/CursoController.class.php';
            $controllerCurso = new CursoController();
            $listaCursos = $controllerCurso->listarCursos($id_escola); /////// id do curso
            foreach ($listaCursos as $dado):
                ?>
                <td class="center-align"><?php echo $dado['ativo_curso']; ?></td>
                <td class="center-align"><?php echo $dado['codigo_curso']; ?></td>
                <td class="center-align"><?php echo $dado['nome_curso']; ?></td>
                <td class="center-align"><?php echo $dado['nivel_curso']; ?></td>
                <td class="center-align"><?php echo $dado['objetivo_curso']; ?></td>
                <td class="center-align">
                    <a href="#modelExcluirCurso<?php echo $dado['id_curso']; ?>" class="btn-floating btn-medium waves-effect waves-light btn modal-trigger red"><i class="material-icons">delete</i></a>
                    <?php require __DIR__ . '/../../view/Curso/modelExcluirCurso.view.php'; ?>
                </td>
                </tr>
                <?php
            endforeach;
            ?>
            </tbody>
        </table>
        <div id="buttons" class="col l12"></br>
            <div class="col l6 offset-l2">
                <a class="btn waves-effect waves-light blue" href="../../portal/admin/index.php">Voltar
                    <i class="material-icons left">arrow_back</i>
                </a>
            </div>
            <div class="col l3 ">
                <a class="btn waves-effect waves-light green" href="cadastro-curso.php">Novo curso
                    <i class="material-icons right">collections_bookmark</i>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/../../assets/footer.php';






