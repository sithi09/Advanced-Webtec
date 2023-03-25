<?php 
    include "header1.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src="../js/myjs.js"></script>
</head>
<body>
      
      <h1>Registration form </h1>
        <?php include "../control/results.php"; ?>
        
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  onsubmit="return validateform()" method="POST" name="forms">
        <div>
        Enter your name: <input type="text" name="name" onkeyup="nameval()"  id="name"><p id="demoname"></p><?php echo $validatename; ?>
        <br>
        Enter your username: <input type="text" name="username"  onkeyup="checkusername()" id="username">
        <p id="mass"></p>
        <p id="demousername"></p> <?php echo $validateusername; ?>
        <br>
        Enter your email: <input type="text" name="email" id="email" onkeyup="checkemail()" ><p id="massa"></p><p id="demoemail"></p> <?php echo $validateemail; ?>
        <br>
        Enter your password: <input type="password" name="password" id="password" onkeyup="passwordval()"><p id="demopassword"></p> <?php echo $validatepassword; ?>
        <br>
        Please select your Role:
        <input type="radio" id="admin" name="role" value="admin">
        <label for="admin">Admin</label>
        <input type="radio" id="buyer" name="role" value="buyer">
        <label for="buyer">Buyer</label>
        <input type="radio" id="seller" name="role" value="seller">
        <label for="seller">Seller</label><br>
        <br><p id="massage1"></p>
        <p id="massage"></p> 
        <?php echo $validateradio; ?>
        <br>
        <input type="submit" class="submit" name="submit" value="SUBMIT">
        <input type="reset" class="reset" value="RESET">
        <br><br>
        <?php include "../control/registrationcheck.php"; ?>
        </div>
    </form>
    <br><?php echo $error; ?>
    <br><br><br>
    <form>Have an account already? <button type='submit' class=login formaction='login.php'>Login</button></form>
    <br>
    
    <br>        
    </div>
</body>
</html>
<?php include "footer.html"; ?>