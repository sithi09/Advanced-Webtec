<?php
include('../db/db.php');
 $error="";
// store session data
if (isset($_POST['submit'])) {

$pname=$_POST['pname'];

$connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->Search($conobj,"product",$pname);

if ($userQuery->num_rows > 0) {
    echo "<p>Search Results</p><table class=product><tr><th>Product ID</th><th> Product Name</th><th>Seller Name</th><th>Product Info</th><th>Price</th></tr>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {

      echo "<tr><td>".$row["pid"]."</td><td>".$row["pname"]."</td><td>".$row["name"]."</td><td>".$row["info"]."</td><td>".$row["price"]." TK</td></tr>";
    }
    echo "</table>";
  } else {
    echo "Enter Something";
  }

$connection->CloseCon($conobj);

}



?>
