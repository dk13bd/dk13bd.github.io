-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2017 at 10:13 PM
-- Server version: 5.5.55-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin_dk13`
--

-- --------------------------------------------------------

--
-- Table structure for table `Images`
--

CREATE TABLE IF NOT EXISTS `Images` (
`Set_ID` int(11) NOT NULL,
  `Set_Name` varchar(50) NOT NULL,
  `Set_Date_Added` date NOT NULL,
  `Set_Image` varchar(50) NOT NULL,
  `Set_Location` varchar(50) NOT NULL,
  `Set_Access` enum('Free','Paid') NOT NULL DEFAULT 'Paid'
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Images`
--

INSERT INTO `Images` (`Set_ID`, `Set_Name`, `Set_Date_Added`, `Set_Image`, `Set_Location`, `Set_Access`) VALUES
(1, 'Gallery 1', '2017-05-22', 'style/igallery/gallery1/cp.jpg', 'style/igallery/gallery1', 'Free'),
(2, 'Gallery 2', '2017-05-21', 'style/igallery/gallery2/cp.jpg', 'style/igallery/gallery2', 'Free'),
(3, 'Gallery 3', '2017-05-21', 'style/igallery/gallery3/cp.jpg', 'style/igallery/gallery3', 'Free'),
(4, 'Gallery 4', '2017-05-21', 'style/igallery/gallery4/cp.jpg', 'style/igallery/gallery4', 'Paid'),
(5, 'Gallery 5', '2017-05-21', 'style/igallery/gallery5/cp.jpg', 'style/igallery/gallery5', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `Members`
--

CREATE TABLE IF NOT EXISTS `Members` (
`Member_ID` int(11) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Signup_Date` datetime NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Account_Level` enum('Basic Member','Monthly Photo Member','Monthly Full Member','Seasonal Full Member') NOT NULL DEFAULT 'Basic Member',
  `Expire_Date` datetime DEFAULT NULL,
  `Email_Activation` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Members`
--

INSERT INTO `Members` (`Member_ID`, `First_Name`, `Last_Name`, `Username`, `Password`, `Signup_Date`, `Email`, `Account_Level`, `Expire_Date`, `Email_Activation`) VALUES
(8, 'Steven', 'Zhu', 'kaito1410', 'a366e6c3178e26cfdacdd74c47c9f3b6', '2017-05-22 20:54:28', 'kaito1410@gmail.com', 'Seasonal Full Member', '2017-05-22 00:00:00', '0'),
(10, 'Steven', 'Zhu', 'photomember', 'a366e6c3178e26cfdacdd74c47c9f3b6', '2017-05-23 21:39:45', 'kaito1410@gmail.com', 'Monthly Photo Member', '2017-06-21 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `Models`
--

CREATE TABLE IF NOT EXISTS `Models` (
`Model_ID` int(11) NOT NULL,
  `Small_Image` varchar(50) NOT NULL,
  `Large_Image_1` varchar(50) DEFAULT NULL,
  `Large_Image_2` varchar(50) DEFAULT NULL,
  `Large_Image_3` varchar(50) DEFAULT NULL,
  `Large_Image_4` varchar(50) DEFAULT NULL,
  `Large_Image_5` varchar(50) DEFAULT NULL,
  `Model_Name` varchar(50) NOT NULL,
  `Model_Desc` varchar(50) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Models`
--

INSERT INTO `Models` (`Model_ID`, `Small_Image`, `Large_Image_1`, `Large_Image_2`, `Large_Image_3`, `Large_Image_4`, `Large_Image_5`, `Model_Name`, `Model_Desc`) VALUES
(1, 'style/models/1.jpg', 'style/models/1.jpg', 'style/models/1.jpg', 'style/models/1.jpg', 'style/models/1.jpg', 'style/models/1.jpg', 'Model 1', 'blah blah blah'),
(2, 'style/models/2.jpg', 'style/models/2.jpg', 'style/models/2.jpg', 'style/models/2.jpg', 'style/models/2.jpg', NULL, 'Model 2', 'blah blah blah'),
(3, 'style/models/3.jpg', 'style/models/3.jpg', 'style/models/3.jpg', 'style/models/3.jpg', NULL, NULL, 'Model 3', 'blah blah blah'),
(4, 'style/models/4.jpg', 'style/models/4.jpg', 'style/models/4.jpg', 'style/models/4.jpg', NULL, NULL, 'Model 4', 'blah blah blah'),
(5, 'style/models/5.jpg', 'style/models/5.jpg', 'style/models/5.jpg', 'style/models/5.jpg', 'style/models/5.jpg', NULL, 'Model 5', 'blah blah blah'),
(6, 'style/models/6.jpg', 'style/models/6.jpg', 'style/models/6.jpg', 'style/models/6.jpg', 'style/models/6.jpg', NULL, 'Model 6', 'blah blah blah'),
(7, 'style/models/7.jpg', 'style/models/7.jpg', 'style/models/7.jpg', 'style/models/7.jpg', NULL, NULL, 'Model 7', 'blah blah blah'),
(8, 'style/models/8.jpg', NULL, NULL, NULL, NULL, NULL, 'Model 8', 'blah blah blah'),
(9, 'style/models/9.jpg', NULL, NULL, NULL, NULL, NULL, 'Model 9', 'blah blah blah'),
(10, 'style/models/10.jpg', 'style/models/10.jpg', 'style/models/10.jpg', 'style/models/10.jpg', 'style/models/10.jpg', NULL, 'Model 10', 'blah blah blah'),
(11, 'style/models/11.jpg', 'style/models/11.jpg', 'style/models/11.jpg', 'style/models/11.jpg', 'style/models/11.jpg', NULL, 'Model 11', 'blah blah blah'),
(12, 'style/models/12.jpg', 'style/models/12.jpg', 'style/models/12.jpg', 'style/models/12.jpg', NULL, NULL, 'Model 12', 'blah blah blah'),
(13, 'style/models/13.jpg', 'style/models/13.jpg', 'style/models/13.jpg', 'style/models/13.jpg', 'style/models/13.jpg', NULL, 'Model 13', 'blah blah blah'),
(14, 'style/models/14.jpg', 'style/models/14.jpg', 'style/models/14.jpg', 'style/models/14.jpg', NULL, NULL, 'Model 14', 'blah blah blah');

-- --------------------------------------------------------

--
-- Table structure for table `Videos`
--

CREATE TABLE IF NOT EXISTS `Videos` (
`Video_ID` int(11) NOT NULL,
  `Video_Name` varchar(50) NOT NULL,
  `Video_Image` varchar(50) NOT NULL,
  `Video_Access` enum('Free','Paid') NOT NULL DEFAULT 'Paid',
  `Video_Link` varchar(255) NOT NULL,
  `Video_Date_Added` date NOT NULL,
  `Video_Desc` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Videos`
--

INSERT INTO `Videos` (`Video_ID`, `Video_Name`, `Video_Image`, `Video_Access`, `Video_Link`, `Video_Date_Added`, `Video_Desc`) VALUES
(1, 'White', 'style/vimages/white.jpg', 'Free', '<iframe src="https://www.pornhub.com/embed/ph575fee5463e1a" frameborder="0" width="1200" height="720" scrolling="no" allowfullscreen></iframe>', '2017-05-23', NULL),
(2, 'Ring Gag', 'style/vimages/ringgag.jpg', 'Free', '<iframe src="https://www.pornhub.com/embed/ph575fee3bc46b7" frameborder="0" width="1200" height="720" scrolling="no" allowfullscreen></iframe>', '2017-05-22', NULL),
(3, 'Purple gag', 'style/vimages/purple.jpg', 'Paid', '<iframe src="https://www.pornhub.com/embed/ph5817297d3d9f7" frameborder="0" width="1200" height="720" scrolling="no" allowfullscreen></iframe>', '2017-05-19', NULL),
(4, 'TATTOO GIRL WITH TAPE GAG AND ARMBINDER', 'style/vimages/tapegag.jpg', 'Free', '<iframe src="https://www.pornhub.com/embed/ph56a86be49969f" frameborder="0" width="1200" height="720" scrolling="no" allowfullscreen></iframe>', '2017-05-20', NULL),
(5, 'PLEADING EYES', 'style/vimages/pleadingeyes.jpg', 'Free', '<iframe src="https://www.pornhub.com/embed/ph5752b5b811980" frameborder="0" width="1200" height="720" scrolling="no" allowfullscreen></iframe>', '2017-05-20', NULL),
(6, 'LOVELY CHINESE MAID IN LEATHER ARMBINDER', 'style/vimages/chinesemaid.jpg', 'Paid', '<iframe src="https://www.pornhub.com/embed/ph5697ce832881a" frameborder="0" width="1200" height="720" scrolling="no" allowFullScreen></iframe>', '2017-05-21', NULL),
(7, 'Gagged on Table ', 'style/vimages/tablegag.jpg', 'Paid', '<iframe src="style/free/tablegag.mp4" frameborder="0" width="800" height="500" scrolling="no" allowFullScreen="true"></iframe>', '2017-05-19', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Images`
--
ALTER TABLE `Images`
 ADD PRIMARY KEY (`Set_ID`);

--
-- Indexes for table `Members`
--
ALTER TABLE `Members`
 ADD PRIMARY KEY (`Member_ID`), ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `Models`
--
ALTER TABLE `Models`
 ADD PRIMARY KEY (`Model_ID`);

--
-- Indexes for table `Videos`
--
ALTER TABLE `Videos`
 ADD PRIMARY KEY (`Video_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Images`
--
ALTER TABLE `Images`
MODIFY `Set_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Members`
--
ALTER TABLE `Members`
MODIFY `Member_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `Models`
--
ALTER TABLE `Models`
MODIFY `Model_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `Videos`
--
ALTER TABLE `Videos`
MODIFY `Video_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
DELIMITER $$
--
-- Events
--
CREATE DEFINER=`admin_steven`@`localhost` EVENT `check_user_access` ON SCHEDULE EVERY '0 4' DAY_HOUR STARTS '2017-05-23 22:09:56' ON COMPLETION NOT PRESERVE ENABLE COMMENT 'Check user access at 4:00AM daily!' DO UPDATE Members
	SET Account_Level = 'Basic Member' WHERE Expire_Date < cast(getdate() as date)$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
