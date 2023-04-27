CREATE TABLE admins
(
  id int NOT NULL AUTO_INCREMENT,
  name char(50) NOT NULL,
  email char(255) NULL,
  password char(100) NULL,
  status char(5) NULL,
  UNIQUE (email),
  PRIMARY KEY (id)
) ENGINE=InnoDB;
