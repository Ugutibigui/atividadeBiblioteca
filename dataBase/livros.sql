-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Out-2022 às 21:37
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `books`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `capa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subtitulo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `editora` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  `isbn` bigint(13) NOT NULL,
  `valor` float DEFAULT NULL,
  `etal` int(11) DEFAULT NULL,
  `NomeAutor1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SobreNomeAutor1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NomeAutor2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SobreNomeAutor2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NomeAutor3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SobreNomeAutor3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoria` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `capa`, `titulo`, `subtitulo`, `ano`, `editora`, `volume`, `isbn`, `valor`, `etal`, `NomeAutor1`, `SobreNomeAutor1`, `NomeAutor2`, `SobreNomeAutor2`, `NomeAutor3`, `SobreNomeAutor3`, `categoria`) VALUES
(1, 'capa', 'It', 'a coisa', 1986, 'Saraiva', 1, 9780670813025, 59.9, 1, 'Stephen', 'King', 'Murilo', 'Garcia', 'Thailon', 'da Silva', 'Terror'),
(2, 'capa', 'It', 'a coisa', 1986, 'Saraiva', 1, 9780670813025, 59.9, 1, 'Stephen', 'King', 'Murilo', 'Garcia', 'Thailon', 'da Silva', 'Terror'),
(3, 'capa', 'It', 'a coisa', 1986, 'Saraiva', 1, 9780670813025, 59.9, 1, 'Stephen', 'King', 'Murilo', 'Garcia', 'Thailon', 'da Silva', 'Terror'),
(4, 'capa', 'It', 'a coisa', 1986, 'Saraiva', 1, 9780670813025, 59.9, 1, 'Stephen', 'King', 'Murilo', 'Garcia', 'Thailon', 'da Silva', 'Terror');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
