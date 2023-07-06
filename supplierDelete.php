<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwtdb";

$conn = mysqli_connect("localhost", "root", "", "iwtdb");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
include'delete.php';
$query ="select * from supplierreg";
$run = mysqli_query($conn, $query);
?>

$conn = mysqli_connect("localhost", "root", "", "iwtdb");
<!DOCTYPE html>
<html>
<head>
    <title>WeeNet</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <style>
        /* supplier.css */

        .body1 {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th,
        table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #f2f2f2;
        }

        table td {
            background-color: #fff;
        }

        select,
        input[type="number"],
        input[type="date"],
        input[type="checkbox"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            width: auto;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Center align the form */
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        /* Style the labels */
        label {
            font-weight: bold;
        }

        /* Style the select dropdown */
        select {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            width: 200px;
            margin-bottom: 10px;
        }

        /* Style the input fields */
        input[type="number"],
        input[type="date"] {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            width: 200px;
            margin-bottom: 10px;
        }

        /* Style the submit button */
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        /* Center align the submit button */
        #subbutton {
            margin: 0 auto;
        }

        h1 {
            text-align: center;
        }

        .tablesup {
            width: 40%;
            height: 40px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
        #btnDel{
      text-decoration: none;
      color: #FFF;
      background-color: #e74c3c;
      padding: 5px 20px;
      border-radius: 3px;
 }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="body1">
        <div > <!--style="background-image: url('resources/bgimg.jpg'); background-repeat: no-repeat; background-size: cover"-->
            <form class="form" style="background-color: white;">
                <h1>Supplier selection</h1>
            </form><br></br>


            <!--form class="form" style="background-color: white;" method="GET" action="supplierDelete.php">
                <label for="material">Choose supplier according to the material:</label>
                <select id="material" name="material">
                    <option value="mat1">cotton</option>
                    <option value="mat2">silk</option>
                    <option value="mat3">wool</option>
                </select>
                <input type="submit" value="OK" style="background-color: grey; color:white;">
            </form><br></br-->

            <?php
            if (isset($_GET["material"])) {
                $mat = $_GET["material"];
                $mysqli = new mysqli("localhost", "root", "", "iwtdb");

                if ($mysqli->connect_error) {
                    die("Connection failed: " . $mysqli->connect_error);
                }

                $query = "SELECT * DELETE FROM supplierreg /*WHERE material = '{$mat}'*/";
                $result = $mysqli->query($query);

                if ($result->num_rows > 0){
                    echo "<table border='1'>
                            <tr>
                                <th>Registration Number</th>
                                <th>Registered Name</th>
                                <th>Address</th>
                                <th>Contact Number</th>
                                <th>Material</th>
                                <th>Delete </th>
                            </tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['Registration_number'] . "</td>";
                        echo "<td>" . $row['Registered_name'] . "</td>";
                        echo "<td>" . $row['Address'] . "</td>";
                        echo "<td>" . $row['Contact_number'] . "</td>";
                        echo "<td>" . $row['material'] . "</td>";
                        echo "<td> <a href ='delete.php?id-".$result['id']."'id= 'btnDel'> Delete </a> </td>";
                        echo "</tr>";
                    }

                    echo "</table>";
                } else {
                    echo "<p>No suppliers found for the selected material.</p>";
                }

                $mysqli->close();
            }
            ?><br></br>

            <!--center> <div class="subbutton" style="text-align: center;">
          <input type="submit" value="Proceed" onclick="showAlert()" style="background-color: white; color: black; padding: 10px 20px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px; cursor: pointer; border-color: red;">
          </div></center>

            <script>
                function showAlert() {
                    alert("Order successfull");
                    window.location="supplier.php";
                }
            </script-->

        </div>
    </div>
    <hr>
    <?php include 'footer.php'; ?>
</body>
</html>
