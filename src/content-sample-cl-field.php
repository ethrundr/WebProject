<?php
    require_once('database.php');

    $contid = $_GET['contid'];
    $cl = mysqli_query($conn, "SELECT * FROM `askon`.`cl` WHERE `cl`.`container_id`='".$contid."'");

    echo "<table border=\"1px\" style=\"text-align:center;\">";
    echo "<tr>";
    echo "<th width=\"200px\">Booking ID</th>";
    echo "<th width=\"120px\">In Date</th>";
    echo "<th width=\"120px\">Out Date</th>";
    echo "<th width=\"150px\">Activity</th>";
    echo "<th width=\"210px\">Haulage</th>";
    echo "<th width=\"120px\">Size Type</th>";
    echo "<th width=\"200px\">Vessel Voyage</th>";
    echo "</tr>";

    while($row = mysqli_fetch_array($cl))
    {
        echo "<tr>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[3]."</td>";
        echo "<td>".$row[4]."</td>";
        echo "<td>".$row[5]."</td>";
        echo "<td>".$row[6]."</td>";
        echo "<td>".$row[7]."</td>";
        echo "<td>".$row[8]."</td>";
        echo "</tr>";
    }

    echo "</table>";

    if($cl->num_rows == 0)
    {
        echo "<font size=\"3px\" color=\"ff0000\">Error Loading Data.";
        echo "<br/>";
        echo "Please make sure your Container ID is 11 digit long, and written in the correct format.</font>";
    }
?>