<?php 
    session_start();
?>

<?php 

if(isset($_SESSION['user_id'])){
    
    echo '<img src="resources/login/logout.jpg" alt="Image" style="width: 1333px; height: 800px;">';

}else{
    include 'login.php';
}
?>