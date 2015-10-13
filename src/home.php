<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['privilege'])) 
{
    if($_SESSION['privilege'] == 1 || $_SESSION['privilege'] == 2)
    {
        header('Location: admin.php');
    }
    
    else if($_SESSION['privilege'] == 3 || $_SESSION['privilege'] == 4)
    {
        header('Location: member.php');
    }
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
    </head>
    
    <body id="mainbody">
        <div id="centered">
            <center>
                <div id="tabling">
                    <table id="text-center">
                        <form action="login.php" method="POST" id="form-center">
                            <tr>
                                <td colspan="3"><img src="logo_askon.png" alt="Logo Askon" /></td>
                            </tr>
                            <tr><td><br/></td></tr>
                            <tr>
                                <td>Username</td>
                                <td>:</td>
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