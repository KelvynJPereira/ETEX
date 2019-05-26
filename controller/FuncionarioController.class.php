<?php

include_once __DIR__ . '/../model/Funcionarios/InterfaceFuncionario.interface.php';
include_once __DIR__.'/../model/Funcionarios/FuncionariosDao.class.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FuncionarioController
 *
 * @author Turyng
 */
class FuncionarioController implements InterfaceFuncionario {

    public function cadastrarFuncionaro(Funcionario $funcionario) {
        $cadastrar = new FuncionariosDao();
        return $cadastrar->cadastrarFuncionaro($funcionario);
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

}
