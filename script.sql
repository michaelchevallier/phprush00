-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 19 Juin 2016 à 02:45
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `RUSH0`
--

-- --------------------------------------------------------

--
-- Structure de la table `COLOR`
--

CREATE TABLE `COLOR` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(256) NOT NULL,
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ORDERS`
--

CREATE TABLE `ORDERS` (
  `o_id` int(11) NOT NULL,
  `o_user_id` int(11) NOT NULL,
  `o_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `PRODUCT`
--

CREATE TABLE `PRODUCT` (
  `p_id` int(11) NOT NULL,
  `p_brand_id` int(11) NOT NULL,
  `p_name` varchar(256) NOT NULL,
  `p_type_id` int(11) NOT NULL,
  `p_price` float NOT NULL,
  `p_capacity` int(11) NOT NULL,
  `p_topspeed` float DEFAULT NULL,
  `p_acceleration` float DEFAULT NULL,
  `p_brake` float DEFAULT NULL,
  `p_traction` float DEFAULT NULL,
  `p_image` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `PRODUCT`
--

INSERT INTO `PRODUCT` (`p_id`, `p_brand_id`, `p_name`, `p_type_id`, `p_price`, `p_capacity`, `p_topspeed`, `p_acceleration`, `p_brake`, `p_traction`, `p_image`) VALUES
(1, 1, 'Adder', 1, 1000000, 2, 4, 3.2, 2.4, 2.8, 'http://vignette2.wikia.nocookie.net/gtawiki/images/9/9e/Adder-GTAV-front.png/revision/latest/scale-to-width-down/270?cb=20160429175105'),
(2, 2, 'Alpha', 2, 150000, 2, 4.1, 4.25, 2.8, 3.98, 'http://vignette1.wikia.nocookie.net/gtawiki/images/9/94/Alpha-GTAV-front.png/revision/latest?cb=20150529155505'),
(3, 2, 'Roosevelt Valor', 8, 982000, 4, 3.8, 4, 1.5, 2.8, 'http://vignette2.wikia.nocookie.net/gtawiki/images/2/2a/RooseveltValor-GTAO-front.png/revision/latest/scale-to-width-down/270?cb=20160214204109'),
(4, 2, 'Virgo', 4, 195000, 2, 3.85, 3.5, 1.3, 4, 'http://vignette3.wikia.nocookie.net/gtawiki/images/2/24/Virgo-GTAV-front.png/revision/latest/scale-to-width-down/270?cb=20160302174203'),
(5, 3, 'Elegy RH8', 7, 100000, 2, 3.9, 4.4, 2.2, 3.8, 'http://vignette3.wikia.nocookie.net/gtawiki/images/4/4f/ElegyRH8-GTAV-front.png/revision/latest/scale-to-width-down/270?cb=20160525194616'),
(6, 4, 'Schafter LWB', 7, 208000, 4, 3.7, 3.9, 2.1, 3.8, 'http://vignette3.wikia.nocookie.net/gtawiki/images/2/22/SchafterLWB-GTAO-front.png/revision/latest/scale-to-width-down/270?cb=20151216172307'),
(7, 4, 'Schafter V12', 7, 116000, 4, 3.95, 4.1, 2, 3.65, 'http://vignette2.wikia.nocookie.net/gtawiki/images/a/a6/SchafterV12-GTAO-front.png/revision/latest/scale-to-width-down/270?cb=20151216172122'),
(8, 4, 'Stirling GT', 8, 975000, 2, 4.05, 3.65, 1.2, 3.2, 'http://vignette4.wikia.nocookie.net/gtawiki/images/1/17/StirlingGT-GTAV-Front.png/revision/latest/scale-to-width-down/270?cb=20150614114322'),
(9, 4, 'Surano', 7, 110000, 2, 3.5, 4, 2, 3.99, 'http://vignette4.wikia.nocookie.net/gtawiki/images/f/fd/SuranoDown-GTAV-front.png/revision/latest/scale-to-width-down/270?cb=20160305181513'),
(10, 4, 'Bravado XLS', 9, 253000, 4, 3.5, 3.2, 1.45, 3.5, 'http://vignette2.wikia.nocookie.net/gtawiki/images/8/8c/XLS-GTAO-front.png/revision/latest/scale-to-width-down/270?cb=20160609145148'),
(11, 5, 'Banshee', 7, 105000, 2, 4.05, 3.95, 2.15, 3.78, 'http://vignette4.wikia.nocookie.net/gtawiki/images/9/9e/BansheeTopless-GTAV-front.png/revision/latest/scale-to-width-down/220?cb=20160118163245'),
(12, 5, 'Verlierer', 7, 695000, 2, 4.1, 4, 2.5, 4.1, 'http://vignette3.wikia.nocookie.net/gtawiki/images/8/8c/Verlierer-GTAO-front.png/revision/latest/scale-to-width-down/220?cb=20151216190603'),
(13, 5, '', 5, 715000, 2, 3.75, 4.15, 2.55, 4.2, 'http://vignette1.wikia.nocookie.net/gtawiki/images/6/6c/Brawler-GTAV-front.png/revision/latest/scale-to-width-down/220?cb=20151209200747'),
(14, 6, 'Voltic', 1, 150000, 2, 4.1, 4.5, 2.4, 4, 'http://vignette3.wikia.nocookie.net/gtawiki/images/8/87/Voltic-GTAV-front.png/revision/latest/scale-to-width-down/220?cb=20151220122144'),
(15, 7, 'Mamba', 8, 995000, 2, 3.72, 3.98, 1.5, 3.2, 'http://vignette4.wikia.nocookie.net/gtawiki/images/d/d4/Mamba-GTAO-front.png/revision/latest/scale-to-width-down/220?cb=20160117195426');

-- --------------------------------------------------------

--
-- Structure de la table `P_BRAND`
--

CREATE TABLE `P_BRAND` (
  `pb_id` int(11) NOT NULL,
  `pb_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `P_BRAND`
--

INSERT INTO `P_BRAND` (`pb_id`, `pb_name`) VALUES
(1, 'Truffade'),
(2, 'Albany'),
(3, 'Annis'),
(4, 'Benefactor'),
(5, 'Bravado'),
(6, 'Coil'),
(7, 'Declasse'),
(8, 'Dewbauchee'),
(9, 'Dinka'),
(10, 'Enus'),
(11, 'Gallivanter'),
(12, 'Grotti'),
(13, 'Hijak'),
(14, 'Imponte'),
(15, 'Invetero'),
(16, 'Lampadati'),
(17, 'Nagasaki'),
(18, 'Obey'),
(19, 'Overflod'),
(20, 'Pegassi'),
(21, 'Pfister'),
(22, 'Principe'),
(23, 'Progen'),
(24, 'Vapid');

-- --------------------------------------------------------

--
-- Structure de la table `P_COLORS`
--

CREATE TABLE `P_COLORS` (
  `pc_id` int(11) NOT NULL,
  `pc_product_id` int(11) NOT NULL,
  `pc_color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `P_TYPE`
--

CREATE TABLE `P_TYPE` (
  `pt_id` int(11) NOT NULL,
  `pt_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `P_TYPE`
--

INSERT INTO `P_TYPE` (`pt_id`, `pt_name`) VALUES
(1, 'Supersport'),
(2, 'Coupes'),
(3, 'Motorcycles'),
(4, 'Muscle'),
(5, 'Off-Road'),
(6, 'Sedans'),
(7, 'Sports'),
(8, 'Classics'),
(9, 'SUV');

-- --------------------------------------------------------

--
-- Structure de la table `USER`
--

CREATE TABLE `USER` (
  `u_id` int(11) NOT NULL,
  `u_group_id` int(11) NOT NULL,
  `u_login` varchar(256) NOT NULL,
  `u_password` varchar(256) NOT NULL,
  `u_email` varchar(256) NOT NULL,
  `u_adress` varchar(256) DEFAULT NULL,
  `u_zipcode` varchar(256) DEFAULT NULL,
  `u_city` varchar(256) DEFAULT NULL,
  `u_country` varchar(256) DEFAULT NULL,
  `u_birthdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `U_GROUP`
--

CREATE TABLE `U_GROUP` (
  `ug_id` int(11) NOT NULL,
  `ug_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `U_GROUP`
--

INSERT INTO `U_GROUP` (`ug_id`, `ug_name`) VALUES
(1, 'Administrator'),
(2, 'User');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `COLOR`
--
ALTER TABLE `COLOR`
  ADD PRIMARY KEY (`c_id`);

--
-- Index pour la table `ORDERS`
--
ALTER TABLE `ORDERS`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `o_user_id` (`o_user_id`),
  ADD KEY `o_product_id` (`o_product_id`);

--
-- Index pour la table `PRODUCT`
--
ALTER TABLE `PRODUCT`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `p_brand_id` (`p_brand_id`),
  ADD KEY `p_type_id` (`p_type_id`);

--
-- Index pour la table `P_BRAND`
--
ALTER TABLE `P_BRAND`
  ADD PRIMARY KEY (`pb_id`);

--
-- Index pour la table `P_COLORS`
--
ALTER TABLE `P_COLORS`
  ADD PRIMARY KEY (`pc_id`),
  ADD KEY `pc_product_id` (`pc_product_id`),
  ADD KEY `pc_color_id` (`pc_color_id`);

--
-- Index pour la table `P_TYPE`
--
ALTER TABLE `P_TYPE`
  ADD PRIMARY KEY (`pt_id`);

--
-- Index pour la table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `u_group_id` (`u_group_id`);

--
-- Index pour la table `U_GROUP`
--
ALTER TABLE `U_GROUP`
  ADD PRIMARY KEY (`ug_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `COLOR`
--
ALTER TABLE `COLOR`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ORDERS`
--
ALTER TABLE `ORDERS`
  MODIF`p_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `P_BRAND`
--
ALTER TABLE `P_BRAND`
  MODIFY `pb_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `P_COLORS`
--
ALTER TABLE `P_COLORS`
  MODIFY `pc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `P_TYPE`
--
ALTER TABLE `P_TYPE`
  MODIFY `pt_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `USER`
--
ALTER TABLE `USER`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `U_GROUP`
--
ALTER TABLE `U_GROUP`
  MODIFY `ug_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes k_1` FOREIGN KEY (`p_brand_id`) REFERENCES `P_BRAND` (`pb_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`p_type_id`) REFERENCES `P_TYPE` (`pt_id`);

--
-- Contraintes pour la table `P_COLORS`
--
ALTER TABLE `P_COLORS`
  ADD CONSTRAINT `p_colors_ibfk_1` FOREIGN KEY (`pc_product_id`) REFERENCES `PRODUCT` (`p_id`),
  ADD CONSTRAINT `p_colors_ibfk_2` FOREIGN KEY (`pc_color_id`) REFERENCES `COLOR` (`c_id`);

--
-- Contraintes pour la table `USER`
--
ALTER TABLE `USER`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`u_group_id`) REFERENCES `U_GROUP` (`ug_id`);