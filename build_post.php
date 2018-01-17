<?php

include("post.php");
include("database.php");
session_start();


$cat = (new database)->getPosts($_POST['topic']);
//$cat = (new database)->getPosts("2");
echo json_encode($cat);

