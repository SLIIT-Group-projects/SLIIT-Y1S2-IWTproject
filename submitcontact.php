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
<?php include 'header.php'; ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwtdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
  }
  else{
    $full_name=$_POST['full_name'];
    $email=$_POST['email'];
    $message=$_POST['message'];     
    
    $sql = "INSERT INTO contact(full_name, email,`message`) 
    VALUES ('$full_name', '$email', '$message')";
    
    if(mysqli_query($conn,$sql)){
        
        echo "<script> alert('Record inserted successfully')</script>";
        echo '<img src="resources/events/subcon.jpg" style=" width:100%; height: 800px; " >';
        

    }else{
        echo "<script> alert('Not inserted')</script>";
        
    }
}

$conn->close();
?>
<!--Including footer -->
<?php include 'footer.php';?>
</body>
</html>

