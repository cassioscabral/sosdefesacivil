-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 02/12/2012 às 19h13min
-- Versão do Servidor: 5.5.16
-- Versão do PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `sigeo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(255) NOT NULL,
  `descricao` text,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=82 ;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`cod`, `cargo`, `descricao`) VALUES
(1, 'TEC.POL.PUBLICAS E GESTAO GOV.', NULL),
(2, 'REDATOR', NULL),
(3, 'AGENTE DE ATV. OPERACIONAIS', NULL),
(4, 'LOCUTOR APRESENTADOR', NULL),
(5, 'TECNICO COMUNICACAO SOCIAL', NULL),
(6, 'AGENTE ADM. AUXILIAR', NULL),
(7, 'MOTORISTA', NULL),
(8, 'ARQUIVISTA  PESQUISADOR', NULL),
(9, 'REPORTER', NULL),
(10, 'REPORTER FOTOGRAFICO', NULL),
(11, 'AGENTE ADMINISTRATIVO', NULL),
(12, 'ASSISTENTE TECNICO', NULL),
(13, 'TECNICO DE NIVEL MEDIO', NULL),
(14, 'SECRETARIO EXECUTIVO', NULL),
(15, 'ASSESSOR P/ ASS ADM GERAL', NULL),
(16, 'REVISOR', NULL),
(17, 'PUBLICITARIO', NULL),
(18, 'PAGINADOR', NULL),
(19, 'DIAGRAMADOR', NULL),
(20, 'PERFURADOR', NULL),
(21, 'FUNDIDOR', NULL),
(22, 'MONTADOR', NULL),
(23, 'AUXILIAR DE EXPEDICAO', NULL),
(24, 'AUXILIAR DE SERVICO', NULL),
(25, 'AUXILIAR DE IMPRESSAO', NULL),
(26, 'APROPRIADOR DE CUSTOS', NULL),
(27, 'IMPRESSOR', NULL),
(28, 'LOCUTOR ENTREVISTADOR', NULL),
(29, 'SERVENTE', NULL),
(30, 'DESENHISTA', NULL),
(31, 'PORTEIRO', NULL),
(32, 'AUXILIAR DE ACABAMENTO', NULL),
(33, 'MECANICO', NULL),
(34, 'GRAVADOR', NULL),
(35, 'PESQUISADOR', NULL),
(36, 'PROFESSOR DE EDUCACAO BASICA 3', NULL),
(37, 'ENGENHEIRO', NULL),
(38, 'EMENDADOR', NULL),
(39, 'ENCADERNADOR', NULL),
(40, 'CHAPISTA', NULL),
(41, 'CONSULTOR TECNICO', NULL),
(42, 'OPERADOR DE AUDIO', NULL),
(43, 'VIGILANTE', NULL),
(44, 'DIGITADOR', NULL),
(45, 'ASSESSOR', NULL),
(46, 'RELACOES PUBLICAS', NULL),
(47, 'ASS. DE GABINETE', NULL),
(48, 'GERENTE OPERACIONAL DE ACERVO FOTOGRAFICO', NULL),
(49, 'GERENTE EXECUTIVO DE COMUNICAÇÃO', NULL),
(50, 'GERENTE OPERACIONAL DE PRODUÇÃO DE INFORMAÇÕES', NULL),
(51, 'ASSISTENTE ADMINISTRATIVO I', NULL),
(52, 'AGENTE DE PROGRAMAS GOVERNAMENTAIS I', NULL),
(53, 'SUB-GERENTE DE APOIO ADMINISTRATIVO', NULL),
(54, 'ASSISTENTE ADMNISTRATIVO III', NULL),
(55, 'ASSESSOR TECNICO DA ASSESSORIA', NULL),
(56, 'ASSISTENTE TECNICO II', NULL),
(57, 'ASESSOR TECNICO DA ASSESSORIA TÉCNICA', NULL),
(58, 'AGENTE CONDUTOR DE VEÍCULOS II', NULL),
(59, 'CHEFE DE GABINETE ', NULL),
(60, 'SUB-GERENTE DE TECNOLOGIA DA ', NULL),
(61, 'COORDENADOR DA ASSESSORIA DA SECRETARIA', NULL),
(62, 'GERENTE OPERACIONAL', NULL),
(63, 'AGENTE PROGRAMENTAIS I', NULL),
(64, 'GER. ADM. TECNL.INFORM.', NULL),
(65, 'SECRETÁRIO AUXILIAR DO SECRETÁRIO', NULL),
(66, 'GERENTE DE ADMINISTRAÇÃO E DE TECNOLOGIA DA INFORMAÇÃO', NULL),
(67, 'GERENTE EXECUTIVO DE FOTOGRAFIA', NULL),
(68, 'ASSESSOR TÉCNICO DA DIRETORIA EXECUTIVA DE JORNALSIMO', NULL),
(69, 'ASSISTENTE ADMINISTRATIVO III', NULL),
(70, 'SECRETÁRIO DO SECRETÁRIO', NULL),
(71, 'ASSESSOR P/ASSUNTOS PARLEMENTARES', NULL),
(72, 'ASSESSOR TÉCNICO DA GER~ENCIA EXECUTICA DE PROMOÇÃO INSTITUCIONAL', NULL),
(73, 'SECRETÁRIO EXECUTIVO', NULL),
(74, 'ASSISTENTE DE GABINETE I', NULL),
(75, 'ASSESSOR TECNICO DA ASSESSORIA ', NULL),
(76, 'GERENTE EXECUTIVO DE RÁDIO E TV', NULL),
(77, 'ASSESSOR TÉC. DA DIR. EX.JORN.', NULL),
(78, 'ASSESSOR TÉCNICO DE PLANEJAMENTO,ORÇAMENTO   E FINANÇAS', NULL),
(79, 'GERENTE DE PLANEJAMENTO, ORÇAMENTO E FINANÇAS', NULL),
(80, 'SECRETÁRIO DO SECRETÁRIO EXECUTIVO', NULL),
(81, 'GERENTE EXECUTIVO DE PROMOÇÃO INSTITUCIONAL', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocorrencia`
--

