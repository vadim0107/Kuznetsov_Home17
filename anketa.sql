-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 18 2017 г., 16:01
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `homework17`
--

-- --------------------------------------------------------

--
-- Структура таблицы `anketa`
--

CREATE TABLE `anketa` (
  `name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `surname` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `gender` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `age` int(120) NOT NULL,
  `birthday` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `family` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `social` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `home` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `activity` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `frequency` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `books` varchar(100) NOT NULL,
  `comments` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `spam` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `complexity` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `anketa`
--

INSERT INTO `anketa` (`name`, `surname`, `gender`, `age`, `birthday`, `family`, `social`, `home`, `activity`, `frequency`, `books`, `comments`, `spam`, `complexity`) VALUES
('Иван ', 'Иванов', 'man', 20, '01.01.1990', 'не женат', 'статус', 'дом', 'friends,fishing', 'two', '21-50', 'фвфвфвфівіффффффффававмамввідрвадвімтідмтвадмтідвмтідж', '', ''),
('Петя', 'Петров', 'woman', 26, '19.10.1997', 'женат', 'статус', 'квартира', 'sleep,games', 'one', '11-20', 'адывдлвыоавдаоывдаовыдсоывдмодывс', '', ''),
('', '', 'man', 0, '', '', '', '', '', 'site', '0-10', '', 'category1,category2', 'hard');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
