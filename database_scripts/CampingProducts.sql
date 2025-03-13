USE ap3235;
CREATE TABLE CampingProducts (
CampingProductID        INT(11)        NOT NULL,
CampingProductCode      VARCHAR(10)    NOT NULL   UNIQUE,
CampingProductName      VARCHAR(255)   NOT NULL,
CampingDescription      TEXT           NOT NULL,
CampingCategoryID       INT(11)        NOT NULL,
CampingWholesalePrice   DECIMAL(10,2)  NOT NULL,
CampingListPrice        DECIMAL(10,2)  NOT NULL,
CampingColor            VARCHAR(255)   NOT NULL,
DateCreated            DATETIME       NOT NULL,

PRIMARY KEY ( CampingProductID )
);