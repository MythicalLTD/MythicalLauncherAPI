-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 10:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mythicalsystems`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `appName` text NOT NULL,
  `appLogo` text NOT NULL,
  `appBg` text DEFAULT 'https://cdn.mythicalnodes.xyz/minecraft.jpg',
  `appMainColour` text NOT NULL DEFAULT '\'6, 14, 74\'',
  `appDiscord` text NOT NULL,
  `enable_discordrpc` enum('true','false') NOT NULL DEFAULT 'true',
  `discord_id` text NOT NULL DEFAULT '1038164770244788254',
  `discordrpc_button1_text` text NOT NULL DEFAULT 'Github',
  `discordrpc_button1_url` text NOT NULL DEFAULT 'https://github.com/MythicalLTD/MythicalLauncher',
  `discordrpc_button2_text` text NOT NULL DEFAULT 'Website',
  `discordrpc_button2_url` text NOT NULL DEFAULT 'https://mythicalsystems.tech',
  `discordrpc_description` text NOT NULL DEFAULT 'Free custom minecraft launcher!',
  `appVote` text NOT NULL,
  `appWebsite` text NOT NULL,
  `appStore` text NOT NULL,
  `appLang` text NOT NULL,
  `appMaintenance` text NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `appName`, `appLogo`, `appBg`, `appMainColour`, `appDiscord`, `enable_discordrpc`, `discord_id`, `discordrpc_button1_text`, `discordrpc_button1_url`, `discordrpc_button2_text`, `discordrpc_button2_url`, `discordrpc_description`, `appVote`, `appWebsite`, `appStore`, `appLang`, `appMaintenance`) VALUES
(1, 'F1xMC', 'https://media.discordapp.net/attachments/1053618904578150430/1068446773410025502/DAS.png', 'https://images5.alphacoders.com/556/556729.jpg', '#F82626', 'https://discord.f1xmc.ro', 'true', '1038164770244788254', 'Github', 'https://github.com/MythicalLTD/MythicalLauncher', 'Website', 'https://mythicalsystems.tech', 'Free custom minecraft launcher!', 'https://vote.f1xmc.ro', 'https://f1xmc.ro', 'https://store.f1xmc.ro', 'en', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `isbanned` text NOT NULL DEFAULT '0',
  `isadmin` text NOT NULL DEFAULT '0',
  `role` text NOT NULL DEFAULT 'Member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Indexes for dumped tables
--

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
