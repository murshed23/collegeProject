-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 02:48 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `college` text NOT NULL,
  `stream` text NOT NULL,
  `honours` text NOT NULL,
  `paper` int(11) NOT NULL,
  `name` text NOT NULL,
  `father` text NOT NULL,
  `mother` text NOT NULL,
  `gender` char(1) NOT NULL,
  `category` text NOT NULL,
  `birthdate` date NOT NULL,
  `village` text NOT NULL,
  `postOffice` text NOT NULL,
  `pin` int(10) NOT NULL,
  `district` text NOT NULL,
  `state` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`college`, `stream`, `honours`, `paper`, `name`, `father`, `mother`, `gender`, `category`, `birthdate`, `village`, `postOffice`, `pin`, `district`, `state`, `id`) VALUES
('asd', 'asdf', 'asdf', 5, 'Murshed Ahmed', 'kamal uddin', 'AYESHA BEGUM', 'm', 'g', '2020-09-08', 'KARIMGANJ', 'asd', 788720, 'karimganj', 'ASSAM', 50),
('asd', 'asdf', 'asdf', 5, 'Murshed Ahmed', 'kamal uddin', 'AYESHA BEGUM', 'm', 'g', '2020-09-08', 'KARIMGANJ', 'asd', 788720, 'karimganj', 'ASSAM', 50),
('KARIMGANJ COLLEGE', 'SCIENCE', 'biotech', 4, 'dfghg', 'Rijal Uddin', 'Sufia Aktar', 'm', 'g', '2020-11-02', 'ROUTHGRAM', 'asd', 788711, 'karimganj', 'ASSAM', 3),
('KARIMGANJ COLLEGE', 'SCIENCE', 'COMPUTER SCIENCE', 8, 'Murshed Ahmed', 'kamal uddin', 'AYESHA BEGUM', 'm', 'g', '2000-03-23', 'ROUTHGRAM', 'KALIGANJ', 788720, 'karimganj', 'ASSAM', 7);

-- --------------------------------------------------------

--
-- Table structure for table `application2`
--

