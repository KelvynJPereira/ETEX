<?php
/*
 * Incluir modal para exclusão
 * Incluir pop-outs
 * Incluir botão de voltar
 */

// Includes

include_once __DIR__ . '/../../assets/header.php';
include_once __DIR__ . '/../../model/Escola/Escola.class.php';
include_once __DIR__ . '/../../controller/EscolaController.class.php';
include_once __DIR__ . '/../../controller/AdminController.class.php';
?>

<div class="row">
    <div id="listar-escola" class="col l12 m12">
        <?php
// Escolas de admin

        $adminEscola = new AdminController();
        $escolas = $adminEscola->buscarAdminEscola(1);
        ?>

        <table>
            <tbody>

            <thead>
                <tr>
                    <th class="center-align">Logo</th>
                    <th class="center-align">Razão Social</th>
                    <th class="center-align">CPNJ</th>
                    <th class="center-align">Editar</th>
                    <th class="center-align">Excluir</th>
                </tr>
            </thead>


            <?php
            foreach ($escolas as $dado):
                ?>
                <tr>
                    <td class="center-align"><?php echo '<img style="width:50px;" src="data:image/jpeg;base64,' . base64_encode($dado['logo_escola']) . '"/>'; ?></td>
                    <td class="center-align"><?php echo $dado['nome_escola']; ?></td>
                    <td class="center-align"><?php echo $dado['cnpj_escola']; ?></td>
                    <td class="center-align">
                        <a href="editar-escola.php?id=<?php echo $dado['id_escola']; ?>" type="hidden" name="id" class="btn-floating btn-medium waves-effect waves-light orange"><i class="material-icons">edit</i></a>
                    </td>
                    <td class="center-align">
                        <a href="#modelExcluirAluno<?php echo $dado['id_escola']; ?>" class="btn-floating btn-medium waves-effect waves-light btn modal-trigger red"><i class="material-icons">delete</i></a>
                        <?php // require __DIR__ . '/../../view/Aluno/modelExcluirAluno.view.php';  ?>
                    </td>

                    <?php
                endforeach;
                ?>
                </tbody>
        </table>
        <div id="buttons" class="col l12"></br>
            <div class="col l6 offset-l2">
                <a class="btn waves-effect waves-light blue" href="../../index.php">Voltar
                    <i class="material-icons left">arrow_back</i>
                </a>
            </div>
            <div class="col l3 ">
                <a class="btn waves-effect waves-light green" href="cadastro-aluno.php">Novo aluno
                    <i class="material-icons right">person_add</i>
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

