<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Classe responsável por interagir com o banco
 *
 * @author Turyng
 */
class AlunoDao implements InterfaceAluno {
    
    //put your code here

    public function inserirAluno(Aluno $aluno) {

        // Criação da query
        
        $stmt = $conn->prepare("INSERT INTO `alunos_inst`
                (`id_aluno`,
                `matricula_aluno`,
                `nome_aluno`,
                `sobrenome_aluno`,
                `nascimento_aluno`,
                `cor_aluno`)
                VALUES (:ID, :MATRICULA, :NOME, :SOBRENOME, :IDADE, :COR )");
        
      
        // União das variáveis com comando slq
        
        $stmt->bindParam(":ID", "default");
        $stmt->bindParam(":MATRICULA", $aluno->getMatricula());
        $stmt->bindParam(":NOME", $aluno->getNome());
        $stmt->bindParam(":SOBRENOME", $aluno->getSobrenome());
        $stmt->bindParam(":IDADE", $aluno->getNascimento());
        $stmt->bindParam(":COR", $aluno->getCor());

        // Execução da query
        
        try {
            $stmt->execute();
            echo "Aluno cadastrado com sucesso!";
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function editarAluno() {
        
    }

    public function consultarAluno() {
        
    }

    public function excluirAluno() {
        
    }

}
