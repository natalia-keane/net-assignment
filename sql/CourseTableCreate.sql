USE CourseMgmtDb;
CREATE TABLE Courses (
   id INT AUTO_INCREMENT,
   discipline VARCHAR(8),
   code VARCHAR(8),
   title VARCHAR(64),
   level INT,
   credits INT,
   AuthorID INT,
   semester INT,
   PRIMARY KEY(id));
