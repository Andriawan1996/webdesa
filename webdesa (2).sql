-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 10:03 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan_pekerjaan`
--

CREATE TABLE `laporan_pekerjaan` (
  `uraian_pekerjaan` varchar(255) NOT NULL,
  `jumlah_pekerjaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_pekerjaan`
--

INSERT INTO `laporan_pekerjaan` (`uraian_pekerjaan`, `jumlah_pekerjaan`) VALUES
('Petani', 16);

-- --------------------------------------------------------

--
-- Table structure for table `laporan_pendidikan`
--

CREATE TABLE `laporan_pendidikan` (
  `uraian_pendidikan` varchar(255) NOT NULL,
  `jumlah_pendidikan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_pendidikan`
--

INSERT INTO `laporan_pendidikan` (`uraian_pendidikan`, `jumlah_pendidikan`) VALUES
('S1', 12);

-- --------------------------------------------------------

--
-- Table structure for table `laporan_penduduk`
--

CREATE TABLE `laporan_penduduk` (
  `uraian_penduduk` varchar(255) NOT NULL,
  `jumlah_penduduk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_penduduk`
--

INSERT INTO `laporan_penduduk` (`uraian_penduduk`, `jumlah_penduduk`) VALUES
('avss', 23),
('Janda', 12),
('Kepala Keluarga ', 12),
('Kepala Keluarga (Laki-laki)', 32);

-- --------------------------------------------------------

--
-- Table structure for table `master_pekerjaan`
--

CREATE TABLE `master_pekerjaan` (
  `nama_pekerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_pekerjaan`
--

INSERT INTO `master_pekerjaan` (`nama_pekerjaan`) VALUES
('Dokter Gigi'),
('Pelajar/Mahasiswa'),
('Sopir'),
('Wiraswasta');

-- --------------------------------------------------------

--
-- Table structure for table `master_shdk`
--

CREATE TABLE `master_shdk` (
  `id_shdrt` int(2) NOT NULL,
  `nama_shdk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_shdk`
--

INSERT INTO `master_shdk` (`id_shdrt`, `nama_shdk`) VALUES
(1, 'Kepala Keluarga'),
(3, 'Istri'),
(4, 'Anak'),
(5, 'Menantu'),
(6, 'Cucu'),
(7, 'Orang Tua'),
(8, 'Mertua'),
(9, 'Famili Lain'),
(10, 'Pembantu'),
(11, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nama_pegawai` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pangkat` varchar(255) NOT NULL,
  `tmt_pangkat` date NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `tmt_jabatan` date NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `tahun_lulus` int(4) NOT NULL,
  `tingkat_ijazah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `no_kk` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `shdk` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `tmpt_lhr` varchar(255) NOT NULL,
  `tgl_lhr` varchar(255) NOT NULL,
  `gd` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `shdrt` int(2) NOT NULL,
  `pddk_akhir` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nama_kep_kel` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama_prov` varchar(255) NOT NULL,
  `kab_kota` varchar(255) NOT NULL,
  `nama_kab` varchar(255) NOT NULL,
  `nama_kec` varchar(255) NOT NULL,
  `no_kel` varchar(255) NOT NULL,
  `nama_kel` varchar(255) NOT NULL,
  `rt` varchar(255) NOT NULL,
  `rw` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`no_kk`, `nik`, `nama`, `shdk`, `jk`, `tmpt_lhr`, `tgl_lhr`, `gd`, `agama`, `status`, `shdrt`, `pddk_akhir`, `pekerjaan`, `nama_ibu`, `nama_ayah`, `nama_kep_kel`, `alamat`, `nama_prov`, `kab_kota`, `nama_kab`, `nama_kec`, `no_kel`, `nama_kel`, `rt`, `rw`, `ket`) VALUES
