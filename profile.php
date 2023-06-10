
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/DahamProfileAbout.css">

</head>

<body>

    <!-- Including Header -->
    <?php include 'header.php'; ?>
    <?php include 'connection/Dahamconfig.php'; ?>


    <div class="prof_section1">
        <div class="pro_box">

            <div class="pro_box1_upper">
                <div class="pro_box1_heading">Profile</div>
                <div class="pro_box1_image">
                </div>

            </div>
            <div class="pro_box1_lower" id="pro_box1">
                <!-- <div class="pro_box1"></div> -->
                <?php
                $sql = "SELECT * FROM supplierreg WHERE nic='{$_SESSION['user_id']}'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='pro_box1_lower_com pro_box1_lower_ID'><i class='fa-solid fa-id-card-clip prof_icon'></i>Customer Nic :  <label class='pro_box1_lower_data'>" . $row["nic"] . "</label></div>
                <div class='pro_box1_lower_com pro_box1_lower_name'><i class='fa-solid fa-file-signature prof_icon'></i>user name :  <label class='pro_box1_lower_data'>" . $row["username"]. "</label></div>
                <div class='pro_box1_lower_com pro_box1_lower_address'><i class='fa-solid fa-address-book prof_icon'></i>Address : <label class='pro_box1_lower_data'>" . $row["address"] . "</label></div>
                <div class='pro_box1_lower_com pro_box1_lower_email'><i class='fa-solid fa-envelope prof_icon'></i>Email : <label class='pro_box1_lower_data'>" . $row["email"] . "</label></div>
                <div class='pro_box1_lower_com pro_box1_lower_number'><i class='fa-solid fa-phone prof_icon'></i>Contact Number : <label class='pro_box1_lower_data'>" . $row["contact"] . "</label></div>";
                    }
                } else {
                    echo "no records";
                }

                $conn->close();
                ?>


                <input type="button" class="pro_box1_lower_edit" value="  Edit  " name="pro_edit" onclick="profileedit('pro_box2');">

            </div>
            <!-- duplicate edit section -->
            <form action="updateProfile.php" method="POST">
                <div class="pro_box1_lower pro_box1_duplicate" id="pro_box2">
                    <div class="pro_box1_duplicate_sec1">
                        <div class="pro_box1_duplicate_sec1">update username:</div>
                        <input type="text" name="Uname" class="pro_box1_duplicate_box">
                    </div>
                    <div class="pro_box1_duplicate_sec2">
                        <div class="pro_box1_duplicate_sec1">update address :</div>
                        <input type="text" name="Uaddress" class="pro_box1_duplicate_box">
                    </div>
                    <div class="pro_box1_duplicate_sec4">
                        <div class="pro_box1_duplicate_sec1">update number :</div>
                        <input type="text" name="Ucontact" class="pro_box1_duplicate_box">

                    </div>
                    <div class="pro_box1_duplicate_btn">
                        <input type="submit" class="pro_box1_lower_edit pro_box1_duplicate_upbtn" value=" Update " name="update">
                        <input type="button" class="pro_box1_lower_edit pro_box1_duplicate_pbtn" value=" profile " name="pro_edit" onclick="profileedit('pro_box1');">
                    </div>
                </div>
            </form>


        </div>

    </div>

    <!--Including footer -->
    <?php include 'footer.php'; ?>

    <script src="https://kit.fontawesome.com/79961d807c.js" crossorigin="anonymous"></script>
</body>

</html>