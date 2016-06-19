SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS `RUSH02` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `RUSH02`;

CREATE TABLE IF NOT EXISTS `ORDERS` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `PRODUCT` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `capacity` int(11) NOT NULL,
  `topspeed` float DEFAULT NULL,
  `acceleration` float DEFAULT NULL,
  `brake` float DEFAULT NULL,
  `traction` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `brand_id` (`brand_id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `PRODUCT` (`id`, `brand_id`, `name`, `type_id`, `price`, `capacity`, `topspeed`, `acceleration`, `brake`, `traction`) VALUES
(1, 1, 'Adder', 1, 1000000, 2, 4, 3.8, 2.1, 3);

CREATE TABLE IF NOT EXISTS `P_BRAND` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `P_BRAND` (`id`, `name`) VALUES
(1, 'Truffade'),
(2, '');

CREATE TABLE IF NOT EXISTS `P_TYPE` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `P_TYPE` (`id`, `name`) VALUES
(1, 'Supersport');

CREATE TABLE IF NOT EXISTS `USER` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `login` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `adress` varchar(256) DEFAULT NULL,
  `zipcode` varchar(256) DEFAULT NULL,
  `city` varchar(256) DEFAULT NULL,
  `country` varchar(256) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `USER` (`id`, `group_id`, `login`, `password`, `email`, `adress`, `zipcode`, `city`, `country`, `birthdate`) VALUES
(1, 2, '', '19fa61d75522a4669b44e39c1d2e1726c530232130d407f89afee0964997f7a73e83be698b288febcf88e3e03c4f0757ea8964e59b63d93708b138cc42a66eb3', '', NULL, NULL, NULL, NULL, NULL),
(2, 2, 'toto5', 'totopass', 'totomail', NULL, NULL, NULL, NULL, NULL),
(3, 2, 'toto0', '8d21f1b203bd17c15dc1d433a4c5622293b8c0978146cea17ed9b22869a3f1460c1dbd4c5d867fd06db9c2d8c501c08a6387759dab9aec0e4e4400e26367ae69', 'totomail@mail.com', NULL, NULL, NULL, NULL, NULL);

CREATE TABLE IF NOT EXISTS `U_GROUP` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `U_GROUP` (`id`, `name`) VALUES
(1, 'Administrator'),
(2, 'User');


ALTER TABLE `ORDERS`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `USER` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `PRODUCT` (`id`);

ALTER TABLE `PRODUCT`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `P_BRAND` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `P_TYPE` (`id`);

ALTER TABLE `USER`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `U_GROUP` (`id`);
