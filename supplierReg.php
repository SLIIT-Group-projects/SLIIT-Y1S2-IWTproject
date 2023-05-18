<!DOCTYPE html>
<html>
<head>
	<title>Supplier registration</title>
    <!-- link css file -->
	<link rel="stylesheet" href="css/style.css">
    <!-- link js file -->
    <script src="js/script.js"></script>
    <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 20px;
    }    
    form {
      max-width: 1000px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    </style>
</head>

<body>
<!-- Including Header -->
<?php include 'header.php';

?>
<h1>
<h1><center>Supplier Registration</br></h1>
<form method="POST" action="#">
<h4 class="f1" >
Company Registerd Name: <br>
<input type="text" placeholder="ABC (pvt) Ltd" name="cname">
<br>Company Address: <br>
<textarea name="address" placeholder="6th lane, colombo 11" cols rows=5></textarea>
<br>Contact Number: <br>
<input type="number" placeholder="0711497951"  pattern="[0-9]{10}">
<br>Email adress:<br>
<input type="email" name="email" placeholder="ABC@gmail.com"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
Company director details: <br>
name:<br>
<input type="text" placeholder="ABC (pvt) Ltd" name="Dname"><br>
</h4>
</h1>
</form>

<hr>


<!--Including footer -->
<?php include 'footer.php';?>
</body>
</html>