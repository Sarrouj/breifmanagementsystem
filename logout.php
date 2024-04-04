<?php 
    session_start();
    $_SESSION['logedUserInfo'] = NULL;
    header('location: login.php');
    exit;
?>