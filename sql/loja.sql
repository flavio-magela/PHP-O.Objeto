-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Nov-2018 às 02:36
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
  `nome` varchar(255) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `descricao` text,
  `categoria_id` int(11) DEFAULT NULL,
  `usado` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `descricao`, `categoria_id`, `usado`) VALUES
(45, 'Celular', '500.00', 'Moto G5 Plus', 4, 1),
(46, 'Polo 1.6 2011', '21000.00', 'Completo com banco de couro', 5, 1),
(47, 'Lapis', '2.00', 'Com borracha', 2, 0),
(48, 'Geladeira', '1000.00', 'EletroLux2 Portas', 3, 1),
(49, 'Camisa do Galo', '150.00', 'Tamanho P baby Look', 1, 1),
(50, 'Camisa do Galo', '190.00', 'Tamanho GG Oficial  - Preta e Branca', 1, 0),
(52, 'Maquiador', '49.00', 'Maquiador Profissional Amore', 6, 1),
(53, 'Agenda 2019', '23.00', 'Agenda 2019 da Tibras', 2, 0),
(54, 'Cesta BÃ¡sica', '400.00', 'Cesta BÃ¡sica - 2 Pacote de Arroz de 5 KG, 3 Pacote de FeijÃ£o,  3 Pacote de MacarrÃ£o de 1 kg, 2 Lata de Ã“leo, 1 Pacote de Faria de Mandioca, 1 Pacote de Sal, 1 Pacote de Fuba, 1 Pacote de Faria de Trigo, 2 Pasta de Dente, 4 Sabonetes,  1 Rolo de Papel HigiÃªnico de 8, 3 Limpol, 1 Bucha de limpeza, 2 Kg de SabÃ£o em PÃ³, 1 Lata de Massa de Tomate, 1 Pacote de Biscoite de 2 KG', 9, 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
