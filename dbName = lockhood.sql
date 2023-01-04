-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 05:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lockhood`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_log`
--

CREATE TABLE `attendance_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `in_time` varchar(255) DEFAULT NULL,
  `out_time` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `attendance_log`
--

INSERT INTO `attendance_log` (`id`, `user_id`, `date`, `in_time`, `out_time`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 1, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:24:28', NULL, '2023-01-02 13:24:28'),
(2, 2, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:27:02', NULL, '2023-01-02 13:27:02'),
(3, 3, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:27:02', NULL, '2023-01-02 13:27:02'),
(4, 4, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:27:02', NULL, '2023-01-02 13:27:02'),
(5, 5, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:27:02', NULL, '2023-01-02 13:27:02'),
(6, 6, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:27:02', NULL, '2023-01-02 13:27:02'),
(7, 7, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:27:02', NULL, '2023-01-02 13:27:02'),
(8, 8, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:27:02', NULL, '2023-01-02 13:27:02'),
(9, 9, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:27:02', NULL, '2023-01-02 13:27:02'),
(10, 10, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:27:02', NULL, '2023-01-02 13:27:02'),
(11, 11, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:27:02', NULL, '2023-01-02 13:27:02'),
(12, 12, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:27:02', NULL, '2023-01-02 13:27:02'),
(13, 13, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:27:02', NULL, '2023-01-02 13:27:02'),
(14, 14, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:27:02', NULL, '2023-01-02 13:27:02'),
(15, 15, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:27:02', NULL, '2023-01-02 13:27:02'),
(16, 16, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:27:02', NULL, '2023-01-02 13:27:02'),
(17, 17, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:27:02', NULL, '2023-01-02 13:27:02'),
(18, 18, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:27:02', NULL, '2023-01-02 13:27:02'),
(19, 19, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:27:02', NULL, '2023-01-02 13:27:02'),
(20, 20, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:27:02', NULL, '2023-01-02 13:27:02'),
(21, 21, '2023-01-02', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:27:02', NULL, '2023-01-02 13:27:02'),
(23, 2, '2023-01-03', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:29:26', NULL, '2023-01-03 03:32:32'),
(24, 3, '2023-01-03', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:29:26', NULL, '2023-01-03 03:32:32'),
(25, 4, '2023-01-03', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:29:26', NULL, '2023-01-03 03:32:32'),
(26, 5, '2023-01-03', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:29:26', NULL, '2023-01-03 03:32:32'),
(27, 6, '2023-01-03', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:29:26', NULL, '2023-01-03 03:32:32'),
(36, 15, '2023-01-03', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:29:26', NULL, '2023-01-03 03:32:32'),
(37, 16, '2023-01-03', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:29:26', NULL, '2023-01-03 03:32:32'),
(38, 17, '2023-01-03', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:29:26', NULL, '2023-01-03 03:32:32'),
(39, 18, '2023-01-03', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:29:26', NULL, '2023-01-03 03:32:32'),
(40, 19, '2023-01-03', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:29:26', NULL, '2023-01-03 03:32:32'),
(41, 20, '2023-01-03', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:29:26', NULL, '2023-01-03 03:32:32'),
(42, 21, '2023-01-03', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:29:26', NULL, '2023-01-03 03:32:32'),
(43, 13, '2023-01-03', '08:30', '17:00', 'ACTIVE', NULL, '2023-01-02 13:37:14', NULL, '2023-01-03 03:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `components_processors`
--

CREATE TABLE `components_processors` (
  `id` bigint(20) NOT NULL,
  `component_id` int(11) DEFAULT NULL,
  `process_id` int(11) DEFAULT NULL,
  `process_duration` int(11) DEFAULT NULL,
  `production_cost` int(11) DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `components_processors`
--

INSERT INTO `components_processors` (`id`, `component_id`, `process_id`, `process_duration`, `production_cost`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 1, 1, 10, 100, 'ACTIVE', NULL, '2022-12-27 15:40:04', NULL, '2022-12-27 15:40:04'),
(2, 2, 2, 36, 196, 'ACTIVE', NULL, '2022-12-27 15:46:14', NULL, '2022-12-27 15:46:16'),
(3, 9, 4, 2, 11, 'ACTIVE', NULL, '2022-12-27 15:46:32', NULL, '2022-12-27 15:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `default_suppliers`
--

CREATE TABLE `default_suppliers` (
  `id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `default_suppliers`
--

