<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $plan_id = $_POST['plan_id'];
    $plan_name = $_POST['plan_name'];
    $price = $_POST['price'];
} else {
    // Nëse nuk ka të dhëna, ridrejto te faqja kryesore
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }
        form {
            background: white;
            padding: 20px;
            display: inline-block;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        input, button {
            margin: 10px 0;
            padding: 10px;
            width: 90%;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h2>Enter Payment Details</h2>
    <p>You are subscribing to: <strong><?php echo htmlspecialchars($plan_name); ?></strong></p>
    <p>Price: <strong>$<?php echo htmlspecialchars($price); ?></strong></p>

    <form action="process_payment.php" method="POST">
        <input type="hidden" name="plan_id" value="<?php echo $plan_id; ?>">
        <input type="hidden" name="plan_name" value="<?php echo htmlspecialchars($plan_name); ?>">
        <input type="hidden" name="price" value="<?php echo htmlspecialchars($price); ?>">

        <input type="text" name="name" placeholder="Full Name" required>
        <input type="text" name="cardNumber" placeholder="Card Number" required>
        <input type="text" name="expiryDate" placeholder="Expiry Date (MM/YY)" required>
        <input type="text" name="cvv" placeholder="CVV" required>

        <button type="submit">Confirm Payment</button>
    </form>

</body>
</html>
