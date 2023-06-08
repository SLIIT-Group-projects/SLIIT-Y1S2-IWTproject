<!DOCTYPE html>
<html>
<head>
	<title>WeeNet</title>
	<!-- link css file -->
	<link rel="stylesheet" href="css/style.css">
	<!-- link js file -->
	<script src="js/script.js"></script>
    
	<style>
		.main {
		  flex-direction: column;
		  overflow: hidden;
		  border-radius: 12px;
		  box-shadow: 7px 7px 10px 3px #24004628;
		  padding: 24px;
		  color: #fff;
		  text-align: center;
		  background-image: url("resources/login/l1.jpg");
          width: 1280px;
		  height: 800px;
		  background-size: cover;
		  background-position: center;
		  background-repeat: no-repeat;
          
          /* Centering content */
          display: flex;
          justify-content: center;
          align-items: center;
		}

		.label {
		  margin: 10px 0;
		  font-size: 2.5rem;
		  font-weight: bold;
		  cursor: pointer;
		  transition: .5s ease-in-out;
		}

		.input {
		  width: 80%;
		  height: 20px;
		  background: #e0dede;
		  padding: 2px;
		  border: none;
		  outline: none;
		  border-radius: 4px;
		  margin-bottom: 1px;
		}

		.form button {
		  width: 25%;
		  height: 40px;
		  margin-top: 2%;
		  color: #fff;
		  background: #573b8a;
		  font-size: 1rem;
		  font-weight: bold;
		  border: none;
		  border-radius: 8px;
		  cursor: pointer;
		  transition: .2s ease-in;
		  outline: none;
		}

		.form button:hover {
		  background-color: #6d44b8;
		}

		.register-link {
		  margin-top: 10px;
		  font-size: 0.9rem;
		  color: #e0dede;
		}

		.register-link a {
		  color: #fff;
		  font-weight: bold;
		  text-decoration: none;
		}
	</style>
</head>
<body>
	<!-- Including Header -->
	<?php include 'header.php'; ?>

	<div class="main">
		<h2 class="label">Log in</h2>
		<form class="form">
			<input class="input" type="email" name="email" placeholder="Email" required="">
			<input class="input" type="password" name="pswd" placeholder="Password" required="">
			<p class="register-link">Don't have an account? <a href="register.php">Register</a></p>
			<button class="button">Log in</button>
		</form>
	</div>

	<hr>

	<!-- Including footer -->
	<?php include 'footer.php'; ?>
</body>
</html>
