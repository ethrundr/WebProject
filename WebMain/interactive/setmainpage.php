<?php

session_start();
$level = $_SESSION['privilege'];
    
if($level == 1)
{
    header('Location: admin.php');
}
    
else if($level == 2)
{
    header('Location: admin.php');
}
    
else if($level == 3)
{
    header('Location: member.php');
}
    
else if($level == 4)
{
    header('Location: member.php');
}
    
else if($level == 5)
{
    header('Location: guest.php');
}
    
else if($level == 1)
{
    header('Location: blocked.php');
}

else
{
    header('Location: home.php?status=400');
}