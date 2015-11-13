<?php
  if (isset($_POST['Submit'])) {
	$filterDate=preg_replace('!^([0-9]{2})/([0-9]{2})/([0-9]{4})$!',"$3-$2-$1",$_POST['filterDate']);
    $shownDate=preg_replace('!^([0-9]{2})/([0-9]{2})/([0-9]{4})$!',"$1/$2/$3",$_POST['filterDate']);
  }	
?>

<html>
<head>
  <title>ASKON</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="content.css" />  
</head>

<body>
  <br/>
  <table width="100%" border="0" cellpadding="0" cellspacing="1">
	  <tr>
	     <td width="40%" valign="top">
           <table width="83%" border="0" cellpadding="1" cellspacing="0" id="pageHeader">
             <td width="12%" height="81" ><img src="img/logo_askon_nt.png" width="72" height="72"></td>
	         <td width="1%">&nbsp;</td>
	         <td width="87%"><font class="companyName1"><b>PT. ARTHA SAMUDRA KONTINDO</b></font><br/>
                             <font class="heading1">
	                         Kawasan Industri Cipta Guna Blok 9<br/>
                 	         Jl. Arteri Yos Sudarso, Semarang - 50174<br/>
	                         Middle Java - Indonesia<br/>
                             Phone (+6224) 76588117</font> </td>
           </table>
 	    </td>
		<td>&nbsp;</td>
		<td width="40%" align="right" valign="top">
           <table width="83%" border="0" cellpadding="1" cellspacing="0" id="pageHeader">
	         <td align="right"><font class="companyName1"><b>MAERSK LINE INDONESIA</b></font><br/>
                             <font class="heading1">
                 	         <b>STOCK REPORT [Jakarta2]</b at ><?php echo date('Y-m-d H:i:s A')?><br/>
                             last update: Nov 02, 2015, 20:00WIB </font> </td>
           </table>
		
		</td>
	  </tr> 	
  </table>
  
  <br/>
  
  <table width="30%" border="1" cellpadding="0" cellspacing="0" bordercolor="#0099CC">
    <td>
      <table width="100%" border="0" cellpadding="1" cellspacing="0" id="pageHeader">   
        <tr>
          <td class="heading1"><B>Person In Charge:</B></td></tr>
		<tr>
		  <td class="heading1">Mardanus +62 813 3374 4478 mardanus@askon.co.id</td></tr>  
		<tr>
	      <td class="heading1">Heru Sugianto +62 822 3067 8448 heru@askon.co.id</td></tr>
      </table> 
 	</td>
  </table>
  
  <br/>
  <br/>
  
  <table width="85%" border="1" cellspacing="1" bordercolor="#cccccc" align="center">
    <tr>	  
      <td width="18%" height="28" class="titleColumn"><b>Book In ID</b></td>	
	  <td width="13%" class="titleColumn"><b>Date Time In</b></td>
	  <td width="16%" class="titleColumn"><b>Book Out ID</b></td>	  
	  <td width="11%" class="titleColumn"><b>Container Number</b></td>	
	  <td width="6%" class="titleColumn"><b>GW</b></td>	  
	  <td width="6%" class="titleColumn"><b>Mnfr Year</b></td>	
	  <td width="20%" class="titleColumn"><b>Consignee</b></td>
	  <td width="6%" class="titleColumn"><b>Haulier</b></td>	  
	  <td width="3%" class="titleColumn"><b>Due</b></td>		  
	</tr>

