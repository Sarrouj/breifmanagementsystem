<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="images/logo.png">
                    <h2>Asmr<span class="danger">Prog</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar pt-3">
                <a href="#" class="m-0">
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
                <a href="#" class="active">
                    <span class="material-icons-sharp">
                        <i class="fa-regular fa-file text-2xl mb-2"></i>
                    </span>
                    <h3>Briefs</h3>
                </a>
                <a href="#">
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
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <h1>Analytics</h1>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status px-5">
                        <div class="info">
                            <h3>Total Briefs</h3>
                            <h1>65</h1>
                        </div>
                        <i class="fa-solid fa-file text-3xl pt-5"></i>
                    </div>
                </div>
                <div class="visits">
                    <div class="status px-5">
                        <div class="info">
                            <h3>Interns</h3>
                            <h1>30</h1>
                        </div>
                        <i class="fa-solid fa-user-group text-3xl pt-5"></i>
                    </div>
                </div>
                <div class="searches">
                    <div class="status px-5">
                        <div class="info">
                            <h3>Teachers</h3>
                            <h1>2</h1>
                        </div>
                        <i class="fa-solid fa-file-signature text-3xl pt-5"></i>
                    </div>
                </div>
            </div>
            <!-- End of Analyses -->
            <div class="new-users">
                <h2>Briefs</h2>
                <div class="flex gap-5 mt-5">
                    <div class="rounded-3xl bg-white p-5 flex flex-col items-center w-3/4">
                        <div class="pb-5 pt-2" style=" border-bottom: 1px solid #979797 !important">
                            <h2>Brief Management System</h2>
                        </div>
                        <div class="flex flex-col items-center mb-5">
                            <p class="my-5 font-semibold">It will end in :</p>
                            <ul class='flex gap-3'>
                                <li>
                                    <div class="flex items-center gap-3 text-3xl text-slate-800">
                                        <div class="bg-blue-300 text-white p-3 rounded-lg text-2xl ">02</div>  :
                                    </div>
                                    <p class="font-semibold ml-2">Days</p>
                                </li>
                                <li>
                                    <div class="flex items-center gap-3 text-3xl text-slate-800">
                                        <div class="bg-blue-300 text-white p-3 rounded-lg text-2xl ">05</div>  :
                                    </div>
                                    <p class="font-semibold ml-2">Hours</p>
                                </li>
                                <li>
                                    <div class="flex items-center gap-3 text-3xl text-slate-800">
                                        <div class="bg-blue-300 text-white p-3 rounded-lg text-2xl ">56</div>  :
                                    </div>
                                    <p class="font-semibold ml-4">Min</p>
                                </li>
                                <li class="flex flex-col items-center"> 
                                    <div class="flex items-center gap-3 text-3xl text-slate-800">
                                        <div class="bg-blue-300 text-white p-3 rounded-lg text-2xl ">26</div>  
                                    </div>
                                    <p class="font-semibold">Sec</p>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full flex justify-between pt-6 " style=" border-top: 1px solid #979797 !important">
                            <div class="flex bg-blue-400 py-3 px-5 rounded-lg cursor-pointer gap-5 items-center">
                                <p class="text-white font-semibold">Attachement</p>
                                <i class="fa-solid fa-arrow-down text-white"></i>
                            </div>
                            <div class=" py-3 px-5 rounded-lg bg-red-400 cursor-pointer">
                                <i class="fa-solid fa-trash text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-3xl bg-white p-5 flex flex-col items-center w-3/4">
                        <div class="pb-5 pt-2" style=" border-bottom: 1px solid #979797 !important">
                            <h2>Brief Management System</h2>
                        </div>
                        <div class="flex flex-col items-center mb-5">
                            <p class="my-5 font-semibold">It will end in :</p>
                            <ul class='flex gap-3'>
                                <li>
                                    <div class="flex items-center gap-3 text-3xl text-slate-800">
                                        <div class="bg-blue-300 text-white p-3 rounded-lg text-2xl ">02</div>  :
                                    </div>
                                    <p class="font-semibold ml-2">Days</p>
                                </li>
                                <li>
                                    <div class="flex items-center gap-3 text-3xl text-slate-800">
                                        <div class="bg-blue-300 text-white p-3 rounded-lg text-2xl ">05</div>  :
                                    </div>
                                    <p class="font-semibold ml-2">Hours</p>
                                </li>
                                <li>
                                    <div class="flex items-center gap-3 text-3xl text-slate-800">
                                        <div class="bg-blue-300 text-white p-3 rounded-lg text-2xl ">56</div>  :
                                    </div>
                                    <p class="font-semibold ml-4">Min</p>
                                </li>
                                <li class="flex flex-col items-center"> 
                                    <div class="flex items-center gap-3 text-3xl text-slate-800">
                                        <div class="bg-blue-300 text-white p-3 rounded-lg text-2xl ">26</div>  
                                    </div>
                                    <p class="font-semibold">Sec</p>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full flex justify-between pt-6 " style=" border-top: 1px solid #979797 !important">
                            <div class="flex bg-blue-400 py-3 px-5 rounded-lg cursor-pointer gap-5 items-center">
                                <p class="text-white font-semibold">Attachement</p>
                                <i class="fa-solid fa-arrow-down text-white"></i>
                            </div>
                            <div class=" py-3 px-5 rounded-lg bg-red-400 cursor-pointer">
                                <i class="fa-solid fa-trash text-white"></i>
                            </div>
                        </div>
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
                        <p>Hey, <b>Reza</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="images/profile-1.jpg">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="logo">
                    <img src="images/logo.png">
                    <h2>AsmrProg</h2>
                    <p>Fullstack Web Developer</p>
                </div>
            </div>

            <div class="reminders">
                <div class="header">
                    <h2>Reminders</h2>
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
                            <h3>Workshop</h3>
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
                            <h3>Workshop</h3>
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
</html>