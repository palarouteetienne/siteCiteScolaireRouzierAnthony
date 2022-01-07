-- phpMyAdmin SQL Dump
-- version OVH
-- https://www.phpmyadmin.net/
--
-- Hôte : jqdnjtrto.mysql.db
-- Généré le : ven. 07 jan. 2022 à 17:58
-- Version du serveur : 5.6.50-log
-- Version de PHP : 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jqdnjtrto`
--
CREATE DATABASE IF NOT EXISTS `jqdnjtrto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jqdnjtrto`;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `IDA` int(11) NOT NULL,
  `ETABA` int(2) NOT NULL,
  `UTILA` int(2) DEFAULT NULL,
  `TITREA` varchar(100) NOT NULL,
  `VOIEA` int(11) DEFAULT NULL,
  `COMMENTAIREA` text,
  `TYPEA` int(11) NOT NULL,
  `DATEDEBR` date DEFAULT NULL,
  `DATEFINR` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`IDA`, `ETABA`, `UTILA`, `TITREA`, `VOIEA`, `COMMENTAIREA`, `TYPEA`, `DATEDEBR`, `DATEFINR`) VALUES
(1, 2, 11, 'S.T.M.G', 1, 'Sciences et Technologies du Management et de la Gestion', 1, '0000-00-00', '0000-00-00'),
(2, 2, 11, 'Seconde', 2, 'Seconde générale', 1, '0000-00-00', '0000-00-00'),
(3, 2, 11, 'Arts seconde', 3, 'Arts Plastiques', 1, '0000-00-00', '0000-00-00'),
(4, 2, 11, 'T.E.D seconde', 3, 'Théâtre Expression Dramatique', 1, '0000-00-00', '0000-00-00'),
(5, 2, 11, 'M.G seconde', 3, 'Management et Gestion', 1, '0000-00-00', '0000-00-00'),
(6, 2, 11, 'Arts', 4, 'Arts Plastiques', 1, '0000-00-00', '0000-00-00'),
(7, 2, 11, 'T.E.D', 4, 'Théâtre Expression Dramatique', 1, '0000-00-00', '0000-00-00'),
(8, 2, 11, 'Langue Vivante', 4, 'Anglais Euro', 1, '0000-00-00', '0000-00-00'),
(9, 2, 11, 'Théâtre', 5, 'Expression Théâtrale', 1, '0000-00-00', '0000-00-00'),
(10, 2, 11, 'H.G.G.S.P', 5, 'Histoire-géographie, géopolitique et sciences politiques', 1, '0000-00-00', '0000-00-00'),
(11, 2, 11, 'H.L.P', 5, 'Humanités, littérature et philosophie', 1, '0000-00-00', '0000-00-00'),
(12, 2, 11, 'L.L.C.E.A', 5, 'Langues, littératures et cultures étrangères - anglais', 1, '0000-00-00', '0000-00-00'),
(13, 2, 11, 'Mathématiques', 5, 'Scientifiques et Economiques', 1, '0000-00-00', '0000-00-00'),
(14, 2, 11, 'Physique-Chimie', 5, 'Scientifiques', 1, '0000-00-00', '0000-00-00'),
(15, 2, 11, 'S.V.T', 5, 'Sciences de la Vie et de la Terre', 1, '0000-00-00', '0000-00-00'),
(16, 2, 11, 'S.E.S', 5, 'Sciences économiques et sociales', 1, '0000-00-00', '0000-00-00'),
(17, 2, 11, 'BTS S.I.O', 6, '<p>Services Informatiques aux Organisations</p>', 1, '0000-00-00', '0000-00-00'),
(18, 2, 11, 'Latin seconde', 3, 'Langues et Cultures Antiquité', 1, '0000-00-00', '0000-00-00'),
(19, 2, 11, 'Latin', 4, 'Langues et Cultures Antiquité', 1, '0000-00-00', '0000-00-00'),
(20, 1, 11, 'S.E.G.P.A', 7, 'Sections d’Enseignement Général et Professionnel Adapté', 1, '0000-00-00', '0000-00-00'),
(21, 1, 11, 'U.L.I.S', 7, 'Unités Localisées pour Inclusion Scolaire', 1, '0000-00-00', '0000-00-00'),
(22, 1, 11, 'C.H.A.T', 8, 'Classe à Horaires Aménagés Théâtre', 1, '0000-00-00', '0000-00-00'),
(23, 1, 11, 'C.H.A.M', 8, 'Classe à Horaires Aménagés Musique', 1, '0000-00-00', '0000-00-00'),
(24, 1, 11, 'Bilangue', 8, 'Langues vivantes 2 (Espagnol, Allemand, Italien)', 1, '0000-00-00', '0000-00-00'),
(25, 1, 11, 'Basketball', 8, 'Section Sportive', 1, '0000-00-00', '0000-00-00'),
(26, 1, 11, 'Athlétisme', 8, 'Section Sportive', 1, '2020-11-02', '2021-11-02'),
(27, 3, 11, 'CAP E.C.M.S', 9, 'Employé de Commerce Multi-Spécialités', 1, '0000-00-00', '0000-00-00'),
(28, 3, 11, 'Bac Pro C&V', 10, 'Bac Professionnel Commerce et Vente', 1, '0000-00-00', '0000-00-00'),
(29, 3, 11, 'CAP A.T.M.F.C', 9, 'Assistant Technique en Milieux Familial et Collectif', 1, '0000-00-00', '0000-00-00'),
(30, 3, 11, 'Cross-Fitness', 11, 'Section Sportive', 1, '0000-00-00', '0000-00-00'),
(32, 4, 11, 'Internat', 12, 'Hébergement', 2, '0000-00-00', '0000-00-00'),
(33, 4, 11, 'Restauration', 13, 'Petit-déjeuners, déjeuners et soupers', 3, '0000-00-00', '0000-00-00'),
(34, 4, 11, 'Bourses Aides', 14, 'Bourses & Aides', 4, '0000-00-00', '0000-00-00'),
(36, 2, 11, 'information_lyceeEJ', 16, 'Informations Pratiques', 6, '0000-00-00', '0000-00-00'),
(37, 1, 11, 'information_collegeEJ', 17, 'Informations Pratiques', 6, '0000-00-00', '0000-00-00'),
(38, 3, 11, 'information_lyceeJJ', 17, 'Informations Pratiques', 6, '0000-00-00', '0000-00-00'),
(41, 4, 8, 'Site en constuction', 18, '<p>Le site est en re-construction. Veuillez nous en excuser.</p>\r\n<p>Vous pouvez n&eacute;anmoins trouver les informations les plus importantes sur ces pages.</p>\r\n<p>A bient&ocirc;t !</p>', 6, '0000-00-00', '0000-00-00'),
(45, 4, 8, 'La Cité Scolaire ouvre ses portes !', 18, '', 5, '2021-12-20', '2022-01-13');

-- --------------------------------------------------------

--
-- Structure de la table `associe`
--

CREATE TABLE `associe` (
  `IDU` int(11) NOT NULL,
  `IDE` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `associe`
--

INSERT INTO `associe` (`IDU`, `IDE`) VALUES
(8, 1),
(10, 1),
(11, 1),
(8, 2),
(9, 2),
(11, 2),
(8, 3),
(11, 3),
(8, 4),
(11, 4);

-- --------------------------------------------------------

--
-- Structure de la table `etablissement`
--

CREATE TABLE `etablissement` (
  `IDE` int(2) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `RUEE` char(100) NOT NULL,
  `CODEPOSTALE` char(5) NOT NULL,
  `VILLEE` varchar(100) NOT NULL,
  `TELEPHONEE` varchar(10) NOT NULL,
  `EMAILE` char(150) NOT NULL,
  `MOTPROVISEUR` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etablissement`
