-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2017 at 10:38 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `Status` varchar(1) NOT NULL,
  `contact` int(11) NOT NULL,
  `street` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `landmark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`user_id`, `email`, `password`, `fname`, `lname`, `mname`, `gender`, `Status`, `contact`, `street`, `barangay`, `city`, `zip`, `landmark`) VALUES
(1998, 'admin@alpha.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 'admin', 'male', '2', 0, '', '', '', '', ''),
(1, 'sbmallari@fit.edu.ph', 'a15055878248b9ef6715ae03f38d8a28', 'charlliz', 'charlliz', 'charlliz', 'female', '1', 1, '', '', '', '', ''),
(2, 'middle@gmail.com', 'd14b4e69d5445c297868eef57700deb0', 'JUAN', 'DELA CRUZ', 'Generic', 'Male', '0', 1, 'R.PAPA', 'Pugad Lawin', 'Manila', '1800', 'Sigaw ng bayan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `bday` date NOT NULL,
  `Status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `fname`, `lname`, `mname`, `bday`, `Status`) VALUES
(11, 'a', '0cc175b9c0f1b6a831c399e269772661', '', 'a', 'a', 'a', '2017-10-12', '1'),
(12, 'char', 'a87deb01c5f539e6bda34829c8ef2368', '', 'char', 'char', 'char', '0000-00-00', '1'),
(19, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'admin', 'admin', 'admin', '0000-00-00', '2'),
(74, 'iz', '018d4d19ee6a779b041a625a60df0e2c', '', 'iz', 'iz', 'iz', '0000-00-00', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
