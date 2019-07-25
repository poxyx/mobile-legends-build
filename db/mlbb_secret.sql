-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 11:22 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlbb_secret`
--

-- --------------------------------------------------------

--
-- Table structure for table `emblem`
--

CREATE TABLE `emblem` (
  `ID` int(11) NOT NULL,
  `EMBLEM_NAME` varchar(255) DEFAULT NULL,
  `EMBLEM_PHYSICAL_ATTACK` float DEFAULT '0',
  `EMBLEM_HP_REGEN` float DEFAULT '0',
  `EMBLEM_CRIT_CHANCE` float DEFAULT '0',
  `EMBLEM_HP` float DEFAULT '0',
  `EMBLEM_ATTACK_SPEED` float DEFAULT '0',
  `EMBLEM_MAGIC_POWER` float DEFAULT '0',
  `EMBLEM_CDR` float DEFAULT '0',
  `EMBLEM_MANA` float DEFAULT '0',
  `EMBLEM_ARMOR` float DEFAULT '0',
  `EMBLEM_MAGIC_ARMOR` float DEFAULT '0',
  `EMBLEM_LIFESTEAL` float DEFAULT '0',
  `EMBLEM_MOVE_SPEED` float DEFAULT '0',
  `EMBLEM_PHYSICAL_PEN` float DEFAULT '0',
  `EMBLEM_MAGIC_PEN` float DEFAULT '0',
  `EMBLEM_SPELL_VAMP` float DEFAULT '0',
  `EMBLEM_PHYSICAL_ATTACK_GR` float DEFAULT '0',
  `EMBLEM_HP_REGEN_GR` float DEFAULT '0',
  `EMBLEM_CRIT_CHANCE_GR` float DEFAULT '0',
  `EMBLEM_HP_GR` float DEFAULT '0',
  `EMBLEM_ATTACK_SPEED_GR` float DEFAULT '0',
  `EMBLEM_MAGIC_POWER_GR` float DEFAULT '0',
  `EMBLEM_CDR_GR` float DEFAULT '0',
  `EMBLEM_MANA_GR` float DEFAULT '0',
  `EMBLEM_ARMOR_GR` float DEFAULT '0',
  `EMBLEM_MAGIC_ARMOR_GR` float DEFAULT '0',
  `EMBLEM_LIFESTEAL_GR` float DEFAULT '0',
  `EMBLEM_MOVE_SPEED_GR` float DEFAULT '0',
  `EMBLEM_PHYSICAL_PEN_GR` float DEFAULT '0',
  `EMBLEM_MAGIC_PEN_GR` float DEFAULT '0',
  `EMBLEM_SPELL_VAMP_GR` float DEFAULT '0',
  `EMBLEM_MANA_REGEN` float DEFAULT '0',
  `EMBLEM_MANA_REGEN_GR` float DEFAULT '0',
  `EMBLEM_PHYSICAL_PEN_FLAT` float DEFAULT '0',
  `EMBLEM_PHYSICAL_PEN_FLAT_GR` float DEFAULT '0',
  `EMBLEM_MAGIC_PEN_FLAT` float DEFAULT '0',
  `EMBLEM_MAGIC_PEN_FLAT_GR` float DEFAULT '0',
  `EMBLEM_PHOTO` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emblem`
--

