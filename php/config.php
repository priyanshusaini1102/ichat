<?php
  $hostname = "sql207.epizy.com";
  $username = "epiz_29655287";
  $password = "sEFCXz8IszvdPn4";
  $dbname = "epiz_29655287_chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
