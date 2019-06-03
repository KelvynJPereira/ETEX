<?php

// Header
header('Content-Type: application/json');

// Include database
include_once __DIR__ . '/../.config/Database.class.php';

// Receber parametros
$aluno = $_GET['id_aluno'];

// Cria conexão
$db_conexao = new Database();
$conn = $db_conexao->dbConexao();

// Criação da query
$stmt = $conn->prepare("SELECT d.nome_disciplina, n_a.nota_1, n_a.nota_2,  n_a.nota_3,  n_a.nota_4 FROM DISCIPLINAS D JOIN NOTAS_ALUNOS N_A ON D.ID_DISCIPLINA = N_A.FK_ID_DISCIPLINA WHERE N_A.FK_ID_ALUNO = :IDALUNO");
// Uniao dos parametros a query
$stmt->bindParam(":IDALUNO", $aluno);

// Execucao da consulta
try {
    $stmt->execute();
    $dados[] = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    print json_encode($dados);
} catch (Exception $ex) {
    echo $ex->getMessage();
}








