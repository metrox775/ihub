-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2021 at 07:02 PM
-- Server version: 5.7.33-0ubuntu0.16.04.1
-- PHP Version: 7.1.33-29+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ihub`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stuid` int(10) NOT NULL,
  `universityname` varchar(50) NOT NULL,
  `institutename` varchar(20) NOT NULL,
  `coursename` varchar(20) NOT NULL,
  `enrollmentno` int(20) NOT NULL,
  `enrollmentyear` varchar(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `address` longtext NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `resume` longtext NOT NULL,
  `photo` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stuid`, `universityname`, `institutename`, `coursename`, `enrollmentno`, `enrollmentyear`, `firstname`, `middlename`, `lastname`, `dob`, `gender`, `category`, `address`, `state`, `city`, `pincode`, `emailid`, `mobileno`, `password`, `resume`, `photo`) VALUES
(4, 'GTU', 'SSIT', 'computer', 7018, '2018', 'parth', 'panchal', 'N', '2021-11-14', 'male', 'OPEN', ' D/4 Ankleshwariya block.opp police commissioner office, shahibuag, Ahmedabad ', 'gujarat', 'Ahmedabad', '380004', 'panchalparth5099@gmail.com', '9016375702', 'parth5099', '', 'download.jpeg'),
(5, '', 'SSIT', 'computer', 7008, '2018', 'jay', 'panchal', 'g', '1999-05-04', 'male', 'SEBC', '4/ E alpha  ', 'gujarat', 'Ahmedabad', '300007', 'jay@gmail.com', '9016375702', 'jay', '', 'download.jpeg'),
(6, 'GTU', 'SSIT', 'IT', 7011, '', 'parth', 'panchal', 'N', '', 'male', 'OPEN', 'D/4 ankleshwariya block.opp.police commissioner office, shahibuag, ahmedabad - 380004', 'gujarat', 'Ahmedabad', '380004', 'panchalparth5099@gmail.com', '9016375702', '', '', 'download.jpeg'),
(7, 'GTU', 'SSIT', 'computer', 1235, '2021', 'parth', 'panchal', 'narendrabhai', '1999-09-11', 'male', 'SEBC', 'D/4 Ankleshwariya block,.opp police commissioner office, shahibuag  ', 'gujarat', 'Ahmedabad', '380004', 'parth@gmail.com', '9016375702', 'parth', '', 'download.jpeg'),
(8, 'GTU', 'VGSC', 'IT', 12012, '2018', 'jay', 'patel', 'n', '1999-12-15', 'male', 'SEBC', 'D/5 Ankleshwariya block ', 'gujarat', 'Ahmedabad', '380004', 'jay@gmail.com', '9016375702', 'jay', '', 'download.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stuid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stuid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
