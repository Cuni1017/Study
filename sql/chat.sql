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
-- 資料表結構 `chat`
--

CREATE TABLE `chat` (
  `chat_id` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `chat_maker` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `chat_subject` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `chat_content` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `chat_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `chat`
--

INSERT INTO `chat` (`chat_id`, `chat_maker`, `chat_subject`, `chat_content`, `chat_date`) VALUES
('[value-1]', '留名緯', '給庫', '在那狡辯', '0000-00-00'),
('[value-1]', '留名晅', '給哈', '遲到早退', '0000-00-00'),
('[value-1]', '留名大', '給你', '再不做專題', '0000-00-00'),
('[value-1]', '留名小', '給我', '有人無情給酷', '0000-00-00'),
('[value-1]', '留名嘴', '給他', '真的帥', '0000-00-00'),
('a85254', '劉明偉', '我好帥', '我好帥', '0000-00-00'),
('CH', 'ad', 'asd', 'asd', '2022-05-20'),
('CH', 'ad', 'asd', 'qwewq', '2022-05-20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