CREATE TABLE IF NOT EXISTS `ocorrencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_hora` varchar(45) DEFAULT NULL COMMENT 'data e hora autoincrementada',
  `protocolo` int(11) DEFAULT NULL,
  `solicitante` varchar(45) DEFAULT NULL COMMENT 'nome completo do solicitante',
  `apelido` varchar(45) DEFAULT NULL COMMENT 'apelido do solicitante',
  `usuario_id` int(11) unsigned NOT NULL COMMENT 'Atendnete',
  `endereco` varchar(255) DEFAULT NULL COMMENT 'endereço da ocorrencia',
  `numero` varchar(45) DEFAULT NULL COMMENT 'numero da residencia se for informado ou se for necessário',
  `complemento` varchar(45) DEFAULT NULL,
  `localidade` varchar(45) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL COMMENT 'nome do bairro',
  `referencia` varchar(255) DEFAULT NULL COMMENT 'ponto de referencia da ocorrencia',
  `fone1` varchar(45) DEFAULT NULL COMMENT 'telefone primario para contato',
  `fone2` varchar(45) DEFAULT NULL COMMENT 'telefone secundário para contato',
  `obs` text COMMENT 'informações extras da localidade ou do solicitante',
  `tramitacao` int(11) NOT NULL COMMENT '0 - Atendimento\n1 - Vistoria\n2 - Assistência Social\n3 -  Financeiro\n4 - Concluído\n',
  `solicitacao` varchar(100) DEFAULT NULL,
  `prioridade` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_atendimento_usuario` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Extraindo dados da tabela `ocorrencia`
--

INSERT INTO `ocorrencia` (`id`, `data_hora`, `protocolo`, `solicitante`, `apelido`, `usuario_id`, `endereco`, `numero`, `complemento`, `localidade`, `bairro`, `referencia`, `fone1`, `fone2`, `obs`, `tramitacao`, `solicitacao`, `prioridade`) VALUES
(7, NULL, 21, '32', '1342', 2, '42', '432', '43234', '24', '324', '3243', '243', '2432', '432432', 0, NULL, 0),
(9, NULL, 5435, '43543', '543', 2, '5435', '435', '4354', '354', '354', '3543', '54354', '3543', '543543', 0, 'LONA PLÁSTICA', 0),
(10, NULL, 654, '564', '564', 2, '64', '646', '546', '5465', '465', '4654', '56456', '4654', '654', 0, 'VISTÓRIA', 0),
(11, NULL, 7, '68', '6ashdgh', 2, 'fgh7656', '5465', '465', '465', '465', '4654', '56456', '465', '4654', 0, 'LONA PLÁSTICA', 0),
(12, NULL, 123123, 'asdasdasd', 'asdasd', 84, 'asdasd', '2943723987', 'anfdkjnad', 'asdansd', 'nasndk', 'asdans', '2897342983', '82347', 'puts', 0, 'OUTROS (especifique)', 0),
(13, NULL, 1123, 'Eu', 'asd', 84, 'asdasd', '123123', 'ASDASD', 'ASDASD', 'ASDASD', 'ASDASDASD', '1231231', '2312312', 'ASDASD', 0, 'LONA PLÁSTICA', 0),
(14, NULL, 123123, 'sdasd', 'asdasda', 84, 'sdasda', 'sdasdas', 'dasdasd', 'aasdasd', 'asdasd', 'asdasda', '123123', '1231231', 'Eu registrei agora às 14:25', 0, 'OUTROS (especifique)', 3),
(15, NULL, 1123, 'Eduardo', 'edu', 84, 'Rua da Mandioca Seca', '88', 'Morro do Urubu', 'Não', 'aaa', 'aaa', '127340', '12377', 'Ok, mais uma', 0, 'OUTROS (especifique)', 75),
(16, NULL, 123123, '1asdasda', 'sdasdasd', 84, 'asdas', 'dasdas', 'dasdasd', 'asdasd', 'asdasd', 'asdasd', 'asdas', 'dasda', 'sdasdasd', 0, 'OUTROS (especifique)', 51),
(17, '1206', 123412, 'Zé da Silva', 'Zezito', 84, 'Rua Ladeira Abaixo', '1', 'A Casa Caiu', 'Ladeira Bananeira', 'Jururu', 'perto do barro', '123123', '1231231', 'AAAAAAAAAAA', 0, 'LONA PLÁSTICA', 75),
(18, '1206', NULL, '435', '35', 84, '435', '435', '35', '354', '354', '35', '4354', '35', '35', 0, 'LONA PLÁSTICA', 51),
(19, '1206', 123123, 'asdasd', 'asd', 2, 'asdasd', '123123', 'dasdasd', 'asdansd', 'asdasda', 'aaa', 'asdasd', 'asd', 'asdasd', 0, 'OUTROS (especifique)', 60),
(20, '1206', 123123, 'JOSE', 'asd', 2, 'asdasd', 'dasd', 'anfdkjnad', 'asdansd', 'asdasda', 'asdans', '123123', '1231231', 'asdas', 0, 'OUTROS (especifique)', 61),
(21, '1206', 443, 'asdasd', 'asdasd', 2, 'asdas', '123123', 'dasdasd', 'sdasd', 'asdasd', 'asdans', '123123', 'asd', 'dsfsdf', 0, 'OUTROS (especifique)', 60),
(22, '1206', 1211, 'Jose', 'asdasd', 2, 'asdas', '123', 'asdasda', 'asd', 'asdasd', 'asdas', 'asd', 'asdasd', 'asd', 0, 'OUTROS (especifique)', 111),
(23, '1206', 1876, 'Maria do Carmo Pereira', 'Carminha', 84, 'Rua Pereira Campos', '332', '', '', 'Bairro 1', '', '3333-3333', '8888-888', '', 0, 'VISTÓRIA', 129),
(24, '1206', 2147483647, 'Jose', 'ze da tapioca', 84, 'Rua  projetada', 'sn', 'perto da ladeira', 'Olinda-PE', 'Peixinho', 'sn', '123123132', '12313213', 'informacao', 0, 'OUTROS (especifique)', 111);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocorrencia_tipo`
--

