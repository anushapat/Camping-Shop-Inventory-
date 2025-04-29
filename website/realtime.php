<?php
ob_start();
include("campingcategory.php");
include("campingproduct.php");
// Fetch values using the static methods from category.php and item.php
$totalCategories = Category::getTotalCategories();
$totalItems = CampingProduct::getTotalItems();
$listpricetotal = CampingProduct::getTotalListPrice();
$doc = new DOMDocument("1.0");
$inventory = $doc->createElement("inventory");
$inventory = $doc->appendChild($inventory);
// Add <categories> XML element with value
$categories = $doc->createElement("categories", $totalCategories);
$categories = $inventory->appendChild($categories);
// Add <items> XML element with value
$items = $doc->createElement("items", $totalItems);
$items = $inventory->appendChild($items);
// Add <listpricetotal> XML element with value
$listpricetotals = $doc->createElement("listpricetotal", $listpricetotal);
$listpricetotals =$inventory->appendChild(($listpricetotals));
$output = $doc->saveXML();
header("Content-type: application/xml");
ob_end_clean();
echo $output;
?>
