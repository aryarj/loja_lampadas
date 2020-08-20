-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Ago-2020 às 04:33
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja_lampadas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(11) NOT NULL,
  `data` varchar(15) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `rotulo` varchar(100) NOT NULL,
  `preco_compra` decimal(9,2) NOT NULL,
  `quantidade` int(6) NOT NULL,
  `comprado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`id_compra`, `data`, `nome`, `rotulo`, `preco_compra`, `quantidade`, `comprado`) VALUES
(1, '19/08/2020', '', 'Lâmpada bulbo led 25 W 110/220V', '12.50', 100, ''),
(2, '19/08/2020', '', 'Lâmpada bulbo led 25 W 110/220V', '12.50', 100, ''),
(3, '19/08/2020', 'carlos', 'Lâmpada bulbo led 25 W 110/220V', '12.50', 100, 'X'),
(4, '19/08/2020', 'lucia', 'Lâmpada miniatura 4 W 12 V', '2.50', 70, 'X'),
(5, '19/08/2020', 'lucia', 'Lâmpada tubular led 9 W 110/220 V', '12.00', 20, 'X');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cpf`
--

CREATE TABLE `cpf` (
  `id_cpf` int(11) NOT NULL,
  `cpf` double NOT NULL,
  `nome` varchar(15) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(10) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `estado` char(2) NOT NULL,
  `cep` int(8) NOT NULL,
  `telefone` double(10,0) NOT NULL,
  `celular` double(11,0) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cpf`
--

INSERT INTO `cpf` (`id_cpf`, `cpf`, `nome`, `sobrenome`, `logradouro`, `numero`, `complemento`, `cidade`, `estado`, `cep`, `telefone`, `celular`, `email`, `senha`) VALUES
(9, 12345678848, 'Tadeu', 'Vieira', 'acacia', '456', '', 'curitiba', 'PR', 81030500, 4112345600, 9999999999, 'tadeu@gmail', 'MTIzNDU2'),
(10, 12345678912, 'Alvaro', 'Gambini', 'pinheiro', '78', '', 'Maringá', 'PR', 87085100, 4412345678, 44912345678, 'alvaro@gmail', 'MTIzNDU2'),
(11, 12345678923, 'Carla', 'Silva', 'toneleiro', '456', 'apt 52', 'Maringá', 'PR', 87010500, 4412345678, 44912345678, 'carla@gmail.com', 'MTIzNDU2'),
(12, 12345678956, 'Roberta', 'Mendonça', 'curitiba', '125', 'apt 42', 'Maringá', 'PR', 87555600, 4412345678, 44912345678, 'roberta@gmail', 'MTIzNDU2'),
(13, 78945612389, 'Silvana', 'Gutierrez', 'Joubert de Carvalho', '654', 'apt 57', 'Maringá', 'PR', 81030500, 4412345678, 44912345678, 'silvana@gmail.com', 'MTIzNDU2'),
(14, 98765432198, 'Regina', 'Souza', 'Brasil', '1013', '', 'Maringá', 'PR', 87123123, 4412345678, 44912345678, 'regina@gmail.com', 'MTIzNDU2'),
(15, 45678912356, 'Francisco', 'Cardoso', 'apeninos', '89', '', 'Maringá', 'PR', 87089000, 0, 44912345678, 'fcardoso@gmail', 'MTIzNDU2'),
(16, 32165498732, 'Renata', 'Lombard', 'das Garças', '560', '', 'Maringá', 'PR', 87560100, 0, 44912345678, 'renata@gmail', 'MTIzNDU2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_prod` int(11) NOT NULL,
  `rotulo` varchar(100) NOT NULL,
  `preco` decimal(9,2) NOT NULL,
  `estoque` int(6) NOT NULL,
  `preco_compra` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_prod`, `rotulo`, `preco`, `estoque`, `preco_compra`) VALUES
(1, 'Lâmpada bulbo led 25 W 110/220V', '24.99', 1100, '12.50'),
(2, 'Lâmpada vela led com adaptador 9 W 110/220V', '15.99', 1000, '8.00'),
(3, 'Lâmpada miniatura 4 W 12 V', '4.99', 1070, '2.50'),
(4, 'Lâmpada halôgena 15 W 110/220 V', '22.99', 995, '11.50'),
(5, 'Lâmpada tubular led 9 W 110/220 V', '23.99', 1020, '12.00'),
(6, 'Lâmpada led com seletor de cor e luminosidade por controle remoto 20 W 110/220 V', '34.99', 1000, '17.50'),
(7, 'Lâmpada led 20 W com câmera', '199.00', 1000, '100.00'),
(8, 'Sensor de presença', '9.90', 1000, '5.00'),
(9, 'Lâmpada vela led 9 W 110/220V', '9.99', 1000, '5.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usu` int(11) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `admin` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usu`, `login`, `senha`, `admin`) VALUES
(1, 'admin', 'YWRtaW4=', 'Sim'),
(3, 'carlos', 'MTIz', ''),
(4, 'lucia', 'MTIz', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id_venda` int(11) NOT NULL,
  `data` varchar(8) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `cpf` double NOT NULL,
  `rotulo` varchar(100) NOT NULL,
  `preco` decimal(9,2) NOT NULL,
  `quantidade` int(6) NOT NULL,
  `comprado` varchar(1) NOT NULL,
  `despachado` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id_venda`, `data`, `nome`, `cpf`, `rotulo`, `preco`, `quantidade`, `comprado`, `despachado`) VALUES
(259, '17/08/20', 'Carla', 12345678923, 'Lâmpada halôgena 15 W 110/220 V', '22.99', 2, '', ''),
(260, '18/08/20', 'Carla', 12345678923, 'Lâmpada halôgena 15 W 110/220 V', '22.99', 2, 'X', ''),
(261, '17/08/20', 'Francisco', 45678912356, 'Lâmpada led 20 W com câmera', '199.00', 2, 'X', ''),
(262, '17/08/20', 'Francisco', 45678912356, 'Lâmpada tubular led 9 W 110/220 V', '23.99', 6, '', ''),
(263, '17/08/20', 'Carla', 12345678923, 'Lâmpada led 20 W com câmera', '199.00', 1, '', ''),
(266, '18/08/20', 'Tadeu', 12345678848, 'Lâmpada bulbo led 25 W 110/220V', '24.99', 10, 'X', ''),
(267, '18/08/20', 'Tadeu', 12345678848, 'Lâmpada tubular led 9 W 110/220 V', '23.99', 6, 'X', ''),
(268, '18/08/20', 'Tadeu', 12345678848, 'sensor de presença', '9.90', 5, 'X', ''),
(269, '18/08/20', 'Regina', 98765432198, 'Lâmpada miniatura 4 W 12 V', '4.99', 10, 'X', ''),
(271, '19/08/20', 'Regina', 98765432198, 'Lâmpada miniatura 4 W 12 V', '4.99', 3, '', ''),
(273, '19/08/20', 'Renata', 32165498732, 'Lâmpada halôgena 15 W 110/220 V', '22.99', 5, 'X', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`);

--
-- Índices para tabela `cpf`
--
ALTER TABLE `cpf`
  ADD PRIMARY KEY (`id_cpf`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_prod`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usu`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id_venda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `cpf`
--
ALTER TABLE `cpf`
  MODIFY `id_cpf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