CREATE TABLE IF NOT EXISTS `ocorrencia_tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ocorrencia_id` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Extraindo dados da tabela `ocorrencia_tipo`
--

INSERT INTO `ocorrencia_tipo` (`id`, `ocorrencia_id`, `tipo_id`) VALUES
(8, 7, 1),
(9, 7, 50),
(10, 7, 25),
(11, 7, 1),
(12, 7, 1),
(13, 7, 50),
(14, 9, 50),
(15, 9, 25),
(16, 9, 50),
(17, 10, 1),
(18, 10, 1),
(19, 10, 1),
(20, 10, 1),
(21, 11, 50),
(22, 11, 1),
(23, 11, 50),
(24, 12, 1),
(25, 12, 10),
(26, 12, 50),
(27, 13, 25),
(28, 13, 1),
(29, 14, 1),
(30, 14, 1),
(31, 14, 1),
(32, 15, 25),
(33, 15, 50),
(34, 16, 1),
(35, 16, 50),
(36, 17, 25),
(37, 17, 50),
(38, 18, 1),
(39, 18, 50),
(40, 19, 50),
(41, 19, 10),
(42, 20, 1),
(43, 20, 10),
(44, 20, 50),
(45, 21, 10),
(46, 21, 50),
(47, 22, 1),
(48, 22, 10),
(49, 22, 50),
(50, 22, 50),
(51, 23, 1),
(52, 23, 50),
(53, 23, 1),
(54, 23, 1),
(55, 23, 25),
(56, 23, 1),
(57, 23, 50),
(58, 24, 1),
(59, 24, 10),
(60, 24, 50),
(61, 24, 50);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(80) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id`, `descricao`) VALUES
(1, 'Admin'),
(2, 'Normal'),
(9, 'Assistente Social'),
(10, 'Atendente'),
(11, 'Recepcionista'),
(12, 'Engenheiro'),
(13, 'Estatístico'),
(15, 'Administrativo'),
(16, 'Chefe Operacional'),
(17, 'Técnico Social'),
(18, 'Técnico em Engenharia'),
(19, 'Secretário');

-- --------------------------------------------------------

--
-- Estrutura da tabela `preferencia`
--

CREATE TABLE IF NOT EXISTS `preferencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `imagem1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `imagem2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `imagem3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `cor1` varchar(6) COLLATE utf8_bin DEFAULT NULL,
  `cor2` varchar(6) COLLATE utf8_bin DEFAULT NULL,
  `cor3` varchar(6) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_preferencia_usuario1` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=38 ;

--
-- Extraindo dados da tabela `preferencia`
--

