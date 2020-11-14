# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Hôte: 127.0.0.1 (MySQL 5.7.26)
# Base de données: csac_db
# Temps de génération: 2020-11-14 21:59:58 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table ad_spaces
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ad_spaces`;

CREATE TABLE `ad_spaces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_space` text,
  `ad_code_728` text,
  `ad_code_468` text,
  `ad_code_300` text,
  `ad_code_234` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `ad_spaces` WRITE;
/*!40000 ALTER TABLE `ad_spaces` DISABLE KEYS */;

INSERT INTO `ad_spaces` (`id`, `ad_space`, `ad_code_728`, `ad_code_468`, `ad_code_300`, `ad_code_234`)
VALUES
	(1,'index_top',NULL,NULL,NULL,NULL),
	(2,'index_bottom',NULL,NULL,NULL,NULL),
	(3,'post_top',NULL,NULL,NULL,NULL),
	(4,'post_bottom',NULL,NULL,NULL,NULL),
	(5,'category_top',NULL,NULL,NULL,NULL),
	(6,'category_bottom',NULL,NULL,NULL,NULL),
	(7,'tag_top',NULL,NULL,NULL,NULL),
	(8,'tag_bottom',NULL,NULL,NULL,NULL),
	(9,'search_top',NULL,NULL,NULL,NULL),
	(10,'search_bottom',NULL,NULL,NULL,NULL),
	(11,'profile_top',NULL,NULL,NULL,NULL),
	(12,'profile_bottom',NULL,NULL,NULL,NULL),
	(13,'reading_list_top',NULL,NULL,NULL,NULL),
	(14,'reading_list_bottom',NULL,NULL,NULL,NULL),
	(15,'sidebar_top',NULL,NULL,NULL,NULL),
	(16,'sidebar_bottom',NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `ad_spaces` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` tinyint(4) DEFAULT '1',
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `keywords` varchar(500) DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `category_order` smallint(6) DEFAULT NULL,
  `show_on_menu` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `lang_id`, `name`, `slug`, `description`, `keywords`, `parent_id`, `category_order`, `show_on_menu`, `created_at`)
VALUES
	(1,1,'Actualités','actualites','Actualités','Actualités csac',0,1,1,'2020-11-04 08:11:51'),
	(2,1,'Documents','documents','Documents','Documents',0,1,1,'2020-11-04 08:13:02'),
	(3,1,'Communiqués','communiques','Communiqués','Communiqués',0,1,1,'2020-11-04 08:13:34'),
	(4,1,'Les Actes','les-actes','Les Actes','Les Actes',0,1,1,'2020-11-04 08:17:41'),
	(5,1,'Services Techniques','services-techniques','Services Techniques','Services Techniques',0,1,1,'2020-11-04 09:20:32'),
	(6,1,'Presse ','presse','Communiqués de presse','',3,NULL,1,'2020-11-14 06:49:52'),
	(7,1,'Communiqués Officiels','communiques-officiels','Communiqués Officiels','Communiqués Officiels CSAC',3,NULL,1,'2020-11-14 06:50:45'),
	(8,1,'Nécrologie','necrologie','Communiqués Nécrologique','Nécrologie',3,NULL,1,'2020-11-14 06:51:27'),
	(9,1,'Constitution','constitution','Constitution  de la républiqué démocratique du congo','',2,NULL,1,'2020-11-14 07:04:31');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `comment` varchar(5000) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table contacts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` varchar(5000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`)
VALUES
	(1,'Marilys','superadmin@example.com','From monday to friday from 9am to 12am and from 3pm to 8pm. Saturday from 8am to 8pm. Sunday closed.','2020-11-14 09:30:18');

/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table files
# ------------------------------------------------------------

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;

INSERT INTO `files` (`id`, `file_name`)
VALUES
	(1,'logo-d.png');

/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table followers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `followers`;

CREATE TABLE `followers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `following_id` int(11) DEFAULT NULL,
  `follower_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table gallery_albums
# ------------------------------------------------------------

DROP TABLE IF EXISTS `gallery_albums`;

CREATE TABLE `gallery_albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` tinyint(4) DEFAULT '1',
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table gallery_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `gallery_categories`;

