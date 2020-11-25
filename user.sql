-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 01:02 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginadminuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `userlevel` varchar(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `sex` text NOT NULL,
  `birthday` date NOT NULL DEFAULT current_timestamp(),
  `job` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `image_user` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `lastname`, `userlevel`, `email`, `tel`, `sex`, `birthday`, `job`, `address`, `image_user`) VALUES
(1, 'berl1n', '0819913368', 'kawechai', 'punyalerdtip', 'a', '61010049@kmitl.ac.th', '0819913367', '', '2020-09-16', '                    devaa', '', '1605781173.jpg'),
(3, 'john', '81dc9bdb52d04dc20036dbd8313ed055', 'johny', 'johned', 'm', '', '0819913367', '0', '2020-09-16', 'sssdev', '', ''),
(4, 'a', 'c4ca4238a0b923820dcc509a6f75849b', 'sa', 'ss', 'm', 'as@gmad.com', '0819913367', '0', '2020-09-16', '', '', ''),
(5, 'berl1ns', 'e6659d97a1500962504818e1fe6d6ebe', 'ssasss', 'sas', 'm', 'sasa', 'ss', '0', '2020-09-16', '', '', ''),
(6, 'z', 'e6659d97a1500962504818e1fe6d6ebe', 'kawechai', 'punyalerdtip', 'm', 'nicekak@hotmail.co.th', 'sss', '0', '0000-00-00', '', '', ''),
(19, 'berl1n14', 'e6659d97a1500962504818e1fe6d6ebe', 'xz', 'ss', 'm', 'as@gmad.com', '0819913367', 'Male', '1111-11-11', 'sss', '', ''),
(20, 'berl1n2', '123', 'kawechai', 'punyalerdtipqqq', 'a', 'ss@gsas.com', '0819913367', 'Female', '0111-01-01', 'sss', '', '1605810908.jpg'),
(21, 'berl1n11', 'e6659d97a1500962504818e1fe6d6ebe', 'xz', 'punyalerdtip', 'm', 'lnwnice@gmail.com', '0819913367', 'Female', '2020-10-01', 'f', '', ''),
(22, '', '', '', '', '', '', '', '', '2020-11-18', '', '12/34', ''),
(23, '', '', '', '', '', '', '', '', '2020-11-18', '', '12/34', ''),
(24, '', '', '', '', '', '', '', '', '2020-11-18', '', '12/34', ''),
(25, '', '', '', '', '', '', '', '', '2020-11-18', '', '12/34', ''),
(26, '', '', '', '', '', '', '', '', '2020-11-18', '', '12/34', ''),
(27, '', '', '', '', '', '', '', '', '2020-11-18', '', '12/34', ''),
(28, '', '', '', '', '', '', '', '', '2020-11-18', '', '12/34', ''),
(29, '', '', '', '', '', '', '', '', '2020-11-18', '', '12/34', ''),
(30, '', '', '', '', '', '', '', '', '2020-11-18', '', '12/34', ''),
(31, '', '', '', '', '', '', '', '', '2020-11-19', '', '12/34', ''),
(32, 'tk', '202cb962ac59075b964b07152d234b70', 'xtk', 'tka', 'm', 'nicekak@hotmail.co.th', '0819913367', 'Male', '2020-11-05', 'ui', '12/3', '1606049051.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
