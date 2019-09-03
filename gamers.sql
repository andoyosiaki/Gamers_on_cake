-- MySQL dump 10.13  Distrib 5.6.44, for Linux (x86_64)
--
-- Host: localhost    Database: gamers
-- ------------------------------------------------------
-- Server version	5.6.44

CREATE DATABASE gamers;
USE gamers;

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `title` varchar(255) NOT NULL,
  `hardware` varchar(255) NOT NULL,
  `texts` text NOT NULL,
  `image` text NOT NULL,
  `itemurl` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) NOT NULL,
  `authoricon` int(11) NOT NULL,
  `authorname` varchar(255) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES ('test','$2y$10$Cekrw5LZOtCv.QuqIaSA.u7mU.0XA7mP239lrEkNEKttDo5qGSWf.','admin','0',1);


-- Dump completed on 2019-09-02  8:34:19
