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


    <div class="prof_section1">
        <div class="pro_box1">
            <div class="pro_box1_upper">
                <div class="pro_box1_heading">Profile</div>
                <div class="pro_box1_image">
                </div>

            </div>
            <div class="pro_box1_lower">
            <?php
                $sql="SELECT * FROM customer;";
                $result=$conn->query($sql);
                if ($result->num_rows>0) {
                    while($row = $result->fetch_assoc()){
                echo "<div class='pro_box1_lower_com pro_box1_lower_ID'><i class='fa-solid fa-id-card-clip prof_icon'></i>Customer ID :  <label class='pro_box1_lower_data'>".$row["nic"]."</label></div>
                <div class='pro_box1_lower_com pro_box1_lower_name'><i class='fa-solid fa-file-signature prof_icon'></i>Name :  <label class='pro_box1_lower_data'>".$row["first_name"]." ".$row["last_name"]."</label></div>
                <div class='pro_box1_lower_com pro_box1_lower_address'><i class='fa-solid fa-address-book prof_icon'></i>Address : <label class='pro_box1_lower_data'>".$row["address"]."</label></div>
                <div class='pro_box1_lower_com pro_box1_lower_email'><i class='fa-solid fa-envelope prof_icon'></i>Email : <label class='pro_box1_lower_data'>".$row["email"]."</label></div>
                <div class='pro_box1_lower_com pro_box1_lower_number'><i class='fa-solid fa-phone prof_icon'></i>Contact Number : <label class='pro_box1_lower_data'>".$row["number"]."</label></div>";
                    }
                }else{
                    echo "no records";
                }

                $conn->close();
                ?>
                

                <input type="button" class="pro_box1_lower_edit" value="Edit" name="pro_edit">
            </div>
        </div>
        <!-- <div class="pro_box1_duplicate">
            <div class="pro_box1_duplicate_sec1">
                <div class="pro_box1_duplicate_sec1_nam"></div>
                <input type="text" class="pro_box1_duplicate_">
            </div>
        </div> -->
        <div class="pro_box2">
            <div class="pro_box2_upper">
                <div class="pro_box2_heading">Order</div>

            </div>
            <div class="pro_box2_lower">

            </div>
        </div>
    </div>

    <!--Including footer -->
    <?php include 'footer.php'; ?>

    <script src="https://kit.fontawesome.com/79961d807c.js" crossorigin="anonymous"></script>
</body>

</html>