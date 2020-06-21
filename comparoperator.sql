-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 21 juin 2020 à 13:42
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `comparoperator`
--

-- --------------------------------------------------------

--
-- Structure de la table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(10) NOT NULL,
  `location` varchar(150) NOT NULL,
  `price` int(10) NOT NULL,
  `card_pic` varchar(255) NOT NULL,
  `parallax_1` varchar(255) NOT NULL,
  `parallax_2` varchar(255) NOT NULL,
  `id_tour_operator` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `destinations`
--

INSERT INTO `destinations` (`id`, `location`, `price`, `card_pic`, `parallax_1`, `parallax_2`, `id_tour_operator`) VALUES
(6, 'Canada', 1200, 'canada.jpg', 'Canada1.jpg', 'Canada2.jpg', 3),
(7, 'Canada', 1600, 'canada.jpg', 'canada1.jpg', 'canada2.jpg', 5),
(8, 'Canada', 1350, 'canada.jpg', 'canada1.jpg', 'canada2.jpg', 7),
(9, 'Canada', 1100, 'canada.jpg', 'canada1.jpg', 'canada2.jpg', 10),
(14, 'Croatie', 650, 'croatia.jpg', 'Croatia1.jpg', 'Croatia2.jpg', 3),
(16, 'Croatie', 450, 'croatia.jpg', 'Croatia1.jpg', 'Croatia2.jpg', 7),
(18, 'Croatie', 499, 'croatia.jpg', 'Croatia1.jpg', 'Croatia2.jpg', 10),
(19, 'Spain', 320, 'spain.jpg', 'Spain1.jpg', 'Spain2.jpg', 5),
(20, 'Spain', 320, 'spain.jpg', 'Spain1.jpg', 'Spain2.jpg', 10),
(21, 'Spain', 410, 'spain.jpg', 'Spain1.jpg', 'Spain2.jpg', 3),
(22, 'Russie', 800, 'russia.jpg', 'Russia1.jpg', 'Russia2.jpg', 3),
(23, 'Japon', 1200, 'japan.jpg', 'japan1.jpg', 'japan2.jpg', 7),
(25, 'Kenya', 1259, 'kenya.jpg', 'Kenya1.jpg', 'Kenya2.jpg', 5);

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `message` varchar(250) NOT NULL,
  `author` varchar(150) NOT NULL,
  `date` datetime NOT NULL,
  `id_tour_operator` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reviews`
--

INSERT INTO `reviews` (`id`, `message`, `author`, `date`, `id_tour_operator`) VALUES
(1, 'super club !', 'alex', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tour_operators`
--

CREATE TABLE `tour_operators` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `grade` int(2) NOT NULL,
  `link` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `is_premium` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tour_operators`
--

INSERT INTO `tour_operators` (`id`, `name`, `grade`, `link`, `logo`, `is_premium`) VALUES
(1, 'club med', 5, 'https://www.clubmed.fr/', '', 1),
(3, 'intrepid', 4, 'https://www.tourradar.com/intrepid', 'Intrepid.png', 1),
(5, 'Flag', 3, 'https://www.tourradar.com/itm-journeys', 'flaght.png', 1),
(7, 'directours', 3, 'https://www.directours.com/quote/stepInfo.do', 'logo-directours.png', 0),
(10, 'BlackRoads', 5, 'http://www.backroads.fr/', 'blackRoads.png', 1),
(11, 'Exotismes', 4, 'https://www.exotismes.fr/', 'logo-directours.png', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_operator` (`id_tour_operator`);

--
-- Index pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tour_operator` (`id_tour_operator`);

--
-- Index pour la table `tour_operators`
--
ALTER TABLE `tour_operators`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tour_operators`
--
ALTER TABLE `tour_operators`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `destinations`
--
ALTER TABLE `destinations`
  ADD CONSTRAINT `fk_operator` FOREIGN KEY (`id_tour_operator`) REFERENCES `tour_operators` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_tour_operator` FOREIGN KEY (`id_tour_operator`) REFERENCES `tour_operators` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
