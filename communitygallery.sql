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
-- Database: `daffydom_dmit2503`
--

-- --------------------------------------------------------

--
-- Table structure for table `communitygallery`
--

CREATE TABLE `communitygallery` (
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `timedate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `communitygallery`
--

INSERT INTO `communitygallery` (`title`, `description`, `filename`, `timedate`, `id`, `author_id`) VALUES
('Edmonton River in Fall', 'Beautiful image of a river found in Edmonton Alberta Canada during the fall season.', 'fall-edmonton-river.jpeg', '2023-02-01 06:26:32', 1, 1),
('Getting lost in a forest during Fall', 'A photo of a forest in Edmonton Alberta during the fall. Beautiful trees, plats, animals.', 'Fall-edmonton.jpeg', '2023-02-01 06:26:42', 2, 2),
('Frozen Falls in Lake Luis', 'A beautiful frozen falls in Lake Luis. Taken during the winter time.', 'winter-lakeluis-frozenriver.jpeg', '2023-02-01 06:26:50', 3, 3),
('Summer loving Jasper', 'Taken in a lake in Jasper during the summer. What a beautiful day! :D', 'summer-jasper-lake.jpeg', '2023-02-01 06:28:13', 4, 3),
('Island Hopping!', 'It is a great summer vacation on the island of the Philippines!', 'summer-island-beach.jpeg', '2023-02-01 06:39:41', 5, 1),
('Representing the Philippines in Rome!', 'This is a photo of myself in a business competition against countries around the world. We placed second! ðŸ’ªðŸ½ðŸ‡µðŸ‡­', 'Rome.jpeg', '2023-02-03 05:07:07', 6, 3),
('St. Peter\'s Basilica', 'This is a photo of St. Basilica.', 'St Peters Basilica .jpeg', '2023-02-03 05:47:30', 7, 3),
('The Colosseum', 'A photo taken by Donald when he was in Rome.', 'Colosseum.jpeg', '2023-02-03 07:42:51', 8, 3),
('Donald at the Coloseum', 'Of course, a Euro trip without a photo in this location is not complete. Probably one of his favorite photos!', 'don-colloseum.jpeg', '2023-02-03 07:44:57', 9, 3),
('My friend Tulsi', 'This person is a great friend!', 'tulsi.jpeg', '2023-02-04 08:55:03', 10, 2),
('My dog Katch', 'Hanging out with my dog during the weekend!', 'dog1.jpeg', '2023-02-04 08:55:34', 11, 2),
('City of Edmonton', 'Walking on the streets of downtown Edmonton on a Saturday Afternoon.', 'city of edmonton.jpeg', '2023-02-04 08:56:39', 12, 2),
('When other things don\'t matter.', 'Sailing across the river of Xabia Spain.', 'sailing.jpeg', '2023-02-04 23:00:22', 13, 2),
('My friends from the Safari', 'Rhinosauruuuuuuuuuuuuus! Rawr! ðŸ¦', 'Rhino.jpeg', '2023-02-04 23:02:15', 14, 2),
('Under the ocean of stars', 'Scuba Diving at Bali Indonesia', 'scuba.jpeg', '2023-02-04 23:03:30', 15, 2),
('Donald scuba diving!', 'This was the only time I went under the water and OMG I loved every moment! Definitely doing that again.', 'Donald-scuba.jpeg', '2023-02-04 23:05:59', 16, 3),
('Under the Water', 'Swiming under the ocean to see the rock formation. ', 'under-the-water.jpeg', '2023-02-04 23:07:25', 17, 3),
('Walkway', 'A photo of a walkway in Rome that elevated people to the next floor.', 'walkway.jpeg', '2023-02-08 04:38:27', 19, 1),
('When in Rome', 'A photo that was taken inside the Vatican City.', 'Roma.jpeg', '2023-02-08 04:39:34', 20, 1),
('Streets of Alexandra in Edmonton', 'This was taken in the streets of Queen Alexandra in Edmonton City during Winter at -8 degrees.', 'Edmonton Streets.jpeg', '2023-02-08 04:41:26', 21, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `communitygallery`
--
ALTER TABLE `communitygallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `communitygallery`
--
ALTER TABLE `communitygallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
