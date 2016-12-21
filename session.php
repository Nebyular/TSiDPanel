<?php
/**
 * Created by PhpStorm.
 * User: jfq564
 * Date: 20/12/2016
 * Time: 3:17 PM
 */
   include('config.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = pg_query($db,"select username from php_users where username = '$user_check' ");

   $row = pg_fetch_array($ses_sql,PGSQL_ASSOC);

   $login_session = $row['username'];

   if(!isset($_SESSION['login_user'])){
       header("location:login.php");
   }
?>