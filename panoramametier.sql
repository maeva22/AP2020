-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/


DROP TABLE IF EXISTS `internaute`;
CREATE TABLE IF NOT EXISTS `internaute` (
  `ID_UT` int(11) NOT NULL AUTO_INCREMENT,
  `COURRIEL_UT` varchar(50) NOT NULL,
  `MDP_UT` varchar(100) NOT NULL,
  `STATUS_UT` char(1) NOT NULL DEFAULT 'C' ,
  PRIMARY KEY (`ID_UT`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `internaute` (`COURRIEL_UT`, `MDP_UT`,`STATUS_UT`) VALUES
('alfred.pignon@gmail.com', 'Bulbes', 'a'),
('abignon.ledantec@gmail.com', 'Plantes à massif','c'),
('lguibout.ledantec@gmail.com', 'arbres','c');


DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `ID_CAT` int(11) NOT NULL AUTO_INCREMENT,
  `LIBELLE_CATEG` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_CAT`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`LIBELLE_CATEG`) VALUES
('reseau'),
('developpement'), 
('cybersécurité'),
('jeux video');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS  `article`(
  `ID_ART` int(11) NOT NULL AUTO_INCREMENT,
  `TITRE_ART` varchar(60) NOT NULL,
  `DESCR_ART` varchar(240) NOT NULL,
  `SALAIRE_ART` int(5) DEFAULT 0,
  `DATE_PROP_ART` date  NOT NULL,
  `DATE_DERNIER_TT_ART` date,
  `DATE_ACCORD_ART` date,
  `ID_CONT` int(5) NOT NULL,
  `ID_CAT` int(5) NOT NULL,
  `STATUS_ART` char(1) DEFAULT 'P',
  PRIMARY KEY (`ID_ART`),
  FOREIGN KEY (ID_CONT) REFERENCES internaute(ID_UT),
  FOREIGN KEY (ID_CAT) REFERENCES categorie(ID_CATEG)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `article` (`TITRE_ART`, `DESCR_ART`, `SALAIRE_ART`, `DATE_PROP_ART`, `DATE_DERNIER_TT_ART`, `DATE_ACCORD_ART`,`ID_CONT`,`ID_CAT`,`STATUS_ART`) VALUES
('Professeur Informatique', 'Enseignement des bases de l\'informatique jusqu\'aux notions les plus avancées',  1000, '2010-12-30','2011-01-30','2012-01-01',2,4,'R'),
('développeur fou', 'Il code, codait codera',10000, '2012-10-30','2012-11-03','2012-12-01',3,2,'D'),
('devsecopps', 'Tous vos sites du sol au plafond : le contenu , la structure , l\'hénéregement et la sécurité. Il fait absolument tout',5000, '2020-10-30',NULL,NULL,3,3,'P'),
('Référenceur', 'Sans son intervention, pas de visites sur le site et les ventes stagnent', 2000, '2020-09-30',NULL,NULL,3,2,'P'),
('Directeur si', 'Cheef between the chief ! Au firmament de l\'organigramme. Après des années d\'expériences, une somme colossale de projets, des études de dinguers, et le massacre de tous ses concurrents. Il s\'est taillé la part du lion', 20000, '2020-09-09',NULL,NULL,3,4,'P'),
('Data analyst', 'il fait parler les chiffres. Le poètes du tableau de bord,le chercheur de corrélation à tout crin', 30000, '2020-07-31',NULL,NULL,2,1,'P'),
('développeur android', 'sans lui pas d\'appli google sur vos bijoux de petits mobiles ', 10000, '2020-06-06',NULL,NULL,2,2,'P');

