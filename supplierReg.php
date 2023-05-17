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
<?php include 'header.php';
echo "<h1>Supplier Registration</h1>";
<form method="POST" action="#">
echo "Company Registerd Name: ";
<input type="text" placeholder="ABC (pvt) Ltd" name="name">
echo "<br>Company Address: ";
<textarea name="address" placeholder="6th lane, colombo 11"></textarea>
echo "<br>Contact Number: ";
<input type="number" placeholder="0711497951"  pattern="[0-9]{10}">
echo "<br>Email adress:";
<input type="email" name="email" placeholder="ABC@gmail.com"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">

?>

<hr>


<!--Including footer -->
<?php include 'footer.php';?>
</body>
</html>