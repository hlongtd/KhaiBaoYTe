<?php
session_start();

include 'database/db_config.php';

if($connect){
  // echo "Database Connected";
}
else {
  header("Location: DB_config.php");
}

if(!$_SESSION['username']){
  header("Location: login.php");
}

?>
