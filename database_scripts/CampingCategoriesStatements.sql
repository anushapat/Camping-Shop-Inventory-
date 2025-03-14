USE ap3235;
--//Anusha Patel, March 14 2025, IT202 Section 006, Phase 2, ap3235@njit.edu

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
(1, 'SLP', 'SLeep Essentials', NOW(),1);

INSERT INTO CampingCategories
 (CampingCategoryID, CampingCategoryCode, CampingCategoryName, DateCreated, aisleNumber)
 VALUES
 (2, 'COOK', 'Cooking Essentials', NOW(),2);

 SELECT * From CampingCategories;
