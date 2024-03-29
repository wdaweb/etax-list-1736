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
-- 資料表結構 `invo`
--

CREATE TABLE `invo` (
  `id` int(5) UNSIGNED NOT NULL,
  `year` int(2) NOT NULL,
  `mon` int(2) NOT NULL,
  `num` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `invo`
--

INSERT INTO `invo` (`id`, `year`, `mon`, `num`, `money`) VALUES
(1, 2019, 3, 'EV70613617', 109),
(2, 2019, 4, 'XH92799670', 107),
(3, 2019, 5, 'VB43866617', 79),
(4, 2019, 2, 'PN38891121', 288),
(5, 2019, 4, 'HX86794449', 276),
(6, 2019, 2, 'KL93199151', 179),
(7, 2019, 2, 'VK55373109', 89),
(8, 2019, 2, 'RO52503985', 246),
(9, 2019, 4, 'YC85523819', 138),
(10, 2019, 1, 'NJ13346286', 84),
(11, 2019, 3, 'TQ00568458', 93),
(12, 2019, 5, 'ZA01680854', 136),
(13, 2019, 4, 'NT40504145', 176),
(14, 2019, 4, 'XZ34203489', 21),
(15, 2019, 4, 'GJ91806705', 90),
(16, 2019, 2, 'TV95330270', 138),
(17, 2019, 4, 'NC57347024', 160),
(18, 2019, 3, 'OK35870176', 107),
(19, 2019, 2, 'FC59975736', 250),
(20, 2019, 6, 'AX10701183', 170),
(21, 2019, 2, 'NU54442813', 45),
(22, 2019, 3, 'KD48336595', 153),
(23, 2019, 5, 'OX89439527', 212),
(24, 2019, 3, 'UW35700453', 77),
(25, 2019, 2, 'IQ21308107', 45),
(26, 2019, 4, 'MA18034205', 7),
(27, 2019, 3, 'JN02038177', 162),
(28, 2019, 2, 'JQ08854866', 116),
(29, 2019, 3, 'KW11189339', 178),
(30, 2019, 1, 'UU25866246', 116),
(31, 2019, 2, 'OY96051594', 13),
(32, 2019, 4, 'XL19738006', 76),
(33, 2019, 6, 'VY01016548', 281),
(34, 2019, 2, 'MJ56548372', 105),
(35, 2019, 1, 'ST15053806', 233),
(36, 2019, 3, 'EF34047611', 28),
(37, 2019, 2, 'MR68678979', 71),
(38, 2019, 1, 'WF98564831', 44),
(39, 2019, 4, 'JU76224853', 69),
(40, 2019, 5, 'GT27658575', 78),
(41, 2019, 5, 'LA62739309', 167),
(42, 2019, 1, 'FQ03991993', 103),
(43, 2019, 2, 'KA54091946', 294),
(44, 2019, 2, 'XW60264584', 298),
(45, 2019, 5, 'AW05350009', 249),
(46, 2019, 4, 'AE06346926', 43),
(47, 2019, 1, 'PM86140670', 245),
(48, 2019, 1, 'VM29630977', 26),
(49, 2019, 2, 'WJ70387102', 101),
(50, 2019, 2, 'KH64351680', 141),
(51, 2019, 3, 'VI12602230', 134),
(52, 2019, 3, 'FG24019881', 246),
(53, 2019, 5, 'IS79237430', 38),
(54, 2019, 6, 'FP68288531', 288),
(55, 2019, 2, 'KB24902410', 237),
(56, 2019, 1, 'HW29131537', 102),
(57, 2019, 4, 'RX83770883', 126),
(58, 2019, 2, 'YH08514482', 288),
(59, 2019, 3, 'AI15062019', 272),
(60, 2019, 5, 'VU73888514', 110),
(61, 2019, 1, 'LU42189968', 242),
(62, 2019, 1, 'TI63781529', 170),
(63, 2019, 6, 'JM22209486', 225),
(64, 2019, 4, 'AN50539542', 70),
(65, 2019, 3, 'DO37672968', 243),
(66, 2019, 5, 'OU38882482', 166),
(67, 2019, 5, 'SJ67843250', 158),
(68, 2019, 2, 'AC17153293', 231),
(69, 2019, 4, 'KX25926545', 279),
(70, 2019, 3, 'AM63840167', 194),
(71, 2019, 6, 'TX51142896', 105),
(72, 2019, 4, 'TT73431095', 255),
(73, 2019, 1, 'LB10471192', 146),
(74, 2019, 4, 'HC24127294', 186),
(75, 2019, 5, 'VB42339119', 204),
(76, 2019, 2, 'OU06894370', 56),
(77, 2019, 6, 'SB68144826', 26),
(78, 2019, 3, 'OD23255644', 255),
(79, 2019, 2, 'YO75123053', 77),
(80, 2019, 5, 'WV02204508', 43),
(81, 2019, 1, 'XV48235077', 243),
(82, 2019, 4, 'BT89638246', 173),
(83, 2019, 1, 'JG28770173', 290),
(84, 2019, 6, 'FO38009815', 145),
(85, 2019, 5, 'FX19119308', 170),
(86, 2019, 6, 'IF37406733', 241),
(87, 2019, 2, 'DV35805879', 231),
(88, 2019, 1, 'OU55598024', 107),
(89, 2019, 5, 'TO10899500', 244),
(90, 2019, 1, 'UZ26691648', 239),
(91, 2019, 3, 'HP37464258', 74),
(92, 2019, 3, 'FK90825728', 208),
(93, 2019, 6, 'BJ94618570', 197),
(94, 2019, 3, 'GK68775384', 38),
(95, 2019, 3, 'AU12856480', 163),
(96, 2019, 3, 'SA01975780', 65),
(97, 2019, 4, 'CI60396584', 246),
(98, 2019, 4, 'PZ02143626', 259),
(99, 2019, 6, 'AU98835297', 149),
(100, 2019, 2, 'DT53132232', 61),
(101, 2019, 4, 'GZ68415546', 234),
(102, 2019, 4, 'DS42657987', 286),
(103, 2019, 5, 'PK13439905', 191),
(104, 2019, 2, 'YH09059403', 33),
(105, 2019, 1, 'BP69032478', 249),
(106, 2019, 6, 'RY03199174', 248),
(107, 2019, 1, 'BG64388989', 213),
(108, 2019, 6, 'BC63304671', 163),
(109, 2019, 1, 'PG40602046', 278),
(110, 2019, 2, 'ZI43718664', 216),
(111, 2019, 5, 'QL01225565', 58),
(112, 2019, 2, 'XK14738827', 238),
(113, 2019, 5, 'MW86725461', 85),
(114, 2019, 2, 'KI85552090', 83),
(115, 2019, 4, 'OO57226318', 184),
(116, 2019, 2, 'AN70344737', 216),
(117, 2019, 5, 'WI35189469', 291);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `invo`
--
ALTER TABLE `invo`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `invo`
--
ALTER TABLE `invo`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
