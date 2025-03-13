<?php
include('campingproduct.php');
$CampingProductID = $_POST['CampingProductID'];
if ((trim($CampingProductID) == '') or (!is_numeric($CampingProductID))) {
    echo gettype($CampingProductID);
    echo "<h2>Sorry, you must enter a valid item ID number</h2>\n";
} else {
   $CampingProductName = $_POST['CampingProductName'];
   $CampingCategoryID = $_POST['CampingCategoryID'];
   $CampingListPrice = $_POST['CampingListPrice'];
   $campingproduct = new CampingProduct(
    $CampingProductID,
    $CampingProductCode,
    $CampingProductName,
    $CampingDescription,
    $CampingCategoryID,
    $CampingWholesalePrice,
    $CampingListPrice,
    $CampingDateCreated

   );
   $result = $campingproduct->saveCAmpingProduct();
   if ($result)
       echo "<h2>New Item #$$CampingProductID) successfully added</h2>\n";
   else
       echo "<h2>Sorry, there was a problem adding that item</h2>\n";
}
?>
