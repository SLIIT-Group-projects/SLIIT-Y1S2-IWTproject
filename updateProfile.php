<?php
    session_start();
?>
<?php include 'connection/Dahamconfig.php'; ?>
<?php
    $Uname=$_POST["Uname"];
    $Uaddress=$_POST["Uaddress"];
    $Ucontact=$_POST["Ucontact"];

    if(!empty($Uname)){
        $sql="UPDATE customers
        SET `username`='{$Uname}'
        WHERE nic='{$_SESSION['user_id']}'";

        $result = $conn->query($sql);
        header('Location: profileS.php');
    }
    if(!empty($Uaddress)){
        $sql="UPDATE customers
        SET `address`='{$Uaddress}'
        WHERE nic='{$_SESSION['user_id']}'";

        $result = $conn->query($sql);
        header('Location: profileS.php');
    }
    if(!empty($Ucontact)){
        $sql="UPDATE customers
        SET `contact`='{$Ucontact}'
        WHERE nic='{$_SESSION['user_id']}'";
         $result = $conn->query($sql);
         header('Location: profileS.php');
    }

    $conn->close();
?>