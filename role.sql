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

 Date: 24/06/2022 08:28:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role`  (
  `id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('administrator', 'Administrator');
INSERT INTO `role` VALUES ('monitoring', 'Monitoring');
INSERT INTO `role` VALUES ('spv1', 'Spv Branch');
INSERT INTO `role` VALUES ('spv2', 'BPR 1');
INSERT INTO `role` VALUES ('spv3', 'BPR 2');
INSERT INTO `role` VALUES ('spv4', 'Kadiv');
INSERT INTO `role` VALUES ('staff', 'Staff');

SET FOREIGN_KEY_CHECKS = 1;
