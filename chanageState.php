<?php 
    require_once './connection.php';
    $userInfo = isset($_SESSION['logedUserInfo']) ? $_SESSION['logedUserInfo'] : NULL;
    $SELECT = $_POST['select'];
    $IDB = $_POST['brief_id'];
    $url = $_POST['url'];

    if($SELECT == 'In Progress' || $SELECT == 'To-Do'){
        $stmt_insert_Etat = $connect->prepare('UPDATE realise SET etat =:Etat  where  idBrief = :ID_brief and idApprenant =:ID_Apprenant');
        $stmt_insert_Etat->bindParam(':ID_Apprenant', $userInfo['idApprenant']);
        $stmt_insert_Etat->bindParam(':ID_brief', $IDB);
        $stmt_insert_Etat->bindParam(':Etat', $SELECT);
        $stmt_insert_Etat->execute();
    }elseif($SELECT == 'Done'){
        $stmt_insert_Etat = $connect->prepare('UPDATE realise SET etat = :Etat, url = :url WHERE idBrief = :ID_brief AND idApprenant = :ID_Apprenant');
        $stmt_insert_Etat->bindParam(':ID_Apprenant', $userInfo['idApprenant']);
        $stmt_insert_Etat->bindParam(':ID_brief', $IDB);
        $stmt_insert_Etat->bindParam(':Etat', $SELECT);
        $stmt_insert_Etat->bindParam(':url', $url);
        $stmt_insert_Etat->execute();
    }
    header('Location: InternBriefs.php');
    exit;
?>


