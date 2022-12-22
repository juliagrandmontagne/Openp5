-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 22 déc. 2022 à 13:55
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
  `Ingredients` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nomrecette` text NOT NULL,
  `Recette` longtext NOT NULL,
  `IDUtilisateur` int(255) NOT NULL,
  `Images` text NOT NULL,
  `difficulte` int(1) NOT NULL,
  `couleur` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`ID`, `Ingredients`, `nomrecette`, `Recette`, `IDUtilisateur`, `Images`, `difficulte`, `couleur`) VALUES
(1, '2 cl de Rhum\r\n4 cl de Malibu Coco\r\n2 cl de Curaçao Bleu\r\n5 cl de jus d\'ananas', 'Mojito', '\r\n\r\n    Remplir un verre de glace.\r\n\r\n    Frapper au shaker le rhum, le Malibu coco et le jus d\'ananas.\r\n\r\n    Verser dans le verre le curaçao bleu.\r\n\r\n    Verser doucement le contenu du shaker dans le verre en retenant la glace.\r\n\r\n    Décorer avec un quartier d\'ananas et une cerise sur le bord du verre.\r\n', 1, 'Images/Cocktail.jpg', 1, '#FFFFFF'),
(2, 'Champagne brut 8 cl\r\nJus d\'orange4 cl', 'Mimosa', '\r\n\r\n    Réalisez la recette du cocktail Mimosa directement au verre.\r\n    Versez 4 cl de jus d’orange dans une flûte.\r\n    Complétez alors avec 8 cl de champagne brut. Attention à verser délicatement ce dernier.\r\n  \r\n', 1, 'Images/Cocktail.jpg', 1, '#FFFFFF'),
(4, '4 cl de rhum blanc\r\n6 feuilles de menthe\r\n1 eau gazeuse\r\n2 cl de sirop de sucre de canne\r\n½ citron vert\r\n10 glaçons', 'tropicana', 'Coupez le citron en deux puis chaque demi citron en 6 morceaux.\r\nAjoutez le sirop de sucre de canne. Le fait d\'utiliser un sucre liquide permet de ne pas sentir les cristaux du sucre à la dégustation du cocktail.Ajoutez la glace.Ajoutez le rhum.Complétez avec l\'eau gazeuse.Mélangez le cocktail afin que les saveur se mêlent.', 1, 'Images/Cocktail.jpg', 2, '#ffddbd'),
(5, '3 cl de rhum vieilli\r\n2 cl de triple sec (curaçao)\r\n1 cl de sirop de framboise\r\n1 demi citron vert\r\n1 cuillère à café de sucre en poudre', 'White Lion', '\r\n    Remplir un verre old-fashioned de glace pilée.\r\n\r\n    Canneler un zeste du 1/2 citron vert puis l\'insérer dans le verre.\r\n\r\n    Presser et filtrer ce demi citron vert, incorporer le jus dans le shaker.\r\n\r\n    Incorporer tous les autres ingrédients dans le shaker puis frapper.\r\n\r\n    Verser dans le verre en filtrant la glace du shaker.\r\n\r\n    Insérer et décorer avec des fruits de saison.\r\n', 1, 'Images/Cocktail.jpg', 3, '#c4f8d8'),
(6, '4 cl de rhum blanc\r\n2 cl de rhum ambré\r\n12 cl de jus d\'ananas\r\n4 cl de lait de coco ', 'Piña Colada ', '\r\n    Réalisez la recette \"Piña Colada\" au mixer.\r\n    Dans un blender (mixer), versez les ingrédients avec 5 ou 6 glaçons et mixez le tout. C\'est prêt ! Versez dans le verre et dégustez. Peut aussi se réaliser au shaker si c\'est juste pour une personne.\r\n    Servir dans un verre de type \"verre à vin\".\r\n    Décorer avec un morceau d\'ananas et une cerise confite.\r\n', 4, 'Images/Cocktail.jpg', 1, '#ffff'),
(13, '2 cl de Rhum\r\n4 cl de Malibu Coco\r\n2 cl de Curaçao Bleu\r\n5 cl de jus d\'ananas', 'Mojito', '\r\n\r\n    Remplir un verre de glace.\r\n\r\n    Frapper au shaker le rhum, le Malibu coco et le jus d\'ananas.\r\n\r\n    Verser dans le verre le curaçao bleu.\r\n\r\n    Verser doucement le contenu du shaker dans le verre en retenant la glace.\r\n\r\n    Décorer avec un quartier d\'ananas et une cerise sur le bord du verre.\r\n', 4, 'Images/Cocktail.jpg', 1, '#FFFFFF'),
(22, '45 ml de rye whisky (whisky de seigle)\r\n45 ml de vermouth rouge\r\n5 ml de picon\r\n5 ml de liqueur de Marasquin\r\n23 ml d\'eau fraîche\r\nune cerise au Marasquin sur une pique', 'Brooklyn', 'Mettez les ingrédients dans un shaker avec de la glace.\r\nFrappez.\r\nFiltrez dans la coupe refroidi.\r\nDécorez avec la cerise.\r\n', 4, 'Images/Cocktail.jpg', 1, '#FFFFFF'),
(23, '- 3 cl de tequila\r\n- 3 cl de triple sec L\'Héritier-Guyot\r\n- 7.5 cl de nectar de cranberry Caraïbos\r\n- Des glaçons', 'Sunburn', '    Dans un shaker rempli de glaçons, versez 3 cl de tequila, 3 cl de triple sec et 7.5 cl de nectar de cranberry .\r\n    Secouez énergiquement jusqu’à ce que le shaker se couvre de buée, signe que le cocktail est arrivé à juste température.\r\n    Servez dans un verre à cocktail en retenant les glaçons avec une passoire à cocktails.\r\n    Dégustez bien frais !', 6, 'Images/Cocktail.jpg', 1, '#FFFFFF'),
(30, 'Jus d\'orange 20 cl\r\nJus de cranberry 20 cl\r\nVodka 12 cl\r\nSchnaps 12 cl\r\nOrange 1\r\nGlaçon 16 ', 'Sex on the beach', '\r\n Déposez les glaçons dans chaque verre tulipe.\r\n\r\nRépartissez ensuite la vodka et le schnaps pêche dans les verres, directement sur les glaçons. Mélangez.\r\n\r\n\r\nVersez le jus d’orange par-dessus. Terminez avec le jus de cranberry. Décorez votre verre avec une tranche d’orange.\r\n', 6, 'Images/Cocktail.jpg', 1, '#FFFFFF'),
(31, ' Scotch : 5  \r\nJus de citron vert : 5   cl\r\nSucre glace : 1   cuillère à café\r\nCitron : 1   tranche\r\nCerise : 1   ', 'Scotch sour', ' Secouer le scotch, le jus de citron vert et le sucre en poudre avec de la glace et filtrer dans un verre à whisky. \r\nDécorer avec 1/2 tranche de citron, garnir de la cerise et servir. ', 5, 'Images/Cocktail.jpg', 1, '#FFFFFF');

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
  ADD KEY `IDUtilisateur` (`IDUtilisateur`);

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
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
