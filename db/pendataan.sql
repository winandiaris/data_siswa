-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2016 at 10:23 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `nama` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `kelamin` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `user` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `kelamin`, `user`, `password`) VALUES
(1, 'Administrator', 'beny.neutron@gmail.com', 'Laki-lak', 'admin', 'c3334b8160bd0dd4533357a2d10c7d5e'),
(4, 'gffgg', '', 'l', 'jk', 'kamidi'),
(2, 'mukadi', 'hksgdk', 'l', 'joko', 'kamidi');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(5) NOT NULL,
  `nis` int(5) DEFAULT NULL,
  `kelas` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_siswa` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kelamin` varchar(70) COLLATE latin1_general_ci NOT NULL,
  `nisn` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `tmp_lahir` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `anak_ke` varchar(2) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `rt` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `rw` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `dusun` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `desa` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `kec` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `kab` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `kodepos` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `telp` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `jurusan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `pada_tgl` date NOT NULL,
  `semester` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `sklh_asal` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `almt_sek` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `thn_ijzh` int(4) NOT NULL,
  `nmor_ijzh` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `thn_skhun` int(4) NOT NULL,
  `nmor_skhun` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `ayah` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `ibu` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `alm_ortu` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `telp_ortu` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `krj_ayah` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `krj_ibu` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nama_wali` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `alm_wali` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `telp_wali` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `kerja_wali` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `ket` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nik` decimal(20,0) NOT NULL,
  `tinggal_di` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `alat_trans` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `thn_lahir_ayah` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `pend_ayah` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `gaji_ayah` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `thn_lhir_ibu` int(4) NOT NULL,
  `pend-ibu` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `gaji_ibu` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tb` int(3) NOT NULL,
  `bb` int(3) NOT NULL,
  `jarak_sek` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `wktu_tmpuh` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `jmlh_sdr` int(2) NOT NULL,
  `jenis_prest` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tngkt_prest` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `nama_prest` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tahun_prest` int(4) NOT NULL,
  `penyelenggara` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `jenis_bea` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `ket_bea` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `thn_mulai` int(4) NOT NULL,
  `thn_slsai` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nis`, `kelas`, `nama_siswa`, `kelamin`, `nisn`, `tmp_lahir`, `tgl_lahir`, `agama`, `anak_ke`, `status`, `alamat`, `rt`, `rw`, `dusun`, `desa`, `kec`, `kab`, `kodepos`, `email`, `telp`, `jurusan`, `pada_tgl`, `semester`, `sklh_asal`, `almt_sek`, `thn_ijzh`, `nmor_ijzh`, `thn_skhun`, `nmor_skhun`, `ayah`, `ibu`, `alm_ortu`, `telp_ortu`, `krj_ayah`, `krj_ibu`, `nama_wali`, `alm_wali`, `telp_wali`, `kerja_wali`, `gambar`, `ket`, `nik`, `tinggal_di`, `alat_trans`, `thn_lahir_ayah`, `pend_ayah`, `gaji_ayah`, `thn_lhir_ibu`, `pend-ibu`, `gaji_ibu`, `tb`, `bb`, `jarak_sek`, `wktu_tmpuh`, `jmlh_sdr`, `jenis_prest`, `tngkt_prest`, `nama_prest`, `tahun_prest`, `penyelenggara`, `jenis_bea`, `ket_bea`, `thn_mulai`, `thn_slsai`) VALUES
(97, 3433, 'X IPA B', 'MUKADI', 'Laki Laki', '41464', 'Surabaya', '2000-08-10', 'Islam', '1', 'Anak Angkat', 'Jalan Jalan', '01', '02', 'Sdfd', 'Ggjh', 'Hjkhjm', 'Ghjhjhjh', '54523565', 'Sdfgfg@dfhfg.com', '4564654323', 'IPA', '0000-00-00', '0', 'SMP ISLAM INDONESIA', 'Jalan Jalan', 7895, '1548548AS', 1958, 'Dfg1265455', '', '', '', '', '', '', '', '', '', '', './admin/gambar/pas foto biru (Custom).jpg', 'Asdas', '154655655245', 'Bersama Orang Tua', 'Jalan Kaki', '0', '', '', 0, '', '', 170, 65, '&gt; 3-5 Km', '5', 2, '', '', '', 0, '', '', '', 0, 0),
(98, 1234, '--- Pilih Kelas ---', 'Sdg', '--- Pilih Jenis Kelamin ---', '', '', '0000-00-00', 'Islam', '0', '', 'Alamat', '', '', '', '', '', '', '', '', '', '--- Pilih Jurusan --', '0000-00-00', '0', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', './gambar/2.png', '', '0', '', '', '0', '', '', 0, '', '', 0, 0, '0', '', 0, '', '', '', 0, '', '', '', 0, 0),
(99, 1254, 'X IPA A', 'TARMUJI OKE', 'Laki Laki', '2458055468', 'Ujung Pandang', '1986-08-08', 'Islam', '2', 'Anak Kandung', 'Alamatnya Sedang Direncanakan', '', '', '', '', '', '', '', '', '245896256325', 'jurusan', '2016-08-01', '1', 'sklh_asal', 'almt_asal', 1996, 'nmor_ijzh', 1996, 'nmor_skhun', 'ayah', '', '', '44165', '', '', '', '', '', '', '', '', '0', '', '', '0', '', '', 0, '', '', 175, 62, '&lt;= 1 Km', '5', 2, '', '', '', 0, '', '', '', 0, 1996);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
