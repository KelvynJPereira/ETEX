<?php

include_once __DIR__ . '/../.config/Database.class.php';
// Receber parametros
$login = $_GET['login'];
$senha = $_GET['senha'];

// Cria conexão
$db_conexao = new Database();
$conn = $db_conexao->dbConexao();

// Criação da query
$stmt = $conn->prepare("SELECT `login_usuario`, `senha_usuario`, `cpf_usuario` FROM `usuarios` WHERE `login_usuario` = :LOGIN AND `senha_usuario` = :SENHA");

// Uniao dos parametros a query
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);

// Execucao da consulta
try {
    $stmt->execute();
    $dados[] = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    print json_encode($dados);
} catch (Exception $ex) {
    echo $ex->getMessage();
}








