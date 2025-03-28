<?php

//include("campingproduct.php");
// include('item.php');
if (isset($_SESSION['login'])) {
   $itemID = $_POST['itemID'];
   $answer = $_POST['answer'];
   if ($answer == "Update Item") {
$CampingProduct = CampingProduct::findCampingProduct($itemID);
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
   echo "<h2>Item $itemID updated</h2>\n";
} else {
   echo "<h2>Problem updating item $CampingProductID</h2>\n";
}
} else {
    echo "<h2>Update Canceled for item $CampingProductID</h2>\n";
   }
} else {
   echo "<h2>Please login first</h2>\n";
}

?>
