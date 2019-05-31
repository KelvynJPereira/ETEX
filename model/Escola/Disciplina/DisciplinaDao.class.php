<?php

include_once __DIR__ . '/InterfaceDisciplina.interface.php';
include_once __DIR__ . '/../../../.config/Database.class.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DisciplinaDao
 *
 * @author Turyng
 */
class DisciplinaDao implements InterfaceDisciplina {

    //put your code here
    public function cadastrarDisciplina(Disciplina $disciplina, $id_professor, $id_escola) {


        // Cria conexão 
        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Recuperacao de variaveis
        $descricao = $disciplina->getDescricao();

        // Criacao da query
        $stmt = $conn->prepare("INSERT INTO `disciplinas` (`nome_disciplina`, `id_professor`, `id_escola`) VALUES ('$descricao', '$id_professor', '$id_escola')");

        // Execucao da query
        try {
            return $stmt->execute();
        } catch (Exception $ex) {
            return $ex;
        }
    }

    public function listarDisciplina($id_escola) {

        // Cria conexão 
        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();


        // Criacao da query
        $stmt = $conn->prepare("select f.id_funcionario, f.nome_funcionario, d.id_disciplina, d.nome_disciplina from funcionarios f join disciplinas d on f.id_funcionario = d.id_professor WHERE f.fk_id_escola = '$id_escola' AND f.fk_cargo_funcionario = 3");

        // Execucao da query
        try {
           $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $ex) {
            return $ex;
        }
    }

}