CREATE TABLE `gallery_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` tinyint(4) DEFAULT '1',
  `name` varchar(255) DEFAULT NULL,
  `album_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table general_settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `general_settings`;

CREATE TABLE `general_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_lang` tinyint(4) NOT NULL DEFAULT '1',
  `layout` varchar(30) DEFAULT 'layout_1',
  `dark_mode` tinyint(1) DEFAULT '0',
  `timezone` varchar(255) DEFAULT 'America/New_York',
  `slider_active` tinyint(1) DEFAULT '1',
  `site_color` varchar(30) DEFAULT 'default',
  `show_pageviews` tinyint(1) DEFAULT '1',
  `show_rss` tinyint(1) DEFAULT '1',
  `logo_path` varchar(255) DEFAULT NULL,
  `mobile_logo_path` varchar(255) DEFAULT NULL,
  `favicon_path` varchar(255) DEFAULT NULL,
  `facebook_app_id` varchar(500) DEFAULT NULL,
  `facebook_app_secret` varchar(500) DEFAULT NULL,
  `google_client_id` varchar(500) DEFAULT NULL,
  `google_client_secret` varchar(500) DEFAULT NULL,
  `google_analytics` text,
  `google_adsense_code` text,
  `mail_library` varchar(100) DEFAULT 'swift',
  `mail_protocol` varchar(100) DEFAULT 'smtp',
  `mail_host` varchar(255) DEFAULT NULL,
  `mail_port` varchar(255) DEFAULT '587',
  `mail_username` varchar(255) DEFAULT NULL,
  `mail_password` varchar(255) DEFAULT NULL,
  `mail_title` varchar(255) DEFAULT NULL,
  `send_email_contact_messages` tinyint(1) DEFAULT '0',
  `mail_options_account` varchar(255) DEFAULT NULL,
  `primary_font` varchar(255) DEFAULT 'open_sans',
  `secondary_font` varchar(255) DEFAULT 'roboto',
  `facebook_comment` text,
  `pagination_per_page` tinyint(4) DEFAULT '6',
  `menu_limit` tinyint(4) DEFAULT '5',
  `multilingual_system` tinyint(1) DEFAULT '1',
  `registration_system` tinyint(1) DEFAULT '1',
  `comment_system` tinyint(1) DEFAULT '1',
  `comment_approval_system` tinyint(1) DEFAULT '1',
  `approve_posts_before_publishing` tinyint(1) DEFAULT '1',
  `emoji_reactions` tinyint(1) DEFAULT '1',
  `emoji_reactions_type` varchar(10) DEFAULT 'gif',
  `head_code` text,
  `inf_key` varchar(500) NOT NULL,
  `purchase_code` varchar(500) NOT NULL,
  `recaptcha_site_key` varchar(500) DEFAULT NULL,
  `recaptcha_secret_key` varchar(500) DEFAULT NULL,
  `recaptcha_lang` varchar(30) DEFAULT NULL,
  `cache_system` tinyint(1) DEFAULT '0',
  `cache_refresh_time` int(11) DEFAULT '1800',
  `refresh_cache_database_changes` tinyint(1) DEFAULT '0',
  `text_editor_lang` varchar(10) DEFAULT 'en',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `general_settings` WRITE;
/*!40000 ALTER TABLE `general_settings` DISABLE KEYS */;

INSERT INTO `general_settings` (`id`, `site_lang`, `layout`, `dark_mode`, `timezone`, `slider_active`, `site_color`, `show_pageviews`, `show_rss`, `logo_path`, `mobile_logo_path`, `favicon_path`, `facebook_app_id`, `facebook_app_secret`, `google_client_id`, `google_client_secret`, `google_analytics`, `google_adsense_code`, `mail_library`, `mail_protocol`, `mail_host`, `mail_port`, `mail_username`, `mail_password`, `mail_title`, `send_email_contact_messages`, `mail_options_account`, `primary_font`, `secondary_font`, `facebook_comment`, `pagination_per_page`, `menu_limit`, `multilingual_system`, `registration_system`, `comment_system`, `comment_approval_system`, `approve_posts_before_publishing`, `emoji_reactions`, `emoji_reactions_type`, `head_code`, `inf_key`, `purchase_code`, `recaptcha_site_key`, `recaptcha_secret_key`, `recaptcha_lang`, `cache_system`, `cache_refresh_time`, `refresh_cache_database_changes`, `text_editor_lang`)
VALUES
	(1,1,'layout_3',0,'America/New_York',1,'blue',1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,'swift','smtp',NULL,'587',NULL,NULL,'CSAC',0,NULL,'roboto','roboto','',12,7,1,1,1,1,1,0,'png','','CSAC-POWERED-BY-HOLDUIX','success',NULL,NULL,'en',0,1800,0,'en');

/*!40000 ALTER TABLE `general_settings` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_big` varchar(255) DEFAULT NULL,
  `image_mid` varchar(255) DEFAULT NULL,
  `image_small` varchar(255) DEFAULT NULL,
  `image_slider` varchar(255) DEFAULT NULL,
  `image_mime` varchar(30) DEFAULT 'jpg',
  `file_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;

INSERT INTO `images` (`id`, `image_big`, `image_mid`, `image_small`, `image_slider`, `image_mime`, `file_name`)
VALUES
	(1,'uploads/images/image_750x_5fa4c135d9ca1.jpg','uploads/images/image_750x415_5fa4c13609a28.jpg','uploads/images/image_100x75_5fa4c1363854a.jpg','uploads/images/image_650x433_5fa4c13643331.jpg','jpg','500_F_354954080_PT5QqfdKCzpRsVTbfnooXYZI5ChiceAr'),
	(2,'uploads/images/image_750x_5fa9372d5359d.jpg','uploads/images/image_750x415_5fa9372d995ea.jpg','uploads/images/image_100x75_5fa9372dc5c4b.jpg','uploads/images/image_650x433_5fa9372dd1ce8.jpg','jpg','500_F_296298603_TWCtXyRq88JWNGuj3pKBqudzDIhmHw5b'),
	(3,'uploads/images/image_750x_5fa937e38bc4f.jpg','uploads/images/image_750x415_5fa937e3bb67e.jpg','uploads/images/image_100x75_5fa937e409b40.jpg','uploads/images/image_650x433_5fa937e41bcb1.jpg','jpg','500_F_168948881_jFgQk9Scf9PbtGxuVzXcTFoznP8iCyxm');

/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table languages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `languages`;

CREATE TABLE `languages` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `short_form` varchar(30) NOT NULL,
  `language_code` varchar(30) NOT NULL,
  `folder_name` varchar(120) NOT NULL,
  `text_direction` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `language_order` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;

INSERT INTO `languages` (`id`, `name`, `short_form`, `language_code`, `folder_name`, `text_direction`, `status`, `language_order`)
VALUES
	(1,'Français','fr','fr-FR','default','ltr',1,1);

/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` tinyint(4) DEFAULT '1',
  `title` varchar(500) DEFAULT NULL,
  `page_description` varchar(500) DEFAULT NULL,
  `page_keywords` varchar(500) DEFAULT NULL,
  `slug` varchar(500) DEFAULT NULL,
  `is_custom` tinyint(1) DEFAULT '1',
  `page_content` longtext,
  `page_order` int(11) DEFAULT '5',
  `page_active` tinyint(1) DEFAULT '1',
  `title_active` tinyint(1) DEFAULT '1',
  `breadcrumb_active` tinyint(1) DEFAULT '1',
  `right_column_active` tinyint(1) DEFAULT '1',
  `need_auth` tinyint(1) DEFAULT '0',
  `location` varchar(255) DEFAULT 'header',
  `link` varchar(1000) DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;

