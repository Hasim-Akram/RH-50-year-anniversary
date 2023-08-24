-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2023 at 05:39 PM
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
(2, 'Hasim akram', 'Md Abdul Malak', 'Jahanara Begum', 'Assistant Junior Engineer (IT)', '2011', 'B+', 'hasimfci@gmail.com', '01824430983', 2, 'Taharima, Nila', 'Bkash', '2000', '2023-07-20', '01820230983', '3xdy4dre', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.', '2 times Extra Large', 'Hasim akram,01820230983.jpg'),
(17, 'MD ABDUL HASIM', 'mala', 'Jahanara Begum', 'Assistant Junior Engineer (IT)', '2011', 'B+', 'hasimfci@gmail.com', '01824094483', 2, 'Taharima, Nila', 'Nagad', '2000', '1995-06-20', '01820230983', 'fdsadff', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.', 'ssceee', 'nothin', 'Extra Large', 'MD ABDUL HASIM,01820230983.jpg'),
(18, 'MD ABDUL HASIM', 'mala', 'Jahanara Begum', 'Assistant Junior Engineer (IT)', '2011', 'B+', 'hasimfci@gmail.com', '018225430983', 2, 'Taharima, Nila', 'Nagad', '2000', '1995-06-20', '01820230983', 'fdsadff', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.', 'ssceee', 'nothin', 'Extra Large', 'MD ABDUL HASIM-01820230983.jpg'),
(19, 'MD ABDUL HASIM', 'mala', 'Jahanara Begum', 'Assistant Junior Engineer (IT)', '2011', 'B+', 'hasimfci@gmail.com', '018202430983', 2, 'Taharima, Nila', 'Nagad', '2000', '1995-06-20', '01820230983', 'fdsadff', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.', 'ssceee', 'nothin', 'Extra Large', 'MD ABDUL HASIM-01820230983.jpg'),
(20, 'kamal', 'jamal', 'janna', 'asjj', '2020', 'B+', 'hasimseu@gmail.com', '01820221415', 1, 'Taharima, Nila', 'Nagad', '2000', '1995-10-12', '01820230983', '3xdy4dre', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.', 'nothing to say', 'Extra Large', 'kamal-01820230321415.jpg'),
(22, 'momin', 'tomin', 'toma', 'teacher', '1995', 'B+', 'momin@gamil.com', '01305516571', 0, '', 'Nagad', '2000', '2023-07-23', '01820230983', '3xdy4dre', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.', 'Char kolakupa, Char Badam 3730,Ramgoti', 'nothing', '2 times Extra Large', 'momin-01305516571.jpg'),
(23, 'Mahi bin', 'Md Abdul Malak', 'Jahanara Begum', 'AGM IT', '1973', 'A-', 'hasimfci@gmail.com', '01721959', 0, '', 'Select Payment Mode', '2000', '2023-07-23', '01820230983', '3xdy4dre', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.', 'Char kolakupa, Char Badam 37', '', 'Extra Large', 'Mahi bin-01721959.jpg'),
(24, 'Innitum nayem', 'Md Abdul Malak', 'Jahanara Begum', 'JE it (CC)', '2021', 'A-', 'hasimseu@gmail.com', '018202301', 3, 'Taharima, Nila', 'Upay', '333', '2023-07-23', '01820230983', '3xdy4dre', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.', 'Char kolakupa, Char Badam 3730,Ramgoti,', 'fere', 'Medium', 'Innitum nayem-018202301.jpg'),
(25, 'rupu', 'hazi', 'rowson', 'housewife', '2012', 'O+', 'rupontirose@gmail.com', '0184223098', 2, 'Taharima, Nila', 'Nagad', '3000', '2023-07-23', '01820230983', '3xdy4dre', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.', 'nothing', 'Medium', 'rupu-0184223098.jpg'),
(26, 'taharima', 'hasim', 'rupu', 'student', '2011', 'B+', 'hasimfci@gmail.com', '01820000', 0, '0', 'Nagad', '1000', '2023-07-23', '01820230983', '3xdy4dre', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.', 'Char kolakupa, Char Badam 3730', 'nothin', 'Medium', 'taharima-01820000.jpg'),
(37, 'kasem', 'abdul malak', 'Jahanara Begum', 'police', '2007', 'B+', 'kasme@gmail.com', '01820913190', 1, 'alamin', 'Bkash', '2000', '1998-10-02', '0233222', '3xdy4dre', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.', 'dr para', 'nothing', 'Extra Large', 'kasem-01820913190.jpg'),
(44, 'Mahi bin', 'Md Abdul Malak', 'Jahanara Begum', 'Junior engineer it', 'Select Your SSC Year', 'Select Your Blo', '', '01122', 0, '', 'Select Payment Mode', '20000', '2023-07-24', '01820230983', '3xdy4dre', '', '', '', 'Select Your T-Shirt ', 'Mahi bin-01122.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `ssc` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ssc`, `contact`) VALUES
(1, '2011', ''),
(2, '2011', '01820230983'),
(4, '2010', '01305516571'),
(5, '2000', '01820913190'),
(7, '1972', '01721959513'),
(8, '2001', '018420230983'),
(9, '1976', '018452156633'),
(10, '1980', '01254856322'),
(11, '1989', '012345678932'),
(12, '1983', '018201203213'),
(13, '1978', '01820321654'),
(14, '1982', '01820230987'),
(15, '1977', '017892133255'),
(16, '1986', '0124587521245'),
(17, '1982', '012888522445'),
(18, '1986', '01821021232'),
(19, '1979', '01820230982'),
(20, '1984', '018201223022'),
(21, '1984', '01254788222'),
(22, '1976', '01258855525'),
(23, '1983', '01528855554'),
(24, '1987', '018202125456'),
(25, '1979', '252346235656'),
(26, '1981', '023948488433'),
(27, '1987', '018524555446'),
(28, '1982', '0123654987322'),
(29, '1980', '01820123456'),
(30, '1981', '019876542132'),
(31, '1990', '014789652320'),
(32, '2023', '202320230202'),
(33, '1972', '172121222122'),
(34, '1983', '0178965412369'),
(35, '1978', '012345698780'),
(36, '1972', '012458766665'),
(37, '1980', '123654987456'),
(38, '1983', '012552211222'),
(39, '1972', '0125478933213'),
(41, '1990', '01222555'),
(42, '1973', '221155'),
(43, '1972', '321'),
(44, '1972', '01233'),
(46, '1990', '018202300000'),
(48, '2012', '01842230983'),
(49, '2023', '123456789'),
(50, '2023', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `ssc` varchar(20) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `blood` varchar(20) NOT NULL,
  `presentadd` varchar(100) NOT NULL,
  `noguest` varchar(20) NOT NULL,
  `guestname` varchar(150) NOT NULL,
  `paymode` varchar(20) NOT NULL,
  `payamount` varchar(20) NOT NULL,
  `paydate` date NOT NULL,
  `paynumber` varchar(30) NOT NULL,
  `trxid` varchar(30) NOT NULL,
  `tshirt` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `contact`, `ssc`, `designation`, `fname`, `mname`, `email`, `blood`, `presentadd`, `noguest`, `guestname`, `paymode`, `payamount`, `paydate`, `paynumber`, `trxid`, `tshirt`, `image`) VALUES
(1, 'Mahi bin khan', '01820230983', '1972', 'Junior engineer it -1', 'Md Abdul Malak khan', 'Jahanara Begum khan', 'hasimfci00@gmail.com', 'AB+', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.1', '21', 'Taharima, Nila,prathona', 'Other Mode/Bank Cheq', '20001', '2023-08-12', '018202309831', '3xdy4dre1', '2 times Extra Large', 'Mahi bin khan-01820230983.jpg'),
(4, 'Rupu', '01842230983', '2012', 'House wife', 'Hazi Ruhul Amin', 'Rawsan Ara', 'hasimseu@gmail.com', 'O+', 'Narsingdi', '2', 'Taharima, Nila', 'Nagad', '2000', '2023-07-28', '01820230983', '3xdy4dre', 'Large', 'Rupu-01842230983.jpg'),
(9, 'Md ABDUL HASIM khan', '01305516571', '2023', 'Assistant Junior Engineer (IT)1', 'Md Abdul Malak khan', 'Jahanara Begum khan', 'hasimfci1@gmail.com', 'AB-', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.1', '21', 'Taharima, Nila,prathona', 'Other Mode/Bank Cheq', '20001', '2023-08-12', '018202309831', '3xdy4dre1', '2 times Extra Large', 'Md ABDUL HASIM khan-01305516571.png'),
(11, 'MD ABDUL HASIM', '018202309823', '1988', 'AJE it', 'Md Abdul Malak', 'Jahanara Begum', 'hasimfci@gmail.com', 'B+', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.', '2', 'Taharima, Nila', 'Nagad', '22', '2023-07-28', '01820230983', '3xdy4dre', 'Extra Large', 'MD ABDUL HASIM-018202309823.jpg'),
(16, 'Hasim Akram test', '01010101', '2023', 'AJE it', 'malak khan', 'Jahanara Begum khan', 'hasim121@gmail.com', 'O-', 'narsigndi,dhaka', '1', 'Taharima, Nila,prathona', 'Other Mode/Bank Cheq', '010101010', '2023-08-11', '01010111', '3xdydffd1212m', '2 times Extra Large', 'Hasim Akram test-01010101.jpg'),
(17, 'Raju', '018200000', '2007', 'Emigrant', 'Hazi', 'Maya', 'h@gmail.com', 'AB+', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.', '1', 'Taharima, Nila,prathona', 'Select Payment Mode', '2000', '2023-08-24', '54655', '3xdydffd11', '2 times Extra Large', 'Raju-018200000.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
