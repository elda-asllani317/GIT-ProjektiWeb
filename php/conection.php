<?php


$host='localhost';
$dbName='project';
$username='Stina';
$password='Stina123';

try {
    $pdo=new PDO("mysql:host=$host;dbname=$dbName;$username,$password");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO:ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Fail " . $e->getMessage());   
}