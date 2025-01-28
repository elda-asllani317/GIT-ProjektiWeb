<?php
include './inc/function.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];

    createContact($firstName, $lastName);
    header('Location: readContac.php'); // Ridrejto pas krijimit
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Krijo Kontakt</title>
</head>
<body>
    <h1>Krijo Kontakt</h1>
    <form method="POST" action="createContac.php">
        <label for="first_name">Emri:</label>
        <input type="text" name="first_name" id="first_name" required>
        <br>
        <label for="last_name">Mbiemri:</label>
        <input type="text" name="last_name" id="last_name" required>
        <br>
        <button type="submit">Krijo</button>
    </form>
</body>
</html>