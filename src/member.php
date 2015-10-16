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
        <link rel="stylesheet" type="text/css" href="content.css">
        <script type="text/javascript" src="menu.js"></script>
        <script type="text/javascript" src="functions.js"></script>
    </head>
    
    <body id="mainBody">
        <div class="container">
            <div id="leftmenu" class="column column-offset-1 ">
                <div id="logo">
                    <table align="center" style="text-align:center;">
                        <tr>
                            <td><img src="logo_askon_nt.png" alt="Logo Askon" width="56px" height="53px"/> <font size="2px" style="vertical-align:20px;"><b>PT. Artha Samudra Kontindo</b></font></td>
                        </tr>
                    </table>
                </div>
                <hr/>
                <div id="intro">
                    <p align="center">
                        <?php 
                            echo "Welcome to PT. ASKON, ".$_SESSION['username']."!"; 
                        ?>
                    </p>
                </div>
                <hr/>
                <?php
                    require_once('database.php');
                    
                    $menu = mysqli_query($conn, "SELECT * FROM `askon`.`menu`");
                    
                    while($row = mysqli_fetch_array($menu))
                    {
                        echo "<div>";
                        echo "<canvas id=\"menu".$row[0]."\" width=\"400\" height=\"70\" onclick=\"loadSample(".$row[0].")\">";
                        echo "Your browser does not support the HTML5 canvas tag.";
                        echo "</canvas>";
                        echo "<script>";
                        echo "var a = document.getElementById(\"menu".$row[0]."\");";
                        echo "var atx = a.getContext(\"2d\");";
                        echo "atx.rect(1 , 5 , 250 , 40);";
                        echo "atx.strokeStyle = \"#d3d3d3\";";
                        echo "atx.stroke();";
                        echo "atx.fillStyle = \"#d3d3d3\";";
                        echo "atx.fill();";
                        echo "atx.font = \"20px Tahoma\";";
                        echo "atx.fillStyle = \"#000000\";";
                        echo "atx.fillText(\"".$row[2]."\" , 10 , 32);";
                        echo "</script>";
                        echo "</div>";
                    }
                ?>
                <hr/>
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
            </div>
        </div>
        <script type="text/javascript" src="menu.js"></script>
    </body>
</html>