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
                <a href="./admin.php" class="m-0 active">
                    <span class="material-icons-sharp">
                        <i class="fa-solid fa-chart-pie text-xl mb-2"></i>
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        <i class="fa-solid fa-user text-xl mb-2"></i>
                    </span>
                    <h3>Profil</h3>
                </a>
                <a href="./breifs.php">
                    <span class="material-icons-sharp">
                        <i class="fa-regular fa-file text-2xl mb-2"></i>
                    </span>
                    <h3>Briefs</h3>
                </a>
                <a href="./addBrief.php">
                    <span class="material-icons-sharp">
                        <i class="fa-solid fa-plus text-xl mb-2"></i>
                    </span>
                    <h3>Add Brief</h3>
                </a>
                <a href="./repport.php">
                    <span class="material-icons-sharp">
                        <i class="fa-solid fa-chart-simple text-xl mb-2"></i>
                    </span>
                    <h3>Reports</h3>
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
        //session_start();
        include("connection.php");
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
        $TotalB = "SELECT COUNT(*) AS total_Briefs FROM brief WHERE idFormateur =:idF";
        $statment = $connect->prepare($TotalB);
        $statment->bindParam(":idF", $_SESSION['id_user']);
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
            <h1 style="font-weight: 800 !important; font-size: 1.8rem !important;">Analytics</h1>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status px-5">
                        <div class="info">
                            <h3>Total Briefs</h3>
                            <?php echo "<h1>$totalBriefs</h1>" ?>
                        </div>
                        <i class="fa-solid fa-file text-3xl pt-5"></i>
                    </div>
                </div>
                <div class="visits">
                    <div class="status px-5">
                        <div class="info">
                            <h3>Interns</h3>
                            <?php echo "<h1>$totalApprenants</h1>" ?>
                        </div>
                        <i class="fa-solid fa-user-group text-3xl pt-5"></i>
                    </div>
                </div>
                <div class="searches">
                    <div class="status px-5">
                        <div class="info">
                            <h3>Teachers</h3>
                            <?php echo "<h1>$totalFormateur</h1>" ?>
                        </div>
                        <i class="fa-solid fa-file-signature text-3xl pt-5"></i>
                    </div>
                </div>
            </div>
            <section class="mt-5">
                <h2 class="mb-5" style="font-weight: 600; font-size:1.4rem;">Top Interns</h2>
                <div class="flex gap-3">
                    <div class="flex justify-center gap-3 rounded-3xl w-1/4 cursor-pointer internCard" class="background-color : var(--color-background);">
                        <div class="p-5">
                            <div class="w-28 h-28 rounded-full overflow-hidden">
                                <img src="./Files/11.png" alt="intern" style="width: 100%; height: 100%;">
                            </div>
                            <div class="w-full flex justify-center pt-3">
                                <h3>Hamza Garti</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center gap-3 rounded-3xl w-1/4 cursor-pointer internCard" class="background-color : var(--color-background);">
                        <div class="p-5">
                            <div class="w-28 h-28 rounded-full overflow-hidden">
                                <img src="./Files/Housame.png" alt="intern">
                            </div>
                            <div class="w-full flex justify-center pt-3">
                                <h3>Housame Brihi</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center gap-3 rounded-3xl w-1/4 cursor-pointer internCard" class="background-color : var(--color-background);">
                        <div class="p-5">
                            <div class="w-28 h-28 rounded-full overflow-hidden">
                                <img src="./Files/22.png" alt="intern" style="width: 100%; height: 100%;">
                            </div>
                            <div class="w-full flex justify-center pt-3">
                                <h3>M Jamoun</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center gap-3 rounded-3xl w-1/4 cursor-pointer internCard" class="background-color : var(--color-background);">
                        <div class="p-5">
                            <div class="w-28 h-28 rounded-full overflow-hidden">
                                <img src="./Files/achraaaf.JPG" alt="intern">
                            </div>
                            <div class="w-full flex justify-center pt-3">
                                <h3>Achraf el Baizagh</h3>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End of Analyses -->
            <div class="new-users">
                <h2>Latest Briefs</h2>
                <div class="flex gap-5 mt-5">
                    <?php
                    $idFormateur = $_SESSION['logedUserInfo']['idFormateur'];
                    $latestBriefsData = latestBriefs($connect, $idFormateur);
                    foreach ($latestBriefsData as $row) :
                    ?>
                        <div class="rounded-3xl p-5 flex flex-col items-center w-3/4 breiffCard" class="background-color : var(--color-background);">
                            <div class="pb-5 pt-2 w-full text-center" style=" border-bottom: 1px solid #979797 !important">
                                <h2><?php echo $row['titre'] ?></h2>
                            </div>
                            <div class="flex flex-col items-center mb-5">
                                <?php
                                $endDate = strtotime($row['dateFin']);
                                $startDate = strtotime($row['dateDeb']);
                                $currentDate =  time();
                                if ($currentDate < $startDate) :
                                ?>
                                    <p class="my-5 font-semibold">Status : <span class="text-orange-500">Upcoming</span></p>
                                <?php
                                elseif ($currentDate > $startDate || $currentDate == $startDate) :
                                ?>
                                    <p class="my-5 font-semibold">Status : <span class="text-green-500">Started</span></p>
                                <?php
                                elseif ($endDate > $currentDate) :
                                ?>
                                    <p class="my-5 font-semibold">Status : <span class="text-red-500">Finished</span></p>
                                <?php
                                endif;
                                ?>
                                <div class="flex w-full gap-20 justify-between">
                                    <div class="py-2 px-2 bg-blue-300 rounded-lg text-white ">Start at : <span><?php echo $row['dateDeb'] ?></span></div>
                                    <div class="py-2 px-2 bg-blue-300 rounded-lg text-white ">End at : <span><?php echo $row['dateFin'] ?></span></div>
                                </div>
                            </div>
                            <div class="w-full flex justify-between pt-6 " style=" border-top: 1px solid #979797 !important">
                                <div class="flex bg-blue-400 py-3 px-5 rounded-lg cursor-pointer gap-5 items-center">
                                    <p class="text-white font-semibold">Attachement</p>
                                    <i class="fa-solid fa-arrow-down text-white"></i>
                                </div>
                                <?php
                                if ($currentDate < $startDate) :
                                ?>
                                    <div class=" py-3 px-5 rounded-lg bg-red-400 cursor-pointer">
                                        <a href="./deleteCards.php?id=<?php echo $row['idBrief']; ?>">
                                            <i class="fa-solid fa-trash text-white"></i>
                                        </a>
                                    </div>
                                <?php
                                endif;
                                ?>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
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
                        <small class="text-muted">Trainer</small>
                    </div>
                    <div class="profile-photo">
                        <img src="Files/fatine.png">
                    </div>
                </div>
            </div>
            <!-- End of Nav -->
            <div class="user-profile">
                <div class="logo">
                    <img src="Files/fatine.png">
                    <?php
                    $userInfo = isset($_SESSION['logedUserInfo']) ? $_SESSION['logedUserInfo'] : NULL;
                    if ($userInfo) :
                    ?>
                        <h2 style="font-weight: 600; font-size:1.4rem;"><?php echo $userInfo['nom'] . ' ' . $userInfo['prenom'] ?></h2>
                    <?php
                    endif;
                    ?>
                    <p>Teacher at solicode</p>
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
                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Add Reminder</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/4938da1e0a.js" crossorigin="anonymous"></script>
<script src="./index.js"></script>

</html>