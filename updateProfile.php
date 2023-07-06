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

    }
    if(!empty($Uaddress)){
        $sql="UPDATE customers
        SET `address`='{$Uaddress}'
        WHERE nic='{$_SESSION['user_id']}'";

        $result = $conn->query($sql);
    }
    if(!empty($Ucontact)){
        $sql="UPDATE customers
        SET `contact`='{$Ucontact}'
        WHERE nic='{$_SESSION['user_id']}'";
         $result = $conn->query($sql);
    }
    echo '<script>alert("Updated Successfully")</script>';
    echo '<script>window.location="profile.php"</script>';
    
    $conn->close();
?>