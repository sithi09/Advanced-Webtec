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
    <title>Add product</title>
    <script src="../js/myjs1.js"></script>
</head>
<body>
      
      <h1>Add A Product</h1>
        
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  onsubmit="return emptyval()" method="POST" name="forms">
        <div>
        Enter product name: <input type="text" name="pname" id="pname" onkeyup="checkpname()" >
        <p id="demopname"></p><p id="mas"></p>
        
        <br>
        Enter product info: <input type="text" name="info" id="info" onkeyup="infoval()"><p id="demoinfo"></p>
        <br>
        Enter product price: <input type="number" name="price" id="price" onkeyup="priceval()"><br><p id="demoprice"></p>
        <br>
        <input type="submit" class="submit" name="submit" value="SUBMIT">
        <input type="reset" class="reset" value="RESET">
        <br><br>
        <?php include "../control/addproductcheck.php"; ?>
        </div>
    </form>
    <br><?php echo $error; ?>
    <br><br>
    <form><button type="submit" class="dashboard" formaction="dashboard.php">Go Back</button></form>
    <br><br>
    <form><button type="submit" class="logout" formaction="../control/logout.php">Logout</button></form>
    <br>
    </div>
</body>
</html>
<?php include "footer.html"; ?>