<?php

session_start();
if (isset($_SESSION['username'])) 
{
    session_unset(); 
    session_destroy(); 
    header('Location: home2.php?logout=1');
}
else
{
    header('Location: home2.php?loginfail=1');
}

?>