-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 10:04 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citescolaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `etablissement`
--

CREATE TABLE `etablissement` (
  `IDE` int(2) NOT NULL,
  `NOME` char(100) NOT NULL,
  `RUEE` char(100) NOT NULL,
  `CODEPOSTALE` char(5) NOT NULL,
  `VILLEE` char(100) NOT NULL,
  `TELEPHONEE` int(10) NOT NULL,
  `EMAILE` char(150) NOT NULL,
  `MOTPROVISEUR` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etablissement`
--

INSERT INTO `etablissement` (`IDE`, `NOME`, `RUEE`, `CODEPOSTALE`, `VILLEE`, `TELEPHONEE`, `EMAILE`, `MOTPROVISEUR`) VALUES
(1, 'collège Eugène Jamot', '1 Rue Williams Dumazet', '23200', 'Aubusson', 555677280, 'ce.0230002c@ac-limoges.fr', 'Bienvenue au collège Eugène Jamot. Vous aller voir les formations de la 6ème à la 3ème ainsi que toutes les options pouvant être prisent dans cet établissement.'),
(2, 'lycée Eugène Jamot', '1 Rue Williams Dumazet', '23200', 'Aubusson', 555677280, 'ce.0230002c@ac-limoges.fr', 'Bienvenue au lycée Eugène Jamot. Vous aller voir les formations de la 2nd au BTS SIO.'),
(3, 'lycée Jean Jaurès', '38 rue Jean Jaurès', '23200', 'Aubusson', 555677360, 'ce.0230003d@ac-limoges.fr', 'Bienvenue au lycée Jean Jaurès. Vous aller voir les formations professionnel de cet établissement.'),
(4, 'cité Scolaire', '1 Rue Williams Dumazet', '23200', 'Aubusson', 555677280, 'ce.0230002c@ac-limoges.fr', 'Bienvenue sur le site de la cité scolaire Aubusson.');


--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `IDU` int(2) NOT NULL,
  `ETABU` int(2) NOT NULL,
  `NOMU` char(100) NOT NULL,
  `PRENOMU` char(100) NOT NULL,
  `MAILU` char(200) NOT NULL,
  `MDPU` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`IDU`, `ETABU`, `NOMU`, `PRENOMU`, `MAILU`, `MDPU`) VALUES
(1, 4, 'caribou', 'caribou', 'caribou@caribou.caribou', '$2y$10$D.FTv2py7bEXU//C8hYh6OHNRsWDvdrPrzkwyNsRQWJxsoxCwXqBm');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `IDA` int(2) NOT NULL,
  `ETABA` int(2) NOT NULL,
  `UTILA` int(2) DEFAULT NULL,
  `TITREA` char(100) NOT NULL,
  `VOIEA` char(100),
  `COMMENTAIREA` text DEFAULT NULL,
  `TYPEA` text NOT NULL,
  `DATEDEBR` date NULL,
  `DATEFINR` date NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`IDA`, `ETABA`, `UTILA`, `TITREA`, `VOIEA`, `COMMENTAIREA`, `TYPEA`, `DATEDEBR`, `DATEFINR`) VALUES
(1, 2, 1, 'S.T.M.G', 'technologique_lyceeEJ', 'Sciences et Technologies du Management et de la Gestion', 'formation', '0000-00-00', '0000-00-00'),
(2, 2, 1, 'Seconde', 'formation_seconde_lyceeEJ', 'Seconde générale', 'formation', '0000-00-00', '0000-00-00'),
(3, 2, 1, 'Arts seconde', 'option_seconde_lyceeEJ', 'Arts Plastiques', 'formation', '0000-00-00', '0000-00-00'),
(4, 2, 1, 'T.E.D seconde', 'option_seconde_lyceeEJ', 'Théâtre Expression Dramatique', 'formation', '0000-00-00', '0000-00-00'),
(5, 2, 1, 'M.G seconde', 'option_seconde_lyceeEJ', 'Management et Gestion', 'formation', '0000-00-00', '0000-00-00'),
(6, 2, 1, 'Arts', 'option_general_lyceeEJ', 'Arts Plastiques', 'formation', '0000-00-00', '0000-00-00'),
(7, 2, 1, 'T.E.D', 'option_general_lyceeEJ', 'Théâtre Expression Dramatique', 'formation', '0000-00-00', '0000-00-00'),
(8, 2, 1, 'Langue Vivante', 'option_general_lyceeEJ', 'Anglais Euro', 'formation', '0000-00-00', '0000-00-00'),
(9, 2, 1, 'Théâtre', 'specialite_general_lyceeEJ', 'Expression Théâtrale', 'formation', '0000-00-00', '0000-00-00'),
(10, 2, 1, 'H.G.G.S.P', 'specialite_general_lyceeEJ', 'Histoire-géographie, géopolitique et sciences politiques', 'formation', '0000-00-00', '0000-00-00'),
(11, 2, 1, 'H.L.P', 'specialite_general_lyceeEJ', 'Humanités, littérature et philosophie', 'formation', '0000-00-00', '0000-00-00'),
(12, 2, 1, 'L.L.C.E.A', 'specialite_general_lyceeEJ', 'Langues, littératures et cultures étrangères - anglais', 'formation', '0000-00-00', '0000-00-00'),
(13, 2, 1, 'Mathématiques', 'specialite_general_lyceeEJ', 'Scientifiques et Economiques', 'formation', '0000-00-00', '0000-00-00'),
(14, 2, 1, 'Physique-Chimie', 'specialite_general_lyceeEJ', 'Scientifiques', 'formation', '0000-00-00', '0000-00-00'),
(15, 2, 1, 'S.V.T', 'specialite_general_lyceeEJ', 'Sciences de la Vie et de la Terre', 'formation', '0000-00-00', '0000-00-00'),
(16, 2, 1, 'S.E.S', 'specialite_general_lyceeEJ', 'Sciences économiques et sociales', 'formation', '0000-00-00', '0000-00-00'),
(17, 2, 1, 'BTS S.I.O', 'superieur_lyceeEJ', 'Services Informatiques aux Organisations', 'formation', '0000-00-00', '0000-00-00'),
(18, 2, 1, 'Latin seconde', 'option_seconde_lyceeEJ', 'Langues et Cultures Antiquité', 'formation', '0000-00-00', '0000-00-00'),
(19, 2, 1, 'Latin', 'option_general_lyceeEJ', 'Langues et Cultures Antiquité', 'formation', '0000-00-00', '0000-00-00'),
(20, 1, 1, 'S.E.G.P.A', 'formation_collegeEJ', 'Sections d’Enseignement Général et Professionnel Adapté', 'formation', '0000-00-00', '0000-00-00'),
(21, 1, 1, 'U.L.I.S', 'formation_collegeEJ', 'Unités Localisées pour Inclusion Scolaire', 'formation', '0000-00-00', '0000-00-00'),
(22, 1, 1, 'C.H.A.T', 'option_collegeEJ', 'Classe à Horaires Aménagés Théâtre', 'formation', '0000-00-00', '0000-00-00'),
(23, 1, 1, 'C.H.A.M', 'option_collegeEJ', 'Classe à Horaires Aménagés Musique', 'formation', '0000-00-00', '0000-00-00'),
(24, 1, 1, 'Bilangue', 'option_collegeEJ', 'Langues vivantes 2 (Espagnol, Allemand, Italien)', 'formation', '0000-00-00', '0000-00-00'),
(25, 1, 1, 'Basketball', 'option_collegeEJ', 'Section Sportive', 'formation', '0000-00-00', '0000-00-00'),
(26, 1, 1, 'Athlétisme', 'option_collegeEJ', 'Section Sportive', 'formation', '0000-00-00', '0000-00-00'),
(27, 3, 1, 'CAP E.C.M.S', 'cap_lyceeJJ', 'Employé de Commerce Multi-Spécialités', 'formation', '0000-00-00', '0000-00-00'),
(28, 3, 1, 'Bac Pro C&V', 'bacPro_lyceeJJ', 'Bac Professionnel Commerce et Vente', 'formation', '0000-00-00', '0000-00-00'),
(29, 3, 1, 'CAP A.T.M.F.C', 'cap_lyceeJJ', 'Assistant Technique en Milieux Familial et Collectif', 'formation', '0000-00-00', '0000-00-00'),
(30, 3, 1, 'Cross-Fitness', 'option_lyceeJJ', 'Section Sportive', 'formation', '0000-00-00', '0000-00-00'),
(32, 4, 1, 'Internat', 'internat', 'Hébergement', 'internat', '0000-00-00', '0000-00-00'),
(33, 4, 1, 'Restauration', 'self', 'Petit-déjeuners, déjeuners et soupers', 'self', '0000-00-00', '0000-00-00'),
(34, 4, 1, 'Bourses Aides', 'bourses_aides', 'Bourses & Aides', 'bourses', '0000-00-00', '0000-00-00'),
(35, 4, 1, 'Portes Ouvertes Lycée EJ', 'portes_ouvertes_lyceeEJ', 'Visiter', 'actu', '0000-00-00', '0000-00-00'),
(36, 2, 1, 'information_lyceeEJ', 'lycee_EJ', 'Informations Pratiques', 'actu', '0000-00-00', '0000-00-00'),
(37, 1, 1, 'information_collegeEJ', '', 'Informations Pratiques', 'actu', '0000-00-00', '0000-00-00'),
(38, 3, 1, 'information_lyceeJJ', '', 'Informations Pratiques', 'actu', '0000-00-00', '0000-00-00'),
(39, 1, 1, 'portes_ouvertes_BTS', '', 'ceci est une actualité portes ouvertes.', 'actu', '0000-00-00', '0000-00-00'),
(40, 1, 1, 'portes_ouvertes_BTS', '', 'ceci est une actualité portes ouvertes.', 'actu', '0000-00-00', '0000-00-00');


-- --------------------------------------------------------

--
-- Table structure for table `ressource`
--

CREATE TABLE `ressource` (
  `IDR` int(3) NOT NULL,
  `ARTICLER` int(2) NOT NULL,
  `NOMR` char(200) NOT NULL,
  `FORMATR` char(100) NOT NULL,
  `CHEMINR` char(200) NOT NULL,
  `POIDSR` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ressource`
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
(66, 38, 'Lycee Jean Jaures2019-02-15.pdf', 'pdf', 'fichier/Lycee Jean Jaures2019-02-15.pdf', 1070833);

-- --------------------------------------------------------

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`IDA`),
  ADD KEY `FK_ARTICLE_ETABLISSEMENT` (`ETABA`),
  ADD KEY `FK_ARTICLE_UTIL` (`UTILA`);

--
-- Indexes for table `etablissement`
--
ALTER TABLE `etablissement`
  ADD PRIMARY KEY (`IDE`);

--
-- Indexes for table `ressource`
--
ALTER TABLE `ressource`
  ADD PRIMARY KEY (`IDR`),
  ADD KEY `FK_RESSOURCE_ARTICLE` (`ARTICLER`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`IDU`),
  ADD KEY `FK_ETAB_UTIL` (`ETABU`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_ARTICLE_ETABLISSEMENT` FOREIGN KEY (`ETABA`) REFERENCES `etablissement` (`IDE`),
  ADD CONSTRAINT `FK_ARTICLE_UTIL` FOREIGN KEY (`UTILA`) REFERENCES `utilisateur` (`IDU`);

--
-- Constraints for table `ressource`
--
ALTER TABLE `ressource`
  ADD CONSTRAINT `FK_RESSOURCE_ARTICLE` FOREIGN KEY (`ARTICLER`) REFERENCES `article` (`IDA`);

--
-- Constraints for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `FK_ETAB_UTIL` FOREIGN KEY (`ETABU`) REFERENCES `etablissement` (`IDE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
