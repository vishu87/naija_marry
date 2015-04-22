-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2015 at 03:28 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `naija_marry`
--

-- --------------------------------------------------------

--
-- Table structure for table `body_types`
--

CREATE TABLE IF NOT EXISTS `body_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body_type` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `body_types`
--

INSERT INTO `body_types` (`id`, `body_type`, `status`, `updated_at`) VALUES
(2, 'hfuks', 1, '2015-03-30 12:51:42'),
(4, 'hjhgjgj', 1, '0000-00-00 00:00:00'),
(5, 'jhbhj', 0, '0000-00-00 00:00:00'),
(6, 'hjgjgjygy', 1, '0000-00-00 00:00:00'),
(7, 'FGJRE UFHERI', 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `state_id`, `city`, `status`, `updated_at`) VALUES
(2, 5, 2, 'Haridwar', 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `complexions`
--

CREATE TABLE IF NOT EXISTS `complexions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `complexion` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `complexions`
--

INSERT INTO `complexions` (`id`, `complexion`, `status`, `updated_at`) VALUES
(1, 'tu r2334', 1, '2015-03-30 13:36:26'),
(2, 'hguh dfui', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `status`, `updated_at`) VALUES
(4, 'ifhgoi', 2, '0000-00-00 00:00:00'),
(5, 'India', 2, '0000-00-00 00:00:00'),
(6, 'USA', 2, '0000-00-00 00:00:00'),
(7, 'UK', 1, '2015-03-31 09:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE IF NOT EXISTS `educations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `education` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `education`, `status`, `updated_at`) VALUES
(2, 'ftr htiopiokr', 1, '2015-03-30 13:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE IF NOT EXISTS `forums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forum` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`id`, `forum`, `status`, `updated_at`) VALUES
(2, 'uuighkui', 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `language`, `status`, `updated_at`) VALUES
(1, 'hjgugiu', 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `parameters`
--

CREATE TABLE IF NOT EXISTS `parameters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `parameters`
--

INSERT INTO `parameters` (`id`, `parameter`) VALUES
(1, 'About Me'),
(2, 'DOB');

-- --------------------------------------------------------

--
-- Table structure for table `religions`
--

CREATE TABLE IF NOT EXISTS `religions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `religion` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `religions`
--

INSERT INTO `religions` (`id`, `religion`, `status`, `updated_at`) VALUES
(1, 'jf heidfi', 2, '2015-03-30 16:47:55');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `state` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `country_id`, `state`, `status`, `updated_at`) VALUES
(2, 5, 'Uttarakhand', 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tribes`
--

CREATE TABLE IF NOT EXISTS `tribes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tribe` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tribes`
--

INSERT INTO `tribes` (`id`, `tribe`, `status`, `updated_at`) VALUES
(1, ' j heru234247', 2, '2015-03-30 16:34:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `gender` int(1) NOT NULL,
  `mobile_code` int(11) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `marital_status` varchar(200) NOT NULL,
  `body_type_id` int(11) NOT NULL,
  `education_id` int(11) NOT NULL,
  `complexion_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `tribe_id` int(11) NOT NULL,
  `religion_id` int(11) NOT NULL,
  `remember_token` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `password`, `email`, `dob`, `gender`, `mobile_code`, `mobile_no`, `marital_status`, `body_type_id`, `education_id`, `complexion_id`, `country_id`, `state_id`, `city_id`, `language_id`, `tribe_id`, `religion_id`, `remember_token`, `updated_at`, `created_at`) VALUES
(1, 'dfgjd', 'gyudsg', '$2y$10$C5x4mDXp0mvrg.HGK84wu.5/SK7CPy2rIRIhPJFpFCjnpWHvK.exO', 'sdjhsa@fj.com', '0000-00-00', 2, 0, '5437632432', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'dfdj', 'sfdys', '$2y$10$Yo3eBmtF5zZpwrnQ7Y2d6ueH0gbZQabcM29XZrdnHTg5lGyV14XJm', 'dsyufdu@gmail.com', '0000-00-00', 2, 0, '432473248', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Vashistha', 'kjklj;', '$2y$10$VMbDSLNUzqMlpziHb5imK.qNDAwI.vr7eytMrEUcJpdbEglTtTMlq', 'sdsdf@sadsa.com', '0000-00-00', 1, 0, '7898756789', '1', 5, 2, 1, 5, 2, 2, 0, 1, 1, '', '2015-04-04 19:54:52', '0000-00-00 00:00:00'),
(6, 'dskjdgk', 'chauhan', '$2y$10$FFi9YnZaVDhHzJD5drXrVOchQNOCfu9JxjkFeA/EwAI1TxmvrqMBW', 'arti@gmail.com', '1970-01-01', 2, 3, '45836598', '2', 4, 2, 2, 5, 2, 2, 0, 1, 1, 'FcVCWN1IP1lJ9o815cuFAKhE870CQv0qZ5GT281X1huAVMXujjvZqG56j5Di', '2015-04-22 11:46:26', '0000-00-00 00:00:00'),
(7, 'fgeufg', 'foiewr', '$2y$10$jA.nz/MUq90pHaExH.tjJ.FI3phne2O4FjH1FnzG.cS/4yJgeXtFy', 'afh@gmail.com', '0000-00-00', 1, 0, '6539845793', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'dfjkbekw', 'fwegf', '$2y$10$epDPt0c3VhbEjXVzGxhthOFT0w6p0ZqFaf9pU8t1MNojs461v2iFq', 'agcuy@gmail.com', '0000-00-00', 1, 0, '880-9-9-', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_parameters`
--

CREATE TABLE IF NOT EXISTS `user_parameters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `about_me` text NOT NULL,
  `weight` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `special_case` varchar(200) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `annual_income` varchar(200) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `f_occupation` varchar(200) NOT NULL,
  `m_occupation` varchar(200) NOT NULL,
  `brother` int(11) NOT NULL,
  `sister` int(11) NOT NULL,
  `about_family` text NOT NULL,
  `smoking` varchar(100) NOT NULL,
  `drinking` varchar(100) NOT NULL,
  `eating_habit` varchar(200) NOT NULL,
  `favourite_music` varchar(200) NOT NULL,
  `favourite_artist` varchar(200) NOT NULL,
  `favourite_song` varchar(200) NOT NULL,
  `favourite_movie` varchar(200) NOT NULL,
  `favourite_destination` varchar(200) NOT NULL,
  `favourite_book` varchar(200) NOT NULL,
  `favourite_auther` varchar(200) NOT NULL,
  `code` int(11) NOT NULL,
  `alt_number` int(11) NOT NULL,
  `relation` varchar(200) NOT NULL,
  `timeof_call` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_parameters`
--

INSERT INTO `user_parameters` (`id`, `user_id`, `about_me`, `weight`, `height`, `special_case`, `occupation`, `company_name`, `annual_income`, `experience`, `f_occupation`, `m_occupation`, `brother`, `sister`, `about_family`, `smoking`, `drinking`, `eating_habit`, `favourite_music`, `favourite_artist`, `favourite_song`, `favourite_movie`, `favourite_destination`, `favourite_book`, `favourite_auther`, `code`, `alt_number`, `relation`, `timeof_call`, `updated_at`, `created_at`) VALUES
(1, 6, 'jg jhygh jgjhj', '54 kg', '3', '1', '1', 'fhjddvd', '24', '2', '1', '1', 1, 2, 'wey guusd iewydiwe y', 'no', 'no', '1', 'ldy ga ga', 'jkdh we', 'dedew d', 'dewrew ', 'thrt n ', 'f jgduf ', 'dgs do', 1, 2147483647, 'relation', 'anytime', '2015-04-08 13:28:52', '2015-04-08 13:28:52'),
(2, 7, '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '2015-04-07 04:23:02', '2015-04-07 04:23:02'),
(3, 8, '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '2015-04-07 09:13:51', '2015-04-07 09:13:51');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
