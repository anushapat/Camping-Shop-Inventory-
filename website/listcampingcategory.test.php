<?php
include("campingcategory.php");
///Anusha Patel, March 14 2025, IT202 Section 006, Phase 2, ap3235@njit.edu

$categories = Category::getCategories();
foreach($categories as $category) {
   $CampingCategoryID = $category->CampingCategoryID;
   $name = $CampingCategoryID . " - " . $category->CampingCategoryCode . ", " . $category->CampingCategoryName;
   echo "$name<br>";
}
?>

