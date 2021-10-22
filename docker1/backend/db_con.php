<?php

    $servername = "database-container";
    $username = "docker-user";
    $password = "docker-psw";
    $dbname = "docker";

    try {
      $conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
          die($conn->connect_error);
      }

    } catch(Exception $e) {
      die($e."\n\n");
    }
?>
