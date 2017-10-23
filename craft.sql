-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Час створення: Трв 29 2017 р., 18:03
-- Версія сервера: 5.7.18-0ubuntu0.16.04.1
-- Версія PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `craft`
--

-- --------------------------------------------------------

--
-- Структура таблиці `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title_ukr` varchar(255) DEFAULT NULL,
  `title_eng` varchar(255) DEFAULT NULL,
  `title_rus` varchar(255) DEFAULT NULL,
  `description_ukr` text,
  `description_eng` text,
  `description_rus` text,
  `text_ukr` text,
  `text_eng` text,
  `text_rus` text,
  `site_url` text,
  `main_tag` varchar(255) DEFAULT NULL,
  `other_tags` text,
  `images` text,
  `preview_images` text,
  `views` int(11) DEFAULT NULL,
  `public` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `articles_comments`
--

CREATE TABLE `articles_comments` (
  `id` int(11) NOT NULL,
  `articles_id` varchar(100) DEFAULT NULL,
  `text` varchar(100) DEFAULT NULL,
  `data` int(11) DEFAULT NULL,
  `public` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `articles_tags`
--

CREATE TABLE `articles_tags` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1496058960),
('m170529_094448_create_news_table_project', 1496058962),
('m170529_094607_create_news_table_project_tags', 1496058962),
('m170529_094742_create_news_table_team', 1496058962),
('m170529_094802_create_news_table_articles', 1496058962),
('m170529_094808_create_news_table_articles_tags', 1496058962),
('m170529_094839_create_news_table_articles_comments', 1496058962),
('m170529_094848_create_news_table_users', 1496058962),
('m170529_095105_create_news_table_users_comments', 1496058962),
('m170529_095234_create_news_table_portfolio', 1496058962);

-- --------------------------------------------------------

--
-- Структура таблиці `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title_ukr` varchar(255) DEFAULT NULL,
  `title_eng` varchar(255) DEFAULT NULL,
  `title_rus` varchar(255) DEFAULT NULL,
  `project_description_ukr` text,
  `project_description_eng` text,
  `project_description_rus` text,
  `client_description_ukr` text,
  `client_description_eng` text,
  `client_description_rus` text,
  `done_description_ukr` text,
  `done_description_eng` text,
  `done_description_rus` text,
  `site_url` text,
  `main_tag` varchar(255) DEFAULT NULL,
  `other_tags` text,
  `images` text,
  `other_images` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `portfolio_tags`
--

CREATE TABLE `portfolio_tags` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `data` int(11) DEFAULT NULL,
  `quastion` text,
  `process` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password_hash` text,
  `auth_key` text,
  `rols` int(2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `public` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `team`
--

INSERT INTO `team` (`id`, `username`, `password_hash`, `auth_key`, `rols`, `image`, `position`, `status`, `public`) VALUES
(1, 'admin1', '$2y$13$ptCRZiW2zooLRv248yiYTeLyjMSnuDQNX6gRbix5B132bmNRw7CYy', '5RdBwXwfe1ysJMo16ZZBW7_0_yg7v9xK', 1, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password_hash` text,
  `auth_key` text,
  `rols` int(2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `public` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `users_comments`
--

CREATE TABLE `users_comments` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `text` varchar(100) DEFAULT NULL,
  `data` int(11) DEFAULT NULL,
  `public` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `articles_comments`
--
ALTER TABLE `articles_comments`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `articles_tags`
--
ALTER TABLE `articles_tags`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Індекси таблиці `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `portfolio_tags`
--
ALTER TABLE `portfolio_tags`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users_comments`
--
ALTER TABLE `users_comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `articles_comments`
--
ALTER TABLE `articles_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `articles_tags`
--
ALTER TABLE `articles_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `portfolio_tags`
--
ALTER TABLE `portfolio_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `users_comments`
--
ALTER TABLE `users_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
