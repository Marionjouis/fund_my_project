-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 13 déc. 2019 à 10:34
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `dev3`
--
CREATE DATABASE IF NOT EXISTS `dev3` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dev3`;

-- --------------------------------------------------------

--
-- Structure de la table `portfolios`
--

CREATE TABLE `portfolios` (
  `idportfolios` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL,
  `image` varchar(135) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `portfolios`
--

INSERT INTO `portfolios` (`idportfolios`, `libelle`, `image`) VALUES
(1, 'aaa', 'cabin.png'),
(2, 'bbb', 'cake.png'),
(4, 'ddd', 'cabin.png');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `nom` varchar(44) NOT NULL,
  `prenom` varchar(44) NOT NULL,
  `password` varchar(250) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`nom`, `prenom`, `password`, `id`) VALUES
('pellier', 'sylvain', 'toto', 1),
('a', 'a', '$2y$10$6/23RCHxxL2E2LdBird2lenvT81KMrGA2HxYgBOffFQH5rjezk7cm', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`idportfolios`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `idportfolios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
