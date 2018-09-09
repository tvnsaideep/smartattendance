-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2018 at 12:42 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attn`
--

-- --------------------------------------------------------

--
-- Table structure for table `attn_day`
--

CREATE TABLE `attn_day` (
  `fullname` varchar(10) NOT NULL,
  `rollnum` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `attn_status` int(11) NOT NULL,
  `branch` varchar(11) NOT NULL,
  `year` int(5) NOT NULL,
  `sec` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attn_day`
--

INSERT INTO `attn_day` (`fullname`, `rollnum`, `date`, `attn_status`, `branch`, `year`, `sec`) VALUES
('hareesh ja', '15731a0509', '2018-06-28', 1, 'cse', 3, 'b'),
('pranav kot', '154n1a05a0', '2018-06-28', 1, 'ece', 3, 'a'),
('pranav kot', '154n1a05a0', '2018-06-28', 1, 'ece', 3, 'a'),
('hareesh ja', '15731a0509', '2018-06-28', 1, 'cse', 3, 'b'),
('hareesh ja', '15731a0509', '2018-06-28', 1, 'cse', 3, 'b'),
('hareesh ja', '15731a0509', '2018-06-28', 1, 'cse', 3, 'b'),
('hareesh ja', '15731a0509', '2018-06-28', 1, 'cse', 3, 'b'),
('hareesh ja', '15731a0509', '2018-06-28', 1, 'cse', 3, 'b'),
('hareesh ja', '15731a0509', '2018-06-28', 1, 'cse', 3, 'b'),
('shilpitha ', '154N1A0512', '2018-06-29', 1, 'cse', 4, 'a'),
('saiteja ma', '154N1A0515', '2018-06-29', 0, 'cse', 4, 'a'),
('devaraj se', '15731a0531', '2018-06-29', 1, 'cse', 4, 'a'),
('shilpitha ', '154N1A0512', '2018-06-29', 1, 'cse', 4, 'a'),
('saiteja ma', '154N1A0515', '2018-06-29', 0, 'cse', 4, 'a'),
('devaraj se', '15731a0531', '2018-06-29', 1, 'cse', 4, 'a'),
('shilpitha ', '154N1A0512', '2018-06-29', 1, 'cse', 4, 'a'),
('saiteja ma', '154N1A0515', '2018-06-29', 0, 'cse', 4, 'a'),
('devaraj se', '15731a0531', '2018-06-29', 1, 'cse', 4, 'a'),
('shilpitha ', '154N1A0512', '2018-06-29', 1, 'cse', 4, 'a'),
('saiteja ma', '154N1A0515', '2018-06-29', 0, 'cse', 4, 'a'),
('devaraj se', '15731a0531', '2018-06-29', 1, 'cse', 4, 'a'),
('Sudeesh ch', '154N1A0532', '2018-06-29', 0, 'cse', 4, 'b');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `totalclasses` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `name` varchar(40) NOT NULL,
  `message` longtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`name`, `message`, `date`) VALUES
('saideep', 'the meeting was cancelled today', '2018-06-28'),
('puppy', 'meeting cancelled', '2018-06-28'),
('puppy', 'meeting cancelled', '2018-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `percentage`
--

CREATE TABLE `percentage` (
  `fullname` varchar(50) NOT NULL,
  `rollnum` varchar(10) NOT NULL,
  `attnper` double NOT NULL,
  `year` int(2) NOT NULL,
  `sec` char(2) NOT NULL,
  `branch` char(5) NOT NULL,
  `parentname` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `percentage`
--

INSERT INTO `percentage` (`fullname`, `rollnum`, `attnper`, `year`, `sec`, `branch`, `parentname`, `mobile`) VALUES
('navya kanakala', '154n1a0511', 99, 3, 'a', 'cse', '', 0),
('shilpitha meher kanumuri', '154N1A0512', 98, 4, 'a', 'cse', '', 0),
('saiteja malaga', '154N1A0515', 98, 4, 'a', 'cse', '', 0),
('puma', '154n1a0520', 94, 2, 'b', 'ece', '', 0),
('talanki ammanni', '154n1a0525', 93, 1, 'b', 'cse', '', 0),
('Sudeesh chandra', '154N1A0532', 95, 4, 'b', 'cse', 'srinivasulu reddy', 7396438448),
('pranav kota', '154n1a05a0', 76, 3, 'a', 'ece', '', 0),
('hareesh jakkampudi', '15731a0509', 93, 3, 'b', 'cse', '', 0),
('keerthi ', '15731a0511', 96, 2, 'b', 'ece', '', 0),
('vaibhav krishna', '15731a0515', 98, 1, 'a', 'cse', 'uma devi', 9154726272),
('Ramya Kothamasu', '15731A0517', 97, 4, 'c', 'cse', '', 0),
('chari', '15731a0529', 76, 3, 'd', 'eee', '', 0),
('devaraj senneri', '15731a0531', 77, 4, 'a', 'cse', '', 0),
('saideep tanguturi', '15731A0535', 98, 4, 'c', 'civil', '', 0),
('viriyala naga venkata jagan sai santhosh', '15731a0536', 87, 1, 'c', 'mech', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `remainder`
--

CREATE TABLE `remainder` (
  `name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffinfo`
--

CREATE TABLE `staffinfo` (
  `name` varchar(10) NOT NULL,
  `passwd` varchar(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `subj` varchar(10) NOT NULL,
  `year` int(4) NOT NULL,
  `m` int(2) NOT NULL,
  `t` int(2) NOT NULL,
  `w` int(2) NOT NULL,
  `th` int(2) NOT NULL,
  `f` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffinfo`
--

INSERT INTO `staffinfo` (`name`, `passwd`, `branch`, `subj`, `year`, `m`, `t`, `w`, `th`, `f`) VALUES
('admin', 'admin', '', '', 0, 0, 0, 0, 0, 0),
('puppy', 'puppy07', 'cse', 'cse', 4, 5, 2, 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `name` varchar(20) NOT NULL,
  `stat` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`name`, `stat`, `date`) VALUES
('saideep', 1, '2018-06-28'),
('puppy', 1, '2018-06-28'),
('puppy', 1, '2018-06-29'),
('puppy', 1, '2018-06-29'),
('puppy', 1, '2018-06-29'),
('puppy', 1, '2018-06-29'),
('puppy', 1, '2018-06-29'),
('puppy', 1, '2018-06-29'),
('puppy', 1, '2018-06-29'),
('puppy', 1, '2018-06-29'),
('puppy', 1, '2018-06-29'),
('puppy', 1, '2018-06-29'),
('puppy', 1, '2018-06-29'),
('puppy', 1, '2018-06-29'),
('admin', 1, '2018-06-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `percentage`
--
ALTER TABLE `percentage`
  ADD UNIQUE KEY `rollnum` (`rollnum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
