<?php
// Includes
include_once __DIR__ . '/../../assets/header.php';
include_once __DIR__ . '/../../model/Escola/Escola.class.php';
include_once __DIR__ . '/../../controller/EscolaController.class.php';
include_once __DIR__ . '/../../controller/AdminController.class.php';

// Array de mensagens e erros
$msgs = [];

// Verifica se usuario realizou o login
session_start();
if (!$_SESSION['logado']):
    header("Location: ../../index.php");
endif;

// Recuperacao da escola do CNPJ informado
if (!empty($_POST['cnpj'])):

    $cnpj_escola = $_POST['cnpj'];
    //Consulta da escola 
    $controllerEscola = new EscolaController();
    $escolas = $controllerEscola->buscarEscolaCnpj($cnpj_escola);

else:
    array_push($msgs, 'Escola NÃO encontrada!');
endif;


// Exclusao de escola selecionada
if (isset($_POST['excluir-escola'])):
    // Recupera id da escola selecionada
    $id_escola = filter_input(INPUT_POST, 'excluir-escola');
    // Instancia objeto controller
    $controllerEscola = new EscolaController();
    // Execulta exclusao da escola no banco
    $consulta = $controllerEscola->excluirEscola($id_escola);
    // Valida resposta da exclusao
    if ($consulta = true):
        array_push($msgs, 'Escola excluída');
    else:
        array_push($msgs, 'Escola não excluída');
    endif;
endif;

// Exibicao de mensagens no toast
foreach ($msgs as $msg):
    ?>
    <script>
        window.onload = function () {
            M.toast({html: '<?php echo '<b>' . $msg . '</br>'; ?>', classes: 'orange rounded'});
        };
    </script>
    <?php
endforeach;
?>
</br>
<div class="row">
    </br><div id="listar-escola" class="col l12 m12">
        <table>
            <tbody>
            <thead>
                <tr>
                    <th class="center-align">Logo</th>
                    <th class="center-align">Razão Social</th>
                    <th class="center-align">CNPJ</th>
                    <th class="center-align">Editar</th>
                    <th class="center-align">Excluir</th>
                </tr>
            </thead>
            <?php
            if (!empty($escolas)):
                foreach ($escolas as $dado):
                    ?>
                    <tr>
                        <td class="center-align"><img style="width: 50px;" src="../../assets/img/escola/uploads/<?php echo $dado['logo_escola']; ?>"></td>
                        <td class="center-align"><?php echo $dado['nome_escola']; ?></td>
                        <td class="center-align"><?php echo $dado['cnpj_escola']; ?></td>
                        <td class="center-align">
                            <a href="editar-escola.php?id=<?php echo $dado['id_escola']; ?>" type="hidden" name="id" class="btn-floating btn-medium waves-effect waves-light orange"><i class="material-icons">edit</i></a>
                        </td>
                        <td class="center-align">
                            <a href="#modelExcluirEscola<?php echo $dado['id_escola']; ?>" class="btn-floating btn-medium waves-effect waves-light btn modal-trigger red"><i class="material-icons">delete</i></a>
                            <?php require __DIR__ . '/../../view/Escola/modelExcluirEscola.view.php'; ?>
                        </td>
                    </tr>
                    <?php
                endforeach;
            endif;
            ?>
            </tbody>
        </table>
        </br><div id="buttons" class="col l11"></br>
            <div class="col l5 offset-l3">
                <a class="btn waves-effect waves-light blue" href="../../portal/admin/index.php">Voltar
                    <i class="material-icons left">arrow_back</i>
                </a>
            </div>
            <div class="col l3 ">
                <a class="btn waves-effect waves-light green" href="cadastro-escola.php">Nova Escola
                    <i class="material-icons right">school</i>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/../../assets/footer.php';
?>

