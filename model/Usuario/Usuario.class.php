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
    private $login;
    private $senha;
    
    function __construct($tipo, $login, $senha) {
        $this->tipo = $tipo;
        $this->login = $login;
        $this->senha = $senha;
    }

    
    function getId() {
        return $this->id;
    }

    function getTipo() {
        return $this->tipo;
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

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }


}
