<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Endereco
 *
 * @author Turyng
 */
 trait Endereco {

    //put your code here
    
    // Atributos
    
    protected $idEndereco; // Id do endereco.
    protected $tipoEndereco; // 0 - PF || 1 - PJ .
    protected $numero = null;
    protected $rua = null;
    protected $bairro = null;
    protected $cidade = null;
    protected $estado = null;
    protected $pais = null;

    // Construtor
    
  

    
    // Getters e Setters
    
    function getIdEndereco() {
        return $this->idEndereco;
    }

    function getTipoEndereco() {
        return $this->tipoEndereco;
    }

    function getNumero() {
        return $this->numero;
    }

    function getRua() {
        return $this->rua;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getPais() {
        return $this->pais;
    }

    function setIdEndereco($idEndereco) {
        $this->idEndereco = $idEndereco;
    }

    function setTipoEndereco($tipoEndereco) {
        $this->tipoEndereco = $tipoEndereco;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setPais($pais) {
        $this->pais = $pais;
    }

    // Outros métodos

    function showEndereco() {
        echo 'Tipo de endereco: ' . $this->getTipoEndereco() . '</br>'
        . 'número: ' . $this->numero . '</br>'
        . 'rua: ' . $this->rua . '</br>'
        . 'bairro: ' . $this->bairro . '</br>'
        . 'cidade: ' . $this->cidade . '</br>'
        . 'estado: ' . $this->estado . '</br>'
        . 'pais: ' . $this->pais;
    }

}
