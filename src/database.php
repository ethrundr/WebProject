<?php

$servername = "localhost";
$username = "ethrundr";
$password = "sp67346RLP.";
$dbname = "askon";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
else
{
    echo "Connected Successfully";
}
?>