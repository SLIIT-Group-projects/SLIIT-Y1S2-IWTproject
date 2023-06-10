<?php
    session_start();
?>
<?php include 'connection/Dahamconfig.php'; ?>
<?php
    $Uname=$_POST["Uname"];
    $Uaddress=$_POST["Uaddress"];
    $Ucontact=$_POST["Ucontact"];

    if(!empty($Uname)){
        echo "name updated";
        echo $_SESSION['user_id'];
        $sql="UPDATE Customers
        SET `username`='{$Uname}'
        WHERE nic='{$_SESSION['user_id']}'";

    $result = $conn->query($sql);
    }
    if(!empty($Uaddress)){
        echo "adadada";
        $sql="UPDATE Customers
        SET `address`='{$Uaddress}'
        WHERE nic='{$_SESSION['user_id']}'";

    $result = $conn->query($sql);
    }
    if(!empty($Ucontact)){
        $sql="UPDATE Customers
        SET `contact`='{$Ucontact}'
        WHERE nic='{$_SESSION['user_id']}'";
         $result = $conn->query($sql);
    }else{
        echo "error";
    }

    $conn->close();
?>