<?php

include("database.php");
include("curl_request.php");
include_once ("post.php");
include_once("build_classes.php");

$topics = (new build_classes())->buildPost(10);

for($i = 0; $i < count($topics); $i++){
    echo $topics[$i];
}


