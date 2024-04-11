<?php



session_start();
$_SESSION["username"] = "krrrigga";
$_SESSION["age"] = 420;

echo "hello, " . $_SESSION["username"];