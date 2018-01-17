<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>forum</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="form_catch.js"></script>
</head>
<?php
include_once("build_classes.php");
include_once("curl_request.php");
include_once("forum.php");
?>
<body>

<h4>Hiermee maak je een database</h4>
<form method='post' action=postForum.php id='forum_input' class='form'>
    <input style='height:40px' id="database-name" type='text' name='name' placeholder="name" size=40><br>
    <input style='height:40px' type='text' name='description' placeholder="description" size=40><br>
    <input type='submit' value='submit'>
</form>

<script>
    var name = "<?php echo $name; ?>";
</script>
<?php

(new build_classes())->buildForum($name);



?>


</body>
</html>
