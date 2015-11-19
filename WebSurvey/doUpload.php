<?php    
 include "db.php";
//define a maxim size for the uploaded images in Kb
 define ("MAX_SIZE","1000"); 

//This function reads the extension of the file. It is used to determine if the
// file  is an image by checking the extension.
 function getExtension($str) 
 {
     $i = strrpos($str,".");
     if (!$i) 
     { 
         return ""; 
     }

     $l = strlen($str) - $i;
     $ext = substr($str,$i+1,$l);
     return $ext;
 }

//This variable is used as a flag. The value is initialized with 0 (meaning no 
// error  found)  
//and it will be changed to 1 if an errro occures.  
//If the error occures the file will not be uploaded.
 $errors=0;
//checks if the form has been submitted
 if(isset($_POST['Submit'])) 
 {
 	//reads the name of the file the user submitted for uploading
	if(!isset($_POST['containerNumber'])) 
    {
        $errors=1;
    }
     
    $image="";
    $queryOpt = 1; //Insert New Entry
    $imgSurv = $_FILES['imageSurvey']['name'];
    $imgRepr = $_FILES['imageRepair']['name'];
    $linkImage = $_POST['surveyImage'];
 	
    if($imgSurv != "") 
    { 
        $image=$imgSurv;
    }
 	
    else if($imgRepr != "") 
    { 
        if($linkImage != NULL) 
        {
            $plainName = explode(".",$linkImage);
            $extension = getExtension($linkImage);
            $extension = strtolower($extension);
            $linkImage = $plainName[0].".".$extension;
            
            $upImg = explode("-",$linkImage);
            $extracted = $upImg[0].'-'.$upImg[1];
            
            $queryOpt = 2; //Update Old Entry
            $image=$imgRepr;
        }
        
        else
        {
            echo "<script type=\"text/javascript\">alert(\"Please Choose The Survey Image First\")</script>";
            $errors=1;
        }
    }
     
    else
    {
        echo "<script type=\"text/javascript\">alert(\"No Image To Be Uploaded\")</script>";
        $errors=1;
    }
     
 	//if it is not empty
 	if($image && $errors == 0) 
 	{
 	    //get the original name of the file from the clients machine
 		if($imgSurv) 
        { 
            $filename = stripslashes($_FILES['imageSurvey']['name']);
        }
 	
        if($imgRepr) 
        { 
            $filename = stripslashes($_FILES['imageRepair']['name']);
        }
 	    //get the extension of the file in a lower case format
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
 	    //if it is not a known extension, we will suppose it is an error and 
        // will not  upload the file,  
	    //otherwise we will do more tests
        if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
 		{
		   //print error message
 			echo "<script type=\"text/javascript\">alert(\"Unknown extension! (only jpg, jpeg, gif, png format will be accepted)\")</script>";
//            echo '<h1>Unknown extension! (only jpg, jpeg, gif, png format will be accepted)</h1>';
 			$errors=1;
 		}
        
 		else
 		{
            //get the size of the image in bytes
            //$_FILES['image']['tmp_name'] is the temporary filename of the file
            //in which the uploaded file was stored on the server
            if($imgSurv) 
            { 
                $size = filesize($_FILES['imageSurvey']['tmp_name']);
            }
 	
            if($imgRepr) 
            { 
                $size = filesize($_FILES['imageRepair']['tmp_name']);
            }
           //compare the size with the maxim size we defined and print error if bigger
            if ($size > MAX_SIZE*1024)
            {
               echo "<script type=\"text/javascript\">alert(\"You have exceeded the size limit!\")</script>";
//	           echo '<h1>You have exceeded the size limit!</h1>';
	           $errors=1;
            }

            //we will give an unique name, for example the time in unix time format
            if($imgSurv)
            {
                $image_name = $_POST['containerNumber'].'-'.time().'-1.'.$extension;
            }
            
            else if($imgRepr)
            {
//                $image_name = $_POST['containerNumber'].'-'.time().'-0.'.$extension;
                $image_name = $extracted.'-0.'.$extension;
                if(file_exists($image_name))
                {
                    unlink($image_name);
                }
            }
           //the new name will be containing the full path where will be stored (images folder)
            $newname = "upload/".$image_name;
           //we verify if the image has been uploaded, and print error instead
		    if ($errors==0) 
            {
              if($imgSurv) 
              { 
                $copied = copy($_FILES['imageSurvey']['tmp_name'], $newname);
              }
 	
              if($imgRepr) 
              { 
                $copied = copy($_FILES['imageRepair']['tmp_name'], $newname);
              }
                
                
              if (!$copied) 
              {
 	             echo "<script type=\"text/javascript\">alert(\"Copy unsuccessful!\")</script>";
//                 echo '<h1>Copy unsuccessful!</h1>';
	             $errors=1;
              }
           }
        }
    }
 }

