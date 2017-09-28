-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE DATABASE "cryosoftmini" --------------------------
CREATE DATABASE IF NOT EXISTS `cryosoftmini` CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cryosoftmini`;
-- ---------------------------------------------------------


-- CREATE TABLE "component" --------------------------------
-- CREATE TABLE "component" ------------------------------------
CREATE TABLE `component` ( 
	`id` Int( 255 ) AUTO_INCREMENT NOT NULL,
	`userid` Int( 255 ) NOT NULL,
	`comment` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`blscode` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`date` DateTime NULL,
	`fat_type` Smallint( 6 ) NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "langauge" ---------------------------------
-- CREATE TABLE "langauge" -------------------------------------
CREATE TABLE `langauge` ( 
	`id` Int( 255 ) NOT NULL,
	`name` VarChar( 2 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "money" ------------------------------------
-- CREATE TABLE "money" ----------------------------------------
CREATE TABLE `money` ( 
	`id` Int( 255 ) NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`unit` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "product" ----------------------------------
-- CREATE TABLE "product" --------------------------------------
CREATE TABLE `product` ( 
	`id` Int( 255 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`id_study` Int( 255 ) NOT NULL,
	`proISO` TinyInt( 255 ) NULL,
	`proRealWiegth` Double( 22, 0 ) NULL,
	`provolume` Double( 22, 0 ) NULL,
	`proWeigth` Double( 22, 0 ) NULL,
	`id_meshGeneral` Int( 255 ) NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "product_EMLT" -----------------------------
-- CREATE TABLE "product_EMLT" ---------------------------------
CREATE TABLE `product_EMLT` ( 
	`id` Int( 255 ) AUTO_INCREMENT NOT NULL,
	`id_pro` Int( 255 ) NOT NULL,
	`id_comp` Int( 255 ) NULL,
	`id_shape` Int( 255 ) NOT NULL,
	`insert_line_order` Int( 255 ) NULL,
	`node_decim` Int( 255 ) NULL,
	`original_thick` Double( 22, 0 ) NULL,
	`Pro_dehyd` Float( 12, 0 ) NULL,
	`Pro_dehyd_cost` Float( 12, 0 ) NULL,
	`pro_elmt_iso` TinyInt( 255 ) NULL,
	`pro_elmt_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`pro_elmt_realwiegth` Double( 22, 0 ) NULL,
	`pro_elmt_wiegth` Double( 22, 0 ) NULL,
	`shape_param1` Float( 12, 0 ) NULL,
	`shape_param2` Float( 12, 0 ) NULL,
	`shape_param3` Float( 12, 0 ) NULL,
	`shape_pos1` Float( 12, 0 ) NULL,
	`shape_pos2` Float( 12, 0 ) NULL,
	`shape_pos3` Float( 12, 0 ) NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "shape" ------------------------------------
