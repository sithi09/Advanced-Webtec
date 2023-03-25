<?php
include('../db/db.php');
$error="";

if (isset($_POST['update'])) {
if (empty($_POST['name']) || empty($_POST['email'])) 
{
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"user",$_SESSION["username"],$_POST['name'],$_POST['email']);
if($userQuery==TRUE)
{
    echo "<div style='padding:15px; background-color:Green; color:white;'> update successful</div>"; 
}
else
{
    echo "<div style='padding:15px; background-color:Red; color:white;'> update unsuccessful</div>";    
}
$connection->CloseCon($conobj);
}
}


?>