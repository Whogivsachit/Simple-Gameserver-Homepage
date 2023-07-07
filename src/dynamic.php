<!-- Require Header -->
<?php require_once 'core.php'; ?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css'/>
    <script src='firefly.js' defer></script>
</head>
<nav class="bg-backgroundDark pt-5">
    <div class="px-6 md:px-[6rem] lg:px-[6rem] flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center">
        <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/-Insert_image_here-.svg/800px--Insert_image_here-.svg.png' class='h-24 hidden md:block mr-3' alt='Logo'>
        <span class="self-center text-3xl font-semibold whitespace-nowrap text-white">Server Name</span>
      </a>
      <button id="dropdown" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
      <div class="hidden w-full md:block md:w-auto text-2xl" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
            <li><a class='block py-2 pl-3 pr-4 text-primary rounded hover:text-white md:p-0' href='index.php'>Home</a></li>
            <li><a class='block py-2 pl-3 pr-4 text-white rounded hover:text-primary md:p-0' href='/forums'>Forum</a></li>
            <li><a class='block py-2 pl-3 pr-4 text-white rounded hover:text-primary md:p-0' href='/store'>Store</a></li>
            <li><a class='block py-2 pl-3 pr-4 text-white rounded hover:text-primary md:p-0' href='#servers'>Servers</a></li>
            <li><a class='block py-2 pl-3 pr-4 text-white rounded hover:text-primary md:p-0' href='#staff'>Staff</a></li>
            <li><a class='block py-2 pl-3 pr-4 text-white rounded hover:text-primary md:p-0' href='#'>Steam</a></li>
        </ul>
      </div>
    </div>
</nav>
<body class="bg-background">

<!-- Section: Header -->
<section id="header" class="slanted bg-backgroundDark">
    <div class="flex flex-col text-center py-[14vh] font-varela">
        <h1 class="text-[6rem] md:text-[7rem] text-white" id="title">Server Name</h1>
        <h2 class="text-[2rem] md:text-[2.5rem] text-white" id="moto">Server Bio</h2>
    </div>
</section>

<!-- Section: AboutUs -->
<section id="aboutus" class="bg-background py-[4rem]">
    <div class="flex flex-col text-center py-6 align-items-center space-y-6">
        <h1 class="text-6xl text-white">About Us</h1>
        <p class="text-md md:text-xl text-white">Learn more about us.</p>
        <div class="flex flex-col md:flex-row justify-center gap-6 text-white font-varela">
            <div class='p-5 w-full md:w-1/5'>
                <i class='fab fa-discord fa-6x text-primary pb-2'></i>
                <h1 class='text-3xl font-bold'>Discord Server</h1>
                <p>We operate a large discord server where players from various games hang out and meet new people. Join here today!</p>
            </div>
            <div class='p-5 w-full md:w-1/5'>
                <i class='fas fa-server fa-6x text-primary pb-2'></i>
                <h1 class='text-3xl font-bold'>Dedicated Hardware</h1>
                <p>All of our servers run top of the line hardware so your game never has to end or get interrupted again.</p>
            </div>
            <div class='p-5 w-full md:w-1/5'>
                <i class='fas fa-user-shield fa-6x text-primary pb-2'></i>
                <h1 class='text-3xl font-bold'>Dedicated Staff</h1>
                <p>Our staff are here to help you 24/7 whenever you need us. Just ask.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section: Staff -->
<section id="staff" class="bg-backgroundDark py-[4rem]">
    <div class="flex flex-col text-center py-6 align-items-center space-y-6">
        <h1 class="text-6xl text-white">Staff Members</h1>
        <p class="text-xl text-white">Meet the team behind the servers.</p>
        <div class="flex flex-col md:flex-row flex-wrap justify-center gap-6 text-white font-varela">
            <div class='p-5 w-11/12 md:w-1/5 mx-auto md:mx-0 space-y-2 bg-foreground rounded-xl'>
                <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/-Insert_image_here-.svg/800px--Insert_image_here-.svg.png' class='h-44 mx-auto rounded'>
                <h1 class='text-3xl font-bold'>Username</h1>
                <h2 class='text-2xl font-bold'>Rank</h2>
                <p>Meet Name, the passionate owner of a dynamic GMod server, where imagination knows no bounds. With innovative gameplay features and a welcoming community.</p>
            </div>
            <div class='p-5 w-11/12 md:w-1/5 mx-auto md:mx-0 space-y-2 bg-foreground rounded-xl'>
                <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/-Insert_image_here-.svg/800px--Insert_image_here-.svg.png' class='h-44 mx-auto rounded'>
                <h1 class='text-3xl font-bold'>Username</h1>
                <h2 class='text-2xl font-bold'>Rank</h2>
                <p>Meet Name, the passionate owner of a dynamic GMod server, where imagination knows no bounds. With innovative gameplay features and a welcoming community.</p>
            </div>
            <div class='p-5 w-11/12 md:w-1/5 mx-auto md:mx-0 space-y-2 bg-foreground rounded-xl'>
                <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/-Insert_image_here-.svg/800px--Insert_image_here-.svg.png' class='h-44 mx-auto rounded'>
                <h1 class='text-3xl font-bold'>Username</h1>
                <h2 class='text-2xl font-bold'>Rank</h2>
                <p>Meet Name, the passionate owner of a dynamic GMod server, where imagination knows no bounds. With innovative gameplay features and a welcoming community.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section: Servers -->
<section id="servers" class="bg-background py-[4rem]">
    <div class="flex flex-col text-center py-6 align-items-center space-y-6">
        <h1 class="text-6xl text-white">Our Servers</h1>
        <p class="text-xl text-white">Our servers are the best in the business.</p>
        <div class="flex flex-col md:flex-row flex-wrap justify-center gap-6 text-white font-varela">
            <!-- Loop through Servers array -->
            <?php foreach($servers as $server) {
                $serverData = serverInfo($server['game'], $server['ip']);
                $status = $serverData['status'] === 200 ? 'green-600' : 'red-600';
                echo <<<EOT
                <div class='p-5 w-full md:w-1/4 space-y-2 bg-foreground rounded-xl'>
                    <h1 class='text-3xl font-bold truncate'>{$serverData['name']}</h1>
                    <h2 class='text-2xl font-bold capitalize'>{$server['game']}</h2>
                    <hr class='border-1 border-$status'/>
                    <p>{$serverData['players']}/{$serverData['maxplayers']} Players</p>
                </div>
                EOT;
            }?>
        </div>
    </div>
</section>

<!-- Section: Footer -->
<footer class="bg-backgroundDark rounded-lg shadow pt-4">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">©2023 All rights reserved - Under GameServers LLC</span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li><a class='mr-4 hover:underline md:mr-6' href='/index.php'>Home</a></li>
            <li><a class='mr-4 hover:underline md:mr-6' href='/forum'>Forum</a></li>
            <li><a class='mr-4 hover:underline md:mr-6' href='/store'>Store</a></li>
            <li><a class='mr-4 hover:underline md:mr-6' href='#servers'>Servers</a></li>
            <li><a class='mr-4 hover:underline md:mr-6' href='#staff'>Staff</a></li>
            <li><a class='mr-4 hover:underline md:mr-6' href='#'>Steam</a></li>
        </ul>
    </div>
</footer>
<script src="main.js"></script>
</body>
</html>