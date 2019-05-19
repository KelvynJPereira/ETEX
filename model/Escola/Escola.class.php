<?php

include_once __DIR__.'/../Empresa/Empresa.class.php';

class Escola extends Empresa {
    

    private $ensino;  // Ensino fundamental, médio, técnico, etc.    
    
    
    function getEnsino() {
        return $this->ensino;
    }

    function setEnsino($ensino) {
        $this->ensino = $ensino;
    }







    
  
}
