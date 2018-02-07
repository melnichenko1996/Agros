-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Лют 07 2018 р., 16:33
-- Версія сервера: 5.5.53
-- Версія PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `agros`
--

-- --------------------------------------------------------

--
-- Структура таблиці `users_messages`
--

CREATE TABLE `users_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_estonian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Дамп даних таблиці `users_messages`
--

INSERT INTO `users_messages` (`id`, `name`, `email`, `phone`, `text`) VALUES
(1, 'Вероніка Лі', 'veroni4kalee@gmail.com', '073-1237-652', 'Ви отримали замовлення про мій товар? Якщо так, то дайте мені знати.'),
(2, 'Михаїл Матійчин', 'grizly1945@gmail.com', '096-3874-312', 'У вас чудовий і гарний сайт, дякую.'),
(3, 'Швець Аліна', 'aliliska7@gmail.com', '050-3554-315', 'Довго заходить на сайт. В чому проблема?'),
(4, 'Максим Іванов', 'themasterspirit@gmail.com', '096-9360-612', 'У мене не працює карта, на якій вказано ваше місце знаходження.'),
(5, 'Тетяна Семенкова', 'tetianasemenkova@gmail.com', '097-9800-273', 'З телефону не коректно відкривається ваш сайт.'),
(6, 'Олександр Немировський', 'waitforga@gmail.com', '073-3587-723', 'Дуже гарний сайт і зручний інтерфейс');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `users_messages`
--
ALTER TABLE `users_messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `users_messages`
--
ALTER TABLE `users_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
