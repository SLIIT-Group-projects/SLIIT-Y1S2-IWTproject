<?php
session_start();
?>


<?php
    if(isset($_SESSION['user_id'])){

        include 'profile.php';

    }else{
        
        include 'header.php';
        echo"
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <title>Document</title>
            <link rel='stylesheet' href='css/DahamProfileAbout.css'>
        </head>
        <body>
            <div class='nprof_section'>
                <div class='nprof_btn'>
                <label class='nprof_signIn_btn_sec_para'>First login, to see profile </label>
                    <a href='login.php'><input type='button' class='nprof_signIn_btn' value='Sign In'></a>
                    <div class='nprof_signup_btn_sec'>
                        <label class='nprof_signup_btn_sec_para'>If Don't have an account?</label></br>
                        <a href='register.php'><input type='button' class='nprof_signup_btn' value='Sign Up'></a>

                    </div>
                    

                </div>
            </div>
        </body>
        </html>
        
        
        
        ";
        include 'footer.php';
    }
    ?>
    