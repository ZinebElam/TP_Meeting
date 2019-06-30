-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 30 juin 2019 à 20:33
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `meetings`
--

-- --------------------------------------------------------

--
-- Structure de la table `mymeetings`
--

CREATE TABLE `mymeetings` (
  `id_meeting` int(11) NOT NULL,
  `meetingname` varchar(50) NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `organisateurs` text NOT NULL,
  `participants` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mymeetings`
--

INSERT INTO `mymeetings` (`id_meeting`, `meetingname`, `datedebut`, `datefin`, `organisateurs`, `participants`) VALUES
(1, 'aaaa', '2012-01-01', '2014-01-01', 'hhhh', '11 11 22 44 michel'),
(17, 'php', '2019-06-05', '2019-06-07', 'Zineb', '111 222 333 444 55 66'),
(3, 'test 100', '2013-01-01', '2015-04-02', 'Zineb', 'Marwane Aaa ggg'),
(4, 'aaa', '2012-01-01', '2015-01-01', 'eeee', 'aaa Marwane'),
(14, 'javascript', '2019-08-03', '2019-08-06', 'Zineb', 'Marwane Aaa ggg'),
(18, '123456', '2012-01-01', '2015-01-01', 'php', 'aa bb cc dd dd Marwane'),
(13, 'test12233', '2018-01-01', '2019-01-01', 'Marwane hhhh', 'Mee hhhh eee aaa'),
(12, 'test 100', '2015-01-01', '2019-01-01', 'Zineb ', 'Marwane'),
(19, '145875222222222222', '2015-01-01', '2019-01-01', 'bbb', 'hh bb dd nn ff'),
(20, '145875222222222222', '2015-01-01', '2019-01-01', 'bbb', 'hh bb dd nn ff'),
(21, '145875222222222222', '2015-01-01', '2019-01-01', 'bbb aaaa', 'hh bb dd nn ff'),
(22, '145875222222222222', '2015-01-01', '2019-01-01', 'bbb aaaa Zineb', 'hh bb dd nn ff'),
(23, 'Wordpress', '2019-06-14', '2019-06-14', 'Zineb Marwane Michel', 'Marwane Aaa ggg bbb mlk');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `mymeetings`
--
ALTER TABLE `mymeetings`
  ADD PRIMARY KEY (`id_meeting`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `mymeetings`
--
ALTER TABLE `mymeetings`
  MODIFY `id_meeting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
