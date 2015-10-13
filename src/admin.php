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
        <link rel="stylesheet" type="text/css" href="admin.css">
        <script type="text/javascript" src="functions.js"></script>
    </head>
    
    <body id="mainBody">
        <div class="container">
            <div id="leftmenu" class="column column-offset-1 ">
                <?php echo "Welcome to Member Page, ".$_SESSION['username']; ?>
                <table>
                    <form action="logout.php" method="GET">
                        <tr>
                            <td><input type="submit" value="Log Out"/></td>
                        </tr>
                    </form>
                </table>
            </div>
            
            <div id="intermitten" class="column column-offset-2">
                
            </div>
            
            <div id="contentArea" class="column column-offset-3">
                <?php echo "Test AJAX" ?><br/>
                <input type="button" value="Test1!" onclick="loadDoc1()" /> 
                <input type="button" value="Test2!" onclick="loadDoc2()" /> 
            </div>
        </div>
    </body>
</html>