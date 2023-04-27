CREATE TABLE `contacts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL DEFAULT '',
  `address` varchar(250) NOT NULL DEFAULT '',
  `city` varchar(250) NOT NULL DEFAULT '',
  `state` varchar(250) NOT NULL DEFAULT '',
  `phone` varchar(250) NOT NULL DEFAULT '',
  `email` varchar(250) NOT NULL DEFAULT '',
  `dob` varchar(250) NOT NULL DEFAULT '',
  `contacts` varchar(250) NOT NULL DEFAULT '',
  `age` varchar(250) NOT NULL DEFAULT '',
  UNIQUE (email),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;