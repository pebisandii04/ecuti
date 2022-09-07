-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2021 pada 13.42
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecuti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agama`
--

CREATE TABLE `tbl_agama` (
  `id_agama` int(11) NOT NULL,
  `nama_agama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_agama`
--

INSERT INTO `tbl_agama` (`id_agama`, `nama_agama`) VALUES
(1, 'Islam'),
(2, 'Protestan'),
(3, 'Katolik'),
(4, 'Hindu'),
(5, 'Buddha'),
(6, 'Khonghucu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cuti_tahunan`
--

CREATE TABLE `tbl_cuti_tahunan` (
  `id_cuti_tahunan` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jenis_cuti_id` int(11) NOT NULL,
  `alasan` text NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `jml_hari` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `atasan_id` int(11) NOT NULL,
  `sts_apv_1` int(11) NOT NULL,
  `sts_apv_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_cuti_tahunan`
--

INSERT INTO `tbl_cuti_tahunan` (`id_cuti_tahunan`, `nip`, `jenis_cuti_id`, `alasan`, `tgl_pengajuan`, `tgl_mulai`, `tgl_selesai`, `jml_hari`, `alamat`, `no_telp`, `atasan_id`, `sts_apv_1`, `sts_apv_2`) VALUES
('T-CT-210805-00001', '196501151992121001', 1, 'Keperluan Keluarga', '2021-01-15', '2021-01-18', '2021-01-20', 3, 'Jakarta', '082232051166', 21, 0, 0),
('T-CT-210805-00002', '196501151992121001', 1, 'Menjenguk keluarga yang sedang sakit', '2021-02-10', '2021-02-11', '2021-02-11', 1, 'Surabaya', '082232051166', 21, 0, 0),
('T-CT-210805-00003', '196501151992121001', 1, 'Keperluan Keluarga', '2021-03-10', '2021-03-12', '2021-03-12', 1, 'Surabaya', '082232051166', 21, 0, 0),
('T-CT-210805-00004', '196501151992121001', 1, 'Mengunjungi Keluarga', '2021-04-28', '2021-04-30', '2021-04-30', 1, 'Surabaya', '082232051166', 21, 0, 0),
('T-CT-210805-00005', '196501151992121001', 1, 'Keperluan Keluarga', '2021-05-18', '2021-05-24', '2021-05-28', 4, 'Surabaya', '082232051166', 21, 0, 0),
('T-CT-210805-00006', '196201251983031003', 1, 'Ada urusan keluarga di Bukit Tinggi', '2021-02-04', '2021-02-10', '2021-02-14', 5, 'Di Bukit Tinggi - Sumatra Barat', '08128115440', 18, 0, 0),
('T-CT-210805-00007', '196201251983031003', 1, 'Keperluan Keluarga', '2021-05-17', '2021-08-27', '2021-08-31', 3, 'Jakarta', '08128115440', 18, 0, 0),
('T-CT-210805-00008', '196410081986032001', 1, '-', '2021-02-01', '2021-02-02', '2021-08-04', 3, 'Tangerang', '081383062154', 18, 0, 0),
('T-CT-210805-00009', '196410081986032001', 1, 'Keperluan Keluarga', '2021-06-02', '2021-06-04', '2021-06-04', 1, 'Tangerang', '081383062154', 18, 0, 0),
('T-CT-210805-00010', '196601281992121001', 1, 'Keperluan Keluarga', '2021-02-04', '2021-02-08', '2021-02-08', 1, 'Jakarta', '082167529833', 18, 0, 0),
('T-CT-210805-00011', '196709041989032001', 1, 'Keperluan Keluarga', '2021-04-21', '2021-04-23', '2021-04-23', 1, 'Jakarta', '0818793764', 22, 0, 0),
('T-CT-210805-00012', '196709041989032001', 1, 'Keperluan Keluarga', '2021-06-02', '2021-06-03', '2021-06-04', 2, 'Jakarta', '0818793764', 22, 0, 0),
('T-CT-210805-00013', '197605052000121004', 1, 'Keperluan Keluarga', '2021-06-21', '2021-06-30', '2021-08-02', 3, 'Jakarta', '081281121177', 22, 0, 0),
('T-CT-210805-00014', '197306161993031004', 1, 'Acara Keluarga', '2021-01-21', '2021-01-22', '2021-01-22', 1, 'Semarang', '08128136820', 22, 0, 0),
('T-CT-210805-00015', '197306161993031004', 1, 'Acara Keluarga', '2021-01-14', '2021-01-15', '2021-01-18', 2, 'Tangerang', '08128136820', 22, 0, 0),
('T-CT-210805-00016', '197306161993031004', 1, 'Keperluan Keluarga', '2021-05-18', '2021-05-20', '2021-05-21', 2, 'Jalan Raya Kuta No.22, Banjar Abian Base Kuta, Bali', '08128136820', 22, 0, 0),
('T-CT-210805-00017', '196112151988032004', 1, 'Isolasi Mandiri', '2021-05-17', '2021-08-24', '2021-05-28', 4, 'Jakarta', '087865253724', 18, 0, 0),
('T-CT-210805-00018', '196410151992121001', 1, 'Keperluan Keluarga', '2021-02-26', '2021-03-12', '2021-03-12', 1, 'Surakarta', '081369231729', 18, 0, 0),
('T-CT-210805-00019', '196410151992121001', 1, 'Keperluan Keluarga', '2021-05-17', '2021-05-27', '2021-08-31', 3, 'Surakarta', '081369231729', 18, 0, 0),
('T-CT-210805-00020', '196305231992121001', 1, 'Keperluan Keluarga', '2021-02-26', '2021-03-08', '2021-03-12', 5, 'Surakarta', '081335635688', 18, 0, 0),
('T-CT-210805-00021', '196305231992121001', 1, 'Keperluan Keluarga', '2021-04-30', '2021-05-05', '2021-05-31', 6, 'Surakarta', '081335635688', 18, 0, 0),
('T-CT-210805-00022', '195912211987031007', 1, 'Keperluan Keluarga', '2021-03-18', '2021-03-30', '2021-04-01', 3, 'Medan', '081355229696', 18, 0, 0),
('T-CT-210805-00023', '195912211987031007', 1, 'Keperluan Keluarga', '2021-06-24', '2021-06-28', '2021-07-01', 4, 'Medan', '081355229696', 18, 0, 0),
('T-CT-210806-00001', '196511111992121001', 1, 'Acara Keluarga', '2021-04-29', '2021-05-03', '2021-05-04', 2, 'Purwokerto', '081227089394', 18, 0, 0),
('T-CT-210806-00002', '196511111992121001', 1, 'Acara Keluarga', '2021-05-18', '2021-05-27', '2021-05-31', 3, 'Purwokerto', '081227089394', 18, 0, 0),
('T-CT-210806-00003', '196107091988031002', 1, 'Keperluan Keluarga', '2021-05-18', '2021-05-27', '2021-05-31', 3, 'Yogyakarta', '081341173535', 18, 0, 0),
('T-CT-210806-00004', '196405021992121001', 1, 'Acara Keluarga', '2021-03-09', '2021-03-12', '2021-03-12', 1, 'Lumajang', '081236507777', 18, 0, 0),
('T-CT-210806-00005', '196405021992121001', 1, 'Acara Keluarga', '2021-03-25', '2021-04-01', '2021-04-01', 1, 'Lumajang', '081236507777', 18, 0, 0),
('T-CT-210806-00006', '196405021992121001', 1, 'Keperluan Keluarga', '2021-05-18', '2021-05-18', '2021-05-18', 1, 'Lumajang', '081236507777', 18, 0, 0),
('T-CT-210806-00007', '196401291992121001', 1, 'Acara Keluarga', '2021-03-09', '2021-03-12', '2021-03-12', 1, 'Bandung', '082214403712', 18, 0, 0),
('T-CT-210806-00008', '196312291992121001', 1, 'Keperluan Keluarga', '2021-03-17', '2021-03-22', '2021-03-23', 2, 'Siduarjo', '081217895888', 18, 0, 0),
('T-CT-210806-00009', '196312291992121001', 1, 'Keperluan Keluarga', '2021-05-17', '2021-05-24', '2021-05-25', 3, 'Siduarjo', '081217895888', 18, 0, 0),
('T-CT-210806-00010', '196503251992121001', 1, 'Keperluan Keluarga', '2021-03-03', '2021-03-08', '2021-03-10', 3, 'Medan', '081335225650', 18, 0, 0),
('T-CT-210806-00011', '196503251992121001', 1, 'Keperluan Keluarga', '2021-05-18', '2021-05-27', '2021-05-31', 3, 'Medan', '081335225650', 18, 0, 0),
('T-CT-210806-00012', '195901011986121001', 1, 'Acara Keluarga', '2021-03-09', '2021-03-12', '2021-03-12', 1, 'Jakarta', '081357694608', 18, 0, 0),
('T-CT-210806-00013', '196605151996031004', 1, 'Keperluan Keluarga (mendampingi isteri berobat)', '2021-01-25', '2021-01-25', '2021-01-28', 2, 'Magelang', '081274513418', 18, 0, 0),
('T-CT-210806-00014', '196605151996031004', 1, 'Cuti Tahunan', '2021-02-24', '2021-03-08', '2021-03-10', 3, 'Jawa Tengah', '081274513418', 18, 0, 0),
('T-CT-210806-00015', '196803251996031003', 1, 'Keperluan Keluarga', '2021-03-17', '2021-03-22', '2021-03-23', 2, 'Sukoharjo', '081391357725', 18, 0, 0),
('T-CT-210806-00016', '196803251996031003', 1, 'Acara Keluarga', '2021-05-18', '2021-05-27', '2021-05-31', 3, 'Sukoharjo', '081391357725', 18, 0, 0),
('T-CT-210806-00017', '196512311987031032', 1, 'Keperluan Keluarga', '2021-02-22', '2021-03-08', '2021-03-12', 4, 'Yogyakarta', '082154680912', 18, 0, 0),
('T-CT-210806-00018', '196512311987031032', 1, 'Keperluan Keluarga', '2021-05-27', '2021-05-31', '2021-06-04', 4, 'Yogyakarta', '082154680912', 18, 0, 0),
('T-CT-210806-00019', '196712181994031006', 1, 'Keperluan Keluarga', '2021-03-17', '2021-03-22', '2021-03-23', 2, 'Sukoharjo', '082114192278', 18, 0, 0),
('T-CT-210806-00020', '196712181994031006', 1, 'Keperluan Keluarga', '2021-05-19', '2021-05-27', '2021-05-31', 3, 'Surakarta', '082114192278', 18, 0, 0),
('T-CT-210806-00021', '196708311996031001', 1, 'Keperluan Keluarga', '2021-03-10', '2021-03-12', '2021-03-12', 1, 'Semarang', '081927292555', 18, 0, 0),
('T-CT-210806-00022', '196708311996031001', 1, 'Keperluan Keluarga', '2021-06-10', '2021-06-14', '2021-06-18', 5, 'Apartemen Mediterina, Gajah Mada, Jakarta Barat', '081927292555', 18, 0, 0),
('T-CT-210806-00023', '197006061996031005', 1, 'Acara Keluarga', '2021-03-08', '2021-03-12', '2021-03-12', 1, 'Jawa Tengah', '081390177773', 18, 0, 0),
('T-CT-210806-00024', '197006061996031005', 1, 'Keperluan Keluarga', '2021-03-29', '2021-04-05', '2021-04-05', 1, 'Kebumen, Jawa Tengah', '081390177773', 18, 0, 0),
('T-CT-210806-00025', '197006061996031005', 1, 'Acara Keluarga', '2021-04-27', '2021-04-30', '2021-04-30', 1, 'Jawa Tengah', '081390177773', 18, 0, 0),
('T-CT-210806-00026', '197006061996031005', 1, 'Keperluan Keluarga', '2021-05-19', '2021-05-27', '2021-05-31', 3, 'Kebumen, Jawa Tengah', '081390177773', 18, 0, 0),
('T-CT-210806-00027', '197006061996031005', 1, 'Keperluan Keluarga', '2021-06-10', '2021-06-11', '2021-06-11', 1, 'Kebumen, Jawa Tengah', '081390177773', 18, 0, 0),
('T-CT-210806-00028', '196308061994031005', 1, 'Keperluan Keluarga', '2021-03-19', '2021-03-12', '2021-03-12', 1, 'Yogyakarta', '081253093974', 18, 0, 0),
('T-CT-210806-00029', '196308061994031005', 1, 'Acara Keluarga', '2021-05-28', '2021-06-02', '2021-06-03', 2, 'Dusun Punukan RT.002 RW.001, Kel. Wates, Kec. Wates, Kabupaten Kulon Progo, Yogyakarta', '081253093974', 18, 0, 0),
('T-CT-210806-00030', '197305022000031002', 1, 'Keperluan Keluarga', '2021-02-26', '2021-03-12', '2021-03-12', 1, 'Yogyakarta', '085249306242', 18, 0, 0),
('T-CT-210806-00031', '197305022000031002', 1, 'Keperluan Keluarga', '2021-05-25', '2021-05-25', '2021-05-31', 6, 'Yogyakarta', '085249306242', 18, 0, 0),
('T-CT-210806-00032', '1957062502201210007', 1, 'Keluarga', '2021-03-08', '2021-03-10', '2021-03-12', 2, 'Tangerang', '085773320009', 18, 0, 0),
('T-CT-210806-00033', '1976100802202002014', 1, 'Keperluan Keluarga', '2021-02-08', '2021-02-15', '2021-02-16', 2, 'Siduarjo, Jawa Timur', '081398621845', 18, 0, 0),
('T-CT-210806-00034', '1976100802202002014', 1, 'Keperluan Keluarga', '2021-02-24', '2021-03-12', '2021-03-15', 2, 'Jawa Timur', '081398621845', 18, 0, 0),
('T-CT-210806-00035', '1976100802202002014', 1, 'Keperluan Keluarga', '2021-04-19', '2021-04-23', '2021-04-26', 2, 'Jawa Timur', '081398621845', 18, 0, 0),
('T-CT-210806-00036', '1976100802202002014', 1, 'Keperluan Keluarga', '2021-06-02', '2021-06-07', '2021-06-08', 2, 'Jawa Timur', '081398621845', 18, 0, 0),
('T-CT-210806-00037', '197612182006042002', 1, 'Keperluan Keluarga', '2021-05-31', '2021-06-07', '2021-06-09', 3, 'Jakarta', '081383062154', 7, 0, 0),
('T-CT-210806-00038', '197806122006042003', 1, 'Keperluan Keluarga', '2021-03-09', '2021-03-15', '2021-03-17', 3, 'Jakarta', '081383062154', 7, 0, 0),
('T-CT-210806-00039', '197806122006042003', 1, 'Keperluan Keluarga', '2021-06-09', '2021-06-17', '2021-06-21', 3, 'Jakarta', '081383062154', 7, 0, 0),
('T-CT-210806-00040', '196605021986022001', 1, 'Keperluan Keluarga', '2021-03-05', '2021-03-12', '2021-03-12', 1, 'Malang', '081380761069', 22, 0, 0),
('T-CT-210806-00041', '196806231989032001', 1, 'Keperluan Keluarga', '2021-02-24', '2021-02-26', '2021-02-26', 1, 'Jakarta', '081318669649', 22, 0, 0),
('T-CT-210806-00042', '196806231989032001', 1, 'Keperluan Keluarga', '2021-03-08', '2021-03-12', '2021-03-12', 1, 'Jakarta', '081318669649', 22, 0, 0),
('T-CT-210806-00043', '196806231989032001', 1, 'Keperluan Keluarga', '2021-03-19', '2021-03-22', '2021-03-23', 2, 'Jakarta', '081318669649', 22, 0, 0),
('T-CT-210806-00044', '197303142001122001', 1, 'Acara Keluarga', '2021-05-27', '2021-06-02', '2021-06-09', 6, 'Yogyakarta', '081385222345', 22, 0, 0),
('T-CT-210806-00045', '196310131988032002', 1, 'Sakit', '2021-04-05', '2021-04-05', '2021-04-07', 2, 'Jakarta', '081294095225', 22, 0, 0),
('T-CT-210806-00046', '196404201987032001', 1, 'Keperluan Keluarga', '2021-03-12', '2021-03-12', '2021-03-12', 1, 'Tasikmalaya', '085291926006', 22, 0, 0),
('T-CT-210806-00047', '196404201987032001', 1, 'Keperluan Keluarga', '2021-05-17', '2021-05-24', '2021-05-28', 4, 'Tasikmalaya', '085291926006', 22, 0, 0),
('T-CT-210806-00048', '196507091988031001', 1, 'Keperluan Keluarga', '2021-03-12', '2021-03-12', '2021-03-12', 1, 'Jakarta', '08128884501', 22, 0, 0),
('T-CT-210806-00049', '196507091988031001', 1, 'Keperluan Keluarga', '2021-03-25', '2021-06-01', '2021-06-01', 1, 'Jakarta', '08128884501', 22, 0, 0),
('T-CT-210806-00050', '196606191992031005', 1, 'Keperluan Keluarga', '2021-03-05', '2021-03-12', '2021-03-12', 1, 'Tangerang', '081905175500', 22, 0, 0),
('T-CT-210806-00051', '196710111993031007', 1, 'Keperluan Keluarga', '2021-02-24', '2021-02-26', '2021-03-01', 2, 'Jakarta', '081294582449', 22, 0, 0),
('T-CT-210806-00052', '196710111993031007', 1, 'Keperluan Keluarga', '2021-03-09', '2021-03-10', '2021-03-12', 2, 'Jakarta', '081294582449', 22, 0, 0),
('T-CT-210806-00053', '196710111993031007', 1, 'Keperluan Keluarga', '2021-03-19', '2021-03-22', '2021-03-23', 2, 'Jakarta', '081294582449', 22, 0, 0),
('T-CT-210806-00054', '196710111993031007', 1, 'Keperluan Keluarga', '2021-05-19', '2021-05-27', '2021-05-28', 2, 'Jakarta', '081294582449', 22, 0, 0),
('T-CT-210806-00055', '196710111993031007', 1, 'Keperluan Keluarga', '2021-06-09', '2021-06-10', '2021-06-11', 2, 'Jakarta', '081294582449', 22, 0, 0),
('T-CT-210806-00056', '196808111989031003', 1, 'Sakit', '2021-02-01', '2021-02-01', '2021-02-03', 3, 'Jakarta', '085786528314', 22, 0, 0),
('T-CT-210806-00057', '197806252002121003', 1, 'Keperluan Keluarga', '2021-03-03', '2021-03-04', '2021-03-12', 6, 'Bekasi', '081382152035', 22, 0, 0),
('T-CT-210806-00058', '198208312007042001', 1, 'Keperluan Keluarga', '2021-03-30', '2021-04-05', '2021-04-07', 3, 'Jakarta', '087777399888', 22, 0, 0),
('T-CT-210806-00059', '196308271985031005', 1, 'Keperluan Keluarga', '2021-03-12', '2021-03-12', '2021-03-12', 1, 'Bekasi', '081380644226', 22, 0, 0),
('T-CT-210806-00060', '196308271985031005', 1, 'Keperluan Keluarga', '2021-04-05', '2021-04-06', '2021-04-07', 2, 'Bekasi', '081380644226', 22, 0, 0),
('T-CT-210806-00061', '198408212006041001', 1, 'Acara Keluarga', '2021-01-21', '2021-01-22', '2021-01-22', 1, 'Semarang', '081281806945', 22, 0, 0),
('T-CT-210806-00062', '198408212006041001', 1, 'Keperluan Keluarga', '2021-03-08', '2021-03-12', '2021-03-12', 1, 'Jakarta', '081281806945', 22, 0, 0),
('T-CT-210806-00063', '198408212006041001', 1, 'Keperluan Keluarga', '2021-05-18', '2021-05-24', '2021-05-28', 4, 'Lampung', '081281806945', 22, 0, 0),
('T-CT-210806-00064', '198701022009122005', 1, 'Keperluan Keluarga', '2021-06-02', '2021-06-03', '2021-06-03', 1, 'Jakarta', '08118802615', 22, 0, 0),
('T-CT-210806-00065', '196905071993031003', 1, 'Keperluan Keluarga', '2021-03-05', '2021-03-05', '2021-03-05', 1, 'Bekasi', '085884135361', 22, 0, 0),
('T-CT-210806-00066', '196905071993031003', 1, 'Keperluan Keluarga', '2021-03-08', '2021-03-05', '2021-03-05', 1, 'Bekasi', '085884135361', 22, 0, 0),
('T-CT-210806-00067', '196905071993031003', 1, 'Keperluan Keluarga', '2021-05-17', '2021-05-07', '2021-05-07', 1, 'Bekasi', '085884135361', 22, 0, 0),
('T-CT-210806-00068', '198207022006041001', 1, 'Keperluan Keluarga', '2021-03-30', '2021-04-06', '2021-04-13', 4, 'Bogor', '081382023986', 22, 0, 0),
('T-CT-210806-00069', '198001252008052001', 1, 'Keperluan Keluarga', '2021-03-18', '2021-03-19', '2021-03-19', 1, 'Jakarta', '080808654351', 12, 0, 0),
('T-CT-210806-00070', '197708262003122004', 1, 'Keperluan Keluarga', '2021-01-04', '2021-01-06', '2021-01-08', 3, 'Jakarta', '081389496903', 13, 0, 0),
('T-CT-210806-00071', '197708262003122004', 1, 'Keperluan Keluarga', '2021-05-18', '2021-05-20', '2021-05-21', 2, 'Jakarta', '081389496903', 13, 0, 0),
('T-CT-210806-00072', '197106212014081001', 1, 'Keperluan Keluarga', '2021-03-01', '2021-03-08', '2021-03-12', 4, 'Kuningan', '087877497598', 11, 0, 0),
('T-CT-210806-00073', '197106212014081001', 1, 'Keperluan Keluarga', '2021-06-14', '2021-06-28', '2021-06-30', 3, 'Kuningan', '087877497598', 11, 0, 0),
('T-CT-210806-00074', '196705142012121003', 1, 'Keperluan Keluarga', '2021-03-04', '2021-03-05', '2021-03-05', 1, 'Jakarta', '08170060418', 12, 0, 0),
('T-CT-210806-00075', '196705142012121003', 1, 'Keperluan Keluarga', '2021-03-08', '2021-03-12', '2021-03-12', 1, 'Bogor', '08170060418', 12, 0, 0),
('T-CT-210806-00076', '196705142012121003', 1, 'Keperluan Keluarga', '2021-03-30', '2021-03-31', '2021-03-31', 1, 'Jakarta', '08170060418', 12, 0, 0),
('T-CT-210806-00077', '196705142012121003', 1, 'Keperluan Keluarga', '2021-06-10', '2021-06-12', '2021-06-14', 2, 'Jakarta', '08170060418', 12, 0, 0),
('T-CT-210806-00078', '196605102014081003', 1, 'Keperluan Keluarga', '2021-01-21', '2021-01-22', '2021-01-22', 1, 'Semarang', '081398536061', 10, 0, 0),
('T-CT-210806-00079', '196501042014081001', 1, 'Keperluan Keluarga', '2021-03-10', '2021-03-12', '2021-03-12', 1, 'Jakarta', '087800011723', 8, 0, 0),
('T-CT-210806-00080', '196309091985031006', 1, 'Keperluan Keluarga', '2021-03-17', '2021-03-18', '2021-03-19', 2, 'Jawa Tengah', '081291744161', 12, 0, 0),
('T-CT-210806-00081', '196309091985031006', 1, 'Keperluan Keluarga', '2021-06-22', '2021-06-23', '2021-06-25', 3, 'Sumedang, Jawa Barat', '081291744161', 12, 0, 0),
('T-CT-210806-00082', '198405312009042010', 1, 'Acara Keluarga', '2021-03-08', '2021-03-08', '2021-03-08', 1, 'Jakarta', '082122333484', 10, 0, 0),
('T-CT-210806-00083', '198405312009042010', 1, 'Keperluan Keluarga', '2021-06-09', '2021-06-17', '2021-06-21', 3, 'Jakarta', '082122333484', 10, 0, 0),
('T-CT-210806-00084', '198401042009122004', 1, '-', '2021-01-21', '2021-01-22', '2021-01-22', 1, 'Semarang', '08788888500', 13, 0, 0),
('T-CT-210806-00085', '198401042009122004', 1, 'Keperluan Keluarga', '2021-03-03', '2021-03-12', '2021-03-12', 1, 'Purwokerto', '08788888500', 13, 0, 0),
('T-CT-210806-00086', '198401042009122004', 1, 'Keperluan Keluarga', '2021-04-29', '2021-04-30', '2021-04-30', 1, 'Purwokerto', '08788888500', 13, 0, 0),
('T-CT-210806-00087', '198401042009122004', 1, 'Keperluan Keluarga', '2021-05-19', '2021-05-27', '2021-05-31', 3, 'Purwokerto', '08788888500', 13, 0, 0),
('T-CT-210806-00088', '196702121988031002', 1, 'Mendampingi anak Wisuda', '2021-03-26', '2021-03-29', '2021-03-29', 1, 'Jakarta', '08121334621', 13, 0, 0),
('T-CT-210806-00089', '197302212006041001', 1, 'Acara Keluarga', '2021-04-07', '2021-04-12', '2021-04-13', 2, 'Yogyakarta', '081586372067', 14, 0, 0),
('T-CT-210806-00090', '198807292009041001', 1, 'Acara Keluarga', '2021-01-27', '2021-01-28', '2021-01-29', 2, 'Lampung', '088102509786', 8, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cuti_umum`
--

CREATE TABLE `tbl_cuti_umum` (
  `id_cuti_umum` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jenis_cuti_id` int(11) NOT NULL,
  `alasan` text NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `jml_hari` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `atasan_id` int(11) NOT NULL,
  `upload_file` varchar(80) NOT NULL,
  `sts_apv_1` int(11) NOT NULL,
  `sts_apv_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_cuti_umum`
--

INSERT INTO `tbl_cuti_umum` (`id_cuti_umum`, `nip`, `jenis_cuti_id`, `alasan`, `tgl_pengajuan`, `tgl_mulai`, `tgl_selesai`, `jml_hari`, `alamat`, `no_telp`, `atasan_id`, `upload_file`, `sts_apv_1`, `sts_apv_2`) VALUES
('T-CU-210805-00001', '196501151992121001', 3, 'Isolasi Mandiri', '2021-03-22', '2021-03-22', '2021-04-09', 15, 'Surabaya', '082232051166', 21, '24472_18186.pdf', 0, 0),
('T-CU-210805-00002', '196410081986032001', 3, 'Sakit', '2021-08-24', '2021-08-24', '2021-08-25', 2, 'Tangerang', '081383062154', 18, 'bukti-1628171954.pdf', 0, 0),
('T-CU-210805-00003', '196410081986032001', 3, 'Sakit', '2021-02-26', '2021-02-26', '2021-02-26', 1, 'Tangerang', '081383062154', 18, 'bukti-1628172142.pdf', 0, 0),
('T-CU-210805-00004', '197605052000121004', 3, 'Menjalankan Isolasi Mandiri Karena Positif COVID-19', '2021-02-10', '2021-01-23', '2021-02-05', 15, 'Jakarta', '081281121177', 22, 'bukti-1628176970.pdf', 0, 0),
('T-CU-210805-00005', '196112151988032004', 3, 'Isolasi Mandiri', '2021-04-01', '2021-04-01', '2021-04-19', 14, 'Jakarta', '087865253724', 18, 'bukti-1628179402.pdf', 0, 0),
('T-CU-210805-00006', '196410151992121001', 3, 'Isolasi Mandiri', '2021-03-31', '2021-04-01', '2021-04-22', 14, 'Jakarta', '087865253724', 18, '3051_22434.pdf', 0, 0),
('T-CU-210805-00007', '196305231992121001', 3, 'Isolasi Mandiri', '2021-03-29', '2021-03-29', '2021-04-23', 19, 'Jakarta', '081335635688', 18, 'bukti-1628180851.pdf', 0, 0),
('T-CU-210805-00008', '195912211987031007', 3, 'Keperluan Keluarga', '2021-04-05', '2021-04-05', '2021-04-20', 12, 'Medan', '081355229696', 18, 'bukti-1628181891.pdf', 0, 0),
('T-CU-210806-00001', '196511111992121001', 3, 'Sakit', '2021-04-22', '2021-04-22', '2021-04-23', 2, 'Purwokerto', '081227089394', 18, 'bukti-1628211721.pdf', 0, 0),
('T-CU-210806-00002', '196511111992121001', 3, 'Sakit', '2021-06-02', '2021-06-02', '2021-06-03', 2, 'Purwekrto', '081227089394', 18, 'bukti-1628212214.pdf', 0, 0),
('T-CU-210806-00003', '196405021992121001', 3, 'Isolasi Mandiri', '2021-04-01', '2021-04-01', '2021-04-21', 14, 'Lumajang', '081236507777', 18, 'bukti-1628213896.pdf', 0, 0),
('T-CU-210806-00004', '196405021992121001', 3, 'Sakit', '2021-05-17', '2021-05-17', '2021-05-17', 1, 'Lumajang', '081236507777', 18, 'bukti-1628213982.pdf', 0, 0),
('T-CU-210806-00005', '196405021992121001', 3, 'Isolasi Mandiri', '2021-05-31', '2021-04-22', '2021-05-11', 14, 'Lumajang', '081236507777', 18, '', 0, 0),
('T-CU-210806-00006', '196401291992121001', 3, 'Isolasi Mandiri', '2021-04-26', '2021-04-26', '2021-05-11', 12, 'Bandung', '082214403712', 18, 'bukti-1628214443.pdf', 0, 0),
('T-CU-210806-00007', '196503251992121001', 3, 'Isolasi Mandiri', '2021-03-29', '2021-03-29', '2021-04-09', 9, 'Jakarta', '081335225650', 18, 'bukti-1628214936.pdf', 0, 0),
('T-CU-210806-00008', '195901011986121001', 3, 'Isolasi Mandiri', '2021-04-01', '2021-04-01', '2021-04-21', 14, 'Jakarta', '081357694608', 18, 'bukti-1628215372.pdf', 0, 0),
('T-CU-210806-00009', '195901011986121001', 3, 'Isolasi Mandiri', '2021-04-22', '2021-04-22', '2021-05-11', 14, 'Jakarta', '081357694608', 18, 'bukti-1628215453.pdf', 0, 0),
('T-CU-210806-00010', '196712181994031006', 3, 'Isolasi Mandiri', '2021-04-01', '2021-04-01', '2021-04-13', 12, 'Solo', '082114192278', 18, 'bukti-1628219870.pdf', 0, 0),
('T-CU-210806-00011', '197006061996031005', 3, 'Sakit', '2021-06-24', '2021-06-25', '2021-06-25', 1, 'Jakarta', '081390177773', 18, 'bukti-1628220622.pdf', 0, 0),
('T-CU-210806-00012', '1976100802202002014', 3, 'Sakit', '2021-05-09', '2021-05-10', '2021-05-11', 2, 'Siduarjo', '081398621845', 18, 'bukti-1628223173.pdf', 0, 0),
('T-CU-210806-00013', '197612182006042002', 3, 'Sakit', '2021-04-05', '2021-04-05', '2021-04-05', 1, 'Jakarta', '081383062154', 7, 'bukti-1628223366.pdf', 0, 0),
('T-CU-210806-00014', '197806122006042003', 3, 'Sakit', '2021-02-17', '2021-06-17', '2021-06-19', 3, 'Jakarta', '081383062154', 7, 'bukti-1628223556.pdf', 0, 0),
('T-CU-210806-00015', '197806122006042003', 3, 'Sakit', '2021-03-30', '2021-03-30', '2021-03-30', 1, 'Jakarta', '081383062154', 7, 'bukti-1628223710.pdf', 0, 0),
('T-CU-210806-00016', '196806231989032001', 3, 'Isolasi Mandiri', '2021-03-31', '2021-03-29', '2021-04-16', 14, 'Jakarta', '081318669649', 22, 'bukti-1628228077.pdf', 0, 0),
('T-CU-210806-00017', '196806231989032001', 3, 'Sakit', '2021-05-31', '2021-05-31', '2021-05-31', 1, 'Jakarta', '081318669649', 22, 'bukti-1628228151.pdf', 0, 0),
('T-CU-210806-00018', '196404201987032001', 3, 'Sakit', '2021-03-16', '2021-05-16', '2021-05-06', 2, 'Ciledeug', '08128115440', 22, 'bukti-1628228824.pdf', 0, 0),
('T-CU-210806-00019', '196606191992031005', 3, 'Isolasi Mandiri', '2021-03-29', '2021-03-29', '2021-04-16', 14, 'Tangerang', '081905175500', 22, 'bukti-1628229337.pdf', 0, 0),
('T-CU-210806-00020', '198208312007042001', 3, 'Sakit', '2021-03-02', '2021-03-02', '2021-03-08', 7, 'Jakarta', '087777399888', 22, 'bukti-1628230280.pdf', 0, 0),
('T-CU-210806-00021', '198207022006041001', 3, 'Isolasi Mandiri', '2021-05-17', '2021-05-17', '2021-05-21', 5, 'Bogor', '081382023986', 22, 'bukti-1628231774.pdf', 0, 0),
('T-CU-210806-00022', '199512162020122009', 3, 'Sakit', '2021-03-24', '2021-03-23', '2021-03-26', 3, 'Bogor', '081290717569', 8, 'bukti-1628233260.pdf', 0, 0),
('T-CU-210806-00023', '199809162020121003', 3, 'Sakit', '2021-05-27', '2021-05-27', '2021-05-28', 2, 'Jakarta', '085348900305', 8, 'bukti-1628233434.pdf', 0, 0),
('T-CU-210806-00024', '197109262014081002', 3, 'Sakit', '2021-05-27', '2021-05-27', '2021-05-28', 2, 'Cibinong', '085921980523', 11, 'bukti-1628233735.pdf', 0, 0),
('T-CU-210806-00025', '196705142012121003', 3, 'Sakit', '2021-04-19', '2021-04-19', '2021-04-19', 1, 'Bogor', '08170060418', 12, 'bukti-1628236869.pdf', 0, 0),
('T-CU-210806-00026', '196705142012121003', 3, 'Sakit', '2021-05-27', '2021-05-27', '2021-05-28', 2, 'Bogor', '08170060418', 12, 'bukti-1628236927.pdf', 0, 0),
('T-CU-210806-00027', '196705142012121003', 3, 'Sakit', '2021-05-31', '2021-05-31', '2021-05-31', 1, 'Bogor', '08170060418', 12, 'bukti-1628237008.pdf', 0, 0),
('T-CU-210806-00028', '196501042014081001', 3, 'Sakit', '2021-05-31', '2021-05-31', '2021-05-31', 1, 'Jakarta', '087800011723', 8, 'bukti-1628237455.pdf', 0, 0),
('T-CU-210806-00029', '198401042009122004', 3, 'Sakit', '2021-03-29', '2021-03-29', '2021-03-29', 1, 'Jakarta', '08788888500', 13, 'bukti-1628238396.pdf', 0, 0),
('T-CU-210806-00030', '198508162009122006', 3, 'Sakit', '2021-02-22', '2021-02-22', '2021-02-22', 1, 'Jakarta', '081932660930', 8, 'bukti-1628238907.pdf', 0, 0),
('T-CU-210806-00031', '197506172014081001', 3, 'Sakit', '2021-05-27', '2021-05-27', '2021-05-28', 2, 'Jakarta', '082113131171', 8, 'bukti-1628239118.pdf', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_golongan_ruang`
--

CREATE TABLE `tbl_golongan_ruang` (
  `id_gol_ruang` int(11) NOT NULL,
  `nama_golongan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_golongan_ruang`
--

INSERT INTO `tbl_golongan_ruang` (`id_gol_ruang`, `nama_golongan`) VALUES
(1, 'Juru Muda (I/a)'),
(2, 'Juru Muda Tingkat I (I/b)'),
(3, 'Juru (I/c)'),
(4, 'Juru Tingkat I (I/d)'),
(5, 'Pengatur Muda (II/a)'),
(6, 'Pengatur Muda Tingkat I (II/b)'),
(7, 'Pengatur (II/c)'),
(8, 'Pengatur Tingkat I (II/d)'),
(9, 'Penata Muda (III/a)'),
(10, 'Penata Muda Tingkat I (III/b)'),
(11, 'Penata (III/c)'),
(12, 'Penata Tingkat I (III/d)'),
(13, 'Pembina (IV/a)'),
(14, 'Pembina Tingkat I (IV/b)'),
(15, 'Pembina Utama Muda (IV/c)'),
(16, 'Pembina Utama Madya (IV/d)'),
(17, 'Pembina Utama (IV/e)'),
(18, 'Tanpa Golongan (-)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hak_cuti_tahunan`
--

CREATE TABLE `tbl_hak_cuti_tahunan` (
  `id_hak_cuti_tahunan` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `n` int(11) NOT NULL,
  `n_1` int(11) NOT NULL,
  `n_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_hak_cuti_tahunan`
--

INSERT INTO `tbl_hak_cuti_tahunan` (`id_hak_cuti_tahunan`, `user_id`, `n`, `n_1`, `n_2`) VALUES
(1, 1, 8, 0, 0),
(2, 2, 12, 2, 0),
(3, 3, 12, 0, 0),
(4, 4, 12, 5, 0),
(5, 5, 12, 5, 0),
(6, 6, 12, 3, 0),
(7, 7, 12, 3, 0),
(8, 8, 12, 1, 0),
(9, 9, 12, 2, 0),
(10, 10, 12, 6, 0),
(11, 11, 12, 3, 0),
(12, 12, 12, 0, 0),
(13, 13, 12, 5, 0),
(14, 14, 8, 0, 0),
(15, 15, 8, 0, 0),
(16, 16, 11, 0, 0),
(17, 17, 8, 0, 0),
(18, 18, 12, 6, 0),
(19, 19, 10, 0, 0),
(20, 20, 9, 0, 0),
(21, 21, 12, 3, 0),
(22, 22, 12, 0, 0),
(23, 23, 12, 4, 0),
(24, 24, 12, 6, 0),
(25, 25, 12, 3, 0),
(26, 26, 12, 5, 0),
(27, 27, 10, 0, 0),
(28, 28, 10, 0, 0),
(29, 29, 12, 6, 0),
(30, 30, 11, 0, 0),
(31, 31, 12, 6, 0),
(32, 32, 8, 10, 1),
(33, 33, 12, 6, 0),
(34, 34, 12, 4, 0),
(35, 35, 10, 0, 0),
(36, 36, 11, 0, 0),
(37, 37, 12, 1, 0),
(38, 38, 12, 6, 0),
(39, 39, 0, 0, 0),
(40, 40, 12, 7, 0),
(41, 41, 12, 6, 0),
(42, 42, 12, 6, 0),
(43, 43, 12, 5, 0),
(44, 44, 12, 2, 0),
(45, 45, 12, 0, 0),
(46, 46, 12, 2, 0),
(47, 47, 0, 0, 0),
(48, 48, 12, 6, 0),
(49, 49, 12, 0, 0),
(50, 50, 12, 6, 0),
(51, 52, 12, 6, 0),
(53, 53, 12, 5, 0),
(54, 54, 12, 3, 0),
(55, 55, 12, 3, 0),
(56, 56, 12, 6, 0),
(57, 57, 12, 6, 0),
(58, 58, 12, 6, 0),
(59, 59, 12, 2, 0),
(60, 60, 12, 6, 0),
(61, 61, 8, 0, 0),
(62, 62, 12, 6, 0),
(63, 63, 12, 3, 0),
(64, 64, 12, 6, 0),
(65, 65, 12, 0, 0),
(66, 66, 12, 4, 0),
(67, 67, 12, 6, 0),
(68, 68, 12, 3, 0),
(69, 69, 12, 6, 0),
(70, 70, 8, 0, 0),
(71, 71, 12, 6, 0),
(72, 72, 12, 1, 0),
(73, 73, 11, 4, 0),
(74, 74, 0, 0, 0),
(75, 75, 12, 5, 0),
(76, 76, 0, 0, 0),
(77, 77, 12, 0, 0),
(78, 78, 12, 0, 0),
(79, 79, 12, 4, 0),
(80, 80, 12, 0, 0),
(81, 81, 12, 6, 0),
(82, 82, 9, 0, 0),
(83, 83, 12, 6, 0),
(84, 84, 12, 6, 0),
(85, 85, 12, 6, 0),
(86, 86, 11, 0, 0),
(87, 87, 12, 6, 0),
(88, 88, 12, 1, 0),
(89, 89, 0, 0, 0),
(90, 90, 12, 5, 0),
(91, 91, 0, 0, 0),
(92, 92, 12, 1, 0),
(93, 93, 12, 0, 0),
(94, 94, 12, 6, 0),
(95, 95, 12, 2, 0),
(96, 96, 12, 0, 0),
(97, 97, 12, 6, 0),
(98, 98, 11, 0, 0),
(99, 99, 12, 4, 0),
(100, 100, 12, 1, 0),
(101, 101, 12, 1, 0),
(102, 102, 12, 4, 0),
(103, 103, 12, 6, 0),
(104, 104, 11, 0, 0),
(105, 105, 12, 3, 0),
(106, 109, 12, 3, 0),
(131, 51, 12, 3, 0),
(132, 111, 0, 0, 0),
(133, 112, 0, 0, 0),
(134, 113, 1, 0, 0),
(135, 114, 0, 0, 0),
(136, 115, 0, 0, 0),
(137, 116, 10, 0, 0),
(138, 117, 12, 6, 0),
(139, 118, 12, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Ketua Pengadilan Tingkat Pertama Klas I A Khusus'),
(2, 'Wakil Ketua Pengadilan Negeri'),
(3, 'Hakim'),
(4, 'Hakim Ad Hoc Perikanan'),
(5, 'Sekretaris Tingkat Pertama Klas I A Khusus'),
(6, 'Panitera Tingkat Pertama Klas I A Khusus'),
(7, 'Kepala Bagian Umum'),
(8, 'Panitera Muda Pidana'),
(9, 'Panitera Muda Hukum'),
(10, 'Panitera Muda Perdata'),
(11, 'Panitera Muda Perikanan'),
(12, 'Kasubbag Tata Usaha dan Keuangan'),
(13, 'Kasubbag Perencanaan, TI dan Pelaporan'),
(14, 'Kasubbag Kepegawaian, Organisasi dan Tatalaksana'),
(15, 'Panitera Pengganti'),
(16, 'Juru Sita'),
(17, 'Juru Sita Pengganti'),
(18, 'Analis Perkara Peradilan'),
(19, 'Pengadministrasi Registrasi Perkara'),
(20, 'Pengadministrasi Perpustakaan'),
(21, 'Verifikator Keuangan'),
(22, 'Pengelola Barang Milik Negara'),
(23, 'Pemelihara Sarana Dan Prasarana'),
(24, 'Pengadministrasi Hukum'),
(25, 'Teknisi Sarana dan Prasarana'),
(26, 'Pengelola Kepegawaian'),
(27, 'Pengadministrasi Persuratan'),
(28, 'Juru Sita Pengganti Sekretaris'),
(29, 'Petugas Keamanan'),
(30, 'Pramubakti'),
(31, 'Driver'),
(32, 'Petugas Kebersihan'),
(33, 'Tenaga Sukarela'),
(34, 'Ketua Pengadilan Banding Tipe A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_cuti`
--

CREATE TABLE `tbl_jenis_cuti` (
  `id_jenis_cuti` int(11) NOT NULL,
  `nama_jenis_cuti` varchar(40) NOT NULL,
  `jml_kuota_cuti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jenis_cuti`
--

INSERT INTO `tbl_jenis_cuti` (`id_jenis_cuti`, `nama_jenis_cuti`, `jml_kuota_cuti`) VALUES
(1, 'Cuti Tahunan', 12),
(2, 'Cuti Besar', 30),
(3, 'Cuti Sakit', 0),
(4, 'Cuti Melahirkan', 90),
(5, 'Cuti Karena Alasan Penting', 3),
(6, 'Cuti Diluar Tanggungan Negara', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_kelamin`
--

CREATE TABLE `tbl_jenis_kelamin` (
  `id_jenis_kelamin` int(11) NOT NULL,
  `nama_jenis_kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jenis_kelamin`
--

INSERT INTO `tbl_jenis_kelamin` (`id_jenis_kelamin`, `nama_jenis_kelamin`) VALUES
(1, 'Laki-Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_pegawai`
--

CREATE TABLE `tbl_jenis_pegawai` (
  `id_jenis_pegawai` int(11) NOT NULL,
  `nama_jenis_pegawai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jenis_pegawai`
--

INSERT INTO `tbl_jenis_pegawai` (`id_jenis_pegawai`, `nama_jenis_pegawai`) VALUES
(1, 'Pejabat Negara'),
(2, 'PNS'),
(3, 'Adhoc'),
(4, 'CPNS'),
(5, 'Honorer'),
(6, 'Militer'),
(7, 'Polri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelola_atasan`
--

CREATE TABLE `tbl_kelola_atasan` (
  `id_atasan` int(11) NOT NULL,
  `unit_kerja_id` int(11) NOT NULL,
  `user_id_atasan` int(11) NOT NULL,
  `user_nip` varchar(20) NOT NULL,
  `pejabat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelola_atasan`
--

INSERT INTO `tbl_kelola_atasan` (`id_atasan`, `unit_kerja_id`, `user_id_atasan`, `user_nip`, `pejabat_id`) VALUES
(6, 5, 2, '', 1),
(7, 7, 112, '', 2),
(8, 12, 38, '', 14),
(9, 13, 109, '', 14),
(10, 14, 36, '', 14),
(11, 8, 116, '', 3),
(12, 9, 6, '', 3),
(13, 10, 8, '', 3),
(14, 11, 7, '', 3),
(18, 1, 1, '', 1),
(20, 2, 4, '', 1),
(21, 18, 111, '', 13),
(22, 6, 3, '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelola_pejabat`
--

CREATE TABLE `tbl_kelola_pejabat` (
  `id_pejabat` int(11) NOT NULL,
  `user_id_pejabat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelola_pejabat`
--

INSERT INTO `tbl_kelola_pejabat` (`id_pejabat`, `user_id_pejabat`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 32),
(10, 36),
(11, 38),
(12, 109),
(13, 111),
(14, 112);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_status`
--

INSERT INTO `tbl_status` (`id_status`, `status`) VALUES
(1, 'Active'),
(2, 'Non Active'),
(3, 'Bloked');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_unit_kerja`
--

CREATE TABLE `tbl_unit_kerja` (
  `id_unit_kerja` int(11) NOT NULL,
  `nama_unit_kerja` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_unit_kerja`
--

INSERT INTO `tbl_unit_kerja` (`id_unit_kerja`, `nama_unit_kerja`) VALUES
(1, 'Ketua'),
(2, 'Wakil Ketua'),
(3, 'Hakim'),
(4, 'Hakim Ad Hoc'),
(5, 'Sekretaris'),
(6, 'Panitera'),
(7, 'Bagian Umum'),
(8, 'Kepaniteraan Pidana'),
(9, 'Kepaniteraan Hukum'),
(10, 'Kepaniteraan Perdata'),
(11, 'Kepaniteraan Perikanan'),
(12, 'Tata Usaha dan Keuangan'),
(13, 'Perencanaan, TI dan Pelaporan'),
(14, 'Kepegawaian, Organisasi dan Tatalaksana'),
(15, 'Panitera Pengganti'),
(16, 'Juru Sita'),
(17, 'Kosong (-)'),
(18, 'Pengadilan Tinggi Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nip` char(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_pegawai_id` int(11) NOT NULL,
  `agama_id` int(11) NOT NULL,
  `jenis_kelamin_id` int(11) NOT NULL,
  `gol_ruang_id` int(11) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `unit_kerja_id` int(11) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `email` varchar(125) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nip`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_pegawai_id`, `agama_id`, `jenis_kelamin_id`, `gol_ruang_id`, `no_telp`, `unit_kerja_id`, `jabatan_id`, `photo`, `email`, `password`, `role_id`, `status_id`) VALUES
(1, '196501151992121001', 'PUJI HARIAN, S.H, M.Hum.', 'Blitar, Kabupaten (Kanigoro)', '1965-01-15', 1, 1, 1, 16, '082232051166', 1, 1, 'pnju-1625562757.jpg', 'puji_harian@yahoo.com', '$2y$10$y8rkkyjsXVSekwz1UYOFaOooAJIPDU/aIq.7KJ9yHxiVoyKhZLKpe', 2, 1),
(2, '196410081986032001', 'ROSNI, S.Sos., M.Pd.', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1964-10-08', 2, 1, 2, 15, '081383062154', 5, 5, 'pnju-1628345941.jpg', 'rosni0810@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 2, 1),
(3, '196201251983031003', 'YANWITRA, S.H., M.H.', 'Bukittinggi, Kota (Bukittinggi)', '1962-01-25', 2, 1, 1, 14, '08128115440', 6, 6, 'pnju-1628345955.jpg', 'yanwitra@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 2, 1),
(4, '196601281992121001', 'SOHE, S.H., M.H.', 'Bangka, Kabupaten (Sungai Liat)', '1966-01-28', 1, 1, 1, 15, '082167529833', 2, 2, '23877.jpeg', 'soheshmh@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(5, '196302131989031003', 'MOHAMMAD NAJIB, SH, MH', 'Jakarta Timur, Kota (Jakarta Timur)', '1963-02-13', 2, 1, 1, 13, '081388172709', 8, 8, 'pnju-1628345988.jpg', 'mohhammadnajib@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 4, 3),
(6, '196709041989032001', 'LINDAWATI SERIKIT, S.H., M.H.', 'Jakarta Selatan, Kota (Jakarta Selatan)', '1967-09-04', 2, 2, 2, 13, '0818793764', 9, 9, '25048.jpeg', 'lindawatiseri77@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 4, 1),
(7, '197605052000121004', 'SYAHMISAR, SH., MH.', 'Ogan Komering Ulu Timur, Kabupaten (Martapura)', '1976-05-05', 2, 1, 1, 13, '081281121177', 11, 11, 'pnju-1628346009.jpg', 'syahmisar@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 4, 1),
(8, '197306161993031004', 'I GEDE RENASA, S.H.,M.H.', 'Denpasar, Kota (Denpasar)', '1973-06-16', 2, 4, 1, 12, '08128136820', 10, 10, 'pnju-1628346034.jpg', 'igederenasa@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 4, 1),
(9, '196112151988032004', 'ERLY SOELISTYARINI, S.H., M.Hum.', 'Kediri, Kabupaten (Ngasem)', '1961-12-15', 1, 1, 2, 16, '087865253724', 3, 3, 'pnju-1628346052.jpg', 'erlysoelistyarni@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(10, '195702161986121001', 'HARAN TARIGAN, S.H.', 'Asahan, Kabupaten (Kisaran)', '1957-02-16', 2, 3, 1, 16, '081219161119', 3, 3, 'pnju-1628346088.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(11, '196107091988031002', 'R RUDI KINDARTO, S.H.', 'Klaten, Kabupaten (Klaten)', '1961-07-09', 1, 1, 1, 16, '081341173535', 3, 3, 'pnju-1628346105.jpg', 'rudikindarto@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(12, '195804061982031003', 'Drs. TUGIYANTO, Bc.Ip., S.H., M.H.', 'Yogyakarta, Kota (Yogyakarta)', '1958-04-06', 1, 1, 1, 16, '081329628880', 3, 3, 'pnju-1628346122.jpg', 'tugiyanto1958@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(13, '195901011986121001', 'LEBANUS SINURAT, S.H., M.H.', 'Asahan, Kabupaten (Kisaran)', '1959-01-01', 1, 1, 1, 16, '081357694608', 3, 3, 'pnju-1628346134.jpg', 'lebanussinurat@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(14, '196410151992121001', 'AGUNG PURBANTORO, S.H., M.H.', 'Surakarta, Kota (Surakarta)', '1964-10-15', 1, 2, 1, 15, '081369231729', 3, 3, 'pnju-1628346154.jpg', 'agung.wididharma@gmail.com', '$2y$10$CIMJZ87TTvfmyeROnSS7WuouDkuPTmg3KPC9xUFKEoD8Y1nrM3qhu', 3, 1),
(15, '196305231992121001', 'BOKO, S.H., M.H.', 'Surakarta, Kota (Surakarta)', '1963-05-23', 1, 2, 1, 15, '081335635688', 3, 3, 'pnju-1628346177.jpg', 'boko@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(16, '196605151996031004', 'SRUTOPO MULYONO, SH', 'Magelang, Kota (Magelang)', '1966-05-05', 1, 1, 1, 15, '081274513418', 3, 3, 'pnju-1628346194.jpg', 'srutopo_mulyono@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(17, '196803251996031003', 'AGUS DARWANTA, S.H.', 'Sukoharjo, Kabupaten (Sukoharjo)', '1968-03-25', 1, 1, 1, 15, '081391357725', 3, 3, 'pnju-1628346208.jpg', 'agusdarwanta@yahoo.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(18, '196409091992121001', 'TIARES SIRAIT, S.H, M.H', 'Tapanuli Utara, Kabupaten (Tarutung)', '1964-09-09', 1, 2, 1, 15, '081373398935', 3, 3, 'pnju-1628346246.jpg', 'tiares.sirait@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(19, '196512311987031032', 'MASKUR, SH.', 'Bima, Kabupaten (Woha)', '1965-12-31', 1, 1, 1, 15, '082154680912', 3, 3, 'pnju-1628346262.png', 'maskur.muhdar@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(20, '196712181994031006', 'DJUYAMTO, S.H.', 'Sukoharjo, Kabupaten (Sukoharjo)', '1967-12-18', 1, 1, 1, 15, '082114192278', 3, 3, 'pnju-1628346289.jpg', 'joe.hadisasminto@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(21, '196511111992121001', 'PURNAWAN NARSONGKO, S.H.', 'Purbalingga, Kabupaten (Purbalingga)', '1965-11-11', 1, 1, 1, 15, '081227089394', 3, 3, 'pnju-1628346329.jpg', 'ipungpurnawan@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(22, '196708311996031001', 'RUDI FAKHRUDIN ABBAS, SH', 'Demak, Kabupaten (Demak)', '1967-08-31', 1, 1, 1, 15, '081927292555', 3, 3, 'pnju-1628346344.jpg', 'rudi.fakhrudin@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(23, '197006061996031005', 'BUDIARTO, S.H.', 'Banjarnegara, Kabupaten (Banjarnegara)', '1970-06-06', 1, 1, 1, 15, '081390177773', 3, 3, 'pnju-1628346359.jpg', 'budiarto187@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(24, '196212311992121002', 'FAHZAL HENDRI, S.H., M.H.', 'Tanah Datar, Kabupaten (Batusangkar)', '1962-12-31', 1, 1, 1, 15, '082179481111', 3, 3, 'pnju-1628349262.jpg', 'fahzalhendri1962@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 3),
(25, '196405021992121001', 'H. SUTAJI, S.H., MH.', 'Lumajang, Kabupaten (Lumajang)', '1964-05-02', 1, 1, 1, 15, '081236507777', 3, 3, 'pnju-1628346393.jpg', 'tajiebantul@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(26, '196401291992121001', 'DODONG IMAN RUSDANI, S.H., M.H.', 'Kuningan, Kabupaten (Kuningan)', '1964-01-29', 1, 1, 1, 15, '082214403712', 3, 3, 'pnju-1628346414.jpg', 'dodongiman64@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(27, '196312291992121001', 'TAUFAN MANDALA, SH., M.Hum', 'Kediri, Kabupaten (Ngasem)', '1963-12-29', 1, 1, 1, 15, '081217895888', 3, 3, 'pnju-1628346432.jpg', 'taufan.mandala1963@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(28, '196503251992121001', 'TUMPANULI MARBUN, S.H., M.H.', 'Humbang Hasundutan, Kabupaten (Dolok Sanggul)', '1965-03-25', 1, 1, 1, 15, '081335225650', 3, 3, 'pnju-1628346454.jpg', 'marbunhkm@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(29, '196811181992121001', 'RIANTO ADAM PONTOH, S.H., M.Hum.', 'Manado, Kota (Manado)', '1968-11-18', 1, 1, 1, 15, '081232783212', 3, 3, 'pnju-1628346479.jpg', 'riantoadampontoh1@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(30, '197305022000031002', 'R HENDY NURCAHYO SAPUTRO, SH.,M.Hum', 'Yogyakarta, Kota (Yogyakarta)', '1973-05-02', 1, 1, 1, 14, '085249306242', 3, 3, 'pnju-1628346503.jpg', 'hendy.nurcahyo@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(31, '197410122000031001', 'BENNY OCTAVIANUS, SH.,MH.', 'Jakarta Timur, Kota (Jakarta Timur)', '1974-10-12', 1, 2, 1, 14, '081293962030', 3, 3, 'pnju-1628346541.jpg', 'benny.octavianus@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(32, '197608272001121002', 'AGUS ARDIANSYAH, S.Sos., MH.', 'Palembang, Kota (Palembang)', '1976-08-27', 2, 1, 1, 13, '085267031075', 7, 7, 'pnju-1625564292.jpg', 'ayahe_nra@yahoo.co.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 2, 3),
(33, '1955110902201210016', 'Drs SUTARDJO, MSi,', '-', '1955-11-09', 3, 1, 1, 18, '-', 4, 4, 'pnju-1628347001.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(34, '1957062502201210007', 'GANJIL SUNARTO, SH, MM', '-', '1957-06-25', 3, 1, 1, 18, '085773320009', 4, 4, 'pnju-1628347018.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(35, '1976100802202002014', 'HENDRA ADI PRAMONO, SH, MH', '-', '1976-10-08', 3, 1, 1, 18, '081398621845', 4, 4, 'pnju-1628347050.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(36, '197806122006042003', 'YUNIASIH WINDADI, S.E.', 'Jakarta Utara, Kota (Jakarta Utara)', '1978-06-12', 2, 1, 2, 12, '081284923373', 14, 14, 'pnju-1625565859.jpg', 'yuniasih_windadi@yahoo.com', '$2y$10$tix3Svuxzp6tMCZ5uBTgTuVubugp6CX6E2HE5dZ6cP9yZYRsjFMAu', 4, 1),
(37, '198904062012121002', 'IRHAM HANIF, SH.,MH', 'Cirebon, Kota (Cirebon)', '1989-04-06', 2, 1, 1, 11, '081288532650', 13, 13, 'pnju-1628347108.jpg', 'irhamhanif@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 3),
(38, '198411262012121002', 'H. ABDUL HADI, SH., MH', 'Palembang, Kota (Palembang)', '1984-11-26', 2, 1, 1, 11, '085267004545', 12, 12, 'pnju-1628347125.jpg', 'dul_trihatmojo@yahoo.co.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 4, 1),
(39, '196102061982031002', 'BAMBANG SETYAWAN, SH., MH.', 'Sleman, Kabupaten (Sleman)', '1961-02-06', 2, 2, 1, 13, '08128102201', 6, 15, 'pnju-1628347138.jpg', 'bamsetya61@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 3),
(40, '196509271994031005', 'HULMAN PANGGABEAN, S.H., M.H.', 'Tapanuli Tengah, Kabupaten (Pandan)', '1965-09-27', 2, 3, 1, 13, '08119578027', 6, 15, 'pnju-1628347159.jpg', 'hulman27gabe@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(41, '196212071985031007', 'PARMIN, S.H., M.H', 'Bantul, Kabupaten (Bantul)', '1962-12-07', 2, 1, 1, 13, '085100835847', 15, 15, 'pnju-1628347178.jpg', 'parminsh38@yahoo.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(42, '196412201987031001', 'JOHNSON RICARDO HALOMOAN M, SH.,MH.', 'Jakarta Timur, Kota (Jakarta Timur)', '1964-12-20', 2, 3, 1, 13, '081314680656', 15, 15, 'pnju-1628347214.jpg', 'ricardojohnson9602@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(43, '196605021986022001', 'ISNAENI BUDI ASTUTI, S.H., M.H.', 'Jakarta Barat, Kota (Jakarta Barat)', '1966-05-02', 2, 1, 2, 13, '081380761069', 15, 15, 'pnju-1628347235.jpg', 'isnaeni.budiastuti@yahoo.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(44, '196701231992062001', 'YETTI, S.H., M.H', '(UJUNG PANDANG)', '1967-01-23', 2, 1, 2, 13, '081282314488', 15, 15, 'pnju-1628347548.jpg', 'yetti2301@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 3),
(45, '196806231989032001', 'RUSTIANI, S.H., M.H.', 'Tapanuli Selatan, Kabupaten (Sipirok)', '1968-06-23', 2, 3, 2, 13, '081318669649', 15, 15, 'pnju-1628347273.jpg', 'rustianinaibaho@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(46, '196507091988031001', 'DOLY SIREGAR, S.H.', 'Banjarmasin, Kota (Banjarmasin)', '1965-07-09', 2, 3, 1, 12, '08128884501', 15, 15, 'pnju-1628347292.jpg', 'dolysiregar72@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(47, '196202061980111001', 'WAHMUADI, SH', 'Temanggung, Kabupaten (Temanggung)', '1962-02-06', 2, 1, 1, 12, '081806793972', 15, 15, 'pnju-1628347308.jpg', 'wahmuadi@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 3),
(48, '196902261993031001', 'BUDHYAWAN KRISTIANTO, SH', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1969-02-26', 2, 3, 1, 12, '082159329763', 15, 15, 'pnju-1628347338.jpg', 'budhyawan@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(49, '197303142001122001', 'UMI PARMINI, S.H', 'Jakarta Barat, Kota (Jakarta Barat)', '1973-03-14', 2, 1, 2, 12, '081385222345', 15, 15, 'pnju-1628347388.jpg', 'umiparmini@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(50, '196310311985032002', 'SUKARTINI, S.H.', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1963-10-31', 2, 1, 2, 12, '081295001092', 15, 15, 'pnju-1628347405.jpg', 'sekartini3110@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(51, '196310131988032002', 'SULISTYONINGSIH, SH', 'Lamongan, Kabupaten (Lamongan)', '1963-10-16', 2, 1, 2, 12, '081294095225', 15, 15, 'pnju-1628347425.jpg', 'sulistyoningsih1310@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(52, '196404201987032001', 'YETI SULISTIATI, SH', 'Tasikmalaya, Kabupaten (Singaparna)', '1964-04-20', 2, 1, 2, 12, '085291926006', 15, 15, 'pnju-1628347442.jpg', 'yeti.sulistiati1964@yahoo.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(53, '196606191992031005', 'BENEDICTUS PERETO LEDJAB, S.H.', 'Tangerang, Kabupaten (Tigaraksa)', '1966-06-19', 2, 2, 1, 12, '081905175500', 15, 15, 'pnju-1628347463.jpg', 'bento.bt75@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(54, '196808111989031003', 'SAPTO SUPRIO, S.H.', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1968-08-11', 2, 1, 1, 12, '085786528314', 15, 15, 'pnju-1628347482.jpg', 'saptosuprio@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(55, '196910041998031006', 'MIRWANSYAH, SH', 'Jakarta Timur, Kota (Jakarta Timur)', '1969-10-04', 2, 1, 1, 12, '085884254483', 15, 15, 'pnju-1628347498.jpg', 'mirwansyah.pp@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 3),
(56, '197305172006041002', 'ARI PALTI SIREGAR, S.T., S.H., M.H.', 'Pematangsiantar, Kota (Pematangsiantar)', '1973-05-17', 2, 2, 1, 12, '081389687686', 15, 15, 'pnju-1628347530.jpg', 'paltiari@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(57, '198011192006032001', 'ASIH NOVIASARI, S.H., M.H', 'Banjarmasin, Kota (Banjarmasin)', '1980-11-19', 2, 1, 2, 12, '081288123488', 15, 15, 'pnju-1628347571.jpg', 'pinky_suwardi@yahoo.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(58, '198205052006041018', 'RESYA, S.H.,M.H.', 'Jakarta Barat, Kota (Jakarta Barat)', '1982-05-05', 2, 1, 1, 12, '081977667899', 15, 15, 'pnju-1628347607.jpg', 'resyajakut11@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(59, '198208312007042001', 'ANITA PURWITA SARI, SH, MH', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1982-08-31', 2, 1, 2, 12, '087777399888', 15, 15, 'pnju-1628347630.jpg', 'purwitaanita@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(60, '196308271985031005', 'TRISNADI, Sm.Hk', 'Jakarta Barat, Kota (Jakarta Barat)', '1963-08-27', 2, 1, 1, 12, '081380644226', 15, 15, 'pnju-1628347660.jpg', 'trisnadi406@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(61, '196710111993031007', 'BUDI UTOYO, S.H.', 'Purworejo, Kabupaten (Purworejo)', '1967-10-11', 2, 1, 1, 11, '081294582449', 15, 15, 'pnju-1628347680.jpg', 'budiutoyo67@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(62, '196712141994031003', 'HERWIN PANCATIAWAN, SH., MH', 'Jakarta Timur, Kota (Jakarta Timur)', '1967-12-14', 2, 1, 1, 11, '081287393487', 15, 15, 'pnju-1628347704.jpg', 'herwinpancatiawan@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(63, '196905071993031003', 'JUHRI, SH', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1969-05-07', 2, 1, 1, 11, '085884135361', 15, 15, 'pnju-1628347724.jpg', 'juhriuhuy@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(64, '197704052009122001', 'HARIYANTI PAELORI, SH.MH', 'Makassar, Kota (Makassar)', '1977-04-05', 2, 1, 2, 11, '087716386822', 15, 15, 'pnju-1628347743.jpg', 'hariyanti2009@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(65, '197806252002121003', 'BOBI RAHMAN SIAHAAN, SH', 'Asahan, Kabupaten (Kisaran)', '1978-06-25', 2, 1, 1, 11, '081382152035', 15, 15, 'pnju-1628347760.jpg', 'bobirahman366@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(66, '197904192003121002', 'HENDRA GUNAWAN, SH', 'Sukabumi, Kabupaten (Palabuhanratu)', '1979-04-19', 2, 1, 1, 11, '082113454855', 15, 15, '30339.jpg', 'hendragunawanpwk@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(67, '198408212006041001', 'MUHAMMAD IHSAN, SH', 'Jakarta Utara, Kota (Jakarta Utara)', '1984-08-21', 2, 1, 1, 11, '081281806945', 15, 15, 'pnju-1628347779.jpg', 'ihsan_182@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(68, '198701022009122005', 'EFA CENDRAKASIH, SH', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1987-01-02', 2, 2, 1, 11, '08118802615', 15, 15, 'pnju-1628347800.jpg', 'data.paniterapengganti@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(69, '197306252001122001', 'ELI SUSILAWATI, SH, MH', 'Kuningan, Kabupaten (Kuningan)', '1973-06-25', 2, 1, 2, 12, '087776667876', 16, 16, 'pnju-1628347822.jpg', 'elisusilawati40@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 3),
(70, '198207022006041001', 'H. REKI YOZA AZER, S.E.,MH.', 'Padang, Kota (Padang)', '1982-07-02', 2, 1, 1, 12, '081382023986', 16, 16, 'pnju-1628347849.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(71, '197811132002031001', 'HOKKI AMAN SIDABALOK, SH.,MH', 'Bekasi, Kabupaten (Cikarang)', '1978-11-13', 2, 3, 1, 12, '0218844462', 10, 18, 'pnju-1628347868.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(72, '198112012006041015', 'MUHAMMAD IDRIS HASAN, S.H.', 'Makassar, Kota (Makassar)', '1981-12-01', 2, 1, 1, 12, '081399060500', 16, 16, 'pnju-1628347905.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 3),
(73, '198001252008052001', 'ANI KHAIRANI MISRAINI, S.H.', 'Jakarta Barat, Kota (Jakarta Barat)', '1980-01-25', 2, 1, 2, 11, '080808654351', 9, 19, 'pnju-1628347926.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(74, '198605112012121003', 'FARDO SHAUMEDICK, SH', 'Padang, Kota (Padang)', '1986-05-11', 2, 1, 1, 10, '085365248330', 10, 19, 'pnju-1628347952.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 3),
(75, '198708032012121002', 'ESRON PARTOGI, SH', 'Jakarta Selatan, Kota (Jakarta Selatan)', '1987-08-03', 2, 2, 1, 10, '081294836926', 10, 18, 'pnju-1628347971.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(76, '196305161989032002', 'LIRIS SITORUS', 'Tapanuli Utara, Kabupaten (Tarutung)', '1963-05-16', 2, 3, 1, 10, '081294269674', 12, 20, '22736.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 3),
(77, '199512162020122009', 'ZAHRATUL HUSNA, S.E.', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1995-12-16', 2, 1, 2, 9, '081290717569', 12, 21, 'pnju-1628347994.jpg', 'zahra.husna16@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(78, '199209182020121004', 'RACHMAT SAPUTRA, A.Md.', 'Ogan Komering Ulu, Kabupaten (Baturaja)', '1992-09-08', 2, 1, 1, 7, '082124242565', 10, 19, '39073.jpg', 'rachmat.saputra18@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(79, '198807292009041001', 'ICHWAN NURMANSYAH', '(Surabaya)', '1988-07-29', 2, 1, 1, 7, '088102509786', 12, 22, 'pnju-1628348247.jpg', 'sucisasitriesi@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(80, '199809162020121003', 'CORNELIUS SIDABUTAR, A.Md.T.', 'Bandar Lampung, Kota (Bandar Lampung)', '1998-09-16', 2, 3, 1, 7, '085348900305', 12, 23, 'pnju-1628348265.jpg', 'none.cornell@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(81, '196503062014081001', 'TRIMADA', 'Jakarta Timur, Kota (Jakarta Timur)', '1965-03-06', 2, 1, 1, 6, '081383392309', 8, 24, 'pnju-1628348286.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(82, '197506172014081001', 'SARTONO', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1975-07-17', 2, 1, 1, 6, '082113131171', 12, 25, 'pnju-1628348306.jpg', 'toncesardi@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(83, '198006282014081001', 'ROBERT CHARLES', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1980-06-28', 2, 3, 1, 6, '081291029909', 12, 20, 'pnju-1628348328.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(84, '198611272014081001', 'KAMALUDIN', 'Jakarta Utara, Kota (Jakarta Utara)', '1986-11-27', 2, 1, 1, 9, '085269310334', 8, 24, 'pnju-1628348359.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(85, '196408301988031004', 'IMAM SUWANDI', 'Pandeglang, Kabupaten (Pandeglang)', '1964-08-30', 2, 1, 1, 5, '085711247136', 8, 19, 'pnju-1628348379.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(86, '197106212014081001', 'DADANG KUSNANDAR', 'Kuningan, Kabupaten (Kuningan)', '1971-06-21', 2, 1, 1, 5, '087877497598', 8, 19, 'pnju-1628348401.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(87, '197109262014081002', 'SUKHADIN', 'Banyumas, Kabupaten (Purwokerto)', '1971-09-26', 2, 1, 1, 3, '085921980523', 8, 24, 'pnju-1628348495.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(88, '196705142012121003', 'SUNAJI S', 'Jakarta Timur, Kota (Jakarta Timur)', '1967-05-14', 2, 1, 1, 3, '08170060418', 9, 24, 'pnju-1628348529.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(89, '196605102014081003', 'RATIM', 'Tegal, Kabupaten (Slawi)', '1966-05-10', 2, 1, 1, 3, '081398536061', 14, 26, 'pnju-1628348551.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 3),
(90, '196501042014081001', 'PRIHONO BUDI PRANYOTO', 'Salatiga, Kota (Salatiga)', '1965-01-04', 2, 1, 1, 3, '087800011723', 12, 27, 'pnju-1628348568.jpg', 'prihonobudi12@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(91, '197102172014081001', 'HUSNI TAMRIN', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1971-02-17', 2, 1, 1, 2, '088210433204', 12, 27, 'pnju-1628348584.jpg', 'husnipnju@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(92, '196309091985031006', 'SUNARTO, S.H.', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1963-09-09', 2, 1, 1, 12, '081291744161', 9, 17, 'pnju-1628348617.jpg', 'utarasunarto@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(93, '198401042009122004', 'WIDDY HASTUTI, S.H.,M.H.', 'Purbalingga, Kabupaten (Purbalingga)', '1984-01-04', 2, 1, 2, 11, '08788888500', 1, 17, 'pnju-1628348631.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(94, '196502081984111001', 'LEGITO, SH', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1965-02-08', 2, 1, 1, 11, '0888877788', 8, 17, 'pnju-1628348652.jpg', 'legito.utara@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(95, '198405312009042010', 'DWI PUTRI WIJAYANTHI, S.E.', 'Jakarta Utara, Kota (Jakarta Utara)', '1984-05-31', 2, 1, 2, 11, '082122333484', 14, 17, 'pnju-1625563154.jpg', 'dwi.putri@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(96, '198602032006041002', 'MICHAEL DANANG DWI HENDRA, S.H.', 'Sleman, Kabupaten (Sleman)', '1986-02-03', 2, 2, 1, 11, '085312359559', 10, 17, 'pnju-1628348681.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(97, '197607111999031002', 'JULI GUNAWAN', 'Jakarta Utara, Kota (Jakarta Utara)', '1976-07-11', 2, 1, 1, 10, '08135789505', 8, 28, 'pnju-1628348698.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(98, '196702121988031002', 'SUPAR', 'Boyolali, Kabupaten (Boyolali)', '1967-02-12', 2, 1, 1, 10, '08121334621', 10, 17, 'pnju-1628348712.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(99, '197302212006041001', 'SUDIRMAN, S.H.', 'Jakarta Barat, Kota (Jakarta Barat)', '1973-02-21', 2, 1, 1, 10, '081586372067', 11, 17, 'pnju-1628348731.jpg', 'airaanisa21@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(100, '197708262003122004', 'ARIANY, SH', 'Ambon, Kota (Ambon)', '1977-08-26', 2, 1, 2, 10, '081389496903', 10, 17, 'pnju-1628348753.png', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(101, '198508162009122006', 'GIVENTI HANDI, S.E.', 'Tanjung Pinang, Kota (Tanjung Pinang)', '1985-08-18', 2, 1, 2, 10, '081932660930', 12, 17, 'pnju-1628348769.jpg', 'giventipnju@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(102, '198804052012122003', 'BULAN AYU SAMANTHA, S.H.', 'Metro, Kota (Metro)', '1988-04-05', 2, 1, 2, 10, '082111935818', 10, 17, 'pnju-1628348781.jpg', 'bulan.ayu18@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 3),
(103, '196812022012121002', 'DONGO SABAR SUTRISNO', 'Wonogiri, Kabupaten (Wonogiri)', '1968-12-02', 2, 1, 1, 6, '087888607666', 8, 17, 'pnju-1628348797.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(104, '195912211987031007', 'TOGI PARDEDE, S.H., M.H.', 'Toba Samosir, Kabupaten (Balige)', '1959-12-21', 1, 2, 1, 16, '081355229696', 3, 3, 'pnju-1628348812.jpg', 'togipardede@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(105, '196308061994031005', 'MARYONO, S.H., M.Hum.', 'Kulon Progo, Kabupaten (Wates)', '1963-08-06', 1, 1, 1, 15, '081253093974', 3, 3, 'pnju-1628348827.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(109, '197612182006042002', 'YUYUN RUSMULIANTY, SE, M.M.', 'Dompu, Kabupaten (Dompu)', '1976-12-18', 2, 1, 2, 12, '081932857000', 13, 13, 'pnju-1628348868.jpg', 'yuyunrusmulianty@gmail.com', '$2y$10$E81oNgRsfsfO7xMaoymTx.UT09XwcVsBfgadgcG1NWW.J04/aYEq.', 4, 1),
(110, '3213070410000002', 'FIKRI OKTAVIANO', 'Bandung', '2000-10-04', 5, 1, 1, 18, '085934955407', 17, 29, 'pnju-1628326869.jpg', 'fikrioktaviano7@gmail.com', '$2y$10$E81oNgRsfsfO7xMaoymTx.UT09XwcVsBfgadgcG1NWW.J04/aYEq.', 1, 1),
(111, '195408071983031003', 'H. SUNARYO, S.H., M.H.', 'Demak', '1954-08-07', 1, 1, 1, 17, '-', 18, 34, 'pnju-1628349016.jpg', '-', '$2y$10$F7UfHJmSNYHUmCgdR4ujTuhI0QoJrP8aQ/ZV23NROuJDZQoi8H1BC', 2, 1),
(112, '197805192009122004', 'YUSTISIA ANAS, S.E., M.H.', 'Solok, Kota (Solok)', '1978-05-19', 2, 1, 2, 11, '081387403533', 7, 7, 'pnju-1628349203.jpeg', 'yustisiapnjb@gmail.com', '$2y$10$qXQ.t.tmLIQCxGWTLxwmhO6hhKL385cxjs8ZSEyw.gbjZtILET4FK', 2, 1),
(113, '197409071998031005', 'ANDRI HERMINANTO, S.H.', 'Bogor, Kabupaten (Cibinong)', '1974-09-07', 2, 1, 1, 12, '082112656442', 15, 15, 'pnju-1628230038.jpg', 'herminantoandri@gmail.com', '$2y$10$.sNrvE34pm5.5PMGwRg4GO9avZvHggjbRrw75yVnSLP001LykbXhe', 3, 1),
(114, '196904171999031004', 'SCHARLEY POLNAYA, S.H.', 'Ambon, Kota (Ambon)', '1969-04-17', 2, 2, 1, 12, '085211811127', 15, 15, 'pnju-1628230485.jpg', 'scharleyponalya@gmail.com', '$2y$10$kxbgUchYVsthDJBk/jjLV.9SJ1AqQyBTluZSCnUbK9d3aPCmTDt66', 3, 1),
(115, '197009201992031003', 'DAVID SIDABALOK', 'Medan, Kota (Medan)', '1970-09-20', 2, 2, 1, 11, '082162912623', 15, 15, 'pnju-1628230650.jpg', 'davidsidabalok20@gmail.com', '$2y$10$1IGn78ztOBKfMzo2vZC1.O3PBCuWX.LRdwnrxpTJWvxHjTKiF7lZS', 3, 1),
(116, '198411242009041006', 'WAHYU GUNAWAN, S.H., M.H.', 'Bekasi, Kota (Bekasi)', '1984-11-24', 2, 1, 1, 12, '081210000947', 8, 8, 'pnju-1626528970.jpg', 'wahyugunawan245@gmail.com', '$2y$10$SPDHAmwCIsb6goHgEgG3hO9pah7O..Vhe6my9/VLXJ4anGsIt2rie', 4, 1),
(117, '196701091992121001', 'HOTNAR SIMARMATA, S.H., M.H.', 'Tapanuli Utara, Kabupaten (Tarutung)', '1967-01-09', 1, 3, 1, 16, '081344458567', 3, 3, 'pnju-1628394505.jpg', 'hotnarsimarmata67@gmail.com', '$2y$10$6tWzDfkrwpcpasx.UfYD4uvFJpu9oZQYai/uOrZSeZk9bH.WsBvpe', 3, 1),
(118, '196904301991031002', 'EDI JUNAEDI, S.H., M.H.', 'Tangerang, Kabupaten (Tigaraksa)', '1969-04-30', 1, 1, 1, 15, '081369444748', 3, 3, 'pnju-1628394691.jpg', 'edie.junaedi@gmail.com', '$2y$10$XSbPrGvIZvwA4uqMWtjKieNeFX5qXbaOQNgOY9caKaOrkAh7rsxeC', 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`id_role`, `role`) VALUES
(1, 'Administrator'),
(2, 'Pejabat'),
(3, 'User'),
(4, 'Atasan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_token`
--

CREATE TABLE `tbl_user_token` (
  `id_user_token` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user_token`
--

INSERT INTO `tbl_user_token` (`id_user_token`, `email`, `token`, `date_created`) VALUES
(9, 'fikrioktaviano7@gmail.com', 'tLHGVTdL3mjBH3BJfHTIw+o/euAO1oGacOiAabbCGiA=', 1618921332),
(10, 'fikrioktaviano7@gmail.com', 'LfzzOi2ZyRbUvXl08PSrnzu9QM3KZ4EFX229yFsSs1I=', 1618921354),
(11, 'fikri.oktaviano@yahoo.com', 'ZsT39tCr+NFZ08qM+xLm4AEs+Yv0w+cbPFfAzi86drI=', 1618929331),
(12, 'fikrioktaviano7@gmail.com', '9BUmJpaReaEKRoN85ESreQRQj9l65l4PhGPWIAFBAKQ=', 1625578416);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_agama`
--
ALTER TABLE `tbl_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indeks untuk tabel `tbl_cuti_tahunan`
--
ALTER TABLE `tbl_cuti_tahunan`
  ADD PRIMARY KEY (`id_cuti_tahunan`),
  ADD KEY `atasan_id` (`atasan_id`),
  ADD KEY `jenis_cuti_id` (`jenis_cuti_id`);

--
-- Indeks untuk tabel `tbl_cuti_umum`
--
ALTER TABLE `tbl_cuti_umum`
  ADD PRIMARY KEY (`id_cuti_umum`),
  ADD KEY `jenis_cuti_id` (`jenis_cuti_id`),
  ADD KEY `atasan_id` (`atasan_id`);

--
-- Indeks untuk tabel `tbl_golongan_ruang`
--
ALTER TABLE `tbl_golongan_ruang`
  ADD PRIMARY KEY (`id_gol_ruang`);

--
-- Indeks untuk tabel `tbl_hak_cuti_tahunan`
--
ALTER TABLE `tbl_hak_cuti_tahunan`
  ADD PRIMARY KEY (`id_hak_cuti_tahunan`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `tbl_jenis_cuti`
--
ALTER TABLE `tbl_jenis_cuti`
  ADD PRIMARY KEY (`id_jenis_cuti`);

--
-- Indeks untuk tabel `tbl_jenis_kelamin`
--
ALTER TABLE `tbl_jenis_kelamin`
  ADD PRIMARY KEY (`id_jenis_kelamin`);

--
-- Indeks untuk tabel `tbl_jenis_pegawai`
--
ALTER TABLE `tbl_jenis_pegawai`
  ADD PRIMARY KEY (`id_jenis_pegawai`);

--
-- Indeks untuk tabel `tbl_kelola_atasan`
--
ALTER TABLE `tbl_kelola_atasan`
  ADD PRIMARY KEY (`id_atasan`),
  ADD KEY `unit_kerja_id` (`unit_kerja_id`),
  ADD KEY `id_pejabat` (`pejabat_id`),
  ADD KEY `user_id` (`user_id_atasan`);

--
-- Indeks untuk tabel `tbl_kelola_pejabat`
--
ALTER TABLE `tbl_kelola_pejabat`
  ADD PRIMARY KEY (`id_pejabat`),
  ADD KEY `user_id` (`user_id_pejabat`);

--
-- Indeks untuk tabel `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `tbl_unit_kerja`
--
ALTER TABLE `tbl_unit_kerja`
  ADD PRIMARY KEY (`id_unit_kerja`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `gol_ruang_id` (`gol_ruang_id`),
  ADD KEY `unit_kerja_id` (`unit_kerja_id`),
  ADD KEY `jabatan_id` (`jabatan_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `agama_id` (`agama_id`),
  ADD KEY `jenis_pegawai_id` (`jenis_pegawai_id`),
  ADD KEY `jenis_kelamin_id` (`jenis_kelamin_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indeks untuk tabel `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `tbl_user_token`
--
ALTER TABLE `tbl_user_token`
  ADD PRIMARY KEY (`id_user_token`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_agama`
--
ALTER TABLE `tbl_agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_golongan_ruang`
--
ALTER TABLE `tbl_golongan_ruang`
  MODIFY `id_gol_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tbl_hak_cuti_tahunan`
--
ALTER TABLE `tbl_hak_cuti_tahunan`
  MODIFY `id_hak_cuti_tahunan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tbl_jenis_cuti`
--
ALTER TABLE `tbl_jenis_cuti`
  MODIFY `id_jenis_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_jenis_kelamin`
--
ALTER TABLE `tbl_jenis_kelamin`
  MODIFY `id_jenis_kelamin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_jenis_pegawai`
--
ALTER TABLE `tbl_jenis_pegawai`
  MODIFY `id_jenis_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelola_atasan`
--
ALTER TABLE `tbl_kelola_atasan`
  MODIFY `id_atasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelola_pejabat`
--
ALTER TABLE `tbl_kelola_pejabat`
  MODIFY `id_pejabat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_unit_kerja`
--
ALTER TABLE `tbl_unit_kerja`
  MODIFY `id_unit_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_token`
--
ALTER TABLE `tbl_user_token`
  MODIFY `id_user_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_cuti_tahunan`
--
ALTER TABLE `tbl_cuti_tahunan`
  ADD CONSTRAINT `tbl_cuti_tahunan_ibfk_3` FOREIGN KEY (`jenis_cuti_id`) REFERENCES `tbl_jenis_cuti` (`id_jenis_cuti`),
  ADD CONSTRAINT `tbl_cuti_tahunan_ibfk_4` FOREIGN KEY (`atasan_id`) REFERENCES `tbl_kelola_atasan` (`id_atasan`);

--
-- Ketidakleluasaan untuk tabel `tbl_cuti_umum`
--
ALTER TABLE `tbl_cuti_umum`
  ADD CONSTRAINT `tbl_cuti_umum_ibfk_1` FOREIGN KEY (`atasan_id`) REFERENCES `tbl_kelola_atasan` (`id_atasan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_hak_cuti_tahunan`
--
ALTER TABLE `tbl_hak_cuti_tahunan`
  ADD CONSTRAINT `tbl_hak_cuti_tahunan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_kelola_atasan`
--
ALTER TABLE `tbl_kelola_atasan`
  ADD CONSTRAINT `tbl_kelola_atasan_ibfk_1` FOREIGN KEY (`user_id_atasan`) REFERENCES `tbl_user` (`id_user`),
  ADD CONSTRAINT `tbl_kelola_atasan_ibfk_2` FOREIGN KEY (`unit_kerja_id`) REFERENCES `tbl_unit_kerja` (`id_unit_kerja`),
  ADD CONSTRAINT `tbl_kelola_atasan_ibfk_3` FOREIGN KEY (`pejabat_id`) REFERENCES `tbl_kelola_pejabat` (`id_pejabat`);

--
-- Ketidakleluasaan untuk tabel `tbl_kelola_pejabat`
--
ALTER TABLE `tbl_kelola_pejabat`
  ADD CONSTRAINT `tbl_kelola_pejabat_ibfk_1` FOREIGN KEY (`user_id_pejabat`) REFERENCES `tbl_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`jabatan_id`) REFERENCES `tbl_jabatan` (`id_jabatan`),
  ADD CONSTRAINT `tbl_user_ibfk_2` FOREIGN KEY (`jenis_pegawai_id`) REFERENCES `tbl_jenis_pegawai` (`id_jenis_pegawai`),
  ADD CONSTRAINT `tbl_user_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `tbl_user_role` (`id_role`),
  ADD CONSTRAINT `tbl_user_ibfk_4` FOREIGN KEY (`unit_kerja_id`) REFERENCES `tbl_unit_kerja` (`id_unit_kerja`),
  ADD CONSTRAINT `tbl_user_ibfk_5` FOREIGN KEY (`gol_ruang_id`) REFERENCES `tbl_golongan_ruang` (`id_gol_ruang`),
  ADD CONSTRAINT `tbl_user_ibfk_6` FOREIGN KEY (`agama_id`) REFERENCES `tbl_agama` (`id_agama`),
  ADD CONSTRAINT `tbl_user_ibfk_7` FOREIGN KEY (`jenis_kelamin_id`) REFERENCES `tbl_jenis_kelamin` (`id_jenis_kelamin`),
  ADD CONSTRAINT `tbl_user_ibfk_8` FOREIGN KEY (`status_id`) REFERENCES `tbl_status` (`id_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
