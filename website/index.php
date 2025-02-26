<?php
//Anusha Patel, Feb 26 2025, IT202 Section 006, Phase 1, ap3235@njit.edu

session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Inventory Helper</title></head>
<body>
   <section id="container">
       <main>
           <?php
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
           }
           ?>
       </main>
   </section>
</body>
</html>
