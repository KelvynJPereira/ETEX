<?php

include_once __DIR__.'/../model/Login/LoginDao.class.php';



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginController
 *
 * @author Turyng
 */
class LoginController {

    //put your code here

    public function logar($login, $senha) {
        $entrar = new LoginDao();
        return $entrar->logar($login, $senha);
    }

}
