CREATE TABLE IF NOT EXISTS Students(
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  firstName varchar(50) NOT NULL,
  lastName varchar(50) NOT NULL,
  sex ENUM('male','female') NOT NULL,
  groupNumber varchar(5) NOT NULL,
  email varchar(30) NOT NULL UNIQUE,
  examPoints int(3) NOT NULL,
  birthYear DATETIME NOT NULL,
  registration ENUM('resident','nonresident') NOT NULL,
  PRIMARY KEY(id)
)