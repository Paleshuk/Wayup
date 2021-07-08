-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Июл 08 2021 г., 16:21
-- Версия сервера: 5.7.26
-- Версия PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `shop-wayup`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `category_id`, `price`) VALUES
(6, 'Морковь 3', 'Овощь 3', 10, 1003),
(7, 'Морковь', 'Овощь', 111, 100),
(8, 'Морковь', 'Овощь', 112, 100),
(9, 'Пылесос', 'Пылесос', 111, 123),
(10, 'Пылесос', 'Пылесос', 111, 123),
(11, 'Пылесос', 'Пылесос', 111, 123),
(12, '123', '123', 111, 123),
(13, '123', '123', 111, 123),
(14, 'sdf', 'xxx', 12, 12),
(15, '123', '123', 10, 123),
(16, '321', '321', 10, 12),
(17, '123', '123', 10, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;