INSERT INTO `emblem` (`ID`, `EMBLEM_NAME`, `EMBLEM_PHYSICAL_ATTACK`, `EMBLEM_HP_REGEN`, `EMBLEM_CRIT_CHANCE`, `EMBLEM_HP`, `EMBLEM_ATTACK_SPEED`, `EMBLEM_MAGIC_POWER`, `EMBLEM_CDR`, `EMBLEM_MANA`, `EMBLEM_ARMOR`, `EMBLEM_MAGIC_ARMOR`, `EMBLEM_LIFESTEAL`, `EMBLEM_MOVE_SPEED`, `EMBLEM_PHYSICAL_PEN`, `EMBLEM_MAGIC_PEN`, `EMBLEM_SPELL_VAMP`, `EMBLEM_PHYSICAL_ATTACK_GR`, `EMBLEM_HP_REGEN_GR`, `EMBLEM_CRIT_CHANCE_GR`, `EMBLEM_HP_GR`, `EMBLEM_ATTACK_SPEED_GR`, `EMBLEM_MAGIC_POWER_GR`, `EMBLEM_CDR_GR`, `EMBLEM_MANA_GR`, `EMBLEM_ARMOR_GR`, `EMBLEM_MAGIC_ARMOR_GR`, `EMBLEM_LIFESTEAL_GR`, `EMBLEM_MOVE_SPEED_GR`, `EMBLEM_PHYSICAL_PEN_GR`, `EMBLEM_MAGIC_PEN_GR`, `EMBLEM_SPELL_VAMP_GR`, `EMBLEM_MANA_REGEN`, `EMBLEM_MANA_REGEN_GR`, `EMBLEM_PHYSICAL_PEN_FLAT`, `EMBLEM_PHYSICAL_PEN_FLAT_GR`, `EMBLEM_MAGIC_PEN_FLAT`, `EMBLEM_MAGIC_PEN_FLAT_GR`, `EMBLEM_PHOTO`) VALUES
(1, 'Common Physical Emblem Set', 14, 18, 0.02, 267, 0.03, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.23, 0.3, 0.05, 4.45, 0.06, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'https://vignette.wikia.nocookie.net/mobile-legends/images/c/c3/Physical_Emblem.png/revision/latest/scale-to-width-down/50?cb=20180207131209'),
(2, 'Common Magical Emblem Set', 0, 18, 0, 267, 0, 14, 2, 180, 0, 0, 0, 0, 0, 0, 0, 0, 0.3, 0, 4.45, 0, 0.23, 0.05, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'https://vignette.wikia.nocookie.net/mobile-legends/images/4/44/Mage_Emblem.png/revision/latest/scale-to-width-down/50?cb=20180207130939'),
(3, 'Custom Tank Emblem Set', 0, 18, 0, 345, 0, 0, 2, 0, 10, 10, 0, 0, 0, 0, 0, 0, 0.3, 0, 5.6, 0, 0, 0.05, 0, 0.16, 0.16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'https://vignette.wikia.nocookie.net/mobile-legends/images/2/23/Tank_Emblem.png/revision/latest/scale-to-width-down/50?cb=20180207131039'),
(4, 'Custom Jungle Emblem Set', 13, 0, 0, 306, 4.5, 0, 0, 0, 0, 0, 2.5, 6, 0, 0, 0, 0.216, 0, 0, 5.1, 0.075, 0, 0, 0, 0, 0, 0.041, 0.1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'https://vignette.wikia.nocookie.net/mobile-legends/images/c/c1/Jungle_Emblem.png/revision/latest/scale-to-width-down/50?cb=20180207131029'),
(5, 'Custom Assassin Emblem Set', 15, 0, 3.5, 0, 0, 0, 5, 0, 0, 0, 0, 2, 0, 0, 0, 0.25, 0, 0.058, 0, 0, 0, 0.083, 0, 0, 0, 0, 0.05, 0, 0, 0, 0, 0, 13.5, 0.225, 0, 0, 'https://vignette.wikia.nocookie.net/mobile-legends/images/3/3a/Assassin_Emblem.png/revision/latest/scale-to-width-down/50?cb=20180207131009'),
(6, 'Custom Mage Emblem Set', 0, 0, 0, 0, 0, 17, 5, 0, 0, 0, 0, 2, 0, 0, 5, 0, 0, 0, 0, 0, 0.283, 0.083, 0, 0, 0, 0, 0.05, 0, 0, 0.083, 0, 0, 0, 0, 13.5, 0.225, 'https://vignette.wikia.nocookie.net/mobile-legends/images/0/0c/Magical_Emblem.png/revision/latest/scale-to-width-down/50?cb=20180207131121'),
(7, 'Custom Fighter Emblem Set', 16, 0, 0, 273, 0, 0, 0, 0, 8, 8, 0, 0, 0, 0, 0, 0.26, 0, 0, 4.55, 0, 0, 0, 0, 0.13, 0.13, 0, 0, 0, 0, 0, 0, 0, 5, 0.083, 0, 0, 'https://vignette.wikia.nocookie.net/mobile-legends/images/7/7b/Fighter_Emblem.png/revision/latest/scale-to-width-down/50?cb=20180207130909'),
(8, 'Custom Support Emblem Set', 0, 10, 0, 183, 0, 0, 5, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0.16, 0, 3.05, 0, 0, 0.083, 0, 0, 0, 0, 0.06, 0, 0, 0, 10, 0.16, 12, 0.2, 12, 0.2, 'https://vignette.wikia.nocookie.net/mobile-legends/images/4/47/Support_Emblem.png/revision/latest/scale-to-width-down/50?cb=20180207130824'),
(9, 'Custom Marksman Emblem Set', 17, 0, 5, 0, 7.5, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0.283, 0, 0.083, 0, 0.125, 0, 0, 0, 0, 0, 0.083, 0, 0, 0, 0, 0, 0, 6, 0.1, 0, 0, 'https://vignette.wikia.nocookie.net/mobile-legends/images/3/3c/Marksman_Emblem.png/revision/latest/scale-to-width-down/50?cb=20180207130150'),
(10, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `ID` int(11) NOT NULL,
  `HERO_NAME` varchar(255) NOT NULL,
  `HERO_PHOTO` text NOT NULL,
  `HERO_MOVE_SPEED` int(11) NOT NULL DEFAULT '0',
  `HERO_PHYSICAL_ATK` int(11) NOT NULL DEFAULT '0',
  `HERO_MAGIC_POWER` int(11) NOT NULL DEFAULT '0',
  `HERO_ARMOR` int(11) NOT NULL DEFAULT '0',
  `HERO_MAGIC_ARMOR` int(11) NOT NULL DEFAULT '0',
  `HERO_HP` int(11) NOT NULL DEFAULT '0',
  `HERO_MANA` int(11) NOT NULL DEFAULT '0',
  `HERO_ATK_SPEED` int(11) NOT NULL DEFAULT '0',
  `HERO_HP_REGEN` int(11) NOT NULL DEFAULT '0',
  `HERO_MANA_REGEN` int(11) NOT NULL DEFAULT '0',
  `HERO_BASIC_CRIT_RATE` int(11) NOT NULL DEFAULT '0',
  `HERO_ABILITY_CRIT_RATE` int(11) NOT NULL DEFAULT '0',
  `HERO_BP` int(11) NOT NULL DEFAULT '0',
  `HERO_DIAMOND` int(11) NOT NULL DEFAULT '0',
  `HERO_PHYSICAL_ATK_GR` float DEFAULT '0',
  `HERO_HP_GR` float DEFAULT '0',
  `HERO_ARMOR_GR` float DEFAULT '0',
  `HERO_MAGIC_ARMOR_GR` float DEFAULT '1.5',
  `HERO_MANA_GR` float DEFAULT '0',
  `HERO_ATK_SPEED_GR` float DEFAULT '0',
  `HERO_HP_REGEN_GR` float DEFAULT '0',
  `HERO_MANA_REGEN_GR` float DEFAULT '0',
  `HERO_ROLE` varchar(255) DEFAULT NULL,
  `HERO_DMG_TYPE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`ID`, `HERO_NAME`, `HERO_PHOTO`, `HERO_MOVE_SPEED`, `HERO_PHYSICAL_ATK`, `HERO_MAGIC_POWER`, `HERO_ARMOR`, `HERO_MAGIC_ARMOR`, `HERO_HP`, `HERO_MANA`, `HERO_ATK_SPEED`, `HERO_HP_REGEN`, `HERO_MANA_REGEN`, `HERO_BASIC_CRIT_RATE`, `HERO_ABILITY_CRIT_RATE`, `HERO_BP`, `HERO_DIAMOND`, `HERO_PHYSICAL_ATK_GR`, `HERO_HP_GR`, `HERO_ARMOR_GR`, `HERO_MAGIC_ARMOR_GR`, `HERO_MANA_GR`, `HERO_ATK_SPEED_GR`, `HERO_HP_REGEN_GR`, `HERO_MANA_REGEN_GR`, `HERO_ROLE`, `HERO_DMG_TYPE`) VALUES
(1, 'AKAI', 'https://img-cdn.mobilelegends.com/HeroHead009.png?imageView2/1/w/150/h/150', 260, 115, 0, 24, 10, 2769, 422, 85, 42, 12, 0, 0, 0, 0, 5.64, 228, 2.85, 1.642, 100, 15.71, 3, 1, 'TANK', 'HYBRID'),
(2, 'ALICE', 'https://img-cdn.mobilelegends.com/HeroHead004.png?imageView2/1/w/150/h/150', 240, 114, 0, 21, 10, 2573, 493, 80, 36, 18, 0, 0, 0, 0, 5, 191, 3, 1.5, 110, 10, 1, 1, 'MAGE', 'MAGIC'),
(3, 'ALPHA', 'https://img-cdn.mobilelegends.com/HeroHead028.png?imageView2/1/w/150/h/150', 260, 121, 0, 20, 10, 2646, 453, 92, 39, 16, 0, 0, 0, 0, 8, 200, 3.5, 1.5, 100, 25, 2.5, 1, 'FIGHTER', 'PHYSICAL'),
(4, 'ALUCARD', 'https://img-cdn.mobilelegends.com/HeroHead007.png?imageView2/1/w/150/h/150', 260, 123, 0, 21, 10, 2821, 0, 90, 39, 0, 0, 0, 0, 0, 8, 210, 3, 1.5, 0, 20, 2, 1, 'FIGHTER', 'PHYSICAL'),
(5, 'ANGELA', 'https://2.bp.blogspot.com/-tTXFGQBRM2o/Wsn-aB2zxEI/AAAAAAAACuA/yma_JZ7NiBss41-4g_ILyVFyQxIinwkRgCLcBGAs/s1600/angela+icon+mobile+legends.jpg', 240, 115, 0, 15, 10, 2421, 515, 79, 34, 18, 0, 0, 0, 0, 0, 0, 0, 1.5, 0, 0, 0, 1, 'SUPPORT', 'MAGIC'),
(6, 'ARGUS', 'https://img-cdn.mobilelegends.com/HeroHead045.png?imageView2/1/w/150/h/150', 260, 124, 0, 21, 10, 2628, 0, 92, 40, 0, 0, 0, 0, 0, 0, 0, 0, 1.5, 0, 0, 0, 1, 'FIGHTER', 'PHYSICAL'),
(7, 'AURORA', 'https://img-cdn.mobilelegends.com/HeroHead036.png?imageView2/1/w/150/h/150', 245, 110, 0, 17, 10, 2501, 500, 80, 34, 23, 0, 0, 0, 0, 5, 142, 3, 1.5, 108, 10, 1, 1, 'MAGE', 'MAGIC'),
(8, 'BALMOND', 'https://img-cdn.mobilelegends.com/HeroHead002.png?imageView2/1/w/150/h/150', 260, 119, 0, 25, 10, 2796, 0, 85, 47, 0, 0, 0, 0, 0, 8, 246, 3, 1.5, 0, 20, 3, 1, 'FIGHTER', 'PHYSICAL'),
(9, 'BANE', 'https://img-cdn.mobilelegends.com/HeroHead011.png?imageView2/1/w/150/h/150', 260, 117, 0, 23, 10, 2659, 433, 85, 42, 12, 0, 0, 0, 0, 7, 230, 3, 1.5, 100, 20, 3, 1, 'FIGHTER', 'PHYSICAL'),
(10, 'BRUNO', 'https://img-cdn.mobilelegends.com/HeroHead012.png?imageView2/1/w/150/h/150', 240, 116, 0, 17, 10, 2522, 439, 85, 30, 15, 0, 0, 0, 0, 12, 142, 3, 1.5, 100, 20, 1, 1, 'MARKSMAN', 'PHYSICAL'),
(11, 'CHOU', 'https://img-cdn.mobilelegends.com/HeroHead026.png?imageView2/1/w/150/h/150', 260, 121, 0, 23, 10, 2708, 0, 88, 39, 0, 0, 0, 0, 0, 10, 190, 3, 1.5, 0, 30, 2, 1, 'FIGHTER', 'PHYSICAL'),
(12, 'CLINT', 'https://img-cdn.mobilelegends.com/HeroHead013.png?imageView2/1/w/150/h/150', 240, 115, 0, 20, 10, 2530, 450, 84, 36, 15, 0, 0, 0, 0, 11, 142, 3, 1.5, 100, 20, 1, 1, 'MARKSMAN', 'PHYSICAL'),
(13, 'CYCLOPS', 'https://img-cdn.mobilelegends.com/HeroHead033.png?imageView2/1/w/150/h/150', 240, 112, 0, 18, 10, 2521, 500, 80, 38, 20, 0, 0, 15000, 0, 5, 156.5, 3, 1.5, 107, 10, 1, 1, 'MAGE', 'MAGIC'),
(14, 'DIGGIE', 'https://img-cdn.mobilelegends.com/HeroHead048.png?imageView2/1/w/150/h/150', 250, 115, 0, 16, 10, 2351, 490, 1, 36, 20, 0, 0, 0, 0, 0, 0, 0, 1.5, 0, 0, 0, 1, 'SUPPORT', 'MAGIC'),
(15, 'ESTES', 'https://img-cdn.mobilelegends.com/HeroHead034.png?imageView2/1/w/150/h/150', 240, 120, 0, 13, 10, 2221, 545, 80, 36, 18, 0, 0, 0, 0, 5, 142, 3, 1.5, 105, 10, 1, 1, 'SUPPORT', 'MAGIC'),
(16, 'EUDORA', 'https://img-cdn.mobilelegends.com/HeroHead015.png?imageView2/1/w/150/h/150', 250, 112, 0, 19, 10, 2524, 468, 80, 38, 16, 0, 0, 0, 0, 3, 142, 3, 1.5, 105, 10, 1, 1, 'MAGE', 'MAGIC'),
(17, 'FANNY', 'https://img-cdn.mobilelegends.com/HeroHead017.png?imageView2/1/w/150/h/150', 265, 126, 0, 17, 10, 2526, 0, 89, 33, 0, 0, 0, 0, 0, 13, 131, 2, 1.5, 0, 20, 2, 1, 'ASSASIN', 'PHYSICAL'),
(18, 'FRANCO', 'https://img-cdn.mobilelegends.com/HeroHead010.png?imageView2/1/w/150/h/150', 260, 116, 0, 25, 10, 2709, 440, 83, 46, 10, 0, 0, 0, 0, 7, 266, 4, 1.5, 100, 10, 3, 1, 'TANK', 'PHYSICAL'),
(19, 'FREYA', 'https://img-cdn.mobilelegends.com/HeroHead022.png?imageView2/1/w/150/h/150', 260, 109, 0, 22, 10, 2801, 462, 88, 49, 14, 0, 0, 0, 0, 7, 226, 3, 1.5, 100, 30, 2, 1, 'FIGHTER', 'PHYSICAL'),
(20, 'GATOTKACA', 'https://img-cdn.mobilelegends.com/HeroHead041.png?imageView2/1/w/150/h/150', 260, 120, 0, 20, 10, 2709, 440, 82, 42, 12, 0, 0, 0, 0, 7, 230, 3, 1.5, 100, 10, 3, 1, 'TANK', 'MAGIC'),
(21, 'GORD', 'https://img-cdn.mobilelegends.com/HeroHead023.png?imageView2/1/w/150/h/150', 240, 110, 0, 13, 10, 2478, 570, 77, 32, 25, 0, 0, 0, 0, 6, 130, 3, 1.5, 110, 10, 1, 1, 'MAGE', 'MAGIC'),
(22, 'GROCK', 'https://img-cdn.mobilelegends.com/HeroHead044.png?imageView2/1/w/150/h/150', 260, 135, 0, 21, 10, 2819, 430, 81, 42, 12, 0, 0, 0, 0, 8, 240, 3, 1.5, 100, 10, 3, 1, 'TANK', 'PHYSICAL'),
(23, 'GUSION', 'http://mobilelegendscounters.com/public/img/gusion.jpg', 260, 119, 0, 18, 0, 2578, 460, 1, 39, 16, 0, 0, 0, 0, 0, 0, 0, 1.5, 0, 0, 0, 1, 'ASSASIN', 'MAGIC'),
(24, 'HANABI', 'http://mobilelegendscounters.com/public/img/hanabi.jpg', 245, 115, 0, 17, 10, 2510, 390, 1, 30, 15, 0, 0, 0, 0, 0, 0, 0, 1.5, 0, 0, 0, 1, 'MARKSMAN', 'PHYSICAL'),
(25, 'HARLEY', 'https://img-cdn.mobilelegends.com/HeroHead042.png?imageView2/1/w/150/h/150', 240, 114, 0, 19, 0, 2501, 490, 85, 36, 18, 0, 0, 0, 0, 6, 132, 2, 1.5, 115, 10, 1, 1, 'MAGE', 'MAGIC'),
(26, 'HAYABUSA', 'https://img-cdn.mobilelegends.com/HeroHead021.png?imageView2/1/w/150/h/150', 260, 114, 0, 17, 10, 2679, 479, 85, 37, 16, 0, 0, 0, 0, 20, 163, 3, 1.5, 0, 20, 2, 1, 'ASSASIN', 'PHYSICAL'),
(27, 'HELCURT', 'https://img-cdn.mobilelegends.com/HeroHead051.png?imageView2/1/w/150/h/150', 255, 121, 0, 17, 10, 2599, 440, 87, 35, 16, 0, 0, 0, 0, 11, 149, 3, 1.5, 100, 20, 2, 1, 'ASSASIN', 'PHYSICAL'),
(28, 'HILDA', 'https://img-cdn.mobilelegends.com/HeroHead035.png?imageView2/1/w/150/h/150', 260, 123, 0, 24, 10, 2909, 0, 86, 42, 0, 0, 0, 0, 0, 6, 240, 3, 1.5, 0, 20, 3, 1, 'FIGHTER', 'PHYSICAL'),
(29, 'HYLOS', 'https://img-cdn.mobilelegends.com/HeroHead049.png?imageView2/1/w/150/h/150', 260, 105, 0, 17, 10, 3309, 430, 1, 42, 12, 0, 0, 0, 0, 0, 0, 0, 1.5, 0, 0, 0, 1, 'TANK', 'MAGIC'),
(30, 'IRITHEL', 'https://img-cdn.mobilelegends.com/HeroHead043.png?imageView2/1/w/150/h/150', 250, 110, 0, 17, 10, 2540, 438, 83, 35, 15, 0, 0, 0, 0, 11, 142, 3, 1.5, 100, 10, 1, 1, 'MARKSMAN', 'PHYSICAL'),
(31, 'JAWHEAD', 'https://img-cdn.mobilelegends.com/HeroHead054.png?imageView2/1/w/150/h/150', 255, 119, 0, 24, 10, 2778, 430, 90, 39, 16, 0, 0, 0, 0, 8, 213, 3, 1.5, 100, 20, 2, 1, 'FIGHTER', 'PHYSICAL'),
(33, 'JOHNSON', 'https://img-cdn.mobilelegends.com/HeroHead032.png?imageView2/1/w/150/h/150', 255, 112, 0, 27, 10, 2809, 0, 83, 42, 12, 0, 0, 0, 0, 6, 255, 4, 1.5, 0, 10, 3, 1, 'TANK', 'MAGIC'),
(34, 'KAGURA', 'https://img-cdn.mobilelegends.com/HeroHead025.png?imageView2/1/w/150/h/150', 240, 118, 0, 19, 10, 2556, 519, 82, 35, 21, 0, 0, 0, 0, 8, 134, 2, 1.5, 117, 5, 2, 1, 'MAGE', 'MAGIC'),
(35, 'KARINA', 'https://img-cdn.mobilelegends.com/HeroHead008.png?imageView2/1/w/150/h/150', 260, 121, 0, 20, 10, 2633, 431, 90, 39, 16, 0, 0, 0, 0, 8, 187, 3, 1.5, 100, 20, 2, 1, 'ASSASIN', 'MAGIC'),
(36, 'KARRIE', 'https://img-cdn.mobilelegends.com/HeroHead040.png?imageView2/1/w/150/h/150', 240, 112, 0, 17, 10, 2498, 440, 1, 40, 15, 0, 0, 0, 0, 0, 0, 0, 1.5, 0, 0, 0, 1, 'MARKSMAN', 'PHYSICAL'),
(37, 'LANCELOT', 'https://img-cdn.mobilelegends.com/HeroHead047.png?imageView2/1/w/150/h/150', 260, 124, 0, 16, 10, 2549, 450, 1, 35, 15, 0, 0, 0, 0, 0, 0, 0, 1.5, 0, 0, 0, 1, 'ASSASIN', 'PHYSICAL'),
(38, 'LAPU-LAPU', 'https://img-cdn.mobilelegends.com/HeroHead037.png?imageView2/1/w/150/h/150', 260, 119, 0, 21, 10, 2628, 0, 90, 35, 16, 0, 0, 0, 0, 8, 213, 3, 1.5, 0, 20, 2, 1, 'FIGHTER', 'PHYSICAL'),
(39, 'LAYLA', 'https://img-cdn.mobilelegends.com/HeroHead018.png?imageView2/1/w/150/h/150', 240, 118, 0, 15, 10, 2500, 424, 85, 27, 14, 0, 0, 0, 0, 10, 133, 3, 1.5, 100, 20, 1, 1, 'MARKSMAN', 'PHYSICAL'),
(40, 'LASLEY', 'https://img-cdn.mobilelegends.com/HeroHead053.png?imageView2/1/w/150/h/150', 240, 115, 0, 14, 10, 2490, 0, 1, 36, 0, 0, 0, 0, 0, 9.5, 0, 0, 1.5, 0, 0, 0, 1, 'MARKSMAN', 'PHYSICAL'),
(41, 'LOLITA', 'https://img-cdn.mobilelegends.com/HeroHead020.png?imageView2/1/w/150/h/150', 260, 115, 0, 27, 10, 2679, 480, 79, 48, 12, 0, 0, 0, 0, 6, 228, 2, 1.5, 100, 10, 3, 1, 'TANK', 'PHYSICAL'),
(42, 'MARTIS', 'http://mobilelegendscounters.com/public/img/martis.jpg', 260, 128, 0, 25, 10, 2738, 405, 1, 35, 16, 0, 0, 0, 0, 0, 0, 0, 1.5, 0, 0, 0, 1, 'FIGHTER', 'PHYSICAL'),
(43, 'MINOTAUR', 'https://img-cdn.mobilelegends.com/HeroHead019.png?imageView2/1/w/150/h/150', 260, 123, 0, 23, 10, 2759, 0, 73, 44, 0, 0, 0, 0, 0, 5, 269, 3, 1.5, 0, 10, 3, 1, 'TANK', 'PHYSICAL'),
(44, 'MIYA', 'https://img-cdn.mobilelegends.com/HeroHead001.png?imageView2/1/w/150/h/150', 240, 117, 0, 17, 10, 2524, 445, 85, 30, 15, 0, 0, 0, 0, 12, 138, 3, 1.5, 100, 20, 1, 1, 'MARKSMAN', 'PHYSICAL'),
(45, 'MOSKOV', 'https://img-cdn.mobilelegends.com/HeroHead031.png?imageView2/1/w/150/h/150', 240, 117, 0, 16, 10, 2455, 420, 81, 32, 15, 0, 0, 0, 0, 12, 143, 3, 1.5, 100, 10, 1, 1, 'MARKSMAN', 'PHYSICAL'),
(46, 'NANA', 'https://img-cdn.mobilelegends.com/HeroHead005.png?imageView2/1/w/150/h/150', 250, 115, 0, 17, 10, 2501, 510, 86, 34, 18, 0, 0, 0, 0, 7, 130, 3, 1.5, 1, 20, 1, 1, 'MAGE', 'MAGIC'),
(47, 'NATALIA', 'https://img-cdn.mobilelegends.com/HeroHead024.png?imageView2/1/w/150/h/150', 260, 121, 0, 18, 10, 2589, 486, 1, 35, 16, 0, 0, 0, 0, 0, 0, 0, 1.5, 0, 0, 0, 1, 'ASSASIN', 'PHYSICAL'),
(48, 'ODETTE', 'https://img-cdn.mobilelegends.com/HeroHead046.png?imageView2/1/w/150/h/150', 240, 105, 0, 18, 10, 2491, 495, 80, 34, 23, 0, 0, 0, 0, 5, 142, 3, 1.5, 109, 10, 1, 1, 'MAGE', 'MAGIC'),
(49, 'PHARSA', 'https://img-cdn.mobilelegends.com/HeroHead052.png?imageView2/1/w/150/h/150', 240, 109, 0, 15, 10, 2421, 490, 1, 34, 18, 0, 0, 0, 0, 0, 0, 0, 1.5, 0, 0, 0, 1, 'MAGE', 'MAGIC'),
(50, 'RAFAELA', 'https://img-cdn.mobilelegends.com/HeroHead014.png?imageView2/1/w/150/h/150', 245, 117, 0, 15, 10, 2441, 545, 79, 36, 23, 0, 0, 0, 0, 7, 130, 3, 1.5, 135, 10, 1, 1, 'SUPPORT', 'MAGIC'),
(51, 'ROGER', 'https://img-cdn.mobilelegends.com/HeroHead039.png?imageView2/1/w/150/h/150', 240, 120, 0, 22, 10, 2730, 450, 84, 36, 15, 0, 0, 0, 0, 10, 158, 3, 1.5, 100, 10, 1, 1, 'FIGHTER', 'PHYSICAL'),
(52, 'RUBY', 'https://img-cdn.mobilelegends.com/HeroHead029.png?imageView2/1/w/150/h/150', 260, 114, 0, 23, 10, 2709, 430, 86, 30, 14, 0, 0, 32000, 599, 7, 170, 3, 1.5, 115, 10, 2, 1, 'FIGHTER', 'PHYSICAL'),
(53, 'SABER', 'https://img-cdn.mobilelegends.com/HeroHead003.png?imageView2/1/w/150/h/150', 260, 118, 0, 17, 10, 2599, 443, 87, 35, 16, 0, 0, 6500, 299, 9, 150, 3, 1.5, 100, 20, 3, 1, 'ASSASIN', 'PHYSICAL'),
(54, 'SUN', 'https://img-cdn.mobilelegends.com/HeroHead027.png?imageView2/1/w/150/h/150', 260, 114, 0, 23, 10, 2758, 400, 92, 41, 16, 0, 0, 32000, 599, 6, 220, 3, 1.5, 100, 20, 2, 1, 'FIGHTER', 'PHYSICAL'),
(55, 'TIGREAL', 'https://img-cdn.mobilelegends.com/HeroHead006.png?imageView2/1/w/150/h/150', 260, 112, 0, 25, 10, 2890, 450, 83, 42, 12, 0, 0, 6500, 299, 6, 272, 4, 1.5, 100, 20, 3, 1, 'TANK', 'PHYSICAL'),
(56, 'URANUS', 'http://mobilelegendscounters.com/public/img/uranus.jpg', 260, 144, 0, 34, 16, 3529, 855, 89, 43, 16, 0, 0, 32000, 599, 0, 0, 0, 1.5, 0, 0, 0, 1, 'TANK', 'MAGIC'),
(57, 'VALIR', 'http://mobilelegendscounters.com/public/img/valir.jpg', 245, 105, 0, 18, 18, 2516, 495, 80, 34, 18, 0, 0, 32000, 599, 4, 142, 3, 1.5, 109, 10, 1, 1, 'MAGE', 'MAGIC'),
(58, 'VEXANA', 'https://img-cdn.mobilelegends.com/HeroHead038.png?imageView2/1/w/150/h/150', 240, 112, 0, 17, 10, 2481, 490, 80, 38, 20, 0, 0, 32000, 599, 0, 137, 3, 1.5, 108, 10, 1, 1, 'MAGE', 'MAGIC'),
(59, 'YI SUN-SIN', 'https://img-cdn.mobilelegends.com/HeroHead030.png?imageView2/1/w/150/h/150', 240, 116, 0, 18, 10, 2520, 448, 86, 36, 15, 0, 0, 32000, 599, 3, 146, 3, 1.5, 100, 10, 1, 1, 'MARKSMAN', 'PHYSICAL'),
(60, 'ZHASK', 'https://img-cdn.mobilelegends.com/HeroHead050.png?imageView2/1/w/150/h/150', 240, 107, 0, 15, 10, 2401, 490, 80, 34, 20, 0, 0, 32000, 599, 3, 132, 2, 1.5, 120, 10, 1, 1, 'MAGE', 'MAGIC'),
(61, 'ZILONG', 'https://img-cdn.mobilelegends.com/HeroHead016.png?imageView2/1/w/150/h/150', 265, 123, 0, 25, 10, 2689, 405, 96, 35, 16, 0, 0, 0, 0, 6, 202, 3, 1.5, 100, 30, 2, 1, 'FIGHTER', 'PHYSICAL'),
(62, 'KAJA', 'https://vignette.wikia.nocookie.net/mobile-legends/images/1/16/Kaja.png/revision/latest?cb=20180622045800', 270, 120, 0, 30, 10, 2609, 400, 84, 52, 12, 0, 0, 32000, 599, 0, 0, 0, 0, 0, 0, 0, 1, 'SUPPORT', 'MAGIC'),
(63, 'CHANG\'E', 'https://vignette.wikia.nocookie.net/mobile-legends/images/8/87/Chang\'e.png/revision/latest?cb=20180622051650', 240, 115, 0, 16, 10, 2301, 505, 81, 34, 21, 0, 0, 32000, 599, 0, 0, 0, 0, 0, 0, 0, 1, 'MAGE', 'MAGIC'),
(64, 'SELENA', 'https://vignette.wikia.nocookie.net/mobile-legends/images/1/1b/Selena.png/revision/latest?cb=20180423101150', 240, 110, 0, 15, 10, 2401, 490, 80, 34, 18, 0, 0, 32000, 599, 6.5, 172.5, 3, 1.5, 102, 15, 1.5, 1, 'ASSASIN', 'MAGIC');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `ID` int(11) NOT NULL,
  `ITEM_PHOTO` text NOT NULL,
  `ITEM_NAME` varchar(255) NOT NULL,
  `ITEM_PRICE` int(10) NOT NULL,
  `ITEM_CATEGORY` varchar(255) NOT NULL,
  `ITEM_PHYSICAL_ATK` int(10) NOT NULL DEFAULT '0',
  `ITEM_LIFESTEAL` int(10) NOT NULL DEFAULT '0',
  `ITEM_CD_REDUCTION` int(10) NOT NULL DEFAULT '0',
  `ITEM_PHYSICAL_ARMOR` int(10) NOT NULL DEFAULT '0',
  `ITEM_SPELL_LIFESTEAL` int(10) NOT NULL DEFAULT '0',
  `ITEM_MANA_REGEN` int(10) NOT NULL DEFAULT '0',
  `ITEM_MAGIC_ARMOR` int(10) NOT NULL DEFAULT '0',
  `ITEM_MAGIC_PEN_FLAT` int(10) NOT NULL DEFAULT '0',
  `ITEM_PHYSICAL_PEN_FLAT` int(10) NOT NULL DEFAULT '0',
  `ITEM_MAGIC_PEN_PER` int(10) NOT NULL DEFAULT '0',
  `ITEM_PHYSICAL_PEN_PER` int(10) NOT NULL DEFAULT '0',
  `ITEM_CRIT_CHANCE` int(10) NOT NULL DEFAULT '0',
  `ITEM_HP_REGEN` int(10) NOT NULL DEFAULT '0',
  `ITEM_CRIT_REDUCTION` int(10) NOT NULL DEFAULT '0',
  `ITEM_HP` int(10) NOT NULL DEFAULT '0',
  `ITEM_MANA` int(10) NOT NULL DEFAULT '0',
  `ITEM_MOVE_SPEED_FLAT` int(10) NOT NULL DEFAULT '0',
  `ITEM_MOVE_SPEED_PER` int(10) NOT NULL DEFAULT '0',
  `ITEM_ATK_SPEED_FLAT` int(10) NOT NULL DEFAULT '0',
  `ITEM_ATK_SPEED_PER` int(10) NOT NULL DEFAULT '0',
  `ITEM_MAGIC_POWER` int(10) NOT NULL DEFAULT '0',
  `RESILIENCE` int(10) NOT NULL DEFAULT '0',
  `ITEM_PASSIVE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ID`, `ITEM_PHOTO`, `ITEM_NAME`, `ITEM_PRICE`, `ITEM_CATEGORY`, `ITEM_PHYSICAL_ATK`, `ITEM_LIFESTEAL`, `ITEM_CD_REDUCTION`, `ITEM_PHYSICAL_ARMOR`, `ITEM_SPELL_LIFESTEAL`, `ITEM_MANA_REGEN`, `ITEM_MAGIC_ARMOR`, `ITEM_MAGIC_PEN_FLAT`, `ITEM_PHYSICAL_PEN_FLAT`, `ITEM_MAGIC_PEN_PER`, `ITEM_PHYSICAL_PEN_PER`, `ITEM_CRIT_CHANCE`, `ITEM_HP_REGEN`, `ITEM_CRIT_REDUCTION`, `ITEM_HP`, `ITEM_MANA`, `ITEM_MOVE_SPEED_FLAT`, `ITEM_MOVE_SPEED_PER`, `ITEM_ATK_SPEED_FLAT`, `ITEM_ATK_SPEED_PER`, `ITEM_MAGIC_POWER`, `RESILIENCE`, `ITEM_PASSIVE`) VALUES
(1, 'https://bytiger.com/images/ext_mobile_legend/a02.png', 'DEMON HUNTER SWORD', 2180, 'ATTACK', 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 25, 0, 0, 'Unique Passive-Devour: Basic attacks will deal 10% of the target\'s current HP as additional physical damage (up to 60 against monsters).<hr>\r\nUnique Passive-Devour: Each basic attack grants 4% health stealing for 3 seconds. Stacks up to 5 times.'),
(2, 'https://bytiger.com/images/ext_mobile_legend/a03.png', 'DEADLY BLADE', 2050, 'ATTACK', 65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 0, 0, 'Unique Passive-Life Drain: Basic attack reduces HP regen effect by 50% for 3 seconds.'),
(3, 'https://bytiger.com/images/ext_mobile_legend/a04.png', 'CORROSION SCYTHE', 2050, 'ATTACK', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 25, 0, 0, 'Unique Passive-Corrosion: Basic attacks have 50% probability of slowing the enemy unit by 40%. Long-ranged basic attacks only slow enemies by 20%.<hr>\r\nUnique Passive-Impulse: Basic attack deals damage to enemies, while hero’s attack speed rises by 8%. Stacks up to 5 times. Lasts 3 seconds.'),
(4, 'https://bytiger.com/images/ext_mobile_legend/a16.png', 'GOLDEN STAFF', 2100, 'ATTACK', 65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30, 0, 0, 'Unique Passive-Swift: Every 1% of critical chance will add 1% attack speed.<hr>\r\nUnique Passive-Endless Strike: Normal basic attacks add a stack of Endless Strike. After accumulating 2 stacks of Endless Strike, the effect of the next basic attack is triggered 3 times.'),
(5, 'https://bytiger.com/images/ext_mobile_legend/a17.png', 'WIND OF NATURE', 1910, 'ATTACK', 10, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 25, 0, 0, 'Unique Passive-Wind Chant: Active: Activate to become immune to all physical damage. Lasts 2 seconds. Cooldown is 80 seconds. Duration is reduced by half when not using a marksman.<hr>\r\nUnique Passive-Wind Chant: Immune to all physical damage'),
(6, 'https://bytiger.com/images/ext_mobile_legend/a05.png', 'MALEFIC ROAR', 2060, 'ATTACK', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Unique Passive-Armor Buster: Basic attack will ignore 20% of a defense turret\'s defensive armor.'),
(7, 'https://bytiger.com/images/ext_mobile_legend/a06.png', 'HAAS\'S CLAWS', 1810, 'ATTACK', 70, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Unique Passive-Insanity: When HP drops below 40%, the hero will receive an extra 10% physical lifesteal.'),
(8, 'https://bytiger.com/images/ext_mobile_legend/a07.png', 'BERSERKER\'S FURY', 2200, 'ATTACK', 65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Unique :  40% Crit Damage <hr>\r\nUnique Passive-Doom: Critical hits increase the hero\'s Physical Attack by 5% for 2 seconds.'),
(9, 'https://bytiger.com/images/ext_mobile_legend/a08.png', 'ENDLESS BATTLE', 2470, 'ATTACK', 65, 15, 10, 0, 0, 25, 0, 0, 0, 0, 0, 0, 0, 0, 250, 0, 0, 5, 0, 0, 0, 0, 'Unique Passive-Divine Justice: After using a skill, the next basic attack will deal an additional 85% of Physical Attack as True Damage. This effect has a cooldown of 1.5 seconds.<hr>\r\nUnique Passive-Chase Fate: When Divine Justice\'s effect is triggered, it will increase the hero\'s movement speed 15%.'),
(10, 'https://bytiger.com/images/ext_mobile_legend/a09.png', 'WINDTALKER', 1870, 'ATTACK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 20, 0, 0, 40, 0, 0, 'Unique Passive-Typhoon: Every 3.5 seconds, basic attacks hit 3 enemy units and deal 100 points of [C3Magic Damage]. This effect’s CD drops as your critical chance rises, while damage rises as attack speed rises.<hr>\r\nUnique Passive-Activate: Each time Typhoon is cast, one\'s movement speed will be increased 5% for a short time.'),
(11, 'https://bytiger.com/images/ext_mobile_legend/a10.png', 'SCARLET PHANTOM', 2020, 'ATTACK', 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 25, 0, 0, 0, 0, 0, 0, 0, 20, 0, 0, 'Unique Passive-Frenzy: Critical hits increase the hero\'s Attack Speed by 30% and Crit Rate by 5% for 2 seconds.'),
(12, 'https://bytiger.com/images/ext_mobile_legend/a11.png', 'BLADE OF THE 7 SEAS', 1950, 'ATTACK', 75, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 300, 0, 0, 0, 0, 0, 0, 0, 'Unique Passive-Steamroll: Skills will lower the target\'s physical defence by 25 points (applied before damage). Lasts 3 seconds.'),
(13, 'https://bytiger.com/images/ext_mobile_legend/a12.png', 'BLADE OF DESPAIR', 3010, 'ATTACK', 170, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 'Unique Passive-Despair: Deals an extra 10?mage to an enemy in any abnormal state (stunned, knocked airborne, transformed, disabled).'),
(14, 'https://bytiger.com/images/ext_mobile_legend/a13.png', 'HUNTER STRIKE', 2010, 'ATTACK', 100, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Unique Passive-Hunt: Attacks the enemy 5 times in a row and improves the hero\'s movement speed by 30% for 2 seconds. This effect has a cooldown of 15 seconds.'),
(15, 'https://bytiger.com/images/ext_mobile_legend/a14.png', 'BLOODLUST AXE', 1970, 'ATTACK', 70, 0, 10, 0, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(16, 'https://bytiger.com/images/ext_mobile_legend/a15.png', 'ROSE GOLD METEOR', 2270, 'ATTACK', 60, 5, 0, 0, 0, 0, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Unique Passive-Lifeline: Once the hero’s HP falls below 30% they generate a shield that absorbs 510~1350 points of damage (increases with level) that lasts for 3 seconds. CD is 40 seconds.'),
(17, 'https://bytiger.com/images/ext_mobile_legend/m01.png', 'ENCHANTED TALISMAN', 1870, 'MAGIC', 0, 0, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 250, 0, 0, 0, 0, 0, 50, 0, 'Unique Passive-Mana Spring: Regen 10% total of one\'s max mana every 10 seconds.'),
(18, 'https://bytiger.com/images/ext_mobile_legend/m02.png', 'WINTER TRUNCHEON', 1910, 'MAGIC', 0, 0, 0, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 400, 0, 0, 0, 0, 0, 60, 0, 'Unique Passive-Mana Spring: Regen 10% total of one\'s max mana every 10 seconds.<hr>\r\nUnique Passive-Frozen: After activating this skill, the hero is unable to move but is immune to any damage effects, lasts for 2 seconds. CD is 100 seconds.'),
(19, 'https://bytiger.com/images/ext_mobile_legend/m03.png', 'FEATHER OF HEAVEN', 2230, 'MAGIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 30, 65, 0, 'Unique Passive-Affliction: Basic attacks will deal 40% of the hero\'s AP as additional Magic Damage.'),
(20, 'https://bytiger.com/images/ext_mobile_legend/m04.png', 'SOUL SCROLL', 1300, 'MAGIC', 0, 0, 0, 0, 0, 0, 0, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, 'Unique Passive-Soul Steal: Eliminating a hero grants 5 Soul Stacks, while assists grant 3 stacks. Every 15 Soul Stacks convert into 25 points of magic damage. Lose all stacks upon death. (Already converted stacks are unaffected.) Gain up to 100 points of magic damage.'),
(21, 'https://bytiger.com/images/ext_mobile_legend/m05.png', 'NECKLACE OF DURANCE', 2110, 'MAGIC', 0, 0, 10, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 70, 0, 'Unique Passive-Life Drain: Skill dealing damage to the target reduces the regen effect by 50% for 3 seconds.'),
(22, 'https://bytiger.com/images/ext_mobile_legend/m06.png', 'DEVIL TEARS', 1970, 'MAGIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 65, 0, 'Unique Passive-Spellbreaker: When HP is higher than 70%, the unique bonus effect is increased by 30%.'),
(23, 'https://bytiger.com/images/ext_mobile_legend/m07.png', 'HOLY CRYSTAL', 2180, 'MAGIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 90, 0, 'Unique Passive-Exterminate: After a skill hits a target, magic attack will immediately increase 15%. The next skill damage will terminate this effect. This effect can last up to 3 seconds with a built-in cooldown time of 10 seconds.'),
(24, 'https://bytiger.com/images/ext_mobile_legend/m08.png', 'CONCENTRATED ENERGY', 2020, 'MAGIC', 0, 0, 0, 0, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 700, 0, 0, 0, 0, 0, 70, 0, 'Unique Passive-Recharge: Regen 10% of one\'s HP after killing a hero.'),
(25, 'https://bytiger.com/images/ext_mobile_legend/m09.png', 'ICE QUEEN WAND', 2240, 'MAGIC', 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 150, 0, 7, 0, 0, 75, 0, 'Unique Passive-Ice Bound: Skills that damage an enemy hero will carry a 15% slow down effect. This effect lasts 3 seconds. Stacks up to 2 times.'),
(26, 'https://bytiger.com/images/ext_mobile_legend/m10.png', 'GLOWING WAND', 2120, 'MAGIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 400, 0, 0, 5, 0, 0, 75, 0, 'Unique Passive-Scorch: Skill damage will burn targets for 3 seconds when they hit, dealing 2%/3%/4% of the target\'s current HP as Magic Damage (10 damage minimum).'),
(27, 'https://bytiger.com/images/ext_mobile_legend/m11.png', 'CALAMITY REAPER', 1950, 'MAGIC', 0, 0, 10, 0, 0, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 70, 0, 'Unique Passive-Calamity: After using a skill, the next basic attack deals extra true damage that equals to 120% magic attack with a cooldown of 1.5 seconds. Briefly raises movement speed by 10%.'),
(28, 'https://bytiger.com/images/ext_mobile_legend/m12.png', 'CLOCK OF DESTINY', 1950, 'MAGIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 615, 600, 0, 0, 0, 0, 60, 0, 'Unique Passive-Time: Adds 30 HP and 5 magic attack every 30 seconds. Up to 10 times.<hr>\r\nUnique Passive-Reincarnate: If Time is fully stacked, then the hero will receive 5% magic attack and 300 mana.'),
(29, 'https://bytiger.com/images/ext_mobile_legend/m13.png', 'BLOOD WINGS', 3000, 'MAGIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 500, 0, 0, 0, 0, 0, 150, 0, 'Unique Passive-Nirvana: Adds 1.5 HP for every 1 pt of magic power added.'),
(30, 'https://bytiger.com/images/ext_mobile_legend/m14.png', 'FLEETING TIME', 2050, 'MAGIC', 0, 0, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 70, 0, 'Unique Passive-Timestream: After an elimination or an assist, the CD of the hero’s ultimate is immediately reduced by 35%.'),
(31, 'https://bytiger.com/images/ext_mobile_legend/m15.png', 'LIGHTNING TRUNCHEON', 2250, 'MAGIC', 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 300, 0, 0, 0, 0, 75, 0, 'Unique Passive-Resonate: Every 6 seconds, hero\'s next magic skill deals bonus magic damage to up to 3 enemies that scales with hero\'s maximum mana.'),
(32, 'https://bytiger.com/images/ext_mobile_legend/d01.png', 'COURAGE BULWARK', 1970, 'DEFENSE', 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 770, 0, 0, 0, 0, 0, 0, 0, 'Unique Passive-Bravery: Increases 10% of attack power and defense for nearby allies.<hr>\r\nUnique Passive-Heavy Armor: Nearby soldiers can take more defense turret damage.<hr>\r\nUnique Passive-Encourage: Active: Raise the movement speed of hero and nearby allied heroes by 30%. Also raises physical and magic damage by 20%. Lasts 3 seconds. This effect has a 40 second cooldown.<hr>\r\nUnique Passive-Encourage: Raise the movement speed and physical/magic damage of nearby allied heroes.'),
(33, 'https://bytiger.com/images/ext_mobile_legend/d02.png', 'BLADE ARMOR', 1660, 'DEFENSE', 0, 0, 0, 90, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Unique Passive-Counterstrike: Deals 25% of opponent\'s physical attack as physical damage to an attacker when a basic attack is received.'),
(34, 'https://bytiger.com/images/ext_mobile_legend/d03.png', 'WINGS OF THE APOCALYPSE QUEEN', 2250, 'DEFENSE', 15, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1000, 0, 0, 0, 0, 0, 0, 0, 'Unique Passive-Demonize: Reduces damage taken by 50% when health is less than 40% and increases your Lifesteal by 30%. Lasts 5 seconds. This effect has a 50 second cooldown.'),
(35, 'https://bytiger.com/images/ext_mobile_legend/d04.png', 'THUNDER BELT', 2290, 'DEFENSE', 0, 0, 10, 40, 0, 30, 0, 0, 0, 0, 0, 0, 0, 0, 800, 0, 0, 0, 0, 0, 0, 0, 'Unique Passive-Thunderbolt: After a hero activates this skill, their next basic attack deals bonus attack that equal 2% of the hero’s total HP. The enemy target and surrounding units are slowed for 1.5 seconds. This effect can only be used once every 1.5 seconds.'),
(36, 'https://bytiger.com/images/ext_mobile_legend/d05.png', 'CURSED HELMET', 1830, 'DEFENSE', 0, 0, 0, 0, 0, 0, 50, 0, 0, 0, 0, 0, 0, 0, 920, 0, 0, 0, 0, 0, 0, 0, 'Unique Passive-Burning Soul: Nearby enemy targets take 1.5% of their Max HP as Magic Damage each second. Deals an extra 50?mage to minions.'),
(37, 'https://bytiger.com/images/ext_mobile_legend/d06.png', 'SKY GUARDIAN HELMET', 2400, 'DEFENSE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 1550, 0, 0, 0, 0, 0, 0, 0, 'Unique Passive-Recovery: Regenerates 1.5% of hero’s total HP. Eliminating enemy heroes raises regeneration rate by 0.4%, while assists only raises the rate by 0.2% (includes eliminations and Assists prior to purchase), up to 3.5%. This effect wears off after 5 seconds of the hero taking damage.'),
(38, 'https://bytiger.com/images/ext_mobile_legend/d07.png', 'DEMON\'S ADVENT', 2170, 'DEFENSE', 0, 0, 0, 54, 0, 0, 0, 0, 0, 0, 0, 0, 30, 0, 920, 0, 0, 0, 0, 0, 0, 0, 'Unique Passive-Deter: When an enemy hero attacks, this ability will reduce his/her attack power 6%. This effect lasts 2 seconds. Stacks up to 3 times.'),
(39, 'https://bytiger.com/images/ext_mobile_legend/d08.png', 'ORACLE', 2110, 'DEFENSE', 0, 0, 10, 0, 0, 0, 36, 0, 0, 0, 0, 0, 0, 0, 850, 0, 0, 0, 0, 0, 0, 0, 'Unique Passive-Bless: Raises shield absorption and HP regeneration effects by 25%.'),
(40, 'https://bytiger.com/images/ext_mobile_legend/d09.png', 'ATHENA\'S SHIELD', 2050, 'DEFENSE', 0, 0, 0, 0, 0, 0, 56, 0, 0, 0, 0, 0, 20, 0, 900, 0, 0, 0, 0, 0, 0, 0, 'Unique Passive-Shield: Get a damage-absorbing shield every 30 seconds. Shield absorption amount grows as the match goes on, maxing out at 1150.'),
(41, 'https://bytiger.com/images/ext_mobile_legend/d10.png', 'DOMINANCE ICE', 2110, 'DEFENSE', 0, 0, 0, 70, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 500, 0, 0, 0, 0, 0, 0, 'Unique Passive-Arctic Cold: Lowers movement speed 5% and lowers attack speed 30% for nearby enemy heroes.'),
(42, 'https://bytiger.com/images/ext_mobile_legend/d11.png', 'IMMORTALITY', 2120, 'DEFENSE', 0, 0, 0, 0, 0, 0, 40, 0, 0, 0, 0, 0, 0, 0, 800, 0, 0, 0, 0, 0, 0, 0, 'Unique Passive-Immortal: Resurrect 2 seconds upon death and get 15% HP and a shield that can absorb 300~1000 damage. Shield lasts 3 seconds. This effect has a 180 second cooldown.'),
(43, 'https://bytiger.com/images/ext_mobile_legend/d12.png', 'BRUTE FORCE BREATSPLATE', 2120, 'DEFENSE', 0, 0, 0, 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 770, 0, 0, 0, 0, 0, 0, 0, 'Unique Passive-Brute Force: Casting a skill will increase one\'s capabilities: increases movement speed by 3% and physical attack by 4%. Lasts 4 seconds. Stacks up to 5 times.'),
(44, 'https://bytiger.com/images/ext_mobile_legend/d13.png', 'TWILIGHT ARMOR', 2260, 'DEFENSE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50, 0, 1200, 400, 0, 0, 0, 0, 0, 0, 'Unique Passive-Defiance: After the hero takes over 900 points of Physical Damage, they will take 900 points of Physical Damage at most for up to 4 seconds. Cooldown is 5 seconds.'),
(45, 'https://bytiger.com/images/ext_mobile_legend/s01.png', 'WARRIOR BOOTS', 690, 'MOVEMENT', 0, 0, 0, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0, 0, 0, 0, 'Unique Passive-Valor: Physical defense will go up 5 with each basic attack received, for an increase of up to 25 points. Lasts 3 seconds.'),
(46, 'https://bytiger.com/images/ext_mobile_legend/s02.png', 'TOUGH BOOTS', 890, 'MOVEMENT', 0, 0, 0, 0, 0, 0, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0, 0, 0, 15, 'Unique Passive-Fortitude: Reduces time controlled 25%.'),
(47, 'https://bytiger.com/images/ext_mobile_legend/s03.png', 'MAGIC SHOES', 710, 'MOVEMENT', 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0, 0, 0, 0, ''),
(48, 'https://bytiger.com/images/ext_mobile_legend/s04.png', 'ARCANE BOOTS', 740, 'MOVEMENT', 0, 0, 0, 0, 0, 0, 0, 15, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0, 0, 0, 0, ''),
(49, 'https://bytiger.com/images/ext_mobile_legend/s05.png', 'SWIFT BOOTS', 710, 'MOVEMENT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0, 12, 0, 0, ''),
(50, 'https://bytiger.com/images/ext_mobile_legend/s06.png', 'RAPID BOOTS', 750, 'MOVEMENT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 'Unique Passive-Side Effect: Dealing or taking damage slows hero\'s movement speed by 55 points. Lasts 5 seconds.'),
(51, 'https://bytiger.com/images/ext_mobile_legend/s07.png', 'WIZARD BOOTS', 700, 'MOVEMENT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 300, 0, 40, 0, 0, 0, 0, 0, 'Unique Passive-Plunder: 80 gold will be awarded for assists.'),
(52, 'https://bytiger.com/images/ext_mobile_legend/s08.png', 'DEMON SHOES', 720, 'MOVEMENT', 0, 0, 0, 0, 0, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0, 0, 0, 0, 'Unique Passive-Mysticism: Eliminations of enemy heroes and assists regenerates hero’s mana by 10%, while eliminating minions regenerates 4% of the hero’s mana.'),
(53, 'https://bytiger.com/images/ext_mobile_legend/j01.png', 'STAR SHARD', 1505, 'JUNGLE', 0, 0, 0, 0, 0, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30, 0, 'Unique Passive-Greed: Get an extra 30% Exp when jungling. Regain 4% of of maxium health and 10% of mana after monster kill.<hr>\r\nUnique Passive-Gorge: Increases damage by 0.5% on killing a jungle monster. Stacks up to 2 times.<hr>\r\nUnique Passive-Greed: Makes the Battle Spell \'Retribution\' applicable to heroes, reducing the target\'s movement speed by 70% (effect decays over 3s) and reducing target\'s magic resistance. Buying other advanced jungling equipment will disable this effect.'),
(54, 'https://bytiger.com/images/ext_mobile_legend/j02.png', 'BEAST KILLER', 1605, 'JUNGLE', 0, 0, 0, 20, 0, 0, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Unique Passive-Greed: Get an extra 30% Exp when jungling. Regain 4% of of maxium health and 10% of mana after monster kill.<hr>\r\nUnique Passive-Gorge: Slaying jungle monsters increases one\'s physical and magic defense 3. Stacks up to 10 times.<hr>\r\nUnique Passive-Greed: Makes the Battle Spell \'Retribution\' applicable to heroes, reducing the target\'s movement speed by 70% (effect decays over 3s) and for a short period of time grants a shield based on Max HP. Buying other advanced jungling equipment will disable this effect.'),
(55, 'https://bytiger.com/images/ext_mobile_legend/j03.png', 'RAPTOR MACHETE', 1550, 'JUNGLE', 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Unique Passive-Greed: Get an extra 30% Exp when jungling. Regain 4% of of maxium health and 10% of mana after monster kill.<hr>\r\nUnique Passive-Gorge: Slaying jungle monsters increases your physical attack 4. Stacks up to 10 times.<hr>\r\nUnique Passive-Greed: Makes the Battle Spell \'Retribution\' applicable to heroes, reducing the target\'s movement speed by 70% and dealing a small amount of True Damage to the target within 3 seconds. Buying other advanced jungling equipment will disable this effect.'),
(56, 'http://mobilelegendsbangbang.com/wp-content/uploads/2018/03/dagger-atk-4.png', 'DAGGER', 250, 'BASIC', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(57, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/65-copy-1.jpg', 'LEGION SWORD', 910, 'BASIC', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(58, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/85-copy-1.jpg', 'DAGGER', 280, 'BASIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 0, 0, ''),
(59, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/32-copy-1.jpg', 'OGRE TOMAHAWK', 790, 'BASIC', 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 230, 0, 0, 0, 0, 0, 0, 0, ''),
(60, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/109-copy-1.jpg', 'JAVELIN', 320, 'BASIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(61, 'http://mobilelegendsbangbang.com/wp-content/uploads/2018/03/rogue-meteor.png', 'ROGUE METEOR', 580, 'BASIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 15, 0, 0, 0, ''),
(62, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/vampire-mallet.png', 'VAMPIRE  MALLET', 400, 'BASIC', 8, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(63, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/66-copy-1.jpg', 'FURY HAMMER', 980, 'BASIC', 35, 0, 0, 0, 0, 0, 0, 0, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(64, 'http://mobilelegendsbangbang.com/wp-content/uploads/2018/03/iron-hunting-bow.png', 'IRON HUNTING BOW', 450, 'BASIC', 10, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(65, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/magic-blade.png', 'MAGIC BLADE', 1300, 'BASIC', 40, 0, 0, 0, 0, 0, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(66, 'http://mobilelegendsbangbang.com/wp-content/uploads/2018/03/regular-spear.png', 'REGULAR SPEAR', 600, 'BASIC', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, ''),
(67, 'http://mobilelegendsbangbang.com/wp-content/uploads/2018/03/power-potion.png', 'POWER POTION', 1500, 'POTION', 30, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Automatically used after purchased, giving 30 pts of physical attack, 5% of physical lifesteal, lasts 120s. Only one potion effect can be used at any one time.'),
(68, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/117-copy-1.jpg', 'MYSTERY CODEX', 300, 'BASIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 0, ''),
(69, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/75-copy-1.jpg', 'MAGIC WAND', 820, 'BASIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 45, 0, ''),
(70, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/98-copy-1.jpg', 'POWER CRYSTAL', 220, 'BASIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 280, 0, 0, 0, 0, 0, 0, ''),
(71, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/55-copy.jpg', 'TOME OF EVIL', 950, 'BASIC', 0, 0, 8, 0, 0, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 35, 0, ''),
(72, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/105-copy-1.jpg', 'MAGIC NECKLACE', 120, 'BASIC', 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(73, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/106-copy-1.jpg', 'AZURE BLADE', 600, 'BASIC', 0, 0, 5, 0, 0, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(74, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/103-copy-1.jpg', 'BOOK OF SAGES', 450, 'BASIC', 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 0, ''),
(75, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/74-copy-1.jpg', 'EXOTIC VEIL', 600, 'BASIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 30, 0, ''),
(76, 'http://mobilelegendsbangbang.com/wp-content/uploads/2018/03/mystic-container.png', 'MYSTIC CONTAINER', 500, 'BASIC', 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 0, ''),
(77, 'https://mobilelegends.gcube.id/wp-content/uploads/sites/6/2018/06/Mobile-Legends-Items-Magic-1-Spirit-Wheel.png', 'SPIRIT WHEEL', 500, 'BASIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, ''),
(78, 'http://mobilelegendsbangbang.com/wp-content/uploads/2018/03/magic-potion.png', 'MAGIC POTION', 1500, 'POTION', 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30, 0, 'Automatically used after purchased, giving 30pts of magic damage, 5% of cooldown reduction,lasts 120s. Only one potion effect can be used at any one time.'),
(79, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/113-copy-1.jpg', 'VITALITY CRYSTAL', 300, 'BASIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 230, 0, 0, 0, 0, 0, 0, 0, ''),
(80, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/50-copy-1.jpg', 'ARES BELT', 900, 'BASIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 770, 0, 0, 0, 0, 0, 0, 0, ''),
(81, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/115-copy.jpg', 'LEATHER JERKIN', 220, 'BASIC', 0, 0, 0, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(82, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/63-copy-1.jpg', 'MOLTEN ESSENCE', 870, 'BASIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 870, 0, 0, 0, 0, 0, 0, 0, ''),
(83, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/112-copy-1.jpg', 'MAGIC RESIST CLOAK', 220, 'BASIC', 0, 0, 0, 0, 0, 0, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(84, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/116-copy-1.jpg', 'SILENCE ROBE', 1020, 'BASIC', 0, 0, 0, 0, 0, 0, 25, 0, 0, 0, 0, 0, 0, 0, 540, 0, 0, 0, 0, 0, 0, 0, ''),
(85, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/40-copy-1.jpg', 'HEALING NECKLACE', 140, 'BASIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(86, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/black-ice-shield.png', 'BLACK ICE SHIELD', 880, 'BASIC', 0, 0, 10, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 400, 0, 0, 0, 0, 0, 0, ''),
(87, 'http://mobilelegendsbangbang.com/wp-content/uploads/2018/03/heros-ring.png', 'HERO\'S RING', 450, 'BASIC', 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 150, 0, 0, 0, 0, 0, 0, 0, ''),
(88, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/68-copy-1.jpg', 'DREADNAUGHT ARMOR', 730, 'BASIC', 0, 0, 0, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(89, 'http://mobilelegendsbangbang.com/wp-content/uploads/2018/03/rock-potion.png', 'ROCK POTION', 1500, 'POTION', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 500, 0, 0, 0, 0, 0, 0, 15, 'Automatically used after purchased, giving 500 pts of HP, 15% of resilience, lasts 120s. Only one potion effect can be used at any one time.'),
(90, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/54-copy-1.jpg', 'BOOTS', 250, 'BASIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 0, 0, 0, 0, 0, ''),
(91, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/88-copy-1.jpg', 'HUNTER\'S KNIFE', 280, 'BASIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(92, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/83-copy-1.jpg', 'CURSE SWORD', 760, 'BASIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(93, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/81-copy-1.jpg', 'PILLAGER AXE', 770, 'BASIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(94, 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/nimble-blade.png', 'NIMBLE BLADE', 750, 'BASIC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(95, '0', '0', 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `ID` int(5) NOT NULL,
  `SKILL_NAME` varchar(255) DEFAULT NULL,
  `SKILL_PHOTO` text,
  `SKILL_PARENT` int(5) DEFAULT '0',
  `SKILL_TYPE` varchar(255) DEFAULT NULL,
  `SKILL_BASE_COOLDOWN` int(5) DEFAULT '0',
  `SKILL_BASE_MANA_COST` int(5) DEFAULT '0',
  `SKILL_BASE_MAGIC_DAMAGE` int(5) DEFAULT '0',
  `SKILL_BASE_PHYSICAL_DAMAGE` int(5) DEFAULT '0',
  `SKILL_EXTRA_TOTAL_PHYSICAL_ATTACK` float DEFAULT '0',
  `SKILL_EXTRA_PHYSICAL_ATTACK` float DEFAULT '0',
  `SKILL_MAX_LEVEL` int(5) DEFAULT '0',
  `SKILL_COOLDOWN_2` float DEFAULT '0',
  `SKILL_MANA_COST_2` float DEFAULT '0',
  `SKILL_DESC` text,
  `SKILL_BASE_MAGIC_DAMAGE_GR` float DEFAULT '0',
  `SKILL_BASE_PHYSICAL_ATTACK_GR` float DEFAULT '0',
  `SKILL_COOLDOWN_3` int(5) DEFAULT '0',
  `SKILL_COOLDOWN_4` int(5) DEFAULT '0',
  `SKILL_COOLDOWN_5` int(5) DEFAULT '0',
  `SKILL_COOLDOWN_6` int(5) DEFAULT '0',
  `SKILL_MANA_COST_3` int(5) DEFAULT '0',
  `SKILL_MANA_COST_4` int(5) DEFAULT '0',
  `SKILL_MANA_COST_5` int(5) DEFAULT '0',
  `SKILL_MANA_COST_6` int(5) DEFAULT '0',
  `SKILL_BONUS_HP_ADDED_SHIELD` float DEFAULT '0',
  `SKILL_BONUS_HP_EXTRA_DMG` float DEFAULT '0',
  `SKILL_BONUS_ADD_SPEED_FLAT` int(5) DEFAULT '0',
  `SKILL_BONUS_ADD_CDR` int(5) DEFAULT '0',
  `SKILL_BONUS_ADD_SPELL_VAMP` int(5) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`ID`, `SKILL_NAME`, `SKILL_PHOTO`, `SKILL_PARENT`, `SKILL_TYPE`, `SKILL_BASE_COOLDOWN`, `SKILL_BASE_MANA_COST`, `SKILL_BASE_MAGIC_DAMAGE`, `SKILL_BASE_PHYSICAL_DAMAGE`, `SKILL_EXTRA_TOTAL_PHYSICAL_ATTACK`, `SKILL_EXTRA_PHYSICAL_ATTACK`, `SKILL_MAX_LEVEL`, `SKILL_COOLDOWN_2`, `SKILL_MANA_COST_2`, `SKILL_DESC`, `SKILL_BASE_MAGIC_DAMAGE_GR`, `SKILL_BASE_PHYSICAL_ATTACK_GR`, `SKILL_COOLDOWN_3`, `SKILL_COOLDOWN_4`, `SKILL_COOLDOWN_5`, `SKILL_COOLDOWN_6`, `SKILL_MANA_COST_3`, `SKILL_MANA_COST_4`, `SKILL_MANA_COST_5`, `SKILL_MANA_COST_6`, `SKILL_BONUS_HP_ADDED_SHIELD`, `SKILL_BONUS_HP_EXTRA_DMG`, `SKILL_BONUS_ADD_SPEED_FLAT`, `SKILL_BONUS_ADD_CDR`, `SKILL_BONUS_ADD_SPELL_VAMP`) VALUES
(1, 'TAI CHI', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/59c0aefa23d45.png', 1, 'PASSIVE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Every time Akai casts a spell, he will receive a shield that on top of his maximum health that blocks a percentage of damage taken, this effect will go on cooldown after the last shield for a set amount of time.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.8, NULL, NULL, 0, 0),
(2, 'THOUSAND POUNDER', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/59c0aeeb6faa2.png', 1, 'ACTIVE', 11, 70, 0, 300, 0.5, 0, 6, 10.4, 70, 'Jump into the target area, dealing 300(+50% Total Physical ATK) Physical damage to enemies after landing, targets within the marked area will also be stunned for 2 seconds.', 0, 50, 10, 9, 9, 8, 70, 70, 70, 70, 0.08, 0.05, 30, 0, 0),
(3, 'BLENDER', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/59c0aef0cef36.png', 1, 'ACTIVE', 8, 70, 0, 350, 0, 1.2, 6, 8, 80, 'Fires a frog shaped shock wave at the enemy, shock wave will explode on contact with the enemy or once it reaches maximum range, dealing 350(+120% Extra Physical ATK) points of physical damage, marking enemies for 5 seconds; basic attacks on marked targets will an extra 5% of Akai\'s maximum health as physical damage.', 0, 30, 7, 7, 6, 6, 90, 100, 110, 120, NULL, NULL, NULL, 0, 0),
(4, 'HURRICAN DANCE', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/59c0aef659ffa.png', 1, 'ACTIVE', 40, 120, 0, 180, 0, 1, 3, 36, 120, 'Spins like a tornado for 3.5 seconds and starts hitting targets. Each collision will knock back the target and deal 180(+100% Extra Physical ATK) Magic damage, (damage decays against same target). After casting, removes all CC effects present on self, during the duration Akai will be impervious to all CC and have increased movement speed by 30 points.', 0, 180, 32, 32, 32, 32, 120, 120, 120, 120, NULL, NULL, NULL, 0, 0),
(5, 'BLOOD ANCESTRY', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/pass-1.png', 2, 'PASSIVE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'When a nearby minion dies, a blood orb will generate. Absorbing blood orb will permanently increase maximum HP by 10 pts for Alice.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 40, 10, 10),
(6, 'FLOWING BLOOD', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/skill1-1.png', 2, 'ACTIVE', 6, 90, 350, 0, 1.8, 0, 6, 0, 0, 'Shoots a blob of blood in a specified direction, dealing 350(+180% Total Magic Power) pts of magic damage to the enemy. Afterwards the hero can use this skill again to instantly teleport to wherever the blood blob is.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(7, 'BLOOD AWE', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/skill2.png', 2, 'ACTIVE', 7, 90, 270, 0, 0.9, 0, 6, 0, 0, 'Deals 270(+90% Total Magic Power) magical damage to nearby enemies, immobilizing them for 1.2. The enemies are slowed for 2s after that.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(8, 'BLOOD ODE', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/ult-1.png', 2, 'ACTIVE', 42, 135, 160, 0, 0.7, 0, 6, 0, 0, 'For the next 4 seconds after using the skill, the blood princess will be in blood-drinking mode, dealing 160(+70% Total Magic Power) pts of magic damage to surrounding enemies every 0.5seconds and restoring 40(+15% Total Magic Power) pts of HP for herself at the same time.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(9, 'GO, BETA!', 'http://mobilelegendsbangbang.com/wp-content/uploads/2017/02/32-1.jpg', 3, 'PASSIVE', 0, 0, 0, 150, 1.8, 0, 0, 0, 0, 'Using skills will summon Beta to attack and mark the target. Beta will attack the target continuously after 2 mark(s), dealing 150(+180%Total Physical ATK) pts of True Damage in total.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(10, 'ROTARY IMPACT', 'http://mobilelegendsbangbang.com/wp-content/uploads/2017/02/28-1.jpg', 3, 'ACTIVE', 7, 60, 0, 210, 0, 0.9, 6, 0, 0, 'Launches a slash forwards, dealing 210(+90%Extra Physical ATK) pts of Physical Damage to the enemies along the way and lower their movement speed 70%, lasting 2s. After the light wave launches, Beta will follow its trace to strafe the enemy, dealing 90(+40%Extra Physical ATK) pts of Physical Damage.', 0, 20, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(11, 'FORCE SWING', 'http://mobilelegendsbangbang.com/wp-content/uploads/2017/02/31.jpg', 3, 'ACTIVE', 9, 65, 0, 160, 1.7, 0, 6, 0, 0, 'After powering up for a while, the hero will strike forwards in a conical area and deal 160(+170%Total Physical ATK) pts of Physical Damage to enemies and slow them down. Every hit on an enemy will increase self\'s attack speed by 5% and restore 150(+40%Total Magic Power) pts of HP. While powering-up ends, Beta will strafe at enemies along the edge of attack range, dealing 40(+30%Total Physical ATK) pts of Physical Damage.', 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(12, 'SPEAR OF ALPHA', 'http://mobilelegendsbangbang.com/wp-content/uploads/2017/02/30.jpg', 3, 'ACTIVE', 32, 110, 0, 245, 1.4, 0, 3, 0, 0, 'Wields the light spear powerfully, stunning the target when it hits. The hero will be pulled to the hit enemy, dealing 245(+140%Total Physical ATK) pts of Physical Damage to enemies along the way. When the light spear hits, it will guide the fight suit to strafe toward the target\'s area, dealing 205(+80%Total Physical ATK) pts of Physical Damage.', 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(13, 'PURSUIT', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/alucard1.jpg', 4, 'PASSIVE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'If it hits 1 enemy, deals damage x 1.2. If it hits 2 enemy, deals damage x 1.1. Next basic attack after using skill deals damage x 1.2 and move to the target.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(14, 'GROUNDSPLITTER', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/alucard-2.jpg', 4, 'ACTIVE', 10, 0, 0, 240, 1.6, 0, 6, 0, 0, 'Leaps forward and launches 1 strikes. Each strikes deals 240(+160%Total Physical ATK) pts of Physical Damage to the enemy and slow them down.', 0, 30, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(15, 'WHIRLING SMASH', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/alucard-3.jpg', 4, 'ACTIVE', 5, 0, 0, 230, 1.4, 0, 6, 0, 0, 'Slashes at enemies in the area, dealing 230(+140%Total Physical ATK) Physical Damage.', 0, 30, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(16, 'FISSION WAVE', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/alucard-4.jpg', 4, 'ACTIVE', 30, 0, 0, 440, 2.2, 0, 3, 0, 0, 'Raises the hero\'s physical lifesteal 20% and also locks onto an enemy, deals extra damage with any attacks on the target and raising lifesteal 100% for 8s. While the skill lasts, the hero can fire powerful attack waves forward, dealing 440(+220%%Total Physical ATK) Physical Damage to enemies.', 0, 160, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(17, 'SMART HEART', 'http://mobilelegendsbangbang.com/wp-content/uploads/2018/02/pass.png', 5, 'PASSIVE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Each time Angela uses a skill, her movement speed increases by 15% for 4s, up to 30%. This acceleration effect will also be applied to her attached ally.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(18, 'LOVE WAVES', 'http://mobilelegendsbangbang.com/wp-content/uploads/2018/02/skill1.png', 5, 'ACTIVE', 0, 60, 170, 0, 0.5, 0, 6, 0, 70, 'Launches love energy in a designated direction, deaing 170(+50% Total Magic Power) Magic Damage and adding a Lover\'s Mark. Each stack of Lover\'s Mark increases the amount of damage the target takes by 20%, and reduces their movement speed by 10%. Lasts 4s, and can be stacked up to 5 times. Restores 100(+60% Total Magic Power) HP to friendly targets. up to 5 charges can be stored(recharge time is affected by cooldown reduction).', 30, 0, 0, 0, 0, 0, 80, 90, 100, 110, NULL, NULL, NULL, 0, 0),
(19, 'PUPPET-ON-A-STRING', 'http://mobilelegendsbangbang.com/wp-content/uploads/2018/02/skill2.png', 5, 'ACTIVE', 13, 90, 300, 0, 0.4, 0, 6, 0, 100, 'Launches a puppet string at the specified target, dealing 300(+40% Total Magic Power) Magic Damage and gradually slowing the target by up to 80%. If the target is still connected to the string after 3s, they will be immobilized for 1.5s and take 450(+60% Total Magic Power) magic damage. Each Lover\'s Mark increases the final damage by 450 (+60% Total Magic Power)', 30, 0, 0, 0, 0, 0, 110, 120, 130, 140, NULL, NULL, NULL, 0, 0),
(20, 'HEARTGUARD', 'http://mobilelegendsbangbang.com/wp-content/uploads/2018/02/ult.png', 5, 'ACTIVE', 80, 90, 0, 0, 0, 0, 0, 70, 100, 'Angela gathers energy to generate a shield for a friendly target, which absorbs 1200 (+200% Total Magic Power) damage for 6s. Shortly after this, she will become attached to the friendly target for 12s (all skills can still be used for the duration and will not consume Mana). If you use this skill again, or if the friendly target dies, this effect will be canceled.', 0, 0, 60, 0, 0, 0, 110, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(21, 'WARMONGER', 'http://mobilelegendsbangbang.com/wp-content/uploads/2017/09/1-2.png', 6, 'PASSIVE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Taking or dealing damage will charge the demonic blade (the lower his health is, the faster blade charges), when fully charged Argus\'s next basic attack will be two quick basic attacks.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(22, 'DEMONIC GRIP', 'http://mobilelegendsbangbang.com/wp-content/uploads/2017/09/2-1.png', 6, 'ACTIVE', 13, 0, 0, 300, 0, 2, 6, 0, 0, 'Puts out a demonic hand at the targeted direction, dealing 175(+200%Extra Physical ATK) Physical Damage to an enemy hero and moving to the front of target on hit, then he is able to make a quick slash towards the enemy, dealing 125 Physical Damage. If he doesn\'t hit the enemy hero, he pulls himself to the location.', 0, 50, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(23, 'METEORIC SWORD', 'http://mobilelegendsbangbang.com/wp-content/uploads/2017/09/3-1.png', 6, 'ACTIVE', 10, 0, 0, 400, 1.5, 0, 6, 0, 0, 'After a short period of charging, Argus strikes the enemy with his demonic blade, dealing 400(+150%Total Physical ATK) Physical Damage and making enemy bleed for 5s. Enemy under bleed effect leaves a blood trail that grants Argus extra movement speed while he is moving on it.', 0, 40, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(24, 'ETERNAL EVIL', 'http://mobilelegendsbangbang.com/wp-content/uploads/2017/09/4-1.png', 6, 'ACTIVE', 80, 0, 0, 0, 0, 0, 3, 0, 0, 'Transform into a fallen angel, becoming immune to death for 5s, instantly recharging his blade for one time. 100% of damage dealt during the skill\'s duration will be converted to Argus\'s HP after skill effect ends.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(25, 'PRIDE OF ICE', 'http://mobilelegendsbangbang.com/wp-content/uploads/2017/05/pride-of-ice.png', 7, 'PASSIVE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Each time the skill is released, one unit of frost energy will be added to the hero, when 4 units of frost energy is collected, the next skill damage will freeze the target. All skills can cause extra magic damage to the frozen target.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(26, 'FROST SHOCK', 'http://mobilelegendsbangbang.com/wp-content/uploads/2017/05/Frost-Shock.png', 7, 'ACTIVE', 4, 60, 300, 0, 1.3, 0, 6, 0, 0, 'Fires forward a Frost Energy Missile, when it hits the enemy it will detonate and deal 300(+130%Total Magic Power) pts of radial magic damage and slow enemies down.', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(27, 'BITTER FROST', 'http://mobilelegendsbangbang.com/wp-content/uploads/2017/05/Bitter-Frost.png', 7, 'ACTIVE', 11, 110, 430, 0, 1.8, 0, 6, 0, 0, 'Deals 430(+180%Total Magic Power) magic damage at specified target and causes target\'s movement speed to drop 80% for 1.5s.', 80, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(28, 'COLDNESS DESTROY', 'http://mobilelegendsbangbang.com/wp-content/uploads/2017/05/Coldness-Destroy.png', 7, 'ACTIVE', 40, 160, 900, 0, 1.8, 0, 6, 0, 0, 'Summons a giant icy rock to bombard a designated target location, all enemy heroes hit will be slowed down and receive 900(+180%Total Magic Damage) pts of magic damage. Surrounding enemies of the target location where the rock lands also will be slowed down and receive 450(+90%Total Magic Damage) pts of magic damage.', 200, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(29, 'BLOODTHIRST', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/balmond-1.jpg', 8, 'PASSIVE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Regens 4% of max HP each time he kills a minion. Regens 10% of max HP each time he kills a hero.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(30, 'SOUL LOCK', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/balmond-2.jpg', 8, 'ACTIVE', 11, 0, 0, 150, 0.6, 0, 6, 0, 0, 'Charges up to an enemy and deals 150(+60%Total Physical ATK) pts of Physical Damage to enemies along the way. After hitting a hero, he will stop and lower that\r\nenemy\'s movement speed by 60%, lasting 2.5s.', 0, 25, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(31, 'CYCLONE SWEEP', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/balmond-3.jpg', 8, 'ACTIVE', 7, 0, 0, 80, 0.37, 0, 6, 0, 0, 'For 3s, brandishes a large axe and continuously deals 80(+37%Total Physical ATK) Physical Damage to nearby enemies.', 0, 25, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(32, 'LETHAL COUNTER', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/balmond-4.jpg', 8, 'ACTIVE', 40, 0, 0, 350, 0.5, 0, 0, 0, 0, 'Raises a giant axe to deal 350(+50%Total Physical ATK), plus 20% of the target\'s missing HP, as true damage to enemies in a fan-shaped area in front of the hero, and lowers enemy movement speed by 60% for 2s. (Deals up to 1300 damage to non-hero units.)', 0, 150, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(33, 'SHARK BITE', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/pass.png', 9, 'PASSIVE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bane\'s weapon is Infused with tidal energy every 6s. When infused, the damage of his next basic attack will be increased by 60% and deal 75%-100?ditional splash damage to nearby enemies, while slowing them. Hitting an “Inked” enemy with a basic attack will reduce the cooldown of Shark Bite by 0.5s.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(34, 'CRAB CLAW CANNON', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/skill1.png', 9, 'ACTIVE', 7, 60, 0, 225, 0, 1.6, 6, 0, 0, 'Fires the Crab Claw Cannon in a specified direction, dealing 225 (+160 Extra Physical Attack) physical damage to the first target hit. After hitting a target, or reaching the maximum distance, Crab Claw Cannon shells will scatter backwards, dealing 180 (+120% Extra Physical ATK) physical damage to targets, while slowing their movement speed and inflicting them with the \"inked\" effect.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(35, 'MECHA LEGS', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/bruno1.jpg', 10, 'PASSIVE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Each time a skill causes damage, Bruno\'s mechanical legs will add a 4% crit strike chance effect, stacking up to 5 times.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(36, 'VOLLEY SHOT', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/bruno-2.jpg', 10, 'ACTIVE', 10, 80, 0, 200, 0.7, 0, 6, 0, 0, 'Kicks a shot-refracting energy ball at a specified target, dealing 200(+70%Total Physical ATK) pts of Physical Damage and slowing down the target 60%. Bruno and teammates can pick up the energy ball to reduce this skill\'s cooldown.', 0, 30, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(37, 'FLYING TACKLE', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/bruno-3.jpg', 10, 'ACTIVE', 7, 60, 0, 140, 0.4, 0, 6, 0, 0, 'Bruno makes a forward slide tackle, stunning enemy units and dealing 140(+40%Total Physical ATK) pts of Physical Damage and increasing self\'s movement speed.', 0, 25, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(38, 'WORLD WAVE', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/bruno-4.jpg', 10, 'ACTIVE', 38, 140, 0, 250, 0.95, 0, 6, 0, 0, 'Kicks an energy ball filled with energy at a specified hero, dealing 250(+95%Total Physical ATK) pts of Physical Damage, knocks the target back and lowers 3 pts of enemy\'s armor. Afterwards the energy ball will ricochet among enemy heroes. Armor reducing effect lasts 8s, stacking up to 3 times.', 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(39, 'QUICK DRAW', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/clint-1-1.jpg', 12, 'PASSIVE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'After releasing a skill, next basic attack will penetrate targets along a straight line, dealing 120% of basic attack as damage.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0),
(40, 'BLIND SMOKE', 'http://mobilelegendsbangbang.com/wp-content/uploads/2016/12/clint-2.jpg', 12, 'ACTIVE', 10, 80, 0, 150, 0.5, 0, 6, 0, 0, 'Projects a smoke shell, dealing 150(+50%Total Physical ATK) pts of physical damage to enemies in the area. The basic attack\'s hit rate of enemy heroes in the smoke area will decrease by 25%, movement speed will decrease by 60%.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `skin`
--

CREATE TABLE `skin` (
  `ID` int(5) NOT NULL,
  `SKIN_NAME` varchar(255) DEFAULT NULL,
  `SKIN_PARENT` int(5) DEFAULT '0',
  `SKIN_PHOTO` text,
  `SKIN_PRICE` int(5) DEFAULT '0',
  `SKIN_ADDED_HP` int(5) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skin`
--

INSERT INTO `skin` (`ID`, `SKIN_NAME`, `SKIN_PARENT`, `SKIN_PHOTO`, `SKIN_PRICE`, `SKIN_ADDED_HP`) VALUES
(1, 'SUMMER PARTY', 1, '0', 0, 100),
(2, 'MONK', 1, '0', 0, 100),
(3, 'AKAZONAE SAMURAI', 1, '0', 0, 100);

-- --------------------------------------------------------

--
-- Table structure for table `talent`
--

CREATE TABLE `talent` (
  `ID` int(5) NOT NULL,
  `TALENT_NAME` varchar(255) DEFAULT '0',
  `TALENT_PHOTO` text,
  `TALENT_TIER` float DEFAULT '0',
  `TALENT_PARENT` int(5) DEFAULT NULL,
  `TALENT_HP_GR` float DEFAULT '0',
  `TALENT_ARMOR_GR` float DEFAULT '0',
  `TALENT_MAGIC_ARMOR_GR` float DEFAULT '0',
  `TALENT_PHYSICAL_ATTACK_GR` float DEFAULT '0',
  `TALENT_ATTACK_SPEED_GR` float DEFAULT '0',
  `TALENT_CRIT_CHANCE_GR` float DEFAULT '0',
  `TALENT_MANA_GR` float DEFAULT '0',
  `TALENT_MANA_REGEN_GR` float DEFAULT '0',
  `TALENT_MAGIC_PEN_FLAT_GR` float DEFAULT '0',
  `TALENT_CD_REDUCTION_GR` float DEFAULT '0',
  `TALENT_DMG_TO_MONSTER_GR` float DEFAULT '0',
  `TALENT_LIFESTEAL_GR` float DEFAULT '0',
  `TALENT_BATTLE_SPELL_CDR_GR` float DEFAULT '0',
  `TALENT_MOVE_SPEED_PER_GR` float DEFAULT '0',
  `TALENT_PHYSICAL_PEN_FLAT_GR` float DEFAULT '0',
  `TALENT_SPELL_VAMP_GR` float DEFAULT '0',
  `TALENT_MAGIC_POWER_PER_GR` float DEFAULT '0',
  `TALENT_HEALING_EFFECT_GR` float DEFAULT '0',
  `TALENT_HP_REGEN_GR` float DEFAULT '0',
  `TALENT_CRIT_DMG_GR` float DEFAULT '0',
  `TALENT_MAX_LEVEL` float DEFAULT '3',
  `TALENT_ARMOR_PER_GR` float DEFAULT '0',
  `TALENT_MAGIC_ARMOR_PER_GR` float DEFAULT '0',
  `TALENT_MAGIC_POWER_GR` float DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `talent`
--

INSERT INTO `talent` (`ID`, `TALENT_NAME`, `TALENT_PHOTO`, `TALENT_TIER`, `TALENT_PARENT`, `TALENT_HP_GR`, `TALENT_ARMOR_GR`, `TALENT_MAGIC_ARMOR_GR`, `TALENT_PHYSICAL_ATTACK_GR`, `TALENT_ATTACK_SPEED_GR`, `TALENT_CRIT_CHANCE_GR`, `TALENT_MANA_GR`, `TALENT_MANA_REGEN_GR`, `TALENT_MAGIC_PEN_FLAT_GR`, `TALENT_CD_REDUCTION_GR`, `TALENT_DMG_TO_MONSTER_GR`, `TALENT_LIFESTEAL_GR`, `TALENT_BATTLE_SPELL_CDR_GR`, `TALENT_MOVE_SPEED_PER_GR`, `TALENT_PHYSICAL_PEN_FLAT_GR`, `TALENT_SPELL_VAMP_GR`, `TALENT_MAGIC_POWER_PER_GR`, `TALENT_HEALING_EFFECT_GR`, `TALENT_HP_REGEN_GR`, `TALENT_CRIT_DMG_GR`, `TALENT_MAX_LEVEL`, `TALENT_ARMOR_PER_GR`, `TALENT_MAGIC_ARMOR_PER_GR`, `TALENT_MAGIC_POWER_GR`) VALUES
(1, 'Vitality', '', 1, 1, 65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(2, 'Firmness', '', 1, 1, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(3, 'Shield', '', 1, 1, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(4, 'Bravery', '', 2, 1, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(5, 'Swift', '', 2, 1, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(6, 'Fatal', '', 2, 1, 0, 0, 0, 0, 0, 1.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(7, 'Energy', '', 1, 2, 0, 0, 0, 0, 0, 0, 70, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(8, 'Vitality', '', 1, 2, 65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(9, 'Awaken', '', 1, 2, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(10, 'Flow', '', 2, 2, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(11, 'Desire', '', 2, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(12, 'Observation', '', 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(13, 'Vitality', '', 1, 3, 65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(14, 'Firmness', '', 1, 3, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(15, 'Shield', '', 1, 3, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(16, 'Inspire', '', 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(17, 'Fortress', '', 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 2.5, 0, 0),
(18, 'Purity', '', 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2.5, 0),
(19, 'Bravery', '', 1, 4, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(20, 'Brutal', '', 1, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'Greed', '', 1, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1.5, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(22, 'Swift', '', 2, 4, 0, 0, 0, 0, 1.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(23, 'Knowledge', '', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(24, 'Durability', '', 2, 4, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(25, 'Bravery', '', 1, 5, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(26, 'Mastery', '', 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(27, 'Agility', '', 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(28, 'Invasion', '', 2, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(29, 'Fatal', '', 2, 5, 0, 0, 0, 0, 0, 1.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(30, 'Bloodthrist', '', 2, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1.5, 0, 0, 0, 0, 3, 0, 0, 0),
(31, 'Flow', '', 1, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 4),
(32, 'Mastery', '', 1, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(33, 'Agility', '', 1, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(34, 'Observation', '', 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(35, 'Catastrophe', '', 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1.5, 0, 0, 0, 3, 0, 0, 0),
(36, 'Contract', '', 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1.5, 0, 0, 0, 0, 3, 0, 0, 0),
(37, 'Bravery', '', 1, 7, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(38, 'Firmness', '', 1, 7, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(39, 'Shield', '', 1, 7, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(40, 'Invasion', '', 2, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(41, 'Durability', '', 2, 7, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(42, 'Swift', '', 2, 7, 0, 0, 0, 0, 1.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(43, 'Mastery', '', 1, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(44, 'Vitality', '', 1, 8, 65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(45, 'Agility', '', 1, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(46, 'Gift', '', 2, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 3, 0, 0, 0),
(47, 'Rupture', '', 2, 8, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(48, 'Recovery', '', 2, 8, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 3, 0, 0, 0),
(49, 'Bravery', '', 1, 9, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(50, 'Greed', '', 1, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1.5, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(51, 'Fatal', '', 1, 9, 0, 0, 0, 0, 0, 1.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(52, 'Doom', '', 2, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4.5, 3, 0, 0, 0),
(53, 'Mastery', '', 2, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(54, 'Swift', '', 2, 9, 0, 0, 0, 0, 1.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0),
(55, '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emblem`
--
ALTER TABLE `emblem`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `skin`
--
ALTER TABLE `skin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `talent`
--
ALTER TABLE `talent`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emblem`
--
ALTER TABLE `emblem`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hero`
--
ALTER TABLE `hero`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `skin`
--
ALTER TABLE `skin`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `talent`
--
ALTER TABLE `talent`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
