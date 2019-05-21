<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InterfaceCurso
 *
 * @author Turyng
 */
interface InterfaceCurso {

    //put your code here
    public function cadastrarCurso($curso);

    public function editarCurso($id, $curso);

    public function listarCursos();

    public function buscarCurso($codigo);
    
    
}
