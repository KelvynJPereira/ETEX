<?php

session_start();

if($_SESSION['logado'] != true):
    header("Location: ../../index.php");
endif;

$user = $_SESSION['user'];

include_once __DIR__.'/../../controller/AdminController.class.php';
$buscar = new AdminController();
$admin = $buscar->buscarUsuario($user);
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
        
        
        echo "<h1>Seja bem-vindo ".$admin['nome_admin']."</h1>";
        
        
        
        ?>
        
        <a href="../../index.php">Sair</a>
        
        
    </body>
</html>
