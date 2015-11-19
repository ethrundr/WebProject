<?php

include "db.php";
$contNum = $_GET['num'];

if(strlen($contNum) == 11)
{
    $selectedDB = mysql_select_db("asky9955_SYSCON", $dbhandle);  
    $result=mysql_query("SELECT * FROM logUploadSurvey WHERE containerNumber='".$contNum."' ORDER BY whenUpload ASC");
    
    echo "<table width=\"90%\" border=\"1\" bordercolor=\"#ccc\" align=\"center\">";
    echo "<td width=\"10%\" class=\"titleColumn\"></td>";
    echo "<td width=\"40%\" class=\"titleColumn\"><b>After Survey</b></td>";
    echo "<td width=\"40%\" class=\"titleColumn\"><b>After Repair</b></td>";
    echo "</tr>";
      
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
}

?>