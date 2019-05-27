<?php

include_once __DIR__ . '/../model/Funcionarios/InterfaceFuncionario.interface.php';
include_once __DIR__ . '/../model/Funcionarios/FuncionariosDao.class.php';

class FuncionarioController implements InterfaceFuncionario {

    public function cadastrarFuncionaro(Funcionario $funcionario, $id_escola) {
        $cadastrar = new FuncionariosDao();
        return $cadastrar->cadastrarFuncionaro($funcionario, $id_escola);
    }

    public function buscarFuncionario($idFuncionario) {
        
    }

    public function editarFuncionario(\Funcionario $funcionario, $idFuncionario) {
        
    }

    public function excluirFuncionario($idFuncionario) {
        
    }

    public function listarFuncionarios($idEscola) {
        
    }

    public function listarCoordenadores($idEescola) {
        $listarCoordenadores = new FuncionariosDao();
        return $listarCoordenadores->listarCoordenadores($idEescola);
    }

    public function listarCargos() {
        $listarCargos = new FuncionariosDao();
        return $listarCargos->listarCargos();
    }

}
