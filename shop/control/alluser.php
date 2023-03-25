<?php
include('../db/db.php');
echo "<fieldset><h4>All users in our shop</h4>";
$connection = new db();
$conobj=$connection->OpenCon();
$MyQuery=$connection->ShowAllUser($conobj,"user");
      if ($MyQuery->num_rows > 0) 
          {
            echo "<table class=product><tr>
            <th>username</th>
            <th>Name</th>
            <th>email</th>
            <th>Password</th>
            <th>Role</th></tr>";
            // output data of each row
            while($row = $MyQuery->fetch_assoc()) 
            {
              echo "<tr>
              <td>".$row["username"]."</td>
              <td>".$row["name"]."</td>
              <td>".$row["email"]."</td>
              <td>".$row["password"]."</td>
              <td>".$row["role"]."</td></tr>";
            }
            echo "</table>";
            } 
      else 
          {
            echo "No users";
          }
          echo "</fieldset>";

?>