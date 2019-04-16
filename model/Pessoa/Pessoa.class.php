<?php

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
    // Dados

    protected $id;
    protected $nome = null;
    protected $sobrenome = null;
    protected $nascimento = null;
    protected $sexo = null;
    protected $cpf = null;
    protected $cor = null;
    protected $foneF = null;
    protected $foneP = null;
    protected $email = null;
    

    // Endereco 

    protected $numero = null;
    protected $rua = null;
    protected $bairro = null;
    protected $cidade = null;
    protected $estado = null;
    protected $pais = null;
    protected $cep = null;

    // Construtores

    public function __construct($nome, $sobrenome, $nascimento, $sexo, $cpf, $cor, $foneF, $foneP, $email, $numero, $rua, $bairro, $cidade, $estado, $pais, $cep) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->nascimento = $nascimento;
        $this->sexo = $sexo;
        $this->cpf = $cpf;
        $this->cor = $cor;
        $this->foneF = $foneF;
        $this->foneP = $foneP;
        $this->email = $email;
        $this->numero = $numero;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->pais = $pais;
        $this->cep = $cep;
    }

    // Metodos - Getters e Setters

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
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

    function getCor() {
        return $this->cor;
    }

    function getFoneF() {
        return $this->foneF;
    }

    function getFoneP() {
        return $this->foneP;
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

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setFoneF($foneF) {
        $this->foneF = $foneF;
    }

    function setFoneP($foneP) {
        $this->foneP = $foneP;
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

}
