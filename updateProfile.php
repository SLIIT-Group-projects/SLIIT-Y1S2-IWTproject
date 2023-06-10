<?php
    session_start();
?>
<?php include 'connection/Dahamconfig.php'; ?>
<?php
    $Uname=$_POST["Uname"];
    $Uaddress=$_POST["Uaddress"];
    $Uemail=$_POST["Uemail"];
    $Ucontact=$_POST["Ucontact"];

    if(isset($name)){
        $query="UPDATE Customers
        SET `username`=".$Uaddress."
        WHERE nic=".$_SESSION['user_id'];
    }else if(isset($Uaddress)){
        $query="UPDATE Customers
        SET `address`=". $Uaddress."
        WHERE nic=".$_SESSION['user_id'];
    }else if(isset($Uemail)){
        $query="UPDATE Customers
        SET `email`=".$Uemail."
        WHERE nic=".$_SESSION['user_id'];
    }else if(isset($Ucontact)){
        $query="UPDATE Customers
        SET `contact`=".$Ucontact."
        WHERE nic=".$_SESSION['user_id'];
    }else{
        echo "error";
    }

    $conn->close();
?>