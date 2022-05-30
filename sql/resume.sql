-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 
-- 伺服器版本: 10.1.16-MariaDB
-- PHP 版本： 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `study`
--

-- --------------------------------------------------------

--
-- 資料表結構 `resume`
--

CREATE TABLE `resume` (
  `user_id` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `home` int(12) NOT NULL,
  `other` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `county` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `resume`
--

INSERT INTO `resume` (`user_id`, `name`, `sex`, `birthday`, `email`, `contact`, `phone`, `home`, `other`, `county`, `district`, `address`, `file`) VALUES
('U2205180006', '???', 'bo', '2022-05-10', 'mikeliu20010106@gmail.com', 'eqweqwe', 987263214, 0, '65919843', '???', '???', '????', '0'),
('U2205180006', '???', 'bo', '2022-05-04', 'mikeliu20010106@gmail.com', 'eqweqwe', 7585, 75757, '57857', '???', '???', '????', '0'),
('U2205180006', '劉明偉', 'boy', '2022-05-12', 'mikeliu20010106@gmail.com', '587', 987263214, 29855064, '65919843', '屏東縣', '崁頂鄉', 'wqe', '0'),
('U2205180006', '劉明偉', 'boy', '2022-05-18', 'mikeliu20010106@gmail.com', '587', 987263214, 29855064, '', '高雄市', '路竹區', '致遠二路', 'C:/staff_mysql/origin/upload/?M?D??????.docx'),
('U2205180006', '劉明偉', 'boy', '2022-05-18', 'mikeliu20010106@gmail.com', '587', 987263214, 29855064, '', '高雄市', '路竹區', '致遠二路', 'C:/staff_mysql/origin/upload/?M?D??????.docx'),
('U2205180006', '劉明偉', 'boy', '2022-05-18', 'mikeliu20010106@gmail.com', '587', 987263214, 29855064, '', '高雄市', '路竹區', '致遠二路', 'C:/staff_mysql/origin/upload/?M?D??????.docx'),
('U2205180006', '劉明偉', 'boy', '2022-05-18', 'mikeliu20010106@gmail.com', '587', 987263214, 29855064, '', '高雄市', '路竹區', '致遠二路', 'C:/staff_mysql/origin/upload/?M?D??????.docx'),
('U2205180006', '劉明偉', 'boy', '2022-05-18', 'mikeliu20010106@gmail.com', '587', 987263214, 29855064, '', '高雄市', '路竹區', '致遠二路', 'C:/staff_mysql/origin/upload/專題企劃書.docx'),
('U2205180006', '劉明偉', 'boy', '2022-05-18', 'mikeliu20010106@gmail.com', '587', 987263214, 29855064, '', '高雄市', '路竹區', '致遠二路', 'C:/staff_mysql/origin/upload/專題企劃書.docx');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
