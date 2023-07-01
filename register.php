<?php

session_start();
?>
 <?php
    $dbname = "iwtdb";
    $conn = new mysqli("localhost", "root", "", $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
   <link rel="stylesheet" type="text/css" href="reg.css">
  <script src="reg.js"></script>
  <style>
  
  body {
      font-family: Arial, sans-serif;
    }

    form {
      margin: 0 auto;
      width: 400px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
    }

    input[type="date"] {
      padding: 5px;
      margin-bottom: 10px;
    }

    textarea {
      height: 80px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    .error {
      color: red;
      font-style: italic;
    }

  	h1{
	text-align: center;
	}
	#firstname {
  width: 300px; 
  height: 40px; 
}


	#lastname {
	width: 300px;
	height: 40px;
  
		}

	#username{
	width: 300px;
	height: 40px;
	}

	#email {
	width: 300px;
	height: 40px;
	}

	#address {
	width: 300px;
	height: 40px;
	}

	#dob{
	width: 300px;
	height: 40px;
	}

	#contact{
	width: 300px;
	height: 40px;
	}

	#nic{
	width: 300px;
	height: 40px;
	}

	#password{
	width: 300px;
	height: 40px;
	}

	#confirm_password{
	width: 300px;
	height: 40px;
	}
  .reg_text{
    color: white;
    font-size: 25px;
  }


  </style>
  
  
 
	  <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $dob = $_POST['dob'];
  $contact = $_POST['contact'];
  $nic = $_POST['nic'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  $sql = "INSERT INTO customers (firstname, lastname, username, email, address, dob, contact, nic, password)
        VALUES ('$firstname', '$lastname', '$username', '$email', '$address', '$dob', '$contact', '$nic','$password')";
	$result=$conn->query($sql);
  header('Location: index.php');

  $errors = [];

  if (empty($firstname)) {
    $errors[] = "First Name is required";
  }

  if (empty($lastname)) {
    $errors[] = "Last Name is required";
  }

  
  if ($password !== $confirm_password) {
    $errors[] = "Passwords do not match";
  }

  if (!empty($errors)) {
    foreach ($errors as $error) {
      echo $error . "<br>";
    }
    exit();
  }

  exit();
}
?>


</head>
<body style = "font-family: 'Comic Sans', cursive;">
 
<div style="background-color: black; background-image: url('resources/supsel.png'); background-repeat: no-repeat; background-size: cover;">



  <h1 style="font-size: 40px; color: white; font-family: 'Comic Sans', cursive;">Registration Form</h1>

  <form action="#" method="POST" >


    <label class="reg_text"  for="firstname">First Name:</label>
    <input type="text" id="firstname" name="firstname" required>
	<br><br>


    <label class="reg_text"  for="lastname">Last Name:</label>
    <input type="text" id="lastname" name="lastname" required><br><br>

    <label class="reg_text"  for="username">Preferred User Name:</label>
    <input type="text" id="username" name="username" required><br><br>

   

    <label class="reg_text"  for="email">Email Address:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label class="reg_text"  for="address">Address:</label>
    <textarea id="address" name="address" required></textarea><br><br>

    <label class="reg_text"  for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required><br><br>

    <label class="reg_text"  for="contact">Contact Number:</label>
    <input type="text" id="contact" name="contact" required><br><br>

    <label  class="reg_text" for="nic">NIC Number:</label>
    <input type="text" id="nic" name="nic" required><br><br>

    <label class="reg_text"  for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <label class="reg_text"  for="confirm_password">Re-enter Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required><br><br>

    <input type="submit" value="Register">
  </form>
  </div>
  
  
</body>
</html>
