<?php 
include_once 'connection/siluniconfig.php';
session_start();
$dbname = "iwtdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Supplier registration</title>
    <!-- link css file -->
	<link rel="stylesheet" href="css/style.css">
    <!-- link js file -->
    
</head>

<body>
<!-- Including Header -->
<?php include 'header.php';

?>

<?php
    $Registered_name=$_POST['Registered_name'];
    $Registration_number=$_POST['Registration_number'];
    $Address = $_POST['Address'];
    $Contact_number = $_POST['Contact_number'];
    $Email = $_POST['Email'];
    $Director_name = $_POST['Director_name'];
    $NIC = $_POST['NIC'];
    $Director_C_number = $_POST['Director_C_number'];
    $material= $_POST['material'];

    $sql = "INSERT INTO supplierreg (Registered_name, Registration_number, Address, Contact_number, Email, Director_name, NIC, Director_C_number,material) 
        VALUES ('$Registered_name', '$Registration_number', '$Address', '$Contact_number', '$Email', '$Director_name', '$NIC', '$Director_C_number','$material')";


    if(mysqli_query($conn,$sql)){
		echo "<script> alert('Record inserted successfully')</script>";
        echo '<img src="resources/events/supsub.jpg" style=" width:100%; height: 800px; " >';

	}else{
		echo "<script> alert('Record not inserted successfully')</script>";
	}
?>

<hr>


<!--Including footer -->
<?php include 'footer.php';?>
</body>
</html>