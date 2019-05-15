<?php

// Inclusao da classe conexao
include_once __DIR__ . '/../../.config/Database.class.php';


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginDao
 *
 * @author Turyng
 */
class LoginDao {

    //put your code here

    public function logar($login, $senha) {

        // Cria conexão
        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criação da query
        $stmt = $conn->prepare("SELECT `cpf_usuario`, `permissao_usuario`  FROM `usuarios` WHERE `login_usuario` = :LOGIN AND `senha_usuario` = :SENHA");

        // Uniao dos parametros a query
        $stmt->bindParam(":LOGIN", $login);
        $stmt->bindParam(":SENHA", $senha);


        // Execucao e retorno da consulta
        $stmt->execute();
        return $stmt->fetch();
    }

}
