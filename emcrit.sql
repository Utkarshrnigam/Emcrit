-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Nov 21, 2018 at 07:14 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emcrit`
--

-- --------------------------------------------------------

--
-- Table structure for table `firestation`
--

CREATE TABLE `firestation` (
  `sno` int(11) NOT NULL,
  `Area` varchar(11) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `noOfTrucks` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `firestation`
--

INSERT INTO `firestation` (`sno`, `Area`, `Address`, `noOfTrucks`) VALUES
(1, 'Sector 58', 'A106, A Block, Sector 58, Noida, Uttar Pradesh 201307\r\n', 5),
(2, 'sector 80', 'Block C, Sector 80, Noida, Uttar Pradesh 201305', 3),
(3, 'Vaishali', '1/71, Ashok Marg, Sector-1, Vaishali, Ghaziabad, Uttar Pradesh 201012', 4),
(4, 'Sector 2', 'Sector-2, Harola, Sector 5, Noida, Uttar Pradesh 201301', 4);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `sNo` int(11) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `X_coordinate` float NOT NULL,
  `Y_coordinate` float NOT NULL,
  `noOfBeds` int(5) NOT NULL,
  `noOfAmbulance` int(3) NOT NULL,
  `contactNo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`sNo`, `Name`, `Address`, `X_coordinate`, `Y_coordinate`, `noOfBeds`, `noOfAmbulance`, `contactNo`) VALUES
(1, 'ICARE Eye Hospital', 'H Block, First Floor, Zygon Square, H Block, Sector 63, Noida, Uttar Pradesh 201301', 28.63, 77.3757, 30, 5, 1204545668),
(2, 'Fortis Hospital', 'B-22, Sector 62, Gautam Buddh Nagar, Noida, Uttar Pradesh 201301', 28.6185, 77.3726, 100, 10, 1204300222),
(5, 'Shanti Gopal Hospital', 'Plot No- 367, NH-1, Judges Enclave, Ahinsa Khand 2, Indirapuram, Ghaziabad, Uttar Pradesh 201014', 28.6418, 77.3792, 40, 4, 1204777000),
(7, 'SJM Hospital and IVF Centre', 'SJM Chowk, NH-24, Plot No. 2, Chhijarsi, Sector 63, Noida, Uttar Pradesh 201307', 28.634, 77.3909, 50, 6, 1202419900),
(8, 'Krishna Multispeciality Hospital', 'A Block, Block A, Industrial Area, Sector 62, Noida, Uttar Pradesh 201309', 28.6309, 77.369, 120, 12, 1122774145);

-- --------------------------------------------------------

--
-- Table structure for table `incidents`
--

CREATE TABLE `incidents` (
  `sno` int(11) NOT NULL,
  `adhaarNo` varchar(20) NOT NULL,
  `Type` varchar(32) NOT NULL,
  `Victim` varchar(32) NOT NULL,
  `Place` varchar(32) DEFAULT NULL,
  `mobileno` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incidents`
--

INSERT INTO `incidents` (`sno`, `adhaarNo`, `Type`, `Victim`, `Place`, `mobileno`, `email`, `gender`) VALUES
(1, '9552-6574-3454', 'hellp', '', '', 0, 'balindamc@gmail.com', ''),
(2, '', 'Accident', 'Ramesh', 'Shipra Market', 0, '', ''),
(3, '', 'Fire', 'Saloon', 'Shipra Market', 0, '', ''),
(4, '9552-6574-3454', 'hello', 'Balindam Pathak', NULL, 0, 'balindamc@gmail.com', 'Male'),
(5, '9552-6574-3454', 'hi', 'Balindam Pathak', NULL, 0, 'balindamc@gmail.com', 'Male'),
(7, '1234-5678-9555', 'hhhhhh', 'ritesh', NULL, 870789902, 'ljhfeowifgeowugfewuf', 'male'),
(8, '1111-1111-1111', 'need help', 'aman', NULL, 789654123, '123@gmail.com', 'male'),
(9, '1111-1111-1111', 'rape', 'aman', NULL, 789654123, '123@gmail.com', 'male'),
(10, '2396-5632-7862', 'theft', 'Abhishek', NULL, 907835333, 'adqhcv@gmail.com', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `mobilemulti`
--

CREATE TABLE `mobilemulti` (
  `adhaarNo` varchar(20) NOT NULL,
  `mobileNo.` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobilemulti`
--

INSERT INTO `mobilemulti` (`adhaarNo`, `mobileNo.`) VALUES
('6325-7452-6358', 0),
('8569-2547-6389', 0);

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `sno` int(11) NOT NULL,
  `Area` varchar(20) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `X_coordinate` int(20) NOT NULL,
  `Y_coordinate` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`sno`, `Area`, `Address`, `X_coordinate`, `Y_coordinate`) VALUES
