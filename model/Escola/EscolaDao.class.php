<?php

include_once __DIR__ . "./InterfaceEscola.interface.php";
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

        /*
         * Variaveis
         */
        
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

        $stmt = $conn->prepare("INSERT INTO `escola`
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
            return "Escola cadastrada com sucesso!";
        } catch (Exception $e) {
            return "Erro: " . $e;
        }
    }

    public function listarEscolas() {
        
        
    }

    public function editarEscola(Escola $escola, $idEscolaEditar) {
        
    }

    public function excluirEscola($id) {
        
    }

    public function buscarEscola($id) {
        
    }

    public function listarEscolasAdmin($id) {
       
        // Cria conexão 

        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();
        
        // Variaveis 
        
        $idAdmin = $id;
        
        $stmt = $conn->prepare("SELECT nome_escola from escola WHERE fk_id_adm = :ID");
        
        $stmt->bindParam(":ID",$idAdmin);
        
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
