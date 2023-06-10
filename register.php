<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  <!-- link css file -->
	<link rel="stylesheet" href="css/style.css">
    <!-- link js file -->
    <script src="js/script.js"></script>

  <script src="js/reg.js"></script>
  <style>
  /* supplier.css */

  body {
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

  table th, table td {
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

  select, input[type="number"], input[type="date"], input[type="checkbox"] {
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

  	h1{
  	text-align: center;
  	}


  	h1{
	text-align: center;
	}
	#firstname {
  width: 300px; /* Adjust the width as per your preference */
  height: 40px; /* Adjust the height as per your preference */
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







  </style>

	  <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $dob = $_POST['dob'];
  $contact = $_POST['contact'];
  $nic = $_POST['nic'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // Perform form validation
  $errors = [];

  // Add your form validation logic here
  // For example, check if required fields are empty or if the password matches the confirm password

  if (empty($firstname)) {
    $errors[] = "First Name is required";
  }

  if (empty($lastname)) {
    $errors[] = "Last Name is required";
  }

  // Check if password and confirm password match
  if ($password !== $confirm_password) {
    $errors[] = "Passwords do not match";
  }

  // If there are errors, display them and stop further processing
  if (!empty($errors)) {
    foreach ($errors as $error) {
      echo $error . "<br>";
    }
    exit();
  }

  // If there are no errors, continue with further processing (e.g., storing data in database)

  // Process the data...

  // Redirect to a thank you page or any desired destination
  header("Location: thank_you.html");
  exit();
}
?>


</head>
<body style = "font-family: 'Comic Sans', cursive;">
<div style="background-image: url('css/bgimg.jpg');">

<form action="process_registration.php" method="POST" >

  <h1 style="color: black; font-family: 'Comic Sans', cursive;">Registration Form</h1>

  <form action="process_registration.php" method="POST" >


    <label for="firstname">First Name:</label>
    <input type="text" id="firstname" name="firstname" required>
	<br><br>


    <label for="lastname">Last Name:</label>
    <input type="text" id="lastname" name="lastname" required><br><br>

    <label for="username">Preferred User Name:</label>
    <input type="text" id="username" name="username" required><br><br>

    <!--label for="gender">Gender:</label>
    <input type="checkbox" id="male" name="gender" value="male">

    <!--label for="male">Male</label>
    <input type="checkbox" id="female" name="gender" value="female">
    <label for="female">Female</label><br><br-->

    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="address">Address:</label>
    <textarea id="address" name="address" required></textarea><br><br>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required><br><br>

    <label for="contact">Contact Number:</label>
    <input type="text" id="contact" name="contact" required><br><br>

    <label for="nic">NIC Number:</label>
    <input type="text" id="nic" name="nic" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <label for="confirm_password">Re-enter Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required><br><br>

    <input type="submit" value="Register">
  </form>
  </div>
</body>
</html>
