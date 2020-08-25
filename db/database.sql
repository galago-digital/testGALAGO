-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 25 2020 г., 02:56
-- Версия сервера: 5.7.29
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `crud`
--

DELIMITER $$
--
-- Процедуры
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteUser` (IN `user_id` INT(11))  BEGIN   
           DELETE FROM users WHERE id = user_id;  
           END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertUser` (IN `fullName` VARCHAR(250), `dateBirth` VARCHAR(250), `email` VARCHAR(255), `phone` VARCHAR(55), `distance` TINYINT(3), `payment` INT(11))  BEGIN  
                INSERT INTO users(full_name, date_birth, email, phone, distance, payment) VALUES (fullName, dateBirth, email, phone, distance, payment);   
                END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `selectUser` ()  BEGIN  
      SELECT * FROM users ORDER BY id DESC;  
      END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `whereUser` (IN `user_id` INT(11))  BEGIN   
      SELECT * FROM users WHERE id = user_id;  
      END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `date_birth` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `distance` tinyint(3) NOT NULL,
  `payment` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `date_birth`, `email`, `phone`, `distance`, `payment`) VALUES
(1, 'Куклина Мария Ивановна', '11.03.1987', 'kyklina@mail.ru', '+7 922 362 59 99', 5, 500),
(2, 'Мокрушина Галина Юрьевна', '08.05.1997', 'mokrushina@mail.ru', '+7 988 112 59 99', 10, 300),
(3, 'Заводская Ольга Сергеевна', '24.01.1986', 'olga.zavodckaia@mail.ru', '+7 900 801 10 00', 3, 1500),
(4, 'Эрман Никита Игоревич', '04.11.1996', 'nikitaerman@gmail.com', '+7 952 317 04 53', 10, 1000),
(5, 'Шуфутинский Михаил Захарович', '03.09.1948', 'm.z.shufutinsky@mail.ru', '+7 903 297 97 13', 5, 10000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
