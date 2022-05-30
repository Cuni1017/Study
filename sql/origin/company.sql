-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-05-30 08:22:18
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
-- 資料表結構 `company`
--

CREATE TABLE `company` (
  `company_id` varchar(15) CHARACTER SET utf8mb4 NOT NULL COMMENT '廠商ID',
  `company_name` varchar(30) CHARACTER SET utf8mb4 NOT NULL COMMENT '廠商名稱',
  `company_title` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '大綱',
  `company_username` varchar(30) CHARACTER SET utf8mb4 NOT NULL COMMENT '廠商帳號',
  `company_password` varchar(30) CHARACTER SET utf8mb4 NOT NULL COMMENT '廠商密碼',
  `company_number` int(15) NOT NULL COMMENT '廠商電話',
  `company_email` varchar(40) CHARACTER SET utf8mb4 NOT NULL COMMENT '廠商電子信箱',
  `company_money` varchar(30) CHARACTER SET utf8mb4 NOT NULL COMMENT '實習薪資',
  `company_time` varchar(20) CHARACTER SET utf8mb4 NOT NULL COMMENT '工作時間',
  `company_place` varchar(40) CHARACTER SET utf8mb4 NOT NULL COMMENT '工作時間',
  `company_content` varchar(50) CHARACTER SET utf8mb4 NOT NULL COMMENT '工作內容',
  `company_ work_experience` varchar(50) CHARACTER SET utf8mb4 NOT NULL COMMENT '要求工作經驗',
  `company_type` varchar(10) CHARACTER SET utf8mb4 NOT NULL COMMENT '職業類別',
  `company_Education` varchar(30) CHARACTER SET utf8mb4 NOT NULL COMMENT '教育程度',
  `company_ department` varchar(30) CHARACTER SET utf8mb4 NOT NULL COMMENT '科系要求',
  `company_other` varchar(50) CHARACTER SET utf8mb4 NOT NULL COMMENT '補充事項',
  `company_safe` varchar(50) CHARACTER SET utf8mb4 NOT NULL COMMENT '員工保險',
  `level` varchar(2) CHARACTER SET utf8mb4 NOT NULL COMMENT '使用者等級'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_title`, `company_username`, `company_password`, `company_number`, `company_email`, `company_money`, `company_time`, `company_place`, `company_content`, `company_ work_experience`, `company_type`, `company_Education`, `company_ department`, `company_other`, `company_safe`, `level`) VALUES
('C20225300001', '明偉有限公司', '', 'CPN', '1qaz2wsx', 978978978, 'Cunie0001@gmail.com', '吃自己', '做到死', '測試市測試街測試路', '前端美術設計', '無', '賤種', '國小', '無', '歡迎各位賤種', '無', '3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
