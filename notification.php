<!DOCTYPE html>
<html>
<head>
	<title>WeeNet</title>
    <!-- link css file -->
	<link rel="stylesheet" href="css/style.css">
    <!-- link js file -->
    <script src="js/script.js"></script>

    <style>

    #container1 {
        background-image: url("resources/notification/notifi.jpg");
		width: 1330px;
		height: 800px;
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
        border-radius: 12px;
		box-shadow: 7px 7px 10px 3px #24004628;


    }    

    #container2 {
        display: flex;
        margin-left: 50px;
    }

    h1 {
        color: white;
        font-size: 50px;
        font-weight: bold;
        text-align: left;
    }
    h4 {
        color: white;
        font-size: 20px;
        font-weight: bold;
        text-align: left;
        margin-left: 50px;
    }

</style>

</head>

<body>
<!-- Including Header -->
<?php include 'header.php';?>

<div id="container1">
    
    <div id="container2">
        <div>
            <h1> Notifications &emsp;</h1>
        </div>

        <div style="margin-top: 43px;">
            <img src="resources/notification/bell1.png" width="45px" height="45px" alt="notifications">
        </div>
    </div>

    <div>
        <h4> No notifications yet !! </h4>
    </div>
</div>




<hr>

<!--Including footer -->
<?php include 'footer.php';?>
</body>
</html>