INSERT INTO `default_suppliers` (`id`, `supplier_id`, `material_id`, `status`) VALUES
(1, 1, 1, 'ACTIVE'),
(2, 2, 2, 'ACTIVE'),
(3, 3, 3, 'ACTIVE'),
(4, 4, 4, 'ACTIVE'),
(5, 5, 5, 'ACTIVE'),
(6, 6, 6, 'ACTIVE'),
(7, 7, 7, 'ACTIVE'),
(8, 8, 8, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `location`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Factory Management', '', 'ACTIVE', NULL, '2022-12-27 07:54:03', NULL, '2022-12-27 07:55:06'),
(2, 'Engineering ', '', 'ACTIVE', NULL, '2022-12-27 07:54:15', NULL, '2022-12-27 07:55:07'),
(3, 'Engineering Design', '', 'ACTIVE', NULL, '2022-12-27 07:54:23', NULL, '2022-12-27 07:55:08'),
(4, 'R & D', '', 'ACTIVE', NULL, '2022-12-27 07:54:31', NULL, '2022-12-27 07:55:08'),
(5, 'HR', '', 'ACTIVE', NULL, '2022-12-27 07:54:34', NULL, '2022-12-27 07:55:09'),
(6, 'IT', '', 'ACTIVE', NULL, '2022-12-27 07:54:37', NULL, '2022-12-27 07:55:09'),
(7, 'Finance', '', 'ACTIVE', NULL, '2022-12-27 07:54:43', NULL, '2022-12-27 07:55:10'),
(8, 'Purchasing', '', 'ACTIVE', NULL, '2022-12-27 07:54:49', NULL, '2022-12-27 07:55:10'),
(9, 'Sales and Marketing', '', 'ACTIVE', NULL, '2022-12-27 07:55:00', NULL, '2022-12-30 05:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `department_users`
--

CREATE TABLE `department_users` (
  `id` int(11) NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `department_users`
--

INSERT INTO `department_users` (`id`, `department_id`, `user_id`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 1, 1, 'ACTIVE', NULL, '2022-12-27 16:15:18', NULL, '2022-12-27 16:15:18'),
(2, 9, 2, 'ACTIVE', NULL, '2022-12-30 05:36:09', NULL, '2022-12-30 05:36:09'),
(3, 9, 3, 'ACTIVE', NULL, '2022-12-30 05:36:25', NULL, '2022-12-30 05:36:25'),
(4, 9, 4, 'ACTIVE', NULL, '2022-12-30 05:36:40', NULL, '2022-12-30 05:36:40'),
(5, 9, 5, 'ACTIVE', NULL, '2022-12-30 05:36:53', NULL, '2022-12-30 05:52:29'),
(6, 7, 6, 'ACTIVE', NULL, '2023-01-01 14:01:57', NULL, '2023-01-01 14:01:57'),
(7, 2, 7, 'ACTIVE', NULL, '2023-01-02 09:46:13', NULL, '2023-01-02 09:46:13'),
(8, 3, 8, 'ACTIVE', NULL, '2023-01-02 09:49:35', NULL, '2023-01-02 09:49:35'),
(9, 4, 9, 'ACTIVE', NULL, '2023-01-02 09:49:35', NULL, '2023-01-02 09:49:35'),
(10, 5, 10, 'ACTIVE', NULL, '2023-01-02 09:49:35', NULL, '2023-01-02 09:49:35'),
(11, 6, 11, 'ACTIVE', NULL, '2023-01-02 09:49:35', NULL, '2023-01-02 09:49:35'),
(12, 7, 12, 'ACTIVE', NULL, '2023-01-02 09:49:35', NULL, '2023-01-02 09:49:35'),
(13, 8, 13, 'ACTIVE', NULL, '2023-01-02 09:49:35', NULL, '2023-01-02 09:49:35'),
(14, 9, 14, 'ACTIVE', NULL, '2023-01-02 09:49:35', NULL, '2023-01-02 09:49:35'),
(15, 1, 15, 'ACTIVE', NULL, '2023-01-02 09:49:35', NULL, '2023-01-02 09:49:35'),
(16, 2, 16, 'ACTIVE', NULL, '2023-01-02 09:49:35', NULL, '2023-01-02 09:49:35'),
(17, 3, 17, 'ACTIVE', NULL, '2023-01-02 09:49:35', NULL, '2023-01-02 09:49:35'),
(18, 4, 18, 'ACTIVE', NULL, '2023-01-02 09:49:35', NULL, '2023-01-02 09:49:35'),
(19, 5, 19, 'ACTIVE', NULL, '2023-01-02 09:49:35', NULL, '2023-01-02 09:49:35'),
(20, 6, 20, 'ACTIVE', NULL, '2023-01-02 09:49:35', NULL, '2023-01-02 09:49:35'),
(21, 7, 21, 'ACTIVE', NULL, '2023-01-02 09:50:18', NULL, '2023-01-02 09:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `department_workshop_details`
--

CREATE TABLE `department_workshop_details` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `workshop_unit_id` int(11) NOT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `employement_types`
--

CREATE TABLE `employement_types` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `employement_types`
--

INSERT INTO `employement_types` (`id`, `name`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Internal', 'ACTIVE', 1, '2022-12-21 15:24:44', NULL, '2022-12-21 15:24:44'),
(2, 'External', 'ACTIVE', 1, '2022-12-21 15:24:44', NULL, '2022-12-21 15:24:44');

-- --------------------------------------------------------

--
-- Table structure for table `factories`
--

CREATE TABLE `factories` (
  `id` int(11) NOT NULL,
  `plant_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `factories`
--

INSERT INTO `factories` (`id`, `plant_id`, `name`, `location`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 1, 'Factory X', 'Galle', 'ACTIVE', NULL, '2022-12-27 07:21:12', NULL, '2022-12-27 16:23:27'),
(2, 1, 'Factory Y', 'Colombo', 'ACTIVE', NULL, '2022-12-27 07:21:29', NULL, '2022-12-27 16:23:30'),
(3, 1, 'Factory Z', 'Jaffna', 'ACTIVE', NULL, '2022-12-27 07:21:46', NULL, '2022-12-27 16:23:32'),
(4, 2, 'Factory A', 'Matara', 'ACTIVE', NULL, '2022-12-27 07:21:46', NULL, '2022-12-27 16:23:33'),
(5, 2, 'Factory B', 'Amapara', 'ACTIVE', NULL, '2022-12-27 07:21:46', NULL, '2022-12-27 16:23:34'),
(6, 2, 'Factory C', 'Kaluthara', 'ACTIVE', NULL, '2022-12-27 07:21:46', NULL, '2022-12-27 16:23:34'),
(7, 3, 'Factory D', 'Kandy', 'ACTIVE', NULL, '2022-12-27 07:21:46', NULL, '2022-12-27 16:23:35'),
(8, 3, 'Factory E', 'Negambo', 'ACTIVE', NULL, '2022-12-27 07:21:46', NULL, '2022-12-27 16:23:40'),
(9, 3, 'Factory F', 'Beruwala', 'ACTIVE', NULL, '2022-12-27 07:21:46', NULL, '2022-12-27 16:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `factory_department_details`
--

CREATE TABLE `factory_department_details` (
  `id` int(11) NOT NULL,
  `factory_id` int(11) NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `factory_department_details`
--

INSERT INTO `factory_department_details` (`id`, `factory_id`, `department_id`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 1, 1, 'ACTIVE', NULL, '2022-12-27 07:55:44', NULL, '2022-12-27 07:55:44');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_items`
--

CREATE TABLE `inventory_items` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `available_qty` int(10) DEFAULT NULL,
  `warehouse_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `inventory_items`
--

INSERT INTO `inventory_items` (`id`, `product_id`, `available_qty`, `warehouse_id`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 1, 253, 1, NULL, '2023-01-02 15:16:09', NULL, '2023-01-02 15:16:35');

-- --------------------------------------------------------

--
-- Table structure for table `kanban_card`
--

CREATE TABLE `kanban_card` (
  `id` int(11) NOT NULL,
  `workshop_unit_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `date` date DEFAULT NULL,
  `completed_precentage` decimal(10,2) DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kanban_card`
--

INSERT INTO `kanban_card` (`id`, `workshop_unit_id`, `name`, `date`, `completed_precentage`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 1, 'Lock Barrel Card', '2022-12-27', '80.00', 'ACTIVE', NULL, '2022-12-27 11:08:46', NULL, '2023-01-04 15:20:48'),
(2, 2, ' Key Setting', '2022-12-27', '65.00', 'ACTIVE', NULL, '2022-12-27 11:09:01', NULL, '2023-01-04 10:48:50'),
(3, 7, 'Painting & Chemical Treatment', '2022-12-27', '42.00', 'ACTIVE', NULL, '2022-12-27 11:09:36', NULL, '2023-01-04 15:20:54'),
(4, 12, 'Repair No.23', '2023-01-05', '0.00', 'TODO', NULL, '2023-01-04 15:44:21', NULL, '2023-01-04 15:44:21'),
(5, 3, 'Assemble No.44', '2023-01-01', '90.00', 'INREVIEW', NULL, '2023-01-04 15:45:05', NULL, '2023-01-04 15:45:52');

-- --------------------------------------------------------

--
-- Table structure for table `material_item`
--

CREATE TABLE `material_item` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `material_item` varchar(45) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `unit_type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `unit_cost` int(11) DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `material_item`
--

INSERT INTO `material_item` (`id`, `name`, `material_item`, `unit_type`, `unit_cost`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Brass ', 'brass ', 'g', 2, 'ACTIVE', NULL, '2022-12-27 16:01:12', NULL, '2022-12-27 16:02:32'),
(2, 'Die-cast zinc', 'die-cast zinc', 'g', 10, 'ACTIVE', NULL, '2022-12-27 16:01:33', NULL, '2022-12-27 16:02:37'),
(3, 'Copper', 'copper', 'g', 5, 'ACTIVE', NULL, '2022-12-27 16:02:18', NULL, '2022-12-27 16:02:39'),
(4, 'Iron', 'Iron', 'g', 1, 'ACTIVE', NULL, '2022-12-27 16:02:28', NULL, '2022-12-27 16:02:28'),
(5, 'Plastic', 'Plastic', 'g', 2, 'ACTIVE', NULL, '2023-01-03 10:13:42', NULL, '2023-01-03 10:13:42'),
(6, 'Foam', 'Foam', 'g', 2, 'ACTIVE', NULL, '2023-01-03 10:16:40', NULL, '2023-01-03 10:16:40'),
(7, 'Metals', 'Metals', 'g', 2, 'ACTIVE', NULL, '2023-01-03 10:16:40', NULL, '2023-01-03 10:16:40'),
(8, 'Rubber', 'Rubber', 'g', 2, 'ACTIVE', NULL, '2023-01-03 10:16:40', NULL, '2023-01-03 10:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`id`, `name`, `location`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'ABC Plant', 'Galle', 'ACTIVE', 1, '2022-12-27 07:07:07', NULL, '2022-12-27 07:07:12'),
(2, 'XYZ Plant', 'Colombo', 'ACTIVE', 1, '2022-12-27 07:07:23', NULL, '2022-12-27 07:07:41'),
(3, 'UTS Plant', 'Jaffna', 'ACTIVE', 1, '2022-12-27 07:07:40', NULL, '2022-12-27 07:07:40');

-- --------------------------------------------------------

--
-- Table structure for table `process_materials`
--

CREATE TABLE `process_materials` (
  `id` bigint(20) NOT NULL,
  `component_process_id` bigint(20) DEFAULT NULL,
  `material_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `process_materials`
--

INSERT INTO `process_materials` (`id`, `component_process_id`, `material_id`, `quantity`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 1, 1, 10, 'ACTIVE', NULL, '2022-12-27 16:03:22', NULL, '2022-12-27 16:03:22'),
(2, 1, 2, 50, 'ACTIVE', NULL, '2022-12-27 16:03:38', NULL, '2022-12-27 16:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Codelocks Heavy Duty Push-Button Lock ', '25.00', 'ACTIVE', NULL, '2022-12-27 15:12:11', NULL, '2022-12-27 15:16:08'),
(2, '\r\nSmith & Locke Medium Duty Push-Button Lock', '12.00', 'ACTIVE', NULL, '2022-12-27 15:12:48', NULL, '2022-12-27 15:16:09'),
(3, 'Smith & Locke 6-Pin Thumbturn Euro Cylinder', '120.00', 'ACTIVE', NULL, '0000-00-00 00:00:00', NULL, '2022-12-29 10:10:45'),
(4, 'Smith Bathroom Mortice Lock 65mm Case', '100.00', 'ACTIVE', NULL, '0000-00-00 00:00:00', NULL, '2022-12-29 10:11:10'),
(5, 'Yale 630089001702 Night Latch Grey 60mm Backset', '9.00', 'ACTIVE', NULL, '2022-12-27 15:13:44', NULL, '2022-12-27 15:16:57'),
(6, 'Union 6-Pin Euro Cylinder Lock 45-55 (100mm)', '29.00', 'ACTIVE', NULL, '2022-12-27 15:13:54', NULL, '2022-12-29 10:11:17'),
(7, 'ERA Brass Effect BS 5-Lever Mortice Sashlock', '34.00', 'ACTIVE', NULL, '2022-12-27 15:14:11', NULL, '2022-12-29 10:11:28'),
(8, 'ERA Brass Effect', '44.00', 'ACTIVE', NULL, '2022-12-27 15:14:11', NULL, '2022-12-27 15:17:01'),
(9, 'BS 5-Lever Mortice ', '50.00', 'ACTIVE', NULL, '2022-12-27 15:14:11', NULL, '2022-12-27 15:17:01'),
(10, 'Mortice Sashlock 64mm ', '25.00', 'ACTIVE', NULL, '2022-12-27 15:14:11', NULL, '2022-12-27 15:17:01'),
(11, 'Case - 44mm Backset', '31.00', 'ACTIVE', NULL, '2022-12-27 15:14:11', NULL, '2022-12-27 15:17:01'),
(12, 'Lockout Tagout Locks, Safety Padlock, Loto Locks Keyed Differently Lock Out Tag Out', '68.00', 'ACTIVE', 1, '2022-12-29 16:31:12', 1, '2022-12-29 16:31:12'),
(13, 'Frame Lock Security Hanging Kits with T-Head Screws - 25 Pack - Anti-Theft Security Lock', '79.00', 'ACTIVE', 1, '2022-12-29 16:33:35', 1, '2022-12-29 16:33:35'),
(14, 'Lockout Tagout Locks, Safety Padlocks , Loto Locks Keyed Differently Lock Out Tag Out Device', '86.00', 'ACTIVE', 1, '2022-12-29 16:33:35', 1, '2022-12-29 16:33:35'),
(15, 'Defender Security U 10827 Door Reinforcement Lock – Add Extra, High Security to your Home and Preven', '72.00', 'ACTIVE', 1, '2022-12-29 16:33:35', 1, '2022-12-29 16:33:35'),
(16, 'Master Lock Door Security Bar, Home Security Door Stopper, Adjustable', '55.00', 'ACTIVE', 1, '2022-12-29 16:33:35', 1, '2022-12-29 16:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `product_components`
--

CREATE TABLE `product_components` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `product_components`
--

INSERT INTO `product_components` (`id`, `product_id`, `name`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 1, 'Interior Knob', 'ACTIVE', NULL, '2022-12-27 15:35:06', NULL, '2022-12-27 15:35:06'),
(2, 1, 'Lock Button', 'ACTIVE', NULL, '2022-12-27 15:35:21', NULL, '2022-12-27 15:36:15'),
(3, 1, 'Spring Clip', 'ACTIVE', NULL, '2022-12-27 15:35:26', NULL, '2022-12-27 15:36:15'),
(4, 1, 'Strike Plate', 'ACTIVE', NULL, '2022-12-27 15:35:36', NULL, '2022-12-27 15:36:18'),
(5, 1, 'Mounting Plate', 'ACTIVE', NULL, '2022-12-27 15:35:40', NULL, '2022-12-27 15:36:21'),
(6, 1, 'Shank', 'ACTIVE', NULL, '2022-12-27 15:35:44', NULL, '2022-12-27 15:36:20'),
(7, 1, 'Slot', 'ACTIVE', NULL, '2022-12-27 15:35:47', NULL, '2022-12-27 15:36:20'),
(8, 1, 'Cylinder', 'ACTIVE', NULL, '2022-12-27 15:35:51', NULL, '2022-12-27 15:36:17'),
(9, 1, 'Exterior Knob', 'ACTIVE', NULL, '2022-12-27 15:35:59', NULL, '2022-12-27 15:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `product_sale_legder`
--

CREATE TABLE `product_sale_legder` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `department_user_id` int(11) DEFAULT NULL,
  `selling_price` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `product_sale_legder`
--

INSERT INTO `product_sale_legder` (`id`, `product_id`, `department_user_id`, `selling_price`, `discount`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 1, 1, '10.00', '0.00', NULL, '2022-12-27 17:06:19', NULL, '2022-12-27 17:06:19'),
(2, 4, 1, '650.00', '2.20', NULL, '2022-12-29 05:27:19', NULL, '2022-12-29 05:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sold_price` decimal(10,2) NOT NULL,
  `sold_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `product_id`, `quantity`, `sold_price`, `sold_by`) VALUES
(1, 5, 30, '9.00', 2),
(2, 4, 70, '100.00', 3),
(3, 3, 60, '120.00', 4),
(4, 2, 50, '12.00', 1),
(5, 1, 20, '25.00', 3),
(6, 6, 10, '29.00', 4),
(7, 7, 64, '34.00', 3),
(8, 8, 72, '44.00', 2),
(9, 9, 55, '50.00', 1),
(10, 10, 43, '25.00', 4),
(11, 11, 28, '25.00', 2),
(12, 2, 62, '12.00', 3),
(13, 14, 15, '86.00', 5),
(14, 12, 34, '68.00', 6);

-- --------------------------------------------------------

--
-- Table structure for table `standard_process`
--

CREATE TABLE `standard_process` (
  `id` int(11) NOT NULL,
  `process` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `standard_process`
--

INSERT INTO `standard_process` (`id`, `process`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Molding', 'ACTIVE', NULL, '2022-12-27 15:08:36', NULL, '2022-12-27 15:08:51'),
(2, 'Laser Cut', 'ACTIVE', NULL, '2022-12-27 15:09:02', NULL, '2022-12-27 15:09:02'),
(3, 'Machine Cut', 'ACTIVE', NULL, '2022-12-27 15:09:12', NULL, '2022-12-27 15:09:12'),
(4, 'Welding', 'ACTIVE', NULL, '2022-12-27 15:09:18', NULL, '2022-12-27 15:09:23');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` bigint(20) NOT NULL,
  `material_item_id` int(11) DEFAULT NULL,
  `reorder_level` int(11) DEFAULT NULL,
  `max_stock_limit` int(11) DEFAULT NULL,
  `available_qty` int(11) DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `material_item_id`, `reorder_level`, `max_stock_limit`, `available_qty`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 1, 50, 1000, 750, 'ACTIVE', NULL, '2022-12-27 16:36:07', NULL, '2023-01-03 09:44:34'),
(2, 2, 75, 1100, 350, 'ACTIVE', NULL, '2022-12-27 16:36:07', NULL, '2023-01-03 09:44:34'),
(3, 3, 60, 980, 250, 'ACTIVE', NULL, '2022-12-27 16:36:07', NULL, '2023-01-03 09:44:34'),
(4, 4, 55, 900, 55, 'ACTIVE', NULL, '2022-12-27 16:36:27', NULL, '2023-01-03 09:44:38'),
(5, 5, 40, 990, 650, 'ACTIVE', NULL, '2022-12-27 11:06:07', NULL, '2023-01-03 04:14:34'),
(6, 6, 80, 1050, 350, 'ACTIVE', NULL, '2022-12-27 11:06:07', NULL, '2023-01-03 04:14:34'),
(7, 7, 65, 970, 250, 'ACTIVE', NULL, '2022-12-27 11:06:07', NULL, '2023-01-03 04:14:34'),
(8, 8, 60, 920, 60, 'ACTIVE', NULL, '2022-12-27 11:06:27', NULL, '2023-01-03 04:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `supplier_name` varchar(200) DEFAULT NULL,
  `qty_kg` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `supplier_name`, `qty_kg`, `price`, `status`) VALUES
(1, 'Terra', 1, '500.00', 'ACTIVE'),
(2, 'Maxim', 1, '600.00', 'ACTIVE'),
(3, 'Kelvin', 1, '650.00', 'ACTIVE'),
(4, 'Silver', 1, '490.00', 'ACTIVE'),
(5, 'Viper', 1, '150.00', 'ACTIVE'),
(6, 'Star', 1, '100.00', 'ACTIVE'),
(7, 'Estate', 1, '400.00', 'ACTIVE'),
(8, 'Spin', 1, '200.00', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_payments`
--

CREATE TABLE `supplier_payments` (
  `id` int(11) NOT NULL,
  `suppler_id` int(11) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `paid_amount` decimal(10,2) DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier_payments`
--

INSERT INTO `supplier_payments` (`id`, `suppler_id`, `total_amount`, `paid_amount`, `status`) VALUES
(1, 1, '75000.00', '25000.00', 'ACTIVE'),
(2, 2, '80000.00', '10000.00', 'ACTIVE'),
(3, 3, '65000.00', '10000.00', 'ACTIVE'),
(4, 4, '100000.00', '30000.00', 'ACTIVE'),
(5, 5, '60000.00', '15000.00', 'ACTIVE'),
(6, 6, '25000.00', '25000.00', 'ACTIVE'),
(7, 7, '45000.00', '45000.00', 'COMPLETED'),
(8, 8, '50000.00', '0.00', 'NONE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `contact_number` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `type`, `first_name`, `last_name`, `address`, `contact_number`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 1, 'Saman', 'Rathnapriya', 'Colombo 07', '0772347856', 'ACTIVE', 0, '2022-12-21 15:22:33', NULL, '2022-12-27 16:46:02'),
(2, 1, 'Gayan ', 'Sanjeewa', 'Galle', '0767272303', 'ACTIVE', NULL, '2022-12-27 16:40:07', NULL, '2022-12-27 16:46:05'),
(3, 2, 'Kamal', 'Sahabandu', 'Galle', '0722222222', 'ACTIVE', NULL, '2022-12-27 16:40:45', NULL, '2023-01-01 13:55:19'),
(4, 2, 'Nimal', 'Perera', 'Jaffna', '0769856325', 'NO', NULL, '2022-12-27 16:41:06', NULL, '2023-01-01 13:53:14'),
(5, 1, 'Amarabandhu', 'Rupasinghe', 'Galle', '0711234567', 'NO', NULL, '2022-12-29 16:58:12', NULL, '2023-01-01 13:55:09'),
(6, 1, 'Jhon', 'Smith', 'Matara', '0711234568', 'ACTIVE', NULL, '2022-12-30 08:37:28', NULL, '2023-01-01 13:55:27'),
(7, 1, 'Alice', 'Smith', '123 Main Street', '555-123-4567', 'ACTIVE', NULL, '2022-12-30 08:45:21', NULL, '2022-12-30 08:45:21'),
(8, 1, 'Bob', 'Johnson', '456 Park Avenue', '555-123-4568', 'ACTIVE', NULL, '2022-12-30 08:45:21', NULL, '2022-12-30 08:45:21'),
(9, 1, 'Charlie', 'Williams', '789 Maple Street', '555-123-4569', 'ACTIVE', NULL, '2022-12-30 08:45:21', NULL, '2022-12-30 08:45:21'),
(10, 1, 'Diana', 'Brown', '321 Oak Avenue', '555-123-4570', 'ACTIVE', NULL, '2022-12-30 08:45:21', NULL, '2022-12-30 08:45:21'),
(11, 1, 'Emily', 'Jones', '654 Pine Street', '555-123-4571', 'ACTIVE', NULL, '2022-12-30 08:45:21', NULL, '2022-12-30 08:45:21'),
(12, 1, 'Frank', 'Miller', '987 Cedar Street', '555-123-4572', 'ACTIVE', NULL, '2022-12-30 08:45:21', NULL, '2022-12-30 08:45:21'),
(13, 1, 'Grace', 'Taylor', '246 Maple Avenue', '555-123-4573', 'ACTIVE', NULL, '2022-12-30 08:45:21', NULL, '2022-12-30 08:45:21'),
(14, 1, 'Henry', 'White', '369 Oak Street', '555-123-4574', 'ACTIVE', NULL, '2022-12-30 08:45:21', NULL, '2022-12-30 08:45:21'),
(15, 1, 'Irene', 'Davis', '159 Pine Avenue', '555-123-4575', 'ACTIVE', NULL, '2022-12-30 08:45:21', NULL, '2022-12-30 08:45:21'),
(16, 1, 'Joan', 'Moore', '753 Cedar Avenue', '555-123-4576', 'ACTIVE', NULL, '2022-12-30 08:45:21', NULL, '2022-12-30 08:45:21'),
(17, 1, 'Kate', 'Taylor', '946 Maple Street', '555-123-4577', 'ACTIVE', NULL, '2022-12-30 08:45:21', NULL, '2022-12-30 08:45:21'),
(18, 1, 'Larry', 'Williams', '357 Oak Avenue', '555-123-4578', 'ACTIVE', NULL, '2022-12-30 08:45:21', NULL, '2022-12-30 08:45:21'),
(19, 1, 'Mary', 'Johnson', '159 Pine Street', '555-123-4579', 'ACTIVE', NULL, '2022-12-30 08:45:21', NULL, '2022-12-30 08:45:21'),
(20, 1, 'Nancy', 'Smith', '753 Cedar Street', '555-123-4580', 'ACTIVE', NULL, '2022-12-30 08:45:21', NULL, '2022-12-30 08:45:21'),
(21, 1, 'Owen', 'Brown', '946 Maple Avenue', '555-123-45', 'ACTIVE', NULL, '2022-12-30 08:45:21', NULL, '2022-12-30 08:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`id`, `user_id`, `user_name`, `email`, `password`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`, `user_role`) VALUES
(1, 1, 'admin', NULL, '12345678', 'ACTIVE', 1, '2022-12-21 15:23:25', NULL, '2022-12-27 05:59:42', 1),
(2, 2, 'middle', NULL, '12345678', 'ACTIVE', NULL, '2022-12-31 12:39:21', NULL, '2022-12-31 13:13:14', 2),
(3, 3, 'lower', NULL, '12345678', 'ACTIVE', NULL, '2022-12-31 13:14:42', NULL, '2022-12-31 13:14:42', 3),
(4, 21, 'user', 'chameensandeepa9@gmail.com', '12345678', 'ACTIVE', NULL, '2023-01-03 17:01:04', NULL, '2023-01-03 17:01:04', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_levels`
--

CREATE TABLE `user_levels` (
  `level_id` int(11) NOT NULL,
  `level_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_levels`
--

INSERT INTO `user_levels` (`level_id`, `level_name`) VALUES
(1, 'Top Level'),
(2, 'Middle Level'),
(3, 'Low Level');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_level` int(11) DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role`, `user_level`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Administrator', 1, 'ACTIVE', 1, '2022-12-21 15:22:57', NULL, '2022-12-21 15:22:57'),
(2, 'Employee', 2, 'ACTIVE', NULL, '2022-12-31 12:38:45', NULL, '2022-12-31 12:38:45'),
(3, 'Worker', 3, 'ACTIVE', NULL, '2022-12-31 13:14:14', NULL, '2022-12-31 13:14:14'),
(4, 'Purchasing Officer', 2, 'ACTIVE', NULL, '2023-01-03 16:58:16', NULL, '2023-01-03 16:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `user_tasks`
--

CREATE TABLE `user_tasks` (
  `id` bigint(20) NOT NULL,
  `kanban_card_id` int(11) NOT NULL,
  `assignee_id` int(11) NOT NULL,
  `component_process_id` bigint(20) DEFAULT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `task_status` varchar(45) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `estimated_time` int(11) DEFAULT NULL,
  `completed_time` int(11) DEFAULT NULL,
  `man_day_rate` int(10) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_tasks`
--

INSERT INTO `user_tasks` (`id`, `kanban_card_id`, `assignee_id`, `component_process_id`, `description`, `task_status`, `estimated_time`, `completed_time`, `man_day_rate`, `start_time`, `end_time`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 2, 3, 2, '20', 'IN_PROGRESS', NULL, NULL, NULL, '2022-12-27 16:43:54', '2023-01-04 16:43:56', 'ACTIVE', NULL, '2022-12-27 16:42:30', NULL, '2022-12-27 16:44:08'),
(3, 1, 2, 1, '10', 'IN_PROGRESS', NULL, NULL, NULL, '2022-12-28 16:41:56', '2023-01-04 16:41:59', 'ACTIVE', NULL, '2022-12-27 16:42:06', NULL, '2022-12-27 16:43:19'),
(4, 3, 4, 3, '13', 'COMPLETED', NULL, NULL, NULL, '2022-12-23 16:43:59', '2022-12-30 16:44:02', 'ACTIVE', NULL, '2022-12-27 16:43:50', NULL, '2022-12-27 16:44:12');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `id` int(11) NOT NULL,
  `workshop_unit_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`id`, `workshop_unit_id`, `name`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 1, 'Lock Barrel warehouse', 'ACTIVE', NULL, '2022-12-27 16:33:33', NULL, '2022-12-27 16:33:33'),
(4, 2, 'Key Setting Warehouse', 'ACTIVE', NULL, '2022-12-27 16:34:04', NULL, '2022-12-27 16:34:04'),
(5, 3, 'Lock Assembly', 'ACTIVE', NULL, '2022-12-27 16:34:27', NULL, '2022-12-27 16:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse_stock`
--

CREATE TABLE `warehouse_stock` (
  `id` bigint(20) NOT NULL,
  `warehouse_id` int(11) DEFAULT NULL,
  `material_item_id` int(11) DEFAULT NULL,
  `reorder_level` int(11) DEFAULT NULL,
  `max_stock_limit` int(11) DEFAULT NULL,
  `available_qty` int(11) DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `warehouse_stock`
--

INSERT INTO `warehouse_stock` (`id`, `warehouse_id`, `material_item_id`, `reorder_level`, `max_stock_limit`, `available_qty`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 1, 1, 5, 1000, 350, 'ACTIVE', NULL, '2022-12-27 16:36:07', NULL, '2023-01-03 09:44:34'),
(2, 4, 3, 5, 1000, 400, 'ACTIVE', NULL, '2022-12-27 16:36:27', NULL, '2023-01-03 09:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `workshops_units`
--

CREATE TABLE `workshops_units` (
  `id` int(11) NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `workshops_units`
--

INSERT INTO `workshops_units` (`id`, `department_id`, `name`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 2, 'Lock Barrel', 'ACTIVE', NULL, '2022-12-27 02:14:58', NULL, '2022-12-27 10:50:33'),
(2, 2, 'Key Setting', 'ACTIVE', NULL, '2022-12-27 02:15:07', NULL, '2022-12-27 10:50:34'),
(3, 2, 'Lock Assembly', 'ACTIVE', NULL, '2022-12-27 02:15:14', NULL, '2022-12-27 10:50:34'),
(4, 2, 'Lock Machining', 'ACTIVE', NULL, '2022-12-27 02:15:19', NULL, '2022-12-27 10:50:34'),
(5, 2, 'Moulding', 'ACTIVE', NULL, '2022-12-27 02:15:26', NULL, '2022-12-27 10:50:35'),
(6, 2, 'Recycling', 'ACTIVE', NULL, '2022-12-27 02:15:30', NULL, '2022-12-27 10:50:35'),
(7, 2, 'Electrical & Electronics', 'ACTIVE', NULL, '2022-12-27 02:15:36', NULL, '2022-12-27 10:50:35'),
(8, 4, 'Waste Disposal', 'ACTIVE', NULL, '2022-12-27 02:15:43', NULL, '2022-12-27 10:51:16'),
(9, 2, 'R&D workshop', 'ACTIVE', NULL, '2022-12-27 02:15:51', NULL, '2022-12-27 10:50:35'),
(10, 2, 'Fabrication', 'ACTIVE', NULL, '2022-12-27 02:15:52', NULL, '2022-12-27 10:50:36'),
(11, 2, 'Painting & Chemical Treatment', 'ACTIVE', NULL, '2022-12-27 02:15:58', NULL, '2022-12-27 10:50:36'),
(12, 4, 'Machine Repair', 'ACTIVE', NULL, '2022-12-27 02:16:08', NULL, '2022-12-27 10:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `workshops_unit_users`
--

CREATE TABLE `workshops_unit_users` (
  `id` bigint(20) NOT NULL,
  `workshops_unit_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `workshops_unit_users`
--

INSERT INTO `workshops_unit_users` (`id`, `workshops_unit_id`, `user_id`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 8, 1, 'ACTIVE', NULL, '2022-12-27 16:29:13', NULL, '2022-12-27 16:29:25'),
(2, 12, 1, 'ACTIVE', NULL, '2022-12-27 16:29:21', NULL, '2022-12-27 16:29:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_log`
--
ALTER TABLE `attendance_log`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `attendance_log_fk_1` (`user_id`) USING BTREE;

--
-- Indexes for table `components_processors`
--
ALTER TABLE `components_processors`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `components_processors_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `components_processors_updated_by_fk_idx` (`updated_by`) USING BTREE,
  ADD KEY `components_processors_component_id_fk_idx` (`component_id`) USING BTREE,
  ADD KEY `components_processors_process_id_fk_idx` (`process_id`) USING BTREE;

--
-- Indexes for table `default_suppliers`
--
ALTER TABLE `default_suppliers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `material_id` (`material_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `departments_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `departments_updated_by_fk_idx` (`updated_by`) USING BTREE;

--
-- Indexes for table `department_users`
--
ALTER TABLE `department_users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `department_users_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `department_users_updated_by_fk_idx` (`updated_by`) USING BTREE,
  ADD KEY `department_users_department_id_fk_idx` (`department_id`) USING BTREE,
  ADD KEY `department_users_user_id_fk_idx` (`user_id`) USING BTREE;

--
-- Indexes for table `department_workshop_details`
--
ALTER TABLE `department_workshop_details`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `workshops_units_department_id_fk_idx` (`department_id`) USING BTREE,
  ADD KEY `workshops_units_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `workshops_units_updated_by_fk_idx` (`updated_by`) USING BTREE,
  ADD KEY `department_workshop_details_ibfk_4` (`workshop_unit_id`) USING BTREE;

--
-- Indexes for table `employement_types`
--
ALTER TABLE `employement_types`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `factories`
--
ALTER TABLE `factories`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `factories_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `factories_updated_by_fk_idx` (`updated_by`) USING BTREE,
  ADD KEY `factories_plant_id_fk` (`plant_id`) USING BTREE;

--
-- Indexes for table `factory_department_details`
--
ALTER TABLE `factory_department_details`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `departments_factory_id_fk_idx` (`factory_id`) USING BTREE,
  ADD KEY `departments_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `departments_updated_by_fk_idx` (`updated_by`) USING BTREE,
  ADD KEY `factory_department_details_ibfk_4` (`department_id`) USING BTREE;

--
-- Indexes for table `inventory_items`
--
ALTER TABLE `inventory_items`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `warehouse_items_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `warehouse_items_updated_by_fk_idx` (`updated_by`) USING BTREE,
  ADD KEY `inventory_items_created_by_fk3` (`product_id`) USING BTREE,
  ADD KEY `inventory_items_created_by_fk4` (`warehouse_id`) USING BTREE;

--
-- Indexes for table `kanban_card`
--
ALTER TABLE `kanban_card`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `kanban_card_workshop_unit_id_fk_idx` (`workshop_unit_id`) USING BTREE,
  ADD KEY `kanban_card_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `kanban_card_updated_by_fk_idx` (`updated_by`) USING BTREE;

--
-- Indexes for table `material_item`
--
ALTER TABLE `material_item`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `material_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `material_updated_by_fk_idx` (`updated_by`) USING BTREE;

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `plants_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `plants_pudated_by_fk_idx` (`updated_by`) USING BTREE;

--
-- Indexes for table `process_materials`
--
ALTER TABLE `process_materials`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `tasks_materials_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `tasks_materials_updated_by_fk_idx` (`updated_by`) USING BTREE,
  ADD KEY `tasks_materials_material_id_fk_idx` (`material_id`) USING BTREE,
  ADD KEY `process_materials_component_process_id_fk_idx` (`component_process_id`) USING BTREE;

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `products_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `products_updated_by_fk_idx` (`updated_by`) USING BTREE;

--
-- Indexes for table `product_components`
--
ALTER TABLE `product_components`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `product_components_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `product_components_updated_by_fk_idx` (`updated_by`) USING BTREE,
  ADD KEY `product_components_product_id_fk_idx` (`product_id`) USING BTREE;

--
-- Indexes for table `product_sale_legder`
--
ALTER TABLE `product_sale_legder`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `product_sale_led_fk_1` (`product_id`) USING BTREE,
  ADD KEY `product_sale_led_fk_2` (`department_user_id`) USING BTREE;

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `sold_by` (`sold_by`);

--
-- Indexes for table `standard_process`
--
ALTER TABLE `standard_process`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `tasks_material_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `tasks_material_updated_by_fk_idx` (`updated_by`) USING BTREE;

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `stock_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `stock_updated_by_fk_idx` (`updated_by`) USING BTREE,
  ADD KEY `stock_material_item_id_fk_idx` (`material_item_id`) USING BTREE;

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_payments`
--
ALTER TABLE `supplier_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suppler_id` (`suppler_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `user_emp_type_fk` (`type`) USING BTREE;

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `user_accounts_user_id_fk_idx` (`user_id`) USING BTREE,
  ADD KEY `user_accounts_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `user_accounts_updated_by_fk_idx` (`updated_by`) USING BTREE,
  ADD KEY `user_accounts_user_role_fk` (`user_role`) USING BTREE;

--
-- Indexes for table `user_levels`
--
ALTER TABLE `user_levels`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_level` (`user_level`);

--
-- Indexes for table `user_tasks`
--
ALTER TABLE `user_tasks`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `tasks_kanban_card_id_fk_idx` (`kanban_card_id`) USING BTREE,
  ADD KEY `tasks_assignee_id_fk_idx` (`assignee_id`) USING BTREE,
  ADD KEY `tasks_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `tasks_updated_by_fk_idx` (`updated_by`) USING BTREE,
  ADD KEY `user_tasks_component_process_id_fk_idx` (`component_process_id`) USING BTREE;

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `warehouse_workshop_unit_id_fk_idx` (`workshop_unit_id`) USING BTREE,
  ADD KEY `warehouse_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `warehouse_updated_by_fk_idx` (`updated_by`) USING BTREE;

--
-- Indexes for table `warehouse_stock`
--
ALTER TABLE `warehouse_stock`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `warehouse_stock_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `warehouse_stock_updated_by_fk_idx` (`updated_by`) USING BTREE,
  ADD KEY `warehouse_stock_warehouse_id_fk_idx` (`warehouse_id`) USING BTREE,
  ADD KEY `warehouse_stock_material_item_id_fk_idx` (`material_item_id`) USING BTREE;

--
-- Indexes for table `workshops_units`
--
ALTER TABLE `workshops_units`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `workshops_units_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `workshops_units_updated_by_fk_idx` (`updated_by`) USING BTREE,
  ADD KEY `workshops_units_dep_fk` (`department_id`) USING BTREE;

--
-- Indexes for table `workshops_unit_users`
--
ALTER TABLE `workshops_unit_users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `warehouse_unit_users_created_by_fk_idx` (`created_by`) USING BTREE,
  ADD KEY `warehouse_unit_users_updated_by_fk_idx` (`updated_by`) USING BTREE,
  ADD KEY `warehouse_unit_users_warehouse_unit_id_fk_idx` (`workshops_unit_id`) USING BTREE,
  ADD KEY `warehouse_unit_users_user_id_fk_idx` (`user_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_log`
--
ALTER TABLE `attendance_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `components_processors`
--
ALTER TABLE `components_processors`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `department_users`
--
ALTER TABLE `department_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `department_workshop_details`
--
ALTER TABLE `department_workshop_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employement_types`
--
ALTER TABLE `employement_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `factories`
--
ALTER TABLE `factories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `factory_department_details`
--
ALTER TABLE `factory_department_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventory_items`
--
ALTER TABLE `inventory_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kanban_card`
--
ALTER TABLE `kanban_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `material_item`
--
ALTER TABLE `material_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `process_materials`
--
ALTER TABLE `process_materials`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_components`
--
ALTER TABLE `product_components`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_sale_legder`
--
ALTER TABLE `product_sale_legder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `standard_process`
--
ALTER TABLE `standard_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_tasks`
--
ALTER TABLE `user_tasks`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `warehouse_stock`
--
ALTER TABLE `warehouse_stock`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `workshops_units`
--
ALTER TABLE `workshops_units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `workshops_unit_users`
--
ALTER TABLE `workshops_unit_users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance_log`
--
ALTER TABLE `attendance_log`
  ADD CONSTRAINT `attendance_log_fk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `components_processors`
--
ALTER TABLE `components_processors`
  ADD CONSTRAINT `components_processors_component_id_fk` FOREIGN KEY (`component_id`) REFERENCES `product_components` (`id`),
  ADD CONSTRAINT `components_processors_created_by_fk` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `components_processors_process_id_fk` FOREIGN KEY (`process_id`) REFERENCES `standard_process` (`id`),
  ADD CONSTRAINT `components_processors_updated_by_fk` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `default_suppliers`
--
ALTER TABLE `default_suppliers`
  ADD CONSTRAINT `default_suppliers_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`),
  ADD CONSTRAINT `default_suppliers_ibfk_2` FOREIGN KEY (`material_id`) REFERENCES `material_item` (`id`);

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_created_by_fk` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `departments_updated_by_fk` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `department_users`
--
ALTER TABLE `department_users`
  ADD CONSTRAINT `department_users_created_by_fk` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `department_users_department_id_fk` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `department_users_updated_by_fk` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `department_users_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `department_workshop_details`
--
ALTER TABLE `department_workshop_details`
  ADD CONSTRAINT `department_workshop_details_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `department_workshop_details_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `department_workshop_details_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `department_workshop_details_ibfk_4` FOREIGN KEY (`workshop_unit_id`) REFERENCES `workshops_units` (`id`);

--
-- Constraints for table `factories`
--
ALTER TABLE `factories`
  ADD CONSTRAINT `factories_created_by_fk` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `factories_plant_id_fk` FOREIGN KEY (`plant_id`) REFERENCES `plants` (`id`),
  ADD CONSTRAINT `factories_updated_by_fk` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `factory_department_details`
--
ALTER TABLE `factory_department_details`
  ADD CONSTRAINT `factory_department_details_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `factory_department_details_ibfk_2` FOREIGN KEY (`factory_id`) REFERENCES `factories` (`id`),
  ADD CONSTRAINT `factory_department_details_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `factory_department_details_ibfk_4` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `inventory_items`
--
ALTER TABLE `inventory_items`
  ADD CONSTRAINT `inventory_items_created_by_fk` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `inventory_items_created_by_fk3` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `inventory_items_created_by_fk4` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouse` (`id`),
  ADD CONSTRAINT `inventory_items_updated_by_fk` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `kanban_card`
--
ALTER TABLE `kanban_card`
  ADD CONSTRAINT `kanban_card_created_by_fk` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `kanban_card_updated_by_fk` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `kanban_card_workshop_unit_id_fk` FOREIGN KEY (`workshop_unit_id`) REFERENCES `workshops_units` (`id`);

--
-- Constraints for table `material_item`
--
ALTER TABLE `material_item`
  ADD CONSTRAINT `material_item_created_by_fk` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `material_item_updated_by_fk` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `plants`
--
ALTER TABLE `plants`
  ADD CONSTRAINT `plants_created_by_fk` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `plants_pudated_by_fk` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `process_materials`
--
ALTER TABLE `process_materials`
  ADD CONSTRAINT `process_materials_component_process_id_fk` FOREIGN KEY (`component_process_id`) REFERENCES `components_processors` (`id`),
  ADD CONSTRAINT `process_materials_created_by_fk` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `process_materials_material_id_fk` FOREIGN KEY (`material_id`) REFERENCES `material_item` (`id`),
  ADD CONSTRAINT `process_materials_updated_by_fk` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_created_by_fk` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `products_updated_by_fk` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `product_components`
--
ALTER TABLE `product_components`
  ADD CONSTRAINT `product_components_created_by_fk` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `product_components_product_id_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_components_updated_by_fk` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `product_sale_legder`
--
ALTER TABLE `product_sale_legder`
  ADD CONSTRAINT `product_sale_led_fk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_sale_led_fk_2` FOREIGN KEY (`department_user_id`) REFERENCES `department_users` (`id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`sold_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `standard_process`
--
ALTER TABLE `standard_process`
  ADD CONSTRAINT `standard_process_created_by_fk` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `standard_process_updated_by_fk` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_created_by_fk` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `stock_material_item_id_fk` FOREIGN KEY (`material_item_id`) REFERENCES `material_item` (`id`),
  ADD CONSTRAINT `stock_updated_by_fk` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `supplier_payments`
--
ALTER TABLE `supplier_payments`
  ADD CONSTRAINT `supplier_payments_ibfk_1` FOREIGN KEY (`suppler_id`) REFERENCES `suppliers` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_emp_type_fk` FOREIGN KEY (`type`) REFERENCES `employement_types` (`id`);

--
-- Constraints for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD CONSTRAINT `user_accounts_created_by_fk` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_accounts_updated_by_fk` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_accounts_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_accounts_user_role_fk` FOREIGN KEY (`user_role`) REFERENCES `user_roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_ibfk_1` FOREIGN KEY (`user_level`) REFERENCES `user_levels` (`level_id`);

--
-- Constraints for table `user_tasks`
--
ALTER TABLE `user_tasks`
  ADD CONSTRAINT `user_tasks_assignee_id_fk` FOREIGN KEY (`assignee_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_tasks_component_process_id_fk` FOREIGN KEY (`component_process_id`) REFERENCES `components_processors` (`id`),
  ADD CONSTRAINT `user_tasks_created_by_fk` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_tasks_kanban_card_id_fk` FOREIGN KEY (`kanban_card_id`) REFERENCES `kanban_card` (`id`),
  ADD CONSTRAINT `user_tasks_updated_by_fk` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD CONSTRAINT `warehouse_created_by_fk` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `warehouse_updated_by_fk` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `warehouse_workshop_unit_id_fk` FOREIGN KEY (`workshop_unit_id`) REFERENCES `workshops_units` (`id`);

--
-- Constraints for table `warehouse_stock`
--
ALTER TABLE `warehouse_stock`
  ADD CONSTRAINT `warehouse_stock_created_by_fk` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `warehouse_stock_material_item_id_fk` FOREIGN KEY (`material_item_id`) REFERENCES `material_item` (`id`),
  ADD CONSTRAINT `warehouse_stock_updated_by_fk` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `warehouse_stock_warehouse_id_fk` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouse` (`id`);

--
-- Constraints for table `workshops_units`
--
ALTER TABLE `workshops_units`
  ADD CONSTRAINT `workshops_units_created_by_fk` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `workshops_units_dep_fk` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `workshops_units_updated_by_fk` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `workshops_unit_users`
--
ALTER TABLE `workshops_unit_users`
  ADD CONSTRAINT `warehouse_unit_users_created_by_fk` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `warehouse_unit_users_updated_by_fk` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `warehouse_unit_users_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `warehouse_unit_users_warehouse_unit_id_fk` FOREIGN KEY (`workshops_unit_id`) REFERENCES `workshops_units` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
