-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 05-Fev-2021 às 16:52
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_imobiliaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_adm`
--

DROP TABLE IF EXISTS `tb_adm`;
CREATE TABLE IF NOT EXISTS `tb_adm` (
  `id_adm` varchar(60) NOT NULL,
  `senha_adm` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_adm`
--

INSERT INTO `tb_adm` (`id_adm`, `senha_adm`) VALUES
('', ''),
('', ''),
('', ''),
('', '1234657'),
('', '1234765'),
('7894', 'goga08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_forms`
--

DROP TABLE IF EXISTS `tb_forms`;
CREATE TABLE IF NOT EXISTS `tb_forms` (
  `Nome` varchar(60) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Mensagem` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_forms`
--

INSERT INTO `tb_forms` (`Nome`, `Email`, `Mensagem`) VALUES
('Douglas Phellipe Martins Silva', 'd', 'aaaaa'),
('Douglas Phellipe Martins Silva', 'ssa', 'aaaaa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
