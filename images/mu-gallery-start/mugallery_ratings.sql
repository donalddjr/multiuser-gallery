-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2023 at 01:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ddominguez3_dmit2503`
--

-- --------------------------------------------------------

--
-- Table structure for table `mugallery_ratings`
--

CREATE TABLE `mugallery_ratings` (
  `picture_id` int(11) NOT NULL,
  `rater_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `ratings_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mugallery_ratings`
--

INSERT INTO `mugallery_ratings` (`picture_id`, `rater_id`, `rating`, `ratings_id`) VALUES
(1, 3, 5, 12),
(2, 3, 5, 13),
(3, 3, 5, 14),
(4, 3, 5, 15),
(5, 3, 5, 16),
(6, 3, 5, 17),
(11, 3, 4, 18),
(12, 3, 4, 19),
(14, 3, 4, 20),
(7, 3, 1, 21),
(17, 3, 3, 22),
(20, 2, 2, 23),
(21, 2, 4, 24),
(17, 2, 2, 25),
(16, 2, 5, 26),
(10, 1, 5, 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mugallery_ratings`
--
ALTER TABLE `mugallery_ratings`
  ADD PRIMARY KEY (`ratings_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mugallery_ratings`
--
ALTER TABLE `mugallery_ratings`
  MODIFY `ratings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
