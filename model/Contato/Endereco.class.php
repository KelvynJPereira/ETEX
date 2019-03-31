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
 class Endereco {

    //put your code here
    
    // Atributos
    
    private $idEndereco; 
    private $tipoEndereco; // 0 - Admin , 1 - instituicao, 2 -  funcionario,3 - Aluno;
    private $numero = null;
    private $rua = null;
    private $bairro = null;
    private $cidade = null;
    private $estado = null;
    private $pais = null;
    private $cep = null;

    // Construtor
    
    function __construct($tipoEndereco, $numero, $rua, $bairro, $cidade, $estado, $pais, $cep) {
        $this->tipoEndereco = $tipoEndereco;
        $this->numero = $numero;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->pais = $pais;
        $this->cep = $cep;
    }

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
    
    function getCep() {
        return $this->cep;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }


}
