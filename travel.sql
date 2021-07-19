-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 07 2021 г., 14:09
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `travel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `country`
--

CREATE TABLE `country` (
  `id_country` int NOT NULL,
  `country_name` varchar(45) DEFAULT NULL,
  `capital` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `region` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`id_country`, `country_name`, `capital`, `region`) VALUES
(1, 'Австралия', 'Канберра', 'Азия'),
(2, 'Австрия', 'Вена', 'Европа'),
(3, 'Азербайджан', 'Баку', 'Азия'),
(4, 'Албания', 'Тирана', 'Европа'),
(5, 'Алжир', 'Алжир', 'Африка'),
(6, 'Англия', 'Лондон', 'Европа'),
(7, 'Ангола', 'Луанда', 'Африка'),
(14, 'Андорра', 'Андорра-ла-Велья', 'Европа'),
(15, 'Армения', 'Ереван', 'Азия'),
(16, 'Афганистан', 'Кабул', 'Азия'),
(17, 'Аргентина', 'Буэнос-Айрес', 'Южная Америка'),
(28, 'Бангладеш', 'Дакка', 'Азия'),
(29, 'Барбадос', 'Бриджтаун', 'Южная Америка'),
(30, 'Бахрейн', 'Манама', 'Азия'),
(31, 'Белиз', 'Бельмопан', 'Южная Америка'),
(32, 'Беларусь', 'Минск', 'Европа'),
(33, 'Бельгия', 'Брюссель', 'Европа'),
(34, 'Бенин', 'Порто-Ново', 'Африка'),
(35, 'Болгария', 'София', 'Европа'),
(36, 'Боливия', 'Сукре', 'Южная Америка'),
(37, 'Босния и Герцеговина', 'Сараево', 'Европа'),
(38, 'Ботсвана', 'Габороне', 'Африка'),
(39, 'Бразилия', 'Бразилиа', 'Южная Америка'),
(40, 'Бруней', 'Бандар-Сери-Багаван', 'Азия'),
(41, 'Буркина Фасо', 'Уагадугу', 'Африка'),
(42, 'Бурунди', 'Бужумбура', 'Африка'),
(43, 'Бутан', 'Тхимпху', 'Азия'),
(44, 'Вануату', 'Порт-Вила', 'Азия'),
(47, 'Венгрия', 'Будапешт', 'Европа'),
(48, 'Венесуэла', 'Каракас', 'Южная Америка'),
(49, 'Вьетнам', 'Ханой', 'Азия'),
(50, 'Габон', 'Либревиль', 'Африка'),
(51, 'Гана', 'Аккра', 'Африка'),
(52, 'Германия', 'Берлин', 'Европа'),
(53, 'Греция', 'Афины', 'Европа'),
(54, 'Грузия', 'Тбилиси', 'Азия'),
(55, 'Дания', 'Копенгаген', 'Европа'),
(56, 'Египет', 'Каир', 'Африка'),
(57, 'Израиль', 'Иерусалим', 'Азия'),
(58, 'Индия', 'Нью-Дели', 'Азия'),
(59, 'Индонезия', 'Джакарта', 'Азия'),
(62, 'Ирландия', 'Дублин', 'Европа'),
(63, 'Испания', 'Мадрид', 'Европа'),
(66, 'Камерун', 'Яунде', 'Африка'),
(67, 'Канада', 'Оттава', 'Северная Америка'),
(74, 'Китай', 'Пекин', 'Азия'),
(75, 'Коста-Рика', 'Сан-Хосе', 'Южная Америка'),
(76, 'Кот-д’Ивуар', 'Ямусукро', 'Африка'),
(78, 'Ливан', 'Бейрут', 'Африка'),
(81, 'Мексика', 'Мехико', 'Северная Америка'),
(84, 'Россия', 'Москва', 'Европа'),
(85, 'США', 'Вашингтон', 'Северная Америка'),
(87, 'Колумбия', 'Богота', 'Южная Америка'),
(90, 'Парагвай', 'Асунсьон', 'Южная Америка'),
(92, 'Перу', 'Лима', 'Южная Америка'),
(94, 'Уругвай', 'Монтевидео', 'Южная Америка'),
(96, 'Чили', 'Сантьяго', 'Южная Америка');

-- --------------------------------------------------------

--
-- Структура таблицы `star_rating`
--

CREATE TABLE `star_rating` (
  `id` int UNSIGNED NOT NULL,
  `rating_id` varchar(20) NOT NULL,
  `rating_avg` float NOT NULL,
  `total_votes` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `star_rating`
--

INSERT INTO `star_rating` (`id`, `rating_id`, `rating_avg`, `total_votes`) VALUES
(13, 'page-2', 3, 1),
(14, 'page-5', 5, 1),
(15, 'page-12', 3, 1),
(16, 'page-11', 4, 1),
(17, 'page-6', 4, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `star_rating_ip`
--

CREATE TABLE `star_rating_ip` (
  `id` int UNSIGNED NOT NULL,
  `rating_id` int UNSIGNED NOT NULL,
  `rating_value` tinyint UNSIGNED NOT NULL,
  `rating_ip` varchar(16) NOT NULL DEFAULT '0.0.0.0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `star_rating_ip`
--

INSERT INTO `star_rating_ip` (`id`, `rating_id`, `rating_value`, `rating_ip`) VALUES
(1, 1, 5, '127.0.0.1'),
(2, 11, 1, '127.0.0.1');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_users` int NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `login` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_users`, `name`, `email`, `login`, `password`, `description`) VALUES
(1, NULL, NULL, '123', '$2y$10$.f/gnalvlD40PVbog13mYOLSj7nvkZmJWbUrtxxlmzwJrXpN7n6zK', NULL),
(2, NULL, NULL, 'alex', '$2y$10$TZguHnr4ZHkTUPI4ZguqZ.k31F1lwOAhlsLcoKwpSezte.j/Rizdm', NULL),
(3, NULL, NULL, 'alex2', '$2y$10$h.fyT06O9cTrOPRUamzI3ugA8XDV3KUnFttU2a5hrAbVggvYqD5ou', NULL),
(4, NULL, NULL, 'alex1', '$2y$10$nJFNLWexLbfcvDNcX.nGZO/pnbJuqfEZFdUBlEA/ifPEtQXei8dY6', NULL),
(5, NULL, NULL, 'saintfik', '$2y$10$heVyVvlaVRy0G2oE86Tss.Vrg1xi4Svy0N1FgfEpbJ/SQYn8LGmfC', NULL),
(6, NULL, NULL, 'alex3', '$2y$10$15GUwjrkC/m7fSfHp9JmkuLo/oB.PcdH8lC6eLZuk/0tjs1VLyZIi', NULL),
(7, NULL, NULL, 'alex4', '$2y$10$Ru9PiumZHEfTGyFrBcAKCeAsUM7jpzj/HT85WFkrSSYx0zbRffWuW', NULL),
(8, NULL, NULL, 'alex5', '$2y$10$K2InOXsRfyDbySshXZbcK.voHOyC/oqK/BuUOMYbacRk1nCv5INLS', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users_has_country`
--

