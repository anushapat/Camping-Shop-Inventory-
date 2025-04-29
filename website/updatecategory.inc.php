<style>
   form[name="category"] {
       display: grid;
       grid-template-columns: 125px 1fr;
       gap: 10px 5px;
       align-items: left;
       max-width: 300px;
       margin: 0px;
   }
   form[name="category"] label {
       text-align: left;
       padding-right: 5px;
   }
   form[name="category"] input[type="text"] {
       width: 100%;
   }
   form[name="category"] input[type="submit"] {
       grid-column: 2;
       justify-self: start;
   }
</style>
<?php
$CampingCategoryID = (int)$_POST['CampingCategoryID'];
$category = Category::findCategory($CampingCategoryID);
if ($category) {
?>
   <h2>Update Category <?php echo $CampingCategoryID; ?></h2><br>
   <form name="category" action="index.php" method="post">
       <label for="categoryCode">Category Code:</label>
       <input type="text" name="CampingCategoryCode" id="categoryCode" value="<?php echo $category->CampingCategoryCode; ?>">
       <label for="categoryName">Category Name:</label>
       <input type="text" name="CampingCategoryName" id="categoryName" value="<?php echo $category->CampingCategoryName; ?>">
       <label for="categoryName">Aisle Number:</label>
       <input type="text" name="aisleNumber" id="categoryName" value="<?php echo $category->CampingCategoryName; ?>">
       <input type="submit" name="answer" value="Update Category">
       <input type="submit" name="answer" value="Cancel">
       <input type="hidden" name="CampingCategoryID" value="<?php echo $CampingCategoryID; ?>">
       <input type="hidden" name="content" value="changecategory">
   </form>
<?php
} else {
?>
   <h2>Sorry, category <?php echo $CampingCategoryID; ?> not found</h2>
   <a href="index.php?content=listcampingcategory">List Categories</a>
   <?php
}
?>
<script language="javascript">
   document.category.categoryCode.focus();
   document.category.categoryCode.select();
</script>
