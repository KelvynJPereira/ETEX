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

    // Assinaturas

    public function inserirAluno(Aluno $alunoInserir);

    public function listarAlunos();

    public function buscarAluno($idBuscar);

    public function editarAluno(Aluno $alunoEditar);

    public function excluirAluno($idExcluir);
}
