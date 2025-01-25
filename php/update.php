<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM pricing_plans WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $plan_name = $_POST['plan_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $features = $_POST['features'];

    $sql = "UPDATE pricing_plans 
            SET plan_name='$plan_name', description='$description', price='$price', features='$features' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
