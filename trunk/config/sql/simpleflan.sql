-- phpMyAdmin SQL Dump
-- version 2.10.0.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 04-11-2007 a las 22:11:38
-- Versión del servidor: 5.0.37
-- Versión de PHP: 5.2.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `simpleflan`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `categories`
-- 

CREATE TABLE `categories` (
  `id` int(11) NOT NULL auto_increment,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Volcar la base de datos para la tabla `categories`
-- 

INSERT INTO `categories` VALUES (1, '0000-00-00 00:00:00', '2007-10-15 22:52:07', 'Print', 'print', '* Interactive Strategy\r\n* Marketing for New Media\r\n* Thought Leadership Strategy\r\n* User Experience Strategy\r\n* Community & Social Design\r\n* Iterative Production Strategy\r\n* Web 2.0 (We had to say it)\r\n* Next Generation Product Strategy\r\n', 'image/gif');
INSERT INTO `categories` VALUES (3, '2007-10-15 16:53:16', '2007-10-15 22:52:17', 'identity', 'with_image', 'This is the category for identity stuff and so', 'image/gif');
INSERT INTO `categories` VALUES (4, '2007-10-15 18:22:17', '2007-10-15 22:52:27', 'web', 'web', 'We make all things web, and pretty good things altough', 'image/gif');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `clients`
-- 

CREATE TABLE `clients` (
  `id` int(11) NOT NULL auto_increment,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(30) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Volcar la base de datos para la tabla `clients`
-- 

INSERT INTO `clients` VALUES (6, '2007-10-18 23:57:35', '2007-10-18 23:57:35', 'Personal', 'personal', 'http://nolimit-studio.com', 'We design with our mind to get to your heart.', '');
INSERT INTO `clients` VALUES (5, '2007-10-18 23:56:15', '2007-10-18 23:56:15', 'Linofino', 'linofino', 'http://vistelinofino.org', 'Nolimit-studio managed to capture the exact essence of our business.', '');
INSERT INTO `clients` VALUES (4, '2007-10-18 23:53:06', '2007-10-18 23:54:07', 'CakePHP Foundation', 'cakephp_foundation', 'http://cakephp.org', 'He did an astounding design. We are very pleased with the results.', '');
INSERT INTO `clients` VALUES (11, '2007-10-29 02:45:33', '2007-10-29 02:45:33', 'micropublicantes', 'micropublicantes', 'http://www.micropublicantes.com', 'New company and wonderful perpetrators of fine software.', 'image/png');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `images`
-- 

CREATE TABLE `images` (
  `id` int(11) NOT NULL auto_increment,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

-- 
-- Volcar la base de datos para la tabla `images`
-- 

INSERT INTO `images` VALUES (3, '2007-10-12 12:35:43', '2007-10-12 12:35:43', '', 'image/png', '', 5);
INSERT INTO `images` VALUES (4, '2007-10-12 12:36:39', '2007-10-12 12:36:39', '', 'image/png', '', 6);
INSERT INTO `images` VALUES (5, '2007-10-13 23:56:48', '2007-10-13 23:56:48', 'Sitio Quintareal / Portada', 'image/png', 'Sitio Quintareal Portada', 7);
INSERT INTO `images` VALUES (6, '2007-10-16 02:18:05', '2007-10-16 02:18:05', '', 'image/png', '', 5);
INSERT INTO `images` VALUES (7, '2007-10-16 02:18:28', '2007-10-16 02:18:28', 'screen shot de sitio web', 'image/png', '', 5);
INSERT INTO `images` VALUES (8, '2007-10-16 02:37:46', '2007-10-16 02:37:46', 'screenshot chido', 'image/gif', '', 6);
INSERT INTO `images` VALUES (11, '2007-10-19 00:03:52', '2007-10-19 00:03:52', 'CakePHP home', 'image/jpeg', '', 11);
INSERT INTO `images` VALUES (10, '2007-10-18 03:10:14', '2007-10-18 03:10:14', 'Screen shot recursivo', 'image/png', '', 8);
INSERT INTO `images` VALUES (12, '2007-10-19 00:05:20', '2007-10-19 00:05:20', 'Feeds About Home', 'image/jpeg', '', 10);
INSERT INTO `images` VALUES (13, '2007-10-19 00:06:07', '2007-10-19 00:06:07', 'Dupermag Home', 'image/jpeg', '', 9);
INSERT INTO `images` VALUES (14, '2007-10-19 00:07:58', '2007-10-19 00:07:58', 'The Bakery Home', 'image/jpeg', '', 12);
INSERT INTO `images` VALUES (15, '2007-10-26 22:34:02', '2007-10-26 22:34:02', 'SimpleFlan home mockup', 'image/gif', 'The mockup of the upcoming site', 14);
INSERT INTO `images` VALUES (18, '2007-10-29 02:47:26', '2007-10-29 02:47:26', 'Screenshot', 'image/gif', 'Screenshot of the user interface', 16);
INSERT INTO `images` VALUES (19, '2007-10-29 02:48:01', '2007-10-29 02:48:01', 'Mockup', 'image/gif', 'Mockup for the upcoming web site', 16);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `pages`
-- 

CREATE TABLE `pages` (
  `id` int(11) NOT NULL auto_increment,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(30) NOT NULL,
  `excerpt` text NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- 
-- Volcar la base de datos para la tabla `pages`
-- 

INSERT INTO `pages` VALUES (7, '2007-10-25 13:27:03', '2007-10-25 13:27:03', 'About', 'about', 'This is your fabulous about page. Where you tell whoe your are, what planet are you from, etc.', 'Or if you want to keep the mystery you may decide to not include it in any way.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
INSERT INTO `pages` VALUES (8, '2007-10-25 15:28:56', '2007-10-25 15:28:56', 'Thank you', 'thank_you', '', 'THank you for approaching us. We will contact you soon.');
INSERT INTO `pages` VALUES (6, '2007-10-23 23:45:08', '2007-10-23 23:45:08', 'welcome', 'welcome', '', 'Welcome to my portfolio. I''m the greatest designer in the world as you will soon notice.');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `projects`
-- 

CREATE TABLE `projects` (
  `id` int(11) NOT NULL auto_increment,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(30) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `client_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `tags` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- 
-- Volcar la base de datos para la tabla `projects`
-- 

INSERT INTO `projects` VALUES (12, '2007-10-19 00:07:31', '2007-10-19 00:07:31', 'The Bakery', 'the_bakery', 'http://bakery.cakephp.org', 'A pretty site for displaying articles and useful info about the Cake Foundation', 4, 4, 'Web, Design, Identity, Information Architecture');
INSERT INTO `projects` VALUES (11, '2007-10-19 00:03:16', '2007-10-19 00:03:16', 'CakePHP', 'cakephp', 'http://cakephp.org', 'The official site of the cakePHP framework', 4, 3, 'Identity, Web, Design, Contest');
INSERT INTO `projects` VALUES (10, '2007-10-19 00:01:50', '2007-10-19 00:01:50', 'Feeds About', 'feeds_about', 'www.feedsabout.com', 'An experiment of an agregator which is hopelly going to be useful. ', 6, 4, 'Web, Design, Development, Blog, Personal, Identity, Logo, Feeds, Interface');
INSERT INTO `projects` VALUES (9, '2007-10-18 23:59:29', '2007-10-18 23:59:29', 'Dupermag', 'dupermag', 'http://www.dupermag.com', 'This is my personal site', 6, 1, 'Web, Design, Development, Blog, Personal, Identity, Logo, Interface');
INSERT INTO `projects` VALUES (16, '2007-10-29 02:46:59', '2007-10-29 13:30:45', 'Simpleflan', 'simpleflan', 'http://www.simpleflan.com', 'This great piece of software is our first opensource project ever.\r\n\r\n* Very clean UI\r\n* For designers by designers\r\n* Themeable\r\n\r\nand *much more*', 11, 4, 'Cms, Opensource, Development');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `projects_tags`
-- 

CREATE TABLE `projects_tags` (
  `id` int(11) NOT NULL auto_increment,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `tag_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

-- 
-- Volcar la base de datos para la tabla `projects_tags`
-- 

INSERT INTO `projects_tags` VALUES (9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 9, 9);
INSERT INTO `projects_tags` VALUES (8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, 9);
INSERT INTO `projects_tags` VALUES (7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 9);
INSERT INTO `projects_tags` VALUES (10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10, 9);
INSERT INTO `projects_tags` VALUES (11, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 11, 9);
INSERT INTO `projects_tags` VALUES (12, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 9);
INSERT INTO `projects_tags` VALUES (13, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 13, 9);
INSERT INTO `projects_tags` VALUES (14, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 14, 9);
INSERT INTO `projects_tags` VALUES (15, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 10);
INSERT INTO `projects_tags` VALUES (16, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, 10);
INSERT INTO `projects_tags` VALUES (17, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 9, 10);
INSERT INTO `projects_tags` VALUES (18, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10, 10);
INSERT INTO `projects_tags` VALUES (19, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 11, 10);
INSERT INTO `projects_tags` VALUES (20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 10);
INSERT INTO `projects_tags` VALUES (21, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 13, 10);
INSERT INTO `projects_tags` VALUES (22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, 10);
INSERT INTO `projects_tags` VALUES (23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 14, 10);
INSERT INTO `projects_tags` VALUES (24, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 11);
INSERT INTO `projects_tags` VALUES (25, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 11);
INSERT INTO `projects_tags` VALUES (26, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, 11);
INSERT INTO `projects_tags` VALUES (27, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 16, 11);
INSERT INTO `projects_tags` VALUES (28, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 12);
INSERT INTO `projects_tags` VALUES (29, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, 12);
INSERT INTO `projects_tags` VALUES (30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12);
INSERT INTO `projects_tags` VALUES (31, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 17, 12);
INSERT INTO `projects_tags` VALUES (49, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 9, 16);
INSERT INTO `projects_tags` VALUES (48, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 23, 16);
INSERT INTO `projects_tags` VALUES (47, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 18, 16);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tags`
-- 

CREATE TABLE `tags` (
  `id` int(11) NOT NULL auto_increment,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `tag` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

-- 
-- Volcar la base de datos para la tabla `tags`
-- 

INSERT INTO `tags` VALUES (1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Uno');
INSERT INTO `tags` VALUES (2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Dos');
INSERT INTO `tags` VALUES (3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Tres');
INSERT INTO `tags` VALUES (4, '2007-10-13 23:55:55', '2007-10-13 23:55:55', 'Identidad');
INSERT INTO `tags` VALUES (5, '2007-10-13 23:55:55', '2007-10-13 23:55:55', 'Impresion');
INSERT INTO `tags` VALUES (6, '2007-10-13 23:55:55', '2007-10-13 23:55:55', 'Sitio Web');
INSERT INTO `tags` VALUES (7, '2007-10-18 23:59:29', '2007-10-18 23:59:29', 'Web');
INSERT INTO `tags` VALUES (8, '2007-10-18 23:59:29', '2007-10-18 23:59:29', 'Design');
INSERT INTO `tags` VALUES (9, '2007-10-18 23:59:29', '2007-10-18 23:59:29', 'Development');
INSERT INTO `tags` VALUES (10, '2007-10-18 23:59:29', '2007-10-18 23:59:29', 'Blog');
INSERT INTO `tags` VALUES (11, '2007-10-18 23:59:29', '2007-10-18 23:59:29', 'Personal');
INSERT INTO `tags` VALUES (12, '2007-10-18 23:59:29', '2007-10-18 23:59:29', 'Identity');
INSERT INTO `tags` VALUES (13, '2007-10-18 23:59:29', '2007-10-18 23:59:29', 'Logo');
INSERT INTO `tags` VALUES (14, '2007-10-18 23:59:29', '2007-10-18 23:59:29', 'Interface');
INSERT INTO `tags` VALUES (15, '2007-10-19 00:01:50', '2007-10-19 00:01:50', 'Feeds');
INSERT INTO `tags` VALUES (16, '2007-10-19 00:03:16', '2007-10-19 00:03:16', 'Contest');
INSERT INTO `tags` VALUES (17, '2007-10-19 00:07:31', '2007-10-19 00:07:31', 'Information Architecture');
INSERT INTO `tags` VALUES (18, '2007-10-26 22:33:17', '2007-10-26 22:33:17', 'Cms');
INSERT INTO `tags` VALUES (19, '2007-10-26 22:33:17', '2007-10-26 22:33:17', 'Programming');
INSERT INTO `tags` VALUES (20, '2007-10-26 22:33:17', '2007-10-26 22:33:17', 'Mockup');
INSERT INTO `tags` VALUES (21, '2007-10-26 23:15:42', '2007-10-26 23:15:42', 'Portfolio');
INSERT INTO `tags` VALUES (22, '2007-10-26 23:15:42', '2007-10-26 23:15:42', 'Software');
INSERT INTO `tags` VALUES (23, '2007-10-26 23:15:42', '2007-10-26 23:15:42', 'Opensource');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `users`
-- 

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` smallint(6) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Volcar la base de datos para la tabla `users`
-- 

INSERT INTO `users` VALUES (5, '2007-10-23 22:54:05', '2007-10-23 22:54:05', 'admin', 'admin@simpleflan.com', '22462e8ec4ab20f77cd59bb70fd9170cf4c402b5', 1);
