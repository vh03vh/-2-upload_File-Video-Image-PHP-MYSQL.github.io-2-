-- phpMyAdmin SQL Dump
-- version 2.11.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2022 at 06:51 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `randomsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `file_id` int(11) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  `file` varchar(500) NOT NULL,
  PRIMARY KEY  (`file_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`file_id`, `name`, `file`) VALUES
(1, 'winrar-x64-540', 'files/winrar-x64-540.exe'),
(2, 'Diffie-Hellman', 'files/Diffie-Hellman.docx'),
(3, 'df', 'files/df.txt');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL auto_increment,
  `image` text NOT NULL,
  `location` text NOT NULL,
  PRIMARY KEY  (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `image`, `location`) VALUES
(1, '1575642259.jpg', 'upload/1575642259.jpg'),
(2, '1575642263.jpg', 'upload/1575642263.jpg'),
(3, '1575642267.jpg', 'upload/1575642267.jpg'),
(4, '1575642272.jpg', 'upload/1575642272.jpg'),
(5, '1575642276.jpeg', 'upload/1575642276.jpeg'),
(6, '1651613729.jpeg', 'upload/1651613729.jpeg'),
(7, '1651614034.jpeg', 'upload/1651614034.jpeg'),
(8, '1651614513.jpg', 'upload/1651614513.jpg'),
(10, '1651677025.jpg', 'upload/1651677025.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL auto_increment,
  `video_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  PRIMARY KEY  (`video_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_name`, `location`) VALUES
(6, '202205061651851776', 'video/202205061651851776.mp4'),
(7, '202205071651855729', 'video/202205071651855729.mp4');
