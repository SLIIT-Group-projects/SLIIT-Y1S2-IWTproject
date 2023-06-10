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
        align-items: center;
        justify-content: center;
        height: 100vh;
        align-items: flex-start;
        margin-top: -18px;
    }

    #container1 div {
        flex: 1;
        text-align: center;
        transition: opacity 0.5s;
    }

    #container1 div:first-child {
        margin-top: 0;
    }

    #container1 div:hover {
        opacity: 0.8;
    }

    #container1 div:hover img {
            filter: brightness(60%);
        }

    ul.menu1{
	    list-style-type:none;
	    background-color: #123142;
	    overflow:hidden;
        padding:8px 16px; 
    }

    .centered-menu {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
    }

    .menu-item {
        margin: 0 10px;
    }

    .menu-item:not(:last-child) {
        margin-right: 20px;
    }

    .menu-item a {
        color: white;
        text-decoration: none;
    }
 

    #container2 {
        background-image: url("resources/home/pbkh1.jpg");
        background-size: cover;
        background-repeat: no-repeat;  
         
    }
    #container3 {
        display: flex;  
    }

    #container4 {
        flex-direction: column; 
        margin-left: 5px;
    }

    
    h4 {
        margin-left: 12px;
    }

    

	</style>
</head>

<body>
	<!-- Including Header -->
	<?php include 'header.php';?>

    <div id="container1">
        <div>
            <img src="resources/career/h5.jpg" width="1335px" height="618px" alt="notifications">
        </div>
        <div>
            <img src="resources/career/h3.jpg" width="1335px" height="618px" alt="notifications">
        </div>
        <div>
            <img src="resources/career/h4.jpg" width="1335px" height="618px" alt="notifications">
        </div>     
    </div>

    <script>
        const images = [
            "resources/career/h5.jpg",
            "resources/career/h3.jpg",
            "resources/career/h4.jpg"
        ];
        let currentIndex = 0;

        const imageElements = document.querySelectorAll("#container1 img");

        imageElements.forEach((img, index) => {
            img.addEventListener("wheel", function(event) {
                if (event.deltaY < 0) {
                    // Scrolling up
                    currentIndex = (currentIndex - 1 + images.length) % images.length;
                } else {
                    // Scrolling down
                    currentIndex = (currentIndex + 1) % images.length;
                }

                // Update the image source for all image elements
                imageElements.forEach((img, i) => {
                    if (i !== currentIndex) {
                        img.style.display = "none"; // Hide the non-selected images
                    } else {
                        img.style.display = "block"; // Show the selected image
                    }
                });

                // Prevent default scroll behavior
                event.preventDefault();
            });
        });
    </script>


    <center>
        <h1 style="color: grey;">Welcome to our Vacancy page at WeeNet Garments!</h1>
    </center>
 
    <div id="container2">

        <div id="container3">
        
            <img src="resources/career/text1.png" width="460" height="300">

            <img src="resources/career/c1.png" width="460" height="300" style="border-radius: 10px; margin-top: 10px; margin-bottom: 10px; margin-left: -4px;">

            <img src="resources/career/text2.png" width="460" height="300" >

            <div id="container4">
                <img src="resources/career/c22.png" width="130" height="143" style="border-radius: 10px; margin-top: 10px; margin-bottom: 10px; margin-right: 2px;">
                <img src="resources/career/c23.png" width="130" height="143" style="border-radius: 10px; margin-bottom: 10px; margin-right: 2px;">
            </div>
            <div id="container4">
                <img src="resources/career/c24.png" width="130" height="143" style="border-radius: 10px; margin-top: 10px; margin-bottom: 10px; margin-right: 2px; margin-left: -8px;">
                <img src="resources/career/c25.png" width="130" height="143" style="border-radius: 10px; margin-bottom: 10px; margin-right: 2px; margin-left: -8px;">
            </div>

        </div> 
        
        <div id="container3">
        <img src="resources/career/c27.png" width="470" height="300" style="border-radius: 10px; margin-top: 10px; margin-bottom: 10px; margin-left: 10px;">
        <img src="resources/career/c26.png" width="470" height="300" style="border-radius: 10px; margin-top: 10px; margin-bottom: 10px; margin-left: 10px;" >
        <img src="resources/career/c21.png" width="470" height="300" style="border-radius: 10px; margin-top: 10px; margin-bottom: 10px; margin-left: 10px; margin-right: 10px;">

        </div>

    </div>

        <center>
            <h1 style="color: grey;">Available Vacancies </h1>

            <h3 style="color: grey;">Apologies, but no vacancies are currently available. Please check back later for updates.</h3>
        </center>




	<hr>

	<!-- Including footer -->
	<?php include 'footer.php';?>
</body>
</html>
