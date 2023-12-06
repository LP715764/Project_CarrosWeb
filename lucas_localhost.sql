-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Nov-2023 às 19:30
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lucas@localhost`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `mensagem` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_carrosweb`
--

DROP TABLE IF EXISTS `tb_carrosweb`;
CREATE TABLE IF NOT EXISTS `tb_carrosweb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `complemento` varchar(30) NOT NULL,
  `cep` int NOT NULL,
  `veiculo` varchar(50) NOT NULL,
  `ano` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `veiculo` (`cep`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_carrosweb`
--

INSERT INTO `tb_carrosweb` (`id`, `nome`, `email`, `senha`, `telefone`, `endereco`, `complemento`, `cep`, `veiculo`, `ano`) VALUES
(1, 'Ana Júlia', 'annjuli@gmail.com', 'najullia123', '13 992572790', 'Rua José das Colves, 164, Parque Bitaru, São Vicente - SP', 'Apartamento 15', 12589740, 'Fiat Argo', 2017),
(2, 'Bruno Marrone', 'marronebr@gmail.com', ' pibuefbuw', '13998768587', 'Av. Choram As Rosas, 189 - Guilhermina - Praia Grande - SP ', 'Casa 3', 12809600, 'Alfa Romeo 155 SUPER', 1996);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
