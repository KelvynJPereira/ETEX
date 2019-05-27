<?php

include_once __DIR__.'/Funcionario.class.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Turyng
 */
interface InterfaceFuncionario {

    //put your code here

    public function cadastrarFuncionaro(Funcionario $funcionario, $id_funcionario);
    
    public function editarFuncionario(Funcionario $funcionario, $idFuncionario);
    
    public function buscarFuncionario($idFuncionario);
    
    public function excluirFuncionario($idFuncionario);
    
    public function listarFuncionarios($idEscola);
    
    public function listarCoordenadores($idEescola);
    
    
}
