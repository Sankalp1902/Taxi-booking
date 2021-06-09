function checkExist()
{
                var xmlhttp = new XMLHttpRequest();
                var username = document.forms["regF"]["username"].value;
                var url = "checkexist.jsp?username=" + username;
                xmlhttp.onreadystatechange = function()
                {
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("isE").style.color = "red";
                        document.getElementById("isE").innerHTML = xmlhttp.responseText;
                    }
                };
            try
            {
                xmlhttp.open("GET",url,true);
                xmlhttp.send();
            }
            catch(e){alert("unable to connect to server");
            }
}
function validate()
    {
	if(regF.password.value==regF.confirm_Password.value)
        { 
            var xmlhttp = new XMLHttpRequest();
                var username = document.forms["regF"]["username"].value;
                var url = "checkexist.jsp?username=" + username;
                xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
                {
                    if(xmlhttp.responseText == "")
                        return true;                       
                    else                                                    
                    {
                        alert("User Already exixts! Try another username!"); 
                        return false;
                    }                  
                    document.getElementById("isE").innerHTML = xmlhttp.responseText;
                }                      
                };
                try{
                xmlhttp.open("GET",url,true);
                xmlhttp.send();
            }catch(e){alert("unable to connect to server");
            }
         }
	else
	{
		alert("Password and Confirm Password must be same!");
		return false;
	}
    }