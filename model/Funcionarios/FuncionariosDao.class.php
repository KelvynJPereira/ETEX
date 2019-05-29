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
    public function cadastrarFuncionaro(Funcionario $funcionario, $id_escola) {

        // Cria conexão 
        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Dados Pessoais
        $nome = $funcionario->getNome();
        $sobrenome = $funcionario->getSobrenome();
        $nascimento = $funcionario->getNascimento();
        $sexo = $funcionario->getSexo();
        $cpf = $funcionario->getCpf();
        $fone_fixo = $funcionario->getFoneF();
        $fone_pessoal = $funcionario->getFoneP();
        $email = $funcionario->getEmail();

        $foto = null;

        // Endereco
        $numero = $funcionario->getNumero();
        $rua = $funcionario->getRua();
        $bairro = $funcionario->getBairro();
        $cidade = $funcionario->getCidade();
        $estado = $funcionario->getEstado();
        $pais = $funcionario->getPais();
        $cep = $funcionario->getCep();

        // Dados profissionais
        $cargo = $funcionario->getCargo();
        $ctps = $funcionario->getNCTP();
        $salario = $funcionario->getSalario();


        // Criacao da matricula
        $date = new DateTime();
        $yc = date_format($date, 'Y');
        $vr = rand(1, 999);
        $c = strtoupper(substr('etxmatriculafuncionario', $vr));


        // Matricula no curso
        $matricula = $yc . $c . $vr;

        // Criacao da query
        $stmt = $conn->prepare("INSERT INTO `funcionarios` (`id_funcionario`, `matricula_funcionario`, `fk_cargo_funcionario`, `nome_funcionario`, `sobrenome_funcionario`, `nascimento_funcionario`, `sexo_funcionario`, `cpf_funcionario`, `fone_fixo_funcionario`, `fone_pessoal_funcionario`, `email_funcionario`, `foto_funcionario`, `numero_endereco_funcionario`, `rua_endereco_funcionario`, `bairro_endereco_funcionario`, `cidade_endereco_funcionario`, `estado_endereco_funcionario`, `pais_endereco_funcionario`, `cep_endereco_funcionario`, `ctps_funcionario`, `salario_funcionario`, `fk_id_escola`) VALUES (NULL, $matricula, $cargo, '$nome', '$sobrenome', '$nascimento', '$sexo', '$cpf', '$fone_fixo', '$fone_pessoal', '$email', '$foto', '$numero', '$rua', '$bairro', '$cidade', '$estado', '$pais', '$cep', '$ctps', '$salario', '$id_escola');");


        // Execucao da query
        try {
            return $stmt->execute();
        } catch (Exception $e) {
            if ($e->getCode() == '23000'):
                $result = 'Funcionario já cadastrado!';
                return $result;
            endif;
        }
    }

    public function buscarFuncionario($idFuncionario) {
        
    }

    public function excluirFuncionario($idFuncionario) {
        // Conexão 

        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criação da query 

        $stmt = $conn->prepare("DELETE FROM `funcionarios`
                WHERE id_funcionario = $idFuncionario");

        // Execução da query

        try {
            $stmt->execute();
            return "Funcionario excluído com sucesso!";
        } catch (Exception $e) {
            return "Erro: " . $e;
        }
    }

    public function listarFuncionarios($idEscola) {

        // Conexão 

        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criação da query
        $stmt = $conn->prepare("SELECT * FROM `funcionarios` WHERE `fk_id_escola` = $idEscola");

        // Execução da query
        try {
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return $result = "Erro: " . $e;
        }
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

    public function listarCargos() {

        // Cria conexão 
        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criacao da query
        $stmt = $conn->prepare("SELECT * FROM `cargos_funcionarios`");

        // Execução da query
        try {
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return "Erro: " . $e;
        }
    }

}
