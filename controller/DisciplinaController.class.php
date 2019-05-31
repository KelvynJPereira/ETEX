<?php

include_once __DIR__.'/../model/Escola/Disciplina/InterfaceDisciplina.interface.php';
include_once __DIR__.'/../model/Escola/Disciplina/DisciplinaDao.class.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DisciplinaController
 *
 * @author Turyng
 */
class DisciplinaController implements InterfaceDisciplina{
    
    //put your code here
    public function cadastrarDisciplina(Disciplina $disciplina, $id_professor, $id_escola) {
        $cadastrar = new DisciplinaDao();
        return $cadastrar->cadastrarDisciplina($disciplina, $id_professor, $id_escola);
        
    }

    public function listarDisciplina($id_escola) {
        $listar = new DisciplinaDao();
        return $listar->listarDisciplina($id_escola);
    }

}
