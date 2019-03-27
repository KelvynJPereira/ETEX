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

    // Insert

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

    // Read *

    public function consultarAlunos() {

        // Conexão com banco

        include_once './dataBase.class.php';

        $stmt = $conn->prepare("SELECT * FROM `alunos_inst`");

        try {
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            var_dump($results);
        } catch (Exception $exc) {
            echo $exc();
        }
    }

    // Read

    public function consutarAluno($matricula) {

        // Conexão com banco

        include_once './dataBase.class.php';

        // Criação da query 

        $stmt = $conn->prepare("SELECT `nome_aluno`,
                `sobrenome_aluno`,
                `nascimento_aluno`,
                `cor_aluno`
                FROM `alunos_inst` 
                WHERE matricula_aluno = :MATRICULA");

        // União das variáveis com comando slq

        $stmt->bindParam(":MATRICULA", $matricula);

        // Execução da query

        try {
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            var_dump($result);
        } catch (Exception $exc) {
            echo $exc();
        }
    }

    // Update NÃO TÁ DANDO UPDATE

    public function editarAluno(Aluno $aluno, $matricula) {

        // Conexão com banco

        include_once './dataBase.class.php';

        // Variaveis

        $nome = $aluno->getNome();
        $sobrenome = $aluno->getSobrenome();
        $nascimento = $aluno->getNascimento();
        $cor = $aluno->getCor();

        // Criação da query 

        $stmt = $conn->prepare("UPDATE `alunos_inst`
                SET `nome_aluno`= :NOME,
                `sobrenome_aluno`= :SOBRENOME,
                `nascimento_aluno`= :IDADE,
                `cor_aluno`= :COR
                WHERE = :MATRICULA");

        // União das variáveis com comando slq

        $stmt->bindParam(":NOME", $nome);
        $stmt->bindParam(":SOBRENOME", $sobrenome);
        $stmt->bindParam(":IDADE", $nascimento);
        $stmt->bindParam(":COR", $cor);
        $stmt->bindParam(":MATRICULA", $matricula);

        // Execução da query

        try {
            $stmt->execute();
            echo 'O novo aluno foi editado com sucesso!';
        } catch (Exception $exc) {
            echo $exc();
        }
    }

    // Delete

    public function excluirAluno($matricula) {

        // Conexão com banco

        include_once './dataBase.class.php';

        // Criação da query 

        $stmt = $conn->prepare("DELETE FROM `alunos_inst`
                WHERE matricula_aluno = :MATRICULA");


        // União das variáveis com comando slq

        $stmt->bindParam(":MATRICULA", $matricula);

        // Execução da query

        try {
            $stmt->execute();
            echo 'Aluno de matricula ' . $matricula . ' foi excluido com sucesso!';
        } catch (Exception $exc) {
            echo $exc();
        }
    }

}
