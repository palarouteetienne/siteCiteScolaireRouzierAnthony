-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 22 mai 2021 à 14:38
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `citescolaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `IDU` int(11) NOT NULL,
  `NOMU` varchar(100) NOT NULL,
  `PRENOMU` varchar(100) NOT NULL,
  `MAILU` varchar(200) NOT NULL,
  `MDPU` varchar(255) NOT NULL,
  `ADMINU` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IDU`, `NOMU`, `PRENOMU`, `MAILU`, `MDPU`, `ADMINU`) VALUES
(1, 'administrateur', 'administrateur', 'administrateur@citeScolaire.fr', '$2y$10$02zm92yFE0RseZ1HKP8DHOBrGYSDUD0Rfg7C61mVJXpsxOm1LQyoa', 1),
(2, 'Collège', 'EJ', 'college.ej@citescolaire.com', '$2y$10$02zm92yFE0RseZ1HKP8DHOBrGYSDUD0Rfg7C61mVJXpsxOm1LQyoa', 0),
(3, 'lycee', 'ej', 'lycee.ej@citescolaire.com', '$2y$10$02zm92yFE0RseZ1HKP8DHOBrGYSDUD0Rfg7C61mVJXpsxOm1LQyoa', 0),
(4, 'lycee', 'jj', 'lycee.jj@citescolaire.com', '$2y$10$02zm92yFE0RseZ1HKP8DHOBrGYSDUD0Rfg7C61mVJXpsxOm1LQyoa', 0),
(5, 'cite', 'scolaire', 'cite.scolaire@citescolaire.com', '$2y$10$02zm92yFE0RseZ1HKP8DHOBrGYSDUD0Rfg7C61mVJXpsxOm1LQyoa', 0),
(6, 'd', 'd', 'administrateur@citeScolaire.fr', '$2y$10$PyOCGcl/ON8bvyj4EQaju.Gumt8JOreW6YrwvlootmQDUeujlNyP.', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`IDU`),
  ADD KEY `FK_ASSOCIE_UTIL` (`IDU`),
  ADD KEY `FK_POSSEDE_UTIL` (`IDU`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `IDU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
