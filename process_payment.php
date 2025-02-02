<?php
require_once 'db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $cardNumber = mysqli_real_escape_string($conn, $_POST['cardNumber']);
    $expiryDate = mysqli_real_escape_string($conn, $_POST['expiryDate']);
    $cvv = mysqli_real_escape_string($conn, $_POST['cvv']);
    $plan_name = mysqli_real_escape_string($conn, $_POST['plan_name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);

    
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
<style>
    
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #1f1c2c, #928DAB);
    text-align: center;
    margin: 0;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.payment-card {
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    padding: 30px;
    width: 420px;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    text-align: center;
    transition: 0.3s ease-in-out;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.payment-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
}

h2 {
    color: #fff;
    font-size: 26px;
    font-weight: bold;
}

p {
    color: #ddd;
    font-size: 16px;
    margin: 10px 0;
}

.payment-form {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-top: 20px;
}

input {
    padding: 12px;
    font-size: 16px;
    border: none;
    border-radius: 8px;
    width: 100%;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    outline: none;
    transition: 0.3s;
}

input::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

input:focus {
    background: rgba(255, 255, 255, 0.3);
    border: 1px solid white;
}

.payment-button {
    background: linear-gradient(135deg, #007BFF, #0056b3);
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    transition: 0.3s ease-in-out;
}

.payment-button:hover {
    background: linear-gradient(135deg, #0056b3, #004494);
    transform: scale(1.05);
}

.return-button {
    background: transparent;
    color: white;
    border: 1px solid white;
    padding: 10px 18px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 15px;
    transition: 0.3s ease-in-out;
}

.return-button:hover {
    background: white;
    color: #333;
}

@media (max-width: 768px) {
    .payment-card {
        width: 90%;
    }
}

</style>


<a href="cmimore.php"><button class="return-button">Return</button></a>
