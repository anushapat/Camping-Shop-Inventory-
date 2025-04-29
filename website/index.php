<?php
//Anusha Patel, Feb 26 2025, IT202 Section 006, Phase 1, ap3235@njit.edu

session_start();
include("campingcategory.php");
include("campingproduct.php");
?>
<!DOCTYPE html>
<html>
<head><title>Inventory Helper</title><script src="realtime.js"></script>
<link rel="stylesheet" type="text/css" href="ih_styles.css">
<link rel="icon" type="image/png" href="images/logo.png">
</head>
<body>
<header>
       <?php include("header.inc.php"); ?>
   </header>
   <section style="height: 425px;">
       <nav style="float: left; height: 100%;">
           <?php include("nav.inc.php"); ?>
       </nav>
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
       <aside>
           <?php include("aside.inc.php"); ?>
           <script>
               getRealTime();
               setInterval(getRealTime, 5000);
           </script>
       </aside>

   </section>
   <footer>
       <?php include("footer.inc.php"); ?>
   </footer>
</body>
</html>
