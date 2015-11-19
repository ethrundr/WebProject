<?php

include "db.php";
$num = $_GET['num'];
$time = $_GET['time'];
$img = $_GET['img'];

echo $num." - ".$time." - ".$img;

$selectedDB = mysql_select_db("asky9955_syscon", $dbhandle);  
    
$SQL="DELETE FROM loguploadsurvey  WHERE containerNumber='".$num."' AND whenUpload='".$time."' AND folderSaved='".$img."'";
     
$result=mysql_query($SQL, $dbhandle);
	
?>
