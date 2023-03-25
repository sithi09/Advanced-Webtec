<?php
include('../db/db.php');

$username = $_POST['massage'];

if($mid!="")
{
$connection = new db();
$conobj=$connection->OpenCon();
$MyQuery=$connection->GetUserBymid($conobj,"massage",$mid );

if ($MyQuery->num_rows > 0) {
    echo "<p>Search Results for '$mid'</p><table class=massage><tr><th>susername</th><th>rusername</th><th>mtext</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["susername"]."</td><td>".$row["rusername"]."</td><td>".$row["mtext"]."</td></tr>";
     
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
}
else{
  echo "please enter an mid";
}