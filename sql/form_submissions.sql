-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 09:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logs`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_submissions`
--

CREATE TABLE `form_submissions` (
  `id` int(11) NOT NULL,
  `month` varchar(20) DEFAULT NULL,
  `week` int(11) DEFAULT NULL,
  `closed_connects` int(11) DEFAULT NULL,
  `attendance` varchar(10) DEFAULT NULL,
  `visitors` int(11) DEFAULT NULL,
  `face_to_face` int(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_submissions`
--

INSERT INTO `form_submissions` (`id`, `month`, `week`, `closed_connects`, `attendance`, `visitors`, `face_to_face`, `name`, `score`) VALUES
(52, 'November', 1, 1, '80-85%', 1, 1, 'happy@gmail.com', 1),
(53, 'May', 1, 1, '100%', 1, 1, 'happy@gmail.com', 5),
(54, 'August', 1, 1, '80-85%', 1, 1, 'happy@gmail.com', 1),
(55, 'May', 1, 1, '80-85%', 1, 1, 'p1@gamil.com', 1),
(56, 'December', 1, 1, '80-85%', 1, 1, 'p1@gamil.com', 1),
(58, 'April', 1, 7, '80-85%', 1, 1, 'p1@gamil.com', 1),
(59, 'January', 1, 1, '100%', 1, 1, 'p1@gamil.com', 5),
(60, 'May', 1, 1, '96-99%', 1, 1, 'happy@gmail.com', 4),
(61, 'January', 1, 1, '80-85%', 1, 1, 'happy@gmail.com', 1),
(62, 'October', 1, 1, '100%', 1, 1, 'happy@gmail.com', 5);

--
-- Triggers `form_submissions`
--
DELIMITER $$
CREATE TRIGGER `update_score_trigger` BEFORE INSERT ON `form_submissions` FOR EACH ROW SET NEW.score =
    CASE 
        WHEN NEW.attendance = '100%' THEN 5
        WHEN NEW.attendance = '96-99%' THEN 4
        WHEN NEW.attendance = '91-95%' THEN 3
        WHEN NEW.attendance = '86-90%' THEN 2
        WHEN NEW.attendance = '80-85%' THEN 1
        ELSE NULL
    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_score_trigger_on_update` BEFORE UPDATE ON `form_submissions` FOR EACH ROW SET NEW.score =
    CASE 
        WHEN NEW.attendance = '100%' THEN 5
        WHEN NEW.attendance = '96-99%' THEN 4
        WHEN NEW.attendance = '91-95%' THEN 3
        WHEN NEW.attendance = '86-90%' THEN 2
        WHEN NEW.attendance = '80-85%' THEN 1
        ELSE NULL
    END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_submissions`
--
ALTER TABLE `form_submissions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_submissions`
--
ALTER TABLE `form_submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
