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
interface InterfaceCrudAluno {

    /*
     * Assinaturas
     * 
     * Ações disponíveis na classe Aluno
     */

    // Create, Update, Read, Delete 
    
    public function inserirAluno(Aluno $alunoInserir);

    public function listarAlunos();

    public function buscarAluno($idBuscar);

    public function editarAluno(Aluno $aluno, $idAlunoEditar);

    public function excluirAluno($idExcluir);
}
