<?php

include_once __DIR__.'/../model/Escola/InterfaceEscola.interface.php';
include_once __DIR__.'/../model/Escola/Curso/CursoDao.class.php';


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CursoController
 *
 * @author Turyng
 */
class CursoController implements InterfaceCurso{
    //put your code here
    
    public function cadastrarCurso(Curso $curso, $id_coordenador, $id_professor, $id_escola) {
        $cadastrar = new CursoDao();
        return $cadastrar->cadastrarCurso($curso, $id_coordenador, $id_professor, $id_escola);
    }
    
    public function buscarCurso($codigo) {
        
    }

    public function editarCurso($id, $curso) {
        
    }

    public function listarCursos($idEscola) {
        $listar = new CursoDao();
        return $listar->listarCursos($idEscola);
        
    }

}
