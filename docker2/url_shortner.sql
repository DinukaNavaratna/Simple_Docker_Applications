-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 01:08 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `url_shortner`
--

-- --------------------------------------------------------

--
-- Table structure for table `urls`
--

CREATE TABLE `urls` (
  `id` int(11) NOT NULL,
  `link` longtext NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `urls`
--

INSERT INTO `urls` (`id`, `link`, `timestamp`) VALUES
(1, 'https://stackoverflow.com/questions/39175194/docker-compose-persistent-data-mysql', '2021-10-22 11:00:14'),
(2, 'https://stackoverflow.com/questions/43880026/import-data-sql-mysql-docker-container', '2021-10-22 11:00:14'),
(3, 'https://stackoverflow.com/questions/32360687/connect-to-docker-mysql-container-from-localhost', '2021-10-22 11:00:14'),
(4, 'https://stackoverflow.com/questions/30604846/docker-error-no-space-left-on-device', '2021-10-22 11:00:14'),
(5, 'https://severalnines.com/database-blog/mysql-docker-containers-understanding-basics', '2021-10-22 11:00:14'),
(6, 'https://stackoverflow.com/questions/6907751/select-count-from-table-of-mysql-in-php', '2021-10-22 11:00:14'),
(7, 'https://www.google.com/search?q=docker&rlz=1C1RLNS_enLK888LK888&oq=docker&aqs=chrome..69i57j0i271l3j69i60l3.625j0j1&sourceid=chrome&ie=UTF-8', '2021-10-22 11:00:14'),
(8, 'https://www.google.com/search?q=docker+ubuntu&rlz=1C1RLNS_enLK888LK888&ei=lJlyYfvsDNuJ4-EPo7msiAI&ved=0ahUKEwj7hre_7t3zAhXbxDgGHaMcCyEQ4dUDCA4&uact=5&oq=docker+ubuntu&gs_lcp=Cgdnd3Mtd2l6EAMyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEOgcIABBHELADOhAILhDHARDRAxCwAxBDEJMCOgcIABCwAxBDOgQIABBDSgQIQRgAUOJKWKxTYLlVaAFwAngAgAHGAYgBnAqSAQMwLjeYAQCgAQHIAQrAAQE&sclient=gws-wiz', '2021-10-22 11:00:14'),
(9, 'https://www.google.com/search?q=docker+config+file&rlz=1C1RLNS_enLK888LK888&ei=oZlyYe2mK4yL4-EPwYuLoAI&oq=docker+config+file&gs_lcp=Cgdnd3Mtd2l6EAMYATIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQ6BwgAEEcQsAM6BwgAELADEEM6BQgAEJECSgQIQRgAUOQ8WNFGYLNPaAJwAngAgAHLAYgB5QiSAQUwLjQuMpgBAKABAcgBCsABAQ&sclient=gws-wiz', '2021-10-22 11:00:14'),
(10, 'https://www.youtube.com/watch?v=vOoCFxlQIbE', '2021-10-22 11:00:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `urls`
--
ALTER TABLE `urls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `urls`
--
ALTER TABLE `urls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
