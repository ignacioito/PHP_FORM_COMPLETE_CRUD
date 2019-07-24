-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 23-Jul-2019 às 16:21
-- Versão do servidor: 10.2.25-MariaDB
-- versão do PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ongresgatando_bdcadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `tNome` varchar(200) NOT NULL,
  `tRg` int(11) NOT NULL,
  `tCpf` varchar(11) NOT NULL,
  `tMail` varchar(200) NOT NULL,
  `tSexo` varchar(100) NOT NULL,
  `input_fildeset_deficiencia` varchar(200) NOT NULL,
  `tQual` varchar(200) NOT NULL,
  `tNasc` date NOT NULL,
  `tNomeM` varchar(200) NOT NULL,
  `tTel` varchar(20) NOT NULL,
  `input_fildeset_laudo` varchar(200) NOT NULL,
  `input_fildeset_defasagem` varchar(200) NOT NULL,
  `tEscola` varchar(200) NOT NULL,
  `tSerie` varchar(10) NOT NULL,
  `input_fildeset_turno` varchar(30) NOT NULL,
  `tEspecificar` varchar(200) NOT NULL,
  `tDif` varchar(200) NOT NULL,
  `tNomeResp` varchar(200) NOT NULL,
  `tRgId` int(11) NOT NULL,
  `tCpfId` varchar(11) NOT NULL,
  `tRua` varchar(200) NOT NULL,
  `tNum` varchar(200) NOT NULL,
  `tCompl` varchar(200) NOT NULL,
  `tBairro` varchar(100) NOT NULL,
  `tCep` int(11) NOT NULL,
  `tRef` varchar(200) NOT NULL,
  `tNasc2` date NOT NULL,
  `tTel2` varchar(20) NOT NULL,
  `input_fildeset_dependencia` varchar(200) NOT NULL,
  `tQual2` varchar(200) NOT NULL,
  `tQuem` varchar(200) NOT NULL,
  `tRtrab` varchar(200) NOT NULL,
  `tNumM` int(11) NOT NULL,
  `tValor2` int(11) NOT NULL,
  `tPC` int(11) NOT NULL,
  `input_fildeset_beneficiario` varchar(3) NOT NULL,
  `tValor` int(11) NOT NULL,
  `tNomeMor` varchar(1000) NOT NULL,
  `tVinc` varchar(200) NOT NULL,
  `tDN` date NOT NULL,
  `tEsc` varchar(200) NOT NULL,
  `tOc` varchar(200) NOT NULL,
  `input_fildeset_tMoradia` varchar(30) NOT NULL,
  `tValor3` int(11) NOT NULL,
  `input_fildeset_tConstr` varchar(20) NOT NULL,
  `tAtv` varchar(200) NOT NULL,
  `tTr` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `tNome`, `tRg`, `tCpf`, `tMail`, `tSexo`, `input_fildeset_deficiencia`, `tQual`, `tNasc`, `tNomeM`, `tTel`, `input_fildeset_laudo`, `input_fildeset_defasagem`, `tEscola`, `tSerie`, `input_fildeset_turno`, `tEspecificar`, `tDif`, `tNomeResp`, `tRgId`, `tCpfId`, `tRua`, `tNum`, `tCompl`, `tBairro`, `tCep`, `tRef`, `tNasc2`, `tTel2`, `input_fildeset_dependencia`, `tQual2`, `tQuem`, `tRtrab`, `tNumM`, `tValor2`, `tPC`, `input_fildeset_beneficiario`, `tValor`, `tNomeMor`, `tVinc`, `tDN`, `tEsc`, `tOc`, `input_fildeset_tMoradia`, `tValor3`, `input_fildeset_tConstr`, `tAtv`, `tTr`) VALUES
(22, 'Luan Tavares', 368784654, '31649487805', 'luantavares@gmail.com', 'Masculino', '', '', '1993-08-10', 'Maria Tavares', '1123395631', 'Nao', 'Nao', '', 'Ensino Med', 'Manha', 'Teste especificaÃ§Ã£o ', 'NÃ£o', 'Teste ResponsÃ¡vel', 0, '64879752504', 'Tuiuti', '1002', 'Casa', 'Perdizes', 4650000, 'Cardozo de Almeida', '1970-10-10', '1156314998', 'Sim', 'CafÃ©', 'Ele mesmo', 'Colega', 3, 15000, 5000, 'Sim', 25000, '', 'Pai e MÃ£e', '0000-00-00', 'Superior', 'Trabalhando', 'Propria', 50, '', 'Magnata', 'Ignacio'),
(23, 'Carlos de Medeiros Machado', 274494747, '17907460867', 'carlaomedeiros77@gmail.com', 'Masculino', 'Nao', '', '1977-03-07', 'Marlene de m', '', 'Nao', 'Nao', '', '', 'Manha', '', '', '', 0, '', '', '', '', '', 0, '', '0000-00-00', '', 'Sim', '', '', '', 0, 0, 0, 'Sim', 0, '', '', '0000-00-00', '', '', 'Propria', 0, 'Alvenaria', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`) VALUES
(1, 'ongadmincadastro', 'teste45321*');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
