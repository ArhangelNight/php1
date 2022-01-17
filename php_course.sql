-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 17 2022 г., 19:49
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php_course`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `name`, `description`, `image`) VALUES
(1, 1, 'Название 1ой статьи', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'pen.ico'),
(2, 1, 'dhdhdhdhdxxxxcxcxc', 'Lorem ipsum adipisicing elit. Accusamus, nescessitatibus!', 'm1911.ico'),
(3, 4, 'Название 3eй статьи', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, nescessitatibus!', '7.ico'),
(18, 3, 'namedfhdaa', 'textasddfggf', '50.ico'),
(19, 4, 'name', 'text', '512x512.png'),
(20, 4, 'name', 'text', '512x512-_1_.ico.ico'),
(21, 4, 'name', 'text', '2.ico'),
(22, 3, 'namesbgs', 'textxbvds', '512x512 (2).png'),
(23, 4, 'namefox', 'textxdffgghhh', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `user_name`, `password`) VALUES
(1, 'hdfhdfdfd@gmail.com', 'sdgsdgs', 'dsgsgsdgd'),
(2, 'hdfhdfdfd@gmail.com', 'ghjgdd', 'dvg'),
(3, 'dhghfghfg@ggbv.com', 'zdffba', 'w432rt452'),
(4, 'fghxfgjfj@dgd.com', '12345', '123456');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
