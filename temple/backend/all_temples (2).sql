-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 10:48 AM
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
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_temples`
--

INSERT INTO `all_temples` (`id`, `name`, `image`) VALUES
(1, 'Murudeshwar Temple', 'murudeshwar.png'),
(2, 'Vittala Temple', 'vittala.jpg'),
(3, 'Chennakeshava Temple', 'chennakeshava.jpg'),
(4, 'Kotilingeshwar Temple', 'kotilingeshwar.jpg'),
(5, 'Durga gudi', 'durgaGudi.jpg'),
(6, 'Virupaksha Temple', 'virupaksha.jpg'),
(7, 'Ananth Padmhanabhswamy Temple', 'Ananthapadmanabhaswamy.png'),
(8, 'Thirumanadhamkunnu Temple', 'thirumandhamkunnu.jpg'),
(9, 'Vadakkunathan Temple', 'vadakkunathan.jpg'),
(10, 'Sabarimala Sastha Temple', 'sabarimala.jpg'),
(11, 'Chottanikara temple', 'chottanikkara.jpg'),
(12, 'Siddhi Vinayak Temple', 'siddhivinayak.jpg'),
(13, 'Thrimbakeshwar Temple', 'Trimbakeshwar.png'),
(14, 'Ganpatipule Temple', 'ganpatipule.png'),
(15, 'Kolhapur Mahalaxmi Temple', 'Mahalaxmi.png'),
(16, 'Kailash Temple', 'kailash.png'),
(17, 'Kopeshwar Temple', 'kopeshwar.png'),
(18, 'Pandarpur Vittal Temple', 'pandarpur.png'),
(19, 'Kandobha Temple', 'kandobha.jpg'),
(20, 'Ekmbareshwar Temple', 'ekambareshwar.jpg'),
(21, 'Kailasanantar Temple', 'kailasanantar.png'),
(22, 'Meenakshi Temple', 'meenakshi.png'),
(23, 'Natraj Temple', 'nataraj.jpg'),
(24, 'Rameshwaram Temple', 'Rameswaram.png'),
(25, 'Ragnathswamy Temple', 'ranganathswamy.png'),
(26, 'Sripuram Golden Temple', 'sripuram.png'),
(27, 'Thyagaraja Temple', 'thyagaraja.jpg'),
(28, 'Tirupati Balaji Temple', 'tirupati.png'),
(29, 'Shrikalashsi Temple', 'Shrinkala.png'),
(30, 'Kanaka Durga Temple', 'kanaka-durga.png'),
(31, 'Shrisailam Temple', 'srisailam.png'),
(33, 'Kanipakam Temple', 'kanipakam.png'),
(34, 'Yaganti', 'yaganti.jpg'),
(35, 'Lepakshi Temple', 'lepakshi.png'),
(36, 'Ayodhya ', 'ayodhya.png'),
(37, 'Mathura Temple', 'mathura.jpg'),
(38, 'Kashi Vishwanath  Temple', 'vishwanath.png'),
(39, 'Gorakhnath Temple', 'gorakhnath.jpg'),
(40, 'Bankhe Bihari Temple', 'bhankebihari.jpg'),
(41, 'Somnath Temple', 'Somnath.png'),
(42, 'Dwarkadhish Temple', 'dwarka2.jpg'),
(43, 'Swaminarayan Akshardham', 'Akshardham.jpg'),
(44, 'Rukhmini Temple', 'Rukmini.jpg'),
(45, 'Bala Hanuman Mandir', 'Shri-Hanuman.jpg'),
(46, 'Sun Temple', 'Sun-Temple.png'),
(47, 'Jagnnath Temple', 'Jagannath-Temple.png'),
(48, 'Lingaraj Temple', 'Lingaraja-Temple.png'),
(49, 'Mukuteshwar Temple', 'Mukteswar-Temple.jpg'),
(50, 'Parsurameshwara Temple', 'Parsurameswar-Temple.jpg'),
(51, 'Konark Sun Temple', 'Konarka-Sun.jpg'),
(52, 'Mahakaleshwar Temple (Ujjen)', 'Mahakaleswar.png'),
(53, 'Matangeshwar Temple', 'matangeshwaram.png'),
(54, 'Annapurana Temple', 'annapurna-temple.jpg'),
(55, 'Omkareshwar Temple', 'Omkareshwar.png'),
(56, 'Kedarnath Temple', 'kedarnath.png'),
(57, 'Bhimashankar Temple', 'bhima.png'),
(58, 'Vishwanath Temple', 'vishwanath.png'),
(59, 'Nageshwar Temple', 'Nageshwar.png'),
(60, 'Baidyanath Temple', 'Baidyanath.png'),
(61, 'Grishneshwar Temple', 'Grishneshwar.png'),
(62, 'Badrinath Temple', 'Badrinath.png'),
(63, 'Puri Jagnath Odisha', 'puri.png'),
(64, 'Dwarkadish', 'dwarka2.jpg'),
(65, 'Ekambaranathar Temple', 'Ekam.png'),
(66, 'Jambukeswarar Temple', 'jabu.png'),
(67, 'Arunachalesvara', 'arun.png'),
(68, 'Thillai Natarajar Temple', 'thallai-natrajar.jpg'),
(69, 'Koneswaram Temple', 'Koneswaram.png'),
(70, 'Kamakshi Amman Temple', 'Kamakshi.png'),
(71, 'Shrinkala Temple', 'Shrinkala.png'),
(72, 'Chamundeshwari Temple', 'Chamundeshwari.png'),
(73, 'Jogulamba Devi Temple', 'Jogulamba.png'),
(74, 'Bhramaramba Mallikarjuna Temple', 'Bhramaramba.png'),
(75, 'Renuka Temple', 'Renuka.png'),
(76, 'Kukkuteswara Swamy Temple', 'Kukkuteswara.png'),
(77, 'Biraja Temple', 'biraja.jpg'),
(78, 'Bhimeswara Temple', 'bhima.png'),
(79, 'Kamakhya Temple', 'kamakya.jpg'),
(80, 'Alopi Devi Mandir', 'Alopi-Devi.jpg'),
(81, 'Jwalamukhi Temple', ''),
(82, 'Mangla Gauri Temple', ''),
(83, 'Vishalakshi Temple', ''),
(84, 'Sharada Peeth', '');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
