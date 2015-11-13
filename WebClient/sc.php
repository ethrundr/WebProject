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
  <form name="getStock" action="sc.php" method="post">
  <div class="center2" align="center"><font face="Tahoma" size="2px">Date to Search</font>&nbsp; 
    <input name="filterDate1" value=<?php if(!isset($_POST['Submit'])) { echo date("d/m/Y"); }
	                                      else { echo $shownDate; } ?> type="date"/> <font face="Tahoma" size="2px">Until </font>
    <input name="filterDate2" value=<?php if(!isset($_POST['Submit'])) { echo date("d/m/Y"); }
	                                      else { echo $shownDate; } ?> type="date"/>										  										  
    &nbsp; 
    <button type="submit" name="Submit">Start Query</button>
  </div>
  </form>

  <br/>

  <table width="70%" border="0" align="center">
  <tr>
    <td>
  <table width="35%" border="1" bordercolor="#ccff99">
    <tr> 
  	  <td width="58%"><font face="Tahoma" size="2px">Collected Seal (pcs)</font></td>
 	  <td width="42%" align="right"><font face="Tahoma" size="2px">0</font></td></tr>
    <tr> 
	  <td width="58%"><font face="Tahoma" size="2px">Original Seal Collected (IDR)</font></td>
	  <td width="42%" align="right"><font face="Tahoma" size="2px">0.00</font></td></tr>
    <tr> 
	  <td width="58%"><font face="Tahoma" size="2px">Replace Seal Collected (IDR)</font></td>
	  <td width="42%" align="right"><font face="Tahoma" size="2px">0.00</font></td></tr>
    <tr> 
	  <td width="58%"><font face="Tahoma" size="2px">Total Charges (IDR)</font></td>
	  <td width="42%" align="right"><font face="Tahoma" size="2px">0.00</font></td></tr>	
  </table>
  	  
  <br/>
  
  
  <table width="100%" border="1" bordercolor="#cccccc" align="center">
    <tr align="center" valign="middle"> 
      <td height="19" colspan="2" class="titleColumn"><b>Seal ID</b><b></b></td>
      <td width="26%" rowspan="2" class="titleColumn"><b>Book Out ID</b></td>
      <td rowspan="2" class="titleColumn"><b>Operator</b></td>
      <td width="15%" rowspan="2" class="titleColumn"><b>Container Number</b></td>
      <td width="7%" rowspan="2" class="titleColumn"><b>Size Type</b></td>
      <td width="13%" rowspan="2" class="titleColumn"><b>Date , Time Out</b></td>
      <td colspan="2" class="titleColumn"><b>Seal Charges (IDR)</b><b></b></td>
    </tr>
    <tr align="center" valign="top"> 
      <td width="9%" height="20" class="titleColumn"><b>Original</b></td>
      <td width="10%" class="titleColumn"><b>Replace With</b></td>
      <td width="10%" class="titleColumn"><b>Original</b></td>
      <td width="10%" class="titleColumn"><b>Replaced</b></td>
    </tr>
      <tr bgcolor="#d9ecff"> 
      <td height="20"><font face="Tahoma" size="2px">&nbsp;</font></td>
      <td><font face="Tahoma" size="2px">&nbsp;</font></td>
      <td><font face="Tahoma" size="2px">&nbsp;</font></td>
      <td><font face="Tahoma" size="2px">&nbsp;</font></td>
      <td><font face="Tahoma" size="2px">&nbsp;</font></td>
      <td><font face="Tahoma" size="2px">&nbsp;</font></td>
      <td><font face="Tahoma" size="2px">&nbsp;</font></td>
      <td><font face="Tahoma" size="2px">&nbsp;</font></td>
      <td><font face="Tahoma" size="2px">&nbsp;</font></td>
    </tr>
    <tr bgcolor="#ffffd5">
      <td><font face="Tahoma" size="2px">&nbsp;</font></td>
      <td><font face="Tahoma" size="2px">&nbsp;</font></td>
      <td><font face="Tahoma" size="2px">&nbsp;</font></td>
      <td><font face="Tahoma" size="2px">&nbsp;</font></td>
      <td><font face="Tahoma" size="2px">&nbsp;</font></td>
      <td><font face="Tahoma" size="2px">&nbsp;</font></td>
      <td><font face="Tahoma" size="2px">&nbsp;</font></td>
      <td><font face="Tahoma" size="2px">&nbsp;</font></td>
      <td><font face="Tahoma" size="2px">&nbsp;</font></td>
    </tr>
  </table>
      </td>
    </tr>
  </table>	
</body>
</html>
