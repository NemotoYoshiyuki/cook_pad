-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016 年 1 朁E09 日 09:38
-- サーバのバージョン： 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cook_pad`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `foods`
--

CREATE TABLE IF NOT EXISTS `foods` (
  `id` int(11) NOT NULL,
  `food_name` varchar(64) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `food_photo` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `foods`
--

INSERT INTO `foods` (`id`, `food_name`, `created`, `modified`, `food_photo`) VALUES
(1, 'れんこんの塩レモンマヨ和え', '2016-01-09 00:00:00', '2016-01-09 00:00:00', 'http://nasubiz.jp/second/003/syotengai/image/ita3.jpg');

-- --------------------------------------------------------

--
-- テーブルの構造 `materials`
--

CREATE TABLE IF NOT EXISTS `materials` (
  `id` int(11) NOT NULL,
  `material_name` varchar(64) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `materials`
--

INSERT INTO `materials` (`id`, `material_name`, `created`, `modified`) VALUES
(1, 'れんこん', '2016-01-09 00:00:00', '2016-01-09 00:00:00'),
(2, 'マヨネーズ', '2016-01-09 00:00:00', '2016-01-09 00:00:00'),
(3, 'しょうゆ', '2016-01-09 00:00:00', '2016-01-09 00:00:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `recipes`
--

CREATE TABLE IF NOT EXISTS `recipes` (
  `id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modifed` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `recipes`
--

INSERT INTO `recipes` (`id`, `food_id`, `material_id`, `amount`, `unit_id`, `created`, `modifed`) VALUES
(1, 1, 1, 100, 2, '2016-01-09 00:00:00', '2016-01-09 00:00:00'),
(2, 1, 2, 1, 4, '2016-01-09 00:00:00', '2016-01-09 00:00:00'),
(3, 1, 3, 1, 3, '2016-01-09 00:00:00', '2016-01-09 00:00:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `id` int(11) NOT NULL,
  `unit_name` varchar(64) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `units`
--

INSERT INTO `units` (`id`, `unit_name`, `created`, `modified`) VALUES
(2, 'グラム', '2016-01-09 00:00:00', '2016-01-09 00:00:00'),
(3, '小さじ', '2016-01-09 00:00:00', '2016-01-09 00:00:00'),
(4, '大さじ', '2016-01-09 00:00:00', '2016-01-09 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
