-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 Mar 2020 pada 06.03
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dilans`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_farmasi`
--

CREATE TABLE `dt_farmasi` (
  `ID_FARMASI` varchar(15) DEFAULT NULL,
  `TANGGAL` varchar(15) NOT NULL,
  `ID_OBAT` varchar(10) NOT NULL,
  `NAMA_OBAT` varchar(20) NOT NULL,
  `SATUAN` varchar(15) NOT NULL,
  `QTY` int(11) NOT NULL,
  `ATURAN` varchar(10) NOT NULL,
  `KETERANGAN` varchar(25) NOT NULL,
  `KODE_PASIEN` varchar(10) NOT NULL,
  `NAMA_LENGKAP` varchar(55) DEFAULT NULL,
  `ID_UNIT` varchar(15) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dt_farmasi`
--

INSERT INTO `dt_farmasi` (`ID_FARMASI`, `TANGGAL`, `ID_OBAT`, `NAMA_OBAT`, `SATUAN`, `QTY`, `ATURAN`, `KETERANGAN`, `KODE_PASIEN`, `NAMA_LENGKAP`, `ID_UNIT`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('FAR000002', '2018-05-20', 'OB0001', 'Paracetamol', 'Batang', 1, '2x1', 'Sesudah makan', '17000001', 'Asfani', 'U002', 0, '16', '2018-05-20 06:41:35'),
('FAR000003', '2018-05-20', 'OB0001', 'Paracetamol', 'Batang', 1, '3x1', 'sesudah makan', '17000004', 'iswandi', 'U001', 0, '16', '2018-05-20 06:42:01'),
('FAR000004', '2018-05-20', 'OB0002', 'Amoxilin', 'Batang', 1, '3x1', 'sesudah makan', '17000001', 'Asfani', 'U002', 0, '16', '2018-05-20 06:42:31'),
('FAR000004', '2018-05-20', 'OB0001', 'Paracetamol', 'Batang', 1, '3x1', 'sesudah makan', '17000001', 'Asfani', 'U002', 0, '16', '2018-05-20 06:42:31'),
('FAR000002', '2018-05-20', 'OB0002', 'Amoxilin', 'Batang', 1, '3x1', 'sesudah makan', '17000001', 'Asfani', 'U002', 0, '16', '2018-05-20 06:41:35'),
('FAR000001', '2018-06-19', 'OB0003 ', 'Amoxilin', 'Batang', 1, '3x1', 'sesudah makan', '17000002', 'sahid', 'U001', 0, '16', '2018-06-19 01:19:06'),
('FAR000005', '2018-05-20', 'OB0001', 'Paracetamol', 'Batang', 1, '3x1', 'sesudah makan', '17000004', 'iswandi', 'U003', 0, '16', '2018-05-20 06:45:30'),
('FAR000005', '2018-05-20', 'OB0002', 'Amoxilin', 'Batang', 1, '3x1', 'sesudah makan', '17000004', 'iswandi', 'U003', 0, '16', '2018-05-20 06:45:30'),
('FAR000006', '2018-05-21', 'OB0001', 'Paracetamol', 'Batang', 1, '2x1', 'sesudah makan', '17000002', 'sahid', 'U001', 0, '16', '2018-05-21 12:54:15'),
('FAR000006', '2018-05-21', 'OB0002', 'Amoxilin', 'Batang', 1, '3x1', 'sesudah makan', '17000002', 'sahid', 'U001', 0, '16', '2018-05-21 12:54:15'),
('FAR000001', '2018-06-19', 'OB0005', 'Konidin', 'Batang', 1, '3x1', 'sesudah makan', '17000002', 'sahid', 'U001', 0, '16', '2018-06-19 01:19:06'),
('FAR000007', '2018-06-29', 'OB0002', 'Amoxilin', 'Batang', 1, '3x1', 'sesudah makan', '17000001', 'Asfani', 'U001', 0, '16', '2018-06-29 13:56:59'),
('FAR000007', '2018-06-29', 'OB0003', 'Bodrex', 'Batang', 1, '3x1', 'sesudah makan', '17000001', 'Asfani', 'U001', 0, '16', '2018-06-29 13:57:00'),
('FAR000008', '2018-07-11', 'OB0001', 'Paracetamol', 'Batang', 1, '3x1', 'sesudah makan', '17000001', 'Asfani', 'U001', 0, '16', '2018-07-11 05:04:30'),
('FAR000008', '2018-07-11', 'OB0005', 'Konidin', 'Batang', 1, '4x1 ', 'sesudah makan', '17000001', 'Asfani', 'U001', 0, '16', '2018-07-11 05:04:30'),
('FAR000009', '2018-07-11', 'OB0001', 'Paracetamol', 'Batang', 1, '3x1', 'sesudah makan', '17000002', 'sahid', 'U001', 0, '16', '2018-07-11 07:30:25'),
('FAR000009', '2018-07-11', 'OB0006', 'biolisin', 'Batang', 1, '3x1', 'sesudah makan', '17000002', 'sahid', 'U001', 0, '16', '2018-07-11 07:30:25'),
('FAR000010', '2018-07-12', 'OB0003', 'Bodrex', 'Batang', 1, '3x1', 'sesudah makan', '17000002', 'sahid', 'U001', 0, '16', '2018-07-12 07:58:36'),
('FAR000010', '2018-07-12', 'OB0004', 'Mixagrip', 'Box', 1, '4x1', 'sesudah makan', '17000002', 'sahid', 'U001', 0, '16', '2018-07-12 07:58:36');

--
-- Trigger `dt_farmasi`
--
DELIMITER $$
CREATE TRIGGER `TG_STOK_OBAT` AFTER INSERT ON `dt_farmasi` FOR EACH ROW BEGIN
UPDATE tb_obat SET STOK=STOK-NEW.QTY WHERE ID_OBAT=NEW.ID_OBAT;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_hasil_lab`
--

CREATE TABLE `dt_hasil_lab` (
  `ID_HASIL_LAB` varchar(15) DEFAULT NULL,
  `TGL_HASIL` date NOT NULL,
  `PEMERIKSAAN_LAB` varchar(55) DEFAULT NULL,
  `ID_CEK_LAB` varchar(15) DEFAULT NULL,
  `PRIKSA` varchar(55) DEFAULT NULL,
  `HASIL` varchar(30) DEFAULT NULL,
  `NILAI_NORMAL` varchar(30) DEFAULT NULL,
  `SATUAN` varchar(30) DEFAULT NULL,
  `KODE_PASIEN` int(15) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dt_hasil_lab`
--

INSERT INTO `dt_hasil_lab` (`ID_HASIL_LAB`, `TGL_HASIL`, `PEMERIKSAAN_LAB`, `ID_CEK_LAB`, `PRIKSA`, `HASIL`, `NILAI_NORMAL`, `SATUAN`, `KODE_PASIEN`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('HLB000002', '2018-05-15', 'Kolestrol Total', 'CK0003', 'Emot', '114,5', '112,0 - 115,0', 'mmg', 17000002, 0, '17', '2018-05-15 04:15:22'),
('HLB000002', '2018-05-15', 'Kolestrol Total', 'CK0004', 'konsot', '0,11', '0,12 - 0,17', 'mmhg', 17000002, 0, '17', '2018-05-15 04:15:22'),
('HLB000001', '2018-05-15', 'Cek darah', 'CK0001', 'Hemoglobin', '13,1', '13,0 - 17,4', 'g/dl', 17000001, 0, '17', '2018-05-15 04:20:53'),
('HLB000001', '2018-05-15', 'Cek darah', 'CK0002', 'Eritrosit', '4,2', '4,4 - 5,5 ', 'juta/mm3', 17000001, 0, '17', '2018-05-15 04:20:53'),
('HLB000001', '2018-05-15', 'Cek darah', 'CK0005', 'konsulit', '45,2', '44,10 - 47-12', 'g/dl', 17000001, 0, '17', '2018-05-15 04:20:53'),
('HLB000003', '2018-07-12', 'Cek darah', 'CK0001', 'Hemoglogin', '12,2-15,6', '13,0 - 17,4', 'g/dl', 17000003, 0, '17', '2018-07-12 08:38:09'),
('HLB000003', '2018-07-12', 'Cek darah', 'CK0002', 'Eritrosit', '2,5 - 4,0', '4,4 - 5,5 ', 'juta/mm3', 17000003, 0, '17', '2018-07-12 08:38:09'),
('HLB000004', '2018-07-12', 'Cek darah', 'CK0001', 'Hemoglogin', '13,0', '13,0 - 17,4', 'g/dl', 17000001, 0, '17', '2018-07-12 08:43:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_pembayaran_lab`
--

CREATE TABLE `dt_pembayaran_lab` (
  `ID_PEMBAYARAN_LAB` varchar(15) DEFAULT NULL,
  `TGL_BAYAR` date NOT NULL,
  `ID_DT_LAB` varchar(15) DEFAULT NULL,
  `NAMA_PEMERIKSAAN` varchar(55) DEFAULT NULL,
  `TARIF` double NOT NULL,
  `KETERANGAN` text NOT NULL,
  `KODE_PASIEN` int(15) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dt_pembayaran_lab`
--

INSERT INTO `dt_pembayaran_lab` (`ID_PEMBAYARAN_LAB`, `TGL_BAYAR`, `ID_DT_LAB`, `NAMA_PEMERIKSAAN`, `TARIF`, `KETERANGAN`, `KODE_PASIEN`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('PBL000002', '2018-06-11', 'DT0001', 'Kolestrol Total', 20000, 'lancar', 17000002, 0, '17', '2018-06-11 04:36:51'),
('PBL000001', '2018-06-11', 'DT0002', 'Cek darah', 20000, 'ok', 17000001, 0, '17', '2018-06-11 04:43:17'),
('PBL000003', '2018-07-12', 'DT0002', 'Cek darah', 20000, 'ok', 17000003, 0, '17', '2018-07-12 08:46:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_pendaftaran_rb`
--

CREATE TABLE `dt_pendaftaran_rb` (
  `ID_DAFTAR_RB` varchar(15) DEFAULT NULL,
  `TGL_MASUK` date NOT NULL,
  `ID_PENUNJANG` varchar(15) DEFAULT NULL,
  `PENUNJANG` varchar(55) DEFAULT NULL,
  `KETERANGAN` text NOT NULL,
  `KODE_PASIEN` int(15) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dt_pendaftaran_rb`
--

INSERT INTO `dt_pendaftaran_rb` (`ID_DAFTAR_RB`, `TGL_MASUK`, `ID_PENUNJANG`, `PENUNJANG`, `KETERANGAN`, `KODE_PASIEN`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('PRB000001', '2018-05-16', 'PIBU0002', 'Visite bidan ', 'perawatan ibu visite bidan per orang', 17000004, 0, '14', '2018-05-16 07:33:01'),
('PRB000001', '2018-05-16', 'PBY0001', 'Tanpa kelainan', 'Perawatan bayi tanpa kelainan perorang atau perhari', 17000004, 0, '14', '2018-05-16 07:33:01'),
('PRB000001', '2018-05-16', 'TDK0001', 'kolf ke 2 dst', 'Tindakan bersalin per kolf 1 pasien ', 17000004, 0, '14', '2018-05-16 07:33:01'),
('PRB000001', '2018-05-16', 'GZS0001', 'As Gizi Seimbang(Mkn 3x)', 'Pemerian as Gizi seimbang makan 3x perorang', 17000004, 0, '14', '2018-05-16 07:33:01'),
('PRB000001', '2018-05-16', 'KM001', 'Anggrek', 'kelas 3 A (1 tempat kamar tidur ), harga 60 rb perhari dan perorang', 17000004, 0, '14', '2018-05-16 07:33:01'),
('PRB000001', '2018-05-16', 'PAR0002', 'Dokter', 'pertolongan partus dokter 50.000 perorang perhari', 17000004, 0, '14', '2018-05-16 07:33:01'),
('PRB000002', '2018-06-20', 'KM001', 'Anggrek', 'kelas 3 A (1 tempat kamar tidur ), harga 60 rb perhari dan perorang', 17000001, 0, '14', '2018-06-20 02:17:30'),
('PRB000002', '2018-06-20', 'PAR0002', 'Dokter', 'pertolongan partus dokter 50.000 perorang perhari', 17000001, 0, '14', '2018-06-20 02:17:31'),
('PRB000002', '2018-06-20', 'PIBU0002', 'Visite bidan ', 'perawatan ibu visite bidan per orang', 17000001, 0, '14', '2018-06-20 02:17:31'),
('PRB000002', '2018-06-20', 'PBY0001', 'Tanpa kelainan', 'Perawatan bayi tanpa kelainan perorang atau perhari', 17000001, 0, '14', '2018-06-20 02:17:31'),
('PRB000002', '2018-06-20', 'TDK0001', 'kolf ke 2 dst', 'Tindakan bersalin per kolf 1 pasien ', 17000001, 0, '14', '2018-06-20 02:17:31'),
('PRB000002', '2018-06-20', 'GZS0001', 'As Gizi Seimbang(Mkn 3x)', 'Pemerian as Gizi seimbang makan 3x perorang', 17000001, 0, '14', '2018-06-20 02:17:31'),
('PRB000003', '2018-06-29', 'KM001', 'Anggrek', 'kelas 3 A (1 tempat kamar tidur ), harga 60 rb perhari dan perorang', 17000001, 0, '14', '2018-06-29 14:10:19'),
('PRB000003', '2018-06-29', 'PAR0001', 'Bidan', 'Pertolongan partus bidan 30.000 per orang', 17000001, 0, '14', '2018-06-29 14:10:19'),
('PRB000003', '2018-06-29', 'PIBU0001', 'Visite Dr umum', 'Perawatan ibu visite  dokter perkunjungan atau per orang', 17000001, 0, '14', '2018-06-29 14:10:19'),
('PRB000003', '2018-06-29', 'PBY0001', 'Tanpa kelainan', 'Perawatan bayi tanpa kelainan perorang atau perhari', 17000001, 0, '14', '2018-06-29 14:10:19'),
('PRB000003', '2018-06-29', 'PBY0001', 'Tanpa kelainan', 'Perawatan bayi tanpa kelainan perorang atau perhari', 17000001, 0, '14', '2018-06-29 14:10:19'),
('PRB000003', '2018-06-29', 'TDK0002', 'Pemberian O2', 'pemberian O2 dengan tarif perjam', 17000001, 0, '14', '2018-06-29 14:10:19'),
('PRB000003', '2018-06-29', 'GZS0002', 'as gizi seimbang(Snack 2x)', 'pemberian as gizi seimbang snack perorang', 17000001, 0, '14', '2018-06-29 14:10:19'),
('PRB000004', '2018-07-12', 'KM001', 'Anggrek', 'kelas 3 A (1 tempat kamar tidur ), harga 60 rb perhari dan perorang', 17000003, 0, '14', '2018-07-12 12:12:43'),
('PRB000004', '2018-07-12', 'PAR0001', 'Bidan', 'Pertolongan partus bidan 30.000 per orang', 17000003, 0, '14', '2018-07-12 12:12:44'),
('PRB000004', '2018-07-12', 'PIBU0001', 'Visite Dr umum', 'Perawatan ibu visite  dokter perkunjungan atau per orang', 17000003, 0, '14', '2018-07-12 12:12:44'),
('PRB000004', '2018-07-12', 'PBY0001', 'Tanpa kelainan', 'Perawatan bayi tanpa kelainan perorang atau perhari', 17000003, 0, '14', '2018-07-12 12:12:44'),
('PRB000004', '2018-07-12', 'TDK0001', 'kolf ke 2 dst', 'Tindakan bersalin per kolf 1 pasien ', 17000003, 0, '14', '2018-07-12 12:12:44'),
('PRB000004', '2018-07-12', 'GZS0001', 'As Gizi Seimbang(Mkn 3x)', 'Pemerian as Gizi seimbang makan 3x perorang', 17000003, 0, '14', '2018-07-12 12:12:44'),
('PRB000005', '2018-07-12', 'KM001', 'Anggrek', 'kelas 3 A (1 tempat kamar tidur ), harga 60 rb perhari dan perorang', 17000003, 0, '14', '2018-07-12 12:53:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_pulang_rb`
--

CREATE TABLE `dt_pulang_rb` (
  `ID_PULANG_RB` varchar(15) DEFAULT NULL,
  `TGL_PULANG` date NOT NULL,
  `ID_PENUNJANG` varchar(15) DEFAULT NULL,
  `PENUNJANG` varchar(55) DEFAULT NULL,
  `TARIF` double NOT NULL,
  `SELAMA` int(11) NOT NULL,
  `SUB_TOTAL` double NOT NULL,
  `KODE_PASIEN` int(15) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dt_pulang_rb`
--

INSERT INTO `dt_pulang_rb` (`ID_PULANG_RB`, `TGL_PULANG`, `ID_PENUNJANG`, `PENUNJANG`, `TARIF`, `SELAMA`, `SUB_TOTAL`, `KODE_PASIEN`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('BRB000001', '2018-05-17', 'PAR0001', 'Bidan', 30000, 1, 30000, 17000004, 0, '14', '2018-05-17 04:19:44'),
('BRB000001', '2018-05-17', 'PIBU0002', 'Visite bidan ', 15000, 1, 15000, 17000004, 0, '14', '2018-05-17 04:19:44'),
('BRB000001', '2018-05-17', 'PBY0001', 'Tanpa kelainan', 5000, 1, 5000, 17000004, 0, '14', '2018-05-17 04:19:44'),
('BRB000001', '2018-05-17', 'TDK0001', 'kolf ke 2 dst', 10000, 1, 10000, 17000004, 0, '14', '2018-05-17 04:19:44'),
('BRB000001', '2018-05-17', 'GZS0001', 'As Gizi Seimbang(Mkn 3x)', 15000, 1, 15000, 17000004, 0, '14', '2018-05-17 04:19:44'),
('BRB000001', '2018-05-17', 'KM001', 'Anggrek', 60000, 1, 60000, 17000004, 0, '14', '2018-05-17 04:19:44'),
('BRB000002', '2018-06-20', 'KM001', 'Anggrek', 60000, 3, 180000, 17000001, 0, '14', '2018-06-20 10:47:49'),
('BRB000002', '2018-06-20', 'PAR0002', 'Dokter', 50000, 3, 150000, 17000001, 0, '14', '2018-06-20 10:47:49'),
('BRB000003', '2018-07-11', 'KM001', 'Anggrek', 60000, 3, 180000, 17000001, 0, '14', '2018-07-11 04:06:53'),
('BRB000003', '2018-07-11', 'PAR0001', 'Bidan', 30000, 3, 90000, 17000001, 0, '14', '2018-07-11 04:06:53'),
('BRB000003', '2018-07-11', 'PIBU0002', 'Visite bidan ', 15000, 3, 45000, 17000001, 0, '14', '2018-07-11 04:06:53'),
('BRB000003', '2018-07-11', 'PBY0001', 'Tanpa kelainan', 5000, 3, 15000, 17000001, 0, '14', '2018-07-11 04:06:53'),
('BRB000003', '2018-07-11', 'TDK0001', 'kolf ke 2 dst', 10000, 3, 30000, 17000001, 0, '14', '2018-07-11 04:06:53'),
('BRB000003', '2018-07-11', 'TDK0001', 'kolf ke 2 dst', 10000, 3, 30000, 17000001, 0, '14', '2018-07-11 04:06:53'),
('BRB000003', '2018-07-11', 'GZS0001', 'As Gizi Seimbang(Mkn 3x)', 15000, 3, 45000, 17000001, 0, '14', '2018-07-11 04:06:53'),
('BRB000004', '2018-07-12', 'KM001', 'Anggrek', 60000, 1, 60000, 17000003, 0, '14', '2018-07-12 12:13:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_resep_obat`
--

CREATE TABLE `dt_resep_obat` (
  `ID_TU_OBAT` varchar(15) DEFAULT NULL,
  `TANGGAL` varchar(15) NOT NULL,
  `ID_OBAT` varchar(10) NOT NULL,
  `NAMA_OBAT` varchar(20) NOT NULL,
  `SATUAN` varchar(15) NOT NULL,
  `QTY` int(11) NOT NULL,
  `ATURAN` varchar(10) NOT NULL,
  `KETERANGAN` varchar(25) NOT NULL,
  `KODE_PASIEN` varchar(10) NOT NULL,
  `NAMA_LENGKAP` varchar(55) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dt_resep_obat`
--

INSERT INTO `dt_resep_obat` (`ID_TU_OBAT`, `TANGGAL`, `ID_OBAT`, `NAMA_OBAT`, `SATUAN`, `QTY`, `ATURAN`, `KETERANGAN`, `KODE_PASIEN`, `NAMA_LENGKAP`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('TUO00002', '2018-06-18', 'OB0003 ', 'Amoxilin', 'Batang', 1, '3x1', 'Sesudah makan', '17000002', 'sahid', 0, '4', '2018-06-18 01:20:22'),
('TUO00005', '2018-06-29', 'OB0001', 'Paracetamol', 'Batang', 1, '3x1', 'sesudah makan', '17000001', 'Asfani', 0, '4', '2018-06-29 13:43:30'),
('TUO00003', '2018-06-18', 'OB0002', 'Bodrex', 'Batang', 1, '2x1', 'sesudah makan', '17000002', 'sahid', 0, '4', '2018-06-18 01:19:23'),
('TUO00004', '2018-06-18', 'OB0002', 'Bodrex', 'Batang', 1, '2x1', 'Sesudah makan', '17000002', 'sahid', 0, '4', '2018-06-18 01:18:26'),
('TUO00004', '2018-06-18', 'OB0001', 'Paracetamol', 'Batang', 1, '2x1', 'sesudah makan', '17000002', 'sahid', 0, '4', '2018-06-18 01:18:26'),
('TUO00005', '2018-06-29', 'OB0005', 'Konidin', 'Batang', 1, '4x1 ', 'sesudah makan', '17000001', 'Asfani', 0, '4', '2018-06-29 13:43:30'),
('TUO00002', '2018-06-18', 'OB0001', 'Paracetamol', 'BOx', 1, '2x1', 'sesudah makan', '17000002', 'sahid', 0, '4', '2018-06-18 01:20:22'),
('TUO00003', '2018-06-18', 'OB0001', 'Paracetamol', 'Batang', 1, '2x1', 'sesudah makan', '17000002', 'sahid', 0, '4', '2018-06-18 01:19:23'),
('TUO00001', '2018-06-10', 'OB0001', 'Paracetamol', 'Batang', 1, '3x1', 'sesudah makan', '17000002', 'Asfani', 0, '4', '2018-06-10 13:43:02'),
('TUO00001', '2018-06-10', 'OB0002', 'Amoxilin', 'Batang', 1, '2x1', 'sesudah makan', '17000002', 'Asfani', 0, '4', '2018-06-10 13:43:02'),
('TUO00004', '2018-06-18', 'OB0003 ', 'Amoxilin', 'Batang', 1, '3x1', 'sesudah makan', '17000002', 'sahid', 0, '4', '2018-06-18 01:18:26'),
('TUO00006', '2018-07-11', 'OB0001', 'Paracetamol', 'Batang', 1, '3x1', 'sesudah makan', '17000002', 'sahid', 0, '4', '2018-07-11 07:24:19'),
('TUO00006', '2018-07-11', 'OB0006', 'biolisin', 'Batang', 1, '3x1', 'sesudah makan', '17000002', 'sahid', 0, '4', '2018-07-11 07:24:19'),
('TUO00007', '2018-07-12', 'OB0003', 'Bodrex', 'Batang', 1, '3x1', 'sesudah makan', '17000002', 'sahid', 0, '4', '2018-07-12 07:46:37'),
('TUO00007', '2018-07-12', 'OB0004', 'Mixagrip', 'Box', 1, '4x1', 'sesudah makan', '17000002', 'sahid', 0, '4', '2018-07-12 07:46:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_resobat_gigi`
--

CREATE TABLE `dt_resobat_gigi` (
  `ID_RESOB_GIGI` varchar(15) DEFAULT NULL,
  `TANGGAL` varchar(15) NOT NULL,
  `ID_OBAT` varchar(10) NOT NULL,
  `NAMA_OBAT` varchar(20) NOT NULL,
  `SATUAN` varchar(15) NOT NULL,
  `QTY` int(11) NOT NULL,
  `ATURAN` varchar(10) NOT NULL,
  `KETERANGAN` varchar(25) NOT NULL,
  `KODE_PASIEN` varchar(10) NOT NULL,
  `NAMA_LENGKAP` varchar(55) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dt_resobat_gigi`
--

INSERT INTO `dt_resobat_gigi` (`ID_RESOB_GIGI`, `TANGGAL`, `ID_OBAT`, `NAMA_OBAT`, `SATUAN`, `QTY`, `ATURAN`, `KETERANGAN`, `KODE_PASIEN`, `NAMA_LENGKAP`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('ROB00003', '2018-05-17', 'OB0002', 'Bodrex', 'Batang', 1, '3x1', 'sesudah makan', '17000002', 'sahid', 0, '5', '2018-05-17 07:21:50'),
('ROB00003', '2018-05-17', 'OB0001', 'Paracetamol', 'BOx', 1, '2x1', 'sesudah makan', '17000002', 'sahid', 0, '5', '2018-05-17 07:21:50'),
(NULL, '2018-05-17', 'OB0005', 'Konidin', 'Batang', 1, '3x1', 'sesudah makan', '17000002', 'sahid', 0, '5', '2018-05-17 07:20:04'),
(NULL, '2018-05-17', 'OB0002', 'Bodrex', 'Batang', 1, '3x1', 'sesudah makan', '17000002', 'sahid', 0, '5', '2018-05-17 07:20:04'),
(NULL, '2018-05-17', 'OB0001', 'Paracetamol', 'BOx', 1, '2x1', 'sesudah makan', '17000002', 'sahid', 0, '5', '2018-05-17 07:20:04'),
('ROB00003', '2018-05-17', 'OB0005', 'Konidin', 'Batang', 1, '3x1', 'sesudah makan', '17000002', 'sahid', 0, '5', '2018-05-17 07:21:50'),
('ROB00002', '2018-05-17', 'OB0002', 'Amoxilin', 'Batang', 1, '3x1', 'sesudah makan', '17000002', 'sahid', 0, '5', '2018-05-17 07:24:12'),
('ROB00001', '2018-05-17', 'OB0003', 'Bodrex', 'Batang', 1, '2x1', 'sesudah makan', '17000002', 'Asfani', 0, '5', '2018-05-17 07:23:52'),
('ROB00001', '2018-05-17', 'OB0002', 'Amoxilin', 'Batang', 1, '3x1', 'sesudah makan', '17000002', 'Asfani', 0, '5', '2018-05-17 07:23:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_resobat_gizi`
--

CREATE TABLE `dt_resobat_gizi` (
  `ID_RESOB_GIZI` varchar(15) DEFAULT NULL,
  `TANGGAL` varchar(15) NOT NULL,
  `ID_OBAT` varchar(10) NOT NULL,
  `NAMA_OBAT` varchar(20) NOT NULL,
  `SATUAN` varchar(15) NOT NULL,
  `QTY` int(11) NOT NULL,
  `ATURAN` varchar(10) NOT NULL,
  `KETERANGAN` varchar(25) NOT NULL,
  `KODE_PASIEN` varchar(10) NOT NULL,
  `NAMA_LENGKAP` varchar(55) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dt_resobat_gizi`
--

INSERT INTO `dt_resobat_gizi` (`ID_RESOB_GIZI`, `TANGGAL`, `ID_OBAT`, `NAMA_OBAT`, `SATUAN`, `QTY`, `ATURAN`, `KETERANGAN`, `KODE_PASIEN`, `NAMA_LENGKAP`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('ROZ00001', '2018-05-18', 'OB0002', 'Bodrex', 'Batang', 1, '2x1', 'sesudah makan', '17000004', 'iswandi', 0, '6', '2018-05-18 07:13:05'),
('ROZ00001', '2018-05-18', 'OB0005', 'Konidin', 'Batang', 1, '3x1', 'sesudah makan', '17000004', 'iswandi', 0, '6', '2018-05-18 07:13:05'),
('ROZ00001', '2018-05-18', 'OB0001', 'Paracetamol', 'BOx', 1, '3x1', 'Sesudah makan', '17000004', 'iswandi', 0, '6', '2018-05-18 07:13:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_resobat_kb`
--

CREATE TABLE `dt_resobat_kb` (
  `ID_RESOB_KB` varchar(15) DEFAULT NULL,
  `TANGGAL` varchar(15) NOT NULL,
  `ID_OBAT` varchar(10) NOT NULL,
  `NAMA_OBAT` varchar(20) NOT NULL,
  `SATUAN` varchar(15) NOT NULL,
  `QTY` int(11) NOT NULL,
  `ATURAN` varchar(10) NOT NULL,
  `KETERANGAN` varchar(25) NOT NULL,
  `KODE_PASIEN` varchar(10) NOT NULL,
  `NAMA_LENGKAP` varchar(55) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dt_resobat_kb`
--

INSERT INTO `dt_resobat_kb` (`ID_RESOB_KB`, `TANGGAL`, `ID_OBAT`, `NAMA_OBAT`, `SATUAN`, `QTY`, `ATURAN`, `KETERANGAN`, `KODE_PASIEN`, `NAMA_LENGKAP`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('ROK00001', '2018-05-17', 'OB0002', 'Bodrex', 'Batang', 1, '3x1', 'sesudah mkan', '17000003', 'Andi nana mariana', 0, '9', '2018-05-17 10:18:34'),
('ROK00001', '2018-05-17', 'OB0001', 'Paracetamol', 'Batang', 1, '3x1', 'sesudah makan', '17000003', 'Andi nana mariana', 0, '9', '2018-05-17 10:18:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_resobat_lansia`
--

CREATE TABLE `dt_resobat_lansia` (
  `ID_RESOB_LANSIA` varchar(15) DEFAULT NULL,
  `TANGGAL` varchar(15) NOT NULL,
  `ID_OBAT` varchar(10) NOT NULL,
  `NAMA_OBAT` varchar(20) NOT NULL,
  `SATUAN` varchar(15) NOT NULL,
  `QTY` int(11) NOT NULL,
  `ATURAN` varchar(10) NOT NULL,
  `KETERANGAN` varchar(25) NOT NULL,
  `KODE_PASIEN` varchar(10) NOT NULL,
  `NAMA_LENGKAP` varchar(55) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dt_resobat_lansia`
--

INSERT INTO `dt_resobat_lansia` (`ID_RESOB_LANSIA`, `TANGGAL`, `ID_OBAT`, `NAMA_OBAT`, `SATUAN`, `QTY`, `ATURAN`, `KETERANGAN`, `KODE_PASIEN`, `NAMA_LENGKAP`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('ROL00001', '2018-05-17', 'OB0004', 'Mixsagrip', 'Batang', 1, '3x1', 'sesudah makan', '17000002', 'sahid', 0, '10', '2018-05-17 07:36:56'),
('ROL00001', '2018-05-17', 'OB0003 ', 'Amoxilin', 'Batang', 1, '2x1', 'sesudah makan', '17000002', 'sahid', 0, '10', '2018-05-17 07:36:56'),
('ROL00001', '2018-05-17', 'OB0003', 'Bodrex', 'Batang', 1, '3x1', 'sesudah makan', '17000002', 'sahid', 0, '10', '2018-05-17 07:36:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_terapi_obat`
--

CREATE TABLE `dt_terapi_obat` (
  `ID_TERAPI_OBAT` varchar(15) DEFAULT NULL,
  `ID_OBAT` varchar(10) NOT NULL,
  `NAMA_OBAT` varchar(20) NOT NULL,
  `SATUAN` varchar(15) NOT NULL,
  `QTY` int(11) NOT NULL,
  `ATURAN` varchar(10) NOT NULL,
  `KETERANGAN` varchar(25) NOT NULL,
  `KODE_PASIEN` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dt_terapi_obat`
--

INSERT INTO `dt_terapi_obat` (`ID_TERAPI_OBAT`, `ID_OBAT`, `NAMA_OBAT`, `SATUAN`, `QTY`, `ATURAN`, `KETERANGAN`, `KODE_PASIEN`) VALUES
(NULL, 'OB0003 ', 'Amoxilin', 'Batang', 1, '2x1', 'sudah makan', 'PA0002'),
(NULL, 'OB0001', 'Paracetamol', 'BOx', 1, '3x1', 'sudah makan', 'PA0002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_tu_obat`
--

CREATE TABLE `dt_tu_obat` (
  `ID_TU_OBAT` varchar(15) DEFAULT NULL,
  `TANGGAL` varchar(15) NOT NULL,
  `ID_OBAT` varchar(10) NOT NULL,
  `NAMA_OBAT` varchar(20) NOT NULL,
  `SATUAN` varchar(15) NOT NULL,
  `QTY` int(11) NOT NULL,
  `ATURAN` varchar(10) NOT NULL,
  `KETERANGAN` varchar(25) NOT NULL,
  `KODE_PASIEN` varchar(10) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dt_tu_obat`
--

INSERT INTO `dt_tu_obat` (`ID_TU_OBAT`, `TANGGAL`, `ID_OBAT`, `NAMA_OBAT`, `SATUAN`, `QTY`, `ATURAN`, `KETERANGAN`, `KODE_PASIEN`, `status`, `CREATE_DATE`) VALUES
(NULL, '', 'OB0003 ', 'Amoxilin', 'Batang', 1, '2x1', 'sudah makan', 'PA0002', 0, '2018-04-13 12:56:39'),
(NULL, '', 'OB0001', 'Paracetamol', 'BOx', 1, '3x1', 'sudah makan', 'PA0002', 0, '2018-04-13 12:56:39'),
('TUO00002', '', 'OB0001', 'Paracetamol', 'BOx', 1, '2x1', 'sesudah makan', '17000002', 0, '2018-04-13 12:56:39'),
('TUO00002', '', 'OB0003 ', 'Amoxilin', 'Batang', 1, '2x1', 'sesudah makan', '17000002', 0, '2018-04-13 12:56:39'),
('TUO00003', '', 'OB0002', 'Bodrex', 'Batang', 1, '2x1', 'sesudah makan', '17000002', 0, '2018-04-13 12:56:39'),
('TUO00003', '', 'OB0003 ', 'Amoxilin', 'Batang', 1, '3x1', 'sudah makan', '17000002', 0, '2018-04-13 12:56:39'),
('TUO00004', '2018-04-13', 'OB0002', 'Bodrex', 'Batang', 1, '3x1', 'sesudah makan', '17000002', 0, '2018-04-13 13:17:33'),
('TUO00005', '2018-04-15', 'OB0003 ', 'Amoxilin', 'Batang', 1, '3x1', 'Sesudah makan', '17000002', 0, '2018-04-15 07:15:45'),
('TUO00005', '2018-04-15', 'OB0004', 'Mixsagrip', 'Batang', 1, '3x1', 'Sesudah makan', '17000002', 0, '2018-04-15 07:15:45'),
('TUO00006', '2018-04-15', 'OB0003 ', 'Amoxilin', 'Batang', 1, '2x1', 'sesudah makan', '17000002', 0, '2018-04-15 07:24:20'),
('TUO00006', '2018-04-15', 'OB0004', 'Mixsagrip', 'Batang', 1, '3x1 ', 'sesudah makan', '17000002', 0, '2018-04-15 07:24:20'),
('TUO00007', '2018-04-15', 'OB0002', 'Bodrex', 'Batang', 1, '2x1', 'sesudah makan', '17000002', 0, '2018-04-15 07:44:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `MenuID` tinyint(4) NOT NULL,
  `MenuName` varchar(50) NOT NULL,
  `Icon` varchar(50) NOT NULL,
  `MenuLabel` varchar(50) NOT NULL,
  `MenuLink` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `MenuType` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=link,1=menu',
  `MenuLevel` tinyint(4) NOT NULL,
  `ParentID` tinyint(4) NOT NULL,
  `MenuOrder` tinyint(4) NOT NULL,
  `LastUser` varchar(8) NOT NULL,
  `LastEdit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu`
--

INSERT INTO `tbl_menu` (`MenuID`, `MenuName`, `Icon`, `MenuLabel`, `MenuLink`, `controller`, `MenuType`, `MenuLevel`, `ParentID`, `MenuOrder`, `LastUser`, `LastEdit`) VALUES
(1, 'm_setup', 'fa fa-home fa-fw', 'Setup', '#', '', 1, 0, 1, 1, 'Admin', '2016-01-30 21:03:26'),
(2, 'm_master', 'fa fa-barcode', 'Master', '#', '', 1, 0, 2, 2, 'Admin', '2018-04-20 09:19:13'),
(9, 'm_user', 'fa fa-user', 'User', 'User/index', 'User', 0, 1, 2, 0, 'Admin', '2018-03-17 01:59:19'),
(10, 'm_dokter', 'fa fa-building', 'Dokter', 'dokter/index', 'dokter', 0, 1, 2, 2, 'Admin', '2018-03-13 06:10:10'),
(11, 'm_unit', 'fa fa-hdd-o', 'Unit', 'unit/index', 'unit', 0, 1, 2, 3, 'Admin', '2018-03-13 06:10:10'),
(12, 'm_jenispemeriksaan', 'fa fa-building', 'Jenis Pemeriksaan', 'Jenis_pemeriksaan/index', 'Jenis_pemeriksaan', 0, 1, 2, 4, 'Admin', '2018-03-19 10:39:38'),
(13, 'm_nama_pemeriksaan', 'fa fa-building', 'Nama Pemeriksaan', 'Nama_pemeriksaan/index', 'Nama_pemeriksaan', 0, 1, 2, 5, 'admin', '2018-03-20 08:15:25'),
(3, 'm_master_bersalin', 'fa fa-building', 'Master Bersalin', '#', '', 1, 0, 3, 3, 'Admin', '2018-04-20 09:19:13'),
(4, 'm_pertolongan partus', 'fa fa-certificate', 'Pertolongan Partus', 'Partus/index', 'Partus', 0, 1, 3, 1, 'Admin', '2018-04-22 03:53:27'),
(5, 'm_master_laboratorium', 'fa fa-barcode', 'Master Laboratorium', '#', '', 1, 0, 4, 4, 'Admin', '2018-04-22 09:16:55'),
(6, 'm_perawatan_ibu', 'fa fa-building', 'Perawatan Ibu', 'Perawatan_ibu/index', 'Perawatan_ibu', 0, 1, 3, 2, 'Admin', '2018-04-22 03:42:13'),
(7, 'm_perawatan_bayi', 'fa fa-building', 'Perawatan Bayi', 'Perawatan_bayi/index', 'Perawatan_bayi', 0, 1, 3, 3, 'Admin', '2018-04-22 03:42:13'),
(8, 'm_tindakan_bersalin', 'fa fa-bed', 'Tindakan Bersalin', 'Tindakan_bersalin/index', 'Tindakan_bersalin', 0, 1, 3, 4, 'Admin', '2018-04-22 03:51:41'),
(17, 'm_pemgizi_seimbang', 'fa fa-building', 'Pem Gizi Seimbang', 'Gizi_seimbang/index', 'Gizi_seimbang', 0, 1, 3, 5, 'Admin', '2018-04-22 08:17:43'),
(18, 'm_cek_lab', 'fa fa-certificate', 'Cek Laboratorium', 'Cek_lab/index', 'Cek_lab', 0, 1, 5, 1, 'Admin', '2018-04-22 10:05:18'),
(20, 'm_about', 'fa fa-building', 'About', '#', '', 1, 0, 5, 5, 'Admin', '2018-04-22 10:06:14'),
(19, 'm_pemeriksan_tarif', 'fa fa-building', 'Pemeriksaan & Tarif Lab', 'Pem_tarif_lab/index', 'Pem_tarif_lab', 0, 1, 5, 2, 'Admin', '2018-04-22 10:19:03'),
(14, 'm_obat', 'fa fa-building', 'Obat', 'Obat/index', 'Obat', 0, 1, 2, 6, 'admin', '2018-03-21 03:56:33'),
(15, 'm_diagnosa', 'fa fa-building', 'Diagnosa', 'Diagnosa/index', 'Diagnosa', 0, 1, 2, 7, 'admin', '2018-03-21 10:41:54'),
(37, 'm_logout', 'fa fa-power-off', 'Exit', 'Web/logout', 'Web', 0, 1, 1, 5, 'admin', '2018-03-22 13:04:22'),
(38, 'm_employee', 'fa fa-user-plus', 'Employee', 'Employee/index', 'Employee', 0, 1, 2, 10, 'admin', '2018-04-19 08:39:06'),
(39, 'm_joblevel', 'fa fa-trophy', 'JobLevel', 'Joblevel/index', 'Joblevel', 0, 1, 2, 9, 'admin', '2018-04-19 03:18:04'),
(16, 'Kamar', 'fa fa-bed', 'Kamar', 'Kamar/index', 'Kamar', 0, 1, 3, 0, 'admin', '2018-05-18 07:53:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu_daftar`
--

CREATE TABLE `tbl_menu_daftar` (
  `MenuID` tinyint(4) NOT NULL,
  `MenuName` varchar(50) NOT NULL,
  `Icon` varchar(50) NOT NULL,
  `MenuLabel` varchar(50) NOT NULL,
  `MenuLink` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `MenuType` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=link,1=menu',
  `MenuLevel` tinyint(4) NOT NULL,
  `ParentID` tinyint(4) NOT NULL,
  `MenuOrder` tinyint(4) NOT NULL,
  `LastUser` varchar(8) NOT NULL,
  `LastEdit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu_daftar`
--

INSERT INTO `tbl_menu_daftar` (`MenuID`, `MenuName`, `Icon`, `MenuLabel`, `MenuLink`, `controller`, `MenuType`, `MenuLevel`, `ParentID`, `MenuOrder`, `LastUser`, `LastEdit`) VALUES
(1, 'm_setup', 'fa fa-home fa-fw', 'Setup', '#', '', 1, 0, 1, 1, 'Admin', '2016-01-30 21:03:26'),
(2, 'm_pasien', 'fa fa-barcode', 'Pasien', '#', '', 1, 0, 2, 2, 'Admin', '2018-03-22 12:30:53'),
(11, 'm_data_pasien', 'fa fa-hdd-o', 'Data Pasien', 'Pasien/index', 'Pasien', 0, 1, 2, 3, 'Admin', '2018-03-22 13:27:59'),
(4, 'm_logout', 'fa fa-power-off', 'Exit', 'Web/logout', 'Web', 0, 1, 1, 4, 'Admin', '2018-03-22 12:26:05'),
(3, 'm_Kunjungan', 'fa fa-barcode', 'Kunjungan', '#', '', 1, 0, 3, 3, 'Admin', '2018-03-22 12:05:19'),
(16, 'm_kunjungan_pasien', 'fa fa-building', 'Kunjungan Pasien', 'Kunjungan/index', 'Kunjungan', 0, 1, 3, 0, 'admin', '2018-03-23 08:26:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu_farmasi`
--

CREATE TABLE `tbl_menu_farmasi` (
  `MenuID` tinyint(4) NOT NULL,
  `MenuName` varchar(50) NOT NULL,
  `Icon` varchar(50) NOT NULL,
  `MenuLabel` varchar(50) NOT NULL,
  `MenuLink` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `MenuType` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=link,1=menu',
  `MenuLevel` tinyint(4) NOT NULL,
  `ParentID` tinyint(4) NOT NULL,
  `MenuOrder` tinyint(4) NOT NULL,
  `LastUser` varchar(8) NOT NULL,
  `LastEdit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu_farmasi`
--

INSERT INTO `tbl_menu_farmasi` (`MenuID`, `MenuName`, `Icon`, `MenuLabel`, `MenuLink`, `controller`, `MenuType`, `MenuLevel`, `ParentID`, `MenuOrder`, `LastUser`, `LastEdit`) VALUES
(1, 'm_setup', 'fa fa-home fa-fw', 'Setup', '#', '', 1, 0, 1, 1, 'Admin', '2016-01-30 21:03:26'),
(2, 'm_farmasi', 'fa fa-barcode', 'Farmasi', '#', '', 1, 0, 2, 2, 'Admin', '2018-05-08 13:06:27'),
(11, 'm_pengambil_obat', 'fa fa-hdd-o', 'Pengambilan Obat', 'Pengambilan_obat/index', 'Pengambilan_obat', 0, 1, 2, 3, 'Admin', '2018-05-10 04:22:51'),
(4, 'm_logout', 'fa fa-power-off', 'Exit', 'Web/logout', 'Web', 0, 1, 1, 2, 'Admin', '2018-05-08 13:17:51'),
(3, 'm_data_obat', 'fa fa-certificate', 'Data Obat', '#', '', 1, 0, 3, 3, 'Admin', '2018-05-08 13:23:22'),
(5, 'm_obat', 'fa fa-certificate', 'Entry Obat', 'Entry_obat/index', 'Entry_obat', 0, 1, 3, 1, 'Admin', '2018-05-10 10:15:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu_kpelayanan`
--

CREATE TABLE `tbl_menu_kpelayanan` (
  `MenuID` tinyint(4) NOT NULL,
  `MenuName` varchar(50) NOT NULL,
  `Icon` varchar(50) NOT NULL,
  `MenuLabel` varchar(50) NOT NULL,
  `MenuLink` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `MenuType` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=link,1=menu',
  `MenuLevel` tinyint(4) NOT NULL,
  `ParentID` tinyint(4) NOT NULL,
  `MenuOrder` tinyint(4) NOT NULL,
  `LastUser` varchar(8) NOT NULL,
  `LastEdit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu_kpelayanan`
--

INSERT INTO `tbl_menu_kpelayanan` (`MenuID`, `MenuName`, `Icon`, `MenuLabel`, `MenuLink`, `controller`, `MenuType`, `MenuLevel`, `ParentID`, `MenuOrder`, `LastUser`, `LastEdit`) VALUES
(1, 'm_setup', 'fa fa-home fa-fw', 'Setup', '#', '', 1, 0, 1, 1, 'Admin', '2016-01-30 21:03:26'),
(2, 'm_kunjungan', 'fa fa-barcode', 'Kunjungan Pasien', '#', '', 1, 0, 2, 2, 'Admin', '2018-05-20 06:54:44'),
(3, 'm_pemeriksaan', 'fa fa-shopping-basket', 'Pemeriksaan ', '#', '', 1, 0, 3, 3, 'Admin', '2018-05-20 06:54:44'),
(4, 'm_poli_pemeriksaan', 'fa fa-building', 'Poli Pemeriksaan', '#', '', 1, 0, 4, 4, 'Admin', '2018-05-20 06:54:44'),
(5, 'm_resep_obat', 'fa fa-university', 'Resep Obat', '#', '', 1, 0, 5, 5, 'Admin', '2018-05-20 06:54:44'),
(6, 'm_report', 'fa fa-book', 'Report', '#', '', 1, 0, 6, 12, 'Admin', '2018-05-20 07:53:08'),
(7, 'm_Laboratorium', 'fa fa-question-circle', 'Laboratorium', '#', '', 1, 0, 9, 10, 'Admin', '2018-05-20 07:18:47'),
(8, 'm_about', 'fa fa-check', 'About', '#', '', 1, 0, 11, 13, 'Admin', '2018-05-20 07:53:08'),
(9, 'm_data_pasien', 'fa fa-columns', 'Data Pasien', 'Pelayanan/get_pasien', 'Pelayanan', 0, 1, 2, 0, 'Admin', '2018-06-21 10:21:15'),
(10, 'm_Kunjungan', 'fa fa-building', 'Data Kunjungan', 'Pelayanan/get_kunjungan', 'Pelayanan', 0, 1, 2, 2, 'Admin', '2018-06-21 10:21:15'),
(12, 'm_hasil_lab', 'fa fa-pencil-square-o', 'Hasil Laboratorium', 'Pelayanan/get_hasil_lab', 'Pelayanan', 0, 1, 7, 1, 'Admin', '2018-06-21 14:51:54'),
(13, 'm_poli_umum', 'fa fa-building', 'Poli Umum', 'Pelayanan/get_poli', 'Pelayanan', 0, 1, 4, 2, 'Admin', '2018-06-21 12:56:56'),
(15, 'r_pelayanan', 'fa fa-newspaper-o', 'Laporan data pelayanan', 'Pelayanan/get_laporan', 'Pelayanan', 0, 1, 6, 1, 'Admin', '2018-06-21 15:33:39'),
(16, 'm_pemeriksaan_umum', 'fa fa-pencil-square-o', 'Pemeriksaan Umum', 'Pelayanan/get_pemeriksaan', 'Pelayanan', 0, 1, 3, 2, 'Admin', '2018-06-21 10:52:45'),
(20, 'm_resep_umum', 'fa fa-pencil-square-o', 'Resep Obat Umum', 'Pelayanan/get_resep', 'Pelayanan', 0, 1, 5, 2, 'admin', '2018-06-21 13:05:44'),
(25, 'm_rujukan_umum', 'fa fa-clipboard', 'Rujukan Umum', 'Pelayanan/get_rujukan', 'Pelayanan', 0, 1, 42, 1, 'admin', '2018-06-21 13:27:46'),
(37, 'm_logout', 'fa fa-power-off', 'Exit', 'Web/logout', 'Web', 0, 1, 1, 5, 'admin', '2018-05-20 08:03:26'),
(42, 'm_rujukan', 'fa fa-building', 'Rujukan Internal', '#', '', 1, 0, 42, 6, 'admin', '2018-05-20 07:18:47'),
(43, 'm_farmasi', 'fa fa-list', 'Farmasi', '#', '', 1, 0, 8, 9, 'admin', '2018-05-20 07:18:47'),
(44, 'm_pengambilan_obat', 'fa fa-certificate', 'Pengambilan Obat', 'Pelayanan/get_farmasi', 'Pelayanan', 0, 1, 43, 1, 'admin', '2018-06-21 14:35:50'),
(48, 'm_umb', 'fa fa-file', 'Umpan Balik Rujukan', '#', '', 1, 0, 48, 7, 'admin', '2018-05-20 07:18:47'),
(49, 'm_umb_umum', 'fa fa-clipboard', 'Umb Rujukan Umum', 'Pelayanan/get_umb_rujukan', 'Pelayanan', 1, 1, 48, 1, 'admin', '2018-06-21 13:32:24'),
(51, 'r_rujukan_umum', 'fa fa-newspaper-o', 'Laporan Rujukan Internal', 'Pelayanan/get_lap_rujukan', 'Pelayanan', 0, 1, 6, 9, 'admin', '2018-06-21 15:49:20'),
(22, 'r_daftar_lab', 'fa fa-newspaper-o', 'Laporan Laboratorium', 'Pelayanan/get_laporan_lab', 'Pelayanan', 0, 1, 6, 13, 'Admin', '2018-06-21 15:42:24'),
(50, 'r_lap_farmasi', 'fa fa-newspaper-o', 'Laporan Farmasi', 'Pelayanan/get_lap_farmasi', 'Pelayanan', 0, 1, 6, 10, 'Admin', '2018-06-27 00:35:23'),
(65, 'm_daftar_lab', 'fa fa-building', 'Pendaftar Lab', 'Pelayanan/get_daftar_lab', 'Pelayanan', 0, 1, 7, 0, 'Admin', '2018-06-21 14:51:54'),
(26, 'r_daftar_rb', 'fa fa-newspaper-o', 'Laporan Ruang Bersalin', 'Pelayanan/get_laporan_rb', 'Pelayanan', 0, 1, 6, 16, 'Admin', '2018-06-21 15:44:07'),
(14, 'm_bayar_lab', 'fa fa-money', 'Pembayaran lab', 'Pelayanan/get_bayar_lab', 'Pelayanan', 0, 1, 7, 2, 'Admin', '2018-06-21 14:51:54'),
(34, 'm_ruang_bersalin', 'fa fa-bed', 'Ruang Bersalin', '#', '', 1, 0, 34, 8, 'Admin', '2018-05-21 03:51:22'),
(21, 'm_daftar_rb', 'fa fa-pencil-square-o', 'Pendaftaran RB', 'Pelayanan/get_daftar_rb', 'Pelayanan', 0, 1, 34, 0, 'Admin', '2018-06-21 13:51:07'),
(24, 'm_pulang_rb', 'fa fa-share-square', 'Pulang RB', 'Pelayanan/get_pulang_rb', 'Pelayanan', 0, 1, 34, 1, 'Admin', '2018-06-21 13:51:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu_kpuskes`
--

CREATE TABLE `tbl_menu_kpuskes` (
  `MenuID` tinyint(4) NOT NULL,
  `MenuName` varchar(50) NOT NULL,
  `Icon` varchar(50) NOT NULL,
  `MenuLabel` varchar(50) NOT NULL,
  `MenuLink` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `MenuType` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=link,1=menu',
  `MenuLevel` tinyint(4) NOT NULL,
  `ParentID` tinyint(4) NOT NULL,
  `MenuOrder` tinyint(4) NOT NULL,
  `LastUser` varchar(8) NOT NULL,
  `LastEdit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu_kpuskes`
--

INSERT INTO `tbl_menu_kpuskes` (`MenuID`, `MenuName`, `Icon`, `MenuLabel`, `MenuLink`, `controller`, `MenuType`, `MenuLevel`, `ParentID`, `MenuOrder`, `LastUser`, `LastEdit`) VALUES
(1, 'm_setup', 'fa fa-home fa-fw', 'Setup', '#', '', 1, 0, 1, 1, 'Admin', '2016-01-30 21:03:26'),
(2, 'm_kunjungan', 'fa fa-barcode', 'Kunjungan Pasien', '#', '', 1, 0, 2, 2, 'Admin', '2018-05-20 06:54:44'),
(3, 'm_pemeriksaan', 'fa fa-shopping-basket', 'Pemeriksaan ', '#', '', 1, 0, 3, 3, 'Admin', '2018-05-20 06:54:44'),
(4, 'm_poli_pemeriksaan', 'fa fa-building', 'Poli Pemeriksaan', '#', '', 1, 0, 4, 4, 'Admin', '2018-05-20 06:54:44'),
(5, 'm_resep_obat', 'fa fa-university', 'Resep Obat', '#', '', 1, 0, 5, 5, 'Admin', '2018-05-20 06:54:44'),
(6, 'm_report', 'fa fa-book', 'Report', '#', '', 1, 0, 6, 12, 'Admin', '2018-05-20 07:53:08'),
(7, 'm_Laboratorium', 'fa fa-question-circle', 'Laboratorium', '#', '', 1, 0, 9, 10, 'Admin', '2018-05-20 07:18:47'),
(8, 'm_about', 'fa fa-check', 'About', '#', '', 1, 0, 11, 13, 'Admin', '2018-05-20 07:53:08'),
(9, 'm_data_pasien', 'fa fa-columns', 'Data Pasien', 'Pasien/index', 'Pasien', 0, 1, 2, 0, 'Admin', '2018-05-20 07:54:39'),
(10, 'm_Kunjungan', 'fa fa-building', 'Data Kunjungan', 'Kunjungan/index', 'Kunjungan', 0, 1, 2, 2, 'Admin', '2018-05-20 07:56:11'),
(12, 'm_hasil_lab', 'fa fa-pencil-square-o', 'Hasil Laboratorium', 'Hasil_lab/index', 'Hasil_lab', 0, 1, 7, 1, 'Admin', '2018-05-21 03:44:00'),
(13, 'm_poli_umum', 'fa fa-building', 'Poli Umum', 'Poli_umum/index', 'Poli_umum', 0, 1, 4, 2, 'Admin', '2018-05-21 03:15:38'),
(15, 'r_data pasien', 'fa fa-newspaper-o', 'Laporan data pasien', 'Lap_pasien/index', 'Lap_pasien', 0, 1, 6, 1, 'Admin', '2018-05-21 06:07:51'),
(16, 'm_pemeriksaan_umum', 'fa fa-pencil-square-o', 'Pemeriksaan Umum', 'Pemeriksaan_umum/index', 'Pemeriksaan_umum', 0, 1, 3, 2, 'Admin', '2018-05-20 08:06:12'),
(17, 'r_kunjungan', 'fa fa-newspaper-o', 'Laporan Kunjungan', 'Lap_kunjungan/index', 'Lap_kunjungan', 0, 1, 6, 3, 'Admin', '2018-05-21 06:07:51'),
(18, 'r_pemeriksaan_umum', 'fa fa-newspaper-o', 'Laporan Pem Umum', 'Lap_pem_umum/index', 'Lap_pem_umum', 0, 1, 6, 4, 'Admin', '2018-05-21 06:07:51'),
(19, 'm_pemeriksaan_gizi_dewasa', 'fa fa-pencil-square-o', 'Pemeriksaan Gizi Dewasa', 'Pem_gizi_dewasa/index', 'Pem_gizi_dewasa', 0, 1, 3, 3, 'admin', '2018-05-21 03:08:06'),
(20, 'm_resep_umum', 'fa fa-pencil-square-o', 'Resep Obat Umum', 'Terapi_obat_umum/index', 'Terapi_obat_umum', 0, 1, 5, 2, 'admin', '2018-05-21 03:22:12'),
(22, 'm_resep_gigi', 'fa fa-pencil-square-o', 'Resep Obat Gigi', 'Resep_obat_gigi/index', 'Resep_obat_gigi', 0, 1, 5, 2, 'admin', '2018-05-21 03:22:12'),
(23, 'm_poli_gigi', 'fa fa-building', 'Poli Gigi', 'Tindakan_poli_gigi/index', 'Tindakan_poli_gigi', 0, 1, 4, 3, '', '2018-05-21 03:15:38'),
(25, 'm_rujukan_umum', 'fa fa-clipboard', 'Rujukan Umum', 'Rujukan_umum/index', 'Rujukan_umum', 0, 1, 42, 1, 'admin', '2018-05-21 03:29:00'),
(26, 'm_rujukan_gigi', 'fa fa-clipboard', 'Rujukan Gigi', 'Rujukan_gigi/index', 'Rujukan_gigi', 0, 1, 42, 2, 'admin', '2018-05-21 03:29:00'),
(27, 'm_pemeriksaan_mtbs', 'fa fa-pencil-square-o', 'Pemeriksaan Mtbs', 'Pemeriksaan_mtbs/index', 'Pemeriksaan_mtbs', 0, 1, 3, 1, 'admin', '2018-05-20 08:06:12'),
(28, 'm_poli_kb', 'fa fa-building', 'Poli Kb', 'Tindakan_poli_kb/index', 'Tindakan_poli_kb', 0, 1, 4, 1, 'admin', '2018-05-21 03:15:38'),
(29, 'm_rujukan_gizi', 'fa fa-clipboard', 'Rujukan Gizi', 'Rujukan_gizi/index', 'Rujukan_gizi', 0, 1, 42, 3, 'admin', '2018-05-21 03:29:00'),
(30, 'm_rujukan_kb', 'fa fa-clipboard', 'Rujukan Kb', 'Rujukan_kb/index', 'Rujukan_kb', 0, 1, 42, 4, 'admin', '2018-05-21 03:29:00'),
(32, 'm_resep_gizi', 'fa fa-pencil-square-o', 'Resep Obat gizi', 'Resep_obat_giz/index', 'Resep_obat_gizi', 0, 1, 5, 3, 'admin', '2018-05-21 03:22:12'),
(33, 'm_resep_kb', 'fa fa-pencil-square-o', 'Resep Obat Kb', 'Resep_obat_kb/index', 'Resep_obat_kb', 0, 1, 5, 4, 'admin', '2018-05-21 03:22:12'),
(35, 'm_resep_lansia', 'fa fa-pencil-square-o', 'Resep Obat Lansia', 'Resep_obat_lansia/index', 'Resep_obat_lansia', 0, 1, 5, 5, 'admin', '2018-05-21 03:22:12'),
(36, 'm_privillage', 'fa fa-users', 'Privillage', 'privillage/index', 'privillage', 0, 1, 1, 3, 'admin', '2016-01-30 21:03:38'),
(37, 'm_logout', 'fa fa-power-off', 'Exit', 'Web/logout', 'Web', 0, 1, 1, 5, 'admin', '2018-05-20 08:03:26'),
(42, 'm_rujukan', 'fa fa-building', 'Rujukan Internal', '#', '', 1, 0, 42, 6, 'admin', '2018-05-20 07:18:47'),
(43, 'm_farmasi', 'fa fa-list', 'Farmasi', '#', '', 1, 0, 8, 9, 'admin', '2018-05-20 07:18:47'),
(44, 'm_pengambilan_obat', 'fa fa-certificate', 'Pengambilan Obat', 'Detail_ambil_obat/index', 'Detail_ambil_obat', 0, 1, 43, 1, 'admin', '2018-05-21 03:39:47'),
(46, 'r_pemeriksaan_gizi_anak', 'fa fa-newspaper-o', 'Laporan Pem Gizi Anak', 'Lap_pg_anak_/index', 'Lap_pg_anak', 0, 1, 6, 2, 'admin', '2018-05-21 06:07:51'),
(11, 'm_pemeriksaan_gizi_anak', 'fa fa-pencil-square-o', 'Pemeriksaan Gizi Anak', 'Pem_gizi_anak/index', 'Pem_gizi_anak', 0, 1, 3, 3, 'Admin', '2018-05-21 03:08:06'),
(48, 'm_umb', 'fa fa-file', 'Umpan Balik Rujukan', '#', '', 1, 0, 48, 7, 'admin', '2018-05-20 07:18:47'),
(49, 'm_umb_umum', 'fa fa-clipboard', 'Umb Rujukan Umum', 'Umb_rujukan_umum/index', 'Umb_rujukan_umum', 1, 1, 48, 1, 'admin', '2018-05-21 03:35:32'),
(50, 'm_umb_gigi', 'fa fa-clipboard', 'Umb Rujukan Gigi', 'Umb_rujukan_gigi/index', 'Umb_rujukan_gigi', 1, 1, 48, 1, 'admin', '2018-05-21 03:35:32'),
(51, 'm_umb_gizi', 'fa fa-clipboard', 'Umb Rujukan Gizi', 'Umb_rujukan_gizi/index', 'Umb_rujukan_gizi', 0, 1, 48, 3, 'admin', '2018-05-21 03:35:32'),
(52, 'm_resep_mtbs', 'fa fa-pencil-square-o', 'Resep Obat Mtbs', 'Resep_obat_mtbs/index', 'Resep_obat_mtbs', 0, 1, 5, 6, 'adamin', '2018-05-21 03:22:12'),
(53, 'r_pemeriksaan_gizi_dewasa', 'fa fa-newspaper-o', 'Laporan Pem Gizi Dewasa', 'Lap_pg_dewasa/index', 'Lap_pg_dewasa', 0, 1, 6, 5, 'admin', '2018-05-21 06:07:51'),
(54, 'r_pemeriksaan_kb', 'fa fa-newspaper-o', 'Laporan Pem kb', 'Lap_pem_kb/index', 'Lap_pem_kb', 0, 1, 6, 6, 'admin', '2018-05-21 06:07:51'),
(61, 'r_pemeriksaan_mtbs', 'fa fa-newspaper-o', 'Laporan Pem MTBS', 'Lap_pem_mtbs/index', 'Lap_pem_mtbs', 0, 1, 6, 10, 'admin', '2018-05-21 06:07:51'),
(56, 'r_poli_umum', 'fa fa-newspaper-o', 'Laporan Poli Umum', 'Lap_poli_umum/index', 'Lap_poli_umum', 0, 1, 6, 7, 'admin', '2018-05-21 06:07:51'),
(57, 'm_umb_kb', 'fa fa-clipboard', 'Umb Rujukan Kb', 'Umb_rujukan_kb/index', 'kb', 1, 1, 48, 4, 'admin', '2018-05-21 03:35:32'),
(58, 'm_laba_rugi', 'fa fa-newspaper-o', 'Laba (Rugi) Report', 'laba_rugi/index', 'laba_rugi', 0, 1, 6, 8, 'admin', '2016-04-30 14:09:10'),
(59, 'r_unit_report', 'fa fa-newspaper-o', 'Sales By Unit Report', 'unit_report/index', 'unit_report', 0, 1, 6, 9, 'admin', '2016-05-19 11:57:17'),
(31, 'm_pemeriksaan_kb', 'fa fa-pencil-square-o', 'Pemeriksaan KB', 'Pemeriksaan_kb/index', 'Pemeriksaan_kb', 0, 1, 3, 4, 'Admin', '2018-05-21 03:03:58'),
(65, 'm_daftar_lab', 'fa fa-building', 'Daftar Lab', 'Daftar_lab/index', 'Daftar_lab', 0, 1, 7, 0, 'Admin', '2018-05-20 07:47:12'),
(63, 'm_diagram_poli', 'fa fa-building', 'Diagram Poli', 'Diagram_poli/index', 'Diagram_poli', 0, 1, 64, 0, 'Admin', '2018-05-20 07:49:24'),
(64, 'm_diagram', 'fa fa-barcode', 'Diagram Pelayanan', '#', '', 1, 0, 10, 11, 'Admin', '2018-05-20 06:54:44'),
(14, 'm_bayar_lab', 'fa fa-money', 'Pembayaran lab', 'Bayar_lab/index', 'Bayar_lab', 0, 1, 7, 2, 'Admin', '2018-05-21 03:44:00'),
(34, 'm_ruang_bersalin', 'fa fa-bed', 'Ruang Bersalin', '#', '', 1, 0, 34, 8, 'Admin', '2018-05-21 03:51:22'),
(21, 'm_daftar_rb', 'fa fa-pencil-square-o', 'Pendaftaran RB', 'Daftar_rb/index', 'Daftar_rb', 0, 1, 34, 0, 'Admin', '2018-05-21 03:51:22'),
(24, 'm_pulang_rb', 'fa fa-share-square', 'Pulang RB', 'Pulang_rb/index', 'Pulang_rb', 0, 1, 34, 1, 'Admin', '2018-05-21 03:54:38'),
(38, 'm_bayar_rb', 'fa fa-money', 'Pembayaran RB', 'Bayar_rb/index', 'Bayar_rb', 0, 1, 34, 2, 'Admin', '2018-05-21 04:40:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu_kpuskes1`
--

CREATE TABLE `tbl_menu_kpuskes1` (
  `MenuID` tinyint(4) NOT NULL,
  `MenuName` varchar(50) NOT NULL,
  `Icon` varchar(50) NOT NULL,
  `MenuLabel` varchar(50) NOT NULL,
  `MenuLink` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `MenuType` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=link,1=menu',
  `MenuLevel` tinyint(4) NOT NULL,
  `ParentID` tinyint(4) NOT NULL,
  `MenuOrder` tinyint(4) NOT NULL,
  `LastUser` varchar(8) NOT NULL,
  `LastEdit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu_kpuskes1`
--

INSERT INTO `tbl_menu_kpuskes1` (`MenuID`, `MenuName`, `Icon`, `MenuLabel`, `MenuLink`, `controller`, `MenuType`, `MenuLevel`, `ParentID`, `MenuOrder`, `LastUser`, `LastEdit`) VALUES
(1, 'm_setup', 'fa fa-home fa-fw', 'Setup', '#', '', 1, 0, 1, 1, 'Admin', '2016-01-30 21:03:26'),
(2, 'm_kunjungan', 'fa fa-barcode', 'Kunjungan Pasien', '#', '', 1, 0, 2, 2, 'Admin', '2018-05-20 06:54:44'),
(3, 'm_pemeriksaan', 'fa fa-shopping-basket', 'Pemeriksaan ', '#', '', 1, 0, 3, 3, 'Admin', '2018-05-20 06:54:44'),
(4, 'm_poli_pemeriksaan', 'fa fa-building', 'Poli Pemeriksaan', '#', '', 1, 0, 4, 4, 'Admin', '2018-05-20 06:54:44'),
(5, 'm_resep_obat', 'fa fa-university', 'Resep Obat', '#', '', 1, 0, 5, 5, 'Admin', '2018-05-20 06:54:44'),
(6, 'm_report', 'fa fa-book', 'Report', '#', '', 1, 0, 6, 12, 'Admin', '2018-05-20 07:53:08'),
(7, 'm_Laboratorium', 'fa fa-question-circle', 'Laboratorium', '#', '', 1, 0, 9, 10, 'Admin', '2018-05-20 07:18:47'),
(8, 'm_about', 'fa fa-check', 'About', '#', '', 1, 0, 11, 13, 'Admin', '2018-05-20 07:53:08'),
(9, 'm_data_pasien', 'fa fa-columns', 'Data Pasien', 'Pasien/index', 'Pasien', 0, 1, 2, 0, 'Admin', '2018-05-20 07:54:39'),
(10, 'm_Kunjungan', 'fa fa-building', 'Data Kunjungan', 'Kunjungan/index', 'Kunjungan', 0, 1, 2, 2, 'Admin', '2018-05-20 07:56:11'),
(12, 'm_hasil_lab', 'fa fa-pencil-square-o', 'Hasil Laboratorium', 'Hasil_lab/index', 'Hasil_lab', 0, 1, 7, 1, 'Admin', '2018-05-21 03:44:00'),
(13, 'm_poli_umum', 'fa fa-building', 'Poli Umum', 'Poli_umum/index', 'Poli_umum', 0, 1, 4, 2, 'Admin', '2018-05-21 03:15:38'),
(15, 'r_data pasien', 'fa fa-newspaper-o', 'Laporan data pasien', 'Lap_pasien/index', 'Lap_pasien', 0, 1, 6, 1, 'Admin', '2018-05-21 06:07:51'),
(16, 'm_pemeriksaan_umum', 'fa fa-pencil-square-o', 'Pemeriksaan Umum', 'Pemeriksaan_umum/index', 'Pemeriksaan_umum', 0, 1, 3, 2, 'Admin', '2018-05-20 08:06:12'),
(17, 'r_kunjungan', 'fa fa-newspaper-o', 'Laporan Kunjungan', 'Lap_kunjungan/index', 'Lap_kunjungan', 0, 1, 6, 3, 'Admin', '2018-05-21 06:07:51'),
(18, 'r_pemeriksaan_umum', 'fa fa-newspaper-o', 'Laporan Pem Umum', 'Lap_pem_umum/index', 'Lap_pem_umum', 0, 1, 6, 4, 'Admin', '2018-05-21 06:07:51'),
(20, 'm_resep_umum', 'fa fa-pencil-square-o', 'Resep Obat Umum', 'Terapi_obat_umum/index', 'Terapi_obat_umum', 0, 1, 5, 2, 'admin', '2018-05-21 03:22:12'),
(25, 'm_rujukan_umum', 'fa fa-clipboard', 'Rujukan Umum', 'Rujukan_umum/index', 'Rujukan_umum', 0, 1, 42, 1, 'admin', '2018-05-21 03:29:00'),
(36, 'm_privillage', 'fa fa-users', 'Privillage', 'privillage/index', 'privillage', 0, 1, 1, 3, 'admin', '2016-01-30 21:03:38'),
(37, 'm_logout', 'fa fa-power-off', 'Exit', 'Web/logout', 'Web', 0, 1, 1, 5, 'admin', '2018-05-20 08:03:26'),
(42, 'm_rujukan', 'fa fa-building', 'Rujukan Internal', '#', '', 1, 0, 42, 6, 'admin', '2018-05-20 07:18:47'),
(43, 'm_farmasi', 'fa fa-list', 'Farmasi', '#', '', 1, 0, 8, 9, 'admin', '2018-05-20 07:18:47'),
(44, 'm_pengambilan_obat', 'fa fa-certificate', 'Pengambilan Obat', 'Detail_ambil_obat/index', 'Detail_ambil_obat', 0, 1, 43, 1, 'admin', '2018-05-21 03:39:47'),
(48, 'm_umb', 'fa fa-file', 'Umpan Balik Rujukan', '#', '', 1, 0, 48, 7, 'admin', '2018-05-20 07:18:47'),
(49, 'm_umb_umum', 'fa fa-clipboard', 'Umb Rujukan Umum', 'Umb_rujukan_umum/index', 'Umb_rujukan_umum', 1, 1, 48, 1, 'admin', '2018-05-21 03:35:32'),
(50, 'r_resep_obat', 'fa fa-newspaper-o', 'Laporan Resep Obat', 'Umb_rujukan_gigi/index', 'Umb_rujukan_gigi', 0, 1, 6, 8, 'admin', '2018-06-21 07:14:43'),
(51, 'r_rujukan_umum', 'fa fa-newspaper-o', 'Laporan Rujukan Internal', 'Umb_rujukan_gizi/index', 'Umb_rujukan_gizi', 0, 1, 6, 9, 'admin', '2018-06-21 07:14:43'),
(11, 'r_pengambilan_obat', 'fa fa-newspaper-o', 'Laporan Farmasi', '', '', 0, 1, 6, 11, 'Admin', '2018-06-21 07:20:27'),
(22, 'r_daftar_lab', 'fa fa-newspaper-o', 'Laporan Pendaftar Lab', '', '', 0, 1, 6, 13, 'Admin', '2018-06-21 07:23:15'),
(19, 'r_data _obat', 'fa fa-newspaper-o', 'Laporan Data Obat', '', '', 0, 1, 6, 12, 'Admin', '2018-06-21 07:21:41'),
(23, 'r_hasil_lab', 'fa fa-newspaper-o', 'Laporan hasil lab', '', '', 0, 1, 6, 14, 'Admin', '2018-06-21 07:30:57'),
(32, 'r_bayar_lab', 'fa fa-newspaper-o', 'Laporan pembayaran LAB', '', '', 0, 1, 6, 15, 'Admin', '2018-06-20 17:00:00'),
(56, 'r_poli_umum', 'fa fa-newspaper-o', 'Laporan Poli Umum', 'Lap_poli_umum/index', 'Lap_poli_umum', 0, 1, 6, 7, 'admin', '2018-05-21 06:07:51'),
(27, 'r_pulang_rb', 'fa fa-newspaper-o', 'Laporan Pulang RB', '', '', 0, 1, 6, 17, 'Admin', '2018-06-21 07:36:59'),
(31, 'r_umb', 'fa fa-newspaper-o', 'Laporan Umpan Balik ', 'Pemeriksaan_kb/index', 'Pemeriksaan_kb', 0, 1, 6, 9, 'Admin', '2018-06-21 07:16:08'),
(65, 'm_daftar_lab', 'fa fa-building', 'Daftar Lab', 'Daftar_lab/index', 'Daftar_lab', 0, 1, 7, 0, 'Admin', '2018-05-20 07:47:12'),
(26, 'r_daftar_rb', 'fa fa-newspaper-o', 'Laporan Pendaftaran RB', '', '', 0, 1, 6, 16, 'Admin', '2018-06-21 07:36:59'),
(14, 'm_bayar_lab', 'fa fa-money', 'Pembayaran lab', 'Bayar_lab/index', 'Bayar_lab', 0, 1, 7, 2, 'Admin', '2018-05-21 03:44:00'),
(34, 'm_ruang_bersalin', 'fa fa-bed', 'Ruang Bersalin', '#', '', 1, 0, 34, 8, 'Admin', '2018-05-21 03:51:22'),
(21, 'm_daftar_rb', 'fa fa-pencil-square-o', 'Pendaftaran RB', 'Daftar_rb/index', 'Daftar_rb', 0, 1, 34, 0, 'Admin', '2018-05-21 03:51:22'),
(24, 'm_pulang_rb', 'fa fa-share-square', 'Pulang RB', 'Pulang_rb/index', 'Pulang_rb', 0, 1, 34, 1, 'Admin', '2018-05-21 03:54:38'),
(38, 'm_bayar_rb', 'fa fa-money', 'Pembayaran RB', 'Bayar_rb/index', 'Bayar_rb', 0, 1, 34, 2, 'Admin', '2018-05-21 04:40:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu_lab`
--

CREATE TABLE `tbl_menu_lab` (
  `MenuID` tinyint(4) NOT NULL,
  `MenuName` varchar(50) NOT NULL,
  `Icon` varchar(50) NOT NULL,
  `MenuLabel` varchar(50) NOT NULL,
  `MenuLink` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `MenuType` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=link,1=menu',
  `MenuLevel` tinyint(4) NOT NULL,
  `ParentID` tinyint(4) NOT NULL,
  `MenuOrder` tinyint(4) NOT NULL,
  `LastUser` varchar(8) NOT NULL,
  `LastEdit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu_lab`
--

INSERT INTO `tbl_menu_lab` (`MenuID`, `MenuName`, `Icon`, `MenuLabel`, `MenuLink`, `controller`, `MenuType`, `MenuLevel`, `ParentID`, `MenuOrder`, `LastUser`, `LastEdit`) VALUES
(1, 'm_setup', 'fa fa-home fa-fw', 'Setup', '#', '', 1, 0, 1, 1, 'Admin', '2016-01-30 21:03:26'),
(2, 'm_farmasi', 'fa fa-barcode', 'Lab Klinik', '#', '', 1, 0, 2, 2, 'Admin', '2018-05-10 18:58:31'),
(11, 'm_daftar_lab', 'fa fa-hdd-o', 'Pendaftaran Lab', 'Pendaftaran_lab/index', 'Pendaftaran_lab', 0, 1, 2, 3, 'Admin', '2018-05-10 18:58:31'),
(4, 'm_logout', 'fa fa-power-off', 'Exit', 'Web/logout', 'Web', 0, 1, 1, 2, 'Admin', '2018-05-08 13:17:51'),
(3, 'm_data_lab', 'fa fa-certificate', 'Data Laboratorium', '#', '', 1, 0, 3, 3, 'Admin', '2018-05-10 18:58:31'),
(5, 'm_satuan_lab', 'fa fa-certificate', 'Entry Satuan Lab', 'Entry_satlab/index', 'Entry_satlab', 0, 1, 3, 1, 'Admin', '2018-05-10 18:58:31'),
(6, 'm_hasil_lab', 'fa fa-building', 'Hasil Laboratorium', 'Hasil_lab/index', 'Hasil_lab', 0, 1, 2, 4, 'Admin', '2018-05-10 19:15:02'),
(7, 'm_pembayaran_lab', 'fa fa-certificate', 'Pembayaran lab', 'Pembayaran_lab/index', 'Pembayaran_lab', 0, 1, 2, 5, 'Admin', '2018-05-10 19:15:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu_pemeriksaan`
--

CREATE TABLE `tbl_menu_pemeriksaan` (
  `MenuID` tinyint(4) NOT NULL,
  `MenuName` varchar(50) NOT NULL,
  `Icon` varchar(50) NOT NULL,
  `MenuLabel` varchar(50) NOT NULL,
  `MenuLink` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `MenuType` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=link,1=menu',
  `MenuLevel` tinyint(4) NOT NULL,
  `ParentID` tinyint(4) NOT NULL,
  `MenuOrder` tinyint(4) NOT NULL,
  `LastUser` varchar(8) NOT NULL,
  `LastEdit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu_pemeriksaan`
--

INSERT INTO `tbl_menu_pemeriksaan` (`MenuID`, `MenuName`, `Icon`, `MenuLabel`, `MenuLink`, `controller`, `MenuType`, `MenuLevel`, `ParentID`, `MenuOrder`, `LastUser`, `LastEdit`) VALUES
(1, 'm_setup', 'fa fa-home fa-fw', 'Setup', '#', '', 1, 0, 1, 1, 'Admin', '2016-01-30 21:03:26'),
(2, 'm_pemeriksaan', 'fa fa-barcode', 'Pemeriksaan', '#', '', 1, 0, 2, 2, 'Admin', '2018-03-28 04:07:49'),
(11, 'm_pemeriksaan_umum', 'fa fa-hdd-o', 'Pemeriksaan Umum', 'Pemeriksaan_umum/index', 'Pemeriksaan_umum', 0, 1, 2, 3, 'Admin', '2018-03-28 04:07:49'),
(4, 'm_logout', 'fa fa-power-off', 'Exit', 'Web/logout', 'Web', 0, 1, 1, 4, 'Admin', '2018-03-22 12:26:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu_pemgizi`
--

CREATE TABLE `tbl_menu_pemgizi` (
  `MenuID` tinyint(4) NOT NULL,
  `MenuName` varchar(50) NOT NULL,
  `Icon` varchar(50) NOT NULL,
  `MenuLabel` varchar(50) NOT NULL,
  `MenuLink` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `MenuType` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=link,1=menu',
  `MenuLevel` tinyint(4) NOT NULL,
  `ParentID` tinyint(4) NOT NULL,
  `MenuOrder` tinyint(4) NOT NULL,
  `LastUser` varchar(8) NOT NULL,
  `LastEdit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu_pemgizi`
--

INSERT INTO `tbl_menu_pemgizi` (`MenuID`, `MenuName`, `Icon`, `MenuLabel`, `MenuLink`, `controller`, `MenuType`, `MenuLevel`, `ParentID`, `MenuOrder`, `LastUser`, `LastEdit`) VALUES
(1, 'm_setup', 'fa fa-home fa-fw', 'Setup', '#', '', 1, 0, 1, 1, 'Admin', '2016-01-30 21:03:26'),
(2, 'm_pemeriksaan', 'fa fa-barcode', 'Pemeriksaan', '#', '', 1, 0, 2, 2, 'Admin', '2018-03-28 04:07:49'),
(11, 'm_pemeriksaan_gizi_anak', 'fa fa-hdd-o', 'Pemeriksaan Gizi Anak', 'Pem_gizi_anak/index', 'Pem_gizi_anak', 0, 1, 2, 1, 'Admin', '2018-04-24 04:32:27'),
(4, 'm_logout', 'fa fa-power-off', 'Exit', 'Web/logout', 'Web', 0, 1, 1, 4, 'Admin', '2018-03-22 12:26:05'),
(41, 'm_company_profile', 'fa fa-building', 'Company Profile', 'company_profile/index', 'company_profile', 0, 1, 1, 1, 'admin', '2016-01-30 21:01:18'),
(5, 'm_pemeriksaan_gizi_dewasa', 'fa fa-building', 'Pemeriksaan Gizi Dewasa', 'Pem_gizi_dewasa/index', 'Pem_gizi_dewasa', 0, 1, 2, 2, 'Admin', '2018-04-24 04:31:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu_pemkb`
--

CREATE TABLE `tbl_menu_pemkb` (
  `MenuID` tinyint(4) NOT NULL,
  `MenuName` varchar(50) NOT NULL,
  `Icon` varchar(50) NOT NULL,
  `MenuLabel` varchar(50) NOT NULL,
  `MenuLink` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `MenuType` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=link,1=menu',
  `MenuLevel` tinyint(4) NOT NULL,
  `ParentID` tinyint(4) NOT NULL,
  `MenuOrder` tinyint(4) NOT NULL,
  `LastUser` varchar(8) NOT NULL,
  `LastEdit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu_pemkb`
--

INSERT INTO `tbl_menu_pemkb` (`MenuID`, `MenuName`, `Icon`, `MenuLabel`, `MenuLink`, `controller`, `MenuType`, `MenuLevel`, `ParentID`, `MenuOrder`, `LastUser`, `LastEdit`) VALUES
(1, 'm_setup', 'fa fa-home fa-fw', 'Setup', '#', '', 1, 0, 1, 1, 'Admin', '2016-01-30 21:03:26'),
(2, 'm_pemeriksaan', 'fa fa-barcode', 'Pemeriksaan', '#', '', 1, 0, 2, 2, 'Admin', '2018-03-28 04:07:49'),
(11, 'm_pemeriksaan_kb', 'fa fa-hdd-o', 'Pemeriksaan KB', 'Pem_poli_kb/index', 'Pem_poli_kb', 0, 1, 2, 3, 'Admin', '2018-05-03 09:54:05'),
(4, 'm_logout', 'fa fa-power-off', 'Exit', 'Web/logout', 'Web', 0, 1, 1, 4, 'Admin', '2018-03-22 12:26:05'),
(41, 'm_company_profile', 'fa fa-building', 'Company Profile', 'company_profile/index', 'company_profile', 0, 1, 1, 1, 'admin', '2016-01-30 21:01:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu_pgigi`
--

CREATE TABLE `tbl_menu_pgigi` (
  `MenuID` tinyint(4) NOT NULL,
  `MenuName` varchar(50) NOT NULL,
  `Icon` varchar(50) NOT NULL,
  `MenuLabel` varchar(50) NOT NULL,
  `MenuLink` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `MenuType` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=link,1=menu',
  `MenuLevel` tinyint(4) NOT NULL,
  `ParentID` tinyint(4) NOT NULL,
  `MenuOrder` tinyint(4) NOT NULL,
  `LastUser` varchar(8) NOT NULL,
  `LastEdit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu_pgigi`
--

INSERT INTO `tbl_menu_pgigi` (`MenuID`, `MenuName`, `Icon`, `MenuLabel`, `MenuLink`, `controller`, `MenuType`, `MenuLevel`, `ParentID`, `MenuOrder`, `LastUser`, `LastEdit`) VALUES
(1, 'm_setup', 'fa fa-home fa-fw', 'Setup', '#', '', 1, 0, 1, 1, 'Admin', '2016-01-30 21:03:26'),
(2, 'm_tindakan', 'fa fa-barcode', 'Tindakan', '#', '', 1, 0, 2, 2, 'Admin', '2018-03-28 09:56:21'),
(11, 'm_poli_gigi', 'fa fa-hdd-o', 'Poli Gigi', 'Tindakan_poli_gigi/index', 'Tindakan_poli_gigi', 0, 1, 2, 3, 'Admin', '2018-04-25 04:18:17'),
(4, 'm_logout', 'fa fa-power-off', 'Exit', 'Web/logout', 'Web', 0, 1, 1, 4, 'Admin', '2018-03-22 12:26:05'),
(3, 'm_rujukan_internal', 'fa fa-barcode', 'Rujukan Internal', '#', '', 1, 0, 3, 3, 'Admin', '2018-03-28 09:56:21'),
(5, 'm_umb_rujukan', 'fa fa-building', 'Umb Rujukan', 'Umb_rujukan_gigi/index', 'Umb_rujukan_gigi', 0, 1, 3, 1, 'admin', '2018-04-15 13:53:42'),
(41, 'm_company_profile', 'fa fa-building', 'Company Profile', 'company_profile/index', 'company_profile', 0, 1, 1, 1, 'admin', '2016-01-30 21:01:18'),
(8, 'm_rujukan', 'fa fa-building', 'Rujukan', 'Rujukan_gigi/index', 'Rujukan_gigi', 0, 1, 3, 0, 'admin', '2018-04-15 13:53:42'),
(7, 'm_terapi_obat', 'fa fa-certificate', 'Terapi Obat', 'Terapi_obat_gigi/index', 'Terapi_obat_gigi', 0, 1, 2, 5, 'admin', '2018-04-18 10:12:12'),
(6, 'm_resep_obat', 'fa fa-certificate', 'Resep Obat', 'Resep_obat_gigi/index', 'Resep_obat_gigi', 0, 1, 2, 4, 'Admin', '2018-04-15 13:53:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu_pgizi`
--

CREATE TABLE `tbl_menu_pgizi` (
  `MenuID` tinyint(4) NOT NULL,
  `MenuName` varchar(50) NOT NULL,
  `Icon` varchar(50) NOT NULL,
  `MenuLabel` varchar(50) NOT NULL,
  `MenuLink` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `MenuType` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=link,1=menu',
  `MenuLevel` tinyint(4) NOT NULL,
  `ParentID` tinyint(4) NOT NULL,
  `MenuOrder` tinyint(4) NOT NULL,
  `LastUser` varchar(8) NOT NULL,
  `LastEdit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu_pgizi`
--

INSERT INTO `tbl_menu_pgizi` (`MenuID`, `MenuName`, `Icon`, `MenuLabel`, `MenuLink`, `controller`, `MenuType`, `MenuLevel`, `ParentID`, `MenuOrder`, `LastUser`, `LastEdit`) VALUES
(1, 'm_setup', 'fa fa-home fa-fw', 'Setup', '#', '', 1, 0, 1, 1, 'Admin', '2016-01-30 21:03:26'),
(2, 'm_tindakan', 'fa fa-barcode', 'Tindakan', '#', '', 1, 0, 2, 2, 'Admin', '2018-03-28 09:56:21'),
(11, 'm_poli_gizi_dewasa', 'fa fa-hdd-o', 'Poli Gizi Dewasa', 'Poli_gizi_dewasa/index', 'Poli_gizi_dewasa', 0, 1, 2, 3, 'Admin', '2018-04-25 04:20:38'),
(4, 'm_logout', 'fa fa-power-off', 'Exit', 'Web/logout', 'Web', 0, 1, 1, 4, 'Admin', '2018-03-22 12:26:05'),
(3, 'm_rujukan_internal', 'fa fa-barcode', 'Rujukan Internal', '#', '', 1, 0, 3, 3, 'Admin', '2018-03-28 09:56:21'),
(5, 'm_umb_rujukan', 'fa fa-building', 'Umb Rujukan', 'Umb_rujukan_gizi/index', 'Umb_rujukan_gizi', 0, 1, 3, 1, 'admin', '2018-04-25 04:22:21'),
(41, 'm_company_profile', 'fa fa-building', 'Company Profile', 'company_profile/index', 'company_profile', 0, 1, 1, 1, 'admin', '2016-01-30 21:01:18'),
(8, 'm_rujukan', 'fa fa-building', 'Rujukan', 'Rujukan_gizi/index', 'Rujukan_gizi', 0, 1, 3, 0, 'admin', '2018-04-25 04:22:21'),
(7, 'm_terapi_obat', 'fa fa-certificate', 'Terapi Obat', 'Terapi_obat_gizi/index', 'Terapi_obat_gizi', 0, 1, 2, 5, 'admin', '2018-04-25 04:22:21'),
(6, 'm_resep_obat', 'fa fa-certificate', 'Resep Obat', 'Resep_obat_gizi/index', 'Resep_obat_gizi', 0, 1, 2, 4, 'Admin', '2018-04-25 04:22:21'),
(9, 'm_poli_gizi_anak', 'fa fa-building', 'Poli Gizi Anak', 'Poli_gizi_anak/index', 'Poli_gizi_anak', 0, 1, 2, 1, 'Admin', '2018-04-25 04:24:58'),
(10, 'm_intervensi_gizi_ibu_hamil', 'fa fa-building', 'Intervensi Gizi Ibu Hamil', 'Intervensi_gizi_bumil/index', 'Intervensi_gizi_bumil', 0, 1, 2, 2, 'Admin', '2018-04-25 04:24:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu_pkb`
--

CREATE TABLE `tbl_menu_pkb` (
  `MenuID` tinyint(4) NOT NULL,
  `MenuName` varchar(50) NOT NULL,
  `Icon` varchar(50) NOT NULL,
  `MenuLabel` varchar(50) NOT NULL,
  `MenuLink` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `MenuType` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=link,1=menu',
  `MenuLevel` tinyint(4) NOT NULL,
  `ParentID` tinyint(4) NOT NULL,
  `MenuOrder` tinyint(4) NOT NULL,
  `LastUser` varchar(8) NOT NULL,
  `LastEdit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu_pkb`
--

INSERT INTO `tbl_menu_pkb` (`MenuID`, `MenuName`, `Icon`, `MenuLabel`, `MenuLink`, `controller`, `MenuType`, `MenuLevel`, `ParentID`, `MenuOrder`, `LastUser`, `LastEdit`) VALUES
(1, 'm_setup', 'fa fa-home fa-fw', 'Setup', '#', '', 1, 0, 1, 1, 'Admin', '2016-01-30 21:03:26'),
(2, 'm_tindakan', 'fa fa-barcode', 'Tindakan', '#', '', 1, 0, 2, 2, 'Admin', '2018-03-28 09:56:21'),
(11, 'm_poli_kb', 'fa fa-hdd-o', 'Status KB', 'Tindakan_poli_kb/index', 'Tindakan_poli_kb', 0, 1, 2, 1, 'Admin', '2018-04-28 08:15:47'),
(4, 'm_logout', 'fa fa-power-off', 'Exit', 'Web/logout', 'Web', 0, 1, 1, 4, 'Admin', '2018-03-22 12:26:05'),
(3, 'm_rujukan_internal', 'fa fa-barcode', 'Rujukan Internal', '#', '', 1, 0, 3, 3, 'Admin', '2018-03-28 09:56:21'),
(5, 'm_umb_rujukan', 'fa fa-building', 'Umb Rujukan', 'Umb_rujukan_kb/index', 'Umb_rujukan_kb', 0, 1, 3, 1, 'admin', '2018-04-28 07:57:34'),
(41, 'm_company_profile', 'fa fa-building', 'Company Profile', 'company_profile/index', 'company_profile', 0, 1, 1, 1, 'admin', '2016-01-30 21:01:18'),
(8, 'm_rujukan', 'fa fa-building', 'Rujukan', 'Rujukan_kb/index', 'Rujukan_kb', 0, 1, 3, 0, 'admin', '2018-04-28 07:57:34'),
(7, 'm_terapi_obat', 'fa fa-certificate', 'Terapi Obat', 'Terapi_obat_kb/index', 'Terapi_obat_kb', 0, 1, 2, 5, 'admin', '2018-04-28 07:57:34'),
(6, 'm_resep_obat', 'fa fa-certificate', 'Resep Obat', 'Resep_obat_kb/index', 'Resep_obat_kb', 0, 1, 2, 4, 'Admin', '2018-04-28 07:57:34'),
(9, 'm_kunjungan_kb', 'fa fa-certificate', 'Kunjungan KB', 'Kunjungan_kb/index', 'Kunjungan_kb', 0, 1, 2, 2, 'Admin', '2018-04-28 08:14:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu_plansia`
--

CREATE TABLE `tbl_menu_plansia` (
  `MenuID` tinyint(4) NOT NULL,
  `MenuName` varchar(50) NOT NULL,
  `Icon` varchar(50) NOT NULL,
  `MenuLabel` varchar(50) NOT NULL,
  `MenuLink` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `MenuType` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=link,1=menu',
  `MenuLevel` tinyint(4) NOT NULL,
  `ParentID` tinyint(4) NOT NULL,
  `MenuOrder` tinyint(4) NOT NULL,
  `LastUser` varchar(8) NOT NULL,
  `LastEdit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu_plansia`
--

INSERT INTO `tbl_menu_plansia` (`MenuID`, `MenuName`, `Icon`, `MenuLabel`, `MenuLink`, `controller`, `MenuType`, `MenuLevel`, `ParentID`, `MenuOrder`, `LastUser`, `LastEdit`) VALUES
(1, 'm_setup', 'fa fa-home fa-fw', 'Setup', '#', '', 1, 0, 1, 1, 'Admin', '2016-01-30 21:03:26'),
(2, 'm_tindakan', 'fa fa-barcode', 'Tindakan', '#', '', 1, 0, 2, 2, 'Admin', '2018-03-28 09:56:21'),
(11, 'm_poli_lansia', 'fa fa-hdd-o', 'Poli Lansia', 'Tindakan_poli_lansia/index', 'Tindakan_poli_lansia', 0, 1, 2, 3, 'Admin', '2018-04-23 10:12:50'),
(4, 'm_logout', 'fa fa-power-off', 'Exit', 'Web/logout', 'Web', 0, 1, 1, 4, 'Admin', '2018-03-22 12:26:05'),
(3, 'm_rujukan_internal', 'fa fa-barcode', 'Rujukan Internal', '#', '', 1, 0, 3, 3, 'Admin', '2018-03-28 09:56:21'),
(5, 'm_umb_rujukan', 'fa fa-building', 'Umb Rujukan', 'Umb_rujukan_lansia/index', 'Umb_rujukan_lansia', 0, 1, 3, 1, 'admin', '2018-04-23 10:12:50'),
(41, 'm_company_profile', 'fa fa-building', 'Company Profile', 'company_profile/index', 'company_profile', 0, 1, 1, 1, 'admin', '2016-01-30 21:01:18'),
(8, 'm_rujukan', 'fa fa-building', 'Rujukan', 'Rujukan_lansia/index', 'Rujukan_lansia', 0, 1, 3, 0, 'admin', '2018-04-23 10:12:50'),
(7, 'm_terapi_obat', 'fa fa-certificate', 'Terapi Obat', 'Terapi_obat_lansia/index', 'Terapi_obat_lansia', 0, 1, 2, 5, 'admin', '2018-04-23 10:12:50'),
(6, 'm_resep_obat', 'fa fa-certificate', 'Resep Obat', 'Resep_obat_lansia/index', 'Resep_obat_lansia', 0, 1, 2, 4, 'Admin', '2018-04-23 10:12:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu_pumum`
--

CREATE TABLE `tbl_menu_pumum` (
  `MenuID` tinyint(4) NOT NULL,
  `MenuName` varchar(50) NOT NULL,
  `Icon` varchar(50) NOT NULL,
  `MenuLabel` varchar(50) NOT NULL,
  `MenuLink` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `MenuType` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=link,1=menu',
  `MenuLevel` tinyint(4) NOT NULL,
  `ParentID` tinyint(4) NOT NULL,
  `MenuOrder` tinyint(4) NOT NULL,
  `LastUser` varchar(8) NOT NULL,
  `LastEdit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu_pumum`
--

INSERT INTO `tbl_menu_pumum` (`MenuID`, `MenuName`, `Icon`, `MenuLabel`, `MenuLink`, `controller`, `MenuType`, `MenuLevel`, `ParentID`, `MenuOrder`, `LastUser`, `LastEdit`) VALUES
(1, 'm_setup', 'fa fa-home fa-fw', 'Setup', '#', '', 1, 0, 1, 1, 'Admin', '2016-01-30 21:03:26'),
(2, 'm_tindakan', 'fa fa-barcode', 'Tindakan', '#', '', 1, 0, 2, 2, 'Admin', '2018-03-28 09:56:21'),
(11, 'm_poli_umum', 'fa fa-hdd-o', 'Poli Umum', 'Poli_umum/index', 'Poli_umum', 0, 1, 2, 3, 'Admin', '2018-03-28 09:56:21'),
(4, 'm_logout', 'fa fa-power-off', 'Exit', 'Web/logout', 'Web', 0, 1, 1, 4, 'Admin', '2018-03-22 12:26:05'),
(3, 'm_rujukan_internal', 'fa fa-barcode', 'Rujukan Internal', '#', '', 1, 0, 3, 3, 'Admin', '2018-03-28 09:56:21'),
(5, 'm_umb_rujukan', 'fa fa-building', 'Umb Rujukan', 'Umb_rujukan_umum/index', 'Umb_rujukan_umum', 0, 1, 3, 1, 'admin', '2018-04-08 02:32:07'),
(8, 'm_rujukan', 'fa fa-building', 'Rujukan', 'Rujukan_umum/index', 'Rujukan_umum', 0, 1, 3, 0, 'admin', '2018-04-08 02:32:07'),
(7, 'm_terapi_obat', 'fa fa-certificate', 'Terapi Obat', 'List_obat_umum/index', 'List_obat_umum', 0, 1, 2, 5, 'admin', '2018-04-15 06:58:27'),
(6, 'm_resep_obat', 'fa fa-certificate', 'Resep Obat', 'Terapi_obat_umum/index', 'Terapi_obat_umum', 0, 1, 2, 4, 'Admin', '2018-03-30 13:46:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu_rb`
--

CREATE TABLE `tbl_menu_rb` (
  `MenuID` tinyint(4) NOT NULL,
  `MenuName` varchar(50) NOT NULL,
  `Icon` varchar(50) NOT NULL,
  `MenuLabel` varchar(50) NOT NULL,
  `MenuLink` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `MenuType` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=link,1=menu',
  `MenuLevel` tinyint(4) NOT NULL,
  `ParentID` tinyint(4) NOT NULL,
  `MenuOrder` tinyint(4) NOT NULL,
  `LastUser` varchar(8) NOT NULL,
  `LastEdit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu_rb`
--

INSERT INTO `tbl_menu_rb` (`MenuID`, `MenuName`, `Icon`, `MenuLabel`, `MenuLink`, `controller`, `MenuType`, `MenuLevel`, `ParentID`, `MenuOrder`, `LastUser`, `LastEdit`) VALUES
(1, 'm_setup', 'fa fa-home fa-fw', 'Setup', '#', '', 1, 0, 1, 1, 'Admin', '2016-01-30 21:03:26'),
(2, 'm_ruang_bersalin', 'fa fa-barcode', 'Ruang Bersalin', '#', '', 1, 0, 2, 2, 'Admin', '2018-05-12 03:48:15'),
(11, 'm_daftar_rb', 'fa fa-hdd-o', 'Pendaftaran RB', 'Pendaftaran_rb/index', 'Pendaftaran_rb', 0, 1, 2, 3, 'Admin', '2018-05-16 07:48:16'),
(4, 'm_logout', 'fa fa-power-off', 'Exit', 'Web/logout', 'Web', 0, 1, 1, 2, 'Admin', '2018-05-08 13:17:51'),
(6, 'm_pulang_rb', 'fa fa-building', 'Pulang RB', 'Pulang_rb/index', 'Pulang_rb', 0, 1, 2, 4, 'Admin', '2018-05-16 07:47:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `kd_pasien` int(10) NOT NULL,
  `NIK_KTP` int(20) DEFAULT NULL,
  `NAMA_LENGKAP` varchar(25) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `TEMPAT_TGL_LAHIR` varchar(25) DEFAULT NULL,
  `UMUR` varchar(13) DEFAULT NULL,
  `STATUS_MENIKAH` varchar(15) DEFAULT NULL,
  `AGAMA` varchar(14) DEFAULT NULL,
  `NO_TELPON` varchar(13) DEFAULT NULL,
  `ALAMAT` text,
  `PENDIDIKAN` varchar(15) DEFAULT NULL,
  `PEKERJAAN` varchar(15) DEFAULT NULL,
  `NO_BPJS` int(25) NOT NULL,
  `FASKES` varchar(25) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(10) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`kd_pasien`, `NIK_KTP`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `TEMPAT_TGL_LAHIR`, `UMUR`, `STATUS_MENIKAH`, `AGAMA`, `NO_TELPON`, `ALAMAT`, `PENDIDIKAN`, `PEKERJAAN`, `NO_BPJS`, `FASKES`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
(17000002, 12150686, 'sahid', 'laki-laki', 'johar,12-12-1996', '22 Tahun', '2', 'Islam', '085775165112', 'jl.johar', 'S1-Strata 1', 'Pegawai Negri', 18253776, 'Sawah besar', 0, '2', '2018-05-20 04:07:49'),
(17000003, 12150687, 'Andi nana mariana', 'perempuan', 'Jl re marta dinata priok', '21 tahun', '2', 'Islam', '085775165113', 'jl tg periuk', 'S1-Setrata 1', 'Pegawai Negri', 1211112227, 'priuk', 0, '2', '2018-03-23 08:13:38'),
(17000001, 12150685, 'Asfani', 'laki-laki', 'Lampung, 04-02-1996', '22 Tahun', 'Belum Menikah', 'Islam', '085775165112', 'mangga dua', 'S1-Setrata 1', 'Pegawai Negri', 12000, 'Sawah besar', 0, '2', '2018-03-22 12:59:24'),
(17000004, 1215068911, 'iswandi', 'Laki-laki', 'tegal,01-06-1982', '33 tahun', '2', 'Islam', '085775165112', 'JL beyamin sueb ', 'S3-Strata 3', 'Pegawai Negri', 2147483647, 'kemayoran', 0, '2', '2018-05-28 12:51:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_privillage`
--

CREATE TABLE `tbl_privillage` (
  `PrivillageID` bigint(8) NOT NULL,
  `UserCode` varchar(8) NOT NULL,
  `MenuID` tinyint(4) NOT NULL,
  `View` tinyint(4) NOT NULL,
  `New` tinyint(4) NOT NULL,
  `Edit` tinyint(4) NOT NULL,
  `Delete` tinyint(4) NOT NULL,
  `Save` tinyint(4) NOT NULL,
  `Update` tinyint(4) NOT NULL,
  `Suspend` tinyint(4) NOT NULL,
  `Print` tinyint(4) NOT NULL,
  `Approve` tinyint(4) NOT NULL,
  `LastUser` varchar(8) NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_privillage`
--

INSERT INTO `tbl_privillage` (`PrivillageID`, `UserCode`, `MenuID`, `View`, `New`, `Edit`, `Delete`, `Save`, `Update`, `Suspend`, `Print`, `Approve`, `LastUser`, `CreatedDate`) VALUES
(1, 'admin', 36, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'admin', '2016-01-27 22:38:31'),
(2, 'admin', 38, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'admin', '2016-01-26 07:25:29'),
(59, 'admin', 37, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-25 22:40:26'),
(60, 'admin', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-27 22:55:28'),
(61, 'admin', 10, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-26 02:16:58'),
(62, 'admin', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-26 06:29:22'),
(63, 'admin', 12, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-26 06:45:21'),
(64, 'admin', 21, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-26 07:06:18'),
(65, 'admin', 31, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-26 07:24:19'),
(66, 'admin', 34, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-26 01:24:36'),
(67, 'admin', 39, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-26 09:47:50'),
(68, 'admin', 27, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-02-03 09:22:15'),
(69, 'admin', 16, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-27 00:16:52'),
(70, 'admin', 19, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-25 22:40:26'),
(71, 'admin', 25, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-25 22:40:26'),
(72, 'admin', 26, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-25 22:40:26'),
(73, 'admin', 28, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-25 22:40:26'),
(74, 'admin', 13, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-25 22:40:26'),
(75, 'admin', 23, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-25 22:40:26'),
(76, 'admin', 29, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-25 22:40:26'),
(77, 'admin', 30, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-25 22:40:26'),
(78, 'admin', 20, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-02-03 09:27:50'),
(79, 'admin', 22, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-25 22:40:26'),
(80, 'admin', 32, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-25 22:40:26'),
(81, 'admin', 33, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-25 22:40:26'),
(82, 'admin', 35, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-25 22:40:26'),
(83, 'admin', 15, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-25 22:40:26'),
(84, 'admin', 17, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-25 22:40:26'),
(85, 'admin', 18, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-25 22:40:26'),
(86, 'EMP00003', 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-20 16:16:30'),
(87, 'EMP00003', 37, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-06-20 16:16:30'),
(88, 'EMP00003', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-25 22:53:19'),
(89, 'EMP00003', 10, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-20 16:16:30'),
(90, 'EMP00003', 11, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-20 16:16:30'),
(91, 'EMP00003', 12, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2017-04-08 10:32:12'),
(92, 'EMP00003', 21, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2017-04-08 10:32:12'),
(93, 'EMP00003', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-20 16:16:30'),
(94, 'EMP00003', 34, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-06-20 16:16:30'),
(95, 'EMP00003', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-20 16:16:30'),
(96, 'EMP00003', 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-20 16:16:30'),
(97, 'EMP00003', 27, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2017-04-08 10:31:29'),
(98, 'EMP00003', 16, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2017-04-08 10:31:29'),
(99, 'EMP00003', 19, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2017-04-08 10:31:29'),
(100, 'EMP00003', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-25 22:53:19'),
(101, 'EMP00003', 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-25 22:53:19'),
(102, 'EMP00003', 28, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2017-04-08 10:31:29'),
(103, 'EMP00003', 13, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2017-04-08 10:31:29'),
(104, 'EMP00003', 23, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2017-04-08 10:31:29'),
(105, 'EMP00003', 29, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2017-04-11 06:17:08'),
(106, 'EMP00003', 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-25 22:53:19'),
(107, 'EMP00003', 20, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-06-20 16:16:30'),
(108, 'EMP00003', 22, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-06-20 16:16:30'),
(109, 'EMP00003', 32, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-06-20 16:16:30'),
(110, 'EMP00003', 33, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-06-20 16:16:30'),
(111, 'EMP00003', 35, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-06-20 16:16:30'),
(112, 'EMP00003', 15, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-06-20 16:16:30'),
(113, 'EMP00003', 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-25 22:53:19'),
(114, 'EMP00003', 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-25 22:53:19'),
(115, 'EMP00001', 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(116, 'EMP00001', 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(117, 'EMP00001', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(118, 'EMP00001', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(119, 'EMP00001', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(120, 'EMP00001', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(121, 'EMP00001', 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(122, 'EMP00001', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(123, 'EMP00001', 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(124, 'EMP00001', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(125, 'EMP00001', 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(126, 'EMP00001', 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(127, 'EMP00001', 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(128, 'EMP00001', 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(129, 'EMP00001', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(130, 'EMP00001', 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(131, 'EMP00001', 28, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', '2016-10-20 09:16:04'),
(132, 'EMP00001', 13, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-02-02 15:47:04'),
(133, 'EMP00001', 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(134, 'EMP00001', 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(135, 'EMP00001', 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(136, 'EMP00001', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(137, 'EMP00001', 22, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-11 08:29:20'),
(138, 'EMP00001', 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(139, 'EMP00001', 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(140, 'EMP00001', 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(141, 'EMP00001', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(142, 'EMP00001', 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(143, 'EMP00001', 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-01-26 02:25:14'),
(144, 'admin', 41, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-30 21:10:11'),
(145, 'admin', 40, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-01-30 21:10:11'),
(146, 'admin', 45, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-02-08 07:24:37'),
(147, 'admin', 44, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-02-08 07:24:37'),
(148, 'admin', 46, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-02-08 22:12:10'),
(149, 'EMP00001', 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:24:28'),
(150, 'EMP00001', 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:24:28'),
(151, 'EMP00001', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:24:28'),
(152, 'EMP00001', 46, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:24:28'),
(153, 'EMP00001', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:24:28'),
(154, 'EMP00002', 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:24:42'),
(155, 'EMP00002', 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:24:42'),
(156, 'EMP00002', 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:30:21'),
(157, 'EMP00002', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:30:21'),
(158, 'EMP00002', 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:30:21'),
(159, 'EMP00002', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-09-07 10:58:59'),
(160, 'EMP00002', 10, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-09-07 10:59:00'),
(161, 'EMP00002', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:30:21'),
(162, 'EMP00002', 12, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-10 08:20:08'),
(163, 'EMP00002', 21, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:58:14'),
(164, 'EMP00002', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:30:21'),
(165, 'EMP00002', 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:30:21'),
(166, 'EMP00002', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:30:21'),
(167, 'EMP00002', 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:30:21'),
(168, 'EMP00002', 27, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-06 10:39:08'),
(169, 'EMP00002', 16, 1, 1, 0, 1, 1, 1, 1, 1, 0, '', '2017-03-02 04:34:30'),
(170, 'EMP00002', 19, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-06 10:39:08'),
(171, 'EMP00002', 28, 1, 1, 1, 1, 1, 0, 0, 0, 0, '', '2016-08-02 09:24:42'),
(172, 'EMP00002', 13, 1, 1, 0, 1, 1, 1, 0, 0, 0, '', '2016-02-11 01:30:21'),
(173, 'EMP00002', 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:24:42'),
(174, 'EMP00002', 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:30:21'),
(175, 'EMP00002', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-02-18 16:02:17'),
(176, 'EMP00002', 32, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 10:59:00'),
(177, 'EMP00002', 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:30:21'),
(178, 'EMP00002', 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:30:21'),
(179, 'EMP00002', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:30:21'),
(180, 'EMP00002', 46, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:30:21'),
(181, 'EMP00002', 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:30:21'),
(182, 'EMP00002', 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:30:21'),
(183, 'EMP00002', 25, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:39:08'),
(184, 'EMP00002', 26, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:39:08'),
(185, 'EMP00002', 29, 1, 0, 1, 0, 0, 0, 0, 0, 0, '', '2016-09-30 15:13:21'),
(186, 'EMP00002', 30, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-11-10 16:45:23'),
(187, 'EMP00002', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-02-11 01:30:21'),
(188, 'admin', 47, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-03-18 07:41:26'),
(189, 'admin', 49, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-03-18 08:08:28'),
(190, 'admin', 50, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-03-26 21:29:50'),
(191, 'admin', 51, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-03-30 10:00:27'),
(192, 'admin', 52, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-03-31 10:32:13'),
(193, 'admin', 53, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-04-07 10:04:52'),
(194, 'admin', 54, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-04-07 10:04:52'),
(195, 'admin', 55, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-06-19 10:02:15'),
(196, 'admin', 56, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-04-23 11:12:26'),
(197, 'admin', 57, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-04-27 10:24:37'),
(198, 'admin', 58, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-04-30 14:09:34'),
(199, 'admin', 59, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-05-19 11:58:03'),
(200, 'EMP00003', 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-20 16:16:29'),
(201, 'EMP00003', 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-20 16:20:15'),
(202, 'EMP00003', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-20 16:16:30'),
(203, 'EMP00003', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-20 16:16:30'),
(204, 'EMP00003', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-20 16:16:30'),
(205, 'EMP00003', 46, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-20 16:16:30'),
(206, 'EMP00003', 53, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-20 16:16:30'),
(207, 'EMP00003', 54, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-20 16:16:30'),
(208, 'EMP00003', 56, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2017-05-03 01:06:44'),
(209, 'EMP00003', 58, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2017-05-02 09:02:44'),
(210, 'EMP00003', 59, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-20 16:16:30'),
(211, 'EMP00003', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-20 16:16:30'),
(212, 'EMP00003', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-20 16:16:30'),
(213, 'EMP00003', 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-20 16:16:30'),
(214, 'EMP00003', 51, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-20 16:16:30'),
(215, 'EMP00003', 57, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-20 16:16:30'),
(216, 'EMP00004', 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(217, 'EMP00004', 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(218, 'EMP00004', 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(219, 'EMP00004', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(220, 'EMP00004', 37, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-06-30 09:56:30'),
(221, 'EMP00004', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(222, 'EMP00004', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(223, 'EMP00004', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(224, 'EMP00004', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(225, 'EMP00004', 21, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-06-30 09:56:30'),
(226, 'EMP00004', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(227, 'EMP00004', 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(228, 'EMP00004', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(229, 'EMP00004', 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(230, 'EMP00004', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(231, 'EMP00004', 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(232, 'EMP00004', 16, 1, 1, 0, 1, 1, 1, 1, 1, 0, '', '2017-03-02 04:36:29'),
(233, 'EMP00004', 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(234, 'EMP00004', 28, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-06-30 09:56:30'),
(235, 'EMP00004', 13, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-06-30 09:56:30'),
(236, 'EMP00004', 23, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-06-30 09:56:30'),
(237, 'EMP00004', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(238, 'EMP00004', 22, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-11 08:29:38'),
(239, 'EMP00004', 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(240, 'EMP00004', 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(241, 'EMP00004', 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(242, 'EMP00004', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(243, 'EMP00004', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(244, 'EMP00004', 46, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(245, 'EMP00004', 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(246, 'EMP00004', 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(247, 'EMP00004', 53, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(248, 'EMP00004', 54, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(249, 'EMP00004', 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(250, 'EMP00004', 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(251, 'EMP00004', 59, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-06-30 09:56:31'),
(252, 'EMP00004', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(253, 'EMP00004', 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(254, 'EMP00004', 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(255, 'EMP00004', 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(256, 'EMP00004', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(257, 'EMP00004', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(258, 'EMP00004', 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(259, 'EMP00004', 51, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:51:03'),
(260, 'EMP00004', 57, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-06-30 09:56:31'),
(261, 'EMP00009', 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(262, 'EMP00009', 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(263, 'EMP00009', 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(264, 'EMP00009', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(265, 'EMP00009', 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(266, 'EMP00009', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(267, 'EMP00009', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(268, 'EMP00009', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(269, 'EMP00009', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(270, 'EMP00009', 21, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:55'),
(271, 'EMP00009', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(272, 'EMP00009', 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(273, 'EMP00009', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(274, 'EMP00009', 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(275, 'EMP00009', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(276, 'EMP00009', 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(277, 'EMP00009', 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(278, 'EMP00009', 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(279, 'EMP00009', 28, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', '2016-10-20 09:18:04'),
(280, 'EMP00009', 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(281, 'EMP00009', 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(282, 'EMP00009', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(283, 'EMP00009', 22, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-11 08:30:47'),
(284, 'EMP00009', 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(285, 'EMP00009', 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(286, 'EMP00009', 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(287, 'EMP00009', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(288, 'EMP00009', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(289, 'EMP00009', 46, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(290, 'EMP00009', 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(291, 'EMP00009', 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(292, 'EMP00009', 53, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(293, 'EMP00009', 54, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(294, 'EMP00009', 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(295, 'EMP00009', 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(296, 'EMP00009', 59, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(297, 'EMP00009', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(298, 'EMP00009', 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(299, 'EMP00009', 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(300, 'EMP00009', 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(301, 'EMP00009', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(302, 'EMP00009', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(303, 'EMP00009', 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(304, 'EMP00009', 51, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(305, 'EMP00009', 57, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 11:53:09'),
(306, 'EMP00012', 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(307, 'EMP00012', 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(308, 'EMP00012', 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(309, 'EMP00012', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(310, 'EMP00012', 37, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-06-30 12:07:51'),
(311, 'EMP00012', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(312, 'EMP00012', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(313, 'EMP00012', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(314, 'EMP00012', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(315, 'EMP00012', 21, 1, 1, 0, 1, 1, 1, 1, 1, 1, '', '2016-09-26 11:02:09'),
(316, 'EMP00012', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(317, 'EMP00012', 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(318, 'EMP00012', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(319, 'EMP00012', 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(320, 'EMP00012', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(321, 'EMP00012', 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(322, 'EMP00012', 16, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', '2016-09-23 15:19:59'),
(323, 'EMP00012', 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(324, 'EMP00012', 28, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', '2016-10-20 09:20:23'),
(325, 'EMP00012', 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(326, 'EMP00012', 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(327, 'EMP00012', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(328, 'EMP00012', 22, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-02-02 15:43:21'),
(329, 'EMP00012', 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(330, 'EMP00012', 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(331, 'EMP00012', 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(332, 'EMP00012', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(333, 'EMP00012', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(334, 'EMP00012', 46, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(335, 'EMP00012', 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(336, 'EMP00012', 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(337, 'EMP00012', 53, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(338, 'EMP00012', 54, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(339, 'EMP00012', 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(340, 'EMP00012', 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(341, 'EMP00012', 59, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(342, 'EMP00012', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(343, 'EMP00012', 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(344, 'EMP00012', 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(345, 'EMP00012', 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(346, 'EMP00012', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(347, 'EMP00012', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(348, 'EMP00012', 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(349, 'EMP00012', 51, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(350, 'EMP00012', 57, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-20 09:20:23'),
(351, 'EMP00006', 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(352, 'EMP00006', 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(353, 'EMP00006', 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(354, 'EMP00006', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(355, 'EMP00006', 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(356, 'EMP00006', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(357, 'EMP00006', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(358, 'EMP00006', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(359, 'EMP00006', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(360, 'EMP00006', 21, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:58:54'),
(361, 'EMP00006', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(362, 'EMP00006', 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(363, 'EMP00006', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(364, 'EMP00006', 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(365, 'EMP00006', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(366, 'EMP00006', 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(367, 'EMP00006', 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(368, 'EMP00006', 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(369, 'EMP00006', 28, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', '2016-10-20 09:16:53'),
(370, 'EMP00006', 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:37:20'),
(371, 'EMP00006', 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(372, 'EMP00006', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(373, 'EMP00006', 22, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-11 08:30:16'),
(374, 'EMP00006', 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(375, 'EMP00006', 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(376, 'EMP00006', 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(377, 'EMP00006', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(378, 'EMP00006', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(379, 'EMP00006', 46, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(380, 'EMP00006', 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(381, 'EMP00006', 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(382, 'EMP00006', 53, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(383, 'EMP00006', 54, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(384, 'EMP00006', 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(385, 'EMP00006', 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(386, 'EMP00006', 59, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(387, 'EMP00006', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(388, 'EMP00006', 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(389, 'EMP00006', 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(390, 'EMP00006', 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(391, 'EMP00006', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(392, 'EMP00006', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(393, 'EMP00006', 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(394, 'EMP00006', 51, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(395, 'EMP00006', 57, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-06-30 12:35:45'),
(396, 'EMP00013', 41, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-11-11 15:50:47'),
(397, 'EMP00013', 40, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-11-11 15:50:53'),
(398, 'EMP00013', 36, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-11-11 15:51:00'),
(399, 'EMP00013', 45, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-11-11 15:51:09'),
(400, 'EMP00013', 37, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(401, 'EMP00013', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(402, 'EMP00013', 10, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(403, 'EMP00013', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(404, 'EMP00013', 12, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(405, 'EMP00013', 21, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(406, 'EMP00013', 31, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(407, 'EMP00013', 34, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(408, 'EMP00013', 38, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(409, 'EMP00013', 39, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(410, 'EMP00013', 47, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(411, 'EMP00013', 27, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(412, 'EMP00013', 16, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(413, 'EMP00013', 19, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(414, 'EMP00013', 28, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(415, 'EMP00013', 13, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(416, 'EMP00013', 23, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(417, 'EMP00013', 20, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(418, 'EMP00013', 22, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(419, 'EMP00013', 32, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(420, 'EMP00013', 33, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(421, 'EMP00013', 35, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(422, 'EMP00013', 52, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(423, 'EMP00013', 15, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(424, 'EMP00013', 46, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(425, 'EMP00013', 17, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(426, 'EMP00013', 18, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(427, 'EMP00013', 53, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(428, 'EMP00013', 54, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(429, 'EMP00013', 56, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(430, 'EMP00013', 58, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(431, 'EMP00013', 59, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(432, 'EMP00013', 25, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(433, 'EMP00013', 26, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(434, 'EMP00013', 29, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(435, 'EMP00013', 30, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(436, 'EMP00013', 44, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(437, 'EMP00013', 50, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(438, 'EMP00013', 49, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(439, 'EMP00013', 51, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(440, 'EMP00013', 57, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-01 09:35:08'),
(441, 'EMP00001', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:22:11'),
(442, 'EMP00001', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:22:11'),
(443, 'EMP00001', 53, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:22:11'),
(444, 'EMP00001', 54, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:22:11'),
(445, 'EMP00001', 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:22:11'),
(446, 'EMP00001', 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:22:11'),
(447, 'EMP00001', 59, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:22:11'),
(448, 'EMP00001', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:22:11'),
(449, 'EMP00001', 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:22:11'),
(450, 'EMP00001', 51, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:22:11'),
(451, 'EMP00001', 57, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:22:11'),
(452, 'EMP00002', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:24:42'),
(453, 'EMP00002', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:24:42'),
(454, 'EMP00002', 53, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:24:42'),
(455, 'EMP00002', 54, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:24:42'),
(456, 'EMP00002', 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:24:42'),
(457, 'EMP00002', 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:24:42'),
(458, 'EMP00002', 59, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:24:42'),
(459, 'EMP00002', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:24:42'),
(460, 'EMP00002', 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:24:42'),
(461, 'EMP00002', 51, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:24:42'),
(462, 'EMP00002', 57, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-02 09:24:42'),
(463, 'EMP00005', 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(464, 'EMP00005', 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(465, 'EMP00005', 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(466, 'EMP00005', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(467, 'EMP00005', 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(468, 'EMP00005', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(469, 'EMP00005', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(470, 'EMP00005', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(471, 'EMP00005', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(472, 'EMP00005', 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(473, 'EMP00005', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(474, 'EMP00005', 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(475, 'EMP00005', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(476, 'EMP00005', 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(477, 'EMP00005', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(478, 'EMP00005', 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(479, 'EMP00005', 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(480, 'EMP00005', 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(481, 'EMP00005', 28, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', '2016-10-20 09:16:31'),
(482, 'EMP00005', 13, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-02-02 15:47:45'),
(483, 'EMP00005', 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(484, 'EMP00005', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(485, 'EMP00005', 22, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-11 08:29:59'),
(486, 'EMP00005', 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(487, 'EMP00005', 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(488, 'EMP00005', 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(489, 'EMP00005', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(490, 'EMP00005', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(491, 'EMP00005', 46, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(492, 'EMP00005', 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(493, 'EMP00005', 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(494, 'EMP00005', 53, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(495, 'EMP00005', 54, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(496, 'EMP00005', 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(497, 'EMP00005', 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(498, 'EMP00005', 59, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(499, 'EMP00005', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(500, 'EMP00005', 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(501, 'EMP00005', 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(502, 'EMP00005', 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(503, 'EMP00005', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(504, 'EMP00005', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(505, 'EMP00005', 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(506, 'EMP00005', 51, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(507, 'EMP00005', 57, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:08'),
(508, 'EMP00008', 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(509, 'EMP00008', 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(510, 'EMP00008', 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(511, 'EMP00008', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(512, 'EMP00008', 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(513, 'EMP00008', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(514, 'EMP00008', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(515, 'EMP00008', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(516, 'EMP00008', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(517, 'EMP00008', 21, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:39'),
(518, 'EMP00008', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(519, 'EMP00008', 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(520, 'EMP00008', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(521, 'EMP00008', 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(522, 'EMP00008', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(523, 'EMP00008', 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(524, 'EMP00008', 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(525, 'EMP00008', 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(526, 'EMP00008', 28, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-06 10:13:21'),
(527, 'EMP00008', 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(528, 'EMP00008', 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(529, 'EMP00008', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(530, 'EMP00008', 22, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-11 09:46:50'),
(531, 'EMP00008', 32, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-22 10:47:56'),
(532, 'EMP00008', 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(533, 'EMP00008', 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(534, 'EMP00008', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(535, 'EMP00008', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(536, 'EMP00008', 46, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(537, 'EMP00008', 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(538, 'EMP00008', 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(539, 'EMP00008', 53, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(540, 'EMP00008', 54, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(541, 'EMP00008', 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(542, 'EMP00008', 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(543, 'EMP00008', 59, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(544, 'EMP00008', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(545, 'EMP00008', 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(546, 'EMP00008', 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(547, 'EMP00008', 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(548, 'EMP00008', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(549, 'EMP00008', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(550, 'EMP00008', 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(551, 'EMP00008', 51, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(552, 'EMP00008', 57, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-06 10:13:21'),
(553, 'EMP00016', 41, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(554, 'EMP00016', 40, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(555, 'EMP00016', 36, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(556, 'EMP00016', 45, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2018-02-06 06:33:08'),
(557, 'EMP00016', 37, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(558, 'EMP00016', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(559, 'EMP00016', 10, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(560, 'EMP00016', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(561, 'EMP00016', 12, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(562, 'EMP00016', 21, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(563, 'EMP00016', 31, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(564, 'EMP00016', 34, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(565, 'EMP00016', 38, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(566, 'EMP00016', 39, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(567, 'EMP00016', 47, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(568, 'EMP00016', 27, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(569, 'EMP00016', 16, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(570, 'EMP00016', 19, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(571, 'EMP00016', 28, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(572, 'EMP00016', 13, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(573, 'EMP00016', 23, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(574, 'EMP00016', 20, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(575, 'EMP00016', 22, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(576, 'EMP00016', 32, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(577, 'EMP00016', 33, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(578, 'EMP00016', 35, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(579, 'EMP00016', 52, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(580, 'EMP00016', 15, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(581, 'EMP00016', 46, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(582, 'EMP00016', 17, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(583, 'EMP00016', 18, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(584, 'EMP00016', 53, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(585, 'EMP00016', 54, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(586, 'EMP00016', 56, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(587, 'EMP00016', 58, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(588, 'EMP00016', 59, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(589, 'EMP00016', 25, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(590, 'EMP00016', 26, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(591, 'EMP00016', 29, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(592, 'EMP00016', 30, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(593, 'EMP00016', 44, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(594, 'EMP00016', 50, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(595, 'EMP00016', 49, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(596, 'EMP00016', 51, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(597, 'EMP00016', 57, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-18 11:13:23'),
(598, 'EMP00017', 41, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(599, 'EMP00017', 40, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(600, 'EMP00017', 36, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(601, 'EMP00017', 45, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(602, 'EMP00017', 37, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(603, 'EMP00017', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(604, 'EMP00017', 10, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(605, 'EMP00017', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(606, 'EMP00017', 12, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(607, 'EMP00017', 21, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(608, 'EMP00017', 31, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(609, 'EMP00017', 34, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(610, 'EMP00017', 38, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(611, 'EMP00017', 39, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(612, 'EMP00017', 47, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(613, 'EMP00017', 27, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(614, 'EMP00017', 16, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(615, 'EMP00017', 19, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(616, 'EMP00017', 28, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(617, 'EMP00017', 13, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(618, 'EMP00017', 23, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(619, 'EMP00017', 20, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(620, 'EMP00017', 22, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(621, 'EMP00017', 32, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(622, 'EMP00017', 33, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(623, 'EMP00017', 35, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(624, 'EMP00017', 52, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(625, 'EMP00017', 15, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(626, 'EMP00017', 46, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(627, 'EMP00017', 17, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(628, 'EMP00017', 18, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(629, 'EMP00017', 53, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(630, 'EMP00017', 54, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(631, 'EMP00017', 56, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(632, 'EMP00017', 58, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(633, 'EMP00017', 59, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(634, 'EMP00017', 25, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(635, 'EMP00017', 26, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(636, 'EMP00017', 29, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(637, 'EMP00017', 30, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(638, 'EMP00017', 44, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(639, 'EMP00017', 50, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(640, 'EMP00017', 49, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(641, 'EMP00017', 51, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(642, 'EMP00017', 57, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 11:17:41'),
(643, 'EMP00018', 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(644, 'EMP00018', 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(645, 'EMP00018', 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(646, 'EMP00018', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(647, 'EMP00018', 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(648, 'EMP00018', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(649, 'EMP00018', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(650, 'EMP00018', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(651, 'EMP00018', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(652, 'EMP00018', 21, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:46'),
(653, 'EMP00018', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(654, 'EMP00018', 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(655, 'EMP00018', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(656, 'EMP00018', 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(657, 'EMP00018', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(658, 'EMP00018', 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(659, 'EMP00018', 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(660, 'EMP00018', 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(661, 'EMP00018', 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(662, 'EMP00018', 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(663, 'EMP00018', 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(664, 'EMP00018', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(665, 'EMP00018', 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(666, 'EMP00018', 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(667, 'EMP00018', 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(668, 'EMP00018', 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(669, 'EMP00018', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(670, 'EMP00018', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(671, 'EMP00018', 46, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:03:12'),
(672, 'EMP00018', 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(673, 'EMP00018', 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(674, 'EMP00018', 53, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:03:12'),
(675, 'EMP00018', 54, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:03:12'),
(676, 'EMP00018', 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(677, 'EMP00018', 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(678, 'EMP00018', 59, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(679, 'EMP00018', 25, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:03:12'),
(680, 'EMP00018', 26, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:03:12'),
(681, 'EMP00018', 29, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:03:12'),
(682, 'EMP00018', 30, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:03:12'),
(683, 'EMP00018', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:03:12'),
(684, 'EMP00018', 50, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:05:34'),
(685, 'EMP00018', 49, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:05:34'),
(686, 'EMP00018', 51, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:05:34'),
(687, 'EMP00018', 57, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:05:34'),
(688, 'EMP00019', 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(689, 'EMP00019', 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(690, 'EMP00019', 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(691, 'EMP00019', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(692, 'EMP00019', 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(693, 'EMP00019', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(694, 'EMP00019', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(695, 'EMP00019', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(696, 'EMP00019', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(697, 'EMP00019', 21, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:01:00'),
(698, 'EMP00019', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(699, 'EMP00019', 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(700, 'EMP00019', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(701, 'EMP00019', 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(702, 'EMP00019', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(703, 'EMP00019', 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(704, 'EMP00019', 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(705, 'EMP00019', 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(706, 'EMP00019', 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(707, 'EMP00019', 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(708, 'EMP00019', 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(709, 'EMP00019', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(710, 'EMP00019', 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(711, 'EMP00019', 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(712, 'EMP00019', 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(713, 'EMP00019', 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(714, 'EMP00019', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(715, 'EMP00019', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(716, 'EMP00019', 46, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:05:05'),
(717, 'EMP00019', 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(718, 'EMP00019', 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(719, 'EMP00019', 53, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:05:05'),
(720, 'EMP00019', 54, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:05:05'),
(721, 'EMP00019', 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(722, 'EMP00019', 58, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:05:05');
INSERT INTO `tbl_privillage` (`PrivillageID`, `UserCode`, `MenuID`, `View`, `New`, `Edit`, `Delete`, `Save`, `Update`, `Suspend`, `Print`, `Approve`, `LastUser`, `CreatedDate`) VALUES
(723, 'EMP00019', 59, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(724, 'EMP00019', 25, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:05:05'),
(725, 'EMP00019', 26, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:05:05'),
(726, 'EMP00019', 29, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:05:05'),
(727, 'EMP00019', 30, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:05:05'),
(728, 'EMP00019', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-08-30 13:05:05'),
(729, 'EMP00019', 50, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:05:05'),
(730, 'EMP00019', 49, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:05:05'),
(731, 'EMP00019', 51, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:05:51'),
(732, 'EMP00019', 57, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-08-30 13:05:51'),
(1003, 'EMP00003', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-01 14:10:23'),
(733, 'EMP00011', 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(734, 'EMP00011', 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(735, 'EMP00011', 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(736, 'EMP00011', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(737, 'EMP00011', 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(738, 'EMP00011', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(739, 'EMP00011', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(740, 'EMP00011', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(741, 'EMP00011', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(742, 'EMP00011', 21, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 09:03:24'),
(743, 'EMP00011', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(744, 'EMP00011', 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(745, 'EMP00011', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(746, 'EMP00011', 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(747, 'EMP00011', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(748, 'EMP00011', 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(749, 'EMP00011', 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(750, 'EMP00011', 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(751, 'EMP00011', 28, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', '2016-10-20 09:14:18'),
(752, 'EMP00011', 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(753, 'EMP00011', 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(754, 'EMP00011', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(755, 'EMP00011', 22, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-11 08:31:32'),
(756, 'EMP00011', 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(757, 'EMP00011', 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(758, 'EMP00011', 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(759, 'EMP00011', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(760, 'EMP00011', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(761, 'EMP00011', 46, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(762, 'EMP00011', 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(763, 'EMP00011', 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(764, 'EMP00011', 53, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(765, 'EMP00011', 54, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(766, 'EMP00011', 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(767, 'EMP00011', 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(768, 'EMP00011', 59, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(769, 'EMP00011', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(770, 'EMP00011', 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(771, 'EMP00011', 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(772, 'EMP00011', 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(773, 'EMP00011', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(774, 'EMP00011', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(775, 'EMP00011', 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(776, 'EMP00011', 51, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(777, 'EMP00011', 57, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-06 08:59:04'),
(778, 'EMP00007', 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:19'),
(779, 'EMP00007', 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(780, 'EMP00007', 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(781, 'EMP00007', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(782, 'EMP00007', 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(783, 'EMP00007', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(784, 'EMP00007', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(785, 'EMP00007', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(786, 'EMP00007', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(787, 'EMP00007', 21, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(788, 'EMP00007', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(789, 'EMP00007', 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(790, 'EMP00007', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(791, 'EMP00007', 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(792, 'EMP00007', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(793, 'EMP00007', 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(794, 'EMP00007', 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(795, 'EMP00007', 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(796, 'EMP00007', 28, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', '2016-10-20 09:15:08'),
(797, 'EMP00007', 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(798, 'EMP00007', 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(799, 'EMP00007', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(800, 'EMP00007', 22, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-11 08:30:30'),
(801, 'EMP00007', 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(802, 'EMP00007', 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(803, 'EMP00007', 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(804, 'EMP00007', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(805, 'EMP00007', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(806, 'EMP00007', 46, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(807, 'EMP00007', 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(808, 'EMP00007', 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(809, 'EMP00007', 53, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(810, 'EMP00007', 54, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(811, 'EMP00007', 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(812, 'EMP00007', 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(813, 'EMP00007', 59, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(814, 'EMP00007', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(815, 'EMP00007', 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(816, 'EMP00007', 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(817, 'EMP00007', 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(818, 'EMP00007', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(819, 'EMP00007', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(820, 'EMP00007', 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(821, 'EMP00007', 51, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(822, 'EMP00007', 57, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 08:59:20'),
(823, 'EMP00010', 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(824, 'EMP00010', 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(825, 'EMP00010', 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(826, 'EMP00010', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(827, 'EMP00010', 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(828, 'EMP00010', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(829, 'EMP00010', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(830, 'EMP00010', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(831, 'EMP00010', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(832, 'EMP00010', 21, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(833, 'EMP00010', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(834, 'EMP00010', 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(835, 'EMP00010', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(836, 'EMP00010', 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(837, 'EMP00010', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(838, 'EMP00010', 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(839, 'EMP00010', 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(840, 'EMP00010', 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(841, 'EMP00010', 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(842, 'EMP00010', 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(843, 'EMP00010', 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(844, 'EMP00010', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(845, 'EMP00010', 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(846, 'EMP00010', 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(847, 'EMP00010', 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(848, 'EMP00010', 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(849, 'EMP00010', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(850, 'EMP00010', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(851, 'EMP00010', 46, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(852, 'EMP00010', 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(853, 'EMP00010', 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(854, 'EMP00010', 53, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(855, 'EMP00010', 54, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(856, 'EMP00010', 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(857, 'EMP00010', 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(858, 'EMP00010', 59, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(859, 'EMP00010', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(860, 'EMP00010', 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(861, 'EMP00010', 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(862, 'EMP00010', 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(863, 'EMP00010', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(864, 'EMP00010', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(865, 'EMP00010', 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(866, 'EMP00010', 51, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(867, 'EMP00010', 57, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-07 09:00:09'),
(868, 'EMP00020', 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(869, 'EMP00020', 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(870, 'EMP00020', 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(871, 'EMP00020', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(872, 'EMP00020', 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(873, 'EMP00020', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(874, 'EMP00020', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(875, 'EMP00020', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(876, 'EMP00020', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(877, 'EMP00020', 21, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(878, 'EMP00020', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(879, 'EMP00020', 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(880, 'EMP00020', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(881, 'EMP00020', 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(882, 'EMP00020', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(883, 'EMP00020', 27, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(884, 'EMP00020', 16, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(885, 'EMP00020', 19, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(886, 'EMP00020', 28, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(887, 'EMP00020', 13, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(888, 'EMP00020', 23, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(889, 'EMP00020', 20, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-03 15:18:01'),
(890, 'EMP00020', 22, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-09-14 15:59:25'),
(891, 'EMP00020', 32, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-09-14 15:59:25'),
(892, 'EMP00020', 33, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-09-14 15:59:25'),
(893, 'EMP00020', 35, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-09-14 15:59:25'),
(894, 'EMP00020', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(895, 'EMP00020', 15, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-09-14 15:59:25'),
(896, 'EMP00020', 46, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(897, 'EMP00020', 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(898, 'EMP00020', 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(899, 'EMP00020', 53, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(900, 'EMP00020', 54, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(901, 'EMP00020', 56, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-09-14 15:59:25'),
(902, 'EMP00020', 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(903, 'EMP00020', 59, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(904, 'EMP00020', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(905, 'EMP00020', 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(906, 'EMP00020', 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(907, 'EMP00020', 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(908, 'EMP00020', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(909, 'EMP00020', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(910, 'EMP00020', 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(911, 'EMP00020', 51, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(912, 'EMP00020', 57, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-14 15:59:25'),
(913, 'EMP00021', 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(914, 'EMP00021', 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(915, 'EMP00021', 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(916, 'EMP00021', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(917, 'EMP00021', 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(918, 'EMP00021', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(919, 'EMP00021', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(920, 'EMP00021', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(921, 'EMP00021', 12, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-09-26 11:11:23'),
(922, 'EMP00021', 21, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-09-26 11:11:23'),
(923, 'EMP00021', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(924, 'EMP00021', 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(925, 'EMP00021', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(926, 'EMP00021', 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(927, 'EMP00021', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(928, 'EMP00021', 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(929, 'EMP00021', 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(930, 'EMP00021', 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(931, 'EMP00021', 28, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-09-26 11:11:23'),
(932, 'EMP00021', 13, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-09-26 11:11:23'),
(933, 'EMP00021', 23, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-09-26 11:11:23'),
(934, 'EMP00021', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(935, 'EMP00021', 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(936, 'EMP00021', 32, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-09-26 11:11:23'),
(937, 'EMP00021', 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(938, 'EMP00021', 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(939, 'EMP00021', 52, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-09-26 11:11:23'),
(940, 'EMP00021', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(941, 'EMP00021', 46, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(942, 'EMP00021', 17, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-09-26 11:11:23'),
(943, 'EMP00021', 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(944, 'EMP00021', 53, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(945, 'EMP00021', 54, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-09-26 11:11:23'),
(946, 'EMP00021', 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(947, 'EMP00021', 58, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-09-26 11:11:23'),
(948, 'EMP00021', 59, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-09-26 11:11:23'),
(949, 'EMP00021', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(950, 'EMP00021', 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(951, 'EMP00021', 29, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(952, 'EMP00021', 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(953, 'EMP00021', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(954, 'EMP00021', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(955, 'EMP00021', 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(956, 'EMP00021', 51, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-09-26 11:11:23'),
(957, 'EMP00021', 57, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-09-26 11:11:23'),
(958, 'EMP00015', 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-05 08:26:41'),
(959, 'EMP00015', 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-05 08:26:41'),
(960, 'EMP00015', 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-05 08:26:41'),
(961, 'EMP00015', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-10-05 08:26:41'),
(962, 'EMP00015', 37, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:24:55'),
(963, 'EMP00015', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:24:55'),
(964, 'EMP00015', 10, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:24:55'),
(965, 'EMP00015', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:24:55'),
(966, 'EMP00015', 12, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:24:55'),
(967, 'EMP00015', 21, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-06 15:03:24'),
(968, 'EMP00015', 31, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:24:55'),
(969, 'EMP00015', 34, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:24:55'),
(970, 'EMP00015', 38, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:24:55'),
(971, 'EMP00015', 39, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:24:55'),
(972, 'EMP00015', 47, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:24:55'),
(973, 'EMP00015', 27, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:24:55'),
(974, 'EMP00015', 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-22 09:28:51'),
(975, 'EMP00015', 19, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:24:55'),
(976, 'EMP00015', 28, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:24:55'),
(977, 'EMP00015', 13, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:24:55'),
(978, 'EMP00015', 23, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:24:55'),
(979, 'EMP00015', 20, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-11-25 15:26:43'),
(980, 'EMP00015', 22, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-11-02 14:46:40'),
(981, 'EMP00015', 32, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:24:55'),
(982, 'EMP00015', 33, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:24:55'),
(983, 'EMP00015', 35, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:25:47'),
(984, 'EMP00015', 52, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:25:47'),
(985, 'EMP00015', 15, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:25:47'),
(986, 'EMP00015', 46, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:25:47'),
(987, 'EMP00015', 17, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:25:47'),
(988, 'EMP00015', 18, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:25:47'),
(989, 'EMP00015', 53, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:25:47'),
(990, 'EMP00015', 54, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:25:47'),
(991, 'EMP00015', 56, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:25:47'),
(992, 'EMP00015', 58, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:25:47'),
(993, 'EMP00015', 59, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:25:47'),
(994, 'EMP00015', 25, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:25:47'),
(995, 'EMP00015', 26, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:25:47'),
(996, 'EMP00015', 29, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:25:47'),
(997, 'EMP00015', 30, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:25:47'),
(998, 'EMP00015', 44, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:25:47'),
(999, 'EMP00015', 50, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:25:47'),
(1000, 'EMP00015', 49, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:25:47'),
(1001, 'EMP00015', 51, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:25:47'),
(1002, 'EMP00015', 57, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-10-05 08:25:47'),
(1004, 'admin', 60, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-11-01 15:11:47'),
(1005, 'EMP00015', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-02 14:46:40'),
(1006, 'EMP00002', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-10 16:45:23'),
(1007, 'EMP00001', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-11 08:28:38'),
(1008, 'EMP00004', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-11 08:29:02'),
(1009, 'EMP00005', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-11 08:29:59'),
(1010, 'EMP00006', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-11 08:30:16'),
(1011, 'EMP00007', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-11 08:30:30'),
(1012, 'EMP00009', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-11 08:30:47'),
(1013, 'EMP00011', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-11 08:31:32'),
(1014, 'EMP00008', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-11 09:46:50'),
(1015, 'EMP00013', 60, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-11-11 15:52:26'),
(1016, 'EMP00013', 61, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-11-11 15:52:26'),
(1017, 'admin', 61, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2016-11-11 16:01:56'),
(1018, 'EMP00003', 61, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-12 11:50:43'),
(1019, 'EMP00004', 61, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-22 10:03:42'),
(1020, 'EMP00015', 61, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-11-23 14:06:20'),
(1021, 'EMP00017', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-12-06 16:16:45'),
(1022, 'EMP00017', 61, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2016-12-06 16:16:46'),
(1023, 'EMP00023', 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1024, 'EMP00023', 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1025, 'EMP00023', 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1026, 'EMP00023', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1027, 'EMP00023', 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1028, 'EMP00023', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1029, 'EMP00023', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1030, 'EMP00023', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1031, 'EMP00023', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1032, 'EMP00023', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1033, 'EMP00023', 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1034, 'EMP00023', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1035, 'EMP00023', 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1036, 'EMP00023', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1037, 'EMP00023', 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1038, 'EMP00023', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1039, 'EMP00023', 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1040, 'EMP00023', 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1041, 'EMP00023', 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1042, 'EMP00023', 28, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', '2017-01-03 10:25:58'),
(1043, 'EMP00023', 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1044, 'EMP00023', 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1045, 'EMP00023', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1046, 'EMP00023', 22, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-02-02 15:44:24'),
(1047, 'EMP00023', 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1048, 'EMP00023', 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1049, 'EMP00023', 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1050, 'EMP00023', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1051, 'EMP00023', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1052, 'EMP00023', 46, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1053, 'EMP00023', 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1054, 'EMP00023', 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1055, 'EMP00023', 53, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1056, 'EMP00023', 54, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1057, 'EMP00023', 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1058, 'EMP00023', 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1059, 'EMP00023', 59, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1060, 'EMP00023', 61, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1061, 'EMP00023', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1062, 'EMP00023', 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1063, 'EMP00023', 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1064, 'EMP00023', 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1065, 'EMP00023', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1066, 'EMP00023', 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1067, 'EMP00023', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1068, 'EMP00023', 51, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1069, 'EMP00023', 57, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-01-03 10:25:58'),
(1070, 'EMP00012', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-02-02 15:41:09'),
(1071, 'EMP00012', 61, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-02-02 15:41:09'),
(1072, 'EMP00001', 61, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-02-02 15:47:04'),
(1073, 'EMP00005', 61, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-02-02 15:47:45'),
(1074, 'EMP00002', 61, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-02-18 15:53:13'),
(1075, 'EMP00024', 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1076, 'EMP00024', 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1077, 'EMP00024', 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1078, 'EMP00024', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1079, 'EMP00024', 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1080, 'EMP00024', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1081, 'EMP00024', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1082, 'EMP00024', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1083, 'EMP00024', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1084, 'EMP00024', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1085, 'EMP00024', 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1086, 'EMP00024', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1087, 'EMP00024', 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1088, 'EMP00024', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1089, 'EMP00024', 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1090, 'EMP00024', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1091, 'EMP00024', 27, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2017-05-28 11:36:31'),
(1092, 'EMP00024', 16, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2017-05-28 11:36:31'),
(1093, 'EMP00024', 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1094, 'EMP00024', 28, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2017-05-28 11:36:31'),
(1095, 'EMP00024', 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1096, 'EMP00024', 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1097, 'EMP00024', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1098, 'EMP00024', 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1099, 'EMP00024', 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1100, 'EMP00024', 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1101, 'EMP00024', 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1102, 'EMP00024', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1103, 'EMP00024', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1104, 'EMP00024', 46, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1105, 'EMP00024', 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1106, 'EMP00024', 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1107, 'EMP00024', 53, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1108, 'EMP00024', 54, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1109, 'EMP00024', 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1110, 'EMP00024', 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1111, 'EMP00024', 59, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1112, 'EMP00024', 61, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1113, 'EMP00024', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1114, 'EMP00024', 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1115, 'EMP00024', 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1116, 'EMP00024', 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1117, 'EMP00024', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1118, 'EMP00024', 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1119, 'EMP00024', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1120, 'EMP00024', 51, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1121, 'EMP00024', 57, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-05-28 11:36:31'),
(1122, 'EMP00016', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-05 09:39:54'),
(1123, 'EMP00016', 61, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-05 09:39:54'),
(1124, 'EMP00025', 41, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2018-02-28 22:49:09'),
(1125, 'EMP00025', 40, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2018-02-28 22:49:09'),
(1126, 'EMP00025', 36, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2018-02-28 22:49:09'),
(1127, 'EMP00025', 45, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2018-02-28 22:49:09'),
(1128, 'EMP00025', 37, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2018-02-28 22:49:09'),
(1129, 'EMP00025', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1130, 'EMP00025', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1131, 'EMP00025', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1132, 'EMP00025', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1133, 'EMP00025', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1134, 'EMP00025', 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1135, 'EMP00025', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1136, 'EMP00025', 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1137, 'EMP00025', 38, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2018-02-28 22:50:00'),
(1138, 'EMP00025', 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1139, 'EMP00025', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1140, 'EMP00025', 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1141, 'EMP00025', 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1142, 'EMP00025', 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1143, 'EMP00025', 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1144, 'EMP00025', 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1145, 'EMP00025', 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1146, 'EMP00025', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1147, 'EMP00025', 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1148, 'EMP00025', 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1149, 'EMP00025', 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1150, 'EMP00025', 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1151, 'EMP00025', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1152, 'EMP00025', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1153, 'EMP00025', 46, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1154, 'EMP00025', 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1155, 'EMP00025', 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1156, 'EMP00025', 53, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1157, 'EMP00025', 54, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1158, 'EMP00025', 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1159, 'EMP00025', 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1160, 'EMP00025', 59, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1161, 'EMP00025', 61, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1162, 'EMP00025', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1163, 'EMP00025', 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1164, 'EMP00025', 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1165, 'EMP00025', 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1166, 'EMP00025', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1167, 'EMP00025', 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1168, 'EMP00025', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1169, 'EMP00025', 51, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09'),
(1170, 'EMP00025', 57, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-28 22:49:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL,
  `id_employee` varchar(15) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` text,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `terakhir_login` datetime DEFAULT NULL,
  `id_job` varchar(15) DEFAULT NULL,
  `level` varchar(30) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `LAST_USER` varchar(15) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_employee`, `username`, `password`, `tgl_daftar`, `terakhir_login`, `id_job`, `level`, `status`, `LAST_USER`, `CREATE_DATE`) VALUES
(1, NULL, 'dilans', 'sukses', '2020-03-12 04:57:00', '2020-03-12 11:03:00', NULL, 'admin', 0, 'Admin', '2020-03-12 04:57:00'),
(2, NULL, 'epus', 'sukses1', '2020-03-12 04:55:59', '2020-03-12 11:03:59', NULL, 'pendaftaran', 0, 'Admin', '2020-03-12 04:55:59'),
(3, NULL, 'epus', 'sukses2', '2020-03-12 04:55:59', '2020-03-12 11:03:59', NULL, 'pemeriksaan', 0, 'Admin', '2020-03-12 04:55:59'),
(4, 'MP0001', 'Dr.nana', 'sukses3', '2018-07-12 07:11:56', '2018-07-12 14:07:56', 'JV0001', 'poli umum', 0, 'Admin', '2018-07-12 07:11:56'),
(5, 'MP0010', 'Dr.ifan', 'sukses4', '2018-07-11 03:12:34', '2018-07-11 10:07:34', 'JV0011', 'poli gigi', 0, 'Admin', '2018-07-11 03:12:34'),
(6, NULL, 'martin', 'sukses5', '2018-05-28 10:03:09', '2018-05-28 17:05:09', NULL, 'poli gizi', 0, 'Admin', '2018-05-28 10:03:09'),
(7, NULL, 'rahma', 'sukses6', '2020-03-12 04:32:44', '2020-03-12 11:03:44', NULL, 'poli kia', 0, 'Admin', '2020-03-12 04:32:44'),
(8, NULL, 'fifi', 'sukses7', '2018-05-18 06:37:02', '2018-05-18 13:05:02', NULL, 'pemeriksaan gizi', 0, 'Admin', '2018-05-18 06:37:02'),
(9, NULL, 'dr.lisa', 'sukses8', '2018-05-18 06:23:33', '2018-05-18 13:05:33', NULL, 'poli kb', 0, 'Admin', '2018-05-18 06:23:33'),
(10, NULL, 'dr.ujang', 'sukses9', '2018-05-17 07:35:56', '2018-05-17 14:05:56', NULL, 'poli lansia', 0, 'Admin', '2018-05-17 07:35:56'),
(11, NULL, 'dr.boy', 'sukses10', '0000-00-00 00:00:00', '2018-02-26 16:02:12', NULL, 'poli tb', 0, 'Admin', '2018-04-19 07:50:00'),
(12, NULL, 'Dr.surya', 'sukses11', '0000-00-00 00:00:00', '2018-03-07 11:03:10', NULL, 'poli mtbs', 0, 'Admin', '2018-04-19 07:50:00'),
(13, NULL, 'oktaviani', 'sukses12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'pemeriksaan MTBS', 0, 'Admin', '2018-04-19 07:50:44'),
(14, 'MP0003', 'Aldi', 'harus12', '2018-07-12 12:26:31', '2018-07-12 19:07:31', 'JV0004', 'ruang bersalin', 0, 'Admin', '2018-07-12 12:26:31'),
(15, 'MP0004', 'Putri', 'sukses13', '2018-05-05 07:55:45', '2018-05-05 14:05:45', 'JV0005', 'pemeriksaan kb', 0, 'Admin', '2018-05-05 07:55:45'),
(16, 'MP0005', 'Muhajir', 'sukses14', '2020-03-12 04:33:35', '2020-03-12 11:03:35', 'JV0006', 'farmasi', 0, 'Admin', '2020-03-12 04:33:35'),
(17, 'MP0006', 'Dr.hendi', 'sukses15', '2020-03-12 04:34:22', '2020-03-12 11:03:22', 'JV0007', 'laboratorium', 0, 'Admin', '2020-03-12 04:34:22'),
(18, 'MP0007', 'Dr.wahid', 'harus', '2018-07-01 00:00:16', '2018-07-01 07:07:16', 'JV0008', 'kepala puskesmas', 0, 'Admin', '2018-07-01 00:00:16'),
(19, 'MP0008', 'Dr.jefri', 'harus1', '2018-06-30 23:59:25', '2018-07-01 06:07:25', 'JV0009', 'kepala pelayanan', 0, 'Admin', '2018-06-30 23:59:25'),
(20, 'MP0009', 'akromi', 'akrom', '2018-06-29 13:32:12', '2018-06-29 20:06:12', 'JV0010', 'pendaftaran', 0, 'Admin', '2018-06-29 13:32:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berobat`
--

CREATE TABLE `tb_berobat` (
  `ID_BEROBAT` varchar(10) NOT NULL,
  `KODE_PASIEN` int(10) NOT NULL,
  `NAMA_LENGKAP` varchar(25) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `TEMPAT_TGL_LAHIR` varchar(27) DEFAULT NULL,
  `UMUR` varchar(12) DEFAULT NULL,
  `STATUS_MENIKAH` varchar(15) DEFAULT NULL,
  `AGAMA` varchar(15) DEFAULT NULL,
  `NO_TELPON` varchar(13) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `PENDIDIKAN` varchar(13) DEFAULT NULL,
  `PEKERJAAN` varchar(17) DEFAULT NULL,
  `NO_BPJS` int(25) NOT NULL,
  `FASKES` varchar(25) DEFAULT NULL,
  `JAM_MASUK` varchar(15) DEFAULT NULL,
  `TGL_MASUK` varchar(17) DEFAULT NULL,
  `NAMA_UNIT` varchar(15) DEFAULT NULL,
  `NAMA_DOKTER` varchar(15) DEFAULT NULL,
  `PEMERIKSAAN` varchar(25) DEFAULT NULL,
  `BIAYA` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berobat`
--

INSERT INTO `tb_berobat` (`ID_BEROBAT`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `TEMPAT_TGL_LAHIR`, `UMUR`, `STATUS_MENIKAH`, `AGAMA`, `NO_TELPON`, `ALAMAT`, `PENDIDIKAN`, `PEKERJAAN`, `NO_BPJS`, `FASKES`, `JAM_MASUK`, `TGL_MASUK`, `NAMA_UNIT`, `NAMA_DOKTER`, `PEMERIKSAAN`, `BIAYA`) VALUES
('KJ00001', 17000001, 'Asfani', 'laki-laki', 'Lampung, 04-02-1996', '22 Tahun', 'Belum Menikah', 'Islam', '085775165112', 'mangga dua', 's1', 'Pegawai Swata', 12000, 'Sawah besar', '7.55', '11/12/2017', 'Poli umum', 'Dr.sudirman', 'Periksa Tekanan darah', 0),
('KJ00002', 17000002, 'sahid', 'laki-laki', 'johar,12-12-1996', '22 Tahun', 'Belum Menikah', 'Islam', '085775165112', 'jln', 's1', 'swasta', 18253776, 'Sawah besar', '08.24', '11/12/2017', 'Poli umum', 'Dr.sudirman', 'Periksa Tekanan darah', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berobat1`
--

CREATE TABLE `tb_berobat1` (
  `ID_BEROBAT` varchar(10) NOT NULL,
  `KODE_PASIEN` int(10) NOT NULL,
  `NAMA_LENGKAP` varchar(25) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `TEMPAT_TGL_LAHIR` varchar(27) DEFAULT NULL,
  `UMUR` varchar(12) DEFAULT NULL,
  `NO_TELPON` varchar(13) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` int(25) NOT NULL,
  `FASKES` varchar(25) DEFAULT NULL,
  `ID_UNIT` varchar(10) DEFAULT NULL,
  `ID_DOKTER` varchar(10) DEFAULT NULL,
  `ID_NAMA_PEMERIKSAAN` varchar(15) DEFAULT NULL,
  `PEMERIKSAAN` varchar(25) DEFAULT NULL,
  `BIAYA` double NOT NULL,
  `trans_status` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(10) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berobat1`
--

INSERT INTO `tb_berobat1` (`ID_BEROBAT`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `TEMPAT_TGL_LAHIR`, `UMUR`, `NO_TELPON`, `ALAMAT`, `NO_BPJS`, `FASKES`, `ID_UNIT`, `ID_DOKTER`, `ID_NAMA_PEMERIKSAAN`, `PEMERIKSAAN`, `BIAYA`, `trans_status`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('KJ00001', 17000001, 'Asfani', 'laki-laki', 'Lampung, 04-02-1996', '22 Tahun', '085775165112', 'mangga dua', 12000, 'Sawah besar', 'U001', 'DK0001', 'PE003', 'Cek Td', 0, 1, 0, '2', '2018-07-11 08:15:06'),
('KJ00002', 17000002, 'sahid', 'laki-laki', 'johar,12-12-1996', '22 Tahun', '085775165112', 'jln', 18253776, 'Sawah besar', 'U001', 'DK0001', 'PE003', 'Cek Td', 0, 1, 0, '2', '2018-07-12 06:26:34'),
('KJ00003', 17000001, 'Asfani', 'laki-laki', 'Lampung, 04-02-1996', '22 Tahun', '085775165112', 'mangga dua', 12000, 'Sawah besar', 'U001', 'DK0001', 'PE003', 'Cek Tensi darah ', 0, 1, 0, '2', '2018-07-12 07:08:48'),
('KJ00004', 17000001, 'Asfani', 'laki-laki', 'Lampung, 04-02-1996', '22 Tahun', '085775165112', 'mangga dua', 12000, 'Sawah besar', 'U002', 'DK0002', 'PE001', 'Cabut gigi', 0, 0, 0, '2', '2018-05-20 04:24:47'),
('KJ00005', 17000004, 'iswandi', 'Laki-laki', 'tegal,01-06-1982', '33 tahun', '085775165112', 'JL beyamin sueb ', 2147483647, 'kemayoran', 'U001', 'DK0001', 'PE003', 'Cek Td ', 0, 0, 0, '2', '2018-05-20 04:25:39'),
('KJ00006', 17000004, 'iswandi', 'Laki-laki', 'tegal,01-06-1982', '33 tahun', '085775165112', 'JL beyamin sueb ', 2147483647, 'kemayoran', 'U002', 'DK0002', 'PE004', 'Cabut gigi', 0, 0, 0, '2', '2018-06-13 03:24:06'),
('KJ00007', 17000004, 'iswandi', 'Laki-laki', 'tegal,01-06-1982', '33 tahun', '085775165112', 'JL beyamin sueb ', 2147483647, 'kemayoran', 'U002', 'DK0002', 'PE001', 'Cabut gigi', 0, 0, 1, '2', '2018-06-12 14:23:04'),
('KJ00008', 17000001, 'Asfani', 'laki-laki', 'Lampung, 04-02-1996', '22 Tahun', '085775165112', 'mangga dua', 12000, 'Sawah besar', 'U008', 'DK0001', 'PE006', 'Priksa td', 0, 0, 0, '2', '2018-07-11 02:58:28'),
('KJ00009', 17000003, 'Andi nana mariana', 'perempuan', 'Jl re marta dinata priok', '21 tahun', '085775165113', 'jl tg periuk', 1211112227, 'priuk', 'U009', 'DK0009', 'PE006', 'Priksa td', 0, 2, 0, '2', '2018-07-12 08:05:31'),
('KJ00010', 17000003, 'Andi nana mariana', 'perempuan', 'Jl re marta dinata priok', '21 tahun', '085775165113', 'jl tg periuk', 1211112227, 'priuk', 'U008', 'DK0004', 'PE006', 'Priksa td', 0, 1, 0, '2', '2018-07-12 12:53:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cek_labo`
--

CREATE TABLE `tb_cek_labo` (
  `ID_CEK_LAB` varchar(15) NOT NULL,
  `PEMERIKSAAN_LAB` varchar(50) DEFAULT NULL,
  `PRIKSA` varchar(30) DEFAULT NULL,
  `NILAI_NORMAL` varchar(20) DEFAULT NULL,
  `SATUAN` varchar(20) DEFAULT NULL,
  `ID_DT_LAB` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_cek_labo`
--

INSERT INTO `tb_cek_labo` (`ID_CEK_LAB`, `PEMERIKSAAN_LAB`, `PRIKSA`, `NILAI_NORMAL`, `SATUAN`, `ID_DT_LAB`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('CK0001', 'Cek darah', 'Hemoglogin', '13,0 - 17,4', 'g/dl', 'DT0002', 0, '1', '2018-04-23 02:31:58'),
('CK0002', 'Cek darah', 'Eritrosit', '4,4 - 5,5 ', 'juta/mm3', 'DT0002', 0, '1', '2018-04-23 02:31:15'),
('CK0003', 'Kolestrol Total', 'Emot', '112,0 - 115,0', 'mmg', 'DT0001', 0, '1', '2018-05-12 03:17:40'),
('CK0004', 'Kolestrol Total', 'konsot', '0,12 - 0,17', 'mmhg', 'DT0001', 0, '1', '2018-05-12 03:18:17'),
('CK0005', 'Cek darah', 'konsulit', '44,10 - 47-12', 'g/dl', 'DT0002', 0, '17', '2018-05-12 03:23:14'),
('CK0006', 'Cek darah', 'kimenit', '12.0/15.0', 'moh', 'DT0002', 0, '17', '2018-06-20 00:04:08'),
('CK0007', 'Kolestrol Total', 'miniut', '10.1 - 12.0', 'mmhg', 'DT0001', 0, '17', '2018-06-20 00:05:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftar_lab`
--

CREATE TABLE `tb_daftar_lab` (
  `ID_DAFTAR_LAB` varchar(15) NOT NULL,
  `KODE_PASIEN` int(15) NOT NULL,
  `NAMA_LENGKAP` varchar(70) DEFAULT NULL,
  `UMUR` varchar(55) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` int(30) NOT NULL,
  `TGL_MASUK` date NOT NULL,
  `ID_DT_LAB` varchar(15) DEFAULT NULL,
  `PEMERIKSAAN_LAB` varchar(70) DEFAULT NULL,
  `ID_DOKTER` varchar(15) NOT NULL,
  `ID_BEROBAT` varchar(15) DEFAULT NULL,
  `trans_status` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_daftar_lab`
--

INSERT INTO `tb_daftar_lab` (`ID_DAFTAR_LAB`, `KODE_PASIEN`, `NAMA_LENGKAP`, `UMUR`, `ALAMAT`, `NO_BPJS`, `TGL_MASUK`, `ID_DT_LAB`, `PEMERIKSAAN_LAB`, `ID_DOKTER`, `ID_BEROBAT`, `trans_status`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('DLB00001', 17000001, 'Asfani', '22 Tahun', 'mangga dua', 12000, '2018-05-11', 'DT0002', 'Cek darah', 'DK0009', 'KJ00003', 1, 0, '17', '2018-07-12 08:43:34'),
('DLB00002', 17000002, 'sahid', '22 Tahun', 'jln.johar baru', 18253776, '2018-05-15', 'DT0001', 'Kolestrol Total', 'DK0009', 'KJ00002', 0, 1, '17', '2018-07-12 08:27:31'),
('DLB00003', 17000003, 'Andi nana mariana', '21 tahun', 'jl tg periuk', 1211112227, '2018-07-12', 'DT0002', 'Cek darah', 'DK0009', 'KJ00009', 2, 0, '17', '2018-07-12 08:46:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_lab`
--

CREATE TABLE `tb_data_lab` (
  `ID_DT_LAB` varchar(15) NOT NULL,
  `NAMA_PEMERIKSAAN` varchar(50) DEFAULT NULL,
  `TARIF` double NOT NULL,
  `TGL_BERLAKU` varchar(15) DEFAULT NULL,
  `KETERANGAN` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_data_lab`
--

INSERT INTO `tb_data_lab` (`ID_DT_LAB`, `NAMA_PEMERIKSAAN`, `TARIF`, `TGL_BERLAKU`, `KETERANGAN`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('DT0001', 'Kolestrol Total', 20000, '06/02/2018', 'lancar', 0, '1', '2018-04-22 10:48:24'),
('DT0002', 'Cek darah', 20000, '04/22/2019', 'ok', 0, '1', '2018-04-22 13:05:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_diagnosa`
--

CREATE TABLE `tb_diagnosa` (
  `ID_DIAGNOSA` varchar(15) NOT NULL,
  `DESKRIPSI_ICD` text,
  `SUB_ICD` text,
  `status` tinyint(4) NOT NULL,
  `LAST_USER` varchar(10) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_diagnosa`
--

INSERT INTO `tb_diagnosa` (`ID_DIAGNOSA`, `DESKRIPSI_ICD`, `SUB_ICD`, `status`, `LAST_USER`, `CREATE_DATE`) VALUES
('AC0001', 'darah putih', '--', 0, 'Admin', '2018-03-21 10:49:45'),
('AC0002', 'darah merah', 'korelatif', 0, 'Admin', '2018-03-21 10:49:45'),
('AC0003', 'aclogik', 'sakit kepala dan batuk', 0, 'Admin', '2018-03-22 03:09:33'),
('AC0004', 'eronic', 'flu dan batuk', 0, 'Admin', '2018-03-29 17:00:00'),
('AC0005', 'eritrosit', 'kurang gizi', 0, 'Admin', '2018-05-09 17:00:00'),
('AC0006', 'Gizi buruk', 'kurang gizi', 0, 'Admin', '2018-05-17 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `ID_DOKTER` varchar(10) NOT NULL,
  `NAMA_DOKTER` varchar(20) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_TELPON` varchar(14) DEFAULT NULL,
  `TITLE` varchar(12) DEFAULT NULL,
  `SPESIALIST` varchar(22) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(10) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dokter`
--

INSERT INTO `tb_dokter` (`ID_DOKTER`, `NAMA_DOKTER`, `JENIS_KELAMIN`, `ALAMAT`, `NO_TELPON`, `TITLE`, `SPESIALIST`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('DK0001', 'Dr.Nana', 'Perempuan', 'Jakarta pusat', '085775165112', 'S.UMUM', 'spesialist umum', 0, '1', '2018-03-28 10:26:46'),
('DK0002', 'Dr.sunarto', 'Laki-laki', 'jakarta barat', '087787776676', 'S.GG', 'spesialit gigi', 0, '1', '2018-03-26 07:27:35'),
('DK0003', 'Dr.sahid', 'Laki-laki', 'johar baru jakarta pusat', '089888124444', 'S.BALITA', 'balita', 0, '1', '2018-03-26 07:27:35'),
('DK0004', 'Dr.iswandi', 'laki-laki', 'jl kemayoran', '085775165112', 'S.kom', 'gigi dan gusi', 0, '1', '2018-03-26 07:58:00'),
('DK0005', 'Dr.ujang', 'laki-laki', 'jakrta utara', '085775165112', 's.kom', 'spesialist lansia', 0, '1', '2018-04-22 17:00:00'),
('DK0006', 'Dr.martin', 'Laki-laki', 'jakarta selatan', '085775165112', 'S.gizi', 'Spesialist Gizi', 0, '1', '2018-04-26 17:00:00'),
('DK0007', 'Dr.lisa', 'Perempuan', 'Jakarta selatan', '085775165112', 'S.kb', 'Spesialist Kb', 0, '1', '2018-05-04 17:00:00'),
('DK0008', 'Dr.boy', 'laki-laki', 'jakarta pusat', '085775165112', 'S.umum', 'spesialist umum', 1, '1', '2018-05-25 15:49:59'),
('DK0009', 'Dr.hendi', 'laki-laki', 'bogor barat', '085775165112', 'S.lab', 'Spesialist Laboratoriu', 0, '1', '2018-05-25 17:08:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_employee`
--

CREATE TABLE `tb_employee` (
  `ID_EMPLOYEE` varchar(15) NOT NULL,
  `NAMA_LENGKAP` varchar(50) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `ID_JOB` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_employee`
--

INSERT INTO `tb_employee` (`ID_EMPLOYEE`, `NAMA_LENGKAP`, `ALAMAT`, `ID_JOB`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('MP0001', 'Dr.nana', 'jakarta utara', 'JV0001', 0, '1', '2018-04-19 10:22:08'),
('MP0002', 'Asfani', 'jakarta barat', 'JV0002', 0, '1', '2018-04-19 10:21:20'),
('MP0003', 'Aldi', 'jakarta selatan', 'JV0004', 0, '1', '2018-04-19 12:08:03'),
('MP0004', 'Putri', 'jakarta barat', 'JV0005', 0, '1', '2018-05-03 03:18:51'),
('MP0005', 'Muhajir', 'bekasi utara', 'JV0006', 0, '1', '2018-05-07 14:06:32'),
('MP0006', 'Dr.hendi', 'depok baru', 'JV0007', 0, '1', '2018-05-10 18:51:34'),
('MP0007', 'Dr.wahid', 'jakarta pusat', 'JV0008', 0, '1', '2018-05-20 06:58:27'),
('MP0008', 'Dr.jefri', 'jakarta selatan', 'JV0009', 0, '1', '2018-06-21 09:54:38'),
('MP0009', 'akromi', 'jakarta', 'JV0010', 0, '1', '2018-06-29 13:29:52'),
('MP0010', 'Dr.ifan', 'jakarta utarra', 'JV0011', 0, '1', '2018-07-11 03:11:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_farmasi`
--

CREATE TABLE `tb_farmasi` (
  `ID_FARMASI` varchar(10) NOT NULL,
  `KODE_PASIEN` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(35) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `DIAGNOSA` varchar(100) DEFAULT NULL,
  `JUMLAH_OBAT` int(11) NOT NULL,
  `ID_UNIT` varchar(15) DEFAULT NULL,
  `ID_EMPLOYEE` varchar(10) NOT NULL,
  `ID_RESEP_OBAT` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(10) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_farmasi`
--

INSERT INTO `tb_farmasi` (`ID_FARMASI`, `KODE_PASIEN`, `NAMA_LENGKAP`, `UMUR`, `DIAGNOSA`, `JUMLAH_OBAT`, `ID_UNIT`, `ID_EMPLOYEE`, `ID_RESEP_OBAT`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('FAR000001', 17000002, 'sahid', '22 Tahun', 'eronic', 2, 'U001', 'MP0005', 'KJ00002', 0, '16', '2018-06-19 01:19:06'),
('FAR000002', 17000001, 'Asfani', '22 Tahun', 'aclogik', 2, 'U002', 'MP0005', 'KJ00001', 0, '16', '2018-05-20 06:41:35'),
('FAR000003', 17000004, 'iswandi', '33 tahun', 'aclogik', 1, 'U001', 'MP0005', 'KJ00005', 1, '16', '2018-06-19 01:18:15'),
('FAR000004', 17000001, 'Asfani', '22 Tahun', 'eritrosit', 2, 'U002', 'MP0005', 'KJ00001', 0, '16', '2018-05-20 06:42:31'),
('FAR000005', 17000004, 'iswandi', '33 tahun', 'eritrosit', 2, 'U003', 'MP0005', 'KJ00005', 0, '16', '2018-05-20 06:45:30'),
('FAR000006', 17000002, 'sahid', '22 Tahun', 'eronic', 2, 'U001', 'MP0005', 'KJ00002', 0, '16', '2018-05-21 12:54:15'),
('FAR000007', 17000001, 'Asfani', '22 Tahun', 'eronic', 2, 'U001', 'MP0005', 'KJ00008', 0, '16', '2018-06-29 13:56:59'),
('FAR000008', 17000001, 'Asfani', '22 Tahun', 'eronic', 2, 'U001', 'MP0005', 'TUO00005', 0, '16', '2018-07-11 05:04:30'),
('FAR000009', 17000002, 'sahid', '22 Tahun', 'aclogik', 2, 'U001', 'MP0005', 'TUO00006', 0, '16', '2018-07-11 07:30:25'),
('FAR000010', 17000002, 'sahid', '22 Tahun', 'eronic', 2, 'U001', 'MP0005', 'TUO00007', 0, '16', '2018-07-12 07:58:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gizi_anak`
--

CREATE TABLE `tb_gizi_anak` (
  `ID_GIZI_ANAK` varchar(15) NOT NULL,
  `KODE_PASIEN` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(50) DEFAULT NULL,
  `TEMPAT_TGL_LAHIR` varchar(50) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` int(50) NOT NULL,
  `NAMA_ORTU` varchar(30) DEFAULT NULL,
  `PEKERJAAN_ORTU` varchar(20) DEFAULT NULL,
  `ANAK_KE` varchar(15) DEFAULT NULL,
  `DIAGNOSA_MEDIS` varchar(20) DEFAULT NULL,
  `BB_LAHIR` varchar(10) DEFAULT NULL,
  `PB_LAHIR` varchar(10) DEFAULT NULL,
  `UMUR_KEHAMILAN` varchar(15) DEFAULT NULL,
  `KELAHIRAN` varchar(15) DEFAULT NULL,
  `BERAT_BADAN` varchar(15) DEFAULT NULL,
  `TINGGI_BADAN` varchar(15) DEFAULT NULL,
  `IMT` varchar(15) DEFAULT NULL,
  `BIOKIMIA` varchar(35) DEFAULT NULL,
  `FISIK_KLINIS` text NOT NULL,
  `ASI_EKSEKUTIF` varchar(15) DEFAULT NULL,
  `MKN_SELAIN_ASI` varchar(35) DEFAULT NULL,
  `ALERGI_MKNAN` varchar(20) DEFAULT NULL,
  `MAKANAN_POKOK` varchar(20) DEFAULT NULL,
  `LAUK_HEWANI` varchar(20) DEFAULT NULL,
  `LAUK_NABATI` varchar(20) DEFAULT NULL,
  `SAYUR` varchar(20) DEFAULT NULL,
  `BUAH` varchar(20) DEFAULT NULL,
  `SELINGAN` varchar(35) DEFAULT NULL,
  `ID_DIAGNOSA` varchar(15) DEFAULT NULL,
  `DESKRIPSI_ICD` text NOT NULL,
  `ID_PG_ANAK` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gizi_anak`
--

INSERT INTO `tb_gizi_anak` (`ID_GIZI_ANAK`, `KODE_PASIEN`, `NAMA_LENGKAP`, `TEMPAT_TGL_LAHIR`, `ALAMAT`, `NO_BPJS`, `NAMA_ORTU`, `PEKERJAAN_ORTU`, `ANAK_KE`, `DIAGNOSA_MEDIS`, `BB_LAHIR`, `PB_LAHIR`, `UMUR_KEHAMILAN`, `KELAHIRAN`, `BERAT_BADAN`, `TINGGI_BADAN`, `IMT`, `BIOKIMIA`, `FISIK_KLINIS`, `ASI_EKSEKUTIF`, `MKN_SELAIN_ASI`, `ALERGI_MKNAN`, `MAKANAN_POKOK`, `LAUK_HEWANI`, `LAUK_NABATI`, `SAYUR`, `BUAH`, `SELINGAN`, `ID_DIAGNOSA`, `DESKRIPSI_ICD`, `ID_PG_ANAK`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('GZA00001', 17000001, 'Asfani', 'Lampung, 04-02-1996', 'mangga dua', 0, 'Kasiman', 'petani', '4 dari 4', 'kurang gizi', '2 kg', '2', '8 bulan', 'Tunggal', '20 kg', '56 cm', NULL, '--', 'badan nya kurus muka nya pucat', 'asi', 'pisang', 'ikan', 'nasi telur', 'ayam', 'singkong', 'sawi', 'pisang', 'sumsum', '', 'corellatif', '', 0, '6', '2018-04-25 04:42:54'),
('GZA00002', 17000001, 'Asfani', 'Lampung, 04-02-1996', 'mangga dua', 12000, 'kasiman', 'petani', '4 dari 4', 'darah merah', '4 kg', '20', '9 bulan 10 hari', 'Kembar', '40 kg', '30 cm ', '-', '-', 'badan kurus dan pucat', 'iya', 'pisang', 'ikan teri', 'nasi uduk', 'ayam', 'pisang', 'bayam', 'pisang', 'bubur', 'AC0003', 'aclogik', 'PGA00001', 0, '6', '2018-04-26 04:15:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gizi_dewasa`
--

CREATE TABLE `tb_gizi_dewasa` (
  `ID_GIZI_DEWASA` varchar(15) NOT NULL,
  `KODE_PASIEN` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(50) DEFAULT NULL,
  `TEMPAT_TGL_LAHIR` varchar(25) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `AGAMA` varchar(15) DEFAULT NULL,
  `PENDIDIKAN` varchar(20) DEFAULT NULL,
  `PEKERJAAN` varchar(20) DEFAULT NULL,
  `NO_BPJS` int(50) NOT NULL,
  `DIAGNOSA_MEDIS` varchar(35) DEFAULT NULL,
  `TINGGI_BADAN` varchar(10) DEFAULT NULL,
  `BERAT_BADAN` varchar(10) DEFAULT NULL,
  `IMT` varchar(10) DEFAULT NULL,
  `LLA` varchar(10) DEFAULT NULL,
  `L_PERUT` varchar(10) DEFAULT NULL,
  `L_PANGGUL` varchar(10) DEFAULT NULL,
  `STATUS_GIZI` varchar(20) DEFAULT NULL,
  `BIOKIMIA` varchar(10) DEFAULT NULL,
  `KONDISI_UMUM` varchar(10) DEFAULT NULL,
  `TEKANAN_DARAH` varchar(10) DEFAULT NULL,
  `SUHU_TUBUH` varchar(10) DEFAULT NULL,
  `KLINIS` varchar(45) DEFAULT NULL,
  `ALERGI_MAKANAN` varchar(20) DEFAULT NULL,
  `MAKANAN_POKOK` varchar(20) DEFAULT NULL,
  `LAUH_HEWANI` varchar(20) DEFAULT NULL,
  `LAUH_NABATI` varchar(20) DEFAULT NULL,
  `SAYUR` varchar(20) DEFAULT NULL,
  `BUAH` varchar(20) DEFAULT NULL,
  `SELINGAN` varchar(20) DEFAULT NULL,
  `ID_DIAGNOSA` varchar(10) DEFAULT NULL,
  `DESKRIPSI_ICD` varchar(25) DEFAULT NULL,
  `ID_PG_DEWASA` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gizi_dewasa`
--

INSERT INTO `tb_gizi_dewasa` (`ID_GIZI_DEWASA`, `KODE_PASIEN`, `NAMA_LENGKAP`, `TEMPAT_TGL_LAHIR`, `ALAMAT`, `AGAMA`, `PENDIDIKAN`, `PEKERJAAN`, `NO_BPJS`, `DIAGNOSA_MEDIS`, `TINGGI_BADAN`, `BERAT_BADAN`, `IMT`, `LLA`, `L_PERUT`, `L_PANGGUL`, `STATUS_GIZI`, `BIOKIMIA`, `KONDISI_UMUM`, `TEKANAN_DARAH`, `SUHU_TUBUH`, `KLINIS`, `ALERGI_MAKANAN`, `MAKANAN_POKOK`, `LAUH_HEWANI`, `LAUH_NABATI`, `SAYUR`, `BUAH`, `SELINGAN`, `ID_DIAGNOSA`, `DESKRIPSI_ICD`, `ID_PG_DEWASA`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('GZD00001', 17000002, 'sahid', 'johar,30-30-1996', 'jln', 'Islam', 's1', 'swasta', 2147483647, 'kurang gizi', '167 CM', '65 Kg', '20', '20', '20', '20', 'Kurus', '--', 'kurus muka', '120/80', '20', 'kurus ', 'makan ikann', 'nasi telur', 'ayam dan ikan', 'singkong', 'sawi', 'jambu biji', 'kelanting', 'ac001', 'corelatif', 'PGD00001', 0, '6', '2018-04-26 12:59:08'),
('GZD00002', 17000004, 'iswandi', 'tegal,01-06-1982', 'JL beyamin sueb ', 'Islam', 'S3-Strata 3', 'Pewai Negri', 2147483647, 'darah merah', '175 cm', '70 kg', '0', '20', '20', '20', 'Kurus', '0', 'Kurus', '120/80 mmh', '20', 'kurus', 'ayam', 'nasi', 'daging sapi', 'sayur ', 'bayam', 'pisang', 'kripik', 'AC0004', 'eronic', 'PGD00002', 0, '6', '2018-04-26 12:40:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gizi_ibu_hamil`
--

CREATE TABLE `tb_gizi_ibu_hamil` (
  `ID_GIZI_IBU_HAMIL` varchar(15) NOT NULL,
  `KODE_PASIEN` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(35) DEFAULT NULL,
  `UMUR` varchar(15) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `MONEV_KE` varchar(15) DEFAULT NULL,
  `TANGGAL` varchar(10) DEFAULT NULL,
  `BERAT_BADAN` varchar(12) DEFAULT NULL,
  `TINGGI_BADAN` varchar(12) DEFAULT NULL,
  `HB_LILA` varchar(15) DEFAULT NULL,
  `STATUS_GIZI` varchar(15) DEFAULT NULL,
  `INTERVENSI` text NOT NULL,
  `ID_PG_DEWASA` varchar(15) DEFAULT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gizi_ibu_hamil`
--

INSERT INTO `tb_gizi_ibu_hamil` (`ID_GIZI_IBU_HAMIL`, `KODE_PASIEN`, `NAMA_LENGKAP`, `UMUR`, `ALAMAT`, `MONEV_KE`, `TANGGAL`, `BERAT_BADAN`, `TINGGI_BADAN`, `HB_LILA`, `STATUS_GIZI`, `INTERVENSI`, `ID_PG_DEWASA`, `ID_USER`, `status`, `CREATE_DATE`) VALUES
('GZIH00001', 17000002, 'sahid', '22 tahun', 'jln', 'Monev Ke 01', '12/10/2017', '65 Kg', '167 CM', '20', 'Kurus', 'susu dan tambah vitamin makan', 'PGD00001', '6', 0, '2018-04-27 13:38:00'),
('GZIH00002', 17000004, 'iswandi', '34 tahun', 'JL beyamin sueb ', 'MONEV KE 02', '2018-04-27', '70 kg', '175 cm', '30', 'Kurus', 'perbanyak makan daging,ikan dan minum susu', 'PGD00001', '6', 0, '2018-04-27 14:41:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gizi_seimbang`
--

CREATE TABLE `tb_gizi_seimbang` (
  `ID_GIZI_SMBNG` varchar(15) NOT NULL,
  `PEMBERIAN_MAKANAN` varchar(100) DEFAULT NULL,
  `TARIF` double NOT NULL,
  `KETERANGAN` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gizi_seimbang`
--

INSERT INTO `tb_gizi_seimbang` (`ID_GIZI_SMBNG`, `PEMBERIAN_MAKANAN`, `TARIF`, `KETERANGAN`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('GZS0001', 'As Gizi Seimbang(Mkn 3x)', 15000, 'Pemerian as Gizi seimbang makan 3x perorang', 0, '1', '2018-04-22 08:46:19'),
('GZS0002', 'as gizi seimbang(Snack 2x)', 7500, 'pemberian as gizi seimbang snack perorang', 0, '1', '2018-04-22 08:45:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil_lab`
--

CREATE TABLE `tb_hasil_lab` (
  `ID_HASIL_LAB` varchar(15) NOT NULL,
  `KODE_PASIEN` int(15) NOT NULL,
  `NAMA_LENGKAP` varchar(70) DEFAULT NULL,
  `UMUR` varchar(25) DEFAULT NULL,
  `NO_BPJS` int(35) NOT NULL,
  `TGL_HASIL` date NOT NULL,
  `PEMERIKSAAN_LAB` varchar(55) DEFAULT NULL,
  `ID_DOKTER` varchar(15) DEFAULT NULL,
  `ID_DAFTAR_LAB` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_hasil_lab`
--

INSERT INTO `tb_hasil_lab` (`ID_HASIL_LAB`, `KODE_PASIEN`, `NAMA_LENGKAP`, `UMUR`, `NO_BPJS`, `TGL_HASIL`, `PEMERIKSAAN_LAB`, `ID_DOKTER`, `ID_DAFTAR_LAB`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('HLB000001', 17000001, 'Asfani', '22 Tahun', 12000, '2018-05-15', 'Cek darah', 'DK0009', 'DLB00001', 0, '17', '2018-05-15 04:00:58'),
('HLB000002', 17000002, 'sahid', '22 Tahun', 18253776, '2018-05-15', 'Kolestrol Total', 'DK0009', 'DLB00002', 1, '17', '2018-06-19 09:32:34'),
('HLB000003', 17000003, 'Andi nana mariana', '22 tahun', 1211112227, '2018-07-12', 'Cek darah', 'DK0009', 'DLB00003', 0, '17', '2018-07-12 08:37:56'),
('HLB000004', 17000001, 'Asfani', '22 Tahun', 12000, '2018-07-12', 'Cek darah', 'DK0009', 'DLB00001', 0, '17', '2018-07-12 08:43:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_history_obat`
--

CREATE TABLE `tb_history_obat` (
  `ID_HISTORY` bigint(8) NOT NULL,
  `ID_OBAT` varchar(10) NOT NULL,
  `MenuID` varchar(50) NOT NULL,
  `DIAGNOSA` text NOT NULL,
  `KETERANGAN` text NOT NULL,
  `ID_USER` varchar(10) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_pemeriksaan`
--

CREATE TABLE `tb_jenis_pemeriksaan` (
  `ID_JENIS` varchar(10) NOT NULL,
  `JENIS_PEMERIKSAAN` varchar(20) DEFAULT NULL,
  `KETERANGAN` varchar(30) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `LAST_USER` varchar(8) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenis_pemeriksaan`
--

INSERT INTO `tb_jenis_pemeriksaan` (`ID_JENIS`, `JENIS_PEMERIKSAAN`, `KETERANGAN`, `status`, `LAST_USER`, `CREATE_DATE`) VALUES
('JEP001', ' perawatan kecil', 'cek up', 0, 'Admin', '2018-03-19 10:33:15'),
('JEP002', 'Perawatan besar', 'cabut gigi', 0, 'Admin', '2018-03-19 10:33:15'),
('JEP003', 'Perawatan sedang', '---', 1, 'admin', '2018-03-19 10:33:15'),
('JEP004', 'Visit dokter', 'konsultasi', 0, 'Admin', '2018-03-19 10:33:15'),
('JEP005', 'Cek TD', 'Cek tensi darah dan jantung', 0, 'admin', '2018-03-19 17:00:00'),
('JEP006', 'konseling', 'hanya cek kesehatan', 0, 'admin', '2018-05-09 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_joblevel`
--

CREATE TABLE `tb_joblevel` (
  `ID_JOB` varchar(15) NOT NULL,
  `JOB_NAME` varchar(55) DEFAULT NULL,
  `LEVEL` varchar(30) DEFAULT NULL,
  `JOB_DESC` text,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_joblevel`
--

INSERT INTO `tb_joblevel` (`ID_JOB`, `JOB_NAME`, `LEVEL`, `JOB_DESC`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('JV0001', 'Docter', 'poli umum', 'Pemeriksaan poli umum', 0, '1', '2018-04-19 12:05:58'),
('JV0002', 'Admin sistem', 'Admin', 'Admin sistem', 0, '1', '2018-04-19 08:33:59'),
('JV0003', 'Bidan', 'Pemeriksaan umum', 'Memeriksa poli umum', 0, '1', '2018-04-19 08:29:06'),
('JV0004', 'Bidan', 'ruang bersalin', 'melahirkan ', 0, '1', '2018-04-19 12:07:23'),
('JV0005', 'Bidan', 'pemeriksaan kb', 'memeriksa poli kb', 0, '1', '2018-05-03 03:18:10'),
('JV0006', 'Apoteker', 'farmasi', 'Mengatur obat', 0, '1', '2018-05-07 14:05:37'),
('JV0007', 'Docter', 'laboratorium', 'Lab klinik', 0, '1', '2018-05-10 18:50:11'),
('JV0008', 'Direksi ', 'Kepala Puskesmas', 'Aprov file', 0, '1', '2018-05-20 06:57:13'),
('JV0009', 'Wakil direksi', 'kepala pelayanan', 'Mengontrol pelayanan puskesmas', 0, '1', '2018-06-21 09:53:57'),
('JV0010', 'pendaftaran', 'pendaftaran', 'loket', 0, '1', '2018-06-29 13:28:50'),
('JV0011', 'Dokter', 'Poli Gigi', 'Spesialist gigi', 0, '1', '2018-07-11 03:10:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `ID_KAMAR` varchar(10) NOT NULL,
  `NO_KAMAR` int(11) NOT NULL,
  `NAMA_KAMAR` varchar(20) DEFAULT NULL,
  `JUMLAH_BED` int(11) NOT NULL,
  `TARIF` double NOT NULL,
  `KETERANGAN` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(10) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kamar`
--

INSERT INTO `tb_kamar` (`ID_KAMAR`, `NO_KAMAR`, `NAMA_KAMAR`, `JUMLAH_BED`, `TARIF`, `KETERANGAN`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('KM001', 1, 'Anggrek', 1, 60000, 'kelas 3 A (1 tempat kamar tidur ), harga 60 rb perhari dan perorang', 0, '1', '2018-03-22 03:21:55'),
('KM002', 2, 'melati', 2, 50000, 'kelas 3 B (2 tempat kamar tidur ), harga 60 rb perhari dan perorang', 0, '1', '2018-03-22 03:21:55'),
('KM003', 3, 'mawar', 4, 40000, 'kelas 3 A (4 tempat kamar tidur ), harga 60 rb perhari dan perorang', 0, '1', '2018-03-22 03:21:55'),
('KM004', 4, 'papaya', 6, 30000, 'kelas 3 A (6 tempat kamar tidur ), harga 60 rb perhari dan perorang', 0, '1', '2018-03-22 03:21:55'),
('KM005', 5, 'matahari', 5, 35000, 'ok ok ok', 0, '1', '2018-05-18 07:54:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kartu_bayi`
--

CREATE TABLE `tb_kartu_bayi` (
  `PUSKESMAS` varchar(50) DEFAULT NULL,
  `BIDAN` varchar(50) DEFAULT NULL,
  `NO_BAYI` varchar(20) NOT NULL,
  `NAMA_LENGKAP` varchar(50) DEFAULT NULL,
  `NAMA_IBU` varchar(35) DEFAULT NULL,
  `NAMA_AYAH` varchar(35) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `KABUPATEN` varchar(50) DEFAULT NULL,
  `PROVINSI` varchar(50) DEFAULT NULL,
  `TGL_LAHIR` varchar(17) DEFAULT NULL,
  `JAM_LAHIR` varchar(15) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `BERAT_BADAN` varchar(15) DEFAULT NULL,
  `PANJANG_BAYI` varchar(15) DEFAULT NULL,
  `GOL_DARAH` varchar(15) DEFAULT NULL,
  `NO_BPJS` varchar(50) DEFAULT NULL,
  `BUKU_KIA` varchar(20) DEFAULT NULL,
  `KEADAAN_LAHIR` varchar(20) DEFAULT NULL,
  `KOMPLIKASI` varchar(35) DEFAULT NULL,
  `RESUSITASI` varchar(35) DEFAULT NULL,
  `IMD` varchar(35) DEFAULT NULL,
  `PENCEGAHAN` varchar(35) DEFAULT NULL,
  `KEADAAN_PULANG` varchar(35) DEFAULT NULL,
  `DIRUJUK_KE` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kartu_bayi`
--

INSERT INTO `tb_kartu_bayi` (`PUSKESMAS`, `BIDAN`, `NO_BAYI`, `NAMA_LENGKAP`, `NAMA_IBU`, `NAMA_AYAH`, `ALAMAT`, `KABUPATEN`, `PROVINSI`, `TGL_LAHIR`, `JAM_LAHIR`, `JENIS_KELAMIN`, `BERAT_BADAN`, `PANJANG_BAYI`, `GOL_DARAH`, `NO_BPJS`, `BUKU_KIA`, `KEADAAN_LAHIR`, `KOMPLIKASI`, `RESUSITASI`, `IMD`, `PENCEGAHAN`, `KEADAAN_PULANG`, `DIRUJUK_KE`) VALUES
('puskesmas kec. Sawah besar', 'rosalina', '12150685', 'asfani', 'asmilah', 'kasiman', 'jl.mangga dua raya ruko textile blok C2/25 ', 'jakarta utara ', 'dki jakarta', '04-02-1996', '02.30 pm', 'Laki-laki', '10 kg', '20 cm', 'Gol A', '000018201122', 'Memiliki', 'Hidup', '', 'Tidak', '', 'Vit K1', 'Hidup', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kartu_ibu`
--

CREATE TABLE `tb_kartu_ibu` (
  `NO_IBU` varchar(15) NOT NULL,
  `KODE_PASIEN` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(35) DEFAULT NULL,
  `TEMPAT_TGL_LAHIR` varchar(25) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `ALAMAT_DOMISILI` text NOT NULL,
  `AGAMA` varchar(12) DEFAULT NULL,
  `PENDIDIKAN` varchar(15) DEFAULT NULL,
  `PEKERJAAN` varchar(15) DEFAULT NULL,
  `GOL_DARAH` varchar(10) DEFAULT NULL,
  `NAMA_SUAMI` varchar(20) DEFAULT NULL,
  `NO_TELPON` varchar(13) DEFAULT NULL,
  `TGL_REGISTRASI` varchar(10) DEFAULT NULL,
  `NO_BPJS` int(35) DEFAULT NULL,
  `GRAVIDA` varchar(15) DEFAULT NULL,
  `PARTUS` varchar(15) DEFAULT NULL,
  `ABORTUS` varchar(15) DEFAULT NULL,
  `HIDUP` varchar(15) DEFAULT NULL,
  `TGL_PERIKSA` varchar(15) DEFAULT NULL,
  `TGL_HPHT` varchar(10) DEFAULT NULL,
  `TAKSIRAN_BERSALIN` varchar(15) DEFAULT NULL,
  `BB_SBLM_HAMIL` varchar(10) DEFAULT NULL,
  `TINGGI_BADAN` varchar(10) DEFAULT NULL,
  `RIWAYAT_KOMPLIKASI` varchar(35) DEFAULT NULL,
  `PENYAKIT_KRONIS_ALERGI` varchar(25) DEFAULT NULL,
  `TGL_REN_BERSALIN` varchar(10) DEFAULT NULL,
  `PENOLONG` varchar(12) DEFAULT NULL,
  `TEMPAT` varchar(15) DEFAULT NULL,
  `PENDAMPING` varchar(12) DEFAULT NULL,
  `TRANSPORTASI` varchar(12) DEFAULT NULL,
  `PENDONOR` varchar(12) DEFAULT NULL,
  `ID_BEROBAT` varchar(15) DEFAULT NULL,
  `ID_POLI_KIA` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kartu_ibu`
--

INSERT INTO `tb_kartu_ibu` (`NO_IBU`, `KODE_PASIEN`, `NAMA_LENGKAP`, `TEMPAT_TGL_LAHIR`, `UMUR`, `ALAMAT_DOMISILI`, `AGAMA`, `PENDIDIKAN`, `PEKERJAAN`, `GOL_DARAH`, `NAMA_SUAMI`, `NO_TELPON`, `TGL_REGISTRASI`, `NO_BPJS`, `GRAVIDA`, `PARTUS`, `ABORTUS`, `HIDUP`, `TGL_PERIKSA`, `TGL_HPHT`, `TAKSIRAN_BERSALIN`, `BB_SBLM_HAMIL`, `TINGGI_BADAN`, `RIWAYAT_KOMPLIKASI`, `PENYAKIT_KRONIS_ALERGI`, `TGL_REN_BERSALIN`, `PENOLONG`, `TEMPAT`, `PENDAMPING`, `TRANSPORTASI`, `PENDONOR`, `ID_BEROBAT`, `ID_POLI_KIA`) VALUES
('IBU0001', 17000002, 'sahid', 'johar,12-12-1996', '22 Tahun', 'jln', 'Islam', 's1', 'swasta', 'Gol B', 'sahid', '085775165112', '12/11/2017', 18253776, '-', '-', '-', '1', '12/04/2017', '12/08/2017', 'bulan desember', '55 kg', '155 Cm', 'tidak ada', 'tidak ada', '12/29/2017', 'Dr.spesialis', 'Puskesmas', 'Suami', '', NULL, 'KJ00001', 'id000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kartu_tb`
--

CREATE TABLE `tb_kartu_tb` (
  `KARTU_PPTB` varchar(17) NOT NULL,
  `KODE_PASIEN` int(17) NOT NULL,
  `NAMA_LENGKAP` varchar(50) DEFAULT NULL,
  `NIK_KTP` varchar(40) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `TEMPAT_TGL_LAHIR` varchar(35) DEFAULT NULL,
  `UMUR` varchar(15) DEFAULT NULL,
  `BERAT_BADAN` varchar(15) DEFAULT NULL,
  `TINGGI_BADAN` varchar(15) DEFAULT NULL,
  `NAMA_PMO` varchar(40) DEFAULT NULL,
  `NAMA_FASKES` varchar(30) DEFAULT NULL,
  `ALAMAT_PMO` text NOT NULL,
  `TELPON_PMO` varchar(15) DEFAULT NULL,
  `PARUT_BCG` varchar(20) DEFAULT NULL,
  `JSTB_ANAK` varchar(20) DEFAULT NULL,
  `TGL_MASUK` varchar(15) DEFAULT NULL,
  `HASIL_PEM_UJI` varchar(30) DEFAULT NULL,
  `UJI_TUBERKULIN` varchar(20) DEFAULT NULL,
  `TGL_FOTO_TORAKS` varchar(15) DEFAULT NULL,
  `NO_SERI` varchar(30) DEFAULT NULL,
  `TGL_FNAB` varchar(15) DEFAULT NULL,
  `HASIL_FNAB` varchar(20) DEFAULT NULL,
  `UJI_SELAIN_DAHAK` varchar(20) DEFAULT NULL,
  `RIWAYAT_DM` varchar(20) DEFAULT NULL,
  `HASIL_TES_DM` varchar(20) DEFAULT NULL,
  `TERAPI_DM` varchar(20) DEFAULT NULL,
  `TIPE_DIAGNOSIS` varchar(30) DEFAULT NULL,
  `KBL_ANATOMI` varchar(30) DEFAULT NULL,
  `KRP_SEBELUMNYA` varchar(30) DEFAULT NULL,
  `KBS_HIV` varchar(30) DEFAULT NULL,
  `DIRUJUK_OLEH` varchar(20) DEFAULT NULL,
  `FASKES_PINDAHAN` varchar(40) DEFAULT NULL,
  `ALAMAT_FASKES` text NOT NULL,
  `KAB_KOTA` varchar(20) DEFAULT NULL,
  `PROVINSI` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kartu_tb`
--

INSERT INTO `tb_kartu_tb` (`KARTU_PPTB`, `KODE_PASIEN`, `NAMA_LENGKAP`, `NIK_KTP`, `JENIS_KELAMIN`, `ALAMAT`, `TEMPAT_TGL_LAHIR`, `UMUR`, `BERAT_BADAN`, `TINGGI_BADAN`, `NAMA_PMO`, `NAMA_FASKES`, `ALAMAT_PMO`, `TELPON_PMO`, `PARUT_BCG`, `JSTB_ANAK`, `TGL_MASUK`, `HASIL_PEM_UJI`, `UJI_TUBERKULIN`, `TGL_FOTO_TORAKS`, `NO_SERI`, `TGL_FNAB`, `HASIL_FNAB`, `UJI_SELAIN_DAHAK`, `RIWAYAT_DM`, `HASIL_TES_DM`, `TERAPI_DM`, `TIPE_DIAGNOSIS`, `KBL_ANATOMI`, `KRP_SEBELUMNYA`, `KBS_HIV`, `DIRUJUK_OLEH`, `FASKES_PINDAHAN`, `ALAMAT_FASKES`, `KAB_KOTA`, `PROVINSI`) VALUES
('PTB00001', 17000001, 'Asfani', '12150685', 'laki-laki', 'mangga dua', 'Lampung, 04-02-1996', '22 Tahun', '65 Kg', '167 CM', 'asmilah', 'sawah besar', 'mangga dua', '085775165112', 'Tidak Ada', '4', '01/29/2018', '1+', 'negatif', '01/29/2018', '08888111', '01/29/2018', 'negatif', 'Bukan MTB', 'Tidak', 'Negatif', 'OHO', 'Terkonfirmasi Bakteriologis', 'TB Paru', 'Baru', 'Negatif', 'Inisiatif Pasien/Kel', 'puskesmas penengahan', 'kecamatan penengahan', 'kalianda ', 'lampung Selatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kunjungan_kb`
--

CREATE TABLE `tb_kunjungan_kb` (
  `ID_KUNJUNGAN_KB` varchar(15) NOT NULL,
  `KODE_PASIEN` int(17) NOT NULL,
  `NAMA_LENGKAP` varchar(50) DEFAULT NULL,
  `UMUR` varchar(15) DEFAULT NULL,
  `NO_BPJS` varchar(40) DEFAULT NULL,
  `TGL_DATANG` varchar(15) DEFAULT NULL,
  `HAID_TERAKHIR_TGL` varchar(15) DEFAULT NULL,
  `BERAT_BADAN` varchar(15) DEFAULT NULL,
  `TEKANAN_DARAH` varchar(15) DEFAULT NULL,
  `KOMPLIKASI_BERAT` varchar(25) DEFAULT NULL,
  `KEGAGALAN` varchar(20) DEFAULT NULL,
  `PEMERIKSAAN` text NOT NULL,
  `TGL_KEMBALI` varchar(15) DEFAULT NULL,
  `PENANGGUNG_JAWAB` varchar(55) DEFAULT NULL,
  `ID_PEM_KB` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kunjungan_kb`
--

INSERT INTO `tb_kunjungan_kb` (`ID_KUNJUNGAN_KB`, `KODE_PASIEN`, `NAMA_LENGKAP`, `UMUR`, `NO_BPJS`, `TGL_DATANG`, `HAID_TERAKHIR_TGL`, `BERAT_BADAN`, `TEKANAN_DARAH`, `KOMPLIKASI_BERAT`, `KEGAGALAN`, `PEMERIKSAAN`, `TGL_KEMBALI`, `PENANGGUNG_JAWAB`, `ID_PEM_KB`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('KKB000001', 17000002, 'sahid', '22 Tahun', '18253776', '12/15/2017', '12/15/2017', '65 Kg', '120/80', 'sakit kepala', 'suntik', 'ganti metode kontrasepsi', '12/15/2017', 'Dr.Lisa', 'PKB000001', 0, '9', '2018-05-06 04:05:34'),
('KKB000002', 17000003, 'Andi nana mariana', '21 tahun', '1211112227', '05/07/2018', '05/01/2018', '67 kg', '120/80 mmhg', 'sakit kepala', 'IUD', 'ganti cara KB', '05/14/2018', 'Dr.Lisa', 'PKB00001', 0, '9', '2018-05-06 04:15:15'),
('KKB000003', 17000003, 'Andi nana mariana', '21 tahun', '1211112227', '05/08/2018', '05/01/2018', '67 kg', '120/80 mmhg', 'sakit perut keram', 'Suntik', 'turunkan jangan suntik', '05/15/2018', 'Dr.lisa', 'PKB00001', 0, '9', '2018-05-06 04:18:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_medical_record`
--

CREATE TABLE `tb_medical_record` (
  `ID_MEDICAL_RECORD` varchar(10) NOT NULL,
  `KODE_PASIEN` int(10) NOT NULL,
  `NAMA_LENGKAP` varchar(30) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(25) DEFAULT NULL,
  `TGL_MASUK` varchar(12) DEFAULT NULL,
  `KELUHAN` varchar(50) DEFAULT NULL,
  `TINGGI_BADAN` varchar(15) DEFAULT NULL,
  `BERAT_BADAN` varchar(15) DEFAULT NULL,
  `SISTOLE` varchar(15) DEFAULT NULL,
  `DIASISTOLE` varchar(15) DEFAULT NULL,
  `RASPIRATORY_RATE` varchar(15) DEFAULT NULL,
  `HEART_RATE` varchar(15) DEFAULT NULL,
  `PD` varchar(25) DEFAULT NULL,
  `ID_DIAGNOSA` varchar(10) DEFAULT NULL,
  `DESKRIPSI_ICD` varchar(15) DEFAULT NULL,
  `DOKTER` varchar(25) DEFAULT NULL,
  `ID_PEMERIKSAAN` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_medical_record`
--

INSERT INTO `tb_medical_record` (`ID_MEDICAL_RECORD`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `TGL_MASUK`, `KELUHAN`, `TINGGI_BADAN`, `BERAT_BADAN`, `SISTOLE`, `DIASISTOLE`, `RASPIRATORY_RATE`, `HEART_RATE`, `PD`, `ID_DIAGNOSA`, `DESKRIPSI_ICD`, `DOKTER`, `ID_PEMERIKSAAN`) VALUES
('MRC00001', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln', '18253776', '11/12/2017', 'sakit kepla', '167 CM', '65 Kg', '120 mmhg', '80 mmhg', '20 per minute', '80 bpm', 'kehujanan ', 'corelatif', 'corelatif', 'Dr.nana', 'PR00001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_medrec_lansia`
--

CREATE TABLE `tb_medrec_lansia` (
  `ID_MEDREC_LANSIA` varchar(15) NOT NULL,
  `KODE_PASIEN` int(17) NOT NULL,
  `NAMA_LENGKAP` varchar(50) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `UMUR` varchar(15) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(35) DEFAULT NULL,
  `TGL_MASUK` varchar(15) DEFAULT NULL,
  `KELUHAN` text NOT NULL,
  `TINGGI_BADAN` varchar(15) DEFAULT NULL,
  `BERAT_BADAN` varchar(15) DEFAULT NULL,
  `SISTOLE` varchar(15) DEFAULT NULL,
  `DIASISTOLE` varchar(15) DEFAULT NULL,
  `RASPIRATORY_RATE` varchar(15) DEFAULT NULL,
  `HEART_RATE` varchar(15) DEFAULT NULL,
  `PD` varchar(45) DEFAULT NULL,
  `ID_DIAGNOSA` varchar(15) DEFAULT NULL,
  `DESKRIPSI_ICD` varchar(35) DEFAULT NULL,
  `DOKTER` varchar(20) DEFAULT NULL,
  `ID_PEMERIKSAAN` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_medrec_lansia`
--

INSERT INTO `tb_medrec_lansia` (`ID_MEDREC_LANSIA`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `TGL_MASUK`, `KELUHAN`, `TINGGI_BADAN`, `BERAT_BADAN`, `SISTOLE`, `DIASISTOLE`, `RASPIRATORY_RATE`, `HEART_RATE`, `PD`, `ID_DIAGNOSA`, `DESKRIPSI_ICD`, `DOKTER`, `ID_PEMERIKSAAN`) VALUES
('MCL00001', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln', '18253776', '11/12/2017', 'sakit kepla', '167 CM', '65 Kg', '120 mmhg', '80 mmhg', '20 per minute', '80 bpm', 'sakit kepala gara2 makan  daging sama jengkol', 'corelatif', 'corelatif', 'dr.ujang', 'PR00001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nama_pemeriksaan`
--

CREATE TABLE `tb_nama_pemeriksaan` (
  `ID_PEMERIKSAAN` varchar(10) NOT NULL,
  `NAMA_PEMERIKSAAN` varchar(20) DEFAULT NULL,
  `JENIS_PEMERIKSAAN` varchar(20) DEFAULT NULL,
  `KETERANGAN` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nama_pemeriksaan`
--

INSERT INTO `tb_nama_pemeriksaan` (`ID_PEMERIKSAAN`, `NAMA_PEMERIKSAAN`, `JENIS_PEMERIKSAAN`, `KETERANGAN`) VALUES
('PE001', 'Cabut gigi', 'perawatan kecil', 'perawatan kecil'),
('PE002', 'Bersihkan telinga', 'perawatn sedang', 'telinga'),
('PE003', 'sakit kepala', 'Perawatan sedang', 'ok'),
('PE004 ', 'Bersihkan gigi', ' perawatan kecil', 'bersihkan gigi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nama_pemeriksaan1`
--

CREATE TABLE `tb_nama_pemeriksaan1` (
  `ID_NAMA_PEMERIKSAAN` varchar(50) NOT NULL,
  `ID_UNIT` varchar(10) NOT NULL,
  `ID_JENIS` varchar(10) NOT NULL,
  `NAMA_PEMERIKSAAN` varchar(20) DEFAULT NULL,
  `KETERANGAN` varchar(30) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `LAST_USER` varchar(8) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nama_pemeriksaan1`
--

INSERT INTO `tb_nama_pemeriksaan1` (`ID_NAMA_PEMERIKSAAN`, `ID_UNIT`, `ID_JENIS`, `NAMA_PEMERIKSAAN`, `KETERANGAN`, `status`, `LAST_USER`, `CREATE_DATE`) VALUES
('PE001', 'U002', 'JEP002', 'Cabut gigi', 'perawatan kecil', 0, 'Admin', '2018-03-20 07:54:40'),
('PE002', 'U005', 'JEP006', 'ganti kb', 'konsultasi', 0, 'Admin', '2018-03-20 07:54:40'),
('PE003', 'U001', 'JEP001', 'Cek Td', 'Sakit kepala', 0, 'Admin', '2018-03-20 07:54:40'),
('PE006', 'U001', 'JEP005', 'Priksa td', 'kontrol', 0, 'Admin', '2018-05-10 17:33:59'),
('PE005', 'U002', 'JEP002', 'Ganti gigi palsu', 'ganti gigi', 0, 'Admin', '2018-05-10 17:33:12'),
('PE004', 'U002', 'JEP002', 'Cabut gigi', 'Pemeriksaan gigi', 0, 'Admin', '2018-05-10 17:32:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_obat`
--

CREATE TABLE `tb_obat` (
  `ID_OBAT` varchar(10) NOT NULL,
  `NAMA_OBAT` varchar(30) DEFAULT NULL,
  `SATUAN` varchar(15) DEFAULT NULL,
  `JENIS_OBAT` varchar(15) DEFAULT NULL,
  `GENERIC` varchar(20) DEFAULT NULL,
  `SUB_JENIS` varchar(15) DEFAULT NULL,
  `MASA_BERLAKU` date DEFAULT NULL,
  `STOK` int(11) DEFAULT NULL,
  `KETERANGAN` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `LAST_USER` varchar(8) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_obat`
--

INSERT INTO `tb_obat` (`ID_OBAT`, `NAMA_OBAT`, `SATUAN`, `JENIS_OBAT`, `GENERIC`, `SUB_JENIS`, `MASA_BERLAKU`, `STOK`, `KETERANGAN`, `status`, `LAST_USER`, `CREATE_DATE`) VALUES
('OB0004', 'Mixagrip', 'Box', 'Alked', 'Non Generik', 'Tablet', '2018-05-10', 119, 'ok', 0, 'Admin', '2018-07-12 07:58:36'),
('OB0003', 'Bodrex', 'Batang', 'Alked', 'Non Generik', 'Tablet', '2018-10-24', 116, 'ok', 0, 'Admin', '2018-07-12 07:58:36'),
('OB0002', 'Amoxilin', 'Batang', 'Alked', 'Non Generik', 'Tablet', '2019-05-22', 112, 'ok', 0, 'Admin', '2018-06-29 13:56:59'),
('OB0005', 'Konidin', 'Batang', 'Alked', 'Non Generik', 'Tablet', '2018-12-18', 118, 'ok', 1, 'Admin', '2018-07-11 05:04:30'),
('OB0001', 'Paracetamol', 'Batang', 'Alked', 'Non Generik', 'Tablet', '2019-05-23', 109, 'ok ok', 0, 'Admin', '2018-07-11 07:30:25'),
('OB0006', 'biolisin', 'Batang', 'Alked', 'Generik', 'Tablet', '2018-06-19', 119, 'stok terbaru', 0, 'Farmasi', '2018-07-11 07:30:25'),
('OB0007', 'Pil kita', 'Batang', 'Alked', 'Non Generik', 'Tablet', '2019-07-23', 120, 'stok terbaru', 0, 'Farmasi', '2018-06-19 03:13:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran_lab`
--

CREATE TABLE `tb_pembayaran_lab` (
  `ID_PEMBAYARAN_LAB` varchar(15) NOT NULL,
  `KODE_PASIEN` int(15) NOT NULL,
  `NAMA_LENGKAP` varchar(70) DEFAULT NULL,
  `UMUR` varchar(25) DEFAULT NULL,
  `NO_BPJS` int(35) NOT NULL,
  `TGL_BAYAR` date NOT NULL,
  `ID_DOKTER` varchar(15) DEFAULT NULL,
  `TOTAL_BIAYA` double NOT NULL,
  `ID_DAFTAR_LAB` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembayaran_lab`
--

INSERT INTO `tb_pembayaran_lab` (`ID_PEMBAYARAN_LAB`, `KODE_PASIEN`, `NAMA_LENGKAP`, `UMUR`, `NO_BPJS`, `TGL_BAYAR`, `ID_DOKTER`, `TOTAL_BIAYA`, `ID_DAFTAR_LAB`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('PBL000001', 17000001, 'Asfani', '22 Tahun', 12000, '2018-06-11', 'DK0009', 20000, 'DLB00001', 0, '17', '2018-06-11 04:43:17'),
('PBL000002', 17000002, 'sahid', '22 Tahun', 18253776, '2018-06-11', 'DK0009', 20000, 'DLB00002', 1, '17', '2018-06-19 10:55:03'),
('PBL000003', 17000003, 'Andi nana mariana', '21 tahun', 1211112227, '2018-07-12', 'DK0009', 20000, 'DLB00003', 0, '17', '2018-07-12 08:46:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemeriksaan_balita`
--

CREATE TABLE `tb_pemeriksaan_balita` (
  `ID_PEM_BALITA` varchar(17) NOT NULL,
  `KODE_PASIEN` varchar(17) DEFAULT NULL,
  `NAMA_LENGKAP` varchar(60) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(17) DEFAULT NULL,
  `UMUR` varchar(17) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `KELUHAN` text NOT NULL,
  `NO_BPJS` varchar(45) DEFAULT NULL,
  `ASI_EKSKLUSIF` varchar(20) DEFAULT NULL,
  `MP_ASI` varchar(20) DEFAULT NULL,
  `SDI_DK` varchar(35) DEFAULT NULL,
  `BERAT_BADAN` varchar(20) DEFAULT NULL,
  `TINGGI_BADAN` varchar(20) DEFAULT NULL,
  `SISTOLE` varchar(15) DEFAULT NULL,
  `DIASTOLE` varchar(15) DEFAULT NULL,
  `RASPIRATORY_RATE` varchar(15) DEFAULT NULL,
  `HEART_RATE` varchar(15) DEFAULT NULL,
  `DIAGNOSIS` varchar(45) DEFAULT NULL,
  `STATUS_GIZI` varchar(20) DEFAULT NULL,
  `VITAMIN_ANAK` varchar(45) DEFAULT NULL,
  `TGL_PRIKSA` varchar(17) DEFAULT NULL,
  `INTEGRASI_PROGRAM` varchar(35) DEFAULT NULL,
  `DIRUJUK_KE` varchar(35) DEFAULT NULL,
  `KETERANGAN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemeriksaan_bayi`
--

CREATE TABLE `tb_pemeriksaan_bayi` (
  `ID_PEM_BAYI` varchar(17) NOT NULL,
  `KODE_PASIEN` varchar(17) DEFAULT NULL,
  `NAMA_LENGKAP` varchar(50) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(17) DEFAULT NULL,
  `UMUR` varchar(17) DEFAULT NULL,
  `UMUR_B1` varchar(17) DEFAULT NULL,
  `UMUR_He` varchar(17) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `KELUHAN` text NOT NULL,
  `NO_BPJS` varchar(35) DEFAULT NULL,
  `ASI_EKSKLUSIF` varchar(20) DEFAULT NULL,
  `MP_ASI` varchar(35) DEFAULT NULL,
  `SDI_DTK` varchar(35) DEFAULT NULL,
  `BERAT_BADAN` varchar(17) DEFAULT NULL,
  `TINGGI_BADAN` varchar(17) DEFAULT NULL,
  `SISTOLE` varchar(15) DEFAULT NULL,
  `DIASTOLE` varchar(15) DEFAULT NULL,
  `RASPIRATORY_RATE` varchar(15) DEFAULT NULL,
  `HEART_RATE` varchar(15) DEFAULT NULL,
  `DIAGNOSIS` varchar(45) DEFAULT NULL,
  `STATUS_GIZI` varchar(35) DEFAULT NULL,
  `PENCEGAHAN` varchar(35) DEFAULT NULL,
  `TGL_MASUK` varchar(17) DEFAULT NULL,
  `INTEGRASI_PROGRAM` varchar(35) DEFAULT NULL,
  `DIRUJUK_KE` varchar(35) DEFAULT NULL,
  `KETERANGAN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pemeriksaan_bayi`
--

INSERT INTO `tb_pemeriksaan_bayi` (`ID_PEM_BAYI`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `UMUR_B1`, `UMUR_He`, `ALAMAT`, `KELUHAN`, `NO_BPJS`, `ASI_EKSKLUSIF`, `MP_ASI`, `SDI_DTK`, `BERAT_BADAN`, `TINGGI_BADAN`, `SISTOLE`, `DIASTOLE`, `RASPIRATORY_RATE`, `HEART_RATE`, `DIAGNOSIS`, `STATUS_GIZI`, `PENCEGAHAN`, `TGL_MASUK`, `INTEGRASI_PROGRAM`, `DIRUJUK_KE`, `KETERANGAN`) VALUES
('PBY00001', '17000002', 'sahid', 'laki-laki', '22 Tahun', '22 tahun', '22 tahun', 'jln.mangga dua raya ruko textile blok C2/25', 'sakit perut', '18253776', 'Ya', 'Ya', 'Tidak', '10kg', '20 cm', '110 mmhg', '10 mm', '20 per minute', '80 bpm', 'Tetanus', 'Baik', 'BCG', '03/01/2018', 'Mendapatkan Kelambu', '', 'cuma sakit perut tidak apa2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemeriksaan_kb`
--

CREATE TABLE `tb_pemeriksaan_kb` (
  `ID_PEM_KB` varchar(17) NOT NULL,
  `NO_KD_FASKES_KB` varchar(20) DEFAULT NULL,
  `NO_SERI_KARTU` varchar(20) DEFAULT NULL,
  `KODE_PASIEN` int(17) NOT NULL,
  `NAMA_LENGKAP` varchar(50) DEFAULT NULL,
  `TEMPAT_TGL_LAHIR` varchar(45) DEFAULT NULL,
  `UMUR` varchar(15) DEFAULT NULL,
  `PENDIDIKAN` varchar(20) DEFAULT NULL,
  `PEKERJAAN` varchar(20) DEFAULT NULL,
  `ALAMAT` text,
  `NO_BPJS` varchar(30) DEFAULT NULL,
  `TAHAPAN_KS` varchar(20) DEFAULT NULL,
  `NAMA_SUAMI` varchar(35) DEFAULT NULL,
  `PENDIDIKAN_SUAMI` varchar(20) DEFAULT NULL,
  `PEKERJAAN_SUAMI` varchar(20) DEFAULT NULL,
  `JUMLAH_ANAK` varchar(45) DEFAULT NULL,
  `UMUR_ANAK_TERKECIL` varchar(15) DEFAULT NULL,
  `STATUS_KB` varchar(15) DEFAULT NULL,
  `CARA_KB_TERAKHIR` varchar(15) DEFAULT NULL,
  `HAID_TERAKHIR_TGL` varchar(15) NOT NULL,
  `DUGAAN_HAMIL` varchar(15) NOT NULL,
  `BERAT_BADAN` varchar(15) DEFAULT NULL,
  `TEKANAN_DARAH` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pemeriksaan_kb`
--

INSERT INTO `tb_pemeriksaan_kb` (`ID_PEM_KB`, `NO_KD_FASKES_KB`, `NO_SERI_KARTU`, `KODE_PASIEN`, `NAMA_LENGKAP`, `TEMPAT_TGL_LAHIR`, `UMUR`, `PENDIDIKAN`, `PEKERJAAN`, `ALAMAT`, `NO_BPJS`, `TAHAPAN_KS`, `NAMA_SUAMI`, `PENDIDIKAN_SUAMI`, `PEKERJAAN_SUAMI`, `JUMLAH_ANAK`, `UMUR_ANAK_TERKECIL`, `STATUS_KB`, `CARA_KB_TERAKHIR`, `HAID_TERAKHIR_TGL`, `DUGAAN_HAMIL`, `BERAT_BADAN`, `TEKANAN_DARAH`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('PKB00001', '121', '121', 17000003, 'Andi nana mariana', 'Jl re marta dinata priok', '21 tahun', 'S1-Setrata 1', 'Pegawai Negri', 'jl tg periuk', '1211112227', 'Tahapan 1', 'ujang', 'S2-Strata 2', 'Pegawai Swasta', '2', 'satu tahun', 'Berhenti Sesuda', 'Suntik', '05/01/2018', 'Ya', '67 kg', '120/80 mmhg', 0, '15', '2018-05-05 07:56:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemeriksaan_mtbs`
--

CREATE TABLE `tb_pemeriksaan_mtbs` (
  `ID_PEM_MTBS` varchar(17) NOT NULL,
  `KODE_PASIEN` int(17) NOT NULL,
  `NAMA_LENGKAP` varchar(55) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(20) DEFAULT NULL,
  `UMUR` varchar(17) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `KELUHAN` text NOT NULL,
  `NO_BPJS` varchar(35) DEFAULT NULL,
  `ASI_EKSKLUSIF` varchar(15) DEFAULT NULL,
  `MP_ASI` varchar(15) DEFAULT NULL,
  `SDI_DTK` varchar(15) DEFAULT NULL,
  `TINGGI_BADAN` varchar(15) DEFAULT NULL,
  `BERAT_BADAN` varchar(15) DEFAULT NULL,
  `SISTOLE` varchar(15) DEFAULT NULL,
  `DIASTOLE` varchar(15) NOT NULL,
  `RASPIRATORY_RATE` varchar(15) DEFAULT NULL,
  `HEART_RATE` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pemeriksaan_mtbs`
--

INSERT INTO `tb_pemeriksaan_mtbs` (`ID_PEM_MTBS`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `KELUHAN`, `NO_BPJS`, `ASI_EKSKLUSIF`, `MP_ASI`, `SDI_DTK`, `TINGGI_BADAN`, `BERAT_BADAN`, `SISTOLE`, `DIASTOLE`, `RASPIRATORY_RATE`, `HEART_RATE`) VALUES
('PMTBS00001', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln.mangga dua raya ruko textile blok C2/25', 'sakit perut', '18253776', 'Ya', 'Ya', 'Tidak', '20 cm', '10kg', '110 mmhg', '10 mm', '20 per minute', '80 bpm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemeriksaan_neonatus`
--

CREATE TABLE `tb_pemeriksaan_neonatus` (
  `ID_NEONATUS` varchar(15) NOT NULL,
  `NO_BAYI` varchar(17) DEFAULT NULL,
  `NAMA_LENGKAP` varchar(70) DEFAULT NULL,
  `TGL_MASUK` varchar(17) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(20) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(35) DEFAULT NULL,
  `UMUR` varchar(15) DEFAULT NULL,
  `KN` text NOT NULL,
  `NAKES` varchar(20) DEFAULT NULL,
  `ASI_EKSKLUSIF` varchar(35) DEFAULT NULL,
  `PENCEGAHAN` varchar(35) DEFAULT NULL,
  `INTEGRASI_PROGRAM` varchar(45) DEFAULT NULL,
  `DIAGNOSIS` varchar(45) DEFAULT NULL,
  `KLASIFIKASI_MTBM` varchar(45) DEFAULT NULL,
  `KEADAAN_PULANG` varchar(35) DEFAULT NULL,
  `DIRUJUK_KE` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pemeriksaan_neonatus`
--

INSERT INTO `tb_pemeriksaan_neonatus` (`ID_NEONATUS`, `NO_BAYI`, `NAMA_LENGKAP`, `TGL_MASUK`, `JENIS_KELAMIN`, `ALAMAT`, `NO_BPJS`, `UMUR`, `KN`, `NAKES`, `ASI_EKSKLUSIF`, `PENCEGAHAN`, `INTEGRASI_PROGRAM`, `DIAGNOSIS`, `KLASIFIKASI_MTBM`, `KEADAAN_PULANG`, `DIRUJUK_KE`) VALUES
('NEO00001', '12150685', 'asfani', '03/01/2018', 'Laki-laki', 'jl.mangga dua raya ruko textile blok C2/25 ', '000018201122', '25 hari', 'pilek meler', 'Dokter', 'Ya', 'Vit K1', 'Pemberian Susu Formula', 'Pneumoni', 'Tidak Ditemukan', 'Hidup', 'Rumah Sakit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemeriksaan_umum`
--

CREATE TABLE `tb_pemeriksaan_umum` (
  `ID_PEMERIKSAAN` varchar(10) NOT NULL,
  `KODE_PASIEN` int(10) NOT NULL,
  `NAMA_LENGKAP` varchar(40) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(25) DEFAULT NULL,
  `TGL_MASUK` date NOT NULL,
  `KELUHAN` text NOT NULL,
  `TINGGI_BADAN` varchar(15) DEFAULT NULL,
  `BERAT_BADAN` varchar(15) DEFAULT NULL,
  `SISTOLE` varchar(15) DEFAULT NULL,
  `DIASISTOLE` varchar(15) DEFAULT NULL,
  `RASPIRATORY_RATE` varchar(15) DEFAULT NULL,
  `HEART_RATE` varchar(15) DEFAULT NULL,
  `ID_UNIT` varchar(15) NOT NULL,
  `ID_BEROBAT` varchar(15) NOT NULL,
  `trans_status` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pemeriksaan_umum`
--

INSERT INTO `tb_pemeriksaan_umum` (`ID_PEMERIKSAAN`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `TGL_MASUK`, `KELUHAN`, `TINGGI_BADAN`, `BERAT_BADAN`, `SISTOLE`, `DIASISTOLE`, `RASPIRATORY_RATE`, `HEART_RATE`, `ID_UNIT`, `ID_BEROBAT`, `trans_status`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('PR00001', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln.mangga dua raya ruko textile blok C2/25', '18253776', '2018-07-12', 'sakit kepla dan flu', '168 CM', '65 Kg', '120 mmhg', '80 mmhg', '20 per minute', '80 bpm', 'U001', 'KJ00002', 1, 0, 3, '2018-07-12 07:17:24'),
('PR00002', 17000004, 'iswandi', 'Laki-laki', '33 tahun', 'JL beyamin sueb kemayoran', '2147483647', '2018-07-12', 'batuk berdahak dan hidung tersumbat', '167 cm', '67 kg', '120 mmhg', '80 mmhg', '20 minute', '80 mpg', 'U001', 'KJ00005', 0, 0, 3, '2018-07-12 06:39:09'),
('PR00003', 17000001, 'Asfani', 'laki-laki', '22 Tahun', 'mangga dua', '12000', '2018-06-13', 'sakit leher', '165 cm', '65 kg', '120 mmhg', '80 mmhg', '20 minute', '80 mpg', '', 'KJ00003', 0, 1, 3, '2018-06-13 04:51:53'),
('PR00004', 17000001, 'Asfani', 'laki-laki', '22 Tahun', 'mangga dua', '12000', '2018-07-12', 'demam', '165 ', '65', '120 ', '80', '20', '80', 'U002', 'KJ00008', 0, 0, 3, '2018-07-12 07:07:09'),
('PR00005', 17000001, 'Asfani', 'laki-laki', '22 Tahun', 'mangga dua', '12000', '2018-07-11', 'sakit kepala', '165 cm', '65 kg', '120 mmhg', '80 mmhg', '20 minute', '80 mpg', '', 'KJ00001', 0, 1, 3, '2018-07-11 08:14:19'),
('PR00006', 17000001, 'Asfani', 'laki-laki', '22 Tahun', 'mangga dua', '12000', '2018-07-12', 'sakit kepala', '165 cm', '65 kg', '120 mmhg', '80 mmhg', '20 minute', '80 mpg', 'U004', 'KJ00001', 0, 0, 3, '2018-07-12 07:07:32'),
('PR00007', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln', '18253776', '2018-07-12', 'sakit kepala', '170 cm', '67 kg', '120 mmhg', '80 mmhg', '20 minute', '80 mpg', 'U001', 'KJ00002', 0, 0, 3, '2018-07-12 07:07:52'),
('PR00008', 17000001, 'Asfani', 'laki-laki', '22 Tahun', 'mangga dua', '12000', '2018-07-12', 'Sakit gigi', '165 cm', '70 kg', '125 mmhg', '82 mmhg', '20 minute', '80 mpg', 'U002', 'KJ00003', 0, 0, 3, '2018-07-12 07:08:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pem_gizi_anak`
--

CREATE TABLE `tb_pem_gizi_anak` (
  `ID_PG_ANAK` varchar(15) NOT NULL,
  `KODE_PASIEN` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(45) DEFAULT NULL,
  `TEMPAT_TGL_LAHIR` varchar(35) DEFAULT NULL,
  `ALAMAT` text,
  `NO_BPJS` int(11) NOT NULL,
  `NAMA_ORTU` varchar(35) DEFAULT NULL,
  `PEKERJAAN_ORTU` varchar(20) DEFAULT NULL,
  `ANAK_KE_DARI` varchar(15) DEFAULT NULL,
  `ID_DIAGNOSA` varchar(15) DEFAULT NULL,
  `DIAGNOSA_MEDIS` varchar(20) DEFAULT NULL,
  `BB_LAHIR` varchar(15) DEFAULT NULL,
  `PB_LAHIR` varchar(15) DEFAULT NULL,
  `UMUR_KEHAMILAN` varchar(20) DEFAULT NULL,
  `KELAHIRAN` varchar(20) DEFAULT NULL,
  `BERAT_BADAN` varchar(15) DEFAULT NULL,
  `TINGGI_BADAN` varchar(15) DEFAULT NULL,
  `IMT` varchar(20) DEFAULT NULL,
  `BIOKIMIA` varchar(20) DEFAULT NULL,
  `FISIK_KLINIS` text NOT NULL,
  `ID_BEROBAT` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pem_gizi_anak`
--

INSERT INTO `tb_pem_gizi_anak` (`ID_PG_ANAK`, `KODE_PASIEN`, `NAMA_LENGKAP`, `TEMPAT_TGL_LAHIR`, `ALAMAT`, `NO_BPJS`, `NAMA_ORTU`, `PEKERJAAN_ORTU`, `ANAK_KE_DARI`, `ID_DIAGNOSA`, `DIAGNOSA_MEDIS`, `BB_LAHIR`, `PB_LAHIR`, `UMUR_KEHAMILAN`, `KELAHIRAN`, `BERAT_BADAN`, `TINGGI_BADAN`, `IMT`, `BIOKIMIA`, `FISIK_KLINIS`, `ID_BEROBAT`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('PGA00001', 17000001, 'Asfani', 'Lampung, 04-02-1996', 'mangga dua', 12000, 'kasiman', 'petani', '4 dari 4', 'AC0002', 'darah merah', '4 kg', '20', '9 bulan 10 hari', 'Kembar', '40 kg', '30 cm ', '-', '-', 'badan kurus dan pucat', 'KJ00001', 0, '8', '2018-04-24 11:28:34'),
('PGA00002', 17000001, 'Asfani', 'Lampung, 04-02-1996', 'mangga dua', 12000, 'kasiman', 'petani', '4 dari 4', 'AC0002', 'darah merah', '4 kg', '20', '9 bulan 10 hari', 'Kembar', '40 kg', '30 cm ', '-', '-', 'badan kurus dan pucat', 'KJ00001', 0, '8', '2018-05-18 07:35:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pem_gizi_dewasa`
--

CREATE TABLE `tb_pem_gizi_dewasa` (
  `ID_PG_DEWASA` varchar(15) NOT NULL,
  `KODE_PASIEN` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(50) DEFAULT NULL,
  `TEMPAT_TGL_LAHIR` varchar(25) DEFAULT NULL,
  `ALAMAT` text,
  `AGAMA` varchar(15) DEFAULT NULL,
  `PENDIDIKAN` varchar(20) DEFAULT NULL,
  `PEKERJAAN` varchar(20) DEFAULT NULL,
  `NO_BPJS` int(50) NOT NULL,
  `ID_DIAGNOSA` varchar(15) DEFAULT NULL,
  `DIAGNOSA_MEDIS` varchar(50) DEFAULT NULL,
  `TINGGI_BADAN` varchar(15) DEFAULT NULL,
  `BERAT_BADAN` varchar(15) DEFAULT NULL,
  `IMT` varchar(15) DEFAULT NULL,
  `LLA` varchar(15) DEFAULT NULL,
  `LINGKAR_PERUT` varchar(15) DEFAULT NULL,
  `LINGKAR_PANGGUL` varchar(15) DEFAULT NULL,
  `STATUS_GIZI` varchar(25) DEFAULT NULL,
  `BIOKIMIA` varchar(20) DEFAULT NULL,
  `KONDISI_UMUM` varchar(45) DEFAULT NULL,
  `TEKANAN_DARAH` varchar(15) DEFAULT NULL,
  `SUHU_TUBUH` varchar(15) DEFAULT NULL,
  `KLINIS` varchar(35) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pem_gizi_dewasa`
--

INSERT INTO `tb_pem_gizi_dewasa` (`ID_PG_DEWASA`, `KODE_PASIEN`, `NAMA_LENGKAP`, `TEMPAT_TGL_LAHIR`, `ALAMAT`, `AGAMA`, `PENDIDIKAN`, `PEKERJAAN`, `NO_BPJS`, `ID_DIAGNOSA`, `DIAGNOSA_MEDIS`, `TINGGI_BADAN`, `BERAT_BADAN`, `IMT`, `LLA`, `LINGKAR_PERUT`, `LINGKAR_PANGGUL`, `STATUS_GIZI`, `BIOKIMIA`, `KONDISI_UMUM`, `TEKANAN_DARAH`, `SUHU_TUBUH`, `KLINIS`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('PGD00001', 17000004, 'iswandi', 'tegal,01-06-1982', 'JL beyamin sueb ', 'Islam', 'S3-Strata 3', 'Pewai Negri', 2147483647, 'AC0002', 'darah merah', '175 cm', '70 kg', '0', '20', '20', '20', 'Kurus', '0', 'Kurus', '120/80 mmhg', '20', 'kurus', 0, '8', '2018-04-25 03:51:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftaran_rb`
--

CREATE TABLE `tb_pendaftaran_rb` (
  `ID_DAFTAR_RB` varchar(15) NOT NULL,
  `KODE_PASIEN` int(15) NOT NULL,
  `NAMA_LENGKAP` varchar(70) DEFAULT NULL,
  `UMUR` varchar(25) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(35) NOT NULL,
  `NAMA_SUAMI` varchar(25) DEFAULT NULL,
  `NO_TELPON` varchar(12) NOT NULL,
  `TGL_MASUK` date NOT NULL,
  `ID_EMPLOYEE` varchar(15) DEFAULT NULL,
  `ID_BEROBAT` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `STATUS_RAWAT` tinyint(4) NOT NULL COMMENT '0= Dirawat, 1=Pasien Pulang',
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pendaftaran_rb`
--

INSERT INTO `tb_pendaftaran_rb` (`ID_DAFTAR_RB`, `KODE_PASIEN`, `NAMA_LENGKAP`, `UMUR`, `ALAMAT`, `NO_BPJS`, `NAMA_SUAMI`, `NO_TELPON`, `TGL_MASUK`, `ID_EMPLOYEE`, `ID_BEROBAT`, `status`, `STATUS_RAWAT`, `ID_USER`, `CREATE_DATE`) VALUES
('PRB000001', 17000004, 'iswandi', '33 tahun', 'JL beyamin sueb ', '2147483647', 'wulan', '2147483647', '2018-05-16', 'MP0003', 'KJ00005', 0, 1, '14', '2018-07-02 12:30:56'),
('PRB000002', 17000001, 'Asfani', '22 Tahun', 'mangga dua', '12000', 'ujang', '085775165112', '2018-06-20', 'MP0003', 'KJ00001', 0, 1, '14', '2018-07-02 12:30:56'),
('PRB000003', 17000001, 'Asfani', '22 Tahun', 'mangga dua', '12000', 'asfani', '08577512', '2018-06-29', 'MP0003', 'KJ00008', 0, 1, '14', '2018-07-11 04:06:53'),
('PRB000004', 17000003, 'Andi nana mariana', '21 tahun', 'jl tg periuk', '1211112227', 'sahid', '08577516122', '2018-07-12', 'MP0003', 'KJ00010', 1, 1, '14', '2018-07-12 12:54:19'),
('PRB000005', 17000003, 'Andi nana mariana', '21 tahun', 'jl tg periuk', '1211112227', 'ujang', '085775165112', '2018-07-12', 'MP0003', 'KJ00010', 0, 0, '14', '2018-07-12 12:53:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perawatan_bayi`
--

CREATE TABLE `tb_perawatan_bayi` (
  `ID_PERAWATAN_BAYI` varchar(15) NOT NULL,
  `PERAWATAN_BAYI` varchar(55) DEFAULT NULL,
  `TARIF` double NOT NULL,
  `KETERANGAN` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_perawatan_bayi`
--

INSERT INTO `tb_perawatan_bayi` (`ID_PERAWATAN_BAYI`, `PERAWATAN_BAYI`, `TARIF`, `KETERANGAN`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('PBY0001', 'Tanpa kelainan', 5000, 'Perawatan bayi tanpa kelainan perorang atau perhari', 0, '1', '2018-04-19 12:50:30'),
('PBY0002', 'kelainan', 15000, 'perawatan bayi dengan kelainan perorang', 0, '1', '2018-04-22 07:42:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perawatan_ibu`
--

CREATE TABLE `tb_perawatan_ibu` (
  `ID_PERAWATAN_IBU` varchar(15) NOT NULL,
  `PERAWATAN_IBU` varchar(55) DEFAULT NULL,
  `TARIF` double NOT NULL,
  `KETERANGAN` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_perawatan_ibu`
--

INSERT INTO `tb_perawatan_ibu` (`ID_PERAWATAN_IBU`, `PERAWATAN_IBU`, `TARIF`, `KETERANGAN`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('PIBU0001', 'Visite Dr umum', 30000, 'Perawatan ibu visite  dokter perkunjungan atau per orang', 0, '1', '2018-04-22 04:44:07'),
('PIBU0002', 'Visite bidan ', 15000, 'perawatan ibu visite bidan per orang', 0, '1', '2018-04-22 04:43:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pertlg_partus`
--

CREATE TABLE `tb_pertlg_partus` (
  `ID_PARTUS` varchar(15) NOT NULL,
  `PARTUS` varchar(55) DEFAULT NULL,
  `TARIF` double NOT NULL,
  `KETERANGAN` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pertlg_partus`
--

INSERT INTO `tb_pertlg_partus` (`ID_PARTUS`, `PARTUS`, `TARIF`, `KETERANGAN`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('PAR0001', 'Bidan', 30000, 'Pertolongan partus bidan 30.000 per orang', 0, '1', '2018-04-22 04:20:11'),
('PAR0002', 'Dokter', 50000, 'pertolongan partus dokter 50.000 perorang perhari', 0, '1', '2018-04-22 04:19:49'),
('PAR0003', 'dokter spesialist', 150000, 'spesialist', 0, '1', '2018-05-10 15:44:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_poli_gigi`
--

CREATE TABLE `tb_poli_gigi` (
  `ID_POLI_GIGI` varchar(15) NOT NULL,
  `KODE_PASIEN` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(35) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `UMUR` varchar(15) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` int(30) NOT NULL,
  `SISTOLE` varchar(15) DEFAULT NULL,
  `DIASISTOLE` varchar(15) NOT NULL,
  `RASPIRATORY_RATE` varchar(15) NOT NULL,
  `HEART_RATE` varchar(15) DEFAULT NULL,
  `ALERGI` varchar(20) DEFAULT NULL,
  `DM` varchar(20) DEFAULT NULL,
  `HIPETENSI` varchar(20) DEFAULT NULL,
  `LAIN_LAIN` text NOT NULL,
  `TGL_MASUK` varchar(15) DEFAULT NULL,
  `ANAMNESE` varchar(50) DEFAULT NULL,
  `PD` varchar(35) DEFAULT NULL,
  `ID_DIAGNOSA` varchar(15) DEFAULT NULL,
  `DESKRIPSI_ICD` text NOT NULL,
  `TINDAKAN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_poli_gigi`
--

INSERT INTO `tb_poli_gigi` (`ID_POLI_GIGI`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `SISTOLE`, `DIASISTOLE`, `RASPIRATORY_RATE`, `HEART_RATE`, `ALERGI`, `DM`, `HIPETENSI`, `LAIN_LAIN`, `TGL_MASUK`, `ANAMNESE`, `PD`, `ID_DIAGNOSA`, `DESKRIPSI_ICD`, `TINDAKAN`) VALUES
('PG00001', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln', 18253776, '120 mmhg', '80 mmhg', '20 per minute', '80 bpm', '-', 'sakit gigi', '-', '-', '12/08/2017', 'sakit gigi', 'karna bolong', 'ac00001', 'sakit gigi', 'cabut gigi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_poli_gigi1`
--

CREATE TABLE `tb_poli_gigi1` (
  `ID_POLI_GIGI` varchar(15) NOT NULL,
  `KODE_PASIEN` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(35) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `UMUR` varchar(15) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` int(30) NOT NULL,
  `SISTOLE` varchar(15) DEFAULT NULL,
  `DIASISTOLE` varchar(15) NOT NULL,
  `RASPIRATORY_RATE` varchar(15) NOT NULL,
  `HEART_RATE` varchar(15) DEFAULT NULL,
  `ALERGI` varchar(20) DEFAULT NULL,
  `DM` varchar(20) DEFAULT NULL,
  `HIPETENSI` varchar(20) DEFAULT NULL,
  `LAIN_LAIN` text NOT NULL,
  `TGL_MASUK` varchar(15) DEFAULT NULL,
  `ANAMNESE` varchar(50) DEFAULT NULL,
  `PD` varchar(35) DEFAULT NULL,
  `ID_DIAGNOSA` varchar(15) DEFAULT NULL,
  `DESKRIPSI_ICD` text NOT NULL,
  `TINDAKAN` text NOT NULL,
  `ID_DOKTER` varchar(15) DEFAULT NULL,
  `ID_PEMERIKSAAN` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_poli_gigi1`
--

INSERT INTO `tb_poli_gigi1` (`ID_POLI_GIGI`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `SISTOLE`, `DIASISTOLE`, `RASPIRATORY_RATE`, `HEART_RATE`, `ALERGI`, `DM`, `HIPETENSI`, `LAIN_LAIN`, `TGL_MASUK`, `ANAMNESE`, `PD`, `ID_DIAGNOSA`, `DESKRIPSI_ICD`, `TINDAKAN`, `ID_DOKTER`, `ID_PEMERIKSAAN`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('PG00001', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln', 18253776, '120 mmhg', '80 mmhg', '20 per minute', '80 bpm', 'makan ikan', 'sakit gigi', 'tidak ada', '-', '2017-12-08', 'sakit gigi', 'karna bolong', 'ac00001', 'sakit gigi', 'cabut gigi', 'DK0002', 'PR00001', 0, '5', '2018-04-17 10:18:29'),
('PG00002', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln', 18253776, '120 mmhg', '80 mmhg', '20 per minute', '80 bpm', 'makan ayam', 'sakit gusi', 'tidak ada', 'kepala sakit', '2018-04-18', 'sakit gusi bengkak', 'makan ikan', 'AC0003', 'aclogik', 'bersih kan gusii', 'DK0002', 'PR00001', 0, '5', '2018-04-18 07:48:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_poli_kb`
--

CREATE TABLE `tb_poli_kb` (
  `ID_POLI_KB` varchar(17) NOT NULL,
  `NO_KD_FASKES_KB` varchar(20) DEFAULT NULL,
  `NO_SERI_KARTU` varchar(20) DEFAULT NULL,
  `KODE_PASIEN` int(17) NOT NULL,
  `NAMA_LENGKAP` varchar(50) DEFAULT NULL,
  `TEMPAT_TGL_LAHIR` varchar(45) DEFAULT NULL,
  `UMUR` varchar(15) DEFAULT NULL,
  `PENDIDIKAN` varchar(20) DEFAULT NULL,
  `PEKERJAAN` varchar(20) DEFAULT NULL,
  `ALAMAT` text,
  `NO_BPJS` varchar(30) DEFAULT NULL,
  `TAHAPAN_KS` varchar(20) DEFAULT NULL,
  `NAMA_SUAMI` varchar(35) DEFAULT NULL,
  `PENDIDIKAN_SUAMI` varchar(20) DEFAULT NULL,
  `PEKERJAAN_SUAMI` varchar(20) DEFAULT NULL,
  `JUMLAH_ANAK` varchar(45) DEFAULT NULL,
  `UMUR_ANAK_TERKECIL` varchar(15) DEFAULT NULL,
  `STATUS_KB` varchar(15) DEFAULT NULL,
  `CARA_KB_TERAKHIR` varchar(15) DEFAULT NULL,
  `HAID_TERAKHIR_TGL` varchar(15) NOT NULL,
  `DUGAAN_HAMIL` varchar(15) NOT NULL,
  `MENYUSUI` varchar(25) DEFAULT NULL,
  `RPS` varchar(20) DEFAULT NULL,
  `KEADAAN_UMUM` varchar(20) DEFAULT NULL,
  `BERAT_BADAN` varchar(15) DEFAULT NULL,
  `TEKANAN_DARAH` varchar(15) DEFAULT NULL,
  `POSISI_RAHIM` varchar(15) DEFAULT NULL,
  `SPD` varchar(20) DEFAULT NULL,
  `PEMERIKSAAN_TAMBAHAN` varchar(20) DEFAULT NULL,
  `AKBD` varchar(20) DEFAULT NULL,
  `MJP` varchar(20) DEFAULT NULL,
  `TGL_DIPESAN` varchar(15) DEFAULT NULL,
  `TGL_DILAYANI` varchar(15) DEFAULT NULL,
  `TGL_DICABUT` varchar(15) DEFAULT NULL,
  `PENANGGUNG_JAWAB` varchar(20) DEFAULT NULL,
  `ID_PEM_KB` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_poli_kb`
--

INSERT INTO `tb_poli_kb` (`ID_POLI_KB`, `NO_KD_FASKES_KB`, `NO_SERI_KARTU`, `KODE_PASIEN`, `NAMA_LENGKAP`, `TEMPAT_TGL_LAHIR`, `UMUR`, `PENDIDIKAN`, `PEKERJAAN`, `ALAMAT`, `NO_BPJS`, `TAHAPAN_KS`, `NAMA_SUAMI`, `PENDIDIKAN_SUAMI`, `PEKERJAAN_SUAMI`, `JUMLAH_ANAK`, `UMUR_ANAK_TERKECIL`, `STATUS_KB`, `CARA_KB_TERAKHIR`, `HAID_TERAKHIR_TGL`, `DUGAAN_HAMIL`, `MENYUSUI`, `RPS`, `KEADAAN_UMUM`, `BERAT_BADAN`, `TEKANAN_DARAH`, `POSISI_RAHIM`, `SPD`, `PEMERIKSAAN_TAMBAHAN`, `AKBD`, `MJP`, `TGL_DIPESAN`, `TGL_DILAYANI`, `TGL_DICABUT`, `PENANGGUNG_JAWAB`, `ID_PEM_KB`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('KB000001', '121212', '000012', 17000002, 'sahid', 'johar,12-12-1996', '22 Tahun', 's1', 'swasta', 'jln', '18253776', 'tahap 1', 'ujang', 'S1-Setrata 1', 'Pegawai Negri', '1 laki 1 wanita', '2 Tahun', 'Berhenti Sesuda', 'Suntik', '11/16/2017', 'Ya', 'Ya', 'Sakit Kuning', 'Baik', '65 Kg', '120/80', 'Retrofleksi', 'Tanda-tanda Radang', 'Tanda-tanda Diabetes', 'Pill', 'Suntik', '01/15/2018', '12/18/2017', '12/15/2017', 'Dr.lisa', 'PKB00001', 0, '9', '2018-05-05 18:42:09'),
('KB000002', '121', '121', 17000003, 'Andi nana mariana', 'Jl re marta dinata priok', '21 tahun', 'S1-Setrata 1', 'Pegawai Negri', 'jl tg periuk', '1211112227', 'Tahapan 1', 'ujang', 'S2-Strata 2', 'Pegawai Swasta', '2', 'satu tahun', 'Berhenti Sesuda', 'Suntik', '05/01/2018', 'Ya', 'Ya', 'Sakit Kuning', 'Baik', '67 kg', '120/80 mmhg', 'Retrofleksi', 'Tanda-tanda Radang', '-', 'Suntik', 'Suntik', '05/05/2018', '05/07/2018', '06/05/2018', 'Dr.lisa', 'PKB00001', 0, '9', '2018-05-05 09:37:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_poli_kia`
--

CREATE TABLE `tb_poli_kia` (
  `ID_POLI_KIA` varchar(15) NOT NULL,
  `KODE_PASIEN` int(11) NOT NULL,
  `NO_IBU` varchar(15) DEFAULT NULL,
  `NAMA_LENGKAP` varchar(30) DEFAULT NULL,
  `NO_BPJS` int(35) NOT NULL,
  `TGL_PEMERIKSAAN` varchar(10) DEFAULT NULL,
  `CARA_MASUK` varchar(25) DEFAULT NULL,
  `USIA_KLINIIS` varchar(15) DEFAULT NULL,
  `TRIMESTER_KE` varchar(10) DEFAULT NULL,
  `ANAMNESIS` varchar(35) DEFAULT NULL,
  `BERAT_BADAN` varchar(10) DEFAULT NULL,
  `TEKANAN_DARAH` varchar(10) DEFAULT NULL,
  `LILA` varchar(10) DEFAULT NULL,
  `TFU` varchar(10) DEFAULT NULL,
  `STATUS_GIZI` varchar(15) DEFAULT NULL,
  `REFLEKS_PATELLA` varchar(15) DEFAULT NULL,
  `DETAK_JANTUNG_JANIN` varchar(15) DEFAULT NULL,
  `T_BERAT_JANIN` varchar(15) DEFAULT NULL,
  `KPL_TERHADAP_PAP` varchar(15) DEFAULT NULL,
  `PRESENTASI` varchar(20) DEFAULT NULL,
  `JUMLAH_JANIN` varchar(15) DEFAULT NULL,
  `STATUS_IMUNISASI` varchar(10) DEFAULT NULL,
  `TGL_TERDETEKSI` varchar(10) DEFAULT NULL,
  `TERDETEKSI_OLEH` varchar(20) DEFAULT NULL,
  `KOMPLIKASI` varchar(15) DEFAULT NULL,
  `DIRUJUK_KE` varchar(20) DEFAULT NULL,
  `KEADAAN` varchar(10) DEFAULT NULL,
  `KETERANGAN` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_poli_kia`
--

INSERT INTO `tb_poli_kia` (`ID_POLI_KIA`, `KODE_PASIEN`, `NO_IBU`, `NAMA_LENGKAP`, `NO_BPJS`, `TGL_PEMERIKSAAN`, `CARA_MASUK`, `USIA_KLINIIS`, `TRIMESTER_KE`, `ANAMNESIS`, `BERAT_BADAN`, `TEKANAN_DARAH`, `LILA`, `TFU`, `STATUS_GIZI`, `REFLEKS_PATELLA`, `DETAK_JANTUNG_JANIN`, `T_BERAT_JANIN`, `KPL_TERHADAP_PAP`, `PRESENTASI`, `JUMLAH_JANIN`, `STATUS_IMUNISASI`, `TGL_TERDETEKSI`, `TERDETEKSI_OLEH`, `KOMPLIKASI`, `DIRUJUK_KE`, `KEADAAN`, `KETERANGAN`) VALUES
('KIA00001', 17000002, 'IBU0001', 'sahid', 18253776, '12/11/2017', 'Atas Permintaan Sendiri', '8 bulan', '12', 'sakit perut', '65 Kg', '130/90', '20', '20', 'Normal', '20', '20', '2 kg', 'Masuk', 'Kepala', 'Tunggal', 'T4', '12/02/2017', 'Pasien', 'Perdarahan', 'Ruang Bersalin', 'Tib', 'di rawat sambil menunggu ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_poli_lansia`
--

CREATE TABLE `tb_poli_lansia` (
  `ID_POLI_LANSIA` varchar(15) NOT NULL,
  `KODE_PASIEN` int(17) NOT NULL,
  `NAMA_LENGKAP` varchar(50) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `UMUR` varchar(15) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(35) DEFAULT NULL,
  `TGL_MASUK` varchar(15) DEFAULT NULL,
  `KELUHAN` text NOT NULL,
  `TINGGI_BADAN` varchar(15) DEFAULT NULL,
  `BERAT_BADAN` varchar(15) DEFAULT NULL,
  `SISTOLE` varchar(15) DEFAULT NULL,
  `DIASISTOLE` varchar(15) DEFAULT NULL,
  `RASPIRATORY_RATE` varchar(15) DEFAULT NULL,
  `HEART_RATE` varchar(15) DEFAULT NULL,
  `PD` varchar(45) DEFAULT NULL,
  `ID_DIAGNOSA` varchar(15) DEFAULT NULL,
  `DESKRIPSI_ICD` varchar(35) DEFAULT NULL,
  `ID_DOKTER` varchar(20) DEFAULT NULL,
  `ID_PEMERIKSAAN` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_poli_lansia`
--

INSERT INTO `tb_poli_lansia` (`ID_POLI_LANSIA`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `TGL_MASUK`, `KELUHAN`, `TINGGI_BADAN`, `BERAT_BADAN`, `SISTOLE`, `DIASISTOLE`, `RASPIRATORY_RATE`, `HEART_RATE`, `PD`, `ID_DIAGNOSA`, `DESKRIPSI_ICD`, `ID_DOKTER`, `ID_PEMERIKSAAN`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('PLA00001', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln', '18253776', '2018-04-23', 'sakit kepla dan flu', '167 CM', '65 Kg', '120 mmhg', '80 mmhg', '20 per minute', '80 bpm', 'kehujanan dan kehujanan', 'AC0003', 'aclogik', 'DK0001', 'PR00001', 0, '10', '2018-04-23 12:59:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_poli_tb`
--

CREATE TABLE `tb_poli_tb` (
  `ID_POLI_TB` varchar(17) NOT NULL,
  `KODE_PASIEN` int(17) DEFAULT NULL,
  `NAMA_LENGKAP` varchar(50) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(17) DEFAULT NULL,
  `UMUR` varchar(15) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(35) DEFAULT NULL,
  `KLASIFIKASI_PENYAKIT` varchar(15) DEFAULT NULL,
  `DIAGNOSA` varchar(20) DEFAULT NULL,
  `FOLLOW_UP` varchar(25) DEFAULT NULL,
  `BULAN_KE` varchar(15) DEFAULT NULL,
  `NO_REG_TB` varchar(25) DEFAULT NULL,
  `NO_IDEN_SEDIAAN` varchar(25) DEFAULT NULL,
  `TGL_PENG_DAHAK` varchar(15) DEFAULT NULL,
  `TGL_PENG_SEDIAAN` varchar(15) DEFAULT NULL,
  `NAMA_PENG_SPESIMEN` varchar(23) DEFAULT NULL,
  `NANAH_LENDIR` varchar(30) DEFAULT NULL,
  `BERCAK_DARAH` varchar(30) DEFAULT NULL,
  `AIR_LIUR` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_poli_tb`
--

INSERT INTO `tb_poli_tb` (`ID_POLI_TB`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `KLASIFIKASI_PENYAKIT`, `DIAGNOSA`, `FOLLOW_UP`, `BULAN_KE`, `NO_REG_TB`, `NO_IDEN_SEDIAAN`, `TGL_PENG_DAHAK`, `TGL_PENG_SEDIAAN`, `NAMA_PENG_SPESIMEN`, `NANAH_LENDIR`, `BERCAK_DARAH`, `AIR_LIUR`) VALUES
('TB00001', 17000001, 'Asfani', 'laki-laki', '22 Tahun', 'mangga dua', '12000', 'Paru', 'sesak sakit dad', 'iya', '2', '00001', '00001', '01/03/2018', '01/06/2018', 'Dr.boy', 'Dahak Sewaktu Pertama', 'Dahak Pagi', 'Dahak Sewaktu Kedua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_poli_umum`
--

CREATE TABLE `tb_poli_umum` (
  `ID_POLI_UMUM` varchar(10) NOT NULL,
  `KODE_PASIEN` int(10) NOT NULL,
  `NAMA_LENGKAP` varchar(30) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(25) DEFAULT NULL,
  `TANGGAL` date NOT NULL,
  `KELUHAN` varchar(50) DEFAULT NULL,
  `TINGGI_BADAN` varchar(15) DEFAULT NULL,
  `BERAT_BADAN` varchar(15) DEFAULT NULL,
  `SISTOLE` varchar(15) DEFAULT NULL,
  `DIASISTOLE` varchar(15) DEFAULT NULL,
  `RASPIRATORY_RATE` varchar(15) DEFAULT NULL,
  `HEART_RATE` varchar(15) DEFAULT NULL,
  `PD` varchar(25) DEFAULT NULL,
  `ID_DIAGNOSA` varchar(10) DEFAULT NULL,
  `DESKRIPSI_ICD` varchar(15) DEFAULT NULL,
  `ID_DOKTER` varchar(15) DEFAULT NULL,
  `ID_PEMERIKSAAN` varchar(15) DEFAULT NULL,
  `trans_status` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `ID_USER` varchar(10) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_poli_umum`
--

INSERT INTO `tb_poli_umum` (`ID_POLI_UMUM`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `TANGGAL`, `KELUHAN`, `TINGGI_BADAN`, `BERAT_BADAN`, `SISTOLE`, `DIASISTOLE`, `RASPIRATORY_RATE`, `HEART_RATE`, `PD`, `ID_DIAGNOSA`, `DESKRIPSI_ICD`, `ID_DOKTER`, `ID_PEMERIKSAAN`, `trans_status`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('MRC00001', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln', '18253776', '1970-01-01', 'sakit kepla', '167 CM', '65 Kg', '120 mmhg', '80 mmhg', '20 per minute', '80 bpm', 'kehujanan ', 'AC0004', 'eronic', 'DK0001', 'PR00001', 2, 0, '4', '2018-07-12 07:56:03'),
('MRC00003', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln', '18253776', '2018-05-21', 'sakit kepla dan flu', '168 CM', '65 Kg', '120 mmhg', '80 mmhg', '20 per minute', '80 bpm', 'kehujanan', 'AC0004', 'eronic', 'DK0001', 'PR00001', 0, 1, '4', '2018-06-13 08:03:32'),
('MRC00002', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln', '18253776', '2018-04-18', 'sakit kepla dan flu', '167 CM', '65 Kg', '120 mmhg', '80 mmhg', '20 per minute', '80 bpm', 'kehujananan', 'AC0003', 'aclogik', 'DK0001', 'PR00001', 2, 0, '4', '2018-07-12 07:39:00'),
('MRC00004', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln.mangga dua raya ruko', '18253776', '1970-01-01', 'sakit kepla dan flu', '168 CM', '65 Kg', '120 mmhg', '80 mmhg', '20 per minute', '80 bpm', 'kehujanan dan kepanasan', 'AC0004', 'eronic', 'DK0001', 'PR00001', 2, 0, '4', '2018-07-12 07:52:00'),
('MRC00005', 17000001, 'Asfani', 'laki-laki', '22 Tahun', 'mangga dua', '12000', '2018-06-29', 'demam', '165 ', '65', '120 ', '80', '20', '80', 'cuaca ', 'AC0004', 'eronic', 'DK0001', 'PR00004', 0, 0, '4', '2018-06-29 13:41:39'),
('MRC00006', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln.mangga dua raya ruko textile blok C2/25', '18253776', '2018-07-12', 'sakit kepla dan flu', '168 CM', '65 Kg', '120 mmhg', '80 mmhg', '20 per minute', '80 bpm', 'kehujanan dan mandi dilau', 'AC0004', 'eronic', 'DK0001', 'PR00001', 0, 0, '4', '2018-07-12 07:17:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pulang_rb`
--

CREATE TABLE `tb_pulang_rb` (
  `ID_PULANG_RB` varchar(15) NOT NULL,
  `KODE_PASIEN` int(15) NOT NULL,
  `NAMA_LENGKAP` varchar(70) DEFAULT NULL,
  `UMUR` varchar(25) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` int(35) NOT NULL,
  `TGL_PULANG` date NOT NULL,
  `TOTAL_BIAYA` double NOT NULL,
  `ID_EMPLOYEE` varchar(15) DEFAULT NULL,
  `ID_DAFTAR_RB` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pulang_rb`
--

INSERT INTO `tb_pulang_rb` (`ID_PULANG_RB`, `KODE_PASIEN`, `NAMA_LENGKAP`, `UMUR`, `ALAMAT`, `NO_BPJS`, `TGL_PULANG`, `TOTAL_BIAYA`, `ID_EMPLOYEE`, `ID_DAFTAR_RB`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('BRB000001', 17000004, 'iswandi', '33 tahun', 'JL beyamin sueb ', 2147483647, '2018-05-17', 135000, 'MP0003', 'PRB000001', 0, '14', '2018-05-17 04:19:44'),
('BRB000002', 17000001, 'Asfani', '22 Tahun', 'mangga dua', 12000, '2018-06-20', 330000, 'MP0003', 'PRB000002', 1, '14', '2018-06-20 10:51:45'),
('BRB000003', 17000001, 'Asfani', '22 Tahun', 'mangga dua', 12000, '2018-07-11', 435000, 'MP0003', 'PRB000003', 0, '14', '2018-07-11 04:06:53'),
('BRB000004', 17000003, 'Andi nana mariana', '21 tahun', 'jl tg periuk', 1211112227, '2018-07-12', 60000, 'MP0003', 'PRB000004', 0, '14', '2018-07-12 12:13:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_resobat_gigi`
--

CREATE TABLE `tb_resobat_gigi` (
  `ID_RESOB_GIGI` varchar(10) NOT NULL,
  `KODE_PASIEN` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(35) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `DIAGNOSA` varchar(100) DEFAULT NULL,
  `JUMLAH_OBAT` int(11) NOT NULL,
  `ID_DOKTER` varchar(10) NOT NULL,
  `ID_POLI_GIGI` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(10) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_resobat_gigi`
--

INSERT INTO `tb_resobat_gigi` (`ID_RESOB_GIGI`, `KODE_PASIEN`, `NAMA_LENGKAP`, `UMUR`, `DIAGNOSA`, `JUMLAH_OBAT`, `ID_DOKTER`, `ID_POLI_GIGI`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('ROB00001', 17000002, 'Asfani', '23 Tahun', 'Autronik', 2, 'DK0002', 'PG00001', 0, '5', '2018-04-23 04:26:01'),
('ROB00003', 17000002, 'sahid', '22 Tahun', 'sakit gigi', 3, 'DK0002', 'PG00001', 0, '5', '2018-05-17 07:21:50'),
('ROB00002', 17000002, 'sahid', '22 Tahun', 'sakit gigi', 1, 'DK0002', 'PG00001', 0, '5', '2018-05-17 07:24:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_resobat_gizi`
--

CREATE TABLE `tb_resobat_gizi` (
  `ID_RESOB_GIZI` varchar(10) NOT NULL,
  `KODE_PASIEN` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(35) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `DIAGNOSA` varchar(100) DEFAULT NULL,
  `JUMLAH_OBAT` int(11) NOT NULL,
  `ID_DOKTER` varchar(10) NOT NULL,
  `ID_BEROBAT` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(10) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_resobat_gizi`
--

INSERT INTO `tb_resobat_gizi` (`ID_RESOB_GIZI`, `KODE_PASIEN`, `NAMA_LENGKAP`, `UMUR`, `DIAGNOSA`, `JUMLAH_OBAT`, `ID_DOKTER`, `ID_BEROBAT`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('ROZ00001', 17000004, 'iswandi', '33 tahun', 'eritrosit', 3, 'DK0006', 'KJ00005', 0, '6', '2018-05-18 07:13:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_resobat_kb`
--

CREATE TABLE `tb_resobat_kb` (
  `ID_RESOB_KB` varchar(10) NOT NULL,
  `KODE_PASIEN` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(35) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `DIAGNOSA` varchar(100) DEFAULT NULL,
  `JUMLAH_OBAT` int(11) NOT NULL,
  `ID_DOKTER` varchar(10) NOT NULL,
  `ID_POLI_KB` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(10) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_resobat_kb`
--

INSERT INTO `tb_resobat_kb` (`ID_RESOB_KB`, `KODE_PASIEN`, `NAMA_LENGKAP`, `UMUR`, `DIAGNOSA`, `JUMLAH_OBAT`, `ID_DOKTER`, `ID_POLI_KB`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('ROK00001', 17000003, 'Andi nana mariana', '21 tahun', 'eronic', 2, 'DK0007', 'KB000002', 0, '9', '2018-05-17 10:18:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_resobat_lansia`
--

CREATE TABLE `tb_resobat_lansia` (
  `ID_RESOB_LANSIA` varchar(10) NOT NULL,
  `KODE_PASIEN` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(35) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `DIAGNOSA` varchar(100) DEFAULT NULL,
  `JUMLAH_OBAT` int(11) NOT NULL,
  `ID_DOKTER` varchar(10) NOT NULL,
  `ID_POLI_LANSIA` varchar(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(10) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_resobat_lansia`
--

INSERT INTO `tb_resobat_lansia` (`ID_RESOB_LANSIA`, `KODE_PASIEN`, `NAMA_LENGKAP`, `UMUR`, `DIAGNOSA`, `JUMLAH_OBAT`, `ID_DOKTER`, `ID_POLI_LANSIA`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('ROL00001', 17000002, 'sahid', '22 Tahun', 'sakit gigi', 3, 'DK0005', '', 0, '10', '2018-05-17 07:36:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rujukan_gigi`
--

CREATE TABLE `tb_rujukan_gigi` (
  `ID_RUJUKAN_GIGI` varchar(15) NOT NULL,
  `KODE_PASIEN` int(15) NOT NULL,
  `NAMA_LENGKAP` varchar(30) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(25) DEFAULT NULL,
  `POLI_PENGIRIM` varchar(25) DEFAULT NULL,
  `PETUGAS_PENGIRIM` varchar(20) DEFAULT NULL,
  `TANGGAL` varchar(15) DEFAULT NULL,
  `KEPADA_YTH` varchar(15) DEFAULT NULL,
  `POLI_RUJUKAN` varchar(20) DEFAULT NULL,
  `PEMERIKSAAN` varchar(30) DEFAULT NULL,
  `ID_DIAGNOSA` varchar(15) NOT NULL,
  `ICD_SEMENTARA` varchar(30) DEFAULT NULL,
  `TERAPI` varchar(30) DEFAULT NULL,
  `ID_POLI_GIGI` varchar(10) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(8) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rujukan_gigi`
--

INSERT INTO `tb_rujukan_gigi` (`ID_RUJUKAN_GIGI`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `POLI_PENGIRIM`, `PETUGAS_PENGIRIM`, `TANGGAL`, `KEPADA_YTH`, `POLI_RUJUKAN`, `PEMERIKSAAN`, `ID_DIAGNOSA`, `ICD_SEMENTARA`, `TERAPI`, `ID_POLI_GIGI`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('RJG00001', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln', '18253776', 'Poli gigi', 'Dr.sunarto', '2018-04-23', 'Dr.Nana', 'Poli umum', 'tolong periksakan tenggorokan', 'AC0003', 'aclogik', 'obat radang dan nyeri', 'PG00001', 0, '5', '2018-04-23 06:40:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rujukan_gizi`
--

CREATE TABLE `tb_rujukan_gizi` (
  `ID_RUJUKAN_GIZI` varchar(15) NOT NULL,
  `KODE_PASIEN` int(15) NOT NULL,
  `NAMA_LENGKAP` varchar(30) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(25) DEFAULT NULL,
  `POLI_PENGIRIM` varchar(25) DEFAULT NULL,
  `PETUGAS_PENGIRIM` varchar(20) DEFAULT NULL,
  `TANGGAL` varchar(15) DEFAULT NULL,
  `KEPADA_YTH` varchar(15) DEFAULT NULL,
  `POLI_RUJUKAN` varchar(20) DEFAULT NULL,
  `PEMERIKSAAN` varchar(30) DEFAULT NULL,
  `ID_DIAGNOSA` varchar(15) NOT NULL,
  `ICD_SEMENTARA` varchar(30) DEFAULT NULL,
  `TERAPI` varchar(30) DEFAULT NULL,
  `ID_BEROBAT` varchar(10) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(8) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rujukan_gizi`
--

INSERT INTO `tb_rujukan_gizi` (`ID_RUJUKAN_GIZI`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `POLI_PENGIRIM`, `PETUGAS_PENGIRIM`, `TANGGAL`, `KEPADA_YTH`, `POLI_RUJUKAN`, `PEMERIKSAAN`, `ID_DIAGNOSA`, `ICD_SEMENTARA`, `TERAPI`, `ID_BEROBAT`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('RJZ00001', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln.mangga dua', '18253776', 'Poli Gizi', 'Dr.martin', '2018-04-27', 'Dr.Nana', 'Poli umum', 'Tolong Priksa kan heart Rate', 'AC0003', 'aclogik', 'tidak di kasih obat', 'KJ00002', 0, '6', '2018-05-07 09:53:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rujukan_internal`
--

CREATE TABLE `tb_rujukan_internal` (
  `ID_RUJUKAN` varchar(15) NOT NULL,
  `KODE_PASIEN` int(15) NOT NULL,
  `NAMA_LENGKAP` varchar(30) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(25) DEFAULT NULL,
  `POLI_PENGIRIM` varchar(25) DEFAULT NULL,
  `PETUGAS_PENGIRIM` varchar(20) DEFAULT NULL,
  `TANGGAL` varchar(15) DEFAULT NULL,
  `KEPADA_YTH` varchar(15) DEFAULT NULL,
  `POLI_RUJUKAN` varchar(20) DEFAULT NULL,
  `PEMERIKSAAN` varchar(30) DEFAULT NULL,
  `ICD_SEMENTARA` varchar(30) DEFAULT NULL,
  `TERAPI` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rujukan_internal`
--

INSERT INTO `tb_rujukan_internal` (`ID_RUJUKAN`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `POLI_PENGIRIM`, `PETUGAS_PENGIRIM`, `TANGGAL`, `KEPADA_YTH`, `POLI_RUJUKAN`, `PEMERIKSAAN`, `ICD_SEMENTARA`, `TERAPI`) VALUES
('RJI00001', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln', '18253776', 'Poli Umum', 'dr.nana', '12/07/2017', 'Dr.sugeng', 'laboratorium', 'tolong cek gula darah', 'luka nya membengkak', 'salep dan obat gatel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rujukan_kb`
--

CREATE TABLE `tb_rujukan_kb` (
  `ID_RUJUKAN_KB` varchar(15) NOT NULL,
  `KODE_PASIEN` int(15) NOT NULL,
  `NAMA_LENGKAP` varchar(30) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(25) DEFAULT NULL,
  `POLI_PENGIRIM` varchar(25) DEFAULT NULL,
  `PETUGAS_PENGIRIM` varchar(20) DEFAULT NULL,
  `TANGGAL` varchar(15) DEFAULT NULL,
  `KEPADA_YTH` varchar(15) DEFAULT NULL,
  `POLI_RUJUKAN` varchar(20) DEFAULT NULL,
  `PEMERIKSAAN` varchar(30) DEFAULT NULL,
  `ID_DIAGNOSA` varchar(15) NOT NULL,
  `ICD_SEMENTARA` varchar(30) DEFAULT NULL,
  `TERAPI` varchar(30) DEFAULT NULL,
  `ID_BEROBAT` varchar(10) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(8) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rujukan_kb`
--

INSERT INTO `tb_rujukan_kb` (`ID_RUJUKAN_KB`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `POLI_PENGIRIM`, `PETUGAS_PENGIRIM`, `TANGGAL`, `KEPADA_YTH`, `POLI_RUJUKAN`, `PEMERIKSAAN`, `ID_DIAGNOSA`, `ICD_SEMENTARA`, `TERAPI`, `ID_BEROBAT`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('RJK00001', 17000003, 'iswandi', 'Laki-laki', '33 tahun', 'JL beyamin sueb ', '2147483647', 'Poli KB', 'Dr.lisa', '2018-05-06', 'Dr.martin', 'Poli Gizi', 'konzultasi gizi', 'AC0002', 'darah merah', '---', 'KJ00005', 0, '9', '2018-05-07 10:06:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rujukan_lansia`
--

CREATE TABLE `tb_rujukan_lansia` (
  `ID_RUJUKAN_LANSIA` varchar(15) NOT NULL,
  `KODE_PASIEN` int(15) NOT NULL,
  `NAMA_LENGKAP` varchar(30) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(25) DEFAULT NULL,
  `POLI_PENGIRIM` varchar(25) DEFAULT NULL,
  `PETUGAS_PENGIRIM` varchar(20) DEFAULT NULL,
  `TANGGAL` varchar(15) DEFAULT NULL,
  `KEPADA_YTH` varchar(15) DEFAULT NULL,
  `POLI_RUJUKAN` varchar(20) DEFAULT NULL,
  `PEMERIKSAAN` varchar(30) DEFAULT NULL,
  `ID_DIAGNOSA` varchar(15) NOT NULL,
  `ICD_SEMENTARA` varchar(30) DEFAULT NULL,
  `TERAPI` varchar(30) DEFAULT NULL,
  `ID_POLI_LANSIA` varchar(10) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(8) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rujukan_lansia`
--

INSERT INTO `tb_rujukan_lansia` (`ID_RUJUKAN_LANSIA`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `POLI_PENGIRIM`, `PETUGAS_PENGIRIM`, `TANGGAL`, `KEPADA_YTH`, `POLI_RUJUKAN`, `PEMERIKSAAN`, `ID_DIAGNOSA`, `ICD_SEMENTARA`, `TERAPI`, `ID_POLI_LANSIA`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('RJL00001', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln', '18253776', 'Poli lansia', 'Dr.ujang', '2018-04-24', 'Dr.Nana', 'Poli umum', 'sakit mata  dan berair', 'AC0004', 'eronic', 'obat tetes', 'PLA00001', 0, '10', '2018-04-24 03:38:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rujukan_umum`
--

CREATE TABLE `tb_rujukan_umum` (
  `ID_RUJUKAN_UMUM` varchar(15) NOT NULL,
  `KODE_PASIEN` int(15) NOT NULL,
  `NAMA_LENGKAP` varchar(30) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(25) DEFAULT NULL,
  `POLI_PENGIRIM` varchar(25) DEFAULT NULL,
  `PETUGAS_PENGIRIM` varchar(20) DEFAULT NULL,
  `TANGGAL` varchar(15) DEFAULT NULL,
  `KEPADA_YTH` varchar(15) DEFAULT NULL,
  `POLI_RUJUKAN` varchar(20) DEFAULT NULL,
  `PEMERIKSAAN` varchar(30) DEFAULT NULL,
  `ID_DIAGNOSA` varchar(15) NOT NULL,
  `ICD_SEMENTARA` varchar(30) DEFAULT NULL,
  `TERAPI` varchar(30) DEFAULT NULL,
  `ID_POLI_UMUM` varchar(10) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(8) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rujukan_umum`
--

INSERT INTO `tb_rujukan_umum` (`ID_RUJUKAN_UMUM`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `POLI_PENGIRIM`, `PETUGAS_PENGIRIM`, `TANGGAL`, `KEPADA_YTH`, `POLI_RUJUKAN`, `PEMERIKSAAN`, `ID_DIAGNOSA`, `ICD_SEMENTARA`, `TERAPI`, `ID_POLI_UMUM`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('RJU00001', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln', '18253776', 'Poli Umum', 'dr.nana', '2017-12-07', 'Dr.sugeng', 'laboratorium', 'tolong cek gula darah dan cek ', 'ac001', 'algolic', 'salep dan obat gatel', 'MRC00001', 0, '4', '2018-04-15 03:33:57'),
('RJU00002', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln', '18253776', 'Poli umum', 'Dr.Nana', '1970-01-01', 'Dr.sunarto', 'Poli gigi', 'bengkak di gusi', 'AC0003', 'aclogik', 'tolong priksakan hanya obat ny', 'MRC00001', 0, '4', '2018-06-18 04:23:13'),
('RJU00003', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln', '18253776', 'Poli umum', 'Dr.Nana', '1970-01-01', 'Dr.sunarto', 'Poli gigi', 'tolong cek gigi', 'AC0003', 'aclogik', 'obat nyeri dan kumur', 'MRC00001', 1, '4', '2018-06-18 04:22:35'),
('RJU00004', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln.mangga dua raya ruko', '18253776', 'Poli umum', 'Dr.Nana', '2018-07-12', 'Dr.sunarto', 'Poli gigi', 'tolong periksakan gusi nya', 'AC0004', 'eronic', 'obat nyeri', 'MRC00004', 0, '4', '2018-07-12 07:52:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_terapi_obat`
--

CREATE TABLE `tb_terapi_obat` (
  `ID_TERAPI_OBAT` varchar(10) NOT NULL,
  `KODE_PASIEN` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(35) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `TGL_MASUK` varchar(15) DEFAULT NULL,
  `JUMLAH_OBAT` int(11) NOT NULL,
  `ID_MEDREC` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tindakan`
--

CREATE TABLE `tb_tindakan` (
  `ID_PEMERIKSAAN` varchar(10) NOT NULL,
  `KODE_PASIEN` int(10) NOT NULL,
  `NAMA_LENGKAP` varchar(40) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(25) DEFAULT NULL,
  `TGL_MASUK` varchar(15) DEFAULT NULL,
  `KELUHAN` text NOT NULL,
  `TINGGI_BADAN` varchar(15) DEFAULT NULL,
  `BERAT_BADAN` varchar(15) DEFAULT NULL,
  `SISTOLE` varchar(15) DEFAULT NULL,
  `DIASISTOLE` varchar(15) DEFAULT NULL,
  `RASPIRATORY_RATE` varchar(15) DEFAULT NULL,
  `HEART_RATE` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tindakan`
--

INSERT INTO `tb_tindakan` (`ID_PEMERIKSAAN`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `TGL_MASUK`, `KELUHAN`, `TINGGI_BADAN`, `BERAT_BADAN`, `SISTOLE`, `DIASISTOLE`, `RASPIRATORY_RATE`, `HEART_RATE`) VALUES
('PR00001', 17000002, 'sahid', 'laki-laki', '22 Tahun', 'jln', '18253776', '11/12/2017', 'sakit kepla', '167 CM', '65 Kg', '120 mmhg', '80 mmhg', '20 per minute', '80 bpm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tindakan_bersalin`
--

CREATE TABLE `tb_tindakan_bersalin` (
  `ID_TDK_BERSALIN` varchar(15) NOT NULL,
  `TINDAKAN_BERSALIN` varchar(55) DEFAULT NULL,
  `TARIF` double NOT NULL,
  `KETERANGAN` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(15) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tindakan_bersalin`
--

INSERT INTO `tb_tindakan_bersalin` (`ID_TDK_BERSALIN`, `TINDAKAN_BERSALIN`, `TARIF`, `KETERANGAN`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('TDK0001', 'kolf ke 2 dst', 10000, 'Tindakan bersalin per kolf 1 pasien ', 0, '1', '2018-04-22 08:16:49'),
('TDK0002', 'Pemberian O2', 10000, 'pemberian O2 dengan tarif perjam', 0, '1', '2018-04-22 08:15:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tindakan_gizi_anak`
--

CREATE TABLE `tb_tindakan_gizi_anak` (
  `ID_TG_ANAK` varchar(15) NOT NULL,
  `KODE_PASIEN` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(45) DEFAULT NULL,
  `TEMPAT_TGL_LAHIR` varchar(35) DEFAULT NULL,
  `ALAMAT` text,
  `NAMA_ORTU` varchar(35) DEFAULT NULL,
  `PEKERJAAN_ORTU` varchar(20) DEFAULT NULL,
  `ANAK_KE_DARI` varchar(15) DEFAULT NULL,
  `DIAGNOSA_MEDIS` varchar(20) DEFAULT NULL,
  `BB_LAHIR` varchar(15) DEFAULT NULL,
  `PB_LAHIR` varchar(15) DEFAULT NULL,
  `UMUR_KEHAMILAN` varchar(20) DEFAULT NULL,
  `KELAHIRAN` varchar(20) DEFAULT NULL,
  `BERAT_BADAN` varchar(15) DEFAULT NULL,
  `TINGGI_BADAN` varchar(15) DEFAULT NULL,
  `IMT` varchar(20) DEFAULT NULL,
  `BIOKIMIA` varchar(20) DEFAULT NULL,
  `FISIK_KLINIS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tindakan_gizi_anak`
--

INSERT INTO `tb_tindakan_gizi_anak` (`ID_TG_ANAK`, `KODE_PASIEN`, `NAMA_LENGKAP`, `TEMPAT_TGL_LAHIR`, `ALAMAT`, `NAMA_ORTU`, `PEKERJAAN_ORTU`, `ANAK_KE_DARI`, `DIAGNOSA_MEDIS`, `BB_LAHIR`, `PB_LAHIR`, `UMUR_KEHAMILAN`, `KELAHIRAN`, `BERAT_BADAN`, `TINGGI_BADAN`, `IMT`, `BIOKIMIA`, `FISIK_KLINIS`) VALUES
('PGA000001', 17000001, 'Asfani', 'Lampung, 04-02-1996', 'mangga dua', 'Kasiman', 'petani', '4 dari 4', 'kurang gizi', '2 kg', '2', '8 bulan', 'Tunggal', '20 kg', '56 cm', '--', '--', 'badan nya kurus muka nya pucat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tindakan_gizi_dewasa`
--

CREATE TABLE `tb_tindakan_gizi_dewasa` (
  `ID_TG_DEWASA` varchar(15) NOT NULL,
  `KODE_PASIEN` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(50) DEFAULT NULL,
  `TEMPAT_TGL_LAHIR` varchar(25) DEFAULT NULL,
  `ALAMAT` text,
  `AGAMA` varchar(15) DEFAULT NULL,
  `PENDIDIKAN` varchar(20) DEFAULT NULL,
  `PEKERJAAN` varchar(20) DEFAULT NULL,
  `DIAGNOSA_MEDIS` varchar(50) DEFAULT NULL,
  `TINGGI_BADAN` varchar(15) DEFAULT NULL,
  `BERAT_BADAN` varchar(15) DEFAULT NULL,
  `IMT` varchar(15) DEFAULT NULL,
  `LLA` varchar(15) DEFAULT NULL,
  `LINGKAR_PERUT` varchar(15) DEFAULT NULL,
  `LINGKAR_PANGGUL` varchar(15) DEFAULT NULL,
  `STATUS_GIZI` varchar(25) DEFAULT NULL,
  `BIOKIMIA` varchar(20) DEFAULT NULL,
  `KONDISI_UMUM` varchar(45) DEFAULT NULL,
  `TEKANAN_DARAH` varchar(15) DEFAULT NULL,
  `SUHU_TUBUH` varchar(15) DEFAULT NULL,
  `KLINIS` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tindakan_gizi_dewasa`
--

INSERT INTO `tb_tindakan_gizi_dewasa` (`ID_TG_DEWASA`, `KODE_PASIEN`, `NAMA_LENGKAP`, `TEMPAT_TGL_LAHIR`, `ALAMAT`, `AGAMA`, `PENDIDIKAN`, `PEKERJAAN`, `DIAGNOSA_MEDIS`, `TINGGI_BADAN`, `BERAT_BADAN`, `IMT`, `LLA`, `LINGKAR_PERUT`, `LINGKAR_PANGGUL`, `STATUS_GIZI`, `BIOKIMIA`, `KONDISI_UMUM`, `TEKANAN_DARAH`, `SUHU_TUBUH`, `KLINIS`) VALUES
('PGD000001', 17000002, 'sahid', 'johar,12-12-1996', 'jln', 'Islam', 's1', 'swasta', 'kurang gizi', '167 CM', '65 Kg', '20', '20', '20', '20', 'Kurus', '--', 'kurus muka puca', '120/80', '20', 'kurus ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tu_obat`
--

CREATE TABLE `tb_tu_obat` (
  `ID_TU_OBAT` varchar(10) NOT NULL,
  `KODE_PASIEN` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(35) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `DIAGNOSA` varchar(100) DEFAULT NULL,
  `JUMLAH_OBAT` int(11) NOT NULL,
  `ID_DOKTER` varchar(10) NOT NULL,
  `ID_POLI_UMUM` varchar(15) DEFAULT NULL,
  `trans_status` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(10) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tu_obat`
--

INSERT INTO `tb_tu_obat` (`ID_TU_OBAT`, `KODE_PASIEN`, `NAMA_LENGKAP`, `UMUR`, `DIAGNOSA`, `JUMLAH_OBAT`, `ID_DOKTER`, `ID_POLI_UMUM`, `trans_status`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('TUO00001', 17000002, 'Asfani', '23 Tahun', 'Autronik', 2, 'DK0001', 'MRC00001', 1, 0, '4', '2018-07-11 06:42:45'),
('TUO00005', 17000001, 'Asfani', '22 Tahun', 'eronic', 2, 'DK0001', 'MRC00005', 0, 0, '4', '2018-06-29 13:43:30'),
('TUO00004', 17000002, 'sahid', '22 Tahun', 'eronic', 3, 'DK0001', 'MRC00004', 0, 0, '4', '2018-06-18 01:18:26'),
('TUO00003', 17000002, 'sahid', '22 Tahun', 'corelatif', 2, 'DK0001', 'MRC00001', 0, 1, '4', '2018-06-18 02:21:35'),
('TUO00002', 17000002, 'sahid', '22 Tahun', 'corelatif', 2, 'DK0001', 'MRC00001', 0, 0, '4', '2018-06-18 01:20:22'),
('TUO00006', 17000002, 'sahid', '22 Tahun', 'aclogik', 2, 'DK0001', 'MRC00002', 1, 0, '4', '2018-07-11 07:30:25'),
('TUO00007', 17000002, 'sahid', '22 Tahun', 'eronic', 2, 'DK0001', 'MRC00001', 1, 0, '4', '2018-07-12 07:58:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_umb_rujukan`
--

CREATE TABLE `tb_umb_rujukan` (
  `ID_UMB_RUJUKAN` varchar(10) NOT NULL,
  `KODE_PASIEN` varchar(10) DEFAULT NULL,
  `NAMA_LENGKAP` varchar(25) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(10) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(22) DEFAULT NULL,
  `POLI_PENGIRIM` varchar(15) DEFAULT NULL,
  `PETUGAS_PENGIRIM` varchar(15) DEFAULT NULL,
  `TANGGAL` varchar(13) DEFAULT NULL,
  `KEPADA_YTH` varchar(15) DEFAULT NULL,
  `POLI_UMB` varchar(15) DEFAULT NULL,
  `HASIL_PEMERIKSAAN` text NOT NULL,
  `TINDAKAN_TERAPI` text NOT NULL,
  `ID_RUJUKAN` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_umb_rujukan`
--

INSERT INTO `tb_umb_rujukan` (`ID_UMB_RUJUKAN`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `POLI_PENGIRIM`, `PETUGAS_PENGIRIM`, `TANGGAL`, `KEPADA_YTH`, `POLI_UMB`, `HASIL_PEMERIKSAAN`, `TINDAKAN_TERAPI`, `ID_RUJUKAN`) VALUES
('UMB00001', '17000002', 'sahid', 'laki-laki', '22 Tahun', 'jln', '18253776', 'Poli Umum', 'dr.nana', '12/07/2017', 'Dr.sugeng', 'poli gigi', 'hanya alegri saja', 'kasih obat alergi dan pantang makanan yang beralergi', 'RJI00001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_umb_rujukan_gigi`
--

CREATE TABLE `tb_umb_rujukan_gigi` (
  `ID_UMB_GIGI` varchar(10) NOT NULL,
  `KODE_PASIEN` varchar(10) DEFAULT NULL,
  `NAMA_LENGKAP` varchar(25) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(10) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(22) DEFAULT NULL,
  `POLI_PENGIRIM` varchar(15) DEFAULT NULL,
  `PETUGAS_PENGIRIM` varchar(15) DEFAULT NULL,
  `TANGGAL` varchar(13) DEFAULT NULL,
  `KEPADA_YTH` varchar(15) DEFAULT NULL,
  `POLI_UMB` varchar(15) DEFAULT NULL,
  `HASIL_PEMERIKSAAN` text NOT NULL,
  `TINDAKAN_TERAPI` text NOT NULL,
  `ID_POLI_GIGI` varchar(10) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(10) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_umb_rujukan_gigi`
--

INSERT INTO `tb_umb_rujukan_gigi` (`ID_UMB_GIGI`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `POLI_PENGIRIM`, `PETUGAS_PENGIRIM`, `TANGGAL`, `KEPADA_YTH`, `POLI_UMB`, `HASIL_PEMERIKSAAN`, `TINDAKAN_TERAPI`, `ID_POLI_GIGI`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('UBG00001', '17000002', 'sahid', 'laki-laki', '22 Tahun', 'jln', '18253776', 'Poli gigi', 'Dr.sunarto', '2018-04-23', 'Dr.Nana', 'Poli umum', 'tidak apa2 hanya bolong besar', 'kasih obat bolong dan obat  nyeri', 'PG00001', 0, '5', '2018-04-23 07:32:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_umb_rujukan_gizi`
--

CREATE TABLE `tb_umb_rujukan_gizi` (
  `ID_UMB_GIZI` varchar(10) NOT NULL,
  `KODE_PASIEN` varchar(10) DEFAULT NULL,
  `NAMA_LENGKAP` varchar(25) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(10) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(22) DEFAULT NULL,
  `POLI_PENGIRIM` varchar(15) DEFAULT NULL,
  `PETUGAS_PENGIRIM` varchar(15) DEFAULT NULL,
  `TANGGAL` varchar(13) DEFAULT NULL,
  `KEPADA_YTH` varchar(15) DEFAULT NULL,
  `POLI_UMB` varchar(15) DEFAULT NULL,
  `HASIL_PEMERIKSAAN` text NOT NULL,
  `TINDAKAN_TERAPI` text NOT NULL,
  `ID_BEROBAT` varchar(10) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(10) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_umb_rujukan_gizi`
--

INSERT INTO `tb_umb_rujukan_gizi` (`ID_UMB_GIZI`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `POLI_PENGIRIM`, `PETUGAS_PENGIRIM`, `TANGGAL`, `KEPADA_YTH`, `POLI_UMB`, `HASIL_PEMERIKSAAN`, `TINDAKAN_TERAPI`, `ID_BEROBAT`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('UBZ00001', '17000001', 'Asfani', 'laki-laki', '22 Tahun', 'mangga dua', '12000', 'Poli Gizi', 'Dr.martin', '2018-04-27', 'Dr.Nana', 'Poli umum', 'gizi nya baik', 'tolong kasih vitamin ', 'KJ00001', 0, '6', '2018-04-27 14:22:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_umb_rujukan_kb`
--

CREATE TABLE `tb_umb_rujukan_kb` (
  `ID_UMB_KB` varchar(10) NOT NULL,
  `KODE_PASIEN` varchar(10) DEFAULT NULL,
  `NAMA_LENGKAP` varchar(25) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(10) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(22) DEFAULT NULL,
  `POLI_PENGIRIM` varchar(15) DEFAULT NULL,
  `PETUGAS_PENGIRIM` varchar(15) DEFAULT NULL,
  `TANGGAL` varchar(13) DEFAULT NULL,
  `KEPADA_YTH` varchar(15) DEFAULT NULL,
  `POLI_UMB` varchar(15) DEFAULT NULL,
  `HASIL_PEMERIKSAAN` text NOT NULL,
  `TINDAKAN_TERAPI` text NOT NULL,
  `ID_BEROBAT` varchar(10) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(10) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_umb_rujukan_kb`
--

INSERT INTO `tb_umb_rujukan_kb` (`ID_UMB_KB`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `POLI_PENGIRIM`, `PETUGAS_PENGIRIM`, `TANGGAL`, `KEPADA_YTH`, `POLI_UMB`, `HASIL_PEMERIKSAAN`, `TINDAKAN_TERAPI`, `ID_BEROBAT`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('UBK00001', '17000002', 'sahid', 'laki-laki', '22 Tahun', 'jln', '18253776', 'Poli KB', 'Dr.lisa', '2018-05-07', 'Dr.martin', 'Poli Gizi', 'pasien baik2 aja cuma kurangi  minum air kelapa dan soda', '---', 'KJ00002', 0, '9', '2018-05-07 10:23:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_umb_rujukan_lansia`
--

CREATE TABLE `tb_umb_rujukan_lansia` (
  `ID_UMB_LANSIA` varchar(10) NOT NULL,
  `KODE_PASIEN` varchar(10) DEFAULT NULL,
  `NAMA_LENGKAP` varchar(25) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(10) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(22) DEFAULT NULL,
  `POLI_PENGIRIM` varchar(15) DEFAULT NULL,
  `PETUGAS_PENGIRIM` varchar(15) DEFAULT NULL,
  `TANGGAL` varchar(13) DEFAULT NULL,
  `KEPADA_YTH` varchar(15) DEFAULT NULL,
  `POLI_UMB` varchar(15) DEFAULT NULL,
  `HASIL_PEMERIKSAAN` text NOT NULL,
  `TINDAKAN_TERAPI` text NOT NULL,
  `ID_POLI_LANSIA` varchar(10) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(10) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_umb_rujukan_lansia`
--

INSERT INTO `tb_umb_rujukan_lansia` (`ID_UMB_LANSIA`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `POLI_PENGIRIM`, `PETUGAS_PENGIRIM`, `TANGGAL`, `KEPADA_YTH`, `POLI_UMB`, `HASIL_PEMERIKSAAN`, `TINDAKAN_TERAPI`, `ID_POLI_LANSIA`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('UBL00001', '17000002', 'sahid', 'laki-laki', '22 Tahun', 'jln', '18253776', 'Poli lansia', 'Dr.ujang', '2018-04-24', 'Dr.iswandi', 'Poli gigi', 'tidak apa2', 'kasih obat nyeri dan vitamin', 'PLA00001', 0, '10', '2018-04-24 04:08:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_umb_rujukan_umum`
--

CREATE TABLE `tb_umb_rujukan_umum` (
  `ID_UMB_UMUM` varchar(10) NOT NULL,
  `KODE_PASIEN` varchar(10) DEFAULT NULL,
  `NAMA_LENGKAP` varchar(25) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(10) DEFAULT NULL,
  `UMUR` varchar(10) DEFAULT NULL,
  `ALAMAT` text NOT NULL,
  `NO_BPJS` varchar(22) DEFAULT NULL,
  `POLI_PENGIRIM` varchar(15) DEFAULT NULL,
  `PETUGAS_PENGIRIM` varchar(15) DEFAULT NULL,
  `TANGGAL` varchar(13) DEFAULT NULL,
  `KEPADA_YTH` varchar(15) DEFAULT NULL,
  `POLI_UMB` varchar(15) DEFAULT NULL,
  `HASIL_PEMERIKSAAN` text NOT NULL,
  `TINDAKAN_TERAPI` text NOT NULL,
  `ID_POLI_UMUM` varchar(10) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ID_USER` varchar(10) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_umb_rujukan_umum`
--

INSERT INTO `tb_umb_rujukan_umum` (`ID_UMB_UMUM`, `KODE_PASIEN`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `UMUR`, `ALAMAT`, `NO_BPJS`, `POLI_PENGIRIM`, `PETUGAS_PENGIRIM`, `TANGGAL`, `KEPADA_YTH`, `POLI_UMB`, `HASIL_PEMERIKSAAN`, `TINDAKAN_TERAPI`, `ID_POLI_UMUM`, `status`, `ID_USER`, `CREATE_DATE`) VALUES
('UBR00001', '17000002', 'sahid', 'laki-laki', '22 Tahun', 'jln', '18253776', 'Poli umum', 'Dr.Nana', '2018-06-18', 'Dr.sunarto', 'Poli gigi', 'hanya alergi dan kurangi makan coklat', 'kasih obat alergi dan pantang makanan yang beralergi', 'MRC00001', 0, '4', '2018-06-18 07:05:29'),
('UBR00002', '17000002', 'sahid', 'laki-laki', '22 Tahun', 'jln.johar baru', '18253776', 'Poli gigi', 'Dr.sunarto', '2018-06-18', 'dr.nana', 'Poli Umum', 'gusi bengkak', 'kasih obat nyeri dan obat alergi', 'MRC00001', 1, '4', '2018-06-18 07:11:34'),
('UBR00003', '17000002', 'sahid', 'laki-laki', '22 Tahun', 'jln', '18253776', 'Poli umum', 'Dr.Nana', '2018-07-12', 'Dr.sunarto', 'Poli gigi', 'hasil pemeriksan perut baik-baik aja', 'hanya di kasih obat mag', 'MRC00001', 0, '4', '2018-07-12 07:56:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_unit`
--

CREATE TABLE `tb_unit` (
  `ID_UNIT` varchar(10) NOT NULL,
  `NAMA_UNIT` varchar(20) DEFAULT NULL,
  `KETERANGAN` varchar(30) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `LAST_USER` varchar(8) NOT NULL,
  `CREATE_DATA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_unit`
--

INSERT INTO `tb_unit` (`ID_UNIT`, `NAMA_UNIT`, `KETERANGAN`, `status`, `LAST_USER`, `CREATE_DATA`) VALUES
('U002', 'Poli gigi', 'khusus gigi', 0, 'Admin', '2018-03-19 06:34:04'),
('U001', 'Poli umum', 'khusus umum', 0, 'admin', '2018-04-27 12:43:09'),
('U003', 'Poli MTBS', 'khusus balita', 0, 'admin', '2018-03-20 07:18:13'),
('U005', 'Poli Kb', 'khusus kb', 0, 'Admin', '2018-05-10 17:15:36'),
('U004', 'Poli Lansia', 'khusus Lansia', 0, 'Admin', '2018-05-10 17:15:20'),
('U008', 'Ruang bersalin', 'Unit penunjang ruangan rawat i', 0, 'admin', '2018-07-11 07:50:15'),
('U007', 'Poli Kia', 'khusus Kia', 0, 'Admin', '2018-05-10 17:16:17'),
('U006', 'Poli gizi', 'khusus gizi', 0, 'Admin', '2018-05-10 17:15:52'),
('U009', 'Laboratorium', 'Unit Penunjang laboratorium', 0, 'Admin', '2018-07-11 07:49:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dt_farmasi`
--
ALTER TABLE `dt_farmasi`
  ADD KEY `ID_TU_OBAT` (`ID_FARMASI`,`ID_OBAT`,`KODE_PASIEN`),
  ADD KEY `ID_USER` (`ID_USER`),
  ADD KEY `ID_UNIT` (`ID_UNIT`);

--
-- Indexes for table `dt_pembayaran_lab`
--
ALTER TABLE `dt_pembayaran_lab`
  ADD KEY `ID_PEMBAYARAN_LAB` (`ID_PEMBAYARAN_LAB`,`ID_DT_LAB`,`KODE_PASIEN`,`ID_USER`);

--
-- Indexes for table `dt_pulang_rb`
--
ALTER TABLE `dt_pulang_rb`
  ADD KEY `ID_PULANG_RB` (`ID_PULANG_RB`,`ID_PENUNJANG`,`KODE_PASIEN`,`ID_USER`);

--
-- Indexes for table `dt_resep_obat`
--
ALTER TABLE `dt_resep_obat`
  ADD KEY `ID_TU_OBAT` (`ID_TU_OBAT`,`ID_OBAT`,`KODE_PASIEN`);

--
-- Indexes for table `dt_resobat_gigi`
--
ALTER TABLE `dt_resobat_gigi`
  ADD KEY `ID_TU_OBAT` (`ID_RESOB_GIGI`,`ID_OBAT`,`KODE_PASIEN`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indexes for table `dt_resobat_gizi`
--
ALTER TABLE `dt_resobat_gizi`
  ADD KEY `ID_TU_OBAT` (`ID_RESOB_GIZI`,`ID_OBAT`,`KODE_PASIEN`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indexes for table `dt_resobat_kb`
--
ALTER TABLE `dt_resobat_kb`
  ADD KEY `ID_TU_OBAT` (`ID_RESOB_KB`,`ID_OBAT`,`KODE_PASIEN`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indexes for table `dt_resobat_lansia`
--
ALTER TABLE `dt_resobat_lansia`
  ADD KEY `ID_TU_OBAT` (`ID_RESOB_LANSIA`,`ID_OBAT`,`KODE_PASIEN`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indexes for table `dt_tu_obat`
--
ALTER TABLE `dt_tu_obat`
  ADD KEY `ID_TU_OBAT` (`ID_TU_OBAT`,`ID_OBAT`,`KODE_PASIEN`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`MenuID`),
  ADD KEY `LastUser` (`LastUser`),
  ADD KEY `LastUser_2` (`LastUser`);

--
-- Indexes for table `tbl_menu_daftar`
--
ALTER TABLE `tbl_menu_daftar`
  ADD PRIMARY KEY (`MenuID`),
  ADD KEY `LastUser` (`LastUser`),
  ADD KEY `LastUser_2` (`LastUser`);

--
-- Indexes for table `tbl_menu_farmasi`
--
ALTER TABLE `tbl_menu_farmasi`
  ADD PRIMARY KEY (`MenuID`),
  ADD KEY `LastUser` (`LastUser`),
  ADD KEY `LastUser_2` (`LastUser`);

--
-- Indexes for table `tbl_menu_kpelayanan`
--
ALTER TABLE `tbl_menu_kpelayanan`
  ADD PRIMARY KEY (`MenuID`),
  ADD KEY `LastUser` (`LastUser`),
  ADD KEY `LastUser_2` (`LastUser`);

--
-- Indexes for table `tbl_menu_kpuskes`
--
ALTER TABLE `tbl_menu_kpuskes`
  ADD PRIMARY KEY (`MenuID`),
  ADD KEY `LastUser` (`LastUser`),
  ADD KEY `LastUser_2` (`LastUser`);

--
-- Indexes for table `tbl_menu_kpuskes1`
--
ALTER TABLE `tbl_menu_kpuskes1`
  ADD PRIMARY KEY (`MenuID`),
  ADD KEY `LastUser` (`LastUser`),
  ADD KEY `LastUser_2` (`LastUser`);

--
-- Indexes for table `tbl_menu_lab`
--
ALTER TABLE `tbl_menu_lab`
  ADD PRIMARY KEY (`MenuID`),
  ADD KEY `LastUser` (`LastUser`),
  ADD KEY `LastUser_2` (`LastUser`);

--
-- Indexes for table `tbl_menu_pemeriksaan`
--
ALTER TABLE `tbl_menu_pemeriksaan`
  ADD PRIMARY KEY (`MenuID`),
  ADD KEY `LastUser` (`LastUser`),
  ADD KEY `LastUser_2` (`LastUser`);

--
-- Indexes for table `tbl_menu_pemgizi`
--
ALTER TABLE `tbl_menu_pemgizi`
  ADD PRIMARY KEY (`MenuID`),
  ADD KEY `LastUser` (`LastUser`),
  ADD KEY `LastUser_2` (`LastUser`);

--
-- Indexes for table `tbl_menu_pemkb`
--
ALTER TABLE `tbl_menu_pemkb`
  ADD PRIMARY KEY (`MenuID`),
  ADD KEY `LastUser` (`LastUser`),
  ADD KEY `LastUser_2` (`LastUser`);

--
-- Indexes for table `tbl_menu_pgigi`
--
ALTER TABLE `tbl_menu_pgigi`
  ADD PRIMARY KEY (`MenuID`),
  ADD KEY `LastUser` (`LastUser`),
  ADD KEY `LastUser_2` (`LastUser`);

--
-- Indexes for table `tbl_menu_pgizi`
--
ALTER TABLE `tbl_menu_pgizi`
  ADD PRIMARY KEY (`MenuID`),
  ADD KEY `LastUser` (`LastUser`),
  ADD KEY `LastUser_2` (`LastUser`);

--
-- Indexes for table `tbl_menu_pkb`
--
ALTER TABLE `tbl_menu_pkb`
  ADD PRIMARY KEY (`MenuID`),
  ADD KEY `LastUser` (`LastUser`),
  ADD KEY `LastUser_2` (`LastUser`);

--
-- Indexes for table `tbl_menu_plansia`
--
ALTER TABLE `tbl_menu_plansia`
  ADD PRIMARY KEY (`MenuID`),
  ADD KEY `LastUser` (`LastUser`),
  ADD KEY `LastUser_2` (`LastUser`);

--
-- Indexes for table `tbl_menu_pumum`
--
ALTER TABLE `tbl_menu_pumum`
  ADD PRIMARY KEY (`MenuID`),
  ADD KEY `LastUser` (`LastUser`),
  ADD KEY `LastUser_2` (`LastUser`);

--
-- Indexes for table `tbl_menu_rb`
--
ALTER TABLE `tbl_menu_rb`
  ADD PRIMARY KEY (`MenuID`),
  ADD KEY `LastUser` (`LastUser`),
  ADD KEY `LastUser_2` (`LastUser`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`kd_pasien`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indexes for table `tbl_privillage`
--
ALTER TABLE `tbl_privillage`
  ADD PRIMARY KEY (`PrivillageID`),
  ADD KEY `MenuId` (`MenuID`,`LastUser`),
  ADD KEY `PrivillageID` (`PrivillageID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_berobat`
--
ALTER TABLE `tb_berobat`
  ADD PRIMARY KEY (`ID_BEROBAT`);

--
-- Indexes for table `tb_berobat1`
--
ALTER TABLE `tb_berobat1`
  ADD PRIMARY KEY (`ID_BEROBAT`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`ID_USER`);

--
-- Indexes for table `tb_cek_labo`
--
ALTER TABLE `tb_cek_labo`
  ADD PRIMARY KEY (`ID_CEK_LAB`),
  ADD KEY `ID_DT_LAB` (`ID_DT_LAB`,`ID_USER`);

--
-- Indexes for table `tb_daftar_lab`
--
ALTER TABLE `tb_daftar_lab`
  ADD PRIMARY KEY (`ID_DAFTAR_LAB`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`ID_DT_LAB`,`ID_BEROBAT`,`ID_USER`),
  ADD KEY `ID_DOKTER` (`ID_DOKTER`);

--
-- Indexes for table `tb_data_lab`
--
ALTER TABLE `tb_data_lab`
  ADD PRIMARY KEY (`ID_DT_LAB`);

--
-- Indexes for table `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  ADD PRIMARY KEY (`ID_DIAGNOSA`),
  ADD KEY `LAST_USER` (`LAST_USER`);

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`ID_DOKTER`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indexes for table `tb_employee`
--
ALTER TABLE `tb_employee`
  ADD PRIMARY KEY (`ID_EMPLOYEE`);

--
-- Indexes for table `tb_farmasi`
--
ALTER TABLE `tb_farmasi`
  ADD PRIMARY KEY (`ID_FARMASI`),
  ADD KEY `ID_USER` (`ID_USER`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`DIAGNOSA`,`ID_EMPLOYEE`),
  ADD KEY `DIAGNOSA_2` (`DIAGNOSA`),
  ADD KEY `ID_UNIT` (`ID_UNIT`);

--
-- Indexes for table `tb_gizi_anak`
--
ALTER TABLE `tb_gizi_anak`
  ADD PRIMARY KEY (`ID_GIZI_ANAK`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`ID_DIAGNOSA`,`ID_PG_ANAK`,`ID_USER`);

--
-- Indexes for table `tb_gizi_dewasa`
--
ALTER TABLE `tb_gizi_dewasa`
  ADD PRIMARY KEY (`ID_GIZI_DEWASA`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`ID_DIAGNOSA`,`ID_PG_DEWASA`,`ID_USER`);

--
-- Indexes for table `tb_gizi_ibu_hamil`
--
ALTER TABLE `tb_gizi_ibu_hamil`
  ADD PRIMARY KEY (`ID_GIZI_IBU_HAMIL`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`ID_PG_DEWASA`,`ID_USER`);

--
-- Indexes for table `tb_gizi_seimbang`
--
ALTER TABLE `tb_gizi_seimbang`
  ADD PRIMARY KEY (`ID_GIZI_SMBNG`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indexes for table `tb_hasil_lab`
--
ALTER TABLE `tb_hasil_lab`
  ADD PRIMARY KEY (`ID_HASIL_LAB`);

--
-- Indexes for table `tb_history_obat`
--
ALTER TABLE `tb_history_obat`
  ADD PRIMARY KEY (`ID_HISTORY`),
  ADD KEY `ID_OBAT` (`ID_OBAT`,`MenuID`,`ID_USER`),
  ADD KEY `MenuID` (`MenuID`);

--
-- Indexes for table `tb_jenis_pemeriksaan`
--
ALTER TABLE `tb_jenis_pemeriksaan`
  ADD PRIMARY KEY (`ID_JENIS`);

--
-- Indexes for table `tb_joblevel`
--
ALTER TABLE `tb_joblevel`
  ADD PRIMARY KEY (`ID_JOB`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`ID_KAMAR`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indexes for table `tb_kartu_bayi`
--
ALTER TABLE `tb_kartu_bayi`
  ADD PRIMARY KEY (`NO_BAYI`);

--
-- Indexes for table `tb_kartu_ibu`
--
ALTER TABLE `tb_kartu_ibu`
  ADD PRIMARY KEY (`NO_IBU`);

--
-- Indexes for table `tb_kartu_tb`
--
ALTER TABLE `tb_kartu_tb`
  ADD PRIMARY KEY (`KARTU_PPTB`);

--
-- Indexes for table `tb_kunjungan_kb`
--
ALTER TABLE `tb_kunjungan_kb`
  ADD PRIMARY KEY (`ID_KUNJUNGAN_KB`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`ID_PEM_KB`,`ID_USER`);

--
-- Indexes for table `tb_medical_record`
--
ALTER TABLE `tb_medical_record`
  ADD PRIMARY KEY (`ID_MEDICAL_RECORD`);

--
-- Indexes for table `tb_medrec_lansia`
--
ALTER TABLE `tb_medrec_lansia`
  ADD PRIMARY KEY (`ID_MEDREC_LANSIA`);

--
-- Indexes for table `tb_nama_pemeriksaan`
--
ALTER TABLE `tb_nama_pemeriksaan`
  ADD PRIMARY KEY (`ID_PEMERIKSAAN`);

--
-- Indexes for table `tb_nama_pemeriksaan1`
--
ALTER TABLE `tb_nama_pemeriksaan1`
  ADD PRIMARY KEY (`ID_NAMA_PEMERIKSAAN`),
  ADD KEY `ID_UNIT` (`ID_UNIT`),
  ADD KEY `ID_JENIS` (`ID_JENIS`,`LAST_USER`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`ID_OBAT`),
  ADD KEY `LAST_USER` (`LAST_USER`);

--
-- Indexes for table `tb_pembayaran_lab`
--
ALTER TABLE `tb_pembayaran_lab`
  ADD PRIMARY KEY (`ID_PEMBAYARAN_LAB`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`ID_DOKTER`,`ID_DAFTAR_LAB`,`ID_USER`);

--
-- Indexes for table `tb_pemeriksaan_balita`
--
ALTER TABLE `tb_pemeriksaan_balita`
  ADD PRIMARY KEY (`ID_PEM_BALITA`);

--
-- Indexes for table `tb_pemeriksaan_bayi`
--
ALTER TABLE `tb_pemeriksaan_bayi`
  ADD PRIMARY KEY (`ID_PEM_BAYI`);

--
-- Indexes for table `tb_pemeriksaan_kb`
--
ALTER TABLE `tb_pemeriksaan_kb`
  ADD PRIMARY KEY (`ID_PEM_KB`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`ID_USER`);

--
-- Indexes for table `tb_pemeriksaan_mtbs`
--
ALTER TABLE `tb_pemeriksaan_mtbs`
  ADD PRIMARY KEY (`ID_PEM_MTBS`);

--
-- Indexes for table `tb_pemeriksaan_neonatus`
--
ALTER TABLE `tb_pemeriksaan_neonatus`
  ADD PRIMARY KEY (`ID_NEONATUS`);

--
-- Indexes for table `tb_pemeriksaan_umum`
--
ALTER TABLE `tb_pemeriksaan_umum`
  ADD PRIMARY KEY (`ID_PEMERIKSAAN`),
  ADD KEY `ID_BEROBAT` (`ID_BEROBAT`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`);

--
-- Indexes for table `tb_pem_gizi_anak`
--
ALTER TABLE `tb_pem_gizi_anak`
  ADD PRIMARY KEY (`ID_PG_ANAK`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`ID_BEROBAT`,`ID_USER`);

--
-- Indexes for table `tb_pem_gizi_dewasa`
--
ALTER TABLE `tb_pem_gizi_dewasa`
  ADD PRIMARY KEY (`ID_PG_DEWASA`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`ID_USER`);

--
-- Indexes for table `tb_pendaftaran_rb`
--
ALTER TABLE `tb_pendaftaran_rb`
  ADD PRIMARY KEY (`ID_DAFTAR_RB`);

--
-- Indexes for table `tb_perawatan_bayi`
--
ALTER TABLE `tb_perawatan_bayi`
  ADD PRIMARY KEY (`ID_PERAWATAN_BAYI`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indexes for table `tb_perawatan_ibu`
--
ALTER TABLE `tb_perawatan_ibu`
  ADD PRIMARY KEY (`ID_PERAWATAN_IBU`);

--
-- Indexes for table `tb_pertlg_partus`
--
ALTER TABLE `tb_pertlg_partus`
  ADD PRIMARY KEY (`ID_PARTUS`);

--
-- Indexes for table `tb_poli_gigi`
--
ALTER TABLE `tb_poli_gigi`
  ADD PRIMARY KEY (`ID_POLI_GIGI`);

--
-- Indexes for table `tb_poli_gigi1`
--
ALTER TABLE `tb_poli_gigi1`
  ADD PRIMARY KEY (`ID_POLI_GIGI`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`ID_DIAGNOSA`,`ID_PEMERIKSAAN`,`ID_USER`);

--
-- Indexes for table `tb_poli_kb`
--
ALTER TABLE `tb_poli_kb`
  ADD PRIMARY KEY (`ID_POLI_KB`);

--
-- Indexes for table `tb_poli_kia`
--
ALTER TABLE `tb_poli_kia`
  ADD PRIMARY KEY (`ID_POLI_KIA`);

--
-- Indexes for table `tb_poli_lansia`
--
ALTER TABLE `tb_poli_lansia`
  ADD PRIMARY KEY (`ID_POLI_LANSIA`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`ID_DIAGNOSA`,`ID_DOKTER`,`ID_PEMERIKSAAN`);

--
-- Indexes for table `tb_poli_tb`
--
ALTER TABLE `tb_poli_tb`
  ADD PRIMARY KEY (`ID_POLI_TB`);

--
-- Indexes for table `tb_poli_umum`
--
ALTER TABLE `tb_poli_umum`
  ADD PRIMARY KEY (`ID_POLI_UMUM`),
  ADD KEY `ID_DIAGNOSA` (`ID_DIAGNOSA`,`ID_DOKTER`,`ID_USER`);

--
-- Indexes for table `tb_pulang_rb`
--
ALTER TABLE `tb_pulang_rb`
  ADD PRIMARY KEY (`ID_PULANG_RB`);

--
-- Indexes for table `tb_resobat_gigi`
--
ALTER TABLE `tb_resobat_gigi`
  ADD PRIMARY KEY (`ID_RESOB_GIGI`),
  ADD KEY `ID_POLI_UMUM` (`ID_POLI_GIGI`),
  ADD KEY `ID_USER` (`ID_USER`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`DIAGNOSA`,`ID_DOKTER`),
  ADD KEY `DIAGNOSA` (`DIAGNOSA`),
  ADD KEY `DIAGNOSA_2` (`DIAGNOSA`);

--
-- Indexes for table `tb_resobat_gizi`
--
ALTER TABLE `tb_resobat_gizi`
  ADD PRIMARY KEY (`ID_RESOB_GIZI`),
  ADD KEY `ID_POLI_UMUM` (`ID_BEROBAT`),
  ADD KEY `ID_USER` (`ID_USER`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`DIAGNOSA`,`ID_DOKTER`),
  ADD KEY `DIAGNOSA` (`DIAGNOSA`),
  ADD KEY `DIAGNOSA_2` (`DIAGNOSA`);

--
-- Indexes for table `tb_resobat_kb`
--
ALTER TABLE `tb_resobat_kb`
  ADD PRIMARY KEY (`ID_RESOB_KB`),
  ADD KEY `ID_POLI_UMUM` (`ID_POLI_KB`),
  ADD KEY `ID_USER` (`ID_USER`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`DIAGNOSA`,`ID_DOKTER`),
  ADD KEY `DIAGNOSA` (`DIAGNOSA`),
  ADD KEY `DIAGNOSA_2` (`DIAGNOSA`);

--
-- Indexes for table `tb_resobat_lansia`
--
ALTER TABLE `tb_resobat_lansia`
  ADD PRIMARY KEY (`ID_RESOB_LANSIA`),
  ADD KEY `ID_POLI_UMUM` (`ID_POLI_LANSIA`),
  ADD KEY `ID_USER` (`ID_USER`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`DIAGNOSA`,`ID_DOKTER`),
  ADD KEY `DIAGNOSA` (`DIAGNOSA`),
  ADD KEY `DIAGNOSA_2` (`DIAGNOSA`);

--
-- Indexes for table `tb_rujukan_gigi`
--
ALTER TABLE `tb_rujukan_gigi`
  ADD PRIMARY KEY (`ID_RUJUKAN_GIGI`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`ID_POLI_GIGI`,`ID_USER`);

--
-- Indexes for table `tb_rujukan_gizi`
--
ALTER TABLE `tb_rujukan_gizi`
  ADD PRIMARY KEY (`ID_RUJUKAN_GIZI`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`ID_BEROBAT`,`ID_USER`);

--
-- Indexes for table `tb_rujukan_internal`
--
ALTER TABLE `tb_rujukan_internal`
  ADD PRIMARY KEY (`ID_RUJUKAN`);

--
-- Indexes for table `tb_rujukan_kb`
--
ALTER TABLE `tb_rujukan_kb`
  ADD PRIMARY KEY (`ID_RUJUKAN_KB`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`ID_BEROBAT`,`ID_USER`);

--
-- Indexes for table `tb_rujukan_lansia`
--
ALTER TABLE `tb_rujukan_lansia`
  ADD PRIMARY KEY (`ID_RUJUKAN_LANSIA`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`ID_POLI_LANSIA`,`ID_USER`);

--
-- Indexes for table `tb_rujukan_umum`
--
ALTER TABLE `tb_rujukan_umum`
  ADD PRIMARY KEY (`ID_RUJUKAN_UMUM`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`ID_POLI_UMUM`,`ID_USER`);

--
-- Indexes for table `tb_terapi_obat`
--
ALTER TABLE `tb_terapi_obat`
  ADD PRIMARY KEY (`ID_TERAPI_OBAT`);

--
-- Indexes for table `tb_tindakan`
--
ALTER TABLE `tb_tindakan`
  ADD PRIMARY KEY (`ID_PEMERIKSAAN`);

--
-- Indexes for table `tb_tindakan_bersalin`
--
ALTER TABLE `tb_tindakan_bersalin`
  ADD PRIMARY KEY (`ID_TDK_BERSALIN`);

--
-- Indexes for table `tb_tindakan_gizi_anak`
--
ALTER TABLE `tb_tindakan_gizi_anak`
  ADD PRIMARY KEY (`ID_TG_ANAK`);

--
-- Indexes for table `tb_tindakan_gizi_dewasa`
--
ALTER TABLE `tb_tindakan_gizi_dewasa`
  ADD PRIMARY KEY (`ID_TG_DEWASA`);

--
-- Indexes for table `tb_tu_obat`
--
ALTER TABLE `tb_tu_obat`
  ADD PRIMARY KEY (`ID_TU_OBAT`),
  ADD KEY `ID_POLI_UMUM` (`ID_POLI_UMUM`),
  ADD KEY `ID_USER` (`ID_USER`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`DIAGNOSA`,`ID_DOKTER`),
  ADD KEY `DIAGNOSA` (`DIAGNOSA`),
  ADD KEY `DIAGNOSA_2` (`DIAGNOSA`);

--
-- Indexes for table `tb_umb_rujukan`
--
ALTER TABLE `tb_umb_rujukan`
  ADD PRIMARY KEY (`ID_UMB_RUJUKAN`);

--
-- Indexes for table `tb_umb_rujukan_gigi`
--
ALTER TABLE `tb_umb_rujukan_gigi`
  ADD PRIMARY KEY (`ID_UMB_GIGI`);

--
-- Indexes for table `tb_umb_rujukan_gizi`
--
ALTER TABLE `tb_umb_rujukan_gizi`
  ADD PRIMARY KEY (`ID_UMB_GIZI`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`ID_BEROBAT`,`ID_USER`);

--
-- Indexes for table `tb_umb_rujukan_kb`
--
ALTER TABLE `tb_umb_rujukan_kb`
  ADD PRIMARY KEY (`ID_UMB_KB`),
  ADD KEY `KODE_PASIEN` (`KODE_PASIEN`,`ID_BEROBAT`,`ID_USER`);

--
-- Indexes for table `tb_umb_rujukan_lansia`
--
ALTER TABLE `tb_umb_rujukan_lansia`
  ADD PRIMARY KEY (`ID_UMB_LANSIA`);

--
-- Indexes for table `tb_umb_rujukan_umum`
--
ALTER TABLE `tb_umb_rujukan_umum`
  ADD PRIMARY KEY (`ID_UMB_UMUM`);

--
-- Indexes for table `tb_unit`
--
ALTER TABLE `tb_unit`
  ADD PRIMARY KEY (`ID_UNIT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `MenuID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_menu_daftar`
--
ALTER TABLE `tbl_menu_daftar`
  MODIFY `MenuID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_menu_farmasi`
--
ALTER TABLE `tbl_menu_farmasi`
  MODIFY `MenuID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_menu_kpelayanan`
--
ALTER TABLE `tbl_menu_kpelayanan`
  MODIFY `MenuID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tbl_menu_kpuskes`
--
ALTER TABLE `tbl_menu_kpuskes`
  MODIFY `MenuID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tbl_menu_kpuskes1`
--
ALTER TABLE `tbl_menu_kpuskes1`
  MODIFY `MenuID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tbl_menu_lab`
--
ALTER TABLE `tbl_menu_lab`
  MODIFY `MenuID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_menu_pemeriksaan`
--
ALTER TABLE `tbl_menu_pemeriksaan`
  MODIFY `MenuID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_menu_pemgizi`
--
ALTER TABLE `tbl_menu_pemgizi`
  MODIFY `MenuID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_menu_pemkb`
--
ALTER TABLE `tbl_menu_pemkb`
  MODIFY `MenuID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_menu_pgigi`
--
ALTER TABLE `tbl_menu_pgigi`
  MODIFY `MenuID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_menu_pgizi`
--
ALTER TABLE `tbl_menu_pgizi`
  MODIFY `MenuID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_menu_pkb`
--
ALTER TABLE `tbl_menu_pkb`
  MODIFY `MenuID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_menu_plansia`
--
ALTER TABLE `tbl_menu_plansia`
  MODIFY `MenuID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_menu_pumum`
--
ALTER TABLE `tbl_menu_pumum`
  MODIFY `MenuID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_menu_rb`
--
ALTER TABLE `tbl_menu_rb`
  MODIFY `MenuID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `kd_pasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17000011;

--
-- AUTO_INCREMENT for table `tbl_privillage`
--
ALTER TABLE `tbl_privillage`
  MODIFY `PrivillageID` bigint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1171;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
