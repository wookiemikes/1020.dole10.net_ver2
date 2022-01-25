-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2020 at 06:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d0l310_1020db`
--

-- --------------------------------------------------------

--
-- Table structure for table `office_acc_tbl`
--

CREATE TABLE `office_acc_tbl` (
  `oat_id` int(11) NOT NULL,
  `oat_uname` varchar(150) NOT NULL,
  `oat_pwd` varchar(150) NOT NULL,
  `oat_office_desc` varchar(250) NOT NULL,
  `oat_acc_role` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `office_acc_tbl`
--

INSERT INTO `office_acc_tbl` (`oat_id`, `oat_uname`, `oat_pwd`, `oat_office_desc`, `oat_acc_role`) VALUES
(1, '1020cdopfo', '1020cd0f0', 'CAGAYAN DE ORO PFO', 'PFO'),
(2, '1020misorpfo', '1020m150rpf0', 'MISAMIS ORIENTAL PFO', 'PFO'),
(3, 'superadmin', 't3chn;c4l', 'DOLE REGION 10', 'MAIN'),
(4, '1020misoccpfo', '1020m150ccpf0', 'MISAMIS OCCIDENTAL PFO', 'PFO'),
(5, '1020bukpfo', '1020bukpf0', 'BUKIDNON PFO', 'PFO'),
(6, '1020ldnpfo', '1020ldnpf0', 'LANAO DEL NORTE PFO', 'PFO'),
(7, '1020camipfo', '1020c4m1pf0', 'CAMIGUIN PFO', 'PFO');

-- --------------------------------------------------------

--
-- Table structure for table `user_app_details`
--

CREATE TABLE `user_app_details` (
  `uad_id` int(11) NOT NULL,
  `ud_tin` varchar(100) NOT NULL,
  `uad_inspector` varchar(50) NOT NULL,
  `uad_date_inspection` varchar(50) NOT NULL,
  `uad_remarks` text NOT NULL,
  `uad_req_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_app_details`
--

INSERT INTO `user_app_details` (`uad_id`, `ud_tin`, `uad_inspector`, `uad_date_inspection`, `uad_remarks`, `uad_req_link`) VALUES
(1, '001-443-993', 'NOT AVAILABLE', 'NOT AVAILABLE', 'QQWERTYUTREWQSDC', 'https://drive.google.com/drive/folders/1OT1OU-mBarLMVFCB-Y7aXqpTjOPvccAr?usp=sharing'),
(2, '002-005-665', 'NOT AVAILABLE', 'NOT AVAILABLE', 'NOT AVAILABLE', 'https://drive.google.com/drive/folders/1iSs9ESvsVrG-6hqknaQth8H1pVgy7ZiE?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `user_details_tbl`
--

CREATE TABLE `user_details_tbl` (
  `ud_id` int(11) NOT NULL,
  `ud_est_name` varchar(255) NOT NULL,
  `ud_st` varchar(255) NOT NULL,
  `ud_ct` varchar(100) NOT NULL,
  `ud_prov` varchar(100) NOT NULL,
  `ud_tin` varchar(50) NOT NULL,
  `ud_contact` varchar(20) NOT NULL,
  `ud_fax` varchar(20) NOT NULL,
  `ud_email` varchar(50) NOT NULL,
  `ud_manager` varchar(150) NOT NULL,
  `ua_status` varchar(50) NOT NULL,
  `uad_date_filed` varchar(50) NOT NULL,
  `uad_date_approved` varchar(50) NOT NULL,
  `uad_ein` varchar(150) NOT NULL,
  `uad_focal` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details_tbl`
--

