<?php

session_start();
$_SESSION = [];
session_unset();
session_destroy();
$_COOKIE = [];
header("Location: Login.php");

?>