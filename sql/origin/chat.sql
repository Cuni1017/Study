-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-05-30 08:22:14
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
  `chat_id` varchar(20) CHARACTER SET utf8mb4 NOT NULL COMMENT '聊天id',
  `chat_maker` varchar(20) CHARACTER SET utf8mb4 NOT NULL COMMENT '聊天名稱',
  `chat_subject` varchar(20) CHARACTER SET utf8mb4 NOT NULL COMMENT '聊天大綱',
  `chat_content` varchar(100) CHARACTER SET utf8mb4 NOT NULL COMMENT '聊天內容',
  `chat_date` date NOT NULL COMMENT '聊天時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `chat`
--

INSERT INTO `chat` (`chat_id`, `chat_maker`, `chat_subject`, `chat_content`, `chat_date`) VALUES
('CH', '老子', '測試', '看看', '2022-05-30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
