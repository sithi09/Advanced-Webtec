<?php
$validatename="";
$validateusername="";
$validateemail="";
$validatepassword="";
$validateradio="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST["name"];
$username=$_REQUEST["username"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
if(empty($name) || (strlen($name)<3) || !preg_match("/^[a-zA-Z-' ]*$/",$name))
    {
    $validatename= "<span style='color:red;'>&#10006 Must enter a valid name with only letters and white spaces</span>";
    }
else
    {
    $validatename= "<span style='color:green;'>&#10004 your name is valid</span>";
    }

if(empty($username) || (strlen($username)<5) || !preg_match("/^[a-z0-9-']*$/",$username))
    {
    $validateusername= "<span style='color:red;'>&#10006 Must enter a longer username with only lowercase letters and numbers</span>";
    }
else
    {
    $validateusername= "<span style='color:green;'>&#10004 your username is valid</span>";
    }

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
    $validateemail="<span style='color:red;'>&#10006 you must enter a valid email</span>";
    }
else
    {
    $validateemail= "<span style='color:green;'>&#10004 your email is valid</span>";
    }

if(empty($password) || !preg_match("#.*^(?=.{5,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password))
    {
    $validatepassword="<span style='color:red;'>&#10006 Password must be at least 8 characters in length and have at least one number, one upper case letter, one lower case letter and one special character.</span>";
    }
else
    {
    $validatepassword= "<span style='color:green;'>&#10004 your password is strong.</span>";
    }

if(isset($_REQUEST["role"]))
    {
        $validateradio="<span style='color:green;'>&#10004 You want to be ".$_REQUEST["role"]."</span>";
    }
else{
        $validateradio= "<span style='color:red;'>&#10006 please select at least one role</span>";
    }    
}
?>