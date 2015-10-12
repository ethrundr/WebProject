function loadDoc() 
{
//    alert("AJAX Working");
//    var xhttp;
//    if (window.XMLHttpRequest) 
//    {
//        xhttp = new XMLHttpRequest();
//    } 
//    
//    else 
//    {
//        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
//    }
    var xhttp = new XMLHttpRequest();
  
    xhttp.onreadystatechange = function() 
    {
        if (xhttp.readyState == 4 && xhttp.status == 200) 
        {
            document.getElementById("contentArea").innerHTML = xhttp.responseText;
        }
    }
  
    xhttp.open("GET", "ajax_info.txt", true);
    xhttp.send();
}