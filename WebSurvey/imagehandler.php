<?php

include "db.php";
$contNum = $_GET['num'];

if(strlen($contNum) == 11)
{
    $selectedDB = mysql_select_db("asky9955_SYSCON", $dbhandle);  
    $result=mysql_query("SELECT * FROM logUploadSurvey WHERE containerNumber='".$contNum."'");
    
    echo "<table width=\"90%\" border=\"1\" bordercolor=\"#ccc\" align=\"center\">";
    echo "<td width=\"10%\" class=\"titleColumn\"><b>Condition</b></td>";
    echo "<td width=\"40%\" class=\"titleColumn\"><b>After Survey</b></td>";
    echo "<td width=\"40%\" class=\"titleColumn\"><b>After Repair</b></td>";
    echo "</tr>";
    
	while ($row=mysql_fetch_array($result)) 
    {
	  $folderNameSurvey = 'upload/'.$row['folderSaved'];
      $folderNameRepair = 'upload/'.$row['folderSaved2'];
        
      if($row['Cond'] == "AV")
      {
         echo "<tr>";
	     echo "<td class=\"title\">".$row['Cond']."</td>";
	     echo "<td class=\"title\"><img src=\"".$folderNameSurvey."\" width=\"600\" height=\"422\"><br/><b>Filename</b>: ".$row['folderSaved']."<br/><b>Uploaded On</b>: ".$row['whenUpload']."</td>";
	     echo "<td class=\"title\"></td>";
	     echo "</tr>";
          
      }
        
      else if($row['Cond'] == "DM")
      {
         echo "<tr>";
	     echo "<td class=\"title\">".$row['Cond']."</td>";
	     echo "<td class=\"title\"><img src=\"".$folderNameSurvey."\" width=\"600\" height=\"422\"><br/><b>Filename</b>: ".$row['folderSaved']."<br/><b>Uploaded On</b>: ".$row['whenUpload']."</td>";
	     echo "<td class=\"title\"><img src=\"".$folderNameRepair."\" width=\"600\" height=\"422\"><br/><b>Filename</b>: ".$row['folderSaved2']."<br/><b>Uploaded On</b>: ".$row['whenUpload2']."</td>";
	     echo "</tr>"; 
      }
    
    }
}

?>