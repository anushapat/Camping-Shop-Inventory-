<h2>Enter New Category Information</h2>
<form name="newcategory" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Camping Category ID:</td>
           <td><input type="text" name="CampingCategoryID" size="4"></td>
       </tr>
       <tr>
           <td>Camping Category Code:</td>
           <td><input type="text" name="CampingCategoryCode" size="20"></td>
       </tr>
       <tr>
           <td> Camping Category Name:</td>
           <td><input type="text" name="CampingCategoryName" size="50"></td>
       </tr>
       <tr>
           <td>Camping Aisle Number:</td>
           <td><input type="text" name="aisleNumber" size="4"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Category">
   <input type="hidden" name="content" value="addcampingcategory">
</form>