INSERT INTO `pages` (`id`, `lang_id`, `title`, `page_description`, `page_keywords`, `slug`, `is_custom`, `page_content`, `page_order`, `page_active`, `title_active`, `breadcrumb_active`, `right_column_active`, `need_auth`, `location`, `link`, `parent_id`, `created_at`)
VALUES
	(1,1,'Multimédias','Multimédias','gallery, Conseil Supérieur de l\'Audiovisuel et de la Communication','gallery',0,NULL,5,1,1,1,0,0,'header',NULL,0,'2019-11-17 19:58:19'),
	(2,1,'Contact','Contact Page','contact, infinite','contact',0,NULL,6,1,1,1,0,0,'header',NULL,0,'2019-11-17 19:59:53'),
	(3,1,'Terms & Conditions','Terms & Conditions Page','terms, conditions, infinite','terms-conditions',0,NULL,1,1,1,1,0,0,'footer',NULL,0,'2019-11-17 20:01:38'),
	(4,1,'Questions frequement posées','Des questions frequement posées','Questions frequement posées,','faq',1,'',1,1,1,1,1,0,'footer',NULL,0,'2020-11-08 08:56:13'),
	(5,1,'Les Membres du CSAC RDC','Tout les membres du CSAC RDC','CSAC, Membres du CSAC RDC, CSAC Membres','members',1,'',1,1,1,1,1,0,'footer',NULL,0,'2020-11-09 01:21:47'),
	(6,1,'Services','Services du CSAC','Services du CSAC','services',1,'',1,1,1,1,1,0,'footer',NULL,0,'2020-11-09 03:35:55'),
	(7,1,'A propos du CSAC','A propos du CSAC','A propos du CSAC, C\'est quoi le CSAC, CSAC','about-us',1,'',1,1,1,1,1,0,'footer',NULL,0,'2020-11-09 23:28:55');

