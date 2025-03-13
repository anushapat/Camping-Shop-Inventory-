<?php
include("campingcategory.php");
$categories = Category::getCategories();
foreach($categories as $category) {
   $CampingCategoryID = $category->CampingCategoryID;
   $name = $CampingCategoryID . " - " . $category->CampingCategoryCode . ", " . $category->CampingCategoryName;
   echo "$name<br>";
}
?>
