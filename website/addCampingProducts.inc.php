<?php
// include('item.php');
if (isset($_SESSION['login'])) {
//Anusha Patel, March 14 2025, IT202 Section 006, Phase 2, ap3235@njit.edu
$CampingProductID = filter_input(INPUT_POST, 'CampingProductID', FILTER_VALIDATE_INT);
if ((trim($CampingProductID) == '') or (!is_int($CampingProductID))) {
    echo gettype($CampingProductID);
    echo "<h2>Sorry, you must enter a valid item ID number</h2>\n";
} else {
   $CampingProductCode = htmlspecialchars( $_POST['CampingProductCode']);
   $CampingProductName = htmlspecialchars($_POST['CampingProductName']);
   $CampingCategoryID = htmlspecialchars($_POST['CampingCategoryID']);
   $CampingListPrice = htmlspecialchars($_POST['CampingListPrice']);
//    $CampingProductID = $_POST['CampingProductCode'];
  // $CampingProductCode = htmlspecialchars($_POST['CampingProductCode']);
   $CampingDescription = htmlspecialchars($_POST['CampingDescription']);
   $CampingWholesalePrice = htmlspecialchars($_POST['CampingWholesalePrice']);
   $CampingDateCreated = 'NOW()';
   $CampingColor = htmlspecialchars($_POST['CampingColor']);
}
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

    } else {
        echo "<h2>Please login first</h2>\n";
     }
?>
//Anusha Patel, March 14 2025, IT202 Section 006, Phase 2, ap3235@njit.edu
