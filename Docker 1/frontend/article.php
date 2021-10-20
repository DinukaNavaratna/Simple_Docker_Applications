<?php

include_once("../backend/article.php");
include_once("page_content/navbar.php");
include_once("page_content/article_header.php");
if($response == "success"){
    include_once("page_content/article_body.php");
}
include_once("page_content/footer.php");

?>