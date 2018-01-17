<?php
include("topics.php");
include("database.php");
session_start();


$cat = (new database)->getTopics($_SESSION['topicCategorie']);


echo json_encode($cat);

