<!DOCTYPE html>
<html lang="en" x-data="{ open: true }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Panel' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js'></script>

    @vite('resources/css/app.css')

    <style>
        [x-cloak] {
            display: none;
        }
        aside { overflow-y: auto; }
    </style>
</head>
<body class="bg-background font-roboto">
    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar -->
        <aside :class="open ? 'w-64' : 'w-16'" class="bg-primary text-white flex-shrink-0 transition-all duration-300">
            <div class="flex items-center justify-between p-4 shadow-xl h-24">
                <div class="font-bold text-xl pt-2" x-show="open">
                    Admin Panel
                </div>
                <button @click="open = !open" class="focus:outline-none">
                    <i :class="open ? 'fas fa-chevron-left' : 'fas fa-chevron-right'" class="text-white"></i>
                </button>
            </div>
            <nav class="mt-6">
                <ul>
                    <li class="my-2 px-4 hover:bg-button flex items-center">
                        <i class="fas fa-tachometer-alt mr-2" x-show="open"></i>
                        <a href="{{ route('dashboard') }}" x-show="open">Dashboard</a>
                        <i class="fas fa-tachometer-alt" x-show="!open"></i>
                    </li>
                    <li class="my-2 hover:bg-button flex flex-col" x-data="{ openSubmenu: false }">
                        <div class="px-4 flex items-center justify-between w-full" @click="openSubmenu = !openSubmenu">
                            <div class="flex items-center">
                                <i class="fas fa-user-graduate mr-2" x-show="open"></i>
                                <a href="#" x-show="open">Admissions</a>
                                <i class="fas fa-user-graduate" x-show="!open"></i>
                            </div>
                            <i class="fas" :class="openSubmenu ? 'fa-chevron-down' : 'fa-chevron-left'" x-show="open"></i>
                        </div>
                        <ul x-show="openSubmenu" x-transition x-cloak class="mt-2 space-y-2 pl-8 bg-primary">
                            <li class="my-2 px-4 hover:bg-button flex items-center">
                                <i class="fas fa-plus mr-2"></i>
                                <a href="#" class="whitespace-nowrap">New Admission</a>
                            </li>
                            <li class="my-2 px-4 hover:bg-button flex items-center">
                                <i class="fas fa-sign-out-alt mr-2"></i>
                                <a href="#" class="whitespace-nowrap">School Leaving</a>
                            </li>
                        </ul>
                    </li>
                    <li class="my-2 px-4 hover:bg-button flex items-center">
                        <i class="fa-solid fa-briefcase mr-2" x-show="open"></i>
                        <a href="" x-show="open">Employment</a>
                        <i class="fa-solid fa-briefcase" x-show="!open"></i>
                    </li>
                    <li class="my-2 px-4 hover:bg-button flex items-center">
                        <i class="fas fa-money-check-dollar mr-2" x-show="open"></i>
                        <a href="" x-show="open">Fees</a>
                        <i class="fas fa-money-check-dollar" x-show="!open"></i>
                    </li>
                    <li class="my-2 px-4 hover:bg-button flex items-center">
                        <i class="fas fa-people-arrows mr-2" x-show="open"></i>
                        <a href="" x-show="open">Teachers</a>
                        <i class="fas fa-people-arrows" x-show="!open"></i>
                    </li>
                    <li class="my-2 px-4 hover:bg-button flex items-center">
                        <i class="fas fa-users mr-2" x-show="open"></i>
                        <a href="" x-show="open">Students</a>
                        <i class="fas fa-users" x-show="!open"></i>
                    </li>
                    <li class="my-2 px-4 hover:bg-button flex items-center">
                        <i class="fas fa-chalkboard-teacher mr-2" x-show="open"></i>
                        <a href="" x-show="open">Classes</a>
                        <i class="fas fa-chalkboard-teacher" x-show="!open"></i>
                    </li>
                    <li class="my-2 px-4 hover:bg-button flex items-center">
                        <i class="fas fa-chart-bar mr-2" x-show="open"></i>
                        <a href="" x-show="open">Reports</a>
                        <i class="fas fa-chart-bar" x-show="!open"></i>
                    </li>
                    <li class="my-2 px-4 hover:bg-button flex items-center">
                        <i class="fas fa-calendar-days mr-2" x-show="open"></i>
                        <a href="" x-show="open">Period Schedule</a>
                        <i class="fas fa-calendar-days" x-show="!open"></i>
                    </li>
                    <li class="my-2 px-4 hover:bg-button flex items-center">
                        <i class="fas fa-database mr-2" x-show="open"></i>
                        <a href="" x-show="open">Question Bank</a>
                        <i class="fas fa-database" x-show="!open"></i>
                    </li>
                    <li class="my-2 px-4 hover:bg-button flex items-center">
                        <i class="fas fa-toilet-paper mr-2" x-show="open"></i>
                        <a href="" x-show="open">Exams</a>
                        <i class="fas fa-toilet-paper" x-show="!open"></i>
                    </li>
                    <li class="my-2 px-4 hover:bg-button flex items-center">
                        <i class="fas fa-trophy mr-2" x-show="open"></i>
                        <a href="" x-show="open">Results</a>
                        <i class="fas fa-trophy" x-show="!open"></i>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Top Bar -->
            <header class="bg-white drop-shadow-xl px-4 flex justify-between items-center">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 95px; width: auto;" class="mr-5">
                    <h2 class="text-2xl font-bold text-gray-700">DigiPaeds School System</h2>
                </div>
                <div class="flex items-center">
                    <button class="bg-button text-white py-2 px-4 rounded ml-4 hover:bg-blue-700">Logout</button>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto p-6 bg-gray-100">
                {{$slot}}
            </main>
        </div>
    </div>
</body>
</html>
