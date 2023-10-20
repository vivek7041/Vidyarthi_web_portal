-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 08:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vidhyarthi`
--

-- --------------------------------------------------------

--
-- Table structure for table `addevent`
--

CREATE TABLE `addevent` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(245) NOT NULL,
  `about` varchar(255) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `aoi` varchar(255) NOT NULL,
  `created_at` varchar(300) NOT NULL,
  `image_path` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addevent`
--

INSERT INTO `addevent` (`id`, `name`, `category`, `about`, `faculty_id`, `aoi`, `created_at`, `image_path`) VALUES
(10, ' AI event', 'senior', 'Artifical Intelligence ', 2, '', '', 'http://localhost/school-education/CodeIgniter/eventpicUpload/Koala.jpg'),
(11, 'Cloud-a-thon', 'Higher education', 'Cloud computing in business solutions.', 13, 'Cloud computing', '', ''),
(12, 'Hack-a-thon', 'Higher education', 'Hackathon for all', 2, '', '', ''),
(13, 'Financial services of financial institutions', 'Higher education', 'Ku6 bhi', 2, '', '', ''),
(14, 'Mega-thon', 'Higher education', 'Mega-a-thon a grand event', 2, '', '', ''),
(15, 'Mega-thon-i', 'junior', 'Mega-a-thon a grand event', 2, '', '2022-09-11 15:183:30', '');

-- --------------------------------------------------------

--
-- Table structure for table `addteammember`
--

CREATE TABLE `addteammember` (
  `id` int(11) NOT NULL,
  `memberName` varchar(255) NOT NULL,
  `memberEmail` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `teamleader_id` int(11) NOT NULL,
  `image_path` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `createteam`
--

CREATE TABLE `createteam` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `teamSize` int(14) NOT NULL,
  `teamDescription` varchar(255) NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `createteam`
--

INSERT INTO `createteam` (`id`, `name`, `teamSize`, `teamDescription`, `login_id`) VALUES
(1, 'A1', 6, 'God', 15),
(2, 'KMCLU', 6, 'good', 2),
(4, 'A1 Developers', 4, '', 13);

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `id` int(11) NOT NULL,
  `emp_data` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`id`, `emp_data`) VALUES
(1, '{\"employee_name\":\"vivekq\",\"employee_email\":\"vivek@gmail.cxom\",\"employee_gender\":\"Male\",\"employee_address\":\"Lucknow\\r\\n\"}'),
(2, '{\"employee_name\":\"varun\",\"employee_email\":\"varun@abc.com\",\"employee_gender\":\"Male\",\"employee_address\":\"Lucknow\\r\\n\"}'),
(3, '{\"employee_name\":\"Shiva\",\"employee_email\":\"shv@abc.com\",\"employee_gender\":\"Male\",\"employee_address\":\"Udaipur\"}');

-- --------------------------------------------------------

--
-- Table structure for table `eventstudent_detail`
--

CREATE TABLE `eventstudent_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `event name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `event category` varchar(255) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facultylogin`
--

CREATE TABLE `facultylogin` (
  `id` int(11) NOT NULL,
  `email` varchar(245) NOT NULL,
  `password` varchar(245) NOT NULL,
  `name` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultylogin`
--

INSERT INTO `facultylogin` (`id`, `email`, `password`, `name`) VALUES
(2, 'faculty1@gmail.com', 'vivek', 'Faculty');

-- --------------------------------------------------------

--
-- Table structure for table `participate_event`
--

CREATE TABLE `participate_event` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_category` varchar(255) NOT NULL,
  `event_id` varchar(255) NOT NULL,
  `student_course` varchar(255) NOT NULL,
  `event_faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participate_event`
--

INSERT INTO `participate_event` (`id`, `student_id`, `student_name`, `event_name`, `event_category`, `event_id`, `student_course`, `event_faculty_id`) VALUES
(27, 13, 'Vivek Verma', ' AI event', 'senior', '10', 'B.tech', 2),
(28, 13, 'Vivek Verma', 'Cloud-a-thon', 'Higher education', '11', 'B.tech', 13),
(29, 13, 'Vivek Verma', ' AI event', 'senior', '10', 'B.tech', 2);

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `aoi` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`id`, `name`, `email`, `password`, `institute`, `course`, `dob`, `mobile`, `gender`, `cpassword`, `aoi`, `image_path`) VALUES
(13, 'Vivek Verma', 'vivek@gmail.com', 'vivek', 'KMCLU', 'B.tech', '2001-12-18', '6394289559', 'male', 'vivek', 'Cloud computing', ''),
(14, 'Avinash Malviya', 'avi@gmail.com', 'vivek', 'LU', 'BA', '2022-08-03', '8887941120', 'male', 'vivek', 'Cyber security', 'http://localhost/school-education/CodeIgniter/upload/vector1.jpg'),
(15, 'KMCLU', 'kmc@gmail.com', '123', 'KMCLU', 'BTech', '2022-08-26', '9878654323', 'male', '123', 'Cloud computing', ''),
(16, 'shan', 'shan@gmail.com', '1234567', 'KMCLU', 'BTECH', '2022-08-26', '8978654321', 'female', '1234567', 'Artificial Intelligence', ''),
(17, 'Avinash Malviya', 'avinash@gmail.com', 'vivek', 'KMCLU', 'BTECH', '2022-08-26', '6394289550', '', 'vivek', 'Please select', ''),
(18, 'varun dvn', 'shv@gmail.com', 'vivek', 'Colvin College', 'BA', '2022-09-11', '9839706634', '', 'vivek', 'Please select', 'http://localhost/school-education/CodeIgniter/upload/Compaq-Logo7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addevent`
--
ALTER TABLE `addevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addteammember`
--
ALTER TABLE `addteammember`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `createteam`
--
ALTER TABLE `createteam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventstudent_detail`
--
ALTER TABLE `eventstudent_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facultylogin`
--
ALTER TABLE `facultylogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participate_event`
--
ALTER TABLE `participate_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addevent`
--
ALTER TABLE `addevent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `addteammember`
--
ALTER TABLE `addteammember`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `createteam`
--
ALTER TABLE `createteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eventstudent_detail`
--
ALTER TABLE `eventstudent_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facultylogin`
--
ALTER TABLE `facultylogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `participate_event`
--
ALTER TABLE `participate_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
