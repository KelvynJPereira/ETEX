<?php

include_once __DIR__ . './InterfaceEndereco.interface.php';
include_once __DIR__ . '/../../.config/Database.class.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EnderecoDao
 *
 * @author Turyng
 */
class EnderecoDao implements InterfaceEndereco {

    //put your code here

    public function cadastrarEndereco(Endereco $endereco) {
        
        
        /*
         * Verificar modo correto de relacionar informações de usuário com endereco
         */
        
         // Cria conexão 
        
        $db_conexao = new Database(); 
        $conn = $db_conexao->dbConexao();

        // Variaveis

        $numero = $endereco->getNumero();
        $rua = $endereco->getRua();
        $bairro = $endereco->getBairro();
        $cidade = $endereco->getCidade();
        $estado = $endereco->getEstado();
        $pais = $endereco->getPais();
        $cep = $endereco->getCep();
        
        // Criação da query

        $stmt = $conn->prepare("INSERT INTO `endereco`(
                `endereco_numero`,
                `endereco_rua`,
                `endereco_bairro`,
                `endereco_cidade`,
                `endereco_estado`,
                `endereco_pais`,
                `endereco_cep`) 
                VALUES 
                (:NUMERO,
                :RUA,
                :BAIRRO,
                :CIDADE,
                :ESTADO,
                :PAIS,
                :CEP)");
        
        // União das variáveis com comando slq

        $stmt->bindParam(":NUMERO", $numero);
        $stmt->bindParam(":RUA", $rua);
        $stmt->bindParam(":BAIRRO", $bairro);
        $stmt->bindParam(":CIDADE", $cidade);
        $stmt->bindParam(":ESTADO", $estado);
        $stmt->bindParam(":PAIS", $pais);
        $stmt->bindParam(":CEP", $cep);
        
        // Execução da query
        
        var_dump($endereco);

        try {
            $stmt->execute();
            
            echo 'Endereco cadastrado com sucesso!'; // <= Mudar isso
        } catch (Exception $exc) {
            echo 'Erro '. $exc;
        }
  
    }

}
