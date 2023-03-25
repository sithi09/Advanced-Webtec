<?php
include('../db/db.php');
echo "<fieldset><h4>All massages for you </h4>";
$rusername=$_SESSION['username'];
$connection = new db();
$conobj=$connection->OpenCon();
$MyQuery=$connection->ShowAllMassage($conobj,"massage",$rusername);
      if ($MyQuery->num_rows > 0) 
          {
            echo "<table class=product><tr>
            <th>Massage id</th>
            <th>Receiver</th>
            
            <th>Massage</th>
            <th>Time</th></tr>";
            // output data of each row
            while($row = $MyQuery->fetch_assoc()) 
            {
              echo "<tr>
              <td>".$row["mid"]."</td>
              <td>".$row["rusername"]."</td>
           
              <td>".$row["mtext"]."</td>
              <td>".$row["mcr"]."</td></tr>";
            }
            echo "</table>";
            } 
      else 
      
          {
            echo "No massages";
          }
          echo "</fieldset>";

?>