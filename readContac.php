<?php
include './inc/function.php';
$contacts = readContacts();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista e Kontakteve</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        a {
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        .btn {
            display: inline-block;
            padding: 8px 12px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Lista e Kontakteve</h1>
    <a href="./contac.php" class="btn">Krijo Kontakt të Ri</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Veprime</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
                <tr>
                    <td><?= htmlspecialchars($contact['id']) ?></td>
                    <td><?= htmlspecialchars($contact['first_name']) ?></td>
                    <td><?= htmlspecialchars($contact['last_name']) ?></td>
                    <td>
                        <a href="updateContac.php?id=<?= htmlspecialchars($contact['id']) ?>">Ndrysho</a>
                        |
                        <a href="./deletContac.php?id=<?= htmlspecialchars($contact['id']) ?>" style="color: red;">Fshi</a>


                      
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>