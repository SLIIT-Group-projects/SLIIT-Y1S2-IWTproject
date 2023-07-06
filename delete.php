<?php
include 'connection.php';
if (isset($_GET['Registration_number'])) {
     $id = $_GET['Registration_number'];
     $query = "DELETE FROM `supplierreg` WHERE Registration_number = '$Registration_number'";
     $run = mysqli_query($conn,$query);
     if ($run) {
          header('location:supplierDelete.php');
     }else{
          echo "Error: ".mysqli_error($conn);
     }
}
?>
