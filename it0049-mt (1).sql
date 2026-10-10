-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2026 at 02:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it0049-mt`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `is_archived` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `is_archived`) VALUES
(1, 'Carlos Mendoza', 'carlos@example.com', '09171234567', 0),
(2, 'Sofia Cruz', 'sofia@example.com', '09181234567', 0),
(3, 'Miguel Torres', 'miguel@example.com', '09191234567', 0),
(4, 'Angela Ramos', 'angela@example.com', '09201234567', 1),
(5, 'Daniel Flores', 'daniel@example.com', '09211234567', 1),
(6, 'fax', 'rmjoaquin05@gmail.com', '15215215', 0),
(7, 'kyle', 'kyly@gmail.com', '15215215', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock_quantity` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_archived` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `stock_quantity`, `image`, `created_at`, `updated_at`, `is_archived`) VALUES
(1, 'Laptop', 35000.00, 4, NULL, '2026-10-06 20:38:43', '2026-10-10 12:32:35', 0),
(2, 'Wireless Mouses', 7500.00, 25, NULL, '2026-10-06 20:38:43', '2026-10-06 16:50:12', 0),
(3, 'Keyboard', 1200.00, 20, NULL, '2026-10-06 20:38:43', '2026-10-06 20:38:43', 0),
(4, 'USB Flash Drive', 500.00, 36, NULL, '2026-10-06 20:38:43', '2026-10-10 12:32:29', 0),
(5, 'Headset', 327273.00, 11, NULL, '2026-10-06 20:38:43', '2026-10-10 12:30:48', 0),
(6, 'visionnest', 35000.00, 14, NULL, '2026-10-06 17:24:10', '2026-10-10 12:32:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `product_id`, `customer_id`, `user_id`, `quantity`, `total_price`, `created_at`) VALUES
(1, 5, NULL, 9, 8, 2618184.00, '2026-10-10 20:30:48'),
(2, 1, NULL, 9, 1, 35000.00, '2026-10-10 20:32:21'),
(3, 4, NULL, 9, 4, 2000.00, '2026-10-10 20:32:29'),
(4, 1, NULL, 9, 5, 175000.00, '2026-10-10 20:32:35'),
(5, 6, NULL, 9, 3, 105000.00, '2026-10-10 20:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `task_date` date NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `status`, `task_date`, `created_at`) VALUES
(1, 'Check inventory', 'Pending', '2026-10-07', '2026-10-06 20:38:43'),
(2, 'Update product prices', 'In Progress', '2026-10-08', '2026-10-06 20:38:43'),
(3, 'Contact supplier', 'Pending', '2026-10-09', '2026-10-06 20:38:43'),
(4, 'Prepare sales report', 'Completed', '2026-10-10', '2026-10-06 20:38:43'),
(5, 'Organize customer records', 'Pending', '2026-10-11', '2026-10-06 20:38:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_archived` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `email`, `avatar`, `password`, `is_archived`) VALUES
(1, 'admin', 'System Administrator', 'admin@example.com', '1791305471_2dc6da3aaf00eaf9958d.jpg', '$2y$10$jZNE8bg4YQ.0Hr7iJVwxMOU0DgFKeAQJoShIJz.iAWQ2OdEKnWbzK', 0),
(2, 'juan', 'Juan Dela Cruz', 'juan@example.com', NULL, '$2y$12$.4IjpNUQ5lh5FQtd/UE/EOLmhlXfmArEKUFEMRoJY90CH85A52hei', 0),
(3, 'maria', 'Maria Santos', 'maria@example.com', NULL, '$2y$12$.4IjpNUQ5lh5FQtd/UE/EOLmhlXfmArEKUFEMRoJY90CH85A52hei', 0),
(4, 'pedro', 'Pedro Reyes', 'pedro@example.com', NULL, '$2y$12$.4IjpNUQ5lh5FQtd/UE/EOLmhlXfmArEKUFEMRoJY90CH85A52hei', 1),
(5, 'ana', 'Ana Garcia', 'ana@example.com', NULL, '$2y$12$.4IjpNUQ5lh5FQtd/UE/EOLmhlXfmArEKUFEMRoJY90CH85A52hei', 1),
(7, 'wolf', '1521', 'test@gmail.com', '1791306303_b39c6853cd83bf95681a.jpg', '$2y$10$9DNt7oCGrdynQiEethODDem7FHKHZ1NigXVzGHxE.oQnl0tyxFslO', 1),
(8, 'Firefly', 'Rafael Miguel Joaquin', 'rmjoaquin05@gmail.com', '1791306390_850223a9700b9c01476b.png', '$2y$10$kHbjkgZyHYEvftTHzjW8euQr77UoHRbVFe.tqKguRA9oYdDmgLqOK', 1),
(9, 'Misha', 'Far Eastern University Institute of Technology (Manila, Metro Manila)', 'awr1@gamil.com', NULL, '$2y$10$CNAu66JYRLxvjT9NXRWXLO4dg4mjs3vLBj3dzmxNboE5wswNxT20C', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
