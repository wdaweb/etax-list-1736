-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `invoice`
--

-- --------------------------------------------------------

--
-- 資料表結構 `rec`
--

CREATE TABLE `rec` (
  `id` int(2) UNSIGNED NOT NULL,
  `year` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mon` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '特別獎',
  `num2` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '特獎',
  `num3` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '頭獎1',
  `num4` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '頭獎2',
  `num5` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '頭獎3',
  `num6` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '增開獎',
  `num7` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '增開獎1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `rec`
--

INSERT INTO `rec` (`id`, `year`, `mon`, `num1`, `num2`, `num3`, `num4`, `num5`, `num6`, `num7`) VALUES
(1, '2019', '1', '98564831', '13346286', '42030882', '06090470', '96857412', '32659874', '85236974'),
(2, '2019', '2', '89562374', '88965234', '38891121', '71829365', '93658741', '12589634', '83234451'),
(3, '2019', '3', '78965412', '76368483', '78965412', '06090470', '63628455', '25176702', '83234451'),
(4, '2019', '4', '78965412', '42030882', '78965412', '71829365', '93658741', '12589634', '83234451'),
(5, '2019', '5', '87798829', '76368483', '42030882', '06090470', '63628455', '25176702', '91714797'),
(6, '2019', '6', '86023546', '70848660', '47309707', '06090470', '93658741', '12589634', '83234451');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `rec`
--
ALTER TABLE `rec`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `rec`
--
ALTER TABLE `rec`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
