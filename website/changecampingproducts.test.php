<?php
include("campingproduct.php");
$CampingCategoryID = $_POST['CampingCategoryID'];
$CampingProduct = CampingProduct::findCampingProduct($CampingCategoryID);
$item->CampingProductID = $_POST['CampingProductID'];
$item->CampingProductName = $_POST['CampingProductName'];
$item->CampingCategoryID = $_POST['CampingCategoryID'];
$item->CampingListPrice = $_POST['CampingListPrice'];
$result = $CampingProduct->updateCampingProduct();
if ($result) {
   echo "<h2>Item $CampingCategoryID updated</h2>\n";
} else {
   echo "<h2>Problem updating item $CampingCategoryID</h2>\n";
}
?>
