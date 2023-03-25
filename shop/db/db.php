<?php
class db
    {
    function OpenCon()
        {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "mydb";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connection failed: %s\n". $conn -> error);
        
        return $conn;
        }
    function CheckUser($conn,$table,$username,$password)
        {
        $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
        return $result;
        }

       

    function Search($conn,$table,$pname)
        {
        $result = $conn->query("SELECT * FROM $table WHERE pid='$pname' OR pname='$pname' OR name='$pname' OR price='$pname'");
        return $result;
        }

    function GetUserByUname($conn,$table,$uname)
        {
        $result = $conn->query("SELECT * FROM  $table WHERE username Like '%$uname%' OR name Like '%$uname%' OR email='$uname' OR role='$uname'");
        return $result;
        }

    function GetProductByPname($conn,$table,$pname)
        {
        $result = $conn->query("SELECT * FROM $table WHERE pid='$pname' OR pname Like '%$pname%' OR name Like '%$pname%' OR price='$pname'");
        return $result;
        }

    function CheckUnique($conn,$table,$username)
        {
        $result= $conn->query("Select * FROM ".$table." WHERE username='".$username."'");
        return $result;
        }
    
    function CheckUnique1($conn,$table,$email)
        {
        $result= $conn->query("Select * FROM ".$table." WHERE email='".$email."'");
        return $result;
        }   
          
    function CheckUnique2($conn,$table,$pname)
    {
    $result= $conn->query("Select * FROM ".$table." WHERE pname='".$pname."'");
    return $result;
    }     

    function ShowAllUser($conn,$table)
        {
        $result = $conn->query("SELECT username,name,email,password,role FROM ".$table."");
        return $result;
        }
        function ShowAllMassage($conn,$table,$rusername)
        {
        $result = $conn->query("SELECT * FROM ".$table." WHERE rusername='$rusername'" );
        return $result;
        }
        function DeleteMassage($conn,$table,$rusername, $mid )
        {
        $result= $conn->query("DELETE FROM massage rusername='$rusername' and mid='$mid' ");
        return  $result;
        }

        function DeleteProduct($conn,$table,$pname,$name)
{
$result= $conn->query("DELETE FROM product WHERE pname='$pname' and name='$name' ");
return $result;
}
        
    function ShowAllProduct($conn,$table,$name)
        {
        $result = $conn->query("SELECT * FROM ".$table." WHERE name='$name'");
        return $result;
        }

    function Show4Product($conn,$table)
        {
        $result = $conn->query("SELECT * FROM ".$table." Limit 4");
        return $result;
        }
        


    function UpdateUser($conn,$table,$username,$name,$email)
        {
        $result= $conn->query("UPDATE $table SET name='$name', email='$email' WHERE username='$username'");
        return  $result;
        }
         

    function InsertUser($conn,$table,$name,$username,$email,$password,$role)  
        {              
        $sql= "INSERT INTO user (name, username, email, password, role) VALUES ('$name', '$username', '$email', '$password', '$role')";
        if($conn->query($sql)===True)
        {
            echo "<span style='padding:5px; background-color:Green; color:white;'>You have successfully Registered</span>";
            return  $sql;
        }
        else
        {
            echo "Error:".$sql. "<br>".$conn->error;
        }
        
        }




        function InsertMassage($conn,$table,$susername,$rusername,$mtext)  
        {              
        $sql= "INSERT INTO massage ( susername,rusername,mtext , mcr) VALUES ('$susername', '$rusername', '$mtext',CURRENT_TIMESTAMP)";
        if($conn->query($sql)===True)
        {
            echo "<span style='padding:5px; background-color:Green; color:white;'>You have successfully sent a massage </span>";
            return  $sql;
        }
        else
        {
            echo "Error:".$sql. "<br>".$conn->error;
        }
        
        }

    function InsertProduct($conn,$table,$pname,$name,$info,$price)  
        {              
        $sql= "INSERT INTO product (pname, name, info, price) VALUES ('$pname', '$name', '$info', '$price')";
        if($conn->query($sql)===True)
        {
            echo "<span style='padding:5px; background-color:Green; color:white;'>You have successfully added a product</span>";
            return  $sql;
        }
        else
        {
            echo "Error:".$sql. "<br>".$conn->error;
        }
        
        }



    function CloseCon($conn)
        {
        $conn -> close();
        }
    }
?>