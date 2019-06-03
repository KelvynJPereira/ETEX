<?php

// Header
header('Content-Type: application/json');

// Include database
include_once __DIR__ . '/../.config/Database.class.php';

// Receber parametro
$cpf_aluno = $_GET['cpf_aluno'];


// Cria conexão
$db_conexao = new Database();
$conn = $db_conexao->dbConexao();

// Criação da query
$stmt = $conn->prepare("SELECT `id_aluno`, `matricula_aluno`, `sexo_aluno`, `nome_aluno`, `sobrenome_aluno`, `cpf_aluno`,`email_aluno` FROM `alunos` WHERE `cpf_aluno` = :CPFALUNO");

// Uniao do parametro com a query
$stmt->bindParam(":CPFALUNO", $cpf_aluno);


// Execucao da consulta
try {
    $stmt->execute();
    $dados[] = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    print json_encode($dados);
} catch (Exception $ex) {
    echo $ex->getMessage();
}










