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
        $consultarAlunos->listarAlunos();
    }
    
    public function buscarAluno($idBuscar){
        $consultarAluno = new AlunoDao();
        $consultarAluno->buscarAluno($idBuscar);
    }
       
    public function editarAluno(Aluno $aluno, $idAlunoEditar){
        $editar = new AlunoDao();
        $editar->editarAluno($aluno, $idAlunoEditar);
    }
  
    public function excluirAluno($id){
        $excluirAluno = new AlunoDao();
        $excluirAluno->excluirAluno($id);
    }
    
    
    
}
