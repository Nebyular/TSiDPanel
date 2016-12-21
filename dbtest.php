<?php
/**
 * Created by PhpStorm.
 * User: jfq564
 * Date: 20/12/2016
 * Time: 2:38 PM
 */
error_reporting(E_ALL);
$host        = 'host=127.0.0.1';
$port        = 'port=5432';
$dbname      = 'dbname=postgres';
$credentials = 'user=postgres password=test01';

  $dbconn = pg_connect("$host $port $dbname $credentials"  ) or die("Could not connect");
  $stat = pg_connection_status($dbconn);
  if ($stat === PGSQL_CONNECTION_OK) {
      echo 'Connection status ok';
  } else {
      echo 'Connection status bad';
  }
?>