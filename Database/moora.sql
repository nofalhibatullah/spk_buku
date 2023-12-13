-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.9.2-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for spk_buku
CREATE DATABASE IF NOT EXISTS `spk_buku` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `spk_buku`;

-- Dumping structure for table spk_buku.data_bobot
CREATE TABLE IF NOT EXISTS `data_bobot` (
  `id_bobot` int(11) NOT NULL AUTO_INCREMENT,
  `kode_bobot` varchar(50) DEFAULT NULL,
  `nama_bobot` varchar(50) DEFAULT NULL,
  `nilai_bobot` double DEFAULT NULL,
  `tipe_bobot` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_bobot`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table spk_buku.data_bobot: ~7 rows (approximately)
/*!40000 ALTER TABLE `data_bobot` DISABLE KEYS */;
REPLACE INTO `data_bobot` (`id_bobot`, `kode_bobot`, `nama_bobot`, `nilai_bobot`, `tipe_bobot`) VALUES
	(1, 'C1', 'Kualitas Cetak Warna', 0.18, 'benefit'),
	(2, 'C2', 'Kesesuaian Isi dan CoveR', 0.24, 'cost'),
	(3, 'C3', 'Susunan dan Kelengkapan Halaman ', 0.23, 'cost'),
	(4, 'C4', 'Ketebalan Lem pada Punggung Buku ', 0.06, 'benefit'),
	(5, 'C5', 'Ketebalan Lem Samping', 0.03, 'benefit'),
	(6, 'C6', 'Daya Rekat Lem pada Punggung Buku ', 0.11, 'benefit'),
	(7, 'C7', 'Potongan Ukuran Jadi ', 0.15, 'benefit');
/*!40000 ALTER TABLE `data_bobot` ENABLE KEYS */;

-- Dumping structure for table spk_buku.data_buku
CREATE TABLE IF NOT EXISTS `data_buku` (
  `kode_buku` int(11) NOT NULL,
  `judul_buku` varchar(50) DEFAULT NULL,
  `jenis_buku` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spk_buku.data_buku: ~7 rows (approximately)
/*!40000 ALTER TABLE `data_buku` DISABLE KEYS */;
REPLACE INTO `data_buku` (`kode_buku`, `judul_buku`, `jenis_buku`) VALUES
	(1, 'the legend of Narnia', 'Dongeng'),
	(2, 'The Story of faiz', 'Biografi'),
	(3, 'Ronggeng Dukuh Paruk', 'Dongeng'),
	(4, 'Negeri 5 Menara', 'Novel'),
	(5, 'Rumah Kaca', 'Novel'),
	(6, 'Perahu Kertas', 'Novel'),
	(7, 'Sang Pemimpi', 'Novel');
/*!40000 ALTER TABLE `data_buku` ENABLE KEYS */;

-- Dumping structure for table spk_buku.data_kriteria
CREATE TABLE IF NOT EXISTS `data_kriteria` (
  `id_kriteria` int(2) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `kode_kriteria` varchar(50) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `nilai_kriteria` double NOT NULL,
  `tipe_kriteria` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table spk_buku.data_kriteria: ~6 rows (approximately)
/*!40000 ALTER TABLE `data_kriteria` DISABLE KEYS */;
REPLACE INTO `data_kriteria` (`id_kriteria`, `kode_kriteria`, `nama_kriteria`, `nilai_kriteria`, `tipe_kriteria`) VALUES
	(01, 'C1', 'Kualitas Cetak Warna', 0.18, 'benefit'),
	(02, 'C2', 'Kesesuaian Isi Cover', 0.24, 'cost'),
	(03, 'C3', 'Susunan dan Kelengkapan', 0.23, 'cost'),
	(04, 'C4', 'Ketebalan Lem pada Punggung Buku', 0.06, 'benefit'),
	(05, 'C5', 'Ketebalan Lem Samping', 0.03, 'benefit'),
	(06, 'C6', 'Daya Rekat Lem pada Punggung Buku', 0.11, 'benefit'),
	(07, 'C7', 'Potongan Ukuran Jadi', 0.15, 'benefit');
/*!40000 ALTER TABLE `data_kriteria` ENABLE KEYS */;

-- Dumping structure for table spk_buku.jenis_buku
CREATE TABLE IF NOT EXISTS `jenis_buku` (
  `kode_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spk_buku.jenis_buku: ~7 rows (approximately)
/*!40000 ALTER TABLE `jenis_buku` DISABLE KEYS */;
REPLACE INTO `jenis_buku` (`kode_jenis`, `nama_jenis`) VALUES
	(111, 'Agama'),
	(222, 'Horor'),
	(333, 'Sejarah'),
	(444, 'Dongeng'),
	(555, 'Novel'),
	(666, 'Komik'),
	(777, 'Biografi');
/*!40000 ALTER TABLE `jenis_buku` ENABLE KEYS */;

-- Dumping structure for table spk_buku.konversi_penilaian
CREATE TABLE IF NOT EXISTS `konversi_penilaian` (
  `id_konversi` int(11) DEFAULT NULL,
  `nama_usaha` varchar(50) DEFAULT NULL,
  `C1` int(11) DEFAULT NULL,
  `C2` int(11) DEFAULT NULL,
  `C3` int(11) DEFAULT NULL,
  `C4` int(11) DEFAULT NULL,
  `C5` int(11) DEFAULT NULL,
  `C6` int(11) DEFAULT NULL,
  `C7` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spk_buku.konversi_penilaian: ~8 rows (approximately)
/*!40000 ALTER TABLE `konversi_penilaian` DISABLE KEYS */;
REPLACE INTO `konversi_penilaian` (`id_konversi`, `nama_usaha`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `C7`) VALUES
	(1, 'A1', 5, 1, 1, 5, 5, 5, 5),
	(2, 'A2', 5, 1, 1, 5, 5, 5, 5),
	(3, 'A3', 5, 1, 1, 5, 5, 5, 5),
	(4, 'A4', 5, 1, 1, 5, 5, 5, 5),
	(5, 'A5', 5, 1, 1, 5, 5, 5, 5),
	(6, 'A6', 5, 1, 5, 5, 5, 5, 5),
	(7, 'A7', 5, 1, 1, 5, 5, 5, 5),
	(8, 'A8', 5, 1, 1, 5, 5, 5, 5),
	(9, 'A9', 5, 1, 1, 1, 5, 3, 5),
	(10, 'A10', 5, 1, 1, 1, 5, 3, 5);
/*!40000 ALTER TABLE `konversi_penilaian` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
