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
-- 資料表結構 `login`
--

CREATE TABLE `login` (
  `id` varchar(20) CHARACTER SET utf8mb4 NOT NULL COMMENT '登入id',
  `username` varchar(30) CHARACTER SET utf8mb4 NOT NULL COMMENT '登入帳號',
  `password` varchar(30) CHARACTER SET utf8mb4 NOT NULL COMMENT '登入密碼',
  `level` varchar(2) CHARACTER SET utf8mb4 NOT NULL COMMENT '登入等級'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`) VALUES
('U2205180006', 'root0101', '1qaz2wsx', '1'),
('C202252000008', '', '', '2'),
('C202252000008', '', '', '2'),
('C202252000008', '', '', '2'),
('C202252000008', '', '', '2'),
('C202252000008', '', '', '2'),
('C202252000008', '', '', '2'),
('C202252000008', '', '', '2'),
('C202252000008', 'cunisb', '1qaz2wsx', '2'),
('C202252000009', 'mikeliu900106', '1qaz2wsx', '2'),
('C2022520000010', 'mikeliu900106', '1qaz2wsx', '2'),
('C2022520000011', '', '', '2'),
('C2022520000012', '', '', '2'),
('C2022520000012', '', '', '2'),
('C2022520000012', 'cunisb', 'eqwe', '2'),
('C20225200013', 'cunisb', 'eqwe', '2'),
('C20225200014', '', '', '2'),
('U2205200005', 'r00t', '1qaz2w', '1'),
('C20225210014', '', '', '2'),
('C20225210014', '', '', '2'),
('C20225210015', 'qew', 'qew', '2'),
('C20225210015', 'ertre', 'tre', '2'),
('C20225210001', 'eqwe', 'qwe', '2'),
('C20225210001', 'eqwe231', 'qwewq', '2'),
('C20225210001', 'eqwe2312', 'eqwe', '2'),
('C20225210001', 'eqwe23123', 'qwewqe', '3'),
('C20225210001', 'eqwe231236q', 'sad', '3'),
('C20225210001', 'eqwe231236q1', 'dasdwq', '3'),
('C20225210001', 'eqwe231236q11', 'qwe', '3'),
('C20225210001', 'eqw', 'ewq', '3'),
('C20225210001', 'eqw3', 'eqwe', '3'),
('C20225210002', 'cunisbdsa', 'asd', '3'),
('T20225210003', 'wqe', 'wqe', '2'),
('T20225210003', 'wqe', 'wqe', '2'),
('T20225210003', 'wqe', 'wqe', '2'),
('T20225210003', 'wqeweq', 'eqw', '2'),
('U2205240006', 'r00t312', '1qaz2wsx', '1'),
('U2205240007', 'r00t3122', '1qaz2wsx', '1'),
('U2205240008', 'r00t31223', '1qaz2wsx', '1'),
('C20225240003', 'wrrwer', '312', '3'),
('T20225240004', 'wqe', '1eqwe', '2'),
('T20225240004', 'wqeWQEWQE', '1eqwe', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
