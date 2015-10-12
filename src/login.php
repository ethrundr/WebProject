<?php

session_start();
require_once('database.php');

echo $uname = $_POST["user"];
echo $passw = $_POST["pswd"];
$login;

$login = "SELECT * FROM `askon`.`users` WHERE (`users`.`user_username` = '" . $uname . "') AND (`users`.`password_checksum` = SHA2('" . $passw . "',512))";
$result = $conn->query($login);

if ($result->num_rows == 1) 
{
    $_SESSION['username'] = $uname;
    header('Location: admin.php');
}
else 
{
    header('Location: home.php?loginfail=1');
}

?>