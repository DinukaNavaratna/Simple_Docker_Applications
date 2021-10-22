<?php

    header('Access-Control-Allow-Origin: *');
    require_once 'db_con.php';
    try {
        $sql = "SELECT COUNT(id) as tot FROM urls";
        $results = $conn->query($sql);
        $result = $results->fetch_row();
        $total = $result[0];

        $sql = "SELECT COUNT(id) as tot FROM urls WHERE link LIKE '%google%';";
        $results = $conn->query($sql);
        $result = $results->fetch_row();
        $google = $result[0];

        $sql = "SELECT COUNT(id) as tot FROM urls WHERE link LIKE '%youtube%';";
        $results = $conn->query($sql);
        $result = $results->fetch_row();
        $youtube = $result[0];

        $sql = "SELECT COUNT(id) as tot FROM urls WHERE link LIKE '%stackoverflow%';";
        $results = $conn->query($sql);
        $result = $results->fetch_row();
        $stackoverflow = $result[0];

        $response = array($total, $google, $stackoverflow, $youtube);
    } catch(Exception $e) {
        $response = array(0, 0, 0, 0);
    }
    echo serialize($response);
    $conn->close();
?>