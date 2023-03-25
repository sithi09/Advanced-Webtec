<?php
include('../db/db.php');

$error ="";

//storing session data
if(isset($_POST['submit']))
{
    if (empty($_POST['name']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['role']))
        {
            $error="<span style='padding:5px; background-color:Red; color:white;'>Please insert all data</span>";
        }
    else{
            $name =  $_POST['name'];
            $username =  $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST["password"];
            $role = $_POST['role'];
            $connection = new db();
            $conobj=$connection->OpenCon();//connection object
            $userQuery=$connection->InsertUser($conobj,"user",$name,$username,$email,$password,$role);
        }
}
?>