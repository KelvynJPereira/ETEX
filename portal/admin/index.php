<?php

// Variavel de erros
$erros = [];

// Verifica se usuario realizou o login
session_start();
if (!$_SESSION['logado']):
    header("Location: ../../index.php");
endif;

// Recuperacao de usuario
$cpf_admin = $_SESSION['cpf_admin'];

// Consuta de dados cadastrados
include_once __DIR__ . '/../../controller/AdminController.class.php';
$controllerAdmin = new AdminController();
$dados_admin = $controllerAdmin->buscarAdmin($cpf_admin);
$_SESSION['logado'] = $dados_admin['id_admin'];

// Verificao de existencia de usuario
if (!empty($dados_admin)):

    // Recuperacao de escola do usuario
    include_once '../../controller/EscolaController.class.php';
    $controllerEscola = new EscolaController();
    $escolas_admin = $controllerEscola->listarEscolasAdmin($dados_admin['id_admin']);

    // Quantidade de escolas
    $qtd_escolas = count($escolas_admin);

    // Escola escolhida
    $escola = $escolas_admin;

    // Formata array para a exibicao de apenas uma escola
    if (!empty($_POST)):
        $qtd_escolas = 1;
        $id = $_POST['id_escola'];
        $escola = [$escola[$id]];
    endif;

// Caso usuario nao seja encontrado, salva erro
else:
    array_push($erros, 'Usuario não encontrado');
endif;

// Exibicao de possiveis erros
foreach ($erros as $erro):
    echo $erro;
endforeach;
?>

<?php

// Inclusao do header
include_once __DIR__ . '/../../assets/header.php';
?>

<?php
// Verifica quantidade de escolas do admin
if ($qtd_escolas > 1):
    include_once __DIR__ . '/../../view/Admin/selecionarEscolaAdmin.view.php';
elseif ($qtd_escolas = 1):
    include_once __DIR__ . '/../../view/Admin/painelAdmin.php';
endif;
?>



<?php
// Footer
include_once __DIR__ . '/../../assets/footer.php';
?>



