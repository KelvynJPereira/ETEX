<?php

include_once __DIR__ . '/../model/Admin/AdminDao.class.php';
include_once __DIR__ . '/../model/Admin/InterfaceAdmin.interface.php';


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AdminController implements InterfaceAdmin {

    public function cadastrarAdmin(Admin $admin, Usuario $usuario, Escola $escola) {
        $cadastrar = new AdminDao();
        return $cadastrar->cadastrarAdmin($admin, $usuario, $escola);
    }

    public function buscarAdmin($cpfAdmin) {
        $buscar = new AdminDao();
        return $buscar->buscarAdmin($cpfAdmin);
    }
    
   public function cadastrarAdminEscola($idAdmin, $idEscola) {
        $cadastrar = new AdminDao();
        $cadastrar->cadastrarAdminEscola($idAdmin, $idEscola);
    }
    
    public function buscarAdminEscola($idAdmin) {
        $buscar = new AdminDao();
        return $buscar->buscarAdminEscola($idAdmin);
    }
    
    
   

}
