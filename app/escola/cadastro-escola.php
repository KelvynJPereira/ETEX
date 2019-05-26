<?php

// Array de mensagens e erros
$msgs = [];

// Verificacao de usuario logado
session_start();
if (!$_SESSION['logado']):
    header("Location: ../../index.php");
endif;

// Metodo de cadastro
if (isset($_POST['btn-cadastrar'])):

    // Sanitização
    $filter = $_POST;

    // Dados
    $nome = $filter['nome'] = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cnpj = $filter['cnpj'] = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_STRING);
    $tipo_ensino = $filter['ensino'] = filter_input(INPUT_POST, 'ensino', FILTER_SANITIZE_STRING);
    $foneF = $filter['foneF'] = filter_input(INPUT_POST, 'foneF', FILTER_SANITIZE_STRING);
    $foneC = $filter['foneP'] = filter_input(INPUT_POST, 'foneP', FILTER_SANITIZE_STRING);
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

    // Logo
    $logo = null;

    // Upload de imagem
    // Recuperacao da imagem
    $img = $_FILES['logo'];
    
    if ($img['error']):
        $logo = "escola-padrao.png";
    endif;

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


    // Criacao de objeto escola
    include_once __DIR__ . '/../../model/Escola/Escola.class.php';
    $escola = new Escola($nome, $cnpj, $tipo_ensino, $foneF, $foneC, $email, $site, $numero, $rua, $bairro, $cidade, $estado, $pais, $cep, $logo);

    // Chamada do metodo de cadastro de escola
    include_once __DIR__ . '/../../controller/EscolaController.class.php';
    $controllerEscola = new EscolaController();
    $escola = $controllerEscola->cadastrarEscola($escola);


    if (!empty($escola['id_escola'])):
        // Associacao da escola ao admin
        include_once __DIR__ . '/../../controller/AdminController.class.php';
        $controllerAdmin = new AdminController();

        // Recuperacao de admin logado e escola cadastrada
        $id_admin_escola = $_SESSION['logado'];
        $id_escola = $escola['id_escola'];

        // Execucao do metodo        
        $controllerAdmin->cadastrarAdminEscola($id_admin_escola, $id_escola);
        array_push($msgs, 'Escola cadastrada!');

    else:
        array_push($msgs, 'Escola NÃO cadastrada!');
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
<!-- Formulário cadastro de escolas -->
<div class="center">
    <h4>CADASTRO DE ESCOLA</h4>
</div>
<form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php
    include_once __DIR__ . '/../../view/Escola/cadastroEscola.view.php';
    include_once __DIR__ . '/../../view/Endereco/cadastroEndereco.view.php'
    ?>
    <div class="col l12"></br>
        <div class="row">
            <div class="col l3 offset-l3">
                <a class="btn waves-effect waves-light blue" href="listar-escolas">Voltar
                    <i class="material-icons left">arrow_back</i>
                </a>
            </div>
            <div class="col l2 offset-l2">
                <button class="btn waves-effect waves-light green" type="submit" name="btn-cadastrar">Cadastrar
                    <i class="material-icons right">add_circle</i>
                </button>
            </div>
        </div>
    </div>
</form>

<?php
include_once __DIR__ . '/../../assets/footer.php';
?>

