-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 03, 2018 at 10:51 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musiclibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `PkAlbum` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `FkArtist` int(11) NOT NULL,
  `Year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`PkAlbum`, `Name`, `FkArtist`, `Year`) VALUES
(1, 'Album', 1, 2018),
(2, 'Demo CD', 2, 2015),
(3, 'Long Play', 3, 2010),
(4, 'Cool & Awesome', 4, 1998),
(5, 'Mixtape', 4, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `PkArtist` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`PkArtist`, `Name`) VALUES
(1, 'John Doe'),
(2, 'Jane Morris'),
(3, 'Alex Snow'),
(4, 'Mike Ike');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `PkGenre` int(11) NOT NULL,
  `Genre` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`PkGenre`, `Genre`) VALUES
(1, 'Jazz'),
(2, 'Rock'),
(3, 'Hip-Hop'),
(4, 'Metal'),
(5, 'Rap');

-- --------------------------------------------------------

--
-- Table structure for table `songgenres`
--

CREATE TABLE `songgenres` (
  `FkSong` int(11) NOT NULL,
  `FkGenre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `songgenres`
--

INSERT INTO `songgenres` (`FkSong`, `FkGenre`) VALUES
(1, 1),
(1, 2),
(2, 3),
(3, 4),
(4, 4),
(5, 1),
(5, 2),
(6, 5);

-- --------------------------------------------------------

--
-- Stand-in structure for view `songgenreslist`
-- (See below for the actual view)
--
CREATE TABLE `songgenreslist` (
`ID` int(11)
,`Title` varchar(255)
,`Genre` varchar(128)
);

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `PkSong` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Duration` int(11) NOT NULL COMMENT 'in seconds',
  `FkAlbum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`PkSong`, `Title`, `Duration`, `FkAlbum`) VALUES
(1, 'Test', 60, 1),
(2, 'A Walk in the Park', 34, 2),
(3, 'Living Today', 562, 3),
(4, 'Adventures of Cowboy', 853, 4),
(5, 'Prince Edward II', 234, 2),
(6, 'Destiny (ft. Luke)', 542, 5);

-- --------------------------------------------------------

--
-- Stand-in structure for view `songslist`
-- (See below for the actual view)
--
CREATE TABLE `songslist` (
`ID` int(11)
,`Title` varchar(255)
,`Duration` int(11)
,`Album` varchar(255)
,`Artist` varchar(255)
,`Year` year(4)
);

-- --------------------------------------------------------

--
-- Structure for view `songgenreslist`
--
DROP TABLE IF EXISTS `songgenreslist`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `songgenreslist`  AS  select `songs`.`PkSong` AS `ID`,`songs`.`Title` AS `Title`,`genres`.`Genre` AS `Genre` from ((`songs` join `songgenres` on((`songs`.`PkSong` = `songgenres`.`FkSong`))) join `genres` on((`songgenres`.`FkGenre` = `genres`.`PkGenre`))) ;

-- --------------------------------------------------------

--
-- Structure for view `songslist`
--
DROP TABLE IF EXISTS `songslist`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `songslist`  AS  select `songs`.`PkSong` AS `ID`,`songs`.`Title` AS `Title`,`songs`.`Duration` AS `Duration`,`albums`.`Name` AS `Album`,`artists`.`Name` AS `Artist`,`albums`.`Year` AS `Year` from ((`songs` join `albums` on((`songs`.`FkAlbum` = `albums`.`PkAlbum`))) join `artists` on((`albums`.`FkArtist` = `artists`.`PkArtist`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`PkAlbum`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`PkArtist`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`PkGenre`);

--
-- Indexes for table `songgenres`
--
ALTER TABLE `songgenres`
  ADD PRIMARY KEY (`FkSong`,`FkGenre`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`PkSong`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `PkAlbum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `PkArtist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `PkGenre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `PkSong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
