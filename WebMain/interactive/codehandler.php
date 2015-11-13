<?php

session_start();
require_once('database.php');

$errcode = $_GET['status'];

$query = mysqli_query($conn, "SELECT * FROM `askon`.`errors` WHERE `errors`.`err_code` = ".$errcode);

while($row = mysqli_fetch_array($query))
{
    if($errcode == 200 || $errcode == 201 || $errcode == 202 || $errcode == 203 || $errcode == 204 || $errcode == 205)
    {
        echo "";
    }
    
    else if($errcode == 1002 || $errcode == 1003)
    {   
        echo "<p align=\"center\">";
        echo "<b><font color=\"ff0000\">".$row[1]."</font></b>";
        echo "</p>";
    }
    
    else
    {   
        echo "<p align=\"center\">";
        echo "<b><font color=\"ff0000\">".$errcode." ".$row[1]."</font></b>";
        echo "</p>";
    }
}

?>