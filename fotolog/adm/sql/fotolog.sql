-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Abr-2017 às 18:28
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
-- Estrutura da tabela `imagem_galeria`
--

CREATE TABLE `imagem_galeria` (
  `id` int(5) NOT NULL,
  `id_produto` int(5) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `nome` varchar(255) NOT NULL,
  `descricao_longa` text NOT NULL,
  `tag` varchar(255) NOT NULL,
  `data` datetime NOT NULL,
  `imagem` varchar(220) NOT NULL,
  `situacao_id` int(11) NOT NULL,
  `modified` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao_longa`, `tag`, `data`, `imagem`, `situacao_id`, `modified`, `created`, `categoria_id`) VALUES
(2, 'Novo_0202', 'Novo_0202', 'Novo_0202', '2018-02-20 00:00:00', 'Koala.jpg', 0, '2017-04-14 19:30:30', '2017-04-13 13:31:38', 0),
(3, 'Produto2', 'Produto2', 'Produto2', '2018-02-18 00:00:00', 'homem.jpg', 0, NULL, '2017-04-13 15:50:08', 0),
(4, 'Produto3', 'Produto3', 'Produto3', '2016-02-03 00:00:00', 'Tulips - CÃƒÂ³pia.jpg', 0, NULL, '2017-04-13 15:52:29', 0),
(5, 'fdfdf', 'dfdfd', 'dfdfd', '2018-08-08 00:00:00', 'perua.jpg', 0, NULL, '2017-04-13 16:05:34', 0),
(6, 'Teste_03', 'Teste_03', 'Teste_03', '2018-08-03 00:00:00', 'tc_blue.jpg', 0, NULL, '2017-04-13 16:13:26', 0),
(7, 'Teste_04', 'Teste_03', 'Teste_03', '2018-02-20 00:00:00', 'Lighthouse.jpg', 0, NULL, '2017-04-13 16:13:51', 0),
(8, 'Teste_03', 'Teste_03', 'Teste_03', '2018-02-08 00:00:00', 'Penguins.jpg', 0, NULL, '2017-04-13 16:14:11', 0),
(9, 'Teste_03', 'Teste_03', 'Teste_03', '2018-01-08 00:00:00', 'pont.jpg', 0, NULL, '2017-04-13 16:14:38', 0),
(10, 'Teste_03', 'Teste_03', 'Teste_03', '2018-02-08 00:00:00', 'perua.jpg', 0, NULL, '2017-04-13 16:15:06', 0),
(11, 'Teste_03', '<p>Teste_03</p>\r\n', 'Teste_03', '2018-02-10 00:00:00', 'Tulips.jpg', 0, '2017-04-14 17:46:02', '2017-04-13 16:15:22', 0),
(12, 'Eilem teste', 'Eilem teste', 'Eilem teste', '2019-02-10 00:00:00', 'Lighthouse.jpg', 0, NULL, '2017-04-14 17:50:31', 0),
(13, 'adminUrl', 'adminUrl', 'adminUrl', '2013-03-13 00:00:00', 'Chrysanthemum.jpg', 0, NULL, '2017-04-14 18:01:22', 0),
(15, 'teteet', 'tetete', '12122', '2011-10-10 00:00:00', 'Jellyfish.jpg', 0, NULL, '2017-04-14 18:32:30', 0),
(16, 'teste', 'teste', 'teste', '2018-10-10 00:00:00', 'Desert.jpg', 0, NULL, '2017-04-14 18:36:23', 0),
(17, 'teste', 'teste', 'teste', '2018-10-10 00:00:00', 'Desert.jpg', 0, NULL, '2017-04-14 18:36:48', 0),
(18, 'teste', 'teste', 'teste', '2018-10-10 00:00:00', 'Desert.jpg', 0, NULL, '2017-04-14 18:37:39', 0),
(22, 'Teste_teste2', 'Teste_teste, usar nl2br\r\nhttp://php.net/manual/pt_BR/function.nl2br.php', 'Teste_teste', '2012-02-01 00:00:00', 'Tulips.jpg', 0, '2017-04-14 19:26:19', '2017-04-14 18:45:31', 0);

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
(2, 'Kelly1', 'kelly@celke.com.br', 'kelly', '', 1, NULL, '2017-04-11 15:17:46'),
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
-- Indexes for table `imagem_galeria`
--
ALTER TABLE `imagem_galeria`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagem_galeria`
--
ALTER TABLE `imagem_galeria`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nivel_acessos`
--
ALTER TABLE `nivel_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `projeto`
--
ALTER TABLE `projeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
