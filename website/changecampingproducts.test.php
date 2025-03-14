<?php
include("campingproduct.php");
$CampingProductID = (int)$_POST['CampingProductID'];
$CampingProduct = CampingProduct::findCampingProduct($CampingProductID);
if($CampingProduct){
//Anusha Patel, March 14 2025, IT202 Section 006, Phase 2, ap3235@njit.edu


$CampingProduct->CampingProductName = $_POST['CampingProductName'];
$CampingProduct->CampingCategoryID = $_POST['CampingCategoryID'];
$CampingProduct->CampingListPrice = $_POST['CampingListPrice'];
$CampingProduct->CampingProductCode = $_POST['CampingProductCode'];
$CampingProduct ->CampingDescription = $_POST['CampingDescription'];
$CampingProduct ->CampingWholesalePrice = $_POST['CampingWholesalePrice'];
$CampingProduct ->CampingDateCreated = 'NOW()';
$CampingProduct-> CampingColor = $_POST['CampingColor'];



$result = $CampingProduct->updateCampingProduct();


}
if ($result) {
   echo "<h2>Item $CampingProductID updated</h2>\n";
} else {
   echo "<h2>Problem updating item $CampingProductID</h2>\n";
}
?>
