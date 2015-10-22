<?php
session_start();
if (!(isset($_SESSION['username']))) 
{
    header('Location: home.php');
}
?>
<html>
    <head>
        <title>Content Home</title>
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
                    <table align="center">
                        <tr>
                            <td><img src="logo_askon_nt.png" alt="Logo Askon" width="60px" height="57px"/></td>
                            <td><font size="2px"><b>PT. Artha Samudra Kontindo</b><br/></font><left><font size="1px">Kawasan Industri Cipta Guna Blok 9<br/>Jl. Arteri Yos Sudarso, Semarang 50174<br/>Telp: 024-12345678</font></left></td>
                        </tr>
                    </table>
                </div>
                <hr/>
                <div id="intro">
                    <p align="center">
                        <?php 
                            echo "Welcome to PT.ASKON, ".$_SESSION['username']."!"; 
                        ?>
                    </p>
                </div>
                <hr/>
                <?php
                    if($_SESSION['privilege'] == 5)
                    {
                        echo "<p align=\"center\">";
                        echo "We're very sorry,<br/>but you cannot access the menu<br/>as guest user.";
                        echo "<br/><br/>";
                        echo "Please <a href=\"swtacc.php\">login</a> using your Member ID to access the menu.";
                        echo "</p>";
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