/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table photos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `photos`;

CREATE TABLE `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` tinyint(4) DEFAULT '1',
  `title` varchar(500) DEFAULT NULL,
  `album_id` int(11) DEFAULT '1',
  `category_id` int(11) DEFAULT NULL,
  `path_big` varchar(255) DEFAULT NULL,
  `path_small` varchar(255) DEFAULT NULL,
  `is_album_cover` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table poll_votes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `poll_votes`;

CREATE TABLE `poll_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poll_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vote` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table polls
# ------------------------------------------------------------

DROP TABLE IF EXISTS `polls`;

CREATE TABLE `polls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` tinyint(4) DEFAULT '1',
  `question` text,
  `option1` text,
  `option2` text,
  `option3` text,
  `option4` text,
  `option5` text,
  `option6` text,
  `option7` text,
  `option8` text,
  `option9` text,
  `option10` text,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table post_files
# ------------------------------------------------------------

DROP TABLE IF EXISTS `post_files`;

CREATE TABLE `post_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `file_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `post_files` WRITE;
/*!40000 ALTER TABLE `post_files` DISABLE KEYS */;

INSERT INTO `post_files` (`id`, `post_id`, `file_id`)
VALUES
	(1,1,1);

/*!40000 ALTER TABLE `post_files` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table post_images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `post_images`;

CREATE TABLE `post_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` tinyint(4) DEFAULT '1',
  `title` varchar(500) DEFAULT NULL,
  `title_slug` varchar(500) DEFAULT NULL,
  `summary` varchar(1000) DEFAULT NULL,
  `content` longtext,
  `keywords` varchar(500) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image_big` varchar(255) DEFAULT NULL,
  `image_mid` varchar(255) DEFAULT NULL,
  `image_small` varchar(255) DEFAULT NULL,
  `image_slider` varchar(255) DEFAULT NULL,
  `image_mime` varchar(100) DEFAULT 'jpg',
  `is_slider` tinyint(1) DEFAULT '0',
  `is_picked` tinyint(1) DEFAULT '0',
  `hit` int(11) DEFAULT '0',
  `slider_order` tinyint(4) DEFAULT '0',
  `optional_url` varchar(1000) DEFAULT NULL,
  `post_type` varchar(30) DEFAULT 'post',
  `video_url` varchar(1000) DEFAULT NULL,
  `video_embed_code` varchar(1000) DEFAULT NULL,
  `image_url` varchar(1000) DEFAULT NULL,
  `need_auth` tinyint(1) DEFAULT '0',
  `visibility` tinyint(1) DEFAULT '1',
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`id`, `lang_id`, `title`, `title_slug`, `summary`, `content`, `keywords`, `user_id`, `category_id`, `image_big`, `image_mid`, `image_small`, `image_slider`, `image_mime`, `is_slider`, `is_picked`, `hit`, `slider_order`, `optional_url`, `post_type`, `video_url`, `video_embed_code`, `image_url`, `need_auth`, `visibility`, `status`, `created_at`)
VALUES
	(1,1,'Éducation aux médias et à l\'information (EMI)','education-aux-medias-et-a-linformation-emi','Encourager les médias audiovisuels à développer des actions en faveur de l’EMI, mettre à la disposition de tous les publics des ressources afin d’appréhender les enjeux de représentations médiatiques (égalité femmes-hommes, diversité et lutte contre les discriminations, liberté d’expression, etc.) ','<p>Encourager les m&eacute;dias audiovisuels &agrave; d&eacute;velopper des actions en faveur de l&rsquo;EMI, mettre &agrave; la disposition de tous les publics des ressources afin d&rsquo;appr&eacute;hender les enjeux de repr&eacute;sentations m&eacute;diatiques (&eacute;galit&eacute; femmes-hommes, diversit&eacute; et lutte contre les discriminations, libert&eacute; d&rsquo;expression, etc.)&nbsp;</p>','',1,2,'uploads/images/image_750x_5fa4c135d9ca1.jpg','uploads/images/image_750x415_5fa4c13609a28.jpg','uploads/images/image_100x75_5fa4c1363854a.jpg','uploads/images/image_650x433_5fa4c13643331.jpg','jpg',1,1,6,0,'','post','','','',0,1,1,'2020-11-05 22:21:33'),
	(2,1,'Accès des associations aux médias audiovisuels ','acces-des-associations-aux-medias-audiovisuels','Les associations sont des acteurs incontournables de la vie sociale, politique et culturelle française. Pour être connues du grand public, elles disposent de plusieurs moyens d’expression, notamment les médias audiovisuels.','<p>Les associations sont des acteurs incontournables de la vie sociale, politique et culturelle fran&ccedil;aise. Pour &ecirc;tre connues du grand public, elles disposent de plusieurs moyens d&rsquo;expression, notamment les m&eacute;dias audiovisuels.</p>','video, audio',1,1,'uploads/images/image_750x_5fa9372d5359d.jpg','uploads/images/image_750x415_5fa9372d995ea.jpg','uploads/images/image_100x75_5fa9372dc5c4b.jpg','uploads/images/image_650x433_5fa9372dd1ce8.jpg','jpg',1,1,3,0,'','post','','','',0,1,1,'2020-11-09 07:33:59'),
	(3,1,'Médias audiovisuels et Francophonie','medias-audiovisuels-et-francophonie','La langue française se distingue par une richesse et une diversité infinie tant par ses mots que par ses expressions imagées. Elle est définit par la loi comme étant un socle inhérent à la construction et à la valorisation du patrimoine français. ','<p>La langue fran&ccedil;aise se distingue par une richesse et une diversit&eacute; infinie tant par ses mots que par ses expressions imag&eacute;es. Elle est d&eacute;finit par la loi comme &eacute;tant un socle inh&eacute;rent &agrave; la construction et &agrave; la valorisation du patrimoine fran&ccedil;ais.&nbsp;</p>','',1,1,'uploads/images/image_750x_5fa937e38bc4f.jpg','uploads/images/image_750x415_5fa937e3bb67e.jpg','uploads/images/image_100x75_5fa937e409b40.jpg','uploads/images/image_650x433_5fa937e41bcb1.jpg','jpg',1,1,4,0,'','post','','','',0,1,1,'2020-11-09 07:37:06');

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table reactions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reactions`;

CREATE TABLE `reactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `re_like` int(11) DEFAULT '0',
  `re_dislike` int(11) DEFAULT '0',
  `re_love` int(11) DEFAULT '0',
  `re_funny` int(11) DEFAULT '0',
  `re_angry` int(11) DEFAULT '0',
  `re_sad` int(11) DEFAULT '0',
  `re_wow` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `reactions` WRITE;
/*!40000 ALTER TABLE `reactions` DISABLE KEYS */;

