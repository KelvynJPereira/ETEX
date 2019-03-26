<?php



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
    private $matricula;

    // Métodos

    function getMatricula() {
        return $this->matricula;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

}
