<?php

include_once __DIR__.'/../model/Usuario/InterfaceUsuario.interface.php';
include_once __DIR__.'/../.config/Database.class.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioController
 *
 * @author Turyng
 */
class UsuarioController implements InterfaceUsuario{
    //put your code here
    
    public function cadastrarUsuario($tipo, $login, $senha){
        $cadastrar = new UsuarioDao();
        $cadastrar->cadastrarUsuario($tipo, $login, $senha);
    }
        
}
