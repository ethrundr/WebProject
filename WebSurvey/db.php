<?php

  //Create By  : Stevanus Andika 
  //Create Date: on Nov 11, 2015

//  $hostname = "localhost:8081";
  $hostname = "localhost";
//  $username = "asky9955_askon15";
//  $password = "028383";
  $username = "root";
  $password = "";

  $dbhandle = mysql_connect($hostname, $username, $password)
         or die("Unable to connect to mySQL");  
?>