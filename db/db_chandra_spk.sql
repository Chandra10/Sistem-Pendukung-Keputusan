/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : db_chandra_spk

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 07/09/2022 19:49:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_kriteria
-- ----------------------------
DROP TABLE IF EXISTS `tb_kriteria`;
CREATE TABLE `tb_kriteria`  (
  `id_kriteria` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_kriteria` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `sifat_kriteria` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_kriteria`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_kriteria
-- ----------------------------
INSERT INTO `tb_kriteria` VALUES (1, 'Kecepatan Pengiriman', 'Benefit');
INSERT INTO `tb_kriteria` VALUES (2, 'Tingkat Diskon', 'Benefit');
INSERT INTO `tb_kriteria` VALUES (3, 'Pelayanan', 'Benefit');
INSERT INTO `tb_kriteria` VALUES (4, 'Garansi', 'Benefit');
INSERT INTO `tb_kriteria` VALUES (5, 'Keaslian barang', 'Benefit');
INSERT INTO `tb_kriteria` VALUES (6, 'Tempo Pembayaran', 'Benefit');
INSERT INTO `tb_kriteria` VALUES (7, 'Bisa dikembalikan', 'Benefit');

-- ----------------------------
-- Table structure for tb_nilai_supplier
-- ----------------------------
DROP TABLE IF EXISTS `tb_nilai_supplier`;
CREATE TABLE `tb_nilai_supplier`  (
  `id_nilai_supplier` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_supplier_nilai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kecepatan_pengiriman` decimal(4, 2) NULL DEFAULT NULL,
  `tingkat_diskon` decimal(4, 2) NULL DEFAULT NULL,
  `pelayanan` decimal(4, 2) NULL DEFAULT NULL,
  `garansi` decimal(4, 2) NULL DEFAULT NULL,
  `keaslian_barang` decimal(4, 2) NULL DEFAULT NULL,
  `tempo_pembayaran` decimal(4, 2) NULL DEFAULT NULL,
  `bisa_dikembalikan` decimal(4, 2) NULL DEFAULT NULL,
  `tanggal_nilai` date NULL DEFAULT NULL,
  PRIMARY KEY (`id_nilai_supplier`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_nilai_supplier
-- ----------------------------
INSERT INTO `tb_nilai_supplier` VALUES (1, '1', 0.50, 0.50, 0.50, 0.50, 0.50, 0.50, 1.00, '2022-09-06');
INSERT INTO `tb_nilai_supplier` VALUES (2, '2', 0.75, 0.50, 0.50, 0.50, 1.00, 0.50, 1.00, '2022-09-06');
INSERT INTO `tb_nilai_supplier` VALUES (4, '3', 1.00, 1.00, 1.00, 0.50, 1.00, 0.50, 1.00, '2022-09-06');
INSERT INTO `tb_nilai_supplier` VALUES (5, '4', 0.50, 0.75, 1.00, 0.75, 1.00, 0.50, 1.00, '2022-09-06');

-- ----------------------------
-- Table structure for tb_sub_kriteria
-- ----------------------------
DROP TABLE IF EXISTS `tb_sub_kriteria`;
CREATE TABLE `tb_sub_kriteria`  (
  `id_sub_kriteria` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_kriteria_sub` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_sub_kriteria` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sifat_sub_kriteria` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_sub_kriteria`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 41 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_sub_kriteria
-- ----------------------------
INSERT INTO `tb_sub_kriteria` VALUES (1, '1', '0.5', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (2, '1', '0.25', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (3, '1', '0.75', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (4, '1', '1', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (5, '2', '0.5', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (6, '2', '0.25', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (7, '2', '0.75', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (8, '2', '1', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (9, '3', '0.5', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (10, '3', '0.25', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (11, '3', '0.75', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (12, '3', '1', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (13, '4', '0.5', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (14, '4', '0.25', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (15, '4', '0.75', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (16, '4', '1', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (17, '5', '0.5', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (18, '5', '0.25', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (19, '5', '0.75', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (20, '5', '1', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (21, '6', '0.5', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (22, '6', '0.25', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (23, '6', '0.75', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (24, '6', '1', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (25, '7', '0.5', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (26, '7', '0.25', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (27, '7', '0.75', NULL);
INSERT INTO `tb_sub_kriteria` VALUES (28, '7', '1', NULL);

-- ----------------------------
-- Table structure for tb_supplier
-- ----------------------------
DROP TABLE IF EXISTS `tb_supplier`;
CREATE TABLE `tb_supplier`  (
  `id_supplier` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_supplier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `telepon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_supplier`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_supplier
-- ----------------------------
INSERT INTO `tb_supplier` VALUES (1, 'PT. ABC Tbk', '08578768990', ' Depok City ');
INSERT INTO `tb_supplier` VALUES (2, 'PT. Kuala Lumpur', '085810987889', 'Tangerang City');
INSERT INTO `tb_supplier` VALUES (3, 'PT. Nursalamah', '086788909878', 'BSD Belevuer');
INSERT INTO `tb_supplier` VALUES (4, 'PT. Mega Cahaya', '085677899987', 'Bekasi Tbk');
INSERT INTO `tb_supplier` VALUES (5, 'PT. Anugrah Cinta', '0857889090', 'Bekasi Tbk');
INSERT INTO `tb_supplier` VALUES (8, 'PT. Berkah Sejahtera Alam Tbk', '082188987800', 'Kawasan Industri Karawang Barat');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(355) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `userpass` varchar(500) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0-> Tak aktif, 1 -> aktif',
  `level` enum('Admin','User') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 236 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Chandra Kusuma wijaya', 'admin', 'admin', 1, 'Admin', '16122020191438testimonials-2.jpg');

SET FOREIGN_KEY_CHECKS = 1;
