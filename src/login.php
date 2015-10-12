<?php

session_start();
require_once('database.php');

echo $uname = $_POST["user"];
echo $passw = $_POST["pswd"];
$login;

$login = mysqli_query($conn, "SELECT * FROM `askon`.`users` WHERE (`users`.`user_username` = '" . $uname . "') AND (`users`.`password_checksum` = SHA2('" . $passw . "',512))");
//$result = $conn->query($login);
$row = mysqli_fetch_array($login);

if (mysqli_num_rows($login) == 1) 
{
    $_SESSION['username'] = $uname;
    $_SESSION['privilege'] = $row[4];
    if($row[4] == 1 || $row[4] == 2)
    {
        header('Location: admin.php');
    }
    
    else if($row[4] == 3 || $row[4] == 4)
    {
        header('Location: member.php');
    }
    
    else if($row[4] == 5)
    {
        header('Location: home.php?error=404');
    }
    
    else if($row[4] == 6)
    {
        header('Location: home.php?error=403');
    }
    
}
else 
{
    header('Location: home.php?loginfail=1');
}

?>