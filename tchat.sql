-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 01 fév. 2021 à 18:18
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tchat`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

CREATE TABLE `achat` (
  `id_achat` int(11) NOT NULL,
  `id_vendeur` int(11) NOT NULL,
  `id_acheteur` int(11) NOT NULL,
  `non_produit` text COLLATE utf8_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `photo` int(11) NOT NULL,
  `date_achat` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `amie`
--

CREATE TABLE `amie` (
  `id_amie` int(11) NOT NULL,
  `email` text NOT NULL,
  `amies` int(2) NOT NULL DEFAULT 1,
  `email_ex` text NOT NULL,
  `status` int(11) NOT NULL,
  `email_bloquer` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `amie`
--

INSERT INTO `amie` (`id_amie`, `email`, `amies`, `email_ex`, `status`, `email_bloquer`) VALUES
(1, 'kibihenock@gmail.com', 2, 'moisensonsa902@gmail.com', 2, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `emojin`
--

CREATE TABLE `emojin` (
  `id_mojin` int(11) NOT NULL,
  `nom_emojin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `emojin`
--

INSERT INTO `emojin` (`id_mojin`, `nom_emojin`) VALUES
(1, '&#128551\r\n'),
(2, '&#128552\r\n'),
(3, '&#128553\r\n'),
(4, '&#128554\r\n'),
(5, '&#128555\r\n'),
(6, '&#128556\r\n'),
(7, '&#128557\r\n'),
(8, '&#128558\r\n  '),
(9, ' &#128559\r\n'),
(10, '&#128560\r\n'),
(11, ' &#128561 '),
(12, '&#128562    \r\n'),
(13, '&#128564 \r\n '),
(14, '&#128563  \r\n'),
(15, '&#128565    \r\n'),
(16, '&#128566      \r\n '),
(17, '&#128567 \r\n'),
(18, '&#128577      \r\n'),
(19, '&#128578        \r\n'),
(20, '&#128579     \r\n'),
(21, '&#128580   \r\n'),
(22, '&#129296 \r\n'),
(23, '&#129297       \r\n'),
(24, '&#129298       \r\n'),
(25, '&#129299         \r\n '),
(26, '&#129300   \r\n'),
(27, '&#129301   '),
(28, '&#129312        \r\n'),
(29, '&#129313          \r\n'),
(30, '&#129314            \r\n'),
(31, '&#129315           \r\n'),
(32, '&#129316        \r\n'),
(33, '&#129317      \r\n'),
(34, '&#129319       \r\n'),
(35, '&#129320      \r\n'),
(36, '&#129321   \r\n'),
(37, '&#129322    \r\n'),
(38, '&#129323       \r\n'),
(39, '&#129324         \r\n'),
(40, '&#129325          \r\n'),
(41, '&#129326      \r\n'),
(42, '&#129327           \r\n'),
(43, '&#129488       \r\n'),
(44, '&#9757\r\n'),
(45, '&#9977  '),
(46, '&#9994   \r\n'),
(47, '&#9995 \r\n'),
(48, '&#9996  \r\n'),
(49, '&#9997  \r\n '),
(50, '&#127877\r\n'),
(51, '&#127938   \r\n'),
(52, '&#127939'),
(53, '&#127940     \r\n'),
(54, '&#127943     \r\n'),
(55, '&#127946     \r\n'),
(56, '&#127947  \r\n'),
(57, '&#127948   \r\n'),
(58, '&#128066  \r\n'),
(59, '&#128067 \r\n'),
(60, '&#128070    \r\n'),
(61, '&#128071    \r\n'),
(62, '&#128072    \r\n'),
(63, '&#128073 \r\n'),
(64, '&#128074  \r\n'),
(65, '&#128075    \r\n'),
(66, '&#128076 \r\n'),
(67, '&#128077 \r\n '),
(68, '&#128078  \r\n'),
(69, '&#128079    \r\n'),
(70, '&#128080 \r\n'),
(71, '&#128102   \r\n '),
(72, '&#128103  \r\n'),
(73, '&#128104  \r\n'),
(74, '&#128105   \r\n'),
(75, '&#128110  \r\n  '),
(76, '&#128112     \r\n'),
(77, '&#128113  \r\n'),
(78, '&#128114  \r\n '),
(79, '&#128115  \r\n '),
(80, '&#128116'),
(81, '&#128117  \r\n '),
(82, '&#128118  \r\n'),
(83, '&#128119  \r\n'),
(84, '&#128120  \r\n '),
(85, '&#128124  \r\n'),
(86, '&#128129  \r\n'),
(87, '&#128130  \r\n'),
(88, '&#128131  \r\n'),
(89, '&#128133  \r\n'),
(90, '&#128134  \r\n  '),
(91, '&#128135  \r\n'),
(92, '&#128170  \r\n'),
(93, '&#128372 \r\n'),
(94, '&#128373   \r\n'),
(95, '&#128378  \r\n '),
(96, '&#128400   \r\n'),
(97, '&#128405  \r\n '),
(98, '&#128406  \r\n'),
(99, '&#128581  \r\n'),
(100, '&#128582   \r\n '),
(101, '&#128583  \r\n'),
(102, '&#128587  \r\n'),
(103, '&#128588   \r\n'),
(104, '&#128589    \r\n'),
(105, '&#129335  \r\n'),
(106, '&#129336     \r\n'),
(107, '&#129337  \r\n '),
(108, '&#129341  \r\n'),
(109, '&#129342     \r\n'),
(110, '&#129489 '),
(111, '&#129490    \r\n'),
(112, '&#129491    \r\n'),
(113, '&#129492  \r\n'),
(114, '&#129493  \r\n'),
(115, '&#129494   \r\n'),
(116, '&#129495   \r\n'),
(117, '&#129496  \r\n'),
(118, '&#&#129497  \r\n '),
(119, '&#129498    \r\n'),
(120, '&#129500    \r\n'),
(121, '&#129501');

