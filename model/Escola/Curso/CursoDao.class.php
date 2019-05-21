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

    public function cadastrarCurso($curso) {

        // Cria conexão 
        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();
        
        
        
    }

    public function buscarCurso($codigo) {
        
    }

    public function editarCurso($id, $curso) {
        
    }

    public function listarCursos() {
        
    }

}
