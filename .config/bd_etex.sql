-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 07-Maio-2019 às 20:24
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
-- Estrutura da tabela `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nome_admin` varchar(35) NOT NULL,
  `cpf_admin` varchar(45) NOT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `cpf_admin` (`cpf_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id_admin`, `nome_admin`, `cpf_admin`) VALUES
(1, 'Kelvyn', '70260277436'),
(2, 'Elyxandre', '123'),
(26, 'Rosiberto Goncalves', '12345678');

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin_possui_escola`
--

DROP TABLE IF EXISTS `admin_possui_escola`;
CREATE TABLE IF NOT EXISTS `admin_possui_escola` (
  `id_admin` int(45) NOT NULL,
  `id_escola` int(11) NOT NULL,
  KEY `fk_escola` (`id_escola`),
  KEY `fk_admin` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin_possui_escola`
--

INSERT INTO `admin_possui_escola` (`id_admin`, `id_escola`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `nome_aluno` varchar(40) DEFAULT NULL,
  `sobrenome_aluno` varchar(40) DEFAULT NULL,
  `nascimento_aluno` varchar(40) DEFAULT NULL,
  `sexo_aluno` varchar(40) DEFAULT NULL,
  `cor_aluno` varchar(40) DEFAULT NULL,
  `cpf_aluno` varchar(45) NOT NULL,
  `email_aluno` varchar(40) DEFAULT NULL,
  `fone_pessoal_aluno` varchar(40) DEFAULT NULL,
  `fone_fixo_aluno` varchar(40) DEFAULT NULL,
  `numero_endereco_aluno` varchar(40) DEFAULT NULL,
  `rua_endereco_aluno` varchar(40) DEFAULT NULL,
  `bairro_endereco_aluno` varchar(40) DEFAULT NULL,
  `cidade_endereco_aluno` varchar(40) DEFAULT NULL,
  `estado_endereco_aluno` varchar(40) DEFAULT NULL,
  `pais_endereco_aluno` varchar(40) DEFAULT NULL,
  `cep_endereco_aluno` varchar(40) DEFAULT NULL,
  `fotol_aluno` blob,
  PRIMARY KEY (`id_aluno`),
  UNIQUE KEY `cpf_aluno` (`cpf_aluno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id_aluno`, `nome_aluno`, `sobrenome_aluno`, `nascimento_aluno`, `sexo_aluno`, `cor_aluno`, `cpf_aluno`, `email_aluno`, `fone_pessoal_aluno`, `fone_fixo_aluno`, `numero_endereco_aluno`, `rua_endereco_aluno`, `bairro_endereco_aluno`, `cidade_endereco_aluno`, `estado_endereco_aluno`, `pais_endereco_aluno`, `cep_endereco_aluno`, `fotol_aluno`) VALUES
(1, 'Mirla', 'Villa Pereira', '1996-09-01', 'Mulher', 'Parda', '75487875456', 'mirlapereira1996@gmail.com', '996487526', '32614411', '154', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

DROP TABLE IF EXISTS `disciplinas`;
CREATE TABLE IF NOT EXISTS `disciplinas` (
  `id_disciplina` int(11) NOT NULL AUTO_INCREMENT,
  `nome_disciplina` varchar(32) NOT NULL,
  `fk_professor_disciplina` int(11) NOT NULL,
  PRIMARY KEY (`id_disciplina`),
  KEY `fk_professor` (`fk_professor_disciplina`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id_disciplina`, `nome_disciplina`, `fk_professor_disciplina`) VALUES
(1, 'Android', 1),
(2, 'Banco de dados', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `escola`
--

DROP TABLE IF EXISTS `escola`;
CREATE TABLE IF NOT EXISTS `escola` (
  `id_escola` int(11) NOT NULL AUTO_INCREMENT,
  `nome_escola` varchar(40) DEFAULT NULL,
  `cnpj_escola` varchar(40) DEFAULT NULL,
  `tipo_escola` varchar(40) DEFAULT NULL,
  `foneF_escola` varchar(40) DEFAULT NULL,
  `foneC_escola` varchar(40) DEFAULT NULL,
  `email_escola` varchar(40) DEFAULT NULL,
  `site_escola` varchar(40) DEFAULT NULL,
  `numero_endereco_escola` varchar(40) DEFAULT NULL,
  `rua_endereco_escola` varchar(40) DEFAULT NULL,
  `bairro_endereco_estado` varchar(40) DEFAULT NULL,
  `cidade_endereco_estado` varchar(40) DEFAULT NULL,
  `estado_endereco_estado` varchar(40) DEFAULT NULL,
  `pais_endereco_escola` varchar(40) DEFAULT NULL,
  `cep_endereco_escola` varchar(40) DEFAULT NULL,
  `logo_escola` blob,
  PRIMARY KEY (`id_escola`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `escola`
--

INSERT INTO `escola` (`id_escola`, `nome_escola`, `cnpj_escola`, `tipo_escola`, `foneF_escola`, `foneC_escola`, `email_escola`, `site_escola`, `numero_endereco_escola`, `rua_endereco_escola`, `bairro_endereco_estado`, `cidade_endereco_estado`, `estado_endereco_estado`, `pais_endereco_escola`, `cep_endereco_escola`, `logo_escola`) VALUES
(1, 'Coronel Othon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Miguel Batista', '051457889000169', 'PUBLICA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Escola Miguel Batista', '12457892145', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_funcionario` varchar(40) DEFAULT NULL,
  `sobrenome_funcionario` varchar(40) DEFAULT NULL,
  `nacimento_funcionario` varchar(40) DEFAULT NULL,
  `sexo_funcionario` varchar(40) DEFAULT NULL,
  `cpf_funcionario` varchar(45) NOT NULL,
  `cor_funcionario` varchar(40) DEFAULT NULL,
  `foneF_funcionario` varchar(40) DEFAULT NULL,
  `foneP_funcionario` varchar(40) DEFAULT NULL,
  `email_funcionario` varchar(40) DEFAULT NULL,
  `numero_endereco_funcionario` varchar(40) DEFAULT NULL,
  `rua_endereco_funcionario` varchar(40) DEFAULT NULL,
  `bairro_endereco_funcionario` varchar(40) DEFAULT NULL,
  `cidade_endereco_funcionario` varchar(40) DEFAULT NULL,
  `estado_endereco_funcionario` varchar(40) DEFAULT NULL,
  `pais_endereco_funcionario` varchar(40) DEFAULT NULL,
  `cep_endereco_funcionario` varchar(40) DEFAULT NULL,
  `foto_funcionario` blob,
  `cargo_funcionario` varchar(32) NOT NULL,
  PRIMARY KEY (`id_funcionario`),
  UNIQUE KEY `cpf_funcionario` (`cpf_funcionario`),
  KEY `fk_cargo_funcionario` (`cargo_funcionario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id_funcionario`, `nome_funcionario`, `sobrenome_funcionario`, `nacimento_funcionario`, `sexo_funcionario`, `cpf_funcionario`, `cor_funcionario`, `foneF_funcionario`, `foneP_funcionario`, `email_funcionario`, `numero_endereco_funcionario`, `rua_endereco_funcionario`, `bairro_endereco_funcionario`, `cidade_endereco_funcionario`, `estado_endereco_funcionario`, `pais_endereco_funcionario`, `cep_endereco_funcionario`, `foto_funcionario`, `cargo_funcionario`) VALUES
(1, 'Rosiberto', NULL, NULL, NULL, '1223', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Professor'),
(4, 'Davide', NULL, NULL, NULL, '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Diretor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissoes_usuarios`
--

DROP TABLE IF EXISTS `permissoes_usuarios`;
CREATE TABLE IF NOT EXISTS `permissoes_usuarios` (
  `id_permissao` int(11) NOT NULL AUTO_INCREMENT,
  `perfil_permissao` varchar(35) NOT NULL,
  PRIMARY KEY (`id_permissao`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `permissoes_usuarios`
--

INSERT INTO `permissoes_usuarios` (`id_permissao`, `perfil_permissao`) VALUES
(1, 'Administrador'),
(2, 'Diretor'),
(3, 'Aluno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `login_usuario` varchar(45) NOT NULL,
  `senha_usuario` varchar(255) NOT NULL,
  `cpf_usuario` varchar(45) NOT NULL,
  `permissao_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `cpf_usuario_UNIQUE` (`cpf_usuario`),
  KEY `fk_permissao` (`permissao_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `login_usuario`, `senha_usuario`, `cpf_usuario`, `permissao_usuario`) VALUES
(1, 'kelvyn@etex.com', 'admin', '70260277436', 1),
(2, 'func@func', '123', '45454545454', 2),
(3, 'maria@etex.com', 'maria123', '123456789', 3),
(5, 'elyxandre@etex.com', 'admin', '123', 1),
(17, 'rosiberto@etex.com', 'admin', '12345678', 1);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `admin_possui_escola`
--
ALTER TABLE `admin_possui_escola`
  ADD CONSTRAINT `fk_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `fk_escola` FOREIGN KEY (`id_escola`) REFERENCES `escola` (`id_escola`);

--
-- Limitadores para a tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD CONSTRAINT `fk_professor` FOREIGN KEY (`fk_professor_disciplina`) REFERENCES `funcionarios` (`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_permissao` FOREIGN KEY (`permissao_usuario`) REFERENCES `permissoes_usuarios` (`id_permissao`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
