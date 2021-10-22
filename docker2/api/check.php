<?php

    header('Access-Control-Allow-Origin: *');
    if(isset($_GET['key'])){
        $key = $_GET['key'];
        require_once 'db_con.php';
        try {
            $id = intval($key, 36);
            $sql = "SELECT link FROM `urls` WHERE `id`=$id;";
            $results = $conn->query($sql);

            if($results->num_rows > 0){
            $result = $results->fetch_row();
                $url = $result[0];
                echo $url;
            } else {
                echo "404.html";
            }
        } catch(Exception $e) {
            echo "404.html";
        }
        $conn->close();
    } else {
        echo "404.html";
    }

?>
