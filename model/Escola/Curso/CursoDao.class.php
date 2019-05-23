<?php

include_once __DIR__ . '/InterfaceCurso.interface.php';
include_once __DIR__ . '/../../../.config/Database.class.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CursoDao
 *
 * @author Turyng
 */
class CursoDao implements InterfaceCurso {

    //put your code here

    public function cadastrarCurso(Curso $curso, $id_coordenador, $id_professor, $id_escola) {

        // Cria conexão 
        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Recuperacao de variaveis
        $status = $curso->getStatus();
        $nome = $curso->getNome();
        $nivel = $curso->getNivel();
        $objetivo = $curso->getObjetivo();

        // Criacao do codigo do curso
        $date = new DateTime();
        $yc = date_format($date, 'Y');
        $nc = substr($nome, 0, 1);
        $nv = strtoupper(substr($nivel, 0, 1));
        $vr = rand(100, 999);

        // Codigo do curso
        $codigo = $yc . $nv . $nc . $vr;

        // Criacao da query
        $stmt = $conn->prepare("INSERT INTO `cursos`(`codigo_curso`, `ativo_curso`, `nome_curso`, `nivel_curso`, `objetivo_curso`, `fk_coordenador`, `fk_professor`, `fk_escola`) VALUES (:CODIGO, :STATUS, :NOME, :NIVEL ,:OBJETIVO, :COORDENADOR, :PROFESSOR, :ESCOLA)");

        // Uniao das variaveis com sql
        $stmt->bindParam(":CODIGO", $codigo);
        $stmt->bindParam(":STATUS", $status);
        $stmt->bindParam(":NOME", $nome);
        $stmt->bindParam(":NIVEL", $nivel);
        $stmt->bindParam(":OBJETIVO", $objetivo);
        $stmt->bindParam(":COORDENADOR", $id_coordenador);
        $stmt->bindParam(":PROFESSOR", $id_professor);
        $stmt->bindParam(":ESCOLA", $id_escola);

        // Execucao da query
        try {
            $stmt->execute();
            return $codigo;
        } catch (Exception $ex) {
            return $ex;
        }
    }

    public function buscarCurso($codigo) {
        
    }

    public function editarCurso($id, $curso) {
        
    }

    public function listarCursos($idEscola) {

        // Cria conexão 
        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criacao da query
        $stmt = $conn->prepare("select id_curso, c.ativo_curso,c.codigo_curso, c.nome_curso, c.nivel_curso from cursos c join escolas e on e.id_escola = c.fk_escola where e.id_escola = :IDESCOLA");

        // Uniao das variaveis com query
        $stmt->bindParam("IDESCOLA", $idEscola);

        // Execucao da query com tratamento
        try {
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

}
