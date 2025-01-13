<?php

if (!$_SERVER["REQUEST_METHOD"]=="POST") {
    echo "bo";
}else {
    header("Location: ./signUp.html");
    die();
}