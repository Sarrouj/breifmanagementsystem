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

function deleteCard($id ,$connect){
    // Set the PDO error mode to exception
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Prepare the SQL statement
    $stmt = $connect->prepare("DELETE FROM brief WHERE idBrief = :id");
    // Bind the parameter
    $stmt->bindParam(':id', $id);
    // Execute the statement
    $stmt->execute();
}

function internCurrentBrief($idFormateur, $pdo, $currentDate){
    $internCurrentBrief = $pdo->prepare("SELECT brief.* FROM brief INNER JOIN formateur ON brief.idFormateur = formateur.idFormateur 
    WHERE formateur.idFormateur = :idFormateur AND (:currentDate > brief.dateDeb OR :currentDate = brief.dateDeb) ORDER BY idBrief DESC Limit 1;");
    $internCurrentBrief->bindParam(':idFormateur', $idFormateur);
    $internCurrentBrief->bindParam(':currentDate', $currentDate);

    $internCurrentBrief->execute();
    $internCurrentBrief = $internCurrentBrief->fetchAll(PDO::FETCH_ASSOC);
    $currentReversedData = array_reverse($internCurrentBrief);
    if ($currentReversedData)
        return $currentReversedData;
    else
        return false;
}

function PassedtBrief($idFormateur, $pdo, $currentDate){
    $internCurrentBrief = $pdo->prepare("SELECT brief.* FROM brief INNER JOIN formateur ON brief.idFormateur = formateur.idFormateur 
    WHERE formateur.idFormateur = :idFormateur AND (:currentDate > brief.dateDeb OR :currentDate = brief.dateDeb) ORDER BY idBrief DESC Limit 2;");
    $internCurrentBrief->bindParam(':idFormateur', $idFormateur);
    $internCurrentBrief->bindParam(':currentDate', $currentDate);

    $internCurrentBrief->execute();
    $internCurrentBrief = $internCurrentBrief->fetchAll(PDO::FETCH_ASSOC);
    $currentReversedData = array_reverse($internCurrentBrief);
    if ($currentReversedData)
        return $currentReversedData;
    else
        return false;
}

function UpdateFormateur($idFormateur, $pdo){

}