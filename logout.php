<?php
/**
 * Created by PhpStorm.
 * User: jfq564
 * Date: 20/12/2016
 * Time: 3:16 PM
 */
   session_start();

   if(session_destroy()) {
       header("Location: login.php");
   }
?>