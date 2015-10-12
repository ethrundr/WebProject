<?php
session_start();
if (isset($_SESSION['username'])) 
{
    echo "Welcome to Admin Page, ".$_SESSION['username'];
}
else
{
    header('Location: home.php?loginfail=1');
}
?>
<html>
    <head>
        <title>Admin Home</title>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Page">
        <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
        <meta name="author" content="PT. Artha Samudra Kontindo">
    </head>
    
    <body>
        <table>
            <form action="logout.php" method="GET">
                <tr>
                    <td><input type="submit" value="Log Out"/></td>
                </tr>
            </form>
        </table>
    </body>
</html>