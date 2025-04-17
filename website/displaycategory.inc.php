<?php
error_log("\$_REQUEST " . print_r($_REQUEST, true));
if (!isset($_REQUEST['CampingCategoryID']) or (!is_numeric($_REQUEST['CampingCategoryID']))) {
?>
 <h2>You did not select a valid categoryID to view.</h2>
 <a href="index.php?content=listcampingcategory">List Categories</a>
 <?php
} else {
    $CampingCategoryID =$_REQUEST['CampingCategoryID'];
    $category = Category::findCategory($CampingCategoryID);
    if ($category) {
        $CampingProducts = CampingProduct::getCampingProductsbyCampingCategory($CampingCategoryID);
        if ($CampingProducts) {
      ?>
          <br><br>
          <b>CampingProducts:</b><br>
          <table>
            <tr>
              <th>Product</th>
              <th>Name</th>
              <th> ListPrice</th>
              <th> Wholesale Price</th>
              <th>Color</th>
              <th>Date Created</th>
              <th>Description</th>
              <th>CategoryID</th>
              <th>Product Code</th>
       </tr>
       <?php
       $itemtotal = 0;
       foreach ($CampingProducts as $CampingProduct) {
       ?>
         <tr>
           <td><?php echo $CampingProduct->CampingProductID; ?></td>
           <td><?php echo $CampingProduct->CampingProductName; ?></td>
           <td><?php echo $CampingProduct->CampingListPrice; ?></td>
           <td><?php echo $CampingProduct->CampingWholesalePrice; ?></td>
           <td><?php echo $CampingProduct->CampingColor; ?></td>
           <td><?php echo $CampingProduct->CampingDateCreated; ?></td>
           <td><?php echo $CampingProduct->CampingDescription; ?></td>
           <td><?php echo $CampingProduct->CampingCategoryID; ?></td>
           <td><?php echo $CampingProduct->CampingProductCode; ?></td>
           </td>

         </tr>
       <?php
       }
       ?>
     </table>
   <?php
   } else {
     echo "<h2>There are no items for this category</h2>\n";
   }
 } else {
    echo "<h2>Sorry, category $CampingCategoryID not found</h2>\n";
}
}
?>
