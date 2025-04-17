<?php

include("campingcategory.php");
$CampingCategoryID = (int)$_POST['CampingCategoryID'];
$category = Category::findCategory($CampingCategoryID);
//Anusha Patel, March 14 2025, IT202 Section 006, Phase 2, ap3235@njit.edu

if($category){

$category->CampingCategoryID = $_POST['CampingCategoryID'];
$category->CampingCategoryCode = $_POST['CampingCategoryCode'];
$category->CampingCategoryName = $_POST['CampingCategoryName'];
$category->aisleNumber = $_POST['aisleNumber'];

$result = $category->updateCategory();
}
if ($result) {
   echo "<h2>Category $CampingCategoryID updated</h2>\n";
} else {
   echo "<h2>Problem updating category $CampingCategoryID</h2>\n";
}
?>
