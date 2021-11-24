CREATE DATABASE multivendormarketplace;
USE multivendormarketplace;

-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2021 at 03:09 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `multivendormarketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `user_type`) VALUES
('admin', 'admin', '1'),
('hero', 'hero', '2'),
('nagasrinu482@gmail.com', 'prasad', '3'),
('srinu', 'srinu', '2'),
('voidmain', 'voidmain', '2');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `pid` int(5) NOT NULL,
  `orderdate` varchar(50) NOT NULL,
  `orderstatus` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userid`, `pid`, `orderdate`, `orderstatus`) VALUES
(1, 'nagasrinu482@gmail.com', 2, '2021-09-20 06:36:23', 'Packing'),
(2, 'nagasrinu482@gmail.com', 2, '2021-09-20 06:41:00', 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `expdate` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `type` varchar(50) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `store` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `name`, `price`, `mname`, `expdate`, `description`, `type`, `product_image`, `store`) VALUES
(2, 'mobile', '5000', 'nokia', '2021-09-22', ' asdfsadf', 'electronics', 'srinu.jpg', 'hero');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE IF NOT EXISTS `stores` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`username`, `name`, `address`, `mobile`, `email`) VALUES
('hero', 'prasad', 'Hyderabad', '9989273669', 'nagasrinu482@gmail.com'),
('srinu', 'ss collection', 'Hyderabad', '9989273669', 'nagasrinu482@gmail.com'),
('voidmain', 'voidmain abc', 'Hyderabad', '9989273669', 'nagasrinu482@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `name`, `mobile`, `address`) VALUES
('nagasrinu482@gmail.com', 'Prasad', '9989273669', 'Hyderabad');
