-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 23 2017 г., 14:39
-- Версия сервера: 10.1.19-MariaDB
-- Версия PHP: 5.6.28

--
-- Доомашнее задание mysql
--
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `practice_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `continent`
--
-- Создание: Фев 22 2017 г., 17:44
--

CREATE TABLE `continent` (
  `continent_id` tinyint(2) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- СВЯЗИ ТАБЛИЦЫ `continent`:
--   `continent_id`
--       `country` -> `continent_id`
--

--
-- Дамп данных таблицы `continent`
--

INSERT INTO `continent` (`continent_id`, `Name`) VALUES
(1, 'Европа'),
(2, 'Азия'),
(3, 'Австралия и Океания'),
(4, 'Центральная Америка'),
(5, 'Африка'),
(6, 'Южная Америка'),
(7, 'Северная Америка');

-- --------------------------------------------------------

--
-- Структура таблицы `country`
--
-- Создание: Фев 22 2017 г., 17:44
--

CREATE TABLE `country` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Abbreviation` varchar(100) NOT NULL,
  `Area` decimal(10,2) NOT NULL,
  `Population` decimal(10,0) NOT NULL,
  `President` varchar(100) NOT NULL,
  `continent_id` tinyint(100) DEFAULT NULL,
  `language_id` tinyint(3) DEFAULT NULL,
  `Prime Ministr` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Домашнее задание по Mysql';

--
-- СВЯЗИ ТАБЛИЦЫ `country`:
--   `language_id`
--       `language` -> `language_id`
--

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`id`, `Name`, `Abbreviation`, `Area`, `Population`, `President`, `continent_id`, `language_id`, `Prime Ministr`) VALUES
(1, 'Боливия', 'BO', '1098508.00', '10985059', 'Эво Моралес', 6, 6, 'Эво Моралес'),
(2, 'Азербайджан', 'AZ', '86600.00', '9705600', 'Ильхам Алиев', 2, 4, 'Артур Расизаде\r\n'),
(3, 'Бахреин', 'BH', '701.00', '1397000', 'шейх Хамад ибн Иса аль-Халифа', 2, 1, 'Халифа ибн Салман аль-Халифа\r\n'),
(4, 'Белоруссия', 'BY', '207595.00', '9498400', 'Александр Лукашенко', 1, 5, 'Андрей Кобяков\r\n'),
(5, 'Куба', 'СU', '100860.00', '11236348', 'Рауль Кастро', 7, 6, 'Рауль Кастро'),
(6, 'Алжир', 'DZ', '2381740.00', '39813722', 'Абдель Азиз Бутефлика', 5, 1, 'Абдельмалек Селлаль\r\n'),
(7, 'Фиджи', 'FJ', '18270.00', '903207', 'Джиойе Конроте', 3, 2, 'Фрэнк Мбаинимарама\r\n'),
(8, 'Португалия', 'PT', '92082.00', '10341330', 'Марселу Ребелу ди Соза', 1, 6, 'Антониу да Кошта\r\n'),
(9, 'Сальвадор', 'SV', '21040.00', '6460271', 'Сальвадор Санчес Серен', 4, 6, 'Сальвадор Санчес Серен\r\n'),
(10, 'Мадагаскар', 'MG', '587040.00', '24430325', 'Эри Радзаунаримампианина', 5, 3, 'Оливье Сулунандрасана\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `language`
--
-- Создание: Фев 22 2017 г., 17:45
--

CREATE TABLE `language` (
  `language_id` tinyint(3) NOT NULL,
  `Language_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- СВЯЗИ ТАБЛИЦЫ `language`:
--

--
-- Дамп данных таблицы `language`
--

INSERT INTO `language` (`language_id`, `Language_name`) VALUES
(1, 'Арабский'),
(2, 'Aнглийский	'),
(3, 'Малагасийский'),
(4, 'Азербайджанский'),
(5, 'Белорусский'),
(6, 'Испанский'),
(7, 'Французский'),
(8, 'Русский');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `continent`
--
ALTER TABLE `continent`
  ADD PRIMARY KEY (`continent_id`);

--
-- Индексы таблицы `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`),
  ADD KEY `continent_id` (`continent_id`),
  ADD KEY `language_id` (`language_id`);

--
-- Индексы таблицы `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`language_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `continent`
--
ALTER TABLE `continent`
  MODIFY `continent_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `country`
--
ALTER TABLE `country`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `language`
--
ALTER TABLE `language`
  MODIFY `language_id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `continent`
--
ALTER TABLE `continent`
  ADD CONSTRAINT `continent_ibfk_1` FOREIGN KEY (`continent_id`) REFERENCES `country` (`continent_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `country`
--
ALTER TABLE `country`
  ADD CONSTRAINT `country_ibfk_1` FOREIGN KEY (`language_id`) REFERENCES `language` (`language_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
