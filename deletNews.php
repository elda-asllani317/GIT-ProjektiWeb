<?php
include './inc/functionNew.php';

$id = $_GET['id'];

// Thirrja e funksionit për të fshirë lajmin
fshiLajm($id);

header("Location: readNews.php");
exit();
?>
