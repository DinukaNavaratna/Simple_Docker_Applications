<?php

if(isset($_GET['id'])){
    $article_id = $_GET['id'];

    require_once 'db_con.php';
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM `articles` WHERE id=$article_id;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        // set the resulting array to associative
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($results) > 0){
            $article_topic = $results[0]['topic'];
            $article_url = $results[0]['url'];
        } else {
            $article_topic = "Article Not Found!";
            $response = "failed";
        }
    } catch(Exception $e) {
        $article_topic = "Error Occurred!<br>".$e->getMessage();
        $response = "failed";
    }
    $conn = null;
    $response = "success";
} else {
    $article_topic = '<script>window.location.href = "index.php";</script>';
    $response = "failed";
}

?>