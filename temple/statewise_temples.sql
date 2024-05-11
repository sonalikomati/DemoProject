-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 11:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temple`
--

-- --------------------------------------------------------

--
-- Table structure for table `statewise_temples`
--

CREATE TABLE `statewise_temples` (
  `id` int(200) NOT NULL,
  `sname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `statewise_temples`
--

INSERT INTO `statewise_temples` (`id`, `sname`) VALUES
(1, 'Murudeshwar Temple'),
(2, 'Vittala Temple'),
(3, 'Chennakeshava Temple'),
(4, 'Kotilingeshwar Temple'),
(5, 'Durga gudi'),
(6, 'Virupaksha Temple'),
(7, 'Ananth Padmhanabhswamy Temple'),
(8, 'Thirumanadhamkunnu Temple'),
(9, 'Vadakkunathan Temple'),
(10, 'Sabarimala Sastha Temple'),
(11, 'Chottanikara temple'),
(12, 'Siddhi Vinayak Temple'),
(13, 'Thrimbakeshwar Temple'),
(14, 'Ganpatipule Temple'),
(15, 'Kolhapur Mahalaxmi Temple'),
(16, 'Kailash Temple'),
(17, 'Kopeshwar Temple'),
(18, 'Pandarpur Vittal Temple'),
(19, 'Kandobha Temple'),
(20, 'Ekmbareshwar Temple'),
(21, 'Meenakshi Temple'),
(22, 'Natraj Temple'),
(23, 'Rameshwaram Temple'),
(24, 'Ragnathswamy Temple'),
(25, 'Sripuram Golden Temple'),
(26, 'Thyungraja Temple'),
(27, 'Tirupati Balaji Temple'),
(28, 'Shrikalashti Temple'),
(29, 'Kanaka Durga Temple'),
(30, 'Shrisailam Temple'),
(31, 'Mallikarjuna Temple'),
(32, 'Kanipakam Temple'),
(33, 'Yaganti'),
(34, 'Lepakshi Temple'),
(35, 'Ayodhya '),
(36, 'Mathura Temple'),
(37, 'Kashi Vishwanath  Temple'),
(38, 'Gorkanath Temple'),
(39, 'Bankhe Bihari Temple'),
(40, 'Somnath Temple'),
(41, 'Dwarkadhish Temple'),
(42, 'Swaminarayan Akshardham'),
(43, 'Rukhmini Temple'),
(44, 'Bala Hanuman Mandir'),
(45, 'Jagnath Temple'),
(46, 'Lingaraj Temple'),
(47, 'Mukuteshwar Temple'),
(48, 'Parsurameshwara Temple'),
(49, 'Konark Sun Temple'),
(50, 'Sun Temple'),
(51, 'Mahakaleshwar Temple (Ujjen)'),
(52, 'Matangeshwar Temple'),
(53, 'Annapurana Temple');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `statewise_temples`
--
ALTER TABLE `statewise_temples`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `statewise_temples`
--
ALTER TABLE `statewise_temples`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
