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
    private $tipo; // Admin, Funcionario, Aluno
    private $pessoa;
    private $login;
    private $senha;
    
    function __construct($id, $tipo, $pessoa, $login, $senha) {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->pessoa = $pessoa;
        $this->login = $login;
        $this->senha = $senha;
    }
    
    function getId() {
        return $this->id;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getPessoa() {
        return $this->pessoa;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setPessoa($pessoa) {
        $this->pessoa = $pessoa;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

}
