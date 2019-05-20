<?php
// Array de mensagens
$msgs = [];


// Verifica se usuario realizou o login
session_start();
if (!$_SESSION['logado']):
    header("Location: ../../index.php");
endif;

// Captura id da escola via get
$id_escola = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

// Amazenamento de id da escola
if (!empty($id_escola)):
    $_SESSION['id_escola'] = $id_escola;
endif;


// Execucao da edicao da escola
if (isset($_POST['btn-atualizar'])):

    // Sanitização
    $filter = $_POST;
    // Dados
    $nome = $filter['nome'] = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cnpj = $filter['cnpj'] = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_STRING);
    $tipo_ensino = $filter['ensino'] = filter_input(INPUT_POST, 'ensino', FILTER_SANITIZE_STRING);
    $foneF = $filter['foneF'] = filter_input(INPUT_POST, 'foneF', FILTER_SANITIZE_STRING);
    $foneC = $filter['foneC'] = filter_input(INPUT_POST, 'foneC', FILTER_SANITIZE_STRING);
    $email = $filter['email'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $site = $filter['site'] = filter_input(INPUT_POST, 'site', FILTER_SANITIZE_STRING);

    // Endereco
    $numero = $filter['numero'] = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
    $rua = $filter['rua'] = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
    $bairro = $filter['bairro'] = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
    $cidade = $filter['cidade'] = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $estado = $filter['estado'] = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $pais = $filter['pais'] = filter_input(INPUT_POST, 'pais', FILTER_SANITIZE_STRING);
    $cep = $filter['cep'] = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);

    // Upload de imagem
    // Recuperacao da imagem
    $img = $_FILES['logo'];

    if ($img['error']):
        $logo = 'escola-padrao.png';
    else:
        // Diretorio de uploads
        $dir_uploads = "../../assets/img/escola/uploads";

        // Caso a pasta nao exista sera criada
        if (!is_dir($dir_uploads)):
            mkdir($dir_uploads);
        endif;

        if (move_uploaded_file($img['tmp_name'], $dir_uploads . DIRECTORY_SEPARATOR . $img['name'])):
            $logo = $img['name'];
        else:
            array_push($msgs, 'Imagem NÃO carregada!');
        endif;
    endif;

    // Criacao de objeto escola
    include_once __DIR__ . '/../../model/Escola/Escola.class.php';
    $escola = new Escola($nome, $cnpj, $tipo_ensino, $foneF, $foneC, $email, $site, $numero, $rua, $bairro, $cidade, $estado, $pais, $cep, $logo);

    // Chamada do metodo de edicao de escola
    include_once __DIR__ . '/../../controller/EscolaController.class.php';
    $controllerEscola = new EscolaController();

    // Recuperacao de id de escola
    $id_escola = $_SESSION['id_escola'];

    $consulta = $controllerEscola->editarEscola($escola, $id_escola);

    if ($consulta):
        array_push($msgs, 'Editado com com sucesso!');
    else:
        array_push($msgs, 'Erro ao editar');
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

// Includes do header
include_once __DIR__ . '/../../assets/header.php';
?>

<div class = "center"><h3>EDITAR ESCOLA</h3></div>

<form method = "POST" enctype="multipart/form-data" action = "<?php echo $_SERVER['PHP_SELF'] ?>">

    <!--Envio de id para controller -->
    <input type = "hidden" name = "id_escola" value = "<?php echo $id_escola; ?>">
    <div class = "row">
        <div id = "editar-escola" class = "col l10 m10 offset-l1">
            <?php
            if (!empty($id_escola)):

                // Consulta dos dados de escola
                include_once __DIR__ . '/../../controller/EscolaController.class.php';
                $controllerEscola = new EscolaController();
                $dados = $controllerEscola->buscarEscola($id_escola);

                // Views de edicao
                include_once __DIR__ . '/../../view/Escola/editarEscola.view.php';
                include_once __DIR__ . '/../../view/Escola/editarEndereco.view.php';

            endif;
            ?>
            <div id="buttons" class="col l12"></br>
                </br><div class="col l3 offset-l3">
                    <a class="waves-effect waves-light btn blue" href="listar-escolas.php"><i class="material-icons left">arrow_back</i>Voltar</a>
                </div>
                <div class="col l3 offset-l2">
                    <button class="btn waves-effect waves-light orange" type="submit" name="btn-atualizar">Atualizar
                        <i class="material-icons right">update</i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
</br>

<?php
// Includes
include_once __DIR__ . '/../../assets/footer.php';


