<?php
include('../db/db.php');
echo "<fieldset><h4>All products in our shop</h4>";
$name=$_SESSION['username'];
$connection = new db();
$conobj=$connection->OpenCon();
$MyQuery=$connection->ShowAllProduct($conobj,"product",$name);
      if ($MyQuery->num_rows > 0) 
          {
            echo "<table class=product>
            <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Retailer Name</th>
            <th>Product Info</th>
            <th>Product Price</th>
            </tr>";
            // output data of each row
            while($row = $MyQuery->fetch_assoc()) 
            {
            echo "
            <tr>
            <th>".$row["pid"]."</th>
            <td>".$row["pname"]."</td>
            <td>".$row["name"]."</td>
            <td>".$row["info"]."</td>
            <td>".$row["price"]." TK</td>
            </tr>
            ";
            }
            echo "</table>";
            } 
      else 
          {
            echo "No Products";
          }
          echo "</fieldset>";
?>