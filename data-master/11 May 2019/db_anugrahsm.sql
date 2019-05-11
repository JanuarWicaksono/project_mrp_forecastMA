-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Bulan Mei 2019 pada 08.34
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

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
  `products_product_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bom`
--

INSERT INTO `bom` (`bom_id`, `products_product_id`, `created_at`, `updated_at`) VALUES
(21, 7, '2018-07-17 18:59:43', '2018-08-02 02:27:38'),
(22, 8, '2018-08-02 02:25:30', NULL);

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
(21, 3, 10),
(21, 4, 5),
(21, 7, 2),
(22, 3, 4),
(22, 4, 6);

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
(6, 'Alfamart', 'alfamart@gmail.com', '08625265642', 'active', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018-07-12 05:22:51', NULL),
(7, 'Indomaret', 'indomaret@gmail.com', '08251523223', 'active', 'slemanLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018-07-12 05:23:32', NULL),
(8, 'Intan Sarana', 'intansarana@gmail.com', '085243242324', 'active', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018-07-12 05:23:17', NULL),
(9, 'Starbuks', 'startbuks@gmail.com', '08152736452', 'active', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018-08-04 20:46:37', NULL);

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
(5, 'Januar Wicaksono', 'Laki-laki', 'januarwicaksono@gmail.com', 'januar', '202cb962ac59075b964b07152d234b70', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '89208490189', '2018-08-19 01:20:34', '2018-09-04 21:50:11', 18),
(6, 'Lorem', 'Laki-laki', 'produsen@gmail.com', 'produsen', '202cb962ac59075b964b07152d234b70', '', '08556342313', '2019-04-30 11:24:28', NULL, 32);

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
(20, 'Owner'),
(32, 'Produsen');

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
(32, 1, NULL),
(32, 2, NULL),
(32, 3, NULL),
(32, 5, NULL),
(32, 8, NULL);

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
(2, 'products_sales'),
(3, 'productions'),
(4, 'employees'),
(5, 'materials'),
(6, 'costumers'),
(7, 'suppliers'),
(8, 'products');

-- --------------------------------------------------------

--
-- Struktur dari tabel `forecast`
--

CREATE TABLE `forecast` (
  `forecast_id` int(11) NOT NULL,
  `forecast_date` date NOT NULL,
  `forecast_result` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 'Kopi', 0, 244500, 'gram', 'available', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet eleifend lorem in pretium. Aenean vel augue at libero dictum rutrum. Nullam non volutpat libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas luctus volutpat odio ut mattis', '2018-06-26 15:15:04', '2018-09-03 14:22:23'),
(3, 'Gula', 9000, 52120, 'gram', 'available', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet eleifend lorem in pretium. Aenean vel augue at libero dictum rutrum. Nullam non volutpat libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas luctus volutpat odio ut mattis', '2018-06-26 15:15:10', '2018-06-27 13:08:39'),
(4, 'Jahe', 0, 97330, 'gram', 'available', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet eleifend lorem in pretium. Aenean vel augue at libero dictum rutrum. Nullam non volutpat libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas luctus volutpat odio ut mattis', '2018-06-26 15:15:16', '2018-08-20 02:58:48'),
(7, 'Anggur', 0, 59520, 'gram', 'available', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet eleifend lorem in pretium. Aenean vel augue at libero dictum rutrum. Nullam non volutpat libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas luctus volutpat odio ut mattis', '2018-06-26 15:15:25', '2018-08-20 02:59:07'),
(11, 'Coklat', 60000, 1000, 'gram', 'available', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '2018-06-27 13:09:50', '2018-06-27 13:17:29'),
(12, 'Susu', 90000, 1000, 'gram', 'available', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '2018-06-27 13:17:57', NULL);

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
(2, 51),
(3, 52),
(4, 51),
(7, 54),
(11, 53),
(12, 53);

-- --------------------------------------------------------

--
-- Struktur dari tabel `materials_trans`
--

CREATE TABLE `materials_trans` (
  `material_trans_id` int(11) NOT NULL,
  `note` text,
  `status` varchar(11) DEFAULT NULL,
  `date_status_finished` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materials_trans`
--

INSERT INTO `materials_trans` (`material_trans_id`, `note`, `status`, `date_status_finished`, `created_at`, `updated_at`) VALUES
(6, 'loremloremlorem', 'finished', '2018-08-10 00:00:00', '2018-08-10 23:09:36', '2018-08-15 12:32:08'),
(7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'finished', '2018-08-10 00:00:00', '2018-08-10 23:15:48', '2018-08-15 14:52:03'),
(8, 'lorem', 'finished', '2018-08-10 00:00:00', '2018-08-10 23:17:25', '2018-08-15 15:22:22'),
(9, '', 'finished', '2018-08-11 00:00:00', '2018-08-11 00:08:38', '2018-08-15 15:22:33'),
(11, '', 'finished', '2018-08-15 17:14:21', '2018-08-15 17:13:20', '2018-08-15 17:14:20'),
(13, '', 'finished', '2018-08-15 17:41:12', '2018-08-15 17:24:40', '2018-08-15 17:41:12'),
(14, '', 'finished', '2018-08-30 12:48:35', '2018-08-30 12:48:07', '2018-08-30 12:48:35'),
(15, 'lorem', 'finished', '2018-09-03 14:24:23', '2018-09-02 01:02:35', '2018-09-03 14:24:23'),
(16, 'Pesanan Kopi', 'finished', '2018-09-03 14:25:18', '2018-09-03 14:25:04', '2018-09-03 14:25:18'),
(17, 'lorem ipsum', 'finished', '2018-09-03 14:26:00', '2018-09-03 14:25:47', '2018-09-03 14:25:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materials_trans_detail`
--

CREATE TABLE `materials_trans_detail` (
  `materials_trans_detail_id` int(11) NOT NULL,
  `material_id` int(11) DEFAULT NULL,
  `material_name` varchar(45) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `supplier_name` varchar(45) DEFAULT NULL,
  `qty` float DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `arrived_at` datetime DEFAULT NULL,
  `note` text,
  `materials_trans_material_trans_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materials_trans_detail`
--

INSERT INTO `materials_trans_detail` (`materials_trans_detail_id`, `material_id`, `material_name`, `supplier_id`, `supplier_name`, `qty`, `status`, `arrived_at`, `note`, `materials_trans_material_trans_id`) VALUES
(4, 2, 'Kopi', 51, 'PT.Pertama', 20000, 'arrived', '2018-08-15 12:31:57', 'lorem', 6),
(5, 3, 'Gula', 52, 'PT.Kedua', 30000, 'arrived', '2018-08-15 12:32:08', 'lorem', 6),
(6, 2, 'Kopi', 51, 'PT.Pertama', 90000, 'arrived', '2018-08-15 12:19:04', 'lorem', 7),
(7, 3, 'Gula', 52, 'PT.Kedua', 10000, 'arrived', '2018-08-15 12:19:59', 'lorem', 7),
(8, 4, 'Jahe', 51, 'PT.Pertama', 20000, 'arrived', '2018-08-15 14:52:03', 'lorem', 7),
(9, 2, 'Kopi', 51, 'PT.Pertama', 60000, 'arrived', '2018-08-15 15:22:18', 'lorem', 8),
(10, 3, 'Gula', 52, 'PT.Kedua', 10000, 'arrived', '2018-08-15 15:22:21', 'lorem', 8),
(13, 2, 'Kopi', 51, 'PT.Pertama', 20000, 'arrived', '2018-08-15 17:14:20', '', 11),
(15, 2, 'Kopi', 51, 'PT.Pertama', 20000, 'arrived', '2018-08-15 17:41:12', '', 13),
(16, 11, 'Coklat', 53, 'PT.Ketiga', 500, 'arrived', '2018-08-30 12:48:24', '', 14),
(17, 12, 'Susu', 53, 'PT.Ketiga', 500, 'arrived', '2018-08-30 12:48:35', '', 14),
(18, 2, 'Kopi', 51, 'PT.Pertama', 3000, 'arrived', '2018-09-03 14:24:18', 'lorem', 15),
(19, 3, 'Gula', 52, 'PT.Kedua', 4000, 'arrived', '2018-09-03 14:24:23', 'lorem', 15),
(20, 2, 'Kopi', 51, 'PT.Pertama', 20000, 'arrived', '2018-09-03 14:25:18', '', 16),
(21, 2, 'Kopi', 51, 'PT.Pertama', 9000, 'arrived', '2018-09-03 14:25:56', '', 17),
(22, 3, 'Gula', 52, 'PT.Kedua', 1000, 'arrived', '2018-09-03 14:25:59', '', 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `productions`
--

CREATE TABLE `productions` (
  `production_id` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `started_at` date DEFAULT NULL,
  `finished_at` date DEFAULT NULL,
  `products_product_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `productions`
--

INSERT INTO `productions` (`production_id`, `status`, `started_at`, `finished_at`, `products_product_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(23, 'finished', '2018-08-24', '2018-09-01', 7, '2018-08-24 18:40:35', '2018-08-24 18:42:31', NULL),
(24, 'finished', '2018-08-30', '2018-09-01', 7, '2018-08-28 01:18:14', '2018-08-28 01:19:31', NULL),
(25, 'finished', '2018-08-28', '2018-09-01', 7, '2018-08-28 01:23:46', NULL, NULL),
(26, 'unfinished', '2018-08-30', NULL, 8, '2018-08-30 12:43:31', NULL, NULL),
(27, 'unfinished', '2019-04-10', NULL, 7, '2019-04-10 11:42:00', NULL, NULL),
(28, 'unfinished', '2019-04-30', NULL, 7, '2019-04-30 09:39:20', '2019-04-30 10:06:53', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `productions_histories`
--

CREATE TABLE `productions_histories` (
  `productions_detail_id` int(11) NOT NULL,
  `product_id` int(128) NOT NULL,
  `num_of_prod` int(11) DEFAULT NULL,
  `note` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` varchar(45) DEFAULT NULL,
  `productions_production_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `productions_histories`
--

INSERT INTO `productions_histories` (`productions_detail_id`, `product_id`, `num_of_prod`, `note`, `created_at`, `updated_at`, `deleted_at`, `productions_production_id`) VALUES
(15, 0, 233, 'test 1', '2018-08-24 18:40:35', NULL, NULL, 23),
(16, 0, 230, 'test 2', '2018-08-24 18:41:04', NULL, NULL, 23),
(17, 0, 253, 'test 3', '2018-08-24 18:42:31', NULL, NULL, 23),
(18, 0, 230, '', '2018-08-28 01:18:14', NULL, NULL, 24),
(19, 0, 230, 'lorem', '2018-08-28 01:19:31', NULL, NULL, 24),
(20, 0, 230, 'lorem ipsum', '2018-08-28 01:23:46', NULL, NULL, 25),
(21, 0, 245, '', '2018-08-30 12:43:31', NULL, NULL, 26),
(22, 7, 10, '', '2019-04-30 10:06:53', NULL, NULL, 28);

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
(7, 'Minuman Jahe Anggur', 16000, 365, 3480, 'available', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '', '2018-06-26 13:56:16', '2018-09-03 13:54:14', 5),
(8, 'Minuman Jahe Kencur', 15000, 365, 400, 'available', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018-06-26 13:56:25', NULL, 6),
(10, 'Minuman Jahe Coklat', 16000, 365, 10, 'available', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018-06-26 13:56:41', NULL, 6),
(11, 'Minuman Jahe Mocca', 18000, 365, 190, 'available', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018-06-26 13:56:53', NULL, 6);

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
(6, 'Kaleng 50ml', 'lorem'),
(7, 'Kaleng 90ml', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s'),
(8, 'Kaleng 500ml', '');

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
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `name`, `email`, `phone`, `status`, `address`, `created_at`, `updated_at`) VALUES
(51, 'PT.Pertama', 'pertama@gmail.com', '024189518625', 'active', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018-08-04 23:01:53', '2018-08-04 23:01:53'),
(52, 'PT.Kedua', 'kedua@gmail.com', '24619', 'active', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018-08-07 14:10:05', '2018-08-07 14:10:05'),
(53, 'PT.Ketiga', 'ketiga@gmail.com', '214861985', 'active', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018-08-04 15:02:47', NULL),
(54, 'PT.Ketiga', 'ketiga@gmail.com', '24241785', 'active', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2018-08-08 15:02:54', NULL);

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
(1, '2017-08-13', 6),
(2, '2017-09-13', 7),
(4, '2017-11-14', 6),
(5, '2017-12-14', 6),
(6, '2018-01-14', 7),
(7, '2018-02-14', 6),
(8, '2018-03-14', 6),
(9, '2018-04-14', 6),
(10, '2018-05-14', 6),
(11, '2018-06-14', 6),
(13, '2017-07-15', 6),
(16, '2018-07-25', 6),
(17, '2017-10-20', 6),
(18, '2018-09-01', 6),
(19, '2018-08-01', 6),
(20, '2018-09-03', 6),
(21, '2018-09-03', 7),
(22, '2018-09-03', 7),
(23, '2018-09-03', 6),
(24, '2018-09-03', 6),
(25, '2018-11-08', 6),
(26, '2018-12-08', 7),
(27, '2019-01-08', 6),
(28, '2019-02-08', 6),
(29, '2019-03-08', 6),
(30, '2018-10-08', 7),
(31, '2019-04-10', 7);

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
(1, 7, 257),
(1, 8, 250),
(2, 7, 239),
(2, 8, 299),
(4, 7, 255),
(4, 8, 245),
(5, 7, 233),
(5, 8, 222),
(6, 7, 260),
(6, 8, 299),
(7, 7, 259),
(7, 8, 222),
(8, 7, 267),
(8, 8, 255),
(9, 7, 277),
(9, 8, 257),
(10, 7, 222),
(10, 8, 300),
(11, 7, 267),
(11, 8, 290),
(13, 7, 250),
(13, 8, 245),
(16, 7, 200),
(16, 8, 100),
(17, 7, 298),
(17, 8, 200),
(18, 7, 300),
(19, 7, 300),
(20, 8, 30),
(20, 10, 20),
(21, 10, 80),
(22, 10, 80),
(23, 10, 80),
(24, 10, 10),
(24, 11, 10),
(25, 7, 200),
(26, 7, 150),
(27, 7, 300),
(28, 7, 250),
(29, 7, 220),
(30, 7, 300),
(31, 7, 300),
(31, 8, 100);

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
-- Indeks untuk tabel `forecast`
--
ALTER TABLE `forecast`
  ADD PRIMARY KEY (`forecast_id`);

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
-- Indeks untuk tabel `materials_trans`
--
ALTER TABLE `materials_trans`
  ADD PRIMARY KEY (`material_trans_id`);

--
-- Indeks untuk tabel `materials_trans_detail`
--
ALTER TABLE `materials_trans_detail`
  ADD PRIMARY KEY (`materials_trans_detail_id`,`materials_trans_material_trans_id`),
  ADD KEY `fk_materials_trans_detail_materials_trans1_idx` (`materials_trans_material_trans_id`);

--
-- Indeks untuk tabel `productions`
--
ALTER TABLE `productions`
  ADD PRIMARY KEY (`production_id`,`products_product_id`),
  ADD KEY `fk_productions_products1_idx` (`products_product_id`);

--
-- Indeks untuk tabel `productions_histories`
--
ALTER TABLE `productions_histories`
  ADD PRIMARY KEY (`productions_detail_id`,`productions_production_id`),
  ADD KEY `fk_productions_details_productions1_idx` (`productions_production_id`);

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
  MODIFY `bom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `costumers`
--
ALTER TABLE `costumers`
  MODIFY `costumer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `employees_levels`
--
ALTER TABLE `employees_levels`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `employee_levels_access`
--
ALTER TABLE `employee_levels_access`
  MODIFY `access_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `forecast`
--
ALTER TABLE `forecast`
  MODIFY `forecast_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `materials`
--
ALTER TABLE `materials`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `materials_trans`
--
ALTER TABLE `materials_trans`
  MODIFY `material_trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `materials_trans_detail`
--
ALTER TABLE `materials_trans_detail`
  MODIFY `materials_trans_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `productions`
--
ALTER TABLE `productions`
  MODIFY `production_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `productions_histories`
--
ALTER TABLE `productions_histories`
  MODIFY `productions_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `products_categories`
--
ALTER TABLE `products_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
-- Ketidakleluasaan untuk tabel `materials_trans_detail`
--
ALTER TABLE `materials_trans_detail`
  ADD CONSTRAINT `fk_materials_trans_detail_materials_trans1` FOREIGN KEY (`materials_trans_material_trans_id`) REFERENCES `materials_trans` (`material_trans_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `productions`
--
ALTER TABLE `productions`
  ADD CONSTRAINT `fk_productions_products1` FOREIGN KEY (`products_product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `productions_histories`
--
ALTER TABLE `productions_histories`
  ADD CONSTRAINT `fk_productions_details_productions1` FOREIGN KEY (`productions_production_id`) REFERENCES `productions` (`production_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
