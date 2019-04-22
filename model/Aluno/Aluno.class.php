<?php

include_once __DIR__ . '/../Pessoa/Pessoa.class.php';

/*
 * Implementacoes
 * 
 * - Adicionar atributo Responsavel financeiro a classe AlunoDao
 */



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Aluno
 *
 * @author Turyng
 */
class Aluno extends Pessoa {

    // Atributos
    private $matricula = null; // Matricula será ano + serie + turma 
    private $respFinanceiro = false; // Verdadeiro ou falso




    // Métodos

    function getMatricula() {
        return $this->matricula;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

}
