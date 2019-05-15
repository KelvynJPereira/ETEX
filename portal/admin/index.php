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
session_unset();
session_abort();

// Consuta de dados cadastrados
include_once __DIR__ . '/../../controller/AdminController.class.php';
$controllerAdmin = new AdminController();
$dados_admin = $controllerAdmin->buscarAdmin($cpf_admin);

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
else:

    include_once __DIR__.'/../../view/Admin/painelAdmin.php';
 
endif;

?>









































<!--


        echo "<h1>Seja bem-vindo " . $admin['nome_admin'] . "</h1>";
        echo "<h1>Unidades cadastradas:</h1>";
        foreach ($escola as $item):
        echo $item['nome_escola'] . "</br>";
        endforeach;
        ?>
        */

        <a href="../../index.php">Sair</a>


        <div class="row">
            <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
                <li class="tab"><a href="#test1">ESCOLA</a></li>
                <li class="tab"><a class="active" href="#test2">ALUNOS</a></li>
                <li class="tab"><a href="#test3">FUNCIONARIOS</a></li>
                <li class="tab"><a href="#test4">FINANCEIRO</a></li>
                <li class="tab"><a href="#test0">ADMINISTRATIVO</a></li>
            </ul>
            <div id="test1" class="col s12">




            </div>
            <div id="test2" class="col s12">






                <a href="../../app/aluno/cadastro-aluno.php">Cadastrar Aluno</a></div>

            <div id="test3" class="col s12"><p>Test 3</p></div>
            <div id="test4" class="col s12"><p>Test 4</p></div>
            <div id="test0" class="col s12"><p>Test 5</p></div>

-->
</body>
</html>

<?php
include_once __DIR__ . '/../../assets/footer.php';
?>



