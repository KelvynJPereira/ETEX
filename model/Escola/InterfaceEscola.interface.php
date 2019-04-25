<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Turyng
 */
interface InterfaceEscola {
    //put your code here
    
    public function cadastrarEscola(Escola $escola);

    public function listarEscolas();

    public function buscarEscola($id);

    public function editarEscola(Escola $escola, $idEscolaEditar);

    public function excluirEscola($id);
    
    public function listarEscolasAdmin($id);
        
}
