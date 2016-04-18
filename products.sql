-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 26 2015 г., 22:28
-- Версия сервера: 5.5.44-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `slabel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `category`) VALUES
(2, 'Sony Vaio', 'Прекрасный товар', 150, 'Ноутбуки'),
(3, 'Panasonic', 'Хорошая камера', 200, 'Камеры'),
(4, 'Supra', 'Рекомендуемый товр', 300, 'Ноутбуки'),
(5, 'DELL', 'Хороший экземпляр', 250, 'Ноутбуки'),
(6, 'Lenovo A6000', 'Модный телефон', 300, 'Телефоны'),
(7, 'Apple 6s', 'Отличный телефон', 600, 'Телефоны'),
(8, 'Sony Xperia', 'Стильный телефон', 500, 'Телефоны'),
(9, 'FUJI', 'Высококачественная камера', 230, 'Камеры'),
(10, 'Canon', 'Профессиональная камера', 750, 'Камеры');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
