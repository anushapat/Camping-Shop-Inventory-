<?php
include("campingproduct.php");
//Anusha Patel, March 14 2025, IT202 Section 006, Phase 2, ap3235@njit.edu

$CampingProductID = (int) $_POST['CampingProductID'];
if ((trim($CampingProductID) == '') or (!is_numeric($CampingProductID))) {
    echo gettype($CampingProductID);
    echo "<h2>Sorry, you must enter a valid item ID number</h2>\n";
} else {
   $CampingProductName = $_POST['CampingProductName'];
   $CampingCategoryID = $_POST['CampingCategoryID'];
   $CampingListPrice = $_POST['CampingListPrice'];
//    $CampingProductID = $_POST['CampingProductCode'];
   $CampingProductCode = $_POST['CampingProductCode'];
   $CampingDescription = $_POST['CampingDescription'];
   $CampingWholesalePrice = $_POST['CampingWholesalePrice'];
   $CampingDateCreated = 'NOW()';
   $CampingColor = $_POST['CampingColor'];


   $campingproduct = new CampingProduct(
    $CampingProductID,
    $CampingProductCode,
    $CampingProductName,
    $CampingDescription,
    $CampingCategoryID,
    $CampingWholesalePrice,
    $CampingListPrice,
    $CampingDateCreated,
    $CampingColor

   );
   $result = $campingproduct->saveCampingProduct();
   if ($result)
       echo "<h2>New Item $CampingProductID) successfully added</h2>\n";
   else
       echo "<h2>Sorry, there was a problem adding that item</h2>\n";
}
?>
//Anusha Patel, March 14 2025, IT202 Section 006, Phase 2, ap3235@njit.edu