-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

CREATE TABLE `groupes` (
  `id_groupe` int(11) NOT NULL,
  `nom_groupe` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `groupes`
--

INSERT INTO `groupes` (`id_groupe`, `nom_groupe`, `photo`) VALUES
(1, 'e-commerce', 'Group-icon.png');

-- --------------------------------------------------------

--
-- Structure de la table `liste`
--

CREATE TABLE `liste` (
  `id_Liste` int(11) NOT NULL,
  `id_vendeur` int(11) NOT NULL,
  `nom_produit` text COLLATE utf8_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_achat` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `liste`
--

INSERT INTO `liste` (`id_Liste`, `id_vendeur`, `nom_produit`, `prix`, `photo`, `date_achat`) VALUES
(1, 2, 'moto', 1000, 'th.jpg', '2021-01-15 17:40:02'),
(2, 2, 'voiture', 2000, '39185514_2195653940711448_711112100201627648_o.jpg', '2021-01-15 18:10:36'),
(3, 2, 'calmion', 1000, 'th.jpg', '2021-01-15 18:11:00'),
(4, 2, 'msmsm', 2000, '39185514_2195653940711448_711112100201627648_o.jpg', '2021-01-15 18:11:16');

-- --------------------------------------------------------

--
-- Structure de la table `membre_groupes`
--

CREATE TABLE `membre_groupes` (
  `id_membre_groupes` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `id_groupe` int(11) NOT NULL,
  `admistrateur` int(11) NOT NULL DEFAULT 0,
  `bloquer` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `enligne_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre_groupes`
--

INSERT INTO `membre_groupes` (`id_membre_groupes`, `id_membre`, `id_groupe`, `admistrateur`, `bloquer`, `status`, `enligne_users`) VALUES
(1, 1, 1, 1, NULL, 0, 0),
(4, 2, 1, 0, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `messanger`
--

CREATE TABLE `messanger` (
  `id_mess` int(11) NOT NULL,
  `id_exp` int(11) DEFAULT NULL,
  `ip_exp` int(11) DEFAULT NULL,
  `id_dest` int(11) DEFAULT NULL,
  `ip_dest` int(11) DEFAULT NULL,
  `messages` text NOT NULL,
  `datames` varchar(25) NOT NULL,
  `lire` int(1) DEFAULT 1,
  `id_membre` int(11) DEFAULT NULL,
  `id_groupe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messanger`
--

INSERT INTO `messanger` (`id_mess`, `id_exp`, `ip_exp`, `id_dest`, `ip_dest`, `messages`, `datames`, `lire`, `id_membre`, `id_groupe`) VALUES
(1, 1, NULL, 2, 0, 'fnyhg', '2021-01-27 16:00:04', 0, NULL, NULL),
(2, 1, NULL, 2, 0, 'fnyhg', '2021-01-28 10:07:14', 0, NULL, NULL),
(3, 1, NULL, 2, 0, 'fnyhg', '2021-01-28 10:09:46', 0, NULL, NULL),
(4, 2, NULL, 1, 0, 'pnin ?\r\n', '2021-01-28 11:24:28', 0, NULL, NULL),
(7, NULL, NULL, NULL, NULL, 'salut a tous vous allez mieux', '2021-01-28 11:42:36', 1, 1, 1),
(8, NULL, NULL, NULL, NULL, 'oui mec cava?', '2021-01-28 11:42:40', 1, 2, 1),
(9, 1, NULL, 2, NULL, 'bhv pnin?', '2021-01-30 14:54:33', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

CREATE TABLE `notification` (
  `id_notif` int(11) NOT NULL,
  `id_message` int(11) DEFAULT NULL,
  `lire` int(11) DEFAULT NULL,
  `id_dest` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `publicite`
--

CREATE TABLE `publicite` (
  `id_pub` int(11) NOT NULL,
  `titre_public` varchar(100) NOT NULL,
  `date_pub` varchar(25) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `validation` int(2) NOT NULL DEFAULT 0,
  `id_vendeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `publicite`
--

INSERT INTO `publicite` (`id_pub`, `titre_public`, `date_pub`, `photo`, `validation`, `id_vendeur`) VALUES
(1, 'Caption Text', '2021-01-17 12:54:26', 'img1.jpg', 1, 1),
(2, 'Caption Two', '2021-01-17 12:54:26', 'img2.jpg', 1, 1),
(3, 'Caption Three', '2021-01-17 12:54:26', 'img3.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `nom_role` text NOT NULL,
  `niveau` enum('1','2') NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id_role`, `nom_role`, `niveau`) VALUES
(1, 'admistrateur', '1'),
(2, 'utilisateur', '2');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `adresse` varchar(15) NOT NULL,
  `ip` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `mdp` text NOT NULL,
  `id_role` int(11) NOT NULL,
  `sexe` enum('Femme','Homme') NOT NULL,
  `email` text NOT NULL,
  `datenaissance` text NOT NULL,
  `enligne` enum('0','1') DEFAULT '1',
  `datadec` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `nom`, `prenom`, `adresse`, `ip`, `photo`, `mdp`, `id_role`, `sexe`, `email`, `datenaissance`, `enligne`, `datadec`) VALUES
(1, 'nsonsa', 'moise', 'Rdc', 0, 'avatar.jpg', '0000', 2, 'Homme', 'moisensonsa902@gmail.com', '16/2/1998', '1', '2021-02-01 19:08:41'),
(2, 'kibi', 'henock', 'Rdc', 0, '39185514_2195653940711448_711112100201627648_o.jpg', 'kibi', 2, 'Homme', 'kibihenock@gmail.com', '25/5/2000', '0', '2021-02-01 18:58:31'),
(3, 'blaise', 'mwaka', 'kibenga', 0, 'avatar.jpg', '123456789', 2, 'Homme', 'blaise@gmail.com', '16/02/1998', '0', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `amie`
--
ALTER TABLE `amie`
  ADD PRIMARY KEY (`id_amie`);

--
-- Index pour la table `emojin`
--
ALTER TABLE `emojin`
  ADD PRIMARY KEY (`id_mojin`);

--
-- Index pour la table `groupes`
--
ALTER TABLE `groupes`
  ADD PRIMARY KEY (`id_groupe`);

--
-- Index pour la table `liste`
--
ALTER TABLE `liste`
  ADD PRIMARY KEY (`id_Liste`);

--
-- Index pour la table `membre_groupes`
--
ALTER TABLE `membre_groupes`
  ADD PRIMARY KEY (`id_membre_groupes`);

--
-- Index pour la table `messanger`
--
ALTER TABLE `messanger`
  ADD PRIMARY KEY (`id_mess`);

--
-- Index pour la table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_notif`);

--
-- Index pour la table `publicite`
--
ALTER TABLE `publicite`
  ADD PRIMARY KEY (`id_pub`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `amie`
--
ALTER TABLE `amie`
  MODIFY `id_amie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `emojin`
--
ALTER TABLE `emojin`
  MODIFY `id_mojin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT pour la table `groupes`
--
ALTER TABLE `groupes`
  MODIFY `id_groupe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `liste`
--
ALTER TABLE `liste`
  MODIFY `id_Liste` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `membre_groupes`
--
ALTER TABLE `membre_groupes`
  MODIFY `id_membre_groupes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `messanger`
--
ALTER TABLE `messanger`
  MODIFY `id_mess` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `publicite`
--
ALTER TABLE `publicite`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
