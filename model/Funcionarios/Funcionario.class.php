<?php

include_once __DIR__.'/../Pessoa/Pessoa.class.php';

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
class Funcionario extends Pessoa{
    //put your code here
    
    private $cargo;
    private $tituloFuncionario;
    private $nRegistro;
    
    
    // Contrato
    private $hEntrada; // Horário de entrada
    private $hSaida;
    private $dataAdmissao;
    private $dataDemissao;
    private $nContrato; // N° do contrato
    private $nCTPS;
    private $nPIS;
    
    // Status
    
    private $status; // Ativo ou não
    // <= Adicionar unidade de lotacao
    
    // Financeiro
    
    private $banco;
    private $agencia;
    private $conta;
    
    // Salario

    private $salario;
    
    // Formacao academica
    
    private $cursos;
    private $titulos;
    private $idiomas;
    
    
    
    function getCargo() {
        return $this->cargo;
    }

    function getTituloFuncionario() {
        return $this->tituloFuncionario;
    }

    function getNRegistro() {
        return $this->nRegistro;
    }

    function getHEntrada() {
        return $this->hEntrada;
    }

    function getHSaida() {
        return $this->hSaida;
    }

    function getDataAdmissao() {
        return $this->dataAdmissao;
    }

    function getDataDemissao() {
        return $this->dataDemissao;
    }

    function getNContrato() {
        return $this->nContrato;
    }

    function getNCTPS() {
        return $this->nCTPS;
    }

    function getNPIS() {
        return $this->nPIS;
    }

    function getStatus() {
        return $this->status;
    }

    function getBanco() {
        return $this->banco;
    }

    function getAgencia() {
        return $this->agencia;
    }

    function getConta() {
        return $this->conta;
    }

    function getSalario() {
        return $this->salario;
    }

    function getCursos() {
        return $this->cursos;
    }

    function getTitulos() {
        return $this->titulos;
    }

    function getIdiomas() {
        return $this->idiomas;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setTituloFuncionario($tituloFuncionario) {
        $this->tituloFuncionario = $tituloFuncionario;
    }

    function setNRegistro($nRegistro) {
        $this->nRegistro = $nRegistro;
    }

    function setHEntrada($hEntrada) {
        $this->hEntrada = $hEntrada;
    }

    function setHSaida($hSaida) {
        $this->hSaida = $hSaida;
    }

    function setDataAdmissao($dataAdmissao) {
        $this->dataAdmissao = $dataAdmissao;
    }

    function setDataDemissao($dataDemissao) {
        $this->dataDemissao = $dataDemissao;
    }

    function setNContrato($nContrato) {
        $this->nContrato = $nContrato;
    }

    function setNCTPS($nCTPS) {
        $this->nCTPS = $nCTPS;
    }

    function setNPIS($nPIS) {
        $this->nPIS = $nPIS;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setBanco($banco) {
        $this->banco = $banco;
    }

    function setAgencia($agencia) {
        $this->agencia = $agencia;
    }

    function setConta($conta) {
        $this->conta = $conta;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }

    function setCursos($cursos) {
        $this->cursos = $cursos;
    }

    function setTitulos($titulos) {
        $this->titulos = $titulos;
    }

    function setIdiomas($idiomas) {
        $this->idiomas = $idiomas;
    }


    
}
