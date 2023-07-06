-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 11:06 AM
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
-- Database: `iwtdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindata`
--

CREATE TABLE `admindata` (
  `adminName` varchar(10) NOT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admindata`
--

INSERT INTO `admindata` (`adminName`, `password`) VALUES
('admin1', '12345'),
('admin2', '6789');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `full_name` varchar(20) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`full_name`, `email`, `message`) VALUES
('Daham Kaushika', 'Daham@gmail.com', 'I want to register as a supplier. Please contact me.'),
('Sherwin lee', 'sherwin@gmail.coom', 'Best quality products'),
('Siluni', 'silunirupasinghe@gma', 'hello Weenet');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `nic` varchar(12) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`nic`, `firstname`, `lastname`, `username`, `email`, `address`, `dob`, `contact`, `password`) VALUES
('200253402335', 'Siluni', 'Rupasinghe', 'Siluni', 'silunirupasinghe@gmail.com', 'No 514', '2002-02-03', '0773225670', 'siluni'),
('200257481089', 'Sasanka', 'Weerawardhana', 'WSS', 'sasankashenal1@gmail.com', 'NO 10/224', '2002-05-05', '0785213888', 'sasanka');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `description`, `image`, `price`) VALUES
(1, 'Women running top', 'product1.jpeg', 500),
(2, 'Men running t-shirt', 'product4.jpeg', 600),
(3, 'Women running jeans', 'product8.jpeg', 800),
(4, 'Mens running shorts', 'product5.jpeg', 700);

-- --------------------------------------------------------

--
-- Table structure for table `supplierreg`
--

CREATE TABLE `supplierreg` (
  `Registration_number` int(5) NOT NULL,
  `Registered_name` varchar(20) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Contact_number` int(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Director_name` varchar(20) NOT NULL,
  `NIC` varchar(15) NOT NULL,
  `Director_C_number` int(10) NOT NULL,
  `material` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplierreg`
--

INSERT INTO `supplierreg` (`Registration_number`, `Registered_name`, `Address`, `Contact_number`, `Email`, `Director_name`, `NIC`, `Director_C_number`, `material`) VALUES
(9999, 'shenal enterprises', ' Homagama', 702004191, 'shenal@gmail.com', 'shenal', '200256987456', 702004191, 'mat1'),
(58269, 'Daham', 'Colombo', 711497951, 'Daham@gmail.com', 'Daham Kaushika', '20026345158', 773225670, 'mat2'),
(88855, 'Egale PVT Ltd', '5th cross street, Colombo 11', 770005625, 'egales@gmail.com', 'Nalin Perera', '196845126058', 773225670, 'mat3'),
(285340, 'daddy pvt ltd', 'gampaha', 754562350, 'daddy@gmail.com', 'Daham', '198815623689', 711497951, 'mat1'),
(957845, 'sellwin holdings', ' Palenwaththa, Pannipitiya', 714472912, 'sellwinholdings@gmai', 'Nethmi rupasinghe', '199845693514', 702004191, 'mat1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindata`
--
ALTER TABLE `admindata`
  ADD PRIMARY KEY (`adminName`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`full_name`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`nic`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