('7316020705070099', '7316020102030001', 'M ARFA MA ARIF', 'Anak', 'L', 'KALOSI', '', '-', 'Islam', 'Belum Kawin', 4, 'Tidak Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'HJ DINAR KASIM', 'NASRUM DANNARI', 'NASRUM DANNARI', 'DUSUN BELAJEN UTARA,RT :,RW :,Kodepos :91712,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070103', '7316020103780001', 'IRWAN ABBAS', 'Kepala Keluarga', 'L', 'BELAJEN', '', 'AB', 'Islam', 'Kawin', 1, 'SLTA/Sederajat', 'Wiraswasta', 'HJ MINCE', 'H ABBAS', 'IRWAN ABBAS', 'BELAJEN,RT :,RW :,Kodepos :91754,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070099', '7316020703710001', 'NASRUM DANNARI', 'Kepala Keluarga', 'L', 'BUNU', '', '-', 'Islam', 'Kawin', 1, 'Akademi/Diploma III/S. Muda', 'Pedagang', 'HJ CINANG', 'DANNARI', 'NASRUM DANNARI', 'DUSUN BELAJEN UTARA,RT :,RW :,Kodepos :91712,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070099', '7316020706770001', 'IMRAN S KOM', 'Famili Lain', 'L', 'BUNU', '', '-', 'Islam', 'Belum Kawin', 9, 'Diploma IV/Strata I', 'Wiraswasta', 'HJ NAHARIA', 'ITEN SYAM', 'NASRUM DANNARI', 'DUSUN BELAJEN UTARA,RT :,RW :,Kodepos :91712,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316021608021662', '7316021001080002', 'BAKRI', 'Anak', 'L', 'ENREKANG', '', '-', 'Islam', 'Belum Kawin', 4, 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '05A', 'MAJA', 'MAJA', 'BELAJEN,RT :,RW :,Kodepos :0,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070099', '7316022802070001', 'MUH ILHAM NUR DANNARI', 'Anak', 'L', 'BELAJEN', '', '-', 'Islam', 'Belum Kawin', 4, 'Tidak Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'HJ DINAR KASIM', 'NASRUM DANNARI', 'NASRUM DANNARI', 'DUSUN BELAJEN UTARA,RT :,RW :,Kodepos :91712,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070106', '7316023112700030', 'FACHRUDDIN MAJA', 'Kepala Keluarga', 'L', 'KALOSI', '', '-', 'Islam', 'Kawin', 1, 'Diploma IV/Strata I', 'Wiraswasta', 'HJ NURSIA', 'H MATA SILLING', 'FACHRUDDIN MAJA', 'JL. PRAMUKA BELAJEN UTARA,RT :,RW :,Kodepos :91712,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070100', '7316023112830021', 'AKBAR', 'Kepala Keluarga', 'L', 'MAKALE', '', '-', 'Islam', 'Kawin', 1, 'Tamat SD/Sederajat', 'Wiraswasta', 'MIRA', 'HASAN', 'AKBAR', 'DUSUN BELAJEN UTARA,RT :,RW :,Kodepos :91712,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070103', '7316024206040001', 'CANTIKA MEIDY', 'Anak', 'P', 'SUDU', '', '-', 'Islam', 'Belum Kawin', 4, 'Tidak Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'NASJA NASIR', 'IRWAN ABBAS', 'IRWAN ABBAS', 'BELAJEN,RT :,RW :,Kodepos :91754,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070106', '7316024610710001', 'NURHAYATI KENDEN', 'Istri', 'P', 'BELAJEN', '', '-', 'Islam', 'Kawin', 3, 'Diploma IV/Strata I', 'Wiraswasta', 'KUDI', 'KENDEN', 'FACHRUDDIN MAJA', 'JL. PRAMUKA BELAJEN UTARA,RT :,RW :,Kodepos :91712,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070103', '7316025108050001', 'REVANGGI', 'Anak', 'P', 'MAKALE', '', '-', 'Islam', 'Belum Kawin', 4, 'Tidak Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'NASJA NASIR', 'IRWAN ABBAS', 'IRWAN ABBAS', 'BELAJEN,RT :,RW :,Kodepos :91754,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070103', '7316025401010001', 'IRNAS AURELIA', 'Anak', 'P', 'PINRANG', '', '-', 'Islam', 'Belum Kawin', 4, 'SLTP/Sederajat', 'Pelajar/Mahasiswa', 'NASJA NASIR', 'IRWAN ABBAS', 'IRWAN ABBAS', 'BELAJEN,RT :,RW :,Kodepos :91754,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070106', '7316025407060001', 'AZKIYAH MUTHAHHARAH', 'Anak', 'P', 'ENREKANG', '', '-', 'Islam', 'Belum Kawin', 4, 'Tidak Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'HJ NURHAYATI KENDEN', 'FACHRUDDIN MAJA', 'FACHRUDDIN MAJA', 'JL. PRAMUKA BELAJEN UTARA,RT :,RW :,Kodepos :91712,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070100', '7316025812820001', 'SADDIA', 'Istri', 'P', 'PATEKKONG', '', '-', 'Islam', 'Kawin', 3, 'Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'DEKA', 'GAMA', 'AKBAR', 'DUSUN BELAJEN UTARA,RT :,RW :,Kodepos :91712,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070100', '7316026304020001', 'NUR FADILLAH AKBAR', 'Anak', 'P', 'SUDU', '', '-', 'Islam', 'Belum Kawin', 4, 'Tidak Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'SADDIA', 'AKBAR', 'AKBAR', 'DUSUN BELAJEN UTARA,RT :,RW :,Kodepos :91712,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316021608021662', '7316026404060001', 'SIFA', 'Kepala Keluarga', 'P', 'ENREKANG', '', '-', 'Islam', 'Belum Kawin', 1, 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'DAWATI', 'MAJA', 'MAJA', 'BELAJEN,RT :,RW :,Kodepos :0,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070099', '7316026406750001', 'HJ DINAR KASIM', 'Istri', 'P', 'BELAJEN', '', '-', 'Islam', 'Kawin', 3, 'Akademi/Diploma III/S. Muda', 'Pedagang', 'HJ 03IAMA', 'M KASIM', 'NASRUM DANNARI', 'DUSUN BELAJEN UTARA,RT :,RW :,Kodepos :91712,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316042704070041', '7316041708790003', 'AGUSTAN MOHA', 'Kepala Keluarga', 'L', 'TAMPO', '', 'O', 'Islam', 'Kawin', 1, 'SLTP/Sederajat', 'Petani/Pekebun', 'MOHA', 'ANDARA', 'AGUSTAN MOHA', 'BELAJEN,RT :,RW :,Kodepos :91754,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316050103160001', '7316045112920005', 'HUSNUL KHATIMAH', 'Istri', 'P', 'SOSSOK', '', '-', 'Islam', 'Kawin', 3, 'SLTA/Sederajat', 'Mengurus Rumah Tangga', 'HUDIA', 'SJAHADAT D BA', 'RISKA ARISANDI', 'JL JAMBU BELAJEN,RT :,RW :,Kodepos :91754,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316050103190005', '7316050107740179', 'WANGKA', 'Kepala Keluarga', 'L', 'BELAJEN', '', '-', 'Islam', 'Kawin', 1, 'Tamat SD/Sederajat', 'Wiraswasta', 'TIAMA', 'LASO', 'WANGKA', 'BELAJEN BARAT,RT :,RW :,Kodepos :,Telp :', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316050103190005', '7316050404030004', 'MUH HAIRUL NASRUDDIN', 'Anak', 'L', 'BELAJEN', '', '-', 'Islam', 'Belum Kawin', 4, 'Tidak Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'DARAWATI', 'NASRUDDIN', 'WANGKA', 'BELAJEN BARAT,RT :,RW :,Kodepos :,Telp :', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070103', '7316050505120002', 'MUHAMMAD RAFIQ', 'Anak', 'L', 'ENREKANG', '', '-', 'Islam', 'Belum Kawin', 4, 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'NASJA NASIR', 'IRWAN ABBAS', 'IRWAN ABBAS', 'BELAJEN,RT :,RW :,Kodepos :91754,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070106', '7316050509020001', 'MUH RAFLI FACHRUDDIN', 'Anak', 'L', 'BELAJEN', '', '-', 'Islam', 'Belum Kawin', 4, 'Tidak Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'HJ NURHAYATI KENDEN', 'FACHRUDDIN MAJA', 'FACHRUDDIN MAJA', 'JL. PRAMUKA BELAJEN UTARA,RT :,RW :,Kodepos :91712,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316050103190005', '7316051009140002', 'MUHAMMAD RIDWAN', 'Anak', 'L', 'ENREKANG', '', '-', 'Islam', 'Belum Kawin', 4, 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'DARAWATI', 'WANGKA', 'WANGKA', 'BELAJEN BARAT,RT :,RW :,Kodepos :,Telp :', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316050103190005', '7316051111100002', 'MUHAMMAD PERDIAWAN', 'Anak', 'L', 'BELAJEN', '', '-', 'Islam', 'Belum Kawin', 4, 'Tidak Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'DARAWATI', 'WANGKA', 'WANGKA', 'BELAJEN BARAT,RT :,RW :,Kodepos :,Telp :', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070103', '7316051303090003', 'M RADITYA', 'Anak', 'L', 'BELAJEN', '', '-', 'Islam', 'Belum Kawin', 4, 'Tidak Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'NASJA NASIR', 'IRWAN ABBAS', 'IRWAN ABBAS', 'BELAJEN,RT :,RW :,Kodepos :91754,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316050103160001', '7316052109890002', 'RISKA ARISANDI', 'Kepala Keluarga', 'L', 'BELAJEN', '', '-', 'Islam', 'Kawin', 1, 'SLTA/Sederajat', 'Wiraswasta', 'NURHIDAYA', 'YUDIN', 'RISKA ARISANDI', 'JL JAMBU BELAJEN,RT :,RW :,Kodepos :91754,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070099', '7316052209860002', 'RIDWAN BADDU', 'Famili Lain', 'L', 'MAKALE', '', '-', 'Islam', 'Belum Kawin', 9, 'SLTA/Sederajat', 'Wiraswasta', 'NAISA SAFAR', 'BADDU', 'NASRUM DANNARI', 'DUSUN BELAJEN UTARA,RT :,RW :,Kodepos :91712,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316050103160001', '7316052210160001', 'ARSHAKA VIRENDRA ARISANDI', 'Anak', 'L', 'ENREKANG', '', '-', 'Islam', 'Belum Kawin', 4, 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'HUSNUL KHATIMAH', 'RISKA ARISANDI', 'RISKA ARISANDI', 'JL JAMBU BELAJEN,RT :,RW :,Kodepos :91754,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316050103100007', '7316052504830001', 'ANSAR', 'Kepala Keluarga', 'L', 'BELOPA', '', '-', 'Islam', 'Belum Kawin', 1, 'SLTA/Sederajat', 'Petani/Pekebun', 'JUM', 'BACO', 'ANSAR', 'BELAJEN BARAT,RT :,RW :,Kodepos :91754,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070099', '7316054107680179', 'MURNI', 'Famili Lain', 'P', 'TATOR', '', '-', 'Islam', 'Belum Kawin', 9, 'Tamat SD/Sederajat', 'Wiraswasta', 'RARA', 'SULU', 'NASRUM DANNARI', 'DUSUN BELAJEN UTARA,RT :,RW :,Kodepos :91712,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070099', '7316054407120001', 'SOPIAH LATIFAH NASRUM', 'Anak', 'P', 'PARE PARE', '', '-', 'Islam', 'Belum Kawin', 4, 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'HJ DINAR KASIM', 'NASRUM DANNARI', 'NASRUM DANNARI', 'DUSUN BELAJEN UTARA,RT :,RW :,Kodepos :91712,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316050103190005', '7316054910800004', 'DARAWATI', 'Istri', 'P', 'PARE - PARE', '', '-', 'Islam', 'Kawin', 3, 'Tamat SD/Sederajat', 'Mengurus Rumah Tangga', 'JAMPANG', 'DAENG LIWANG', 'WANGKA', 'BELAJEN BARAT,RT :,RW :,Kodepos :,Telp :', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316050103190005', '7316054911070003', 'FITRIANI', 'Anak', 'P', 'ENREKANG', '', '-', 'Islam', 'Belum Kawin', 4, 'Tidak Tamat SD/Sederajat', 'Pelajar/Mahasiswa', 'DARAWATI', 'NASRUDDIN', 'WANGKA', 'BELAJEN BARAT,RT :,RW :,Kodepos :,Telp :', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070100', '7316055106130001', 'NURUL AISYA AKBAR', 'Anak', 'P', 'ENREKANG', '', '-', 'Islam', 'Belum Kawin', 4, 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'SADDIA', 'AKBAR', 'AKBAR', 'DUSUN BELAJEN UTARA,RT :,RW :,Kodepos :91712,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316020705070103', '7316055806800001', 'NASJA NASIR', 'Istri', 'P', 'PINRANG', '', 'O', 'Islam', 'Kawin', 3, 'SLTA/Sederajat', 'Wiraswasta', 'HJ JAYYA', 'H NASIR', 'IRWAN ABBAS', 'BELAJEN,RT :,RW :,Kodepos :91754,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316042704070041', '7316056204100001', 'AINUR RIDHA', 'Anak', 'P', 'PARE-PARE', '', '-', 'Islam', 'Belum Kawin', 4, 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'NURANI', 'AGUSTAN MOHA', 'AGUSTAN MOHA', 'BELAJEN,RT :,RW :,Kodepos :91754,Telp :-', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-'),
('7316050103190005', '7316056409120001', 'NUR MAINNA', 'Anak', 'P', 'BELAJEN', '', '-', 'Islam', 'Belum Kawin', 4, 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'DARAWATI', 'WANGKA', 'WANGKA', 'BELAJEN BARAT,RT :,RW :,Kodepos :,Telp :', 'SULAWESI SELATAN', '16', 'ENREKANG', 'ALLA', '1001', 'KAMBIOLANGI', '-', '-', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan_pekerjaan`
--
ALTER TABLE `laporan_pekerjaan`
  ADD PRIMARY KEY (`uraian_pekerjaan`);

--
-- Indexes for table `laporan_pendidikan`
--
ALTER TABLE `laporan_pendidikan`
  ADD PRIMARY KEY (`uraian_pendidikan`);

--
-- Indexes for table `laporan_penduduk`
--
ALTER TABLE `laporan_penduduk`
  ADD PRIMARY KEY (`uraian_penduduk`);

--
-- Indexes for table `master_pekerjaan`
--
ALTER TABLE `master_pekerjaan`
  ADD PRIMARY KEY (`nama_pekerjaan`);

--
-- Indexes for table `master_shdk`
--
ALTER TABLE `master_shdk`
  ADD PRIMARY KEY (`id_shdrt`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
