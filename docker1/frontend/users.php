<?php

$url = "backend-container/users.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = unserialize(curl_exec($ch));
curl_close($ch);

include_once("page_content/navbar.php");
include_once("page_content/users_header.php");
if($response[1] != "failed"){
    include_once("page_content/users_body.php");
}
include_once("page_content/footer.php");

?>
