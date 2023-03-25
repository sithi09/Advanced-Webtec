<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/logout.php"); // Redirecting To Home Page
}
include "header1.html";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/myjs.js"></script>
</head>
<body>
<?php 
    echo "
    <form method='post'>
    <br><br><br>
    <label>Delete a Product by the product name</label><br>
    <input type='text' id='pname' name='pname'><br>
    <input class='logout' name='delete' id='delete' type='submit' value='delete'>
    </form>";
    include "../control/deleteproduct.php";

 ?>
    <br><br><br><br>
<form><button type="submit" class="dashboard" formaction="dashboard.php">Go Back</button></form>
<br><br><br>
<form><button type="submit" class="logout" formaction="../control/logout.php">Logout</button></form>
<br><br><br>
</body>
</html>

<?php include "footer.html"; ?>