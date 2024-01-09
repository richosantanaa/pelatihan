/*
Navicat MySQL Data Transfer

Source Server         : MySQL 3306
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : perpust_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-12-03 13:19:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for member
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`member_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES ('1', 'Fajar', 'Agung edited', 'test@gmail.com', 'Male', 'Bojong Sari, Depok', '08953434505', 'Student', '1');
INSERT INTO `member` VALUES ('2', 'Fajar', 'Agung', 'fajar@gmail.com', 'Male', 'Bogor', '8768768', 'Teacher', '1');

-- ----------------------------
-- Table structure for siswa
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `agama` varchar(15) NOT NULL,
  `sekolah_asal` varchar(50) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of siswa
-- ----------------------------

-- ----------------------------
-- Table structure for tbanggota
-- ----------------------------
DROP TABLE IF EXISTS `tbanggota`;
CREATE TABLE `tbanggota` (
  `idanggota` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`idanggota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbanggota
-- ----------------------------
INSERT INTO `tbanggota` VALUES ('123', 'test tambah edit', 'Perempuan', 'test', 'Tidak Meminjam');
INSERT INTO `tbanggota` VALUES ('AA123', 'Fajar Agung Nugroho', 'Pria', 'Test', 'Tidak Meminjam');
INSERT INTO `tbanggota` VALUES ('AG001', 'Riki Subekti', 'Pria', 'Jl.Semangka No 3', 'Tidak Meminjam');
INSERT INTO `tbanggota` VALUES ('AG002', 'Aini Rahmawati', 'Wanita', 'Jl.Anggrek No 45', 'Sedang Meminjam');
INSERT INTO `tbanggota` VALUES ('AG003', 'Rudi Hartono', 'Pria', 'Jl.Manggis 98', 'Sedang Meminjam');
INSERT INTO `tbanggota` VALUES ('AG005', 'Agus Wardoyo', 'Pria', 'Jl.Cempedak No 88', 'Tidak Meminjam');
INSERT INTO `tbanggota` VALUES ('AG007', 'Irwan Hakim', 'Pria', 'Jl.Salak No 34', 'Tidak Meminjam');
INSERT INTO `tbanggota` VALUES ('AG008', 'Indah Dian', 'Wanita', 'Jl.Semangka No 23', 'Tidak Meminjam');
INSERT INTO `tbanggota` VALUES ('AG009', 'Rina Auliah', 'Wanita', 'Jl.Merpati No 44', 'Tidak Meminjam');
INSERT INTO `tbanggota` VALUES ('AG010', 'Septi Putri edited', 'Wanita', '					  Jl.Beringin No 2', 'Tidak Meminjam');

-- ----------------------------
-- Table structure for tbuser
-- ----------------------------
DROP TABLE IF EXISTS `tbuser`;
CREATE TABLE `tbuser` (
  `iduser` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `password` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbuser
-- ----------------------------
INSERT INTO `tbuser` VALUES ('adm', 'Fajar', 'depok', '123456');
INSERT INTO `tbuser` VALUES ('admin', 'Andi Rahman Hakim', 'Jl.Pramuka No 9', '123456');

-- ----------------------------
-- Table structure for tb_buku
-- ----------------------------
DROP TABLE IF EXISTS `tb_buku`;
CREATE TABLE `tb_buku` (
  `id_buku` varchar(10) NOT NULL,
  `judul_buku` varchar(64) NOT NULL,
  `Kategori` varchar(64) NOT NULL,
  `pengarang` varchar(64) NOT NULL,
  `penerbit` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_buku
-- ----------------------------
INSERT INTO `tb_buku` VALUES ('001', 'Habis Gelap terbitlah terang', 'Sastra', 'R.A Kartini', 'Jogja Press');
INSERT INTO `tb_buku` VALUES ('002', 'admin edit', 'Sastra', 'Kartini', 'Test');

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id_transaksi` varchar(20) NOT NULL,
  `idanggota` varchar(5) NOT NULL,
  `id_buku` varchar(10) NOT NULL,
  `tgl_peminjaman` date DEFAULT NULL,
  `tgl_pengembalian` date DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES ('TR001', 'AG001', 'BK001', '2021-09-01', '2021-10-26');
