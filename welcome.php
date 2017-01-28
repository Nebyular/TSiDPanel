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
    <link rel="stylesheet" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-schemes.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-rtl.min.css">
    <link rel="script" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/js/metro.min.js">

    <link href="../css/metro.css" rel="stylesheet">
    <link href="../css/metro-icons.css" rel="stylesheet">
    <link href="../css/metro-responsive.css" rel="stylesheet">

    <script src="../js/jquery-2.1.3.min.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/metro.js"></script>
    <!-- Page CSS -->
    <link rel="stylesheet" href="login.css">

    <title>Welcome </title>
</head>

<body>
<div class="app-bar darcula">
    <a class="app-bar-element" href="">Panel</a>
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
        <li><a href="mail.thesystemisdown.io"><span class="mif-mail"></span> Mail</a></li>
        <li><a href="">Help</a></li>
    </ul>
    <a href="logout.php" class="app-bar-element place-right">
        <span class="mif-exit"></span>    <?php echo $login_session; ?>Logout</a>

</div>
<div clas="tile-container" style="margin: 2%;">
<div class="tile bg-blue fg-white" data-role="tile"><h3>Welcome <?php echo $login_session; ?></h3>
    <h3><a href = "logout.php">Sign Out <?php "$load" ?></a></h3></div>
    <a href="ftp.thesystemisdown.io">
    <div class="tile bg-magenta fg-white" data-role="tile">
        <div class="tile-content iconic"><span class="icon mif-folder-open mif-4x"></span><span class="tile-label">Net2FTP</span></div>
    </div>
    </a>
    <div class="tile-wide bg-indigo fg-white" data-role="tile"><h3  style="margin: 2%;"><span class="mif-sun mif-2x"></span> Weather <!--link to yahoo--></h3>
        <p style="margin: 2%;"><span class="mif-none mif-2x"></span><span class="mif-celsius mif-2x"></span></p>
        <p><h4 style="margin: 2%;">UV <span class="mif-none mif-2x"></span></h4></p>
    </div>
    <a href="mail.thesystemisdown.io/phpwebadmin/">
    <div class="tile bg-violet fg-white" data-role="tile">
        <div class="tile-content iconic"><span class="icon mif-contacts-mail mif-4x"></span><span class="tile-label">hMail Admin <br><i>(requires VPN)</i></span></div>
    </div>
    </a>

    <a href="cloud.thesystemisdown.io">
    <div class="tile bg-lime fg-white" data-role="tile">
        <div class="tile-content iconic"><span class="icon mif-cloud mif-4x"></span><span class="tile-label">Nextcloud</span></div>
    </div>
    </a>
    <a href="mail.thesystemisdown.io/phpwebadmin/">
    <div class="tile bg-amber fg-white" data-role="tile">
    <div class="tile-content iconic"><span class="icon mif-git mif-4x"></span><span class="tile-label">Gitlab <br><i>(requires VPN)</i></span></div>
</div>
        </a>
    <a href="rdp://thesystemisdown.io">
    <div class="tile bg-cobalt fg-white" data-role="tile"><!--http://www.jjclements.co.uk/2010/02/21/rdp-hyperlink/-->
            <div class="tile-content iconic"><span class="icon mif-display mif-4x"></span><span class="tile-label">Remote Desktop</span></div>
</div>
    </a>
<div class="carousel" data-role="carousel" data-height="200" data-control="false" data-markers="false" data-effect="fade" style="width: 100%; height: 200%;">
    <div class="slide" style="display none; left: 0px;">
        <div class="image-container image-format-fill" style="width: 100%; height: 100%;">
            <div class="frame">
            <div style="width: 100%; height: 100%; background-image: url("images/1.jpg"); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div>
            </div>
        </div>
    </div>
</div>
</div>

</body>

</html>