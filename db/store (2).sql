-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 10:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtasksbd`
--

CREATE TABLE `addtasksbd` (
  `id` int(11) NOT NULL,
  `tasks` text NOT NULL,
  `commentaire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addtasksbd`
--

INSERT INTO `addtasksbd` (`id`, `tasks`, `commentaire`) VALUES
(1, 'testTTTTTT', 'comment pour tester'),
(2, 'aze', 'aaaaaaaaaaaa'),
(4, 'aze', 'azeeee'),
(5, 'tester la page ', '123'),
(7, 'tester la page 2', ''),
(8, 'tester la page 2', ''),
(10, 'tester la page ', 'azer'),
(11, 'tester la page avec chahineeeee', 'adresse siags'),
(12, 'tester la page ', 'azeryyy'),
(13, 'tester la page ', 'zergh');

-- --------------------------------------------------------

--
-- Table structure for table `alocatebd`
--

CREATE TABLE `alocatebd` (
  `id` int(11) NOT NULL,
  `Equipement` text NOT NULL,
  `modele` text NOT NULL,
  `SN` text NOT NULL,
  `Date_reception` int(11) NOT NULL,
  `Statue_reception` tinyint(4) NOT NULL,
  `Location` text NOT NULL,
  `Adress_IP` varchar(255) NOT NULL,
  `Mac_ADress` varchar(255) NOT NULL,
  `Quantity_served2` int(255) NOT NULL,
  `name_computer` text NOT NULL,
  `name_user` text NOT NULL,
  `Commentaire` text NOT NULL,
  `Date_mise_en_service` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alocatebd`
--

INSERT INTO `alocatebd` (`id`, `Equipement`, `modele`, `SN`, `Date_reception`, `Statue_reception`, `Location`, `Adress_IP`, `Mac_ADress`, `Quantity_served2`, `name_computer`, `name_user`, `Commentaire`, `Date_mise_en_service`) VALUES
(129, 'douchette', 'SwiftGlide MX-2000', 'SwiftGlide MX-2000', 2024, 1, 'Administration', 'Menzel Jemil', '&\"é', 2, 'Mohamed', 'BTMW1234', 'aaaaaaaaaaaa', '2024-04-04'),
(131, 'douchette', 'SwiftGlide MX-2000', 'SwiftGlide MX-2000', 2024, 1, 'Administration', '', '&\"é', 3, 'amine', 'BTMW12366', 'test', '2024-04-04'),
(136, 'chahin', 'chahin', '', 2024, 0, 'Administration', 'Menzel Jemil', '', 1, 'Chahine Fdhila123', 'Chahine Fdhila1233', '', '0000-00-00'),
(138, 'pc', 'hp pavion', 'STW2008', 2024, 0, 'Production_Injection', 'Menzel Jemil', '', 1, 'BTW200', 'chahin', 'bien recu', '2024-04-05'),
(139, 'pc lenovo', 'aze', 'STW2005', 2024, 1, 'IT_Magasin', 'Menzel Jemil', '', 10, 'Chahine Fdhila', 'Chahine Fdhila', '', '0000-00-00'),
(140, 'ecran', 'hp pavion', 'ccae', 2024, 1, 'Administration', '', '', 4, '', '', '', '0000-00-00'),
(141, 'pc', 'hp pavion', 'STW2008', 2024, 0, 'IT_Magasin', 'Menzel Jemil', '', 1, 'Chahine Fdhila', 'Chahine Fdhila', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `pic` varchar(111) NOT NULL,
  `details` varchar(333) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `pic`, `details`, `date`) VALUES
(31, 'Production_Injection', 'christopher-burns-8KfCR12oeUM-unsplash.jpg', '', '2024-03-26 13:33:40'),
(32, 'Production_Asemblage', 'remy-gieling-KP6XQIEjjPA-unsplash.jpg', '', '2024-03-26 13:34:19'),
(36, 'IT_Magasin', 'adi-goldstein-EUsVwEOsblE-unsplash.jpg', '', '2024-03-26 13:40:24'),
(40, 'Administration', 'premium_photo-1661414415246-3e502e2fb241.avif', '', '2024-03-26 14:01:18');

-- --------------------------------------------------------

--
-- Table structure for table `inventeries`
--

