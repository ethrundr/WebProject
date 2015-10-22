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
  
    xhttp.open("GET", "content-dm-in-prototype.html", true);
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
  
    xhttp.open("GET", "content-dm-out-prototype.html", true);
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
  
    xhttp.open("GET", "content-ds-prototype.html", true);
    xhttp.send();
//    alert("AJAX Ends, text supposed to be edited");
}

function loadDoc3() 
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
  
    xhttp.open("GET", "content-sc-prototype.html", true);
    xhttp.send();
//    alert("AJAX Ends, text supposed to be edited");
}

function loadDoc4() 
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
  
    xhttp.open("GET", "content-cl-prototype.html", true);
    xhttp.send();
//    alert("AJAX Ends, text supposed to be edited");
}

function loadSample(sampleType) 
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
  
    if(sampleType == 1)
    {
        xhttp.open("GET", "content-sample-dmin.php", true);
    }
    
    else if(sampleType == 2)
    {
        xhttp.open("GET", "content-sample-dmout.php", true);
    }
    
    else if(sampleType == 3)
    {
        xhttp.open("GET", "content-sample-ds.php", true);
    }
    
    else if(sampleType == 4)
    {
        xhttp.open("GET", "content-sample-sc.php", true);
    }
    
    else if(sampleType == 5)
    {
        xhttp.open("GET", "content-sample-cl.php", true);
    }
    
    else
    {
        xhttp.open("GET", "content-sample.html", true);
    }
    
    xhttp.send();
//    alert("AJAX Ends, text supposed to be edited");
}

function loadSampleold(sampleType) 
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
  
    if(sampleType == 1)
    {
        xhttp.open("GET", "content-sample-dmin.html", true);
    }
    
    else if(sampleType == 2)
    {
        xhttp.open("GET", "content-sample-dmout.html", true);
    }
    
    else if(sampleType == 3)
    {
        xhttp.open("GET", "content-sample-ds.html", true);
    }
    
    else if(sampleType == 4)
    {
        xhttp.open("GET", "content-sample-sc.html", true);
    }
    
    else if(sampleType == 5)
    {
        xhttp.open("GET", "content-sample-cl.html", true);
    }
    
    else
    {
        xhttp.open("GET", "content-sample.html", true);
    }
    
    xhttp.send();
//    alert("AJAX Ends, text supposed to be edited");
}

function loadCase1() 
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
  
    xhttp.open("GET", "home-case-1.html", true);
    xhttp.send();
//    alert("AJAX Ends, text supposed to be edited");
}

function loadCase2() 
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
  
    xhttp.open("GET", "home-case-2.html", true);
    xhttp.send();
//    alert("AJAX Ends, text supposed to be edited");
}

function updateField(contID) 
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
            document.getElementById("updateArea").innerHTML = xhttp.responseText;
        }
    }
    
    var url = "content-sample-cl-field.php?contid="+contID;
  
    xhttp.open("GET", url, true);
    
    xhttp.send();
//    alert("AJAX Ends, text supposed to be edited");
}

function updateFieldold(contID) 
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
            document.getElementById("updateArea").innerHTML = xhttp.responseText;
        }
    }
    
   if(contID == "TEST0000001")
   {
       xhttp.open("GET", "content-sample-cl-01.html", true);
   }
    
   else if(contID == "TEST0000002")
   {
       xhttp.open("GET", "content-sample-cl-02.html", true);
   }
    
   else
   {
       xhttp.open("GET", "content-sample-cl-error.html", true);
   }
    
    xhttp.send();
//    alert("AJAX Ends, text supposed to be edited");
}

function loadErrMsg()
{
    var errCd = document.getElementById("status").value;
    //alert(errCd);
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
            document.getElementById("errMsg").innerHTML = xhttp.responseText;
        }
    }
    
    var url = "codehandler.php?status="+errCd;
  
    xhttp.open("GET", url, true);   
    xhttp.send();
}

function triggerMe()
{
    alert("JS Working");
}