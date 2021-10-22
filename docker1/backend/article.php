<?php

$response = "Hi";

if(isset($_GET['id'])){
    $article_id = $_GET['id'];

    require_once 'db_con.php';
    try {
        $sql = "SELECT * FROM `articles` WHERE id=$article_id;";
        $results = $conn->query($sql);

        if($results->num_rows > 0){
	    $result = $results->fetch_row();
            $article_topic = $result[1];
            $article_url = $result[2];
        } else {
            $article_topic = "Article Not Found!";
            $article_url = "failed";
        }
    } catch(Exception $e) {
        $article_topic = "Error Occurred!<br>".$e->getMessage();
        $article_url = "failed";
    }
    $conn->close();
} else {
    $article_topic = '<script>window.location.href = "index.php";</script>';
    $article_url = "failed";
}

$response = array($article_topic, $article_url);
echo serialize($response);


?>
