<?php

include_once './AlunoDao.class.php';
include_once './Aluno.class.php';
include_once './AlunoController.class.php';


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
  
    
    public function cadastrarAluno(Aluno $aluno){
        $cadastrarAluno = new AlunoDao();
        $cadastrarAluno->inserirAluno($aluno);
    }
    
    public function consultarAlunos(){
        $consultarAlunos = new AlunoDao();
        $consultarAlunos->consultarAlunos();
    }
    
    public function consultarAluno($matricula){
        $consultarAluno = new AlunoDao();
        $consultarAluno->consutarAluno($matricula);
    }
       
    public function editarAluno(Aluno $aluno, $matricula){
        $editarAluno = new AlunoDao();
        $editarAluno->editarAluno($aluno, $matricula);
    }

    public function excluirAluno($matricula){
        $excluirAluno = new AlunoDao();
        $excluirAluno->excluirAluno($matricula);
    }
    
    
    
}
