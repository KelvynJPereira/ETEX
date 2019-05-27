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
class Funcionario extends Pessoa {

    //put your code here
    // Profissionais
    private $cargo;
    private $nCTP;
    private $salario;

    function getCargo() {
        return $this->cargo;
    }

    function getNCTP() {
        return $this->nCTP;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setNCTP($nCTP) {
        $this->nCTP = $nCTP;
    }

    function getSalario() {
        return $this->salario;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }

}
