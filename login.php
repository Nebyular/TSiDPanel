<?php
/**
 * Created by PhpStorm.
 * User: jfq564
 * Date: 20/12/2016
 * Time: 3:05 PM
 */
   include("config.php");
   #include("dbtest.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
       // username and password sent from form

       $myusername = pg_escape_string($db,$_POST['username']);
       $mypassword = pg_escape_string($db,$_POST['password']);

       $sql = "SELECT id FROM php_users WHERE username = '$myusername' and password = '$mypassword'";
       $result = pg_query($db,$sql);
       $row = pg_fetch_array($result,PGSQL_ASSOC);
       $active = $row['active'];

       $count = pg_num_rows($result);

       // If result matched $myusername and $mypassword, table row must be 1 row

       if($count == 1) {
          # session_register("myusername");
           $_SESSION['login_user'] = $myusername;

           header("location: welcome.php");
       }
       else {
           $error = "Your Login Name or Password is invalid";
       }
   }
?>
<html>
<head>

<html>

<head>
    <title>Login Page</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-responsive.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-schemes.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-rtl.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-icons.min.css">

    <link rel="script" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/js/metro.min.js">

    <!-- Page CSS -->
    <link rel="stylesheet" href="login.css">

<!--    <style type = "text/css">
        body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
        }

        label {
            font-weight:bold;
            width:100px;
            font-size:14px;
        }

        .box {
            border:#666666 solid 1px;
        }
    </style>
-->

    <style>
        .login-form {
            width: 25rem;
            height: 18.75rem;
            position: fixed;
            top: 50%;
            margin-top: -9.375rem;
            left: 50%;
            margin-left: -12.5rem;
            background-color: #ffffff;
            opacity: 100;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
    </style>
</head>

<body>

<!--<div align = "center">
    <div style = "width:300px; border: solid 1px #333333; " align = "left">
        <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

        <div style = "margin:30px">

            <form action = "" method = "post">
                <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                <input type = "submit" value = " Submit "/><br />
            </form>

            <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php /*echo $error; */?></div>

        </div>

    </div>

</div>
-->
<div class="login-form padding20 block-shadow">
    <form action = "" method = "post">
        <h1 class="text-light">Login to service</h1>
        <hr class="thin"/>
        <br />
        <div class="input-control text full-size" data-role="input">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <button class="button helper-button clear"><span class="mif-cross"></span></button>
        </div>
        <br />
        <br />
        <div class="input-control password full-size" data-role="input">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <button class="button helper-button reveal"><span class="mif-looks"></span></button>
        </div>
        <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
        <br />
        <br />
        <div class="form-actions">
            <button type="submit"  value = " Submit " class="button primary">Login</button>
            <button type="button" class="button link">Cancel</button>
        </div>
    </form>
</div>
</body>
</html>