-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2019 at 02:11 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuel`
--

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `name_of_entity` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sector_of_entity` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `function` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `name_of_entity`, `sector_of_entity`, `address`, `function`, `phone_number`, `user_id`) VALUES
(4, 'Mirza', '1111', 'D-Type-Colony Goal Chowk, Nazd Ilahi Jamiya Masjid', '111', '3000421077', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pos`
--

CREATE TABLE `pos` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_id` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pos`
--

INSERT INTO `pos` (`id`, `name`, `address`, `tel`, `manager_id`, `partner_id`) VALUES
(2, 'Abdul Manan', 'D-Type-Colony Goal Chowk, Nazd Ilahi Jamiya Masjid', '+923000421077', 2, 10),
(3, 'Abdul Manan3', 'Hello', '923000421077', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `pos_manager`
--

CREATE TABLE `pos_manager` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pos_manager`
--

INSERT INTO `pos_manager` (`id`, `name`, `surname`, `birth_date`, `nic`, `email`, `address`) VALUES
(1, 'Abdul Manan', 'Abdul Rasheed', '10/10/1996', '2147483647', 'mirza.amanan@gmail.com', '38000'),
(2, 'Abdul Manan 2', 'Manan', '10/10/1996', '3310084985601', 'mirza.amanan@gmail.com', 'D-Type-Colony Goal Chowk, Nazd Ilahi Jamiya Masjid'),
(3, 'Manager Test', 'Testing', '25/11/2009', '3310042', 'mirza.amanan@gmail.com', 'testing address');

-- --------------------------------------------------------

--
-- Table structure for table `sale_man`
--

CREATE TABLE `sale_man` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sur_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localisation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sale_man`
--

INSERT INTO `sale_man` (`id`, `name`, `sur_name`, `birth_date`, `nic`, `phone_number`, `email`, `address`, `type`, `localisation`) VALUES
(1, 'Abdul Manan', 'Manan', '07/01/2019', '1111', '3000421077', 'mirza.amanan@gmail.com', 'D-Type-Colony Goal Chowk, Nazd Ilahi Jamiya Masjid', 'adhoc', 'Hello'),
(2, 'Abdul Manan', 'Manan', '07/01/2019', '1111', '3000421077', 'mirza.amanan@gmail.com', 'D-Type-Colony Goal Chowk, Nazd Ilahi Jamiya Masjid', 'adhoc', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sur_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `name`, `sur_name`) VALUES
(1, 'hello', 'hello', 'mirza.amanan@gmail.com2', 'mirza.amanan@gmail.com2', 1, NULL, '$2y$13$OoWZkH.TWxljT8zy1ZZf5uqP.IJLZ5WSiRgcoWpW86M7pNagKuvdW', '2019-06-16 10:49:59', NULL, NULL, 'a:0:{}', 'aaa', 'aaa'),
(2, 'mirza.amanan@gmail.com1', 'mirza.amanan@gmail.com1', 'mirza.amanan@gmail.com1', 'mirza.amanan@gmail.com1', 0, NULL, '$2y$13$ZU0PZcllpXtJysMOz3e/fe01Tnrs0MfOvGybt1pZAhPtfzDJjAHcy', NULL, NULL, NULL, 'a:0:{}', 'Hello2', 'aaa'),
(10, 'mirza.amanan@gmail.com', 'mirza.amanan@gmail.com', 'mirza.amanan@gmail.com', 'mirza.amanan@gmail.com', 1, NULL, '$2y$13$fIXUA38P0gCz15bCrHiSEuZ8AbiECAq.b79IyFFA31k8Y.4ogFSLm', '2019-06-17 12:17:47', NULL, NULL, 'a:2:{i:0;s:12:\"ROLE_PARTNER\";i:1;s:16:\"ROLE_SUPER_ADMIN\";}', 'Abdul Manan 2', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_312B3E16A76ED395` (`user_id`);

--
-- Indexes for table `pos`
--
ALTER TABLE `pos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_80D9E6AC783E3463` (`manager_id`),
  ADD KEY `IDX_80D9E6AC9393F8FE` (`partner_id`);

--
-- Indexes for table `pos_manager`
--
ALTER TABLE `pos_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_man`
--
ALTER TABLE `sale_man`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pos`
--
ALTER TABLE `pos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pos_manager`
--
ALTER TABLE `pos_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sale_man`
--
ALTER TABLE `sale_man`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `partner`
--
ALTER TABLE `partner`
  ADD CONSTRAINT `FK_312B3E16A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `pos`
--
ALTER TABLE `pos`
  ADD CONSTRAINT `FK_80D9E6AC783E3463` FOREIGN KEY (`manager_id`) REFERENCES `pos_manager` (`id`),
  ADD CONSTRAINT `FK_80D9E6AC9393F8FE` FOREIGN KEY (`partner_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
