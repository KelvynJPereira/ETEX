-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 27-Mar-2019 às 00:03
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
-- Estrutura da tabela `alunos_inst`
--

DROP TABLE IF EXISTS `alunos_inst`;
CREATE TABLE IF NOT EXISTS `alunos_inst` (
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `matricula_aluno` double NOT NULL,
  `nome_aluno` varchar(32) NOT NULL,
  `sobrenome_aluno` varchar(64) NOT NULL,
  `nascimento_aluno` date NOT NULL,
  `cor_aluno` varchar(12) NOT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos_inst`
--

INSERT INTO `alunos_inst` (`id_aluno`, `matricula_aluno`, `nome_aluno`, `sobrenome_aluno`, `nascimento_aluno`, `cor_aluno`) VALUES
(1, 1, 'Kelvyn', 'Pereira', '1997-12-24', 'PRETO'),
(2, 1, 'Kelvyn', 'Pereira', '1997-12-24', 'PRETO'),
(3, 2, 'teste', 'teste', '1990-01-01', 'BRANCO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_inst`
--

DROP TABLE IF EXISTS `endereco_inst`;
CREATE TABLE IF NOT EXISTS `endereco_inst` (
  `endereco_inst_id` int(11) NOT NULL AUTO_INCREMENT,
  `endereco_inst_rua` varchar(64) NOT NULL,
  `endereco_inst_bairro` varchar(20) NOT NULL,
  `endereco_inst_cidade` varchar(20) NOT NULL,
  `endereco_inst_estado` varchar(15) NOT NULL,
  `endereco_inst_pais` varchar(15) NOT NULL,
  `inst_id` varchar(11) NOT NULL,
  PRIMARY KEY (`endereco_inst_id`),
  KEY `FK` (`inst_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `endereco_inst`
--

INSERT INTO `endereco_inst` (`endereco_inst_id`, `endereco_inst_rua`, `endereco_inst_bairro`, `endereco_inst_cidade`, `endereco_inst_estado`, `endereco_inst_pais`, `inst_id`) VALUES
(1, 'rua teste', 'bairro teste', 'cidade teste', 'estado teste', 'pais teste', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

DROP TABLE IF EXISTS `instituicao`;
CREATE TABLE IF NOT EXISTS `instituicao` (
  `inst_id` int(11) NOT NULL AUTO_INCREMENT,
  `inst_nome` varchar(32) NOT NULL,
  `inst_cnpj` varchar(14) NOT NULL,
  `inst_email` varchar(32) NOT NULL,
  PRIMARY KEY (`inst_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`inst_id`, `inst_nome`, `inst_cnpj`, `inst_email`) VALUES
(1, 'instituicao teste', '12457845891245', 'teste@teste.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone_inst`
--

DROP TABLE IF EXISTS `telefone_inst`;
CREATE TABLE IF NOT EXISTS `telefone_inst` (
  `telefone_inst_id` int(11) NOT NULL AUTO_INCREMENT,
  `telefone_inst` varchar(30) NOT NULL,
  `inst_id` int(11) NOT NULL,
  PRIMARY KEY (`telefone_inst_id`),
  KEY `FK_telefoneInst` (`inst_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
