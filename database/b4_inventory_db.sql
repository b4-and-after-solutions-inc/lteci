-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 02, 2019 at 09:05 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
--ok na to ?

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b4_inventory_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `mi` varchar(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `isactive` bit(1) NOT NULL DEFAULT b'1',
  `createdby_id` int(11) DEFAULT NULL,
  `created_datetime` datetime DEFAULT NULL,
  `updatedby_id` int(11) DEFAULT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

DROP TABLE IF EXISTS `tbl_branch`;
CREATE TABLE IF NOT EXISTS `tbl_branch` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `business_id` int(11) DEFAULT NULL,
  `isactive` bit(1) NOT NULL DEFAULT b'1',
  `createdby_id` int(11) DEFAULT NULL,
  `created_datetime` datetime DEFAULT NULL,
  `updatedby_id` int(11) DEFAULT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_business`
--

DROP TABLE IF EXISTS `tbl_business`;
CREATE TABLE IF NOT EXISTS `tbl_business` (
  `business_id` int(11) NOT NULL AUTO_INCREMENT,
  `business_name` varchar(255) DEFAULT NULL,
  `business_logo` varchar(200) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `createdby_id` int(11) DEFAULT NULL,
  `created_datetime` datetime DEFAULT NULL,
  `updatedby_id` int(11) DEFAULT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  `isactive` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`business_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(250) DEFAULT NULL,
  `business_id` int(11) DEFAULT NULL,
  `isactive` bit(1) NOT NULL DEFAULT b'1',
  `createdby_id` int(11) DEFAULT NULL,
  `created_datetime` datetime DEFAULT NULL,
  `updatedby_id` int(11) DEFAULT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_delivery`
--

DROP TABLE IF EXISTS `tbl_delivery`;
CREATE TABLE IF NOT EXISTS `tbl_delivery` (
  `delivery_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `capital_per_pack` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`delivery_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_delivery_transaction`
--

DROP TABLE IF EXISTS `tbl_delivery_transaction`;
CREATE TABLE IF NOT EXISTS `tbl_delivery_transaction` (
  `delivery_transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `business_id` int(11) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `delivery_id` int(11) DEFAULT NULL,
  `personnel_id` int(11) DEFAULT NULL,
  `createdby_id` int(11) DEFAULT NULL,
  `created_datetime` datetime DEFAULT NULL,
  `updatedby_id` int(11) DEFAULT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`delivery_transaction_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

DROP TABLE IF EXISTS `tbl_item`;
CREATE TABLE IF NOT EXISTS `tbl_item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(250) DEFAULT NULL,
  `business_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `item_type` varchar(250) DEFAULT NULL,
  `current_stock` varchar(250) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  `isactive` bit(1) NOT NULL DEFAULT b'1',
  `createdby_id` int(11) DEFAULT NULL,
  `created_datetime` datetime DEFAULT NULL,
  `updatedby_id` int(11) DEFAULT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_details`
--

DROP TABLE IF EXISTS `tbl_item_details`;
CREATE TABLE IF NOT EXISTS `tbl_item_details` (
  `item_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `capital_per_pack` decimal(10,2) DEFAULT NULL,
  `pieces_per_pack` double DEFAULT NULL,
  `cost_per_piece` decimal(10,2) DEFAULT NULL,
  `previous_inventory` double DEFAULT NULL,
  `ending_inventory` double DEFAULT NULL,
  `discrepancy` double DEFAULT NULL,
  `delivery_from_outside` double DEFAULT NULL,
  `createdby_id` int(11) DEFAULT NULL,
  `created_datetime` datetime DEFAULT NULL,
  `updatedby_id` int(11) DEFAULT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`item_details_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_transaction`
--

DROP TABLE IF EXISTS `tbl_item_transaction`;
CREATE TABLE IF NOT EXISTS `tbl_item_transaction` (
  `item_transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `over_short_sales` decimal(10,2) DEFAULT NULL,
  `reported_total_sales` double DEFAULT NULL,
  `report_date` datetime DEFAULT NULL,
  `personnel_id` int(11) DEFAULT NULL,
  `createdby_id` int(11) DEFAULT NULL,
  `created_datetime` datetime DEFAULT NULL,
  `updatedby_id` int(11) DEFAULT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`item_transaction_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logs`
--

DROP TABLE IF EXISTS `tbl_logs`;
CREATE TABLE IF NOT EXISTS `tbl_logs` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `personnel_id` int(11) DEFAULT NULL,
  `logs_datetime` datetime DEFAULT NULL,
  `action` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_personnel`
--

DROP TABLE IF EXISTS `tbl_personnel`;
CREATE TABLE IF NOT EXISTS `tbl_personnel` (
  `personnel_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `MI` varchar(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `isactive` bit(1) NOT NULL DEFAULT b'1',
  `createdby_id` int(11) DEFAULT NULL,
  `created_datetime` datetime DEFAULT NULL,
  `updatedby_id` int(11) DEFAULT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  `business_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`personnel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
