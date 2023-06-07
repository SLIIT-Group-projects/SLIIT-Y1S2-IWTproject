<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
      <!-- Including Header -->
      <?php include 'header.php'; ?>
      <?php include 'connection/Dahamconfig.php'; ?>


    <div class="container">
       <div class="pro_box1">
            <div class="pro_box1_heading">Profile</div>
            <div class="pro_box1_image">
                <?php
                $sql="SELECT * FROM employee2;";
                $result=$conn->query($sql);
                if ($result->num_rows>0) {
                    while($row = $result->fetch_assoc()){
                        echo "id".$row["id"]." - Name: " . $row["first_name"]. " " . $row["last_name"]." - Address: " . $row["address"]." - age: " . $row["age"]. "<br>";
                    }
                }else{
                    echo "no records";
                }

                $conn->close();
                ?>
            </div>
       </div> 
       <div class="pro_box2"></div> 
    </div>

     <!--Including footer -->
     <?php include 'footer.php'; ?>
</body>
</html>