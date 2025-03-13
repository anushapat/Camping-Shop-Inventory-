USE ap3235;
CREATE TABLE CampingCategories (
CampingCategoryID       INT(11)        NOT NULL,
CampingCategoryCode     VARCHAR(255)   NOT NULL   UNIQUE,
CampingCategoryName     VARCHAR(255)   NOT NULL,
DateCreated            DATETIME       NOT NULL,
aisleNumber            INT(8)           Not NULL,
PRIMARY KEY ( CampingCategoryID )
);

INSERT INTO CampingCategories
(CampingcategoryID, CampingcategoryCode, CampingcategoryName,DateCreated,`aisleNumber`)
VALUES
(5, 'TST', 'TEST', NOW(),4);

INSERT INTO CampingCategories
 (CampingCategoryID, CampingCategoryCode, CampingCategoryName, DateCreated)
 VALUES
 (200, 'TT', 'TENT', NOW());




SELECT * FROM `CampingCategories`;