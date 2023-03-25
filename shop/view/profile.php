<?php
session_start(); 

include "header1.html";
include "../control/updatecheck.php";

if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hi <?php echo $_SESSION["username"];?>
<br><br>

<?php
$name=$email="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"user",$_SESSION["username"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {
  echo "<form action='' method='post'>";
  // output data of each row
  while($row = $userQuery->fetch_assoc()) 
  {
    echo "Name : <input type='text' name='name' value=".$row["name"]." > <br>";
    echo "email : <input type='text' name='email' value=".$row["email"]." ><br>";
  }
  
  echo   "<br><input name='update' class='submit' type='submit' value='Update'>";
  echo "<input name='reset' class='logout' type='reset' value='Reset'>";
  
} else {
  echo "0 results";
}


?>

<br><br>
<form><button type="submit" class="dashboard" formaction="dashboard.php">Go Back</button></form>
<br>
<br>
<form><button type="submit" class="logout" formaction="../control/logout.php">Logout</button></form>
<br>

</body>
</html>
<?php include "footer.html";?>