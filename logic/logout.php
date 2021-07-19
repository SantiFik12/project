<?php

require_once(dirname(__FILE__)."/../models/db.php");

$_SESSION = [];

if(isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}

session_destroy();

header('Location: ../index.php');
