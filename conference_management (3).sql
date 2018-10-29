-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 03:53 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conference management`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `ao_id` int(11) NOT NULL,
  `about_us` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`ao_id`, `about_us`) VALUES
(1, 'we are here for you guys.\r\nthank you :)');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `password`, `code`) VALUES
(2, 'raka', 'raka@gmail.com', '123', 702433);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `text_id` int(11) NOT NULL,
  `u_text` longtext NOT NULL,
  `a_text` longtext,
  `u_email` varchar(255) NOT NULL,
  `a_email` varchar(255) DEFAULT NULL,
  `u_name` text NOT NULL,
  `a_name` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`text_id`, `u_text`, `a_text`, `u_email`, `a_email`, `u_name`, `a_name`) VALUES
(117, 'hey', NULL, 'mim@gmail.com', NULL, 'mim', NULL),
(118, 'hello', NULL, 'sara@gmail.com', NULL, 'mim', NULL),
(119, 'hi', NULL, 'nisa@gmail.com', NULL, 'nisa', NULL),
(120, 'hello', NULL, 'nisa@gmail.com', NULL, 'nisa', NULL),
(121, 'hi', NULL, 'jara@gmail.com', NULL, 'jara', NULL),
(122, 'ha ha ha', NULL, 'jara@gmail.com', NULL, 'jara', NULL),
(123, 'hi', NULL, 'mim@gmail.com', NULL, 'mim', NULL),
(124, 'hasib', NULL, 'mim@gmail.com', NULL, 'mim', NULL),
(125, 'where are u', NULL, 'mim@gmail.com', NULL, 'mim', NULL),
(126, 'hi', NULL, 'mahbub@gmail.com', NULL, 'mahbub', NULL),
(127, 'hello', NULL, 'mahbub@gmail.com', NULL, 'mahbub', NULL),
(128, 'how', NULL, 'mahbub@gmail.com', NULL, 'mahbub', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `code_id` int(11) NOT NULL,
  `code` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`code_id`, `code`) VALUES
(1, 188016);

-- --------------------------------------------------------

--
-- Table structure for table `conferences`
--

CREATE TABLE `conferences` (
  `con_id` int(11) NOT NULL,
  `conferencename` text NOT NULL,
  `date` date NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `venue` text NOT NULL,
  `conferenceroom` text NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `username` text NOT NULL,
  `manager_status` tinyint(1) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conferences`
--

