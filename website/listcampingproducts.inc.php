<script language="javascript">
   function listbox_dblclick() {
       document.campingproduct.displayitem.click()
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this item?");
       }
       if (userConfirmed) {
           if (target == 0) campingproduct.action = "index.php?content=displayitem";
           if (target == 1) campingproduct.action = "index.php?content=removecampingproduct";
           if (target == 2) campingproduct.action = "index.php?content=updateCampingProduct";
       } else {
           alert("Action canceled.");
       }
   }
</script>


<h2>Select Item</h2>

<form name="campingproduct" method="post">
<select ondblclick="listbox_dblclick()"  name="CampingProductID" size="25">

 <?php

//include("campingproduct.php");
///Anusha Patel, March 14 2025, IT202 Section 006, Phase 2, ap3235@njit.ede
$CampingProducts = CampingProduct::getCampingProducts();
foreach ($CampingProducts as $CampingProduct) {
   $CampingProductID = $CampingProduct->CampingProductID;
   $CampingProductName = $CampingProduct->CampingProductName;
   $CampingListPrice = $CampingProduct->CampingListPrice;
   $option = $CampingProductID . " - " . $CampingProductName .  " - " . $CampingListPrice;
   echo "<option value=\"$CampingProductID\">$option</option>\n";
       
}
?>
   </select>
<br>
   <input type="submit" onClick="button_click(0)" name="displayitem" value="View Product">
   <input type="submit" onClick="button_click(1)" name="deleteitem" value="Delete Product">
   <input type="submit" onClick="button_click(2)" name="updateitem" value="Update Product">
</form>
