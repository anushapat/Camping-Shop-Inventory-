<?php
//Anusha Patel, Feb 26 2025, IT202 Section 006, Phase 1, ap3235@njit.edu

if (isset($_SESSION['login'])) {
   unset($_SESSION['login']);
   unset($_SESSION['emailAddress']);
   unset($_SESSION['firstName']);
   unset($_SESSION['lastName']);
   unset($_SESSION['pronouns']);



}
header("Location: index.php");
?>
