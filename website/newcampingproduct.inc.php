<h2>Enter New Item Information</h2>
<form name="newitem" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Camping Product ID:</td>
           <td><input type="text" name="CampingProductID" size="4"></td>
       </tr>
       <tr>
           <td>Camping Product Name:</td>
           <td><input type="text" name="CampingProductName" size="20"></td>
       </tr>
       <tr>
           <td>Camping Cateogry ID:</td>
           <td><input type="text" name="CampingCategoryID" size="4"></td>
       </tr>
       <tr>
           <td>Camping List Price:</td>
           <td><input type="text" name="CampingListPrice" size="10"></td>
       </tr>
       <tr>
           <td>Camping Product Code:</td>
           <td><input type="text" name="CampingProductCode" size="4"></td>
       </tr>
       <tr>
           <td>Camping Wholesale Price:</td>
           <td><input type="text" name="CampingWholesalePrice" size="20"></td>
       </tr>
       <tr>
           <td>Color:</td>
           <td><input type="text" name="CampingColor" size="4"></td>
       </tr>
       <tr>
           <td>Product Description :</td>
           <td><input type="text" name="CampingDescription" size="10"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Item">
   <input type="hidden" name="content" value="addCampingProducts">
</form>
