-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 11 mai 2022 à 16:54
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `projet_miniblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `resume` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `date`, `id_user`, `contenu`, `image`, `id_categorie`, `resume`) VALUES
(18, 'Grande épée', '2022-05-09', 20, 'La Grande épée est l&#039;arme iconique de la licence, et elle s&#039;est avérée puissante dans chaque jeu à ce jour. Monster Hunter Rise n&#039;a pas l&#039;air de faire exception, et la démo a permis de le confirmer. La grande épée hérite des mouvements et du style de jeu de Monster Hunter World, et non pas de celui de Monster Hunter Generations Ultimate, à l&#039;exception de ceux liés à la fronde grappin. C&#039;est une arme lourde pour laquelle le positionnement et le timing sont importants. Elle peut être jouée de plusieurs façons différentes, soit en misant sur le hit and run, qui privilégie la mobilité, soit en enchaînant les attaques chargées dévastatrices.', 'images/grandeepee.jpg', 1, 'La Grande épée est l&#039;arme iconique de la licence, et elle s&#039;est avérée puissante dans chaque jeu à ce jour.'),
(19, 'Volto-Hache', '2022-05-09', 20, 'Très populaire chez les vétérans de la licence, la Volto-hache est une arme de GIGA BG, spectaculaire et redoutable de longue date entre de bonnes mains. Cela n&#039;a pas l&#039;air destiné à changer dans Monster Hunter Rise, le gameplay de base est très similaire à celui de Monster Hunter World (sans les nouveautés d&#039;Iceborne), ce qui n&#039;est pas trop surprenant. C&#039;est donc une arme plutôt technique en apparence qui risque d&#039;intimider les nouveaux joueurs avec sa jauge de charge et sa transformation, mais pas si difficile à utiliser une fois son combo optimal bien intégré. Elle a aussi droit à quelques nouveautés via le Filoptère, qui vont altérer la façon de jouer.', 'images/volto-hache.jpg', 1, 'Très populaire chez les vétérans de la licence, la Volto-hache est une arme de GIGA BG, spectaculaire et redoutable de longue date entre de bonnes mains.'),
(20, 'Épée longue', '2022-05-09', 20, 'L’Épée longue est probablement l&#039;arme la plus populaire de la licence, et une des plus redoutables si elle est bien jouée. Cela ne change pas trop dans Monster Hunter Rise puisque son gameplay est similaire à celui de Monster Hunter World dans la majorité des cas. C&#039;est une arme assez rapide qui mise sur les combos et le chargement d&#039;une jauge, ainsi que le bon timing des attaques et contre-attaques pour être efficace. Bien joué, cela donne des attaques spectaculaires qui semblent droit sorties des scènes de combat au katana d&#039;un anime japonais.', 'images/epeelongue.jpg', 1, 'L’Épée longue est probablement l&#039;arme la plus populaire de la licence, et une des plus redoutables si elle est bien jouée.'),
(23, 'Les Lyniens', '2022-05-09', 20, 'Les Lyniens (Japonais 獣人種) sont une race de créatures autochtones intelligentes.\r\n\r\nIl y a deux races de Lyniens :  La race féline composée des Felynes et des Melynx, et la race humanoïde des Shakalakas.\r\n\r\nLes deux sont agencées en société complexe et ont leur propre langage, bien que les Shakalakas soient plus primitifs et barbares, alors que les races de félidés ont tendance à vivre pacifiquement et en démocratie.\r\n\r\nAvant de commencer à bâtir des relations plus fortes avec les humains, ils avaient leurs propres civilisations. Les deux races peuvent aider les humains au combat, les Lyniens félins plus aisément que les Shakalakas, ceux-ci étant plus isolés.', 'images/leslyniens.jpg', 3, 'Les Lyniens (Japonais 獣人種) sont une race de créatures autochtones intelligentes.'),
(24, 'Rathalos', '2022-05-09', 20, 'Le Rathalos est une wyverne volante introduite pour la première fois dans Monster Hunter. Mâle de la Rathian, il est connu pour vivre dans une grande variété de régions et peut être rencontré à n\'importe quel rang dans tous les opus existants. C\'est le monstre emblématique de la franchise Monster Hunter. De taille moyenne, il est reconnaissable par sa morphologie (2 pattes et 2 ailes), sa couleur rouge cramoisie, ses ailes et queue bardées de piques et son patagium comportant des motifs de flammes.\r\nIl est recouvert de plaques et d\'écailles rouges et noires avec le dessous du corps et la membrane des ailes beiges. De chaque côté de la mâchoire, sous les oreilles, se trouvent des excroissances de plaques faisant penser à des mandibules d\'insecte. Les pattes ont des serres acérées, permettant de tuer et de saisir des proies, et la queue se termine en des pointes toxiques, dont une grande tout au bout, à la manière d\'un scorpion.\r\nAu delà de son apparence de Wyverne, le Rathalos évoque aussi l\'aigle, autant par son museau crochu que par son statut de roi des cieux.', 'images/rathalos.jpg', 2, 'Le Rathalos est une wyverne volante introduite pour la première fois dans Monster Hunter.'),
(26, 'Magnamalo', '2022-05-09', 20, 'Le Magnamalo est une wyverne à crocs apparue dans Monster Hunter Rise. C&#039;est le monstre phare de cet opus. À première vue, le Magnamalo ressemble beaucoup à un croisement entre un Zinogre et un tigre, et pourrait être inspiré du Nue. Les deux wyvernes à crocs partagent le même type d&#039;écaille, ainsi que la disposition de celles plus proéminentes en forme de crête sur le dos et les pattes.\r\nLes écailles du Magnamalo sont majoritairement violettes avec un bord jaune, certaines ayant une couleur rosée. La tête possède deux extensions sur chaque côté légèrement recourbées. Deux sortes de &quot;cornes&quot;; jaunes partent du front pour ensuite se diviser en trois branches par ordre décroissant de taille. Ses crocs ressemblent davantage à ceux du Barioth et ses yeux sont bleus.\r\nSes pattes sont composées de 4 griffes, trois sur les doigts et une sur un ergot à l&#039;instar des félins. Ses pattes avants sont dotées d\'une excroissance en forme de faucille, quasiment aussi grande que l&#039;avant-bras, et repliée contre ce dernier.\r\nLe Magnamalo possède une queue assez grande dont le bout a l&#039;apparence d\'une pointe de lance avec deux piques à la base de la pointe. La partie inférieure est globalement rouge et la partie supérieur violette, à l&#039;exception de la pointe et des pics qui sont jaunes.', 'images/magnamalo.png', 2, 'Le Magnamalo est une wyverne à crocs apparue dans Monster Hunter Rise. C&#039;est le monstre phare de cet opus.');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `resume` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `image`, `resume`) VALUES
(1, 'Armes', 'images/logoArmes.jpg', 'Les armes emblématiques de Monster Hunter.'),
(2, 'Monstres', 'images/NergiVsRathalos.jpg', 'Les monstres emblématique de Monster Hunter.'),
(3, 'Faune', 'images/faune.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `contenu` text NOT NULL,
  `auteur` int(255) DEFAULT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `date`, `contenu`, `auteur`, `id_article`) VALUES
(5, '2022-05-11 00:00:00', 'Kawaii', 20, 23),
(7, '2022-05-11 00:00:00', 'Arme de turbo chad ! ', 20, 19),
(25, '2022-05-11 00:00:00', 'oe les gradon\r\n', 20, 24);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(200) NOT NULL,
  `mail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `mdp`, `mail`) VALUES
(19, 'tarass', '$2y$10$prkb2yrJa/isi6BB/5BcF.Ub/wg/4ct1WrptLAUtsiNA3/QPwwBtW', 'tarass@gmail.com'),
(20, 'sylvain', '$2y$10$rwu71C7cRy2tiN6DQNJIEuIf98mXSWDXnkaXXYZ.Xrm5W6QXojMoK', 'sylaincocqueret02@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titre` (`titre`),
  ADD KEY `arcticle-auteur` (`id_user`),
  ADD KEY `arcticle-categorie` (`id_categorie`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentaire-arcticle` (`id_article`),
  ADD KEY `commentaire-auteur` (`auteur`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `arcticle-auteur` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `arcticle-categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire-arcticle` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `commentaire-auteur` FOREIGN KEY (`auteur`) REFERENCES `user` (`id`);
COMMIT;
