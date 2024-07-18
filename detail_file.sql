/*
 Navicat Premium Data Transfer

 Source Server         : 172.28.140.200
 Source Server Type    : MySQL
 Source Server Version : 50735
 Source Host           : 172.28.140.200:3306
 Source Schema         : dms

 Target Server Type    : MySQL
 Target Server Version : 50735
 File Encoding         : 65001

 Date: 24/06/2022 08:37:49
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for detail_file
-- ----------------------------
DROP TABLE IF EXISTS `detail_file`;
CREATE TABLE `detail_file`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `loan_app_no` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `file` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `branch_dir` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alias` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `flag` int(3) NULL DEFAULT NULL,
  `flag_exist` int(3) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `created_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `file`) USING BTREE,
  UNIQUE INDEX `id`(`id`) USING BTREE,
  INDEX `file`(`file`) USING BTREE,
  INDEX `loan_app_number`(`loan_app_no`) USING BTREE,
  INDEX `branch_dir`(`branch_dir`) USING BTREE,
  INDEX `flag_exist`(`flag_exist`) USING BTREE,
  INDEX `created_at`(`created_at`) USING BTREE,
  INDEX `updated_at`(`updated_at`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4403978 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
