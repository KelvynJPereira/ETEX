<?php

// Array de erros
$msgs = [];

session_start();
$id_escola = $_SESSION['id_escola'];

// Reconhecimento de id a ser excluido
if (isset($_POST['excluir-aluno'])):
    $idAlunoExcluir = filter_input(INPUT_POST, 'excluir-aluno');
    include_once __DIR__.'/../../controller/AlunoController.class.php';
    $excluir = new AlunoController();
    $result = $excluir->excluirAluno($idAlunoExcluir);
    array_push($msgs, $result);
    
endif;

// Exibicao de mensagens no toast
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
                    <th class="center-align">Matricula</th>
                    <th class="center-align">Nome</th>
                    <th class="center-align">Sobrenome</th>
                    <th class="center-align">Nascimento</th>
                    <th class="center-align">Sexo</th>
                    <th class="center-align">Cor</th>
                    <th class="center-align">Editar</th>
                    <th class="center-align">Excluir</th>
                </tr>
            </thead>
            <?php
            include_once __DIR__ . '/../../controller/AlunoController.class.php';
            $listar = new AlunoController();
            $listaAlunos = $listar->listarAlunos($id_escola);
            foreach ($listaAlunos as $dado):
                ?>
                <td class="center-align">

                    <?php
                    echo!empty($dado['matricula_aluno']) ? $dado['matricula_aluno'] : '<a class="btn-small waves-effect waves-light purple" href="matricular-aluno.php?id_aluno=' . $dado['id_aluno'] . '">'
                            . ' Matricular'
                            . ' <i class="material-icons left">school</i> </a>';
                    ?>

                </td>
                <td class="center-align"><?php echo $dado['nome_aluno']; ?></td>
                <td class="center-align"><?php echo $dado['sobrenome_aluno']; ?></td>
                <td class="center-align"><?php
                    $nascimento = $dado['nascimento_aluno'];
                    echo date("d/m/Y", strtotime($nascimento));
                    ?></td>
                <td class="center-align"><?php echo $dado['sexo_aluno']; ?></td>
                <td class="center-align"><?php echo $dado['cor_aluno']; ?></td>
                <td class="center-align">
                    <a href="editar-aluno.php?id=<?php echo $dado['id_aluno']; ?>" type="hidden" name="id" class="btn-floating btn-medium waves-effect waves-light orange"><i class="material-icons">edit</i></a>
                </td>
                <td class="center-align">
                    <a href="#modelExcluirAluno<?php echo $dado['id_aluno']; ?>" class="btn-floating btn-medium waves-effect waves-light btn modal-trigger red"><i class="material-icons">delete</i></a>
                    <?php require __DIR__ . '/../../view/Aluno/modelExcluirAluno.view.php'; ?>
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
                <a class="btn waves-effect waves-light green" href="cadastro-aluno.php">Novo aluno
                    <i class="material-icons right">person_add</i>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/../../assets/footer.php';
?>




