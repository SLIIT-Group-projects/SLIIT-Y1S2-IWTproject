<?php 
include_once 'connection/siluniconfig.php';
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
      font-size: 20px;
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
        color:white;
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
        width: 173%; /* Full width */
        padding: 20px; /* Some padding */
       
      }

    #image_supplierReg{
       height: 1400px;
       width:1800px;
      /* align:left; */
      size: cover;
      }
    
      input[type=text],textarea,select, input[type=email]{
      width: 75%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }
    .submitbtn {
      background-color: #04AA6D;
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
      font-size:20px;
    }
    .submitbtn:hover {
      opacity:1;
    }

    label{
      font-size:20px;
      font: 'sans-serif';
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
  <div class="container2">
<h1><center>Supplier Registration</center></br></h1>
<form method="POST" action="submitSupplierReg.php"  ><center>
<label>Company Registerd Name:</lable></br> 
<input type="text" placeholder="ABC (pvt) Ltd" name="Registered_name"><br>
<label>Company registration Number</label></br> 
<input type="text" placeholder="123456" name="Registration_number"></br>
<label>Company Address:  </lable></br> 
<textarea name="Address" placeholder="6th lane, colombo 11" cols rows=5></textarea><br>
<label>Contact Number:</lable><br>
<input type="text" placeholder="0711497951" name="Contact_number" pattern="[0-9]{10}"><br>
<label>Email adress:</lable><br>
<input type="email" name="Email" placeholder="ABC@gmail.com"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
<h3>Company director details: </h3>
<label>name:</lable><br>
<input type="text" placeholder="Kamal Perera" name="Director_name"><br>
<label>NIC No:</lable><br>
<input type="text" placeholder="200253402335" name="NIC"><br>
<label>Contact Number:</lable><br>
<input type="text" placeholder="071258258" name="Director_C_number"><br>
<h3>Material details:<br>
Select a materials available and type below</h3>
<select name="material">
  <option value="mat1"> Cotton </option>
  <option value="mat2"> Silk </option>
  <option value="mat3"> Wool </option></select></br></br>
</selection>
     agreement details</br>

<input type="checkbox" class="inputStyle" id="checkbox">Accept privacy policy and terms</br><br>  
<input type="submit" value="submit" class="submitbtn">

</form></center>
    </div>
    </div>
    </div>
<hr>

<!--Including footer -->
<?php include 'footer.php';?>
</body>
</html>
