-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 03:17 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laira`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_Id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_registered` date NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'Admin'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_Id`, `firstname`, `middlename`, `lastname`, `suffix`, `gender`, `dob`, `age`, `address`, `email`, `contact`, `password`, `image`, `date_registered`, `user_type`) VALUES
(1, 'Erwin', 'Cabag', 'Son', '', 'Male', '2022-04-08', 23, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'admin@gmail.com', '09359428963', '21232f297a57a5a743894a0e4a801fc3', 'minimalism-1644666519306-6515.jpg', '2022-04-17', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_reply`
--

CREATE TABLE IF NOT EXISTS `admin_reply` (
`admin_reply_Id` int(11) NOT NULL,
  `admin_message_Id` int(11) NOT NULL,
  `admin_household_Id` int(11) NOT NULL,
  `admin_reply` text NOT NULL,
  `admin_Id` int(11) NOT NULL,
  `date_added` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin_reply`
--

INSERT INTO `admin_reply` (`admin_reply_Id`, `admin_message_Id`, `admin_household_Id`, `admin_reply`, `admin_Id`, `date_added`) VALUES
(3, 3, 42, 'test', 1, '12-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `household_head`
--

CREATE TABLE IF NOT EXISTS `household_head` (
`household_Id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sectorial_registration` varchar(255) NOT NULL,
  `causeofbeingsoloparent` varchar(255) NOT NULL,
  `typeofdisabilities` varchar(255) NOT NULL,
  `application_type` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `educational_attainment` varchar(255) NOT NULL,
  `employment_status` varchar(255) NOT NULL,
  `work_name` varchar(255) NOT NULL,
  `type_of_work` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `source_of_income` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `part_of_tribe` varchar(255) NOT NULL,
  `program_services` varchar(255) NOT NULL,
  `num_fam_members` varchar(255) NOT NULL,
  `assets` varchar(255) NOT NULL,
  `living_with` varchar(255) NOT NULL,
  `first_child` text NOT NULL,
  `secon_child` text NOT NULL,
  `3rd_child` text NOT NULL,
  `fourth_child` text NOT NULL,
  `fifth_child` text NOT NULL,
  `sixth_child` text NOT NULL,
  `seventh_child` text NOT NULL,
  `eight_child` text NOT NULL,
  `nineth_child` text NOT NULL,
  `tenth_child` text NOT NULL,
  `eleventh_child` text NOT NULL,
  `twelveth_child` text NOT NULL,
  `skills` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `household_head`
--

INSERT INTO `household_head` (`household_Id`, `firstname`, `middlename`, `lastname`, `email`, `contact_number`, `password`, `sectorial_registration`, `causeofbeingsoloparent`, `typeofdisabilities`, `application_type`, `address`, `dob`, `age`, `gender`, `place_of_birth`, `status`, `educational_attainment`, `employment_status`, `work_name`, `type_of_work`, `salary`, `source_of_income`, `religion`, `part_of_tribe`, `program_services`, `num_fam_members`, `assets`, `living_with`, `first_child`, `secon_child`, `3rd_child`, `fourth_child`, `fifth_child`, `sixth_child`, `seventh_child`, `eight_child`, `nineth_child`, `tenth_child`, `eleventh_child`, `twelveth_child`, `skills`) VALUES
(42, 'fd', 'Cabag', 'Son', 'sonerwin12@gmail.com', '9359428963', '21232f297a57a5a743894a0e4a801fc3', 'Solo Parent,', 'Abandoned', '', 'New,', 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '2028-06-08', '342', 'Male', 'fds', 'Single', 'College Level', 'Unemployed', 'N/A', 'N/A', 'N/A', 'N/A', 'fds', 'Yes', 'ECCD', '4324', 'fds', 'Parents', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', 'fds'),
(49, 'dada', 'userId', 'userId', 'user_Id@gmail.com', '9359428963', '3691308f2a4c2f6983f2880d32e29c84', 'Solo Parent,', 'Widow', '', 'New,', 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '2022-07-16', '32', 'Male', 'dgdfgd', 'Married', 'College Level', 'Employed', 'user_Id', 'Permanent', 'gfdg', 'user_Id', 'user_Id', '', '', '43', 'user_Id', 'Owned house', 'Erwin Cabag Son,2022-07-07,32,Male,user_Id,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', 'user_Id'),
(50, 'dd', 'Cabag', 'Son', 'sonerwin12@gmail.com', '9359428963', '1aabac6d068eef6a7bad3fdf50a05cc8', 'Solo Parent,', 'Widow', '', 'New,', 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '2022-07-21', '34', 'Male', 'dgsd', 'Divorced', 'High School Level', 'Self-employed', 'dgfdgd', 'Emergency', 'gdgfd', 'gfdgdf', 'gfd', 'No', 'ECCD', '54', 'gfdgdfg', 'Siblings', 'Erwin Cabag Son,2022-07-06,34,Female,fdgfd,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', 'gfdgfdgd'),
(51, 'cc', 'cc', 'cc', 'ccc@gmail.com', '432', 'e0323a9039add2978bf5b49550572c7c', 'PWD,', '', 'gfdgd', 'New,', 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '2022-07-23', '43', 'Male', 'fdgfd', 'Married', 'College Graduate', 'Employed', 'gfd', 'Permanent', 'gfd', 'gfd', 'gfd', 'Yes', 'ECCD', '5', 'gfdgd', 'Siblings', 'Erwin Cabag Son,2022-07-05,34,Male,gfdgd,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', 'gfdgdfgdf');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`message_Id` int(11) NOT NULL,
  `message_household_Id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_added` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_Id`, `message_household_Id`, `comment`, `date_added`) VALUES
