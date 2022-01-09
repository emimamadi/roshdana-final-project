-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 07:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roshdana_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(11) NOT NULL,
  `name` varchar(19) NOT NULL,
  `slug` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `slug`) VALUES
(1, 'آذربایجان شرقی', 'آذربایجان-شرقی'),
(2, 'آذربایجان غربی', 'آذربایجان-غربی'),
(3, 'اردبیل', 'اردبیل'),
(4, 'اصفهان', 'اصفهان'),
(5, 'البرز', 'البرز'),
(6, 'ایلام', 'ایلام'),
(7, 'بوشهر', 'بوشهر'),
(8, 'تهران', 'تهران'),
(9, 'چهارمحال و بختیاری', 'چهارمحال-بختیاری'),
(10, 'خراسان جنوبی', 'خراسان-جنوبی'),
(11, 'خراسان رضوی', 'خراسان-رضوی'),
(12, 'خراسان شمالی', 'خراسان-شمالی'),
(13, 'خوزستان', 'خوزستان'),
(14, 'زنجان', 'زنجان'),
(15, 'سمنان', 'سمنان'),
(16, 'سیستان و بلوچستان', 'سیستان-بلوچستان'),
(17, 'فارس', 'فارس'),
(18, 'قزوین', 'قزوین'),
(19, 'قم', 'قم'),
(20, 'کردستان', 'کردستان'),
(21, 'کرمان', 'کرمان'),
(22, 'کرمانشاه', 'کرمانشاه'),
(23, 'کهگیلویه و بویراحمد', 'کهگیلویه-بویراحمد'),
(24, 'گلستان', 'گلستان'),
(25, 'لرستان', 'لرستان'),
(26, 'گیلان', 'گیلان'),
(27, 'مازندران', 'مازندران'),
(28, 'مرکزی', 'مرکزی'),
(29, 'هرمزگان', 'هرمزگان'),
(30, 'همدان', 'همدان'),
(31, 'یزد', 'یزد');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `age` int(10) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `age`, `city`, `address`, `sex`, `education`) VALUES
(32, 'حسن', 26, 'مشهد', 'سیسیشسششششسشس', 'مرد', 'ارشد'),
(33, 'حسن', 26, 'مشهد', 'سیسیشسششششسشس', 'مرد', 'ارشد'),
(34, 'تقی', 63, 'تهرون', 'ظطدظ«ـطد«ةـأينـأنتظط', 'مرد', 'کاردانی'),
(35, 'لیلا', 98, 'نیشابور', 'تننتدنتدتدنتدنددنتدننغلغعفعغفغععغلعل', 'زن', 'دکترا'),
(36, 'حسن', 40, 'اصفهان', 'خیابان', 'مرد', 'کاردانی'),
(37, 'حسن', 40, 'اصفهان', 'خیابان', 'مرد', 'کاردانی'),
(38, 'حسن', 40, 'اصفهان', 'خیابان', 'مرد', 'کاردانی'),
(39, 'اصغر', 23, 'فارس', 'خیابان ممد', 'مرد', 'لیسانس'),
(40, 'شمسی', 15, 'البرز', 'خیابان باغ', 'زن', 'دکترا');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
