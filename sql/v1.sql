CREATE TABLE `goods_category` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `parent_id` bigint NOT NULL DEFAULT '0',
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `weight` int NOT NULL DEFAULT '0',
  `state` tinyint NOT NULL DEFAULT '1' COMMENT '0 sale off, 1 on sale',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `goods` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `category_id` bigint NOT NULL DEFAULT '0',
  `category2_id` bigint NOT NULL DEFAULT '0',
  `thumbnail` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'unit: hkd',
  `stock` int NOT NULL DEFAULT '0',
  `state` tinyint NOT NULL DEFAULT '1' COMMENT '0 sale off, 1 on sale',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `goods_sku` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `goods_id` bigint NOT NULL DEFAULT '0',
  `thumbnail` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'unit: hkd',
  `stock` int NOT NULL DEFAULT '0',
  `state` tinyint NOT NULL DEFAULT '1' COMMENT '0 sale off, 1 on sale',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `goods_category` (`id`, `parent_id`, `title`, `description`, `weight`, `state`, `create_time`, `update_time`) VALUES (1, 0, 'Electronics', 'Electronics', 1, 1, '2024-10-09 10:24:47', '2024-10-09 11:02:05');
INSERT INTO `goods_category` (`id`, `parent_id`, `title`, `description`, `weight`, `state`, `create_time`, `update_time`) VALUES (2, 0, 'Beauty and Personal Care', 'Beauty and Personal Care', 2, 1, '2024-10-09 10:26:56', '2024-10-09 11:02:07');
INSERT INTO `goods_category` (`id`, `parent_id`, `title`, `description`, `weight`, `state`, `create_time`, `update_time`) VALUES (3, 0, 'Health and Household', 'Health and Household', 3, 1, '2024-10-09 10:27:44', '2024-10-09 11:02:08');
INSERT INTO `goods_category` (`id`, `parent_id`, `title`, `description`, `weight`, `state`, `create_time`, `update_time`) VALUES (4, 1, 'Accessories & Supplies', 'Accessories & Supplies', 0, 1, '2024-10-09 10:28:05', '2024-10-09 10:28:05');
INSERT INTO `goods_category` (`id`, `parent_id`, `title`, `description`, `weight`, `state`, `create_time`, `update_time`) VALUES (5, 1, 'Camera & Photo', 'Camera & Photo', 0, 1, '2024-10-09 10:28:21', '2024-10-09 10:28:21');
INSERT INTO `goods_category` (`id`, `parent_id`, `title`, `description`, `weight`, `state`, `create_time`, `update_time`) VALUES (6, 1, 'Car & Vehicle Electronics', 'Car & Vehicle Electronics', 0, 1, '2024-10-09 10:28:34', '2024-10-09 10:28:34');
INSERT INTO `goods_category` (`id`, `parent_id`, `title`, `description`, `weight`, `state`, `create_time`, `update_time`) VALUES (7, 1, 'Cell Phones & Accessories', 'Cell Phones & Accessories', 0, 1, '2024-10-09 10:28:46', '2024-10-09 10:28:46');
INSERT INTO `goods_category` (`id`, `parent_id`, `title`, `description`, `weight`, `state`, `create_time`, `update_time`) VALUES (8, 1, 'Computers & Accessories', 'Computers & Accessories', 0, 1, '2024-10-09 10:29:00', '2024-10-09 10:29:00');
INSERT INTO `goods_category` (`id`, `parent_id`, `title`, `description`, `weight`, `state`, `create_time`, `update_time`) VALUES (9, 2, 'Makeup', 'Makeup', 0, 1, '2024-10-09 10:29:31', '2024-10-09 10:29:31');
INSERT INTO `goods_category` (`id`, `parent_id`, `title`, `description`, `weight`, `state`, `create_time`, `update_time`) VALUES (10, 2, 'Skin Care', 'Skin Care', 0, 1, '2024-10-09 10:29:43', '2024-10-09 10:29:43');
INSERT INTO `goods_category` (`id`, `parent_id`, `title`, `description`, `weight`, `state`, `create_time`, `update_time`) VALUES (11, 2, 'Hair Care', 'Hair Care', 0, 1, '2024-10-09 10:30:09', '2024-10-09 10:30:09');
INSERT INTO `goods_category` (`id`, `parent_id`, `title`, `description`, `weight`, `state`, `create_time`, `update_time`) VALUES (12, 2, 'Fragrance', 'Fragrance', 0, 1, '2024-10-09 10:30:22', '2024-10-09 10:30:22');
INSERT INTO `goods_category` (`id`, `parent_id`, `title`, `description`, `weight`, `state`, `create_time`, `update_time`) VALUES (13, 2, 'Foot, Hand & Nail Care', 'Foot, Hand & Nail Care', 0, 1, '2024-10-09 10:30:34', '2024-10-09 10:30:34');
INSERT INTO `goods_category` (`id`, `parent_id`, `title`, `description`, `weight`, `state`, `create_time`, `update_time`) VALUES (14, 3, 'Baby & Child Care', 'Baby & Child Care', 0, 1, '2024-10-09 10:30:57', '2024-10-09 10:30:57');
INSERT INTO `goods_category` (`id`, `parent_id`, `title`, `description`, `weight`, `state`, `create_time`, `update_time`) VALUES (15, 3, 'Health Care', 'Health Care', 0, 1, '2024-10-09 10:31:13', '2024-10-09 10:31:13');
INSERT INTO `goods_category` (`id`, `parent_id`, `title`, `description`, `weight`, `state`, `create_time`, `update_time`) VALUES (16, 3, 'Household Supplies', 'Household Supplies', 0, 1, '2024-10-09 10:31:30', '2024-10-09 10:31:30');
INSERT INTO `goods_category` (`id`, `parent_id`, `title`, `description`, `weight`, `state`, `create_time`, `update_time`) VALUES (17, 3, 'Medical Supplies & Equipment', 'Medical Supplies & Equipment', 0, 1, '2024-10-09 10:31:42', '2024-10-09 10:31:42');
INSERT INTO `goods_category` (`id`, `parent_id`, `title`, `description`, `weight`, `state`, `create_time`, `update_time`) VALUES (18, 3, 'Oral Care', 'Oral Care', 0, 1, '2024-10-09 10:31:54', '2024-10-09 10:31:54');
INSERT INTO `goods_category` (`id`, `parent_id`, `title`, `description`, `weight`, `state`, `create_time`, `update_time`) VALUES (19, 3, 'Personal Care', 'Personal Care', 0, 1, '2024-10-09 10:32:07', '2024-10-09 10:32:07');