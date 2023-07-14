-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 07:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onetouch`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'sarvesh123305@gmail.com', 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `askquestion`
--

CREATE TABLE `askquestion` (
  `id` int(11) NOT NULL,
  `Question` varchar(2000) NOT NULL,
  `Answer` varchar(2000) NOT NULL,
  `Time` date DEFAULT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `askquestion`
--

INSERT INTO `askquestion` (`id`, `Question`, `Answer`, `Time`, `username`) VALUES
(35, 'When was GPK Established?\r\n', 'In 1947', '2022-06-10', 'sarvesh123305@gmail.com'),
(36, 'What is full name of gp?', 'sar', '2022-06-10', 'sarvesh123305@gmail.com'),
(37, '...', 'sar', '2022-06-10', 'sarvesh123305@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `letterformats`
--

CREATE TABLE `letterformats` (
  `id` int(100) NOT NULL,
  `filename` varchar(30) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Symbol` varchar(30) NOT NULL,
  `Time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `letterformats`
--

INSERT INTO `letterformats` (`id`, `filename`, `Title`, `Symbol`, `Time`) VALUES
(1, 'AJP Programs.docx', 'sar', '', '2022-06-11'),
(2, 'AJP Programs.docx', 'sar', '', '2022-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `qna`
--

CREATE TABLE `qna` (
  `id` int(11) NOT NULL,
  `Question` varchar(4000) NOT NULL,
  `Answer` varchar(7000) NOT NULL,
  `Votes` int(11) NOT NULL,
  `Time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qna`
--

INSERT INTO `qna` (`id`, `Question`, `Answer`, `Votes`, `Time`) VALUES
(1, ' What is the timing of college?', ' The regular time for college is 10:00 am to 6:00 pm , But it can vary according to shifts of the department.', 0, '2022-04-21'),
(2, 'What is the meaning of an Autonomous Body?', 'Autonomous colleges appoint their Professors, Lecturers, and Faculty. Hence students can have richer conversations with their faculty.', 0, '2022-01-02'),
(3, 'How many trades are there in Government Polytechnic, Kolhapur?\r\n', 'At present, the Institute offers Diploma programmer in Civil Engineering, Mechanical Engineering, Electrical Engineering, Industrial Electronics, Electronics and Telecommunication, Information Technology, Metallurgy, Sugar Manufacturing.\r\n', 0, '2022-01-01'),
(4, ' What is the vision and mission of Government Polytechnic, Kolhapur?', 'Vision:\r\n\r\nProgramme with high recognition catering needs of Information Technology industry in tune with the nation’s mission for Digital India.\r\n\r\nMission:\r\n\r\n1.	To pursue excellence in areas of Information Technology keeping pace with the latest developments.\r\n2.	To educate and train students to design, develop and test software systems.\r\n3.	To develop the spirit of team work, innovation and professionalism\r\n4.	To cultivate attitude of lifelong learning', 0, '2021-01-02'),
(5, 'Can we change trade later on?', 'Yes one can! After displaying the merit list of First Year\'s Second Semester, one can apply for any trade that he/she wishes to be in. \r\nIf they pass the criteria that the trade holds, one can get into another trade from Second Year onwards.', 1, '2022-04-27'),
(6, 'How is the library system in the college?', 'We have a library with study room in our college. One can get a book on their library card on the day alloted by the Library for a particular department.\r\n', 1, '2022-04-27'),
(7, 'Do we have sports in the college?', 'Yes! GPK has it\'s own sport\'s department with a number of indoor as well as outdoor sports', 0, '2022-04-21'),
(8, 'Where is the department for all FY students?', 'All the FY students study together at the \'Old Building\' of college, just by separate trades.', 0, '2022-04-21'),
(9, 'Where can one get uniform of college?', 'There are various places in Kolhapur to get the dress material for the uniform, whose address will be provided by respected department.', 0, '2022-01-02'),
(10, 'Where to find the format of bonafide?', 'GPK@OneTouch is here for you with all types of letter formats associated with Government Polytechnic, Kolhapur. You can login and get connected with us on our platform and find what you\'re looking for!', 0, '2022-01-02'),
(11, ' How to apply for ID?', 'You can fill up a form online available on gpkolhapur@org.in when provided instructions by respected department', 0, '2022-01-02'),
(12, ' When does the college have civil dress?\r\n', 'One can be in civil dress just on \'Wednesday and Saturday\'.', 0, '2022-01-02'),
(13, 'Does hostel gets alloted on Merit?', ' Yes. Government Polytechnic, Kolhapur\'s hostel facility is provided on Merit Itself.', 0, '2022-04-27'),
(14, ' Does college have any canteen?', ' Currently the service for canteen is not available, but it will be soon.', 0, '2022-04-27'),
(15, ' Is there any Ladies Room in college?\r\n', 'Yes. GPK has it\'s own Ladies Room for girls as well as staff with all the amenities.', 0, '2022-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `phoneno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `password`, `Email`, `Name`, `phoneno`) VALUES
('sarvesh123305@gmail.com', 'sa', 'sarvesh123305@gmail.com', 'Sarvesh', 0),
('sar', 'sa', 'safda@gmail.com', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Sarvesh Anant Kulkarni', 'sarvesh123305@gmail.com', 8668446202, 'sa'),
(6, 'aftab', 'aftabib2353@gmail.com', 8080, 'sa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `askquestion`
--
ALTER TABLE `askquestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `letterformats`
--
ALTER TABLE `letterformats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `askquestion`
--
ALTER TABLE `askquestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `letterformats`
--
ALTER TABLE `letterformats`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `qna`
--
ALTER TABLE `qna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
