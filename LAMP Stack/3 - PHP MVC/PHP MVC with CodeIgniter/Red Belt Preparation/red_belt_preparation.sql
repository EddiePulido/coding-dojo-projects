-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2015 at 06:38 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `red_belt_preparation`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `created_at`) VALUES
(16, 'Divergent', 'Veronica Roth', '2015-10-24 06:09:46'),
(18, 'Titanic', 'Rose', '2015-10-24 09:38:05'),
(21, 'Harry Potter', 'JK Rowling', '2015-10-24 10:33:02'),
(23, 'bleach', 'oni', '2015-10-24 10:40:57'),
(24, 'killer 3', 'run run', '2015-10-24 10:56:14'),
(26, 'sdfsdf', 'sdfgdfg', '2015-10-24 11:20:48'),
(27, 'sdfs', 'sdfsdf', '2015-10-24 11:21:08'),
(28, 'lovey', 'asd', '2015-10-25 12:45:40'),
(29, 'sdfsdfsdf', 'sdfsdfsdfsdf', '2015-10-25 04:08:27');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(45) DEFAULT NULL,
  `rating` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reviews_users_idx` (`user_id`),
  KEY `fk_reviews_books1_idx` (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `comment`, `rating`, `created_at`, `user_id`, `book_id`) VALUES
(1, 'Nice cool!', '3', '2015-10-24 06:09:46am', 5, 16),
(3, 'I love it', '2', '2015-10-24 09:38:05am', 5, 18),
(4, 'I love titanic', '3', '2015-10-24 10:07:43am', 5, 18),
(7, 'I love it', '3', '2015-10-24 10:33:03am', 5, 21),
(9, 'Love', '4', '2015-10-24 10:40:58am', 5, 23),
(10, 'wow', '3', '2015-10-24 10:56:14am', 5, 24),
(12, 'dfgdfgdfg', '4', '2015-10-24 11:20:48am', 5, 26),
(13, 'sdfsdf', '3', '2015-10-24 11:21:08am', 5, 27),
(14, 'sdfsdf', '3', '2015-10-24 11:21:20am', 5, 27),
(15, 'fuck you', '5', '2015-10-24 11:21:40am', 5, 27),
(18, 'sdfsdfsdf', '3', '2015-10-25 04:08:28am', 5, 29),
(19, 'Nice Awesome', '3', '2015-10-25 05:09:25am', 7, 16),
(20, 'wow your wierd', '4', '2015-10-25 05:11:01am', 7, 27),
(21, 'I love it too', '4', '2015-10-25 05:11:27am', 7, 18),
(22, 'This is epic book', '3', '2015-10-25 06:36:21am', 7, 24);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) DEFAULT NULL,
  `alias` varchar(75) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `alias`, `email`, `password`, `created_at`) VALUES
(5, 'nelson lee', 'mushy1693', 'mushy1693@live.com', '12345678', '2015-10-24 02:36:57'),
(7, 'shirley taing', 'chengtaing', 'chengtaing1277@yahoo.com', '12345678', '2015-10-24 02:46:15');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_reviews_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reviews_books1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
