-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Jeu 09 Février 2017 à 15:03
-- Version du serveur :  10.0.23-MariaDB
-- Version de PHP :  5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- --------------------------------------------------------

--
-- Structure de la table `Films`
--

CREATE TABLE `Films` (
  `NumFilm` int(5) NOT NULL,
  `NumInd` int(5) NOT NULL,
  `Titre` varchar(25) NOT NULL DEFAULT '',
  `Genre` varchar(15) NOT NULL DEFAULT '',
  `Annee` year(4) NOT NULL DEFAULT '0000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Films`
--

INSERT INTO `Films` (`NumFilm`, `NumInd`, `Titre`, `Genre`, `Annee`) VALUES
(1, 15, 'Crash', 'Drame', 1996),
(2, 15, 'Faux-Semblants', 'Epouvante', 1988),
(3, 14, 'Pulp Fiction', 'Policier', 1994),
(4, 13, 'Breaking the waves', 'Drame', 1996),
(5, 13, 'Dogville', 'Drame', 2002),
(6, 12, 'Alamo', 'Western', 1960),
(7, 18, 'Dangereusement vôtre', 'Espionnage', 1985);

-- --------------------------------------------------------

--
-- Structure de la table `Individus`
--

CREATE TABLE `Individus` (
  `NumInd` int(5) NOT NULL,
  `Nom` varchar(15) NOT NULL DEFAULT '',
  `Prenom` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Individus`
--

INSERT INTO `Individus` (`NumInd`, `Nom`, `Prenom`) VALUES
(1, 'Kidman', 'Nicole'),
(2, 'Bettany', 'Paul'),
(3, 'Watson', 'Emily'),
(4, 'Skarsgard', 'Stellan'),
(5, 'Travolta', 'John'),
(6, 'L. Jackson', 'Samuel'),
(7, 'Willis', 'Bruce'),
(8, 'Irons', 'Jeremy'),
(9, 'Spacler', 'Jarnes'),
(10, 'Hunter', 'Holly'),
(11, 'Arquette', 'Rosanna'),
(12, 'Wayne', 'John'),
(13, 'von Trier', 'Lars'),
(14, 'Tarantino', 'Quentin'),
(15, 'Cronenberg', 'David'),
(16, 'Mazursky', 'Paul'),
(17, 'Jones', 'Grace'),
(18, 'Glen', 'John');

--
-- Index pour les tables exportées
--


--
-- Index pour la table `Films`
--
ALTER TABLE `Films`
  ADD PRIMARY KEY (`NumFilm`),
  ADD KEY `NumInd` (`NumInd`);

--
-- Index pour la table `Individus`
--
ALTER TABLE `Individus`
  ADD PRIMARY KEY (`NumInd`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Films`
--
ALTER TABLE `Films`
  ADD CONSTRAINT `Films_ibfk_1` FOREIGN KEY (`NumInd`) REFERENCES `Individus` (`NumInd`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
