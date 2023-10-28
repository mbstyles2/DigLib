-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: July 13, 2023 at 02:01 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newdb`
--

CREATE TABLE `users` (
`id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`firstname` VARCHAR(30) NOT NULL,
`lastname` VARCHAR(30) NOT NULL,
`username` VARCHAR(30) NOT NULL,
`email` VARCHAR(50) NOT NULL,
`mobile` VARCHAR(20) NOT NULL,
`password` VARCHAR(50) NOT NULL,
`image` BLOB NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `newdb`.`admin` 
(
`id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`firstname` VARCHAR(30) NOT NULL,
`lastname` VARCHAR(30) NOT NULL,
`username` VARCHAR(30) NOT NULL,
`email` VARCHAR(50) NOT NULL,
`password` VARCHAR(30) NOT NULL,
`mobile` VARCHAR(20) NOT NULL,
`image` BLOB NOT NULL
 ) ENGINE = InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `users`
    ADD PRIMARY KEY (`id`);
    
ALTER TABLE `users` ADD `mobile` VARCHAR(20) NULL AFTER `password`;

ALTER TABLE `users`
    MODIFY `id` int(11) NOT NULL,
    AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;



CREATE TABLE `newdb`.`books` 
(`id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY , 
`bookname` VARCHAR(30) NOT NULL , 
`bookdesc` TEXT NOT NULL , 
`bookauthor` VARCHAR(30) NOT NULL ,
`booklang` VARCHAR(30) NOT NULL , 
`bookfile` BLOB NOT NULL , 
`uploadername` VARCHAR(50) NOT NULL , 
`uploaderemail` VARCHAR(30) NOT NULL , 
-- `image` BLOB NOT NULL
 ) ENGINE = InnoDB DEFAULT CHARSET=latin1;