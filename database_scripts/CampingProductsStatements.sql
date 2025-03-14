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

INSERT into CampingProducts
(CampingProductID, CampingProductCode, CampingProductName,CampingDescription,CampingCategoryID,CampingWholesalePrice,CampingListPrice,CampingColor,DateCreated)
VALUES
(1,'SBAG','Semi-Rectangular Sleeping Bag', 'A sleeping bag that is meant to hug the sides of the person sleeping within the sleeping bag. The lack of corners allows for a faster time for heating the bag up.', 2, 10.00,20.00, 'green', Now() );
INSERT into CampingProducts
(CampingProductID, CampingProductCode, CampingProductName,CampingDescription,CampingCategoryID,CampingWholesalePrice,CampingListPrice,CampingColor,DateCreated)
VALUES
(2,'RBAG','Rectangular Sleeping Bag', 'This is a classic sleeping bag. It has sharp corners and easy to lay out. ', 2, 5.00,10.00, 'Blue', Now() );
INSERT into CampingProducts
(CampingProductID, CampingProductCode, CampingProductName,CampingDescription,CampingCategoryID,CampingWholesalePrice,CampingListPrice,CampingColor,DateCreated)
VALUES
(3,'KBAG','Kid Sleeping Bag', 'A sleeping bag that is small and fits the needs of a kid. It is important for bags to fit the kid because then it can effectively heat up the area', 1, 5.00,10.00, 'Pink', Now() );