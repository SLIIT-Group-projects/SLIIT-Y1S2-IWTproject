<!DOCTYPE html>
<html>
<head>
	<title>WeeNet</title>
    <!-- link css file -->
	<link rel="stylesheet" href="css/style.css">
    <!-- link js file -->
    <script src="js/script.js"></script>

    <style>
    .form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        background: linear-gradient(to right, grey, silver);
        padding: 40px;
        border-radius: 10px;
}

    .login {
        font-size: 25px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
}

    .flex {
        display: flex;
        flex-direction: column;
}

    .login-button {
        margin-top: 25px;
        margin-bottom: 6px;
        border-radius: 10px;
        border: none;
        padding: 8px 20px;
        font-size: 19px;
        font-weight: bold;
        color: grey;
        background-color: white;
        cursor: pointer;
}

    .login-button:hover {
        box-shadow: 2px 2px 12px white;
}

    .form label {
        margin-top: 20px;
        margin-bottom: 5px;
}
    
    .input {
        height: 30px;
        outline: none;
        padding: 15px;
        border-radius: 10px;
        border: none;
        font-weight: bold;
        font-size: 15px;
        box-shadow: 2px 2px 12px inset black;
}

    .span:hover {
        font-weight: bold;
}

    .color {
        color: white;
}

    .align {
        text-align: center;
}

</style>


</head>

<body>
<!-- Including Header -->
<?php include 'header.php';?>

<form class="form">
    <div class="flex">
        <div class="login color">Login</div>
        <label class="color">Username:</label>
        <input type="text" class="input">
        <label class="color">Password:</label>
        <input type="password" class="input"> 
        <center>
        <button class="login-button">Log-in</button>
        </center>
        <br>
        <div class="color align">
            Don't have an account? 
            <span class="span">
                    <a href="register.php">Sign Up</a>
            </span>
        </div>
    </div>
</form>




<!--Including footer -->
<?php include 'footer.php';?>
</body>
</html>