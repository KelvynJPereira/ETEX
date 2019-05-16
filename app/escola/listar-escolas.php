<?php
// Includes
include_once __DIR__ . '/../../assets/header.php';
include_once __DIR__ . '/../../model/Escola/Escola.class.php';
include_once __DIR__ . '/../../controller/EscolaController.class.php';
include_once __DIR__ . '/../../controller/AdminController.class.php';

// Session
 session_start();
 $_SESSION['logado']  = true;

 
// Escolas de administrador
if (!empty($_GET)):
    $id_admin_escola = $_SESSION['admin_escola'] = $_GET['id'];
else:
    session_start();
    $id_admin_escola = $_SESSION['admin_escola'];
endif;




// Consulta as escolas do admin
$controllerAdmin = new AdminController();
$escolas = $controllerAdmin->buscarAdminEscola($id_admin_escola);

// Exclusao de escola selecionada
if (isset($_POST['excluir-escola'])):
    // Recupera id da escola selecionada
    $id_escola = filter_input(INPUT_POST, 'excluir-escola');
    // Instancia objeto controller
    $controllerEscola = new EscolaController();
    // Execulta exclusao da escola no banco
    $msgs = $controllerEscola->excluirEscola($id_escola);
    // Valida resposta da exclusao
    if($msgs = true):
        $msgs = "Escola excluída!";
    else:
        $msgs = "Escola NÃO excluída!";
    endif;
endif;

// Exibicao de mensagens no toast
if (!empty($msgs)):
    ?>
    <script>
        window.onload = function () {
            M.toast({html: '<?php echo '<b>' . $msgs . '</br>'; ?>', classes: 'orange rounded'});
        };
    </script>
    <?php
endif;
?>

<div class="row">
    <div id="listar-escola" class="col l12 m12">

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
                        <a href="#modelExcluirEscola<?php echo $dado['id_escola']; ?>" class="btn-floating btn-medium waves-effect waves-light btn modal-trigger red"><i class="material-icons">delete</i></a>
                        <?php require __DIR__ . '/../../view/Escola/modelExcluirEscola.view.php'; ?>
                    </td>

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
                <a class="btn waves-effect waves-light green" href="cadastro-aluno.php">Novo Escola
                    <i class="material-icons right">person_add</i>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/../../assets/footer.php';
?>

