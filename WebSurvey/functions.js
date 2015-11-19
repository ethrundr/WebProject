function fetchImage() 
{
    var contNum = document.getElementById("contNum").value;
    var editedElem = document.getElementById("surveyImage");
    var editedImg = document.getElementById("linkImg");
    editedImg.src = " ";
    editedElem.value = " ";
    
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

function selectedSurvey(index)
{
    var elID = "survImg" + index;
    var selImg = document.getElementById(elID).value;
    var editedElem = document.getElementById("surveyImage");
    var editedImg = document.getElementById("linkImg");
//    alert(selImg);
    editedElem.value = selImg;
    editedImg.src = "upload/" + selImg;
    
//    var elID = "survImg" + index;
//    var selImg = document.getElementById(elID).getAttribute("src");
//    var imgSrc = selImg.split("\\");
//    alert(selImg+" - "+imgSrc[1]);
//    editedElem.value = imgSrc[1];
}

function deleteEntry(index) 
{
    var elID1 = "contNumHid" + index;
    var elID2 = "upTime" + index;
    var elID3 = "survImg" + index;
    var conNum = document.getElementById(elID1).value;
    var upTime = document.getElementById(elID2).value;
    var imgVal = document.getElementById(elID3).value;
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
        }
    }
    
    url = "delete.php?num=" + conNum + "&time=" + upTime + "&img=" + imgVal;
    
    xhttp.open("GET", url , true);
    xhttp.send();
    this.fetchImage();
    alert("Entry Deleted Successfully");
}