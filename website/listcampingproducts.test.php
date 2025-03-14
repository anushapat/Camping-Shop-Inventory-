<?php
include("campingproduct.php");
///Anusha Patel, March 14 2025, IT202 Section 006, Phase 2, ap3235@njit.edu

$CampingProducts = CampingProduct::getCampingProducts();
foreach ($CampingProducts as $CampingProduct) {
   $CampingProductID = $CampingProduct->CampingProductID;
   $CampingProductName = $CampingProduct->CampingProductName;
   $CampingListPrice = $CampingProduct->CampingListPrice;
   $option = $CampingProductID . " - " . $CampingProductName .  " - " . $CampingListPrice;
   echo "$option<br>";
}
?>
