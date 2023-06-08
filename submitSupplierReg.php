<?php 
include_once 'config.php';
$dbname = "supllierreg";
$conn = new mysqli($servername, $username, $password, $dbname);
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

    $sql="INSERT INTO supplierreg(Registered_name,Registration_number, Address, Contact_number,Email,Director_name,NIC,Director_C_number) 
    VALUES(Registered_name,Registration_number, Address, Contact_number,Email,Director_name,NIC,Director_C_number)";
	
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();

?>

<hr>


<!--Including footer -->
<?php include 'footer.php';?>
</body>
</html>