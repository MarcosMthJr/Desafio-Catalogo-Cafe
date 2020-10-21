-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Out-2018 às 00:38
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe_catalogo`
--
CREATE DATABASE IF NOT EXISTS `cafe_catalogo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cafe_catalogo`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `catalogo`
--

CREATE TABLE `catalogo` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `catalogo`
--

INSERT INTO `catalogo` (`id`, `nome`, `descricao`) VALUES
(14, 'CafÃ© Espresso', 'O cafÃ© espresso (ou expresso, dependendo da preferÃªncia de escrita) Ã© um dos principais tipos de cafÃ© â€“ e Ã© a base de diversos outros. O nome â€œespressoâ€ vem do italiano â€œespremido, pressionadoâ€. Ele Ã© feito em poucos segundos sob alta pressÃ£o de Ã¡gua na temperatura de consumo. Isso faz com que acumule muito sabor e intensidade'),
(15, 'CafÃ© Macchiato', 'O macchiato Ã© muito parecido com o cafÃ© espresso, mas adiciona uma dose de leite vaporizado para suavizar o sabor intenso do espresso. Ao redor do mundo, os baristas costumam fazer pequenas variaÃ§Ãµes no macchiato, embora sempre sigam os procedimento bÃ¡sicos da receita original.\r\n\r\nA receita original consiste em uma dose de espresso coberta com uma dose de leite vaporizado (ou em espuma) sobre o cafÃ©. A receita clÃ¡ssica conta, ainda, com leite vaporizado e espuma de leite, em diferentes camadas.\r\n\r\nA proporÃ§Ã£o original utiliza um terÃ§o de cafÃ©, um terÃ§o de leite vaporizado e um terÃ§o de espuma (medidos de acordo com seu volume aparente).'),
(16, 'CafÃ© Ristretto', 'O ristretto Ã© uma versÃ£o mais concentrada do cafÃ© espresso padrÃ£o. Entre os tipos de cafÃ© mais populares, Ã© o que apresenta maior intensidade. Basicamente, trata-se da extraÃ§Ã£o da mesma quantidade de cafÃ© de um espresso, mas em apenas metade da quantidade de Ã¡gua.\r\n\r\nPara ser feito, basta utilizar metade da Ã¡gua na realizaÃ§Ã£o de um espresso, ou simplesmente interromper a mÃ¡quina na metade do processo. Isso garante um sabor concentrado e bastante forte.'),
(38, 'CafÃ© Latte', 'O CafÃ© Latte nÃ£o Ã© exatamente uma forma sofisticada de se tratar do cafÃ© com leite. Em sua receita original, utiliza-se leite vaporizado misturado a uma dose de cafÃ© espresso, alÃ©m de 1 centÃ­metro de espuma de leite servido sobre a bebida.\r\n\r\nDiferencia-se de um Machiatto especialmente no que diz respeito Ã  proporÃ§Ã£o e Ã  forma como Ã© servido. No Machiatto, as trÃªs camadas sÃ£o servidas sem estarem misturadas dentro da xÃ­cara. JÃ¡ no Latte, o cafÃ© e o leite vaporizado sÃ£o misturados, com a espuma servida sobre a mistura, separadamente.'),
(43, 'Cappuccino', 'O Cappuccino Ã© bastante parecido com um Latte, e Ã© um dos tipos de cafÃ© mais populares em cafeterias e bares ao redor do mundo. A diferenÃ§a entre os dois estÃ¡ no fato de o cappuccino possuir mais leite vaporizado em sua fÃ³rmula, alÃ©m de chocolate adicionado Ã  receita.\r\n\r\nSua receita inclui uma dose de cafÃ© espresso misturado com leite vaporizado, espuma de leite e chocolate em pequenos pedaÃ§os ou em pÃ³ sobre a bebida.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
