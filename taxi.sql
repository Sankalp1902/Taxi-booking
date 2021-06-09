-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2020 at 02:17 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taxi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabbook`
--

CREATE TABLE `cabbook` (
  `id` varchar(30) NOT NULL,
  `nam` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `total` int(10) NOT NULL,
  `date` date NOT NULL,
  `pickup` varchar(50) NOT NULL,
  `droploc` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabbook`
--

INSERT INTO `cabbook` (`id`, `nam`, `gender`, `total`, `date`, `pickup`, `droploc`, `phone`) VALUES
('pi', 'Piyush', 'Male', 1, '2019-02-01', 'Civil lines', 'Chowk', 2147483647),
('pi', 'Piyush', 'Male', 3, '2019-02-22', 'Jhusi', 'UCEM', 2147483647),
('sankalp1902', 'Sankalp mishra', 'Male', 1, '2019-02-03', 'UCEM', 'UCER', 2147483647),
('SNEH', 'Pankaj singh', 'Male', 101, '2000-05-09', 'JHALWA', 'United', 2147483647),
('sankalp1902', 'Sankalp mishra', 'Other', 4, '1999-03-02', 'south pole Moon', 'north pole moon', 2147483647),
('sankalp1902', 'Naman yadav', 'Other', 4, '1999-02-05', 'south pole Moon', 'north pole moon', 2147483647),
('Aditya', 'Aditya', 'Male', 2, '2020-01-30', 'Jhunsi', 'Kona', 2147483647),
('Ayush', 'Nitin', 'Male', 2, '2020-01-30', 'Jhunsi', 'Old cant', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `aadhar` varchar(12) NOT NULL,
  `name` varchar(20) NOT NULL,
  `id` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`aadhar`, `name`, `id`, `password`, `address`, `phone`) VALUES
('123412341234', 'Aditya', 'Aditya', '12', 'A', 2147483647),
('123443215678', 'Ayush tiwari', 'Ayush', ' 1', 'Jhunsi', 2147483647),
('112233445566', 'Piyush mehrotra', 'pi', '12345678', 'Allahabad', 2147483647),
('123456789012', 'Sankalp mishra', 'sankalp1902', '123456789', 'qwertyuiop', 2147483647),
('123456789009', 'trial', 'trial', '12345678', 'asdfghjkl', 987654321);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
