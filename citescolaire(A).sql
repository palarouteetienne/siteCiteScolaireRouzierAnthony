-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 27 jan. 2021 à 11:19
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `citescolaire`
--
DROP DATABASE IF EXISTS citescolaire;
CREATE DATABASE IF NOT EXISTS citescolaire;
USE citescolaire;


-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `IDA` int(11) NOT NULL AUTO_INCREMENT,
  `ETABA` int(2) NOT NULL,
  `UTILA` int(2) DEFAULT NULL,
  `TITREA` char(100) NOT NULL,
  `VOIEA` int(11) DEFAULT NULL,
  `COMMENTAIREA` text,
  `TYPEA` int(11) NOT NULL,
  `DATEDEBR` date DEFAULT NULL,
  `DATEFINR` date DEFAULT NULL,
  PRIMARY KEY (`IDA`),
  KEY `FK_ARTICLE_ETABLISSEMENT` (`ETABA`),
  KEY `FK_ARTICLE_UTIL` (`UTILA`),
  KEY `FK_ARTICLE_VOIE` (`VOIEA`),
  KEY `FK_ARTICLE_TYPE` (`TYPEA`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`IDA`, `ETABA`, `UTILA`, `TITREA`, `VOIEA`, `COMMENTAIREA`, `TYPEA`, `DATEDEBR`, `DATEFINR`) VALUES
