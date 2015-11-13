function loadSlider() 
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
            document.getElementById("mainSlider").innerHTML = xhttp.responseText;
        }
    }
  
    xhttp.open("GET", "slider-content.html", true);
    xhttp.send();
}