<?php
require_once './connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/style2.css">
    <title>Management System</title>
</head>

<body>
    <div class="container" style="display: grid; width: 95%; margin: 0 auto; gap: 4.2rem; grid-template-columns: 16rem auto 20rem; ">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="Files/loggo.png">
                    <h2 style="font-weight: 600; font-size:1.4rem;">SOLI-<span class="danger">BRIEFS</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>
            <div class="sidebar pt-3">
                <a href="./internDashboard.php">
                    <span class="material-icons-sharp">
                        <i class="fa-solid fa-chart-pie text-xl mb-2"></i>
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="./InternBriefs.php" class="m-0 active">
                    <span class="material-icons-sharp">
                        <i class="fa-regular fa-file text-2xl mb-2"></i>
                    </span>
                    <h3>Briefs</h3>
                </a>
                <a href="./logout.php">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->
        <?php
        // session_start();
        // include("connection.php");
        //total of treaners
        $TotalApp = "SELECT COUNT(*) AS total_apprenant FROM apprenant;";
        $statment = $connect->prepare($TotalApp);
        $statment->execute();
        $data = $statment->fetchAll(PDO::FETCH_ASSOC);
        $totalApprenants = $data[0]['total_apprenant'];
        //total of teatchers
        $TotalF = "SELECT COUNT(*) AS total_formateur FROM formateur;";
        $statment = $connect->prepare($TotalF);
        $statment->execute();
        $data = $statment->fetchAll(PDO::FETCH_ASSOC);
        $totalFormateur = $data[0]['total_formateur'];
        // total of briefs
        $TotalB = "SELECT COUNT(*) AS total_Briefs FROM brief;";
        $statment = $connect->prepare($TotalB);
        $statment->execute();
        $data = $statment->fetchAll(PDO::FETCH_ASSOC);
        $totalBriefs = $data[0]['total_Briefs'];
        //select Briefs
        $selectBrief = "SELECT * FROM brief";
        $statment = $connect->prepare($selectBrief);
        $statment->execute();
        $data = $statment->fetchAll(PDO::FETCH_ASSOC);

        ?>
        <!-- Main Content -->
        <main>
            <h1 style="font-weight: 800 !important; font-size: 1.8rem !important;">Current Brief</h1>
            <div class="mt-5 flex flex-col gap-5">
                <?php
                $currentDate =  date("Y-m-d", time());
                $idFormateur = isset($_SESSION['logedUserInfo']) ? $_SESSION['logedUserInfo'] : NULL;
                $currentBriefData = internCurrentBrief($idFormateur['idFormateur'], $connect, $currentDate);

                foreach ($currentBriefData as $row) :

                ?>
                    <div class="rounded-lg w-full bg-white p-5">
                        <div class="flex justify-between items-center pb-5 border-b-2">
                            <h1 class="w-1/3" style="font-size: 1.3rem !important;"><?php echo $row['titre'] ?></h1>
                            <div class="flex bg-blue-400 py-2 px-5 rounded-lg cursor-pointer gap-5 items-center h-10">
                                <p class="text-white font-semibold">Attachement</p>
                                <i class="fa-solid fa-arrow-down text-white"></i>
                            </div>
                        </div>
                        <div class="flex py-5 items-center justify-between border-b-2">
                            <p class="text-lg font-semibold">Deadline:</p>
                            <div class="flex items-center gap-3">
                                <div class="px-4 py-1 bg-green-500 text-white rounded-lg"><?php echo $row['dateDeb'] ?></div>
                                <i class="fa-solid fa-angle-right text-lg font-bold"></i>
                                <div class="px-4 py-1 bg-red-500 text-white rounded-lg"><?php echo $row['dateFin'] ?></div>
                            </div>
                        </div>
                        <form class="flex py-5 justify-between" method="POST" action="./chanageState.php">
                            <div class="flex gap-2">
                                <select name="select" id="CurrentStatus" class="bg-blue-400 px-3 py-2 text-white rounded-lg w-40">
                                    <option value="To Do">To Do</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Done">Done</option>
                                </select>
                                <input type="text" placeholder="Enter The URL" class="border-2 border-blue-400 rounded-lg px-2 w-60 hidden urlInput" name="url">
                            </div>
                            <input type="submit" value="Send" class="bg-blue-400 px-14 text-white rounded-lg text-sm font-semibold cursor-pointer">
                            <input type="hidden" name="brief_id" value="<?= $row['idBrief'] ?>">
                        </form>
                    </div>
                <?php
                // endif;
                endforeach;
                ?>
            </div>
            <h1 style="font-weight: 800 !important; font-size: 1.8rem !important;" class="mt-5">Passed Brief</h1>
            <div class="mt-5 flex flex-col gap-5">
                <?php
                $currentDate =  date("Y-m-d", time());
                $idFormateur = isset($_SESSION['logedUserInfo']) ? $_SESSION['logedUserInfo'] : NULL;
                $counter = 0;
                $currentBriefData = PassedtBrief($idFormateur['idFormateur'], $connect, $currentDate);
                foreach ($currentBriefData as $row) :
                    $counter++;
                    if ($counter == 1) :
                ?>
                        <div class="rounded-lg w-full bg-white p-5">
                            <div class="flex justify-between items-center pb-5 border-b-2">
                                <h1 class="w-1/3" style="font-size: 1.3rem !important;"><?php echo $row['titre'] ?></h1>
                                <div class="flex bg-blue-400 py-2 px-5 rounded-lg cursor-pointer gap-5 items-center h-10">
                                    <p class="text-white font-semibold">Attachement</p>
                                    <i class="fa-solid fa-arrow-down text-white"></i>
                                </div>
                            </div>
                            <div class="flex py-5 items-center justify-between border-b-2">
                                <p class="text-lg font-semibold">Deadline:</p>
                                <div class="flex items-center gap-3">
                                    <div class="px-4 py-1 bg-green-500 text-white rounded-lg"><?php echo $row['dateDeb'] ?></div>
                                    <i class="fa-solid fa-angle-right text-lg font-bold"></i>
                                    <div class="px-4 py-1 bg-red-500 text-white rounded-lg"><?php echo $row['dateFin'] ?></div>
                                </div>
                            </div>
                            <form class="flex py-5 justify-between">
                                <div class="flex gap-2">
                                    <select name="select" id="passedStatus" class="bg-blue-400 px-3 py-2 text-white rounded-lg w-40">
                                        <option value="To-Do">To Do</option>
                                        <option value="In Progress">In Progress</option>
                                        <option value="Done">Done</option>
                                    </select>
                                    <input type="text" placeholder="Enter The URL" class="border-2 border-blue-400 rounded-lg px-2 w-60 hidden passedUrlInput">
                                </div>
                                <input type="submit" value="Send" class="bg-blue-400 px-14 text-white rounded-lg text-sm font-semibold cursor-pointer">
                                <input type="hidden" name="brief_id" value="<?= $row['idBrief'] ?>">
                            </form>
                        </div>
                <?php
                    endif;
                endforeach;
                ?>
            </div>
        </main>
        <!-- End of Main Content -->
        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>
                <div class="profile">
                    <div class="info">
                        <?php
                        $userInfo = isset($_SESSION['logedUserInfo']) ? $_SESSION['logedUserInfo'] : NULL;
                        if ($userInfo) :
                        ?>
                            <p>Hey, <b><?php echo $userInfo['prenom'] ?></b></p>
                        <?php
                        endif;
                        ?>
                        <small class="text-muted">Intern</small>
                    </div>
                    <div class="profile-photo">
                        <img src="Files/Housame.png">
                    </div>
                </div>
            </div>
            <!-- End of Nav -->
            <div class="user-profile">
                <div class="logo">
                    <img src="Files/Housame.png">
                    <?php
                    $userInfo = isset($_SESSION['logedUserInfo']) ? $_SESSION['logedUserInfo'] : NULL;
                    if ($userInfo) :
                    ?>
                        <h2 style="font-weight: 600; font-size:1.4rem;"><?php echo $userInfo['nom'] . ' ' . $userInfo['prenom'] ?></h2>
                    <?php
                    endif;
                    ?>
                    <p>Intern At SOLICODE</p>
                </div>
            </div>
            <div class="reminders">
                <div class="header">
                    <h2 style="font-weight: 600; font-size:1.4rem;">Reminders</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>
                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>YouCan EVENT</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>
                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Dia Lhak El Falouse</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/4938da1e0a.js" crossorigin="anonymous"></script>
<script src="./index.js"></script>
<script src="./intern.js"></script>

</html>