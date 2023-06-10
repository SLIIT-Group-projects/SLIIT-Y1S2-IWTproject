<?php

    session_start();

    $_SESSION = array();

	//check whether a cookie has been created after starting the session
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(), '', time()-3600, '/');
    }

    session_destroy();

    header("Location: index.php");

?>