(1, 2, 1, 'S.T.M.G', 1, 'Sciences et Technologies du Management et de la Gestion', 1, '0000-00-00', '0000-00-00'),
(2, 2, 1, 'Seconde', 2, 'Seconde générale', 1, '0000-00-00', '0000-00-00'),
(3, 2, 1, 'Arts seconde', 3, 'Arts Plastiques', 1, '0000-00-00', '0000-00-00'),
(4, 2, 1, 'T.E.D seconde', 3, 'Théâtre Expression Dramatique', 1, '0000-00-00', '0000-00-00'),
(5, 2, 1, 'M.G seconde', 3, 'Management et Gestion', 1, '0000-00-00', '0000-00-00'),
(6, 2, 1, 'Arts', 4, 'Arts Plastiques', 1, '0000-00-00', '0000-00-00'),
(7, 2, 1, 'T.E.D', 4, 'Théâtre Expression Dramatique', 1, '0000-00-00', '0000-00-00'),
(8, 2, 1, 'Langue Vivante', 4, 'Anglais Euro', 1, '0000-00-00', '0000-00-00'),
(9, 2, 1, 'Théâtre', 5, 'Expression Théâtrale', 1, '0000-00-00', '0000-00-00'),
(10, 2, 1, 'H.G.G.S.P', 5, 'Histoire-géographie, géopolitique et sciences politiques', 1, '0000-00-00', '0000-00-00'),
(11, 2, 1, 'H.L.P', 5, 'Humanités, littérature et philosophie', 1, '0000-00-00', '0000-00-00'),
(12, 2, 1, 'L.L.C.E.A', 5, 'Langues, littératures et cultures étrangères - anglais', 1, '0000-00-00', '0000-00-00'),
(13, 2, 1, 'Mathématiques', 5, 'Scientifiques et Economiques', 1, '0000-00-00', '0000-00-00'),
(14, 2, 1, 'Physique-Chimie', 5, 'Scientifiques', 1, '0000-00-00', '0000-00-00'),
(15, 2, 1, 'S.V.T', 5, 'Sciences de la Vie et de la Terre', 1, '0000-00-00', '0000-00-00'),
(16, 2, 1, 'S.E.S', 5, 'Sciences économiques et sociales', 1, '0000-00-00', '0000-00-00'),
(17, 2, 1, 'BTS S.I.O', 6, 'Services Informatiques aux Organisations', 1, '0000-00-00', '0000-00-00'),
(18, 2, 1, 'Latin seconde', 3, 'Langues et Cultures Antiquité', 1, '0000-00-00', '0000-00-00'),
(19, 2, 1, 'Latin', 4, 'Langues et Cultures Antiquité', 1, '0000-00-00', '0000-00-00'),
(20, 1, 1, 'S.E.G.P.A', 7, 'Sections d’Enseignement Général et Professionnel Adapté', 1, '0000-00-00', '0000-00-00'),
(21, 1, 1, 'U.L.I.S', 7, 'Unités Localisées pour Inclusion Scolaire', 1, '0000-00-00', '0000-00-00'),
(22, 1, 1, 'C.H.A.T', 8, 'Classe à Horaires Aménagés Théâtre', 1, '0000-00-00', '0000-00-00'),
(23, 1, 1, 'C.H.A.M', 8, 'Classe à Horaires Aménagés Musique', 1, '0000-00-00', '0000-00-00'),
(24, 1, 1, 'Bilangue', 8, 'Langues vivantes 2 (Espagnol, Allemand, Italien)', 1, '0000-00-00', '0000-00-00'),
(25, 1, 1, 'Basketball', 8, 'Section Sportive', 1, '0000-00-00', '0000-00-00'),
(26, 1, 1, 'Athlétisme', 8, 'Section Sportive', 1, '2020-11-02', '2020-11-02'),
(27, 3, 1, 'CAP E.C.M.S', 9, 'Employé de Commerce Multi-Spécialités', 1, '0000-00-00', '0000-00-00'),
(28, 3, 1, 'Bac Pro C&V', 10, 'Bac Professionnel Commerce et Vente', 1, '0000-00-00', '0000-00-00'),
(29, 3, 1, 'CAP A.T.M.F.C', 9, 'Assistant Technique en Milieux Familial et Collectif', 1, '0000-00-00', '0000-00-00'),
(30, 3, 1, 'Cross-Fitness', 11, 'Section Sportive', 1, '0000-00-00', '0000-00-00'),
(32, 4, 1, 'Internat', 12, 'Hébergement', 2, '0000-00-00', '0000-00-00'),
(33, 4, 1, 'Restauration', 13, 'Petit-déjeuners, déjeuners et soupers', 3, '0000-00-00', '0000-00-00'),
(34, 4, 1, 'Bourses Aides', 14, 'Bourses & Aides', 4, '0000-00-00', '0000-00-00'),
(35, 4, 1, 'Portes Ouvertes Lycée EJ', 15, 'Visiter', 5, '2020-11-02', '2020-11-02'),
(36, 2, 1, 'information_lyceeEJ', 16, 'Informations Pratiques', 5, '2020-11-02', '2020-11-02'),
(37, 1, 1, 'information_collegeEJ', 17, 'Informations Pratiques', 5, '2020-11-02', '2020-11-02'),
(38, 3, 1, 'information_lyceeJJ', 17, 'Informations Pratiques', 5, '2020-11-02', '2020-11-02'),
(39, 1, 1, 'portes_ouvertes_BTS', 17, 'ceci est une actualité portes ouvertes.', 5, '2020-11-02', '2020-11-02'),
(40, 1, 1, 'portes_ouvertes_BTS', 17, 'ceci est une actualité portes ouvertes.', 5, '2020-11-02', '0000-00-00'),
(47, 2, 1, 'Réforme STMG', 1, '<p>zaazeazeaeae</p>', 1, '0000-00-00', '0000-00-00'),
(48, 2, 1, 'Test 2', 1, '<p>Formation <span style=\"color: #ff0014;\"><strong>PGI</strong> </span>Salle 310</p>\r\n<p>Pleini&egrave;re Amphith&eacute;atre Cit&eacute; internationale de la tapisserie</p>', 1, '2020-02-08', '0000-00-00'),
(49, 2, 1, 'Test required et dates', 2, '<p>bbbvvvvv</p>', 1, '2020-02-07', '2020-02-13'),
(50, 2, 1, 'test upload 24/2/2020', 1, '<p>ceci est un premier test</p>', 1, '0000-00-00', '0000-00-00'),
(51, 2, 1, 'test upload 2 24/2/2020', 1, '<p>Test 2</p>', 1, '0000-00-00', '0000-00-00'),
(52, 2, 1, 'test upload 2 24/2/2020', 1, '<p>Test 2</p>', 1, '0000-00-00', '0000-00-00'),
(53, 2, 1, 'test pb clé étrangère', 1, '<p>bla bla bla</p>', 1, '0000-00-00', '0000-00-00'),
(54, 2, 1, 'test pb clé étrangère', 1, '<p>bla bla bla</p>', 1, '0000-00-00', '0000-00-00'),
(55, 2, 1, 'test pb clé étrangère', 1, '<p>bla bla bla</p>', 1, '0000-00-00', '0000-00-00'),
(56, 2, 1, 'test pb clé étrangère numéro 2', 1, '<p>bla bla bla 2 2 2&nbsp;</p>', 1, '0000-00-00', '0000-00-00'),
(57, 2, 1, 'test pb clé étrangère numéro 2', 1, '<p>bla bla bla 2 2 2&nbsp;</p>', 1, '0000-00-00', '0000-00-00'),
(58, 2, 1, 'test pb clé étrangère numéro 2', 1, '<p>bla bla bla 2 2 2&nbsp;</p>', 1, '0000-00-00', '0000-00-00'),
(59, 2, 1, 'Test upload 25/2', 1, '<p>test du 25/2</p>', 1, '2020-02-24', '0000-00-00'),
(60, 2, 1, 'Test upload 25/2 numéro 2', 1, '<p>V&eacute;rif cr&eacute;ation dans table ressource</p>', 1, '0000-00-00', '0000-00-00'),
(61, 2, 1, 'test upload avec test strlen', 2, '<p>3 au lieu de 4 dans ressource</p>', 1, '0000-00-00', '0000-00-00'),
(62, 4, 1, 'qvj', 7, 'zrnsgt vc', 1, '2021-01-01', '2021-03-21'),
(63, 1, 1, 'Test', 1, '<p>Test</p>', 5, '2021-01-12', '2021-01-14'),
(64, 1, 1, 'Semaine du Goût', 13, '<p>Test Semaine Gout</p>', 5, '2021-01-11', '2021-01-17'),
(65, 3, 1, 'covid', 13, '<p>fchgjb</p>', 5, '2021-01-04', '2021-02-05'),
(66, 4, 1, 'an', 1, 'an', 5, '2021-01-14', '2021-01-17'),
(67, 2, 1, 'an', 2, 'an', 3, '2021-01-13', '2021-01-16'),
(68, 4, 1, 'an', 2, 'an', 1, '2021-01-07', '2021-01-16'),
(69, 4, 1, 'Ne marche plus', 4, 'Ne marche plus', 5, '2021-01-14', '2021-01-15'),
(70, 2, 1, 'ça marche', 5, 'Normalement', 5, '2021-01-14', '2021-01-16'),
(71, 2, 1, 'Avec Ressource', 3, 'Avec ', 5, '2021-01-06', '2021-01-07'),
(72, 4, 1, 'Avec', 2, 'Avec', 5, '2021-01-07', '2021-01-20'),
(73, 4, 1, 'avec', 12, '<p>avec</p>', 5, '2021-01-15', '2021-01-23'),
(74, 3, 1, 'Avec', 13, 'Avec ', 5, '2021-01-14', '2021-01-23'),
(78, 2, 1, '4', 4, '4', 2, '2021-01-19', '2021-01-21'),
(79, 4, 1, 'aa', 3, 'aa', 1, '2021-01-20', '2021-01-23'),
(80, 4, 1, 'aa', 3, 'aa', 1, '2021-01-20', '2021-01-23'),
(81, 4, 1, 'aa', 3, 'aa', 1, '2021-01-20', '2021-01-23'),
(82, 4, 1, 'A', 3, 'A', 5, '2021-01-20', '2021-01-22'),
(83, 4, 1, 'AA', 7, 'AA', 5, '2021-01-06', '2021-01-28'),
(84, 4, 1, 'AA', 7, 'AA', 5, '2021-01-06', '2021-01-28'),
(85, 4, 1, 'AA', 7, 'AA', 5, '2021-01-06', '2021-01-28'),
(86, 4, 1, 'AA', 7, 'AA', 5, '2021-01-06', '2021-01-28'),
(87, 4, 1, 'AA', 7, 'AA', 5, '2021-01-06', '2021-01-28');

