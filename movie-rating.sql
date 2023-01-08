-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 03:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie-rating`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `mID` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `director` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`mID`, `title`, `year`, `director`) VALUES
(101, '     Gone with the Windss    ', 1940, '     Victor Fleming     '),
(102, 'Star Wars', 1977, 'George Lucas'),
(103, 'The Sound of Music', 1965, 'Robert Wise'),
(105, 'Titanic', 1997, 'James Cameron'),
(106, ' Snow White ', 1937, ' Isaiah Napone'),
(107, 'Avatar', 2009, 'James Cameron'),
(108, 'Raiders of the Lost Ark', 1981, 'Steven Spielberg'),
(112, 'Moba Legends', 1996, ' Isaiah napone '),
(118, ' AVATAR ', 1999, 'NAPONE'),
(129, 'NARNIA', 2001, 'director'),
(130, 'dfdfd', 3, 'asdfsadf'),
(132, 'ang manok', 1997, 'director'),
(133, ' ang manok da movie ', 1997, 'isaiah');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rateid` int(10) NOT NULL,
  `rID` int(11) DEFAULT NULL,
  `mID` int(11) DEFAULT NULL,
  `stars` int(11) DEFAULT NULL,
  `ratingDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rateid`, `rID`, `mID`, `stars`, `ratingDate`) VALUES
(1, 201, 101, 5, '2011-01-22'),
(4, 203, 103, 4, '2011-01-20'),
(7, 204, 101, 5, '2011-01-09'),
(8, 205, 103, 4, '2011-01-27'),
(11, 206, 107, 3, '2011-01-15'),
(12, 206, 106, 5, '2011-01-19'),
(53, NULL, NULL, 13, NULL),
(54, NULL, NULL, 12, NULL),
(55, NULL, NULL, 45, NULL),
(56, NULL, NULL, 34, NULL),
(57, 206, NULL, 23, NULL),
(58, 207, NULL, 69, NULL),
(59, 201, 101, 5, NULL),
(60, 201, 129, 5, NULL),
(61, 210, 118, 4, NULL),
(62, 210, 102, 5, NULL),
(63, 210, 105, 14, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rID`, `name`, `username`, `password`, `type`) VALUES
(201, 'Sarah Martinez', '1', '1', 'Client'),
(202, 'Ashley White', 'admin', 'admin', 'Client'),
(203, 'Daniel Lewis', '4', '4', 'Client'),
(204, 'Brittany Harris', '2', '2', 'Client'),
(205, 'Mike Anderson', '5', '5', 'Client'),
(206, 'Chris Jackson', '3', '3', 'Client'),
(207, 'Elizabeth Thomas', '7', '7', 'Client'),
(208, 'James Cameron', '9', '9', 'Client'),
(210, 'ISNGIW NAPONE', 'user', 'user', 'Client'),
(211, 'aya', 'aya', 'aya', 'Client'),
(212, 'Rialen Catherine', 'cathy', 'cathy', 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `reviewer`
--

CREATE TABLE `reviewer` (
  `rID` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviewer`
--

INSERT INTO `reviewer` (`rID`, `name`, `username`, `password`, `type`) VALUES
(0, 'aya', '22', '22', 'Client'),
(1, 'isaiah', '11', '11', 'Client'),
(201, 'Sarah Martinez', '1', '1', 'Client'),
(202, 'Daniel Lewis', '2', '2', 'Client'),
(203, 'Brittany Harris', '3', '3', 'Client'),
(204, 'Mike Anderson', '4', '4', 'Client'),
(205, 'Chris Jackson', '5', '5', 'Client'),
(206, 'Elizabeth Thomas', '6', '6', 'Client'),
(207, 'James Cameron', '7', '7', 'Client'),
(208, 'Ashley White', '8', '8', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uID`, `username`, `password`, `type`) VALUES
(1, '1', '1', 'Client'),
(2, 'qqqwww', 'wwww', ''),
(3, '2', '2', 'admin'),
(4, 'USER', 'USER', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view1`
-- (See below for the actual view)
--
CREATE TABLE `view1` (
`title` text
,`year` int(11)
,`stars` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view2`
-- (See below for the actual view)
--
CREATE TABLE `view2` (
`mID` int(11)
,`title` text
,`year` int(11)
,`stars` int(11)
,`name` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view3`
-- (See below for the actual view)
--
CREATE TABLE `view3` (
`mID` int(11)
,`title` text
,`year` int(11)
,`director` text
,`stars` int(11)
,`name` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view4`
-- (See below for the actual view)
--
CREATE TABLE `view4` (
`mID` int(11)
,`title` text
,`year` int(11)
,`director` text
,`stars` int(11)
,`name` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `view1`
--
DROP TABLE IF EXISTS `view1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view1`  AS SELECT `m`.`title` AS `title`, `m`.`year` AS `year`, `r`.`stars` AS `stars` FROM (`movie` `m` join `rating` `r` on(`m`.`mID` = `r`.`mID`)) WHERE `m`.`year` < 2000 ;

-- --------------------------------------------------------

--
-- Structure for view `view2`
--
DROP TABLE IF EXISTS `view2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view2`  AS SELECT `m`.`mID` AS `mID`, `m`.`title` AS `title`, `m`.`year` AS `year`, `r`.`stars` AS `stars`, `re`.`name` AS `name` FROM ((`movie` `m` join `rating` `r` on(`m`.`mID` = `r`.`mID`)) join `reviewer` `re` on(`r`.`rID` = `re`.`rID`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view3`
--
DROP TABLE IF EXISTS `view3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view3`  AS SELECT `m`.`mID` AS `mID`, `m`.`title` AS `title`, `m`.`year` AS `year`, `m`.`director` AS `director`, `r`.`stars` AS `stars`, `re`.`name` AS `name` FROM ((`movie` `m` join `rating` `r` on(`m`.`mID` = `r`.`mID`)) join `reviewer` `re` on(`r`.`rID` = `re`.`rID`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view4`
--
DROP TABLE IF EXISTS `view4`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view4`  AS SELECT `m`.`mID` AS `mID`, `m`.`title` AS `title`, `m`.`year` AS `year`, `m`.`director` AS `director`, `r`.`stars` AS `stars`, `re`.`name` AS `name` FROM ((`movie` `m` join `rating` `r` on(`m`.`mID` = `r`.`mID`)) join `review` `re` on(`r`.`rID` = `re`.`rID`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`mID`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rateid`),
  ADD KEY `fk_mID` (`mID`),
  ADD KEY `fk_rID` (`rID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rID`);

--
-- Indexes for table `reviewer`
--
ALTER TABLE `reviewer`
  ADD PRIMARY KEY (`rID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `mID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rateid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fk_mID` FOREIGN KEY (`mID`) REFERENCES `movie` (`mID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rID` FOREIGN KEY (`rID`) REFERENCES `review` (`rID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
