<?php
 function getDB() {
   $host = 'sql1.njit.edu';
   $port = 3306;
   $dbname = 'ap3235';
   $username = 'ap3235';
   $password = 'IT202admin!';
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   try {
       $db = new mysqli($host, $username, $password, $dbname, $port);
       error_log("You are connected to the $host database!");
       //echo "You are connected to the $host database!";
       return $db;
   } catch (mysqli_sql_exception $e) {
       error_log($e->getMessage(), 0);
       echo $e->getMessage();
   }
 }
//getDB();
//Anusha Patel, Feb 26 2025, IT202 Section 006, Phase 1, ap3235@njit.edu
?>
