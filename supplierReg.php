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
      background-color:#3e3e3e;
      color:white;
    }
    label{
        font-color:white;
    }
    input{
      background-color: white;
      color:black;
      padding: 10px 15px;
      border: none;
      border-radius: 3px;
      cursor: pointer; 
    }
    p1{
        border: 2px solid white;
        max-width: 750px;
    }
    </style>
</head>

<body>
<!-- Including Header -->
<?php include 'header.php';

?>

<h1><center>Supplier Registration</center></br></h1>
<form method="POST" action="#"><center>
<h4>
<label>Company Registerd Name:</lable></br> 
<input type="text" placeholder="ABC (pvt) Ltd" name="cname"><br><br>
<label>Company Address:  </lable></br> 
<textarea name="address" placeholder="6th lane, colombo 11" cols rows=5></textarea><br><br>
<label>Contact Number:</lable><br>
<input type="number" placeholder="0711497951"  pattern="[0-9]{10}"><br><br>
<label>Email adress:</lable><br>
<input type="email" name="email" placeholder="ABC@gmail.com"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br><br>
Company director details: <br>
<label>name:</lable><br>
<input type="text" placeholder="Kamal Perera" name="Dname"><br><br>
<label>NIC No:</lable><br>
<input type="text" placeholder="200253402335" name="NIC"><br><br>
<label>Contact Number:</lable><br>
<input type="number" placeholder="071258258" name="DContactNo"><br><br>
Material details:<br>
Select the materials and the supplies available<br><br><br>
     <p1>agreement details</p1><br>

<input type="checkbox" class="inputStyle" id="checkbox" onclick="enableButton(submit)">Accept privacy policy and terms</br><br>	
<input type="submit" value="submit" id="submitBtn" disabled>

</form></center>

<hr>


<!--Including footer -->
<?php include 'footer.php';?>
</body>
</html>