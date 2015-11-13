<?php

session_start();

echo $uname = $_POST["user"];
echo $passw = $_POST["pswd"];
$login;

if ($uname == "admin" && $passw == "admin") 
{
    $_SESSION['username'] = $uname;
    $_SESSION['privilege'] = 2;
    header('Location: mainpage.php');
}
else 
{
    header('Location: home2.php?loginfail=1');
}

?>