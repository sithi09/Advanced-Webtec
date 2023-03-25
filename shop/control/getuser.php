<?php
include('../db/db.php');

$username = $_POST['uname'];

if($username!="")
{
$connection = new db();
$conobj=$connection->OpenCon();
$MyQuery=$connection->GetUserByUname($conobj,"user",$username );

if ($MyQuery->num_rows > 0) {
    echo "<p>Search Results for '$username'</p><table class=product><tr><th>username</th><th>Name</th><th>email</th><th>Password</th><th>Role</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["username"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["password"]."</td><td>".$row["role"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
}
else{
  echo "please enter an username";
}