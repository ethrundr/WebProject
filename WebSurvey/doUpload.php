<?php    
 include "db.php";
//define a maxim size for the uploaded images in Kb
 define ("MAX_SIZE","1000"); 

//This function reads the extension of the file. It is used to determine if the
// file  is an image by checking the extension.
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
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
	if(!isset($_POST['containerNumber'])) $errors=1;
	if(!isset($_POST['unitCond'])) $errors=1;
 	$image=$_FILES['image']['name'];
 	//if it is not empty
 	if ($image) 
 	{
 	    //get the original name of the file from the clients machine
 		$filename = stripslashes($_FILES['image']['name']);
 	    //get the extension of the file in a lower case format
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
 	    //if it is not a known extension, we will suppose it is an error and 
        // will not  upload the file,  
	    //otherwise we will do more tests
        if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
 		{
		   //print error message
 			echo '<h1>Unknown extension! (only jpg, jpeg, gif, png format will be accept)</h1>';
 			$errors=1;
 		}
 		else
 		{
            //get the size of the image in bytes
            //$_FILES['image']['tmp_name'] is the temporary filename of the file
            //in which the uploaded file was stored on the server
            $size=filesize($_FILES['image']['tmp_name']);
           //compare the size with the maxim size we defined and print error if bigger
            if ($size > MAX_SIZE*1024)
            {
	           echo '<h1>You have exceeded the size limit!</h1>';
	           $errors=1;
            }

            //we will give an unique name, for example the time in unix time format
            $image_name=time().'.'.$extension;
           //the new name will be containing the full path where will be stored (images folder)
            $newname="upload/".$image_name;
           //we verify if the image has been uploaded, and print error instead
		    if ($errors==0) {
              $copied = copy($_FILES['image']['tmp_name'], $newname);
              if (!$copied) 
              {
 	             echo '<h1>Copy unsuccessfull!</h1>';
	             $errors=1;
              }}}}}

//If no errors registred, print the success message
 if(isset($_POST['Submit']) && !$errors) 
 {
    $selectedDB = mysql_select_db("asky9955_SYSCON", $dbhandle);  
    $SQL="INSERT INTO logUploadSurvey(containerNumber,Cond,folderSaved,whenUpload,condRemark) ";
	$SQL=$SQL."VALUES('".$_POST['containerNumber']."','".$_POST['unitCond']."','".$image_name."','".date('Y-m-d H:i:s')."','".$_POST['remarks']."')";
	$result=mysql_query($SQL, $dbhandle);
	
	echo "<h1>File Uploaded Successfully</h1>";
 }
?>

<html>
<head>
  
  <STYLE type="text/css">
    @import url(http://fonts.googleapis.com/css?family=Open+Sans);
    @font-face{
	src:url("fonts/pictos-regular-webfont.ttf") format("truetype"),
		url("fonts/pictos-regular-webfont.otf") format("opentype"),
		url("fonts/pictos-regular-webfont.svg") format("svg");
	font-family:icon;}
  
    body { width: 100%;	height:100%; font-family: 'Open Sans', sans-serif, Tahoma; font-size: 9px; background:#fff; }
	.h1 {font-family: 'Open Sans', sans-serif, Tahoma; font-size: .70em; letter-spacing: 1px; text-shadow: 0 0 9px rgba(0,0,0,0.3); }
	.title {font-family: 'Open Sans', sans-serif, Tahoma; font-size: 13px; text-shadow: 0 0 9px rgba(0,0,0,0.3); }	
	.titleColumn {font-family: Tahoma; font-size: 12px; text-shadow: 0 0 9px rgba(0,0,0,0.3); }	
  </STYLE>

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>ASKON</title>
</head>

<body>

  <!--next comes the form, you must set the enctype to "multipart/frm-data"  and use an input type "file" -->
  <form name="newad" method="post" enctype="multipart/form-data"  action="doUpload.php">
  <table cellpadding="1" class="title">
    <tr>
	  <td>Container Number</td>
	  <td>:</td>
	  <td><input type="text" maxlength="11" name="containerNumber" required="required" 
	       value=<?php if(isset($_POST['containerNumber'])) { echo $_POST['containerNumber']; }
					   else echo "";
				  ?>></td>	</tr>
    <tr>
	  <td>Condition</td>
	  <td>:</td>
	  <td><select name="unitCond">
	        <option value="AV">Available</option>
	        <option value="DM">Damage</option>												  
	      </select></td></tr>	
    <tr>
	  <td>Remark</td>
	  <td>:</td>
	  <td><input type="text" maxlength="100" name="remarks" width="380px"></td>	</tr>
 	<tr>
	  <td></td>
	  <td></td>
	  <td><input type="file" name="image" class="title"></td></tr>
 	<tr>
	   <td></td>
	   <td></td>
	   <td><input name="Submit" type="submit" value="Upload image">
       </td></tr>
  </table>	
  </form>
  
  <br/>
  
<?php
 if(isset($_POST['Submit']) && !$errors)
 {
?>
  <table width="90%" border="1" bordercolor="#ccc" align="center">
    <tr>
	  <td width="6%" class="titleColumn"><b>Condition</b></td>	
	  <td width="25%" class="titleColumn"><b>FileName</b></td>
	  <td width="15%" class="titleColumn"><b>Upload On</b></td>
	  <td width="54%" class="titleColumn"><b>Image</b></td>	  
	</tr>

<?php  
    $selectedDB = mysql_select_db("asky9955_SYSCON", $dbhandle);  
    $result=mysql_query("SELECT * FROM logUploadSurvey WHERE containerNumber='".$_POST['containerNumber']."'");
	while ($row=mysql_fetch_array($result)) {
	  $folderName = 'upload/'.$row['folderSaved'];	
?>
    <tr>
	  <td class="title"><?php echo $row['Cond']?></td>
      <td class="title"><?php echo $row['folderSaved']?></td>	  
	  <td class="title"><?php echo $row['whenUpload']?></td>
	  <td class="title"><img src="<?php echo $folderName?>" width="900" height="633"></td>
	</tr>
<?php	
	}
?>
  
  </table>

<?php	
 }
 mysql_close($dbhandle);
?> 

</body>