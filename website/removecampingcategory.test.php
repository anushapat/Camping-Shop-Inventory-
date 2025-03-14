<?php
error_log("\$_POST " . print_r($_POST, true));
include("campingcategory.php");
$CampingCategoryID=(int) $_POST['CampingCategoryID'];
$category = Category::findCategory($CampingCategoryID);
$result = $category->removeCategory();
if ($result)
   echo "<h2>Category $CampingCategoryID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing category $CampingCategoryID</h2>\n";
?>
