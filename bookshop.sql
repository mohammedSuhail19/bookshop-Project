-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 09:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(99) NOT NULL,
  `title` longtext NOT NULL,
  `image` varchar(9999) NOT NULL,
  `price` longtext NOT NULL,
  `short_desc` mediumtext NOT NULL,
  `full_desc` longtext NOT NULL,
  `author` longtext NOT NULL,
  `cate` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `image`, `price`, `short_desc`, `full_desc`, `author`, `cate`) VALUES
(72, 'Book Title', 'download (1).jpeg', '22', 'eragerrgaer', 'btlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgb', 'errgrstgrtg', 'Horror'),
(73, 'Book Title', 'download.png', '33', 'erghrtahgaretghartharth', 'btlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgb', 'ergerrgearrg', 'Drama'),
(74, 'Book Title', 'download.jpeg', '44', 'regwwyh4szgt5sw4yz', 'btlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgbbtlnbnleruiahberuiheruuygvbuyfgbruugbrgb', 'ewgaer', 'Romantic');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `title` longtext NOT NULL,
  `image` mediumtext NOT NULL,
  `price` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `title`, `image`, `price`) VALUES
(71, 'Book Title', 'download (1).jpeg', '22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `cate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`) VALUES
(1, 'user@gmail.com', 'user', 'user'),
(2, 'admin@gmail.com', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
