<table width="100%" cellpadding="3">
   <?php
   if (!isset($_SESSION['login'])) {
   ?>
       <tr>
           <td>
               <hr />
           </td>
       </tr>
   <?php
   } else {
       echo "<td><h3>Welcome, {$_SESSION['login']}</h3></td>\n";
   ?>
       <tr>
           <td><a href="index.php"><strong>Home</strong></a></td>
       </tr>
       <tr>
           <td><strong>Categories</strong></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listcampingcategory">
                   <strong>List Categories</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newcampingcategory">
                   <strong>Add New Category</strong></a></td>
       </tr>
       <tr>
           <td><strong>Products</strong></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listcampingproducts">
                   <strong>List Products</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newcampingproduct">
                   <strong>Add New Product</strong></a></td>
       </tr>
       <tr>
           <td>
               <hr />
           </td>
       </tr>
       <tr>
           <td><a href="index.php?content=logout">
                   <strong>Logout</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;</td>
       </tr>
       <tr>
           <td>
               <form action="index.php" method="post">
                   <label>Search for Product:</label><br>
                   <input type="text" name="CampingProductID" size="14" />
                   <input type="submit" value="find" />
                   <input type="hidden" name="content" value="updateCampingProduct" />
                   </form>
           </td>
       </tr>
       <tr>
           <td>
               <form action="index.php" method="post">
                   <label>Search for Category:</label><br>
                   <input type="text" name="CampingCategoryID" size="14" />
                   <input type="submit" value="find" />
                   <input type="hidden" name="content" value="displaycategory" />
               </form>
           </td>
       </tr>
   <?php
   }
   ?>
</table>


