-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 11:33 AM
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
-- Table structure for table `all_temples`
--

CREATE TABLE `all_temples` (
  `id` int(255) NOT NULL,
  `temple_nm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_temples`
--

INSERT INTO `all_temples` (`id`, `temple_nm`) VALUES
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
(21, 'Kailasanantar Temple'),
(22, 'Meenakshi Temple'),
(23, 'Natraj Temple'),
(24, 'Rameshwaram Temple'),
(25, 'Ragnathswamy Temple'),
(26, 'Sripuram Golden Temple'),
(27, 'Thyungraja Temple'),
(28, 'Tirupati Balaji Temple'),
(29, 'Shrikalashsi Temple'),
(30, 'Kanaka Durga Temple'),
(31, 'Shrisailam Temple'),
(32, 'Mallikarjuna Temple'),
(33, 'Kanipakam Temple'),
(34, 'Yaganti'),
(35, 'Lepakshi Temple'),
(36, 'Ayodhya '),
(37, 'Mathura Temple'),
(38, 'Kashi Vishwanath  Temple'),
(39, 'Gorkanath Temple'),
(40, 'Bankhe Bihari Temple'),
(41, 'Somnath Temple'),
(42, 'Dwarkadhish Temple'),
(43, 'Swaminarayan Akshardham'),
(44, 'Rukhmini Temple'),
(45, 'Bala Hanuman Mandir'),
(46, 'Sun Temple'),
(47, 'Jagnath Temple'),
(48, 'Lingaraj Temple'),
(49, 'Mukuteshwar Temple'),
(50, 'Parsurameshwara Temple'),
(51, 'Konark Sun Temple'),
(52, 'Mahakaleshwar Temple (Ujjen)'),
(53, 'Matangeshwar Temple'),
(54, 'Annapurana Temple'),
(55, 'Omkareshwar Temple'),
(56, 'Kedarnath Temple'),
(57, 'Bhimashankar Temple'),
(58, 'Vishwanath Temple'),
(59, 'Nageshwar Temple'),
(60, 'Baidyanath Temple'),
(61, 'Grishneshwar Temple'),
(62, 'Badrinath Temple'),
(63, 'Odisha'),
(64, 'Dwarkadish'),
(65, 'Ekambaranathar Temple'),
(66, 'Jambukeswarar Temple'),
(67, 'Arunachalesvara'),
(68, 'Thillai Natarajar Temple'),
(69, 'Koneswaram Temple'),
(70, 'Kamakshi Amman Temple'),
(71, 'Shrinkala Temple'),
(72, 'Chamundeshwari Temple'),
(73, 'Jogulamba Devi Temple'),
(74, 'Bhramaramba Mallikarjuna Temple'),
(75, 'Renuka Temple'),
(76, 'Kukkuteswara Swamy Temple'),
(77, 'Biraja Temple'),
(78, 'Bhimeswara Temple'),
(79, 'Kamakhya Temple'),
(80, 'Alopi Devi Mandir'),
(81, 'Jwalamukhi Temple'),
(82, 'Mangla Gauri Temple'),
(83, 'Vishalakshi Temple'),
(84, 'Sharada Peeth');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_temples`
--
ALTER TABLE `all_temples`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_temples`
--
ALTER TABLE `all_temples`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
