-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 17, 2021 at 03:41 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skyturtle_db3am`
--

-- --------------------------------------------------------

--
-- Table structure for table `CATEGORY`
--

CREATE TABLE `CATEGORY` (
  `CAT_id` int(11) NOT NULL,
  `CAT_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CAT_description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `CATEGORY`
--

INSERT INTO `CATEGORY` (`CAT_id`, `CAT_name`, `CAT_description`) VALUES
(-1, 'none', ''),
(1, 'Electrical', 'Construction or maintenance of electrical wiring and systems in residential, commercial or municipal environments'),
(2, 'Mechanical', 'Related to the maintenance, testing, preventative maintenance and operation of all heating, ventilation and air-conditioning systems, the distribution of steam, chilled water, distribution of domestic and fire protection water, wet fire system testing, the maintenance and operation of sewer and storms systems, natural gas systems, propane systems, building plumbing systems. dig safe, water treatment, bowling alleys, general welding, assist in energy control monitoring, and any other duties assigned not generally associated with the trades of Plumbing and HVAC technicians.'),
(3, 'Plumbing', 'Installs, maintains, and repairs pipes and fixtures associated with heating, cooling, water distribution, and sanitation systems in residential and commercial structures. Fixes domestic appliances, such as dishwashers and gas cookers. Inspects drainage and other plumbing systems for compliance with local and national regulations.'),
(4, 'Carpentry', 'Construct, erect, install and renovate structures made of wood and other materials, ranging from kitchen cabinets to building frameworks. '),
(5, 'Welding', 'Takes various metal components and uses intense heat to fuse them together to form a final product.'),
(6, 'Massage Therpist', 'Massage is the manipulation of soft tissues in the body. Massage techniques are commonly applied with hands, fingers, elbows, knees, forearms, feet, or a device. The purpose of massage is generally for the treatment of body stress or pain.'),
(7, 'Language Interpreter', 'Facilitate communication between parties who speak two different languages.'),
(8, 'Music Instructor ', 'Teaches people instrumental techniques, scales, sight reading, and music theory to to prepare for music examinations, auditions and live performances.'),
(9, 'Animal Trainer', 'Teaching animals specific responses to specific conditions or stimuli for the purpose of companionship, detection, protection, and entertainment.'),
(10, 'Writer', 'One who writes creative fiction (e.g. novels, short stories, scripts for films, theater and television), non-fiction (e.g. biographies, autobiographies, web content and reference books) or poetry for a living. '),
(11, 'Law', 'The discipline and profession concerned with the customs, practices, and rules of conduct of a community that are recognized as binding by the community.'),
(12, 'Medicine', 'The field of health and healing.'),
(13, 'Law Enforcement', 'system by which some members of society act in an organized manner to enforce the law by discovering, deterring, rehabilitating, or punishing people who violate the rules and norms governing that society.');

-- --------------------------------------------------------

--
-- Table structure for table `LISTINGS`
--

