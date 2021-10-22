<?php

    if(isset($_GET['key'])){
        $url = "api/check.php?key=".$_GET['key'];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        echo "<script>window.location = '".$response."';</script>";
    } else {
        echo "<script>window.location = '404.html';</script>";
    }
?>
