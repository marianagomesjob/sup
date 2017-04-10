-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Abr-2017 às 16:00
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fotolog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_acessos`
--

CREATE TABLE `nivel_acessos` (
  `id` int(11) NOT NULL,
  `nome_nivel` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `nivel_acessos`
--

INSERT INTO `nivel_acessos` (`id`, `nome_nivel`, `created`, `modified`) VALUES
(1, 'Administrador', '2017-02-21 00:00:00', NULL),
(2, 'UsuÃ¡rio', '2017-02-21 17:30:26', '2017-02-21 17:34:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(520) NOT NULL,
  `descricao_curta` text NOT NULL,
  `descricao_longa` text NOT NULL,
  `preco` varchar(20) NOT NULL,
  `tag` varchar(520) NOT NULL,
  `description` varchar(520) NOT NULL,
  `imagem` varchar(220) NOT NULL,
  `situacao_id` int(11) NOT NULL,
  `modified` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao_curta`, `descricao_longa`, `preco`, `tag`, `description`, `imagem`, `situacao_id`, `modified`, `created`, `categoria_id`) VALUES
(18, 'Homem', '<p>Homem pensando</p>\n', '<p>asdasdas</p>\r\n', '1', 'asdad', '2017-12-12', 'homem.jpg', 0, '2017-03-27 15:17:14', '2017-03-22 14:38:40', 0),
(19, 'Koala', '<p>Koala na arvore</p>\n', '<p>teclado</p>\r\n', '', '', '2017-10-12', 'Koala.jpg', 0, '2017-03-27 15:16:34', '2017-03-23 09:41:51', 0),
(21, 'Prod_1', '<p>Prod_1</p>\r\n', '<p>Prod_1</p>\r\n', '', 'Prod_1', '2017-12-12', 'perua.jpg', 0, NULL, '2017-03-30 11:31:31', 0),
(22, 'Prod_2', '<p>Prod_2</p>\r\n', '<p>Prod_2</p>\r\n', '', 'Prod_2', '2017-10-17', 'pont.jpg', 0, NULL, '2017-03-30 11:31:50', 0),
(23, 'Prod_3', '<p>Prod_2</p>\r\n', '<p>Prod_2</p>\r\n', '', 'Prod_2', '2017-10-17', 'Tulips - CÃ³pia.jpg', 0, NULL, '2017-03-30 11:32:21', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `data` varchar(225) NOT NULL,
  `imagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `nome` varchar(225) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `descricao` varchar(11) NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `upload`
--

INSERT INTO `upload` (`id`, `nome`, `imagem`, `data`, `descricao`, `modified`, `created`) VALUES
(1, 'Teclado', '', '2016-08-17', 'materiais ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'impressora', 'Desert.jpg', '2017-12-12', 'impressora ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'folha ', 'Jellyfish.jpg', '2017-12-12', 'folha ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'koala', 'Koala.jpg', '2017-12-12', 'koala', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Mouse', 'Lighthouse.jpg', '2018-03-13', 'mouse', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Koala', 'Lighthouse.jpg', '2017-03-21', 'teste', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Teste', 'Koala.jpg', '2017-05-04', '<p>teste</p', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Teste', 'Penguins.jpg', '2017-05-04', '<p>teste</p', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Flores', 'Chrysanthemum.jpg', '2015-05-14', '<p>Flores</', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'frio', 'Hydrangeas.jpg', '2017-07-12', '<p>Frio</p>', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Flores_2', 'Tulips.jpg', '2017-01-12', '<p>URL=http', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel_acesso_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `login`, `senha`, `nivel_acesso_id`, `created`, `modified`) VALUES
(2, 'Kelly1', 'kelly@celke.com.br', 'kelly', '123', 2, NULL, '2015-09-26 13:20:53'),
(3, 'Gabriely', 'cesarszpak@gmail.com', 'admin', '123', 1, '2015-09-20 21:48:49', '2015-09-26 13:21:42'),
(4, 'Cesar ', 'cesarszpak@gmail.com', 'cesar', '123', 1, '2015-09-20 21:50:33', NULL),
(5, 'Mariana Gomes', 'marianag.eng@gmail.com', 'mariana', '123', 1, '2017-03-21 14:57:25', NULL),
(6, 'Allan', 'allan@enfil.com.br', 'allan', '123', 1, '2017-03-21 15:13:05', NULL),
(7, 'teste', 'teste@teste', 'teste', 'teste', 1, '2017-03-21 15:14:37', NULL),
(8, 'teste', 'tets@sfsdf', 'sdfsdfsdfs', 'dfsdfs', 1, '2017-03-21 15:15:17', NULL),
(9, 'teste1', 'tets@sfsdf', 'sdfsdfsdfs', '123', 2, '2017-03-21 15:16:16', '2017-03-21 15:42:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nivel_acessos`
--
ALTER TABLE `nivel_acessos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
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
-- AUTO_INCREMENT for table `nivel_acessos`
--
ALTER TABLE `nivel_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `projeto`
--
ALTER TABLE `projeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
