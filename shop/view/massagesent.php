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
    <title>Sent A Massage</title>
    <script src="../js/myjs1.js"></script>
</head>
<body>
      
      <h1>Sent A Massage</h1>
        
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  onsubmit="return emptyval()" method="POST" name="forms">
        <div>
        Hi,<?php echo $_SESSION["username"];?>
        <br>
        Enter rusername: <input type="text" name="rusername" id="rusername" onkeyup="rusernameval()" >
        <p id="demorusername"></p>
        <br>
        Enter Text massage: <input type="text" name="mtext" id="mtext" onkeyup="mtextval()" >
        <p id="demomtext"></p>
        <br>
        
        <input type="submit" class="submit" name="submit" value="SUBMIT">
        <input type="reset" class="reset" value="RESET">
        <br><br>
        <?php include "../control/massagesentcheck.php"; ?>
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