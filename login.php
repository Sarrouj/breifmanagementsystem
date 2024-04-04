<?php

include "./connection.php";
if (isset($_POST['confirmer'])) {
    $email = $_POST['email'];
    $password = $_POST['motpasse'];
    if (!empty($email) && !empty($password)) {
        $FormateurData = login_Formateur($email , $password, $connect);
        $idA = login_Apprenant($email , $password, $connect);
        
        if($FormateurData !== false) {
            $_SESSION['id_user'] = $FormateurData['idFormateur'];
            $_SESSION['logedUserInfo'] = $FormateurData; 
            
            header('location: admin.php');
            exit;
        }elseif($idA !== false) {
            $_SESSION['id_user'] = $idA['idApprenant'];
            $_SESSION['logedUserInfo'] = $idA; 
        
            header('location: internDashboard.php');
            exit;
        }else{
            echo "<span class='error'>email or password is incorrect</span>";
        }
    } else {
        echo "<span class='error'>email or password required </span>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-pVl3Zj2eP+F3zKiCuv/CbN0lcKxG/zh/7w006e9JbaoCiBz+gEN0d6e+SGl8sPmPwM2L7+FdO1Sc25vSxWgDbg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./CSS/login.css">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="spContainer mx-auto">
                <div class="card px-4 py-5 border-0 shadow">
                    <div class="d-inline text-center mb-3">
                        <h3 class="font-weight-bold">Connectez vous à votre compte</h3>
                        <p>connectez cous simplement à votre compte!</p>
                    </div>
                    <form action="" method="POST">
                        <div class="d-inline text-center mb-0">
                            <div class="form-group mx-auto">
                                <input class="form-control inpSp" type="email" placeholder="email" name="email">
                            </div>
                        </div>
                        <div class="d-inline text-center mb-3">
                            <div class="form-group mx-auto">
                                <input class="form-control inpSp" type="password" placeholder="mot de passe" name="motpasse">
                            </div>
                        </div>
                        <div class="d-inline text-left mb-3">

                            <div class="form-group mx-auto">
                                <input class="btn btn-primary" value="Confirmer" type="submit" name="confirmer">
                            </div>
                        </div>
                    </form>
                
                <div class="d-inline text-left mb-1">
                    <div class="form-group mx-auto mb-0">
                        <label class="text-black-50 small">ou connectez-vous avec</label>
                    </div>
                </div>
                <div class="d-inline text-left">
                    <div class="form-group mx-auto">
                        <button type="button" class="btn btn-sm btn-light"> <span class="badge text-white"><i class="fab fa-google text-danger"></i></span>
                            Google
                        </button>
                        <button type="button" class="btn btn-sm btn-light ml-2"> <span class="badge text-white"><i class="fab fa-facebook-f text-primary"></i></span>
                            Facebook
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>