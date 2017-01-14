-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2017 at 10:42 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skillup`
--
CREATE DATABASE IF NOT EXISTS `skillup` DEFAULT CHARACTER SET utf8 COLLATE utf8_slovenian_ci;
USE `skillup`;

-- --------------------------------------------------------

--
-- Table structure for table `govornik`
--

CREATE TABLE `govornik` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `mjestorodjenja` int(11) DEFAULT '1',
  `slika` text COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `govornik`
--

INSERT INTO `govornik` (`id`, `ime`, `mjestorodjenja`, `slika`) VALUES
(1, 'Ken Robinson', 2, 'https://pi.tedcdn.com/r/pe.tedcdn.com/images/ted/de98b161ad1434910ff4b56c89de71af04b8b873_1600x1200.jpg'),
(2, 'Simon Sinek', 3, 'http://tedconfblog.files.wordpress.com/2014/03/ted2014_dd_dsc_0911_1920.jpg'),
(3, 'Trevor Aaronson', 4, 'https://theintercept.com/wp-uploads/sites/1/2015/03/Trevor_Aaronson-e1447958123308-440x440.jpg'),
(4, 'Kate Adams', 5, 'http://soaps.skim.gs/image/upload/w_1230,h_718,c_fill/v161215220610/soaps/wp-content/uploads/2016/12/Kate-Adams-TED-Talk-ATWT-TED.jpg'),
(5, 'Brene Brown', 6, 'https://tedconfblog.files.wordpress.com/2012/03/ted2012_066696_d31_2766_c_600.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lokacija`
--

CREATE TABLE `lokacija` (
  `id` int(11) NOT NULL,
  `kontinent` varchar(30) COLLATE utf8_slovenian_ci NOT NULL,
  `drzava` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `grad` varchar(50) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `lokacija`
--

INSERT INTO `lokacija` (`id`, `kontinent`, `drzava`, `grad`) VALUES
(1, 'Nepoznato', 'Nepoznato', 'Nepoznato'),
(2, 'Evropa', 'Velika Britanija', 'Liverpool'),
(3, 'Evropa', 'Velika Britanija', 'Wimbledon'),
(4, 'Sjeverna Amerika', 'New York', 'New York'),
(5, 'Evropa', 'Škotska', 'Edinburgh'),
(6, 'Sjeverna Amerika', 'Texas', 'San Antonio');

-- --------------------------------------------------------

--
-- Table structure for table `tema`
--

CREATE TABLE `tema` (
  `id` int(11) NOT NULL,
  `ime` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `opis` text COLLATE utf8_slovenian_ci NOT NULL,
  `govornik` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `tema`
--

INSERT INTO `tema` (`id`, `ime`, `opis`, `govornik`) VALUES
(1, 'Do schools kill creativity?', 'Jedna od najpoznatijih tema o kojima je Robinson govorio.', 1),
(2, 'How great leaders inspire action', 'bez opisa', 2),
(3, 'How this FBI strategy is actually creating US-based terrorists', 'bez opisa', 3),
(4, '4 larger-than-life lessons from soap operas', 'bez opisa', 4),
(5, 'The power of vulnerability', 'bez opisa', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `govornik`
--
ALTER TABLE `govornik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mjestorodjenja` (`mjestorodjenja`);

--
-- Indexes for table `lokacija`
--
ALTER TABLE `lokacija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id`),
  ADD KEY `govornik` (`govornik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `govornik`
--
ALTER TABLE `govornik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lokacija`
--
ALTER TABLE `lokacija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tema`
--
ALTER TABLE `tema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `govornik`
--
ALTER TABLE `govornik`
  ADD CONSTRAINT `govornik_ibfk_1` FOREIGN KEY (`mjestorodjenja`) REFERENCES `lokacija` (`id`);

--
-- Constraints for table `tema`
--
ALTER TABLE `tema`
  ADD CONSTRAINT `tema_ibfk_1` FOREIGN KEY (`govornik`) REFERENCES `govornik` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
