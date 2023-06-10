cart.php
<?php 
include_once 'connection/siluniconfig.php';
?>

<?php
    session_start();
    $db_name = "supplierreg";
    $connection = new mysqli($servername, $username, $password, $db_name);

    if (!isset($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = array();
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>WeeNet</title>
	<!-- website icon -->
    <!-- link css file -->
	<link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>our products</title>
    <style>
        .product{
            border: 1px solid #eaeaec;
            margin: 2px 2px 8px 2px;
            padding: 15px;
            text-align: center;
            background-color: #efefef;
        }
        th,tr{
              text-align: center;
              border-collapse: collapse;
              padding: 15px;
              border-bottom: 1px solid #ddd;
              height:70px;
              font-size:15px;
  
        }
        tr:hover {
            background-color: #66afe9;}

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
        table th{
            background-color: #efefef;
        }
    </style>
</head>
<body>
    <!-- Including Header -->
<?php include 'header.php'; ?>
<?php
    if(isset($_GET["action"])){
        if($_GET["action"] == "delete"){
            foreach($_SESSION["shopping_cart"] as $keys => $value){
                if($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["shopping_cart"][$keys]);
                    echo '<script>alert("Product has been removed")</script>';
                    echo '<script>window.location="cart.php"</script>';
                }
            }
        }
    }
?>
       <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Description</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>
            <?php
                if(!empty($_SESSION["shopping_cart"])){
                    $total=0;
                    foreach($_SESSION["shopping_cart"] as $key => $value){
                    ?>
                <tr>
                        <td><?php echo $value["product_name"];?></td>
                        <td><?php echo $value["product_quantity"];?></td>
                        <td><?php echo $value["product_price"];?></td>
                        <td><?php echo number_format($value["product_quantity"]*$value["product_price"],2);?></td>
                        <td><a href="cart.php?action=delete&id=<?php echo $value["product_id"]; ?>">Remove Item</span></a></td>
                </tr>
                <?php
                    $total = $total + ($value["product_quantity"]*$value["product_price"]);
                    }
                ?>
                <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right"><?php echo number_format($total,2);?></td>
                        <td></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>

    </div></br>
    <div class="subbutton">
    <input type="submit" value="checkout" style="background-color: white; color: black;" onclick="showAlert()">
	</div>

	<script>
	function showAlert() {
		alert("sucessful!");
        header("Location:index.php");
	}
	</script>
</body>
</html>