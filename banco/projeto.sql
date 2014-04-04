-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 02/04/2014 às 19h39min
-- Versão do Servidor: 5.5.16
-- Versão do PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `conteudo` blob NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`id`, `id_usuario`, `conteudo`, `data`) VALUES
(1, 1, '', '2014-02-21'),
(2, 1, '', '2014-02-21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` varchar(3) NOT NULL,
  `data` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `sexo`, `login`, `senha`, `email`, `cidade`, `uf`, `data`) VALUES
(1, 'TESTE', '', 'TESTE', '1234', 'TESTE', '', '', '0000-00-00'),
(2, 'joao', '', 'joao', '1234', 'joao', '', '', '0000-00-00'),
(3, 'tt', '', '123', '123', '123', '', '', '0000-00-00'),
(4, '', '', '', '', '', '', '', '0000-00-00'),
(5, 'Nome', '', 'Login', 'Senha', 'Email', '', '', '0000-00-00'),
(6, 'TESTE', '', '0', '1234', 'elson.lj@gmail.com', '', '', '0000-00-00'),
(7, 'aaaaaa', 'masculino', 'diegopresner@hotmail.com', 'd', 'diegopresner@hotmail.com', 'd', 'PR', '0000-00-00'),
(8, 'Diego', 'masculino', 'admin', '12345', 'diegopresner@hotmail.com', 'ponta grossa', 'PR', '0000-00-00'),
(10, 'Joao', 'masculino', 'joao', '1234', 'joao@gmail.com', 'Ponta Grossa', 'PR', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
