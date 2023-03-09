-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Fev-2023 às 23:17
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdselo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `armacao`
--

CREATE TABLE `armacao` (
  `IDArm` int(11) NOT NULL,
  `tipoArm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `armacao`
--

INSERT INTO `armacao` (`IDArm`, `tipoArm`) VALUES
(1, 'ACETATO'),
(2, 'METAL'),
(3, 'FIO DE NYLON'),
(4, 'PARAFUSO'),
(5, 'SEGURANÇA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bases`
--

CREATE TABLE `bases` (
  `IDBase` int(11) NOT NULL,
  `descBase` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `bases`
--

INSERT INTO `bases` (`IDBase`, `descBase`) VALUES
(1, '0.50'),
(2, '1.00'),
(3, '2.00'),
(4, '3.00'),
(5, '4.00'),
(6, '5.00'),
(7, '6.00'),
(8, '7.00'),
(9, '8.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dioptrias`
--

CREATE TABLE `dioptrias` (
  `IDDiop` int(11) NOT NULL,
  `descDiop` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dioptrias`
--

INSERT INTO `dioptrias` (`IDDiop`, `descDiop`) VALUES
(1, '-10.00'),
(2, '-9.75'),
(3, '-9.50'),
(4, '-9.25'),
(5, '-9.00'),
(6, '-8.75'),
(7, '-8.50'),
(8, '-8.25'),
(9, '-8.00'),
(10, '-7.75'),
(11, '-7.50'),
(12, '-7.25'),
(13, '-7.00'),
(14, '-6.75'),
(15, '-6.50'),
(16, '-6.25'),
(17, '-6.00'),
(18, '-5.75'),
(19, '-5.50'),
(20, '-5.25'),
(21, '-5.00'),
(22, '-4.75'),
(23, '-4.50'),
(24, '-4.25'),
(25, '-4.00'),
(26, '-3.75'),
(27, '-3.50'),
(28, '-3.25'),
(29, '-3.00'),
(30, '-2.75'),
(31, '-2.50'),
(32, '-2.25'),
(33, '-2.00'),
(34, '-1.75'),
(35, '-1.50'),
(36, '-1.25'),
(37, '-1.00'),
(38, '-0.75'),
(39, '-0.50'),
(40, '-0.25'),
(41, '0.00'),
(42, '0.25'),
(43, '0.50'),
(44, '0.75'),
(45, '1.00'),
(46, '1.25'),
(47, '1.50'),
(48, '1.75'),
(49, '2.00'),
(50, '2.25'),
(51, '2.50'),
(52, '2.75'),
(53, '3.00'),
(54, '3.25'),
(55, '3.50'),
(56, '3.75'),
(57, '4.00'),
(58, '4.25'),
(59, '4.50'),
(60, '4.75'),
(61, '5.00'),
(62, '5.25'),
(63, '5.50'),
(64, '5.75'),
(65, '6.00'),
(66, '6.25'),
(67, '6.50'),
(68, '6.75'),
(69, '7.00'),
(70, '7.25'),
(71, '7.50'),
(72, '7.75'),
(73, '8.00'),
(74, '8.25'),
(75, '8.50'),
(76, '8.75'),
(77, '9.00'),
(78, '9.25'),
(79, '9.50'),
(80, '9.75'),
(81, '10.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lentes`
--

CREATE TABLE `lentes` (
  `IDLen` int(11) NOT NULL,
  `descLen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `lentes`
--

INSERT INTO `lentes` (`IDLen`, `descLen`) VALUES
(1, 'VISÃO SIMPLES'),
(2, 'BIFOCAL'),
(3, 'MULTIFOCAL');

-- --------------------------------------------------------

--
-- Estrutura da tabela `material`
--

CREATE TABLE `material` (
  `IDMat` int(11) NOT NULL,
  `tipoMat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `material`
--

INSERT INTO `material` (`IDMat`, `tipoMat`) VALUES
(1, 'CR39/ORMA'),
(2, 'TRIVEX'),
(3, 'POLICARBONATO'),
(4, '1.56'),
(5, 'RESINA 1.60'),
(6, 'RESINA 1.67'),
(7, 'RESINA 1.74');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `IDUser` int(11) NOT NULL,
  `nomeUser` varchar(150) NOT NULL,
  `endUser` varchar(150) NOT NULL,
  `emailUser` varchar(150) NOT NULL,
  `telUser` bigint(20) NOT NULL,
  `cpfUser` bigint(20) NOT NULL,
  `rgUser` bigint(20) NOT NULL,
  `usuarioUser` varchar(15) NOT NULL,
  `senhaUser` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`IDUser`, `nomeUser`, `endUser`, `emailUser`, `telUser`, `cpfUser`, `rgUser`, `usuarioUser`, `senhaUser`) VALUES
(1, 'admin', 'Rua Pedro Janser', 'admin@gmail.com', 0, 33322211150, 563214568, 'admin', 'admin'),
(13, 'Gustavo', 'Rua Pedro Janser, 657', 'gustavokmartini@gmail.com', 18996966066, 53231404886, 546326324, 'Gustavin', '$2y$10$N'),
(14, 'teste', 'teste', 'teset@gmail.com', 48449494446, 3465465465, 65465465, 'Yudi', '$2y$10$z');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `armacao`
--
ALTER TABLE `armacao`
  ADD PRIMARY KEY (`IDArm`);

--
-- Índices para tabela `bases`
--
ALTER TABLE `bases`
  ADD PRIMARY KEY (`IDBase`);

--
-- Índices para tabela `dioptrias`
--
ALTER TABLE `dioptrias`
  ADD PRIMARY KEY (`IDDiop`);

--
-- Índices para tabela `lentes`
--
ALTER TABLE `lentes`
  ADD PRIMARY KEY (`IDLen`);

--
-- Índices para tabela `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`IDMat`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDUser`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `armacao`
--
ALTER TABLE `armacao`
  MODIFY `IDArm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `bases`
--
ALTER TABLE `bases`
  MODIFY `IDBase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `dioptrias`
--
ALTER TABLE `dioptrias`
  MODIFY `IDDiop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de tabela `lentes`
--
ALTER TABLE `lentes`
  MODIFY `IDLen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `material`
--
ALTER TABLE `material`
  MODIFY `IDMat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `IDUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
