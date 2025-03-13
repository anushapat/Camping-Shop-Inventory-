<?php
include("campingcategory.php");
$CampingCategoryID =(int) $_POST['CampingCategoryID'];
if ((trim($CampingCategoryID) == '') or (!is_numeric($CampingCategoryID))) {
  echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
} else {
  $CampingCategoryCode = $_POST['CampingCategoryCode'];
  $CampingCategoryName = $_POST['CampingCategoryName'];
 $DateCreated = 'NOW()';
 $aisleNumber = $_POST['aisleNumber'];
 
  $category = new Category($CampingCategoryID, $CampingCategoryCode, $CampingCategoryName, $DateCreated, $aisleNumber);
  $result = $category->saveCategory();
  if ($result) {
      echo "<h2>New Category #$CampingCategoryID successfully added</h2>\n";
      echo "<h2>$category</h2>\n";
  } else {
      echo "<h2>Sorry, there was a problem adding that category</h2>\n";
  }
}
?>
