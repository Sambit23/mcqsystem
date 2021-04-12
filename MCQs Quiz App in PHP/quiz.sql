-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 01:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `mcqs`
--

CREATE TABLE `mcqs` (
  `mcqid` int(11) NOT NULL,
  `statement` varchar(500) NOT NULL,
  `answer1` varchar(256) NOT NULL,
  `answer2` varchar(256) NOT NULL,
  `answer3` varchar(256) NOT NULL,
  `answer4` varchar(256) NOT NULL,
  `correctanswer` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcqs`
--

INSERT INTO `mcqs` (`mcqid`, `statement`, `answer1`, `answer2`, `answer3`, `answer4`, `correctanswer`) VALUES
(7, 'HTML stands for ___________ ?', 'Hyper Text Markup Language', 'Hyper Transmission Markup Language', 'Hyper Text Markup Logics', 'Hyper Text Making Language', 1),
(8, 'JavaScript is a ___________ language ?', 'server side', 'client side', 'neither server side nor client side', 'both server side and client side', 2),
(9, 'MVC stands for ______ ?', 'Model vs Controller', 'Meta vs Controller', 'Model View Controller', 'Mesh View Control', 3),
(10, 'Loop are used for ______ ?', 'Repeating tasks', 'Single task', 'Many similar tasks', 'none is correct', 1),
(11, 'DO WHILE executes at least ______ times ?', '5', '3', '2', '1', 4),
(12, 'echo in PHP is used for ______ ?', 'adding', 'multiplying', 'dividing', 'printing', 4),
(13, 'i++ is referred to as ______ ?', 'parallel increment', 'post increment', 'post decrement', 'pre increment', 2),
(14, '--i is referred to as ______ ?', 'parallel increment', 'pre decrement', 'post decrement', 'pre increment', 2),
(15, '% is used for getting ______ ?', 'addition', 'subtraction', 'remainder', 'quotient', 3),
(16, 'array is used for storing collections of ______ ?', 'intergers', 'strings', 'objects', 'all are correct', 4),
(17, 'what is the capital of india?', 'Delhi', 'pune', 'odisha', 'Mumbai', 1),
(18, 'what is ur name?', 'sam', 'sam2', 'sam', 'all of the above', 4);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `resultid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `marks_obtained` int(11) NOT NULL,
  `mobile_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`resultid`, `date`, `marks_obtained`, `mobile_no`) VALUES
(14, '2021-04-12 11:04:36', 10, '8763736359');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `mobile_no` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`mobile_no`, `password`, `full_name`, `email`, `role`) VALUES
('8763736359', '1234', 'Sambit Kumar Pattanaik', 'dr.sambit14@gmail.com', 'user'),
('987654321', '1234', 'sambit', 'sam13@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mcqs`
--
ALTER TABLE `mcqs`
  ADD PRIMARY KEY (`mcqid`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`resultid`),
  ADD KEY `mobile_no` (`mobile_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`mobile_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mcqs`
--
ALTER TABLE `mcqs`
  MODIFY `mcqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `resultid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`mobile_no`) REFERENCES `users` (`mobile_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
