<?php
include './inc/function.php';

$id = $_GET['id'];
$contacts = readContacts();
$filteredContacts = array_filter($contacts, fn($c) => $c['id'] == $id);
$contact = !empty($filteredContacts) ? reset($filteredContacts) : null;

if (!$contact) {
    die("Kontakti nuk u gjet!");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];

    updateContact($id, $firstName, $lastName);
    header('Location: readContac.php'); // Ridrejto pas përditësimit
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ndrysho Kontakt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .back-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
            color: #4CAF50;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Ndrysho Kontakt</h1>
    <form method="POST" action="updateContac.php?id=<?= htmlspecialchars($id) ?>">
        <label for="first_name">Emri:</label>
        <input type="text" name="first_name" id="first_name" value="<?= htmlspecialchars($contact['first_name']) ?>" required>

        <label for="last_name">Mbiemri:</label>
        <input type="text" name="last_name" id="last_name" value="<?= htmlspecialchars($contact['last_name']) ?>" required>

        <a href="./readContac.php"> <button      type="submit">Përditëso</button></a>
       
       
    </form>
    <a href="read.php" class="back-link">Kthehu te Lista e Kontakteve</a>
</body>
</html>