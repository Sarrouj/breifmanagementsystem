<?php
session_start();
$dbname = "gestionbriefs";
$user = "root";
$pass = "";

//partie de connection
try {
    $connect = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass);
    
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
//les fonctions 
function login_Apprenant($email, $password, $pdo){
    $stmLoginApprenant = $pdo->prepare("SELECT * FROM apprenant WHERE email=:email and motPass=:pw");
    $stmLoginApprenant->bindParam(':email', $email);
    $stmLoginApprenant->bindParam(':pw', $password);
    $stmLoginApprenant->execute();
    $apprenant = $stmLoginApprenant->fetch(PDO::FETCH_ASSOC);
    if ($apprenant){
        return $apprenant;
    }else{
        return false;
    }
}

function login_Formateur($email, $pw, $pdo){
    $stmLoginFormateur = $pdo->prepare("SELECT * FROM formateur WHERE email=:email and motPass=:pw");
    $stmLoginFormateur->bindParam(':email', $email);
    $stmLoginFormateur->bindParam(':pw', $pw);
    $stmLoginFormateur->execute();
    $data = $stmLoginFormateur->fetch(PDO::FETCH_ASSOC);
    if ($data)
        return $data;
    else
        return false;
}

function latestBriefs($pdo , $idFormateur){
    $latestBriefs = $pdo->prepare("SELECT * FROM brief WHERE idFormateur = :idFormateur ORDER BY idBrief DESC LIMIT 2");
    $latestBriefs->bindParam(':idFormateur', $idFormateur);

    $latestBriefs->execute();
    $latestBriefsData = $latestBriefs->fetchAll(PDO::FETCH_ASSOC);
    if ($latestBriefsData)
        return $latestBriefsData;
    else
        return false;
}
function add_Skill($DB, $id_brief, $id_skill)
{ try{
    $add_skills = "INSERT INTO concerne ( idBrief , idc)
    VALUES (:id_brief , :id_skill ) ";
    $stat_add_s_brief = $DB->prepare($add_skills);
    $stat_add_s_brief->bindParam(':id_brief', $id_brief);
    $stat_add_s_brief->bindParam(':id_skill', $id_skill);

    $stat_add_s_brief->execute();
    echo 'hiii guys';
    } catch (PDOException $e) {
        echo "Error inserting into concerne table: " . $e->getMessage();
    }
}