-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 05:23 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `signup_date` date NOT NULL,
  `profile_pic` varchar(256) NOT NULL,
  `num_posts` int(11) NOT NULL,
  `num_likes` int(11) NOT NULL,
  `user_closed` varchar(200) NOT NULL,
  `friend_array` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `first_name`, `last_name`, `username`, `email`, `password`, `signup_date`, `profile_pic`, `num_posts`, `num_likes`, `user_closed`, `friend_array`) VALUES
(2, 'Fatematuj', 'Zohra', 'fatematuj_zohra', 'Fatema@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-04-04', 'assets/images/profile_picsdefaults/default_profile_pic.png', 0, 0, 'no', ','),
(3, 'Fatematuj', 'Zohra', 'fatematuj_zohra_1', 'Fatema@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-04-04', 'assets/images/profile_picsdefaults/default_profile_pic.png', 0, 0, 'no', ','),
(7, 'Tahmina', 'Maria', 'tahmina_maria', 'Maria@gmail.com', '9f2e61f2a1e14f9053ecb6e8c5639e07', '2021-04-04', 'assets/images/profile_picsdefaults/default_profile_pic.png', 0, 0, 'no', ','),
(11, 'Tahmina', 'Maria', 'tahmina_maria', 'Dsfsf@gmail.com', '2c42f62f948cc723fdd90bcc1611b146', '2021-04-04', 'assets/images/profile_picsdefaults/default_profile_pic.png', 0, 0, 'no', ','),
(14, 'Fatematuj', 'Zohra', 'fatematuj_zohra_1_2_3', 'Dsfsf@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '2021-04-04', 'assets/images/profile_picsdefaults/default_profile_pic.png', 0, 0, 'no', ','),
(20, 'Fatema', 'Rumman', 'fatema_rumman', 'Fatematuj@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-04-04', 'assets/images/profile_picsdefaults/default_profile_pic.png', 0, 0, 'no', ','),
(21, 'Shahid', 'Nabil', 'shahid_nabil', 'Nabil@gmail.com', 'b47bc9c3971a24ddbbfd211d7b692227', '2021-04-05', 'assets/images/profile_picsdefaults/default_profile_pic.png', 0, 0, 'no', ',');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
