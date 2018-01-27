-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 27 jan. 2018 à 00:03
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_cvs`
--

-- --------------------------------------------------------

--
-- Structure de la table `codeuses`
--

CREATE TABLE `codeuses` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenoms` varchar(150) NOT NULL,
  `date_de_naissance` varchar(100) NOT NULL,
  `photo_de_profil` int(11) NOT NULL,
  `specialisation` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `resume` text NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `id_codeuses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `codeuses`
--

INSERT INTO `codeuses` (`id`, `nom`, `prenoms`, `date_de_naissance`, `photo_de_profil`, `specialisation`, `email`, `mdp`, `resume`, `telephone`, `id_codeuses`) VALUES
(1, 'DOHOU', 'DORINE STEPHANIE', '1996-12-19', 2017, 'etudiante', 'dorine.dohou@uvci.edu.ci', '161103874', 'j aime coder', '89585393', 0),
(2, 'DOHOU', 'DORINE STEPHANIE', '1996-12-19', 2017, 'etudiante', 'dorine.dohou@uvci.edu.ci', '161103874', 'j aime coder', '89585393', 0),
(3, 'N GUESSAN', 'Line', '2018-01-03', 2016, 'etudiante', 'linenguessan@gmail.com', 'line12', 'j aime le web', '08784652', 0),
(4, 'N GUESSAN', 'Line', '2018-01-03', 2016, 'etudiante', 'linenguessan@gmail.com', 'line12', 'j aime le web', '08784652', 0);

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `github` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `diplomes`
--

CREATE TABLE `diplomes` (
  `id` int(11) NOT NULL,
  `annee_obtenue` varchar(100) NOT NULL,
  `libelle` varchar(200) NOT NULL,
  `ecole` varchar(100) NOT NULL,
  `id_codeuses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `diplomes`
--

INSERT INTO `diplomes` (`id`, `annee_obtenue`, `libelle`, `ecole`, `id_codeuses`) VALUES
(1, '', 'bac', 'lycÃ©e de bingerville', 0),
(2, '', 'bac', 'lycÃ©e de bingerville', 0),
(3, '', '', '', 0),
(4, '', 'bts', 'universitÃ© de cocody', 0),
(5, '', 'bts', 'universitÃ© de cocody', 0),
(6, '', 'bts', 'universitÃ© de cocody', 0),
(7, '2017-06-15', 'BAC', 'lycÃ©e moderne de Gagnoa', 0),
(8, '2017-08-10', 'LICENCE', 'UniversitÃ© de Cocody', 0);

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `titre_du_poste` varchar(150) NOT NULL,
  `date_debut` varchar(100) NOT NULL,
  `date_fin` varchar(100) NOT NULL,
  `entreprise` varchar(150) NOT NULL,
  `id_codeuses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`id`, `titre_du_poste`, `date_debut`, `date_fin`, `entreprise`, `id_codeuses`) VALUES
(1, 'stagiaire', '2017-08-16', 'orange ', '', 0),
(2, 'stagiaire', '2017-08-17', '2018-01-02', 'SODECI', 0),
(3, 'stagiaire', '2017-05-10', '2017-12-13', 'CIE', 0);

-- --------------------------------------------------------

--
-- Structure de la table `interets`
--

CREATE TABLE `interets` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `id_codeuses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `interets`
--

INSERT INTO `interets` (`id`, `titre`, `description`, `id_codeuses`) VALUES
(1, 'lecture', 'j aime la lecture pour mieux me documenter', 0),
(2, 'voyage', 'j aime decouvrir', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `codeuses`
--
ALTER TABLE `codeuses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `diplomes`
--
ALTER TABLE `diplomes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `interets`
--
ALTER TABLE `interets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `codeuses`
--
ALTER TABLE `codeuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `diplomes`
--
ALTER TABLE `diplomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `interets`
--
ALTER TABLE `interets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
