-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 29-Abr-2019 às 19:39
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
-- Estrutura da tabela `admin_escola`
--

DROP TABLE IF EXISTS `admin_escola`;
CREATE TABLE IF NOT EXISTS `admin_escola` (
  `id_admin_escola` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_escola` int(11) DEFAULT NULL,
  `fk_id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_admin_escola`),
  KEY `admin_escola_ibfk_1` (`fk_id_escola`),
  KEY `admin_escola_ibfk_2` (`fk_id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin_escola`
--

INSERT INTO `admin_escola` (`id_admin_escola`, `fk_id_escola`, `fk_id_usuario`) VALUES
(1, 3, 3),
(2, 4, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `matricula_aluno` varchar(255) DEFAULT NULL,
  `nome_aluno` varchar(30) NOT NULL,
  `sobrenome_aluno` varchar(24) NOT NULL,
  `nascimento_aluno` varchar(10) NOT NULL,
  `sexo_aluno` varchar(15) NOT NULL,
  `cpf_aluno` varchar(30) NOT NULL,
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
  `fotoPerfil_aluno` blob,
  PRIMARY KEY (`id_aluno`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id_aluno`, `matricula_aluno`, `nome_aluno`, `sobrenome_aluno`, `nascimento_aluno`, `sexo_aluno`, `cpf_aluno`, `fone_fixo_aluno`, `fone_pessoal_aluno`, `email_aluno`, `cor_aluno`, `numero_endereco_aluno`, `rua_endereco_aluno`, `bairro_endereco_aluno`, `cidade_endereco_aluno`, `estado_endereco_aluno`, `pais_endereco_aluno`, `cep_endereco_aluno`, `fotoPerfil_aluno`) VALUES
