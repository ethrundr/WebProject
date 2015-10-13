function loadDoc0() 
{
//    alert("AJAX Initiate");
    var xhttp;
    if (window.XMLHttpRequest) 
    {
        xhttp = new XMLHttpRequest();
    } 
    
    else 
    {
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
//    var xhttp = new XMLHttpRequest();
  
    xhttp.onreadystatechange = function() 
    {
        if (xhttp.readyState == 4 && xhttp.status == 200) 
        {
            document.getElementById("contentArea").innerHTML = xhttp.responseText;
        }
    }
  
    xhttp.open("GET", "tabling-home.php", true);
    xhttp.send();
//    alert("AJAX Ends, text supposed to be edited");
}

function loadDoc1() 
{
//    alert("AJAX Initiate");
    var xhttp;
    if (window.XMLHttpRequest) 
    {
        xhttp = new XMLHttpRequest();
    } 
    
    else 
    {
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
//    var xhttp = new XMLHttpRequest();
  
    xhttp.onreadystatechange = function() 
    {
        if (xhttp.readyState == 4 && xhttp.status == 200) 
        {
            document.getElementById("contentArea").innerHTML = xhttp.responseText;
        }
    }
  
    xhttp.open("GET", "tabling-sample.html", true);
    xhttp.send();
//    alert("AJAX Ends, text supposed to be edited");
}

function loadDoc2() 
{
//    alert("AJAX Initiate");
    var xhttp;
    if (window.XMLHttpRequest) 
    {
        xhttp = new XMLHttpRequest();
    } 
    
    else 
    {
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
//    var xhttp = new XMLHttpRequest();
  
    xhttp.onreadystatechange = function() 
    {
        if (xhttp.readyState == 4 && xhttp.status == 200) 
        {
            document.getElementById("contentArea").innerHTML = xhttp.responseText;
        }
    }
  
    xhttp.open("GET", "tabling-sample-2.html", true);
    xhttp.send();
//    alert("AJAX Ends, text supposed to be edited");
}

function triggerMe()
{
    alert("JS Working");
}