--

INSERT INTO `etablissement` (`IDE`, `NOME`, `RUEE`, `CODEPOSTALE`, `VILLEE`, `TELEPHONEE`, `EMAILE`, `MOTPROVISEUR`) VALUES
(1, 'collège Eugène Jamot', '1, Rue Williams Dumazet', '23200', 'Aubusson', '0555677280', 'ce.0230002c@ac-limoges.fr', 'Bienvenue au collège Eugène Jamot. Vous trouverez ici les formations de la 6ème à la 3ème ainsi que toutes les options pouvant être choisies dans cet établissement.'),
(2, 'lycée Eugène Jamot', '1, Rue Williams Dumazet', '23200', 'Aubusson', '0555677280', 'ce.0230002c@ac-limoges.fr', 'Bienvenue au lycée Eugène Jamot. Vous trouverez ici les formations de la 2nde au BTS SIO.'),
(3, 'lycée Jean Jaurès', '38, rue Jean Jaurès', '23200', 'Aubusson', '0555677360', 'ce.0230003d@ac-limoges.fr', 'Bienvenue au lycée Jean Jaurès. Vous trouverez ici les formations professionnelles de cet établissement.'),
(4, 'cité Scolaire', '1, Rue Williams Dumazet', '23200', 'Aubusson', '0555677280', 'ce.0230002c@ac-limoges.fr', 'Bienvenue sur le site de la cité scolaire Aubusson.');

