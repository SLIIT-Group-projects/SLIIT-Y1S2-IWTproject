<?php
$mysqli = new mysqli("localhost", "root", "", "iwtdb");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$mat = isset($_GET["material"]) ? $_GET["material"] : "";

$query = "SELECT * FROM supplierreg WHERE material = '{$mat}'";

$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th><input type='checkbox' name='selected_items[]' value='". $item[0] . "'></th>
                    <th>Registration Number</th>
                    <th>Registered Name</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                    <th>Director Name</th>
                    <th>NIC</th>
                    <th>Director Contact Number</th>
                    <th>Material</th>
       </tr>";
    }

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";

        echo "<td>" . $row['Registration_number'] . "</td>";
        echo "<td>" . $row['Registered_name'] . "</td>";
        echo "<td>" . $row['Address'] . "</td>";
        echo "<td>" . $row['Contact_number'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row['Director_name'] . "</td>";
        echo "<td>" . $row['NIC'] . "</td>";
        echo "<td>" . $row['Director_C_number'] . "</td>";
        echo "<td>" . $row['material'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No suppliers found for the selected material.";
}

$mysqli->close();
?>
