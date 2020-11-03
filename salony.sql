-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 03 2020 г., 11:43
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `salony`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `url` varchar(169) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(126) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descr` varchar(451) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `url`, `title`, `descr`, `keywords`) VALUES
(1, 'http://360gis/eda.html', 'http://360gis.kz/eda.html', 'http://360gis.kz/eda.html', 'http://360gis.kz/eda.html');

-- --------------------------------------------------------

--
-- Структура таблицы `companies`
--

CREATE TABLE `companies` (
  `id` int(10) NOT NULL,
  `url` varchar(169) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(126) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descr` varchar(451) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(20) NOT NULL DEFAULT 1,
  `latitude` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `companies`
--

INSERT INTO `companies` (`id`, `url`, `title`, `descr`, `keywords`, `cat_id`, `latitude`, `longitude`) VALUES
(1, 'http://360gis/fuck.html', 'title', 'descr', 'keywords', 1, '49.963929', '82.583135'),
(2, 'http://360gis/suck.html', 'http://360gis/suck.html', 'http://360gis/suck.html', 'http://360gis/suck.html', 1, '49.965919', '82.583425');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
