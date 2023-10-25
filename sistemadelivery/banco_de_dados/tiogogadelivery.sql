-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/10/2023 às 04:33
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tiogogadelivery`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(70) NOT NULL,
  `senha` varchar(35) NOT NULL,
  `nivel` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `endereco`, `telefone`, `email`, `senha`, `nivel`) VALUES
(3, 'maria ', '259.746.371-00', 'qr 415 conjunto 11 casa 24', '(61) 99406-5329', 'maria@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'cliente'),
(4, 'maria ', '259.746.371-00', 'qr 415 conjunto 11 casa 24', '(61) 99406-5329', 'maria@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'cliente'),
(5, 'monica ', '000.555.999-99', 'shsn avendia central', '(61) 99888-8888', 'monica@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'cliente'),
(7, 'maria risoleta ', '024.230.851-17', 'Aguas lindas-Go', '(61) 99342-6065', 'mariarisoleta3@gmail.com', '64122b3d53eee5c95a9ad503ea0e9e72', 'admin'),
(9, 'douglas', '012.398.621-48', 'qr 415 conjunto 11 casa 24', '(61) 99190-6531', 'douglasdcdnet@gmail.com', '5a2939e9a8645471c17c8b1d1ea161e6', 'admin'),
(11, 'douglas', '259.746.371-00', 'qr 415 conjunto 11 casa 24', '(61) 99406-5329', 'dcdnet@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'cliente');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