INSERT INTO `preferencia` (`id`, `usuario_id`, `imagem1`, `imagem2`, `imagem3`, `cor1`, `cor2`, `cor3`) VALUES
(2, 2, '', '', '', 'red', '', ''),
(5, 8, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 9, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 10, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 11, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 12, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 13, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 14, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 15, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 16, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 26, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 27, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 73, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 74, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 75, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 76, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 77, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 78, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 79, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 80, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 81, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 82, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 83, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 84, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 85, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 86, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 87, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 88, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 89, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 90, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 91, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 92, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 93, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 94, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sic_orgao`
--

CREATE TABLE IF NOT EXISTS `sic_orgao` (
  `id` int(11) unsigned NOT NULL DEFAULT '0',
  `nome` varchar(255) DEFAULT NULL,
  `data_cadastro` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `logradouro` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `cep` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `responsavel` varchar(255) DEFAULT NULL,
  `anexo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sic_orgao`
--

INSERT INTO `sic_orgao` (`id`, `nome`, `data_cadastro`, `imagem`, `logradouro`, `telefone`, `cep`, `bairro`, `estado`, `cidade`, `responsavel`, `anexo`) VALUES
(1, 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL COMMENT 'Descrição do tipo da ocorrência',
  `peso` int(11) NOT NULL COMMENT 'Peso da do tipo de ocorrência',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Tabela que irá armazenar os tipos de ocorrencias relacionado' AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`id`, `descricao`, `peso`) VALUES
(1, 'AMEAÇA DE DESLIZAMENTO DE BARREIRA', 1),
(2, 'DESLIZAMENTO DE BARREIRA', 50),
(3, 'AMEAÇA DE QUEDA DE ÁRVORE', 1),
(4, 'QUEDA DE ÁRVORE', 1),
(5, 'IMÓVEL COM RACHADURAS', 1),
(6, 'DESABAMENTO PARCIAL DE IMÓVEL', 25),
(7, 'DESABAMENTO TOTAL DE IMÓVEL', 25),
(8, 'MURO COM RACHADURAS', 1),
(9, 'DESABAMENTO PARCIAL DE MURO', 1),
(10, 'DESABAMENTO TOTAL DE MURO', 10),
(11, 'ALAGAMENTO', 50),
(12, 'PESSOA SOTERRADA', 50);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` int(1) unsigned DEFAULT NULL,
  `perfil_id` double DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `data_atualizado` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `matricula` varchar(255) DEFAULT NULL,
  `orgao_id` int(11) unsigned DEFAULT NULL,
  `funcao` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `chave_ativacao` varchar(255) DEFAULT NULL,
  `online` int(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=95 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `senha`, `email`, `status`, `perfil_id`, `data_cadastro`, `data_atualizado`, `avatar`, `matricula`, `orgao_id`, `funcao`, `telefone`, `chave_ativacao`, `online`) VALUES
(2, 'Nome da Telefonista', '66c65ed9b8fabf358ce82fdbc1cd5cd0', 'telefonista', 1, 1, '2012-07-02 00:00:00', NULL, NULL, NULL, 16, 'Gerente de Tecnologia da Informação', NULL, 'bdcd4a78b1efedd49830776b5bce01625315da6a', 1),
(83, 'Cassio', '66c65ed9b8fabf358ce82fdbc1cd5cd0', 'cassio', 1, 1, '2012-12-02 00:00:00', NULL, NULL, NULL, 16, NULL, NULL, NULL, 0),
(84, 'Eduardo', '66c65ed9b8fabf358ce82fdbc1cd5cd0', 'eduardo', 1, 1, '2012-12-02 00:00:00', NULL, NULL, NULL, 16, NULL, NULL, NULL, 0),
(85, 'Jeremias', '66c65ed9b8fabf358ce82fdbc1cd5cd0', 'jeremias', 1, 1, '2012-12-02 00:00:00', NULL, NULL, NULL, 16, NULL, NULL, NULL, 0),
(87, 'José Gomildo', '66c65ed9b8fabf358ce82fdbc1cd5cd0', 'aaa@aaa.com', 1, 13, '2012-12-02 00:00:00', NULL, NULL, NULL, 30, NULL, NULL, NULL, 0),
(88, 'Tony da Mandioca', '66c65ed9b8fabf358ce82fdbc1cd5cd0', 'aaa@aaa.com', 1, 9, '2012-12-02 00:00:00', NULL, NULL, NULL, 30, NULL, NULL, NULL, 0),
(89, 'asdasd', '66c65ed9b8fabf358ce82fdbc1cd5cd0', 'asdas', 1, 2, '2012-12-02 00:00:00', NULL, NULL, NULL, 30, NULL, NULL, NULL, 0),
(90, 'mari', '66c65ed9b8fabf358ce82fdbc1cd5cd0', 'maria@maria.com', 1, 10, '2012-12-02 00:00:00', NULL, NULL, NULL, 1, NULL, NULL, NULL, 0),
(91, 'joaquina', '66c65ed9b8fabf358ce82fdbc1cd5cd0', 'joao@asd.com', 0, 2, '2012-12-02 00:00:00', NULL, NULL, NULL, 1, NULL, NULL, NULL, 0),
(92, 'eduardocruz', '66c65ed9b8fabf358ce82fdbc1cd5cd0', 'asd@asd.com', 1, 1, '2012-12-02 00:00:00', NULL, NULL, NULL, 1, NULL, NULL, NULL, 0),
(93, 'joao', '66c65ed9b8fabf358ce82fdbc1cd5cd0', 'asdas@asd.com', 1, NULL, '2012-12-02 00:00:00', NULL, NULL, NULL, 1, NULL, NULL, NULL, 0),
(94, 'admin', 'fbcfc8516dda8f51430902de46ebbfbf', 'admin', 1, 1, '2012-12-02 00:00:00', NULL, NULL, NULL, 1, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_log`
--

CREATE TABLE IF NOT EXISTS `usuario_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) unsigned NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `descricao` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=232 ;

--
-- Extraindo dados da tabela `usuario_log`
--

INSERT INTO `usuario_log` (`id`, `usuario_id`, `data`, `descricao`) VALUES
(5, 2, '2012-11-27 13:40:02', 'Efetuou login'),
(6, 2, '2012-11-27 13:56:24', 'Efetuou login'),
(7, 2, '2012-11-27 15:16:05', 'Efetuou login'),
(8, 77, '2012-11-27 15:16:55', 'Efetuou login'),
(9, 61, '2012-11-27 15:18:54', 'Efetuou login'),
(10, 61, '2012-11-27 15:19:23', 'Efetuou logout'),
(11, 2, '2012-11-27 15:20:10', 'Efetuou logout'),
(12, 2, '2012-11-27 18:18:15', 'Efetuou login'),
(13, 77, '2012-11-27 18:18:46', 'Efetuou login'),
(14, 77, '2012-11-27 18:18:49', 'Efetuou logout'),
(15, 57, '2012-11-27 18:32:30', 'Efetuou login'),
(16, 57, '2012-11-27 18:33:16', 'Efetuou logout'),
(17, 57, '2012-11-27 18:46:53', 'Efetuou login'),
(18, 22, '2012-11-27 18:53:04', 'Efetuou login'),
(19, 22, '2012-11-27 18:57:52', 'Efetuou logout'),
(20, 22, '2012-11-27 18:58:14', 'Efetuou login'),
(21, 22, '2012-11-27 19:03:54', 'Efetuou logout'),
(22, 77, '2012-11-27 19:06:12', 'Efetuou login'),
(23, 77, '2012-11-27 19:06:45', 'Efetuou login'),
(24, 62, '2012-11-27 19:08:01', 'Efetuou login'),
(25, 62, '2012-11-27 19:16:49', 'Efetuou login'),
(26, 62, '2012-11-27 19:17:00', 'Efetuou logout'),
(27, 62, '2012-11-27 19:17:37', 'Efetuou login'),
(28, 62, '2012-11-27 19:17:55', 'Efetuou logout'),
(29, 62, '2012-11-27 19:18:46', 'Efetuou login'),
(30, 62, '2012-11-27 19:21:24', 'Efetuou login'),
(31, 62, '2012-11-27 19:23:19', 'Efetuou logout'),
(32, 62, '2012-11-27 19:31:12', 'Efetuou login'),
(33, 57, '2012-11-27 19:33:17', 'Efetuou logout'),
(34, 21, '2012-11-27 19:33:37', 'Efetuou login'),
(35, 57, '2012-11-27 19:34:21', 'Efetuou login'),
(36, 44, '2012-11-27 19:50:04', 'Efetuou login'),
(37, 44, '2012-11-27 19:53:43', 'Efetuou logout'),
(38, 44, '2012-11-27 19:54:45', 'Efetuou login'),
(39, 70, '2012-11-27 19:59:57', 'Efetuou login'),
(40, 70, '2012-11-27 20:01:33', 'Efetuou logout'),
(41, 9, '2012-11-27 20:03:31', 'Efetuou login'),
(42, 9, '2012-11-27 20:03:38', 'Efetuou logout'),
(43, 9, '2012-11-27 20:03:40', 'Efetuou login'),
(44, 9, '2012-11-27 20:04:13', 'Efetuou login'),
(45, 44, '2012-11-27 20:26:53', 'Efetuou login'),
(46, 44, '2012-11-27 20:39:49', 'Efetuou logout'),
(47, 2, '2012-11-27 20:47:15', 'Efetuou login'),
(48, 62, '2012-11-27 20:47:54', 'Efetuou login'),
(49, 62, '2012-11-27 20:55:56', 'Efetuou logout'),
(50, 2, '2012-11-27 20:58:06', 'Efetuou logout'),
(51, 2, '2012-11-27 20:58:16', 'Efetuou login'),
(52, 2, '2012-11-27 20:58:46', 'Efetuou logout'),
(53, 2, '2012-11-27 20:59:23', 'Efetuou login'),
(54, 57, '2012-11-27 21:16:52', 'Efetuou login'),
(55, 57, '2012-11-27 21:21:22', 'Efetuou logout'),
(56, 57, '2012-11-27 21:22:03', 'Efetuou login'),
(57, 54, '2012-11-27 23:55:30', 'Efetuou login'),
(58, 2, '2012-11-28 00:59:11', 'Efetuou login'),
(59, 2, '2012-11-28 01:06:34', 'Efetuou logout'),
(60, 62, '2012-11-28 05:45:12', 'Efetuou login'),
(61, 62, '2012-11-28 05:45:26', 'Efetuou logout'),
(62, 62, '2012-11-28 05:45:34', 'Efetuou login'),
(63, 62, '2012-11-28 05:45:50', 'Efetuou logout'),
(64, 62, '2012-11-28 05:45:53', 'Efetuou login'),
(65, 2, '2012-11-28 11:47:14', 'Efetuou login'),
(66, 2, '2012-11-28 11:49:43', 'Efetuou logout'),
(67, 26, '2012-11-28 12:45:39', 'Efetuou login'),
(68, 26, '2012-11-28 12:48:07', 'Efetuou login'),
(69, 46, '2012-11-28 13:06:35', 'Efetuou login'),
(70, 46, '2012-11-28 13:13:19', 'Efetuou logout'),
(71, 18, '2012-11-28 13:46:24', 'Efetuou login'),
(72, 2, '2012-11-28 14:14:10', 'Efetuou login'),
(73, 2, '2012-11-28 14:16:55', 'Efetuou logout'),
(74, 18, '2012-11-28 14:17:17', 'Efetuou login'),
(75, 18, '2012-11-28 14:21:04', 'Efetuou logout'),
(76, 18, '2012-11-28 14:21:29', 'Efetuou login'),
(77, 18, '2012-11-28 14:21:53', 'Efetuou logout'),
(78, 2, '2012-11-28 14:24:56', 'Efetuou login'),
(79, 19, '2012-11-28 16:36:54', 'Efetuou login'),
(80, 19, '2012-11-28 16:36:57', 'Efetuou logout'),
(81, 19, '2012-11-28 16:37:04', 'Efetuou login'),
(82, 19, '2012-11-28 16:37:10', 'Efetuou logout'),
(83, 20, '2012-11-28 16:37:18', 'Efetuou login'),
(84, 20, '2012-11-28 16:37:22', 'Efetuou logout'),
(85, 2, '2012-11-28 17:28:03', 'Efetuou login'),
(86, 2, '2012-11-28 17:30:04', 'Efetuou logout'),
(87, 59, '2012-11-28 17:30:07', 'Efetuou login'),
(88, 59, '2012-11-28 17:30:31', 'Efetuou login'),
(89, 59, '2012-11-28 17:31:00', 'Efetuou logout'),
(90, 2, '2012-11-28 17:31:13', 'Efetuou login'),
(91, 59, '2012-11-28 17:31:30', 'Efetuou login'),
(92, 59, '2012-11-28 17:33:59', 'Efetuou login'),
(93, 44, '2012-11-28 17:34:40', 'Efetuou login'),
(94, 28, '2012-11-28 17:35:23', 'Efetuou login'),
(95, 59, '2012-11-28 17:36:47', 'Efetuou logout'),
(96, 59, '2012-11-28 17:38:04', 'Efetuou login'),
(97, 2, '2012-11-28 17:38:18', 'Efetuou logout'),
(98, 59, '2012-11-28 17:38:35', 'Efetuou login'),
(99, 59, '2012-11-28 17:38:38', 'Efetuou logout'),
(100, 59, '2012-11-28 17:39:15', 'Efetuou login'),
(101, 59, '2012-11-28 17:39:22', 'Efetuou login'),
(102, 59, '2012-11-28 17:39:30', 'Efetuou logout'),
(103, 2, '2012-11-28 17:39:42', 'Efetuou login'),
(104, 59, '2012-11-28 17:43:59', 'Alterou o órgão SERHMACT'),
(105, 59, '2012-11-28 17:44:09', 'Alterou o órgão SERHMACT'),
(106, 44, '2012-11-28 18:01:08', 'Alterou o órgão FUNESC'),
(107, 59, '2012-11-28 18:05:45', 'Efetuou login'),
(108, 70, '2012-11-28 18:05:46', 'Efetuou login'),
(109, 59, '2012-11-28 18:22:15', 'Efetuou login'),
(110, 59, '2012-11-28 18:23:21', 'Efetuou logout'),
(111, 70, '2012-11-28 18:28:13', 'Efetuou logout'),
(112, 70, '2012-11-28 18:31:05', 'Efetuou login'),
(113, 70, '2012-11-28 18:32:46', 'Efetuou logout'),
(114, 44, '2012-11-28 18:49:47', 'Efetuou login'),
(115, 44, '2012-11-28 18:51:08', 'Alterou o órgão FUNESC'),
(116, 8, '2012-11-28 18:52:05', 'Efetuou login'),
(117, 21, '2012-11-28 18:52:50', 'Efetuou login'),
(118, 2, '2012-11-28 18:55:29', 'Efetuou logout'),
(119, 21, '2012-11-28 18:55:40', 'Efetuou login'),
(120, 21, '2012-11-28 19:00:52', 'Efetuou logout'),
(121, 2, '2012-11-28 19:00:56', 'Efetuou login'),
(122, 21, '2012-11-28 19:01:11', 'Alterou o órgão CORPO DE BOMBEIROS'),
(123, 21, '2012-11-28 19:06:09', 'Efetuou logout'),
(124, 21, '2012-11-28 19:06:52', 'Efetuou login'),
(125, 8, '2012-11-28 19:07:07', 'Efetuou login'),
(126, 44, '2012-11-28 19:08:31', 'Efetuou logout'),
(127, 19, '2012-11-28 19:17:09', 'Efetuou login'),
(128, 8, '2012-11-28 19:21:52', 'Efetuou login'),
(129, 65, '2012-11-28 19:23:25', 'Efetuou login'),
(130, 65, '2012-11-28 19:32:45', 'Efetuou logout'),
(131, 8, '2012-11-28 19:34:35', 'Alterou o órgão SUDEMA'),
(132, 28, '2012-11-28 19:43:07', 'Efetuou login'),
(133, 82, '2012-11-28 19:45:19', 'Efetuou login'),
(134, 82, '2012-11-28 19:45:36', 'Efetuou logout'),
(135, 28, '2012-11-28 19:58:18', 'Efetuou logout'),
(136, 42, '2012-11-29 00:21:16', 'Efetuou login'),
(137, 42, '2012-11-29 00:23:05', 'Alterou o órgão FUNDAC'),
(138, 42, '2012-11-29 00:28:27', 'Alterou o órgão FUNDAC'),
(139, 42, '2012-11-29 00:29:08', 'Efetuou logout'),
(140, 22, '2012-11-29 01:43:47', 'Efetuou login'),
(141, 22, '2012-11-29 01:47:32', 'Alterou o órgão A UNIÃO SUPERINTENDENCIA DE IMPRENSA'),
(142, 22, '2012-11-29 01:48:34', 'Efetuou logout'),
(143, 55, '2012-11-29 11:25:31', 'Efetuou login'),
(144, 55, '2012-11-29 11:32:13', 'Alterou o órgão UEPB'),
(145, 55, '2012-11-29 11:35:37', 'Alterou o órgão UEPB'),
(146, 45, '2012-11-29 11:57:52', 'Efetuou login'),
(147, 45, '2012-11-29 12:01:14', 'Efetuou logout'),
(148, 2, '2012-11-29 12:28:26', 'Efetuou login'),
(149, 2, '2012-11-29 12:34:45', 'Efetuou login'),
(150, 2, '2012-11-29 12:39:50', 'Efetuou logout'),
(151, 8, '2012-11-29 12:58:21', 'Efetuou login'),
(152, 57, '2012-11-29 13:04:27', 'Efetuou login'),
(153, 57, '2012-11-29 13:08:57', 'Alterou o órgão SETDE'),
(154, 46, '2012-11-29 13:36:25', 'Efetuou login'),
(155, 57, '2012-11-29 13:38:11', 'Alterou o órgão SETDE'),
(156, 46, '2012-11-29 13:39:06', 'Alterou o órgão IASS/IPEP'),
(157, 46, '2012-11-29 13:53:49', 'Efetuou login'),
(158, 8, '2012-11-29 14:15:25', 'Efetuou login'),
(159, 57, '2012-11-29 14:17:21', 'Alterou o órgão SETDE'),
(160, 44, '2012-11-29 14:27:04', 'Efetuou login'),
(161, 44, '2012-11-29 14:27:18', 'Efetuou logout'),
(162, 15, '2012-11-29 14:39:51', 'Efetuou login'),
(163, 2, '2012-11-29 14:41:16', 'Efetuou login'),
(164, 15, '2012-11-29 14:45:34', 'Alterou o órgão SECRETARIA DO DESENVOLVIMENT E ARTICULAÇÃO MUNICIPAL'),
(165, 57, '2012-11-29 15:10:26', 'Efetuou login'),
(166, 2, '2012-11-29 15:46:15', 'Efetuou login'),
(167, 2, '2012-11-29 15:47:26', 'Alterou o órgão COMUNICAÇÃO INSTITUCIONAL - SECOM'),
(168, 18, '2012-11-29 17:04:20', 'Efetuou login'),
(169, 2, '2012-11-29 17:49:44', 'Efetuou login'),
(170, 68, '2012-11-29 17:52:30', 'Efetuou login'),
(171, 68, '2012-11-29 17:52:36', 'Efetuou logout'),
(172, 2, '2012-11-29 17:53:46', 'Efetuou login'),
(173, 2, '2012-11-29 17:57:21', 'Efetuou logout'),
(174, 68, '2012-11-29 17:57:32', 'Efetuou login'),
(175, 68, '2012-11-29 17:57:58', 'Efetuou login'),
(176, 21, '2012-11-29 18:07:59', 'Efetuou login'),
(177, 57, '2012-11-29 18:14:27', 'Efetuou login'),
(178, 68, '2012-11-29 18:18:27', 'Efetuou login'),
(179, 68, '2012-11-29 18:18:37', 'Efetuou logout'),
(180, 21, '2012-11-29 18:28:07', 'Efetuou logout'),
(181, 70, '2012-11-29 18:34:27', 'Efetuou login'),
(182, 70, '2012-11-29 18:34:30', 'Efetuou logout'),
(183, 70, '2012-11-29 18:37:55', 'Efetuou login'),
(184, 70, '2012-11-29 18:42:36', 'Efetuou login'),
(185, 70, '2012-11-29 18:44:19', 'Efetuou logout'),
(186, 28, '2012-11-29 18:49:30', 'Efetuou login'),
(187, 70, '2012-11-29 18:52:56', 'Efetuou logout'),
(188, 65, '2012-11-29 18:54:07', 'Efetuou login'),
(189, 57, '2012-11-29 18:54:07', 'Alterou o órgão SETDE'),
(190, 65, '2012-11-29 19:16:43', 'Efetuou logout'),
(191, 77, '2012-11-29 19:17:14', 'Efetuou login'),
(192, 77, '2012-11-29 19:17:21', 'Efetuou logout'),
(193, 77, '2012-11-29 19:17:41', 'Efetuou login'),
(194, 8, '2012-11-29 19:18:12', 'Efetuou login'),
(195, 57, '2012-11-29 19:49:00', 'Efetuou login'),
(196, 77, '2012-11-30 11:59:11', 'Efetuou login'),
(197, 46, '2012-11-30 12:09:55', 'Efetuou login'),
(198, 44, '2012-11-30 12:27:56', 'Efetuou login'),
(199, 44, '2012-11-30 12:33:53', 'Efetuou logout'),
(200, 8, '2012-11-30 12:59:12', 'Efetuou login'),
(201, 21, '2012-11-30 13:06:18', 'Efetuou login'),
(202, 22, '2012-11-30 13:40:30', 'Efetuou login'),
(203, 77, '2012-11-30 13:57:18', 'Alterou o órgão CONTROLADORIA GERAL - CGE'),
(204, 2, '2012-11-30 13:59:50', 'Efetuou login'),
(205, 35, '2012-11-30 14:15:56', 'Efetuou login'),
(206, 35, '2012-11-30 14:19:16', 'Alterou o órgão EMEPA'),
(207, 35, '2012-11-30 14:21:14', 'Alterou o órgão EMEPA'),
(208, 8, '2012-11-30 14:21:41', 'Efetuou login'),
(209, 68, '2012-11-30 17:29:40', 'Efetuou login'),
(210, 68, '2012-11-30 17:29:45', 'Efetuou login'),
(211, 68, '2012-11-30 17:33:53', 'Alterou o órgão SECRETARIA DE SEGURANÇA'),
(212, 68, '2012-11-30 17:35:25', 'Alterou o órgão SECRETARIA DE SEGURANÇA'),
(213, 68, '2012-11-30 17:35:51', 'Alterou o órgão SECRETARIA DE SEGURANÇA'),
(214, 68, '2012-11-30 18:04:41', 'Efetuou logout'),
(215, 2, '2012-12-02 02:42:48', 'Efetuou login'),
(216, 2, '2012-12-02 03:09:04', 'Efetuou login'),
(217, 2, '2012-12-02 03:10:14', 'Efetuou logout'),
(218, 84, '2012-12-02 16:02:44', 'Efetuou login'),
(219, 84, '2012-12-02 17:37:19', 'Efetuou logout'),
(220, 84, '2012-12-02 17:37:26', 'Efetuou login'),
(221, 2, '2012-12-02 18:01:45', 'Efetuou logout'),
(222, 2, '2012-12-02 18:02:56', 'Efetuou login'),
(223, 84, '2012-12-02 18:03:21', 'Efetuou login'),
(224, 2, '2012-12-02 18:03:35', 'Efetuou logout'),
(225, 2, '2012-12-02 18:03:40', 'Efetuou login'),
(226, 2, '2012-12-02 18:22:40', 'Efetuou logout'),
(227, 84, '2012-12-02 18:22:55', 'Efetuou login'),
(228, 84, '2012-12-02 18:23:15', 'Efetuou logout'),
(229, 2, '2012-12-02 18:23:24', 'Efetuou login'),
(230, 84, '2012-12-02 18:32:46', 'Efetuou login'),
(231, 84, '2012-12-02 18:46:10', 'Efetuou logout');

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD CONSTRAINT `fk_atendimento_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
