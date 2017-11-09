-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 09 2017 г., 19:21
-- Версия сервера: 5.5.45
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `testphp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalogs`
--

CREATE TABLE IF NOT EXISTS `catalogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `picture` tinytext NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `catalogs`
--

INSERT INTO `catalogs` (`id`, `name`, `body`, `picture`, `price`) VALUES
(9, 'Машина', 'Машина без фото', '/uploads/5.jpg', 11000),
(11, 'Мост', 'Белый мост', '/uploads/3.jpg', 111);

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE IF NOT EXISTS `maintexts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `url` tinytext NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `putdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `showhide`, `putdate`) VALUES
(1, 'Добро пожаловать', 'прывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуфпрывпьфкдусепсрпгкрвгыярпзщфрфузикпшявыиякуф', 'index', 'show', '2017-10-24'),
(2, 'Контакты', 'телефон', 'contacts', 'show', '2017-10-24'),
(3, 'About us', 'О нас', 'about_us', 'show', '2017-10-24'),
(4, 'Services', 'услуги наши', 'services', 'show', '2017-10-24');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `password` int(11) NOT NULL,
  `blockunblock` enum('block','unblock') NOT NULL DEFAULT 'unblock',
  `datareg` date NOT NULL,
  `lastvisit` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `blockunblock`, `datareg`, `lastvisit`) VALUES
(3, 'den', 'den@lol.com', 123, 'unblock', '2017-10-26', '2017-10-26 20:14:33');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
