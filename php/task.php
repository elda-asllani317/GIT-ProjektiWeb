<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$mainInput=$_POST["mainInput"];


   try {
require_once "conection.php";

    // Proceed with the task insertion
    $sql = "INSERT INTO tasks (username) VALUES (:username)";
    $st = $pdo->prepare($sql);
    $st->bindParam(":username", $mainInput);

    $st->execute();
    $pdo=null;
    $st=null;

    header("Location: ../getDemo.php");
    exit();
   } catch (PDOException $e) {
    die("Fail " .$e->getMessage());
}

} else {
    header("Location: ../getDemo.php");
    exit();
}
