<?php
session_start();
if (isset($_SESSION["username"])) {
echo "dashboard " . $_SESSION["username"] . " ir " . $_SESSION["age"] . " vecs!";
}else{
    echo "hi guest";
}