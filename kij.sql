-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2015 at 05:37 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pki_ca`
--

-- --------------------------------------------------------

--
-- Table structure for table `cert`
--

CREATE TABLE IF NOT EXISTS `cert` (
  `id_cert` int(11) NOT NULL AUTO_INCREMENT,
  `cert` varchar(1024) NOT NULL,
  `request_id` int(11) NOT NULL,
  PRIMARY KEY (`id_cert`),
  KEY `FK_cert_cert_request` (`request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cert_db`
--

CREATE TABLE IF NOT EXISTS `cert_db` (
  `id_certdb` int(11) NOT NULL,
  `id_csr` int(11) NOT NULL,
  `id_cert` int(11) NOT NULL,
  `expire_date` varchar(50) NOT NULL,
  `revoke_date` varchar(50) NOT NULL,
  `dn` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `serial_number` varchar(50) NOT NULL,
  PRIMARY KEY (`id_certdb`),
  KEY `id_csr` (`id_csr`),
  KEY `id_cert` (`id_cert`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cert_request`
--

CREATE TABLE IF NOT EXISTS `cert_request` (
  `request_id` int(11) NOT NULL,
  `common_name` varchar(50) NOT NULL,
  `organization_name` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `serial_number` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `organizational_unit_name` varchar(50) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `state_province_name` varchar(50) NOT NULL,
  PRIMARY KEY (`request_id`),
  KEY `FK3` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `csr`
--

CREATE TABLE IF NOT EXISTS `csr` (
  `id_csr` int(11) NOT NULL AUTO_INCREMENT,
  `csr` varchar(1024) NOT NULL,
  `request_id` int(11) NOT NULL,
  PRIMARY KEY (`id_csr`),
  KEY `FK2` (`request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  ADD CONSTRAINT `cert_cert_request` FOREIGN KEY (`request_id`) REFERENCES `cert_request` (`request_id`);

--
-- Constraints for table `cert_db`
--
ALTER TABLE `cert_db`
  ADD CONSTRAINT `cert_certdb` FOREIGN KEY (`id_cert`) REFERENCES `cert` (`id_cert`),
  ADD CONSTRAINT `csr_certdb` FOREIGN KEY (`id_csr`) REFERENCES `csr` (`id_csr`);

--
-- Constraints for table `cert_request`
--
ALTER TABLE `cert_request`
  ADD CONSTRAINT `FK3` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `csr`
--
ALTER TABLE `csr`
  ADD CONSTRAINT `csr_cert_request` FOREIGN KEY (`request_id`) REFERENCES `cert_request` (`request_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
