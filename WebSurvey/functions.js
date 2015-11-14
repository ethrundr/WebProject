function condUpd() 
{
    var condVal = document.getElementById("selCond").value;
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
            document.getElementById("fileUpd").innerHTML = xhttp.responseText;
        }
    }
    
    var url = "selector.php?cond=" + condVal;
  
    xhttp.open("GET", url , true);
    xhttp.send();
}