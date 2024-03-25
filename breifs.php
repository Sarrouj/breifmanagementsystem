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
                <a href="#" class="active">
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
        <main class="w-1/2 mx-auto mb-10">
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
                <input type="submit" value="Search" class="cursor-pointer bg-blue-400 rounded-lg py-2 px-3 text-white font-semibold">
            </form>
            <div class="new-users">
                <h2 style="font-weight: 600; font-size:1.4rem;">Latest Briefs</h2>
                <div class="w-full flex flex-wrap justify-between gap-5 mt-5">
                    <div class="rounded-3xl p-5 flex flex-col items-center breiffCard" style="background-color : var(--color-background); width:48%">
                        <div class="pb-5 pt-2" style=" border-bottom: 1px solid #979797 !important">
                            <h2 style="font-weight: 600; font-size:1.4rem;">Brief Management System</h2>
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
                    <div class="rounded-3xl p-5 flex flex-col items-center breiffCard" style="background-color : var(--color-background); width:48%">
                        <div class="pb-5 pt-2" style=" border-bottom: 1px solid #979797 !important">
                            <h2 style="font-weight: 600; font-size:1.4rem;">Brief Management System</h2>
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
                    <div class="rounded-3xl p-5 flex flex-col items-center breiffCard" style="background-color : var(--color-background); width:48%">
                        <div class="pb-5 pt-2" style=" border-bottom: 1px solid #979797 !important">
                            <h2 style="font-weight: 600; font-size:1.4rem;">Brief Management System</h2>
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
                    <div class="rounded-3xl p-5 flex flex-col items-center breiffCard" style="background-color : var(--color-background); width:48%">
                        <div class="pb-5 pt-2" style=" border-bottom: 1px solid #979797 !important">
                            <h2 style="font-weight: 600; font-size:1.4rem;">Brief Management System</h2>
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
                    <div class="rounded-3xl p-5 flex flex-col items-center breiffCard" style="background-color : var(--color-background); width:48%">
                        <div class="pb-5 pt-2" style=" border-bottom: 1px solid #979797 !important">
                            <h2 style="font-weight: 600; font-size:1.4rem;">Brief Management System</h2>
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
                    <div class="rounded-3xl p-5 flex flex-col items-center breiffCard" style="background-color : var(--color-background); width:48%">
                        <div class="pb-5 pt-2" style=" border-bottom: 1px solid #979797 !important">
                            <h2 style="font-weight: 600; font-size:1.4rem;">Brief Management System</h2>
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
                    <div class="rounded-3xl p-5 flex flex-col items-center breiffCard" style="background-color : var(--color-background); width:48%">
                        <div class="pb-5 pt-2" style=" border-bottom: 1px solid #979797 !important">
                            <h2 style="font-weight: 600; font-size:1.4rem;">Brief Management System</h2>
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
                    <div class="rounded-3xl p-5 flex flex-col items-center breiffCard" style="background-color : var(--color-background); width:48%">
                        <div class="pb-5 pt-2" style=" border-bottom: 1px solid #979797 !important">
                            <h2 style="font-weight: 600; font-size:1.4rem;">Brief Management System</h2>
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