//If no errors registred, print the success message
 if(isset($_POST['Submit']) && !$errors && $queryOpt == 1) 
 {
    $selectedDB = mysql_select_db("asky9955_syscon", $dbhandle);  
    $SQL="INSERT INTO loguploadsurvey(containerNumber,folderSaved,whenUpload,condRemark) ";
     $SQL=$SQL."VALUES('".$_POST['containerNumber']."','".$image_name."','".date('Y-m-d H:i:s')."','".$_POST['remarks']."')";
	$result=mysql_query($SQL, $dbhandle);
	
	echo "<script type=\"text/javascript\">alert(\"File Uploaded Successfully\")</script>";
//     echo "<h1>File Uploaded Successfully</h1>";
     
 }

 else if(isset($_POST['Submit']) && !$errors && $queryOpt == 2) 
 {
    $selectedDB = mysql_select_db("asky9955_syscon", $dbhandle);  
    $SQL="UPDATE loguploadsurvey SET folderSaved2='".$image_name."', whenUpload2='".date('Y-m-d H:i:s')."' WHERE containerNumber='".$_POST['containerNumber']."' AND folderSaved='".$linkImage."'";
     
	$result=mysql_query($SQL, $dbhandle);
	
	echo "<script type=\"text/javascript\">alert(\"File Uploaded Successfully\")</script>";
//     echo "<h1>File Uploaded Successfully</h1>";
 }

 else if ($errors)
 {
	echo "<script type=\"text/javascript\">alert(\"Upload Error!\")</script>";
//    echo "<h1>Upload Error!</h1>";
 }
?>

