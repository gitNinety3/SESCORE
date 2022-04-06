-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 05, 2022 at 09:39 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ses_core`
--

-- --------------------------------------------------------

--
-- Table structure for table `bin_location`
--

CREATE TABLE `bin_location` (
  `id` int(100) NOT NULL,
  `departid` varchar(255) NOT NULL,
  `shelfid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bin_location`
--

INSERT INTO `bin_location` (`id`, `departid`, `shelfid`) VALUES
(1, 'RS-1', 1),
(2, 'RS-2', 2),
(3, 'RS-3', 3),
(4, 'RS-4', 4),
(5, 'RS-5', 5),
(6, 'RS-6', 6),
(7, 'RS-7', 7),
(8, 'RS-8', 8),
(9, 'RS-9', 9),
(10, 'Storehouse (Standard)', 10),
(11, 'Storehouse (Metric)', 11),
(12, 'Storehouse (Fastners)', 12),
(13, 'Akro-Mill (3 Flute)', 13),
(14, 'Akro-Mill (5 Flute)', 14),
(15, 'Akro-Mill (Misc.)', 15),
(16, 'Extra', 16),
(17, 'Extra 2', 17);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(6) NOT NULL,
  `user_id` bigint(6) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `user_id`, `first_name`, `last_name`, `user_name`, `password`, `date`) VALUES
(1, 524960, 'Isaac', 'Sesmundo', 'isaac_sesmundo', '12345', '2022-02-26 22:33:31'),
(2, 83068, 'John', 'Sesmundo', 'john_sesmundo', '12345', '2022-02-26 22:40:27'),
(3, 199266, 'Isaac', 'Sesmundo', 'isaac_wesley', '1111', '2022-02-28 02:19:15'),
(4, 518712, 'Isaac', 'The Greatest', 'hello@live.com', '1111', '2022-03-13 04:15:28'),
(5, 708756, 'Greatest', 'Ever', 'hello@live.com', '1111', '2022-03-13 04:19:17'),
(6, 31575, 'Isaac', 'Sesmundo', 'isaac@sescnc.com', '1111', '2022-03-17 14:16:09'),
(7, 557335, 'Isaac', 'Sesmundo', 'IsaacTheGreat', '9999', '2022-04-02 23:26:55'),
(8, 85371, 'John', 'Smith', 'John_Smith', '12345', '2022-04-03 16:44:16'),
(9, 79075, 'Isaac', 'Sesmundo', 'Sesmundo', '7777', '2022-04-05 17:26:12');

-- --------------------------------------------------------

--
-- Table structure for table `rawmaterial`
--

CREATE TABLE `rawmaterial` (
  `id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `location` varchar(100) NOT NULL,
  `height` int(5) NOT NULL,
  `width` int(5) NOT NULL,
  `length` double(5,3) NOT NULL,
  `shape` varchar(10) NOT NULL,
  `uuid` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rawmaterial`
--

INSERT INTO `rawmaterial` (`id`, `type`, `location`, `height`, `width`, `length`, `shape`, `uuid`) VALUES
(15, '304', 'RS-3', 1, 2, 3.000, 'Bar', '27668827508572160'),
(16, '1018', 'RS-5', 2, 3, 14.000, 'Bar', '27668827508572161'),
(17, '316', 'RS-2', 1, 2, 36.000, 'Bar', '27668827508572162'),
(18, '1018', 'RS-5', 2, 3, 14.000, 'Bar', '27668827508572163');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` int(100) NOT NULL,
  `workid` varchar(20) NOT NULL,
  `boxlength` int(11) NOT NULL,
  `boxwidth` int(11) NOT NULL,
  `boxheight` int(11) NOT NULL,
  `boxweight` double(3,2) NOT NULL,
  `tracknum` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `workid`, `boxlength`, `boxwidth`, `boxheight`, `boxweight`, `tracknum`) VALUES
(1, 'J0044A220', 6, 6, 4, 2.00, 'ksafsdfasdfbg');

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`id`, `type`, `location`, `quantity`) VALUES
(4, '316', 'RS-9', 1),
(5, 'Safety', 'Bin 001', 4),
(6, 'Safety', 'RS-7', 7);

-- --------------------------------------------------------

--
-- Table structure for table `taps`
--

CREATE TABLE `taps` (
  `id` int(11) NOT NULL,
  `measurement` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taps`
--

INSERT INTO `taps` (`id`, `measurement`, `location`, `size`, `quantity`) VALUES
(32, 'Standard', 'Storehouse (Standard)', '1/8 - 27 NPS', 8),
(33, 'Standard', 'Akro-Mill (3 Flute)', '#2-56 Roll', 22);

-- --------------------------------------------------------

--
-- Table structure for table `timesheet_in`
--

CREATE TABLE `timesheet_in` (
  `date_in` date NOT NULL,
  `time_in` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`) VALUES
(3, 'Isaac', 'isaac@hello.com');

-- --------------------------------------------------------

--
-- Table structure for table `webdata`
--

CREATE TABLE `webdata` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webdata`
--

INSERT INTO `webdata` (`id`, `title`, `content`) VALUES
(1, 'Web Page Title 1', 'Web Page Content 1'),
(2, 'Web Page Title 2', 'Web Page Content 2'),
(3, 'Web Page Title 3', 'Web Page Content 4'),
(4, 'Finished', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `workorders`
--

CREATE TABLE `workorders` (
  `id` int(11) NOT NULL,
  `workid` varchar(20) NOT NULL,
  `partid` varchar(20) NOT NULL,
  `quantity` double(11,3) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workorders`
--

INSERT INTO `workorders` (`id`, `workid`, `partid`, `quantity`, `status`) VALUES
(18, 'J0044A220', '27659738586021891', 20.000, 'Pending'),
(19, 'J0044A220', 'testpart1', 1.000, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `wo_status`
--

CREATE TABLE `wo_status` (
  `status_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wo_status`
--

INSERT INTO `wo_status` (`status_id`, `status`, `content`) VALUES
(1, 'Pending', 'Waiting for first step'),
(2, 'Cutting Phase', 'At the saw station'),
(3, 'Machine Phase', 'HAAS CNC Machine'),
(4, 'Deburr Phase', 'Being Deburred'),
(5, 'Inspect Phase', 'Inspected by Isaac Sesmundo'),
(6, 'Ship Phase', 'Located at the ship station'),
(7, 'Finished', 'Work Order has been finished');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bin_location`
--
ALTER TABLE `bin_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `rawmaterial`
--
ALTER TABLE `rawmaterial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taps`
--
ALTER TABLE `taps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webdata`
--
ALTER TABLE `webdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workorders`
--
ALTER TABLE `workorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wo_status`
--
ALTER TABLE `wo_status`
  ADD PRIMARY KEY (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bin_location`
--
ALTER TABLE `bin_location`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rawmaterial`
--
ALTER TABLE `rawmaterial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplies`
--
ALTER TABLE `supplies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `taps`
--
ALTER TABLE `taps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `webdata`
--
ALTER TABLE `webdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `workorders`
--
ALTER TABLE `workorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `wo_status`
--
ALTER TABLE `wo_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