CREATE TABLE `LISTINGS` (
  `LIST_id` int(11) NOT NULL,
  `USR_username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CAT_id` int(20) NOT NULL,
  `LIST_price` double NOT NULL,
  `LIST_title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LIST_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `LIST_hidden` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `LISTINGS`
--

INSERT INTO `LISTINGS` (`LIST_id`, `USR_username`, `CAT_id`, `LIST_price`, `LIST_title`, `LIST_info`, `LIST_hidden`) VALUES
(1, 'emibro96', 7, 10, 'Write \"A\" Papers (high school, college, reports, research)', 'Experienced writer. All work for clients is authentic.', 0),
(2, 'matbek31', 5, 35, 'Matt is my name; electricity is my Game.', 'Can do common wiring and other electrical work. ', 0),
(13, 'gmgarrison', 8, 100.5, 'Dish-washing Help', 'Do you have too many dirty dishes in your sink? I can assist with you washing them! I have plenty of experience in washing dishes.', 0),
(14, 'jdallas', 6, 80.5, 'TEST12345', 'TEST ASSASSINATIOn', 1),
(15, 'gmgarrison', 1, 50.5, 'Web Design', 'Will design your website for you!', 0),
(25, 'matthewbreeden', 12, 499.99, 'Nurse Practitioner', 'Do you have boo boo? Do not worry! I assess and diagnose you boo boo to fix it so that you can feel better!', 0),
(41, 'testuser', 1, 1000000000, 'gamer', 'i play games', 0),
(42, 'kylsta', 1, 65, 'Electrician', 'Mostly deal with home electrical  maintenance.', 0),
(43, 'testuser', 6, 500, 'escort', 'i kill good', 0),
(44, 'testuser', 3, 100, 'turtle exterminator', 'where is the princess?', 0),
(45, 'kylsta', 11, 145, 'Paralegal', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id aliquet lectus proin nibh nisl condimentum. Augue mauris augue neque gravida in fermentum.', 0),
(46, 'kylsta', 12, 25, 'Herbologist', 'non-negotiable', 0),
(47, 'testuser', 13, 3000, 'detective pikachu', 'pika pika', 0),
(48, 'testuser', 4, 45, 'demolition expert ', 'i going to wreck it.', 0),
(49, 'usr', 8, 30, 'Piano Teacher', 'Piano lessons for children and adults.\r\n\r\nChildren: ages 5+\r\nAdults: all welcome', 0),
(50, 'testuser', 9, 90, 'competitive duelist', 'i play card games.', 0),
(51, 'gustave', 3, 70, 'Plumber', 'Leak Finding & Leak Repair,\r\nSewer Repair,\r\nOutdoor System Repairs,\r\nShower Installation,\r\nShower Repair,\r\nToilet Installation,\r\nToilet Leaks & Toilet Repair,\r\nDrain Unclogging,\r\nFaucet Repair,\r\nFaucet Installation,\r\nGarbage Disposal Installation,\r\nGarbage Disposal Repair,\r\nWater Heater Installation,\r\nWater Heater Leak & Repair,\r\nPipe Repair', 0),
(52, 'Buns', -1, 5, 'work for food', 'cut grass, clean home, wash car, shine shoes, anything you need...I can deliver', 0),
(53, 'kylsta', 5, 12, 'Fence Repair', 'i fix fences.', 0),
(54, 'kylsta', 2, 0.02, 'Scrapper', 'ill buy your old broken car', 0),
(55, 'kylsta', 10, 12, 'Novelist', 'book signing', 0),
(56, 'gmicah', -1, 15.99, 'Dishwasher', 'You have a lot of dirty dishes? Look no further than here for help.', 0),
(58, 'billybob123', 11, 100, 'Job123Billybob', 'I billybob :)', 0),
(59, 'guest', 1, 50, 'Test Listing', 'This is a Test Posting', 0),
(60, 'guest', 2, 34, '2', '3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `PROFILE`
--

CREATE TABLE `PROFILE` (
  `PRO_id` int(11) NOT NULL,
  `USR_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TRA_id` int(11) NOT NULL,
  `CUST_id` int(11) NOT NULL,
  `PROF_id` int(11) NOT NULL,
  `RAT_num` int(11) NOT NULL,
  `Biography` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contacts` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Credentials` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Availability` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `PROFILE`
--

INSERT INTO `PROFILE` (`PRO_id`, `USR_name`, `TRA_id`, `CUST_id`, `PROF_id`, `RAT_num`, `Biography`, `Contacts`, `Credentials`, `Availability`) VALUES
(1, 'johsmi58', 4, 11, 89, 21, 'Have been working as a carpenter for almost a year after completing my general education program. I currently work for Charles Yost Custom Cabinets in Newport News Virginia.', 'Megan Bower, Supervisor, 757-119-2237', 'general carpentry certificate ', 'Mon-Fri 8am-8pm\r\nSAT     10am-4pm\r\nSUN     Not available'),
(2, 'matbek31', 5, 57, 55, 8, 'Morbi tellus lacus, finibus id sem in, tempor fermentum ipsum. Nunc vel placerat eros. Sed neque ipsum, imperdiet non arcu sed, interdum varius purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque quis felis mi. Sed accumsan ex dignissim ante efficitur volutpat. Quisque hendrerit nisi vel tempus porttitor. Nam non eros nec nisi accumsan volutpat et vitae lorem. Vivamus risus neque, facilisis id arcu sed, condimentum imperdiet elit. Sed neque nibh, molestie ac sem ut, bibendum laoreet nibh. Ut dolor sapien, eleifend sit amet est a, commodo tempor sapien. Morbi vel vulputate eros. Curabitur a ullamcorper tellus, suscipit dignissim lacus.\r\n\r\nAenean euismod vitae tellus non varius. Mauris enim dolor, eleifend ut sapien volutpat, ultricies pretium quam. Suspendisse tincidunt, quam a placerat laoreet, turpis nunc hendrerit felis, vitae varius tellus felis vitae nibh. Curabitur sed erat nec elit ornare gravida. Maecenas lobortis nisi eget nisl ultrices posuere. Vestibulum eleifend vestibulum ipsum, et laoreet diam convallis a. Nullam lacinia mollis odio vel congue. Etiam commodo arcu urna, ut tincidunt ante accumsan in.', 'Victor Mason, Partner, 712-111-9598', 'Lorem ipsum dolor sit', 'Mon - Thurs 9am-5pm\r\n'),
(3, 'jdallas', 6, 23, 71, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper tincidunt urna, ut luctus sapien pellentesque eget. Vestibulum erat lorem, dictum at erat sit amet, mollis rutrum libero. Vivamus congue pulvinar felis at egestas. Pellentesque vel quam ornare, imperdiet nulla sed, posuere nibh. Nullam nisi risus, aliquet sit amet rutrum vel, mollis in enim. Nunc fermentum nibh vitae nunc ullamcorper consectetur. Sed tempor a mauris non feugiat. Maecenas molestie, tortor in tincidunt scelerisque, dui nunc gravida mauris, vitae mollis turpis neque non nulla. Aliquam scelerisque a lorem sit amet rhoncus. Pellentesque euismod volutpat cursus. Aenean at elit a ipsum molestie fringilla non ut dui. Phasellus congue velit at sollicitudin commodo. Mauris et justo vel velit gravida egestas dapibus vel erat. Praesent consectetur risus tortor, vitae rhoncus quam cursus vitae. Suspendisse vitae elementum risus.', '', 'BA Language Arts, BeeBop College (2010)\r\nMA Language Arts, Vetar University (2012\r\n', 'all week - 7am to 1 pm'),
(4, 'mlamb', 8, 101, 412, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nNam ac neque feugiat, iaculis dui quis, mollis sem.\r\nProin sit amet ipsum feugiat, blandit nibh ut, tristique diam.\r\nMauris quis quam eget urna semper lobortis.\r\nVivamus tempor odio pretium malesuada tincidunt.\r\nVestibulum vestibulum urna sit amet magna convallis, nec consequat lorem hendrerit.\r\nVestibulum mollis ex eget ultricies porttitor.\r\nUt finibus justo ut rutrum malesuada.\r\nAenean accumsan justo sed enim scelerisque laoreet.\r\nCurabitur rutrum magna et pretium pharetra.', 'Marsha Goomb, P.I. partner 1248976632', 'P.I. License, Department of Virginia Criminal Justice Services', '12am - 4pm: Mon - Wed\r\n\r\n9am - 3pm: Thurs - Fri');

-- --------------------------------------------------------

--
-- Table structure for table `RATING`
--

CREATE TABLE `RATING` (
  `RAT_num` int(11) NOT NULL,
  `RAT_category` set('Customer Rating','Professional Rating','','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `REV_rating` set('1','2','3','4','5') COLLATE utf8mb4_unicode_ci NOT NULL,
  `AVG_rating` set('1','1.1','1.2','1.3','1.4','1.5','1.6','1.7','1.8','1.9','2','2.1','2.2','2.3','2.4','2.5','2.6','2.7','2.8','2.9','3','3.1','3.2','3.3','3.4','3.5','3.6','3.7','3.8','3.9','4','4.1','4.2','4.3','4.4','4.5','4.6','4.7','4.8','4.9','5') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `RATING`
--

INSERT INTO `RATING` (`RAT_num`, `RAT_category`, `REV_rating`, `AVG_rating`) VALUES
(8, 'Professional Rating', '2', '2'),
(21, 'Customer Rating', '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `REVIEW`
--

CREATE TABLE `REVIEW` (
  `REV_id` int(11) NOT NULL,
  `RAT_num` int(11) NOT NULL,
  `REV_comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `REV_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `REVIEW`
--

INSERT INTO `REVIEW` (`REV_id`, `RAT_num`, `REV_comment`, `REV_date`) VALUES
(1, 8, 'It took Mr. Becker forever to fix my broken GFI outlet and used the incorrect 12G gauge wire downgrading my previous 20 amps to the 15 amps.', '2020-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `SERVICE`
--

CREATE TABLE `SERVICE` (
  `SERVICE_id` int(11) NOT NULL,
  `CUST_id` int(11) NOT NULL,
  `PROF_id` int(11) NOT NULL,
  `Services Provided` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contract` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` set('Open','Pending','Closed','') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `SERVICE`
--

INSERT INTO `SERVICE` (`SERVICE_id`, `CUST_id`, `PROF_id`, `Services Provided`, `Contract`, `Status`) VALUES
(1, 22, 95, '- Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n- Nam quis magna eget quam lobortis tristique.\r\n\r\n- Pellentesque nec elit quis mauris placerat facilisis.\r\n\r\n- Donec quis justo et diam suscipit accumsan condimentum eget ante.\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque euismod venenatis tincidunt. Proin mollis dui dolor, sed rhoncus sapien fringilla id. Donec at consequat nibh. Suspendisse pellentesque tincidunt turpis vitae ornare. Proin bibendum placerat lectus id finibus. Donec fermentum feugiat tincidunt. Pellentesque quis lacinia leo. Nam nibh erat, accumsan sit amet sapien sed, cursus rutrum nisi. Donec pellentesque ex at porttitor congue.\r\n\r\nNulla vel auctor ipsum. Suspendisse sed mi vitae enim dignissim cursus sit amet id quam. Suspendisse pellentesque ligula eu dui euismod, id fringilla orci bibendum. Aliquam tincidunt varius vehicula. Sed id egestas ipsum, at rutrum ipsum. Fusce id orci et enim ornare luctus. Vivamus vulputate nunc at mi vulputate pulvinar. Nullam eleifend nec lacus sit amet venenatis. Vivamus gravida ac lorem eu fermentum. Nunc tristique facilisis lectus a venenatis. Sed mauris arcu, feugiat ac vehicula et, aliquet non ligula. In eu pulvinar felis. Pellentesque vel est in urna facilisis auctor. Duis sed accumsan nisl. Aenean non ornare eros. Donec vel finibus neque, vel interdum diam.', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `TRADE`
--

CREATE TABLE `TRADE` (
  `TRA_id` int(11) NOT NULL,
  `TRA_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CAT_id` int(11) NOT NULL,
  `TRA_description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `TRADE`
--

INSERT INTO `TRADE` (`TRA_id`, `TRA_name`, `CAT_id`, `TRA_description`) VALUES
(1, 'Phlebotomy Technician', 12, 'Responsible for the collecting of blood specimens for the laboratory to help diagnose health conditions and illnesses.'),
(2, 'Barrister', 11, 'Legal professional who gives solicitors and other client’s legal advice. '),
(3, 'Piano Teacher', 8, 'Gives piano lessons.'),
(4, 'Carpenter Apprentice', 4, 'Assisting in module assembly and willing to learn and follow directions. '),
(5, 'Service Electrician', 1, 'Run multiple jobs daily performing the Installation and maintenance of Residential and Commercial Electrical Applications and Products.'),
(6, 'Educational Sign-Language Interpreter', 7, 'Responsible for use of American Sign Language/Cued Speech to provide services to students with deafness/hearing impairment in a variety of settings including (but not limited to) academic classes, meetings, assemblies, telephone calls, or related activities. '),
(7, 'Literary Researcher', 10, 'Finding something new within a literary work and presenting it in a new and elegant form for the human eye.'),
(8, 'Private Investigator', 13, 'person who can be hired by individuals or groups to undertake investigatory law services. Often works for attorneys in civil and criminal cases.');

-- --------------------------------------------------------

--
-- Table structure for table `USER`
--

CREATE TABLE `USER` (
  `USR_id` int(10) NOT NULL,
  `USR_username` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `USR_pass` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `USR_fname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `USR_lname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `USR_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `USR_phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `USR_color` int(1) NOT NULL DEFAULT 1,
  `USR_image` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `USR_cert` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CAT_id` int(11) NOT NULL DEFAULT -1,
  `USR_Bio` longtext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '*bio empty*'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `USER`
--

INSERT INTO `USER` (`USR_id`, `USR_username`, `USR_pass`, `USR_fname`, `USR_lname`, `USR_email`, `USR_phone`, `USR_color`, `USR_image`, `USR_cert`, `CAT_id`, `USR_Bio`) VALUES
(1, 'johsmi58', 'password5', 'John', 'Smith', 'johsmi58@domain.com', '237112459', 1, 'default.jpg', NULL, 2, '*bio empty*'),
(2, 'emibro96', '1234', 'Emily', 'Brown', 'emibro96@domain.com', '999888576', 1, 'default.jpg', NULL, 1, '*bio empty*'),
(3, 'matbek31', 'pass31', 'Matt', 'Becker', 'matbek31@domain.com', '318925475', 1, 'default.jpg', NULL, 1, '*bio empty*'),
(11, 'gmgarrison', 'pass', 'Micah', 'Garrison', 'micah@micahgarrison.com', '896125356', 1, 'images/1582718864_TurtleIcon.jpg', 'Big Boi Plumbing Certification', 3, 'I like bacon a lot.'),
(12, 'mjohnson', 'pass', 'Marivi', 'Johnson', 'blah@domain.com', '', 1, 'default.jpg', NULL, 1, '*bio empty*'),
(14, 'testuser', 'pass', 'Test', 'Tester', 'test@domain.com', '', 3, 'default.jpg', NULL, 1, '*bio empty*'),
(15, 'gustave', 'password', 'gustave', 'niragira', 'gustave@gmail.com', '7573032071', 2, 'images/1582727143_unnamed.jpg', 'projct management', -1, '*bio empty*'),
(16, 'Buns', 'Bun', 'Bun', 'Bens', 'Bun@hotmail.com', '', 1, 'default.jpg', NULL, 1, '*bio empty*'),
(18, 'jdallas', 'pass12', 'james', 'dallas', 'princejamesvii@gmail.com', '', 1, 'default.jpg', NULL, 1, '*bio empty*'),
(19, 'kylsta', 'pass1', 'KYLE', 'sTAN', 'no@aol.com', '486314663', 1, 'images/1583840898_Tattoo Reference.PNG', 'life', 3, 'Have you seen what it\'s like out there, Murray? Do you ever actually leave the studio? Everybody just yells and screams at each other. Nobody\'s civil anymore. Nobody thinks what it\'s like to be the other guy. You think men like Thomas Wayne ever think what it\'s like to be someone like me? To be somebody but themselves? They don\'t. They think that we\'ll just sit there and take it, like good little boys! That we won\'t werewolf and go wild! - Joker (2019)'),
(22, 'matthewbreeden', 'pass', 'Phoenix', 'Phire', 'matt@hellothere.edu', '', 1, 'default.jpg', NULL, 1, '*bio empty*'),
(28, 'usr', 'pass', 'Hello', 'Garrison', 'blah@domain.com', '', 1, 'default.jpg', NULL, -1, '*bio empty*'),
(29, 'lolipop', 'crow', 'loli', 'pop', 'moni@aol.com', '', 1, 'default.jpg', NULL, -1, '*bio empty*'),
(30, 'tlucy', 'pass', 'Tom', 'Lucy', 'tlucy@domain.com', '757-608-8453', 1, 'default.jpg', '', -1, 'I am very proficient at playing drums.'),
(31, 'gmicah', 'pass', 'Micah', 'Garrison', 'newemail@domain.com', '757-608-8453', 1, 'images/1582728941_turtle.jpg', 'CompTIA A+', -1, 'I like bacon'),
(32, 'billybob123', 'password', 'Billy', 'Bob', 'billy@bob.com', '', 1, 'default.jpg', NULL, -1, '*bio empty*'),
(33, 'guest', 'GuestPass123', 'John', 'Smith', 'johnsmith@domain.com', '123-456-7890', 1, 'default.jpg', '', -1, '*bio empty*'),
(34, 'asdfsdfasdfadfasdfafasdfadf', 'myPUblicPass0', 't', 't', 'asd@dsaf.com', NULL, 1, 'default.jpg', NULL, -1, '*bio empty*');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CATEGORY`
--
ALTER TABLE `CATEGORY`
  ADD PRIMARY KEY (`CAT_id`),
  ADD KEY `CAT_id` (`CAT_id`);

--
-- Indexes for table `LISTINGS`
--
ALTER TABLE `LISTINGS`
  ADD PRIMARY KEY (`LIST_id`),
  ADD UNIQUE KEY `listId` (`LIST_id`);

--
-- Indexes for table `PROFILE`
--
ALTER TABLE `PROFILE`
  ADD PRIMARY KEY (`PRO_id`);

--
-- Indexes for table `RATING`
--
ALTER TABLE `RATING`
  ADD PRIMARY KEY (`RAT_num`);

--
-- Indexes for table `REVIEW`
--
ALTER TABLE `REVIEW`
  ADD PRIMARY KEY (`REV_id`);

--
-- Indexes for table `SERVICE`
--
ALTER TABLE `SERVICE`
  ADD PRIMARY KEY (`SERVICE_id`);

--
-- Indexes for table `TRADE`
--
ALTER TABLE `TRADE`
  ADD PRIMARY KEY (`TRA_id`);

--
-- Indexes for table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`USR_id`),
  ADD KEY `USR_Cat` (`CAT_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CATEGORY`
--
ALTER TABLE `CATEGORY`
  MODIFY `CAT_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `LISTINGS`
--
ALTER TABLE `LISTINGS`
  MODIFY `LIST_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `PROFILE`
--
ALTER TABLE `PROFILE`
  MODIFY `PRO_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `RATING`
--
ALTER TABLE `RATING`
  MODIFY `RAT_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `REVIEW`
--
ALTER TABLE `REVIEW`
  MODIFY `REV_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `SERVICE`
--
ALTER TABLE `SERVICE`
  MODIFY `SERVICE_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `TRADE`
--
ALTER TABLE `TRADE`
  MODIFY `TRA_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `USER`
--
ALTER TABLE `USER`
  MODIFY `USR_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `USER`
--
ALTER TABLE `USER`
  ADD CONSTRAINT `USER_ibfk_1` FOREIGN KEY (`CAT_id`) REFERENCES `CATEGORY` (`CAT_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
