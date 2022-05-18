-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-05-14 11:57:23
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `專題`
--

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `user_id` varchar(20) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_level` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_email`, `user_level`) VALUES
('U2205130001', 'mikeliu900106', '1qaz2wsx', 'mikeliu20010106@gmail.com', '1'),
('U2205130002', 'cuni', '1qaz2wsx', 'mikeliu20010106@gmail.com', '1'),
('U2205130003', 'root', '1qaz2wsx', 'mikeliu20010106@gmail.com', '1'),
('U2205130004', 'rootsb', '1qaz2wsx', 'mikeliu20010106@gmail.com', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
