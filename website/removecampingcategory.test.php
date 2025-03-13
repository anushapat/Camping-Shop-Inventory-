<?php
error_log("\$_POST " . print_r($_POST, true));
include("campingcategory.php");
$CampingCategoryID= $_POST['CampingCategoryID'];
$campingcategory = Category::findCategory($CampingCategoryID);
$result = $campingcategoryy->removeCategory();
if ($result)
   echo "<h2>Category $CampingCategoryID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing category $CampingCategoryID</h2>\n";
?>
