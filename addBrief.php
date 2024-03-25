<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container" style="display: grid; width: 95%; margin: 0 auto; gap: 4.2rem; grid-template-columns: 16rem auto 20rem; ">
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
                <a href="./index.php" class="m-0">
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
                <a href="./breifs.php" class="">
                    <span class="material-icons-sharp">
                        <i class="fa-regular fa-file text-2xl mb-2"></i>
                    </span>
                    <h3>Briefs</h3>
                </a>
                <a href="#" class="active">
                    <span class="material-icons-sharp">
                        <i class="fa-solid fa-plus text-xl mb-2"></i>
                    </span>
                    <h3>Add Brief</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        <i class="fa-solid fa-chart-simple text-xl mb-2"></i>
                    </span>
                    <h3>Reports</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <main>
           <h1 style="font-weight: 800 !important; font-size: 1.8rem !important;">Add Brief</h1>
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
                <div class="flex justify-between py-2 px-3 rounded-lg border-2 border-blue-300 bg-white">
                    <label for="attachement" class="border-r-2 border-blue-300 pr-5 pl-2 text-slate-700 font-semibold">Upload Brief Attachement</label>
                    <input
                    type="file"
                    id="Attachement"
                    name="Attachement"
                    accept=".pdf" 
                    />
                </div>
                <div class="py-2 px-3 rounded-lg border-2 border-blue-300 flex flex-col gap-3">
                    <h2 class="text-slate-700 font-semibold">Targeted skill :</h2>
                    <div class="flex justify-between">
                        <div>
                            <input type="checkbox" name="front-end" id="front-end">
                            <label for="frontend">HTML & CSS</label>
                        </div>
                        <div>
                            <input type="checkbox" name="front-end" id="front-end">
                            <label for="front-end">FIGMA</label>
                        </div>
                        <div>
                            <input type="checkbox" name="front-end" id="front-end">
                            <label for="front-end">Design Thinking</label>
                        </div>
                        <div>
                            <input type="checkbox" name="front-end" id="front-end">
                            <label for="front-end">JavaScript</label>
                        </div>
                        <div>
                            <input type="checkbox" name="front-end" id="front-end">
                            <label for="front-end">PHP</label>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div>
                            <input type="checkbox" name="front-end" id="front-end">
                            <label for="frontend">CSS Frameworks</label>
                        </div>
                        <div>
                            <input type="checkbox" name="front-end" id="front-end">
                            <label for="front-end">MYSQL & SQL</label>
                        </div>
                        <div>
                            <input type="checkbox" name="front-end" id="front-end">
                            <label for="front-end">TypeScript</label>
                        </div>
                        <div>
                            <input type="checkbox" name="front-end" id="front-end">
                            <label for="front-end">React Ecosystem</label>
                        </div>
                        <div>
                            <input type="checkbox" name="front-end" id="front-end">
                            <label for="front-end">Design Pattern</label>
                        </div>
                    </div>
                </div>
                <input type="submit" value="ADD BRIEF" class="cursor-pointer bg-blue-400 rounded-lg py-2 px-3 text-white font-semibold">
            </form>
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