<style>
 form[name="login"] {
   display: grid;
   grid-template-columns: 100px 1fr;
   gap: 10px 5px;
   align-items: center;
   max-width: 300px;
 }
 form[name="login"] label {
   text-align: right;
   padding-right: 5px;
 }
 form[name="login"] input[type="text"],
 form[name="login"] input[type="password"] {
   width: 100%;
 }
 form[name="login"] input[type="submit"] {
   grid-column: 2;
   justify-self: start;
 }
</style>



<?php
//Anusha Patel, Feb 26 2025, IT202 Section 006, Phase 1, ap3235@njit.edu

if (!isset($_SESSION['login'])) {
?>
  <h2> Please Login to the Camping Shop Inventory Website</h2><br>
  <form name="login" action="index.php" method="post">
    <label>Email:</label>
    <input type="text" name="emailAddress" size="20" >
    <!-- <br> -->
   <!-- <br> -->
    <label>Password:</label>
    <input type="password" name="password" size="20">
 <!-- <br> -->
   <!-- <br> -->
    <input type="submit" value="Login">
    <input type="hidden" name="content" value="validate">
  </form>
  <?php
} else {
   echo "<h2>Welcome to Camping Store Inventory Helper </h2>";
   echo "<h3>Welcome {$_SESSION['firstName']} {$_SESSION['lastName']} ({$_SESSION['pronouns']})</h3>";


?>
   


   <a href="index.php?content=logout"><strong>Logout</strong></a>
<?php
}
?>
