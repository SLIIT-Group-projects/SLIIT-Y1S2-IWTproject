<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>WeeNet</title>
    <!-- link css file -->
	<link rel="stylesheet" href="css/style.css">
    <!-- link js file -->
    <script src="js/script.js"></script>
    
<style>
/* supplier.css */

.body1 {
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
    .subbutton {
	  display: flex;
	  justify-content: center;
	  align-items: center;
	  //height: 100vh; /* Adjust the height as per your requirement */
	}



	h1{
	text-align: center;
	}

		.tablesup {
			width: 40%;
			height: 40px;s
			text-align: center;
			margin-left: auto;
      margin-right: auto;

		}


</style>


  <title>Supplier selection</title>


  <!--script src="supplier.js"></script-->
  <link rel="stylesheet" type="text/css" href="supplier.css">

  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   //Get form data
  $supplier = $_POST["supplier"];
  $material = $_POST["material"];
  $quantity = $_POST["quantity"];
  $supplierregNumber = $_POST["supplierregNumber"];
  $companyID = $_POST["companyID"];
  $deliveryDate = $_POST["delivery-date"];
  $proceedPayment = isset($_POST["payment-proceed"]) ? "Yes" : "No"; // Checkbox value

  // Process the data (You can modify this part to suit your needs)
  // For example, you can save the data to a database or send it via email

  // Print a confirmation message
  echo "Thank you for your order!<br>";
  echo "Supplier: " . $supplier . "<br>";
  echo "Supplier registeration number:" .$supplierregNumber."<br>";
  echo "Material: " . $material . "<br>";
  echo "Quantity: " . $quantity . "<br>";
  echo "Delivery Date: " . $deliveryDate . "<br>";
  echo "Compnany ID:".$companyID. "<br>";
  echo "Proceed with Payment: " . $proceedPayment . "<br>";
}
?>





</head>

<body>
  <?php include 'header.php';?>
<div class="body1" style = "font-family: 'Comic Sans', cursive;">

<div style="background-image: url('css/supsel.jpeg'); background-repeat: no-repeat; background-size: cover">

  <form class="form" style="background-color: white;">
  <h1>Supplier selection </h1>
  </form><br></br>

  <form class="form" style="background-color: white;">

    <form method="GET" action ="supDS.php">
    <label for="material">Choose material:</label>
	<select id="material" name="material">

      <option value="mat1">cotton</option>
      <option value="mat2">silck</option>
      <option value="mat3">wool</option>

	  <input type="submit" value="ok"  style="background-color: grey; color:white;">
    </select>
	</form><br></br>
	<?php
		include 'supDS.php';
	?> <br></br>
	<form style="background-color: white;">
	<label for="supplier">Choose supplier:</label>
	<select id="supplier" name="product">
	<option value="" selected hidden></option>
      <option value="supplier1">Option 1</option>
      <option value="supplier2">Option 2</option>
      <option value="supplier3">Option 3</option>
    </select>
	</form><br></br>


	<form style="background-color: white;">
	<label for="supplierregNumber">Supplier registeration number:</label>
    <input type="text" id="supplierregNumber" name="supplierregNumber">
	</form><br></br>




	<form style="background-color: white;">
	<label for="companyID">Company ID:</label>
    <input type="text" id="companyID" name="companyID" >
    </form><br></br>

	<form style="background-color: white; ">
    <label for="quantity">Quantity:</label>
    <input type="text" id="quantity" name="quantity" >
    </form><br></br>

	<form style="background-color: white;">
    <label for="delivery-date">Delivery Date:</label>
    <input type="date" id="delivery-date" name="delivery-date">
	</form><br></br>

    <!--input type="checkbox" id="payment-proceed" name="payment-proceed">
    <label for="payment-proceed">Proceed with Payment</label-->

	<div class="subbutton">
    <input type="submit" value="Proceed" style="background-color: white; color: black;" onclick="showAlert()">
	</div>

	<script>
	function showAlert() {
		alert("sucessful!");
	}
	</script>

  </form>
  </div>
</div>
<hr>

<?php include 'footer.php';?>
</body>
</html>
