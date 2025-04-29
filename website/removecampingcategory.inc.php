<?php
error_log("\$_POST " . print_r($_POST, true));
///Anusha Patel, March 14 2025, IT202 Section 006, Phase 2, ap3235@njit.edu

require_once("campingcategory.php");
if (isset($_SESSION['login'])) {

$CampingCategoryID=(int) $_POST['CampingCategoryID'];
$category = Category::findCategory($CampingCategoryID);
$result = $category->removeCategory();
if ($result)
   echo "<h2>Category $CampingCategoryID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing category $CampingCategoryID</h2>\n";
} else {
   echo "<H2>Please login first</h2>\n";
}

?>
