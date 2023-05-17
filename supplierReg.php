<!DOCTYPE html>
<html>
<head>
	<title>WeeNet</title>
    <!-- link css file -->
	<link rel="stylesheet" href="css/style.css">
    <!-- link js file -->
    <script src="js/script.js"></script>
</head>

<body>
<!-- Including Header -->
<?php include 'header.php'
<h1>Supplier Registration</br></h1>
<form method="POST" action="#">
Company Registerd Name: 
<input type="text" placeholder="ABC (pvt) Ltd" name="cname">
<br>Company Address: 
<textarea name="address" placeholder="6th lane, colombo 11"></textarea>
<br>Contact Number: 
<input type="number" placeholder="0711497951"  pattern="[0-9]{10}">
<br>Email adress:
<input type="email" name="email" placeholder="ABC@gmail.com"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
Company director details: <br>
name:
<input type="text" placeholder="ABC (pvt) Ltd" name="Dname"><br>


</form>
?>

<hr>


<!--Including footer -->
<?php include 'footer.php';?>
</body>
</html>