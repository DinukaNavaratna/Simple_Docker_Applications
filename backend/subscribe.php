<?php

if(isset($_POST['email'])){
    $email = $_POST['email'];

    require_once 'db_con.php';
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `subscribers` (email) VALUES ('$email');";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        echo "success";
    } catch(Exception $e) {
        echo "failed";
    }
    $conn = null;
} else {
    echo "failed: Access Denied!";
}

?>