-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2015 at 02:00 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iecsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `college_details`
--

CREATE TABLE IF NOT EXISTS `college_details` (
  `name` varchar(40) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `univ_id` int(11) NOT NULL,
  `branch_details` mediumtext NOT NULL,
  `college_detail` mediumtext NOT NULL,
  UNIQUE KEY `branch` (`branch`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='All colleges and their details';

--
-- Dumping data for table `college_details`
--

INSERT INTO `college_details` (`name`, `branch`, `city`, `univ_id`, `branch_details`, `college_detail`) VALUES
('SRM University', 'Aerospace Engineering', 'Chennai', 1, 'Aerospace Engineering ', 'Private No.1 Engineering College in India.'),
('SRM University', 'Automobile Engineering ', 'Chennai', 1, 'Automobile Engineering ', 'Private No.1 Engineering College in India.'),
('SRM University', 'Biomedical Engineering', 'Chennai', 1, 'Biomedical Engineering', 'Private No.1 Engineering College in India.'),
('SRM University', 'Biotechnology ', 'Chennai', 1, 'Biotechnology ', 'Private No.1 Engineering College in India.'),
('SRM University', 'Chemical Engineering', 'Chennai', 1, 'Chemical Engineering', 'Private No.1 Engineering College in India.'),
('SRM University', 'Civil Engineering', 'Chennai', 1, 'Civil Engineering', 'Private No.1 Engineering College in India.'),
('SRM University', 'CSE', 'Chennai', 1, 'Computer Science and Engineering', 'Private No.1 Engineering College in India.'),
('SRM University', 'ECE', 'Chennai', 1, 'Electronics and Communication Engineering (ECE)', 'Private No.1 Engineering College in India.'),
('SRM University', 'EEE', 'Chennai', 1, 'Electrical and Electronics Engineering (EEE)', 'Private No.1 Engineering College in India.'),
('SRM Univeristy', 'EIE', 'Chennai', 1, 'Electronics and Instrumentation Engineering (EIE)', 'Private No.1 Engineering College in India.'),
('SRM University', 'Genetic Engineering', 'Chennai', 1, 'Genetic Engineering', 'Private No.1 Engineering College in India.'),
('SRM University', 'IT', 'Chennai', 1, 'Information Technology (IT)', 'Private No.1 Engineering College in India.'),
('SRM University', 'ITE', 'Chennai', 1, 'Information and Telecommunication Engineering (ITE)', 'Private No.1 Engineering College in India.'),
('SRM University', 'Mechanical Engineering', 'Chennai', 1, 'Mechanical Engineering', 'Private No.1 Engineering College in India.'),
('SRM University', 'Mechatronics Engineering', 'Chennai', 1, 'Mechatronics Engineering', 'Private No.1 Engineering College in India.'),
('SRM Univerity', 'Nanotechnology', 'Chennai', 1, 'Nanotechnology', 'Private No.1 Engineering College in India.'),
('SRM University', 'Software Engineering', 'Chennai', 1, 'Software Engineering', 'Private No.1 Engineering College in India.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_answer`
--

CREATE TABLE IF NOT EXISTS `tb_answer` (
  `question_id` int(11) NOT NULL,
  `answer` mediumtext NOT NULL,
  `upvote` int(11) NOT NULL,
  `downvote` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `answer_id` (`answer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='All details of answer answered by users.' AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tb_answer`
--

INSERT INTO `tb_answer` (`question_id`, `answer`, `upvote`, `downvote`, `user_id`, `answer_id`, `answer_post_date`) VALUES
(6, 'Sri Ram Memorial', 0, 0, 0, 1, '2015-02-21 18:04:00'),
(3, 'xyz', 0, 0, 0, 2, '2015-02-21 18:05:22'),
(5, 'EEE', 0, 0, 0, 3, '2015-02-21 18:05:32'),
(5, 'Mech', 0, 0, 0, 4, '2015-02-21 18:05:38'),
(3, 'Ghanta placement!!', 0, 0, 0, 5, '2015-02-21 18:14:29'),
(5, 'Aero space', 0, 0, 0, 6, '2015-02-21 19:33:58'),
(1, 'It has four branches all over the India\r\n', 0, 0, 0, 7, '2015-02-22 00:02:45'),
(1, 'Good College', 0, 0, 0, 9, '2015-02-23 02:21:10'),
(1, 'It is Multi Stream Engineering College!!', 0, 0, 0, 10, '2015-02-23 02:21:28'),
(2, 'CSE,EEE,ECE,BioTech', 0, 0, 0, 11, '2015-02-23 03:30:42'),
(7, 'Its depends upon the branch you are being Selecting.\r\nCSE:300 students\r\nEEE:400 students', 0, 0, 0, 12, '2015-02-23 04:41:50'),
(7, 'CSE :1000 students\r\nB.Tech: 6000 students\r\netc..', 0, 0, 0, 13, '2015-02-23 04:42:54'),
(8, 'DEEBA kHANNA', 0, 0, 0, 14, '2015-02-23 05:18:57'),
(8, 'SELVA', 0, 0, 0, 15, '2015-02-23 05:19:27'),
(9, '30LACS ', 0, 0, 0, 16, '2015-02-23 05:26:49'),
(9, '50lacs', 0, 0, 0, 17, '2015-02-23 05:27:45');

-- --------------------------------------------------------

--
-- Table structure for table `tb_question`
--

CREATE TABLE IF NOT EXISTS `tb_question` (
  `question` mediumtext NOT NULL,
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `answer_bit` int(11) NOT NULL,
  `question_post_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Details of the questions posted by user.' AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tb_question`
--

INSERT INTO `tb_question` (`question`, `question_id`, `user_id`, `answer_bit`, `question_post_date`) VALUES
('Tell me About SRM University?', 1, 0, 0, '0000-00-00 00:00:00'),
('What are the branches in SRM University?', 2, 0, 0, '0000-00-00 00:00:00'),
('What are the placement criteria ?', 3, 0, 0, '0000-00-00 00:00:00'),
('What is Average Package in SRM?', 4, 0, 0, '2015-02-21 08:31:47'),
('What are the branches in SRM University?', 5, 0, 0, '2015-02-21 17:53:14'),
('What is full form of SRM ?', 6, 0, 0, '2015-02-21 18:03:43'),
('How many Students are there in SRM University?', 7, 0, 0, '2015-02-23 04:40:42'),
('Who is the Best Faculty in SRM?', 8, 0, 0, '2015-02-23 05:18:02'),
('Highest Placement in SRM University?', 9, 0, 0, '2015-02-23 05:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tags`
--

CREATE TABLE IF NOT EXISTS `tb_tags` (
  `tags` varchar(100) NOT NULL,
  `qid` int(11) NOT NULL,
  KEY `tags` (`tags`),
  KEY `tags_2` (`tags`),
  KEY `qid` (`qid`),
  KEY `qid_2` (`qid`),
  KEY `index_tags` (`tags`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tags`
--

INSERT INTO `tb_tags` (`tags`, `qid`) VALUES
('srm', 1),
('srm', 2),
('srm', 4),
('srm', 5),
('srm', 6),
('srm', 7),
('srm', 8),
('srm', 9),
('About', 1),
('placement', 3),
('placement', 9),
('Highest', 9),
('package', 4),
('branche', 2),
('branche', 3),
('student', 7),
('faculty', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `college_id` int(20) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `year_of_admission` date NOT NULL,
  `email` varchar(40) NOT NULL,
  `no_of_que_posted` int(11) NOT NULL,
  `no_of_ans_posted` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Details of users.' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `college_id`, `branch`, `year_of_admission`, `email`, `no_of_que_posted`, `no_of_ans_posted`) VALUES
(1, 'prabhunath', 'prabhunath', 0, '', '0000-00-00', 'prabhu@gmail.com', 0, 0),
(2, 'shashi', 'shashi', 0, '', '0000-00-00', 'shashi@gmail.com', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
