<!DOCTYPE html>
<html>
<head>
    <title>WeeNet</title>
    <!-- website icon -->
    <!-- link css file -->
    <link rel="stylesheet" href="css/dinuristyle.css">
    <!-- link js file -->
    <script src="js/script.js"></script>
    <script>
	function showAlert() {
		alert("sucessfully message send!");
    }
    </script>
</head>

<body>
<!-- Including Header -->
<?php include 'header.php';?>
<section class="contact">

<div class="content">
    <h2>Contact uS</h2>
    
</div>
<div class="container">
<div class="contactInfo">
    <div class="box">
       <div class="icon"><img width="30" height="30" src="resources/location.webp" alt="marker--v1"/></div>
       <div class="text">
        <h3>Address</h3>
        <p>10/224, Sesatha Garden, Kanda Pansala Road,
Maha Waskaduwa, Kalutara</p>
       </div>
       </div>
       
       <div class="box">
        <div class="icon"><img width="28" height="28" src="resources/phone.png" alt="phone"/></div>
        <div class="text">
            <h3>Phone</h3>
            <p>0112357963</p>

        </div>
       </div>

        <div class="box">
            <div class="icon"><img width="24" height="24" src="resources/email.jpg" alt="new-post"/></div>
            <div class="text">
                <h3>Email</h3>
                <p>weenet236@gmail.com</p>
            </div>
        </div> 
    </div>
<div class="contactForm">
    <form method=POST action="submitcontact.php">
        <h2>Send message</h2>
      
        <div class="inputBox">
        <input type="text" required="required" name="full_name">
          <span>Full Name</span></div>
        
        
        <div class="inputBox">
        <input type="text" required="required" name="email">
        <span>Email</span></div>
        
        
        <div class="inputBox">
        <input type="text" required="required" name="message">
        <span>Type Your message</span></div>
        
        <div class="inputBox">
        <input type="submit" name="" value="Send" onclick="showAlert()">
        </div>
    
        
    </form>
</div>
</div>
</section>
<hr>

<!--Including footer -->
<?php include 'footer.php';?>


</body>
</html>
