-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 16-Abr-2019 às 20:17
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_etex`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `matricula_aluno` varchar(255) DEFAULT NULL,
  `nome_aluno` varchar(32) NOT NULL,
  `sobrenome_aluno` varchar(24) NOT NULL,
  `nascimento_aluno` varchar(10) NOT NULL,
  `sexo_aluno` varchar(15) NOT NULL,
  `cpf_aluno` varchar(24) NOT NULL,
  `fone_fixo_aluno` varchar(24) NOT NULL,
  `fone_pessoal_aluno` varchar(24) NOT NULL,
  `email_aluno` varchar(35) NOT NULL,
  `cor_aluno` varchar(16) NOT NULL,
  `numero_endereco_aluno` varchar(12) NOT NULL,
  `rua_endereco_aluno` varchar(32) NOT NULL,
  `bairro_endereco_aluno` varchar(15) NOT NULL,
  `cidade_endereco_aluno` varchar(15) NOT NULL,
  `estado_endereco_aluno` varchar(15) NOT NULL,
  `pais_endereco_aluno` varchar(15) NOT NULL,
  `cep_endereco_aluno` varchar(15) NOT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id_aluno`, `matricula_aluno`, `nome_aluno`, `sobrenome_aluno`, `nascimento_aluno`, `sexo_aluno`, `cpf_aluno`, `fone_fixo_aluno`, `fone_pessoal_aluno`, `email_aluno`, `cor_aluno`, `numero_endereco_aluno`, `rua_endereco_aluno`, `bairro_endereco_aluno`, `cidade_endereco_aluno`, `estado_endereco_aluno`, `pais_endereco_aluno`, `cep_endereco_aluno`) VALUES
(14, 'NAO MATRICULADO', 'Mirla', 'Villa Pereira', '1996-09-01', 'Mulher', '458796625', '32614411', '996487526', 'mirlapereira1996@gmail.com', 'Pardo', '154', '17 de agosto', 'Casa Forte', 'Recife', 'Pernambuco', 'Brasil', '52030975'),
(15, 'NAO MATRICULADO', 'Joao', 'Silva Mota', '2000-09-05', 'Homem', '656565545457', '31254789', '987548978', 'joao.mota@hotmail.com', 'Branco', '65', 'Lauro Freitas', 'Torre', 'Recife', 'Pernambuco', 'Brasil', '56554454545'),
(16, 'NAO MATRICULADO', 'Julia', 'Maria Fernandes', '2000-01-03', 'Mulher', '78954788963', '31254877', '987548978', 'juliamf@bol.com.br', 'Branco', '65', 'Julio Nobre', 'Madalena', 'Recife', 'Pernambuco', 'Brasil', '5595545487');

-- --------------------------------------------------------

--
-- Estrutura da tabela `escola`
--

DROP TABLE IF EXISTS `escola`;
CREATE TABLE IF NOT EXISTS `escola` (
  `id_escola` int(11) NOT NULL AUTO_INCREMENT,
  `escola_nome` varchar(32) NOT NULL,
  `escola_cnpj` varchar(16) NOT NULL,
  `escola_fone_fixo` varchar(16) NOT NULL,
  `escola_fone_comercial` varchar(16) NOT NULL,
  `escola_email` varchar(24) NOT NULL,
  `escola_tipoEscola` varchar(24) NOT NULL,
  `fk_endereco_escola` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_escola`),
  KEY `fk_endereco_escola` (`fk_endereco_escola`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
