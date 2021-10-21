<?php

//include_once("backend-container/article.php");
if(isset($_GET['id'])){
	$url = "backend-container/article.php?id=".$_GET['id'];
	//$url = "http://15.207.187.84:8001/article.php?id=".$_GET['id'];
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = unserialize(curl_exec($ch));
	curl_close($ch);
} else {
	echo '<script>window.location.href = "index.php";</script>';
}

include_once("page_content/navbar.php");
include_once("page_content/article_header.php");
if($response[1] != "failed"){
    include_once("page_content/article_body.php");
}
include_once("page_content/footer.php");

?>
