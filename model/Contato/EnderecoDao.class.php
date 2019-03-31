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

    public function cadastrarEndereco(Endereco $endereco, $id) {
        
        
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
        $tipoEndereco = $endereco->getTipoEndereco(); // 0 - Admin, 1 - Instituicao, 2 - Funcionario, 3 - Aluno;
        
        // Criação da query

        $stmt = $conn->prepare("INSERT INTO `endereco`(
                `endereco_numero`,
                `endereco_rua`,
                `endereco_bairro`,
                `endereco_cidade`,
                `endereco_estado`,
                `endereco_pais`,
                `endereco_cep`,
                `endereco_tipo`,
                `id_usuario`) 
                VALUES (:NUMERO,
                :RUA,
                :BAIRRO,
                :CIDADE,
                :ESTADO,
                :PAIS,
                :CEP,
                :TIPO,
                :ID)");
        
        // União das variáveis com comando slq

        $stmt->bindParam(":NUMERO", $numero);
        $stmt->bindParam(":RUA", $rua);
        $stmt->bindParam(":BAIRRO", $bairro);
        $stmt->bindParam(":CIDADE", $cidade);
        $stmt->bindParam(":ESTADO", $estado);
        $stmt->bindParam(":PAIS", $pais);
        $stmt->bindParam(":CEP", $cep);
        $stmt->bindParam(":TIPO", $tipoEndereco); // 0 - Admin, 1 - Instituicao, 2 - Funcionario, 3 - Aluno;
        $stmt->bindParam(":ID", $id);
        
        // Execução da query

        try {
            $stmt->execute();
            
            echo 'Endereco cadastrado com sucesso!'; // <= Mudar isso
        } catch (Exception $exc) {
            echo 'Erro '. $exc;
        }
  
    }

}