INSERT INTO `user_details_tbl` (`ud_id`, `ud_est_name`, `ud_st`, `ud_ct`, `ud_prov`, `ud_tin`, `ud_contact`, `ud_fax`, `ud_email`, `ud_manager`, `ua_status`, `uad_date_filed`, `uad_date_approved`, `uad_ein`, `uad_focal`) VALUES
(1, 'SAMPLE COMPANY', 'TRINIDAD BLDG, YACAPIN STREET, BARANGAY 4', 'Cagayan De Oro', 'Cagayan de Oro City', '001-443-993', '09156821839', '', 'admin.sample@gmail.com', 'NORBERT TORRES', 'APPROVED', '2020-10-01 11:47:54am', '2020-10-01 12:22:46pm', '1020-0014', 'CZAR ZAMBRANO'),
(2, 'SAMPLE COMPANY 2', 'TRINIDAD BLDG, YACAPIN STREET, BARANGAY 4', 'Balingasag', 'Misamis Oriental', '002-005-665', '09156821839', '', 'admin.sample2@gmail.com', 'NORBERT TORRES', 'PENDING', '2020-10-01 12:03:16pm', 'NOT AVAILABLE', 'NOT AVAILABLE', 'NOT AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `user_emp_details_tbl`
--

CREATE TABLE `user_emp_details_tbl` (
  `ued_id` int(11) NOT NULL,
  `ud_tin` varchar(100) NOT NULL,
  `ued_nob` varchar(255) NOT NULL,
  `ued_product` varchar(255) NOT NULL,
  `ued_total_male` varchar(150) NOT NULL,
  `ued_total_fmale` varchar(150) NOT NULL,
  `ued_total` varchar(150) NOT NULL,
  `ued_m_filipinos` varchar(150) NOT NULL,
  `ued_f_filipinos` varchar(150) NOT NULL,
  `ued_t_filipinos` varchar(150) NOT NULL,
  `ued_m_resalien` varchar(150) NOT NULL,
  `ued_f_resalien` varchar(150) NOT NULL,
  `ued_t_resalien` varchar(150) NOT NULL,
  `ued_m_nralien` varchar(150) NOT NULL,
  `ued_f_nralien` varchar(150) NOT NULL,
  `ued_t_nralien` varchar(150) NOT NULL,
  `ued_m_minor_a` varchar(150) NOT NULL,
  `ued_f_minor_a` varchar(150) NOT NULL,
  `ued_t_minor_a` varchar(150) NOT NULL,
  `ued_m_minor_b` varchar(150) NOT NULL,
  `ued_f_minor_b` varchar(150) NOT NULL,
  `ued_t_minor_b` varchar(150) NOT NULL,
  `ued_m_18_30` varchar(150) NOT NULL,
  `ued_f_18_30` varchar(150) NOT NULL,
  `ued_t_18_30` varchar(150) NOT NULL,
  `ued_m_abv_30` varchar(150) NOT NULL,
  `ued_f_abv_30` varchar(150) NOT NULL,
  `ued_t_abv_30` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_emp_details_tbl`
--

INSERT INTO `user_emp_details_tbl` (`ued_id`, `ud_tin`, `ued_nob`, `ued_product`, `ued_total_male`, `ued_total_fmale`, `ued_total`, `ued_m_filipinos`, `ued_f_filipinos`, `ued_t_filipinos`, `ued_m_resalien`, `ued_f_resalien`, `ued_t_resalien`, `ued_m_nralien`, `ued_f_nralien`, `ued_t_nralien`, `ued_m_minor_a`, `ued_f_minor_a`, `ued_t_minor_a`, `ued_m_minor_b`, `ued_f_minor_b`, `ued_t_minor_b`, `ued_m_18_30`, `ued_f_18_30`, `ued_t_18_30`, `ued_m_abv_30`, `ued_f_abv_30`, `ued_t_abv_30`) VALUES
(1, '001-443-993', 'Manufacturing', 'textile', '20', '20', '20', '20', '20', '20', '', '', '', '', '', '', '', '', '', '', '', '', '20', '20', '20', '', '', ''),
(2, '002-005-665', 'Human Health and Social Work', 'Social Work', '2', '2', '4', '2', '2', '4', '', '', '', '', '', '', '', '', '', '', '', '', '2', '2', '4', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_est_details_tbl`
--

CREATE TABLE `user_est_details_tbl` (
  `uet_id` int(11) NOT NULL,
  `ud_tin` varchar(100) NOT NULL,
  `uet_name_labor` varchar(150) NOT NULL,
  `uet_add_labor` varchar(255) NOT NULL,
  `uet_blr` varchar(150) NOT NULL,
  `uet_machine_eq` varchar(255) NOT NULL,
  `uet_material_eq` varchar(255) NOT NULL,
  `uet_chemical` varchar(255) NOT NULL,
  `uet_branch` varchar(10) NOT NULL,
  `uet_capital` varchar(255) NOT NULL,
  `uet_assets` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_est_details_tbl`
--

INSERT INTO `user_est_details_tbl` (`uet_id`, `ud_tin`, `uet_name_labor`, `uet_add_labor`, `uet_blr`, `uet_machine_eq`, `uet_material_eq`, `uet_chemical`, `uet_branch`, `uet_capital`, `uet_assets`) VALUES
(1, '001-443-993', '', '', '', 'none', 'Power Trucks,  Hand Trucks, Conveyors', '', '', '150000', 'Less thank P 1,500,001'),
(2, '002-005-665', '', '', '', 'circular Saw, Diesel Engine, Gasoline', 'Cranes, Conveyors', '', '', '500000', 'Less thank P 1,500,001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `office_acc_tbl`
--
ALTER TABLE `office_acc_tbl`
  ADD PRIMARY KEY (`oat_id`);

--
-- Indexes for table `user_app_details`
--
ALTER TABLE `user_app_details`
  ADD PRIMARY KEY (`uad_id`);

--
-- Indexes for table `user_details_tbl`
--
ALTER TABLE `user_details_tbl`
  ADD PRIMARY KEY (`ud_id`);

--
-- Indexes for table `user_emp_details_tbl`
--
ALTER TABLE `user_emp_details_tbl`
  ADD PRIMARY KEY (`ued_id`);

--
-- Indexes for table `user_est_details_tbl`
--
ALTER TABLE `user_est_details_tbl`
  ADD PRIMARY KEY (`uet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `office_acc_tbl`
--
ALTER TABLE `office_acc_tbl`
  MODIFY `oat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_app_details`
--
ALTER TABLE `user_app_details`
  MODIFY `uad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_details_tbl`
--
ALTER TABLE `user_details_tbl`
  MODIFY `ud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_emp_details_tbl`
--
ALTER TABLE `user_emp_details_tbl`
  MODIFY `ued_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_est_details_tbl`
--
ALTER TABLE `user_est_details_tbl`
  MODIFY `uet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
