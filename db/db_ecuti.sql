-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 13, 2021 at 02:17 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_ecuti`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agama`
--

CREATE TABLE `tbl_agama` (
  `id_agama` int(11) NOT NULL,
  `nama_agama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_agama`
--

INSERT INTO `tbl_agama` (`id_agama`, `nama_agama`) VALUES
(1, 'Islam'),
(2, 'Protestan'),
(3, 'Katolik'),
(4, 'Hindu'),
(5, 'Buddha'),
(6, 'Khonghucu'),
(7, 'Baru');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cuti_tahunan`
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cuti_umum`
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
-- Dumping data for table `tbl_cuti_umum`
--

INSERT INTO `tbl_cuti_umum` (`id_cuti_umum`, `nip`, `jenis_cuti_id`, `alasan`, `tgl_pengajuan`, `tgl_mulai`, `tgl_selesai`, `jml_hari`, `alamat`, `no_telp`, `atasan_id`, `upload_file`, `sts_apv_1`, `sts_apv_2`) VALUES
('T-CU-210706-00001', '198405312009042010', 3, 'Sakit Badan Meriang', '2021-06-25', '2021-06-28', '2021-06-29', 1, 'Jl. Gajah Mada No.17', '081284923373', 10, '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_golongan_ruang`
--

CREATE TABLE `tbl_golongan_ruang` (
  `id_gol_ruang` int(11) NOT NULL,
  `nama_golongan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_golongan_ruang`
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
-- Table structure for table `tbl_hak_cuti_besar`
--

CREATE TABLE `tbl_hak_cuti_besar` (
  `id_hak_cuti_besar` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `n` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `file_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hak_cuti_besar`
--

INSERT INTO `tbl_hak_cuti_besar` (`id_hak_cuti_besar`, `user_id`, `n`, `keterangan`, `file_name`) VALUES
(1, 1, 1, '', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hak_cuti_tahunan`
--

CREATE TABLE `tbl_hak_cuti_tahunan` (
  `id_hak_cuti_tahunan` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `n` int(11) NOT NULL,
  `n_1` int(11) NOT NULL,
  `n_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hak_cuti_tahunan`
--

INSERT INTO `tbl_hak_cuti_tahunan` (`id_hak_cuti_tahunan`, `user_id`, `n`, `n_1`, `n_2`) VALUES
(1, 1, 12, 1, 2),
(2, 2, 12, 0, 0),
(3, 3, 12, 0, 0),
(4, 4, 12, 0, 0),
(5, 5, 12, 0, 0),
(6, 6, 12, 0, 0),
(7, 7, 12, 0, 0),
(8, 8, 12, 0, 0),
(9, 9, 12, 0, 0),
(10, 10, 12, 0, 0),
(11, 11, 12, 0, 0),
(12, 12, 12, 0, 0),
(13, 13, 12, 0, 0),
(14, 14, 12, 0, 0),
(15, 15, 12, 0, 0),
(16, 16, 12, 0, 0),
(17, 17, 12, 0, 0),
(18, 18, 12, 0, 0),
(19, 19, 12, 0, 0),
(20, 20, 12, 0, 0),
(21, 21, 12, 0, 0),
(22, 22, 12, 0, 0),
(23, 23, 12, 0, 0),
(24, 24, 12, 0, 0),
(25, 25, 12, 0, 0),
(26, 26, 12, 0, 0),
(27, 27, 12, 0, 0),
(28, 28, 12, 0, 0),
(29, 29, 12, 0, 0),
(30, 30, 12, 0, 0),
(31, 31, 12, 0, 0),
(32, 32, 10, 10, 1),
(33, 33, 10, 0, 0),
(34, 34, 12, 0, 0),
(35, 35, 12, 0, 0),
(36, 36, 6, 0, 0),
(37, 37, 12, 0, 0),
(38, 38, 12, 0, 0),
(39, 39, 12, 0, 0),
(40, 40, 12, 0, 0),
(41, 41, 12, 0, 0),
(42, 42, 12, 0, 0),
(43, 43, 12, 0, 0),
(44, 44, 12, 0, 0),
(45, 45, 12, 0, 0),
(46, 46, 12, 0, 0),
(47, 47, 12, 0, 0),
(48, 48, 12, 0, 0),
(49, 49, 12, 0, 0),
(50, 50, 12, 0, 0),
(51, 52, 12, 0, 0),
(53, 53, 12, 0, 0),
(54, 54, 12, 0, 0),
(55, 55, 12, 0, 0),
(56, 56, 12, 0, 0),
(57, 57, 12, 0, 0),
(58, 58, 12, 0, 0),
(59, 59, 12, 0, 0),
(60, 60, 12, 0, 0),
(61, 61, 12, 0, 0),
(62, 62, 12, 0, 0),
(63, 63, 12, 0, 0),
(64, 64, 12, 0, 0),
(65, 65, 12, 0, 0),
(66, 66, 12, 0, 0),
(67, 67, 12, 0, 0),
(68, 68, 12, 0, 0),
(69, 69, 12, 0, 0),
(70, 70, 12, 0, 0),
(71, 71, 12, 0, 0),
(72, 72, 12, 0, 0),
(73, 73, 12, 0, 0),
(74, 74, 12, 0, 0),
(75, 75, 12, 0, 0),
(76, 76, 12, 0, 0),
(77, 77, 12, 0, 0),
(78, 78, 12, 0, 0),
(79, 79, 12, 0, 0),
(80, 80, 12, 0, 0),
(81, 81, 12, 0, 0),
(82, 82, 12, 0, 0),
(83, 83, 12, 0, 0),
(84, 84, 12, 0, 0),
(85, 85, 12, 0, 0),
(86, 86, 12, 0, 0),
(87, 87, 12, 0, 0),
(88, 88, 12, 0, 0),
(89, 89, 12, 0, 0),
(90, 90, 12, 0, 0),
(91, 91, 12, 0, 0),
(92, 92, 12, 0, 0),
(93, 93, 12, 0, 0),
(94, 94, 12, 0, 0),
(95, 95, 11, 0, 0),
(96, 96, 12, 0, 0),
(97, 97, 12, 0, 0),
(98, 98, 12, 0, 0),
(99, 99, 12, 0, 0),
(100, 100, 12, 0, 0),
(101, 101, 12, 0, 0),
(102, 102, 12, 0, 0),
(103, 103, 12, 0, 0),
(104, 104, 12, 0, 0),
(105, 105, 12, 0, 0),
(106, 109, 12, 0, 0),
(131, 51, 12, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jabatan`
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
(33, 'Tenaga Sukarela');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_cuti`
--

CREATE TABLE `tbl_jenis_cuti` (
  `id_jenis_cuti` int(11) NOT NULL,
  `nama_jenis_cuti` varchar(40) NOT NULL,
  `jml_kuota_cuti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenis_cuti`
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
-- Table structure for table `tbl_jenis_kelamin`
--

CREATE TABLE `tbl_jenis_kelamin` (
  `id_jenis_kelamin` int(11) NOT NULL,
  `nama_jenis_kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenis_kelamin`
--

INSERT INTO `tbl_jenis_kelamin` (`id_jenis_kelamin`, `nama_jenis_kelamin`) VALUES
(1, 'Laki-Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_pegawai`
--

CREATE TABLE `tbl_jenis_pegawai` (
  `id_jenis_pegawai` int(11) NOT NULL,
  `nama_jenis_pegawai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenis_pegawai`
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
-- Table structure for table `tbl_kelola_atasan`
--

CREATE TABLE `tbl_kelola_atasan` (
  `id_atasan` int(11) NOT NULL,
  `unit_kerja_id` int(11) NOT NULL,
  `user_id_atasan` int(11) NOT NULL,
  `user_nip` varchar(20) NOT NULL,
  `pejabat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelola_atasan`
--

INSERT INTO `tbl_kelola_atasan` (`id_atasan`, `unit_kerja_id`, `user_id_atasan`, `user_nip`, `pejabat_id`) VALUES
(6, 5, 2, '', 1),
(7, 7, 32, '', 2),
(8, 12, 38, '', 9),
(9, 13, 109, '', 9),
(10, 14, 36, '', 9),
(11, 8, 5, '', 3),
(12, 9, 6, '', 3),
(13, 10, 8, '', 3),
(14, 11, 7, '', 3),
(15, 17, 32, '', 2),
(16, 17, 3, '', 1),
(18, 1, 1, '', 1),
(20, 2, 4, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelola_pejabat`
--

CREATE TABLE `tbl_kelola_pejabat` (
  `id_pejabat` int(11) NOT NULL,
  `user_id_pejabat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelola_pejabat`
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
(12, 109);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id_status`, `status`) VALUES
(1, 'Active'),
(2, 'Non Active'),
(3, 'Bloked');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit_kerja`
--

CREATE TABLE `tbl_unit_kerja` (
  `id_unit_kerja` int(11) NOT NULL,
  `nama_unit_kerja` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_unit_kerja`
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
(17, 'Kosong (-)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
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
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nip`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_pegawai_id`, `agama_id`, `jenis_kelamin_id`, `gol_ruang_id`, `no_telp`, `unit_kerja_id`, `jabatan_id`, `photo`, `email`, `password`, `role_id`, `status_id`) VALUES
(1, '196501151992121001', 'PUJI HARIAN, S.H, M.Hum.', 'Blitar, Kabupaten (Kanigoro)', '1965-01-15', 1, 1, 1, 16, '082232051166', 1, 1, 'pnju-1625562757.jpg', 'topanmeuren@gmail.com', '$2y$10$y8rkkyjsXVSekwz1UYOFaOooAJIPDU/aIq.7KJ9yHxiVoyKhZLKpe', 2, 1),
(2, '196410081986032001', 'ROSNI, S.Sos., M.Pd.', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1964-10-08', 2, 1, 2, 15, '081383062154', 5, 5, '22638.jpg', 'rosni0810@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 2, 1),
(3, '196201251983031003', 'YANWITRA, S.H., M.H.', 'Bukittinggi, Kota (Bukittinggi)', '1962-01-25', 2, 1, 1, 14, '08128115440', 6, 6, '17413.jpg', 'yanwitra@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 4, 1),
(4, '196601281992121001', 'SOHE, S.H., M.H.', 'Bangka, Kabupaten (Sungai Liat)', '1966-01-28', 1, 1, 1, 15, '082167529833', 2, 2, '23877.jpeg', 'soheshmh@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(5, '196302131989031003', 'MOHAMMAD NAJIB, SH, MH', 'Jakarta Timur, Kota (Jakarta Timur)', '1963-02-13', 2, 1, 1, 13, '081388172709', 8, 8, '20766.jpg', 'mohhammadnajib@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(6, '196709041989032001', 'LINDAWATI SERIKIT, S.H., M.H.', 'Jakarta Selatan, Kota (Jakarta Selatan)', '1967-09-04', 2, 2, 2, 13, '0818793764', 9, 9, '25048.jpeg', 'lindawatiseri77@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(7, '197605052000121004', 'SYAHMISAR, SH., MH.', 'Ogan Komering Ulu Timur, Kabupaten (Martapura)', '1976-05-05', 2, 1, 1, 13, '081281121177', 11, 11, '29090.jpg', 'syahmisar@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(8, '197306161993031004', 'I GEDE RENASA, S.H.,M.H.', 'Denpasar, Kota (Denpasar)', '1973-06-16', 2, 4, 1, 12, '08128136820', 10, 10, '28140_28140.jpg', 'igederenasa@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(9, '196112151988032004', 'ERLY SOELISTYARINI, S.H., M.Hum.', 'Kediri, Kabupaten (Ngasem)', '1961-12-15', 1, 1, 2, 16, '087865253724', 3, 3, '881.jpg', 'erlysoelistyarni@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(10, '195702161986121001', 'HARAN TARIGAN, S.H.', 'Asahan, Kabupaten (Kisaran)', '1957-02-16', 2, 3, 1, 16, '081219161119', 3, 3, '3121.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(11, '196107091988031002', 'R RUDI KINDARTO, S.H.', 'Klaten, Kabupaten (Klaten)', '1961-07-09', 1, 1, 1, 16, '081341173535', 3, 3, '14506_14506.jpg', 'rudikindarto@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(12, '195804061982031003', 'Drs. TUGIYANTO, Bc.Ip., S.H., M.H.', 'Yogyakarta, Kota (Yogyakarta)', '1958-04-06', 1, 1, 1, 16, '081329628880', 3, 3, '14911.jpg', 'tugiyanto1958@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(13, '195901011986121001', 'LEBANUS SINURAT, S.H., M.H.', 'Asahan, Kabupaten (Kisaran)', '1959-01-01', 1, 1, 1, 16, '081357694608', 3, 3, '30866.jpg', 'lebanussinurat@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(14, '196410151992121001', 'AGUNG PURBANTORO, S.H., M.H.', 'Surakarta, Kota (Surakarta)', '1964-10-15', 1, 2, 1, 15, '081369231729', 3, 3, '3051.jpg', 'agung.wididharma@gmail.com', '$2y$10$CIMJZ87TTvfmyeROnSS7WuouDkuPTmg3KPC9xUFKEoD8Y1nrM3qhu', 3, 1),
(15, '196305231992121001', 'BOKO, S.H., M.H.', 'Surakarta, Kota (Surakarta)', '1963-05-23', 1, 2, 1, 15, '081335635688', 3, 3, '5860_5860.jpg', 'boko@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(16, '196605151996031004', 'SRUTOPO MULYONO, SH', 'Magelang, Kota (Magelang)', '1966-05-05', 1, 1, 1, 15, '081274513418', 3, 3, '8712.jpg', 'srutopo_mulyono@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(17, '196803251996031003', 'AGUS DARWANTA, S.H.', 'Sukoharjo, Kabupaten (Sukoharjo)', '1968-03-25', 1, 1, 1, 15, '081391357725', 3, 3, '9030.jpg', 'agusdarwanta@yahoo.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(18, '196409091992121001', 'TIARES SIRAIT, S.H, M.H', 'Tapanuli Utara, Kabupaten (Tarutung)', '1964-09-09', 1, 2, 1, 15, '081373398935', 3, 3, '9507.jpg', 'tiares.sirait@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(19, '196512311987031032', 'MASKUR, SH.', 'Bima, Kabupaten (Woha)', '1965-12-31', 1, 1, 1, 15, '082154680912', 3, 3, '10067_10067.png', 'maskur.muhdar@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(20, '196712181994031006', 'DJUYAMTO, S.H.', 'Sukoharjo, Kabupaten (Sukoharjo)', '1967-12-18', 1, 1, 1, 15, '082114192278', 3, 3, '10215.jpg', 'joe.hadisasminto@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(21, '196511111992121001', 'PURNAWAN NARSONGKO, S.H.', 'Purbalingga, Kabupaten (Purbalingga)', '1965-11-11', 1, 1, 1, 15, '081227089394', 3, 3, '11886.jpg', 'ipungpurnawan@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(22, '196708311996031001', 'RUDI FAKHRUDIN ABBAS, SH', 'Demak, Kabupaten (Demak)', '1967-08-31', 1, 1, 1, 15, '081927292555', 3, 3, '18775.jpg', 'rudi.fakhrudin@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(23, '197006061996031005', 'BUDIARTO, S.H.', 'Banjarnegara, Kabupaten (Banjarnegara)', '1970-06-06', 1, 1, 1, 15, '081390177773', 3, 3, '18999.jpg', 'budiarto187@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(24, '196212311992121002', 'FAHZAL HENDRI, S.H., M.H.', 'Tanah Datar, Kabupaten (Batusangkar)', '1962-12-31', 1, 1, 1, 15, '082179481111', 3, 3, '20659.jpg', 'fahzalhendri1962@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 3),
(25, '196405021992121001', 'H. SUTAJI, S.H., MH.', 'Lumajang, Kabupaten (Lumajang)', '1964-05-02', 1, 1, 1, 15, '081236507777', 3, 3, '21435.jpg', 'tajiebantul@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(26, '196401291992121001', 'DODONG IMAN RUSDANI, S.H., M.H.', 'Kuningan, Kabupaten (Kuningan)', '1964-01-29', 1, 1, 1, 15, '082214403712', 3, 3, '21622.jpg', 'dodongiman64@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(27, '196312291992121001', 'TAUFAN MANDALA, SH., M.Hum', 'Kediri, Kabupaten (Ngasem)', '1963-12-29', 1, 1, 1, 15, '081217895888', 3, 3, '21655.jpg', 'taufan.mandala1963@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(28, '196503251992121001', 'TUMPANULI MARBUN, S.H., M.H.', 'Humbang Hasundutan, Kabupaten (Dolok Sanggul)', '1965-03-25', 1, 1, 1, 15, '081335225650', 3, 3, '23152.jpg', 'marbunhkm@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(29, '196811181992121001', 'RIANTO ADAM PONTOH, S.H., M.Hum.', 'Manado, Kota (Manado)', '1968-11-18', 1, 1, 1, 15, '081232783212', 3, 3, '25883.jpg', 'riantoadampontoh1@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(30, '197305022000031002', 'R HENDY NURCAHYO SAPUTRO, SH.,M.Hum', 'Yogyakarta, Kota (Yogyakarta)', '1973-05-02', 1, 1, 1, 14, '085249306242', 3, 3, '11860_11860.jpg', 'hendy.nurcahyo@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(31, '197410122000031001', 'BENNY OCTAVIANUS, SH.,MH.', 'Jakarta Timur, Kota (Jakarta Timur)', '1974-10-12', 1, 2, 1, 14, '081293962030', 3, 3, '28557_28557.jpg', 'benny.octavianus@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(32, '197608272001121002', 'AGUS ARDIANSYAH, S.Sos., MH.', 'Palembang, Kota (Palembang)', '1976-08-27', 2, 1, 1, 13, '085267031075', 7, 7, 'pnju-1625564292.jpg', 'ayahe_nra@yahoo.co.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 2, 1),
(33, '1955110902201210016', 'Drs SUTARDJO, MSi,', '-', '1955-11-09', 3, 1, 1, 18, '-', 4, 4, 'pnju-1616582754.png', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(34, '1957062502201210007', 'GANJIL SUNARTO, SH, MM', '-', '1957-06-25', 3, 1, 1, 18, '085773320009', 4, 4, 'pnju-1616582739.png', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(35, '1976100802202002014', 'HENDRA ADI PRAMONO, SH, MH', '-', '1976-10-08', 3, 1, 1, 18, '081398621845', 4, 4, 'pnju-1618049383.png', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(36, '197806122006042003', 'YUNIASIH WINDADI, S.E.', 'Jakarta Utara, Kota (Jakarta Utara)', '1978-06-12', 2, 1, 2, 12, '081284923373', 14, 14, 'pnju-1625565859.jpg', 'yuniasih_windadi@yahoo.com', '$2y$10$tix3Svuxzp6tMCZ5uBTgTuVubugp6CX6E2HE5dZ6cP9yZYRsjFMAu', 4, 1),
(37, '198904062012121002', 'IRHAM HANIF, SH.,MH', 'Cirebon, Kota (Cirebon)', '1989-04-06', 2, 1, 1, 11, '081288532650', 13, 13, '13720.jpg', 'irhamhanif@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 3),
(38, '198411262012121002', 'H. ABDUL HADI, SH., MH', 'Palembang, Kota (Palembang)', '1984-11-26', 2, 1, 1, 11, '085267004545', 12, 12, '32824.jpg', 'dul_trihatmojo@yahoo.co.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 4, 1),
(39, '196102061982031002', 'BAMBANG SETYAWAN, SH., MH.', 'Sleman, Kabupaten (Sleman)', '1961-02-06', 2, 2, 1, 13, '08128102201', 6, 15, '14241.jpg', 'bamsetya61@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 3),
(40, '196509271994031005', 'HULMAN PANGGABEAN, S.H., M.H.', 'Tapanuli Tengah, Kabupaten (Pandan)', '1965-09-27', 2, 3, 1, 13, '08119578027', 6, 15, '19769.jpg', 'hulman27gabe@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(41, '196212071985031007', 'PARMIN, S.H., M.H', 'Bantul, Kabupaten (Bantul)', '1962-12-07', 2, 1, 1, 13, '085100835847', 15, 15, '20556.jpg', 'parminsh38@yahoo.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(42, '196412201987031001', 'JOHNSON RICARDO HALOMOAN M, SH.,MH.', 'Jakarta Timur, Kota (Jakarta Timur)', '1964-12-20', 2, 3, 1, 13, '081314680656', 15, 15, '22913.jpg', 'ricardojohnson9602@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(43, '196605021986022001', 'ISNAENI BUDI ASTUTI, S.H., M.H.', 'Jakarta Barat, Kota (Jakarta Barat)', '1966-05-02', 2, 1, 2, 13, '081380761069', 15, 15, '24057.jpg', 'isnaeni.budiastuti@yahoo.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(44, '196701231992062001', 'YETTI, S.H., M.H', '(UJUNG PANDANG)', '1967-01-23', 2, 1, 2, 13, '081282314488', 15, 15, '24568.jpg', 'yetti2301@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(45, '196806231989032001', 'RUSTIANI, S.H., M.H.', 'Tapanuli Selatan, Kabupaten (Sipirok)', '1968-06-23', 2, 3, 2, 13, '081318669649', 15, 15, '25629.jpg', 'rustianinaibaho@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(46, '196507091988031001', 'DOLY SIREGAR, S.H.', 'Banjarmasin, Kota (Banjarmasin)', '1965-07-09', 2, 3, 1, 12, '08128884501', 15, 15, '23426.jpg', 'dolysiregar72@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(47, '196202061980111001', 'WAHMUADI, SH', 'Temanggung, Kabupaten (Temanggung)', '1962-02-06', 2, 1, 1, 12, '081806793972', 15, 15, '1285.jpg', 'wahmuadi@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(48, '196902261993031001', 'BUDHYAWAN KRISTIANTO, SH', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1969-02-26', 2, 3, 1, 12, '082159329763', 15, 15, '9626.jpg', 'budhyawan@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(49, '197303142001122001', 'UMI PARMINI, S.H', 'Jakarta Barat, Kota (Jakarta Barat)', '1973-03-14', 2, 1, 2, 12, '081385222345', 15, 15, '11834.jpg', 'umiparmini@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(50, '196310311985032002', 'SUKARTINI, S.H.', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1963-10-31', 2, 1, 2, 12, '081295001092', 15, 15, '17890.jpg', 'sekartini3110@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(51, '196310131988032002', 'SULISTYONINGSIH, SH', 'Lamongan, Kabupaten (Lamongan)', '1963-10-16', 2, 1, 2, 12, '081294095225', 15, 15, '21467.jpg', 'sulistyoningsih1310@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(52, '196404201987032001', 'YETI SULISTIATI, SH', 'Tasikmalaya, Kabupaten (Singaparna)', '1964-04-20', 2, 1, 2, 12, '085291926006', 15, 15, '22035.jpg', 'yeti.sulistiati1964@yahoo.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(53, '196606191992031005', 'BENEDICTUS PERETO LEDJAB, S.H.', 'Tangerang, Kabupaten (Tigaraksa)', '1966-06-19', 2, 2, 1, 12, '081905175500', 15, 15, '24173.jpg', 'bento.bt75@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(54, '196808111989031003', 'SAPTO SUPRIO, S.H.', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1968-08-11', 2, 1, 1, 12, '085786528314', 15, 15, '25724.jpg', 'saptosuprio@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(55, '196910041998031006', 'MIRWANSYAH, SH', 'Jakarta Timur, Kota (Jakarta Timur)', '1969-10-04', 2, 1, 1, 12, '085884254483', 15, 15, '26451.jpg', 'mirwansyah.pp@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(56, '197305172006041002', 'ARI PALTI SIREGAR, S.T., S.H., M.H.', 'Pematangsiantar, Kota (Pematangsiantar)', '1973-05-17', 2, 2, 1, 12, '081389687686', 15, 15, '28113.jpg', '	\r\npaltiari@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(57, '198011192006032001', 'ASIH NOVIASARI, S.H., M.H', 'Banjarmasin, Kota (Banjarmasin)', '1980-11-19', 2, 1, 2, 12, '081288123488', 15, 15, '30925.jpg', 'pinky_suwardi@yahoo.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(58, '198205052006041018', 'RESYA, S.H.,M.H.', 'Jakarta Barat, Kota (Jakarta Barat)', '1982-05-05', 2, 1, 1, 12, '081977667899', 15, 15, '31645.jpg', 'resyajakut11@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(59, '198208312007042001', 'ANITA PURWITA SARI, SH, MH', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1982-08-31', 2, 1, 2, 12, '087777399888', 15, 15, '31761.jpg', 'purwitaanita@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(60, '196308271985031005', 'TRISNADI, Sm.Hk', 'Jakarta Barat, Kota (Jakarta Barat)', '1963-08-27', 2, 1, 1, 12, '081380644226', 15, 15, '21301.jpg', 'trisnadi406@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(61, '196710111993031007', 'BUDI UTOYO, S.H.', 'Purworejo, Kabupaten (Purworejo)', '1967-10-11', 2, 1, 1, 11, '081294582449', 15, 15, '25109.jpg', 'budiutoyo67@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(62, '196712141994031003', 'HERWIN PANCATIAWAN, SH., MH', 'Jakarta Timur, Kota (Jakarta Timur)', '1967-12-14', 2, 1, 1, 11, '081287393487', 15, 15, '25243.jpg', 'herwinpancatiawan@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(63, '196905071993031003', 'JUHRI, SH', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1969-05-07', 2, 1, 1, 11, '085884135361', 15, 15, '26184.jpg', 'juhriuhuy@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(64, '197704052009122001', 'HARIYANTI PAELORI, SH.MH', 'Makassar, Kota (Makassar)', '1977-04-05', 2, 1, 2, 11, '087716386822', 15, 15, '29460.jpg', 'hariyanti2009@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(65, '197806252002121003', 'BOBI RAHMAN SIAHAAN, SH', 'Asahan, Kabupaten (Kisaran)', '1978-06-25', 2, 1, 1, 11, '081382152035', 15, 15, '29954.jpg', 'bobirahman366@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(66, '197904192003121002', 'HENDRA GUNAWAN, SH', 'Sukabumi, Kabupaten (Palabuhanratu)', '1979-04-19', 2, 1, 1, 11, '082113454855', 15, 15, '30339.jpg', 'hendragunawanpwk@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(67, '198408212006041001', 'MUHAMMAD IHSAN, SH', 'Jakarta Utara, Kota (Jakarta Utara)', '1984-08-21', 2, 1, 1, 11, '081281806945', 15, 15, '32685.jpg', 'ihsan_182@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(68, '198701022009122005', 'EFA CENDRAKASIH, SH', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1987-01-02', 2, 2, 1, 11, '08118802615', 15, 15, '33814.jpg', 'data.paniterapengganti@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(69, '197306252001122001', 'ELI SUSILAWATI, SH, MH', 'Kuningan, Kabupaten (Kuningan)', '1973-06-25', 2, 1, 2, 12, '087776667876', 16, 16, '28157.jpg', 'elisusilawati40@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(70, '198207022006041001', 'H. REKI YOZA AZER, S.E.,MH.', 'Padang, Kota (Padang)', '1982-07-02', 2, 1, 1, 12, '081382023986', 16, 16, '31690.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(71, '197811132002031001', 'HOKKI AMAN SIDABALOK, SH.,MH', 'Bekasi, Kabupaten (Cikarang)', '1978-11-13', 2, 3, 1, 12, '0218844462', 10, 18, '30118.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(72, '198112012006041015', 'MUHAMMAD IDRIS HASAN, S.H.', 'Makassar, Kota (Makassar)', '1981-12-01', 2, 1, 1, 12, '081399060500', 16, 16, '29224.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(73, '198001252008052001', 'ANI KHAIRANI MISRAINI, S.H.', 'Jakarta Barat, Kota (Jakarta Barat)', '1980-01-25', 2, 1, 2, 11, '080808654351', 9, 19, '7343.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(74, '198605112012121003', 'FARDO SHAUMEDICK, SH', 'Padang, Kota (Padang)', '1986-05-11', 2, 1, 1, 10, '085365248330', 10, 19, '33514.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 3),
(75, '198708032012121002', 'ESRON PARTOGI, SH', 'Jakarta Selatan, Kota (Jakarta Selatan)', '1987-08-03', 2, 2, 1, 10, '081294836926', 10, 18, '34028.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(76, '196305161989032002', 'LIRIS SITORUS', 'Tapanuli Utara, Kabupaten (Tarutung)', '1963-05-16', 2, 3, 1, 10, '081294269674', 12, 20, '22736.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(77, '199512162020122009', 'ZAHRATUL HUSNA, S.E.', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1995-12-16', 2, 1, 2, 9, '081290717569', 12, 21, '39072.jpg', 'zahra.husna16@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(78, '199209182020121004', 'RACHMAT SAPUTRA, A.Md.', 'Ogan Komering Ulu, Kabupaten (Baturaja)', '1992-09-08', 2, 1, 1, 7, '082124242565', 8, 19, '39073.jpg', 'rachmat.saputra18@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(79, '198807292009041001', 'ICHWAN NURMANSYAH', '(Surabaya)', '1988-07-29', 2, 1, 1, 7, '088102509786', 12, 22, 'pnju-1618039074.jpg', 'sucisasitriesi@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(80, '199809162020121003', 'CORNELIUS SIDABUTAR, A.Md.T.', 'Bandar Lampung, Kota (Bandar Lampung)', '1998-09-16', 2, 3, 1, 7, '085348900305', 12, 23, '39071.jpg', 'none.cornell@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(81, '196503062014081001', 'TRIMADA', 'Jakarta Timur, Kota (Jakarta Timur)', '1965-03-06', 2, 1, 1, 6, '081383392309', 8, 24, '16552.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(82, '197506172014081001', 'SARTONO', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1975-07-17', 2, 1, 1, 6, '082113131171', 12, 25, '28781.jpg', 'toncesardi@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(83, '198006282014081001', 'ROBERT CHARLES', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1980-06-28', 2, 3, 1, 6, '081291029909', 12, 20, '31362.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(84, '198611272014081001', 'KAMALUDIN', 'Jakarta Utara, Kota (Jakarta Utara)', '1986-11-27', 2, 1, 1, 9, '085269310334', 8, 24, '15282.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(85, '196408301988031004', 'IMAM SUWANDI', 'Pandeglang, Kabupaten (Pandeglang)', '1964-08-30', 2, 1, 1, 5, '085711247136', 8, 19, '22556.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(86, '197106212014081001', 'DADANG KUSNANDAR', 'Kuningan, Kabupaten (Kuningan)', '1971-06-21', 2, 1, 1, 5, '087877497598', 8, 19, '27297.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(87, '197109262014081002', 'SUKHADIN', 'Banyumas, Kabupaten (Purwokerto)', '1971-09-26', 2, 1, 1, 3, '085921980523', 8, 24, '27410.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(88, '196705142012121003', 'SUNAJI S', 'Jakarta Timur, Kota (Jakarta Timur)', '1967-05-14', 2, 1, 1, 3, '08170060418', 9, 24, '24804.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(89, '196605102014081003', 'RATIM', 'Tegal, Kabupaten (Slawi)', '1966-05-10', 2, 1, 1, 3, '081398536061', 14, 26, '24078.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 3),
(90, '196501042014081001', 'PRIHONO BUDI PRANYOTO', 'Salatiga, Kota (Salatiga)', '1965-01-04', 2, 1, 1, 3, '087800011723', 12, 27, '23845_23845.jpg', 'prihonobudi12@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(91, '197102172014081001', 'HUSNI TAMRIN', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1971-02-17', 2, 1, 1, 2, '088210433204', 12, 27, '30309.jpg', 'husnipnju@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(92, '196309091985031006', 'SUNARTO, S.H.', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1963-09-09', 2, 1, 1, 12, '081291744161', 9, 17, '21352.jpg', 'utarasunarto@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(93, '198401042009122004', 'WIDDY HASTUTI, S.H.,M.H.', 'Purbalingga, Kabupaten (Purbalingga)', '1984-01-04', 2, 1, 2, 11, '08788888500', 1, 17, '15846.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(94, '196502081984111001', 'LEGITO, SH', 'Jakarta Pusat, Kota (Jakarta Pusat)', '1965-02-08', 2, 1, 1, 11, '0888877788', 8, 17, '23080.jpg', 'legito.utara@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(95, '198405312009042010', 'DWI PUTRI WIJAYANTHI, S.E.', 'Jakarta Utara, Kota (Jakarta Utara)', '1984-05-31', 2, 1, 2, 11, '082122333484', 14, 17, 'pnju-1625563154.jpg', 'dwi.putri@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(96, '198602032006041002', 'MICHAEL DANANG DWI HENDRA, S.H.', 'Sleman, Kabupaten (Sleman)', '1986-02-03', 2, 2, 1, 11, '085312359559', 10, 17, '33409.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(97, '197607111999031002', 'JULI GUNAWAN', 'Jakarta Utara, Kota (Jakarta Utara)', '1976-07-11', 2, 1, 1, 10, '08135789505', 8, 28, '29156.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(98, '196702121988031002', 'SUPAR', 'Boyolali, Kabupaten (Boyolali)', '1967-02-12', 2, 1, 1, 10, '08121334621', 10, 17, '24594.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(99, '197302212006041001', 'SUDIRMAN, S.H.', 'Jakarta Barat, Kota (Jakarta Barat)', '1973-02-21', 2, 1, 1, 10, '081586372067', 11, 17, '28022.jpg', 'airaanisa21@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(100, '197708262003122004', 'ARIANY, SH', 'Ambon, Kota (Ambon)', '1977-08-26', 2, 1, 2, 10, '081389496903', 10, 17, '29611.png', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(101, '198508162009122006', 'GIVENTI HANDI, S.E.', 'Tanjung Pinang, Kota (Tanjung Pinang)', '1985-08-18', 2, 1, 2, 10, '081932660930', 12, 17, '33189.jpg', 'giventipnju@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(102, '198804052012122003', 'BULAN AYU SAMANTHA, S.H.', 'Metro, Kota (Metro)', '1988-04-05', 2, 1, 2, 10, '082111935818', 10, 17, '34209.jpg', 'bulan.ayu18@gmail.com', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(103, '196812022012121002', 'DONGO SABAR SUTRISNO', 'Wonogiri, Kabupaten (Wonogiri)', '1968-12-02', 2, 1, 1, 6, '087888607666', 8, 17, '25897.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(104, '195912211987031007', 'TOGI PARDEDE, S.H., M.H.', 'Toba Samosir, Kabupaten (Balige)', '1959-12-21', 1, 2, 1, 16, '081355229696', 3, 3, '8902.jpg', 'togipardede@mahkamahagung.go.id', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(105, '196308061994031005', 'MARYONO, S.H., M.Hum.', 'Kulon Progo, Kabupaten (Wates)', '1963-08-06', 1, 1, 1, 15, '081253093974', 3, 3, '21224.jpg', '-', '$2y$10$VwMFTcAo1AzUY3nzqqy.zeBkEQkrcavKEokUGyWlCzDgACW0Al7.y', 3, 1),
(109, '197612182006042002', 'YUYUN RUSMULIANTY, SE, M.M.', 'Dompu, Kabupaten (Dompu)', '1976-12-18', 2, 1, 2, 12, '081932857000', 13, 13, 'pnju-1618048884.jpg', 'yuyunrusmulianty@gmail.com', '$2y$10$E81oNgRsfsfO7xMaoymTx.UT09XwcVsBfgadgcG1NWW.J04/aYEq.', 4, 1),
(110, '3213070410000002', 'Fikri Oktaviano', 'Bandung', '2000-10-04', 5, 1, 1, 18, '085934955407', 17, 29, 'pnju-1625570104.png', 'fikrioktaviano7@gmail.com', '$2y$10$E81oNgRsfsfO7xMaoymTx.UT09XwcVsBfgadgcG1NWW.J04/aYEq.', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`id_role`, `role`) VALUES
(1, 'Administrator'),
(2, 'Pejabat'),
(3, 'User'),
(4, 'Atasan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_token`
--

CREATE TABLE `tbl_user_token` (
  `id_user_token` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_token`
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
-- Indexes for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `tbl_cuti_tahunan`
--
ALTER TABLE `tbl_cuti_tahunan`
  ADD PRIMARY KEY (`id_cuti_tahunan`),
  ADD KEY `atasan_id` (`atasan_id`),
  ADD KEY `jenis_cuti_id` (`jenis_cuti_id`);

--
-- Indexes for table `tbl_cuti_umum`
--
ALTER TABLE `tbl_cuti_umum`
  ADD PRIMARY KEY (`id_cuti_umum`),
  ADD KEY `jenis_cuti_id` (`jenis_cuti_id`),
  ADD KEY `atasan_id` (`atasan_id`);

--
-- Indexes for table `tbl_golongan_ruang`
--
ALTER TABLE `tbl_golongan_ruang`
  ADD PRIMARY KEY (`id_gol_ruang`);

--
-- Indexes for table `tbl_hak_cuti_besar`
--
ALTER TABLE `tbl_hak_cuti_besar`
  ADD PRIMARY KEY (`id_hak_cuti_besar`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_hak_cuti_tahunan`
--
ALTER TABLE `tbl_hak_cuti_tahunan`
  ADD PRIMARY KEY (`id_hak_cuti_tahunan`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_jenis_cuti`
--
ALTER TABLE `tbl_jenis_cuti`
  ADD PRIMARY KEY (`id_jenis_cuti`);

--
-- Indexes for table `tbl_jenis_kelamin`
--
ALTER TABLE `tbl_jenis_kelamin`
  ADD PRIMARY KEY (`id_jenis_kelamin`);

--
-- Indexes for table `tbl_jenis_pegawai`
--
ALTER TABLE `tbl_jenis_pegawai`
  ADD PRIMARY KEY (`id_jenis_pegawai`);

--
-- Indexes for table `tbl_kelola_atasan`
--
ALTER TABLE `tbl_kelola_atasan`
  ADD PRIMARY KEY (`id_atasan`),
  ADD KEY `unit_kerja_id` (`unit_kerja_id`),
  ADD KEY `id_pejabat` (`pejabat_id`),
  ADD KEY `user_id` (`user_id_atasan`);

--
-- Indexes for table `tbl_kelola_pejabat`
--
ALTER TABLE `tbl_kelola_pejabat`
  ADD PRIMARY KEY (`id_pejabat`),
  ADD KEY `user_id` (`user_id_pejabat`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tbl_unit_kerja`
--
ALTER TABLE `tbl_unit_kerja`
  ADD PRIMARY KEY (`id_unit_kerja`);

--
-- Indexes for table `tbl_user`
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
-- Indexes for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tbl_user_token`
--
ALTER TABLE `tbl_user_token`
  ADD PRIMARY KEY (`id_user_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_golongan_ruang`
--
ALTER TABLE `tbl_golongan_ruang`
  MODIFY `id_gol_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_hak_cuti_besar`
--
ALTER TABLE `tbl_hak_cuti_besar`
  MODIFY `id_hak_cuti_besar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_hak_cuti_tahunan`
--
ALTER TABLE `tbl_hak_cuti_tahunan`
  MODIFY `id_hak_cuti_tahunan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_jenis_cuti`
--
ALTER TABLE `tbl_jenis_cuti`
  MODIFY `id_jenis_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_jenis_kelamin`
--
ALTER TABLE `tbl_jenis_kelamin`
  MODIFY `id_jenis_kelamin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_jenis_pegawai`
--
ALTER TABLE `tbl_jenis_pegawai`
  MODIFY `id_jenis_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_kelola_atasan`
--
ALTER TABLE `tbl_kelola_atasan`
  MODIFY `id_atasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_kelola_pejabat`
--
ALTER TABLE `tbl_kelola_pejabat`
  MODIFY `id_pejabat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_unit_kerja`
--
ALTER TABLE `tbl_unit_kerja`
  MODIFY `id_unit_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user_token`
--
ALTER TABLE `tbl_user_token`
  MODIFY `id_user_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cuti_tahunan`
--
ALTER TABLE `tbl_cuti_tahunan`
  ADD CONSTRAINT `tbl_cuti_tahunan_ibfk_3` FOREIGN KEY (`jenis_cuti_id`) REFERENCES `tbl_jenis_cuti` (`id_jenis_cuti`),
  ADD CONSTRAINT `tbl_cuti_tahunan_ibfk_4` FOREIGN KEY (`atasan_id`) REFERENCES `tbl_kelola_atasan` (`id_atasan`);

--
-- Constraints for table `tbl_cuti_umum`
--
ALTER TABLE `tbl_cuti_umum`
  ADD CONSTRAINT `tbl_cuti_umum_ibfk_1` FOREIGN KEY (`atasan_id`) REFERENCES `tbl_kelola_atasan` (`id_atasan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_hak_cuti_besar`
--
ALTER TABLE `tbl_hak_cuti_besar`
  ADD CONSTRAINT `tbl_hak_cuti_besar_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id_user`);

--
-- Constraints for table `tbl_hak_cuti_tahunan`
--
ALTER TABLE `tbl_hak_cuti_tahunan`
  ADD CONSTRAINT `tbl_hak_cuti_tahunan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id_user`);

--
-- Constraints for table `tbl_kelola_atasan`
--
ALTER TABLE `tbl_kelola_atasan`
  ADD CONSTRAINT `tbl_kelola_atasan_ibfk_1` FOREIGN KEY (`user_id_atasan`) REFERENCES `tbl_user` (`id_user`),
  ADD CONSTRAINT `tbl_kelola_atasan_ibfk_2` FOREIGN KEY (`unit_kerja_id`) REFERENCES `tbl_unit_kerja` (`id_unit_kerja`),
  ADD CONSTRAINT `tbl_kelola_atasan_ibfk_3` FOREIGN KEY (`pejabat_id`) REFERENCES `tbl_kelola_pejabat` (`id_pejabat`);

--
-- Constraints for table `tbl_kelola_pejabat`
--
ALTER TABLE `tbl_kelola_pejabat`
  ADD CONSTRAINT `tbl_kelola_pejabat_ibfk_1` FOREIGN KEY (`user_id_pejabat`) REFERENCES `tbl_user` (`id_user`);

--
-- Constraints for table `tbl_user`
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
