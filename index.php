<!DOCTYPE html>
<html>
<head>
	<title>WeeNet</title>
    <!-- link css file -->
	<link rel="stylesheet" href="css/style.css">
    <!-- link js file -->
    <script src="js/script.js"></script>

    <style>

    #container {
        background-image: url("resources/home/pbck.jpg");
        background-size: cover;
        background-repeat: no-repeat;   
}
    #container1 {
        display: flex; 
}


    #container1 div {
        align-items: center;
        margin: 20px;
        width: 100%;
    }

    h1 {
        color: whitesmoke;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
    }

    
    #container3 {
        text-align: right;
}
    #container4 , #container5 , #container6 {
        display: flex;    
}
  </style>

</head>

<body>
<!-- Including Header -->
<?php include 'header.php';?>


<div id="container">

        <div id="container4">
        <div>
            <a href="product.php">
            <img src="resources/home/gmnt/f1.jpg" alt="fashion sample" width="666.5" height="500">
            </a>
        </div>

        <div>
            <a href="product.php">
            <img src="resources/home/gmnt/f4.jpg" alt="fashion sample" wwidth="665.5" height="500"> 
            </a>  
        </div>  
    </div>

    <div id="container5">
        <div>
            <a href="product.php">
            <img src="resources/home/gmnt/f5.jpg" alt="fashion sample" width="666.5" height="500">
            </a>
        </div>

        <div>
            <img src="resources/home/gmnt/txtnew.png" alt="text" width="666.5" height="500">   
        </div>  
    </div>

    <div id="container4">
        <div>
            <a href="product.php">
            <img src="resources/home/gmnt/f6.jpg" alt="fashion sample" width="666.5" height="500">
            </a>
        </div>

        <div>
            <a href="product.php">
            <img src="resources/home/gmnt/f3.jpg" alt="fashion sample" width="666.5" height="500">   
            </a>  
        </div> 
    </div>

    <div id="container6">
        <div>
            <a href="product.php">
            <img src="resources/home/gmnt/f7.jpg" alt="fashion sample" width="666.5" height="500">
            </a>
        </div>

        <div>
            <a href="product.php">
            <img src="resources/home/gmnt/f8.jpg" alt="fashion sample" width="666.5" height="500">   
            </a>  
        </div> 
    </div>
    

    <div id="container1">
        <div>
            <a href="https://goo.gl/maps/nK6vkMmeoY3gnSjp7">
            <img src="resources/home/locn.png" alt="location" width="400" height="300">
            </a>
            <h1> Visit Us </h1>
            <h1> 10/224, Sesatha Garden, Kanda Pansala Road, </h1>
            <h1> Maha Waskaduwa, Kalutara. </h1>           

            <img src="resources/home/gmnt/sp1.jpg" width="130" height="95">
            <img src="resources/home/gmnt/sp2.jpg" width="130" height="95">
            <img src="resources/home/gmnt/sp3.jpg" width="130" height="95">
        </div>

        <div id="container2">
            <center>
            <div>
                <img src="resources/home/gmnt/girl.jpg" width="350" height="250">
            </div>  
            <div>
                <img src="resources/home/gmnt/design.jpg" width="115" height="95">
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

</div>


<hr>


<!--Including footer -->
<?php include 'footer.php';?>
</body>
</html>