INSERT INTO `reactions` (`id`, `post_id`, `re_like`, `re_dislike`, `re_love`, `re_funny`, `re_angry`, `re_sad`, `re_wow`)
VALUES
	(1,1,0,0,0,0,0,0,0),
	(2,2,0,0,0,0,0,0,0),
	(3,3,0,0,0,0,0,0,0);

/*!40000 ALTER TABLE `reactions` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table reading_lists
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reading_lists`;

CREATE TABLE `reading_lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `reading_lists` WRITE;
/*!40000 ALTER TABLE `reading_lists` DISABLE KEYS */;

INSERT INTO `reading_lists` (`id`, `post_id`, `user_id`)
VALUES
	(1,1,1),
	(2,3,1);

/*!40000 ALTER TABLE `reading_lists` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` tinyint(4) DEFAULT '1',
  `application_name` varchar(255) DEFAULT 'CSAC',
  `site_title` varchar(255) DEFAULT NULL,
  `home_title` varchar(255) DEFAULT NULL,
  `site_description` varchar(500) DEFAULT NULL,
  `keywords` varchar(500) DEFAULT NULL,
  `facebook_url` varchar(500) DEFAULT NULL,
  `twitter_url` varchar(500) DEFAULT NULL,
  `instagram_url` varchar(500) DEFAULT NULL,
  `pinterest_url` varchar(500) DEFAULT NULL,
  `linkedin_url` varchar(500) DEFAULT NULL,
  `vk_url` varchar(500) DEFAULT NULL,
  `optional_url_button_name` varchar(500) DEFAULT 'Click Here to Visit',
  `about_footer` varchar(1000) DEFAULT NULL,
  `contact_text` text,
  `contact_address` varchar(500) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(255) DEFAULT NULL,
  `copyright` varchar(500) DEFAULT 'Copyright © 2018 CSAC - All Rights Reserved.',
  `cookies_warning` tinyint(1) DEFAULT '0',
  `cookies_warning_text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;

INSERT INTO `settings` (`id`, `lang_id`, `application_name`, `site_title`, `home_title`, `site_description`, `keywords`, `facebook_url`, `twitter_url`, `instagram_url`, `pinterest_url`, `linkedin_url`, `vk_url`, `optional_url_button_name`, `about_footer`, `contact_text`, `contact_address`, `contact_email`, `contact_phone`, `copyright`, `cookies_warning`, `cookies_warning_text`)
VALUES
	(1,1,'CSAC','CSAC - RDC','Conseil Supérieur de l\'Audiovisuel et de la Communication','CSAC SIte internet','Conseil Supérieur de l\'Audiovisuel et de la Communication, CSAC, RDC','https://www.facebook.com/CSAC','https://www.twitter.com/CSAC','https://www.instagram.com/CSAC','','https://www.linkedin.com/company/csac','','See More','Tincidunt integer eu augue augue nunc elit dolor, luctus placerat scelerisque euismod, iaculis eu lacus nunc mi elito vehicula ut laoreet ac, aliquam sit amet justo nunc tempor.','','','','','Copyright © 2020 CSAC - All Rights Reserved.',0,'');

/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table subscribers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `subscribers`;

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `subscribers` WRITE;
/*!40000 ALTER TABLE `subscribers` DISABLE KEYS */;

