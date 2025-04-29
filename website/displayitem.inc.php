<?php
if (!isset($_REQUEST['CampingProductID']) or (!is_numeric($_REQUEST['CampingProductID']))) {
?>
 <h2>You did not select a valid itemID to view.</h2>
 <a href="index.php?content=listitems">List Items</a>
 <?php
} else {
 $itemID = $_REQUEST['CampingProductID'];
 $item = CampingProduct::findCampingProduct($itemID);
 if ($item) {
 ?>
   <h5>Item ID: <?php echo $item->CampingProductID; ?></h2>
   <h5>Item Name: <?php echo $item->CampingProductName; ?></h2>
   <h5>Item Price: <?php echo $item->CampingListPrice; ?></h2>
   <h5>Item Category ID: <?php echo $item->CampingCategoryID; ?></h2>
   <h5>Item Product Code: <?php echo $item->CampingProductCode; ?></h2>
   <h5>Item WholeSale Price: <?php echo $item->CampingWholesalePrice; ?></h2>
   <h5>Item Color: <?php echo $item->CampingColor; ?></h2>
   <h5>Item Product Description: <?php echo $item->CampingDescription; ?></h2>



   <br>
<?php
 } else {
   echo "<h2>Sorry, item not found.</h2>\n";
 }
}
?>
