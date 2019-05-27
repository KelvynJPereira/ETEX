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

        // Dados profissionais
        $cargo = $funcionario->getCargo();
        $ctps = $funcionario->getNCTP();
        $salario = $funcionario->getSalario();

        // Criacao da matricula
        $date = new DateTime();
        $yc = date_format($date, 'Y');
        $vr = rand(1, 99);
        $c = strtoupper(substr('etxmatriculafuncionario', $vr));

        // Matricula no curso
        $matricula = $yc . $c . $vr;

        // Criacao da query
        $stmt = $conn->prepare("INSERT INTO `funcionarios`
                       (`matricula_funcionario`,
                       `fk_cargo_funcionario`,
                       `nome_funcionario`,
                       `sobrenome_funcionario`,
                       `nacimento_funcionario`,
                       `sexo_funcionario`,
                       `cpf_funcionario`,
                       `cor_funcionario`,
                       `fone_fixo_funcionario`,
                       `fone_pessoal_funcionario`,
                       `email_funcionario`,
                       `foto_funcionario`,
                       `numero_endereco_funcionario`,
                       `rua_endereco_funcionario`,
                       `bairro_endereco_funcionario`,
                       `cidade_endereco_funcionario`,
                       `estado_endereco_funcionario`,
                       `pais_endereco_funcionario`,
                       `cep_endereco_funcionario`,
                       `ctps_funcionario`,
                       `salario_funcionario`,
                       `fk_id_escola`)
                       VALUES (
                       :MATRICULA,
                       :CARGO,
                       :NOME,
                       :SOBRENOME,
                       :NASCIMENTO,
                       :SEXO,
                       :CPF,
                       :COR,
                       :FONEF,
                       :FONEP,
                       :EMAIL,
                       :FOTO,
                       :NUMERO,
                       :RUA,
                       :BAIRRO,
                       :CIDADE,
                       :ESTADO,
                       :PAIS,
                       :CEP,
                       :CTPS,
                       :SALARIO,
                       :IDESCOLA)
                       ");

        // União de variáveis
        $stmt->bindParam(":MATRICULA", $matricula);
        $stmt->bindParam(":CARGO", $cargo);
        $stmt->bindParam(":NOME", $nome);
        $stmt->bindParam(":SOBRENOME", $sobrenome);
        $stmt->bindParam(":NASCIMENTO", $nascimento);
        $stmt->bindParam(":SEXO", $sexo);
        $stmt->bindParam(":CPF", $cpf);
        $stmt->bindParam(":FONEF", $fone_fixo);
        $stmt->bindParam(":FONEP", $fone_pessoal);
        $stmt->bindParam(":EMAIL", $email);
        $stmt->bindParam(":COR", $cor);
        $stmt->bindParam(":NUMERO", $numero);
        $stmt->bindParam(":RUA", $rua);
        $stmt->bindParam(":BAIRRO", $bairro);
        $stmt->bindParam(":CIDADE", $cidade);
        $stmt->bindParam(":ESTADO", $estado);
        $stmt->bindParam(":PAIS", $pais);
        $stmt->bindParam(":CEP", $cep);
        $stmt->bindParam(":CTPS", $ctps);
        $stmt->bindParam(":SALARIO", $salario);
        $stmt->bindParam(":IDESCOLA", $id_escola);

        // Execucao da query
        try {
            $stmt->execute();
            return $funcionario->getNome() . " foi cadastrado com sucesso!";
        } catch (Exception $e) {
            if ($e->getCode() == '23000'):
                $result = 'Funcionario já cadastrado!';
                return $result;
            endif;
        }
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
