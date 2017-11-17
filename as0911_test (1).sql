-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 17 2017 г., 15:00
-- Версия сервера: 5.6.22-log
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `as0911_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_parent` int(10) unsigned NOT NULL,
  `id_avtor` int(10) unsigned NOT NULL,
  `name_topic` varchar(40) DEFAULT NULL,
  `name_article` varchar(40) DEFAULT NULL,
  `text` text NOT NULL,
  `date_creature` datetime NOT NULL,
  `date_publication` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  `status` int(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_parent` (`id_parent`),
  KEY `id_avtor` (`id_avtor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_avtor` int(10) unsigned NOT NULL,
  `name` varchar(40) DEFAULT NULL COMMENT 'заголовок',
  `text` text NOT NULL,
  `date_publication` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'время публикации',
  PRIMARY KEY (`id`),
  KEY `id_avtor` (`id_avtor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `rules`
--

CREATE TABLE IF NOT EXISTS `rules` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `text` text NOT NULL,
  `date_publication` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id темы',
  `name_topic` varchar(40) NOT NULL COMMENT 'название темы',
  `status` int(1) unsigned NOT NULL DEFAULT '0' COMMENT 'активность',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `topics`
--

INSERT INTO `topics` (`id`, `name_topic`, `status`) VALUES
(1, 'Реклама', 1),
(2, 'Туризм', 1),
(3, 'Медицина', 1),
(4, 'Лекарства', 1),
(5, 'Народные средства', 1),
(6, 'Сад и огород', 1),
(7, 'Домашнее хозяйство', 1),
(8, 'Домашние животные', 1),
(9, 'Дикая природа', 1),
(10, 'Эзотерика', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `topics_use`
--

CREATE TABLE IF NOT EXISTS `topics_use` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'T1',
  `id_user` int(10) unsigned NOT NULL,
  `id_topic` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_topic` (`id_topic`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='texture' AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `topics_use`
--

INSERT INTO `topics_use` (`id`, `id_user`, `id_topic`) VALUES
(1, 1, 3),
(2, 1, 9),
(3, 1, 5),
(4, 2, 8),
(5, 2, 6),
(6, 2, 4),
(7, 3, 7),
(8, 3, 2),
(9, 3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_groop` int(10) unsigned NOT NULL,
  `name` varchar(20) NOT NULL COMMENT 'имя',
  `login` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `skype` varchar(30) DEFAULT NULL,
  `wmr` varchar(14) DEFAULT NULL COMMENT 'кошелек',
  PRIMARY KEY (`id`),
  KEY `группа_id` (`id_groop`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `id_groop`, `name`, `login`, `pass`, `email`, `skype`, `wmr`) VALUES
(1, 0, 'namus_1', 'logus_1', 'pasus_1', NULL, NULL, NULL),
(2, 0, 'namus_2', 'logus_2', 'pasus_2', NULL, NULL, NULL),
(3, 0, 'namus_3', 'logus_3', 'pasus_3', NULL, NULL, NULL);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `topics_use`
--
ALTER TABLE `topics_use`
  ADD CONSTRAINT `topics_use_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `topics_use_ibfk_2` FOREIGN KEY (`id_topic`) REFERENCES `topics` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
