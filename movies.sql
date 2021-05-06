-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 10:51 PM
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
('Black Widow', 'Cate Shortland', 'Action', 'blackwidow-2020', 133, 'At birth the Black Widow (aka Natasha Romanova) is given to the KGB, which grooms her to become its ultimate operative. When the U.S.S.R. breaks up, the government tries to kill her as the action moves to present-day New York, where she is a freelance operative.\r\nDevelopment of a Black Widow film began in April 2004 by Lionsgate, with David Hayter attached to write and direct. The project did not move forward and the film rights to the character reverted to Marvel Studios by June 2006. Johansson was cast in the role for several MCU films beginning with Iron Man 2 (2010). Marvel and Johansson expressed interest in a solo film several times over the following years, before Schaeffer and Shortland were hired in 2018. Benson and Pearson were added later. Filming took place from May to October, in Norway, Budapest, Morocco, Pinewood Studios in the United Kingdom, and in Atlanta and Macon, Georgia. (Action)', 'BlackWidow_Poster.png', 2021, 0),
('Us', 'Jordan Peele', 'Horror', 'us-2019', 121, 'Us is a 2019 American horror film written and directed by Jordan Peele, starring Lupita Nyong\'o, Winston Duke, Elisabeth Moss, and Tim Heidecker. The film follows Adelaide Wilson (Nyong\'o) and her family, who are attacked by a group of menacing doppelgängers. The project was announced in February 2018, and much of the cast joined in the following months. Peele produced the film alongside Jason Blum and Sean McKittrick (the trio previously having collaborated on Get Out and BlacKkKlansman), as well as Ian Cooper. Filming took place from July to October 2018 in California, mostly in Los Angeles, Pasadena and Santa Cruz. (Horror)', 'Us_Poster.png', 2019, 4),
('A Quiet Place', 'John Krasinski', 'Horror', 'aquietplace-2018', 90, 'A Quiet Place is a 2018 American horror film directed by John Krasinski and written by Bryan Woods, Scott Beck and Krasinski. The plot revolves around a father (Krasinski) and a mother (Emily Blunt) who struggle to survive and raise their children (Millicent Simmonds and Noah Jupe) in a post-apocalyptic world inhabited by blind monsters with an acute sense of hearing.', 'AQuietPlace_Poster.png', 2018, 4),
('Stowaway', 'Joe Penna', 'Drama', 'stowaway-2021', 116, 'A three-person crew on a mission to Mars faces an impossible choice when an unplanned passenger jeopardizes the lives of everyone on board.', 'Stowaway_Poster.png', 2021, 3),
('Things Heard & Seen', 'Shari Springer Berman, Robert Pulcini', 'Drama', 'thingsheardandseen-2021', 121, 'An artist relocates to the Hudson Valley and begins to suspect that her marriage has a sinister darkness, one that rivals her new homes history.', 'ThingsHeardandSeen_Poster.png', 2021, 3),
('Wrong Turn', 'Mike P. Nelson', 'Horror', 'wrongturn-2021', 109, 'Friends hiking the Appalachian Trail are confronted by The Foundation, a community of people who have lived in the mountains for hundreds of years.', 'WrongTurn_Poster.png', 2021, 3),
('Mortal Kombat', 'Simon McQuoid', 'Action', 'mortalkombat-2021', 110, 'MMA fighter Cole Young seeks out Earths greatest champions in order to stand against the enemies of Outworld in a high stakes battle for the universe.', 'MortalKombat_Poster.png', 2021, 3),
('Dolittle', 'Stephen Gaghan', 'Comedy', 'dolittle-2020', 101, 'A physician who can talk to animals embarks on an adventure to find a legendary island with a young apprentice and a crew of strange pets.', 'Dolittle_Poster.png', 2020, 3),
('Cherry', 'Anthony Russo, Joe Russo', 'Drama', 'cherry-2021', 142, 'Cherry drifts from college dropout to army medic in Iraq - anchored only by his true love, Emily. But after returning from the war with PTSD, his life spirals into drugs and crime as he struggles to find his place in the world.', 'Cherry_Poster.png', 2021, 3),
('Tenet', 'Christopher Nolan', 'Action', 'tenet-2020', 150, 'Armed with only one word, Tenet, and fighting for the survival of the entire world, a Protagonist journeys through a twilight world of international espionage on a mission that will unfold in something beyond real time.', 'Tenet_Poster.png', 2020, 4),
('Soul', 'Pete Docter, Kemp Powers', 'Children', 'soul-2020', 100, 'After landing the gig of a lifetime, a New York jazz pianist suddenly finds himself trapped in a strange land between Earth and the afterlife.', 'Soul-Poster.png', 2020, 4),
('Without Remorse', 'Stefano Sollima', 'Action', 'withoutremorse-2021', 109, 'John Clark, a Navy SEAL, goes on a path to avenge his wifes murder only to find himself inside of a larger conspiracy.', 'WithoutRemorse_Poster.png', 2021, 3),
('Greyhound', 'Aaron Schneider', 'Action', 'greyhound-2020', 91, 'Several months after the U.S. entry into World War II, an inexperienced U.S. Navy commander must lead an Allied convoy being stalked by a German submarine wolf pack.', 'Greyhound_Poster.png', 2020, 4),
('Scoob', 'Tony Cervone', 'Children', 'scoob-2020', 93, 'Scooby and the gang face their most challenging mystery ever: a plot to unleash the ghost dog Cerberus upon the world. As they race to stop this dogpocalypse, the gang discovers that Scooby has an epic destiny greater than anyone imagined.', 'Scoob_Poster.png', 2020, 3),
('Palm Springs', 'Max Barbakow', 'Comedy', 'palmsprings-2020', 90, 'Stuck in a time loop, two wedding guests develop a budding romance while living the same day over and over again.', 'PalmSprings_Poster.png', 2020, 4),
('Willys Wonderland', 'Kevin Lewis', 'Action', 'willswonderland', 88, 'A quiet drifter is tricked into a janitorial job at the now condemned Willys Wonderland. The mundane tasks suddenly become an all-out fight for survival against wave after wave of demonic animatronics. Fists fly, kicks land, titans clash -- and only one side will make it out alive.', 'WillysWonderland_Poster.png', 2021, 3);

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

