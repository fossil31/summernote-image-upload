
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_id` int(11) NOT NULL,
  `note` text,
  `datepicker` date DEFAULT NULL,
  `tags` varchar(200) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `ref_id` (`ref_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `summernote_upload`;
CREATE TABLE `summernote_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(50) NOT NULL DEFAULT '',
  `file_type` varchar(50) DEFAULT NULL,
  `extension` varchar(50) DEFAULT NULL,
  `file_size` decimal(10,2) DEFAULT NULL,
  `file_path` varchar(250) NOT NULL DEFAULT '',
  `original_name` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `file_name` (`file_name`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='upload image from summernote to database';
