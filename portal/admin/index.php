<?php
include_once __DIR__ . '/../../assets/header.php';
?>

<?php
session_start();

if ($_SESSION['logado'] != true):
    header("Location: ../../index.php");
endif;

$cpfUser = $_SESSION['user'];

include_once __DIR__ . '/../../controller/AdminController.class.php';
$controllerAdmin = new AdminController();
$admin = $controllerAdmin->buscarAdmin($cpfUser);

// Escolas que pertencem ao admin

$escola = $controllerAdmin->buscarAdminEscola($admin['id_admin']);
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
// Incluir controller da tabela Escolas do admin tal.


        echo "<h1>Seja bem-vindo " . $admin['nome_admin'] . "</h1>";
        echo "<h1>Unidades cadastradas:</h1>";
        foreach ($escola as $item):
            echo $item['nome_escola'] . "</br>";
        endforeach;
        ?>

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
        </div>


    </body>
</html>

<?php
include_once __DIR__ . '/../../assets/footer.php';
?>
