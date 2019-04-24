<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Curso
 *
 * @author Turyng
 */
class Curso {
    //put your code here
    
    private $id;
    private $status; // Ativa ou invativa
    private $nome;
    private $nivel; // Fundamental, médio, etc.
    private $objetivo;
   
   
    function __construct($id, $status, $nome, $nivel, $objetivo) {
        $this->id = $id;
        $this->status = $status;
        $this->nome = $nome;
        $this->nivel = $nivel;
        $this->objetivo = $objetivo;   
    }

    
    function getId() {
        return $this->id;
    }

    function getStatus() {
        return $this->status;
    }

    function getNome() {
        return $this->nome;
    }

    function getNivel() {
        return $this->nivel;
    }

    function getObjetivo() {
        return $this->objetivo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNivel($nivel) {
        $this->nivel = $nivel;
    }

    function setObjetivo($objetivo) {
        $this->objetivo = $objetivo;
    }


    
   
    
    
}
