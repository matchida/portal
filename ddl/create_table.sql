CREATE TABLE `tbl_user` (
  `user_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `user_type` tinyint(1) NOT NULL DEFAULT '3',
  `group_id` int(10) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flg` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8

CREATE TABLE `tbl_user_information` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned zerofill NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `joined_day` date DEFAULT NULL,
  `like_program` varchar(32) DEFAULT NULL,
  `like_database` varchar(32) DEFAULT NULL,
  `interested` varchar(255) DEFAULT NULL,
  `listening` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flg` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8

CREATE TABLE `tbl_work_information` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned zerofill NOT NULL,
  `vendor_name` varchar(100) DEFAULT NULL,
  `anken_name` varchar(255) DEFAULT NULL,
  `station` varchar(50) DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `start_brake_time` time DEFAULT NULL,
  `end_brake_time` time DEFAULT NULL,
  `start_agreement` date DEFAULT NULL,
  `end_agreement` date DEFAULT NULL,
  `unit_price` int(10) DEFAULT NULL,
  `tool` varchar(255) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flg` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8