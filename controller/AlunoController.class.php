<?php

// Includes

include_once __DIR__ . '/../model/Aluno/AlunoDao.class.php';
include_once __DIR__ . '/../model/Aluno/InterfaceAluno.interface.php';

class AlunoController implements InterfaceAluno {

    public function inserirAluno(Aluno $aluno) {
        $cadastrar = new AlunoDao();
        return $cadastrar->inserirAluno($aluno);
    }

    public function listarAlunos() {
        $listar = new AlunoDao();
        return $listar->listarAlunos();
    }

    public function editarAluno(Aluno $aluno, $idAlunoEditar) {
        $editar = new AlunoDao();
       return $editar->editarAluno($aluno, $idAlunoEditar);
    }

    public function buscarAluno($id) {
        $buscar = new AlunoDao();
        return $buscar->buscarAluno($id);
    }

    public function excluirAluno($id) {
        $excluir = new AlunoDao();
        return $excluir->excluirAluno($id);
        
    }
    
    public function matricularAluno($id){
        
    }


}


  
