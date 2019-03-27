<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Telefone
 *
 * @author Turyng
 */
final class Telefone {

    //put your code here
    // Atributos

    private $idTelefone;
    private $tipoTelefone;
    private $celular = null;
    private $fixo = null;
    private $comercial = null;

   
    
    // Getters e Setters

    function getIdTelefone() {
        return $this->idTelefone;
    }

    function getTipoTelefone() {
        return $this->tipoTelefone;
    }

    function getCelular() {
        return $this->celular;
    }

    function getFixo() {
        return $this->fixo;
    }

    function getComercial() {
        return $this->comercial;
    }

    function setIdTelefone($idTelefone) {
        $this->idTelefone = $idTelefone;
    }

    function setTipoTelefone($tipoTelefone) {
        $this->tipoTelefone = $tipoTelefone;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setFixo($fixo) {
        $this->fixo = $fixo;
    }

    function setComercial($comercial) {
        $this->comercial = $comercial;
    }

    // Outros Métodos

    function showContato() {
        echo 'Tipo de telefone: ' . $this->getTipoTelefone() . '</br>'
        . 'celular: ' . $this->celular . '</br>'
        . 'fixo: ' . $this->comercial . '</br>'
        . 'comercial: ' . $this->fixo;
    }

}
