<?php

    header('Access-Control-Allow-Origin: *');
    if(isset($_GET['url'])){
        $url = $_GET['url'];
        require_once 'db_con.php';
        try {
            $sql = "INSERT INTO `urls` (link) VALUES (`$url`);";
            $results = $conn->query($sql);

            if ($conn->query($sql) === TRUE) {
                $id = $conn->insert_id;
                $key = base_convert($id, 10, 36);
                echo $key;
            } else {
                echo "failed";
            }
        } catch(Exception $e) {
            echo "failed";
        }
        $conn->close();
    } else {
        echo "failed";
    }

?>