<?php
include ("../db/db.php");

if(empty($_REQUEST["email"]))
{
    echo "<span style='color:red;'>&#10006 Enter an email</span>";
}
else
{
    $connection = new db();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->CheckUnique1($conobj,"user",$_REQUEST["email"]);

    if($userQuery->num_rows > 0) 
    {
        echo "<span style='color:red;'>&#10006 Email Already Exists</span>";    
    }
    else
    {
        echo "<span style='color:green;'>&#10004 Email is Unique</span>";
    }

$connection->CloseCon($conobj);
}
?>