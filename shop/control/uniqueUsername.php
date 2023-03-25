<?php
include ("../db/db.php");

if(empty($_REQUEST["username"]))
{
    echo "<span style='color:red;'>&#10006 Enter an username</span>";
}
else
{
    $connection = new db();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->CheckUnique($conobj,"user",$_REQUEST["username"]);

    if($userQuery->num_rows > 0) 
    {
        echo "<span style='color:red;'>&#10006 Username Already Exists</span>";    
    }
    else
    {
        echo "<span style='color:green;'>&#10004 Username is Unique</span>";
    }

$connection->CloseCon($conobj);
}
?>