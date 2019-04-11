-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 12:16 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('55892169bf6a7', '55892169d2efc'),
('5589216a3646e', '5589216a48722'),
('558922117fcef', '5589221195248'),
('55892211e44d5', '55892211f1fa7'),
('558922894c453', '558922895ea0a'),
('558922899ccaa', '55892289aa7cf'),
('558923538f48d', '558923539a46c'),
('55892353f05c4', '55892354051be'),
('558973f4389ac', '558973f462e61'),
('558973f4c46f2', '558973f4d4abe'),
('558973f51600d', '558973f526fc5'),
('558973f55d269', '558973f57af07'),
('558973f5abb1a', '558973f5e764a'),
('5589751a63091', '5589751a81bf4'),
('5589751ad32b8', '5589751adbdbd'),
('5589751b304ef', '5589751b3b04d'),
('5589751b749c9', '5589751b9a98c'),
('5ca932dc9a765', '5ca932dcbe5fe'),
('5ca932dd0c013', '5ca932dd16150'),
('5ca932dd4cfbc', '5ca932dd5ff62'),
('5cad25495e82a', '5cad2549792a5'),
('5caf0943e62d4', '5caf09440fcc6'),
('5caf09446c1de', '5caf094474094'),
('5caf0944b53ed', '5caf0944c14f1');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `cid` int(11) NOT NULL,
  `sub_name` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `sub_name`, `course`, `timestamp`) VALUES
