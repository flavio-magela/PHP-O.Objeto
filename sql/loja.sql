-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Dez-2018 às 20:58
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Esportes'),
(2, 'Material Escolar'),
(3, 'Eletro-domestico'),
(4, 'Eletronicos'),
(5, 'Automovel'),
(6, 'Prod. de Beleza'),
(7, 'Ferramenta'),
(8, 'Mat. de Construcao'),
(9, 'Alimento');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `descricao` text NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `usado` tinyint(1) DEFAULT NULL,
  `isbn` varchar(255) DEFAULT NULL,
  `tipoProduto` varchar(255) DEFAULT NULL,
  `taxaImpressao` varchar(255) DEFAULT NULL,
  `waterMark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `descricao`, `categoria_id`, `usado`, `isbn`, `tipoProduto`, `taxaImpressao`, `waterMark`) VALUES
(112, 'Computador', '1900.00', 'Core I5 SSD 450 GB 4 GB de RAM Teclado, mouse, caixa de som', 4, 1, NULL, NULL, NULL, NULL),
(115, 'Polo 1.6 2011', '18000.00', 'Completo', 5, 1, '', 'Produto', NULL, NULL),
(116, 'Geladeira', '800.00', 'Eletrolux 2 portas', 3, 1, '', 'Produto', NULL, NULL),
(117, 'Notebook', '500.00', 'Semp Toshiba Dual Core 4 GB 500 de HD', 4, 1, NULL, NULL, NULL, NULL),
(119, '1000 Tijolos ', '350.00', 'CauÃª duplo', 8, 0, NULL, NULL, NULL, NULL),
(120, 'Livro C', '300.00', 'Casa do CÃ³digo', 2, 0, '', 'Produto', '', ''),
(121, 'Celular', '300.00', 'LG l5', 4, 1, 'BX2548875', 'Produto', NULL, NULL),
(122, 'Carlos Henrique', '290.00', 'Industrial manual', 8, 1, '', 'Livro', NULL, NULL),
(123, 'Livro C++', '110.00', 'Livraria Acaiaca', 2, 1, 'BX2548875', 'Livro', NULL, NULL),
(125, 'Livro C', '190.00', 'Galeria Ouvidor', 2, 1, 'BX2548875', 'Ebook', '', 'AG568752114W'),
(126, 'Livro C', '190.00', 'Galeria Ouvidor', 2, 1, 'BX2548875', 'Ebook', '', 'AG568752114W'),
(127, 'Lapis', '2.00', 'Comum', 2, 0, '', 'Produto', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(1, 'flavio.mrsantos@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
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
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
