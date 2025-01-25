<?php

include 'db.php';
$sql = "SELECT * FROM pricing_plans";
$result = $conn->query($sql);
?>