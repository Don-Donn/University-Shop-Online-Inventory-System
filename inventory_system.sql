-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 02:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_stocks`
--

CREATE TABLE `add_stocks` (
  `Product_ID` int(100) NOT NULL,
  `Category_Name` varchar(100) NOT NULL,
  `Product_Name` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Price` int(50) NOT NULL,
  `Quantity` int(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_stocks`
--

INSERT INTO `add_stocks` (`Product_ID`, `Category_Name`, `Product_Name`, `Description`, `Price`, `Quantity`, `image`) VALUES
(1, 'Uniform', 'Polo', 'Medium', 500, 35, '6554dfe7a1fa7.png'),
(2, 'ID', 'ID Lace', '2023', 60, 45, '6556181406852.png');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(50) NOT NULL,
  `announcement` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `out_stocks`
--

CREATE TABLE `out_stocks` (
  `Product_ID` int(100) NOT NULL,
  `Stocks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Product_ID` int(255) NOT NULL,
  `Transaction_No` int(100) NOT NULL,
  `Employee_Name` varchar(100) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`Product_ID`, `Transaction_No`, `Employee_Name`, `Date`) VALUES
(1, 1, 'Juan Tamad', '2023-11-15'),
(2, 2, 'Juan Tamad', '2023-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `User_ID` int(255) NOT NULL,
  `User_Code` varchar(100) DEFAULT NULL,
  `Last_Name` varchar(100) DEFAULT NULL,
  `First_Name` varchar(100) DEFAULT NULL,
  `User_Type` varchar(100) DEFAULT NULL,
  `Classification` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`User_ID`, `User_Code`, `Last_Name`, `First_Name`, `User_Type`, `Classification`) VALUES
(3, '1234', 'Tatum', 'Jason', 'Admin', 'RGO Staff'),
(4, 'umay', 'Sagan', 'Peter', 'User', 'Student'),
(5, 'kimi', 'Chu', 'Kimi', 'Admin', 'RGO Staff');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `User_ID` int(255) NOT NULL,
  `User_Type` varchar(100) DEFAULT NULL,
  `User_Email` varchar(100) DEFAULT NULL,
  `User_Password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`User_ID`, `User_Type`, `User_Email`, `User_Password`) VALUES
(3, 'Admin', '1234@g.batstate-u.edu.ph', 'admin'),
(4, 'User', 'umay@g.batstate-u.edu.ph', 'umay'),
(5, 'Admin', 'kimi@g.batstate-u.edu.ph', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_stocks`
--
ALTER TABLE `add_stocks`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `out_stocks`
--
ALTER TABLE `out_stocks`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_stocks`
--
ALTER TABLE `add_stocks`
  MODIFY `Product_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `out_stocks`
--
ALTER TABLE `out_stocks`
  MODIFY `Product_ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `Product_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `User_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `User_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
