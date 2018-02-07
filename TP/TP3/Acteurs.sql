-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Jeu 09 Février 2017 à 13:37
-- Version du serveur :  10.0.23-MariaDB
-- Version de PHP :  5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



--
-- Structure de la table `Acteurs`
--

CREATE TABLE `Acteurs` (
  `NumInd` int(5) NOT NULL,
  `NumFilm` int(5) NOT NULL,
  `Role` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Acteurs`
--

INSERT INTO `Acteurs` (`NumInd`, `NumFilm`, `Role`) VALUES
(1, 5, 'Grace'),
(2, 5, 'Torn Edison'),
(3, 4, 'Bess'),
(4, 4, 'Jan'),
(4, 5, 'Chuck'),
(5, 3, 'Vincent Vega'),
(6, 3, 'Jules Winnfield'),
(7, 3, 'Butch Collidge'),
(8, 2, 'Beverly & Elliot Mantle'),
(9, 1, 'James Ballard'),
(10, 1, 'Helen Remington'),
(11, 1, 'Gabrielle'),
(16, 7, 'May Day');


--
-- Index pour la table `Acteurs`
--
ALTER TABLE `Acteurs`
  ADD PRIMARY KEY (`NumInd`,`NumFilm`),
  ADD KEY `NumFilm` (`NumFilm`);
  
  
--
-- Contraintes pour la table `Acteurs`
--
ALTER TABLE `Acteurs`
  ADD CONSTRAINT `Acteurs_ibfk_1` FOREIGN KEY (`NumInd`) REFERENCES `Individus` (`NumInd`),
  ADD CONSTRAINT `Acteurs_ibfk_2` FOREIGN KEY (`NumFilm`) REFERENCES `Films` (`NumFilm`);
