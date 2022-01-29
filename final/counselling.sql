-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 06:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `counselling`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `enrollment` int(20) NOT NULL,
  `nam` varchar(50) DEFAULT NULL,
  `aadhar` int(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `father` varchar(50) DEFAULT NULL,
  `mother` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `religion` varchar(10) DEFAULT NULL,
  `cast` varchar(10) DEFAULT NULL,
  `nationality` varchar(10) DEFAULT NULL,
  `tfw` varchar(5) DEFAULT NULL,
  `pc` varchar(5) DEFAULT NULL,
  `diistict` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `10th` int(3) DEFAULT NULL,
  `10thB` varchar(100) DEFAULT NULL,
  `12th` int(3) DEFAULT NULL,
  `12thB` varchar(100) DEFAULT NULL,
  `rank` int(10) DEFAULT NULL,
  `quota` int(10) DEFAULT NULL,
  `locking` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`enrollment`, `nam`, `aadhar`, `dob`, `email`, `phone`, `father`, `mother`, `gender`, `religion`, `cast`, `nationality`, `tfw`, `pc`, `diistict`, `password`, `10th`, `10thB`, `12th`, `12thB`, `rank`, `quota`, `locking`) VALUES
(1234, 'Rohit Paul', 658314, '1997-01-16', 'rolap.paul1997@gmail.com', 2147483647, 'RATHIN PAUL', 'CHITRA PAUL', 'MALE', 'hindu', 'obc-b', 'Indian', 'YES', 'NO', 'Kolkata', '1!qQ2345', 84, 'WBBSE', 68, 'WBHSE', 266, 56, 1),
(1235, 'Rupsha Nandy', 44554, '1997-01-29', 'rolap.paul1997@gmail.com', 15545, 'sdgadhd', 'hdhzdhdsh', 'FEMALE', 'hindu', 'general', 'Indian', 'YES', 'NO', 'Hooghly', '1!qQ2345', 78, 'dgd', 85, 'dbzdb', 547, 0, 1),
(1236, 'Debojyoti Saha', 157567, '1997-06-04', 'rolap.paul1997@gmail.com', 2147483647, 'Rabi Saha', 'Naina Sahaa', 'MALE', 'hindu', 'sc', 'Indian', 'YES', 'NO', 'North 24 Parganas', '1!qQ2345', 83, 'UPHRE', 80, 'UPHSRE', 3484, 35, 1),
(1237, 'Saatwik Bhowmik', 1546458, '1997-11-12', 'rolap.paul1997@gmail.com', 2147483647, 'Anjan Bhowmik', 'Sathi Bhowmik', 'MALE', 'hindu', 'general', 'Indian', 'YES', 'NO', 'Kolkata', '1!qQ2345', 78, 'WBBSE', 90, 'WBHSE', 25, 0, 1),
(1238, 'Ishani Nayak', 548761498, '1996-07-01', 'rolap.paul1997@gmail.com', 2147483647, 'Ritam Nayek', 'Radhika Nayek', 'FEMALE', 'hindu', 'general', 'Indian', 'YES', 'NO', 'Alipurduar', '1!qQ2345', 93, 'WBBSE', 90, 'WBHSE', 649, 0, 1),
(1239, 'Subhojit Saha', 0, '0000-00-00', 'rolap.paul1997@gmail.com', 2147483647, 'Ayan Saha', 'Rima Saha', 'MALE', 'hindu', 'obc-a', 'Indian', 'YES', '', 'Alipurduar', '1!qQ2345', 99, 'ICSC', 93, 'ISC', 154, 0, 1),
(1240, 'Souren Bhowmik', 0, '0000-00-00', 'rolap.paul1997@gmail.com', 2147483647, 'Partha Bhowmik', 'Rina bhowmik', 'MALE', 'hindu', 'st', 'Indian', 'YES', '', 'Alipurduar', '1!qQ2345', 79, 'XBSE', 62, 'XBSE', 319, 0, 1),
(1241, 'Riya das', 0, '0000-00-00', 'rolap.paul1997@gmail.com', 2147483647, 'Dhiraj Das', 'Antora Das', 'FEMALE', 'hindu', 'sc', 'Indian', 'YES', '', 'Alipurduar', '1!qQ2345', 90, 'CBSE', 90, 'CBSE', 231, 0, 1),
(1242, 'Tiya pal', 0, '2021-05-03', 'rolap.paul1997@gmail.com', 453256958, 'gdgmfyukfyuf', 'vhjfyukfkyufkyt', 'FEMALE', 'hindu', 'obc-b', 'Indian', 'YES', '', 'Alipurduar', '1!qQ2345', 25, 'jgtdtu', 85, 'kvjhfkutd', 456, 0, 1),
(1243, 'Siya Hansda', 641989696, '1998-06-12', 'rolap.paul1997@gmail.com', 2147483647, 'Protim Hansda', 'Sumati Hansda', 'FEMALE', 'muslim', 'obc-a', 'Indian', 'YES', 'YES', 'Malda', '1!qQ2345', 78, 'WBBSE', 70, 'WBHSE', 351, 86, 1),
(1244, 'Rabi murmu', 0, '2021-05-05', 'rolap.paul1997@gmail.com', 2147483647, 'gfuydjtdkfkyuf', 'eifhihguewrhg', 'MALE', 'hindu', 'st', 'Indian', 'YES', '', 'Paschim (West) Burdwan (Bardha', '1!qQ2345', 35, 'asgWHS', 85, 'sdbsdnsfn', 128, 0, 1),
(1245, 'Jayanta Dutta', 0, '2005-06-28', 'rolap.paul1997@gmail.com', 3932649, '.dgnlnad bgerg', 'sdkfh vwei hf', 'MALE', 'hindu', 'sc', 'Indian', 'YES', '', 'Malda', '1!qQ2345', 87, 'uiblvyo7tl', 54, 'dsg g', 126, 0, 1),
(1246, 'Sudipta Roy', 0, '0000-00-00', 'rolap.paul1997@gmail.com', 2147483647, 'Balaram Roy', 'Kalindi Roy', 'FEMALE', 'hindu', 'general', 'Indian', 'YES', '', 'Alipurduar', '1!qQ2345', 88, 'CBSE', 95, 'ISC', 248, 0, 1),
(1247, 'Swagoto guhathakurta', 0, '0000-00-00', 'rolap.paul1997@gmail.com', 2147483647, 'Soumalya Guhathakurata', 'Annaya pal', 'MALE', 'hindu', 'sc', 'Indian', 'YES', '', 'Alipurduar', '1!qQ2345', 722, 'UPHRE', 93, 'UPHSRE', 321, 0, 1),
(1248, 'Rajpal Yadav', 0, '2001-06-05', 'rolap.paul1997@gmail.com', 2147483647, 'Ram Yadav', 'Suhasini Yadav', 'MALE', 'hindu', 'general', 'Indian', 'YES', '', 'Alipurduar', '1!qQ2345', 77, 'WBBSE', 68, 'WBHSE', 654, 0, 1),
(1249, 'Samanwita Bhanushali', 0, '0000-00-00', 'rolap.paul1997@gmail.com', 2147483647, 'Kamal Bhanusali', 'Ritika Bhanusali', 'FEMALE', 'hindu', 'st', 'Indian', 'YES', '', 'Alipurduar', '1!qQ2345', 99, 'ICSC', 90, 'ISC', 951, 0, 1),
(1250, 'Roshan Yadav', 0, '0000-00-00', 'rolap.paul1997@gmail.com', 2147483647, 'Pritamn Yadaav', 'Shreya Yadav', 'MALE', 'hindu', 'obc-b', 'Indian', 'YES', '', 'Alipurduar', '1!qQ2345', 88, 'EWuj', 88, 'UPHSRE', 753, 0, 1),
(1251, 'Rahul Mondal', 0, '0000-00-00', 'rolap.paul1997@gmail.com', 2147483647, 'Avik Mondal', 'Kajal Mondal', 'MALE', 'hindu', 'obc-b', 'Indian', 'YES', '', 'Alipurduar', '1!qQ2345', 90, 'WBBSE', 88, 'WBHSE', 421, 0, 1),
(1252, 'Shalini Roy', 0, '0000-00-00', 'rolap.paul1997@gmail.com', 2147483647, 'Ayla Roy', 'Sandipan Roy', 'MALE', 'hindu', 'obc-b', 'Indian', 'YES', '', 'Alipurduar', '1!qQ2345', 88, 'CBSE', 82, 'C', 453, 0, 1),
(1255, 'ANUPAM SAMANTA', 157648647, '1991-02-06', 'anupam.mtech2@gmail.com', 2147483647, 'A.K. SAMANTA', 'A.K. SAMANTA', 'MALE', 'humaniy', 'general', 'Indian', 'YES', 'NO', 'Purba Burdwan (Bardhaman)', 'Abc@1234', 98, 'WBBSE', 99, 'WBHSE', 102, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `collage`
--

CREATE TABLE `collage` (
  `cid` int(10) NOT NULL,
  `collage_name` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collage`
--

INSERT INTO `collage` (`cid`, `collage_name`, `type`) VALUES
(101, 'Jadavpur University, Kolkata', 'government'),
(102, 'Heritage Institute of Technology, Kolkata', 'private'),
(103, 'Techno India University, Kolkata', 'private'),
(104, 'Haldia Institute of Technology, Haldia', 'private'),
(105, 'The Institutions of Engineers India, Kolkata', 'private'),
(106, 'Kalyani Government Engineering College, Nadia', 'government'),
(107, 'Dr BC Roy Engineering College, Durgapur', 'private'),
(108, 'Institute of Engineering and Management, Kolkata', 'private'),
(109, 'Academy of Technology, Hooghly', 'private'),
(110, 'Jalpaiguri Government Engineering College, Jalpaiguri', 'government'),
(111, 'Amity University, Kolkata', 'private'),
(112, 'BP Poddar Institute of Management and Technology, Kolkata', 'private'),
(113, 'Techno International New Town, Kolkata', 'private'),
(114, 'Kalyani University - University of Kalyani', 'government'),
(115, 'Government College of Engineering and Textile Technology', 'government'),
(116, 'Asansol Engineering College, Asansol', 'government'),
(117, 'NIT Kolkata - Narula Institute of Technology', 'private'),
(118, 'Budge Budge Institute of Technology, Kolkata', 'private'),
(119, 'Bengal Institute of Technology, Kolkata', 'private'),
(120, 'Calcutta University - University of Calcutta', 'government');

-- --------------------------------------------------------

--
-- Table structure for table `cutoff`
--

CREATE TABLE `cutoff` (
  `cid` int(10) NOT NULL,
  `sid` int(100) NOT NULL,
  `sgeneral` int(3) NOT NULL,
  `sobc-a` int(2) DEFAULT NULL,
  `sobc-b` int(2) DEFAULT NULL,
  `ssc` int(2) DEFAULT NULL,
  `sst` int(2) DEFAULT NULL,
  `spc` int(2) DEFAULT NULL,
  `stfw` int(2) DEFAULT NULL,
  `general` int(30) NOT NULL,
  `obc-a` int(30) NOT NULL,
  `obc-b` int(30) NOT NULL,
  `sc` int(30) NOT NULL,
  `st` int(30) NOT NULL,
  `pc` int(30) NOT NULL,
  `tfw` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cutoff`
--

INSERT INTO `cutoff` (`cid`, `sid`, `sgeneral`, `sobc-a`, `sobc-b`, `ssc`, `sst`, `spc`, `stfw`, `general`, `obc-a`, `obc-b`, `sc`, `st`, `pc`, `tfw`) VALUES
(101, 1, 0, 1, 1, 0, 0, 1, 1, 116, 3587, 456, 1187, 4614, 158, 244),
(101, 2, 0, 1, 1, 0, 0, 1, 1, 406, 8845, 1446, 3743, 12977, 485, 734),
(101, 3, 0, 1, 1, 0, 0, 1, 1, 919, 36283, 4424, 7680, 23450, 1478, 2058),
(101, 4, 0, 1, 1, 1, 1, 1, 1, 594, 24845, 3172, 5220, 18635, 807, 1352),
(101, 6, 0, 1, 1, 1, 1, 1, 1, 239, 8186, 1479, 2387, 12198, 204, 561),
(102, 1, 1, 1, 1, 1, 1, 1, 1, 2877, 4586, 5682, 6740, 8229, 5558, 3214),
(102, 2, 1, 1, 1, 1, 1, 1, 1, 3642, 4646, 1823, 6894, 39605, 5915, 3532),
(102, 3, 1, 1, 1, 1, 1, 1, 1, 9790, 24825, 5486, 13076, 57285, 58624, 9740),
(102, 4, 1, 1, 1, 1, 1, 1, 1, 7986, 9416, 9864, 10548, 38299, 6843, 6922),
(102, 6, 1, 1, 1, 1, 1, 1, 1, 4960, 65842, 32685, 8814, 29889, 1974, 4618),
(103, 1, 1, 1, 1, 1, 1, 1, 1, 4209, 19857, 4875, 27245, 39060, 5961, 22178),
(103, 2, 1, 1, 1, 1, 1, 1, 1, 34873, 101728, 57422, 44000, 82356, 38430, 101850),
(103, 3, 0, 1, 1, 1, 1, 1, 1, 12921, 73576, 15546, 70000, 95119, 14208, 84880),
(103, 4, 1, 1, 1, 1, 1, 1, 1, 15376, 72348, 18030, 68210, 104789, 16314, 90700),
(103, 6, 1, 1, 1, 1, 1, 1, 1, 6291, 38271, 7436, 55041, 63778, 7000, 74179),
(104, 1, 1, 1, 1, 1, 1, 1, 1, 6245, 9000, 7759, 7931, 8390, 6286, 9821),
(104, 2, 1, 1, 1, 1, 1, 1, 1, 10666, 20301, 16791, 19817, 31002, 12443, 30000),
(104, 3, 1, 1, 1, 1, 1, 1, 1, 14386, 31900, 21716, 26912, 47000, 19909, 45211),
(104, 4, 1, 1, 1, 1, 1, 1, 1, 12500, 38124, 23834, 33255, 54258, 18081, 31982),
(104, 6, 1, 1, 1, 1, 1, 1, 1, 13550, 30123, 20117, 27710, 33200, 19133, 41100),
(105, 1, 1, 1, 1, 1, 1, 1, 1, 1418, 5800, 1780, 2159, 4122, 1508, 2079),
(105, 2, 1, 1, 1, 1, 1, 1, 1, 4323, 7299, 5206, 6800, 8900, 5449, 10922),
(105, 3, 1, 1, 1, 1, 1, 1, 1, 4505, 9999, 5430, 7254, 8293, 4945, 11267),
(105, 4, 1, 1, 1, 1, 1, 1, 1, 3296, 8928, 4666, 5496, 7200, 3914, 8111),
(105, 6, 1, 1, 1, 1, 1, 1, 1, 2053, 4693, 4540, 3980, 7000, 2800, 3454),
(106, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1328, 2534, 1450, 1688, 3289, 1502, 2806),
(106, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, 2092, 4256, 2870, 3541, 4631, 2994, 3800),
(106, 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, 2387, 3128, 2456, 2925, 3487, 2803, 3290),
(106, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1675, 2276, 1789, 2190, 3200, 1945, 2300),
(106, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, 2464, 3489, 2780, 3000, 3723, 4500, 3678),
(107, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 21699, 28654, 21745, 23578, 36702, 39882, 27290),
(107, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, 62270, 104582, 70458, 74698, 79866, 83211, 84320),
(107, 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, 30376, 52000, 30927, 42800, 56943, 38721, 82300),
(107, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, 2877, 8186, 3172, 5200, 12198, 3478, 3806),
(107, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, 2053, 9800, 23298, 8687, 18770, 4908, 6897),
(108, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 7690, 14500, 7832, 8210, 9119, 8700, 10000),
(108, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, 4505, 9999, 5430, 7254, 8345, 4932, 11909),
(108, 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, 2053, 4692, 4540, 3980, 7000, 2800, 5643),
(108, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, 3245, 7299, 5419, 6470, 8500, 5467, 10922),
(108, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, 4505, 9999, 4730, 7689, 12198, 6897, 9085),
(109, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 19000, 38394, 20911, 32891, 47118, 45190, 92810),
(109, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, 67270, 104587, 70457, 75429, 79866, 83211, 84387),
(109, 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, 12800, 34900, 13824, 32718, 46510, 58432, 53219),
(109, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, 23781, 45783, 25671, 30291, 36127, 43410, 41898),
(109, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, 2000, 6000, 2390, 5321, 7819, 5679, 8321),
(110, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 4209, 0, 0, 8745, 9060, 6286, 10000),
(110, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, 12821, 19857, 15546, 20000, 24900, 38913, 32189),
(110, 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, 2315, 7382, 2561, 8711, 9000, 5640, 8910),
(110, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, 8900, 13554, 9210, 12556, 18900, 14516, 18889),
(110, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, 15677, 24356, 21310, 17819, 18910, 32010, 30000),
(111, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 27000, 76000, 29181, 34229, 39211, 43100, 32100),
(111, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, 21812, 78200, 22900, 29871, 56110, 65399, 63200),
(111, 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, 43246, 92100, 46191, 50000, 66323, 61819, 79011),
(111, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, 20530, 99996, 31727, 39802, 56429, 28005, 30056),
(111, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, 28772, 81861, 29540, 34255, 46129, 46710, 59322),
(112, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 14478, 32001, 16521, 20184, 23450, 63211, 41922),
(112, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, 12812, 63718, 15546, 54012, 93129, 14212, 84883),
(112, 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, 15376, 73246, 18920, 68320, 102910, 16312, 90188),
(112, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, 12901, 34729, 13562, 14499, 17637, 21900, 18999),
(113, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 42106, 102355, 43172, 46171, 49182, 57821, 59129),
(113, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, 21000, 54259, 23818, 25181, 28127, 22177, 50118),
(113, 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, 54215, 108234, 55119, 57125, 63182, 64215, 68294),
(113, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, 59021, 92131, 61022, 65721, 82000, 88123, 89145),
(113, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, 32100, 33711, 34615, 38212, 41765, 45000, 23536),
(114, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1023, 2456, 1178, 1678, 2093, 1891, 2358),
(114, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, 290, 1389, 576, 890, 1456, 1104, 1293),
(114, 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, 789, 4563, 914, 1435, 2676, 3489, 3964),
(114, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1210, 3164, 1437, 2038, 2351, 2810, 3028),
(114, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, 3285, 8290, 3371, 3826, 4614, 5238, 7560),
(115, 1, 1, 1, 1, 1, 1, 1, 1, 14183, 58006, 21228, 42516, 46217, 49120, 53000),
(115, 2, 1, 1, 1, 1, 1, 1, 1, 43257, 72199, 52036, 68752, 89318, 54462, 109135),
(115, 3, 1, 1, 1, 1, 1, 1, 1, 45053, 99995, 54329, 72547, 83619, 49568, 110018),
(115, 4, 1, 1, 1, 1, 1, 1, 1, 32891, 89324, 45617, 54362, 72918, 38134, 81291),
(115, 6, 1, 1, 1, 1, 1, 1, 1, 20534, 44273, 22728, 25271, 33450, 43211, 38923),
(116, 1, 1, 1, 1, 1, 1, 1, 1, 23341, 53231, 24798, 26909, 29657, 34667, 39866),
(116, 2, 1, 1, 1, 1, 1, 1, 1, 45627, 80234, 47262, 50251, 54328, 56823, 60327),
(116, 3, 1, 1, 1, 1, 1, 1, 1, 32181, 78234, 34678, 36126, 39201, 41233, 76032),
(116, 4, 1, 1, 1, 1, 1, 1, 1, 35181, 75234, 36678, 38120, 39201, 41283, 76037),
(116, 6, 1, 1, 1, 1, 1, 1, 1, 17821, 29341, 18745, 19354, 22931, 25643, 29143),
(117, 1, 1, 1, 1, 1, 1, 1, 1, 5209, 20938, 5873, 7425, 9060, 9821, 12182),
(117, 2, 1, 1, 1, 1, 1, 1, 1, 12209, 53938, 15873, 17425, 19060, 29821, 3218);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `enrollment` int(20) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `signature` varchar(50) DEFAULT NULL,
  `thumb` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`enrollment`, `photo`, `signature`, `thumb`) VALUES
(1234, 'Photo.jpg', 'Signature.jpg', 'Thumb Impression.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `s1234`
--

CREATE TABLE `s1234` (
  `id` int(2) NOT NULL,
  `sid` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1234`
--

INSERT INTO `s1234` (`id`, `sid`, `cid`, `status`) VALUES
(1, 1, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s1235`
--

CREATE TABLE `s1235` (
  `id` int(3) NOT NULL,
  `cid` int(20) DEFAULT NULL,
  `sid` int(20) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1235`
--

INSERT INTO `s1235` (`id`, `cid`, `sid`, `status`) VALUES
(1, 101, 1, 0),
(2, 101, 2, 0),
(3, 101, 3, 0),
(4, 101, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s1236`
--

CREATE TABLE `s1236` (
  `id` int(3) NOT NULL,
  `sid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1236`
--

INSERT INTO `s1236` (`id`, `sid`, `cid`, `status`) VALUES
(1, 1, 101, 0),
(2, 2, 101, 0),
(3, 3, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s1237`
--

CREATE TABLE `s1237` (
  `id` int(3) NOT NULL,
  `sid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1237`
--

INSERT INTO `s1237` (`id`, `sid`, `cid`, `status`) VALUES
(11, 1, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s1238`
--

CREATE TABLE `s1238` (
  `id` int(3) NOT NULL,
  `sid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1238`
--

INSERT INTO `s1238` (`id`, `sid`, `cid`, `status`) VALUES
(11, 1, 101, 0),
(12, 2, 101, 0),
(13, 3, 101, 0),
(14, 4, 101, 0),
(15, 6, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s1239`
--

CREATE TABLE `s1239` (
  `id` int(3) NOT NULL,
  `sid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1239`
--

INSERT INTO `s1239` (`id`, `sid`, `cid`, `status`) VALUES
(1, 1, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s1240`
--

CREATE TABLE `s1240` (
  `id` int(3) NOT NULL,
  `sid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1240`
--

INSERT INTO `s1240` (`id`, `sid`, `cid`, `status`) VALUES
(1, 1, 101, 0),
(2, 2, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s1241`
--

CREATE TABLE `s1241` (
  `id` int(3) NOT NULL,
  `sid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1241`
--

INSERT INTO `s1241` (`id`, `sid`, `cid`, `status`) VALUES
(1, 1, 101, 0),
(2, 2, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s1242`
--

CREATE TABLE `s1242` (
  `id` int(3) NOT NULL,
  `sid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1242`
--

INSERT INTO `s1242` (`id`, `sid`, `cid`, `status`) VALUES
(1, 1, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s1243`
--

CREATE TABLE `s1243` (
  `id` int(3) NOT NULL,
  `sid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1243`
--

INSERT INTO `s1243` (`id`, `sid`, `cid`, `status`) VALUES
(11, 1, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s1244`
--

CREATE TABLE `s1244` (
  `id` int(3) NOT NULL,
  `sid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1244`
--

INSERT INTO `s1244` (`id`, `sid`, `cid`, `status`) VALUES
(1, 1, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s1245`
--

CREATE TABLE `s1245` (
  `id` int(3) NOT NULL,
  `sid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1245`
--

INSERT INTO `s1245` (`id`, `sid`, `cid`, `status`) VALUES
(1, 1, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s1246`
--

CREATE TABLE `s1246` (
  `id` int(3) NOT NULL,
  `sid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1246`
--

INSERT INTO `s1246` (`id`, `sid`, `cid`, `status`) VALUES
(1, 1, 101, 0),
(2, 2, 101, 0),
(3, 3, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s1247`
--

CREATE TABLE `s1247` (
  `id` int(3) NOT NULL,
  `sid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1247`
--

INSERT INTO `s1247` (`id`, `sid`, `cid`, `status`) VALUES
(1, 1, 101, 0),
(2, 2, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s1248`
--

CREATE TABLE `s1248` (
  `id` int(3) NOT NULL,
  `sid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1248`
--

INSERT INTO `s1248` (`id`, `sid`, `cid`, `status`) VALUES
(1, 1, 101, 0),
(2, 2, 101, 0),
(3, 3, 101, 0),
(4, 4, 101, 0),
(5, 6, 101, 0),
(6, 3, 103, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s1249`
--

CREATE TABLE `s1249` (
  `id` int(3) NOT NULL,
  `sid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1249`
--

INSERT INTO `s1249` (`id`, `sid`, `cid`, `status`) VALUES
(1, 1, 101, 0),
(2, 2, 101, 0),
(3, 3, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s1250`
--

CREATE TABLE `s1250` (
  `id` int(3) NOT NULL,
  `sid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1250`
--

INSERT INTO `s1250` (`id`, `sid`, `cid`, `status`) VALUES
(1, 1, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s1251`
--

CREATE TABLE `s1251` (
  `id` int(3) NOT NULL,
  `sid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1251`
--

INSERT INTO `s1251` (`id`, `sid`, `cid`, `status`) VALUES
(1, 1, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s1252`
--

CREATE TABLE `s1252` (
  `id` int(3) NOT NULL,
  `sid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1252`
--

INSERT INTO `s1252` (`id`, `sid`, `cid`, `status`) VALUES
(1, 1, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s1255`
--

CREATE TABLE `s1255` (
  `id` int(3) NOT NULL,
  `sid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s1255`
--

INSERT INTO `s1255` (`id`, `sid`, `cid`, `status`) VALUES
(1, 1, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `enrollment` int(10) NOT NULL,
  `sid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`enrollment`, `sid`, `cid`, `status`) VALUES
(1234, 1, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sid`, `name`) VALUES
(1, 'Computer Science'),
(2, 'Information technology'),
(3, 'Civil'),
(4, 'Mechanical'),
(5, 'Textile'),
(6, 'Electronics and Communication Engineering.');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `trnid` int(20) NOT NULL,
  `trndate` date NOT NULL DEFAULT current_timestamp(),
  `nam` varchar(50) NOT NULL,
  `enrollment` int(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`trnid`, `trndate`, `nam`, `enrollment`, `status`) VALUES
(1001, '2021-07-14', 'Rohit Paul', 1234, 1),
(10003, '2021-05-19', 'Debojyoti Saha', 1236, 1),
(10004, '2021-05-19', 'Saatwik Bhowmik', 1237, 1),
(10005, '2021-05-19', 'Ishani Nayak', 1238, 1),
(10006, '2021-05-19', 'Subhojit Saha', 1239, 1),
(10007, '2021-05-19', 'Souren Bhowmik', 1240, 1),
(10008, '2021-05-19', 'Riya das', 1241, 1),
(10009, '2021-05-19', 'Shalini Roy', 1252, 1),
(10010, '2021-05-19', 'Rahul Mondal', 1251, 1),
(10011, '2021-05-19', 'Tiya pal', 1242, 1),
(10012, '2021-05-19', 'Siya Hansda', 1243, 1),
(10014, '2021-05-19', 'Rabi murmu', 1244, 1),
(10015, '2021-05-19', 'Jayanta Dutta', 1245, 1),
(10016, '2021-05-19', 'Sudipta Roy', 1246, 1),
(10017, '2021-05-19', 'Swagoto guhathakurta', 1247, 1),
(10019, '2021-05-19', 'Rajpal Yadav', 1248, 1),
(10020, '2021-05-19', 'Samanwita Bhanushali', 1249, 1),
(10021, '2021-05-19', 'Roshan Yadav', 1250, 1),
(10023, '2021-05-28', 'Rupsha Nandy', 1235, 1),
(10025, '2021-06-02', 'ANUPAM SAMANTA', 1255, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`enrollment`);
ALTER TABLE `candidate` ADD FULLTEXT KEY `name` (`nam`);
ALTER TABLE `candidate` ADD FULLTEXT KEY `father` (`father`);
ALTER TABLE `candidate` ADD FULLTEXT KEY `mother` (`mother`);
ALTER TABLE `candidate` ADD FULLTEXT KEY `cast` (`cast`);

--
-- Indexes for table `collage`
--
ALTER TABLE `collage`
  ADD PRIMARY KEY (`cid`);
ALTER TABLE `collage` ADD FULLTEXT KEY `collage_name` (`collage_name`);

--
-- Indexes for table `cutoff`
--
ALTER TABLE `cutoff`
  ADD PRIMARY KEY (`cid`,`sid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`enrollment`);

--
-- Indexes for table `s1234`
--
ALTER TABLE `s1234`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1235`
--
ALTER TABLE `s1235`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1236`
--
ALTER TABLE `s1236`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1237`
--
ALTER TABLE `s1237`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1238`
--
ALTER TABLE `s1238`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1239`
--
ALTER TABLE `s1239`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1240`
--
ALTER TABLE `s1240`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1241`
--
ALTER TABLE `s1241`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1242`
--
ALTER TABLE `s1242`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1243`
--
ALTER TABLE `s1243`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1244`
--
ALTER TABLE `s1244`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1245`
--
ALTER TABLE `s1245`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1246`
--
ALTER TABLE `s1246`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1247`
--
ALTER TABLE `s1247`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1248`
--
ALTER TABLE `s1248`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1249`
--
ALTER TABLE `s1249`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1250`
--
ALTER TABLE `s1250`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1251`
--
ALTER TABLE `s1251`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1252`
--
ALTER TABLE `s1252`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1255`
--
ALTER TABLE `s1255`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`enrollment`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trnid`),
  ADD UNIQUE KEY `enrollment` (`enrollment`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `s1234`
--
ALTER TABLE `s1234`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `s1235`
--
ALTER TABLE `s1235`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `s1236`
--
ALTER TABLE `s1236`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `s1237`
--
ALTER TABLE `s1237`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `s1238`
--
ALTER TABLE `s1238`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `s1239`
--
ALTER TABLE `s1239`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `s1240`
--
ALTER TABLE `s1240`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `s1241`
--
ALTER TABLE `s1241`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `s1242`
--
ALTER TABLE `s1242`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `s1243`
--
ALTER TABLE `s1243`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `s1244`
--
ALTER TABLE `s1244`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `s1245`
--
ALTER TABLE `s1245`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `s1246`
--
ALTER TABLE `s1246`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `s1247`
--
ALTER TABLE `s1247`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `s1248`
--
ALTER TABLE `s1248`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `s1249`
--
ALTER TABLE `s1249`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `s1250`
--
ALTER TABLE `s1250`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `s1251`
--
ALTER TABLE `s1251`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `s1252`
--
ALTER TABLE `s1252`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `s1255`
--
ALTER TABLE `s1255`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cutoff`
--
ALTER TABLE `cutoff`
  ADD CONSTRAINT `cutoff_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `collage` (`cid`),
  ADD CONSTRAINT `cutoff_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `subject` (`sid`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`enrollment`) REFERENCES `candidate` (`enrollment`);

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `seat_ibfk_1` FOREIGN KEY (`enrollment`) REFERENCES `candidate` (`enrollment`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`enrollment`) REFERENCES `candidate` (`enrollment`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
