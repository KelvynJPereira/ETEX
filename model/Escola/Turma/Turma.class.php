<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Turma
 *
 * @author Turyng
 */
class Turma {
    
    //put your code here
    
    private $dataInicio;
    private $dataFim;
    private $turno; // Manhã, tarde, noite
    private $idTurma; // ex 4°A
    private $status; // Aberta ou Fechada - se fechada não pode cadastrar mais alunos até finalizar.
    private $quantVagas;
    private $nMesesTurma;    
    
    
    
    // Escola <= Lista as escolas cadastradas no CPF do admin
    // Curso <= mostra os cursos cadastrados no CPF do admin
    // Coordenador
    // Professor responsavel
    // Discilplina
    
   
    function getDataInicio() {
        return $this->dataInicio;
    }

    function getDataFim() {
        return $this->dataFim;
    }

    function getTurno() {
        return $this->turno;
    }

    function getIdTurma() {
        return $this->idTurma;
    }

    function getStatus() {
        return $this->status;
    }

    function getQuantVagas() {
        return $this->quantVagas;
    }

    function getNMesesTurma() {
        return $this->nMesesTurma;
    }

    function setDataInicio($dataInicio) {
        $this->dataInicio = $dataInicio;
    }

    function setDataFim($dataFim) {
        $this->dataFim = $dataFim;
    }

    function setTurno($turno) {
        $this->turno = $turno;
    }

    function setIdTurma($idTurma) {
        $this->idTurma = $idTurma;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setQuantVagas($quantVagas) {
        $this->quantVagas = $quantVagas;
    }

    function setNMesesTurma($nMesesTurma) {
        $this->nMesesTurma = $nMesesTurma;
    }


    
   
}
