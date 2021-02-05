-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 24-Nov-2019 às 02:10
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
CREATE DATABASE IF NOT EXISTS `db_imobiliaria` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_imobiliaria`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_forms`
--

DROP TABLE IF EXISTS `tb_forms`;
CREATE TABLE IF NOT EXISTS `tb_forms` (
  `Nome` varchar(60) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Mensagem` varchar(100) NOT NULL,
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_adm`;
CREATE TABLE IF NOT EXISTS `tb_adm` (
  `id_adm` varchar(60) NOT NULL,
  `senha_adm` varchar(80) NOT NULL,
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


