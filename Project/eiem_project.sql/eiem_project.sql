-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2015 at 11:25 AM
-- Server version: 5.1.32
-- PHP Version: 5.2.9-1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eiem_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cateagory_master`
--

CREATE TABLE IF NOT EXISTS `cateagory_master` (
  `ct_code` varchar(255) NOT NULL,
  `ct_nm` varchar(255) NOT NULL,
  `ct_specification` varchar(255) NOT NULL,
  `ct_type` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  PRIMARY KEY (`ct_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cateagory_master`
--

INSERT INTO `cateagory_master` (`ct_code`, `ct_nm`, `ct_specification`, `ct_type`, `unit`) VALUES
('cmp', 'Computer', 'Desktop', 'Fixed Asset', 'pcs'),
('prn', 'Printer', 'Laser', 'Fixed Asset', 'pcs');

-- --------------------------------------------------------

--
-- Table structure for table `fault_details`
--

CREATE TABLE IF NOT EXISTS `fault_details` (
  `fault_id` int(11) unsigned zerofill NOT NULL,
  `sl_no` varchar(255) NOT NULL,
  `i_loation` varchar(255) NOT NULL,
  `fault` varchar(255) NOT NULL,
  `fault_details` varchar(255) NOT NULL,
  PRIMARY KEY (`fault_id`),
  UNIQUE KEY `fault_id` (`fault_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fault_details`
--

INSERT INTO `fault_details` (`fault_id`, `sl_no`, `i_loation`, `fault`, `fault_details`) VALUES
(00000000001, 'I1S1', 'B_BL_L1_M5', 'dont print it', 'printing problem'),
(00000000005, '222', 'B_BL_L2_M5', 'Display Problem', 'Moniter Problem'),
(01429986257, 'dfgdf', 'dfgdf', 'dfgdf', 'xdfdgdf'),
(01429987780, 'sdfsd', 'dfgf', 'dfgdf', 'fdgdfgdf'),
(01430240744, 'I22250', 'B_F_L1_M5', 'Mouse', 'Mouse is Damage'),
(01430249044, '000101', 'E_F_L3_M10', 'UPS', 'Power Problem');

-- --------------------------------------------------------

--
-- Table structure for table `fault_master`
--

CREATE TABLE IF NOT EXISTS `fault_master` (
  `fault_id` int(11) unsigned zerofill NOT NULL,
  `status_code` varchar(255) NOT NULL,
  `status_details` varchar(255) NOT NULL,
  `update_date` varchar(20) NOT NULL,
  `authority` varchar(255) NOT NULL,
  `update_by` varchar(255) NOT NULL,
  `user_id` int(11) unsigned zerofill NOT NULL,
  `book_date` varchar(20) NOT NULL,
  `clear_date` varchar(20) NOT NULL,
  PRIMARY KEY (`fault_id`),
  UNIQUE KEY `fault_id` (`fault_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fault_master`
--

INSERT INTO `fault_master` (`fault_id`, `status_code`, `status_details`, `update_date`, `authority`, `update_by`, `user_id`, `book_date`, `clear_date`) VALUES
(00000000001, 'FB', 'Fault_Booking', '01-05-2015 16:49:52', 'LM', 'Administrator', 00000000003, '', ''),
(00000000005, 'FB', 'Fault_Booking', '01-05-2015 16:36:34', 'LM', 'Administrator', 00000000003, '', ''),
(01429987780, 'RP', 'Repaired', '28-04-2015 22:37:41', 'Sumit', 'Administrator', 00000000003, '27-04-2015 22:35:43', '28-04-2015 22:37:41'),
(01429986257, 'RP', 'Repaired', '26-04-2015 09:22:16', 'LM', 'Administrator', 00000000003, '', ''),
(01430240744, 'SR', 'Sent_for_Repair', '01-05-2015 16:35:58', 'LM', 'Administrator', 00000000003, '28-04-2015 22:35:43', ''),
(01430249044, 'RP', 'Repir', '29-04-2015 01:03:08', 'LM', 'Administrator', 01430247618, '29-04-2015 00:54:03', '29-04-2015 01:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `register_user_master`
--

CREATE TABLE IF NOT EXISTS `register_user_master` (
  `users_id` int(11) unsigned zerofill NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `u_dept` varchar(255) NOT NULL,
  `last_log_in` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `date_of_birth` date NOT NULL,
  `phon_no` int(10) NOT NULL,
  `profile_pic` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_user_master`
--

INSERT INTO `register_user_master` (`users_id`, `first_name`, `last_name`, `u_dept`, `last_log_in`, `address`, `sex`, `date_of_birth`, `phon_no`, `profile_pic`) VALUES
(00000000003, 'Sumit', 'Samanta', 'CST', '01-05-2015 16:50:40', 'Sodpur', 'male', '2078-04-12', 1234512345, 'default/pic.png'),
(00000000001, 'Administrator', '', 'Logistic', '01-05-2015 13:41:05', 'EIEM', 'Male', '1976-04-15', 111111, 'default/pic.png'),
(01430247618, 'Shubham', 'Khan', 'CST', '29-04-2015 01:04:34', 'BIbarda', 'Male', '1995-04-10', 2147483647, '1430248960-IMG_20150411_080256.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `repair_master`
--

CREATE TABLE IF NOT EXISTS `repair_master` (
  `status_code` varchar(255) NOT NULL,
  `status_de` varchar(255) NOT NULL,
  PRIMARY KEY (`status_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repair_master`
--

INSERT INTO `repair_master` (`status_code`, `status_de`) VALUES
('FB', 'Fault_Booking'),
('ISP', 'Informed_to_Service_Provider'),
('SR', 'Sent_for_Repair'),
('RP', 'Repaired');

-- --------------------------------------------------------

--
-- Table structure for table `users_master`
--

CREATE TABLE IF NOT EXISTS `users_master` (
  `users_id` int(11) unsigned zerofill NOT NULL,
  `users_email` varchar(255) NOT NULL,
  `users_password` varchar(255) NOT NULL,
  `users_type` varchar(255) NOT NULL,
  `u_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_master`
--

INSERT INTO `users_master` (`users_id`, `users_email`, `users_password`, `users_type`, `u_status`) VALUES
(00000000003, 'xyz@gmail.com', '12345', 'User', 0),
(00000000001, 'admin@eiem.com', '12345', 'Administrator', 0),
(01430247618, 'shubhamkhanit@gmail.com', 'S12345k', 'User', 0);