(14, 'NAO MATRICULADO', 'Julio', 'Silva Santos', '1997-12-24', 'Homem', '70260277436', '31254877', '988547789', 'kelvyn@gmail.com', 'Negro', '789', 'Massaramduba', 'Dois irmÃ£os', 'Recife', 'PERNAMBUCO', 'Brasil', '521478975', ''),
(16, 'NAO MATRICULADO', 'Carla', 'Souza', '1998-01-03', 'Mulher', '', '', '', '', 'Branca', '', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolas`
--

DROP TABLE IF EXISTS `escolas`;
CREATE TABLE IF NOT EXISTS `escolas` (
  `id_escola` int(11) NOT NULL AUTO_INCREMENT,
  `nome_escola` varchar(32) NOT NULL,
  `cnpj_escola` varchar(16) NOT NULL,
  `tipo_escola` varchar(16) NOT NULL,
  `fone_fixo_escola` varchar(16) NOT NULL,
  `fone_comercial_escola` varchar(16) NOT NULL,
  `site_escola` varchar(45) NOT NULL,
  `email_escola` varchar(45) NOT NULL,
  `numero_endereco_escola` varchar(11) NOT NULL,
  `rua_endereco_escola` varchar(32) NOT NULL,
  `bairro_endereco_escola` varchar(32) NOT NULL,
  `cidade_endereco_escola` varchar(32) NOT NULL,
  `estado_endereco_escola` varchar(32) NOT NULL,
  `pais_endereco_escola` varchar(20) NOT NULL,
  `cep_endereco_escola` varchar(15) NOT NULL,
  `logo_escola` blob NOT NULL,
  PRIMARY KEY (`id_escola`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `escolas`
--

INSERT INTO `escolas` (`id_escola`, `nome_escola`, `cnpj_escola`, `tipo_escola`, `fone_fixo_escola`, `fone_comercial_escola`, `site_escola`, `email_escola`, `numero_endereco_escola`, `rua_endereco_escola`, `bairro_endereco_escola`, `cidade_endereco_escola`, `estado_endereco_escola`, `pais_endereco_escola`, `cep_endereco_escola`, `logo_escola`) VALUES
(3, 'Miguel Batista', '051457889000169', 'PUBLICA', '31829647', '36879624', 'www.miguelbatista.com.br', 'mb@etec.gov.br', '121', 'Av norte', 'Macaxeira', 'Recife', 'Pernambuco', 'Brasil', '52003418', 0xefbbbf70726976612074652066696e616c204a50616e656c20636f6e74656e7450616e656c203d206e6577204a50616e656c4f3b2070726976617465204a546578744669656c64207478744e6f6d653b0d0a707269766174652066696e616c20427574746f6e47726f757020627574746f6e47726f7570203d206e657720427574746f6e47726f757028293b0d0a70726976617465204a546578744669656c6420747874456e64657265636f3b0d0ae2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e280940d0a4a436f6d626f426f78206362436172676f3b0d0a4a436865636b426f7820636b417469766f3b0d0a70726976617465204a526164696f427574746f6e2072624d2c207262463b0d0a7072697661746520506573736f6120706573736f613b0d0a7072697661746520506573736f61436f6e74726f6c6c657220636f6e74726f6c6c65723b0d0a537472696e674f20636f6d626f436172676f73203d206e657720537472696e675b5d207b2253656c6563696f6e65222c2241646d696e6973747261646f72222c0d0a22416e616c697374612064652053697374656d6173222c22436f6e7461646f72222c2022446573656e766f6c7665646f72222c22456e67656e686569726f20436976696c227d3b),
(4, 'Coronel Othon', '051457889000169', 'PUBLICA', '31829647', '36879624', 'www.miguelbatista.com.br', 'mb@etec.gov.br', '121', 'Silva', 'Macaxeira', 'Recife', 'Pernambuco', 'Brasil', '52003418', 0xefbbbf70726976612074652066696e616c204a50616e656c20636f6e74656e7450616e656c203d206e6577204a50616e656c4f3b2070726976617465204a546578744669656c64207478744e6f6d653b0d0a707269766174652066696e616c20427574746f6e47726f757020627574746f6e47726f7570203d206e657720427574746f6e47726f757028293b0d0a70726976617465204a546578744669656c6420747874456e64657265636f3b0d0ae2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e2809420e280940d0a4a436f6d626f426f78206362436172676f3b0d0a4a436865636b426f7820636b417469766f3b0d0a70726976617465204a526164696f427574746f6e2072624d2c207262463b0d0a7072697661746520506573736f6120706573736f613b0d0a7072697661746520506573736f61436f6e74726f6c6c657220636f6e74726f6c6c65723b0d0a537472696e674f20636f6d626f436172676f73203d206e657720537472696e675b5d207b2253656c6563696f6e65222c2241646d696e6973747261646f72222c0d0a22416e616c697374612064652053697374656d6173222c22436f6e7461646f72222c2022446573656e766f6c7665646f72222c22456e67656e686569726f20436976696c227d3b);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) NOT NULL,
  PRIMARY KEY (`id_tipo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `descricao`) VALUES
(1, 'administrador'),
(2, 'funcionario'),
(3, 'aluno'),
(4, 'outro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `fk_tipo_usuario` int(11) NOT NULL,
  `id_pessoa` int(11) DEFAULT NULL,
  `login_usuario` varchar(15) NOT NULL,
  `senha_usuario` varchar(15) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_tipo_usuario` (`fk_tipo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `fk_tipo_usuario`, `id_pessoa`, `login_usuario`, `senha_usuario`) VALUES
(3, 1, NULL, 'admin@admin', 'admin'),
(4, 3, 14, 'julio@aluno', 'julio123'),
(5, 1, NULL, 'admin2@admin', 'admin2'),
(6, 3, 16, 'carla@aluno', 'carla123');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `admin_escola`
--
ALTER TABLE `admin_escola`
  ADD CONSTRAINT `admin_escola_ibfk_1` FOREIGN KEY (`fk_id_escola`) REFERENCES `escolas` (`id_escola`) ON DELETE NO ACTION,
  ADD CONSTRAINT `admin_escola_ibfk_2` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION;

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_tipo_usuario` FOREIGN KEY (`fk_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
