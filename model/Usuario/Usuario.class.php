<?php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuarios
 *
 * @author Turyng
 */
class Usuario {
    //put your code here
    
    private $id;
    private $login;
    private $senha;
    private $cpf;
    private $permissao;
    
    function __construct($login, $senha, $cpf, $permissao) {
        $this->login = $login;
        $this->senha = $senha;
        $this->cpf = $cpf;
        $this->permissao = $permissao;
    }

    
    function getId() {
        return $this->id;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getPermissao() {
        return $this->permissao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setPermissao($permissao) {
        $this->permissao = $permissao;
    }


 
    
    
    
    
}
