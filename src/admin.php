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
    
    <body id="mainBody">
        <div class="container">
            <div id="leftmenu" class="column column-offset-1 ">
                <div id="intro">
                    <p align="center">
                        <?php 
                            echo "Welcome to Member Page, ".$_SESSION['username']; 
                        ?>
                    </p>
                    <br/>
                </div>
                <div id="menuBar1">
                    <canvas id="menu1" width="400" height="70" onclick="loadDoc0()">
                        Your browser does not support the HTML5 canvas tag.
                    </canvas>
                </div>
                <div id="menuBar2">
                    <canvas id="menu2" width="400" height="70" onclick="loadDoc1()">
                        Your browser does not support the HTML5 canvas tag.
                    </canvas>
                </div>
                <div id="menuBar3">
                    <canvas id="menu3" width="400" height="70" onclick="loadDoc2()">
                        Your browser does not support the HTML5 canvas tag.
                    </canvas>
                </div>
                <div id="menuBar4">
                    <canvas id="menu4" width="400" height="70" onclick="loadDoc1()">
                        Your browser does not support the HTML5 canvas tag.
                    </canvas>
                </div>
                <div id="menuBar5">
                    <canvas id="menu5" width="400" height="70" onclick="loadDoc0()">
                        Your browser does not support the HTML5 canvas tag.
                    </canvas>
                </div>
                <div id="menuBar6">
                    <p align="center">
                        <table>
                            <form action="logout.php" method="GET">
                                <tr>
                                    <td>
                                        <input type="submit" value="Log Out"/>
                                    </td>
                                </tr>
                            </form>
                        </table>
                    </p>
                </div>
            </div>
            
            <div id="intermitten" class="column column-offset-2">
                
            </div>
            
            <div id="contentArea" class="column column-offset-3">
                <?php echo "Test AJAX" ?><br/>
                <input type="button" value="Test1!" onclick="loadDoc1()" /> 
                <input type="button" value="Test2!" onclick="loadDoc2()" /> 
            </div>
        </div>
        <script type="text/javascript" src="menu.js"></script>
    </body>
</html>