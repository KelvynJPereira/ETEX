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

    public function cadastrarEscola(Escola $escola) {
        $inserir = new EscolaDao();
        return $inserir->cadastrarEscola($escola);
    }

    public function buscarEscola($id) {
        $buscar = new EscolaDao();
        return $buscar->buscarEscola($id);
        
    }
    
     public function buscarEscolaCnpj($idCnpj) {
        $buscar = new EscolaDao();
        return $buscar->buscarEscolaCnpj($idCnpj);
        
    }

    public function editarEscola(Escola $escola, $idEscolaEditar) {
        $editar = new EscolaDao();
        return $editar->editarEscola($escola, $idEscolaEditar);
        
    }

    public function excluirEscola($idEscolaExcluir) {
        $excluir = new EscolaDao();
        return $excluir->excluirEscola($idEscolaExcluir);
    }

    public function listarEscolasAdmin($id) {
        $listar = new EscolaDao();
        return $listar->listarEscolasAdmin($id);
        
    }

}
