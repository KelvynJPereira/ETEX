-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Maio-2019 às 00:57
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `area_atuacao` varchar(40) DEFAULT NULL,
  `Atributo1` varchar(40) DEFAULT NULL,
  `id_administrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador_tem_escola`
--

CREATE TABLE `administrador_tem_escola` (
  `fk_id_administrador` int(11) NOT NULL,
  `fk_id_escola` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `estado_endereco_aluno` varchar(40) DEFAULT NULL,
  `pais_endereco_aluno` varchar(40) DEFAULT NULL,
  `nome_aluno` varchar(40) DEFAULT NULL,
  `sexo_aluno` varchar(40) DEFAULT NULL,
  `sobrenome_aluno` varchar(40) DEFAULT NULL,
  `nascimento_aluno` varchar(40) DEFAULT NULL,
  `rua_endereco_aluno` varchar(40) DEFAULT NULL,
  `cor_aluno` varchar(40) DEFAULT NULL,
  `cpf_aluno` varchar(40) DEFAULT NULL,
  `email_aluno` varchar(40) DEFAULT NULL,
  `fone_pessoal_aluno` varchar(40) DEFAULT NULL,
  `fone_fixo_aluno` varchar(40) DEFAULT NULL,
  `bairro_endereco_aluno` varchar(40) DEFAULT NULL,
  `cidade_endereco_aluno` varchar(40) DEFAULT NULL,
  `cep_endereco_aluno` varchar(40) DEFAULT NULL,
  `numero_endereco_aluno` varchar(40) DEFAULT NULL,
  `id_aluno` int(11) NOT NULL,
  `fk_id_turma` int(11) NOT NULL,
  `fk_id_mensalidade` int(11) DEFAULT NULL,
  `fk_id_responsavel` int(11) DEFAULT NULL,
  `fk_id_usuario_aluno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `boletim`
--

CREATE TABLE `boletim` (
  `id_boletim` int(11) NOT NULL,
  `fk_id_aluno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `tipo_cargo` varchar(40) DEFAULT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamada`
--

CREATE TABLE `chamada` (
  `id_chamada` int(11) NOT NULL,
  `fk_id_funcionario` int(11) NOT NULL,
  `fk_id_disci_turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `descri_disciplina` varchar(40) DEFAULT NULL,
  `id_disciplina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disci_turmas`
--

CREATE TABLE `disci_turmas` (
  `id_disci_turma` int(11) NOT NULL,
  `fk_id_turma` int(11) NOT NULL,
  `fk_id_disciplina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `escola`
--

CREATE TABLE `escola` (
  `numero_endereco_escola` varchar(40) DEFAULT NULL,
  `bairro_endereco_estado` varchar(40) DEFAULT NULL,
  `cidade_endereco_estado` varchar(40) DEFAULT NULL,
  `pais_endereco_escola` varchar(40) DEFAULT NULL,
  `cnpj_escola` varchar(40) DEFAULT NULL,
  `nome_escola` varchar(40) DEFAULT NULL,
  `site_escola` varchar(40) DEFAULT NULL,
  `email_escola` varchar(40) DEFAULT NULL,
  `tipo_escola` varchar(40) DEFAULT NULL,
  `cep_endereco_escola` varchar(40) DEFAULT NULL,
  `rua_endereco_escola` varchar(40) DEFAULT NULL,
  `logo_escola` varchar(40) DEFAULT NULL,
  `estado_endereco_estado` varchar(40) DEFAULT NULL,
  `foneF_escola` varchar(40) DEFAULT NULL,
  `foneC_escola` varchar(40) DEFAULT NULL,
  `id_escola` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id_funcionario` int(11) NOT NULL,
  `nome_funcionario` varchar(40) DEFAULT NULL,
  `sobrenome_funcionario` varchar(40) DEFAULT NULL,
  `nacimento_funcionario` varchar(40) DEFAULT NULL,
  `sexo_funcionario` varchar(40) DEFAULT NULL,
  `cpf_funcionario` varchar(40) DEFAULT NULL,
  `cor_funcionario` varchar(40) DEFAULT NULL,
  `foneF_funcionario` varchar(40) DEFAULT NULL,
  `foneP_funcionario` varchar(40) DEFAULT NULL,
  `email_funcionario` varchar(40) DEFAULT NULL,
  `numero_endereco_funcionario` varchar(40) DEFAULT NULL,
  `rua_endereco_funcionario` varchar(40) DEFAULT NULL,
  `bairro_endereco_funcionario` varchar(40) DEFAULT NULL,
  `cidade_endereco_funcionario` varchar(40) DEFAULT NULL,
  `pais_endereco_funcionario` varchar(40) DEFAULT NULL,
  `estado_endereco_funcionario` varchar(40) DEFAULT NULL,
  `cep_endereco_funcionario` varchar(40) DEFAULT NULL,
  `fk_id_escola` int(11) NOT NULL,
  `fk_id_cargo` int(11) NOT NULL,
  `fk_id_usuario_funci` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `func_disci`
--

CREATE TABLE `func_disci` (
  `id_colab_disci` int(11) NOT NULL,
  `fk_id_funcionario` int(11) NOT NULL,
  `fk_id_disciplina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `gastos`
--

CREATE TABLE `gastos` (
  `id_gasto` int(11) NOT NULL,
  `fk_id_escola` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensalidade`
--

CREATE TABLE `mensalidade` (
  `id_mensalidade` int(11) NOT NULL,
  `valor_Mensalidade` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE `receitas` (
  `id_receita` int(11) NOT NULL,
  `fk_id_escola` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsaveis`
--

CREATE TABLE `responsaveis` (
  `id_responsavel` int(11) NOT NULL,
  `nome_responsavel` varchar(40) DEFAULT NULL,
  `nascimento_responsavel` varchar(40) DEFAULT NULL,
  `sobrenome_responsavel` varchar(40) DEFAULT NULL,
  `sexo_respnsavel` varchar(40) DEFAULT NULL,
  `fone_pessoal_responsavel` varchar(40) DEFAULT NULL,
  `cpf_responsavel` varchar(40) DEFAULT NULL,
  `email_responsavel` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `descri_turma` varchar(40) DEFAULT NULL,
  `id_turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario_funci` int(11) NOT NULL,
  `login_usuario` varchar(50) DEFAULT NULL,
  `senha_usuario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_aluno`
--

CREATE TABLE `usuarios_aluno` (
  `login_aluno` varchar(40) DEFAULT NULL,
  `senha_aluno` varchar(40) DEFAULT NULL,
  `id_usuario_aluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indexes for table `administrador_tem_escola`
--
ALTER TABLE `administrador_tem_escola`
  ADD PRIMARY KEY (`fk_id_administrador`,`fk_id_escola`);

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id_aluno`,`fk_id_turma`);

--
-- Indexes for table `boletim`
--
ALTER TABLE `boletim`
  ADD PRIMARY KEY (`id_boletim`);

--
-- Indexes for table `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indexes for table `chamada`
--
ALTER TABLE `chamada`
  ADD PRIMARY KEY (`id_chamada`,`fk_id_disci_turma`,`fk_id_funcionario`);

--
-- Indexes for table `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`id_disciplina`);

--
-- Indexes for table `disci_turmas`
--
ALTER TABLE `disci_turmas`
  ADD PRIMARY KEY (`id_disci_turma`,`fk_id_turma`,`fk_id_disciplina`);

--
-- Indexes for table `escola`
--
ALTER TABLE `escola`
  ADD PRIMARY KEY (`id_escola`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id_funcionario`,`fk_id_cargo`,`fk_id_escola`);

--
-- Indexes for table `func_disci`
--
ALTER TABLE `func_disci`
  ADD PRIMARY KEY (`id_colab_disci`,`fk_id_funcionario`,`fk_id_disciplina`);

--
-- Indexes for table `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id_gasto`);

--
-- Indexes for table `mensalidade`
--
ALTER TABLE `mensalidade`
  ADD PRIMARY KEY (`id_mensalidade`);

--
-- Indexes for table `receitas`
--
ALTER TABLE `receitas`
  ADD PRIMARY KEY (`id_receita`);

--
-- Indexes for table `responsaveis`
--
ALTER TABLE `responsaveis`
  ADD PRIMARY KEY (`id_responsavel`);

--
-- Indexes for table `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id_turma`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario_funci`);

--
-- Indexes for table `usuarios_aluno`
--
ALTER TABLE `usuarios_aluno`
  ADD PRIMARY KEY (`id_usuario_aluno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
