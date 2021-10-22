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

/*
      $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
*/

    } catch(Exception $e) {
      die($e."\n\n");
    }
?>
