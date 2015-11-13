<?php

  $link = mysql_connect('askon.co.id', 'asky9955_root', '028383') or die('Could not connect: ' . mysql_error());
  echo 'Connected successfully';
  mysql_select_db('cdms') or die('Could not select database');

?>