<?php
session_start();
if ($_SERVER["REQUEST_METHOD"]=="POST") {
$firstname=$_POST["firstName"];
$lastname=$_POST["lastName"];
$email=$_POST["email"];
$pasi=$_POST["pasi"];
// $photo=$_FILES["photo"];




  

try {
    require_once "conection.php";

  // Handle file upload  
  $photoo=$_FILES["photo"]['name'];//name / emri origjinal i fileit
  $extention=explode(".",$photoo);//e ndan prej . //psh profile.jpg => ["profile", "jpg"].
  $newFileName=round(microtime(true)).'.'. end($extention);//uniqe file name 1672898456.jpg";
  $uploadpath="images/" . $newFileName;
  move_uploaded_file($_FILES['photo']["tmp_name"],$uploadpath);


     $sql="INSERT INTO users(username,lastname,email,password,photo_url)
     Values (:username,:lastname,:email,:password,:photo_url); ";




$st=$pdo->prepare($sql);//statename
$st->bindParam(":username",$firstname);
$st->bindParam(":lastname",$lastname);
$st->bindParam(":email",$email);
$st->bindParam(":password",$pasi);
$st->bindParam(":photo_url",$newFileName);

if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadPath)) {
    // Save the file name in the session
    $_SESSION['uploadedPhoto'] = $newFileName;

    // Redirect to the display page
    header("Location: ../signUp.php");
    exit();
}

$st->execute();//u submit user data
$pdo=null;//me nal conection
$st=null;//me nal conection
header("Location: ../signUp.html");
die();//ose exit();


} catch (PDOException $e) {
    die("Fail " .$e->getMessage());
}

}else {
    header("Location: ../signUp.php");
}