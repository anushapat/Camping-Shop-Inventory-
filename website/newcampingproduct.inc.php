<h2>Enter New Item Information</h2>
<form name="newitem" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Camping Product ID:</td>
           <td><input type="text" name="CampingProductID" size="4" min = "1" max = "100" required></td>
       </tr>
       <tr>
           <td>Camping Product Name:</td>
           <td><input type="text" name="CampingProductName" size="20" minlength="5"maxlength="100" required></td>
       </tr>
       <tr>
           <td>Camping Cateogry ID:</td>
           <td><input type="number" name="CampingCategoryID" size="4" min = "100" max = "999" required></td>
       </tr>
       <tr>
           <td>Camping List Price:</td>
           <td><input type="text" name="CampingListPrice" size="10" inputmode = "decimal" pattern="[0-9]*[.,]?[0-9]*"minlength = "1" maxlength="9" required></td>
       </tr>
       <tr>
           <td>Camping Product Code:</td>
           <td><input type="text" name="CampingProductCode" size="4" minlength="3" maxlength="10" required></td>
       </tr>
       <tr>
           <td>Camping Wholesale Price:</td>
           <td><input type="text" name="CampingWholesalePrice" size="20" inputmode = "decimal" pattern="[0-9]*[.,]?[0-9]*" minlength = "1" maxlength="9"></td>
       </tr>
       <tr>
           <td>Color:</td>
           <td><input type="text" name="CampingColor" size="4" minlength ="4" maxlength="10" required></td>
       </tr>
       <tr>
           <td>Product Description :</td>
           <td><input type="text" name="CampingDescription" size="10" minlength="10" maxlength="255"required ></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Item">
   <input type="hidden" name="content" value="addCampingProducts">
</form>
