<?php



interface InterfaceDisciplina{
    
public function cadastrarDisciplina(Disciplina $disciplina, $id_professor, $id_escola); 

public function listarDisciplina($id_escola);
   
}

