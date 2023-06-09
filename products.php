<?php 
session_start();
include_once 'config.php';
$dbname = "supplierreg";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Our products</title>
    <!-- link css file -->
	<link rel="stylesheet" href="css/style.css">
    <!-- link js file -->
    <script src="js/script.js"></script>

    <style>
        #container1 {
                    align-text:center
                    background-color: #ffffff;
                    display:flex;
                    }
        p1{
            font-size: 20PX;
        }            
        #container2{
            display:flex;
            margin-left:20px;
        }
        #container3{
            margin: 10px;
        }
        h1{
            color:tomato;
            text-align: center;
            text-size: 50px;

        }
    </style>
</head>
<body>
<!-- Including Header -->
<?php include 'header.php';?>
<div class="container" style="width: 65%">
        <h2>Shopping Cart</h2>
        <?php
            $query = "select * from product order by id asc";
            $result = mysqli_query($connection,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="col-md-3" style="float: left;">
                        <form method="post" action="index.php?action=add&id=<?php echo $row["id"];?>">
                            <div class="product">
                                <img src="<?php echo $row["image"];?>" width="190px" height="200px" class="img-responsive">
                                <h5 class="text-info"><?php echo $row["description"];?></h5>
                                <h5 class="text-danger"><?php echo $row["price"];?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["description"];?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to cart">
                            </div>
                        </form>
                    </div>
        <?php
                }
            }
        ?>
<div id="container1">
<div id="container2">
                    <div><img id='container3' src="resources/product1.jpeg " style="hover:">
                    <center><div><p1>sleeveless sports top</p1></div>
                    <div><input type="number" name="qty1"></div>
                    <div><input type="button" value="add to cart"></div></center>
                    </div>
                    
                    <div>
                    <div><img id='container3' src="resources/product2.jpeg"></div>
                    <center><div><p1>sleeveless sports skinny</p1></div>
                    <div><input type="number" name="qty2"></div>
                    <div><input type="button" value="add to cart"></div> </center>
                    </div>  

                    <div>
                    <div><img id='container3' src="resources/product8.jpeg"></div>
                    <center><div><p1>Training Tights</p1></div>
                    <div><input type="number" name="qty3"></div>
                    <div><input type="button" value="add to cart"></div> </center>
                    </div> 
 
                    <div>
                    <div><img id='container3' src="resources/product3.jpeg"></div>
                    <center><div><p1>Running T-shirts</p1></div>
                    <div><input type="number" name="qty4"></div>
                    <div><input type="button" value="add to cart"></div> </center>
                    </div> 
                    </div>  
 </div>  
    </br>
    <h3>Activewear Men</h3>
 <div id="container2">
                    <div><img id='container3' src="resources/product5.jpeg " style="hover:">
                    <center><div><p1>Men's shorts</p1></div>
                    <div><input type="number" name="qty5"></div>
                    <div><input type="button" value="add to cart"></div></center>
                    </div>
                    
                    <div>
                    <div><img id='container3' src="resources/product6.jpeg"></div>
                    <center><div><p1> Football Pants</p1></div>
                    <div><input type="number" name="qty6"></div>
                    <div><input type="button" value="add to cart"></div> </center>
                    </div>  

                    <div>
                    <div><img id='container3' src="resources/product7.jpeg"></div>
                    <center><div><p1>shortsleeve T-shirt</p1></div>
                    <div><input type="number" name="qty7"></div>
                    <div><input type="button" value="add to cart"></div> </center>
                    </div> 
 
                    <div>
                    <div><img id='container3' src="resources/product4.jpeg"></div>
                    <center><div><p1>Running T-shirts</p1></div>
                    <div><input type="number" name="qty8"></div>
                    <div><input type="button" value="add to cart"></div> </center>
                    </div> 
 </div>  
 </div>                                



<hr>


<!--Including footer -->
<?php include 'footer.php';?>
</body>
</html>