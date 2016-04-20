-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 20 Avril 2016 à 09:34
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gestion`
--

-- --------------------------------------------------------

--
-- Structure de la table `appro`
--

CREATE TABLE IF NOT EXISTS `appro` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_fournisseur` int(3) NOT NULL,
  `date_commande` date NOT NULL,
  `type_produit` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

-- --------------------------------------------------------

--
-- Structure de la table `appro_autre`
--

CREATE TABLE IF NOT EXISTS `appro_autre` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_commande` int(10) NOT NULL,
  `id_autre` int(10) NOT NULL,
  `quantite` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `appro_composant`
--

CREATE TABLE IF NOT EXISTS `appro_composant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_commande` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `appro_identifiant`
--

CREATE TABLE IF NOT EXISTS `appro_identifiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_commande` int(10) NOT NULL,
  `id_identifiant` int(3) NOT NULL,
  `quantite` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

-- --------------------------------------------------------

--
-- Structure de la table `appro_lecteur`
--

CREATE TABLE IF NOT EXISTS `appro_lecteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_commande` int(10) NOT NULL,
  `id_lecteur` int(3) NOT NULL,
  `quantite` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Structure de la table `attente_assemblage`
--

CREATE TABLE IF NOT EXISTS `attente_assemblage` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `num_serie` varchar(8) NOT NULL,
  `id_version_nomenclature` int(3) NOT NULL,
  `id_option_fiche_descriptive` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `autre`
--

CREATE TABLE IF NOT EXISTS `autre` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `reference` varchar(150) NOT NULL,
  `designation` text NOT NULL,
  `id_fournisseur` int(10) NOT NULL,
  `quantite` int(10) NOT NULL,
  `type` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `badge_fournisseur`
--

CREATE TABLE IF NOT EXISTS `badge_fournisseur` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `reference` varchar(255) NOT NULL,
  `id_type_badge` int(3) NOT NULL,
  `id_fournisseur` int(3) NOT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Structure de la table `carte_test`
--

CREATE TABLE IF NOT EXISTS `carte_test` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `num_serie` varchar(8) NOT NULL,
  `id_lot` int(10) NOT NULL,
  `etat` tinyint(1) NOT NULL,
  `assemble` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7041 ;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `ref_compta` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `composant`
--

CREATE TABLE IF NOT EXISTS `composant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `info` text,
  `boitier` varchar(100) DEFAULT NULL,
  `stock_interne` int(11) NOT NULL,
  `stock_mini` int(11) NOT NULL,
  `id_famille` int(11) NOT NULL,
  `id_sous_famille` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `famille` (`id_famille`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Structure de la table `composant_fournisseur`
--

CREATE TABLE IF NOT EXISTS `composant_fournisseur` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `reference` varchar(250) NOT NULL,
  `prix` float NOT NULL,
  `id_composant` int(10) NOT NULL,
  `id_fournisseur` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Structure de la table `composant_nomenclature`
--

CREATE TABLE IF NOT EXISTS `composant_nomenclature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_composant` int(11) NOT NULL,
  `id_version` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `position` text,
  `option_st` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

-- --------------------------------------------------------

--
-- Structure de la table `composant_sous_traitant`
--

CREATE TABLE IF NOT EXISTS `composant_sous_traitant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sous_traitant` int(11) DEFAULT NULL,
  `id_composant` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Structure de la table `erreur_test`
--

CREATE TABLE IF NOT EXISTS `erreur_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_serie` varchar(250) NOT NULL,
  `id_etape` int(11) NOT NULL,
  `reprise` int(11) NOT NULL,
  `date_test` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `etape`
--

CREATE TABLE IF NOT EXISTS `etape` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Structure de la table `etape_nomenclature`
--

CREATE TABLE IF NOT EXISTS `etape_nomenclature` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_version_nomenclature` int(4) NOT NULL,
  `id_etape` int(4) NOT NULL,
  `ordre` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

CREATE TABLE IF NOT EXISTS `famille` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Structure de la table `fiche_descriptive`
--

CREATE TABLE IF NOT EXISTS `fiche_descriptive` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `designation` text NOT NULL,
  `frequence` int(1) NOT NULL,
  `petite` int(1) NOT NULL,
  `moyenne` int(1) NOT NULL,
  `grande` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Structure de la table `fiche_descriptive_option`
--

CREATE TABLE IF NOT EXISTS `fiche_descriptive_option` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_fiche_descriptive` int(10) NOT NULL,
  `designation` text NOT NULL,
  `type` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Structure de la table `firmware`
--

CREATE TABLE IF NOT EXISTS `firmware` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `id_nomenclature` int(3) NOT NULL,
  `commentaire` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE IF NOT EXISTS `fournisseur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `site` varchar(250) DEFAULT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Structure de la table `histo_appro`
--

CREATE TABLE IF NOT EXISTS `histo_appro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_fournisseur` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `type_produit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `date_appro` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `histo_prod`
--

CREATE TABLE IF NOT EXISTS `histo_prod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_version` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `date_prod` date NOT NULL,
  `lieu` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `histo_vente_badge`
--

CREATE TABLE IF NOT EXISTS `histo_vente_badge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `id_type_badge` int(11) DEFAULT NULL,
  `quantite` int(11) NOT NULL,
  `date_vente` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `histo_vente_lecteur`
--

CREATE TABLE IF NOT EXISTS `histo_vente_lecteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) DEFAULT NULL,
  `num_serie` varchar(100) NOT NULL,
  `id_lecteur` int(10) NOT NULL,
  `date_prod` date NOT NULL,
  `date_vente` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `lecteur`
