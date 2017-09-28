-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE DATABASE "shop" ----------------------------------
CREATE DATABASE IF NOT EXISTS `shop` CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `shop`;
-- ---------------------------------------------------------


-- CREATE TABLE "cate" -------------------------------------
-- CREATE TABLE "cate" -----------------------------------------
CREATE TABLE `cate` ( 
	`cateId` Int( 255 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	PRIMARY KEY ( `cateId` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 6;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "design" -----------------------------------
-- CREATE TABLE "design" ---------------------------------------
CREATE TABLE `design` ( 
	`proid` Int( 255 ) NOT NULL,
	`designid` Int( 255 ) AUTO_INCREMENT NOT NULL,
	`Des_REALWEIGHT` Double( 12, 0 ) NULL,
	`Des_ISo` Double( 12, 0 ) NULL,
	`Des_WEIGHT` Double( 12, 0 ) NULL,
	`shapeid` Int( 255 ) NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`Des_VOLUME` Double( 22, 0 ) NULL,
	PRIMARY KEY ( `designid` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "product" ----------------------------------
-- CREATE TABLE "product" --------------------------------------
CREATE TABLE `product` ( 
	`productId` Int( 255 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`details` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`status` TinyInt( 255 ) NULL,
	`userId` Int( 255 ) NOT NULL,
	`cateId` Int( 255 ) NOT NULL,
	`diameter` Float( 12, 0 ) NULL,
	PRIMARY KEY ( `productId` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 40;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "shape" ------------------------------------
-- CREATE TABLE "shape" ----------------------------------------
CREATE TABLE `shape` ( 
	`shapeid` Int( 255 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`SYM1` TinyInt( 255 ) NULL,
	`SYM2` TinyInt( 255 ) NULL,
	`SYM3` TinyInt( 255 ) NULL,
	`AIXSYM1` TinyInt( 255 ) NULL,
	`AIXSYM2` TinyInt( 255 ) NULL,
	`AIXSYM3` TinyInt( 255 ) NULL,
	PRIMARY KEY ( `shapeid` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 10;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "user" -------------------------------------
-- CREATE TABLE "user" -----------------------------------------
CREATE TABLE `user` ( 
	`id` Int( 10 ) AUTO_INCREMENT NOT NULL,
	`username` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`password` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 32;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- Dump data of "cate" -------------------------------------
INSERT INTO `cate`(`cateId`,`name`) VALUES ( '1', 'T-shirt' );
INSERT INTO `cate`(`cateId`,`name`) VALUES ( '2', 'Shirt' );
INSERT INTO `cate`(`cateId`,`name`) VALUES ( '3', 'Short-Pains' );
INSERT INTO `cate`(`cateId`,`name`) VALUES ( '4', 'Long-Pains' );
INSERT INTO `cate`(`cateId`,`name`) VALUES ( '5', 'Underware' );
-- ---------------------------------------------------------


-- Dump data of "design" -----------------------------------
INSERT INTO `design`(`proid`,`designid`,`Des_REALWEIGHT`,`Des_ISo`,`Des_WEIGHT`,`shapeid`,`name`,`Des_VOLUME`) VALUES ( '36', '1', '0', NULL, NULL, '5', 'truck', '0' );
-- ---------------------------------------------------------


-- Dump data of "product" ----------------------------------
INSERT INTO `product`(`productId`,`name`,`details`,`status`,`userId`,`cateId`,`diameter`) VALUES ( '4', '1', '1', '1', '1', '1', NULL );
INSERT INTO `product`(`productId`,`name`,`details`,`status`,`userId`,`cateId`,`diameter`) VALUES ( '5', 'item1', '111', '1', '14', '4', NULL );
INSERT INTO `product`(`productId`,`name`,`details`,`status`,`userId`,`cateId`,`diameter`) VALUES ( '6', 'item22', '111', '0', '22', '5', NULL );
INSERT INTO `product`(`productId`,`name`,`details`,`status`,`userId`,`cateId`,`diameter`) VALUES ( '8', 'Item15', '123', '0', '15', '3', NULL );
INSERT INTO `product`(`productId`,`name`,`details`,`status`,`userId`,`cateId`,`diameter`) VALUES ( '9', 'dfd', 'ddd', '1', '26', '1', NULL );
INSERT INTO `product`(`productId`,`name`,`details`,`status`,`userId`,`cateId`,`diameter`) VALUES ( '10', 'sss', 'ggg', '0', '26', '1', NULL );
INSERT INTO `product`(`productId`,`name`,`details`,`status`,`userId`,`cateId`,`diameter`) VALUES ( '11', 'aaa', 'aaa', '0', '26', '1', NULL );
INSERT INTO `product`(`productId`,`name`,`details`,`status`,`userId`,`cateId`,`diameter`) VALUES ( '12', 'ddd', 'daa', '1', '26', '4', NULL );
INSERT INTO `product`(`productId`,`name`,`details`,`status`,`userId`,`cateId`,`diameter`) VALUES ( '13', 'a1', 'adas', '1', '28', '3', NULL );
INSERT INTO `product`(`productId`,`name`,`details`,`status`,`userId`,`cateId`,`diameter`) VALUES ( '14', 'sss', 'sss', '0', '28', '1', NULL );
INSERT INTO `product`(`productId`,`name`,`details`,`status`,`userId`,`cateId`,`diameter`) VALUES ( '15', 'ssq', 'qq', '0', '28', '2', NULL );
INSERT INTO `product`(`productId`,`name`,`details`,`status`,`userId`,`cateId`,`diameter`) VALUES ( '16', 'ssqq', 'wsw', '2', '28', '3', NULL );
INSERT INTO `product`(`productId`,`name`,`details`,`status`,`userId`,`cateId`,`diameter`) VALUES ( '17', 'ssqwq', 'wedqwe', '1', '28', '5', NULL );
INSERT INTO `product`(`productId`,`name`,`details`,`status`,`userId`,`cateId`,`diameter`) VALUES ( '18', 'weqweqw', 'qweqw', '2', '28', '4', NULL );
INSERT INTO `product`(`productId`,`name`,`details`,`status`,`userId`,`cateId`,`diameter`) VALUES ( '19', 'wew', 'weawe', '0', '28', '2', NULL );
INSERT INTO `product`(`productId`,`name`,`details`,`status`,`userId`,`cateId`,`diameter`) VALUES ( '20', '1111', '', NULL, '28', '1', NULL );
INSERT INTO `product`(`productId`,`name`,`details`,`status`,`userId`,`cateId`,`diameter`) VALUES ( '36', 'swewea', 'edaedasdd', '1', '25', '2', NULL );
INSERT INTO `product`(`productId`,`name`,`details`,`status`,`userId`,`cateId`,`diameter`) VALUES ( '37', 'wr4w4er', 'erwer5', '0', '25', '5', NULL );
INSERT INTO `product`(`productId`,`name`,`details`,`status`,`userId`,`cateId`,`diameter`) VALUES ( '38', 'sss', 'âââ', '0', '25', '2', NULL );
INSERT INTO `product`(`productId`,`name`,`details`,`status`,`userId`,`cateId`,`diameter`) VALUES ( '39', 'ssss111', '1111', '0', '25', '5', NULL );
-- ---------------------------------------------------------


-- Dump data of "shape" ------------------------------------
INSERT INTO `shape`(`shapeid`,`name`,`SYM1`,`SYM2`,`SYM3`,`AIXSYM1`,`AIXSYM2`,`AIXSYM3`) VALUES ( '1', 'slab', NULL, NULL, NULL, NULL, NULL, NULL );
INSERT INTO `shape`(`shapeid`,`name`,`SYM1`,`SYM2`,`SYM3`,`AIXSYM1`,`AIXSYM2`,`AIXSYM3`) VALUES ( '2', 'Rectangular block (Vertical layer)', NULL, NULL, NULL, NULL, NULL, NULL );
INSERT INTO `shape`(`shapeid`,`name`,`SYM1`,`SYM2`,`SYM3`,`AIXSYM1`,`AIXSYM2`,`AIXSYM3`) VALUES ( '3', 'Rectangular block (Horizontal layer)', NULL, NULL, NULL, NULL, NULL, NULL );
INSERT INTO `shape`(`shapeid`,`name`,`SYM1`,`SYM2`,`SYM3`,`AIXSYM1`,`AIXSYM2`,`AIXSYM3`) VALUES ( '4', 'Standing clinder', NULL, NULL, NULL, NULL, NULL, NULL );
INSERT INTO `shape`(`shapeid`,`name`,`SYM1`,`SYM2`,`SYM3`,`AIXSYM1`,`AIXSYM2`,`AIXSYM3`) VALUES ( '5', 'Lying cylinder', NULL, NULL, NULL, NULL, NULL, NULL );
INSERT INTO `shape`(`shapeid`,`name`,`SYM1`,`SYM2`,`SYM3`,`AIXSYM1`,`AIXSYM2`,`AIXSYM3`) VALUES ( '6', 'Sphere', NULL, NULL, NULL, NULL, NULL, NULL );
INSERT INTO `shape`(`shapeid`,`name`,`SYM1`,`SYM2`,`SYM3`,`AIXSYM1`,`AIXSYM2`,`AIXSYM3`) VALUES ( '7', 'Standing concentric cylinder', NULL, NULL, NULL, NULL, NULL, NULL );
INSERT INTO `shape`(`shapeid`,`name`,`SYM1`,`SYM2`,`SYM3`,`AIXSYM1`,`AIXSYM2`,`AIXSYM3`) VALUES ( '8', 'Lying concentric Cylinder', NULL, NULL, NULL, NULL, NULL, NULL );
INSERT INTO `shape`(`shapeid`,`name`,`SYM1`,`SYM2`,`SYM3`,`AIXSYM1`,`AIXSYM2`,`AIXSYM3`) VALUES ( '9', 'Rectangular block (breaded)', NULL, NULL, NULL, NULL, NULL, NULL );
-- ---------------------------------------------------------


-- Dump data of "user" -------------------------------------
INSERT INTO `user`(`id`,`username`,`password`) VALUES ( '1', '1', '1' );
INSERT INTO `user`(`id`,`username`,`password`) VALUES ( '14', 'duchuy', 'v0SM0EYQh4aUWKjZph87Wg==' );
INSERT INTO `user`(`id`,`username`,`password`) VALUES ( '15', '123', 'a3iRot+rvHjBo0wnKd1aYg==' );
INSERT INTO `user`(`id`,`username`,`password`) VALUES ( '22', 'hhh', 'eLqPWlsQ9zQCSwsLcZxwFw==' );
INSERT INTO `user`(`id`,`username`,`password`) VALUES ( '25', 'thang', 'a3iRot+rvHjBo0wnKd1aYg==' );
INSERT INTO `user`(`id`,`username`,`password`) VALUES ( '26', '111', '6oCn04U0Ge4UUS69LgAQYQ==' );
INSERT INTO `user`(`id`,`username`,`password`) VALUES ( '28', 'huy123', 'a3iRot+rvHjBo0wnKd1aYg==' );
INSERT INTO `user`(`id`,`username`,`password`) VALUES ( '29', 'jin', 'a3iRot+rvHjBo0wnKd1aYg==' );
INSERT INTO `user`(`id`,`username`,`password`) VALUES ( '30', 'huy', 'a3iRot+rvHjBo0wnKd1aYg==' );
INSERT INTO `user`(`id`,`username`,`password`) VALUES ( '31', '', '4nxdZg6GFS/+wp4bkh6jTg==' );
-- ---------------------------------------------------------


-- CREATE INDEX "lnk_product_design" -----------------------
-- CREATE INDEX "lnk_product_design" ---------------------------
CREATE INDEX `lnk_product_design` USING BTREE ON `design`( `proid` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "lnk_shape_design" -------------------------
-- CREATE INDEX "lnk_shape_design" -----------------------------
CREATE INDEX `lnk_shape_design` USING BTREE ON `design`( `shapeid` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "cate_product" -----------------------------
-- CREATE INDEX "cate_product" ---------------------------------
CREATE INDEX `cate_product` USING BTREE ON `product`( `cateId` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "user_product" -----------------------------
-- CREATE INDEX "user_product" ---------------------------------
CREATE INDEX `user_product` USING BTREE ON `product`( `userId` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "lnk_product_design" ------------------------
-- CREATE LINK "lnk_product_design" ----------------------------
ALTER TABLE `design`
	ADD CONSTRAINT `lnk_product_design` FOREIGN KEY ( `proid` )
	REFERENCES `product`( `productId` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "lnk_shape_design" --------------------------
-- CREATE LINK "lnk_shape_design" ------------------------------
ALTER TABLE `design`
	ADD CONSTRAINT `lnk_shape_design` FOREIGN KEY ( `shapeid` )
	REFERENCES `shape`( `shapeid` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "cate_product" ------------------------------
-- CREATE LINK "cate_product" ----------------------------------
ALTER TABLE `product`
	ADD CONSTRAINT `cate_product` FOREIGN KEY ( `cateId` )
	REFERENCES `cate`( `cateId` )
	ON DELETE No Action
	ON UPDATE No Action;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "user_product" ------------------------------
-- CREATE LINK "user_product" ----------------------------------
ALTER TABLE `product`
	ADD CONSTRAINT `user_product` FOREIGN KEY ( `userId` )
	REFERENCES `user`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


