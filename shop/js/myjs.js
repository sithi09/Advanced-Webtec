$(document).ready(function(){
    $("#desc").click(function(){
        $("h5").fadeToggle(1500);
        });
    });  

function checkusername()
{
    usernameval();
    uniqueUsername();
}

function usernameval()
{
    var username=document.getElementById('username').value;
    var patt = /^[a-z0-9-']*$/;
    var res = patt.test(username);
    if(!res || username.length<6)
    {
        document.getElementById("demousername").innerHTML="<span style='color:red;'>&#10006 At least  five lower case letters,numbers only.no spaces.</span>"; 
    }
    else
    {
        document.getElementById('demousername').innerHTML="<span style='color:green;'>&#10004 Your username is valid</span>";
    }
}

function uniqueUsername() 
{
    var username = document.getElementById("username").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() 
    {  
        if (this.readyState == 4 && this.status == 200) 
        {
            document.getElementById("mass").innerHTML = this.responseText;
        }
        else
        {
            document.getElementById("mass").innerHTML = this.status;
        }
    };
    xhttp.open("GET", "/shop/control/uniqueUsername.php?username="+username, true);
    xhttp.send();
}

function checkemail()
{
    emailval();
    uniqueEmail();
}

function emailval()
{
    var email=document.getElementById('email').value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    if(!res)
    {
        document.getElementById("demoemail").innerHTML="<span style='color:red;'>&#10006 Email format is not correct</span>"; 
    }
    else
    {
        document.getElementById('demoemail').innerHTML="<span style='color:green;'>&#10004 Your email is valid</span>";
    }
}

function uniqueEmail() 
{
    var email = document.getElementById("email").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() 
    {  
        if (this.readyState == 4 && this.status == 200) 
        {
            document.getElementById("massa").innerHTML = this.responseText;
        }
        else
        {
            document.getElementById("massa").innerHTML = this.status;
        }
    };
    xhttp.open("GET", "/shop/control/uniqueEmail.php?email="+email, true);
    xhttp.send();
}



function nameval()
{
    var name=document.getElementById('name').value;
    var patt = /^[a-zA-Z-' ]*$/;
    var res = patt.test(name);
    if(!res || name.length<4)
    {
        document.getElementById("demoname").innerHTML="<span style='color:red;'>&#10006 Name can have only white space and letters and must be more than 3 letters</span>"; 
    }
    else
    {
        document.getElementById('demoname').innerHTML="<span style='color:green;'>&#10004 Your name is valid</span>";
    }
}

function passwordval()
{
    var password=document.getElementById('password').value;
    var patt1 = /^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[a-zA-Z!#$@^%&? "])[a-zA-Z0-9!#$@^%&?]{8,20}$/;
    var res1 = patt1.test(password);
    if(!res1)
    {
        document.getElementById('demopassword').innerHTML="<span style='color:red;'>&#10006 Password must contain one digit, one uppercase, one lowercase,one special character and length must be more than 8 to 20</span>"; 
    }
    else
    {
        document.getElementById('demopassword').innerHTML="<span style='color:green;'>&#10004 Your password is valid</span>";
    }
}

function validateform()
{
    emptyval();
    roleval();
}

function emptyval()
{
    var name = document.getElementById('name').value;
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    
    if(name == "" || username == "" || email == "" || password == "")
    {
        document.getElementById('massage').innerHTML="<span style='color:red;'>&#10006 please insert all of the inputs</span>";
        return false;
    }
}

function roleval()
{
    var a = document.forms.role;
    for(i=0; i<a.length; i++)
    {
    if(a[i].checked==true)
    return true;
    }
    document.getElementById("massage1").innerHTML="<span style='color:red;'>&#10006 please select a radio button</span>";
    return false;
}


function showmyuser() 
{
    var uname=  document.getElementById("uname").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() 
    {  
        if (this.readyState == 4 && this.status == 200) 
        {
            document.getElementById("mytext").innerHTML = this.responseText;
        }
        else
        {
            document.getElementById("mytext").innerHTML = this.status;
        }
    };
    xhttp.open("POST", "/shop/control/getuser.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("uname="+uname);
}


function showmyproduct() 
{
    var pname=  document.getElementById("pname").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() 
    {  
        if (this.readyState == 4 && this.status == 200) 
        {
            document.getElementById("mtext").innerHTML = this.responseText;
        }
        else
        {
            document.getElementById("mtext").innerHTML = this.status;
        }
    };
    xhttp.open("POST", "/shop/control/getproduct.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("pname="+pname);
}
function showmymassage() 
{
    var pname=  document.getElementById("mname").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() 
    {  
        if (this.readyState == 4 && this.status == 200) 
        {
            document.getElementById("mtext").innerHTML = this.responseText;
        }
        else
        {
            document.getElementById("mtext").innerHTML = this.status;
        }
    };
    xhttp.open("POST", "/shop/control/getmassage.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("mname="+mname);
}
