<?php
session_start();
foreach ($_POST as $key => $value) {
    ${$key} = $value;
    $_SESSION[$key] = $value;
}