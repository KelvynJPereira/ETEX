<?php

include_once __DIR__ . '/InterfaceAdmin.interface.php';
include_once __DIR__ . '/../../.config/Database.class.php';



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AdminDao implements InterfaceAdmin {

    public function cadastrarAdmin(Admin $admin, Usuario $usario, Escola $escola) {

        // Conexão 

        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();


        // Variaveis
        // Dados
        // Usuario

        $nome = $admin->getNome();
        $cpf = $admin->getCpf();

        // Usuario

        $login = $usario->getLogin();
        $senha = $usario->getSenha();
        $cpfUsuario = $cpf; // CPF do admin
        $permissao = $usario->getPermissao();

        // Escola

        $nomeEscola = $escola->getNome();
        $cnpjEscola = $escola->getCnpj();

        // Comando SQL

        $stmt = $conn->prepare("INSERT INTO `admin` (`nome_admin`, `cpf_admin`) VALUES (:NOME, :CPF)");
        $stmt2 = $conn->prepare("INSERT INTO `usuarios` (`login_usuario`, `senha_usuario`, `cpf_usuario`, `permissao_usuario`) VALUES (:LOGIN, :SENHA, :CPFUSUARIO, :PERMISSAO)");
        $stmt3 = $conn->prepare("INSERT INTO `escola`(`nome_escola`, `cnpj_escola`) VALUES (:NOMEESCOLA, :CNPJ)");


        // União de variáveis com comando sql

        $stmt->bindParam(":NOME", $nome);
        $stmt->bindParam(":CPF", $cpf);

        $stmt2->bindParam(":LOGIN", $login);
        $stmt2->bindParam(":SENHA", $senha);
        $stmt2->bindParam(":CPFUSUARIO", $cpfUsuario);
        $stmt2->bindParam(":PERMISSAO", $permissao);

        $stmt3->bindParam(":NOMEESCOLA", $nomeEscola);
        $stmt3->bindParam(":CNPJ", $cnpjEscola);


        // Tratar erros!
        
            $stmt->execute();
            $id['admin'] = $conn->lastInsertId();

            $stmt2->execute();
            $id['usuario'] = $conn->lastInsertId();

            $stmt3->execute();
            $id['escola'] = $conn->lastInsertId();

            return $ids = $id;
     
    }

    public function buscarAdmin($cpfAdmin) {

        // Conexão 

        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criação da query 

        $stmt = $conn->prepare("SELECT `nome_admin` FROM `admin` WHERE `cpf_admin`  = :CPF");

        // União das variáveis com comando slq

        $stmt->bindParam(":CPF", $cpfAdmin);

        // Execução da query

        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return "Erro: " . $e;
        }
    }
    
    
    public function cadastrarAdminEscola($idAdmin, $idEscola) {
        
        // inner join
        
    }

}
