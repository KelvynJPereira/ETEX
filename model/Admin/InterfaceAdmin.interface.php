<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface InterfaceAdmin {
   
    public function cadastrarAdmin(Admin $admin, Usuario $usuario, Escola $escola);

    public function buscarAdmin($cpfAdmin);
}
