<?php
include './inc/function.php';

$id = $_GET['id'];

deleteContact($id);
header('Location: readContac.php'); // Ridrejto pas fshirjes
exit;
?>
