<?php
require_once 'db.php'; // Lidhja me databazën

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $cardNumber = mysqli_real_escape_string($conn, $_POST['cardNumber']);
    $expiryDate = mysqli_real_escape_string($conn, $_POST['expiryDate']);
    $cvv = mysqli_real_escape_string($conn, $_POST['cvv']);
    $plan_name = mysqli_real_escape_string($conn, $_POST['plan_name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);

    // Shto të dhënat në tabelën subscriptions
    $sql = "INSERT INTO subscriptions (name, cardNumber, expiryDate, cvv) VALUES ('$name', '$cardNumber', '$expiryDate', '$cvv')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Payment Successful!</h2>";
        echo "<p>Thank you for subscribing to <strong>$plan_name</strong> for <strong>\$$price</strong>.</p>";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Invalid request!";
}

$conn->close();
?>
