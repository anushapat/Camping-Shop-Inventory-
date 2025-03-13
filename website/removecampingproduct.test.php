<?php
include("campingproduct.php");
$CampingProductID = $_POST['CampingProductID'];
$CampingProduct = CampingProduct::findCampingProduct($CampingProductID);
$result = $CampingProduct->removeCampingProduct();
if ($result)
   echo "<h2>Item $CampingProductID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing item $CampingProductID</h2>\n";
?>
