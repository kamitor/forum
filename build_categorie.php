<?php
session_start();
include("categorie.php");
include("database.php");


$cat = (new database)->getCategory($_POST['catForum']);
//$cat = (new database)->getCategory("25");

echo json_encode($cat);

