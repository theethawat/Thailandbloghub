-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2018 at 01:34 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thailandbloghub`
--

-- --------------------------------------------------------

--
-- Table structure for table `00business`
--

CREATE TABLE `00business` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Usrname` varchar(100) NOT NULL,
  `Topic` text NOT NULL,
  `Infoadd` text NOT NULL,
  `link` text NOT NULL,
  `Sitename` text NOT NULL,
  `photo` text NOT NULL,
  `permiss` int(1) NOT NULL DEFAULT '0',
  `likeno` int(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `00education`
--

CREATE TABLE `00education` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Topic` text NOT NULL,
  `Usrname` varchar(100) NOT NULL,
  `Sitename` text NOT NULL,
  `Infoadd` text NOT NULL,
  `link` text NOT NULL,
  `likeno` int(6) NOT NULL DEFAULT '0',
  `photo` text NOT NULL,
  `permiss` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `00entertainment`
--

CREATE TABLE `00entertainment` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Infoadd` text NOT NULL,
  `Sitename` text NOT NULL,
  `Topic` text NOT NULL,
  `Usrname` varchar(100) NOT NULL,
  `likeno` int(6) NOT NULL DEFAULT '0',
  `link` text NOT NULL,
  `permiss` int(1) NOT NULL DEFAULT '0',
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `00health`
--

CREATE TABLE `00health` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Usrname` varchar(100) NOT NULL,
  `Sitename` text NOT NULL,
  `Topic` text NOT NULL,
  `Infoadd` text NOT NULL,
  `link` text NOT NULL,
  `photo` text NOT NULL,
  `likeno` int(6) NOT NULL,
  `permiss` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `00homegarden`
--

CREATE TABLE `00homegarden` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Infoadd` text NOT NULL,
  `Sitename` text NOT NULL,
  `Topic` text NOT NULL,
  `Usrname` varchar(100) NOT NULL,
  `likeno` int(6) NOT NULL DEFAULT '0',
  `link` text NOT NULL,
  `permiss` int(1) NOT NULL DEFAULT '0',
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `00it`
--

CREATE TABLE `00it` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Sitename` text NOT NULL,
  `Topic` text NOT NULL,
  `Infoadd` text NOT NULL,
  `link` text NOT NULL,
  `photo` text NOT NULL,
  `likeno` int(6) NOT NULL DEFAULT '0',
  `permiss` int(1) NOT NULL DEFAULT '0',
  `Usrname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `00reaction`
--

CREATE TABLE `00reaction` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Infoadd` text NOT NULL,
  `Sitename` text NOT NULL,
  `Topic` text NOT NULL,
  `Usrname` varchar(100) NOT NULL,
  `likeno` int(6) NOT NULL DEFAULT '0',
  `link` text NOT NULL,
  `permiss` int(1) NOT NULL DEFAULT '0',
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `00reporter`
--

CREATE TABLE `00reporter` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Infoadd` text NOT NULL,
  `Sitename` text NOT NULL,
  `Topic` text NOT NULL,
  `Usrname` varchar(100) NOT NULL,
  `likeno` int(6) NOT NULL DEFAULT '0',
  `link` text NOT NULL,
  `permiss` int(1) NOT NULL DEFAULT '0',
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `00science`
--

CREATE TABLE `00science` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Usrname` varchar(100) NOT NULL,
  `Sitename` text NOT NULL,
  `Topic` text NOT NULL,
  `Infoadd` text,
  `link` text NOT NULL,
  `likeno` int(6) NOT NULL,
  `permiss` int(1) NOT NULL DEFAULT '0',
  `photo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `00science`
--

INSERT INTO `00science` (`ID`, `Usrname`, `Sitename`, `Topic`, `Infoadd`, `link`, `likeno`, `permiss`, `photo`) VALUES
(3, 'Admin', 'Systemtest', 'à¸—à¸”à¸ªà¸­à¸šà¸£à¸°à¸šà¸š', 'à¸—à¸”à¸ªà¸­à¸šà¸£à¸°à¸šà¸š', 'http://systemtest.aa', 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `00travel`
--

CREATE TABLE `00travel` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Usrname` varchar(100) NOT NULL,
  `Topic` text NOT NULL,
  `Sitename` text NOT NULL,
  `Infoadd` text NOT NULL,
  `link` text NOT NULL,
  `photo` text NOT NULL,
  `likeno` int(6) NOT NULL DEFAULT '0',
  `permiss` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_following`
--

CREATE TABLE `admin_following` (
  `ID` int(6) UNSIGNED NOT NULL,
  `followingname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_like`
--

CREATE TABLE `admin_like` (
  `ID` int(6) UNSIGNED NOT NULL,
  `id_of_like` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_like`
--

INSERT INTO `admin_like` (`ID`, `id_of_like`) VALUES
(3, 'SC1'),
(4, 'RE2'),
(5, 'RE2'),
(6, 'RE2'),
(7, 'RE2'),
(8, 'RE1'),
(9, 'SC2'),
(10, 'TR1');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Usrname` varchar(100) NOT NULL,
  `Password` text NOT NULL,
  `Email` text NOT NULL,
  `NameandSur` text NOT NULL,
  `Profilepic` text,
  `Greeting` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `Usrname`, `Password`, `Email`, `NameandSur`, `Profilepic`, `Greeting`) VALUES
(1, 'Admin', 'Tttt2544', 'tintin_2004@windowslive.com', 'Thailand Blog Hub Administrator', 'wall_all.png', 'à¸ªà¸§à¸±à¸ªà¸”à¸µà¸œà¸¡à¹€à¸›à¹‡à¸™à¹à¸­à¸”à¸¡à¸´à¸™à¸™à¸°à¸„à¸£à¸±à¸š'),
(4, 'TinTheethawat', 'Tttt2544', 'tinskitclub@gmail.com', 'Theethawat Savastham', 'tone.jpg', 'à¹ƒà¸«à¹‰à¸„à¸¸à¸à¸à¸µà¹‰à¸—à¸³à¸™à¸²à¸¢à¸à¸±à¸™');

-- --------------------------------------------------------

--
-- Table structure for table `tintheethawat_following`
--

CREATE TABLE `tintheethawat_following` (
  `ID` int(6) UNSIGNED NOT NULL,
  `followingname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tintheethawat_following`
--

INSERT INTO `tintheethawat_following` (`ID`, `followingname`) VALUES
(3, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tintheethawat_like`
--

CREATE TABLE `tintheethawat_like` (
  `ID` int(6) UNSIGNED NOT NULL,
  `id_of_like` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tintheethawat_like`
--

INSERT INTO `tintheethawat_like` (`ID`, `id_of_like`) VALUES
(1, 'SC3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `00business`
--
ALTER TABLE `00business`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `00education`
--
ALTER TABLE `00education`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `00entertainment`
--
ALTER TABLE `00entertainment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `00health`
--
ALTER TABLE `00health`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `00homegarden`
--
ALTER TABLE `00homegarden`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `00it`
--
ALTER TABLE `00it`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `00reaction`
--
ALTER TABLE `00reaction`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `00reporter`
--
ALTER TABLE `00reporter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `00science`
--
ALTER TABLE `00science`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `00travel`
--
ALTER TABLE `00travel`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin_following`
--
ALTER TABLE `admin_following`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin_like`
--
ALTER TABLE `admin_like`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Usrname` (`Usrname`);

--
-- Indexes for table `tintheethawat_following`
--
ALTER TABLE `tintheethawat_following`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tintheethawat_like`
--
ALTER TABLE `tintheethawat_like`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `00business`
--
ALTER TABLE `00business`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `00education`
--
ALTER TABLE `00education`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `00entertainment`
--
ALTER TABLE `00entertainment`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `00health`
--
ALTER TABLE `00health`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `00homegarden`
--
ALTER TABLE `00homegarden`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `00it`
--
ALTER TABLE `00it`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `00reaction`
--
ALTER TABLE `00reaction`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `00reporter`
--
ALTER TABLE `00reporter`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `00science`
--
ALTER TABLE `00science`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `00travel`
--
ALTER TABLE `00travel`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_following`
--
ALTER TABLE `admin_following`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_like`
--
ALTER TABLE `admin_like`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tintheethawat_following`
--
ALTER TABLE `tintheethawat_following`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tintheethawat_like`
--
ALTER TABLE `tintheethawat_like`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
