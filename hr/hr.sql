-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 04:38 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `bankdetails`
--

CREATE TABLE `bankdetails` (
  `email` varchar(100) NOT NULL,
  `bankname` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankdetails`
--

INSERT INTO `bankdetails` (`email`, `bankname`, `account`) VALUES
('a', 'EASTERN BANK LIMITED', 'AC000000126799'),
('john@gmail.com', 'DUTCH BANGLA BANK', 'AC00000012677');

-- --------------------------------------------------------

--
-- Table structure for table `id`
--

CREATE TABLE `id` (
  `uniqueid` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `id`
--

INSERT INTO `id` (`uniqueid`) VALUES
('gvjxfkgu8'),
('jc'),
('jc787'),
('ovi'),
('sumon12'),
('thgjj777'),
('emon');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `to_msg` text NOT NULL,
  `from_msg` text NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `to_msg`, `from_msg`, `msg`) VALUES
(23, 'b@gmail.com', 'a', 'nope bro'),
(24, 'a', 'b@gmail.com', 'you are first'),
(25, 'b@gmail.com', 'a', 'thank you'),
(26, 'a', 'john@gmail.com', 'i am new here'),
(27, 'john@gmail.com', 'a', 'hello'),
(28, 'a', 'c@gmail.com', 'still testing you'),
(29, 'a', 'd@gmail.com', 'your are good'),
(30, 'a', 'xyz@gmail.com', 'getting worse'),
(31, 'xyz@gmail.com', 'a', 'why'),
(32, 'a', 'abc@gmail.com', 'okay now'),
(33, 'john@gmail.com', 'a', 'hey buddy'),
(34, 'emon', 'a', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` text NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `gender`, `password`) VALUES
('a', 'a', 'male', 'd41d8cd98f00b204e9800998ecf8427e'),
('abir', 'abir', 'male', '81dc9bdb52d04dc20036dbd8313ed055'),
('abir', 'abir@yahoo.com', 'male', '81dc9bdb52d04dc20036dbd8313ed055'),
('h', 'h', 'female', '2510c39011c5be704182423e3a695e91'),
('jc', 'jc', 'male', 'd41d8cd98f00b204e9800998ecf8427e'),
('jc', 'jc@google.com', 'male', '81dc9bdb52d04dc20036dbd8313ed055'),
('k', 'k@g.com', 'male', '1234'),
('j', 'l', '', 'e4da3b7fbbce2345d7772b0674a318d5'),
('lk', 'lk', 'male', '81dc9bdb52d04dc20036dbd8313ed055'),
('r', 'r', 'female', '4b43b0aee35624cd95b910189b3dc231'),
('emon', 'emon@gmail.com', 'male', '81dc9bdb52d04dc20036dbd8313ed055'),
('estiyak', 'e@gmail.com', 'male', '202cb962ac59075b964b07152d234b70'),
('t', 't@gmail.com', 'female', 'd41d8cd98f00b204e9800998ecf8427e'),
('nayeem', 'n@gmail.com', 'male', 'f505c3122b948bcb68e4f228fa53cf81'),
('emon', 'e@gmail.com', 'male', '6512bd43d9caa6e02c990b0a82652dca'),
('e', 'e', 'male', ''),
('e', 'e', 'male', ''),
('esti', 'esti', 'male', '81dc9bdb52d04dc20036dbd8313ed055'),
('z', 'z', 'male', 'c4ca4238a0b923820dcc509a6f75849b'),
('p', 'p', 'female', 'c4ca4238a0b923820dcc509a6f75849b'),
('emon', 'e', 'male', ''),
('d', 'd', 'male', 'd41d8cd98f00b204e9800998ecf8427e'),
('qwe', 'qwe', 'male', 'c4ca4238a0b923820dcc509a6f75849b'),
('fahim', 'fahim', 'male', 'c20ad4d76fe97759aa27a0c99bff6710'),
('emon', 'emon', 'male', '2');

-- --------------------------------------------------------

--
-- Table structure for table `totalsalary`
--

CREATE TABLE `totalsalary` (
  `name` text NOT NULL,
  `amount` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totalsalary`
--

INSERT INTO `totalsalary` (`name`, `amount`) VALUES
('jc', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile` int(250) NOT NULL,
  `address` varchar(500) NOT NULL,
  `gender` text NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `mobile`, `address`, `gender`, `salary`) VALUES
('a', 'a', '123', 17, 'gulshan', 'male', 10000),
('e', 'e', 'c4ca4238a0b923820dcc509a6f75849b', 1, ' e', 'male', 2000),
('john', 'john@gmail.com', '123', 19999999, 'ctg', 'male', 0),
('k', 'k', 'c4ca4238a0b923820dcc509a6f75849b', 1, ' k', 'female', 0),
('m', 'm', 'c4ca4238a0b923820dcc509a6f75849b', 1, ' m', 'male', 0),
('r', 'r', 'c4ca4238a0b923820dcc509a6f75849b', 177, ' dhaka', 'female', 50000),
('t', 't', 'c4ca4238a0b923820dcc509a6f75849b', 1, ' t', 'female', 0);

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `email` varchar(250) NOT NULL,
  `total_times` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`email`, `total_times`) VALUES
('e', 50),
('k', 23),
('m', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `works_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