-- CREATE TABLE "shape" ----------------------------------------
CREATE TABLE `shape` ( 
	`id` Int( 255 ) NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`code` Int( 255 ) NULL,
	`SYM1` TinyInt( 255 ) NULL,
	`SYM2` TinyInt( 255 ) NULL,
	`SYM3` TinyInt( 255 ) NULL,
	`AXISYM1` TinyInt( 255 ) NULL,
	`AXISYM2` TinyInt( 255 ) NULL,
	`AXISYM3` TinyInt( 255 ) NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "studies" ----------------------------------
-- CREATE TABLE "studies" --------------------------------------
CREATE TABLE `studies` ( 
	`id` Int( 255 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`calculatemode` TinyInt( 255 ) NULL,
	`opeconomic` TinyInt( 255 ) NULL,
	`opcryogen` TinyInt( 255 ) NULL,
	`opperform` TinyInt( 255 ) NULL,
	`opallow` TinyInt( 255 ) NULL,
	`proid` Int( 255 ) NOT NULL,
	`packid` Int( 255 ) NULL,
	`productionid` Int( 255 ) NULL,
	`reportid` Int( 255 ) NULL,
	`priceid` Int( 255 ) NULL,
	`id_user` Int( 255 ) NOT NULL,
	`studyResultid` Int( 255 ) NULL,
	`cmment` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "user" -------------------------------------
-- CREATE TABLE "user" -----------------------------------------
CREATE TABLE `user` ( 
	`id` Int( 255 ) AUTO_INCREMENT NOT NULL,
	`username` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`password` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`id_language` Int( 255 ) NOT NULL,
	`id_monytary` Int( 255 ) NOT NULL,
	`userRole` TinyInt( 255 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- Dump data of "component" --------------------------------
-- ---------------------------------------------------------


-- Dump data of "langauge" ---------------------------------
-- ---------------------------------------------------------


-- Dump data of "money" ------------------------------------
-- ---------------------------------------------------------


-- Dump data of "product" ----------------------------------
-- ---------------------------------------------------------


-- Dump data of "product_EMLT" -----------------------------
-- ---------------------------------------------------------


-- Dump data of "shape" ------------------------------------
-- ---------------------------------------------------------


-- Dump data of "studies" ----------------------------------
-- ---------------------------------------------------------


-- Dump data of "user" -------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "lnk_studies_product" ----------------------
-- CREATE INDEX "lnk_studies_product" --------------------------
CREATE INDEX `lnk_studies_product` USING BTREE ON `product`( `id_study` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "lnk_component_product_EMLT" ---------------
-- CREATE INDEX "lnk_component_product_EMLT" -------------------
CREATE INDEX `lnk_component_product_EMLT` USING BTREE ON `product_EMLT`( `id_comp` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "lnk_product_product_EMLT" -----------------
-- CREATE INDEX "lnk_product_product_EMLT" ---------------------
CREATE INDEX `lnk_product_product_EMLT` USING BTREE ON `product_EMLT`( `id_pro` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "lnk_shape_product_EMLT" -------------------
-- CREATE INDEX "lnk_shape_product_EMLT" -----------------------
CREATE INDEX `lnk_shape_product_EMLT` USING BTREE ON `product_EMLT`( `id_shape` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "lnk_product_studies" ----------------------
-- CREATE INDEX "lnk_product_studies" --------------------------
CREATE INDEX `lnk_product_studies` USING BTREE ON `studies`( `proid` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "lnk_user_studies" -------------------------
-- CREATE INDEX "lnk_user_studies" -----------------------------
CREATE INDEX `lnk_user_studies` USING BTREE ON `studies`( `id_user` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "lnk_langauge_user" ------------------------
-- CREATE INDEX "lnk_langauge_user" ----------------------------
CREATE INDEX `lnk_langauge_user` USING BTREE ON `user`( `id_language` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "lnk_money_user" ---------------------------
-- CREATE INDEX "lnk_money_user" -------------------------------
CREATE INDEX `lnk_money_user` USING BTREE ON `user`( `id_monytary` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "lnk_studies_product" -----------------------
-- CREATE LINK "lnk_studies_product" ---------------------------
ALTER TABLE `product`
	ADD CONSTRAINT `lnk_studies_product` FOREIGN KEY ( `id_study` )
	REFERENCES `studies`( `id` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "lnk_component_product_EMLT" ----------------
-- CREATE LINK "lnk_component_product_EMLT" --------------------
ALTER TABLE `product_EMLT`
	ADD CONSTRAINT `lnk_component_product_EMLT` FOREIGN KEY ( `id_comp` )
	REFERENCES `component`( `id` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "lnk_product_product_EMLT" ------------------
-- CREATE LINK "lnk_product_product_EMLT" ----------------------
ALTER TABLE `product_EMLT`
	ADD CONSTRAINT `lnk_product_product_EMLT` FOREIGN KEY ( `id_pro` )
	REFERENCES `product`( `id` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "lnk_shape_product_EMLT" --------------------
-- CREATE LINK "lnk_shape_product_EMLT" ------------------------
ALTER TABLE `product_EMLT`
	ADD CONSTRAINT `lnk_shape_product_EMLT` FOREIGN KEY ( `id_shape` )
	REFERENCES `shape`( `id` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "lnk_product_studies" -----------------------
-- CREATE LINK "lnk_product_studies" ---------------------------
ALTER TABLE `studies`
	ADD CONSTRAINT `lnk_product_studies` FOREIGN KEY ( `proid` )
	REFERENCES `product`( `id` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "lnk_user_studies" --------------------------
-- CREATE LINK "lnk_user_studies" ------------------------------
ALTER TABLE `studies`
	ADD CONSTRAINT `lnk_user_studies` FOREIGN KEY ( `id_user` )
	REFERENCES `user`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "lnk_langauge_user" -------------------------
-- CREATE LINK "lnk_langauge_user" -----------------------------
ALTER TABLE `user`
	ADD CONSTRAINT `lnk_langauge_user` FOREIGN KEY ( `id_language` )
	REFERENCES `langauge`( `id` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "lnk_money_user" ----------------------------
-- CREATE LINK "lnk_money_user" --------------------------------
ALTER TABLE `user`
	ADD CONSTRAINT `lnk_money_user` FOREIGN KEY ( `id_monytary` )
	REFERENCES `money`( `id` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


