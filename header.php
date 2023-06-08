<!-- Header file -->
<html>
<header>
    <title>WeeNet</title>
    <!-- website icon -->
	<link rel = "icon" href="resources/home/icon.jpg" type = "image/x-icon">
    <!-- link css file -->
    <link rel="stylesheet" href="css/style.css">
    <!-- link js file -->
    <script src="shenaljs.js"></script>

    <style>
    .dropdown {
      display: none;
    }
    .header1 {
        background-image: url("resources/home/pbkh1.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    </style>
</header>

<body>

    <!-- header line-->

    <div class="header1">

        <!-- weenet logo-->
        <img src="resources/home/logopng.png" width="70px" height="60px" alt="WeeNet logo" class="logo">
        <!-- search bar-->
        <form class="search-form" action="#" method="get">
            <input type="text" name="search" placeholder="Search..." />
                <button type="submit" class="custom-button">Search</button>
        </form>

        <!-- cart logo-->
        <a href="cart.php"><img src="resources/home/fticons/cart.png" width="40px" height="43px" alt="cart"></a>
        <!-- notification icon-->
        <a href="notification.php"><img src="resources/home/fticons/letter.png" width="40px" height="35px" alt="notifications"></a>
        <!-- profile logo-->
        <a href="profile.php"><img src="resources/home/fticons/profile.png" width="35px" height="35px" alt="profile"></a>
        <!-- login icon -->
        <a href="login.php"><img src="resources/home/fticons/login.png" width="30px" height="25px" alt="wishlist"></a>
        
        <!-- dropdown menu -->
        <div class="header-bar">
            <a href="#" class="logo"><img src="resources/home/fticons/dmenu.png" width="35px" height="35px" alt="dropdown"/></a>
                <div class="dropdown">
                    <ul>
                        <li><a href="orders.php">My Orders</a></li>
                        <li><a href="event.php">Events</a></li>
                        <li><a href="login.php">Log out</a></li>
                    </ul>
                </div>
        </div>
    </div>
<!-- dropdown menu js-->
    
        <script>
            const logoImg = document.querySelector('.logo img');
            const dropdown = document.querySelector('.dropdown');

                logoImg.addEventListener('click', () => {
                dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
            });

                document.addEventListener('click', (event) => {
                const target = event.target;
                if (!logoImg.contains(target) && !dropdown.contains(target)) {
                dropdown.style.display = 'none';   }
            });
        </script>

    

    <center>
        <ul class="menu1">
            <li class="menu"><a href="index.php" style="color: white;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Home</a></li>

            <li class="menu"><a href="products.php" style="color: white;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Our Products</a></li>
            <li class="menu"><a href="career.php" style="color: white;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Vacancies</a></li>
            <li class="menu"><a href="contact.php" style="color: white;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Contact Us</a></li>
            <li class="menu"><a href="about.php" style="color: white;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;About Us</a></li>
        </ul>
    </center>

    <br>




</body>

</html>