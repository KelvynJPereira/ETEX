<?php

include_once __DIR__ . "./InterfaceEscola.interface.php";
include_once __DIR__ . '../../.config/Database.class.php';

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

    public function inserirEscola(Escola $escola) {

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
        
    }

    public function listarEscolas() {
        
    }

    public function editarEscola(Escola $escola, $idEscolaEditar) {
        
    }

    public function excluirEscola($id) {
        
    }

    public function buscarEscola($id) {
        
    }

}
