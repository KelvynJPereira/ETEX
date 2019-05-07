<?php

include_once __DIR__ . '/InterfaceAdmin.interface.php';
include_once __DIR__ . '/../../.config/Database.class.php';



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AdminDao implements InterfaceAdmin {

    public function buscarUsuario($cpfUsuario) {

        // Conexão 

        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criação da query 

        $stmt = $conn->prepare("SELECT `nome_admin` FROM `admin` WHERE `cpf_admin`  = :CPF");

        // União das variáveis com comando slq

        $stmt->bindParam(":CPF", $cpfUsuario);

        // Execução da query

        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return "Erro: " . $e;
        }
    }

}
