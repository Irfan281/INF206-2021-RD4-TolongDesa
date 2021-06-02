-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 06:42 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tolongdesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id_masyarakat` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `domisili` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `peran` varchar(20) NOT NULL,
  `poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`id_masyarakat`, `nama`, `alamat`, `no_hp`, `domisili`, `email`, `password`, `peran`, `poin`) VALUES
(1, 'Sulthan Zaidan Fauzi', 'Jl. K. Saman No. 36', '+6282345678910', 'Desa Beurawe', 'zaidan@gmail.com', '$2y$10$JQwfcVJyJmJMoX1OGBjgCOi5Js7OFgdQt64ynP7U3DYUPi4vr27B6', 'Masyarakat', 1),
(2, 'Abu Steven', 'Jl. Chik Geumpa', '+6282323454567', 'Desa Beurawe', 'steven@gmail.com', '$2y$10$L3B5.9wgno8ps6840bjnvueFvNPFWyLDjfLAv.0yL5VmaIYgl8YDK', 'Petugas Desa', 0),
(3, 'Munadi Amir', 'Jl. Cut Makmum', '+6280987654321', 'Desa Beurawe', 'munadi@gmail.com', '$2y$10$LXFvN5IG2vOcTrNGybHAq.xsu8varLaTLv0nMVnMQr4vikGptSd8S', 'Kepala Desa', 11),
(4, 'Aminah', 'Jl. Jama\'ah No. 101', '+6281187654320', 'Desa Beurawe', 'aminah@gmail.com', '$2y$10$LLfgR..l83yTaWtcI4pDtOJo/AdvgW.DY6pj1e58fBXFnYn7mS6.O', 'Masyarakat', 10),
(5, 'Maskanah', 'Jl. Jeumpa No.41', '+6281181654380', 'Desa Beurawe', 'maskanah@gmail.com', '$2y$10$cBS.6gVE05glHomPt7QNB.Zc5.S8n8caVJZrdbtkFapFXaCIs3Uai', 'Petugas Desa', 16);

-- --------------------------------------------------------

--
-- Table structure for table `menolong`
--

CREATE TABLE `menolong` (
  `id_menolong` int(11) NOT NULL,
  `id_masyarakat` int(11) NOT NULL,
  `id_mintatolong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menolong`
--

INSERT INTO `menolong` (`id_menolong`, `id_masyarakat`, `id_mintatolong`) VALUES
(1, 3, 5),
(6, 4, 7),
(8, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `mintatolong`
--

CREATE TABLE `mintatolong` (
  `id_mintatolong` int(11) NOT NULL,
  `id_masyarakat` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'belum'
) ;

--
-- Dumping data for table `mintatolong`
--

INSERT INTO `mintatolong` (`id_mintatolong`, `id_masyarakat`, `judul`, `deskripsi`, `alamat`, `tags`, `status`) VALUES
(1, 1, 'Minta tolong mengangkat galon', 'Ada beberapa galon didepan rumah, namun saya tidak bisa mengangkatnya karena tangan saya sedang sakit', 'Jl. K. Saman No. 36', 'Angkat, Galon, ', 'belum'),
(2, 2, 'Perbaiki printer rusak', 'Ada printer yang rusak di kantor, namun saya tidak bisa memperbaikinya. Siapa yang bisa memperbaikinya, tolong datang ke kantor segera ya.', 'Jl. Keuchik Amin', 'Perbaiki, Printer, Rusak', 'belum'),
(3, 3, 'Bawa papan tulis dan spidol', 'Berhubung ada kegiatan rapat dengan masyarakat pada hari minggu, maka diperlukan papan tulis dan spidol. Bagi yang memiliki papan tulis dan spidol, tolong bawakan untuk rapat pada hari minggu nanti ya.', 'Jl. Cot Banin', 'Papan Tulis, Spidol, ', 'belum'),
(5, 1, 'Minta tolong mengambilkan mangga', 'Saya memiliki pohon mangga yang sudah berbuah, namun tidak bisa memetiknya', 'Jl. K. Saman No. 36', 'Mangga, , ', 'selesai'),
(6, 2, 'Perbaiki atap rumah', 'Kemarin angin kencang sekali, atap rumah saya jadi rusak. Saya butuh pertolongan.', 'Jl. Jerat Raya No. 73', 'Perbaiki, Atap, Rusak', 'belum'),
(7, 2, 'Pinjam Tangga', 'Tangga saya sudah tidak bagus lagi. Saya butuh tangga untuk mengecat tembok.', 'Jl. Jerat Raya No. 73', 'Pinjam , Tangga, ', 'tidak'),
(8, 2, 'Bantu angkat lemari', 'Saya ingin memindahkan lemari ke ruangan lain. Saya butuh sesorang untuk membantu mengangkatnya.', 'Jl. Jerat Raya No. 73', 'Lemari, , ', 'selesai'),
(9, 4, 'Ganti lampu redup', 'Lampu dirumah saya sudah tidak bagus lagi. Tolong bantu cabut dan ganti.', 'Jl. Seulanga No.55', 'Lampu, Redup, ', 'belum'),
(10, 5, 'Hilangkan sarang lebah di pohon.', 'Ada sarang lebah yang besar di pohon jambu di belakang rumah saya. Siapapun tolong hilangkan.', 'Jl. Jeumpa No. 41', 'Sarang Lebah, Pohon, ', 'belum'),
(11, 5, 'Perbaiki ban sepeda.', 'Ban sepeda saya sudah tidak bagus lagi. Ada yang bisa memperbaikinya?', 'Jl. Seulanga No.55', 'Ban Sepeda, , ', 'belum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id_masyarakat`);

--
-- Indexes for table `menolong`
--
ALTER TABLE `menolong`
  ADD PRIMARY KEY (`id_menolong`),
  ADD KEY `id_masyarakat` (`id_masyarakat`),
  ADD KEY `id_mintatolong` (`id_mintatolong`);

--
-- Indexes for table `mintatolong`
--
ALTER TABLE `mintatolong`
  ADD PRIMARY KEY (`id_mintatolong`),
  ADD KEY `id_masyarakat` (`id_masyarakat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menolong`
--
ALTER TABLE `menolong`
  MODIFY `id_menolong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mintatolong`
--
ALTER TABLE `mintatolong`
  MODIFY `id_mintatolong` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menolong`
--
ALTER TABLE `menolong`
  ADD CONSTRAINT `menolong_ibfk_1` FOREIGN KEY (`id_masyarakat`) REFERENCES `masyarakat` (`id_masyarakat`),
  ADD CONSTRAINT `menolong_ibfk_2` FOREIGN KEY (`id_mintatolong`) REFERENCES `mintatolong` (`id_mintatolong`);

--
-- Constraints for table `mintatolong`
--
ALTER TABLE `mintatolong`
  ADD CONSTRAINT `mintatolong_ibfk_1` FOREIGN KEY (`id_masyarakat`) REFERENCES `masyarakat` (`id_masyarakat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
