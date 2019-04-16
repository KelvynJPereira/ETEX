<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Turyng
 */
interface InterfaceAluno {

    /*
     * Assinaturas
     * 
     * Ações disponíveis na classe Aluno
     */

    // Create, Update, Read, Delete 
    
    public function inserirAluno(Aluno $aluno);

    public function listarAlunos();

    public function buscarAluno($id);

    public function editarAluno(Aluno $aluno, $idAlunoEditar);

    public function excluirAluno($id);
}
