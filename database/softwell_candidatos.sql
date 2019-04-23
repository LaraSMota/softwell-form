-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Abr-2019 às 09:39
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softwell_candidatos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

CREATE TABLE `candidato` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `data_nascimento` date NOT NULL,
  `email` text NOT NULL,
  `estado_civil` varchar(50) NOT NULL,
  `filhos` int(11) NOT NULL,
  `renda` text NOT NULL,
  `esportes` text NOT NULL,
  `atividades_lazer` text NOT NULL,
  `telefone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `candidato`
--

INSERT INTO `candidato` (`id`, `nome`, `sexo`, `data_nascimento`, `email`, `estado_civil`, `filhos`, `renda`, `esportes`, `atividades_lazer`, `telefone`) VALUES
(13, 'Lara Soares Mota', 'Feminino', '1998-04-27', 'lara.s.mota@gmail.com', 'Solteiro', 0, 'mais de três salários minimos', 'Vôlei', 'Ler livros de terror, assistir filmes e séries policiais, jogar xadrez, buraco e sinuca, sair com amigos.', '071996159900');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidato`
--
ALTER TABLE `candidato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
