<?php 
include_once 'config.php';
?>
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
      font-family:  'Poppins',Arial, sans-serif;
   
      padding: 20px;
    }    
    form {
      max-width: 1000px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      color:white;
    }
    label{
        font-color:white;
        font:'Poppins';
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

    .container {
        position: relative;
        max-width: 1000px; /* Maximum width */
      }

    .container .content {
        position: absolute; /* Position the background text */
        bottom: 0; /* At the bottom. Use top:0 to append it to the top */
        background: rgb(0, 0, 0); /* Fallback color */
        background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
        color: #f1f1f1; /* Grey text */
        width: 170%; /* Full width */
        padding: 20px; /* Some padding */
       
      }

    #image_supplierReg{
       height: 1100px;
       width:1800px;
      align:left;
      size: cover;
      }
      
    </style>
</head>

<body>
<!-- Including Header -->
<?php include 'header.php';

?>
<div class="container">
<img src="resources/supplierReg.jpg" id="image_supplierReg">

<div class="content">
<h1><center>Supplier Registration</center></br></h1>
<form method="POST" action="submitSupplierReg.php"  ><center>
<label>Company Registerd Name:</lable></br> 
<input type="text" placeholder="ABC (pvt) Ltd" name="Registered_name"><br><br>
<label>Company registration Number</label></br> 
<input type="text" placeholder="123456" name="Registration_number"></br><br>
<label>Company Address:  </lable></br> 
<textarea name="Address" placeholder="6th lane, colombo 11" cols rows=5></textarea><br><br>
<label>Contact Number:</lable><br>
<input type="text" placeholder="0711497951" name="Contact_number" pattern="[0-9]{10}"><br><br>
<label>Email adress:</lable><br>
<input type="email" name="Email" placeholder="ABC@gmail.com"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br><br>
<h3>Company director details: </h3>
<label>name:</lable><br>
<input type="text" placeholder="Kamal Perera" name="Director_name"><br><br>
<label>NIC No:</lable><br>
<input type="text" placeholder="200253402335" name="NIC"><br><br>
<label>Contact Number:</lable><br>
<input type="text" placeholder="071258258" name="Director_C_number"><br><br>
<h3>Material details:<br>
Select the materials and the supplies available</h3>
<select name="material">
  <option value="1"> Cotton </option>
  <option value="2"> Silk </option>
  <option value="3"> Wool </option></select></br></br>
     agreement details</br>

<input type="checkbox" class="inputStyle" id="checkbox">Accept privacy policy and terms</br><br>	
<input type="submit" value="submit" id="submitBtn">

</form></center>
    </div>
    </div>
<hr>


<!--Including footer -->
<?php include 'footer.php';?>
</body>
</html>