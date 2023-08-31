-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2023 at 01:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `passionate`
--

-- --------------------------------------------------------

--
-- Table structure for table `post_cmt`
--

CREATE TABLE `post_cmt` (
  `comment` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_info`
--

CREATE TABLE `post_info` (
  `post_id` int(11) NOT NULL,
  `usr_name` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `post_caption` text NOT NULL,
  `post_hashtag` text NOT NULL,
  `post_section` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_info`
--

INSERT INTO `post_info` (`post_id`, `usr_name`, `img_path`, `post_caption`, `post_hashtag`, `post_section`, `dt`) VALUES
(28, 'omkar', 'uploads/6259a7f480ac78.21425538.jpg', 'football', '#img', 'football', '2022-04-15 22:44:28'),
(221, 'prince', 'uploads/625a34335e9253.06233952.jpg', 'dhoni', '#god', 'cricket', '2022-04-16 08:42:51'),
(222, 'prince', 'uploads/625a35029a51a8.22822471.jpg', 'phot', '#photo', 'photo', '2022-04-16 08:46:18'),
(223, 'prince', 'uploads/625a358fd1a112.02162959.jpg', 'game', '#gaming', 'gaming', '2022-04-16 08:48:39'),
(224, 'prince', 'uploads/625a35c17a5f72.14496915.jpg', 'vlog', '#vlog', 'vlog', '2022-04-16 08:49:29'),
(225, 'prince', 'uploads/625a3684590be5.21972178.jpg', 'dance', '#dance', 'dance', '2022-04-16 08:52:44'),
(226, 'omkar', 'uploads/625a36d31d0d79.57917567.mp4', 'valo', '#valo', 'gaming', '2022-04-16 08:54:03');

-- --------------------------------------------------------

--
-- Table structure for table `post_link`
--

CREATE TABLE `post_link` (
  `id` int(11) NOT NULL,
  `usr_name` varchar(255) NOT NULL,
  `post_link` varchar(255) NOT NULL,
  `link_caption` varchar(255) NOT NULL,
  `link_hashtag` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_link`
--

INSERT INTO `post_link` (`id`, `usr_name`, `post_link`, `link_caption`, `link_hashtag`, `dt`) VALUES
(4, 'prince', 'https://www.youtube.com/watch?v=buVMIk2ztYI', 'link', '#link', '2022-04-15 20:27:15'),
(5, 'prince', 'https://www.youtube.com/watch?v=hcMzwMrr1tE', 'song', '#pushpa mai jhukehga nahi', '2022-04-16 08:57:02');

-- --------------------------------------------------------

--
-- Table structure for table `usr_bio`
--

CREATE TABLE `usr_bio` (
  `SrNo` int(11) NOT NULL,
  `usr_name` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usr_bio`
--

INSERT INTO `usr_bio` (`SrNo`, `usr_name`, `bio`, `img_path`, `dt`) VALUES
(10, 'sahil', 'Hiii I am sahil', 'profile_pic/623de8e0b8b956.03326813.png', '2022-03-25 21:38:00'),
(11, 'omkar', 'heelo i am omkar', 'profile_pic/6257e07fa5c7e4.58870265.jpg', '2022-04-14 14:21:11'),
(13, 'prince', 'againnnn', 'profile_pic/62596bdb1c5a63.63579019.jpg', '2022-04-15 18:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `usr_data`
--

CREATE TABLE `usr_data` (
  `usr_name` varchar(255) NOT NULL,
  `usr_password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `usr_number` bigint(10) NOT NULL,
  `usr_email` varchar(255) NOT NULL,
  `usr_age` int(8) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usr_data`
--

INSERT INTO `usr_data` (`usr_name`, `usr_password`, `confirm_password`, `usr_number`, `usr_email`, `usr_age`, `gender`, `code`, `status`, `dt`) VALUES
('omkar', '3078d58e970d125a1308b867e3abf12f', '3078d58e970d125a1308b867e3abf12f', 1425364152, 'jdfbvsdhf@jvbdv.sd', 18, 'option1', 0, 'Active now', '2022-04-14 14:16:56'),
('prince', '3078d58e970d125a1308b867e3abf12f', '3078d58e970d125a1308b867e3abf12f', 9979871693, 'rajputprince1403@gmail.com', 18, 'option1', 440359, 'Active now', '2022-04-14 13:18:44'),
('sheridan', '9102a8640000b430bcf1b4588702a6c9', '9102a8640000b430bcf1b4588702a6c9', 1234567890, 'omkarsindha22@gmail.com', 12, 'option1', 0, 'Active now', '2023-08-31 19:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `usr_report`
--

CREATE TABLE `usr_report` (
  `SrNo` int(11) NOT NULL,
  `usr_name` varchar(255) NOT NULL,
  `reportname` varchar(255) NOT NULL,
  `report_box` text NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usr_report`
--

INSERT INTO `usr_report` (`SrNo`, `usr_name`, `reportname`, `report_box`, `dt`) VALUES
(2, '', 'sahil', 'I am reporting this user because of uploading malicious content.', '2022-03-25 21:33:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post_cmt`
--
ALTER TABLE `post_cmt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_info`
--
ALTER TABLE `post_info`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_link`
--
ALTER TABLE `post_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usr_bio`
--
ALTER TABLE `usr_bio`
  ADD PRIMARY KEY (`SrNo`);

--
-- Indexes for table `usr_data`
--
ALTER TABLE `usr_data`
  ADD PRIMARY KEY (`usr_name`),
  ADD UNIQUE KEY `number` (`usr_number`),
  ADD UNIQUE KEY `email` (`usr_email`);

--
-- Indexes for table `usr_report`
--
ALTER TABLE `usr_report`
  ADD PRIMARY KEY (`SrNo`),
  ADD UNIQUE KEY `reportname` (`reportname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_cmt`
--
ALTER TABLE `post_cmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post_info`
--
ALTER TABLE `post_info`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT for table `post_link`
--
ALTER TABLE `post_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usr_bio`
--
ALTER TABLE `usr_bio`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usr_report`
--
ALTER TABLE `usr_report`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
