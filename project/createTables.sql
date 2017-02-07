-- --------------------------------------------------------
-- SQL Commands to set up the pmadb as described in the documentation.
--
-- This file is meant for use with MySQL 5 and above!
--
-- This script expects the user pma to already be existing. If we would put a
-- line here to create him too many users might just use this script and end
-- up with having the same password for the controluser.
--
-- This user "pma" must be defined in config.inc.php (controluser/controlpass)
--
-- Please don't forget to set up the tablenames in config.inc.php
--

-- --------------------------------------------------------

--
-- Database : `byuifood`
--

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `id` int NOT NULL auto_increment,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
);
 
  DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `Item`
--

CREATE TABLE IF NOT EXISTS `Item` (
  `id` int NOT NULL auto_increment,
  `itemName` varchar(255) NOT NULL,
  `itemPrice` decimal(10,2) NOT NULL,
  PRIMARY KEY  (`id`)
);
INSERT INTO Item (itemName, itemPrice) VALUES 
('Burrito Grande','6.67'),
('Pasta Bowl','4.76'),
('Calzone','4.76'),
('Pulled Pork Sandwich','5.14'),
('Terriyaki Bowl','5.08'),
('Crepe','4.14'),
('Strawberry Cheesecake','2.19'),
('Sub','5.82'),
('Cowboy Bacon Burger','6.67');

