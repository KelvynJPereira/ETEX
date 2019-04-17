<?php

include_once __DIR__ . '/InterfaceAluno.interface.php';
include_once __DIR__ . '/../../.config/Database.class.php';

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

    // Inserir Aluno

    public function inserirAluno(Aluno $aluno) {

        // Cria conexão 

        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Variaveis
        // Dados

        $nome = $aluno->getNome();
        $sobrenome = $aluno->getSobrenome();
        $nascimento = $aluno->getNascimento();
        $sexo = $aluno->getSexo();
        $cpf = $aluno->getCpf();
        $foneF = $aluno->getFoneF();
        $foneP = $aluno->getFoneP();
        $email = $aluno->getEmail();
        $cor = $aluno->getCor();

        // Endereco

        $numero = $aluno->getNumero();
        $rua = $aluno->getRua();
        $bairro = $aluno->getBairro();
        $cidade = $aluno->getCidade();
        $estado = $aluno->getEstado();
        $pais = $aluno->getPais();
        $cep = $aluno->getCep();

        // Comando SQL

        $stmt = $conn->prepare("INSERT INTO `alunos`
                    (`nome_aluno`,
                    `sobrenome_aluno`,
                    `nascimento_aluno`,
                    `sexo_aluno`,
                    `cpf_aluno`,
                    `fone_fixo_aluno`,
                    `fone_pessoal_aluno`,
                    `email_aluno`,
                    `cor_aluno`,
                    `numero_endereco_aluno`,
                    `rua_endereco_aluno`,
                    `bairro_endereco_aluno`,
                    `cidade_endereco_aluno`,
                    `estado_endereco_aluno`,
                    `pais_endereco_aluno`,
                    `cep_endereco_aluno`)
                    VALUES 
                    (:NOME,
                    :SOBRENOME,
                    :NASCIMENTO,
                    :SEXO,
                    :CPF,
                    :FONEF,
                    :FONEP,
                    :EMAIL,
                    :COR,
                    :NUMERO,
                    :RUA,
                    :BAIRRO,
                    :CIDADE,
                    :ESTADO,
                    :PAIS,
                    :CEP)");

        // União de variáveis com comando sql

        $stmt->bindParam(":NOME", $nome);
        $stmt->bindParam(":SOBRENOME", $sobrenome);
        $stmt->bindParam(":NASCIMENTO", $nascimento);
        $stmt->bindParam(":SEXO", $sexo);
        $stmt->bindParam(":CPF", $cpf);
        $stmt->bindParam(":FONEF", $foneF);
        $stmt->bindParam(":FONEP", $foneP);
        $stmt->bindParam(":EMAIL", $email);
        $stmt->bindParam(":COR", $cor);
        $stmt->bindParam(":NUMERO", $numero);
        $stmt->bindParam(":RUA", $rua);
        $stmt->bindParam(":BAIRRO", $bairro);
        $stmt->bindParam(":CIDADE", $cidade);
        $stmt->bindParam(":ESTADO", $estado);
        $stmt->bindParam(":PAIS", $pais);
        $stmt->bindParam(":CEP", $cep);

        // Execução do sql

        try {
            $result = $stmt->execute();
            if ($result == 1):
                return $result = $aluno->getNome()." foi cadastrado com sucesso!";
            endif;
        } catch (Exception $e) {
            return $result = 'Erro: ' . $e;
        }
    }

    // Listar Alunos

    public function listarAlunos() {

        // Conexão 

        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criação da query

        $stmt = $conn->prepare("SELECT * FROM `alunos`");

        // Execução da query

        try {
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Exception $e) {
            return $result = "Erro: " . $e;
        }
    }

    public function buscarAluno($id) {

        // Conexão 

        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criação da query

        $stmt = $conn->prepare("SELECT `matricula_aluno`,
                    `nome_aluno`,
                    `sobrenome_aluno`,
                    `nascimento_aluno`,
                    `sexo_aluno`,
                    `cpf_aluno`,
                    `fone_fixo_aluno`,
                    `fone_pessoal_aluno`,
                    `email_aluno`,
                    `cor_aluno`,
                    `numero_endereco_aluno`,
                    `rua_endereco_aluno`,
                    `bairro_endereco_aluno`,
                    `cidade_endereco_aluno`,
                    `estado_endereco_aluno`,
                    `pais_endereco_aluno`,
                    `cep_endereco_aluno` 
                    FROM `alunos` WHERE `id_aluno` = :ID");

        // União das variáveis com comando slq

        $stmt->bindParam(":ID", $id);

        // Execução da query

        try {
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return $result = "Erro: " . $e;
        }
    }

    // Alterar Aluno

    public function editarAluno(Aluno $aluno, $idAlunoEditar) {

        // Conexão 

        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Variaveis
        // Dados

        $nome = $aluno->getNome();
        $sobrenome = $aluno->getSobrenome();
        $nascimento = $aluno->getNascimento();
        $sexo = $aluno->getSexo();
        $cpf = $aluno->getCpf();
        $foneF = $aluno->getFoneF();
        $foneP = $aluno->getFoneP();
        $email = $aluno->getEmail();
        $cor = $aluno->getCor();

        // Endereco

        $numero = $aluno->getNumero();
        $rua = $aluno->getRua();
        $bairro = $aluno->getBairro();
        $cidade = $aluno->getCidade();
        $estado = $aluno->getEstado();
        $pais = $aluno->getPais();
        $cep = $aluno->getCep();


        // Comando SQL

        $stmt = $conn->prepare("UPDATE SET `alunos`
                    `nome_aluno` = :NOME,
                    `sobrenome_aluno` = :SOBRENOME,
                    `nascimento_aluno` = :NASCIMENTO,
                    `sexo_aluno` = :SEXO,
                    `cpf_aluno` = :CPF,
                    `fone_fixo_aluno` = :FONEF,
                    `fone_pessoal_aluno` = :FONEP,
                    `email_aluno` = :EMAIL,
                    `cor_aluno` = :COR,
                    `numero_endereco_aluno` = :NUMERO,
                    `rua_endereco_aluno` = :RUA,
                    `bairro_endereco_aluno` = :BAIRRO,
                    `cidade_endereco_aluno` = :CIDADE,
                    `estado_endereco_aluno` = :ESTADO,
                    `pais_endereco_aluno`= :PAIS,
                    `cep_endereco_aluno` = :CEP
                    WHERE `id_aluno` = :ID");

        // União de variáveis com comando sql

        $stmt->bindParam(":NOME", $nome);
        $stmt->bindParam(":SOBRENOME", $sobrenome);
        $stmt->bindParam(":NASCIMENTO", $nascimento);
        $stmt->bindParam(":SEXO", $sexo);
        $stmt->bindParam(":CPF", $cpf);
        $stmt->bindParam(":FONEF", $foneF);
        $stmt->bindParam(":FONEP", $foneP);
        $stmt->bindParam(":EMAIL", $email);
        $stmt->bindParam(":COR", $cor);
        $stmt->bindParam(":NUMERO", $numero);
        $stmt->bindParam(":RUA", $rua);
        $stmt->bindParam(":BAIRRO", $bairro);
        $stmt->bindParam(":CIDADE", $cidade);
        $stmt->bindParam(":ESTADO", $estado);
        $stmt->bindParam(":PAIS", $pais);
        $stmt->bindParam(":CEP", $cep);

        // id aluno update

        $stmt->bindParam(":ID", $idAlunoEditar);

        // Execução da query

        try {
           $result = $stmt->execute();
           if ($result == 1):
                return "Aluno ".$aluno->getNome()." foi excluído com sucesso!";
           endif;
        } catch (Exception $e) {
            return "Erro: " . $e;
        }
    }

    // Exclusão de Aluno

    public function excluirAluno($id) {

        // Conexão 

        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criação da query 

        $stmt = $conn->prepare("DELETE FROM `alunos`
                WHERE id_aluno = :ID");

        // União das variáveis com comando slq

        $stmt->bindParam(":ID", $id);

        // Execução da query

        try {
            $result = $stmt->execute();
            if ($result == 1):
                return $result = "Aluno excluído com sucesso!";
            endif;
        } catch (Exception $e) {
            return "Erro: " . $e;
        }
    }

}
