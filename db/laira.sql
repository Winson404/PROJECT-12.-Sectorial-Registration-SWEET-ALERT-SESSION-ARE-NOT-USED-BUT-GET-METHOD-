-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 04:06 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_Id`, `firstname`, `middlename`, `lastname`, `suffix`, `gender`, `dob`, `age`, `address`, `email`, `contact`, `password`, `image`, `date_registered`, `user_type`) VALUES
(1, 'Erwin', 'Cabag', 'Son', '', 'Male', '2022-04-08', 23, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'admin@gmail.com', '09359428963', '21232f297a57a5a743894a0e4a801fc3', 'minimalism-1644666519306-6515.jpg', '2022-04-17', 'Admin'),
(2, 'Erwin', 'Cabag', 'Son', '', 'Female', '2022-09-01', 1, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sonerwin1fdgd2@gmail.com', '09359428963', '4124bc0a9335c27f086f24ba207a4912', '4.jpg', '2022-09-17', 'Admin');

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
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
`documents_Id` int(11) NOT NULL,
  `household_Id` int(11) NOT NULL,
  `ID_2` varchar(255) NOT NULL,
  `Barangay_Certification` varchar(255) NOT NULL,
  `Punong_Barangay` varchar(255) NOT NULL,
  `Walang_Kinakasama` varchar(255) NOT NULL,
  `Certificate_Ng_Anak` varchar(255) NOT NULL,
  `certificate_choices` varchar(255) NOT NULL,
  `Treasurer_Certification` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`documents_Id`, `household_Id`, `ID_2`, `Barangay_Certification`, `Punong_Barangay`, `Walang_Kinakasama`, `Certificate_Ng_Anak`, `certificate_choices`, `Treasurer_Certification`) VALUES
(1, 49, '12 TEMPLATE.jpeg', '6.jpg', '7.jpg', '8.jpg', '9.jpg', '10.jpg', '12 TEMPLATE.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `documents_pwd`
--

CREATE TABLE IF NOT EXISTS `documents_pwd` (
`documents_pwd_Id` int(11) NOT NULL,
  `household_Id` int(11) NOT NULL,
  `Certification_of_Disability` varchar(255) NOT NULL,
  `Blood_Type` varchar(255) NOT NULL,
  `Body_Picture` varchar(255) NOT NULL,
  `ID_Picture` varchar(255) NOT NULL,
  `Copy_Birth_Certificate` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `documents_pwd`
--

INSERT INTO `documents_pwd` (`documents_pwd_Id`, `household_Id`, `Certification_of_Disability`, `Blood_Type`, `Body_Picture`, `ID_Picture`, `Copy_Birth_Certificate`) VALUES
(9, 51, 'sample.png', '7.jpg', '9.jpg', '4.jpg', '9.jpg'),
(16, 49, '7.jpg', '6.jpg', '9.jpg', '4.jpg', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `documents_senior`
--

CREATE TABLE IF NOT EXISTS `documents_senior` (
`documents_solo_parent_Id` int(11) NOT NULL,
  `household_Id` int(11) NOT NULL,
  `Birth_certificate` varchar(255) NOT NULL,
  `Marriage_contract` varchar(255) NOT NULL,
  `Valid_Id` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `documents_senior`
--

INSERT INTO `documents_senior` (`documents_solo_parent_Id`, `household_Id`, `Birth_certificate`, `Marriage_contract`, `Valid_Id`) VALUES
(10, 54, '5.jpg', '12 TEMPLATE.jpeg', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `household_head`
--

CREATE TABLE IF NOT EXISTS `household_head` (
`household_Id` int(11) NOT NULL,
  `pwdnumber` varchar(100) NOT NULL,
  `date_issued` varchar(255) NOT NULL,
  `id_reference` varchar(255) NOT NULL,
  `solo_parent` varchar(20) NOT NULL,
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
  `type_employer` varchar(255) NOT NULL,
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
  `skills` text NOT NULL,
  `action` varchar(25) NOT NULL DEFAULT 'Restore',
  `account_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `health_condition` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `GSIS` varchar(255) NOT NULL,
  `SSS` varchar(255) NOT NULL,
  `PVAO` varchar(255) NOT NULL,
  `other_pension` varchar(255) NOT NULL,
  `alone` int(255) NOT NULL,
  `no_ofyears` varchar(255) NOT NULL,
  `IP_s` varchar(255) NOT NULL,
  `bedridden` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `other_sector` varchar(255) NOT NULL,
  `name_of_association` varchar(255) NOT NULL,
  `address_association` varchar(255) NOT NULL,
  `name_membership` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `officer_date_selected` varchar(255) NOT NULL,
  `cause_disability` varchar(255) NOT NULL,
  `community_activities` varchar(255) NOT NULL,
  `Economic` varchar(255) NOT NULL,
  `Social_Emotional` varchar(255) NOT NULL,
  `Health` varchar(255) NOT NULL,
  `health_specify` varchar(255) NOT NULL,
  `Housing` varchar(255) NOT NULL,
  `Toilet_Facility` varchar(255) NOT NULL,
  `Electricity` varchar(255) NOT NULL,
  `Community_Service` varchar(255) NOT NULL,
  `Specific_Needs` varchar(255) NOT NULL,
  `v_code` varchar(10) NOT NULL,
  `verified` varchar(20) NOT NULL DEFAULT 'False'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=114 ;