INSERT INTO `conferences` (`con_id`, `conferencename`, `date`, `starttime`, `endtime`, `venue`, `conferenceroom`, `description`, `status`, `username`, `manager_status`, `email`) VALUES
(423, 'Wooden Name Badges', '2018-02-01', '04:00:00', '06:00:00', 'NWU', '1108', 'wood for life', 0, 'mim', 0, 'mim@gmail.com'),
(426, 'education', '2018-04-01', '03:00:00', '02:00:00', 'NSU', '1108', 'education', 1, 'hasib', 1, 'hasib@gmail.com'),
(427, 'conference3', '2018-01-01', '02:00:00', '01:00:00', 'NWU', '1203', 'conference3', 1, 'hasib', 1, 'hasib@gmail.com'),
(428, 'conference4', '2018-01-01', '02:00:00', '03:00:00', 'khulna university', '1108', 'conference4', 1, 'hasib', 1, 'hasib@gmail.com'),
(429, 'conference5', '2018-01-01', '01:00:00', '01:00:00', 'BUET', '1203', 'conference5', 1, 'hasib', 1, 'hasib@gmail.com'),
(430, 'conference6', '2019-01-01', '03:00:00', '05:00:00', 'KUET', '1203', 'conference6', 1, 'hasib', 1, 'hasib@gmail.com'),
(431, 'conference7', '2018-01-01', '03:00:00', '04:00:00', 'NSU', '1108', 'conference7', 1, 'hasib', 1, 'hasib@gmail.com'),
(432, 'conference8', '2018-01-01', '04:00:00', '04:00:00', 'BUET', '123354', 'conference8', 1, 'hasib', 1, 'hasib@gmail.com'),
(433, 'conference9', '2018-01-01', '03:00:00', '04:00:00', 'KUET', '1203', 'conference9', 1, 'hasib', 1, 'hasib@gmail.com'),
(434, 'conference10', '2018-01-01', '03:00:00', '16:00:00', 'NSU', '1108', 'conference10', 1, 'hasib', 1, 'hasib@gmail.com'),
(435, 'conference11', '2018-01-01', '03:00:00', '01:00:00', 'khulna university', '1108', 'conference11', 1, 'hasib', 1, 'hasib@gmail.com'),
(436, 'conference12', '2018-01-01', '02:01:00', '01:00:00', 'BUET', '1315', 'conference12', 1, 'hasib', 1, 'hasib@gmail.com'),
(441, 'conference18', '2018-01-01', '03:00:00', '04:00:00', 'NWU', '1203', 'conference18', 1, 'mim', 1, 'mim@gmail.com'),
(442, 'conference19', '2018-02-01', '03:00:00', '03:00:00', 'NSU', '1108', 'conference19', 1, 'mim', 1, 'mim@gmail.com'),
(443, 'conference20', '2018-01-01', '03:00:00', '04:00:00', 'NWU', '1203', 'conference20', 1, 'mim', 1, 'mim@gmail.com'),
(444, 'conference21', '2018-01-01', '02:00:00', '03:00:00', 'NWU', '1203', 'conference21', 0, 'mim', 0, 'mim@gmail.com'),
(446, 'Wooden Name Badges', '2018-02-01', '03:00:00', '04:01:00', 'NSU', '1108', 'wood for life', 0, 'hasib', 0, 'dipu@gmail.com'),
(447, 'globalaizasion', '2018-01-01', '03:00:00', '04:00:00', 'NSU', '1108', 'globalaizasion', 0, 'hasib', 0, 'dipu@gmail.com'),
(448, 'astronomy', '2018-01-01', '03:00:00', '06:00:00', 'KUET', '120031', 'astronomy', 1, 'abir', 1, 'abir@gmail.com'),
(449, 'Wooden Name Badges', '2019-02-01', '03:00:00', '14:01:00', 'NWU', '1315', 'Awareness for Aids', 1, 'sara', 1, 'sara@gmail.com'),
(451, 'physics', '2018-02-01', '05:00:00', '05:00:00', 'kuet', '1204', 'wood', 1, 'hasib', 1, 'hasib@gmail.com'),
(452, 'conference', '2018-06-03', '05:00:00', '05:00:00', 'NSU', '1205', 'aids', 0, 'hasib', 0, 'hasib@gmail.com'),
(453, 'conference', '2018-06-03', '05:00:00', '05:00:00', 'NSU', '1205', 'aids', 1, 'hasib', 1, 'hasib@gmail.com'),
(454, 'wood', '2020-02-03', '01:00:00', '03:00:00', 'RUET', '1205', 'conference', 1, 'hasib', 1, 'hasib@gmail.com'),
(455, 'ICCIT', '2019-01-01', '02:00:00', '05:00:00', 'NSU', '1333', 'ICCIT', 1, 'rafa', 1, 'rafa@gmail.com'),
(456, 'chemistry', '2018-02-01', '05:00:00', '16:02:00', 'AIUB', '1333', 'chemistry', 1, 'rafa', 1, 'rafa@gmail.com'),
(457, 'math', '2019-01-01', '17:00:00', '17:00:00', 'Ku', '1203', 'math', 1, 'mim', 1, 'mim@gmail.com'),
(458, 'photography', '2018-02-01', '04:00:00', '17:00:00', 'NWU', '302', 'photography', 1, 'niloy', 1, 'niloy@gmail.com'),
(459, 'cse', '2019-01-03', '16:00:00', '17:00:00', 'AIUB', '301', 'CSE', 1, 'rafa', 1, 'rafa@gmail.com'),
(460, 'Game', '2018-01-02', '12:02:00', '13:05:00', 'Chittagong', '421', 'Game Development', 1, 'niloy', 1, 'niloy@gmail.com'),
(461, 'space station', '2019-01-01', '04:00:00', '06:00:00', 'kuet', '1205', 'space station', 1, 'rafa', 1, 'rafa@gmail.com'),
(462, 'confere100', '2019-02-01', '04:00:00', '06:00:00', 'kuet', '1205', 'conference100', 1, 'shikha', 1, 'shikha@gmail.com'),
(463, 'conference101', '2018-03-01', '16:00:00', '05:00:00', 'NSU', '1205', 'conference101', 0, 'shikha', 0, 'shikha@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `deleted_questions`
--

CREATE TABLE `deleted_questions` (
  `id` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `answer` longtext NOT NULL,
  `asker` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `q_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deleted_questions`
--

INSERT INTO `deleted_questions` (`id`, `question`, `answer`, `asker`, `email`, `q_id`) VALUES
(40, 'why my conference is not accepted?', 'ok, i will accept it', 'jara', 'jara@gmail.com', 34),
(42, 'no', 'null', 'hasib', 'dipu@gmail.com', 1),
(43, 'how to creat a conference?', 'check our news', 'safa', 'safa@gmail.com', 1),
(44, 'how to submit paper?', 'check our news.\r\nhttp://localhost/conference/login/news.php', 'nisa', 'nisa@gmail.com', 1),
(46, 'how can i use', 'wait', 'mahbub', 'mahbub@gmail.com', 3),
(47, 'hey?', 'hola', 'mim', 'mim@gmail.com', 1),
(49, 'i cant creat any conference', 'ok i will see\r\n', 'hasib', 'sara@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `username`, `email`) VALUES
(260, 'mim', 'mim@gmail.com'),
(261, 'nisa', 'nisa@gmail.com'),
(262, 'hiya', 'rowwshan@gmail.com'),
(263, 'abir', 'abir@gmail.com'),
(264, 'hasib', 'hasib@gmail.com'),
(265, 'sara', 'sara@gmail.com'),
(266, 'jara', 'jara@gmail.com'),
(267, 'fiha', 'fiha@gmail.com'),
(268, 'rafa', 'rafa@gmail.com'),
(269, 'dipu', 'dipu@gmail.com'),
(270, 'safa', 'safa@gmail.com'),
(271, 'shikha', 'shikha@gmail.com'),
(272, 'niru', 'niru@gmail.com'),
(273, 'diya', 'diya@gmail.com'),
(274, 'mahbub', 'mahbub@gmail.com'),
(275, 'niloy', 'niloy@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news`) VALUES
(1, 'HELLO');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `not_id` int(11) NOT NULL,
  `conferencename` text NOT NULL,
  `date` date NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `venue` text NOT NULL,
  `conferenceroom` text NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`not_id`, `conferencename`, `date`, `starttime`, `endtime`, `venue`, `conferenceroom`, `description`, `status`, `username`) VALUES
(6, 'AIds', '2018-01-01', '03:00:00', '05:00:00', 'KUET', '1108', 'Awareness for Aids', 1, 'nisa'),
(36, 'conference31', '2018-02-01', '05:00:00', '17:00:00', 'KUET', '1315', 'conference31', 1, 'nisa'),
(43, 'conference', '2018-06-03', '05:00:00', '05:00:00', 'NSU', '1205', 'aids', 1, 'hasib'),
(44, 'conference', '2018-06-03', '05:00:00', '05:00:00', 'NSU', '1205', 'aids', 0, 'hasib'),
(46, 'chemistry', '2018-02-01', '05:00:00', '16:02:00', 'AIUB', '1333', 'chemistry', 1, 'rafa'),
(47, 'math', '2019-01-01', '17:00:00', '17:00:00', 'Ku', '1203', 'math', 1, 'mim'),
(48, 'photography', '2018-02-01', '04:00:00', '17:00:00', 'NWU', '302', 'photography', 1, 'raka'),
(49, 'Game', '2018-01-02', '12:02:00', '13:05:00', 'Chittagong', '421', 'Game Development', 1, 'raka'),
(50, 'space station', '2019-01-01', '04:00:00', '06:00:00', 'kuet', '1205', 'space station', 1, 'raka'),
(51, 'confere100', '2019-02-01', '04:00:00', '06:00:00', 'kuet', '1205', 'conference100', 1, 'shikha'),
(52, 'conference101', '2018-03-01', '16:00:00', '05:00:00', 'NSU', '1205', 'conference101', 0, 'shikha');

-- --------------------------------------------------------

--
-- Table structure for table `notifications1`
--

CREATE TABLE `notifications1` (
  `paragraph` longtext NOT NULL,
  `not_id1` int(11) NOT NULL,
  `username` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `olduser`
--

CREATE TABLE `olduser` (
  `olduser_id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` bigint(20) NOT NULL,
  `reviewer_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `papers_id` int(11) NOT NULL,
  `papers` varchar(255) NOT NULL,
  `submission_date` date NOT NULL,
  `submitted_by` text NOT NULL,
  `conferencename` text NOT NULL,
  `title` text,
  `abstract` longtext,
  `review` int(11) DEFAULT NULL,
  `comment` longtext,
  `con_id` int(11) NOT NULL,
  `reviewed_by` text,
  `author1` text,
  `email1` varchar(255) DEFAULT NULL,
  `author2` text,
  `email2` varchar(255) DEFAULT NULL,
  `author3` text,
  `email3` varchar(255) DEFAULT NULL,
  `author4` text,
  `email4` varchar(255) DEFAULT NULL,
  `author5` text,
  `email5` varchar(255) DEFAULT NULL,
  `num_author` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `complain` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `answer` longtext,
  `q_status` tinyint(1) DEFAULT NULL,
  `asker` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `question`, `complain`, `email`, `answer`, `q_status`, `asker`) VALUES
(1, 'how to submit a paper', 'no', 'niloy@gmail.com', 'hzsvs', 1, 'niloy');

-- --------------------------------------------------------

--
-- Table structure for table `questions_outside`
--

CREATE TABLE `questions_outside` (
  `q_id` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `answer` longtext NOT NULL,
  `q_status` tinyint(1) DEFAULT NULL,
  `do` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_outside`
--

INSERT INTO `questions_outside` (`q_id`, `question`, `email`, `answer`, `q_status`, `do`) VALUES
(18, 'what?', 'abid@gmail.com', 'yes', 1, 0),
(19, 'hi', 'shikha@gmail.com', 'hola', 1, 0),
(20, 'how are u', 'mim@gmail.com', 'fine', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviewer`
--

CREATE TABLE `reviewer` (
  `rev_id` int(11) NOT NULL,
  `papers` varchar(255) NOT NULL,
  `submission_date` date NOT NULL,
  `submitted_by` text NOT NULL,
  `conferencename` text NOT NULL,
  `username` text,
  `email` varchar(255) DEFAULT NULL,
  `assigned_by` text NOT NULL,
  `review` int(11) DEFAULT NULL,
  `comment` longtext,
  `con_id` int(11) DEFAULT NULL,
  `papers_id` int(11) DEFAULT NULL,
  `review_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` bigint(20) DEFAULT NULL,
  `reviewer_status` tinyint(1) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `username`, `password`, `code`, `reviewer_status`, `email`) VALUES
(66, 'abir', 'hasan', 'abir', '123', 950538, 0, 'abir@gmail.com'),
(67, 'rowshan', 'maliha', 'hiya', '123', NULL, 0, 'rowwshan@gmail.com'),
(68, 'nisa', 'nisa', 'nisa', '123', 274894, 0, 'nisa@gmail.com'),
(72, 'tasnim', 'mim', 'mim', '123', 310265, 0, 'mim@gmail.com'),
(73, 'hasib', 'uddin', 'hasib', '123', 992409, 0, 'hasib@gmail.com'),
(74, 'sara', 'sara', 'sara', '123', 195733, 0, 'sara@gmail.com'),
(75, 'jara', 'jara', 'jara', '123', NULL, 0, 'jara@gmail.com'),
(76, 'fiha', 'fiha', 'fiha', '123', NULL, 0, 'fiha@gmail.com'),
(77, 'rafa', 'rafa', 'rafa', '123', 569372, 0, 'rafa@gmail.com'),
(78, 'dipu', 'dipu', 'dipu', '123', NULL, 0, 'dipu@gmail.com'),
(79, 'lara', 'lara', 'lara', '123', NULL, 0, 'lara@email.com'),
(80, 'safa', 'kabir', 'safa ', '123', NULL, 0, 'safa@gmail.com'),
(81, 'safa', 'kabir', 'safa', '123', NULL, 0, 'safa@gmail.com'),
(82, 'shikha', 'khan', 'shikha', '123', NULL, 0, 'shikha@gmail.com'),
(83, 'niru', 'niru', 'niru', '123', NULL, 0, 'niru@gmail.com'),
(84, 'niru', 'niru', 'niru', '123', NULL, 0, 'niru@gmail.com'),
(85, 'diya', 'hasan', 'diya', '123', NULL, 0, 'diya@gmail.com'),
(86, 'diya', 'hasan', 'diya', '123', NULL, 0, 'diya@gmail.com'),
(87, 'diya', 'hasan', 'diya', '123', NULL, 0, 'diya@gmail.com'),
(88, 'diya', 'hasan', 'diya', '123', NULL, 0, 'diya@gmail.com'),
(89, 'nijam', 'nijam', 'nijam', '123', NULL, 0, 'nijam@gmail.com'),
(90, 'nijam', 'nijam', 'nijam', '123', NULL, 0, 'nijam@gmail.com'),
(91, 'mahbub', 'khan', 'mahbub', '765', 308679, 0, 'mahbub@gmail.com'),
(92, 'mahbub', 'khan', 'mahbub', '765', 308679, 0, 'mahbub@gmail.com'),
(93, 'niloy', 'raihan', 'niloy', '123', NULL, 0, 'niloy@gmail.com'),
(94, 'niloy', 'raihan', 'niloy', '123', NULL, 0, 'niloy@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`ao_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`text_id`);

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`code_id`);

--
-- Indexes for table `conferences`
--
ALTER TABLE `conferences`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `deleted_questions`
--
ALTER TABLE `deleted_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`not_id`);

--
-- Indexes for table `notifications1`
--
ALTER TABLE `notifications1`
  ADD PRIMARY KEY (`not_id1`);

--
-- Indexes for table `olduser`
--
ALTER TABLE `olduser`
  ADD PRIMARY KEY (`olduser_id`);

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`papers_id`),
  ADD KEY `con_id` (`con_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `questions_outside`
--
ALTER TABLE `questions_outside`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `reviewer`
--
ALTER TABLE `reviewer`
  ADD PRIMARY KEY (`rev_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `ao_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `text_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `code_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `conferences`
--
ALTER TABLE `conferences`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=464;

--
-- AUTO_INCREMENT for table `deleted_questions`
--
ALTER TABLE `deleted_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `not_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `notifications1`
--
ALTER TABLE `notifications1`
  MODIFY `not_id1` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `olduser`
--
ALTER TABLE `olduser`
  MODIFY `olduser_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `papers`
--
ALTER TABLE `papers`
  MODIFY `papers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions_outside`
--
ALTER TABLE `questions_outside`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reviewer`
--
ALTER TABLE `reviewer`
  MODIFY `rev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
