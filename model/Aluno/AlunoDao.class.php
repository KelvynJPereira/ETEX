<?php

include_once __DIR__ . '/InterfaceCrudAluno.class.php';
include_once __DIR__ . '/../../.config/Database.class.php';


// Lembrar de fechar conexões após execuções

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
class AlunoDao implements InterfaceCrudAluno {
    
    
    // Inserir Aluno
    
    public function inserirAluno(Aluno $aluno) {  
      
        // Cria conexão 
        
        $db_conexao = new Database(); 
        $conn = $db_conexao->dbConexao();

        // Variaveis

        $nome = $aluno->getNome();
        $sobrenome = $aluno->getSobrenome();
        $nascimento = $aluno->getNascimento();
        $cor = $aluno->getCor();

        // Criação da query

        $stmt = $conn->prepare("INSERT INTO `alunos_inst`
                (`nome_aluno`,
                `sobrenome_aluno`,
                `nascimento_aluno`,
                `cor_aluno`)
                VALUES (:NOME,
                :SOBRENOME,
                :NASCIMENTO,
                :COR)");
        
        // União das variáveis com comando slq

        $stmt->bindParam(":NOME", $nome);
        $stmt->bindParam(":SOBRENOME", $sobrenome);
        $stmt->bindParam(":NASCIMENTO", $nascimento);
        $stmt->bindParam(":COR", $cor);

        // Execução da query

        try {
            $stmt->execute();
            echo 'Aluno cadastrado com sucesso!'; // <= Mudar isso
        } catch (Exception $exc) {
            echo 'Erro '. $exc;
        }
    
    }

    // Listar Alunos
    
    public function listarAlunos() {
    
         // Conexão 
        
        $db_conexao = new Database(); 
        $conn = $db_conexao->dbConexao();
        
        // Criação da query
        
        $stmt = $conn->prepare("SELECT * FROM `alunos_inst`");

        // Execução da query
        
        try {
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            var_dump($results); // <= Alterar para foreach
            $conn = null; // <= Fecha conexao
           
     
          
        } catch (Exception $exc) {
            echo $exc();
        } 
        
    }
    
    public function buscarAluno($idBuscar) {
      
        // Conexão 
        
        $db_conexao = new Database(); 
        $conn = $db_conexao->dbConexao();

        // Criação da query
        
        $stmt = $conn->prepare("SELECT 
                `matricula_aluno`,
                `nome_aluno`,
                `sobrenome_aluno`,
                `nascimento_aluno`,
                `cor_aluno` 
                FROM `alunos_inst` 
                WHERE `id_aluno` = :ID");

        // União das variáveis com comando slq

        $stmt->bindParam(":ID", $idBuscar);

        // Execução da query

        try {
            $stmt->execute(); 
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            var_dump($result); // <= Alterar para foreach
        } catch (Exception $exc) {
            echo $exc;
        }
        
    }

    // Alterar Aluno
    
    public function editarAluno(Aluno $aluno, $idAlunoEditar) { // Verificar como escolher o aluno para editar
        
         // Conexão 
        
        $db_conexao = new Database(); 
        $conn = $db_conexao->dbConexao();      
        
         // Variaveis

        $nome = $aluno->getNome();
        $sobrenome = $aluno->getSobrenome();
        $nascimento = $aluno->getNascimento();
        $cor = $aluno->getCor();
        
        // Criação da query
        
        $stmt = $conn->prepare("UPDATE `alunos_inst`
                SET `nome_aluno`=:NOME,
                `sobrenome_aluno`=:SOBRENOME,
                `nascimento_aluno`=:NASCIMENTO,
                `cor_aluno`=:COR
                WHERE id_aluno = :ID");
        
         // União das variáveis com comando slq

        $stmt->bindParam(":NOME", $nome);
        $stmt->bindParam(":SOBRENOME", $sobrenome);
        $stmt->bindParam(":NASCIMENTO", $nascimento);
        $stmt->bindParam(":COR", $cor);    
        $stmt->bindParam(":ID", $idAlunoEditar); // Id do aluno a ser editado
        
        // Execução da query
        
        try {
            $stmt->execute(); // Mesmo não editando dá ok!
            echo 'Aluno alterado com sucesso'; // <= Mudar isso
        } catch (Exception $exc) {
            echo $exc;
        }
    }
    
    // Exclusão de Aluno

    public function excluirAluno($idExcluir) {
        
        // Conexão 
        
        $db_conexao = new Database(); 
        $conn = $db_conexao->dbConexao();

        // Criação da query 

        $stmt = $conn->prepare("DELETE FROM `alunos_inst`
                WHERE id_aluno = :ID");

        // União das variáveis com comando slq

        $stmt->bindParam(":ID", $idExcluir);

        // Execução da query

        try {
            $stmt->execute(); // Criar um array para erros (não exclui mas diz excluiu)
            echo 'Aluno de matricula ' . $idExcluir . ' foi excluido com sucesso!';
        } catch (Exception $exc) {
            echo $exc();
        }
        
    }
  

}
