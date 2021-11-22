/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100421
 Source Host           : localhost:3306
 Source Schema         : otr

 Target Server Type    : MySQL
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 22/11/2021 20:31:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('markveronich@gmail.com', 'A0E7VAjzY3GtgCwyenJgMTrdd3JeZHwrP3OTFl3wKK1v8tK41nAwAKoucxJsJwJn', '2021-11-17 15:45:12');
INSERT INTO `password_resets` VALUES ('markveronich@gmail.com', 'glMy7OUHyfNu8ZWYzPzcRKyV5QSL9NAEiMyXtVfYZXReCnirJdnCha2AL9ye9SCO', '2021-11-17 15:47:21');
INSERT INTO `password_resets` VALUES ('test.test@gmail.com', 't34uVdMMjfIJMfdYOjUtolBcRINeU4rH2eZSZLUJXavZuRuPlouno1i4vkKl4N1T', '2021-11-17 15:47:32');
INSERT INTO `password_resets` VALUES ('linodeBp17@gmail.com', 'bh3bE6PIhfse2gP3e6ETKbsIqyMr09QiZYP2gOW1sTX54biWIohJvESsOSISv2QS', '2021-11-17 15:48:03');
INSERT INTO `password_resets` VALUES ('linodeBp17@gmail.com', 'S0oQHe2n2yowsWHacGAb6CqRGuUIDCwHUzSpAgQl9NNwEuMhIfJErQaPmPMz9CFS', '2021-11-17 15:49:00');
INSERT INTO `password_resets` VALUES ('markveronich@gmail.com', 'lzzqhATYiAup887whqU03hTBBzAoKxomO240lcQ8XMj6g82gdtjmZspxWtQqqhRm', '2021-11-17 15:57:05');
INSERT INTO `password_resets` VALUES ('markveronich@gmail.com', 'Gqy5r5MNNgNAM9cz3hw34KbvS366fUmR1Cyo4oRbRzyXpb2ySMnGyBnOIH2MJ05C', '2021-11-17 16:00:05');
INSERT INTO `password_resets` VALUES ('markveronich@gmail.com', 'SgO4bssep4BtAHjrg0W5AoF57DWLd5IOqL1VlVw51e958f6iIH0gWE5DiNvhOeyb', '2021-11-18 04:26:53');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Daniel', 'linodebp15@gmail.com', NULL, '+72341890872', '$2y$10$Z6OVfeQ2zCb6Ir1NRTT6Pey3Z1WfzrAiiQXV/s9s2mdIdhJA0VDzu', NULL, '2021-11-17 15:01:43', '2021-11-17 15:01:43');
INSERT INTO `users` VALUES (2, 'Vladimir', 'kevin.arimaa@gmail.com', NULL, '+72341890872', '$2y$10$s2t4xTIgDWZnMCCXrJzuvOydFFjh.S.j4p7ow4wqkN19Ygbpjn6NO', NULL, '2021-11-17 15:07:18', '2021-11-17 15:07:18');

SET FOREIGN_KEY_CHECKS = 1;
