-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 11:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sm_jadwal_perbaikan_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil_perbaikan`
--

CREATE TABLE `hasil_perbaikan` (
  `ID_Hasil_Perbaikan` int(11) NOT NULL,
  `ID_Pelanggan` int(11) NOT NULL,
  `Deskripsi_Hasil` varchar(255) NOT NULL,
  `Biaya_ganti_alat` int(11) NOT NULL,
  `Biaya_perbaikan` int(11) NOT NULL,
  `total_biaya` int(11) NOT NULL,
  `keterangan` enum('Lunas','Belum Lunas') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil_perbaikan`
--

INSERT INTO `hasil_perbaikan` (`ID_Hasil_Perbaikan`, `ID_Pelanggan`, `Deskripsi_Hasil`, `Biaya_ganti_alat`, `Biaya_perbaikan`, `total_biaya`, `keterangan`) VALUES
(1, 7, 'penggantian layar, dan penambahan temperglass', 100000, 20000, 120000, 'Lunas'),
(2, 8, 'penggantian Freon kulkas', 100000, 50000, 150000, 'Lunas'),
(3, 9, 'sensor untuk menghidupkan ac rusak, sudah diganti', 50000, 30000, 80000, 'Lunas'),
(4, 5, 'penggantian bagian cartridge yang sudah rusak.', 50000, 20000, 70000, 'Lunas'),
(5, 4, 'input kabel lcd ke motherboard kurang pas ', 0, 5000, 5000, 'Lunas'),
(6, 11, 'pcb didalam hp kotor, ganti lcd', 250000, 50000, 300000, 'Lunas'),
(7, 12, 'penggantian mesin putar kipas dan kabel', 10000, 10000, 20000, 'Lunas'),
(8, 1, 'motherboard kotor, dibersihkan', 0, 20000, 20000, 'Belum Lunas'),
(9, 2, 'perbaikan pcb hp bagian koneksi', 20000, 20000, 40000, 'Belum Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `ID_Pelanggan` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Nomor_Telepon` varchar(20) NOT NULL,
  `barang` varchar(50) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `tanggal_perbaikan` date DEFAULT current_timestamp(),
  `kode` enum('true','false') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`ID_Pelanggan`, `Nama`, `Alamat`, `Nomor_Telepon`, `barang`, `keterangan`, `tanggal_perbaikan`, `kode`) VALUES
(1, 'Rini Susanti', 'Jl. Merak No. 1, Klaten', '081234567890', 'Laptop', 'Layar bergaris', '2023-01-04', 'true'),
(2, 'Budi Setiawan', 'Jl. Bali No. 2, Klaten', '089876543210', 'Smartphone', 'Tidak bisa mengakses internet', '2023-01-04', 'true'),
(3, 'Agus Prasetyo', 'Jl. Lombok No. 3, Klaten', '082345678901', 'Television', 'Tidak menampilkan gambar', '2023-01-04', 'false'),
(4, 'Siti Fatimah', 'Jl. Sumatra No. 4, Klaten', '084567890123', 'Monitor', 'Layar berkedip-kedip', '2023-01-04', 'true'),
(5, 'Mulyadi', 'Jl. Kalimantan No. 5, Klaten', '086789012345', 'Printer', 'Tidak bisa mencetak, tinta gak gerak', '2023-01-04', 'true'),
(7, 'enama', 'mranggen, jatinom', '085678453324', 'hp', 'layar pecah, tidak bisa di hidupkan.', '2023-01-06', 'true'),
(8, 'suparno', 'karanganom mudal, klaten utara', '085678432198', 'kulkas', 'kulkas tidak dingin', '2023-01-06', 'true'),
(9, 'manis', 'jl bunga mawar, klaten utara, klaten', '085758342123', 'AC sharp', 'ac tidak mau hidup', '2023-01-09', 'true'),
(11, 'bagus satria', 'krajan RT 4/ RW 9, gergunung, klaten utara', '089123123123', 'hp lenovo', 'mati total plus layar pecah', '2023-01-10', 'true'),
(12, 'aryadi', 'gergunung, klaten utara', '086757876902', 'kipas angin', 'tidak bisa berputar', '2023-01-10', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `nama`) VALUES
(1, 'admin'),
(2, 'pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID_User` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID_User`, `Nama`, `Email`, `Username`, `Password`, `role_id`, `is_active`) VALUES
(1, 'Slamet Riyadi', 'pegawai@gmail.com', 'pegawai', '$2y$10$VrSLr7y4ss1S0X8VHARh3.RVmNTFZ/2/rpqTUUbd7rm3mkyGcnR1O', 2, 1),
(2, 'M. Sholeh', 'admin@gmail.com', 'admin', '$2y$10$oVYEczLt2fWnENtj.ZxkEODUhNKFWFNAKtNQ07YnAL9bn2d7zRqDe', 1, 1),
(4, 'user', 'user@gmail.com', 'user', '$2y$10$XJFGAGTaZVYzQQrX5W5ZOuwZHoJKOjh3L8Yhge4RbubYPrwzy98ee', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil_perbaikan`
--
ALTER TABLE `hasil_perbaikan`
  ADD PRIMARY KEY (`ID_Hasil_Perbaikan`),
  ADD KEY `ID_Pelanggan` (`ID_Pelanggan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`ID_Pelanggan`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_User`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_perbaikan`
--
ALTER TABLE `hasil_perbaikan`
  MODIFY `ID_Hasil_Perbaikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `ID_Pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil_perbaikan`
--
ALTER TABLE `hasil_perbaikan`
  ADD CONSTRAINT `hasil_perbaikan_ibfk_1` FOREIGN KEY (`ID_Pelanggan`) REFERENCES `pelanggan` (`ID_Pelanggan`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