<html>
<head>
  
  <STYLE type="text/css">
    @import url(http://fonts.googleapis.com/css?family=Open+Sans);
    @font-face
    {
	   src:url("fonts/pictos-regular-webfont.ttf") format("truetype"),
		  url("fonts/pictos-regular-webfont.otf") format("opentype"),
		  url("fonts/pictos-regular-webfont.svg") format("svg");
	   font-family:icon;
    }
  
    body 
    { 
        width: 100%;	
        height:100%; 
        font-family: 'Open Sans', sans-serif, Tahoma; 
        font-size: 9px; 
        background:#fff; 
    }
      
	.h1 
    {
        font-family: 'Open Sans', sans-serif, Tahoma; 
        font-size: .70em; 
        letter-spacing: 1px; 
        text-shadow: 0 0 9px rgba(0,0,0,0.3); 
    }
      
	.title 
    {
        font-family: 'Open Sans', sans-serif, Tahoma; 
        font-size: 13px; 
        text-shadow: 0 0 9px rgba(0,0,0,0.3); 
    }	
      
	.titleColumn 
    {
        font-family: Tahoma; 
        font-size: 12px; 
        text-shadow: 0 0 9px rgba(0,0,0,0.3); 
        text-align:center;
    }	
  </STYLE>

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>ASKON</title>
  <script type="text/javascript" src="functions.js"></script>
</head>

<body>

  <!--next comes the form, you must set the enctype to "multipart/form-data"  and use an input type "file" -->
  <form name="newad" method="post" enctype="multipart/form-data"  action="doUpload.php">
  <table cellpadding="1" class="title">
    <tr>
	  <td>Container Number</td>
	  <td>:</td>
	  <td><input type="text" id="contNum" maxlength="11" name="containerNumber" required="required" onchange="fetchImage()" 
	       value=<?php if(isset($_POST['containerNumber'])) { echo $_POST['containerNumber']; }
					   else echo "";
				  ?> ></td>
        <td width="10%" rowspan="5"></td>
        <td rowspan="5">Gambar "After Survey" yang Dipilih<br/><img src="" id="linkImg" width="220" height="150" border="1 solid"></td>
    </tr>
	  <td>Remark</td>
	  <td>:</td>
	  <td><input type="text" maxlength="100" size="50" name="remarks" width="380px"/></td>	
    </tr>
 	<tr>
	  <td>After Survey</td>
	  <td>:</td>
	  <td><input type="file" name="imageSurvey" class="title"></td>
    </tr>
 	<tr>
	  <td>After Repair</td>
	  <td>:</td>
	  <td><input type="file" name="imageRepair" class="title"><br/><input type="text" id="surveyImage" name="surveyImage" class="title" placeholder="Link Image" size="50" readonly><br/>Klik foto "After Survey" dibawah dari foto repair yang akan di-upload untuk mengisi kolom ini.</td>
    </tr>
 	<tr>
	   <td></td>
	   <td></td>
	   <td><input name="Submit" type="submit" value="Upload image"> <input name="refresh" type="button" value="Refresh Image" onclick="fetchImage()">
       </td>
    </tr>
  </table>	
  <br/>
    <div id="testDel"></div>
  <div id="updImgLoc">
 
<?php
  if(isset($_POST['Submit']))
  {
?>
  <table width="90%" border="1" bordercolor="#ccc" align="center">
    <tr>
	  <td width="10%" class="titleColumn"></td>	
	  <td width="40%" class="titleColumn"><b>After Survey</b></td>	
	  <td width="40%" class="titleColumn"><b>After Repair</b></td>  
	</tr>

<?php  
    $selectedDB = mysql_select_db("asky9955_syscon", $dbhandle);  
    $result=mysql_query("SELECT * FROM loguploadsurvey WHERE containerNumber='".$_POST['containerNumber']."' ORDER BY whenUpload ASC");
      
    $index = 0;
      
	while ($row=mysql_fetch_array($result)) 
    {
	  $folderNameSurvey = 'upload/'.$row['folderSaved'];
      $folderNameRepair = 'upload/'.$row['folderSaved2'];
        
      if($row['folderSaved2'] == NULL)
      {
         echo "<tr>";
	     echo "<td class=\"title\"><input type=\"button\" name=\"delete".$index."\" value=\"Delete Entry\" onclick=\"deleteEntry(".$index.");fetchImage();\"><input type=\"hidden\" id=\"contNumHid".$index."\" value=\"".$row['containerNumber']."\"><input type=\"hidden\" id=\"upTime".$index."\" value=\"".$row['whenUpload']."\"></td>";
	     echo "<td class=\"title\"><a href=\"#\"  onclick=\"selectedSurvey(".$index.")\"><img src=\"".$folderNameSurvey."\" width=\"600\" height=\"422\"></a><input type=\"hidden\" id=\"survImg".$index."\" value=\"".$row['folderSaved']."\"><br/><b>Filename</b>: ".$row['folderSaved']."<br/><b>Uploaded On</b>: ".$row['whenUpload']."</td>";
	     echo "<td class=\"title\"></td>";
	     echo "</tr>";
          
      }
        
      else
      {
         echo "<tr>";
	     echo "<td class=\"title\"><input type=\"button\" name=\"delete".$index."\" value=\"Delete Entry\" onclick=\"deleteEntry(".$index.");fetchImage();\"><input type=\"hidden\" id=\"contNumHid".$index."\" value=\"".$row['containerNumber']."\"><input type=\"hidden\" id=\"upTime".$index."\" value=\"".$row['whenUpload']."\"></td>";
	     echo "<td class=\"title\"><a href=\"#\"  onclick=\"selectedSurvey(".$index.")\"><img src=\"".$folderNameSurvey."\" width=\"600\" height=\"422\"></a><input type=\"hidden\" id=\"survImg".$index."\" value=\"".$row['folderSaved']."\"><br/><b>Filename</b>: ".$row['folderSaved']."<br/><b>Uploaded On</b>: ".$row['whenUpload']."</td>";
	     echo "<td class=\"title\"><img src=\"".$folderNameRepair."\" width=\"600\" height=\"422\"><br/><b>Filename</b>: ".$row['folderSaved2']."<br/><b>Uploaded On</b>: ".$row['whenUpload2']."</td>";
	     echo "</tr>"; 
      }	
        
      $index = $index + 1;
	}
?>
  </table>  
  </div>
  </form>

<?php	
  }
  mysql_close($dbhandle);
?> 

</body>