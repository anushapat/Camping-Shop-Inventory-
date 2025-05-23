<script language="javascript">
   function listbox_dblclick() {
       document.categories.displaycategory.click()
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this category?");
       }
       if (userConfirmed) {
           if (target == 0) categories.action = "index.php?content=displaycategory";
           if (target == 1) categories.action = "index.php?content=removecampingcategory";
           if (target == 2) categories.action = "index.php?content=updatecategory";
       } else {
           alert("Action canceled.");
       }
   }
</script>

<h2>Select Category</h2>

<form name="categories" method="post">
   <select  ondblclick="listbox_dblclick()"  name="CampingCategoryID" size="20">
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
   <br>
   <input type="submit" onClick="button_click(0)" name="displaycategory" value="View Category">
   <input type="submit" onClick="button_click(1)" name="deletecategory" value="Delete Category">
   <input type="submit" onClick="button_click(2)" name="updatecategory" value="Update Category">

</form>
