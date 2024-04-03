<?php 
    require_once "./connection.php";
    $id = $_GET['id'];
    deleteCard($id ,$connect);
    header('location: admin.php');
    exit;
?>