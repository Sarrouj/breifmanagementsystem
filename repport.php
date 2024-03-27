<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/style2.css">
    <link rel="stylesheet" href="./CSS/report.css">
</head>
<body>
    <div class="container relative flex justify-center" style="width: 95%; margin: 0 auto; position:relative; ">
        <aside class="fixed left-16 w-64">
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
                <a href="./admin.php" class="m-0">
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
                <a href="#" >
                    <span class="material-icons-sharp">
                        <i class="fa-regular fa-file text-2xl mb-2"></i>
                    </span>
                    <h3>Briefs</h3>
                </a>
                <a href="./addBrief.php" class="">
                    <span class="material-icons-sharp">
                        <i class="fa-solid fa-plus text-xl mb-2"></i>
                    </span>
                    <h3>Add Brief</h3>
                </a>
                <a href="./repport.php" class="active">
                    <span class="material-icons-sharp">
                        <i class="fa-solid fa-chart-simple text-xl mb-2"></i>
                    </span>
                    <h3>Reports</h3>
                </a>
                <a href="./login.php">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <main class="w-1/2 mx-auto mb-10">
           <h1 style="font-weight: 800 !important; font-size: 1.8rem !important;">Repport</h1>
           <form class="rounded-3xl p-8 flex flex-col gap-5 mt-5 internCard" style="background-color: var(--color-white);">
                <input type="text" name="title" placeholder="Title" class="py-2 px-3 text-slate-700 font-semibold rounded-lg border-2 border-blue-300 focus:outline-none">
                <div class="flex gap-5">
                    <div class="flex justify-between py-2 px-3 rounded-lg border-2 border-blue-300 w-2/4 bg-white">
                        <label for="endDate" class="border-r-2 border-blue-300 pr-5 pl-2 text-slate-700 font-semibold">From</label>
                        <input type="date" name="endDate" class="focus:outline-none text-slate-700 font-semibold bg-white">
                    </div>
                    <div class="flex justify-between py-2 px-3 rounded-lg border-2 border-blue-300 w-2/4 bg-white">
                        <label for="endDate" class="border-r-2 border-blue-300 pr-5 pl-2 text-slate-700 font-semibold">To</label>
                        <input type="date" name="endDate" class="focus:outline-none text-slate-700 font-semibold bg-white">
                    </div>
                </div>
                <input type="submit" value="Search" class="cursor-pointer bg-blue-400 rounded-lg py-2 px-3 text-white font-semibold">
            </form>
            <div class="p-5 mt-5 bg-white rounded-3xl">
                <div class="overflow-auto rounded-lg">
                    <table class="table-auto w-full">
                        <thead>
                            <tr class="text-left bg-blue-300">
                                <th class="p-2">Name</th>
                                <th class="p-2">Last Name</th>
                                <th class="p-2">Group</th>
                                <th class="p-2">Brief</th>
                                <th class="p-2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-2">John</td>
                                <td class="p-2">Sarrouj</td>
                                <td class="p-2">WB-101</td>
                                <td class="p-2">Management System</td>
                                <td class="p-2 font-semibold inProgress">In Progress</td>
                            </tr>
                            <tr>
                                <td class="p-2">John</td>
                                <td class="p-2">Sarrouj</td>
                                <td class="p-2">WB-101</td>
                                <td class="p-2">Management System</td>
                                <td class="p-2 font-semibold todo">To Do</td>
                            </tr>
                            <tr>
                                <td class="p-2">John</td>
                                <td class="p-2">Sarrouj</td>
                                <td class="p-2">WB-101</td>
                                <td class="p-2">Management System</td>
                                <td class="p-2 font-semibold done">Done</td>
                            </tr>
                            <tr>
                                <td class="p-2">John</td>
                                <td class="p-2">Sarrouj</td>
                                <td class="p-2">WB-101</td>
                                <td class="p-2">Management System</td>
                                <td class="p-2 font-semibold inProgress">In Progress</td>
                            </tr>
                            <tr>
                                <td class="p-2">John</td>
                                <td class="p-2">Sarrouj</td>
                                <td class="p-2">WB-101</td>
                                <td class="p-2">Management System</td>
                                <td class="p-2 font-semibold todo">To Do</td>
                            </tr>
                            <tr>
                                <td class="p-2">John</td>
                                <td class="p-2">Sarrouj</td>
                                <td class="p-2">WB-101</td>
                                <td class="p-2">Management System</td>
                                <td class="p-2 font-semibold done">Done</td>
                            </tr>
                            <tr>
                                <td class="p-2">John</td>
                                <td class="p-2">Sarrouj</td>
                                <td class="p-2">WB-101</td>
                                <td class="p-2">Management System</td>
                                <td class="p-2 font-semibold inProgress">In Progress</td>
                            </tr>
                            <tr>
                                <td class="p-2">John</td>
                                <td class="p-2">Sarrouj</td>
                                <td class="p-2">WB-101</td>
                                <td class="p-2">Management System</td>
                                <td class="p-2 font-semibold todo">To Do</td>
                            </tr>
                            <tr>
                                <td class="p-2">John</td>
                                <td class="p-2">Sarrouj</td>
                                <td class="p-2">WB-101</td>
                                <td class="p-2">Management System</td>
                                <td class="p-2 font-semibold done">Done</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <div class="right-section w-72 fixed right-16">
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
                        <p>Hey, <b>Fatine</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="images/fatine.png">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="logo">
                    <img src="images/fatine.png">
                    <h2 style="font-weight: 600; font-size:1.4rem;">Fatin Chebab</h2>
                    <p>Formatrice chez SOLICODE</p>
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
                            <h3 style="font-weight: 500; font-size: 0.87rem;">YouCan EVENT</h3>
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
                            <h3 style="font-weight: 500; font-size: 0.87rem;">Dia Lhak El Falouse</h3>
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
                        <h3 style="font-weight: 500; font-size: 0.87rem;">Add Reminder</h3>
                    </div>
                </div>

            </div>

        </div>
    </div>
</body>
    <script src="./index.js"></script>
    <script src="https://kit.fontawesome.com/4938da1e0a.js" crossorigin="anonymous"></script>
</html>