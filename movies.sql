-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 04:25 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database1`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie` varchar(100) NOT NULL,
  `director` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `pageID` varchar(100) NOT NULL,
  `Runtime` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie`, `director`, `genre`, `pageID`, `Runtime`, `description`, `image`, `year`, `rating`) VALUES
('Black Widow', 'Cate Shortland', 'Action', 'blackwidow-2020', 133, '', '', 0, 0),
('Us', 'Jordan Peele', 'Horror', 'us-2019', 121, 'Us is a 2019 American horror film written and directed by Jordan Peele, starring Lupita Nyong\'o, Winston Duke, Elisabeth Moss, and Tim Heidecker. The film follows Adelaide Wilson (Nyong\'o) and her family, who are attacked by a group of menacing doppelgängers. The project was announced in February 2018, and much of the cast joined in the following months. Peele produced the film alongside Jason Blum and Sean McKittrick (the trio previously having collaborated on Get Out and BlacKkKlansman), as well as Ian Cooper. Filming took place from July to October 2018 in California, mostly in Los Angeles, Pasadena and Santa Cruz. (Horror)', 'Us_Poster.png', 2019, 4),
('A Quiet Place', 'John Krasinski', 'Horror', 'aquietplace-2018', 90, 'A Quiet Place is a 2018 American horror film directed by John Krasinski and written by Bryan Woods, Scott Beck and Krasinski. The plot revolves around a father (Krasinski) and a mother (Emily Blunt) who struggle to survive and raise their children (Millicent Simmonds and Noah Jupe) in a post-apocalyptic world inhabited by blind monsters with an acute sense of hearing.', 'AQuietPlace_Poster.png', 2018, 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
