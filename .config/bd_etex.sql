-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 31-Mar-2019 às 22:54
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
-- Estrutura da tabela `alunos_esc`
--

DROP TABLE IF EXISTS `alunos_esc`;
CREATE TABLE IF NOT EXISTS `alunos_esc` (
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `matricula_aluno` double DEFAULT NULL,
  `nome_aluno` varchar(32) NOT NULL,
  `sobrenome_aluno` varchar(64) NOT NULL,
  `nascimento_aluno` date NOT NULL,
  `cor_aluno` varchar(12) NOT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos_esc`
--

INSERT INTO `alunos_esc` (`id_aluno`, `matricula_aluno`, `nome_aluno`, `sobrenome_aluno`, `nascimento_aluno`, `cor_aluno`) VALUES
(1, 1, 'Kelvyn', 'Pereira', '1997-12-24', 'PRETO'),
(2, 1, 'Elyxandre', 'Guedes', '1998-01-21', 'PRETO'),
(3, 2, 'teste', 'teste', '1990-01-01', 'BRANCO'),
(5, 5, 'Kelvyn', 'Pereira', '1997-12-24', 'PRETO'),
(6, 1, 'Kelvyn', 'Pereira', '1997-12-24', 'PRETO'),
(7, 1, 'Kelvyn', 'Pereira', '1997-12-24', 'PRETO'),
(8, NULL, 'Kelvyn', 'Pereira', '1997-12-24', 'PRETO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

DROP TABLE IF EXISTS `endereco`;
CREATE TABLE IF NOT EXISTS `endereco` (
  `endereco_id` int(11) NOT NULL AUTO_INCREMENT,
  `endereco_tipo` varchar(11) NOT NULL,
  `endereco_numero` varchar(32) NOT NULL,
  `endereco_rua` varchar(64) NOT NULL,
  `endereco_bairro` varchar(20) NOT NULL,
  `endereco_cidade` varchar(20) NOT NULL,
  `endereco_estado` varchar(15) NOT NULL,
  `endereco_pais` varchar(15) NOT NULL,
  `endereco_cep` varchar(15) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`endereco_id`),
  KEY `fk_id_aluno` (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`endereco_id`, `endereco_tipo`, `endereco_numero`, `endereco_rua`, `endereco_bairro`, `endereco_cidade`, `endereco_estado`, `endereco_pais`, `endereco_cep`, `id_usuario`) VALUES
(1, '0', '0', 'rua teste', 'bairro teste', 'cidade teste', 'estado teste', 'pais teste', '', 0),
(2, '3', 'numero', 'rua', 'bairro', 'cidade', 'estado', 'pais', 'cep', 1),
(3, '1', 'numero', 'rua', 'bairro', 'cidade', 'estado', 'pais', 'cep', 1);

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
-- Estrutura da tabela `telefone_esc`
--

DROP TABLE IF EXISTS `telefone_esc`;
CREATE TABLE IF NOT EXISTS `telefone_esc` (
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
