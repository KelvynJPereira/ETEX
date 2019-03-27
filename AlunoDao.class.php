<?php

include_once './InterfaceAluno.class.php';

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

        // Conexão com banco

        include_once './dataBase.class.php';

        // Variaveis
        
        $matricula = $aluno->getMatricula();
        $nome = $aluno->getNome();
        $sobrenome = $aluno->getSobrenome();
        $nascimento = $aluno->getNascimento();
        $cor = $aluno->getCor();

        // Criação da query

        $stmt = $conn->prepare("INSERT INTO `alunos_inst`
                (`matricula_aluno`,
                `nome_aluno`,
                `sobrenome_aluno`,
                `nascimento_aluno`,
                `cor_aluno`)
                VALUES (:MATRICULA, :NOME, :SOBRENOME, :IDADE, :COR)");


        // União das variáveis com comando slq
        
        $stmt->bindParam(":MATRICULA", $matricula);
        $stmt->bindParam(":NOME", $nome);
        $stmt->bindParam(":SOBRENOME", $sobrenome);
        $stmt->bindParam(":IDADE", $nascimento);
        $stmt->bindParam(":COR", $cor);

        // Execução da query

        try {
            $stmt->execute();
            echo 'Aluno cadastrado com sucesso!';
        } catch (Exception $exc) {
            echo $exc();
        }
    }

    public function editarAluno() {
        
    }

    public function consultarAluno() {
        
    }

    public function excluirAluno() {
        
    }

}
