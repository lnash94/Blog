-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2017 at 02:33 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `created_at`) VALUES
(1, 2, 'Business', '2017-08-27 13:13:14'),
(2, 1, 'Technology', '2017-08-27 13:13:14');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `body`, `created_at`) VALUES
(1, 13, 'sumudu', 'shn@gmail.com', 'great post', '2017-08-30 01:51:48'),
(2, 13, 'jayani', 'jayani@gmail.com', 'good one', '2017-09-01 05:46:56');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `body`, `post_image`, `created_at`) VALUES
(1, 1, 1, 'Post One', 'post-one', 'Emerging technologies are technologies that are perceived as capable of changing the status quo. These technologies are generally new but include older technologies that are still controversial and relatively undeveloped in potential, such as preimplantation genetic diagnosis and gene therapy which date to 1989 and 1990 respectively.', '', '2017-08-26 14:00:10'),
(2, 1, 0, 'Post Two', 'Post-Two', '<p><strong><img alt=\"laugh\" src=\"http://cdn.ckeditor.com/4.7.2/full/plugins/smiley/images/teeth_smile.png\" style=\"height:23px; width:23px\" title=\"laugh\" />Emerging technologies are characterized by radical novelty,</strong> relatively fast growth, coherence, prominent impact, and uncertainty and ambiguity. In other words, an emerging technology can be defined as &quot;a radically novel and relatively fast growing technology characterised by a certain degree of coherence persisting over time and with the potential to exert a considerable impact on the socio-economic domain(s) which is observed in terms of the composition of actors, institutions and patterns of interactions among those, along with the associated knowledge production processes. Its most prominent impact, however, lies in the future and so in the emergence phase is still somewhat uncertain and ambiguous.&quot;.</p>\r\n', '', '2017-08-26 14:00:10'),
(4, 2, 1, 'Posts Three', 'Posts-Three', '<h2><tt><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\"><img alt=\"cheeky\" src=\"http://cdn.ckeditor.com/4.7.2/full/plugins/smiley/images/tongue_smile.png\" style=\"height:23px; width:23px\" title=\"cheeky\" /><img alt=\"wink\" src=\"http://cdn.ckeditor.com/4.7.2/full/plugins/smiley/images/wink_smile.png\" style=\"height:23px; width:23px\" title=\"wink\" /> this is my third post </span></span></tt><tt><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">I</span></span></tt><tt><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\"> hope you will enjoy it</span></span></tt></h2>\r\n', '', '2017-08-27 11:53:07'),
(12, 1, 1, 'test post', 'test-post', '<p>test post test</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'nurse1.png', '2017-08-28 10:30:25'),
(13, 2, 1, 'laravel', 'laravel', '<p><strong>Laravel</strong> Scout provides a simple, driver based solution for adding full-text search to your&nbsp;<a href=\"https://laravel.com/docs/5.4/eloquent\">Eloquent models</a>. Using model observers, Scout will automatically keep your search indexes in sync with your Eloquent records.</p>\r\n\r\n<p>Currently, Scout ships with an&nbsp;<a href=\"https://www.algolia.com/\">Algolia</a>&nbsp;driver; however, writing custom drivers is simple and you are free to extend Scout with your own search implementations.&nbsp;<img alt=\"smiley\" src=\"http://cdn.ckeditor.com/4.7.2/full/plugins/smiley/images/regular_smile.png\" style=\"height:23px; width:23px\" title=\"smiley\" /></p>\r\n', 'download.png', '2017-08-30 00:41:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `zipcode`, `email`, `username`, `password`, `register_date`) VALUES
(1, 'sumudu', '123', 'sumudunissanka@yahoo.com', 'lnash', '202cb962ac59075b964b07152d234b70', '2017-08-30 16:39:57'),
(2, 'jayani', '123', 'jayani@gmail.com', 'jayani', '202cb962ac59075b964b07152d234b70', '2017-09-01 05:38:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
