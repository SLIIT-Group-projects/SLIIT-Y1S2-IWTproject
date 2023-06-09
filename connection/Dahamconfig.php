<?php
    $conn=new mysqli("localhost","root","Dahammysql@123","conncetion_checker");
    if($conn->connect_error){
        die("Connection error".$conn->connect_error);

    }else{
       
    }
?>