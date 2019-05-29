<?php

include_once __DIR__ . '/InterfaceAluno.interface.php';
include_once __DIR__ . '/../../.config/Database.class.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Classe responsável por interagir com o banco
 *
 * @author Turyng
 */
class AlunoDao implements InterfaceAluno {

    // Inserir Aluno

    public function cadastrarAluno(Aluno $aluno, $id_escola) {

        // Cria conexão 

        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Variaveis
        // Dados

        $nome = $aluno->getNome();
        $sobrenome = $aluno->getSobrenome();
        $nascimento = $aluno->getNascimento();
        $sexo = $aluno->getSexo();
        $cpf = $aluno->getCpf();
        $foneF = $aluno->getFoneF();
        $foneP = $aluno->getFoneP();
        $email = $aluno->getEmail();
        $cor = $aluno->getCor();

        // Endereco

        $numero = $aluno->getNumero();
        $rua = $aluno->getRua();
        $bairro = $aluno->getBairro();
        $cidade = $aluno->getCidade();
        $estado = $aluno->getEstado();
        $pais = $aluno->getPais();
        $cep = $aluno->getCep();

        // Comando SQL
        $stmt = $conn->prepare("INSERT INTO `alunos`
                    (`nome_aluno`,
                    `sobrenome_aluno`,
                    `nascimento_aluno`,
                    `sexo_aluno`,
                    `cpf_aluno`,
                    `fone_fixo_aluno`,
                    `fone_pessoal_aluno`,
                    `email_aluno`,
                    `cor_aluno`,
                    `numero_endereco_aluno`,
                    `rua_endereco_aluno`,
                    `bairro_endereco_aluno`,
                    `cidade_endereco_aluno`,
                    `estado_endereco_aluno`,
                    `pais_endereco_aluno`,
                    `cep_endereco_aluno`,
                    `fk_escola`)
                    VALUES 
                    (:NOME,
                    :SOBRENOME,
                    :NASCIMENTO,
                    :SEXO,
                    :CPF,
                    :FONEF,
                    :FONEP,
                    :EMAIL,
                    :COR,
                    :NUMERO,
                    :RUA,
                    :BAIRRO,
                    :CIDADE,
                    :ESTADO,
                    :PAIS,
                    :CEP,
                    :IDESCOLA)");

        // União de variáveis com comando sql
        $stmt->bindParam(":NOME", $nome);
        $stmt->bindParam(":SOBRENOME", $sobrenome);
        $stmt->bindParam(":NASCIMENTO", $nascimento);
        $stmt->bindParam(":SEXO", $sexo);
        $stmt->bindParam(":CPF", $cpf);
        $stmt->bindParam(":FONEF", $foneF);
        $stmt->bindParam(":FONEP", $foneP);
        $stmt->bindParam(":EMAIL", $email);
        $stmt->bindParam(":COR", $cor);
        $stmt->bindParam(":NUMERO", $numero);
        $stmt->bindParam(":RUA", $rua);
        $stmt->bindParam(":BAIRRO", $bairro);
        $stmt->bindParam(":CIDADE", $cidade);
        $stmt->bindParam(":ESTADO", $estado);
        $stmt->bindParam(":PAIS", $pais);
        $stmt->bindParam(":CEP", $cep);

        // Escola
        $stmt->bindParam(":IDESCOLA", $id_escola);

        // Execução do sql
        try {
            $stmt->execute();
            return $aluno->getNome() . " foi cadastrado com sucesso!";
        } catch (Exception $e) {
            if ($e->getCode() == '23000'):
                $result = 'CPF de aluno já cadastrado!';
                return $result;
            endif;
        }
    }

    // Listar Alunos

    public function listarAlunos($id_escola) {

        // Conexão 

        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criação da query
        $stmt = $conn->prepare("SELECT * FROM `alunos` WHERE `fk_escola` = :IDESCOLA");

        // Uniao de variaveis com sql
        $stmt->bindParam(":IDESCOLA", $id_escola);

        // Execução da query
        try {
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return $result = "Erro: " . $e;
        }
    }

    public function buscarAluno($id) {

        // Conexão 

        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criação da query

        $stmt = $conn->prepare("SELECT `matricula_aluno`,
                    `nome_aluno`,
                    `sobrenome_aluno`,
                    `nascimento_aluno`,
                    `sexo_aluno`,
                    `cpf_aluno`,
                    `fone_fixo_aluno`,
                    `fone_pessoal_aluno`,
                    `email_aluno`,
                    `cor_aluno`,
                    `numero_endereco_aluno`,
                    `rua_endereco_aluno`,
                    `bairro_endereco_aluno`,
                    `cidade_endereco_aluno`,
                    `estado_endereco_aluno`,
                    `pais_endereco_aluno`,
                    `cep_endereco_aluno`,
                    `foto_aluno`
                    FROM `alunos` WHERE `id_aluno` = :ID");

        // União das variáveis com comando slq

        $stmt->bindParam(":ID", $id);

        // Execução da query

        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return $result = "Erro: " . $e;
        }
    }

    // Alterar Aluno

    public function editarAluno(Aluno $aluno, $id) {

        // Conexão 
        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Variaveis
        // Dados
        $nome = $aluno->getNome();
        $sobrenome = $aluno->getSobrenome();
        $nascimento = $aluno->getNascimento();
        $sexo = $aluno->getSexo();
        $cpf = $aluno->getCpf();
        $foneF = $aluno->getFoneF();
        $foneP = $aluno->getFoneP();
        $email = $aluno->getEmail();
        $cor = $aluno->getCor();

        // Endereco
        $numero = $aluno->getNumero();
        $rua = $aluno->getRua();
        $bairro = $aluno->getBairro();
        $cidade = $aluno->getCidade();
        $estado = $aluno->getEstado();
        $pais = $aluno->getPais();
        $cep = $aluno->getCep();

        // Aluno a ser editado
        $idEditarAluno = $id;

        // Comando SQL
        $stmt = $conn->prepare("UPDATE `alunos` SET
                `nome_aluno`= :NOME,
                `sobrenome_aluno`= :SOBRENOME,
                `nascimento_aluno`= :NASCIMENTO,
                `sexo_aluno`= :SEXO,
                `cpf_aluno`= :CPF,
                `fone_fixo_aluno`= :FONEF,
                `fone_pessoal_aluno`= :FONEP,
                `email_aluno`= :EMAIL,
                `cor_aluno`= :COR,
                `numero_endereco_aluno`= :NUMERO,
                `rua_endereco_aluno`= :RUA,
                `bairro_endereco_aluno`= :BAIRRO,
                `cidade_endereco_aluno`= :CIDADE,
                `estado_endereco_aluno`= :ESTADO,
                `pais_endereco_aluno`= :PAIS,
                `cep_endereco_aluno`= :CEP
                WHERE id_aluno = :ID");

        // União de variáveis com comando sql
        $stmt->bindParam(":NOME", $nome);
        $stmt->bindParam(":SOBRENOME", $sobrenome);
        $stmt->bindParam(":NASCIMENTO", $nascimento);
        $stmt->bindParam(":SEXO", $sexo);
        $stmt->bindParam(":CPF", $cpf);
        $stmt->bindParam(":FONEF", $foneF);
        $stmt->bindParam(":FONEP", $foneP);
        $stmt->bindParam(":EMAIL", $email);
        $stmt->bindParam(":COR", $cor);
        $stmt->bindParam(":NUMERO", $numero);
        $stmt->bindParam(":RUA", $rua);
        $stmt->bindParam(":BAIRRO", $bairro);
        $stmt->bindParam(":CIDADE", $cidade);
        $stmt->bindParam(":ESTADO", $estado);
        $stmt->bindParam(":PAIS", $pais);
        $stmt->bindParam(":CEP", $cep);

        // id aluno update

        $stmt->bindParam(":ID", $idEditarAluno);
        // Execução da query

        try {
            $stmt->execute();
            return "Aluno " . $aluno->getNome() . " foi editado com sucesso!";
        } catch (Exception $e) {
            if ($e->getCode() == '2300'):
                return 'Aluno CPF invalido';
            else:
                return 'Erro ao editar aluno';
            endif;
        }
    }

    // Exclusão de Aluno

    public function excluirAluno($id) {

        // Conexão 

        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criação da query 

        $stmt = $conn->prepare("DELETE FROM `alunos`
                WHERE id_aluno = :ID");

        // União das variáveis com comando slq

        $stmt->bindParam(":ID", $id);

        // Execução da query

        try {
            $stmt->execute();
            return "Aluno excluído com sucesso!";
        } catch (Exception $e) {
            return "Erro: " . $e;
        }
    }

    public function matricularAluno($id_aluno, $id_curso, $id_escola) {

        // Conexão 
        $db_conexao = new Database();
        $conn = $db_conexao->dbConexao();

        // Criacao da matricula
        // Criacao do codigo do curso
        $date = new DateTime();
        $yc = date_format($date, 'Y');
        $vr = rand(1, 99);
        $c = strtoupper(substr('etxmatricula', $vr));

        // Matricula no curso
        $matricula = $yc . $c . $vr;
        
        // escola matricular
        $id_escola_pgto = $id_escola;

        // Criacao da query
        $stmt = $conn->prepare("INSERT INTO `matricula_aluno` (`matricula_aluno`, `id_aluno`, `id_curso`, `id_escola`) VALUES (:MATRICULA, :IDALUNO, :IDCURSO, :IDESCOLA)");
        $stmt2 = $conn->prepare("UPDATE `alunos` SET `matricula_aluno` = '$matricula' WHERE `alunos`.`id_aluno` = $id_aluno");
      
// Uniao de variaveis
        $stmt->bindParam(":MATRICULA", $matricula);
        $stmt->bindParam(":IDALUNO", $id_aluno);
        $stmt->bindParam(":IDCURSO", $id_curso);
        $stmt->bindParam(":IDESCOLA", $id_escola);

        // Execucao da query com tratamento
        try {
            $stmt->execute();
            $stmt2->execute();
           
            return $matricula;
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

}
