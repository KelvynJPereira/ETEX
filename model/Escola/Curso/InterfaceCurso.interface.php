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
    public function cadastrarCurso(Curso $curso, $id_coordenador, $id_professor, $id_escola);

    public function editarCurso($id, $curso);

    public function buscarCurso(Curso $codigo);
    
    public function listarCursos($idEscola);
}
