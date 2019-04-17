<?php
/*
 * Incluir modal para exclusão
 * Incluir pop-outs
 * Incluir botão de voltar
 */

// Include header
include_once __DIR__ . '/../assets/header.php';
include_once __DIR__ . '/../controller/AlunoController.class.php';

$listar = new AlunoController();
$listaAlunos = $listar->listarAlunos();
?>

<div class="row">
    <div id="listar-aluno" class="col l12 m12">
        <?php
        include_once __DIR__ . './listaAlunos.view.php';
        foreach ($listaAlunos as $dado):
            ?>
            <td><?php echo $dado['matricula_aluno']; ?></td>
            <td><?php echo $dado['nome_aluno']; ?></td>
            <td><?php echo $dado['sobrenome_aluno']; ?></td>
            <td><?php
                $nascimento = $dado['nascimento_aluno'];
                echo date("d/m/Y", strtotime($nascimento));
                ?></td>
            <td><?php echo $dado['sexo_aluno']; ?></td>
            <td><?php echo $dado['cor_aluno']; ?></td>
            <td>
                <a href="editar-aluno.php?id=<?php echo $dado['id_aluno']; ?>" type="hidden" name="id" class="btn-floating btn-medium waves-effect waves-light orange"><i class="material-icons">edit</i></a>
            </td>
            <td>
                <a href="#modelExcluirAluno<?php echo $dado['id_aluno']; ?>" class="btn-floating btn-medium waves-effect waves-light btn modal-trigger red"><i class="material-icons">delete</i></a>
                <?php require __DIR__ . '/modelExcluirAluno.view.php'; ?>
            </td>
            </tr>
            <?php
        endforeach;
        ?>
        </tbody>
        </table>
        <div id="buttons" class="col l12"></br>
            <div class="col l6 offset-l2">
                <a class="btn waves-effect waves-light blue" href="../index.php">Voltar
                    <i class="material-icons left">arrow_back</i>
                </a>
            </div>
            <div class="col l3 ">
                <a class="btn waves-effect waves-light green" href="cadastrar-aluno.php">Novo aluno
                    <i class="material-icons right">person_add</i>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?php
include_once __DIR__ . '/../assets/footer.php';

// Reconhecimento de id a ser excluido

if (isset($_POST['excluir-aluno'])):


    $idAlunoExcluir = filter_input(INPUT_POST, 'excluir-aluno');
    $excluir = new AlunoController();
    $result = $excluir->excluirAluno($idAlunoExcluir);
    echo $result;
endif;
?>




