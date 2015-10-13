<?php
session_start();
if (!(isset($_SESSION['username']))) 
{
    header('Location: home.php');
}
else
{
    echo "Welcome to Member Page, ".$_SESSION['username'];
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
        <link rel="stylesheet" type="text/css" href="member.css">
    </head>
    
    <body>
        <div id="leftmenu">
            <table>
                <form action="logout.php" method="GET">
                    <tr>
                        <td><input type="submit" value="Log Out"/></td>
                    </tr>
                </form>
            </table>
        </div>
        <div id="contentArea">
            <p> Test AJAX </p>
            <input type="button" value="Test!" onclick="loadDoc()" />
        </div>
        <script type="text/javascript" src="functions.js"></script>
    </body>
</html>