(21, 'Hemant', 'DSA', '2019-04-09 20:23:27'),
(25, 'Hemant', 'JAVA', '2019-04-09 20:33:20'),
(26, 'Hemant', 'CPP', '2019-04-09 20:47:26'),
(27, 'Hemant', 'CPP', '2019-04-09 20:47:32'),
(28, 'Hemant', 'DSA', '2019-04-09 20:47:48'),
(29, 'Hemant', 'DSA', '2019-04-09 20:58:54'),
(30, 'Hemant', 'DSA', '2019-04-09 20:58:57'),
(31, 'Hemant', 'DSA', '2019-04-09 20:59:02'),
(32, 'Hemant', 'DSA', '2019-04-09 20:59:50'),
(33, 'Hemant', 'JAVA', '2019-04-09 20:59:52'),
(34, 'Hemant', 'DSA', '2019-04-09 20:59:55'),
(35, 'Hemant', 'CPP', '2019-04-09 20:59:56'),
(36, 'Hemant', 'JAVA', '2019-04-09 21:03:25'),
(37, 'Hemant', 'JAVA', '2019-04-09 21:03:27'),
(38, 'Hemant', 'JAVA', '2019-04-09 21:04:12'),
(39, 'Hemant', 'JAVA', '2019-04-09 21:04:54'),
(40, 'Hemant', 'JAVA', '2019-04-09 21:16:52'),
(41, 'Hemant', 'CPP', '2019-04-09 21:17:01'),
(42, 'Hemant', 'JAVA', '2019-04-09 21:17:06'),
(43, 'Hemant', 'Os', '2019-04-09 21:17:38'),
(44, 'Hemant', 'Os', '2019-04-09 21:17:40'),
(45, 'Hemant', 'Os', '2019-04-09 21:17:46'),
(46, 'Hemant', 'Os', '2019-04-09 21:19:37'),
(47, 'Hemant', 'Os', '2019-04-09 21:21:33'),
(48, 'Hemant', 'Os', '2019-04-09 21:21:49'),
(49, 'Hemant', 'Os', '2019-04-09 21:22:03'),
(50, 'Hemant', 'GATE', '2019-04-09 21:29:39'),
(51, 'Hemant', 'Linux', '2019-04-09 21:30:06'),
(52, 'Hemant', 'Linux%', '2019-04-09 21:30:27'),
(53, 'Hemant', 'Linux_%', '2019-04-09 21:32:25'),
(54, 'Hemant', 'Linux_%', '2019-04-09 21:32:30'),
(55, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:33:00'),
(56, 'Hemant', 'Linux', '2019-04-09 21:33:37'),
(57, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:33:48'),
(58, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:37:11'),
(59, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:37:40'),
(60, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:38:42'),
(61, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:40:03'),
(62, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:42:11'),
(63, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:42:15'),
(64, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:42:20'),
(65, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:42:45'),
(66, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:43:33'),
(67, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:43:33'),
(68, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:43:59'),
(69, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:43:59'),
(70, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:44:07'),
(71, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:44:07'),
(72, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:44:18'),
(73, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:44:18'),
(74, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:44:32'),
(75, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:44:32'),
(76, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:44:55'),
(77, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:44:56'),
(78, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:45:00'),
(79, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:47:03'),
(80, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:47:13'),
(81, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:48:14'),
(82, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:49:30'),
(83, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:50:13'),
(84, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:51:39'),
(85, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:54:06'),
(86, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:55:19'),
(87, 'Hemant', 'Linux :vi Editor', '2019-04-09 21:58:38'),
(88, 'Hemant', 'JAVA', '2019-04-09 22:05:47'),
(89, 'Hemant', 'DSA', '2019-04-09 22:09:38'),
(90, 'Hemant', 'Linux :vi Editor', '2019-04-09 22:09:43'),
(91, 'Hemant', 'Linux :vi Editor', '2019-04-09 22:13:38'),
(92, 'Hemant', 'Linux :vi Editor', '2019-04-09 22:13:56'),
(93, 'Hemant', 'JAVA', '2019-04-09 22:14:04'),
(94, 'Hemant', 'DSA', '2019-04-09 22:14:10'),
(95, 'Hemant', 'DSA', '2019-04-09 22:20:17'),
(96, 'Hemant', 'GATE', '2019-04-09 22:20:24'),
(97, 'Hemant', 'CPP', '2019-04-09 22:20:31'),
(98, 'Hemant', 'JAVA', '2019-04-09 22:20:35'),
(99, 'Hemant', 'JAVA', '2019-04-09 22:20:56'),
(100, 'Hemant', 'JAVA', '2019-04-09 22:24:26'),
(101, 'Hemant', 'JAVA', '2019-04-09 22:25:07'),
(102, 'Hemant', 'JAVA', '2019-04-09 22:25:34'),
(103, 'Hemant', 'JAVA', '2019-04-09 22:28:02'),
(104, 'Hemant', 'JAVA', '2019-04-09 22:28:09'),
(105, 'Hemant', 'JAVA', '2019-04-09 22:31:23'),
(106, 'Hemant', 'JAVA', '2019-04-09 22:32:38'),
(107, 'Hemant', 'CPP', '2019-04-09 22:40:26'),
(108, 'Hemant', 'CPP', '2019-04-09 22:41:10'),
(109, 'Hemant', 'CPP', '2019-04-09 22:43:52'),
(110, 'Hemant', 'JAVA', '2019-04-09 22:43:58'),
(111, 'Hemant', 'DSA', '2019-04-09 22:44:05'),
(112, 'Hemant', 'Linux :vi Editor', '2019-04-09 22:44:18'),
(113, 'Hemant', 'CPP', '2019-04-09 22:44:28'),
(114, 'Hemant', 'CPP', '2019-04-09 22:48:59'),
(115, 'Hemant', 'CPP', '2019-04-09 22:49:46'),
(116, 'Hemant', 'CPP', '2019-04-09 22:49:56'),
(117, 'Atique ', 'CPP', '2019-04-10 11:43:26'),
(118, 'Hemant', 'JAVA', '2019-04-11 08:44:26'),
(119, 'Hemant', 'CPP', '2019-04-11 08:46:27'),
(122, 'Hemant', 'JAVA', '2019-04-11 09:00:25'),
(123, 'Hemant', 'Linux :vi Editor', '2019-04-11 09:11:09'),
(124, 'Hemant', 'DSA', '2019-04-11 09:12:59'),
(127, 'Atique ', 'JAVA', '2019-04-11 09:20:53'),
(128, 'Atique ', 'JAVA', '2019-04-11 09:24:54');

--
-- Triggers `courses`
--
DELIMITER $$
CREATE TRIGGER `c_add` AFTER INSERT ON `courses` FOR EACH ROW BEGIN
	
    UPDATE users

    SET courses_sub = courses_sub+1 WHERE firstname = (SELECT sub_name FROM courses ORDER BY timestamp DESC LIMIT 1);

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `feedback`, `date`, `time`) VALUES
(1, 'Hemant', 'hemantup@gmail.com', 'Regarding DBMS ISE', 'How much do you expect?', '2019-04-02', '04:28');

-- --------------------------------------------------------

--
-- Stand-in structure for view `feedview`
-- (See below for the actual view)
--
CREATE TABLE `feedview` (
`id` int(11)
,`name` varchar(50)
,`email` varchar(50)
,`subject` varchar(500)
,`feedback` varchar(500)
,`date` date
,`time` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `rightans` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `rightans`, `wrong`, `date`) VALUES
('', '5589222f16b93', -1, 1, 0, 1, '2019-04-09 15:45:20'),
('', '5589222f16b93', -1, 1, 0, 1, '2019-04-09 15:45:20'),
('', '5589222f16b93', -1, 1, 0, 1, '2019-04-09 15:45:20'),
('', '558921841f1ec', 4, 2, 2, 0, '2019-04-09 15:48:12'),
('', '558921841f1ec', 4, 2, 2, 0, '2019-04-09 15:48:12'),
('', '558920ff906b8', 1, 2, 1, 1, '2019-04-09 15:48:33'),
('atique.sid1210@gmail.com', '5cad24e17b8a1', 0, 1, 0, 1, '2019-04-10 11:43:46'),
('atique.sid1210@gmail.com', '5cad24e17b8a1', 0, 1, 0, 1, '2019-04-10 11:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `email`, `password`) VALUES
(1, 'HEMaUPA', '1234'),
(2, 'admin@admin.com', 'admin2412'),
(3, 'hemantup@gmail.com', '123456'),
(4, 'atique.sid1210@gmail.com', 'Atique123');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('55892169bf6a7', 'usermod', '55892169d2efc'),
('55892169bf6a7', 'useradd', '55892169d2f05'),
('55892169bf6a7', 'useralter', '55892169d2f09'),
('55892169bf6a7', 'groupmod', '55892169d2f0c'),
('5589216a3646e', '751', '5589216a48713'),
('5589216a3646e', '752', '5589216a4871a'),
('5589216a3646e', '754', '5589216a4871f'),
('5589216a3646e', '755', '5589216a48722'),
('558922117fcef', 'echo', '5589221195248'),
('558922117fcef', 'print', '558922119525a'),
('558922117fcef', 'printf', '5589221195265'),
('558922117fcef', 'cout', '5589221195270'),
('55892211e44d5', 'int a', '55892211f1f97'),
('55892211e44d5', '$a', '55892211f1fa7'),
('55892211e44d5', 'long int a', '55892211f1fb4'),
('55892211e44d5', 'int a$', '55892211f1fbd'),
('558922894c453', 'cin>>a;', '558922895ea0a'),
('558922894c453', 'cin<<a;', '558922895ea26'),
('558922894c453', 'cout>>a;', '558922895ea34'),
('558922894c453', 'cout<a;', '558922895ea41'),
('558922899ccaa', 'cout', '55892289aa7cf'),
('558922899ccaa', 'cin', '55892289aa7df'),
('558922899ccaa', 'print', '55892289aa7eb'),
('558922899ccaa', 'printf', '55892289aa7f5'),
('558923538f48d', '255.0.0.0', '558923539a46c'),
('558923538f48d', '255.255.255.0', '558923539a480'),
('558923538f48d', '255.255.0.0', '558923539a48b'),
('558923538f48d', 'none of these', '558923539a495'),
('55892353f05c4', '192.168.1.100', '5589235405192'),
('55892353f05c4', '172.168.16.2', '55892354051a3'),
('55892353f05c4', '10.0.0.0.1', '55892354051b4'),
('55892353f05c4', '11.11.11.11', '55892354051be'),
('558973f4389ac', 'containing root file-system required during bootup', '558973f462e44'),
('558973f4389ac', ' Contains only scripts to be executed during bootup', '558973f462e56'),
('558973f4389ac', ' Contains root-file system and drivers required to be preloaded during bootup', '558973f462e61'),
('558973f4389ac', 'None of the above', '558973f462e6b'),
('558973f4c46f2', 'Kernel', '558973f4d4abe'),
('558973f4c46f2', 'Shell', '558973f4d4acf'),
('558973f4c46f2', 'Commands', '558973f4d4ad9'),
('558973f4c46f2', 'Script', '558973f4d4ae3'),
('558973f51600d', 'Boot Loading', '558973f526f9d'),
('558973f51600d', ' Boot Record', '558973f526fb9'),
('558973f51600d', ' Boot Strapping', '558973f526fc5'),
('558973f51600d', ' Booting', '558973f526fce'),
('558973f55d269', ' Quick boot', '558973f57aef1'),
('558973f55d269', 'Cold boot', '558973f57af07'),
('558973f55d269', ' Hot boot', '558973f57af17'),
('558973f55d269', ' Fast boot', '558973f57af27'),
('558973f5abb1a', 'bash', '558973f5e7623'),
('558973f5abb1a', ' Csh', '558973f5e7636'),
('558973f5abb1a', ' ksh', '558973f5e7640'),
('558973f5abb1a', ' sh', '558973f5e764a'),
('5589751a63091', 'q', '5589751a81bd6'),
('5589751a63091', 'wq', '5589751a81be8'),
('5589751a63091', ' both (a) and (b)', '5589751a81bf4'),
('5589751a63091', ' none of the mentioned', '5589751a81bfd'),
('5589751ad32b8', ' moves screen down one page', '5589751adbdbd'),
('5589751ad32b8', 'moves screen up one page', '5589751adbdce'),
('5589751ad32b8', 'moves screen up one line', '5589751adbdd8'),
('5589751ad32b8', ' moves screen down one line', '5589751adbde2'),
('5589751b304ef', ' yy', '5589751b3b04d'),
('5589751b304ef', 'yw', '5589751b3b05e'),
('5589751b304ef', 'yc', '5589751b3b069'),
('5589751b304ef', ' none of the mentioned', '5589751b3b073'),
('5589751b749c9', 'X', '5589751b9a98c'),
('5589751b749c9', 'x', '5589751b9a9a5'),
('5589751b749c9', 'D', '5589751b9a9b7'),
('5589751b749c9', 'd', '5589751b9a9c9'),
('5589751bd02ec', 'autoindentation is not possible in vi editor', '5589751bdadaa'),
('5ca932dc9a765', '', '5ca932dcbe5fe'),
('5ca932dc9a765', '', '5ca932dcbe606'),
('5ca932dc9a765', '', '5ca932dcbe609'),
('5ca932dc9a765', '', '5ca932dcbe60b'),
('5ca932dd0c013', '', '5ca932dd16150'),
('5ca932dd0c013', '', '5ca932dd16158'),
('5ca932dd0c013', '', '5ca932dd1615b'),
('5ca932dd0c013', '', '5ca932dd1615d'),
('5ca932dd4cfbc', '', '5ca932dd5ff62'),
('5ca932dd4cfbc', '', '5ca932dd5ff6b'),
('5ca932dd4cfbc', '', '5ca932dd5ff6e'),
('5ca932dd4cfbc', '', '5ca932dd5ff70'),
('5cad25495e82a', 'PARTIALLY', '5cad2549792a5'),
('5cad25495e82a', 'PURELY', '5cad2549792a9'),
('5cad25495e82a', 'NONE', '5cad2549792aa'),
('5cad25495e82a', '', '5cad2549792ab'),
('5caf0943e62d4', 'NULL', '5caf09440fcba'),
('5caf0943e62d4', 'O', '5caf09440fcc1'),
('5caf0943e62d4', 'DEPENDS ON DATATYPE', '5caf09440fcc6'),
('5caf0943e62d4', '', '5caf09440fcc8'),
('5caf09446c1de', 'TRUE', '5caf094474094'),
('5caf09446c1de', 'FASLE', '5caf094474099'),
('5caf09446c1de', 'NONE', '5caf09447409a'),
('5caf09446c1de', '', '5caf09447409b'),
('5caf0944b53ed', 'JRE is an application development framework.', '5caf0944c14e7'),
('5caf0944b53ed', 'JRE is an implementation of the Java Virtual Machine which executes Java programs.', '5caf0944c14f1'),
('5caf0944b53ed', 'JRE is an application development framework.', '5caf0944c14f2'),
('5caf0944b53ed', '', '5caf0944c14f4');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('558920ff906b8', '55892169bf6a7', 'what is command for changing user information??', 4, 1),
('558920ff906b8', '5589216a3646e', 'what is permission for view only for other??', 4, 2),
('558921841f1ec', '558922117fcef', 'what is command for print in php??', 4, 1),
('558921841f1ec', '55892211e44d5', 'which is a variable of php??', 4, 2),
('5589222f16b93', '558922894c453', 'what is correct statement in c++??', 4, 1),
('5589222f16b93', '558922899ccaa', 'which command is use for print the output in c++?', 4, 2),
('558922ec03021', '558923538f48d', 'what is correct mask for A class IP???', 4, 1),
('558922ec03021', '55892353f05c4', 'which is not a private IP??', 4, 2),
('55897338a6659', '558973f4389ac', 'On Linux, initrd is a file', 4, 1),
('55897338a6659', '558973f4c46f2', 'Which is loaded into memory when system is booted?', 4, 2),
('55897338a6659', '558973f51600d', ' The process of starting up a computer is known as', 4, 3),
('55897338a6659', '558973f55d269', ' Bootstrapping is also known as', 4, 4),
('55897338a6659', '558973f5abb1a', 'The shell used for Single user mode shell is:', 4, 5),
('5589741f9ed52', '5589751a63091', ' Which command is used to close the vi editor?', 4, 1),
('5589741f9ed52', '5589751ad32b8', ' In vi editor, the key combination CTRL+f', 4, 2),
('5589741f9ed52', '5589751b304ef', ' Which vi editor command copies the current line of the file?', 4, 3),
('5589741f9ed52', '5589751b749c9', ' Which command is used to delete the character before the cursor location in vi editor?', 4, 4),
('5589741f9ed52', '5589751bd02ec', ' Which one of the following statement is true?', 4, 5),
('5ca92a965818f', '5ca932dc9a765', '', 4, 1),
('5ca92a965818f', '5ca932dd0c013', '', 4, 2),
('5ca92a965818f', '5ca932dd4cfbc', '', 4, 3),
('5cad24e17b8a1', '5cad25495e82a', 'C++ is partially OOP or pure OOP?', 4, 1),
('5caf085cd7256', '5caf0943e62d4', 'What of the following is the default value of an instance variable?', 4, 1),
('5caf085cd7256', '5caf09446c1de', ' Is an empty .java file a valid source file?', 4, 2),
('5caf085cd7256', '5caf0944b53ed', ' What is JRE?', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `rightans` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `rightans`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
('558920ff906b8', 'Linux : File Managment', 2, 1, 2, 5, '', 'linux', '2015-06-23 09:03:59'),
('558921841f1ec', 'Php Coding', 2, 1, 2, 5, '', 'PHP', '2015-06-23 09:06:12'),
('5589222f16b93', 'C++ Coding', 2, 1, 2, 5, '', 'c++', '2015-06-23 09:09:03'),
('558922ec03021', 'Networking', 2, 1, 2, 5, '', 'networking', '2015-06-23 09:12:12'),
('55897338a6659', 'Linux:startup', 2, 1, 5, 10, '', 'linux', '2015-06-23 14:54:48'),
('5589741f9ed52', 'Linux :vi Editor', 2, 1, 5, 10, '', 'linux', '2015-06-23 14:58:39'),
('5ca8d481ae9be', 'Os', 2, 0, 10, 20, '', '', '2019-04-06 16:32:01'),
('5ca926a53dcbe', 'Os', 1, 0, 3, 2, 'good', '', '2019-04-06 22:22:29'),
('5ca929716e67f', 'Os', 1, 0, 3, 2, '', '', '2019-04-06 22:34:25'),
('5ca92a965818f', 'Os', 1, 0, 3, 2, '', '', '2019-04-06 22:39:18'),
('5cad24e17b8a1', 'Cpp', 2, 0, 1, 2, 'BASICS OF CPP', '', '2019-04-09 23:04:01'),
('5caf085cd7256', 'Java', 1, 0, 3, 10, 'BASICS OF JAVA', '', '2019-04-11 09:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('sunnygkp10@gmail.com', 9, '2015-06-24 03:22:38'),
('avantika420@gmail.com', 8, '2015-06-23 14:49:39'),
('mi5@hollywood.com', 4, '2015-06-23 15:12:56'),
('abcd@gmail.com', -6, '2019-04-07 03:01:52'),
('admin@admin.com', -1, '2019-04-07 04:03:37'),
('hemantup@gmail.com', 6, '2019-04-09 15:19:18'),
('', 4, '2019-04-09 15:48:33'),
('atique.sid1210@gmail.com', 0, '2019-04-10 11:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `college`, `email`, `mob`, `password`) VALUES
('Atique Siddiqui', 'M', 'jggkgu', 'abcd@gmail.com', 646416516516, '123456'),
('Avantika', 'F', 'KNIT sultanpur', 'avantika420@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('Komal', 'F', 'KNIT sultanpur', 'komalpd2011@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('Tom Cruze', 'M', 'Hollywood', 'mi5@hollywood.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('Netcamp', 'M', 'KNIT sultanpur', 'netcamp@gmail.com', 987654321, 'e10adc3949ba59abbe56e057f20f883e'),
('Sunny', 'M', 'KNIT sultanpur', 'sunnygkp10@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('Vikash', 'M', 'KNIT sultanpur@gmail.com', 'vikash@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `mobile` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `college` varchar(50) NOT NULL,
  `courses_sub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `mobile`, `email`, `password`, `firstname`, `lastname`, `gender`, `dob`, `college`, `courses_sub`) VALUES
(13, 2147483647, 'hemantup@gmail.com', '123456', 'Hemant', 'Upadhyay', 'male', '2019-04-10', 'SPIT', 3),
(14, 2147483647, 'atique.sid1210@gmail.com', 'Atique123', 'Atique ', 'siddiqui', '', '1970-01-01', '', 2);

-- --------------------------------------------------------

--
-- Structure for view `feedview`
--
DROP TABLE IF EXISTS `feedview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `feedview`  AS  select `feedback`.`id` AS `id`,`feedback`.`name` AS `name`,`feedback`.`email` AS `email`,`feedback`.`subject` AS `subject`,`feedback`.`feedback` AS `feedback`,`feedback`.`date` AS `date`,`feedback`.`time` AS `time` from `feedback` order by `feedback`.`date` desc ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
