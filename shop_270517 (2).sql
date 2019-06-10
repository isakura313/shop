-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 10 2019 г., 09:29
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop_270517`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalogs_27`
--

CREATE TABLE `catalogs_27` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalogs_27`
--

INSERT INTO `catalogs_27` (`id`, `name`) VALUES
(1, 'Мужское'),
(2, 'Женское'),
(3, 'Детям');

-- --------------------------------------------------------

--
-- Структура таблицы `categories_27`
--

CREATE TABLE `categories_27` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `products_27`
--

CREATE TABLE `products_27` (
  `id` int(11) NOT NULL,
  `img_src` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sku` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products_27`
--

INSERT INTO `products_27` (`id`, `img_src`, `name`, `title`, `sku`, `price`, `description`) VALUES
(1, 'img/products/1.jpg', 'Товар 1', 'куртка мужская ', '111111', 1000, 'Товар 1 - первый'),
(2, 'img/products/2.jpg', 'Товар 2', 'теплый пуховик мужской', '222222', 2000, 'Товар 2 - второй'),
(3, 'img/products/3.jpg', 'Товар 3', 'куртка стильная мужская', '333333', 3000, 'Товар 3 - третий'),
(4, 'img/products/4.jpg', 'Товар 4', 'куртка кожаная мужская', '444444', 4000, 'Товар 4 - четвертый'),
(5, 'img/products/5.jpg', 'Товар 5 ', 'куртка военная мужская', '555555', 5000, 'Товар 5  - пятый'),
(6, 'img/products/6.jpg', 'Товар 6', 'куртка кожаная мужская', '666666', 6000, 'Товар 6 - шестой'),
(7, 'img/products/7.jpg', 'Товар 7', 'кеды детские серые', '777777', 1010, 'Товар 7 - седьмой'),
(8, 'img/products/8.jpg', 'Товар 8', 'кеды высокие черные', '888888', 2010, 'Товар 8 - восьмой'),
(9, 'img/products/9.jpg', 'Товар 9', 'кеды баскетбольного типа', '999999', 30090, 'Товар 9 - девятый'),
(10, 'img/products/10.jpg', 'Товар 10', 'кеды высокие зимние', '101010101010', 4010, 'Товар 10 - десятый'),
(11, 'img/products/11.jpg', 'Товар 11', 'джины мужские приталенные', '1111111111', 5010, 'Товар 11  - одинадцатый'),
(12, 'img/products/12.jpg', 'Товар 12', 'джинсы мужские просторные', '121212121212', 6010, 'Товар 12 - двенадцатый');

-- --------------------------------------------------------

--
-- Структура таблицы `product_catalog_27`
--

CREATE TABLE `product_catalog_27` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `catalog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_catalog_27`
--

INSERT INTO `product_catalog_27` (`id`, `product_id`, `catalog_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 2),
(8, 8, 2),
(9, 9, 2),
(10, 10, 3),
(11, 11, 3),
(12, 12, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `Sizes`
--

CREATE TABLE `Sizes` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Subs`
--

CREATE TABLE `Subs` (
  `id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Subs`
--

INSERT INTO `Subs` (`id`, `Email`) VALUES
(1, 'isakura313@gmail.com'),
(2, 'isakura313@rambler.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalogs_27`
--
ALTER TABLE `catalogs_27`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories_27`
--
ALTER TABLE `categories_27`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products_27`
--
ALTER TABLE `products_27`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_catalog_27`
--
ALTER TABLE `product_catalog_27`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Sizes`
--
ALTER TABLE `Sizes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Subs`
--
ALTER TABLE `Subs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalogs_27`
--
ALTER TABLE `catalogs_27`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `categories_27`
--
ALTER TABLE `categories_27`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products_27`
--
ALTER TABLE `products_27`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `product_catalog_27`
--
ALTER TABLE `product_catalog_27`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `Sizes`
--
ALTER TABLE `Sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Subs`
--
ALTER TABLE `Subs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