-- --------------------------------------------------------

--
-- Structure de la table `etablissement`
--

DROP TABLE IF EXISTS `etablissement`;
CREATE TABLE IF NOT EXISTS `etablissement` (
  `IDE` int(2) NOT NULL AUTO_INCREMENT,
  `NOME` char(100) NOT NULL,
  `RUEE` char(100) NOT NULL,
  `CODEPOSTALE` char(5) NOT NULL,
  `VILLEE` char(100) NOT NULL,
  `TELEPHONEE` int(10) NOT NULL,
  `EMAILE` char(150) NOT NULL,
  `MOTPROVISEUR` text NOT NULL,
  PRIMARY KEY (`IDE`),
  KEY `FK_ASSOCIE_ETAB` (`IDE`),
  KEY `FK_POSSEDE_ETAB` (`IDE`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etablissement`
--

INSERT INTO `etablissement` (`IDE`, `NOME`, `RUEE`, `CODEPOSTALE`, `VILLEE`, `TELEPHONEE`, `EMAILE`, `MOTPROVISEUR`) VALUES
(1, 'collège Eugène Jamot', '1 Rue Williams Dumazet', '23200', 'Aubusson', 555677280, 'ce.0230002c@ac-limoges.fr', 'Bienvenue au collège Eugène Jamot. Vous aller voir les formations de la 6ème à la 3ème ainsi que toutes les options pouvant être prisent dans cet établissement.'),
(2, 'lycée Eugène Jamot', '1 Rue Williams Dumazet', '23200', 'Aubusson', 555677280, 'ce.0230002c@ac-limoges.fr', 'Bienvenue au lycée Eugène Jamot. Vous aller voir les formations de la 2nd au BTS SIO.'),
(3, 'lycée Jean Jaurès', '38 rue Jean Jaurès', '23200', 'Aubusson', 555677360, 'ce.0230003d@ac-limoges.fr', 'Bienvenue au lycée Jean Jaurès. Vous aller voir les formations professionnel de cet établissement.'),
(4, 'cité Scolaire', '1 Rue Williams Dumazet', '23200', 'Aubusson', 555677280, 'ce.0230002c@ac-limoges.fr', 'Bienvenue sur le site de la cité scolaire Aubusson.');

-- --------------------------------------------------------

--
-- Structure de la table `ressource`
--

DROP TABLE IF EXISTS `ressource`;
CREATE TABLE IF NOT EXISTS `ressource` (
  `IDR` int(11) NOT NULL AUTO_INCREMENT,
  `ARTICLER` int(11) NOT NULL,
  `NOMR` char(200) NOT NULL,
  `FORMATR` char(100) NOT NULL,
  `CHEMINR` char(200) NOT NULL,
  `POIDSR` int(7) NOT NULL,
  PRIMARY KEY (`IDR`),
  KEY `FK_RESSOURCE_ARTICLE` (`ARTICLER`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ressource`
--

INSERT INTO `ressource` (`IDR`, `ARTICLER`, `NOMR`, `FORMATR`, `CHEMINR`, `POIDSR`) VALUES
(1, 2, 'Seconde_Generale2019-02-11.pdf', 'pdf', 'fichier/Seconde_Generale2019-02-11.pdf', 313519),
(2, 3, 'Arts_Plastiques_seconde2019-02-11.pdf', 'pdf', 'fichier/Arts_Plastiques_seconde2019-02-11.pdf', 249868),
(3, 18, 'Langues_Cultures_Antiquite_seconde2019-02-11.pdf', 'pdf', 'fichier/Langues_Cultures_Antiquite_seconde2019-02-11.pdf', 369152),
(4, 5, 'Management_Gestion_seconde2019-02-11.pdf', 'pdf', 'fichier/Management_Gestion_seconde2019-02-11.pdf', 327283),
(5, 4, 'Theatre_Expression_Dramatique_seconde2019-02-11.pdf', 'pdf', 'fichier/Theatre_Expression_Dramatique_seconde2019-02-11.pdf', 207868),
(6, 8, 'Anglais_Euro-generale2019-02-11.pdf', 'pdf', 'fichier/Anglais_Euro-generale2019-02-11.pdf', 260545),
(7, 6, 'Arts_Plastiques_generale2019-02-11.pdf', 'pdf', 'fichier/Arts_Plastiques_generale2019-02-11.pdf', 249868),
(8, 19, 'Langues_Cultures_Antiquite_generale2019-02-11.pdf', 'pdf', 'fichier/Langues_Cultures_Antiquite_generale2019-02-11.pdf', 369152),
(9, 7, 'Theatre_Expression-Dramatique_generale2019-02-11.pdf', 'pdf', 'fichier/Theatre_Expression-Dramatique_generale2019-02-11.pdf', 207868),
(10, 10, 'Histoire_Geographie,_Geopolitique_Sciences_Politiques_specialite2019-02-11.pdf', 'pdf', 'fichier/Histoire_Geographie,_Geopolitique_Sciences_Politiques_specialite2019-02-11.pdf', 362429),
(11, 11, 'Humanités_Litterature_Philosophie_specialite2019-02-11.pdf', 'pdf', 'fichier/Humanités_Litterature_Philosophie_specialite2019-02-11.pdf', 323192),
(12, 12, 'Langues_Litteratures_Cultures_Etrangeres-Anglais_specialite2019-02-11.pdf', 'pdf', 'fichier/Langues_Litteratures_Cultures_Etrangeres-Anglais_specialite2019-02-11.pdf', 515717),
(13, 13, 'Mathematiques_specialite2019-02-11.pdf', 'pdf', 'fichier/Mathematiques_specialite2019-02-11.pdf', 307374),
(14, 14, 'Physique_Chimie_specialite2019-02-11.pdf', 'pdf', 'fichier/Physique_Chimie_specialite2019-02-11.pdf', 309556),
(15, 16, 'Sciences_Economiques_Sociales_specialite2019-02-11.pdf', 'pdf', 'fichier/Sciences_Economiques_Sociales_specialite2019-02-11.pdf', 345233),
(16, 15, 'Sciences_Vie_Terre_specialite2019-02-11.pdf', 'pdf', 'fichier/Sciences_Vie_Terre_specialite2019-02-11.pdf', 272069),
(17, 9, 'Theatre_specialite2019-02-11.pdf', 'pdf', 'fichier/Theatre_specialite2019-02-11.pdf', 269727),
(18, 1, 'Sciences_Technologies_Management_Gestion2019-02-11.pdf', 'pdf', 'fichier/Sciences_Technologies_Management_Gestion2019-02-11.pdf', 316986),
(19, 2, 'seconde2019-02-14.jpg', 'jpg', 'fichier/seconde2019-02-14.jpg', 59362),
(20, 3, 'art_seconde2019-02-14.jpg', 'jpg', 'fichier/art_seconde2019-02-14.jpg', 108440),
(21, 4, 'theatre_seconde2019-02-14.jpg', 'jpg', 'fichier/theatre_seconde2019-02-14.jpg', 3966830),
(22, 1, 'stmg2019-02-14.jpg', 'jpg', 'fichier/stmg2019-02-14.jpg', 21597),
(23, 5, 'mg2019-02-14.jpg', 'jpg', 'fichier/mg2019-02-14.jpg', 16424),
(24, 6, 'art_générale2019-02-14.jpg', 'jpg', 'fichier/art_générale2019-02-14.jpg', 220739),
(25, 7, 'theatre_generale2019-02-14.jpg', 'jpg', 'fichier/theatre_generale2019-02-14.jpg', 3546500),
(26, 10, 'hggsp2019-02-14.jpg', 'jpg', 'fichier/hggsp2019-02-14.jpg', 108455),
(27, 11, 'hlp2019-02-14.jpg', 'jpg', 'fichier/hlp2019-02-14.jpg', 75928),
(28, 12, 'LLCEA2019-02-14.jpg', 'jpg', 'fichier/LLCEA2019-02-14.jpg', 2889635),
(29, 13, 'math2019-02-14.jpg', 'jpg', 'fichier/math2019-02-14.jpg', 21732),
(30, 14, 'PC2019-02-14.jpg', 'jpg', 'fichier/PC2019-02-14.jpg', 817899),
(31, 15, 'SVT2019-02-14.jpg', 'jpg', 'fichier/SVT2019-02-14.jpg', 74407),
(32, 16, 'SES2019-02-14.jpg', 'jpg', 'fichier/SES2019-02-14.jpg', 139946),
(33, 18, 'latin_seconde2019-02-14.jpg', 'jpg', 'fichier/latin_seconde2019-02-14.jpg', 12926),
(34, 19, 'latin2019-02-14.jpg', 'jpg', 'fichier/latin2019-02-14.jpg', 3713028),
(35, 20, 'SEGPA2019-02-14.pdf', 'pdf', 'fichier/SEGPA2019-02-14.pdf', 899924),
(36, 20, 'SEGPA2019-02-14.jpg', 'jpg', 'fichier/SEGPA2019-02-14.jpg', 31705),
(37, 21, 'ULIS2019-02-14.pdf', 'pdf', 'fichier/ULIS2019-02-14.pdf', 1199816),
(38, 21, 'ULIS2019-02-14.jpg', 'jpg', 'fichier/ULIS2019-02-14.jpg', 18251),
(39, 22, 'CHAT2019-02-14.pdf', 'pdf', 'fichier/CHAT2019-02-14.pdf', 1065214),
(40, 23, 'CHAM2019-02-14.pdf', 'pdf', 'fichier/CHAM2019-02-14.pdf', 1132610),
(41, 22, 'CHAT2019-02-14.jpg', 'jpg', 'fichier/CHAT2019-02-14.jpg', 16579),
(42, 23, 'CHAM2019-02-14.jpg', 'jpg', 'fichier/CHAM2019-02-14.jpg', 18933),
(44, 25, 'Basketball2019-02-14.pdf', 'pdf', 'fichier/Basketball2019-02-14.pdf', 1355349),
(45, 24, 'bilangue2019-02-14.jpg', 'jpg', 'fichier/bilangue2019-02-14.jpg', 16555),
(46, 25, 'basket2019-02-14.jpg', 'jpg', 'fichier/basket2019-02-14.jpg', 19478),
(47, 24, 'Bilangue2019-02-14.pdf', 'pdf', 'fichier/Bilangue2019-02-14.pdf', 666091),
(48, 26, 'Athletisme2019-02-14.pdf', 'pdf', 'fichier/Athletisme2019-02-14.pdf', 533145),
(49, 26, 'athletisme2019-02-14.jpg', 'jpg', 'fichier/athletisme2019-02-14.jpg', 13271),
(50, 32, 'Internat2019-02-14.jpg', 'jpg', 'fichier/Internat2019-02-14.jpg', 4775828),
(52, 33, 'self2019-02-14.jpg', 'jpg', 'fichier/self2019-02-14.jpg', 61714),
(53, 8, 'drapeau2019-02-14.jpg', 'jpg', 'fichier/drapeau2019-02-14.jpg', 254431),
(54, 9, 'theatre_spe2019-02-14.jpg', 'jpg', 'fichier/theatre_spe2019-02-14.jpg', 4594370),
(55, 17, 'BTS2019-02-14.jpg', 'jpg', 'fichier/BTS2019-02-14.jpg', 9301),
(56, 17, 'BTS2019-02-14.pdf', 'pdf', 'fichier/BTS2019-02-14.pdf', 934853),
(57, 33, 'Restauration2019-02-14.pdf', 'pdf', 'fichier/Restauration2019-02-14.pdf', 44850),
(58, 35, 'Portes Ouvertes Lycée EJ2019-02-14.jpg', 'jpg', 'fichier/Portes Ouvertes Lycée EJ2019-02-14.jpg', 26304),
(59, 35, 'Portes Ouvertes Lycée EJ2019-02-14.pdf', 'pdf', 'fichier/Portes Ouvertes Lycée EJ2019-02-14.pdf', 571060),
(60, 36, 'Lycée Eugène Jamot2019-02-15.pdf', 'pdf', 'fichier/Lycée Eugène Jamot2019-02-15.pdf', 493775),
(61, 36, 'lycee Eugene Jamot2019-02-15.jpg', 'jpg', 'fichier/lycee Eugene Jamot2019-02-15.jpg', 43497),
(62, 32, 'Internat et MDL2019-02-15.pdf', 'pdf', 'fichier/Internat et MDL2019-02-15.pdf', 440764),
(63, 37, 'college Eugene Jamot2019-02-15.pdf', 'pdf', 'fichier/college Eugene Jamot2019-02-15.pdf', 4004503),
(64, 37, 'college_EJ2019-02-15.jpg', 'jpg', 'fichier/college_EJ2019-02-15.jpg', 56648),
(65, 38, 'Lycee_JJ2019-02-15.jpg', 'jpg', 'fichier/Lycee_JJ2019-02-15.jpg', 56788),
(66, 38, 'Lycee Jean Jaures2019-02-15.pdf', 'pdf', 'fichier/Lycee Jean Jaures2019-02-15.pdf', 1070833),
(73, 60, '20200225-133501-Plan comptable.txt', '.txt', 'fichier/20200225-133501-Plan comptable.txt', 33),
(74, 60, '20200225-133501-alert.php', '.php', 'fichier/20200225-133501-alert.php', 513),
(75, 60, '20200225-133501-type.php', '.php', 'fichier/20200225-133501-type.php', 1880),
(76, 60, '20200225-133501-', '', 'fichier/20200225-133501-', 0),
(77, 61, '20200225-134345-Plan comptable.txt', '.txt', 'fichier/20200225-134345-Plan comptable.txt', 33),
(78, 61, '20200225-134345-alert.php', '.php', 'fichier/20200225-134345-alert.php', 513),
(79, 61, '20200225-134345-type.php', '.php', 'fichier/20200225-134345-type.php', 1880),
(80, 73, '20210115-140845-CHAT2019-02-14.jpg', '.jpg', 'fichier/20210115-140845-CHAT2019-02-14.jpg', 16579),
(81, 74, '20210115-141939-ULIS2019-02-14.jpg', '.jpg', 'fichier/20210115-141939-ULIS2019-02-14.jpg', 18251),
(88, 78, '20210120-161317-20210115-95511-accueil.png', '.png', 'fichier/20210120-161317-20210115-95511-accueil.png', 619063),
(89, 78, '20210120-161317-basket2019-02-14.jpg', '.jpg', 'fichier/20210120-161317-basket2019-02-14.jpg', 19478),
(90, 78, '20210120-161317-mickey.jpg', '.jpg', 'fichier/20210120-161317-mickey.jpg', 244533),
(91, 78, '20210120-161317-PC2019-02-14.jpg', '.jpg', 'fichier/20210120-161317-PC2019-02-14.jpg', 817899),
(92, 87, '20210122-90958-20210113-150457-accueil.png', '.png', 'fichier/20210122-90958-20210113-150457-accueil.png', 619063),
(93, 87, '20210122-92619-20210114-90736-accueil.png', '.png', 'fichier/20210122-92619-20210114-90736-accueil.png', 619063),
(94, 87, '20210122-92619-Internat2019-02-14.jpg', '.jpg', 'fichier/20210122-92619-Internat2019-02-14.jpg', 0),
(95, 87, '20210122-92851-20210114-90736-accueil.png', '.png', 'fichier/20210122-92851-20210114-90736-accueil.png', 619063),
(96, 87, '20210122-92851-PC2019-02-14.jpg', '.jpg', 'fichier/20210122-92851-PC2019-02-14.jpg', 817899),
(97, 87, '20210122-92851-mickey.jpg', '.jpg', 'fichier/20210122-92851-mickey.jpg', 244533),
(98, 87, '20210122-92941-20210114-90736-accueil.png', '.png', 'fichier/20210122-92941-20210114-90736-accueil.png', 619063),
(99, 87, '20210122-92941-PC2019-02-14.jpg', '.jpg', 'fichier/20210122-92941-PC2019-02-14.jpg', 817899),
(100, 87, '20210122-92941-mickey.jpg', '.jpg', 'fichier/20210122-92941-mickey.jpg', 244533),
(101, 87, '20210122-145341-20210114-90736-accueil.png', '.png', 'fichier/20210122-145341-20210114-90736-accueil.png', 619063),
(102, 87, '20210122-145341-20210113-142223-accueil.png', '.png', 'fichier/20210122-145341-20210113-142223-accueil.png', 619063),
(103, 87, '20210122-145341-20210114-151503-connn.png', '.png', 'fichier/20210122-145341-20210114-151503-connn.png', 23721),
(104, 87, '20210124-220530-20210113-142223-accueil.png', '.png', 'fichier/20210124-220530-20210113-142223-accueil.png', 619063),
(105, 87, '20210124-220530-20210122-92941-mickey.jpg', '.jpg', 'fichier/20210124-220530-20210122-92941-mickey.jpg', 244533),
(106, 87, '20210124-220530-theatre_spe2019-02-14.jpg', '.jpg', 'fichier/20210124-220530-theatre_spe2019-02-14.jpg', 0),
(107, 87, '20210124-220530-CHAM2019-02-14.jpg', '.jpg', 'fichier/20210124-220530-CHAM2019-02-14.jpg', 18933);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `IDT` int(11) NOT NULL AUTO_INCREMENT,
  `TYPE` text NOT NULL,
  PRIMARY KEY (`IDT`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`IDT`, `TYPE`) VALUES
(1, 'formation'),
(2, 'internat'),
(3, 'self'),
(4, 'bourses'),
(5, 'actu');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `IDU` int(11) NOT NULL AUTO_INCREMENT,
  `ETABU` int(2) NOT NULL,
  `NOMU` char(100) NOT NULL,
  `PRENOMU` char(100) NOT NULL,
  `MAILU` char(200) NOT NULL,
  `MDPU` char(200) NOT NULL,
  PRIMARY KEY (`IDU`),
  KEY `FK_ETAB_UTIL` (`ETABU`),
  KEY `FK_ASSOCIE_UTIL` (`IDU`),
  KEY `FK_POSSEDE_UTIL` (`IDU`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IDU`, `ETABU`, `NOMU`, `PRENOMU`, `MAILU`, `MDPU`) VALUES
(1, 4, 'administrateur', 'administrateur', 'administrateur@citeScolaire.fr', '$2y$10$D.FTv2py7bEXU//C8hYh6OHNRsWDvdrPrzkwyNsRQWJxsoxCwXqBm'),
(2, 1, 'Collège', 'EJ', 'college.ej@citescolaire.com', 'cariboucej'),
(3, 2, 'lycee', 'ej', 'lycee.ej@citescolaire.com', 'cariboulej'),
(4, 3, 'lycee', 'jj', 'lycee.jj@citescolaire.com', 'caribouljj'),
(5, 4, 'cite', 'scolaire', 'cite.scolaire@citescolaire.com', 'cariboucs');

-- --------------------------------------------------------

--
-- Structure de la table `voie`
--

DROP TABLE IF EXISTS `voie`;
CREATE TABLE IF NOT EXISTS `voie` (
  `IDV` int(11) NOT NULL AUTO_INCREMENT,
  `VOIE` char(100) DEFAULT NULL,
  PRIMARY KEY (`IDV`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `voie`
--

INSERT INTO `voie` (`IDV`, `VOIE`) VALUES
(1, 'technologique_lyceeEJ'),
(2, 'formation_seconde_lyceeEJ'),
(3, 'option_seconde_lyceeEJ'),
(4, 'option_general_lyceeEJ'),
(5, 'specialite_general_lyceeEJ'),
(6, 'superieur_lyceeEJ'),
(7, 'formation_collegeEJ'),
(8, 'option_collegeEJ'),
(9, 'cap_lyceeJJ'),
(10, 'bacPro_lyceeJJ'),
(11, 'option_lyceeJJ'),
(12, 'internat'),
(13, 'self'),
(14, 'bourses_aides'),
(15, 'portes_ouvertes_lyceeEJ'),
(16, 'lycee_EJ'),
(17, '');

-- --------------------------------------------------------

--
-- Structure de la table `associe`
--
CREATE TABLE IF NOT EXISTS `associe`
  (
    `IDU` int(11) NOT NULL,
    `IDE` int(2) NOT NULL,
    PRIMARY KEY (`IDU`,`IDE`)
  );
  
--
-- Déchargement des données de la table `associe`
--

INSERT INTO `associe` (`IDU`, `IDE`) VALUES
(1, 4),
(2, 1),
(3, 2),
(4, 3),
(5, 4);

-- --------------------------------------------------------

--
-- Structure de la table `possede`
--
CREATE TABLE IF NOT EXISTS `possede`
  (
    `IDU` int(11) NOT NULL,
    `IDE` int(2) NOT NULL,
    PRIMARY KEY (`IDU`,`IDE`)
  );

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_ARTICLE_ETABLISSEMENT` FOREIGN KEY (`ETABA`) REFERENCES `etablissement` (`IDE`),
  ADD CONSTRAINT `FK_ARTICLE_TYPE` FOREIGN KEY (`TYPEA`) REFERENCES `type` (`IDT`),
  ADD CONSTRAINT `FK_ARTICLE_UTIL` FOREIGN KEY (`UTILA`) REFERENCES `utilisateur` (`IDU`),
  ADD CONSTRAINT `FK_ARTICLE_VOIE` FOREIGN KEY (`VOIEA`) REFERENCES `voie` (`IDV`);

--
/*-- Contraintes pour la table `etablissement`
--
ALTER TABLE `etablissement`
  ADD CONSTRAINT `FK_ASSOCIE_ETAB` FOREIGN KEY (`IDE`) REFERENCES `associe`(`IDE`),
  ADD CONSTRAINT `FK_POSSEDE_ETAB` FOREIGN KEY (`IDE`) REFERENCES `possede` (`IDE`);
--*/
-- Contraintes pour la table `ressource`
--
ALTER TABLE `ressource`
  ADD CONSTRAINT `FK_RESSOURCE_ARTICLE` FOREIGN KEY (`ARTICLER`) REFERENCES `article` (`IDA`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `FK_ETAB_UTIL` FOREIGN KEY (`ETABU`) REFERENCES `etablissement` (`IDE`);
 /* ADD CONSTRAINT `FK_ASSOCIE_UTIL` FOREIGN KEY (`IDU`) REFERENCES `associe` (`IDU`),
  ADD CONSTRAINT `FK_POSSEDE_UTIL` FOREIGN KEY (`IDU`) REFERENCES `possede` (`IDU`);*/
--
-- Contraintes pour la table `associe`
--
ALTER TABLE `associe`
  ADD CONSTRAINT `FK_ASSOCIE_UTIL` FOREIGN KEY (`IDU`) REFERENCES `utilisateur` (`IDU`),
  ADD CONSTRAINT `FK_ASSOCIE_ETAB` FOREIGN KEY (`IDE`) REFERENCES `etablissement` (`IDE`);
--
-- Contraintes pour la table `possede`
--
ALTER TABLE `possede`
  ADD CONSTRAINT `FK_POSSEDE_UTIL` FOREIGN KEY (`IDU`) REFERENCES `utilisateur` (`IDU`),
  ADD CONSTRAINT `FK_POSSEDE_ETAB` FOREIGN KEY (`IDE`) REFERENCES `etablissement` (`IDE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
