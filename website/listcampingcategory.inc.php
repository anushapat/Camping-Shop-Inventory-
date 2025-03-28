<h2>Select Category</h2>
<form name="categories" method="post">
   <select name="CampingCategoryID" size="20">
       <?php
   //include("campingcategory.php");
       $categories = Category::getCategories();
       foreach ($categories as $category) {
           $CampingCategoryID = $category->CampingCategoryID;
           $CampingCategoryName = $CampingCategoryID . " - " . $category->CampingCategoryCode . ", " . $category->CampingCategoryName;
           echo "<option value=\"$CampingCategoryID\">$CampingCategoryName</option>\n";
       }
       ?>
   </select>
</form>
