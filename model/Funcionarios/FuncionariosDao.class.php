<?php

include_once __DIR__ . '/../../.config/Database.class.php';
include_once __DIR__ . '/InterfaceFuncionario.interface.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FuncionariosDao
 *
 * @author Turyng
 */
class FuncionariosDao implements InterfaceFuncionario {

    //put your code here

    public function cadastrarFuncionaro(Funcionario $funcionario) {

        // Cria conexão 
        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Dados Pessoais
        $nome = $funcionario->getNome();
        $sobrenome = $funcionario->getSobrenome();
        $nascimento = $funcionario->getNascimento();
        $sexo = $funcionario->getSexo();
        $cpf = $funcionario->getSexo();
        $cor = $funcionario->getCor();
        $fone_fixo = $funcionario->getFoneF();
        $fone_pessoal = $funcionario->getFoneP();
        $email = $funcionario->getEmail();

        // Endereco
        $numero = $funcionario->getNumero();
        $rua = $funcionario->getRua();
        $bairro = $funcionario->getBairro();
        $cidade = $funcionario->getCidade();
        $estado = $funcionario->getEstado();
        $pais = $funcionario->getPais();
        $cep = $funcionario->getCep();
        $foto = $funcionario->getFotoPerfil();

        // Dados profissionais
        $cargo = $funcionario->getCargo();


        echo $funcionario->getNome();
    }

    public function buscarFuncionario($idFuncionario) {
        
    }

    public function editarFuncionario(Funcionario $funcionario, $idFuncionario) {
        
    }

    public function excluirFuncionario($idFuncionario) {
        
    }

    public function listarFuncionarios($idEscola) {
        
    }

    public function listarCoordenadores($idEescola) {

        // Cria conexão 
        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criacao da query
        $stmt = $conn->prepare("SELECT id_funcionario, nome_funcionario FROM funcionarios WHERE  fk_cargo_funcionario = 2 AND fk_id_escola = :IDESCOLA");

        // Uniao das variaeis com sql
        $stmt->bindParam(':IDESCOLA', $idEescola);

        // Execução da query
        try {
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return "Erro: " . $e;
        }
    }

}
