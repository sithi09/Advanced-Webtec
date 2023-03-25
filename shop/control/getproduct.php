<?php
include('../db/db.php');

$pname = $_POST['pname'];

if($pname!="")
{
$connection = new db();
$conobj=$connection->OpenCon();
$MyQuery=$connection->GetProductByPname($conobj,"product",$pname );

if ($MyQuery->num_rows > 0) {
    echo "<p>Search Results for '$pname'</p><table class=product><tr><th>Product ID</th><th> Product Name</th><th>Seller Name</th><th>Product Info</th><th>Price</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["pid"]."</td><td>".$row["pname"]."</td><td>".$row["name"]."</td><td>".$row["info"]."</td><td>".$row["price"]." TK</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }   
}
else{
  echo "please enter something";
}