<?php
    $servername = "database-container";
    $username = "docker-user";
    $password = "docker-psw";
    $dbname = "docker";

    try {
      $conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
          echo "Failed: ".$conn->connect_error;
      }
      echo "\n\nSuccess\n\n";

/*
      $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
*/

      echo "Connected\n\n";
    } catch(PDOException $e) {
      die($e."\n\n");
    }
?>
