<?php    
 include "db.php";
 error_reporting(E_ALL & ~E_NOTICE);

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
?>
 
<html>
<head>
  <title>ASKON</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="content.css" />  
</head>

<body>
  <table width="30%" border="1" cellpadding="0" cellspacing="0" bordercolor="#0099CC">
    <td>
      <table width="100%" border="0" cellpadding="1" cellspacing="0" id="pageHeader">
          <td width="19%" height="81" ><img src="img/logo_askon_nt.png" width="72" height="72"></td>
	    <td width="2%">&nbsp;</td>
	    <td width="79%">
	      <font class="companyName1
                       ">
	        <b>PT. ARTHA SAMUDRA KONTINDO</b></font><br/>

 	      <font class="heading1">
	        Kawasan Industri Cipta Guna Blok 9<br/>
	        Jl. Arteri Yos Sudarso, Semarang - 50174<br/>
	        Middle Java - Indonesia<br/>
            Phone (+6224) 76588117</font> </td>
      </table>
 
 	</td>
  </table>
  
  <br/>
  
  <table width="30%" border="1" cellpadding="0" cellspacing="0" bordercolor="#0099CC">
    <td>
      <table width="100%" border="0" cellpadding="1" cellspacing="0" id="pageHeader" class="heading1">   
        <tr>
          <td width="29%"><B>Person In Charge</B></td>
	      <td width="3%">:</td>
	      <td width="68%">Heru Sugianto</td></tr>
        <tr>
          <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>Phone +62 822 3067 8448</td></tr>	

        <tr>
          <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>heru@askon.co.id</td></tr>	
      </table> 
 	</td>
  </table>
  
  <br/>
  <form name="searchPict" method="post" action=""> 
  <table width="25%" border="1" cellpadding="0" cellspacing="1"align="center" bordercolor="#0033CC">
    <td height="32" valign="middle"> 
      <table width="99%" border="0" cellpadding="0" cellspacing="1" class="login" align="center" >
        <td bgcolor="#CEEFFF">&nbsp;<input type="text" name="containerID" placeholder="Container #" maxlength="11" required="required" 
		                            value=<?php if(isset($_POST['containerID'])) { echo $_POST['containerID']; }
												 else echo "";
										  ?>>
		                      &nbsp;<button type="submit" name="Submit">Search</button>
		</td></table>
	</td>
  </table>
  </form>

<?php
 if(isset($_POST['Submit'])) 
 {
?>

  <table width="90%" border="1" bordercolor="#cccccc" align="center">
    <tr>	
	  <td width="40%" class="titleColumn"><b>After Survey</b></td>	
	  <td width="40%" class="titleColumn"><b>After Repair</b></td>    
	</tr>

<?php 
    $selectedDB = mysql_select_db("asky9955_SYSCON", $dbhandle);  
    $result=mysql_query("SELECT * FROM logUploadSurvey WHERE containerNumber='".$_POST['containerID']."' ORDER BY whenUpload ASC");
     
	while ($row=mysql_fetch_array($result)) 
    {
	  $folderNameSurvey = 'upload/'.$row['folderSaved'];
      $folderNameRepair = 'upload/'.$row['folderSaved2'];
        
      $plainName1 = explode(".",$row['folderSaved']);
      $extension1 = getExtension($row['folderSaved']);
      $extension1 = strtolower($extension1);
      $upImg1 = explode("-",$plainName1[0]);
      $extracted1 = $upImg1[1].'-Survey.'.$extension1; 
        
      $plainName2 = explode(".",$row['folderSaved2']);
      $extension2 = getExtension($row['folderSaved2']);
      $extension2 = strtolower($extension2);
      $upImg2 = explode("-",$plainName2[0]);
      $extracted2 = $upImg2[1].'-Repair.'.$extension2; 
        
      if($row['folderSaved2'] == NULL)
      {
         echo "<tr>";
	     echo "<td class=\"title\"><img src=\"".$folderNameSurvey."\" width=\"600\" height=\"422\"><br/><b>Filename</b>: ".$extracted1."<br/><b>Uploaded On</b>: ".$row['whenUpload']."</td>";
	     echo "<td class=\"title\"></td>";
	     echo "</tr>";
          
      }
        
      else
      {
         echo "<tr>";
	     echo "<td class=\"title\"><img src=\"".$folderNameSurvey."\" width=\"600\" height=\"422\"><br/><b>Filename</b>: ".$extracted1."<br/><b>Uploaded On</b>: ".$row['whenUpload']."</td>";
	     echo "<td class=\"title\"><img src=\"".$folderNameRepair."\" width=\"600\" height=\"422\"><br/><b>Filename</b>: ".$extracted2."<br/><b>Uploaded On</b>: ".$row['whenUpload2']."</td>";
	     echo "</tr>"; 
      }	 
    }
?>
  </table>
    
<?php
}
 mysql_close($dbhandle);
?>

</body>
</html>