-- Active: 1738266405254@@sql1.njit.edu@3306
SHOW DATABASES;
USE ap3235;
CREATE TABLE CampingManagers (
 CampingManagerID     INT(11)        NOT NULL   AUTO_INCREMENT,
 emailAddress           VARCHAR(255)   NOT NULL   UNIQUE,
 password               VARCHAR(64)    NOT NULL,
  pronouns               VARCHAR(60)    NOT NULL,

  firstName              VARCHAR(60)    NOT NULL,
 lastName               VARCHAR(60)    NOT NULL,
 dateCreated            DATETIME       NOT NULL,
 PRIMARY KEY (CampingManagerID)
);
SHOW TABLES;
SHOW CREATE TABLE CampingManagers;
DESCRIBE CampingManagers;


INSERT INTO CampingManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('anusha@campinghop.com', SHA2('anushaaa', 256), 'She/Her', 'Anusha', 'Patel', NOW());

INSERT INTO CampingManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('jack@campinghop.com', SHA2('pirate', 256), 'He/Him', 'Jack', 'Sparrow', NOW());

INSERT INTO CampingManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('Harry@campinghop.com', SHA2('Wizard', 256), 'He/Him', 'Harry', 'Potter', NOW());