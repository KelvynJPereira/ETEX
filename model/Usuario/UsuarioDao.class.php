<?php

include_once __DIR__ . '/../.config/Database.class.php';
include_once __DIR__ . '/InterfaceUsuario.interface.php';


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioDao
 *
 * @author Turyng
 */
class UsuarioDao implements InterfaceUsuario {

    public function cadastrarUsuario($tipo, $login, $senha) {

        // Cria conexão 

        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();
        
        $stmt = $conn->prepare("INSERT INTO `usuarios`
                (login_usuario`,
                `senha_usuairo`,
                `tipo_usuario`)
                VALUES 
                (:LOGIN,
                 :SENHA,
                 :TIPO)");
        
         // União de variáveis com comando sql

        $stmt->bindParam(":LOGIN", $login);
        $stmt->bindParam(":SENHA", $senha);
        $stmt->bindParam(":TIPO", $tipo);
        
        // Execução do sql

        try {
            $result = $stmt->execute();
            if ($result == 1):
                return $result = " foi cadastrado com sucesso!";
            endif;
        } catch (Exception $e) {
            return $result = 'Erro: ' . $e;
        }
    
    }

}
