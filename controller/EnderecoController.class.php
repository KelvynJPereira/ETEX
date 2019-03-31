<?php

include_once __DIR__.'/../model/Contato/InterfaceEndereco.interface.php';
include_once __DIR__.'/../model/Contato/EnderecoDao.class.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EnderecoController
 *
 * @author Turyng
 */
class EnderecoController implements InterfaceEndereco{
    
//put your code here
    public function cadastrarEndereco(Endereco $endereco, $id) {
        $inserirEndereco = new EnderecoDao();
        $inserirEndereco->cadastrarEndereco($endereco, $id);
    }

}
