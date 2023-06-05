<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
   <link rel="stylesheet" type="text/css" href="css/reg.css">
  <script src="js/reg.js"></script>
  
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
<body>
  <h1>Registration Form</h1>
  
  <form action="process_registration.php" method="POST">
    <label for="firstname">First Name:</label>
    <input type="text" id="firstname" name="firstname" required><br><br>
    
    <label for="lastname">Last Name:</label>
    <input type="text" id="lastname" name="lastname" required><br><br>
    
    <label for="username">Preferred User Name:</label>
    <input type="text" id="username" name="username" required><br><br>
    
    <label for="gender">Gender:</label>
    <input type="checkbox" id="male" name="gender" value="male">
    <label for="male">Male</label>
    <input type="checkbox" id="female" name="gender" value="female">
    <label for="female">Female</label><br><br>
    
    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="address">Address:</label>
    <textarea id="address" name="address" required></textarea><br><br>
    
    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required><br><br>
    
    <label for="contact">Contact:</label>
    <input type="text" id="contact" name="contact" required><br><br>
    
    <label for="nic">NIC Number:</label>
    <input type="text" id="nic" name="nic" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <label for="confirm_password">Re-enter Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required><br><br>
    
    <input type="submit" value="Register">
  </form>
</body>
</html>
