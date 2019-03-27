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

    //put your code here

    public function inserirAluno(Aluno $aluno);

    public function editarAluno();

    public function consultarAluno();

    public function excluirAluno();
}
