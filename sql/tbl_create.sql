CREATE TABLE User
(username CHAR(20),
 firstname CHAR(20),
 lastname CHAR(20),
 password CHAR(20),
 email CHAR(40),
 PRIMARY KEY (username));

CREATE TABLE Album
(albumid INTEGER NOT NULL AUTO_INCREMENT,
 title CHAR(50),
 created DATE,
 lastupdated DATE,
 username CHAR(20) REFERENCES User,
 PRIMARY KEY(albumid));

CREATE TABLE Photo
(picid CHAR(40),
 url CHAR(255),
 format CHAR(3),
 date DATE,
 PRIMARY KEY (picid));

CREATE TABLE Contain
(albumid INTEGER REFERENCES Album, 
 picid CHAR(40) REFERENCES Photo,
 caption CHAR(255),
 sequencenum INTEGER NOT NULL,
 PRIMARY KEY(albumid,picid));
 
  
