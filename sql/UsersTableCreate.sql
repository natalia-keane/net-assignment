USE CourseMgmtDB;
CREATE TABLE Users (
   id INT AUTO_INCREMENT,
   first_name VARCHAR(32),
   last_name VARCHAR(32),
   username VARCHAR(32),
   email VARCHAR(64),
   IsAdmin TINYINT(1),
   last_login DATETIME,
   failed_attempts INT,
   password_digest VARCHAR(64),
   salt VARCHAR(64),
   PRIMARY KEY(id));
