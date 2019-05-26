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

    public function buscarCurso($id);
    
    public function listarCursos($idEscola);
    
    public function excluirCurso($idCurso);
    
    public function buscarCursoCodigo($codigo_curso, $id_escola);
    
  
}
