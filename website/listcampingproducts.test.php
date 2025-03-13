<?php
include("campingproduct.php");
$CampingProducts = CampingProduct::getCampingProducts();
foreach ($CampingProducts as $CampingProduct) {
   $CampingProductID = $CampingProduct->CampingProductID;
   $CampingProductName = $CampingProduct->CampingProductName;
   $CampingListPrice = $CampingProduct->CampingListPrice;
   $option = $CampingProductID . " - " . $CampingProductName .  " - " . $CampingListPrice;
   echo "$option<br>";
}
?>
