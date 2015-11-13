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
        <input type="button" id="c1" value="Case 1: Teks Sebelah Logo" onclick="loadCase1()" onmouseover="tooltip(this,1)"/><br/><input type="button" id="c2" value="Case 2: Teks Dibawah Logo" onclick="loadCase2()" onmouseover="tooltip(this,2)"/>
        <form action="login2.php" method="POST">
            <div id="contentArea">
            </div>
        </form>
    </body>
</html>