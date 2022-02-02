-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2022 年 2 月 01 日 14:50
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `ryu_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `ryu_an_table`
--

CREATE TABLE `ryu_an_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `ryu_an_table`
--

INSERT INTO `ryu_an_table` (`id`, `name`, `url`, `comment`, `indate`) VALUES
(2, '1冊ですべて身につくHTML & CSSとWebデザイン入門講座', 'MANA', 'Good', '2022-01-30 13:47:18'),
(3, '確かな力が身につくJavaScript「超」入門 第2版', '狩野 祐東', 'Great', '2022-01-30 13:48:06'),
(4, 'ほんの一手間で劇的に変わるHTML & CSSとWebデザイン実践講座', 'MANA', 'Good', '2022-01-30 13:48:34'),
(5, 'CSS設計完全ガイド ~詳細解説+実践的モジュール集', '半田 惇志', 'Excellent', '2022-01-30 13:49:00'),
(8, 'Ryutaro Kamada', '', '', '2022-01-30 11:38:04'),
(9, 'jQuery標準デザイン講座', '神田 幸恵', 'Good', '2022-01-30 13:49:23');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `ryu_an_table`
--
ALTER TABLE `ryu_an_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `ryu_an_table`
--
ALTER TABLE `ryu_an_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