<?php
  include "db.php";
  $selectedDB = mysql_select_db("asky9955_SYSCON", $dbhandle);  
  $filterDate=$_POST['tglStock'];		
  
  if (isset($_POST['av20std'])) {
    $cmd="SELECT * FROM logMovement WHERE ownerName LIKE 'MAERSK LINE INDONESIA%' AND dateIn <='". $filterDate ."' AND ISOCode LIKE '20STD%' ";
    $cmd=$cmd."AND Cond='AV'"; }
	
  if (isset($_POST['dm20std'])) {
    $cmd="SELECT * FROM logMovement WHERE ownerName LIKE 'MAERSK LINE INDONESIA%' AND dateIn <='". $filterDate ."' AND ISOCode LIKE '20STD%' ";
	$cmd=$cmd."AND Cond='DM'"; }

  if (isset($_POST['av40std'])) {
    $cmd="SELECT * FROM logMovement WHERE ownerName LIKE 'MAERSK LINE INDONESIA%' AND dateIn <='". $filterDate ."' AND ISOCode LIKE '40STD%' ";
	$cmd=$cmd."AND Cond='AV'"; }

  if (isset($_POST['dm40std'])) {
    $cmd="SELECT * FROM logMovement WHERE ownerName LIKE 'MAERSK LINE INDONESIA%' AND dateIn <='". $filterDate ."' AND ISOCode LIKE '40STD%' ";
    $cmd=$cmd."AND Cond='DM'"; }
	
  if (isset($_POST['av40hc'])) {
    $cmd="SELECT * FROM logMovement WHERE ownerName LIKE 'MAERSK LINE INDONESIA%' AND dateIn <='". $filterDate ."' AND ISOCode LIKE '40HC%' ";
	$cmd=$cmd."AND Cond='AV'"; }

  if (isset($_POST['dm40hc'])) {
    $cmd="SELECT * FROM logMovement WHERE ownerName LIKE 'MAERSK LINE INDONESIA%' AND dateIn <='". $filterDate ."' AND ISOCode LIKE '40HC%' ";
	$cmd=$cmd."AND Cond='DM'"; }

  $result=mysql_query($cmd); 	
	 
  $i=0;  
  $SizeType = '';

  while ($row=mysql_fetch_array($result)) {
    $theDateTime=$row['dateIn'].' '.$row['jamIn'];
	$due=strtotime($row['dateIn'])-strtotime(date('Y-m-d'));
	  
	if ($i == 0) { 
	  $color = "#d9ecff";
	  $i=1; }
	else { $color = "#ffffd5";
	       $i=0; }	
			 
    if ($SizeType != $row['ISOCode']) { 
	  echo '<tr><td height="28" colspan="11"><font face="Tahoma" size="2px">Group ID: '. $row['ISOCode'] .'</font></td></tr>';
	  echo '<tr><td height="28" colspan="11"><font face="Tahoma" size="2px">Condition: '. $row['Cond'] .'</font></td></tr>';	  
      $SizeType=$row['ISOCode']; 
      $i=1;
      $color = "#d9ecff"; } 		 
?>
    <tr>	  
      <td bgcolor=<?php echo $color?>><font face="Tahoma" size="2px"><?php echo $row['bookIn']?></font></td>	
	  <td bgcolor=<?php echo $color?> align="center"><font face="Tahoma" size="2px"><?php echo $theDateTime?></font></td>
	  <td bgcolor=<?php echo $color?>><font face="Tahoma" size="2px"><?php echo $row['bookOut']?></font></td>	  
	  <td bgcolor=<?php echo $color?>><font face="Tahoma" size="2px"><?php echo substr(trim($row['containerNumber']),0,4).' '.substr(trim($row['containerNumber']),4,7)?></font></td>	
	  <td bgcolor=<?php echo $color?> align="center"><font face="Tahoma" size="2px"><?php echo number_format(floatval($row['grossWeight']), 0)?></font></td>	  
	  <td bgcolor=<?php echo $color?> align="center"><font face="Tahoma" size="2px"><?php echo $row['mnfrYear']?></font></td>	
	  <td bgcolor=<?php echo $color?>><font face="Tahoma" size="2px"><?php echo $row['consigneeName']?></font></td>
	  <td bgcolor=<?php echo $color?>><font face="Tahoma" size="2px"><?php echo $row['Haulier']?></font></td>	  
	  <td bgcolor=<?php echo $color?> align="right"><font face="Tahoma" size="2px"><?php echo abs(floor($due/3600/24))?></font></td>	
	</tr>
	
<?php
  }
  mysql_free_result($result);
  mysql_close($dbhandle);  
?>

   </table>

</body>
</html>
