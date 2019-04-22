<?php

include_once __DIR__ . '/../Pessoa/Pessoa.class.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Responsavel
 *
 * @author Turyng
 */
class Responsavel extends Pessoa {

    //put your code here
    
    private $tipoFamiliar; // Mãe, pai, tia, etc
    private $respFinanceiro = false; // Verdadeiro ou falso
    private $idDependente; // Id do aluno dependente
    
    
    
}
