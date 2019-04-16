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
            <td><a class="btn-floating btn-medium waves-effect waves-light red"><i class="material-icons">delete</i></a>
            </td>
            </tr>
            <?php
        endforeach;
        ?>
        </tbody>
        </table>
        <div class="col l3 offset-l10"></br>
            <a class="waves-effect waves-light btn green" href="cadastrar-aluno.php"><i class="material-icons right">add_circle</i>Novo Aluno</a>
        </div>
    </div>
</div>
</div>
</div>

<?php
include_once __DIR__ . '/../assets/footer.php';
?>

