<?php

session_start();
if (isset($_SESSION['username'])) 
{
    session_unset(); 
    session_destroy(); 
    header('Location: home.php?logout=1');
}
else
{
}

?>