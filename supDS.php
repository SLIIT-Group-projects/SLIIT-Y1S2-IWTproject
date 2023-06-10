<?php
// Create a connection
$mysqli = new mysqli("localhost", "root", "", "iwtdb");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
$mat = $_GET["material"];

// Select query
$query = "SELECT * FROM supplier WHERE mat='{$mat}'";


// Execute query
$result = $mysqli->query($query);

// Check if the query executed successfully
if ($result->num_rows > 0) {
    // Fetch the data as an associative array
	echo'<table class="tablesup">';
	//echo '<tr><th>Registration Number</th><th>Registered Name</th><th>Contact Number</th></tr>';
    while ($row = $result->fetch_assoc()) {
        // Access the data using column names
        echo '<tr>';
        echo '<td>' . $row['Registration_number'] . '</td>';
        echo '<td>' . $row['Registered_name'] . '</td>';
        echo '<td>' . $row['contact_number'] . '</td>';
        echo '</tr>';



    // Iterate over each row and display the data
   // foreach ($rows as $row)




    }
	echo'</table>';
} else {
    echo "Error: " . $mysqli->error;
}
