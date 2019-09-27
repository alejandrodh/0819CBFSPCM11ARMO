<?php
session_start();
$_SESSION["datos"] = $_COOKIE["nombreDelaCookie"];
var_dump($_COOKIE, $_SESSION);
