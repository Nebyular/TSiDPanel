<?php
/**
 * Created by PhpStorm.
 * User: jfq564
 * Date: 20/12/2016
 * Time: 3:15 PM
 */
   include('session.php');
?>
<html">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-responsive.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-schemes.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-rtl.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-icons.min.css">

    <link rel="script" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/js/metro.min.js">

    <!-- Page CSS -->
    <link rel="stylesheet" href="login.css">

    <title>Welcome </title>
</head>

<body>
<div class="app-bar darcula">
    <a class="app-bar-element" href="...">Panel</a>
    <span class="app-bar-divider"></span>
    <ul class="app-bar-menu">
        <li>
            <a href="#" class="dropdown-toggle"><span class="mif-wrench"></span> Controls</a>
            <ul class="d-menu" data-role="dropdown">
                <li><a href=""><span class="mif-redo"></span> Restart</a></li>
                <li><a href=""><span class="mif-switch"></span> Shutdown</a></li>
                <li class="divider"></li>
                <li><a href="" class="dropdown-toggle">Other Products</a>
                    <ul class="d-menu" data-role="dropdown">
                        <li><a href="">Internet Explorer 10</a></li>
                        <li><a href="">Skype</a></li>
                        <li><a href="">Surface</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href=""><span class="mif-mail"></span> Mail</a></li>
        <li><a href="">Help</a></li>
    </ul>
    <a href="logout.php" class="app-bar-element place-right">
        <span class="mif-exit"></span>    <?php echo $login_session; ?>Logout</a>

</div>
<div clas="tile-content" style="margin: 2%;">
<div class="tile bg-blue fg-white" data-role="tile"><h3>Welcome <?php echo $login_session; ?></h3>
    <?php
    $com = new COM('winmgmts:{impersonationLevel=impersonate}');
    $cpus = $com->execquery('SELECT LoadPercentage FROM Win32_Processor');
    foreach ($cpus as $cpu) { $load = $cpu->LoadPercentage; break; }
    ?>
    <h3><a href = "logout.php">Sign Out <?php "$load" ?></a></h3></div>
    <div class="tile bg-magenta fg-white" data-role="tile">net2ftp</div>
    <div class="tile bg-violet fg-white" data-role="tile">hMail Admin</div>
    <div class="tile-wide bg-indigo fg-white" data-role="tile"><h3  style="margin: 2%;"><span class="mif-sun mif-2x"></span> Weather <!--link to yahoo--></h3>
    <p style="margin: 2%;"><span class="mif-none mif-2x"></span><span class="mif-celsius mif-2x"></span></p>
        <p><h4 style="margin: 2%;">UV <span class="mif-none mif-2x"></span></h4></p>
    </div>
    <div class="tile bg-lime fg-white" data-role="tile"></div>
    <div class="tile bg-amber fg-white" data-role="tile">...</div>
    <div class="tile bg-cobalt fg-white" data-role="tile">...</div>

</div>

</body>

</html>