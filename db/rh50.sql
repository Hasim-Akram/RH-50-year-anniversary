-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 08:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rh50`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `ssc` varchar(20) NOT NULL,
  `blood` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `noguest` int(20) NOT NULL,
  `guestname` varchar(150) NOT NULL,
  `paymode` varchar(30) NOT NULL,
  `payamount` varchar(20) NOT NULL,
  `paydate` date NOT NULL,
  `paynumber` varchar(30) NOT NULL,
  `trxid` varchar(40) NOT NULL,
  `presentadd` varchar(80) NOT NULL,
  `permanentadd` varchar(80) NOT NULL,
  `info` varchar(150) NOT NULL,
  `tshirt` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `fname`, `mname`, `designation`, `ssc`, `blood`, `email`, `contact`, `noguest`, `guestname`, `paymode`, `payamount`, `paydate`, `paynumber`, `trxid`, `presentadd`, `permanentadd`, `info`, `tshirt`, `image`) VALUES
(1, 'Hasim Akram', 'Md Abdul Malak', 'Jahanara Begum', 'Assistant Junior Engineer (IT)', '2011', '0', 'hasimfci@gmail.com', '01820230983', 2, 'Taharima, Nila', 'Nagad', '2000', '2023-07-20', '01820230983', '3xdy4dre', '0', '3730', '0', '0', 'Hasim Akram,01820230983.jpg'),
(2, 'Hasim akram', 'Md Abdul Malak', 'Jahanara Begum', 'Assistant Junior Engineer (IT)', '2011', 'B+', 'hasimfci@gmail.com', '01820230983', 2, 'Taharima, Nila', 'Bkash', '2000', '2023-07-20', '01820230983', '3xdy4dre', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.', '2 times Extra Large', 'Hasim akram,01820230983.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
