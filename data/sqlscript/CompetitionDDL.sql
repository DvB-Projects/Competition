-- An Orm Apart -- Wednesday 14th of November 2018 08:04:50 PM
-- 
--if database does not exist, create the database


SET FOREIGN_KEY_CHECKS = 0;

-- modernways.be
-- created by an orm apart
-- Entreprise de modes et de manières modernes
-- MySql: CREATE TABLE Player
-- Created on Wednesday 14th of November 2018 08:04:50 PM
DROP TABLE IF EXISTS `Game`; 
DROP TABLE IF EXISTS `Player`;
DROP TABLE IF EXISTS `Team`;
DROP TABLE IF EXISTS `Liga`;


-- modernways.be
-- created by an orm apart
-- Entreprise de modes et de manières modernes
-- MySql: CREATE TABLE Team
-- Created on Wednesday 14th of November 2018 08:04:50 PM
-- 
CREATE TABLE `Team` (
	`Name` NVARCHAR (50) NOT NULL,
	`Location` NVARCHAR (50) NOT NULL,
	`Score` NVARCHAR (50) NOT NULL,
	`Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	CONSTRAINT PRIMARY KEY(Id),
	CONSTRAINT uc_Team_Name UNIQUE (Name));




CREATE TABLE `Player` (
	`FirstName` NVARCHAR (50) NOT NULL,
	`LastName` NVARCHAR (120) NOT NULL,
	`Email` NVARCHAR (255) NULL,
	`Address1` NVARCHAR (255) NULL,
	`Address2` NVARCHAR (255) NULL,
	`PostalCode` VARCHAR (20) NULL,
	`City` NVARCHAR (80) NULL,
	`Country` NVARCHAR (40) NULL,
	`Phone` VARCHAR (25) NULL,
	`Birthday` DATETIME NULL,
	`Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	CONSTRAINT PRIMARY KEY(Id),
	`TeamId` INT UNSIGNED NULL,
	CONSTRAINT fk_PlayerTeamId FOREIGN KEY (`TeamId`) REFERENCES `Team` (`Id`));

-- modernways.be
-- created by an orm apart
-- Entreprise de modes et de manières modernes
-- MySql: CREATE TABLE Liga
-- Created on Wednesday 14th of November 2018 08:04:50 PM
-- 
CREATE TABLE `Liga` (
	`Name` NVARCHAR (50) NOT NULL,
	`Year` CHAR (4) NOT NULL,
	`IsInPlanning` BIT NULL,
	`Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	CONSTRAINT PRIMARY KEY(Id));

-- modernways.be
-- created by an orm apart
-- Entreprise de modes et de manières modernes
-- MySql: CREATE TABLE Team
-- Created on Wednesday 14th of November 2018 08:04:50 PM
-- 


-- modernways.be
-- created by an orm apart
-- Entreprise de modes et de manières modernes
-- MySql: CREATE TABLE Game
-- Created on Wednesday 14th of November 2018 08:04:50 PM
-- 
CREATE TABLE `Game` (
	`Date` DATETIME NULL,
	`Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	CONSTRAINT PRIMARY KEY(Id),
	`Status` NVARCHAR (120) NOT NULL,
	`ScoreHome` NVARCHAR (120) NOT NULL,
	`ScoreVisitors` NVARCHAR (120) NOT NULL,
	`TeamHomeId` INT UNSIGNED NULL,
	`TeamVisitorId` INT UNSIGNED NULL,
	`LigaId` INT UNSIGNED NULL,
	CONSTRAINT fk_GameTeamHomeId FOREIGN KEY (`TeamHomeId`) REFERENCES `Team` (`Id`),
	CONSTRAINT fk_GameTeamVisitorId FOREIGN KEY (`TeamVisitorId`) REFERENCES `Team` (`Id`),
	CONSTRAINT fk_GameLigaId FOREIGN KEY (`LigaId`) REFERENCES `Liga` (`Id`));

-- With the MySQL FOREIGN_KEY_CHECKS variable,
-- you don't have to worry about the order of your
-- DROP and CREATE TABLE statements at all, and you can
-- write them in any order you like, even the exact opposite.
SET FOREIGN_KEY_CHECKS = 1;

