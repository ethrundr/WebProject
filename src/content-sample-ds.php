<h3>Daily Stock</h3>
<table border="1px" style="text-align:center;">
    <tr>
        <th width="150px">Container ID</th>
        <th width="100px">In Date</th>
        <th width="100px">In Time</th>
        <th width="100px">Condition</th>
        <th width="120px">Aging</th>
        <th width="300px">Haulage</th>
        <th width="200px">Booking Out ID</th>
    </tr>
    <?php
        require_once('database.php');

        $ds = mysqli_query($conn, "SELECT * FROM `askon`.`ds`");

        while($row = mysqli_fetch_array($ds))
        {
            echo "<tr>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td>".$row[3]."</td>";
            echo "<td>".$row[4]."</td>";
            echo "<td>".$row[5]."</td>";
            echo "<td>".$row[6]."</td>";
            echo "<td>".$row[7]."</td>";
            echo "</tr>";
        }
    ?>
</table>
<br/>
<table border="1px" style="text-align:center;">
    <tr>
        <th width="100px">Size Type</th>
        <th width="50px">AV</th>
        <th width="50px">DM</th>
    </tr>
    <tr>
        <td>20GP</td>
        <td>1</td>
        <td>0</td>
    </tr>
    <tr>
        <td>40GP</td>
        <td>5</td>
        <td>2</td>
    </tr>
    <tr>
        <td>40RC</td>
        <td>0</td>
        <td>3</td>
    </tr>
    <tr>
        <td>45HC</td>
        <td>0</td>
        <td>0</td>
    </tr>
</table>