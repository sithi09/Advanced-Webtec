<?php
include('../db/db.php');
$error="";
if (isset($_POST['delete'])) {
if (empty($_POST['pname'])) 
{
$error = "input given is invalid";
}
else
{
    $name=$_SESSION['username'];
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->DeleteProduct($conobj,"product",$_POST['pname'],$name);
if($userQuery==TRUE)
{
    echo "<div style='padding:15px; background-color:Green; color:white;'>successfully deleted</div>"; 
}
else
{
    echo "<div style='padding:15px; background-color:Red; color:white;'>Could Not Delete</div>";    
}
$connection->CloseCon($conobj);
}
}


?>