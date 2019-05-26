<?php

include_once __DIR__ . '/../model/Aluno/AlunoDao.class.php';
include_once __DIR__ . '/../model/Aluno/InterfaceAluno.interface.php';

class AlunoController implements InterfaceAluno {

    public function cadastrarAluno(Aluno $aluno, $id_escola) {
        $cadastrar = new AlunoDao();
        return $cadastrar->cadastrarAluno($aluno, $id_escola);
    }

    public function listarAlunos($id_escola) {
        $listar = new AlunoDao();
        return $listar->listarAlunos($id_escola);
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

    public function matricularAluno($id_aluno, $id_curso, $id_escola) {
        $matricular = new AlunoDao();
        return $matricular->matricularAluno($id_aluno, $id_curso, $id_escola);
    }

}
