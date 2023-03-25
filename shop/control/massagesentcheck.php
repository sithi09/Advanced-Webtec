<?php
include('../db/db.php');

$error ="";

//storing session data
if(isset($_POST['submit']))
{
    if ( empty($_POST['rusername']) ||empty($_POST['mtext']) )
        {
            $error="<span style='padding:5px; background-color:Red; color:white;'>Please insert all data</span>";
        }
    else{
            $susername =  $_SESSION['username'];
            $rusername =  $_POST['rusername'];
            $mtext = $_POST['mtext'];
            
           
            $connection = new db();
            $conobj=$connection->OpenCon();//connection object
            $userQuery=$connection->InsertMassage($conobj,"massage",$susername,$rusername,$mtext);
        }
}
?>