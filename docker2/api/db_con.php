<?php

    $servername = "db";
    $username = "root";
    $password = "";
    $dbname = "url_shortner";

    try {
      $conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
          die($conn->connect_error);
      }

    } catch(Exception $e) {
      die($e."\n\n");
    }
?>
