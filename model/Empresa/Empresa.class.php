<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empresa
 *
 * @author Turyng
 */
abstract class Empresa {
    
    /*
     * Atributos
     */
    
    // Dados
    
    protected $id;
    protected $nome;
    protected $cnpj;
    protected $tipo;
    
    // Contato
    
    protected $foneF; // Fone fixo
    protected $foneC; // Fone comercial
    protected $site;
    protected $email;
  
    // Endereco
   
    protected $numero;
    protected $rua;
    protected $bairro;
    protected $cidade;
    protected $estado;
    protected $pais;
    protected $cep;
    
    // Logo
    
    protected $logo;
    
    // Financeiro
    
    /*
     * Construtor
     */
    
    function __construct($nome, $cnpj, $tipo, $foneF, $foneC, $site, $email, $numero, $rua, $bairro, $cidade, $estado, $pais, $cep, $logo) {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->tipo = $tipo;
        $this->foneF = $foneF;
        $this->foneC = $foneC;
        $this->site = $site;
        $this->email = $email;
        $this->numero = $numero;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->pais = $pais;
        $this->cep = $cep;
        $this->logo = $logo;
    }
    
    // Getters and Seterrs
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getFoneF() {
        return $this->foneF;
    }

    function getFoneC() {
        return $this->foneC;
    }

    function getSite() {
        return $this->site;
    }

    function getEmail() {
        return $this->email;
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

    function getCep() {
        return $this->cep;
    }

    function getLogo() {
        return $this->logo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setFoneF($foneF) {
        $this->foneF = $foneF;
    }

    function setFoneC($foneC) {
        $this->foneC = $foneC;
    }

    function setSite($site) {
        $this->site = $site;
    }

    function setEmail($email) {
        $this->email = $email;
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

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setLogo($logo) {
        $this->logo = $logo;
    }

  
    
}
