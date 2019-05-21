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
    private $codigo; // Codigo da turma
    private $status; // Ativa ou invativa
    private $nome;
    private $nivel; // Fundamental, médio, etc.
    private $objetivo;

    // Construtor
    function __construct($status, $nome, $nivel, $objetivo) {
        $this->status = $status;
        $this->nome = $nome;
        $this->nivel = $nivel;
        $this->objetivo = $objetivo;
    }

    // Getters and Setters
    function getId() {
        return $this->id;
    }

    function getCodigo() {
        return $this->codigo;
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

    function setCodigo($codigo) {
        $this->codigo = $codigo;
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
