-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2021 at 10:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(24) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`) VALUES
(1, 'Lorem ipsum', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum aliquid expedita repellendus amet. Obcaecati iusto laboriosam sunt repudiandae. Deleniti sequi sed aliquid excepturi dolorum non quo reprehenderit eaque nihil possimus.'),
(2, '2nd post', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum aliquid expedita repellendus amet. Obcaecati iusto laboriosam sunt repudiandae. Deleniti sequi sed aliquid excepturi dolorum non quo reprehenderit eaque nihil possimus.'),
(3, 'Lorem ipsum 3', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum aliquid expedita repellendus amet. Obcaecati iusto laboriosam sunt repudiandae. Deleniti sequi sed aliquid excepturi dolorum non quo reprehenderit eaque nihil possimus.'),
(4, '4th post', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum aliquid expedita repellendus amet. Obcaecati iusto laboriosam sunt repudiandae. Deleniti sequi sed aliquid excepturi dolorum non quo reprehenderit eaque nihil possimus.'),
(5, 'Lorem ipsum 5', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum aliquid expedita repellendus amet. Obcaecati iusto laboriosam sunt repudiandae. Deleniti sequi sed aliquid excepturi dolorum non quo reprehenderit eaque nihil possimus.'),
(6, '6th post', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum aliquid expedita repellendus amet. Obcaecati iusto laboriosam sunt repudiandae. Deleniti sequi sed aliquid excepturi dolorum non quo reprehenderit eaque nihil possimus.'),
(7, 'Expedita id in volup', 'Veniam atque velit'),
(8, 'Expedita id in volup', 'Veniam atque velit'),
(9, 'Assumenda illo nisi ', 'Quia facere aut aut '),
(10, 'Assumenda illo nisi ', 'Quia facere aut aut '),
(11, 'Et ex accusantium ne', 'Cupiditate consectet'),
(13, 'Et ex accusantium ne', 'Cupiditate consectet'),
(14, 'Est est molestias t', 'Sunt id quasi nisi '),
(15, 'Fugiat Nam quo sed e', 'Sint id optio quis'),
(16, 'Eum eius adipisicing', 'Adipisicing eos qui'),
(17, 'Impedit natus ut sa', 'Sunt impedit qui q'),
(20, 'Eum sed sapiente max', 'Deleniti tenetur ea '),
(21, 'NEW UPDATE', '_NEW UPDATE'),
(22, 'Alias distinctio Ir upd', 'Earum aspernatur eni _upd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