CREATE TABLE `users_has_country` (
  `users_id_users` int NOT NULL,
  `country_id_country` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `wishlist`
--

CREATE TABLE `wishlist` (
  `id_wishlist` int NOT NULL,
  `users_id_users` int NOT NULL,
  `country_id_country` int NOT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wishlist`
--

INSERT INTO `wishlist` (`id_wishlist`, `users_id_users`, `country_id_country`, `comment`) VALUES
(44, 2, 37, NULL),
(48, 2, 39, NULL),
(49, 2, 4, NULL),
(50, 2, 32, NULL),
(51, 2, 3, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id_country`);

--
-- Индексы таблицы `star_rating`
--
ALTER TABLE `star_rating`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `star_rating_ip`
--
ALTER TABLE `star_rating_ip`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rating_id` (`rating_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Индексы таблицы `users_has_country`
--
ALTER TABLE `users_has_country`
  ADD PRIMARY KEY (`users_id_users`,`country_id_country`),
  ADD KEY `fk_users_has_country_country1_idx` (`country_id_country`),
  ADD KEY `fk_users_has_country_users_idx` (`users_id_users`);

--
-- Индексы таблицы `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_wishlist`),
  ADD KEY `fk_wishlist_users1_idx` (`users_id_users`),
  ADD KEY `fk_wishlist_country1_idx` (`country_id_country`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `country`
--
ALTER TABLE `country`
  MODIFY `id_country` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT для таблицы `star_rating`
--
ALTER TABLE `star_rating`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `star_rating_ip`
--
ALTER TABLE `star_rating_ip`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id_wishlist` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `users_has_country`
--
ALTER TABLE `users_has_country`
  ADD CONSTRAINT `fk_users_has_country_country1` FOREIGN KEY (`country_id_country`) REFERENCES `country` (`id_country`),
  ADD CONSTRAINT `fk_users_has_country_users` FOREIGN KEY (`users_id_users`) REFERENCES `users` (`id_users`);

--
-- Ограничения внешнего ключа таблицы `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `fk_wishlist_country1` FOREIGN KEY (`country_id_country`) REFERENCES `country` (`id_country`),
  ADD CONSTRAINT `fk_wishlist_users1` FOREIGN KEY (`users_id_users`) REFERENCES `users` (`id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
