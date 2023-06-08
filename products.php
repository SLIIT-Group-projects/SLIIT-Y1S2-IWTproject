<!DOCTYPE html>
<html>
<head>
	<title>WeeNet</title>
    <!-- link css file -->
	<link rel="stylesheet" href="css/style.css">
    <!-- link js file -->
    <script src="js/script.js"></script>

    <style>
.abt_section4 {
  width: 100%;
  height: 700px;
  background-color: #eee9e9;
}
.abt_sect4_container {
  padding: 0;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 40px;
}
.abt_sect4_box1 {
  width: 250px;
  height: 100px;
  background-color: #555;
  border-radius: 20px;
  align-content: center;
  display: flex;
  align-items: center;
  justify-content: center;
}
.abt_sect4_heading {
  font-size: 27px;
  color: white;
  font-weight: bold;
}
.abt_sect4_btn {
  padding: 10px 15px;
  border: 2px solid #7c7b7b;
  font-size: 17px;
  border-radius: 10px;
  cursor: pointer;
}
.abt_sect4_btn::hover{
  cursor: pointer;
}
/* changing button css */
.abt_sect4_btn1 {
  background-color: rgb(89, 89, 231);
  color: white;
}
.abt_sect4_btn2 {
  background-color: white;
  color: black;
}

.abt_sect4_btn3 {
  background-color: white;
  color: black;
}

.abt_sect4_box3 {
  display: flex;
  flex-direction: row;
  gap: 30px;

}

.abt_sect4_box2_prof {
  width: 290px;
  height: 300px;
  background-color: #747171;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 5px;
  border-radius: 10px;
}
        container {
                    padding: 0;
                    display: flex;
                    height: 100vh;
                    flex-direction: column;
                    align-items: center;
                    padding-top: 80px;
                    gap: 70px;
                    }
        
    </style>
</head>

<body>
<!-- Including Header -->
<?php include 'header.php';?>

<h2>Shop Here</h2>
<h3>women</h3>

<br><br><br><br>
<div class="abt_sect4_box3" id="abt_change_block1">
                <div class="abt_sect4_box2_prof">
                    <div class="abt_sect4_box2_prof_container abt_sect4_box2_prof1_img"></div>
                    <div class="abt_sect4_box2_prof_para">
                        <div class="abt_sect4_box2_prof_para_heading"><img src="resources/product1.jpeg"></div>
                        <div class="abt_sect4_box2_prof_para_txt">Co Founder</div>
                    </div>
                    <input type="button" class="abt_sect4_box2_prof_btn" value="see more">
                </div>
                <!-- second profile -->
                <div class="abt_sect4_box2_prof">
                <div ></div>
                    <div class="abt_sect4_box2_prof_para">
                        <div class="abt_sect4_box2_prof_para_heading"><img src="resources/product2.jpeg"></div>
                        <div class="abt_sect4_box2_prof_para_txt">Co Founder</div>
                    </div>
                    <input type="button" class="abt_sect4_box2_prof_btn" value="see more">
                </div>
            <!-- third profile -->
                <div class="abt_sect4_box2_prof">
                <div class="abt_sect4_box2_prof_container abt_sect4_box2_prof3_img"></div>
                    <div class="abt_sect4_box2_prof_para">
                        <div class="abt_sect4_box2_prof_para_heading"><img src="resources/product3.jpeg"></div>
                        <div class="abt_sect4_box2_prof_para_txt">Co Founder</div>
                    </div>
                    <input type="button" class="abt_sect4_box2_prof_btn" value="see more">
                </div>
            </div>

                </br></br></br></br></br></br></br></br></br>


</section>
<hr>


<!--Including footer -->
<?php include 'footer.php';?>
</body>
</html>