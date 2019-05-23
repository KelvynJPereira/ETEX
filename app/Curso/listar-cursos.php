<?php
/*
 * Incluir modal para exclusão
 * Incluir pop-outs
 * Incluir botão de voltar
 * 
 */

session_start();
$id_escola = $_SESSION['id_escola'];

// Includes
include_once __DIR__ . '/../../assets/header.php';
include_once __DIR__ . '/../../model/Escola/Curso/Curso.class.php';
include_once __DIR__ . '/../../controller/CursoController.class.php';
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
                    <th class="center-align">Editar</th>
                    <th class="center-align">Excluir</th>
                </tr>
            </thead>
            <?php
            $controllerCurso = new CursoController();
            $listaCursos = $controllerCurso->listarCursos($id_escola); /////// id do curso

            foreach ($listaCursos as $dado):
                ?>
                <td class="center-align"><?php echo $dado['ativo_curso']; ?></td>
                <td class="center-align"><?php echo $dado['codigo_curso']; ?></td>
                <td class="center-align"><?php echo $dado['nome_curso']; ?></td>
                <td class="center-align"><?php echo $dado['nivel_curso']; ?></td>
                <td class="center-align">
                    <a href="editar-aluno.php?id=<?php echo $dado['id_curso']; ?>" type="hidden" name="id" class="btn-floating btn-medium waves-effect waves-light orange"><i class="material-icons">edit</i></a>
                </td>
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

// Reconhecimento de id a ser excluido

if (isset($_POST['excluir-aluno'])):


    $idAlunoExcluir = filter_input(INPUT_POST, 'excluir-aluno');
    $excluir = new AlunoController();
    $result = $excluir->excluirAluno($idAlunoExcluir);
    echo $result;
endif;
?>




