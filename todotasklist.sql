--
-- Host: 127.0.0.1:3308
-- Generation Time: Sep 24, 2020 at 11:05 AM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE `todotasklist`;
USE `todotasklist`;

--
-- Database: `todotasklist`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `role` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`email`),
  KEY `index_email` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(17, 'Goran eee', 'goran@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 'developer'),
(18, 'Marko', 'ere@ere.com', 'b59c67bf196a4758191e42f76670ceba', 'admin'),
(19, 'Petar', 'pera@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 'developer'),
(25, 'Marinko', 'rokvic@ggg.com', '123', 'developer'),
(27, 'zika mrma', 'zika@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(29, 'fdasfergrgeer', 'erewwww@ere.com', '1111', 'admin'),
(30, 'Bogdan', 'bogdan@gmail.com', '202cb962ac59075b964b07152d234b70', 'developer'),
(31, 'Branko', 'branko@gmail.com', '202cb962ac59075b964b07152d234b70', 'developer'),
(32, 'Mirkoo', 'mirko@gmail.com', '202cb962ac59075b964b07152d234b70', 'developer'),
(34, 'Krsta', 'krsta@gmail.com', '202cb962ac59075b964b07152d234b70', 'developer'),
(35, 'gtgt', 'gtgt@kkk.com', '202cb962ac59075b964b07152d234b70', 'pending'),
(36, 'Ivica', 'ivica@gmail.com', '202cb962ac59075b964b07152d234b70', 'developer'),
(37, 'slobodan', 'sloba@gmail.com', '202cb962ac59075b964b07152d234b70', 'developer'),
(39, 'Jelena', 'jela@gmail.com', '202cb962ac59075b964b07152d234b70', 'developer'),
(40, 'Marinko', 'mare@gmail.com', '202cb962ac59075b964b07152d234b70', 'pending'),
(41, 'Darko', 'ere@ere.com', '202cb962ac59075b964b07152d234b70', 'pending'),
(43, 'Lazar', 'budala@email.com', 'd41d8cd98f00b204e9800998ecf8427e', 'admin'),
(45, 'Lazar', 'budalalazar@email.com', 'a01610228fe998f515a72dd730294d87', 'developer');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` timestamp NOT NULL,
  `completed` tinyint(1) DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`title`),
  KEY `user_id_idx` (`user_id`),
  KEY `index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `title`, `description`, `created_at`, `completed`, `completed_at`) VALUES
(4, 45, 'Opet neki taskeeeeee1231234', 'Opet opis nekog taskaagfdngf', '2020-06-01 19:44:47', 0, '2020-07-20 15:15:56'),
(6, 19, 'neki title', 'neki vbody', '2020-06-01 06:48:43', 1, '2020-06-01 06:48:43'),
(8, 17, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus efficitur molestie. Proin consequat aliquet ligula, id consectetur lorem scelerisque vel. Vestibulum sit amet viverra est, sit amet vehicula est. Donec congue porta placerat. Maecenas in velit turpis. Aenean semper libero at eros ultrices malesuada. Fusce gravida accumsan est. Nulla urna arcu, mollis non nulla sit amet, egestas tincidunt quam. Praesent tincidunt fringilla felis, sit amet dapibus augue mattis a. Ut mollis elit nunc, eget porttitor mi lacinia ac. Vivamus ac odio orci. Suspendisse maximus sagittis mi, id maximus tortor vulputate nec. Donec posuere pharetra tincidunt. Sed vestibulum purus eu felis varius porta. Suspendisse dolor ligula, vehicula a ipsum eget, auctor condimentum dolor.\r\n\r\nVivamus bibendum enim ac nisi imperdiet ultrices. Suspendisse potenti. Aliquam erat volutpat. Aenean eu nisl tempor ipsum venenatis lobortis. Nulla nec lectus euismod, tristique nibh cursus, feugiat enim. Maecenas volutpat orci mauris, non congue augue scelerisque et. Sed dictum accumsan risus vitae interdum. Ut a leo semper, efficitur neque non, egestas nibh. Aenean non massa consectetur, sagittis massa a, suscipit diam. Sed vitae purus sed dui congue euismod. Praesent convallis, nisi et sodales tempus, est enim placerat leo, sit amet congue orci diam in augue.', '2020-06-01 19:47:13', 0, '2020-06-01 19:49:06'),
(9, 34, 'Novi task', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec sagittis mauris, non commodo mauris. Praesent sit amet dictum neque. Mauris egestas nisl a lacus dignissim, non egestas dolor tristique. Nulla consequat tristique lacus. Donec eget sem rhoncus, elementum dui non, facilisis nunc. Curabitur fringilla nunc euismod ante dapibus, nec mattis lorem gravida. Sed tincidunt dui quis odio posuere tincidunt. Nulla facilisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse aliquet ultrices convallis. Aliquam eu nibh nec neque gravida pulvinar.\r\n\r\nProin sed nisi erat. Nam eget tincidunt arcu, in condimentum quam. Sed a feugiat felis, faucibus tristique metus. Donec luctus iaculis lectus. Curabitur vel quam a augue mattis accumsan ut vel metus. Vestibulum bibendum ex eu sapien mollis, id rhoncus tortor malesuada. Vestibulum nec bibendum est. Donec ultricies erat vitae erat fermentum, eget fermentum lorem laoreet. Nunc laoreet laoreet justo vel condimentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin id nulla purus. Etiam accumsan ex ante, non dignissim quam rutrum fringilla.', '2020-06-01 08:28:44', 1, '2020-06-01 08:28:44'),
(10, 39, 'Za jelenu', 'OÅ¡iÅ¡aj pse', '2020-06-01 17:08:59', 1, '2020-06-01 17:08:59'),
(12, 30, 'FD', 'BFD', '2020-06-01 19:50:20', 1, '2020-06-01 19:52:15'),
(13, 45, 'Bilo sta', 'Opis za bilo sta', '2020-07-20 15:16:59', 0, '2020-07-20 15:20:30');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`) USING BTREE,
  KEY `task_id` (`task_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `user_id`, `task_id`, `text`, `created_at`) VALUES
(12, 18, 6, '123431', '2020-09-23 21:59:27'),
(10, 19, 6, 'fvses123', '2020-09-23 16:27:37'),
(9, 19, 6, 'valjda sad radi1123', '2020-09-23 16:22:20'),
(6, 18, 6, '2121', '2020-09-22 19:05:37'),
(7, 18, 6, 'grwgrre', '2020-09-22 19:08:16'),
(8, 27, 6, 'gsgsd', '2020-09-22 19:11:39'),
(11, 18, 4, '123', '2020-09-23 21:48:51');


--
-- Constraints for dumped tables
--

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_id` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
