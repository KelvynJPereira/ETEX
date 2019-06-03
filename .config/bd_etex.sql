-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 03-Jun-2019 às 20:52
-- Versão do servidor: 5.7.21
-- PHP Version: 7.2.4

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
  `logo_admin` longblob,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `cpf_admin` (`cpf_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id_admin`, `nome_admin`, `cpf_admin`, `logo_admin`) VALUES
(1, 'Kelvyn', '70260277436', NULL),
(2, 'Kelvyn', '6565', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin_escola`
--

DROP TABLE IF EXISTS `admin_escola`;
CREATE TABLE IF NOT EXISTS `admin_escola` (
  `id_admin` int(45) NOT NULL,
  `id_escola` int(11) NOT NULL,
  KEY `fk_admin` (`id_admin`),
  KEY `fk_escola` (`id_escola`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin_escola`
--

INSERT INTO `admin_escola` (`id_admin`, `id_escola`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `matricula_aluno` varchar(32) DEFAULT NULL,
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
  `foto_aluno` varchar(255) DEFAULT NULL,
  `fk_escola` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_aluno`),
  UNIQUE KEY `cpf_aluno` (`cpf_aluno`),
  KEY `fk_escola` (`fk_escola`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id_aluno`, `matricula_aluno`, `nome_aluno`, `sobrenome_aluno`, `nascimento_aluno`, `sexo_aluno`, `cor_aluno`, `cpf_aluno`, `email_aluno`, `fone_pessoal_aluno`, `fone_fixo_aluno`, `numero_endereco_aluno`, `rua_endereco_aluno`, `bairro_endereco_aluno`, `cidade_endereco_aluno`, `estado_endereco_aluno`, `pais_endereco_aluno`, `cep_endereco_aluno`, `foto_aluno`, `fk_escola`) VALUES
(1, '201986', 'Elyxandre', 'Guedes', '', 'Homem', NULL, '12457894521', 'elyxandre@gmail.com', '', '', '', '', '', '', '', '', '', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos_funcionarios`
--

DROP TABLE IF EXISTS `cargos_funcionarios`;
CREATE TABLE IF NOT EXISTS `cargos_funcionarios` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao_cargo` varchar(32) NOT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cargos_funcionarios`
--

INSERT INTO `cargos_funcionarios` (`id_cargo`, `descricao_cargo`) VALUES
(1, 'Diretor'),
(2, 'Coordenador'),
(3, 'Professor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_curso` varchar(32) DEFAULT NULL,
  `ativo_curso` varchar(32) NOT NULL,
  `nome_curso` varchar(64) NOT NULL,
  `nivel_curso` varchar(32) NOT NULL,
  `objetivo_curso` varchar(255) NOT NULL,
  `fk_coordenador` int(11) NOT NULL,
  `fk_professor` int(11) NOT NULL,
  `fk_escola` int(11) NOT NULL,
  PRIMARY KEY (`id_curso`),
  KEY `fk_curso_escola` (`fk_escola`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id_curso`, `codigo_curso`, `ativo_curso`, `nome_curso`, `nivel_curso`, `objetivo_curso`, `fk_coordenador`, `fk_professor`, `fk_escola`) VALUES
(1, '2019ML915', 'Ativo', 'Aulas de mobile', 'Médio', 'Lecionamento de aulas de Android para alunos do ensino médio', 1, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

DROP TABLE IF EXISTS `disciplinas`;
CREATE TABLE IF NOT EXISTS `disciplinas` (
  `id_disciplina` int(11) NOT NULL AUTO_INCREMENT,
  `nome_disciplina` varchar(32) NOT NULL,
  `id_professor` int(11) NOT NULL,
  `id_escola` int(11) NOT NULL,
  PRIMARY KEY (`id_disciplina`),
  KEY `disciplinas_ibfk_1` (`id_professor`),
  KEY `disciplinas_ibfk_2` (`id_escola`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id_disciplina`, `nome_disciplina`, `id_professor`, `id_escola`) VALUES
(1, 'Android', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolas`
--

DROP TABLE IF EXISTS `escolas`;
CREATE TABLE IF NOT EXISTS `escolas` (
  `id_escola` int(11) NOT NULL AUTO_INCREMENT,
  `nome_escola` varchar(40) NOT NULL,
  `cnpj_escola` varchar(40) NOT NULL,
  `tipo_escola` varchar(40) DEFAULT NULL,
  `fone_fixo_escola` varchar(40) DEFAULT NULL,
  `fone_comercial_escola` varchar(40) DEFAULT NULL,
  `email_escola` varchar(40) DEFAULT NULL,
  `site_escola` varchar(40) DEFAULT NULL,
  `numero_endereco_escola` varchar(40) DEFAULT NULL,
  `rua_endereco_escola` varchar(40) DEFAULT NULL,
  `bairro_endereco_escola` varchar(40) DEFAULT NULL,
  `cidade_endereco_escola` varchar(40) DEFAULT NULL,
  `estado_endereco_escola` varchar(40) DEFAULT NULL,
  `pais_endereco_escola` varchar(40) DEFAULT NULL,
  `cep_endereco_escola` varchar(40) DEFAULT NULL,
  `logo_escola` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_escola`),
  UNIQUE KEY `cnpj_unique` (`cnpj_escola`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `escolas`
--

INSERT INTO `escolas` (`id_escola`, `nome_escola`, `cnpj_escola`, `tipo_escola`, `fone_fixo_escola`, `fone_comercial_escola`, `email_escola`, `site_escola`, `numero_endereco_escola`, `rua_endereco_escola`, `bairro_endereco_escola`, `cidade_endereco_escola`, `estado_endereco_escola`, `pais_endereco_escola`, `cep_endereco_escola`, `logo_escola`) VALUES
(1, 'Miguel Batista', '54545', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `escola_pagamentos_receber`
--

DROP TABLE IF EXISTS `escola_pagamentos_receber`;
CREATE TABLE IF NOT EXISTS `escola_pagamentos_receber` (
  `id_matricula` int(11) NOT NULL AUTO_INCREMENT,
  `matriculas_efetuadas` int(11) DEFAULT NULL,
  `fk_id_escola` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_matricula`),
  KEY `fk_id_escola` (`fk_id_escola`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `escola_pagamentos_receber`
--

INSERT INTO `escola_pagamentos_receber` (`id_matricula`, `matriculas_efetuadas`, `fk_id_escola`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `matricula_funcionario` varchar(32) DEFAULT NULL,
  `fk_cargo_funcionario` int(11) DEFAULT NULL,
  `nome_funcionario` varchar(40) NOT NULL,
  `sobrenome_funcionario` varchar(40) DEFAULT NULL,
  `nascimento_funcionario` varchar(40) DEFAULT NULL,
  `sexo_funcionario` varchar(40) DEFAULT NULL,
  `cpf_funcionario` varchar(45) NOT NULL,
  `fone_fixo_funcionario` varchar(40) DEFAULT NULL,
  `fone_pessoal_funcionario` varchar(40) DEFAULT NULL,
  `email_funcionario` varchar(40) DEFAULT NULL,
  `foto_funcionario` varchar(255) DEFAULT NULL,
  `numero_endereco_funcionario` varchar(40) DEFAULT NULL,
  `rua_endereco_funcionario` varchar(40) DEFAULT NULL,
  `bairro_endereco_funcionario` varchar(40) DEFAULT NULL,
  `cidade_endereco_funcionario` varchar(40) DEFAULT NULL,
  `estado_endereco_funcionario` varchar(40) DEFAULT NULL,
  `pais_endereco_funcionario` varchar(40) DEFAULT NULL,
  `cep_endereco_funcionario` varchar(40) DEFAULT NULL,
  `ctps_funcionario` varchar(32) DEFAULT NULL,
  `salario_funcionario` varchar(40) DEFAULT NULL,
  `fk_id_escola` int(11) NOT NULL,
  PRIMARY KEY (`id_funcionario`),
  KEY `fk_cargo_funcionario` (`fk_cargo_funcionario`),
  KEY `funcionarios_ibfk_1` (`fk_id_escola`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id_funcionario`, `matricula_funcionario`, `fk_cargo_funcionario`, `nome_funcionario`, `sobrenome_funcionario`, `nascimento_funcionario`, `sexo_funcionario`, `cpf_funcionario`, `fone_fixo_funcionario`, `fone_pessoal_funcionario`, `email_funcionario`, `foto_funcionario`, `numero_endereco_funcionario`, `rua_endereco_funcionario`, `bairro_endereco_funcionario`, `cidade_endereco_funcionario`, `estado_endereco_funcionario`, `pais_endereco_funcionario`, `cep_endereco_funcionario`, `ctps_funcionario`, `salario_funcionario`, `fk_id_escola`) VALUES
(1, '2019331', 2, 'Neitor', '', '', '', '332323', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(2, '2019937', 3, 'Rosiberto', '', '', '', '1212', '', '', '', '', '', '', '', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula_aluno`
--

DROP TABLE IF EXISTS `matricula_aluno`;
CREATE TABLE IF NOT EXISTS `matricula_aluno` (
  `id_matricula_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `matricula_aluno` varchar(32) DEFAULT NULL,
  `id_aluno` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_escola` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_matricula_aluno`),
  KEY `id_aluno` (`id_aluno`),
  KEY `matricula_aluno_ibfk_2` (`id_curso`),
  KEY `id_escola` (`id_escola`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `matricula_aluno`
--

INSERT INTO `matricula_aluno` (`id_matricula_aluno`, `matricula_aluno`, `id_aluno`, `id_curso`, `id_escola`) VALUES
(1, '201986', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas_alunos`
--

DROP TABLE IF EXISTS `notas_alunos`;
CREATE TABLE IF NOT EXISTS `notas_alunos` (
  `id_notas` int(11) NOT NULL AUTO_INCREMENT,
  `nota_1` varchar(15) DEFAULT 'INDISPONIVEL',
  `nota_2` varchar(15) DEFAULT 'INDISPONIVEL',
  `nota_3` varchar(15) DEFAULT 'INDISPONIVEL',
  `nota_4` varchar(15) DEFAULT 'INDISPONIVEL',
  `fk_id_aluno` int(11) NOT NULL,
  `fk_id_disciplina` int(11) NOT NULL,
  PRIMARY KEY (`id_notas`),
  KEY `fk_id_aluno` (`fk_id_aluno`),
  KEY `fk_id_disciplina` (`fk_id_disciplina`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `notas_alunos`
--

INSERT INTO `notas_alunos` (`id_notas`, `nota_1`, `nota_2`, `nota_3`, `nota_4`, `fk_id_aluno`, `fk_id_disciplina`) VALUES
(1, '10', '5', '-', '-', 1, 1);

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
  UNIQUE KEY `email_unique` (`login_usuario`),
  KEY `fk_permissao` (`permissao_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `login_usuario`, `senha_usuario`, `cpf_usuario`, `permissao_usuario`) VALUES
(1, 'kelvyn@etex.com', '123', '70260277436', 1),
(3, 'elyxandre.aluno@etex.com', '123', '12457894521', 3);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `admin_escola`
--
ALTER TABLE `admin_escola`
  ADD CONSTRAINT `fk_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_escola` FOREIGN KEY (`id_escola`) REFERENCES `escolas` (`id_escola`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `alunos_ibfk_2` FOREIGN KEY (`fk_escola`) REFERENCES `escolas` (`id_escola`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `fk_curso_escola` FOREIGN KEY (`fk_escola`) REFERENCES `escolas` (`id_escola`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD CONSTRAINT `disciplinas_ibfk_1` FOREIGN KEY (`id_professor`) REFERENCES `funcionarios` (`id_funcionario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `disciplinas_ibfk_2` FOREIGN KEY (`id_escola`) REFERENCES `escolas` (`id_escola`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `escola_pagamentos_receber`
--
ALTER TABLE `escola_pagamentos_receber`
  ADD CONSTRAINT `escola_pagamentos_receber_ibfk_1` FOREIGN KEY (`fk_id_escola`) REFERENCES `escolas` (`id_escola`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `fk_cargo_funcionario` FOREIGN KEY (`fk_cargo_funcionario`) REFERENCES `cargos_funcionarios` (`id_cargo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `funcionarios_ibfk_1` FOREIGN KEY (`fk_id_escola`) REFERENCES `escolas` (`id_escola`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `matricula_aluno`
--
ALTER TABLE `matricula_aluno`
  ADD CONSTRAINT `matricula_aluno_ibfk_1` FOREIGN KEY (`id_escola`) REFERENCES `escolas` (`id_escola`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matricula_aluno_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `matricula_aluno_ibfk_3` FOREIGN KEY (`id_aluno`) REFERENCES `alunos` (`id_aluno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `notas_alunos`
--
ALTER TABLE `notas_alunos`
  ADD CONSTRAINT `notas_alunos_ibfk_2` FOREIGN KEY (`fk_id_disciplina`) REFERENCES `disciplinas` (`id_disciplina`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_permissao` FOREIGN KEY (`permissao_usuario`) REFERENCES `permissoes_usuarios` (`id_permissao`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
