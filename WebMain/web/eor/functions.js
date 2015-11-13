function loadPhoto() 
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
            document.getElementById("photoArea").innerHTML = xhttp.responseText;
        }
    }
  
    xhttp.open("GET", "photo-content.php", true);
    xhttp.send();
}

function loadUploader() 
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
            document.getElementById("photoArea").innerHTML = xhttp.responseText;
        }
    }
  
    xhttp.open("GET", "uploader.php", true);
    xhttp.send();
}