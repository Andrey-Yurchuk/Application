-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Фев 09 2024 г., 13:30
-- Версия сервера: 8.0.36-0ubuntu0.22.04.1
-- Версия PHP: 8.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `products_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `iphone`
--

CREATE TABLE `iphone` (
  `id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `price` decimal(10,2) DEFAULT NULL,
  `discountPercentage` decimal(5,2) DEFAULT NULL,
  `rating` decimal(3,2) DEFAULT NULL,
  `stock` int DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `images` json DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `iphone`
--

INSERT INTO `iphone` (`id`, `title`, `description`, `price`, `discountPercentage`, `rating`, `stock`, `brand`, `category`, `thumbnail`, `images`) VALUES
(1, 'iPhone 9', 'An apple mobile which is nothing like apple', '549.00', '12.96', '4.69', 94, 'Apple', 'smartphones', 'https://cdn.dummyjson.com/product-images/1/thumbnail.jpg', '[\"https://cdn.dummyjson.com/product-images/1/1.jpg\", \"https://cdn.dummyjson.com/product-images/1/2.jpg\", \"https://cdn.dummyjson.com/product-images/1/3.jpg\", \"https://cdn.dummyjson.com/product-images/1/4.jpg\", \"https://cdn.dummyjson.com/product-images/1/thumbnail.jpg\"]'),
(2, 'iPhone X', 'SIM-Free, Model A19211 6.5-inch Super Retina HD display with OLED technology A12 Bionic chip with ...', '899.00', '17.94', '4.44', 34, 'Apple', 'smartphones', 'https://cdn.dummyjson.com/product-images/2/thumbnail.jpg', '[\"https://cdn.dummyjson.com/product-images/2/1.jpg\", \"https://cdn.dummyjson.com/product-images/2/2.jpg\", \"https://cdn.dummyjson.com/product-images/2/3.jpg\", \"https://cdn.dummyjson.com/product-images/2/thumbnail.jpg\"]');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `iphone`
--
ALTER TABLE `iphone`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
