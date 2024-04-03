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
        <div class="container"  style="display: grid; width: 95%; margin: 0 auto; gap: 4.2rem; grid-template-columns: 16rem auto 20rem; ">
            <!-- Sidebar Section -->
            <aside>
                <div class="toggle">
                    <div class="logo">
                        <img src="images/logooooo.png">
                        <h2 style="font-weight: 600; font-size:1.4rem;">SOLI-<span class="danger">BRIEFS</span></h2>
                    </div>
                    <div class="close" id="close-btn">
                        <span class="material-icons-sharp">
                            close
                        </span>
                    </div>
                </div>
                <div class="sidebar pt-3">
                    <a href="./internDashboard.php" class="m-0 active">
                        <span class="material-icons-sharp">
                            <i class="fa-solid fa-chart-pie text-xl mb-2"></i>
                        </span>
                        <h3>Dashboard</h3>
                    </a>
                    <a href="./InternBriefs.php">
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
            $selectBrief="SELECT * FROM brief";
            $statment = $connect->prepare($selectBrief);
            $statment->execute();
            $data = $statment->fetchAll(PDO::FETCH_ASSOC);
            // select in table
            $statement = $connect->prepare("SELECT titre, dateDeb, dateFin, etat 
            FROM brief
            INNER JOIN realise ON brief.idBrief = realise.idBrief");
            $statement->execute();
            //$History = $statment->fetchAll(PDO::FETCH_ASSOC);
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
                                <h3>Completed</h3>
                                <?php echo "<h1>$totalApprenants</h1>" ?>
                            </div>
                            <i class="fa-solid fa-file text-3xl pt-5"></i>
                        </div>
                    </div>
                    <div class="searches">
                        <div class="status px-5">
                            <div class="info">
                                <h3>InCompleted</h3>
                                <?php echo "<h1>$totalFormateur</h1>" ?>
                            </div>
                            <i class="fa-solid fa-file text-3xl pt-5"></i>
                        </div>
                    </div>
                </div>
                <!-- End of Analyses -->
                <div class="mt-5 w-full">
                    <h1 style="font-weight: 700 !important; font-size: 1.6rem !important;">History</h1>
                    <div class="p-5 mt-5 bg-white rounded-3xl">
                <div class="overflow-auto rounded-lg">
                    <table class="table-auto w-full">
                        <thead>
                            <tr class="text-left bg-blue-300">
                                <th class="p-2">Brief</th>
                                <th class="p-2">Date Start</th>
                                <th class="p-2">Date End</th>
                                <th class="p-2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        
                        $History = $statement->fetchAll(PDO::FETCH_ASSOC);   foreach($History as $HistoryApp):
                        ?>
                            <tr>
                                <td class="p-2"><?php echo $HistoryApp['titre']?></td>
                                <td class="p-2"><?php echo $HistoryApp['dateDeb']?></td>
                                <td class="p-2"><?php echo $HistoryApp['dateFin']?></td>
                                <?php if($HistoryApp['etat'] == "In Progress") :?>
                                    <td class="p-2 font-semibold inProgress">
                                    <div class="py-1 px-2 bg-orange-400 text-white rounded-lg"><?php echo $HistoryApp['etat']?></div>
                                <?php 
                                    endif;
                                ?>
                                <?php if($HistoryApp['etat'] == "To-Do") :?>
                                    <td class="p-2 font-semibold inProgress">
                                    <div class="py-1 px-2 bg-blue-500 text-white rounded-lg"><?php echo $HistoryApp['etat']?></div>
                                <?php 
                                    endif;
                                ?>
                                <?php if($HistoryApp['etat'] == "Done") :?>
                                    <td class="p-2 font-semibold inProgress">
                                    <div class="py-1 px-2 bg-green-400 text-white rounded-lg"><?php echo $HistoryApp['etat']?></div>
                                <?php 
                                    endif;
                                ?>
                                </td>
                            </tr>
                        <?php 
                        endforeach;
                        ?>
                        </tbody>
                    </table>
                </div>
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
                            if($userInfo):
                        ?>
                            <p>Hey, <b><?php echo $userInfo['prenom'] ?></b></p>
                        <?php 
                            endif;
                        ?>
                            <small class="text-muted">Intern</small>
                        </div>
                        <div class="profile-photo">
                            <img src="images/achraaaf.JPG">
                        </div>
                    </div>
                </div>
                <!-- End of Nav -->
                <div class="user-profile">
                    <div class="logo">
                        <img src="images/achraaaf.JPG">
                        <?php
                            $userInfo = isset($_SESSION['logedUserInfo']) ? $_SESSION['logedUserInfo'] : NULL;
                            if($userInfo):
                        ?>
                        <h2 style="font-weight: 600; font-size:1.4rem;"><?php echo $userInfo['nom'].' '.$userInfo['prenom'] ?></h2>
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
</html>
