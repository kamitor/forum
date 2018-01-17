<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>love</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="form_catch.js"></script>
</head>
<?php
include("database.php");
include("curl_request.php");
include_once ("forum.php");
include_once ("categorie.php");
include_once ("topics.php");
include_once ("post.php");
include_once("build_classes.php");

print_r($_SESSION);
/*

$json1 = (new curl_request())->curlPost(['name' => 'test'], "http://127.0.0.1/forum_extern/build_categorie.php");
$array1 = json_decode($json1, true);
$forum = new forum($array1['name'], $array1['description']);
echo $forum;

*/
/*
$fora = (new build_classes())->buildForum("test");

echo $fora;

$catz = (new build_classes())->buildCategorie(29);

echo $catz[0];
echo $catz[1];


$test = (new build_classes())->buildTopic(10);
echo $test[0];
echo $test[1];

$posts = (new build_classes())->buildPost(2);
echo $posts[0];
echo $posts[1];
*/



?>
<h4>Hiermee maak je een database</h4>
<form method='post' action=postForum.php id='forum_input' class='form'>
    <input style='height:40px'  type='text' name='forumName' placeholder="name" size=40><br>
    <input style='height:40px' type='text' name='forumDescription' placeholder="description" size=40><br>
<input type='submit' value='submit'>
</form>

<br>
<br>

<h4>Hiermee maak je een categorie</h4>
<form method='post' action=postCategorie.php id='forum_input' class='form'>
    <input style='height:40px' type='text' name='catName' placeholder="name" size=40><br>
    <input style='height:40px' type='text' name='catDescription' placeholder="description" size=40><br>
    <input style='height:40px' type='text' name='catForum' placeholder="forum" size=40><br>
    <input type='submit' value='submit'>
</form>

<h4>Hiermee maak je een topic</h4>
<form method='post' action=postTopic.php id='forum_input' class='form'>
    <input style='height:40px' type='text' name='topicName' placeholder="name" size=40><br>
    <input style='height:40px' type='text' name='topicDescription' placeholder="description" size=40><br>
    <input style='height:40px' type='text' name='topicCategorie' placeholder="categorie-10" size=40><br>
    <input style='height:40px' type='text' name='user' placeholder="user-1" size=40><br>
    <input type='submit' value='submit'>
</form>

<h4>Hiermee maak je een post</h4>
<form method='post' action=postPost.php id='forum_input' class='form'>
    <input style='height:40px' type='text' name='body' placeholder="body" size=40><br>
    <input style='height:40px' type='text' name='user' placeholder="user-1" size=40><br>
    <input style='height:40px' type='text' name='topic' placeholder="topic-3" size=40><br>
    <input type='submit' value='submit'>
</form>





</html>
