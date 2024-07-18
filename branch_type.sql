/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : db_template

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 24/06/2022 08:28:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for branch_type
-- ----------------------------
DROP TABLE IF EXISTS `branch_type`;
CREATE TABLE `branch_type`  (
  `id` int(11) NOT NULL,
  `branch_type_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of branch_type
-- ----------------------------
INSERT INTO `branch_type` VALUES (1, 'Kantor Cabang');
INSERT INTO `branch_type` VALUES (2, 'Kantor Cabang Pembantu');

SET FOREIGN_KEY_CHECKS = 1;
