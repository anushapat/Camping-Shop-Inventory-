<?php
require_once('database.php');
class CampingProduct

{

   public $CampingProductID;
   public $CampingProductCode;
   public $CampingProductName;
   public $CampingDescription;
   public $CampingCategoryID;
   public $CampingWholesalePrice;
   public $CampingListPrice;
   public $CampingDateCreated;
   public $CampingColor;


   function __construct(
     $CampingProductID,
     $CampingProductCode,
     $CampingProductName,
     $CampingDescription,
     $CampingCategoryID,
     $CampingWholesalePrice,
     $CampingListPrice,
     $CampingDateCreated,
     $CampingColor

       ) {
       $this->CampingProductID = $CampingProductID;
       $this->CampingProductCode =  $CampingProductCode;
       $this->CampingProductName = $CampingProductName;
       $this->CampingDescription = $CampingDescription;
       $this->CampingCategoryID = $CampingCategoryID;
       $this->CampingWholesalePrice = $CampingWholesalePrice;
       $this->CampingListPrice = $CampingListPrice;
       $this->CampingDateCreated = $CampingDateCreated;
       $this->CampingColor = $CampingColor;



  
    }
   function __toString()
   {

       $output = "<h2>Item : $this->CampingProductID</h2>" .
           "<h2>Name: $this->CampingProductName</h2>\n";
       "<h2>Category ID: $this->CampingCategoryID at $this->CampingListPrice</h2>\n";
       return $output;
   }
   function saveCampingProduct()
   {

       $db = getDB();
       $query = "INSERT INTO CampingProducts(CampingProductID,CampingProductCode,CampingProductName,CampingDescription,CampingCategoryID,CampingWholesalePrice,CampingListPrice,DateCreated,CampingColor)
        VALUES (?, ?, ?, ?,?, ?, ?, NOW(), ?)";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
          "isssidds",
           $this->CampingProductID,
           $this->CampingProductCode,
           $this->CampingProductName,
           $this->CampingDescription,
           $this->CampingCategoryID,
           $this->CampingWholesalePrice,
           $this->CampingListPrice,
           $this->CampingColor
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   static function getCampingProducts()
   {
       $db = getDB();
       $query = "SELECT * FROM CampingProducts";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $CampingProducts = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $CampingProduct = new CampingProduct(
                   $row['CampingProductID'],
                   $row['CampingProductCode'],
                   $row['CampingProductName'],
                   $row['CampingDescription'],
                   $row['CampingCategoryID'],
                   $row['CampingWholesalePrice'],
                   $row['CampingListPrice'],
                   $row['DateCreated'],
                   $row['CampingColor']
                 
               );
               array_push($CampingProducts, $CampingProduct);
           }
           $db->close();
           return $CampingProducts;
       } else {
           $db->close();
           return NULL;
       }
   }

   static function findCampingProduct($CampingProductID)
   {
       $db = getDB();
       $query = "SELECT * FROM CampingProducts WHERE CampingProductID = $CampingProductID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $CampingProduct= new CampingProduct(
            $row['CampingProductID'],
            $row['CampingProductCode'],
            $row['CampingProductName'],
            $row['CampingDescription'],
            $row['CampingCategoryID'],
            $row['CampingWholesalePrice'],
            $row['CampingListPrice'],
            $row['DateCreated'],
            $row['CampingColor']
           );
           $db->close();
           return $CampingProduct;
       } else {
           $db->close();
           return NULL;
       }
   }

function updateCampingProduct()
   {
    $db = getDB();
    $query = "UPDATE CampingProducts SET CampingProductName= ?, " .
        "CampingCategoryID= ?, CampingListPrice= ? WHERE CampingProductID = $this->CampingProductID";
    $stmt = $db->prepare($query);
    $stmt->bind_param(
        "sid",
        $this->CampingProductName,
        $this->CampingCategoryID,
        $this->CampingListPrice
    );
    $result = $stmt->execute();
    $db->close();
    return $result;
}
function removeCampingProduct()
   {
       $db = getDB();
       $query = "DELETE FROM CampingProducts WHERE CampingProductID = $this->CampingProductID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }

//    static function getCampingProductsByCategory($CampingProductID)
//    {
//        $db = getDB();
//        $query = "SELECT * from CampingProducts where categoryID = $CampingProductID";
//        $result = $db->query($query);
//        if (mysqli_num_rows($result) > 0) {
//            $CampingProducts = array();
//            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
//                $CampingProducts = new CampingProducts(
//                 $row['CampingProductID'],
//                 $row['CampingProductCode'],
//                 $row['CampingDescription'],
//             $row['listPrice'],
//             $row['CampingCategoryID'],
//             $row['CampingWholesalePrice'],
//             $row['CampingListPrice'],
//             $row['CampingDateCreated']
//                );
//                array_push($CampingProducts, $CampingProducts);
//            }
//            $db->close();
//            return $CampingProducts;
//        } else {
//            $db->close();
//            return NULL;
//        }
//    }







}
?>