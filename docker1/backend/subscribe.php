<?php

if(isset($_GET['email'])){
    $email = $_GET['email'];

    require_once 'db_con.php';
    try {
        $sql = "INSERT INTO `subscribers` (email) VALUES ('$email');";
        
        if ($conn->query($sql) === TRUE) {
            echo "success";
        } else {
            echo "failed<br>" . $conn->error;
        }
    } catch(Exception $e) {
        echo "failed";
    }
    $conn->close();
} else {
    echo "failed: Access Denied!";
}

?>