(2, 43, 'test', '27-06-22'),
(3, 42, 'gfd', '11-07-22'),
(4, 42, 'ggfd', '12-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_file`
--

CREATE TABLE IF NOT EXISTS `uploaded_file` (
`upload_Id` int(11) NOT NULL,
  `Upload_household_Id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `uploaded_file`
--

INSERT INTO `uploaded_file` (`upload_Id`, `Upload_household_Id`, `image`) VALUES
(2, 230, 'rUPmy8.jpg'),
(4, 23, '4297150.jpg'),
(6, 42, 'Screenshot (176).png'),
(7, 0, 'Screenshot (159).png'),
(8, 51, 'Screenshot (166).png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_Id` int(11) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_middlename` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `patient_suffix` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_registered` date NOT NULL,
  `user_status` varchar(20) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_Id`, `user_firstname`, `user_middlename`, `user_lastname`, `patient_suffix`, `gender`, `dob`, `age`, `address`, `email`, `contact`, `password`, `image`, `date_registered`, `user_status`) VALUES
(39, 'Erwin3232', 'Cabag', 'Son1', '', 'Male', '2022-05-11', 21, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sonerwin12@gmail.com', '09359428963', '21232f297a57a5a743894a0e4a801fc3', '4297150.jpg', '2022-05-23', 'Confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_Id`);

--
-- Indexes for table `admin_reply`
--
ALTER TABLE `admin_reply`
 ADD PRIMARY KEY (`admin_reply_Id`);

--
-- Indexes for table `household_head`
--
ALTER TABLE `household_head`
 ADD PRIMARY KEY (`household_Id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`message_Id`);

--
-- Indexes for table `uploaded_file`
--
ALTER TABLE `uploaded_file`
 ADD PRIMARY KEY (`upload_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_reply`
--
ALTER TABLE `admin_reply`
MODIFY `admin_reply_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `household_head`
--
ALTER TABLE `household_head`
MODIFY `household_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
MODIFY `message_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `uploaded_file`
--
ALTER TABLE `uploaded_file`
MODIFY `upload_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
