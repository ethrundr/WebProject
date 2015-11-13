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
  <table width="30%" border="1" cellpadding="0" cellspacing="0" bordercolor="#0099CC">
    <td>
      <table width="100%" border="0" cellpadding="1" cellspacing="0" id="pageHeader">
          <td width="19%" height="81" ><img src="img/logo_askon_nt.png" width="72" height="72"></td>
	    <td width="2%">&nbsp;</td>
	    <td width="79%">
	      <font class="companyName1">
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
  
  <form name="getStock" action="ds.php" method="post">
  <div class="center" align="center"> Date to Search&nbsp; 
    <input name="filterDate" value=<?php if(!isset($_POST['Submit'])) { echo date("d/m/Y"); }
	                                      else { echo $shownDate; } ?> type="date"/>
    &nbsp; 
    <button type="submit" name="Submit">Start Query</button>
  </div>
  </form>
  
<?php
  include "db.php";
  
  if(isset($_POST['Submit'])) {
    $selectedDB = mysql_select_db("asky9955_SYSCON", $dbhandle);  
	
	$AV20=0;
	$AV40STD=0;
	$AV40HC=0;
	$DM20=0;
	$DM40STD=0;
	$DM40HC=0;

	$cmd="SELECT * FROM logMovement WHERE ownerName LIKE 'MAERSK LINE INDONESIA%' AND dateIn <='". $filterDate ."' AND ISOCode LIKE '20STD%' ";
	$cmd=$cmd."UNION ";
	$cmd=$cmd."SELECT * FROM logMovement WHERE ownerName LIKE 'MAERSK LINE INDONESIA%' AND dateIn <='". $filterDate ."' AND ISOCode LIKE '40STD%' ";
	$cmd=$cmd."UNION ";
	$cmd=$cmd."SELECT * FROM logMovement WHERE ownerName LIKE 'MAERSK LINE INDONESIA%' AND dateIn <='". $filterDate ."' AND ISOCode LIKE '40HC%'";
    $result=mysql_query($cmd);
	
	while ($row=mysql_fetch_array($result)) {
	  if ($row['ISOCode']=='20STD') {
	    if ($row['Cond']=='AV') $AV20++;
		else $DM20++; }
	  
	  if ($row['ISOCode']=='40STD') {
	    if ($row['Cond']=='AV') $AV40STD++;
		else $DM40STD++; }
	  
	  if ($row['ISOCode']=='40HC') {
	    if ($row['Cond']=='AV') $AV40HC++;
		else $DM40HC++; }
    }		
?>
	  
  <form name="rekapDailyStock" action="ds-det.php" method="post" target="_blank">
    <input type="hidden" name="tglStock" value="<?php echo $filterDate?>">
    <table width="36%" border="1" bordercolor="#cccccc" align="center" cellspacing="1" bgcolor="#99ccff">
      <tr> 
        <td width="17%" rowspan="2" align="center" class="titleColumn"><b>Size 
          Type</b></td>
        <td width="25%" rowspan="2" align="center" class="titleColumn"><b>Description</b></td>
        <td colspan="2" align="center" class="titleColumn"><b>Container Condition</b></td></tr>
      <tr> 
        <td width="29%" align="center" class="titleColumn"><b>AV</b></td>
        <td width="29%" align="center" class="titleColumn"><b>DM</b></td></tr>
      <tr> 
        <td align="center" class="titleColumn">20 GP</td>
        <td class="titleColumn">DRY STANDARD</td>
        <td align="right" class="titleColumn"><font face="Tahoma" size="2px"><?php echo $AV20?>&nbsp;</font><button type="submit" name="av20std">Detail</button></td>
        <td align="right" class="titleColumn"><font face="Tahoma" size="2px"><?php echo $DM20?>&nbsp;</font><button type="submit" name="dm20std">Detail</button></td></tr>
      <tr> 
        <td align="center" class="titleColumn">40 GP</td>
        <td class="titleColumn">DRY STANDARD</td>
        <td align="right" class="titleColumn"><font face="Tahoma" size="2px"><?php echo $AV40STD?>&nbsp;</font><button type="submit" name="av40std">Detail</button></td>
        <td align="right" class="titleColumn"><font face="Tahoma" size="2px"><?php echo $DM40STD?>&nbsp;</font><button type="submit" name="dm40std">Detail</button></td></tr>
      <tr> 
        <td align="center" class="titleColumn">40 HC</td>
        <td class="titleColumn">DRY HIGHCUBE</td>
        <td align="right" class="titleColumn"><font face="Tahoma" size="2px"><?php echo $AV40HC?>&nbsp;</font><button type="submit" name="av40hc">Detail</button></td>
        <td align="right" class="titleColumn"><font face="Tahoma" size="2px"><?php echo $DM40HC?>&nbsp;</font><button type="submit" name="dm40hc">Detail</button></td></tr>		
     </table>
   </form>

<?php
	mysql_free_result($result); 
    mysql_close($dbhandle);}	
?>

</body>
</html>