--

CREATE TABLE IF NOT EXISTS `lecteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_serie` varchar(100) NOT NULL,
  `id_lecteur` int(11) NOT NULL,
  `id_firmware` int(4) NOT NULL,
  `date_prod` date NOT NULL,
  `date_creation` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Structure de la table `lecteur_autre`
--

CREATE TABLE IF NOT EXISTS `lecteur_autre` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `num_serie` varchar(100) NOT NULL,
  `id_lecteur_autre` int(10) NOT NULL,
  `date_ajout` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Structure de la table `lot`
--

CREATE TABLE IF NOT EXISTS `lot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_nomenclature` int(11) NOT NULL,
  `date_prod` date NOT NULL,
  `date_test` date NOT NULL,
  `id_fiche_descriptive` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

-- --------------------------------------------------------

--
-- Structure de la table `nomenclature`
--

CREATE TABLE IF NOT EXISTS `nomenclature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Structure de la table `nomenclature_fiche_descriptive`
--

CREATE TABLE IF NOT EXISTS `nomenclature_fiche_descriptive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_version_fiche_descriptive` int(4) NOT NULL,
  `id_version_nomenclature` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `nomenclature_lecteur`
--

CREATE TABLE IF NOT EXISTS `nomenclature_lecteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_serie` varchar(8) NOT NULL,
  `id_version_nomenclature` int(4) NOT NULL,
  `id_lecteur` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `option_fiche_descriptive`
--

CREATE TABLE IF NOT EXISTS `option_fiche_descriptive` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_fiche_descriptive_option` int(10) NOT NULL,
  `id_option_produit_fini` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

-- --------------------------------------------------------

--
-- Structure de la table `option_produit_fini`
--

CREATE TABLE IF NOT EXISTS `option_produit_fini` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `abreviation` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `pret`
--

CREATE TABLE IF NOT EXISTS `pret` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_serie` varchar(250) NOT NULL,
  `date_envoi` date NOT NULL,
  `etat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `production`
--

CREATE TABLE IF NOT EXISTS `production` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lieu` int(3) NOT NULL,
  `id_nomenclature` int(3) NOT NULL,
  `quantite` int(5) NOT NULL,
  `etape` int(1) NOT NULL,
  `date_prod` date NOT NULL,
  `composant_utilise` text,
  `fiche_descriptive` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lieu` (`id_lieu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=119 ;

-- --------------------------------------------------------

--
-- Structure de la table `produit_fini_nomenclature`
--

CREATE TABLE IF NOT EXISTS `produit_fini_nomenclature` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_version` int(10) NOT NULL,
  `id_composant` int(10) NOT NULL,
  `quantite` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Structure de la table `sav`
--

CREATE TABLE IF NOT EXISTS `sav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_serie` varchar(250) NOT NULL,
  `test` int(11) DEFAULT NULL,
  `etat` int(11) NOT NULL,
  `date_reception` date NOT NULL,
  `date_renvoi` date NOT NULL,
  `commentaire` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `sous_famille`
--

CREATE TABLE IF NOT EXISTS `sous_famille` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_famille` int(3) NOT NULL,
  `nom` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sous_famille` (`id_famille`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Structure de la table `sous_traitant`
--

CREATE TABLE IF NOT EXISTS `sous_traitant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `sous_type_badge`
--

CREATE TABLE IF NOT EXISTS `sous_type_badge` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Structure de la table `sous_type_lecteur`
--

CREATE TABLE IF NOT EXISTS `sous_type_lecteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `id_etape` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Structure de la table `test_nomenclature`
--

CREATE TABLE IF NOT EXISTS `test_nomenclature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_etape_nomenclature` int(4) NOT NULL,
  `id_test` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

-- --------------------------------------------------------

--
-- Structure de la table `type_autre`
--

CREATE TABLE IF NOT EXISTS `type_autre` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `type_badge`
--

CREATE TABLE IF NOT EXISTS `type_badge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(100) NOT NULL,
  `designation` text NOT NULL,
  `quantite` int(10) NOT NULL,
  `frequence` int(2) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Structure de la table `type_lecteur_autre`
--

CREATE TABLE IF NOT EXISTS `type_lecteur_autre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(250) NOT NULL,
  `designation` text NOT NULL,
  `frequence` int(2) NOT NULL,
  `type` int(2) NOT NULL,
  `id_fournisseur` int(11) NOT NULL,
  `petite` int(2) NOT NULL,
  `moyenne` int(2) NOT NULL,
  `grande` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Structure de la table `type_produit`
--

CREATE TABLE IF NOT EXISTS `type_produit` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Structure de la table `version_fiche_descriptive`
--

CREATE TABLE IF NOT EXISTS `version_fiche_descriptive` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_fiche_descriptive_option` int(10) NOT NULL,
  `version` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Structure de la table `version_nomenclature`
--

CREATE TABLE IF NOT EXISTS `version_nomenclature` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_nomenclature` int(10) NOT NULL,
  `version` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
