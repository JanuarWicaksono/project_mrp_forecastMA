-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2018 pada 19.35
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_anugrahsm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bom`
--

CREATE TABLE `bom` (
  `bom_id` int(11) NOT NULL,
  `num_comb_product` int(11) DEFAULT NULL,
  `products_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bom`
--

INSERT INTO `bom` (`bom_id`, `num_comb_product`, `products_product_id`) VALUES
(1, 100, 7),
(14, 321, 8),
(15, 1, 9),
(16, 100, 10),
(17, 100, 10),
(18, 100, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bom_has_materials`
--

CREATE TABLE `bom_has_materials` (
  `bom_bom_id` int(11) NOT NULL,
  `materials_material_id` int(11) NOT NULL,
  `num_comb_material` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bom_has_materials`
--

INSERT INTO `bom_has_materials` (`bom_bom_id`, `materials_material_id`, `num_comb_material`) VALUES
(1, 2, 100),
(1, 3, 100),
(14, 2, 123),
(15, 3, 10),
(15, 4, 12),
(16, 2, 20),
(17, 2, 20),
(17, 3, 100),
(18, 2, 200),
(18, 3, 200);

-- --------------------------------------------------------

--
-- Struktur dari tabel `costumers`
--

CREATE TABLE `costumers` (
  `costumer_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `address` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `costumers`
--

INSERT INTO `costumers` (`costumer_id`, `name`, `email`, `phone`, `status`, `address`, `created_at`, `updated_at`) VALUES
(6, 'Alfamart', 'alfamart@gmail.com', '782964962789', 'active', 'jakal km 14', '2018-04-15 07:12:29', NULL),
(7, 'indomaret', 'indomaret@gmail.com', '7863247816', 'nonactive', 'sleman', '2018-04-15 15:52:03', NULL),
(8, 'Intan Sarana', 'intansarana@gmail.com', '2671846718', 'active', 'jlkaliurang km.13.5', '2018-04-15 13:18:24', NULL),
(9, 'Intan Sarana', 'intansarana@gmail.com', '2671846718', 'nonactive', 'jlkaliurang km.13.5', '2018-04-15 15:52:03', NULL),
(18, 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaa@gmail.com', '16231515', 'active', 'aaaaaaaaaaaaa', '2018-04-15 16:24:10', NULL),
(21, 'Starkom', 'starkom@gmail.com', '215161', 'active', 'sleman', '2018-04-27 18:42:46', NULL),
(23, 'Warung sebelah', 'sebelah@gmail.com', '2121525', 'nonactive', 'sleman', '2018-04-28 09:02:26', NULL),
(26, 'wdad', 'wada@gmail.com', '2154215', 'active', 'wdadada', '2018-06-07 23:45:47', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `gender` varchar(9) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(45) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `employees_levels_level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `employees`
--

INSERT INTO `employees` (`employee_id`, `name`, `gender`, `email`, `username`, `password`, `address`, `phone`, `created_at`, `updated_at`, `employees_levels_level_id`) VALUES
(1, 'Januar Wicaksono', 'Laki-laki', 'januar@gmail.com', 'januar', '202cb962ac59075b964b07152d234b70', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '082512657134254', '2018-06-27 12:18:08', '2018-06-27 12:18:27', 18),
(2, 'Intan Rizki Amalia', 'Perempuan', 'intan@gmail.com', 'intan', '202cb962ac59075b964b07152d234b70', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '0825125617831', '2018-06-27 12:19:11', NULL, 20),
(3, 'Shodiq Wibowo', 'Laki-laki', 'shodiq@gmail.com', 'shodiq', '202cb962ac59075b964b07152d234b70', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '08241678521425', '2018-06-27 12:19:53', NULL, 18),
(4, 'Septiandi Wibowo', 'Laki-laki', 'bowo@gmail.com', 'bowo', '202cb962ac59075b964b07152d234b70', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '08521657821645', '2018-06-27 12:20:29', NULL, 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `employees_levels`
--

CREATE TABLE `employees_levels` (
  `level_id` int(11) NOT NULL,
  `level_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `employees_levels`
--

INSERT INTO `employees_levels` (`level_id`, `level_name`) VALUES
(18, 'Admin'),
(20, 'Owner');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employees_levels_has_access`
--

CREATE TABLE `employees_levels_has_access` (
  `employees_levels_level_id` int(11) NOT NULL,
  `access_access_id` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `employees_levels_has_access`
--

INSERT INTO `employees_levels_has_access` (`employees_levels_level_id`, `access_access_id`, `status`) VALUES
(18, 1, NULL),
(18, 2, NULL),
(18, 3, NULL),
(18, 4, NULL),
(18, 5, NULL),
(18, 6, NULL),
(18, 7, NULL),
(18, 8, NULL),
(20, 1, NULL),
(20, 2, NULL),
(20, 3, NULL),
(20, 4, NULL),
(20, 5, NULL),
(20, 6, NULL),
(20, 7, NULL),
(20, 8, NULL),
(20, 9, NULL),
(20, 10, NULL),
(20, 11, NULL),
(20, 12, NULL),
(20, 13, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee_levels_access`
--

CREATE TABLE `employee_levels_access` (
  `access_id` int(11) NOT NULL,
  `access_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `employee_levels_access`
--

INSERT INTO `employee_levels_access` (`access_id`, `access_name`) VALUES
(1, 'dashboard'),
(2, 'pegawai'),
(3, 'produk'),
(4, 'bahan baku'),
(5, 'pelanggan'),
(6, 'pemasok'),
(7, 'penjualan'),
(8, 'peramalan'),
(9, 'mps'),
(10, 'mrp'),
(11, 'penjadwalan'),
(12, 'pembelian bahan baku'),
(13, 'laporan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materials`
--

CREATE TABLE `materials` (
  `material_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` float NOT NULL,
  `stock_type` varchar(45) DEFAULT NULL,
  `status` varchar(45) NOT NULL,
  `note` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materials`
--

INSERT INTO `materials` (`material_id`, `name`, `price`, `stock`, `stock_type`, `status`, `note`, `created_at`, `updated_at`) VALUES
(2, 'Kopi', 10000, 100, 'gram', 'available', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet eleifend lorem in pretium. Aenean vel augue at libero dictum rutrum. Nullam non volutpat libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas luctus volutpat odio ut mattis', '2018-06-26 15:15:04', '2018-06-27 13:08:18'),
(3, 'Gula', 9000, 200, '', 'available', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet eleifend lorem in pretium. Aenean vel augue at libero dictum rutrum. Nullam non volutpat libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas luctus volutpat odio ut mattis', '2018-06-26 15:15:10', '2018-06-27 13:08:39'),
(4, 'Jahe', 10000, 266, '', 'available', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet eleifend lorem in pretium. Aenean vel augue at libero dictum rutrum. Nullam non volutpat libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas luctus volutpat odio ut mattis', '2018-06-26 15:15:16', '2018-06-27 13:08:48'),
(7, 'Anggur', 26000, 270, 'gram', 'available', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet eleifend lorem in pretium. Aenean vel augue at libero dictum rutrum. Nullam non volutpat libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas luctus volutpat odio ut mattis', '2018-06-26 15:15:25', '2018-06-27 13:09:12'),
(11, 'Coklat', 60000, 8000, 'gram', 'available', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '2018-06-27 13:09:50', '2018-06-27 13:17:29'),
(12, 'Susu', 90000, 800, 'gram', 'available', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '2018-06-27 13:17:57', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `materials_has_suppliers`
--

CREATE TABLE `materials_has_suppliers` (
  `materials_material_id` int(11) NOT NULL,
  `suppliers_supplier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materials_has_suppliers`
--

INSERT INTO `materials_has_suppliers` (`materials_material_id`, `suppliers_supplier_id`) VALUES
(2, 46),
(2, 48),
(3, 48),
(4, 47),
(4, 49),
(7, 47),
(7, 49);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mps`
--

CREATE TABLE `mps` (
  `mps_id` int(11) NOT NULL,
  `period_month` varchar(45) DEFAULT NULL,
  `lead_time` int(11) DEFAULT NULL,
  `on_hand` int(11) DEFAULT NULL,
  `lot_size` int(11) DEFAULT NULL,
  `safety_stock` int(11) DEFAULT NULL,
  `demand_time_fence` int(11) DEFAULT NULL,
  `planning_time_fence` int(11) DEFAULT NULL,
  `mps_info_mps_info_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mps_info`
--

CREATE TABLE `mps_info` (
  `mps_info_id` int(11) NOT NULL,
  `week_period` int(11) DEFAULT NULL,
  `sales_plan` int(11) DEFAULT NULL,
  `actual_order` int(11) DEFAULT NULL,
  `pab` int(11) DEFAULT NULL,
  `atp` int(11) DEFAULT NULL,
  `cumulative_atp` int(11) DEFAULT NULL,
  `mps` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mrp`
--

CREATE TABLE `mrp` (
  `mrp_id` int(11) NOT NULL,
  `lead_time` int(11) DEFAULT NULL,
  `on_hand` int(11) DEFAULT NULL,
  `lot_size` int(11) DEFAULT NULL,
  `safety_stock` int(11) DEFAULT NULL,
  `mrp_info_mrp_info_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mrp_info`
--

CREATE TABLE `mrp_info` (
  `mrp_info_id` int(11) NOT NULL,
  `period_week` int(11) DEFAULT NULL,
  `gross_requirements` int(11) DEFAULT NULL,
  `scheduled_receipts` int(11) DEFAULT NULL,
  `projected_onhand` int(11) DEFAULT NULL,
  `projected_available` int(11) DEFAULT NULL,
  `net_requirements` int(11) DEFAULT NULL,
  `planned_order_receipts` int(11) DEFAULT NULL,
  `planned_order_release` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `price` int(11) NOT NULL,
  `expiration` int(11) NOT NULL,
  `unit_in_stock` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `description` text,
  `note` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `products_categories_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `expiration`, `unit_in_stock`, `status`, `description`, `note`, `created_at`, `updated_at`, `products_categories_category_id`) VALUES
(7, 'Minuman Jahe Anggur', 15000, 365, 500, 'available', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018-06-26 13:56:16', '2018-06-27 12:44:17', 5),
(8, 'Minuman Jahe Kencur', 15000, 365, 500, 'available', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018-06-26 13:56:25', NULL, 6),
(9, 'Minuman Jahe Susu', 12000, 365, 2000, 'available', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018-06-26 13:56:33', NULL, 7),
(10, 'Minuman Jahe Coklat', 16000, 365, 100, 'available', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018-06-26 13:56:41', NULL, 6),
(11, 'Minuman Jahe Mocca', 18000, 365, 200, 'available', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018-06-26 13:56:53', NULL, 6),
(12, 'Minuman Susu Cokalat', 18000, 365, 600, 'available', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '2018-06-27 12:50:10', '2018-06-27 12:50:23', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `products_categories`
--

CREATE TABLE `products_categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products_categories`
--

INSERT INTO `products_categories` (`category_id`, `name`, `description`) VALUES
(5, 'Saset 15ml', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s'),
(6, 'Kaleng 50ml', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s'),
(7, 'Kaleng 90ml', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products_has_materials`
--

CREATE TABLE `products_has_materials` (
  `products_product_id` int(11) NOT NULL,
  `materials_material_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `status` varchar(9) DEFAULT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `name`, `email`, `phone`, `status`, `address`, `created_at`, `updated_at`) VALUES
(46, 'PT.Pertama', 'Pertama@gmail.com', '0812676273', 'active', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018-06-26 06:03:17', NULL),
(47, 'PT.Kedua', 'Kedua@gmail.com', '0823251674', 'active', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018-06-26 06:05:30', NULL),
(48, 'PT.Ketiga', 'Ketiga@gmail.com', '0821415241', 'active', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018-06-26 06:05:54', NULL),
(49, 'PT.Empat', 'Empat@gmail.com', '08241674', 'active', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018-06-26 06:17:21', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `costumers_costumer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `date`, `costumers_costumer_id`) VALUES
(7, '2018-01-28', 6),
(8, '2018-02-28', 6),
(9, '2018-06-12', 7),
(10, '2018-06-20', 6),
(11, '2018-06-20', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions_has_products`
--

CREATE TABLE `transactions_has_products` (
  `transactions_transaction_id` int(11) NOT NULL,
  `products_product_id` int(11) NOT NULL,
  `purchase_qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transactions_has_products`
--

INSERT INTO `transactions_has_products` (`transactions_transaction_id`, `products_product_id`, `purchase_qty`) VALUES
(7, 7, 200),
(7, 8, 100),
(8, 7, 100),
(8, 8, 200),
(9, 7, 100),
(9, 8, 200),
(10, 7, 100),
(10, 9, 200),
(11, 7, 100),
(11, 8, 400),
(11, 9, 200);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bom`
--
ALTER TABLE `bom`
  ADD PRIMARY KEY (`bom_id`,`products_product_id`),
  ADD KEY `fk_bom_products1_idx` (`products_product_id`);

--
-- Indeks untuk tabel `bom_has_materials`
--
ALTER TABLE `bom_has_materials`
  ADD PRIMARY KEY (`bom_bom_id`,`materials_material_id`),
  ADD KEY `fk_bom_has_materials_materials1_idx` (`materials_material_id`),
  ADD KEY `fk_bom_has_materials_bom1_idx` (`bom_bom_id`);

--
-- Indeks untuk tabel `costumers`
--
ALTER TABLE `costumers`
  ADD PRIMARY KEY (`costumer_id`);

--
-- Indeks untuk tabel `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`,`employees_levels_level_id`),
  ADD UNIQUE KEY `employee_id_UNIQUE` (`employee_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `fk_employees_employess_levels_idx` (`employees_levels_level_id`);

--
-- Indeks untuk tabel `employees_levels`
--
ALTER TABLE `employees_levels`
  ADD PRIMARY KEY (`level_id`);

--
-- Indeks untuk tabel `employees_levels_has_access`
--
ALTER TABLE `employees_levels_has_access`
  ADD PRIMARY KEY (`employees_levels_level_id`,`access_access_id`),
  ADD KEY `fk_employees_levels_has_access_access1_idx` (`access_access_id`),
  ADD KEY `fk_employees_levels_has_access_employees_levels1_idx` (`employees_levels_level_id`);

--
-- Indeks untuk tabel `employee_levels_access`
--
ALTER TABLE `employee_levels_access`
  ADD PRIMARY KEY (`access_id`);

--
-- Indeks untuk tabel `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`material_id`);

--
-- Indeks untuk tabel `materials_has_suppliers`
--
ALTER TABLE `materials_has_suppliers`
  ADD PRIMARY KEY (`materials_material_id`,`suppliers_supplier_id`),
  ADD KEY `fk_materials_has_suppliers_suppliers1_idx` (`suppliers_supplier_id`),
  ADD KEY `fk_materials_has_suppliers_materials1_idx` (`materials_material_id`);

--
-- Indeks untuk tabel `mps`
--
ALTER TABLE `mps`
  ADD PRIMARY KEY (`mps_id`,`mps_info_mps_info_id`),
  ADD KEY `fk_mps_mps_info1_idx` (`mps_info_mps_info_id`);

--
-- Indeks untuk tabel `mps_info`
--
ALTER TABLE `mps_info`
  ADD PRIMARY KEY (`mps_info_id`);

--
-- Indeks untuk tabel `mrp`
--
ALTER TABLE `mrp`
  ADD PRIMARY KEY (`mrp_id`,`mrp_info_mrp_info_id`),
  ADD KEY `fk_mrp_mrp_info1_idx` (`mrp_info_mrp_info_id`);

--
-- Indeks untuk tabel `mrp_info`
--
ALTER TABLE `mrp_info`
  ADD PRIMARY KEY (`mrp_info_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`,`products_categories_category_id`),
  ADD KEY `fk_products_products_categories1_idx` (`products_categories_category_id`);

--
-- Indeks untuk tabel `products_categories`
--
ALTER TABLE `products_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `products_has_materials`
--
ALTER TABLE `products_has_materials`
  ADD PRIMARY KEY (`products_product_id`,`materials_material_id`),
  ADD KEY `fk_products_has_materials_materials1_idx` (`materials_material_id`),
  ADD KEY `fk_products_has_materials_products1_idx` (`products_product_id`);

--
-- Indeks untuk tabel `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`,`costumers_costumer_id`),
  ADD KEY `fk_transactions_costumers1_idx` (`costumers_costumer_id`);

--
-- Indeks untuk tabel `transactions_has_products`
--
ALTER TABLE `transactions_has_products`
  ADD PRIMARY KEY (`transactions_transaction_id`,`products_product_id`),
  ADD KEY `fk_transactions_has_products_products1_idx` (`products_product_id`),
  ADD KEY `fk_transactions_has_products_transactions1_idx` (`transactions_transaction_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bom`
--
ALTER TABLE `bom`
  MODIFY `bom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `costumers`
--
ALTER TABLE `costumers`
  MODIFY `costumer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `employees_levels`
--
ALTER TABLE `employees_levels`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `employee_levels_access`
--
ALTER TABLE `employee_levels_access`
  MODIFY `access_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `materials`
--
ALTER TABLE `materials`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `mps`
--
ALTER TABLE `mps`
  MODIFY `mps_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mps_info`
--
ALTER TABLE `mps_info`
  MODIFY `mps_info_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mrp`
--
ALTER TABLE `mrp`
  MODIFY `mrp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mrp_info`
--
ALTER TABLE `mrp_info`
  MODIFY `mrp_info_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `products_categories`
--
ALTER TABLE `products_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bom`
--
ALTER TABLE `bom`
  ADD CONSTRAINT `fk_bom_products1` FOREIGN KEY (`products_product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `bom_has_materials`
--
ALTER TABLE `bom_has_materials`
  ADD CONSTRAINT `fk_bom_has_materials_bom1` FOREIGN KEY (`bom_bom_id`) REFERENCES `bom` (`bom_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bom_has_materials_materials1` FOREIGN KEY (`materials_material_id`) REFERENCES `materials` (`material_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `fk_employees_employess_levels` FOREIGN KEY (`employees_levels_level_id`) REFERENCES `employees_levels` (`level_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `employees_levels_has_access`
--
ALTER TABLE `employees_levels_has_access`
  ADD CONSTRAINT `fk_employees_levels_has_access_access1` FOREIGN KEY (`access_access_id`) REFERENCES `employee_levels_access` (`access_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_employees_levels_has_access_employees_levels1` FOREIGN KEY (`employees_levels_level_id`) REFERENCES `employees_levels` (`level_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `materials_has_suppliers`
--
ALTER TABLE `materials_has_suppliers`
  ADD CONSTRAINT `fk_materials_has_suppliers_materials1` FOREIGN KEY (`materials_material_id`) REFERENCES `materials` (`material_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_materials_has_suppliers_suppliers1` FOREIGN KEY (`suppliers_supplier_id`) REFERENCES `suppliers` (`supplier_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `mps`
--
ALTER TABLE `mps`
  ADD CONSTRAINT `fk_mps_mps_info1` FOREIGN KEY (`mps_info_mps_info_id`) REFERENCES `mps_info` (`mps_info_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `mrp`
--
ALTER TABLE `mrp`
  ADD CONSTRAINT `fk_mrp_mrp_info1` FOREIGN KEY (`mrp_info_mrp_info_id`) REFERENCES `mrp_info` (`mrp_info_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_products_categories1` FOREIGN KEY (`products_categories_category_id`) REFERENCES `products_categories` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `products_has_materials`
--
ALTER TABLE `products_has_materials`
  ADD CONSTRAINT `fk_products_has_materials_materials1` FOREIGN KEY (`materials_material_id`) REFERENCES `materials` (`material_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_products_has_materials_products1` FOREIGN KEY (`products_product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `fk_transactions_costumers1` FOREIGN KEY (`costumers_costumer_id`) REFERENCES `costumers` (`costumer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `transactions_has_products`
--
ALTER TABLE `transactions_has_products`
  ADD CONSTRAINT `fk_transactions_has_products_products1` FOREIGN KEY (`products_product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transactions_has_products_transactions1` FOREIGN KEY (`transactions_transaction_id`) REFERENCES `transactions` (`transaction_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