-- --------------------------------------------------------

--
-- Structure de la table `possede`
--

CREATE TABLE `possede` (
  `IDU` int(11) NOT NULL,
  `IDE` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ressource`
--

CREATE TABLE `ressource` (
  `IDR` int(11) NOT NULL,
  `ARTICLER` int(11) NOT NULL,
  `NOMR` varchar(200) NOT NULL,
  `FORMATR` varchar(100) NOT NULL,
  `CHEMINR` varchar(200) NOT NULL,
  `POIDSR` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(57, 33, 'Restauration2019-02-14.pdf', 'pdf', 'fichier/Restauration2019-02-14.pdf', 44850),
(60, 36, 'Lycée Eugène Jamot2019-02-15.pdf', 'pdf', 'fichier/Lycée Eugène Jamot2019-02-15.pdf', 493775),
(61, 36, 'lycee Eugene Jamot2019-02-15.jpg', 'jpg', 'fichier/lycee Eugene Jamot2019-02-15.jpg', 43497),
(62, 32, 'Internat et MDL2019-02-15.pdf', 'pdf', 'fichier/Internat et MDL2019-02-15.pdf', 440764),
(63, 37, 'college Eugene Jamot2019-02-15.pdf', 'pdf', 'fichier/college Eugene Jamot2019-02-15.pdf', 4004503),
(64, 37, 'college_EJ2019-02-15.jpg', 'jpg', 'fichier/college_EJ2019-02-15.jpg', 56648),
(65, 38, 'Lycee_JJ2019-02-15.jpg', 'jpg', 'fichier/Lycee_JJ2019-02-15.jpg', 56788),
(66, 38, 'Lycee Jean Jaures2019-02-15.pdf', 'pdf', 'fichier/Lycee Jean Jaures2019-02-15.pdf', 1070833),
(67, 17, 'Dépliant BTS IG cartouche.pdf', 'pdf', 'fichier/Dépliant BTS IG cartouche.pdf', 370527),
(68, 17, 'Dépliant BTS IG cartouche2.pdf', 'pdf', 'fichier/Dépliant BTS IG cartouche2.pdf', 284941),
(69, 45, 'JPO Jamot 2022.jpg', 'jpg', 'fichier/JPO Jamot 2022.jpg', 134915),
(70, 45, 'JPO Jaures 2022.jpg', 'jpg', 'fichier/JPO Jaures 2022.jpg', 116871);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `IDT` int(11) NOT NULL,
  `TYPE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`IDT`, `TYPE`) VALUES
