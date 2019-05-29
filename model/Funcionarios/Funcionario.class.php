<?php

include_once __DIR__ . '/../Pessoa/Pessoa.class.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funcionario
 *
 * @author Turyng
 */
class Funcionario{

    //put your code here
    // Profissionais
    private $cargo ;
    private $nCTP ;
    private $salario ;
    
    private $nome;
    private $sobrenome ;
    private $nascimento ;
    private $sexo ;
    private $cor ;
    private $cpf ;
    //private $estadoCivil ;


    // Contato
    
    private $foneF ;
    private $foneP ;
    private $email ;
    

    // Endereco 
    private $numero ;
    private $rua ;
    private $bairro ;
    private $cidade ;
    private $estado ;
    private $pais ;
    private $cep ;
    
    // Imagem
    private $fotoPerfil ;
    
 
    
    function __construct($cargo, $nCTP, $salario, $nome, $sobrenome, $nascimento, $sexo, $cor, $cpf, $foneF, $foneP, $email, $numero, $rua, $bairro, $cidade, $estado, $pais, $cep, $fotoPerfil) {
        $this->cargo = $cargo;
        $this->nCTP = $nCTP;
        $this->salario = $salario;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->nascimento = $nascimento;
        $this->sexo = $sexo;
        $this->cor = $cor;
        $this->cpf = $cpf;
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
        $this->fotoPerfil = $fotoPerfil;
    }

    function getCargo() {
        return $this->cargo;
    }

    function getNCTP() {
        return $this->nCTP;
    }

    function getSalario() {
        return $this->salario;
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

    function getCor() {
        return $this->cor;
    }

    function getCpf() {
        return $this->cpf;
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

    function getFotoPerfil() {
        return $this->fotoPerfil;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setNCTP($nCTP) {
        $this->nCTP = $nCTP;
    }

    function setSalario($salario) {
        $this->salario = $salario;
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

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
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

    function setFotoPerfil($fotoPerfil) {
        $this->fotoPerfil = $fotoPerfil;
    }
 

}
