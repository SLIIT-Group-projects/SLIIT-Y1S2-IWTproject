<?php 
include_once 'connection/siluniconfig.php';
?>
<?php
    session_start();
    $db_name = "iwtdb";
    $connection = new mysqli($servername, $username, $password, $db_name);

    if(isset($_POST["add"])){
        if(isset($_SESSION["shopping_cart"])){
            $item_array_id = array_column($_SESSION["shopping_cart"],"id");
            if(!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'product_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'product_quantity' => $_POST["quantity"],
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
                echo '<script>window.location="product.php"</script>';
            }else{
                echo '<script>alert("Product is already in  the cart")</script>';
                echo '<script>window.location="product.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'product_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'product_quantity' => $_POST["quantity"],
            );
            $_SESSION["shopping_cart"][0] = $item_array;
        }
    }
?>
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
    <style>
        .product{
            border: 1px solid #eaeaec;
            margin: 2px 2px 8px 2px;
            padding: 15px;
            text-align: center;
            background-color: rgb(211, 211, 211);
            width: 220px;
        }
        
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }

        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
           
        }

        .center {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 400vh;
    }

    .checkout-button {
        background-color: grey;
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        box-shadow: none;
        transition: box-shadow 0.3s;
        color: black;
    }

    .checkout-button:hover {
        box-shadow: 0 0 5px black;
    }

    .disStyles{
        text-align:center;
        font-size:50px;
    }
 </style>
</head>
<body>
        <!-- Including Header -->
<?php include 'header.php'; ?>
    <div class="container" style="width: 65%">
        <h1>Our products</h1>
        <?php
            $query = "select * from product order by id asc";
            $result = mysqli_query($connection,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="col-md-3" style="float: left;">
                        <form method="post" action="product.php?action=add&id=<?php echo $row["id"];?>">
                            <div class="product">
                                <img src="<?php echo $row["image"];?>" width="210px" height="200px" class="img-responsive" style="margin-left: -10px;">
                                <h6 class="text-info"><?php echo $row["description"];?></h6>
                                <h6 style="color: #106487;"><?php echo $row["price"];?></h6>
                                <input type="text" name="quantity" value="1">
                                <input type="hidden" name="hidden_name" class="disStyles" value="<?php echo $row["description"];?>">
                                <input type="hidden" name="hidden_price" class="disStyles" value="<?php echo $row["price"];?>">
                                <input type="submit" name="add" style="margin-top: 5px; background-color: #106487;"  value="Add to cart">
                            </div>
                        </form>
                    </div>
             <?php  
            } }
            ?>
            </br>
        <div class="text-center"> <!-- Added a container for center alignment -->
        <form>
            <a href="cart.php">
                <input type="button" class="checkout-button" value="Exit shopping">
            </a>
        </form>
    </div>
</form>

        

</body>
</html>
