<<<<<<< HEAD
<?php

session_start(); 
session_destroy(); 
header("./login.php"); 
exit();
=======
<?php 
    session_start();
    $_SESSION['logedUserInfo'] = NULL;
    header('location: login.php');
    exit;
>>>>>>> 96ded8ad822d351636972f5529deb1f7e38b9866
?>