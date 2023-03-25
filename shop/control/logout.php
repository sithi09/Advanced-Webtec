<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
header("Location: /shop/index.php"); // Redirecting To Home Page
}
?>