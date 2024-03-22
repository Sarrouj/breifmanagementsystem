<?php
$dbname = "gestionbriefs";
$user = "root";
$pass = "";


try {
    $connect = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass);
    
} catch (PDOException $ex) {
    echo $ex->getMessage();
    
}
function login_apprenant($email, $Mp, $pdo)
{
    $stmLoginUser = $pdo->prepare("SELECT * FROM apprenant WHERE email=:email AND motPass=:Mp");
    $stmLoginUser->bindParam(':email', $email);
    $stmLoginUser->bindParam(':Mp', $Mp);
    $stmLoginUser->execute();
    $data = $stmLoginUser->fetchAll(PDO::FETCH_ASSOC);
    return $data[0]['idApprenant'];
}
