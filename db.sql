--****************************************************************************--
--                                                                            --
--                                                        :::      ::::::::   --
--   bdd.sql                                            :+:      :+:    :+:   --
--                                                    +:+ +:+         +:+     --
--   By: rmc-coma <marvin@42.fr>                    +#+  +:+       +#+        --
--                                                +#+#+#+#+#+   +#+           --
--   Created: 2016/06/18 15:44:21 by rmc-coma          #+#    #+#             --
--   Updated: 2016/06/19 06:22:16 by rmc-coma         ###   ########.fr       --
--                                                                            --
--****************************************************************************--

CREATE DATABASE `RUSH0`
CHARACTER SET 'utf8'
COLLATE 'utf8_general_ci';

USE `RUSH0`;

CREATE TABLE IF NOT EXISTS `RUSH0`.`U_GROUP`
(
	`ug_id` INT NOT NULL AUTO_INCREMENT,
    `ug_name` VARCHAR(256) NOT NULL,
	PRIMARY KEY (`ug_id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS `RUSH0`.`USER`
(
	`u_id` INT NOT NULL AUTO_INCREMENT,
	`u_group_id` INT NOT NULL,
	`u_login` VARCHAR(256) NOT NULL, 
	`u_password` VARCHAR(256) NOT NULL, 
	`u_email` VARCHAR(256) NOT NULL, 
	`u_adress` VARCHAR(256) NULL, 
	`u_zipcode` VARCHAR(256) NULL, 
	`u_city` VARCHAR(256) NULL,
	`u_country` VARCHAR(256) NULL, 
	`u_birthdate` DATE NULL,
	PRIMARY KEY (`u_id`),
	FOREIGN KEY (`u_group_id`) REFERENCES `U_GROUP`(`ug_id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS `RUSH0`.`P_BRAND`
(
	`pb_id` INT NOT NULL AUTO_INCREMENT,
	`pb_name` VARCHAR(256) NOT NULL,
	PRIMARY KEY (`pb_id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS `RUSH0`.`P_TYPE`
(
	`pt_id` INT NOT NULL AUTO_INCREMENT,
	`pt_name` VARCHAR(256) NOT NULL,
	PRIMARY KEY (`pt_id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;


CREATE TABLE IF NOT EXISTS `RUSH0`.`PRODUCT`
(
	`p_id` INT NOT NULL AUTO_INCREMENT,
	`p_brand_id` INT NOT NULL, 
	`p_name` VARCHAR(256) NOT NULL,
	`p_type_id` INT NOT NULL,
	`p_price` FLOAT NOT NULL,
	`p_capacity` INT NOT NULL,
	`p_topspeed` FLOAT NULL,
	`p_acceleration` FLOAT NULL,
	`p_brake` FLOAT NULL,
	`p_traction` FLOAT NULL,
	`p_image` VARCHAR(256) NULL,
	PRIMARY KEY (`p_id`),
	FOREIGN KEY (`p_brand_id`) REFERENCES `P_BRAND`(`pb_id`),
	FOREIGN KEY (`p_type_id`) REFERENCES `P_TYPE`(`pt_id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS `RUSH0`.`ORDERS`
(
	`o_id` INT NOT NULL AUTO_INCREMENT,
	`o_user_id` INT NOT NULL,
	`o_product_id` INT NOT NULL,
	PRIMARY KEY (`o_id`),
	FOREIGN KEY (`o_user_id`) REFERENCES `USER`(`u_id`),
	FOREIGN KEY (`o_product_id`) REFERENCES `PRODUCT`(`p_id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS `RUSH0`.`COLOR`
(
	`c_id` INT NOT NULL AUTO_INCREMENT,
	`c_name` VARCHAR(256) NOT NULL,
	`value` INT NULL,
	PRIMARY KEY (`c_id`)
) Engine = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS `RUSH0`.`P_COLORS`
(
	`pc_id` INT NOT NULL AUTO_INCREMENT,
	`pc_product_id` INT NOT NULL,
	`pc_color_id` INT NOT NULL,
	PRIMARY KEY (`pc_id`),
	FOREIGN KEY (`pc_product_id`) REFERENCES `PRODUCT`(`p_id`),
	FOREIGN KEY (`pc_color_id`) REFERENCES `COLOR`(`c_id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

INSERT INTO `U_GROUP` (`ug_id`, `name`) VALUES
(1, 'Administrator'),
(2, 'User');

INSERT INTO `P_TYPE` (`pt_id`, `name`) VALUES
(1, 'Supersport');

INSERT INTO `P_BRAND` (`pb_id`, `name`) VALUES
(1, 'Truffade');

INSERT INTO `PRODUCT` (`p_brand_id`, `p_name`, `p_type_id`, `p_price`, `p_capacity`, `p_topspeed`,
	   				  `p_acceleration`, `p_brake`, `p_traction`, `p_image`) VALUES
(1, 'Adder', 1, 1000000.0, 2, 4.0, 3.2, 2.4, 2.8, 'http://vignette2.wikia.nocookie.net/gtawiki/images/9/9e/Adder-GTAV-front.png/revision/latest/scale-to-width-down/270?cb=20160429175105');
