<!DOCTYPE html>
<html>
<head>
    <title>Supplier registration</title>
    <!-- link css file -->
    <link rel="stylesheet" href="css/style.css">
    <!-- link js file -->
    
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwtdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    // die("Connection failed: " . $conn->connect_error);
    echo "connection wada na";
  }
  else{
    $full_name=$_POST['full_name'];
    $email=$_POST['email'];
    $message=$_POST['message'];     
    
    $sql = "INSERT INTO contact(full_name, email,`message`) 
    VALUES ('$full_name', '$email', '$message')";
    
    if(mysqli_query($conn,$sql)){
        
        echo "wada";
        header("Location:index.php");
    }else{
        echo "not inserted";
    }
}

$conn->close();
?>
</body>
</html>

