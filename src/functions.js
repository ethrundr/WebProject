function loadDoc() 
{
    var xhttp;
    if (window.XMLHttpRequest) 
    {
        xhttp = new XMLHttpRequest();
    } 
    
    else 
    {
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
  
    xhttp.onreadystatechange = function() 
    {
        if (xhttp.readyState == 4 && xhttp.status == 200) 
        {
            cfunc(xhttp);
        }
    }
  
    xhttp.open("GET", "ajax_info.txt", true);
    xhttp.send();
}


function myFunction(xhttp) 
{
    document.getElementById("demo").innerHTML = xhttp.responseText;
}