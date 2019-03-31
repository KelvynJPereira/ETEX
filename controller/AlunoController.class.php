<?php

// Includes

include_once __DIR__.'\..\model\Aluno\AlunoDao.class.php';
include_once __DIR__.'\..\model\Aluno\Aluno.class.php';

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
    
    public function listarAlunos(){
        $consultarAlunos = new AlunoDao();
        $consultarAlunos->consultarAlunos();
    }
    
    public function buscarAluno($id){
        $consultarAluno = new AlunoDao();
        $consultarAluno->consutarAluno($id);
    }
       
    public function editarAluno(Aluno $alunoEditar){
        $editar = new AlunoDao();
        $editar->editarAluno($alunoEditar);
    }
  
    public function excluirAluno($id){
        $excluirAluno = new AlunoDao();
        $excluirAluno->excluirAluno($id);
    }
    
    
    
}
