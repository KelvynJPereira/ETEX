<?php

include_once __DIR__ . '/../model/Escola/InterfaceEscola.interface.php';
include_once __DIR__.'/../model/Escola/EscolaDao.class.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EscolaController
 *
 * @author Turyng
 */
class EscolaController implements InterfaceEscola {

    //put your code here

    public function inserirEscola(Escola $escola) {
        $inserir = new EscolaDao();
        return $inserir->inserirEscola($escola);
    }

    public function buscarEscola($id) {
        
    }

    public function editarEscola(\Escola $escola, $idEscolaEditar) {
        
    }

    public function excluirEscola($id) {
        
    }

    public function listarEscolas() {
        
    }

}