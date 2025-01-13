<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    echo "hello";
}else {
    echo "fail";
    // header("Location: ./signUp.html");
    // die();
}