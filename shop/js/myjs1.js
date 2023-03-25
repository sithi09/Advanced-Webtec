function checkpname()
{
    pnameval(); 
    uniquePname();
}

function pnameval()
{
    var pname=document.getElementById('pname').value;
    var patt = /^[a-zA-Z-' ]*$/;
    var res = patt.test(pname);
    if(!res || pname.length<6)
    {
        document.getElementById("demopname").innerHTML="<span style='color:red;'>&#10006 Product name can have only white space and letters and must be more than 6 letters</span>"; 
    }
    else
    {
        document.getElementById('demopname').innerHTML="<span style='color:green;'>&#10004 Valid product name</span>";
    }
}

function uniquePname() 
{
    var email = document.getElementById("pname").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() 
    {  
        if (this.readyState == 4 && this.status == 200) 
        {
            document.getElementById("mas").innerHTML = this.responseText;
        }
        else
        {
            document.getElementById("mas").innerHTML = this.status;
        }
    };
    xhttp.open("GET", "/shop/control/uniquePname.php?pname="+pname, true);
    xhttp.send();
}


function infoval()
{
    var info=document.getElementById('info').value;
    var patt = /^[a-zA-Z0-9-' ]*$/;
    var res = patt.test(info);
    if(!res || info.length<10)
    {
        document.getElementById("demoinfo").innerHTML="<span style='color:red;'>&#10006 Info Can have only letters, numbers, spaces and must be more than 10 letters</span>"; 
    }
    else
    {
        document.getElementById('demoinfo').innerHTML="<span style='color:green;'>&#10004 Valid info</span>";
    }
}

function priceval()
{
    var price=document.getElementById('price').value;
    var patt = /^[0-9-' ]*$/;
    var res = patt.test(price);
    if(!res || price.length==0)
    {
        document.getElementById("demoprice").innerHTML="<span style='color:red;'>&#10006 Must have a price</span>"; 
    }
    else
    {
        document.getElementById('demoprice').innerHTML="<span style='color:green;'>&#10004 Valid price</span>";
    }
}


function emptyval()
{
    var pname = document.getElementById('pname').value;
   
    var info = document.getElementById('info').value;
    var price = document.getElementById('price').value;
    
    if(pname == "" ||  info == "" || price == "")
    {
        document.getElementById('massage').innerHTML="<span style='color:red;'>&#10006 please insert all of the inputs</span>";
        return false;
    }
}



