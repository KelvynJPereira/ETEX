<?php

include_once __DIR__.'/../Empresa/Empresa.class.php';

class Escola extends Empresa {
    
    private $idAdministrativo; // Identificador administrativo
    private $tipoEnsino;  // Ensino fundamental, médio, técnico, etc.
    private $gre; // Gerencia regional de educacao 
    
    
    
    // Getters and Setters
   
    function getIdAdministrativo() {
        return $this->idAdministrativo;
    }

    function getTipoEnsino() {
        return $this->tipoEnsino;
    }

    function getGre() {
        return $this->gre;
    }

    function setIdAdministrativo($idAdministrativo) {
        $this->idAdministrativo = $idAdministrativo;
    }

    function setTipoEnsino($tipoEnsino) {
        $this->tipoEnsino = $tipoEnsino;
    }

    function setGre($gre) {
        $this->gre = $gre;
    }




    
  
}
