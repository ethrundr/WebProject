<?php
session_start();
if (!(isset($_SESSION['username']))) 
{
    header('Location: home.php');
}
?>
<html>
    <head>
        <title>Admin Home</title>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Page">
        <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
        <meta name="author" content="PT. Artha Samudra Kontindo">
        <link rel="stylesheet" type="text/css" href="master.css">
        <link rel="stylesheet" type="text/css" href="admin.css">
        <script type="text/javascript" src="menu.js"></script>
        <script type="text/javascript" src="functions.js"></script>
    </head>
    
    <body style="background:#ffffff;">
        <?php
            echo "<center>";
            echo "<h1>403 Forbidden</h1>";
            echo "<h2>Content access hass been rejected by server</h2>";
            echo "</center>";
        ?>
    </body>
</html>