(1, 'formation'),
(2, 'internat'),
(3, 'self'),
(4, 'bourses'),
(5, 'actu'),
(6, 'information'),
(7, 'inscription');

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
(8, 'Dubois', 'Sonia', 'sonia.dubois@ac-limoges.fr', '$2y$10$SnafiDUFd3a2R9oq3aYCueLyubEk4S4evmzGX5UUsCL/6uddMgnda', 1),
(9, 'Raia', 'Hervé', 'herve.raia@ac-limoges.fr', '$2y$10$ZgX1OE3Ph/vffD2f6LDbAOEwEU3hBrsQenl4MvoL7/VmLgEkWMaWW', 0),
(10, 'Gibouret', 'Thierry', 'thierry.gibouret@ac-limoges.fr', '$2y$10$vGS8mm5zSezVqxJPv3Bpg.aKoIplXUFL.2X9vjmM4QWaHbJr6XJIS', 0),
(11, 'Admin', 'Admin', 'thierry.rouzier@ac-limoges.fr', '$2y$10$kjWc0rte7gV78cYfFNCK../KNL2bGU4nWks3EhVDZEfJwx8OKw5DC', 1);

-- --------------------------------------------------------

--
-- Structure de la table `voie`
--

CREATE TABLE `voie` (
  `IDV` int(11) NOT NULL,
  `VOIE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(17, 'Informations Pratiques'),
(18, 'Information générale');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`IDA`),
  ADD KEY `FK_ARTICLE_ETABLISSEMENT` (`ETABA`),
  ADD KEY `FK_ARTICLE_UTIL` (`UTILA`),
  ADD KEY `FK_ARTICLE_VOIE` (`VOIEA`),
  ADD KEY `FK_ARTICLE_TYPE` (`TYPEA`);

--
-- Index pour la table `associe`
--
ALTER TABLE `associe`
  ADD PRIMARY KEY (`IDU`,`IDE`),
  ADD KEY `FK_ASSOCIE_ETAB` (`IDE`);

--
-- Index pour la table `etablissement`
--
ALTER TABLE `etablissement`
  ADD PRIMARY KEY (`IDE`),
  ADD KEY `FK_ASSOCIE_ETAB` (`IDE`),
  ADD KEY `FK_POSSEDE_ETAB` (`IDE`);

--
-- Index pour la table `possede`
--
ALTER TABLE `possede`
  ADD PRIMARY KEY (`IDU`,`IDE`),
  ADD KEY `FK_POSSEDE_ETAB` (`IDE`);

--
-- Index pour la table `ressource`
--
ALTER TABLE `ressource`
  ADD PRIMARY KEY (`IDR`),
  ADD KEY `FK_RESSOURCE_ARTICLE` (`ARTICLER`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`IDT`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`IDU`),
  ADD KEY `FK_ASSOCIE_UTIL` (`IDU`),
  ADD KEY `FK_POSSEDE_UTIL` (`IDU`);

--
-- Index pour la table `voie`
--
ALTER TABLE `voie`
  ADD PRIMARY KEY (`IDV`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `IDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `etablissement`
--
ALTER TABLE `etablissement`
  MODIFY `IDE` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `ressource`
--
ALTER TABLE `ressource`
  MODIFY `IDR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `IDT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `IDU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `voie`
--
ALTER TABLE `voie`
  MODIFY `IDV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
-- Contraintes pour la table `associe`
--
ALTER TABLE `associe`
  ADD CONSTRAINT `FK_ASSOCIE_ETAB` FOREIGN KEY (`IDE`) REFERENCES `etablissement` (`IDE`),
  ADD CONSTRAINT `FK_ASSOCIE_UTIL` FOREIGN KEY (`IDU`) REFERENCES `utilisateur` (`IDU`);

--
-- Contraintes pour la table `possede`
--
ALTER TABLE `possede`
  ADD CONSTRAINT `FK_POSSEDE_ETAB` FOREIGN KEY (`IDE`) REFERENCES `etablissement` (`IDE`),
  ADD CONSTRAINT `FK_POSSEDE_UTIL` FOREIGN KEY (`IDU`) REFERENCES `utilisateur` (`IDU`);

--
-- Contraintes pour la table `ressource`
--
ALTER TABLE `ressource`
  ADD CONSTRAINT `FK_RESSOURCE_ARTICLE` FOREIGN KEY (`ARTICLER`) REFERENCES `article` (`IDA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
