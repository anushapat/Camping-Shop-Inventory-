<?php
if (!isset($_POST['CampingProductID']) or (!is_numeric($_POST['CampingProductID']))) {
?>
   <h2>You did not select a valid ProductID value</h2>
   <a href="index.php?content=listcampingproducts">List Products</a>
   <?php
} else {
   $CampingProductID = htmlspecialchars( $_POST['CampingProductID']);
   $CampingProduct = CampingProduct::findCampingProduct($CampingProductID);
   if ($CampingProduct) {
   ?>
       <h2>Update Product <?php echo $CampingProduct->CampingProductID; ?></h2><br>
       <form name="items" action="index.php" method="post">
           <table>
               <tr>
                   <td>Product ID</td>
                   <td><?php echo $CampingProduct->CampingProductID; ?></td>
               </tr>
               <tr>
               <td>Product Name</td>
                   <td><input type="text" name="CampingProductName" value="<?php echo $CampingProduct->CampingProductName; ?>"></td>
               </tr>
               <tr>
                   <td>Category ID</td>
               <td><input type="text" name="CampingCategoryID" value="<?php echo $CampingProduct->CampingCategoryID; ?>"></td>
               </tr>
               <tr>
                   <td>List Price</td>
                 <td><input type="text" name="CampingListPrice" value="<?php echo $CampingProduct->CampingListPrice; ?>"></td>
               </tr>
               <tr>
                   <td>Camping Product Code</td>
                 <td><input type="text" name="CampingProductCode" value="<?php echo $CampingProduct->CampingProductCode; ?>"></td>
               </tr>
               <tr>
               <td>Description</td>
                   <td><input type="text" name="CampingDescription" value="<?php echo $CampingProduct->CampingDescription; ?>"></td>
               </tr>
               <tr>
                   <td>WholeSale Price </td>
               <td><input type="text" name="CampingWholesalePrice" value="<?php echo $CampingProduct->CampingWholesalePrice; ?>"></td>
               </tr>
               <tr>
                   <td>Color</td>
                 <td><input type="text" name="CampingColor" value="<?php echo $CampingProduct->CampingColor; ?>"></td>
               </tr>
           </table><br><br>
           <input type="submit" name="answer" value="Update Item">
           <input type="submit" name="answer" value="Cancel">
           <input type="hidden" name="itemID" value="<?php echo $CampingProductID; ?>">
           <input type="hidden" name="content" value="changecampingproducts">
       </form>
   <?php
      } else {
        ?>
            <h2>Sorry, item <?php echo $CampingProductID; ?> not found</h2>
            <a href="index.php?content=listcampingproducts">List Products</a>
     <?php
        }
     }
     ?>
     