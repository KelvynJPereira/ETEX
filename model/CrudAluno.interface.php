<?php

include_once './Aluno.class.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Turyng
 */
interface CrudAluno {

    //put your code here

    public function insertAluno(Aluno $aluno);

    public function updateAluno();

    public function selectAluno();

    public function deleteAluno();
}
