<?php

include_once '';

/*
  include_once 'Telefone.class.php';
  include_once 'Endereco.class.php';
 */

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* * 4
 * Description of Pessoa
 *
 * @author Turyng
 */

abstract class Pessoa {

    // Atributos

    protected $id = "default";
    protected $nome = null;
    protected $sobrenome = null;
    protected $nascimento = null;
    protected $sexo = null;
    protected $cor = null;

    // Construtores
    
 
    
    
    // Metodos - Getters e Setters

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getNascimento() {
        return $this->nascimento;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getRg() {
        return $this->rg;
    }

    function getEmail() {
        return $this->email;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function getCor() {
        return $this->cor;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

}
