-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 15 2022 г., 12:55
-- Версия сервера: 5.7.38
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mansliders`
--

-- --------------------------------------------------------

--
-- Структура таблицы `slider_info`
--

CREATE TABLE `slider_info` (
  `id` int(11) NOT NULL,
  `slider_title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_price` int(11) NOT NULL,
  `slider_img` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `slider_info`
--

INSERT INTO `slider_info` (`id`, `slider_title`, `slider_price`, `slider_img`) VALUES
(1, 'Check-UP', 1300, 'img/sliders-worked.jpg'),
(2, 'Two-UP', 2999, 'img/sliders-worked.jpg'),
(3, 'Three-UP', 1200, 'img/sliders-worked.jpg'),
(4, 'Four-up', 3480, 'img/sliders-worked.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `slider_info`
--
ALTER TABLE `slider_info`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
