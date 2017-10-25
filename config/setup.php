#!/usr/bin/php
<?php
date_default_timezone_set('Europe/Paris');
ini_set ('display_errors', 1);
error_reporting (E_ALL | E_STRICT);


if (array_key_exists(1, $argv)) 
{
	ft_create_data_base($argv);
}
else
{
	echo "Usage : Create - Drop\n";
}

function ft_create_data_base($argv)
{

	if ($argv[1] === "Create" || $argv[1] === "Drop") 
	{
		include('../config/database.php');
	//
	//			CREATE DATABASE
	//
		if ($argv[1] === "Create")
		{
			try {
				$dbh = new PDO("mysql:host=" . $DB_DSN, $DB_USER, $DB_PASSWORD);
				$dbh->exec("
					CREATE DATABASE IF NOT EXISTS " . $DB_NAME . " DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
					")
				or die(print_r($dbh->errorInfo(), true));
				echo "Création de la base de donnée réussie\n";
				$dbh = null;
			} catch (PDOException $e) {
				die("DB ERROR: ". $e->getMessage());
			}
	//
	//			CREATE TABLE VUE !
	//
			try {
				$dbh = new PDO("mysql:host=" . $DB_DSN . ";dbname=" . $DB_NAME . "", $DB_USER, $DB_PASSWORD);
				$dbh->exec("CREATE TABLE IF NOT EXISTS VUE
					(
						VUE_ID 		INT UNSIGNED		NOT NULL AUTO_INCREMENT,
						VUE_ACTIF 	INT 				NOT NULL,
						VUE_ID_SRC 	INT 				NOT NULL,
						VUE_ID_DST 	INT 				NOT NULL,

						CONSTRAINT PK_VUE_ID	PRIMARY KEY (VUE_ID)
					)"
				);
				echo "Création de la table VUE\n";
				$dbh = null;
			} catch (PDOException $e) {
				die("DB TABLE VUE ERROR: ". $e->getMessage());
			}
	//
	//			CREATE TABLE AIME !
	//
			try {
				$dbh = new PDO("mysql:host=" . $DB_DSN . ";dbname=" . $DB_NAME . "", $DB_USER, $DB_PASSWORD);
				$dbh->exec("CREATE TABLE IF NOT EXISTS AIME
					(
						AIM_ID 		INT UNSIGNED		NOT NULL AUTO_INCREMENT,
						AIM_ACTIF 	INT 				NOT NULL,
						AIM_ID_SRC 	INT 				NOT NULL,
						AIM_ID_DST 	INT 				NOT NULL,

						CONSTRAINT PK_AIM_ID	PRIMARY KEY (AIM_ID)
					)"
				);
				echo "Création de la table AIME\n";
				$dbh = null;
			} catch (PDOException $e) {
				die("DB TABLE AIME ERROR: ". $e->getMessage());
			}
	//
	//			CREATE TABLE CONNECTE !
	//
			try {
				$dbh = new PDO("mysql:host=" . $DB_DSN . ";dbname=" . $DB_NAME . "", $DB_USER, $DB_PASSWORD);
				$dbh->exec("CREATE TABLE IF NOT EXISTS CONNECTE
					(
						CON_ID 			INT UNSIGNED	NOT NULL AUTO_INCREMENT,
						CON_ACTIF 		INT 			NOT NULL,
						CON_LAST_DATE 	DATE 			NOT NULL,

						CONSTRAINT PK_CON_ID	PRIMARY KEY (CON_ID)
					)"
				);
				echo "Création de la table CONNECTE\n";
				$dbh = null;
			} catch (PDOException $e) {
				die("DB TABLE CONNECTE ERROR: ". $e->getMessage());
			}
	//
	//			CREATE TABLE IMAGE !
	//
			try {
				$dbh = new PDO("mysql:host=" . $DB_DSN . ";dbname=" . $DB_NAME . "", $DB_USER, $DB_PASSWORD);
				$dbh->exec("CREATE TABLE IF NOT EXISTS IMAGE
					(
						IMG_ID 		INT UNSIGNED  	NOT NULL AUTO_INCREMENT,
						IMG_PROFIL 	VARCHAR(1024) 	NOT NULL,
						IMG_1 		VARCHAR(1024) 	NOT NULL,
						IMG_2 		VARCHAR(1024) 	NOT NULL,
						IMG_3 		VARCHAR(1024) 	NOT NULL,
						IMG_4 		VARCHAR(1024) 	NOT NULL,

						CONSTRAINT PK_IMG_ID	PRIMARY KEY (IMG_ID)
					)"
				);
				echo "Création de la table IMAGE\n";
				$dbh = null;
			} catch (PDOException $e) {
				die("DB TABLE IMAGE ERROR: ". $e->getMessage());
			}
	//
	//			CREATE TABLE MESSAGE !
	//
			try {
				$dbh = new PDO("mysql:host=" . $DB_DSN . ";dbname=" . $DB_NAME . "", $DB_USER, $DB_PASSWORD);
				$dbh->exec("CREATE TABLE IF NOT EXISTS MESSAGE
					(
						MES_ID 			INT UNSIGNED  	NOT NULL AUTO_INCREMENT,
						MES_ID_SRC 		INT 			NOT NULL,
						MES_ID_DST 		INT 			NOT NULL,

						CONSTRAINT PK_MES_ID	PRIMARY KEY (MES_ID)
					)"
				);
				echo "Création de la table MESSAGE\n";
				$dbh = null;
			} catch (PDOException $e) {
				die("DB TABLE MESSAGE ERROR: ". $e->getMessage());
			}
	//
	//			CREATE TABLE CHAT !
	//
			try {
				$dbh = new PDO("mysql:host=" . $DB_DSN . ";dbname=" . $DB_NAME . "", $DB_USER, $DB_PASSWORD);
				$dbh->exec("CREATE TABLE IF NOT EXISTS CHAT
					(
						CHA_ID 			INT UNSIGNED  	NOT NULL AUTO_INCREMENT,
						CHA_MESSAGE		VARCHAR(1024)	NOT NULL,
						CHA_DATE		DATE			NOT NULL,
						CHA_MES 		INT UNSIGNED  	NOT NULL,

						CONSTRAINT PK_CHA_ID	PRIMARY KEY (CHA_ID),
						CONSTRAINT FK_CHA_MES	FOREIGN KEY (CHA_MES) 	REFERENCES MESSAGE (MES_ID) 	ON DELETE NO ACTION 	ON UPDATE NO ACTION
				)"
			);
				echo "Création de la table CHAT\n";
				$dbh = null;
			} catch (PDOException $e) {
				die("DB TABLE CHAT ERROR: ". $e->getMessage());
			}
	//
	//			CREATE TABLE BLOQUER !
	//
			try {
				$dbh = new PDO("mysql:host=" . $DB_DSN . ";dbname=" . $DB_NAME . "", $DB_USER, $DB_PASSWORD);
				$dbh->exec("CREATE TABLE IF NOT EXISTS BLOQUER
					(
						BLO_ID 			INT UNSIGNED  	NOT NULL AUTO_INCREMENT,
						BLO_ID_SRC 		INT 			NOT NULL,
						BLO_ID_DST 		INT 			NOT NULL,

						CONSTRAINT PK_BLO_ID	PRIMARY KEY (BLO_ID)
					)"
				);
				echo "Création de la table BLOQUER\n";
				$dbh = null;
			} catch (PDOException $e) {
				die("DB TABLE BLOQUER ERROR: ". $e->getMessage());
			}
	//
	//			CREATE TABLE TAG
	//
			try {
				$dbh = new PDO("mysql:host=" . $DB_DSN . ";dbname=" . $DB_NAME . "", $DB_USER, $DB_PASSWORD);
				$dbh->exec("CREATE TABLE IF NOT EXISTS TAG
					(
						TAG_ID 			INT UNSIGNED  	NOT NULL AUTO_INCREMENT,
						TAG_NAME 		INT 			NOT NULL,

						CONSTRAINT PK_TAG_ID	PRIMARY KEY (TAG_ID)
					)"
				);
				echo "Création de la table TAG\n";
				$dbh = null;
			} catch (PDOException $e) {
				die("DB TABLE TAG ERROR: ". $e->getMessage());
			}
	//
	//			CREATE TABLE INFORMATION
	//
			try {
				$dbh = new PDO("mysql:host=" . $DB_DSN . ";dbname=" . $DB_NAME . "", $DB_USER, $DB_PASSWORD);
				$dbh->exec("CREATE TABLE IF NOT EXISTS INFORMATION
					(
						INF_ID					INT UNSIGNED  			NOT NULL,
						INF_SEXE				ENUM('H','F') 			NOT NULL,
						INF_AGE					INT 					NOT NULL,
						INF_ORIENTATION 		ENUM('He','Ho','Bi') 	NOT NULL,
						INF_SEARCH_SEXE			ENUM('H','F') 			NOT NULL,
						INF_SEARCH_AGE_D		INT 					NOT NULL,
						INF_SEARCH_AGE_F		INT 					NOT NULL,
						INF_SEARCH_ORIENTATION 	ENUM('He','Ho','Bi') 	NOT NULL,
						INF_BIO 				VARCHAR(512) 			NOT NULL,
						INF_SCORE 				INT 					NOT NULL,
						INF_GEOLOCATION 		FLOAT 					NOT NULL,
						INF_TAG 				INT UNSIGNED			NOT NULL,
						INF_IMAGE 				INT UNSIGNED			NOT NULL,
						INF_CONNECTE 			INT UNSIGNED			NOT NULL,
						INF_MESSAGE 			INT UNSIGNED			NOT NULL,
						INF_BLOQUER 			INT UNSIGNED			NOT NULL,
						INF_VUE					INT UNSIGNED			NOT NULL,

						CONSTRAINT PK_INF_ID		PRIMARY KEY (INF_ID)
					)"
				);
				echo "Création de la table INFORMATION\n";
				$dbh = null;
			} catch (PDOException $e) {
				die("DB TABLE INFORMATION ERROR: ". $e->getMessage());
			}
	//
	//			CREATE TABLE UTILISATEUR
	//
			try {
				$dbh = new PDO("mysql:host=" . $DB_DSN . ";dbname=" . $DB_NAME . "", $DB_USER, $DB_PASSWORD);
				$dbh->exec("
					CREATE TABLE IF NOT EXISTS UTILISATEUR
					(
					UTI_ID		INT UNSIGNED	NOT NULL AUTO_INCREMENT,
					UTI_NOM		VARCHAR(25) 	NOT NULL,
					UTI_PRENOM	VARCHAR(25) 	NOT NULL,
					UTI_LOGIN	VARCHAR(25) 	NOT NULL,
					UTI_PWD		VARCHAR(512) 	NOT NULL,
					UTI_MAIL	VARCHAR(140) 	NOT NULL,
					UTI_CLE		VARCHAR(1024) 	NOT NULL,
					UTI_ACTIF	INT 			NOT NULL,
					UTI_INFO	INT UNSIGNED	,

					CONSTRAINT PK_UTI_ID	PRIMARY KEY (UTI_ID),
					CONSTRAINT FK_UTI_INFO	FOREIGN KEY (UTI_INFO) 	REFERENCES INFORMATION (INF_ID) 	ON DELETE NO ACTION 	ON UPDATE NO ACTION
				)"
			);
				echo "Création de la table UTILISATEUR\n";
				$dbh = null;
			} catch (PDOException $e) {
				die("DB TABLE UTILISATEUR ERROR: ". $e->getMessage());
			}
		}
	//
	//			DROP DATABASE
	//
		elseif ($argv[1] === "Drop") 
		{
			try {
				$dbh = new PDO("mysql:host=" . $DB_DSN . ";dbname=" . $DB_NAME . "", $DB_USER, $DB_PASSWORD);
				$dbh->exec("DROP DATABASE IF EXISTS Matcha")
				or die(print_r($dbh->errorInfo(), true));
				echo "Drop de la base de donnée " . $DB_NAME . "\n";
				$dbh = null;
			} catch (PDOException $e) {
				die("DB DROP ERROR: ". $e->getMessage());
			}

		}
		else
		{
			echo "Usage : Create - Drop\n";
		}
	}
}