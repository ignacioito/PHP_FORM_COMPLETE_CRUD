-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Set-2017 às 00:36
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `tNome` varchar(200) NOT NULL,
  `tRg` int(11) NOT NULL,
  `tCpf` int(11) NOT NULL,
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
  `tCpfId` int(11) NOT NULL,
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
(13, 'Ignacio Seiti Lima Ito', 347814244, 2147483647, 'ignacioito@gmail.com', 'Masculino', 'Nao', '', '1982-11-13', 'Marcia Cristina Barbosa Lima', '11952058332', 'Nao', 'Nao', 'Maria Trujillo Torlloni', 'Ensino Med', 'Manha', '', 'NÃ£o', '', 0, 0, 'Anny', '302', 'Casa', 'SÃ£o JoÃ£o ClÃ­maco', 4240000, 'Igreja SJC', '2017-08-31', '1123395631', 'Nao', '', '', '', 0, 0, 0, 'Nao', 0, 'nomes nomes nomes', 'Esposa', '0000-00-00', 'Superior', 'Trabalhando', 'Cedida', 0, 'Mista', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
