-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2016 at 04:08 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c9`
--

-- --------------------------------------------------------

--
-- Table structure for table `dps`
--

CREATE TABLE IF NOT EXISTS `dps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eagleFile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `svgFile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pdf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `license` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productUsedIn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dps_slug_unique` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dps`
--

INSERT INTO `dps` (`id`, `slug`, `name`, `eagleFile`, `thumbnail`, `svgFile`, `pdf`, `description`, `license`, `productUsedIn`, `created_at`, `updated_at`) VALUES
(1, 'FT231XSUSBtoSerial', 'FT231XS USB to Serial', 'eaglefiles/FT231XSUSBtoSerial.sch', 'thumbnail/FT231XSUSBtoSerial.jpg', 'svg/FT231XSUSBtoSerial.svg', 'pdf/FT231XSUSBtoSerial.pdf', 'this is usb to ttl communication bridge', 'Creative commans', 'https://www.sparkfun.com/products/12757', '2016-04-14 00:00:00', NULL),
(2, 'Power_VIN_5v_LM1117', 'Power 5v out LM1117', 'eagleFiles/Power_VIN_5v_LM1117.sch', 'thumbnail/Power_VIN_5v_LM1117.jpg', 'svg/interface.svg', 'pdf/Power_VIN_5v_LM1117.pdf', 'power 5 volts linear drop module', 'Creative Commons', 'https://www.sparkfun.com/products/12757', '2016-04-14 00:00:00', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
