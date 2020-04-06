-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 05:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `First Name` text NOT NULL,
  `Last Name` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `Date` date NOT NULL,
  `Mobile no.` varchar(20) NOT NULL,
  `Country` text NOT NULL,
  `Participent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`First Name`, `Last Name`, `Email`, `Password`, `Date`, `Mobile no.`, `Country`, `Participent`) VALUES
('hadh', 'sjdf', 'dodi@gmail.com', 'DDDDDD!@#@', '2020-03-09', '1234567890', 'India', 'Student'),
('dodi', 'tank', 'dodi@gmail.com', '1234ee562', '2020-03-18', '1234567890', 'India', 'Student'),
('', '', '', '', '0000-00-00', '', 'India', 'Student'),
('dodi', 'tank', 'dodi@gmail.com', '12345Dodi', '1960-12-02', '9812345678', 'India', 'professional');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
