
Wireframe version Pc et Mobile :
[Maquette PC projet efp (1).pdf](https://github.com/DavCode1/DavCode1/files/14872533/Maquette.PC.projet.efp.1.pdf)

Sujet : Review de smartphone samsung

Charte graphique :
 Couleur utilisé
 #38A0B7 bleu pour la barre de navigation ainsi que les boutons 
 #000000 Noir pour les boutons connexion / envoyé
 
Police utilisé :
BakBa kOne pour les texte de petites police
Droid SANS pour les titres 
[Image projet smartphone.zip](https://github.com/DavCode1/DavCode1/files/14872809/Image.projet.smartphone.zip)

Diagramme logique de la base de données :

[Uphone Project.pdf](https://github.com/DavCode1/Uphone-Project/files/14917509/Uphone.Project.pdf)

Diagramme implémentation de la base de données :

[Uphone project implémentation - Diagramme EA de base de données (patte de corbeau).pdf](https://github.com/DavCode1/Uphone-Project/files/14945002/Uphone.project.implementation.-.Diagramme.EA.de.base.de.donnees.patte.de.corbeau.pdf)

Base de données :
[Upload-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 11 avr. 2024 à 14:40
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `uphone`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `label`) VALUES
(1, 'Entrée de gamme'),
(2, 'Bas de gamme'),
(3, 'Milieu de gamme'),
(4, 'Haut de gamme '),
(5, 'Premium');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `message` varchar(300) DEFAULT NULL,
  `note` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`user_id`, `item_id`, `message`, `note`) VALUES
(0, 0, 'J\'adore ce smartphone ! La qualité de l\'appareil photo est incroyable et l\'autonomie de la batterie est impressionnante.', 5),
(0, 0, 'Ce téléphone est super rapide et fluide, mais l\'écran est un peu petit à mon goût', 4),
(0, 0, 'Je suis déçu par la qualité de construction de ce téléphone. Il semble fragile et la batterie se vide rapidement', 2),
(0, 0, 'Excellent rapport qualité-prix ! Ce téléphone offre des performances exceptionnelles pour un prix abordable.', 5),
(0, 0, 'Je suis fan du design de ce téléphone, mais l\'appareil photo laisse à désirer. La qualité des photos en basse lumière est médiocre.', 3),
(0, 0, 'Ce téléphone est parfait pour les jeux ! Le processeur puissant et l\'écran réactif offrent une expérience de jeu incroyable', 5),
(0, 0, 'La durée de vie de la batterie est décevante sur ce téléphone. J\'ai du mal à tenir une journée complète sans recharger', 2),
(0, 0, 'Le support client de cette marque est exceptionnel ! J\'ai eu un problème avec mon téléphone et ils l\'ont résolu rapidement', 5),
(0, 0, 'J\'adore ce smartphone ! La qualité de l\'appareil photo est incroyable et l\'autonomie de la batterie est impressionnante.', 5),
(0, 0, 'J\'adore ce smartphone ! La qualité de l\'appareil photo est incroyable et l\'autonomie de la batterie est impressionnante.', 5),
(0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `favorites`
--

CREATE TABLE `favorites` (
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `size` float NOT NULL,
  `storage_capacity` int(11) NOT NULL,
  `ram_capacity` int(11) NOT NULL,
  `battery_capacity` int(11) NOT NULL,
  `network` enum('4G','5G') NOT NULL,
  `screen quality` varchar(255) NOT NULL,
  `camera_resolution_back` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `item_tag`
--

CREATE TABLE `item_tag` (
  `item_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tag`
--

INSERT INTO `tag` (`id`, `label`) VALUES
(1, 'stylet'),
(2, 'écran pliable'),
(3, 'résistant à l\'eau'),
(4, 'charge rapide'),
(5, 'charge sans fil'),
(6, 'double sim'),
(7, 'écran hdr'),
(8, 'capteur d\'empreinte digitale');

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE `theme` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `theme`
--

INSERT INTO `theme` (`id`, `label`) VALUES
(1, 'disponible'),
(2, 'plus en vente'),
(3, 'rumeur\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `mail_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Index pour la table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
ing uphone (1).sql…]()
------------------------------------------------------------------------------------------------
