<?php

$cond = $_GET['cond'];

if($cond == "AV")
{
    echo "<td></td><td></td><td><input type=\"file\" name=\"image\" class=\"title\"></td>";
}

else if ($cond == "DM")
{
    echo "<td></td><td></td><td><input type=\"text\" name=\"upImage\" class=\"title\" placeholder=\"After Survey Images\"><br/><input type=\"file\" name=\"image\" class=\"title\"></td>";
}

?>