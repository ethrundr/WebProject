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
  
    xhttp.open("POST", url , true);
    xhttp.send();
    
    var data = $('form').serialize();
    $.post("doUpload.php", data);
}

function fetchImage() 
{
    var contNum = document.getElementById("contNum").value;
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
            document.getElementById("updImgLoc").innerHTML = xhttp.responseText;
        }
    }
    
    var url = "imagehandler.php?num=" + contNum;
  
    xhttp.open("GET", url , true);
    xhttp.send();
}