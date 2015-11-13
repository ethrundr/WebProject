<h3>Seal Collection</h3>
<table border="1px" style="text-align:center;">
    <tr>
        <th width="210px">Seal ID</th>
        <th width="210px">Booking ID</th>
        <th width="200px">Container ID</th>
        <th width="150px">Size Type</th>
        <th width="150px">Out Date</th>
        <th width="150px">Out Time</th>
    </tr>
    <?php
        require_once('database.php');

        $sc = mysqli_query($conn, "SELECT * FROM `askon`.`sc`");

        while($row = mysqli_fetch_array($sc))
        {
            echo "<tr>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td>".$row[3]."</td>";
            echo "<td>".$row[4]."</td>";
            echo "<td>".$row[5]."</td>";
            echo "<td>".$row[6]."</td>";
            echo "</tr>";
        }
    ?>
</table>