CREATE TABLE `application2` (
  `college` text NOT NULL,
  `university` text NOT NULL,
  `semester` text NOT NULL,
  `subject1` text NOT NULL,
  `subcode1` text NOT NULL,
  `subject2` text NOT NULL,
  `subcode2` text NOT NULL,
  `subject3` text NOT NULL,
  `subcode3` text NOT NULL,
  `subject4` text NOT NULL,
  `subcode4` text NOT NULL,
  `subject5` text NOT NULL,
  `subcode5` text NOT NULL,
  `subject6` text NOT NULL,
  `subcode6` text NOT NULL,
  `subject7` text,
  `subcode7` text,
  `subject8` text,
  `subcode8` text,
  `subject9` text,
  `subcode9` text,
  `subject10` text,
  `subcode10` text,
  `choice` char(1) NOT NULL,
  `arrear` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application2`
--

INSERT INTO `application2` (`college`, `university`, `semester`, `subject1`, `subcode1`, `subject2`, `subcode2`, `subject3`, `subcode3`, `subject4`, `subcode4`, `subject5`, `subcode5`, `subject6`, `subcode6`, `subject7`, `subcode7`, `subject8`, `subcode8`, `subject9`, `subcode9`, `subject10`, `subcode10`, `choice`, `arrear`, `id`) VALUES
('asdf', 'asdf', 'first', 'a', 's', 's', 'd', 'f', 'g', 'g', 'j', 'k', 'l', 'r', 'r', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0),
('asdf', 'asdf', 'first', 'computer sciencekckffkg', 's', 's', 'd', 'f', 'g', 'g', 'j', 'k', 'l', 'r', 'r', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 2),
('asdf', 'asdf', 'third', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'y', 3, 1),
('asdf', 'asdf', 'first', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'None', '', '', '', '', '', '', '', '', '', '', 'y', 3, 1),
('KARIMGANJ COLLEGE', 'ASSAM UNIVERSITY', 'sixth', 'IP', 'BCSH 601', 'DCN', 'BCSH 602', 'SP', 'BCSH 603', 'PRAC', 'BCSH 604', 'PHY', 'PHSP 601', 'PHY PRAC', 'PHSP 602', 'MATH', 'MTMP 601', 'FCES', 'FCES 601', '', '', '', '', 'y', 2, 7),
('KARIMGANJ COLLEGE', 'ASSAM UNIVERSITY', 'sixth', 'computer sciencekckffkg', 'asdf', 'asdf', 'BCSH 602', 'sdf', 'BCSH 603', 'asdf', 'asdf', '', '', '', '', '', '', '', '', '', '', '', '', 'y', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `application3`
--

CREATE TABLE `application3` (
  `semester1` text NOT NULL,
  `sub1` text NOT NULL,
  `subcode1` text NOT NULL,
  `mark1` int(11) NOT NULL,
  `total1` int(11) NOT NULL,
  `semester2` text NOT NULL,
  `sub2` text NOT NULL,
  `subcode2` text NOT NULL,
  `mark2` int(11) NOT NULL,
  `total2` int(11) NOT NULL,
  `semester3` text NOT NULL,
  `sub3` text NOT NULL,
  `subcode3` text NOT NULL,
  `mark3` int(11) NOT NULL,
  `total3` int(11) NOT NULL,
  `semester4` text NOT NULL,
  `sub4` text NOT NULL,
  `subcode4` text NOT NULL,
  `mark4` int(11) NOT NULL,
  `total4` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application3`
--

INSERT INTO `application3` (`semester1`, `sub1`, `subcode1`, `mark1`, `total1`, `semester2`, `sub2`, `subcode2`, `mark2`, `total2`, `semester3`, `sub3`, `subcode3`, `mark3`, `total3`, `semester4`, `sub4`, `subcode4`, `mark4`, `total4`, `id`) VALUES
('none', 'None', 'None', 0, 0, 'none', 'None', 'None', 0, 0, 'none', 'None', 'None', 0, 0, 'none', 'None', 'None', 0, 0, 1),
('none', 'None', 'None', 0, 0, 'none', 'None', 'None', 0, 0, 'none', 'None', 'None', 0, 0, 'second', 'asdf', 'asdf', 3, 4, 1),
('first', 'asdf', 'asdf', 2, 2, 'none', 'None', 'None', 0, 0, 'none', 'None', 'None', 0, 0, 'none', 'None', 'None', 0, 0, 1),
('second', 'MATH', 'MTMP 201', 14, 50, 'fourth', 'PHY', 'MTMP 401', 11, 35, 'none', 'None', 'None', 0, 0, 'none', 'None', 'None', 0, 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `application4`
--

CREATE TABLE `application4` (
  `roll` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `admit` varchar(350) NOT NULL,
  `marksheet1` varchar(350) NOT NULL,
  `marksheet2` varchar(350) NOT NULL,
  `photo` varchar(350) NOT NULL,
  `sign` varchar(350) NOT NULL,
  `date` date NOT NULL,
  `place` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application4`
--

INSERT INTO `application4` (`roll`, `number`, `admit`, `marksheet1`, `marksheet2`, `photo`, `sign`, `date`, `place`, `id`) VALUES
(51914, 2026317, 'admit/audio-visual-icon-30.png', '', '', 'applPhoto/877222.jpg', 'applSign/blade-runner-2049-1709_22.jpg', '2020-08-18', 'ASDF', 0),
(1234, 123, 'admit/audio-visual-icon-1.png', '', '', 'applPhoto/877222.jpg', 'applSign/audio-visual-icon-1.png', '2020-08-19', 'ASDF', 0),
(2, 234, 'admit/audiovisual-icons.png', '', '', 'applPhoto/IMG-20191117-WA0066_edited.jpg', 'applSign/facebook-logo-493.png', '2020-08-21', 'ASDF', 2),
(1234, 12345, 'admit/1630418.jpg', 'arrear1/877222.jpg', 'arrear2/', 'applPhoto/@dailywalls (6542).jpg', 'applSign/605949.jpg', '2020-09-09', 'asdfgh', 1),
(51917, 2025214, 'admit/9b86ea11e5792e7a4eb53241901fa0fd.jpg', 'arrear1/5cb016df671cc8f3b97de339bd6e35ac.jpg', 'arrear2/1eeceee3-848f-41a7-8fc3-1901b29afa6b.jpeg', 'applPhoto/IMG-20191117-WA0066_edited1.jpg', 'applSign/1eeceee3-848f-41a7-8fc3-1901b29afa6b.jpeg', '2020-11-02', 'KARIMGANJ', 7);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `id`) VALUES
('farhanmaz11@gmail.com', '1234', 29),
('farhanmaz11@gmail.com', '1234', 29),
('farhanmaz11@gmail.com', '1234', 1),
('sohailanwarcool@gmail.com', '1234', 2),
('sohailanwarcool@gmail.com', '1234', 2),
('sohailanwarcool@gmail.com', '1234', 2),
('sohailanwarcool@gmail.com', '1234', 2),
('farhanmaz11@gmail.com', '1234', 1),
('farhanmaz11@gmail.com', '1234', 1),
('sohailanwarcoool@gmail.com', '1234', 3),
('farhanmaz11@gmail.com', '1234', 1),
('mehbub@gmail.com', '1234', 4),
('saptarshi@gmail.com', 'saptarshi1162', 5),
('mf@gmail.com', '1234', 6),
('mf@gmail.com', '1234', 6),
('mf@gmail.com', '1234', 6),
('mf@gmail.com', '1234', 6),
('sohailanwarcoool@gmail.com', '1234', 3),
('sohailanwarcoool@gmail.com', '1234', 3),
('sohailanwarcoool@gmail.com', '1234', 3),
('murshed1611@gmail.com', '1234', 7),
('sohailanwarcoool@gmail.com', '1234', 3),
('sohailanwarcoool@gmail.com', '1234', 3),
('saptarsgiroy41@gmail.com', '1234', 8),
('sohailanwarcoool@gmail.com', '1234', 3),
('sohailanwarcoool@gmail.com', '1234', 3),
('sohailanwarcool@gmail.com', '1234', 2),
('sohailanwarcool@gmail.com', '1234', 2),
('masum@gmail.com', '1234', 9);

-- --------------------------------------------------------

--
-- Table structure for table `pic`
--

CREATE TABLE `pic` (
  `photo` varchar(350) NOT NULL,
  `sign` varchar(350) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pic`
--

INSERT INTO `pic` (`photo`, `sign`, `id`) VALUES
('photo/IMG_20190203_210519_edited.jpg', '', 0),
('photo/audio-visual-icon-1.png', 'sign/audio-visual-icon-30.png', 0),
('photo/audio-visual-icon-1.png', 'sign/audio-visual-icon-30.png', 0),
('photo/audio-visual-icon-30.png', 'sign/audio-visual-icon-1.png', 0),
('photo/audio-visual-icon-30.png', 'sign/audiovisual-icons.png', 0),
('photo/audio-visual-icon-30.png', 'sign/audio-visual-icon-1.png', 0),
('photo/877222.jpg', 'sign/audio-visual-icon-1.png', 0),
('photo/IMG-20191117-WA0066_edited.jpg', 'sign/@dailywalls (6542).jpg', 0),
('photo/IMG-20191117-WA0066_edited.jpg', 'sign/SeekPng.com_audio-symbol-png_3787064.png', 2),
('photo/wallpapersden.com_blade-runner-2049-amazing-art_2048x1152.jpg', 'sign/877222.jpg', 1),
('photo/wallpaperflare.com_wallpaper (8).jpg', 'sign/wallpaperflare.com_wallpaper (12).jpg', 3),
('photo/wallpapersden.com_blade-runner-2049-amazing-art_2048x1152.jpg', 'sign/audio-visual-icon-30.png', 1),
('photo/605949.jpg', 'sign/877222.jpg', 4),
('photo/7d13c1e5c002bde3b8bb01914f30fb0b.jpg', 'sign/9b86ea11e5792e7a4eb53241901fa0fd.jpg', 5),
('photo/IMG-20191117-WA0066_edited1.jpg', 'sign/1eeceee3-848f-41a7-8fc3-1901b29afa6b.jpeg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `regi1`
--

CREATE TABLE `regi1` (
  `name` text NOT NULL,
  `father` text NOT NULL,
  `mother` text NOT NULL,
  `gender` char(1) NOT NULL,
  `category` text NOT NULL,
  `religion` text NOT NULL,
  `birthdate` date NOT NULL,
  `college` text NOT NULL,
  `university` text NOT NULL,
  `semester` text NOT NULL,
  `stream` text NOT NULL,
  `honours` text,
  `arrear` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regi1`
--

INSERT INTO `regi1` (`name`, `father`, `mother`, `gender`, `category`, `religion`, `birthdate`, `college`, `university`, `semester`, `stream`, `honours`, `arrear`, `id`) VALUES
('Murshed Ahmed', 'kamal uddin', 'AYESHA BEGUM', 'm', 'general', 'islam', '2020-09-07', '', '', 'third', 'science', 'computer science', 4, 1),
('dfghg', 'kamal uddin', 'AYESHA BEGUM', 'm', 'general', 'islam', '2020-09-08', '', '', 'first', 'science', 'None', 5, 3),
('saptarshi', '4dber4', 'j5ibf', 'm', 'sc', 'hindu', '2020-10-13', 'liutrfk', 'o847yr', 'third', 'science', 'computer science', 5, 5),
('Murshed Ahmed', 'kamal uddin', 'AYESHA BEGUM', 'm', 'general', 'islam', '2020-11-01', 'aswdeG', 'asdf', 'second', 'commerce', 'asdfghj', 3, 3),
('Murshed Ahmed', 'kamal uddin', 'AYESHA BEGUM', 'm', 'general', 'islam', '2000-03-23', 'KARIMGANJ COLLEGE', 'ASSAM UNIVERSITY', 'sixth', 'science', 'computer science', 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `regi2`
--

CREATE TABLE `regi2` (
  `village` text NOT NULL,
  `postOffice` text NOT NULL,
  `pin` int(11) NOT NULL,
  `district` text NOT NULL,
  `state` text NOT NULL,
  `nationality` text NOT NULL,
  `village2` text NOT NULL,
  `postOffice2` text NOT NULL,
  `pin2` int(11) NOT NULL,
  `district2` text NOT NULL,
  `state2` text NOT NULL,
  `nationality2` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regi2`
--

INSERT INTO `regi2` (`village`, `postOffice`, `pin`, `district`, `state`, `nationality`, `village2`, `postOffice2`, `pin2`, `district2`, `state2`, `nationality2`, `id`) VALUES
('KARIMGANJ', 'asd', 788720, 'karimganj', 'ASSAM', 'ASDFG', 'KARIMGANJ', 'asd', 788720, 'asdka', 'ASSAM', 'ASDFGH', 0),
('KARIMGANJ', 'asd', 788720, 'karimganj', 'ASSAM', 'ASDFG', 'KARIMGANJ', 'asd', 788720, 'asdka', 'ASSAM', 'ASDFGH', 0),
('KARIMGANJ', 'asd', 788720, 'karimganj', 'ASSAM', 'ASDFG', 'KARIMGANJ', 'asd', 788720, 'asdka', 'ASSAM', 'ASDFGH', 2),
('KARIMGANJ', 'asd', 788720, 'karimganj', 'ASSAM', 'ASDFG', 'KARIMGANJ', 'asd', 788720, 'asdka', 'ASSAM', 'ASDFGH', 1),
('      KARIMGANJ', '      asd', 788720, '      karimganj', '      ASSAM', '      ASDFG', 'KARIMGANJ', 'asd', 788720, 'asdka', 'ASSAM', 'ASDFGH', 3),
('KARIMGANJ', 'asd', 788720, 'karimganj', 'ASSAM', 'ASDFG', 'KARIMGANJ', 'asd', 788720, 'asdka', 'ASSAM', 'ASDFGH', 1),
('ghy', 'asdfg', 34567, 'sdfgh', 'ASSAM', 'asdfg', 'asdfg', 'asdfg', 234567, 'asdfgh', 'asdfgh', 'asdfg', 4),
('kaliganj', 'karimganj', 788711, 'karimganj', 'ASSAM', 'assam', 'KARIMGANJwf', 'iutdit', 788720, 'karimganj', 'ASSAM', 'indian', 5),
('  ROUTHGRAM', '  KALIGANJ', 788720, '  karimganj', '  ASSAM', '  INDIAN', 'ROUTHGRAM', 'KALIGANJ', 788720, 'KARIMGANJ', 'ASSAM', 'indian', 7),
('KARIMGANJ', 'KALIGANJ', 788720, 'karimganj', 'ASSAM', 'INDIAN', 'KARIMGANJ', 'KALIGANJ', 788720, 'karimganj', 'ASSAM', 'indian', 8);

-- --------------------------------------------------------

--
-- Table structure for table `regi3`
--

CREATE TABLE `regi3` (
  `institution` text NOT NULL,
  `board` text NOT NULL,
  `mark` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `marksheet` varchar(350) NOT NULL,
  `HSinstitution` text NOT NULL,
  `HSboard` text NOT NULL,
  `HSmark` int(11) NOT NULL,
  `HStotal` int(11) NOT NULL,
  `HSpercentage` int(11) NOT NULL,
  `HSmarksheet` varchar(350) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regi3`
--

INSERT INTO `regi3` (`institution`, `board`, `mark`, `total`, `percentage`, `marksheet`, `HSinstitution`, `HSboard`, `HSmark`, `HStotal`, `HSpercentage`, `HSmarksheet`, `id`) VALUES
('asas', 'ASSAM UNIVERSITY', 99, 99, 99, 'hslc/@dailywalls (6542).jpg', 'asd', 'QWERT', 88, 88, 99, 'hs/877222.jpg', 0),
('asas', 'ASSAM UNIVERSITY', 1, 1, 1, 'hslc/1630418.jpg', 'asd', 'QWERT', 1, 1, 1, 'hs/audio-visual-icon-1.png', 0),
('asas', 'ASSAM UNIVERSITY', 1, 1, 1, 'hslc/sound-wave-vector-36.jpg', 'asd', 'QWERT', 1, 1, 1, 'hs/SeekPng.com_donate-icon-png_1179860.png', 2),
('asas', 'ASSAM UNIVERSITY', 1, 1, 12, 'hslc/1630418.jpg', 'asd', 'QWERT', 2, 3, 12, 'hs/audio-visual-icon-1.png', 1),
('asas', 'ASSAM UNIVERSITY', 2, 3, 99, 'hslc/1630418.jpg', 'asd', 'QWERT', 3, 4, 99, 'hs/@dailywalls (6542).jpg', 3),
('asas', 'ASSAM UNIVERSITY', 3, 3, 1, 'hslc/audio-visual-icon-1.png', 'asd', 'QWERT', 2, 3, 1, 'hs/877222.jpg', 1),
('asas', 'asdfgh', 12, 98, 87, 'hslc/585616.png', 'asd', 'QWERT', 79, 86, 87, 'hs/1630418.jpg', 4),
('uyehd', 'uyriy', 8564, 3455, 656, 'hslc/@dailywalls (6542).jpg', 'fgfg', 'jhriuf', 2335, 3522, 656, 'hs/5cb016df671cc8f3b97de339bd6e35ac.jpg', 5),
('JNV', 'CBSE', 380, 500, 8, 'hslc/9b86ea11e5792e7a4eb53241901fa0fd.jpg', 'JNV', 'CBSE', 340, 500, 8, 'hs/7d13c1e5c002bde3b8bb01914f30fb0b.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`) VALUES
(1, 'Murshed Ahmed', 'farhanmaz11@gmail.com', '1234'),
(2, 'farhan', 'sohailanwarcool@gmail.com', '1234'),
(3, 'asd', 'sohailanwarcoool@gmail.com', '1234'),
(4, 'Mehbub Ahmed', 'mehbub@gmail.com', '1234'),
(5, 'saptarshi ', 'saptarshi@gmail.com', 'saptarshi1162'),
(6, 'dfggh', 'mf@gmail.com', '1234'),
(7, 'Murshed Ahmed', 'murshed1611@gmail.com', '1234'),
(8, 'saptarshi', 'saptarsgiroy41@gmail.com', '1234'),
(9, 'Mashud Ahmed', 'masum@gmail.com', '1234');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
