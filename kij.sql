-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2015 at 04:02 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kij`
--

-- --------------------------------------------------------

--
-- Table structure for table `cert`
--

CREATE TABLE IF NOT EXISTS `cert` (
  `id_cert` varchar(10) NOT NULL,
  `cert` varchar(1024) NOT NULL,
  `request_id` varchar(10) NOT NULL,
  PRIMARY KEY (`id_cert`),
  KEY `FK_cert_cert_request` (`request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cert_request`
--

CREATE TABLE IF NOT EXISTS `cert_request` (
  `request_id` varchar(10) NOT NULL,
  `common_name` varchar(50) NOT NULL,
  `organization_name` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `serial_number` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id_country` varchar(3) NOT NULL,
  PRIMARY KEY (`request_id`),
  KEY `FK3` (`username`),
  KEY `FK4` (`id_country`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id_country` varchar(3) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_country`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `csr`
--

CREATE TABLE IF NOT EXISTS `csr` (
  `id_csr` varchar(10) NOT NULL,
  `csr` varchar(1024) NOT NULL,
  `request_id` varchar(10) NOT NULL,
  PRIMARY KEY (`id_csr`),
  KEY `FK2` (`request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cert`
--
ALTER TABLE `cert`
  ADD CONSTRAINT `FK_cert_cert_request` FOREIGN KEY (`request_id`) REFERENCES `cert_request` (`request_id`);

--
-- Constraints for table `cert_request`
--
ALTER TABLE `cert_request`
  ADD CONSTRAINT `FK3` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `FK4` FOREIGN KEY (`id_country`) REFERENCES `country` (`id_country`);

--
-- Constraints for table `csr`
--
ALTER TABLE `csr`
  ADD CONSTRAINT `FK2` FOREIGN KEY (`request_id`) REFERENCES `cert_request` (`request_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
