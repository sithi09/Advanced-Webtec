<?php
include('../db/db.php');
$error="";
if (isset($_POST['delete'])) {
if (empty($_POST['mid'])) 
{
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->DeleteUser($conobj,"user",$_SESSION['username'],$mid);
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