<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/logout.php"); // Redirecting To Home Page
}
include "header.html";
?>


<!DOCTYPE html>
<html>
<body>
<br>
Hi,<?php echo $_SESSION["username"];?>
    <br><br><br>
    <form>Would you want to View and Update your profile? <button type="submit" class="profile" formaction="profile.php">View and Edit</button></form>
    <br>
    <form>Would you want search and view user details? <button type="submit" class="search1" formaction="searchuser.php">Search users</button></form>
    <br>
    <form>Would like to view all users? <button type="submit" name="submit"  class="search1" formaction="viewuser.php">View All Users</button></form>
    <br>
    <form>Would like to view all products? <button type="submit" name="submit"  class="search1" formaction="viewproduct.php">View All Products</button></form>
    <br>
    <form>Would you like to add a product? <button type="submit" class="register" formaction="addproduct.php">Add a product</button></form>
    <br>
    <form>Would you like to send a massage? <button type="submit"  class="search1"  formaction="massagesent.php">Send a massage</button></form>
    <br>
    <form>Would you like to show all massage? <button type="submit"  class="search1"  formaction="massageshow.php">Show massage</button></form> 
    <br>
    <form>Would you like to search any massage? <button type="submit"  class="search1"  formaction="searchmassage.php">Search any massage</button></form> 
    <br>
    <form>Would you Like to delete a any massage? <button type="submit" class="logout" formaction="massagedelete.php">Delete a massage</button></form>
    <br>
<form>Would you Like to delete a product? <button type="submit" class="logout" formaction="productdelete.php">Delete a product</button></form>
<br>

    
    <br><br><br>
    <div>
    <p id="mtext"></p>
    <br>
    <?php include "../control/4product.php" ?>
    <br>
    <br></div><br>
<form><button type="submit" class="logout" formaction="../control/logout.php">Logout</button></form>
</body>
</html>
<?php include "footer.html"; ?>

