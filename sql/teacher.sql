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
-- 資料表結構 `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` varchar(11) CHARACTER SET latin1 NOT NULL,
  `teacher_username` varchar(30) CHARACTER SET latin1 NOT NULL,
  `teacher_password` varchar(30) CHARACTER SET latin1 NOT NULL,
  `teacher_real_name` varchar(5) CHARACTER SET latin1 NOT NULL,
  `teacher_email` varchar(40) CHARACTER SET latin1 NOT NULL,
  `teacher_level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_username`, `teacher_password`, `teacher_real_name`, `teacher_email`, `teacher_level`) VALUES
('T2022520000', '', '', '', '', 3),
('T2022520000', '', '', '', '', 3),
('T2022520000', '', '', '', '', 3),
('T2022520000', '', '', '', '', 3),
('T2022520000', '', '', '', '', 3),
('T2022520000', '', '', '', '', 3),
('T2022520000', '', '', '', '', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
