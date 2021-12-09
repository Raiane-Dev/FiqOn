-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Dez-2021 às 13:55
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fiqon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `subscribed`
--

CREATE TABLE `subscribed` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vacancy_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `repository_link` varchar(255) NOT NULL,
  `cv` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `subscribed`
--

INSERT INTO `subscribed` (`id`, `user_id`, `vacancy_id`, `name`, `email`, `whatsapp`, `repository_link`, `cv`) VALUES
(1, 26, 0, 'Raiane Teste', 'raiane.dev@gmail.com', '00000000', 'github.com/Raiane-Dev', 'meucurriculo.pdf'),
(3, 26, 4, 'Raiane Arcaro Daros', 'Raiane Arcaro Daros', 'raiane.dev@gmail.com', '23456789', 'http://localhost/FiqOn/si');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `function` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `function`) VALUES
(26, 'Raiane Arcaro Daros', 'raiane.dev@gmail.com', 'Gaivabeach123.', 'Usuario.png', 0),
(46, 'Raiane Arcaro Daros', 'membro@gmail.com', 'Gaivabeach123.', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacancy`
--

CREATE TABLE `vacancy` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `workload` int(11) NOT NULL,
  `modality` varchar(255) NOT NULL,
  `wage` double(11,2) NOT NULL,
  `description` text NOT NULL,
  `roles` text NOT NULL,
  `minimum_requirements` text NOT NULL,
  `differentials` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vacancy`
--

INSERT INTO `vacancy` (`id`, `title`, `image`, `color`, `workload`, `modality`, `wage`, `description`, `roles`, `minimum_requirements`, `differentials`) VALUES
(4, 'Lorem ipsum', 'logomarca.png', 'TESTE COLOR', 8, 'TESTE MODALIDADE', 15.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n', 'TESTE ROLE', 'TESTE MINIMO', 'TESTE DIFERENCIAL'),
(7, 'Lorem ipsum new Job', 'https://www.seekpng.com/png/detail/407-4071094_leao-logo-png-leao-laranja.png', 'Red', 8, 'Dev', 15000.00, 'Lorem ipsum', 'Dev Backend', 'Saber o básico de SQL', 'Ter trabalhado com Laravel'),
(8, 'Lorem ipsum UPDATE', 'https://www.seekpng.com/png/detail/407-4071094_leao-logo-png-leao-laranja.png', 'Red', 8, 'Dev', 15000.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.', 'Dev Backend', 'Saber o básico de SQL', 'Ter trabalhado com Laravel');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `subscribed`
--
ALTER TABLE `subscribed`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `subscribed`
--
ALTER TABLE `subscribed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de tabela `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
