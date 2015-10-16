<h3>Daily Movement - OUT</h3>
<table border="1px" style="text-align:center;">
    <tr>
        <th width="100px">Unit ID</th>
        <th width="100px">Consignee</th>
        <th width="150px">Vessel Voyage</th>
        <th width="80px">Condition</th>
        <th width="350px">Remarks</th>
        <th width="100px">Out Date</th>
        <th width="100px">Out Time</th>
        <th width="100px">Block</th>
    </tr>
    <?php
        require_once('database.php');

        $dmout = mysqli_query($conn, "SELECT * FROM `askon`.`dmout`");

        while($row = mysqli_fetch_array($dmout))
        {
            echo "<tr>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td>".$row[3]."</td>";
            echo "<td>".$row[4]."</td>";
            echo "<td>".$row[5]."</td>";
            echo "<td>".$row[6]."</td>";
            echo "<td>".$row[7]."</td>";
            echo "<td>".$row[8]."</td>";
            echo "</tr>";
        }
    ?>
</table>