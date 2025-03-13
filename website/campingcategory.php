<?php
require_once('database.php');
class Category
{
   public $CampingCategoryID;
   public $CampingCategoryCode;
   public $CampingCategoryName;
   public $DateCreated;
   public $aisleNumber;

function __construct ( $CampingCategoryID, $CampingCategoryCode, $CampingCategoryName, $DateCreated, $aisleNumber)
   {
       $this->CampingCategoryID = $CampingCategoryID;
       $this->CampingCategoryCode = $CampingCategoryCode;
       $this->CampingCategoryName = $CampingCategoryName;
       $this-> DateCreated = $DateCreated;
       $this->aisleNumber = $aisleNumber;



   }
   function __toString()
   {
       $output = "<h2>Category Number: $this->CampingCategoryID</h2>\n" .
           "<h2>$this->CampingCategoryCode, $this->CampingCategoryName</h2>\n, $this ->Date</h2>, $this ->Number</h2>";
       return $output;
   }
   function saveCategory()
   {
       $db = getDB();
       $query = "INSERT INTO CampingCategories(CampingCategoryID,CampingCategoryCode,CampingCategoryName,aisleNumber,DateCreated) VALUES (?, ?, ?, ?, NOW())";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issi",
           $this->CampingCategoryID,
           $this->CampingCategoryCode,
           $this->CampingCategoryName,
           $this->aisleNumber);
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   static function getCategories()
   {
       $db = getDB();
       $query = "SELECT * FROM CampingCategories";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $categories = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $category = new Category(
                   $row['CampingCategoryID'],
                   $row['CampingCategoryCode'],
                   $row['CampingCategoryName'],
                   $row['DateCreated'],
                   $row['aisleNumber']
               );
               array_push($categories, $category);
               unset($category);
           }
           $db->close();
           return $categories;
       } else {
           $db->close();
           return NULL;
       }
    }
  static function findCategory($CampingCategoryID)
   {
    echo ($CampingCategoryID);
       $db = getDB();
       $query = "SELECT * FROM CampingCategories WHERE CampingCategoryID = $CampingCategoryID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $category = new Category(
               $row['CampingCategoryID'],
               $row['CampingCategoryCode'],
               $row['CampingCategoryName'],
               $row['DateCreated'],
               $row['aisleNumber']
           );
        echo("this function works");
           $db->close();
           return $category;
       } else {
           $db->close();
           return NULL;
       }
   }
   function updateCategory()
   {
       $db = getDB();
       $query = "UPDATE CampingCategories SET CampingCategoryID = ?, CampingCategoryCode = ?, " .
           "CampingCategoryName = ? " .
           "WHERE CampingCategoryID = $this->CampingCategoryID";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issi",
           $this->CampingCategoryID,
           $this->CampingCategoryCode,
           $this->CampingCategoryName,
        $this->aisleNumber
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   function removeCategory()
   {
       $db = getDB();
       $query = "DELETE FROM CampingCategories WHERE CampingCategoryID = $this->CampingCategoryID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }








   }

?>
