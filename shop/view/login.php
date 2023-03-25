<?php
include('../control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: dashboard.php");
}
?>
<?php include "header1.html"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<br><br><br><br>
    <h2>Login Form</h2>
    <form action="" method="post">
        <div><br><br>
        Username:<input type="text" name="username" placeholder="Enter your username"><br><br>
        Password:<input type="password" name="password" placeholder="Enter your password"><br><br>
        <input name="submit" type="submit" class="submit" value="LOGIN">
        <input name="reset" type="reset" class="reset" value="RESET">
        </div>
    </form>
    <br><br><br><br><br>
    <form>Join us instead <button type="submit" class="register" formaction="register.php">Register</button></form>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
</body>
</html>
<?php include "footer.html"; ?>