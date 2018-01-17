<?php
include("database.php");

if(isset($_POST)){

    (new database)->add_forum();
}


