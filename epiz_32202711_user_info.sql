-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql311.epizy.com
-- 생성 시간: 22-09-24 01:37
-- 서버 버전: 10.3.27-MariaDB
-- PHP 버전: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `epiz_32202711_user_info`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'Donald', 'Jethro', 'donaldjethrofernando@gmail.com', '0d343c0f0ca763f983c8042350059f56', '2147483647', 'Brindhavan Nagar 2nd Street', 'Valasaravakkam, Chennai'),
(3, 'Bbb', 'Ccc', 'bbbccc@sample.com', '71d27475242f6b50db02ddf1476107ee', '9677010074', 'Sample address', 'Sample address'),
(4, 'Raj', 'Kumar ', 'raj82117@gmail.com', '72e3fe77f88e540a3245ba164c0fb281', '7395982621', '107,alwarthirunagar annex', '2nd main road 3rd cross street'),
(5, 'AKHIL', 'Sai', 'vtu15406@sample.com', 'ed94b0bb54c888a1cee9fbb0fd831470', '7013382432', 'D.No:49-14-1, Lalithanagar, sakshi office lane,', 'Ndjsjw'),
(7, 'Nitesh  ', 'Sachdeva', 'nithesh@sample.com', '08955ac897fb5f2934444890bfe14fa4', '9677010074', 'Sample address', 'Sample address'),
(8, 'AA', 'BB', 'vtu11111@sample.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234567890', 'CC', 'DD'),
(9, 'Ccc', 'Ddd', 'cccddd@sample.com', '73889d919d3e408036cc554a1796238d', '9677010074', 'Sample address', 'Sample address'),
(10, 'Ddd', 'Eee', 'dddeee@sample.com', 'dd1bf4640bcc4c0990c77a9356f936d8', '9677010074', 'Sample address', 'Sample address'),
(11, 'Xxx', 'Yyy', 'xxxyyy@gmail.com', '31e2a2a741180afe975a45d05f41e9b7', '9677010074', 'Sample address', 'Sample address'),
(12, 'Eee', 'Fff', 'eeefff@sample.com', 'c410dc5f33c8ec31a982741e543d8cc1', '9677010074', 'Sample address', 'Sample address'),
(13, 'Fff', 'Ggg', 'fffggg@sample.com', '063a67ffd37e93c84d11145e579ac0c0', '9677010074', 'Sample address', 'Sample address'),
(14, 'Bbb', 'Nnn', 'bbbnnn@sample.com', '063a67ffd37e93c84d11145e579ac0c0', '9677010074', 'Sample address', 'Sample address'),
(15, 'Lmk', 'Kml', 'lmk@sample.com', '2705b305fd867472621e686230a59bf3', '9677010074', 'Sample address ', 'Sample address');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
