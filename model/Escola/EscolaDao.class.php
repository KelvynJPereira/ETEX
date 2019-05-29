<?php

include_once __DIR__ . "/InterfaceEscola.interface.php";
include_once __DIR__ . '/../../.config/Database.class.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EscolaDao
 *
 * @author Turyng
 */
class EscolaDao implements InterfaceEscola {

    public function cadastrarEscola(Escola $escola) {

        // Cria conexão 
        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();


        // Dados
        $nome = $escola->getNome();
        $cnpj = $escola->getCnpj();
        $tipo = $escola->getTipo();
        $foneF = $escola->getFoneF();
        $foneC = $escola->getFoneC();
        $email = $escola->getEmail();
        $site = $escola->getSite();

        // Endereco
        $numero = $escola->getNumero();
        $rua = $escola->getRua();
        $bairro = $escola->getBairro();
        $cidade = $escola->getCidade();
        $estado = $escola->getEstado();
        $pais = $escola->getPais();
        $cep = $escola->getCep();

        // Logo
        $logo = $escola->getLogo();

        // Preparacao da query
        $stmt = $conn->prepare("INSERT INTO `escolas`
                (`nome_escola`,
                `cnpj_escola`,
                `tipo_escola`,
                `fone_fixo_escola`,
                `fone_comercial_escola`,
                `site_escola`,
                `email_escola`,
                `numero_endereco_escola`,
                `rua_endereco_escola`,
                `bairro_endereco_escola`,
                `cidade_endereco_escola`,
                `estado_endereco_escola`,
                `pais_endereco_escola`,
                `cep_endereco_escola`,
                `logo_escola`)
                VALUES 
                (:NOME,
                :CNPJ,
                :TIPO,
                :FONEF,
                :FONEC,
                :SITE,
                :EMAIL,
                :NUMERO,
                :RUA,
                :BAIRRO,
                :CIDADE,
                :ESTADO,
                :PAIS,
                :CEP,
                :LOGO)");

        // União de variáveis com comando sql
        $stmt->bindParam(":NOME", $nome);
        $stmt->bindParam(":CNPJ", $cnpj);
        $stmt->bindParam(":TIPO", $tipo);
        $stmt->bindParam(":FONEF", $foneF);
        $stmt->bindParam(":FONEC", $foneC);
        $stmt->bindParam(":SITE", $site);
        $stmt->bindParam(":EMAIL", $email);
        $stmt->bindParam(":NUMERO", $numero);
        $stmt->bindParam(":RUA", $rua);
        $stmt->bindParam(":BAIRRO", $bairro);
        $stmt->bindParam(":CIDADE", $cidade);
        $stmt->bindParam(":ESTADO", $estado);
        $stmt->bindParam(":PAIS", $pais);
        $stmt->bindParam(":CEP", $cep);
        $stmt->bindParam(":LOGO", $logo);

        // Execucao da query
        try {
            $stmt->execute();
            $id_escola['id_escola'] = $conn->lastInsertId();
            return $id_escola;
        } catch (Exception $e) {
            return "Erro: " . $e;
        }
    }

    public function editarEscola(Escola $escola, $idEscolaEditar) {

        // Conexão 
        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Dados
        $nome = $escola->getNome();
        $cnpj = $escola->getCnpj();
        $tipo = $escola->getTipo();
        $foneF = $escola->getFoneF();
        $foneC = $escola->getFoneC();
        $email = $escola->getEmail();
        $site = $escola->getSite();

        // Endereco
        $numero = $escola->getNumero();
        $rua = $escola->getRua();
        $bairro = $escola->getBairro();
        $cidade = $escola->getCidade();
        $estado = $escola->getEstado();
        $pais = $escola->getPais();
        $cep = $escola->getCep();

        // Logo
        $logo = $escola->getLogo();

        // Criacao da query
        $stmt = $conn->prepare("UPDATE `escolas` SET
                `nome_escola` = :NOME,
                `cnpj_escola`= :CNPJ,
                `tipo_escola` = :TIPO,
                `fone_fixo_escola` = :FONEF,
                `fone_comercial_escola` = :FONEC,
                `email_escola` = :EMAIL,
                `numero_endereco_escola` = :NUMERO,
                `rua_endereco_escola` = :RUA,
                `bairro_endereco_escola` = :BAIRRO,
                `cidade_endereco_escola` = :CIDADE,
                `estado_endereco_escola` = :ESTADO,
                `pais_endereco_escola` = :PAIS,
                `cep_endereco_escola` = :CEP,
                `logo_escola` = :LOGO
             
              
                
                
                
                WHERE `id_escola` = :IDESCOLA");

        // Uniao de variaveis
        $stmt->bindParam(":NOME", $nome);
        $stmt->bindParam(":CNPJ", $cnpj);
        $stmt->bindParam(":TIPO", $tipo);
        $stmt->bindParam(":FONEF", $foneF);
        $stmt->bindParam(":FONEC", $foneC);
        $stmt->bindParam(":EMAIL", $email);
        $stmt->bindParam(":NUMERO", $numero);



        $stmt->bindParam(":RUA", $rua);
        $stmt->bindParam(":BAIRRO", $bairro);
        $stmt->bindParam(":CIDADE", $cidade);
        $stmt->bindParam(":ESTADO", $estado);
        $stmt->bindParam(":PAIS", $pais);
        $stmt->bindParam(":CEP", $cep);

        $stmt->bindParam(":LOGO", $logo);




        $stmt->bindParam(":IDESCOLA", $idEscolaEditar);

        // Execucao da query
        try {
            $a = $stmt->execute();
            return $a;
        } catch (Exception $ex) {
            return $ex;
        }
    }

    public function excluirEscola($id) {

        // Conexão 
        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();


        $stmt = $conn->prepare("DELETE FROM `escolas` WHERE `escolas`.`id_escola` = :IDESCOLA");

        // União das variáveis com comando slq

        $stmt->bindParam(":IDESCOLA", $id);

        // Execução da query

        try {
            $stmt->execute();
            return true;
        } catch (Exception $ex) {
            return $ex = "Erro: " . $ex;
        }
    }

    public function buscarEscola($id) {

        // Conexão 

        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criação da query

        $stmt = $conn->prepare("SELECT `nome_escola`, `cnpj_escola`, `tipo_escola`, `fone_fixo_escola`, `fone_comercial_escola`, `email_escola`, `site_escola`, `numero_endereco_escola`, `rua_endereco_escola`, `bairro_endereco_escola`, `cidade_endereco_escola`, `estado_endereco_escola`, `pais_endereco_escola`, `cep_endereco_escola`, `logo_escola` FROM `escolas` WHERE `id_escola` = :ID");

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

    public function listarEscolasAdmin($id) {

        // Cria conexão 
        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criacao da query
        $stmt = $conn->prepare("select * from escolas e join admin_escola a_e on e.id_escola = a_e.id_escola where a_e.id_admin = :ID");

        // Uniao da variavel com query
        $stmt->bindParam(":ID", $id);

        // Execucao e retorno da query
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarEscolaCnpj($cnpj) {

        // Conexão 

        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criação da query

        $stmt = $conn->prepare("SELECT `id_escola`, `nome_escola`, `cnpj_escola`, `tipo_escola`, `fone_fixo_escola`, `fone_comercial_escola`, `email_escola`, `site_escola`, `numero_endereco_escola`, `rua_endereco_escola`, `bairro_endereco_escola`, `cidade_endereco_escola`, `estado_endereco_escola`, `pais_endereco_escola`, `cep_endereco_escola`, `logo_escola` FROM `escolas` WHERE `cnpj_escola` = :CNPJ");

        // União das variáveis com comando slq

        $stmt->bindParam(":CNPJ", $cnpj);

        // Execução da query

        try {
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return $result = "Erro: " . $e;
        }
    }

    public function listarDisciplinasProfessores($idEscola) {

        // Cria conexão 
        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criação da query
        // Professores
        $stmt = $conn->prepare("select f.id_funcionario, f.nome_funcionario, d.id_disciplina, d.nome_disciplina from funcionarios f, disciplinas d, disciplinas_professores d_p where f.id_funcionario = d_p.id_professor and d.id_disciplina = d_p.id_disciplina AND d_p.id_escola = :IDESCOLA");

        // União das variáveis com comando slq
        $stmt->bindParam(":IDESCOLA", $idEscola);

        // Execução da query
        try {
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return $result = "Erro: " . $e;
        }
    }

    public function alunosMatriculados($id_escola) {

        // Cria conexão 
        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criação da query
        $stmt = $conn->prepare("UPDATE `escola_pagamentos_receber` SET `matriculas_efetuadas`=`matriculas_efetuadas` + 1 WHERE `fk_id_escola` =  $id_escola");

        // Execução da query
        try {
            return $stmt->execute();
        } catch (Exception $e) {
            return $result = "Erro: " . $e;
        }
    }

    public function cadastrarEscolaMatriculados($id_escola) {

        // Cria conexão 
        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criação da query
        $stmt = $conn->prepare("INSERT INTO `escola_pagamentos_receber` (`matriculas_efetuadas`, `fk_id_escola`) VALUES ('0', $id_escola)");

        // Execução da query
        try {
            return $stmt->execute();
        } catch (Exception $e) {
            return $result = "Erro: " . $e;
        }
    }

    public function quantidadeM($id_escola) {

        // Cria conexão 
        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criação da query
        // Professores
        $stmt = $conn->prepare("SELECT `matriculas_efetuadas` FROM `escola_pagamentos_receber` WHERE `fk_id_escola` = :IDESCOLA");
        // União das variáveis com comando slq
        $stmt->bindParam(":IDESCOLA", $id_escola);

        // Execução da query
        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return $result = "Erro: " . $e;
        }
    }

}