INSERT INTO `subscribers` (`id`, `email`, `token`, `created_at`)
VALUES
	(1,'admin@example.com','5fa79fc49fab87-88237298-18212591','2020-11-08 02:35:32');

/*!40000 ALTER TABLE `subscribers` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table tags
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `tag_slug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;

INSERT INTO `tags` (`id`, `post_id`, `tag`, `tag_slug`)
VALUES
	(1,1,'Media','media'),
	(4,2,'Audio','audio'),
	(5,2,'vidéo','video'),
	(6,3,'Média','media'),
	(7,3,'Tech','tech');

/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT 'name@domain.com',
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `role` varchar(30) DEFAULT 'user',
  `user_type` varchar(30) DEFAULT 'registered',
  `google_id` varchar(255) DEFAULT NULL,
  `facebook_id` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `about_me` varchar(5000) DEFAULT NULL,
  `last_seen` timestamp NULL DEFAULT NULL,
  `facebook_url` varchar(500) DEFAULT NULL,
  `twitter_url` varchar(500) DEFAULT NULL,
  `instagram_url` varchar(500) DEFAULT NULL,
  `pinterest_url` varchar(500) DEFAULT NULL,
  `linkedin_url` varchar(500) DEFAULT NULL,
  `vk_url` varchar(500) DEFAULT NULL,
  `youtube_url` varchar(500) DEFAULT NULL,
  `show_email_on_profile` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `slug`, `email`, `password`, `token`, `role`, `user_type`, `google_id`, `facebook_id`, `avatar`, `status`, `about_me`, `last_seen`, `facebook_url`, `twitter_url`, `instagram_url`, `pinterest_url`, `linkedin_url`, `vk_url`, `youtube_url`, `show_email_on_profile`, `created_at`)
VALUES
	(1,'CSAC','csac','contact@csac.cd','$2a$08$RZv6biN4I.8xi5rsoBpuNeFxsQbP.QT3o8EJOTuSAA0y6ojLDi5nC','5fa27f7d112292-02405007-86505536','admin','registered',NULL,NULL,NULL,1,NULL,'2020-11-14 15:26:58',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2020-11-04 11:16:29');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
