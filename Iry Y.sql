-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Трв 30 2019 р., 22:59
-- Версія сервера: 5.6.43
-- Версія PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `iry`
--

-- --------------------------------------------------------

--
-- Структура таблиці `conversion1`
--

CREATE TABLE `conversion1` (
  `id` int(100) NOT NULL,
  `num` varchar(100) NOT NULL,
  `from` varchar(10) NOT NULL,
  `in` varchar(10) NOT NULL,
  `cv` varchar(100) NOT NULL,
  `sum` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `conversion1`
--

INSERT INTO `conversion1` (`id`, `num`, `from`, `in`, `cv`, `sum`, `date`) VALUES
(100, '250', 'USD', 'UAH', '', '0', '19.05.21 / 14:48:42'),
(101, '', 'USD', 'UAH', '', '0', '19.05.21 / 14:48:52'),
(102, '100', 'USD', 'UAH', '26.124008', '2612.4008', '19.05.21 / 14:50:05'),
(103, '', 'UAH', 'USD', '', '0', '19.05.21 / 14:52:05'),
(104, '', 'USD', 'UAH', '', '0', '19.05.21 / 14:53:01'),
(105, '150', 'USD', 'UAH', '26.124008', '3918.6012', '19.05.21 / 14:55:03'),
(106, '300', 'RUB', 'UAH', '0.408457', '122.5371', '19.05.21 / 14:55:38'),
(107, '100', 'USD', 'UAH', '26.47103', '2647.103', '19.05.28 / 17:04:32');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `conversion1`
--
ALTER TABLE `conversion1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `conversion1`
--
ALTER TABLE `conversion1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
