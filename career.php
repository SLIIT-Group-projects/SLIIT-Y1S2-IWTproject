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
 

    li a{
	    display:block;
	    text-align:relative;
	    padding:10px 16px;
	    text-decoration:none;
    }

    li a:hover{
	    background-color:rgb(89, 184, 187);
    }

    li.menu {
        float:left;
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
        <ul class="menu1">
            <li class="menu"><a href="index.php" style="color: white;"> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Our Vision </a></li>
            <li class="menu"><a href="products.php" style="color: white;"> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Hiring Process </a></li>
            <li class="menu"><a href="career.php" style="color: white;"> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Live Your Mission </a></li>
            <li class="menu"><a href="contact.php" style="color: white;"> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Jobs </a></li>
        </ul>
    </center>

	<hr>

	<!-- Including footer -->
	<?php include 'footer.php';?>
</body>
</html>
