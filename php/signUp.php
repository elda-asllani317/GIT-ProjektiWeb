<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
$firstname=$_POST["firstName"];
$lastname=$_POST["lastName"];
$email=$_POST["email"];
$pasi=$_POST["pasi"];
$photo=$_POST["photo"];




  // Handle file upload
  if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
    $targetDir = "./image/"; // Directory to save uploaded files
    $fileName = basename($_FILES["photo"]["name"]);
    $targetFilePath = $targetDir . uniqid() . "_" . $fileName; // Unique filename
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    $allowedTypes = ["jpg", "jpeg", "png", "gif"];
try {
    require_once "conection.php";

     $sql="INSERT INTO users(username,lastname,email,password,photo_url)
     Values (:username,:lastname,:email,:password,:photo_url); ";




$st=$pdo->prepare($sql);//statename
$st->bindParam(":username",$firstname);
$st->bindParam(":lastname",$lastname);
$st->bindParam(":email",$email);
$st->bindParam(":password",$pasi);
$st->bindParam(":photo_url",$photo);


$st->execute();//u submit user data
$pdo=null;//me nal conection
$st=null;//me nal conection
header("Location: ../signUp.html");
die();//ose exit();


} catch (PDOException $e) {
    die("Fail " .$e->getMessage());
}

}else {
    header("Location: ../signUp.html");

}}