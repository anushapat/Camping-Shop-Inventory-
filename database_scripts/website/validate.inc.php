<?php
//Anusha Patel, Feb 26 2025, IT202 Section 006, Phase 1, ap3235@njit.edu

require_once('database.php');
$emailAddress = htmlspecialchars( $_POST['emailAddress']);
$password = $_POST['password'];
if (filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {

$query = "SELECT firstName, lastName, pronouns FROM CampingManagers " .
        "WHERE emailAddress = ? AND password = SHA2(?,256)";
$db = getDB();
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $emailAddress, $password);
$stmt->execute();
$stmt->bind_result($firstName, $lastName, $pronouns);
//$stmt->bind_result($pronouns);
$fetched = $stmt->fetch();
$name = "$firstName $lastName";
$nouns = "$pronouns";

if ($fetched && isset($name)) {
   echo "<h2>Welcome to Inventory Helper, $name</h2>\n";
   echo "<h2>Welcome to Inventory Helper, $pronouns</h2>\n";
   $_SESSION['login'] = true;
   $_SESSION['pronouns'] = $nouns;
   $_SESSION['firstName'] = $firstName;
   $_SESSION['lastName'] = $lastName;
   $_SESSION['emailAddress'] = $emailAddress;



   header("Location: index.php");
} else {
   echo "<h2>Sorry, login incorrect for Camping Store</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
}
} else {
   echo "<h2>Please enter a valid email address</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
}

?>
