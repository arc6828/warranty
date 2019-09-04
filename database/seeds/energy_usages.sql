-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 04, 2019 at 04:27 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warranty`
--

--
-- Dumping data for table `energy_usages`
--

INSERT INTO `energy_usages` (`id`, `created_at`, `updated_at`, `title`, `content`, `place_type`, `category`, `date_begin`, `date_end`, `quantity`, `watts`, `joules`, `hours_per_day`, `day_per_week`, `user_id`, `photo`) VALUES
(1, '2019-09-03 08:26:05', '2019-09-03 08:26:05', 'Machine A', 'ABC super robot', 'office', 'electricity', '2019-05-15', '2019-09-29', 5, 3000.00, NULL, 12.00, 7.00, 1, 'uploads/cVxGGtwnJNy3jv93Z2N1lm2CD2NOhlcncwpjqCMV.jpeg'),
(2, '2019-09-03 08:32:16', '2019-09-03 08:32:16', 'Machine B', 'ABC super function', 'office', 'electricity', '2019-05-15', '2019-12-29', 3, 1750.00, NULL, 14.00, 7.00, 1, ''),
(3, '2019-09-03 08:33:34', '2019-09-03 08:34:56', 'Machine C', 'ABC super system', 'factory', 'heat', '2019-05-14', '2019-11-15', 2, NULL, 35000.00, 10.00, 7.00, 1, 'uploads/4sgsZAw98Y2Hcy9v91sWyyhmPhNT6FpPfFkpIWpi.jpeg'),
(4, '2019-09-03 08:34:35', '2019-09-03 08:34:35', 'Machine D', 'ABC super integration', 'factory', 'electricity', '2019-04-17', '2019-12-31', 4, 2500.00, NULL, 12.00, 7.00, 1, NULL),
(5, '2019-09-03 08:36:07', '2019-09-03 08:36:07', 'Machine E', 'ABC super performance', 'factory', 'electricity', '2019-05-16', '2019-12-28', 2, 2000.00, NULL, 14.00, 7.00, 1, NULL),
(6, '2019-09-03 08:37:56', '2019-09-03 08:37:56', 'Machine F', 'AbC super technology', 'office', 'electricity', '2019-09-03', '2019-12-13', 10, 500.00, NULL, 14.00, 7.00, 1, NULL),
(7, '2019-09-03 09:10:02', '2019-09-03 09:36:49', 'Machine G', 'ABC super critical', 'factory', 'heat', '2019-05-14', '2019-09-28', 1, 0.69, 2500.00, 5.00, 7.00, 1, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
