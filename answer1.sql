-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2025 年 1 月 03 日 07:48
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `schoolchoice_db_test`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `answer1`
--

CREATE TABLE `answer1` (
  `id` int(12) NOT NULL,
  `q1` varchar(64) DEFAULT NULL,
  `q2` varchar(64) DEFAULT NULL,
  `q3` varchar(64) DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `answer1`
--

INSERT INTO `answer1` (`id`, `q1`, `q2`, `q3`, `date`) VALUES
(1, '共学', 'ある', '1時間以内', '2025-01-03 10:22:21'),
(2, NULL, NULL, NULL, '2025-01-03 11:28:32'),
(3, NULL, NULL, NULL, '2025-01-03 11:28:50'),
(4, '共学', 'ある', '1時間以内', '2025-01-03 11:29:02'),
(5, '共学', 'ない', '1時間半以内', '2025-01-03 11:29:25'),
(6, '共学', 'ある', '1時間以内', '2025-01-03 11:38:25'),
(7, 'こだわらない', 'こだわらない', NULL, '2025-01-03 11:50:37');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `answer1`
--
ALTER TABLE `answer1`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `answer1`
--
ALTER TABLE `answer1`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
