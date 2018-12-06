USE CourseMgmtDB;
INSERT INTO Courses (discipline, code, title, level, credits, semester, AuthorID) 
  VALUES ('COMP', '2190', 'Net Centric Computing', 2, 3, 1, 4);
INSERT INTO Courses (discipline, code, title, level, credits, semester, AuthorID)
 VALUES ('COMP', '3191', 'Principles of Computer Networking', 3, 3, 1, 4);
INSERT INTO Courses (discipline, code, title, level, credits, semester, AuthorID)
 VALUES ('COMP', '3192', 'Implementation of Computer Networks', 3, 3, 2, 4);

INSERT INTO Users (first_name, last_name, username, email, password_digest, salt)
 VALUES ('Sara', 'Lambert', 'greencat552', 'sara.lambert@example.com.jm',
 MD5(CONCAT('12345','43d3214b03f4d814c688fdeab25e46cd')),
 '43d3214b03f4d814c688fdeab25e46cd');
INSERT INTO Users (first_name, last_name, username, email, password_digest, salt)
 VALUES ('Brad', 'Williams', 'blueswan108', 'brad.williams@example.com',
 MD5(CONCAT('12345','550bf43527d65e84fc48b9fb2025addb')),
 '550bf43527d65e84fc48b9fb2025addb');
INSERT INTO Users (first_name, last_name, username, email, password_digest, salt)
 VALUES ('Rosalyn', 'Brown', 'BrownR148', 'roz.brown@example.com.jm',
 MD5(CONCAT('12345','00168a1b260b7aac1d732df4475f5dea')),
 '00168a1b260b7aac1d732df4475f5dea');
INSERT INTO Users (first_name, last_name, username, email, password_digest, salt)
 VALUES ('Emil', 'Powell', 'redwolf924', 'emil.powell@example.com.jm',
 MD5(CONCAT('12345','dd8072d78d2a9d07923fe5fb632bf143')),
 'dd8072d78d2a9d07923fe5fb632bf143');
INSERT INTO Users (first_name, last_name, username, email, password_digest, salt)
 VALUES ('Rene', 'Picard', 'tinybird988', 'rene.picard@example.com.jm',
 MD5(CONCAT('12345','b7166e25ade87e934c13dde68b9a3183')),
 'b7166e25ade87e934c13dde68b9a3183');
INSERT INTO Users (first_name, last_name, username, email, password_digest, salt)
 VALUES ('Larry', 'Fields', 'fieldsl434', 'larry.fields@example.com.jm',
 MD5(CONCAT('12345','8974ffceac233c957f9f1e181bf02f7e')),
 '8974ffceac233c957f9f1e181bf02f7e');
