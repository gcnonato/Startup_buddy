-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2018 at 09:16 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `naming`
--

CREATE TABLE `naming` (
  `name_id` int(11) NOT NULL,
  `name` varchar(37) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `naming`
--

INSERT INTO `naming` (`name_id`, `name`) VALUES
(56, '0-cel-0.info'),
(27, '002200.info'),
(64, '020cbd.info'),
(63, '1-800hardwood.info'),
(2, '1-answer.info'),
(52, '10-bulls.info'),
(14, '10000villages.info'),
(59, '10024lovesong.info'),
(78, '100blacksolutions.info'),
(45, '100daybreak.info'),
(80, '1010saturn.info'),
(25, '1017centerst.info'),
(29, '1027hillside.info'),
(71, '102cranberryway.info'),
(84, '102nhowardst.info'),
(96, '1031exchangestrategy.info'),
(75, '1031parkingfund.info'),
(79, '1040taxcenter.info'),
(11, '1041nwinchester3.info'),
(9, '105parkerrd.info'),
(6, '106adlist.info'),
(94, '10kwiththeresa.info'),
(55, '10minutepharmacy.info'),
(10, '10stepstoyes.info'),
(90, '1111hotyoga.info'),
(88, '11128crestmont.info'),
(5, '11205w67th.info'),
(97, '1126bingay.info'),
(49, '11316upton.info'),
(38, '11558meadowrun.info'),
(28, '11ancestors.info'),
(37, '11pennplaza.info'),
(19, '11pm.info'),
(8, '11rodsway.info'),
(42, '1212velmamiles.info'),
(60, '1215regal.info'),
(66, '123-financeonline.info'),
(53, '123299.info'),
(91, '12332northfront.info'),
(70, '1238hermosa.info'),
(31, '123album.info'),
(74, '123glow.info'),
(87, '123onlinebiz.info'),
(21, '123systems.info'),
(4, '12betindia.info'),
(85, '12guagerevolver.info'),
(44, '12noonmusic.info'),
(22, '1340sdowningst.info'),
(3, '13521st.info'),
(17, '13860grandpointblvd.info'),
(20, '13910.info'),
(67, '139glendon.info'),
(47, '13rose.info'),
(16, '140news.info'),
(35, '1427.info'),
(41, '1433williamsunit1205.info'),
(58, '1490amkugr.info'),
(43, '1529ecoursedr.info'),
(69, '15f3c020.info'),
(62, '164metcalfln.info'),
(92, '17178.info'),
(93, '1745broadland.info'),
(89, '17a898dc.info'),
(54, '18-2.info'),
(57, '18002invest.info'),
(26, '1800localdoctor.info'),
(72, '1800nicesmile.info'),
(24, '1824ballybuniondrive.info'),
(77, '18wheels.info'),
(46, '1966fordmustang.info'),
(12, '1970gto.info'),
(99, '19handsdigital.info'),
(68, '1ad1dollar.info'),
(39, '1carhelpsheroes.info'),
(95, '1classoffice.info'),
(32, '1clever.info'),
(98, '1millionvotesfor2014.info'),
(23, '1passionatekiss.info'),
(18, '1readymoneypages.info'),
(51, '1sierra.info'),
(65, '1stepcashing.info'),
(81, '1stopmailshop.info'),
(15, '1stresponselink.info'),
(33, '1stsecurities.info'),
(48, '1to1financial.info'),
(40, '2005taxforms.info'),
(13, '2011rasmussen.info'),
(36, '2012forsythparklane.info'),
(86, '2018-80th.info'),
(50, '2020homevalue.info'),
(34, '2020lifestyles.info'),
(61, '2021birmingham.info'),
(73, '2029goldbuffalo.info'),
(83, '2040digital.info'),
(30, '205nalleydrlakeallatoona.info'),
(76, '2063cortabella.info'),
(1, '20minutesfromhome.info'),
(82, '52885.info'),
(7, '60b18d8bef590d5b5cb29fe44c7836b8.info'),
(102, 'google,org'),
(109, 'google.biz'),
(110, 'google.cc'),
(103, 'google.co'),
(106, 'google.co.in'),
(100, 'google.com'),
(137, 'google.firm.in'),
(105, 'google.in'),
(134, 'google.info'),
(104, 'google.io'),
(114, 'google.li'),
(113, 'google.ly'),
(108, 'google.me'),
(133, 'google.name'),
(101, 'google.net'),
(135, 'google.net.in'),
(132, 'google.org'),
(136, 'google.org.in'),
(112, 'google.tk'),
(111, 'google.tv'),
(107, 'google.us'),
(124, 'purse.biz'),
(126, 'purse.cc'),
(118, 'purse.co'),
(121, 'purse.co.in'),
(115, 'purse.com'),
(120, 'purse.in'),
(125, 'purse.info'),
(119, 'purse.io'),
(131, 'purse.it'),
(130, 'purse.li'),
(129, 'purse.ly'),
(123, 'purse.me'),
(116, 'purse.net'),
(117, 'purse.org'),
(128, 'purse.tk'),
(127, 'purse.tv'),
(122, 'purse.us');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `type` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `email`, `contact`, `dob`, `type`, `password`) VALUES
(1, 'krima', 'krima.shah@ves.ac.in', '7894561320', '1996-04-23', 'Startup Planner', '$2y$10$yXUHWRM9NyKmO4sqPrPF.udklgCg4IYHBlC9ORPHy/EL1V7vi2aLO'),
(2, 'krima', 'krima.shah@gmail.com', '784596123', '1996-04-23', 'Intern', '$2y$10$Q4XXMUrzzWHgRLB5lYObrerNdcSrZT7HGEFX4gMlJyjQjWbWCq1r2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `naming`
--
ALTER TABLE `naming`
  ADD PRIMARY KEY (`name_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `naming`
--
ALTER TABLE `naming`
  MODIFY `name_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
