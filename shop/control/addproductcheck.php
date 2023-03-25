<?php
include('../db/db.php');

$error ="";

//storing session data
if(isset($_POST['submit']))
{
    if (empty($_POST['pname']) ||  empty($_POST['info']) || empty($_POST['price']))
        {
            $error="<span style='padding:5px; background-color:Red; color:white;'>Please insert all data</span>";
        }
    else{
            $pname =  $_POST['pname'];
            $name =$_SESSION['username'];
            $info = $_POST["info"];
            $price = $_POST['price'];
            $connection = new db();
            $conobj=$connection->OpenCon();//connection object
            $userQuery=$connection->InsertProduct($conobj,"product",$pname,$name,$info,$price);
        }
}
?>