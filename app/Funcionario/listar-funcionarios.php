<?php
// Array de erros
$msgs = [];

session_start();
$id_escola = $_SESSION['id_escola'];

// Reconhecimento de id a ser excluido
if (isset($_POST['excluir-funcionario'])):
    $idFuncionarioExcluir = filter_input(INPUT_POST, 'excluir-funcionario');
    include_once __DIR__ . '/../../controller/FuncionarioController.class.php';
    $controllerFuncionarios = new FuncionarioController();
    $result = $controllerFuncionarios->excluirFuncionario($idFuncionarioExcluir);
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
                    <th class="center-align">Salario</th>
                    <th class="center-align">Excluir</th>
                </tr>
            </thead>
            <?php
            // Criacao do controller
            include_once __DIR__ . '/../../controller/FuncionarioController.class.php';
            $controllerFuncionarios = new FuncionarioController();
            $listaFuncionarios = $controllerFuncionarios->listarFuncionarios($id_escola);
            foreach ($listaFuncionarios as $dado):
                ?>
                <td class="center-align"><?php echo $dado['matricula_funcionario']; ?></td>
                <td class="center-align"><?php echo $dado['nome_funcionario']; ?></td>
                <td class="center-align"><?php echo $dado['sobrenome_funcionario']; ?></td>
                <td class="center-align"><?php
                    $nascimento = $dado['nascimento_funcionario'];
                    echo date("d/m/Y", strtotime($nascimento));
                    ?></td>
                <td class="center-align"><?php echo $dado['salario_funcionario']; ?></td>

                <td class="center-align">
                    <a href="#modelExcluirFuncionario<?php echo $dado['id_funcionario']; ?>" class="btn-floating btn-medium waves-effect waves-light btn modal-trigger red"><i class="material-icons">delete</i></a>
                    <?php require __DIR__ . '/../../view/Funcionario/modelExcluirFuncionario.view.php'; ?>
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
                <a class="btn waves-effect waves-light green" href="cadastro-funcionario.php">Novo Funcionario
                    <i class="material-icons right">person_add</i>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/../../assets/footer.php';
?>