--
-- Dumping data for table `household_head`
--

INSERT INTO `household_head` (`household_Id`, `pwdnumber`, `date_issued`, `id_reference`, `solo_parent`, `firstname`, `middlename`, `lastname`, `email`, `contact_number`, `password`, `sectorial_registration`, `causeofbeingsoloparent`, `typeofdisabilities`, `application_type`, `address`, `dob`, `age`, `gender`, `place_of_birth`, `status`, `educational_attainment`, `employment_status`, `work_name`, `type_of_work`, `type_employer`, `salary`, `source_of_income`, `religion`, `part_of_tribe`, `program_services`, `num_fam_members`, `assets`, `living_with`, `first_child`, `secon_child`, `3rd_child`, `fourth_child`, `fifth_child`, `sixth_child`, `seventh_child`, `eight_child`, `nineth_child`, `tenth_child`, `eleventh_child`, `twelveth_child`, `skills`, `action`, `account_status`, `health_condition`, `occupation`, `GSIS`, `SSS`, `PVAO`, `other_pension`, `alone`, `no_ofyears`, `IP_s`, `bedridden`, `pwd`, `other_sector`, `name_of_association`, `address_association`, `name_membership`, `position`, `officer_date_selected`, `cause_disability`, `community_activities`, `Economic`, `Social_Emotional`, `Health`, `health_specify`, `Housing`, `Toilet_Facility`, `Electricity`, `Community_Service`, `Specific_Needs`, `v_code`, `verified`) VALUES
(49, 'dsadad', 'dsadas', 'SSS,GSIS,PWD,', '', 'dada', 'userId', 'userId', 'sonerwiDn12@gmail.com', '9359428963', '21232f297a57a5a743894a0e4a801fc3', 'Senior Citizen,', 'gfghhfg', 'dadas', '', 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '2022-07-16', '32', 'Male', 'dgdfgd', 'Single', 'College Level', 'Unemployed', 'user_Id', 'N/A', '', '', 'user_Id', 'user_Id', 'Yes', 'ECCD', '43', 'user_Id', 'Parents', 'Erwin Cabag Son - 2022-07-07 - 32 - Male - user_Id - ', ' -  -  -  - ', ' -  -  -  - ', ' -  -  -  - ', ' -  -  -  - ', ' -  -  -  - ', ' -  -  -  - ', ' -  -  -  - ', ' -  -  -  - ', ' -  -  -  - ', ' -  -  -  - ', ' -  -  -  - ', '', 'Restore', 'Pending', '', '', '', '', '', '', 0, '', 'fdsfs', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'dsada', '', 'False'),
(50, '', '', '', '', 'dd', 'Cabag', 'Son', 'sonerwfdfsdin12@gmail.com', '9359428963', '1aabac6d068eef6a7bad3fdf50a05cc8', 'Solo Parent,', 'Widow', '', 'Renewal,', 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '2022-07-21', '34', 'Female', 'dgsd', 'Divorced', 'High School Level', 'Self-employed', 'dgfdgd', 'Emergency', '', 'gdgfd', 'gfdgdf', 'gfd', 'No', 'ECCD', '54', 'gfdgdfg', 'Siblings', 'Erwin Cabag Son,2022-07-06,34,Female,fdgfd,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', 'gfdgfdgd', 'Restore', 'Pending', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'False'),
(51, '', '', '', '', 'cc', 'cc', 'cc', 'sonerwin12@gmail.com', '432', 'e0323a9039add2978bf5b49550572c7c', 'PWD,', '', 'gfdgd', 'New,', 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '2022-07-23', '43', 'Male', 'fdgfd', 'Married', 'College Graduate', 'Employed', 'gfd', 'Permanent', '', 'gfd', 'gfd', 'gfd', 'Yes', 'ECCD', '5', 'gfdgd', 'Siblings', 'Erwin Cabag Son,2022-07-05,34,Male,gfdgd,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', ',,,,', 'gfdgdfgdf', 'Restore', 'Approved', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'False'),
(111, '', '', '', '', 'Erwin', 'Cabag', 'Son', 'sonerwin12@gmail.com', '09359428963', '36eba1e1e343279857ea7f69a597324e', 'Solo Parent,', '', '', 'New,', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Restore', 'Pending', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '231566', 'False'),
(112, '', '', '', '', 'Erwin', 'Cabag', 'Son', 'sonerwin12@gmail.com', '09359428963', '633de4b0c14ca52ea2432a3c8a5c4c31', 'Solo Parent,', '', '', 'New,', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Restore', 'Pending', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'False'),
(113, '', '', '', '', 'Erwin', 'Cabag', 'Son', 'sonerwin12fds@gmail.com', '09359428963', '1aabac6d068eef6a7bad3fdf50a05cc8', 'Solo Parent,', '', '', 'New,', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Restore', 'Pending', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '320724', 'True');

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
-- Table structure for table `reason`
--

CREATE TABLE IF NOT EXISTS `reason` (
`reason_Id` int(11) NOT NULL,
  `household_Id` int(11) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `reason`
--

INSERT INTO `reason` (`reason_Id`, `household_Id`, `reason`) VALUES
(1, 54, 'test2'),
(3, 42, 'gaga'),
(4, 53, 'fe');

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
-- Indexes for table `documents`
--
ALTER TABLE `documents`
 ADD PRIMARY KEY (`documents_Id`);

--
-- Indexes for table `documents_pwd`
--
ALTER TABLE `documents_pwd`
 ADD PRIMARY KEY (`documents_pwd_Id`);

--
-- Indexes for table `documents_senior`
--
ALTER TABLE `documents_senior`
 ADD PRIMARY KEY (`documents_solo_parent_Id`);

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
-- Indexes for table `reason`
--
ALTER TABLE `reason`
 ADD PRIMARY KEY (`reason_Id`);

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
MODIFY `admin_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `admin_reply`
--
ALTER TABLE `admin_reply`
MODIFY `admin_reply_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
MODIFY `documents_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `documents_pwd`
--
ALTER TABLE `documents_pwd`
MODIFY `documents_pwd_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `documents_senior`
--
ALTER TABLE `documents_senior`
MODIFY `documents_solo_parent_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `household_head`
--
ALTER TABLE `household_head`
MODIFY `household_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
MODIFY `message_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `reason`
--
ALTER TABLE `reason`
MODIFY `reason_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
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
