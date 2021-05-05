-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2021 at 04:44 PM
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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_user` varchar(40) NOT NULL,
  `pageID` varchar(40) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_user`, `pageID`, `comment`) VALUES
('sa', 'us-2019', 'Looks scary!'),
('sa', 'blackwidow-2020', 'Excited for this');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie` varchar(100) NOT NULL,
  `director` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `pageID` varchar(100) NOT NULL,
  `Runtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie`, `director`, `genre`, `pageID`, `Runtime`) VALUES
('Black Widow', 'Cate Shortland', 'Action', 'blackwidow-2020', 133),
('Us', 'Jordan Peele', 'Horror', 'us-2019', 121),
('Dolittle', 'Stephen Gaghan', 'Family', 'dolittle-2020', 101);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating` int(10) DEFAULT NULL,
  `pageID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rating`, `pageID`) VALUES
(5, 'us-2019'),
(4, 'us-2019'),
(4, 'us-2019'),
(4, 'us-2019'),
(4, 'us-2019'),
(3, 'us-2019'),
(4, 'us-2019'),
(3, 'us-2019'),
(4, 'us-2019'),
(5, 'us-2019'),
(4, 'us-2019'),
(4, 'us-2019'),
(2, 'us-2019'),
(5, 'us-2019'),
(5, 'dolittle-2020'),
(4, 'dolittle-2020'),
(3, 'dolittle-2020'),
(5, 'us-2019'),
(5, 'us-2019'),
(5, 'us-2019'),
(4, 'blackwidow-2020'),
(5, 'blackwidow-2020'),
(4, 'dolittle-2020'),
(4, 'dolittle-2020'),
(5, 'dolittle-2020'),
(5, 'blackwidow-2020');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `suggest` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`suggest`) VALUES
(''),
(''),
('Happy Gilmore'),
('Nemo'),
('Up'),
('Up'),
('Up'),
(''),
(''),
('Godzilla'),
('Godzilla'),
('Spy Kids');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `Admin`) VALUES
(1, 'sa', 'sa@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(5, 'test', 't@gmail.com', '202cb962ac59075b964b07152d234b70', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
