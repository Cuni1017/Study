-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-05-17 14:19:24
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
-- 資料表結構 `company`
--

CREATE TABLE `company` (
  `company_id` varchar(8) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `company_username` varchar(30) NOT NULL,
  `company_password` varchar(30) NOT NULL,
  `company_number` int(12) NOT NULL,
  `company_email` varchar(40) NOT NULL,
  `company_money` varchar(30) NOT NULL,
  `company_time` varchar(20) NOT NULL,
  `company_place` varchar(40) NOT NULL,
  `company_content` varchar(50) NOT NULL,
  `company_ work_experience` varchar(50) NOT NULL,
  `company_type` varchar(10) NOT NULL,
  `company_Education` varchar(10) NOT NULL,
  `company_ department` varchar(10) NOT NULL,
  `company_other` varchar(50) NOT NULL,
  `company_safe` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_username`, `company_password`, `company_number`, `company_email`, `company_money`, `company_time`, `company_place`, `company_content`, `company_ work_experience`, `company_type`, `company_Education`, `company_ department`, `company_other`, `company_safe`, `level`) VALUES
('[value-1', '拉拉', '[value-3]', '[value-4]', 0, '[value-6]', '[value-7]', '[value-8]', '[value-9]', '[value-10]', '[value-11]', '[value-12]', '[value-14]', '[value-15]', '[value-16]', '[value-17]', 0),
('C2205170', '遠小有限公司', 'mike001', '1qaz2wsx', 987225371, 'mikeliu20010101@gmail.com', '一萬到四萬', '早八到晚六', '台北市致遠一路一一一號', '打字', '曾是it人員', '實習生', '大學畢業', 'java程式設計師', '上班不能吃東西', '已有保險', 3),
('C2205170', '遠大有限公司', 'mike002', '1qaz2wsx', 987225372, 'mikeliu20010102@gmail.com', '一萬到五萬', '早八到晚六', '台北市致遠二路一一二號', '打電腦', '曾是it人員', '實習生', '大學畢業', 'java程式設計師', '上班不能吃東西', '已有保險', 3),
('C2205170', '遠路有限公司', 'mike003', '1qaz2wsx', 987225373, 'mikeliu20010103@gmail.com', '一萬到六萬', '早八到晚六', '台北市致遠三路一一三號', '打資料庫', '曾是it人員', '實習生', '大學畢業', 'java程式設計師', '上班不能吃東西', '已有保險', 3),
('C2205170', '遠空有限公司', 'mike004', '1qaz2wsx', 987225374, 'mikeliu20010104@gmail.com', '一萬到七萬', '早八到晚六', '台北市致遠四路一一四號', '打excel', '曾是it人員', '實習生', '大學畢業', 'java程式設計師', '上班不能吃東西', '已有保險', 3),
('C2205170', '遠船有限公司', 'mike005', '1qaz2wsx', 987225375, 'mikeliu20010105@gmail.com', '一萬到八萬', '早八到晚六', '台北市致遠五路一一五號', '打github', '曾是it人員', '實習生', '大學畢業', 'java程式設計師', '上班不能吃東西', '已有保險', 3),
('C2205170', '遠東有限公司', 'mike006', '1qaz2wsx', 987225376, 'mikeliu20010106@gmail.com', '一萬到九萬', '早八到晚六', '台北市致遠六路一一六號', '打人', '曾是it人員', '實習生', '大學畢業', 'java程式設計師', '上班不能吃東西', '已有保險', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
