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
        display: flex;
}


    #container1 div {
        align-items: center;
        margin: 20px;
        width: 100%;
    }

    h1 {
        color: black;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
    }
    
    #container3 {
        text-align: right;
}


  </style>

</head>

<body>
<!-- Including Header -->
<?php include 'header.php';?>

<div id="container1">
    <div>
        <a href="https://goo.gl/maps/nK6vkMmeoY3gnSjp7">
            <img src="resources/home/loc.png" alt="location" width="400" height="300">
        </a>
        <h1> Visit Us </h1>
        <h1> 10/224, Sesatha Garden, Kanda Pansala Road, </h1>
        <h1> Maha Waskaduwa, Kalutara. </h1>           
    </div>

    <div id="container2">
        <center>
        <div>
            <img src="resources/home/gmnt/design.jpg" width="350" height="250">
        </div>  
        <div>
            <img src="resources/home/gmnt/girl.jpg" width="115" height="95">
            <img src="resources/home/gmnt/hand.jpeg" width="115" height="95">
            <img src="resources/home/gmnt/black.jpg" width="115" height="95">
        </div> 
        <div>
            <img src="resources/home/gmnt/iron.jpg" width="115" height="95">
            <img src="resources/home/gmnt/clothes.png" width="115" height="95">
            <img src="resources/home/gmnt/see.jpg" width="115" height="95">
        </div> 
        </center> 
    </div> 
    
    <div id="container3">
        <div>
            <img src="resources/home/gmnt/truck.jpg" width="350" height="250">
        </div>  
        <div>
            <img src="resources/home/gmnt/stock1.jpg" width="115" height="95">
            <img src="resources/home/gmnt/stock2.jpg" width="115" height="95">
            <img src="resources/home/gmnt/stock3.jpg" width="115" height="95">
        </div> 
        <div>
            <img src="resources/home/gmnt/fac.jpg" width="115" height="95">
            <img src="resources/home/gmnt/truck2.jpg" width="115" height="95">
            <img src="resources/home/gmnt/stock4.jpg" width="115" height="95">
        </div> 
    </div>
</div>





<!--Including footer -->
<?php include 'footer.php';?>
</body>
</html>
