<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['privilege'])) 
{
    header('Location: mainpage.php');
}
?>
<html>
    <head>
        <title>Login Page</title>
        <meta charset="UTF-8">
        <meta name="description" content="Login Page">
        <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
        <meta name="author" content="PT. Artha Samudra Kontindo">
        <link rel="stylesheet" type="text/css" href="master.css">
        <link rel="stylesheet" type="text/css" href="home.css">
        <script type="text/javascript" src="functions.js"></script>
    </head>
    
    <body id="mainbody" onload="loadCase1()">
        <input type="button" value="Case 1" onclick="loadCase1()"/><input type="button" value="Case 2" onclick="loadCase2()"/>
        <div id="centered">
            <center>
                <div id="contentArea">
                </div>
                <div>
                    <table align="center" style="text-align:center;">
                        <form action="login2.php" method="POST">
                            <tr>
                                <td><br/></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td width="2px">:</td>
                                <td><input type="text" name="user"/></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td><input type="password" name="pswd"/></td>
                            </tr>
                            <tr><td><br/></td></tr>
                            <tr>
                                <td colspan="3"><input type="submit" value="Log In"/> <input type="button" value="Cancel" /></td>
                            </tr>
                        </form>
                    </table>
                </div>
            </center>
        </div>
    </body>
</html>