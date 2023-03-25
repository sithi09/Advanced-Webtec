<?php
include ("../db/db.php");

if(empty($_REQUEST["pname"]))
{
    echo "<span style='color:red;'>&#10006 Enter a product name </span>";
}
else
{
    $connection = new db();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->CheckUnique2($conobj,"product",$_REQUEST["pname"]);

    if($userQuery->num_rows > 0) 
    {
        echo "<span style='color:red;'>&#10006 Product Name Already Exists</span>";    
    }
    else
    {
        echo "<span style='color:green;'>&#10004 Product name is Unique</span>";
    }

$connection->CloseCon($conobj);
}
?>