CREATE TABLE `inventeries` (
  `id` int(11) NOT NULL,
  `catId` int(11) NOT NULL,
  `supplier` varchar(222) NOT NULL,
  `name` text NOT NULL,
  `unit` text NOT NULL,
  `price` text NOT NULL,
  `pic` text NOT NULL,
  `description` text NOT NULL,
  `company` varchar(111) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `inventeries`
--

INSERT INTO `inventeries` (`id`, `catId`, `supplier`, `name`, `unit`, `price`, `pic`, `description`, `company`, `date`) VALUES
(24, 13, 'NA', 'Imprimante Zebra ', 'ZT210', '7', '', 'OLD', 'NA', '2024-01-17 09:35:55'),
(25, 13, 'NA', 'Imprimante Vario3', ' Vario3', '2', '', 'OLD', 'NA', '2024-01-17 09:36:51'),
(26, 13, 'NA', 'PC', 'BMTW0018', '1', '', 'JHVCSQDM', 'NA', '2024-01-17 09:51:06'),
(27, 15, '172.18.25.147', 'ELO_PC', 'BMTW0234', '1', '', 'UKJKJ', '12:12:12:12:12', '2024-01-17 09:54:41'),
(29, 19, 'fds', 'ELO_PC', 'DSS', '322', '', 'FSD', 'ds', '2024-01-23 10:06:52'),
(30, 24, 'NA', 'ELO_PC', 'BMTW0018', '1', '', 'nbvs', '12:12:12:12:12', '2024-02-12 08:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `inventeries1`
--

CREATE TABLE `inventeries1` (
  `Date` date NOT NULL,
  `Equipement` text NOT NULL,
  `Model` text NOT NULL,
  `SN` text NOT NULL,
  `Location` int(11) NOT NULL,
  `Adressip` text NOT NULL,
  `MacAdres` text NOT NULL,
  `DateMS` text NOT NULL,
  `Commentaire` text NOT NULL,
  `pic` varchar(111) NOT NULL,
  `id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventeries1`
--

INSERT INTO `inventeries1` (`Date`, `Equipement`, `Model`, `SN`, `Location`, `Adressip`, `MacAdres`, `DateMS`, `Commentaire`, `pic`, `id`) VALUES
('2024-01-24', '', '', '123456789', 13, '10.217.10.150', '10.217.10.150:80', '2024-01-24', '123', '', 9),
('2024-01-24', '', '', '123456789', 13, '10.217.10.150', '10.217.10.150:80', '2024-01-24', '123', '', 10),
('2024-01-24', 'elo', '', '123456789', 13, '10.217.10.150', '10.217.10.150:80', '2024-01-24', '123', '', 11),
('2024-01-24', 'elo', '', '123456', 19, '456', '465', '2024-01-24', '654', '', 12),
('2024-01-24', 'elo', '', 'a', 13, '465', '465', '2024-01-24', '546', '', 13),
('2024-01-24', 'ds', '', 'sd', 20, 'ds', 'sd', '2024-01-24', 'ds', '', 14),
('2024-01-24', 'pc', '', 'xljqk', 22, 'fez', 'fds', '2024-01-24', 'fds', '', 15),
('2024-01-26', 'bfg', '', 'gf', 22, 'fdg', 'fg', '2024-01-28', 'dfg', '', 16),
('2024-01-24', 'elo', '', '4654', 19, '123', '156', '2024-01-17', 'jkbnjk', '', 17);

-- --------------------------------------------------------

--
-- Table structure for table `invotoriesmg`
--

CREATE TABLE `invotoriesmg` (
  `id` int(11) NOT NULL,
  `catId` int(111) NOT NULL,
  `Equipement` text NOT NULL,
  `modele` text NOT NULL,
  `SN` text NOT NULL,
  `Date_reception` date NOT NULL,
  `Statue_reception` tinyint(1) NOT NULL,
  `commentaire` text NOT NULL,
  `Qt` int(255) NOT NULL,
  `pic` varchar(111) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invotoriesmg`
--

INSERT INTO `invotoriesmg` (`id`, `catId`, `Equipement`, `modele`, `SN`, `Date_reception`, `Statue_reception`, `commentaire`, `Qt`, `pic`) VALUES
(144, 0, 'douchette', 'SwiftGlide MX-2000', 'SwiftGlide MX-2000', '2024-04-02', 1, 'xax', 3, ''),
(145, 0, 'douchette', 'SwiftGlide MX-2000', 'SwiftGlide MX-2000', '2024-04-02', 0, 'xax', 33, ''),
(146, 0, 'douchette', 'SwiftGlide MX-2000', 'SwiftGlide MX-2000', '2024-04-02', 0, 'xax', 12, ''),
(156, 1, 'douchette', 'SwiftGlide MX-2000', 'SwiftGlide MX-2000', '0000-00-00', 1, 'test', 1, ''),
(158, 0, 'pc', 'hp pavion', 'STW2008', '2024-04-05', 0, '', 20, ''),
(161, 0, 'ecran', 'hp pavion', 'ccae', '2024-04-13', 1, 'bien recu', 15, ''),
(162, 1, 'ecran', 'hp pavion', 'ccae', '0000-00-00', 1, '', 1, ''),
(163, 0, 'aa', 'a', '', '2024-04-25', 0, '', 21, 'A.P.jpg'),
(166, 0, ' Imprimante laser', ' HP LaserJet Pro M402dn', 'CN6XXXXX98', '2024-04-17', 0, ' Aucun problème détecté lors de la vérification initiale.', 20, 'bic.jpg'),
(167, 0, 'Ordinateur portable', ' Dell Latitude 7420', 'D9BXXXXX21', '2024-04-27', 0, 'Emballage endommagé à la réception, nécessite une inspection approfondie avant confirmation.', 20, 'bic.jpg'),
(168, 1, 'douchette', 'SwiftGlide MX-2000', 'SwiftGlide MX-2000', '0000-00-00', 1, '', 1, ''),
(169, 1, 'pc lenovo', 'aze', 'STW2005', '0000-00-00', 1, '', 1, ''),
(170, 0, 'douchettte ', 'séad', '', '0002-03-31', 1, '', 21, 'bic.jpg'),
(171, 1, 'douchettte ', 'séad', 'STW2008', '0123-02-23', 1, '', 1, ''),
(172, 1, 'douchettte ', 'séad', 'STW2008', '0123-02-23', 1, '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `title` varchar(222) NOT NULL,
  `name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `title`, `name`) VALUES
(1, 'BIC_IT_Inventory', 'BIC_IT_Inventory');

-- --------------------------------------------------------

--
-- Table structure for table `sold`
--

CREATE TABLE `sold` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `contact` varchar(222) NOT NULL,
  `discount` varchar(222) NOT NULL,
  `item` varchar(222) NOT NULL,
  `amount` varchar(222) NOT NULL,
  `userId` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sold`
--

INSERT INTO `sold` (`id`, `name`, `contact`, `discount`, `item`, `amount`, `userId`, `date`) VALUES
(5, 'Assemblage Cristal', '+216', '651', '1', '-644', 1, '2024-01-23 09:17:39');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `pic` text NOT NULL,
  `number` text NOT NULL,
  `address` text NOT NULL,
  `cnic` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tododb`
--

CREATE TABLE `tododb` (
  `id` int(11) NOT NULL,
  `pc` varchar(255) NOT NULL,
  `nom_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `pic` varchar(222) NOT NULL,
  `number` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `pic`, `number`, `date`) VALUES
(1, 'admin@gmail.com', 'admin', 'Bic Bizerte', 'fk.jpg', '+21694975702', '2017-11-02 12:34:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtasksbd`
--
ALTER TABLE `addtasksbd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alocatebd`
--
ALTER TABLE `alocatebd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventeries`
--
ALTER TABLE `inventeries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventeries1`
--
ALTER TABLE `inventeries1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invotoriesmg`
--
ALTER TABLE `invotoriesmg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sold`
--
ALTER TABLE `sold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tododb`
--
ALTER TABLE `tododb`
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
-- AUTO_INCREMENT for table `addtasksbd`
--
ALTER TABLE `addtasksbd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `alocatebd`
--
ALTER TABLE `alocatebd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `inventeries`
--
ALTER TABLE `inventeries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `inventeries1`
--
ALTER TABLE `inventeries1`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `invotoriesmg`
--
ALTER TABLE `invotoriesmg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sold`
--
ALTER TABLE `sold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tododb`
--
ALTER TABLE `tododb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
