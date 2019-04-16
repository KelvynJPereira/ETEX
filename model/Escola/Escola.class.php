<?php


class Escola {

    // Atributos Escola
    
    private $id_escola;
    private $nome_escola;
    private $cpnj_escola;
    private $foneF_escola;
    private $foneC_escola;
    private $email_escola;
    private $tipo_escola;
    
    

    function __construct($nome_escola, $cpnj_escola, $foneF_escola, $foneC_escola, $email_escola, $tipo_escola) {
        $this->nome_escola = $nome_escola;
        $this->cpnj_escola = $cpnj_escola;
        $this->foneF_escola = $foneF_escola;
        $this->foneC_escola = $foneC_escola;
        $this->email_escola = $email_escola;
        $this->tipo_escola = $tipo_escola;
    }

    function getId_escola() {
        return $this->id_escola;
    }

    function getNome_escola() {
        return $this->nome_escola;
    }

    function getCpnj_escola() {
        return $this->cpnj_escola;
    }

    function getFoneF_escola() {
        return $this->foneF_escola;
    }

    function getFoneC_escola() {
        return $this->foneC_escola;
    }

    function getEmail_escola() {
        return $this->email_escola;
    }

    function getTipo_escola() {
        return $this->tipo_escola;
    }

    function setId_escola($id_escola) {
        $this->id_escola = $id_escola;
    }

    function setNome_escola($nome_escola) {
        $this->nome_escola = $nome_escola;
    }

    function setCpnj_escola($cpnj_escola) {
        $this->cpnj_escola = $cpnj_escola;
    }

    function setFoneF_escola($foneF_escola) {
        $this->foneF_escola = $foneF_escola;
    }

    function setFoneC_escola($foneC_escola) {
        $this->foneC_escola = $foneC_escola;
    }

    function setEmail_escola($email_escola) {
        $this->email_escola = $email_escola;
    }

    function setTipo_escola($tipo_escola) {
        $this->tipo_escola = $tipo_escola;
    }



}
