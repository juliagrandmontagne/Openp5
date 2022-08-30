-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 30 août 2022 à 13:10
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet5`
--

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `ID` int(255) NOT NULL,
  `Ingredients` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nomrecette` text NOT NULL,
  `Recette` text NOT NULL,
  `IDUtilisateur` int(255) NOT NULL,
  `Image` int(50) NOT NULL,
  `difficulte` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`ID`, `Ingredients`, `nomrecette`, `Recette`, `IDUtilisateur`, `Image`, `difficulte`) VALUES
(1, '4 cl de rhum blanc\r\n6 feuilles de menthe\r\n1 eau gazeuse\r\n2 cl de sirop de sucre de canne\r\n½ citron vert\r\n10 glaçons', 'Mojito', 'Coupez le citron en deux puis chaque demi citron en 6 morceaux.\r\nAjoutez le sirop de sucre de canne. Le fait d\'utiliser un sucre liquide permet de ne pas sentir les cristaux du sucre à la dégustation du cocktail.Ajoutez la glace.Ajoutez le rhum.Complétez avec l\'eau gazeuse.Mélangez le cocktail afin que les saveur se mêlent.', 1, 0, 1),
(3, '4 cl de rhum blanc\r\n6 feuilles de menthe\r\n1 eau gazeuse\r\n2 cl de sirop de sucre de canne\r\n½ citron vert\r\n10 glaçons', 'Mojito', 'Coupez le citron en deux puis chaque demi citron en 6 morceaux.\r\nAjoutez le sirop de sucre de canne. Le fait d\'utiliser un sucre liquide permet de ne pas sentir les cristaux du sucre à la dégustation du cocktail.Ajoutez la glace.Ajoutez le rhum.Complétez avec l\'eau gazeuse.Mélangez le cocktail afin que les saveur se mêlent.', 1, 0, 1),
(4, '4 cl de rhum blanc\r\n6 feuilles de menthe\r\n1 eau gazeuse\r\n2 cl de sirop de sucre de canne\r\n½ citron vert\r\n10 glaçons', 'Mojito', 'Coupez le citron en deux puis chaque demi citron en 6 morceaux.\r\nAjoutez le sirop de sucre de canne. Le fait d\'utiliser un sucre liquide permet de ne pas sentir les cristaux du sucre à la dégustation du cocktail.Ajoutez la glace.Ajoutez le rhum.Complétez avec l\'eau gazeuse.Mélangez le cocktail afin que les saveur se mêlent.', 1, 0, 1),
(5, '4 cl de rhum blanc\r\n6 feuilles de menthe\r\n1 eau gazeuse\r\n2 cl de sirop de sucre de canne\r\n½ citron vert\r\n10 glaçons', 'Mojito', 'Coupez le citron en deux puis chaque demi citron en 6 morceaux.\r\nAjoutez le sirop de sucre de canne. Le fait d\'utiliser un sucre liquide permet de ne pas sentir les cristaux du sucre à la dégustation du cocktail.Ajoutez la glace.Ajoutez le rhum.Complétez avec l\'eau gazeuse.Mélangez le cocktail afin que les saveur se mêlent.', 1, 0, 1),
(6, '4 cl de rhum blanc\r\n2 cl de rhum ambré\r\n12 cl de jus d\'ananas\r\n4 cl de lait de coco ', 'Piña Colada ', '\r\n    Réalisez la recette \"Piña Colada\" au mixer.\r\n    Dans un blender (mixer), versez les ingrédients avec 5 ou 6 glaçons et mixez le tout. C\'est prêt ! Versez dans le verre et dégustez. Peut aussi se réaliser au shaker si c\'est juste pour une personne.\r\n    Servir dans un verre de type \"verre à vin\".\r\n    Décorer avec un morceau d\'ananas et une cerise confite.\r\n', 4, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `PseudoUtilisateur` text NOT NULL,
  `MailUtilisateur` text NOT NULL,
  `IDUtilisateur` int(255) NOT NULL,
  `MpUtilisateur` text NOT NULL,
  `Administrateur` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`PseudoUtilisateur`, `MailUtilisateur`, `IDUtilisateur`, `MpUtilisateur`, `Administrateur`) VALUES
('utilisateur', 'mail@mail.com', 1, '4afb35ee9fc9720b9b2cf59529f4332478c8650f', 0),
('utilisateurs', 'mail@mail.com', 4, '4afb35ee9fc9720b9b2cf59529f4332478c8650f', 0),
('utilisateure', 'mail@mail.com', 5, '4afb35ee9fc9720b9b2cf59529f4332478c8650f', 1),
('julia', 'juju.g-r@hotmail.fr', 6, 'ba16cc8551a4f90f4886bc1b3b2f9f93526386ae', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `lien utilisateur-recette` (`IDUtilisateur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`IDUtilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `recette`
--
ALTER TABLE `recette`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `IDUtilisateur` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `recette`
--
ALTER TABLE `recette`
  ADD CONSTRAINT `lien utilisateur-recette` FOREIGN KEY (`IDUtilisateur`) REFERENCES `utilisateur` (`IDUtilisateur`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
