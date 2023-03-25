<?php include "header.html"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="quote">
        <h1>Welcome To My Shop</h1>
    </div>
        <form>Become a member <button type="submit" class="register" formaction="register.php">Register</button></form>
        <br>
        <form>Already a member <button type="submit" class="login" formaction="login.php">Login</button></form>
    <br>
    <div class="body">
        <p id="mtext"></p>
    <br>
    <?php include "../control/4product.php" ?>
    </div>
    <br><br><br><br>
</body>
</html>
<?php include "footer.html"; ?>