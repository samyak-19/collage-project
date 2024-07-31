-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 04:40 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makemovement_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_business`
--

CREATE TABLE `add_business` (
  `Business_name` varchar(50) NOT NULL,
  `Business_Email_id` varchar(50) NOT NULL,
  `Business_categories` text NOT NULL,
  `Username` text NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Business_Website` varchar(50) DEFAULT NULL,
  `Business_experience_year` varchar(10) NOT NULL,
  `Business_Address` varchar(50) NOT NULL,
  `Business_contact` int(10) NOT NULL,
  `Business_city` text NOT NULL,
  `Business_state` text NOT NULL,
  `Business_image` varchar(100) DEFAULT NULL,
  `Business_Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_business`
--

INSERT INTO `add_business` (`Business_name`, `Business_Email_id`, `Business_categories`, `Username`, `Password`, `Business_Website`, `Business_experience_year`, `Business_Address`, `Business_contact`, `Business_city`, `Business_state`, `Business_image`, `Business_Description`) VALUES
('Jain Brother', 'ajayredasni187@gmail.com', 'get toghter', 'ajayredasni', 'ajay1122@', '', '2', 'Papen peeri road seth ke ghar ke samne aarni', 2147483647, ' Aarni', 'Maharastra', NULL, 'ftfwyyiiindhqwbdjqjdipjindk.wamnclqkqopjdqwm.'),
('B C Stoar', 'redasniajay178@gmail.com', 'caterer', 'ajayredasni', 'redasni1122#', 'https.jangli.com', '1', 'Papen peeri road seth ke ghar ke samne pune', 2147483647, 'pune', 'maharashtra', '', 'hello jhsdh jnjsq jqjiqjiji kkhdhd mnjkjijijk'),
('B C Stoar', 'redasniajay178@gmail.com', 'caterer', 'ajayredasni', 'redasni1122#', 'https.jangli.com', '1', 'Papen peeri road seth ke ghar ke samne pune', 2147483647, 'pune', 'maharashtra', '', 'hello jhsdh jnjsq jqjiqjiji kkhdhd mnjkjijijk'),
('Jain Brother', 'redasniajay178@gmail.com', 'music System', 'ajayredasni', 'ajay@1122', 'https.jangli.com', '3', 'Papen peeri road seth ke ghar ke samne pune', 2147483647, 'Aarni', 'maharashtra', '', 'jwnjw ndjehdu ejeduehjd jdnuiehjde ');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `First_name` text NOT NULL,
  `Last_name` text NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Email_ID` varchar(25) NOT NULL,
  `Gender` text NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Confirm_password` varchar(15) NOT NULL,
  `Age` int(3) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Phone_no` int(10) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`First_name`, `Last_name`, `Username`, `Email_ID`, `Gender`, `Password`, `Confirm_password`, `Age`, `Address`, `Phone_no`, `City`, `State`) VALUES
('', '', '', '', '', '', '', 0, '', 0, '', ''),
('', '', '', '', '', '', '', 0, '', 0, '', ''),
('', '', '', '', '', '', '', 0, '', 0, '', ''),
('', '', '', '', '', '', '', 0, '', 0, '', ''),
('', '', '', '', '', '', '', 0, '', 0, '', ''),
('', '', '', '', '', '', '', 0, '', 0, '', ''),
('', '', '', '', '', '', '', 0, '', 0, '', ''),
('Ajay ', ' Redasni', '$Ajayredasni', 'ajayredasni@gmail.com', 'female', 'anni', 'anni', 23, 'Holi Chouk Janephal Tq Mehakar Dist Buldana 443304', 2147483647, 'Janephal', 'Maharastra'),
('Ajay ', ' Redasni', '$Ajayredasni', 'ajayredasni@gmail.com', 'female', 'anni', 'anni', 23, 'Holi Chouk Janephal Tq Mehakar Dist Buldana 443304', 2147483647, 'Janephal', 'Maharastra'),
('Ajay ', ' Redasni', '$Ajayredasni', 'ajayredasni@gmail.com', 'female', 'anni', 'anni', 23, 'Holi Chouk Janephal Tq Mehakar Dist Buldana 443304', 2147483647, 'Janephal', 'Maharastra'),
('Ajay ', ' Redasni', '$Ajayredasni', 'ajayredasni@gmail.com', 'other', 'aaa', 'aaa', 88, 'Holi Chouk Janephal Tq Mehakar Dist Buldana 443304', 2147483647, 'Janephal', 'Maharastra'),
('Raj', 'Redasni', 'ajayredasni', 'ajayredasni@gmail.com', 'male', 'ajay1122', 'ajay1122', 0, 'Holi Chouk Janephal Tq Mehakar Dist Buldana 443304', 2147483647, 'Janephal', ''),
('Raj', 'Redasni', 'ajayredasni', 'ajayredasni@gmail.com', 'male', 'ajay1122', 'ajay1122', 2023, 'Holi Chouk Janephal Tq Mehakar Dist Buldana 443304', 2147483647, 'Janephal', ''),
('Raj', 'Redasni', 'ajayredasni', 'ajayredasni@gmail.com', 'male', 'ajay1122', 'ajay1122', 2023, 'Holi Chouk Janephal Tq Mehakar Dist Buldana 443304', 2147483647, 'Janephal', ''),
('Raj', 'Redasni', 'ajayredasni', 'ajayredasni@gmail.com', 'male', 'ajay1122', 'ajay1122', 2023, 'Holi Chouk Janephal Tq Mehakar Dist Buldana 443304', 2147483647, 'Janephal', ''),
('Gautamchand', 'Redasni', 'ajayredasni', 'ajayredasni@gmail.com', 'male', 'ajay1122', 'ajay1122', 2023, 'Holi Chouk Janephal Tq Mehakar Dist Buldana 443304', 2147483647, 'Janephal', ''),
('Bhavesh', 'Duggad', 'bhaveshduggad', 'bhaveshduggad177@gmail.co', 'male', 'bhavesh@1122', 'bhavesh@1122', 2023, 'vb cgfh', 2147483647, 'Janephal', 'maharashtra');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
