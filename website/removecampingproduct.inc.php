<?php
require_once("campingproduct.php");
///Anusha Patel, March 14 2025, IT202 Section 006, Phase 2, ap3235@njit.edu
if (isset($_SESSION['login'])) {
$CampingProductID = $_POST['CampingProductID'];
$CampingProduct = CampingProduct::findCampingProduct($CampingProductID);
$result = $CampingProduct->removeCampingProduct();
if ($result)
   echo "<h2>Item $CampingProductID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing item $CampingProductID</h2>\n";
} else {
   echo "<H2>Please login first</h2>\n";
}

?>
