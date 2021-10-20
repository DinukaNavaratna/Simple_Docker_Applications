<?php

if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}

    $servername = "database-container";
    $username = "docker-user";
    $password = "docker-psw";
    $dbname = "docker";

    try {
      $conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
          echo "Failed: ".$conn->connect_error;
      }
      echo "Success";
/*
      $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
*/
      echo "Connected";
    } catch(PDOException $e) {
      die($e."\n\n");
    }
?>
