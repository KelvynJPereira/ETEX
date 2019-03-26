<?php

include_once './model/AlunoDao.class.php';


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AlunoController
 *
 * @author Turyng
 */
class AlunoController {
    //put your code here
    
    public function cadastrarAluno(Aluno $aluno){
        $inserirAluno = new AlunoDao();
        $inserirAluno->insertAluno($aluno);
    }
    
    
}