(1, 'Indirapuram', 'Vaibhav Khand, Indirapuram, Ghaziabad, Uttar Pradesh 201014', 28, 74),
(2, 'Sector 62', 'Makanpur Colony, Sector 62A, Noida, Uttar Pradesh 201014', 25, 66),
(3, 'Vaishali', '116, Vaishali Sector - 6, Vaishali Extension, Vaishali Sector - 6, Vasundhara, Ghaziabad, Uttar Pradesh 201012', 33, 82),
(4, 'Sector 56', 'G Block, Sector 56, G Block, Sector 56, Noida, Uttar Pradesh 201307', 23, 66);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `AdharNo` varchar(20) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `MobileNo` int(10) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Gender` varchar(9) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`AdharNo`, `Name`, `MobileNo`, `Email`, `Gender`, `Password`, `Address`, `Photo`) VALUES
('1111-1111-1111', 'aman', 789654123, '123@gmail.com', 'male', 'qwertyu', '1/251 noida', NULL),
('123214', 'cefef', 124134, 'dfewfe', 'dsfef', 'efewf', 'fefe', NULL),
('2396-5632-7862', 'Abhishek', 907835333, 'adqhcv@gmail.com', 'male', 'qwertyu', '23 block a', NULL),
('2479-6934-4578', 'Utkarsh Ranjan Sharma', 0, 'utkarshcomeon@gmail.com', 'Male', 'xxxxxxxx', '1/251 vikas nagar', 'url'),
('4821-6389-1297', 'Ritesh Vasavda', 0, 'rtsmya', 'Male', 'xxxxxxxxxx', 'xyz', 'url'),
('7846-6468-6421', 'Aryan Omar', 0, 'aryangr8omar@yahoo.com', 'Male', 'xxxxxxxxxx', 'xyz', 'url'),
('9552-6574-3454', 'Balindam Pathak', 0, 'balindamc@gmail.com', 'Male', 'xxxxxxxxx', 'xyz', 'url'),
('sac', 'dfef', 24341, '', '', 'wqdwqd', 'wdwqd', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_ambulance`
--

CREATE TABLE `user_ambulance` (
  `sno` int(11) NOT NULL,
  `id` int(13) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_firebrigade`
--

CREATE TABLE `user_firebrigade` (
  `sno` int(11) NOT NULL,
  `id` int(13) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_police`
--

CREATE TABLE `user_police` (
  `sno` int(11) NOT NULL,
  `id` int(13) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_police`
--

INSERT INTO `user_police` (`sno`, `id`, `password`) VALUES
(1, 100100100, 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `firestation`
--
ALTER TABLE `firestation`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`sNo`);

--
-- Indexes for table `incidents`
--
ALTER TABLE `incidents`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `mobilemulti`
--
ALTER TABLE `mobilemulti`
  ADD PRIMARY KEY (`adhaarNo`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`AdharNo`);

--
-- Indexes for table `user_ambulance`
--
ALTER TABLE `user_ambulance`
  ADD PRIMARY KEY (`sno`,`id`);

--
-- Indexes for table `user_firebrigade`
--
ALTER TABLE `user_firebrigade`
  ADD PRIMARY KEY (`sno`,`id`);

--
-- Indexes for table `user_police`
--
ALTER TABLE `user_police`
  ADD PRIMARY KEY (`sno`,`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `firestation`
--
ALTER TABLE `firestation`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `sNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `incidents`
--
ALTER TABLE `incidents`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `police`
--
ALTER TABLE `police`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_ambulance`
--
ALTER TABLE `user_ambulance`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_firebrigade`
--
ALTER TABLE `user_firebrigade`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_police`
--
ALTER TABLE `user_police`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
